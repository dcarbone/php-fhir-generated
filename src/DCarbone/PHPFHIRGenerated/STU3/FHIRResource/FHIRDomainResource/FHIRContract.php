<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContractResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;

/**
 * A formal agreement between parties regarding the conduct of business, exchange
 * of information or other matters.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRContract
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRContract extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_APPLIES = 'applies';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TOPIC = 'topic';
    const FIELD_AUTHORITY = 'authority';
    const FIELD_DOMAIN = 'domain';
    const FIELD_TYPE = 'type';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_ACTION = 'action';
    const FIELD_ACTION_REASON = 'actionReason';
    const FIELD_DECISION_TYPE = 'decisionType';
    const FIELD_CONTENT_DERIVATIVE = 'contentDerivative';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_AGENT = 'agent';
    const FIELD_SIGNER = 'signer';
    const FIELD_VALUED_ITEM = 'valuedItem';
    const FIELD_TERM = 'term';
    const FIELD_BINDING_ATTACHMENT = 'bindingAttachment';
    const FIELD_BINDING_REFERENCE = 'bindingReference';
    const FIELD_FRIENDLY = 'friendly';
    const FIELD_LEGAL = 'legal';
    const FIELD_RULE = 'rule';

    /** @var string */
    private $_xmlns = '';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContractResourceStatusCodes
     */
    protected $status = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract was issued.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $issued = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $applies = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $subject = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $topic = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $authority = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $domain = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract such as an insurance policy, real estate contract, a will,
     * power of attorny, Privacy or Security policy , trust framework agreement, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific type or specialization of an overarching or more general contract
     * such as auto insurance, home owner insurance, prenupial agreement,
     * Advanced-Directive, or privacy consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $subType = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $action = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for action stipulated by this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $actionReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of decision made by a grantor with respect to an offer made by a
     * grantee.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $decisionType = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $contentDerivative = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $securityLabel = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent[]
     */
    protected $agent = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[]
     */
    protected $signer = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Valued Item List.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[]
     */
    protected $valuedItem = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    protected $term = [];

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $bindingAttachment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $bindingReference = null;

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[]
     */
    protected $friendly = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[]
     */
    protected $legal = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[]
     */
    protected $rule = [];

    /**
     * Validation map for fields in type Contract
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = isset($data[self::FIELD_STATUS]) ? $data[self::FIELD_STATUS] : null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $ext = $data[self::FIELD_STATUS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRContractResourceStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRContractResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRContractResourceStatusCodes([FHIRContractResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRContractResourceStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            $value = isset($data[self::FIELD_ISSUED]) ? $data[self::FIELD_ISSUED] : null;
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) ? $ext = $data[self::FIELD_ISSUED_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssued(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_APPLIES])) {
            if ($data[self::FIELD_APPLIES] instanceof FHIRPeriod) {
                $this->setApplies($data[self::FIELD_APPLIES]);
            } else {
                $this->setApplies(new FHIRPeriod($data[self::FIELD_APPLIES]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TOPIC])) {
            if (is_array($data[self::FIELD_TOPIC])) {
                foreach($data[self::FIELD_TOPIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addTopic($v);
                    } else {
                        $this->addTopic(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_TOPIC] instanceof FHIRReference) {
                $this->addTopic($data[self::FIELD_TOPIC]);
            } else {
                $this->addTopic(new FHIRReference($data[self::FIELD_TOPIC]));
            }
        }
        if (isset($data[self::FIELD_AUTHORITY])) {
            if (is_array($data[self::FIELD_AUTHORITY])) {
                foreach($data[self::FIELD_AUTHORITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAuthority($v);
                    } else {
                        $this->addAuthority(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->addAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->addAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if (is_array($data[self::FIELD_DOMAIN])) {
                foreach($data[self::FIELD_DOMAIN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDomain($v);
                    } else {
                        $this->addDomain(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DOMAIN] instanceof FHIRReference) {
                $this->addDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->addDomain(new FHIRReference($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUB_TYPE])) {
            if (is_array($data[self::FIELD_SUB_TYPE])) {
                foreach($data[self::FIELD_SUB_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubType($v);
                    } else {
                        $this->addSubType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->addSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->addSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_ACTION_REASON])) {
            if (is_array($data[self::FIELD_ACTION_REASON])) {
                foreach($data[self::FIELD_ACTION_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addActionReason($v);
                    } else {
                        $this->addActionReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION_REASON] instanceof FHIRCodeableConcept) {
                $this->addActionReason($data[self::FIELD_ACTION_REASON]);
            } else {
                $this->addActionReason(new FHIRCodeableConcept($data[self::FIELD_ACTION_REASON]));
            }
        }
        if (isset($data[self::FIELD_DECISION_TYPE])) {
            if ($data[self::FIELD_DECISION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setDecisionType($data[self::FIELD_DECISION_TYPE]);
            } else {
                $this->setDecisionType(new FHIRCodeableConcept($data[self::FIELD_DECISION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_DERIVATIVE])) {
            if ($data[self::FIELD_CONTENT_DERIVATIVE] instanceof FHIRCodeableConcept) {
                $this->setContentDerivative($data[self::FIELD_CONTENT_DERIVATIVE]);
            } else {
                $this->setContentDerivative(new FHIRCodeableConcept($data[self::FIELD_CONTENT_DERIVATIVE]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL])) {
            if (is_array($data[self::FIELD_SECURITY_LABEL])) {
                foreach($data[self::FIELD_SECURITY_LABEL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addSecurityLabel($v);
                    } else {
                        $this->addSecurityLabel(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCoding) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCoding($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($data[self::FIELD_AGENT])) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRContractAgent($v));
                    }
                }
            } elseif ($data[self::FIELD_AGENT] instanceof FHIRContractAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRContractAgent($data[self::FIELD_AGENT]));
            }
        }
        if (isset($data[self::FIELD_SIGNER])) {
            if (is_array($data[self::FIELD_SIGNER])) {
                foreach($data[self::FIELD_SIGNER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractSigner) {
                        $this->addSigner($v);
                    } else {
                        $this->addSigner(new FHIRContractSigner($v));
                    }
                }
            } elseif ($data[self::FIELD_SIGNER] instanceof FHIRContractSigner) {
                $this->addSigner($data[self::FIELD_SIGNER]);
            } else {
                $this->addSigner(new FHIRContractSigner($data[self::FIELD_SIGNER]));
            }
        }
        if (isset($data[self::FIELD_VALUED_ITEM])) {
            if (is_array($data[self::FIELD_VALUED_ITEM])) {
                foreach($data[self::FIELD_VALUED_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractValuedItem) {
                        $this->addValuedItem($v);
                    } else {
                        $this->addValuedItem(new FHIRContractValuedItem($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUED_ITEM] instanceof FHIRContractValuedItem) {
                $this->addValuedItem($data[self::FIELD_VALUED_ITEM]);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem($data[self::FIELD_VALUED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_TERM])) {
            if (is_array($data[self::FIELD_TERM])) {
                foreach($data[self::FIELD_TERM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractTerm) {
                        $this->addTerm($v);
                    } else {
                        $this->addTerm(new FHIRContractTerm($v));
                    }
                }
            } elseif ($data[self::FIELD_TERM] instanceof FHIRContractTerm) {
                $this->addTerm($data[self::FIELD_TERM]);
            } else {
                $this->addTerm(new FHIRContractTerm($data[self::FIELD_TERM]));
            }
        }
        if (isset($data[self::FIELD_BINDING_ATTACHMENT])) {
            if ($data[self::FIELD_BINDING_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setBindingAttachment($data[self::FIELD_BINDING_ATTACHMENT]);
            } else {
                $this->setBindingAttachment(new FHIRAttachment($data[self::FIELD_BINDING_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_BINDING_REFERENCE])) {
            if ($data[self::FIELD_BINDING_REFERENCE] instanceof FHIRReference) {
                $this->setBindingReference($data[self::FIELD_BINDING_REFERENCE]);
            } else {
                $this->setBindingReference(new FHIRReference($data[self::FIELD_BINDING_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_FRIENDLY])) {
            if (is_array($data[self::FIELD_FRIENDLY])) {
                foreach($data[self::FIELD_FRIENDLY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractFriendly) {
                        $this->addFriendly($v);
                    } else {
                        $this->addFriendly(new FHIRContractFriendly($v));
                    }
                }
            } elseif ($data[self::FIELD_FRIENDLY] instanceof FHIRContractFriendly) {
                $this->addFriendly($data[self::FIELD_FRIENDLY]);
            } else {
                $this->addFriendly(new FHIRContractFriendly($data[self::FIELD_FRIENDLY]));
            }
        }
        if (isset($data[self::FIELD_LEGAL])) {
            if (is_array($data[self::FIELD_LEGAL])) {
                foreach($data[self::FIELD_LEGAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractLegal) {
                        $this->addLegal($v);
                    } else {
                        $this->addLegal(new FHIRContractLegal($v));
                    }
                }
            } elseif ($data[self::FIELD_LEGAL] instanceof FHIRContractLegal) {
                $this->addLegal($data[self::FIELD_LEGAL]);
            } else {
                $this->addLegal(new FHIRContractLegal($data[self::FIELD_LEGAL]));
            }
        }
        if (isset($data[self::FIELD_RULE])) {
            if (is_array($data[self::FIELD_RULE])) {
                foreach($data[self::FIELD_RULE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractRule) {
                        $this->addRule($v);
                    } else {
                        $this->addRule(new FHIRContractRule($v));
                    }
                }
            } elseif ($data[self::FIELD_RULE] instanceof FHIRContractRule) {
                $this->addRule($data[self::FIELD_RULE]);
            } else {
                $this->addRule(new FHIRContractRule($data[self::FIELD_RULE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Contract{$xmlns}></Contract>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContractResourceStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRContractResourceStatusCodes $status = null)
    {
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract was issued.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract was issued.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued($issued = null)
    {
        if (null !== $issued && !($issued instanceof FHIRDateTime)) {
            $issued = new FHIRDateTime($issued);
        }
        $this->_trackValueSet($this->issued, $issued);
        $this->issued = $issued;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $applies
     * @return static
     */
    public function setApplies(FHIRPeriod $applies = null)
    {
        $this->_trackValueSet($this->applies, $applies);
        $this->applies = $applies;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function addSubject(FHIRReference $subject = null)
    {
        $this->_trackValueAdded();
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $subject
     * @return static
     */
    public function setSubject(array $subject = [])
    {
        if ([] !== $this->subject) {
            $this->_trackValuesRemoved(count($this->subject));
            $this->subject = [];
        }
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $topic
     * @return static
     */
    public function addTopic(FHIRReference $topic = null)
    {
        $this->_trackValueAdded();
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this agreement.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $topic
     * @return static
     */
    public function setTopic(array $topic = [])
    {
        if ([] !== $this->topic) {
            $this->_trackValuesRemoved(count($this->topic));
            $this->topic = [];
        }
        if ([] === $topic) {
            return $this;
        }
        foreach($topic as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTopic($v);
            } else {
                $this->addTopic(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $authority
     * @return static
     */
    public function addAuthority(FHIRReference $authority = null)
    {
        $this->_trackValueAdded();
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $authority
     * @return static
     */
    public function setAuthority(array $authority = [])
    {
        if ([] !== $this->authority) {
            $this->_trackValuesRemoved(count($this->authority));
            $this->authority = [];
        }
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $domain
     * @return static
     */
    public function addDomain(FHIRReference $domain = null)
    {
        $this->_trackValueAdded();
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $domain
     * @return static
     */
    public function setDomain(array $domain = [])
    {
        if ([] !== $this->domain) {
            $this->_trackValuesRemoved(count($this->domain));
            $this->domain = [];
        }
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract such as an insurance policy, real estate contract, a will,
     * power of attorny, Privacy or Security policy , trust framework agreement, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract such as an insurance policy, real estate contract, a will,
     * power of attorny, Privacy or Security policy , trust framework agreement, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific type or specialization of an overarching or more general contract
     * such as auto insurance, home owner insurance, prenupial agreement,
     * Advanced-Directive, or privacy consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific type or specialization of an overarching or more general contract
     * such as auto insurance, home owner insurance, prenupial agreement,
     * Advanced-Directive, or privacy consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function addSubType(FHIRCodeableConcept $subType = null)
    {
        $this->_trackValueAdded();
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific type or specialization of an overarching or more general contract
     * such as auto insurance, home owner insurance, prenupial agreement,
     * Advanced-Directive, or privacy consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $subType
     * @return static
     */
    public function setSubType(array $subType = [])
    {
        if ([] !== $this->subType) {
            $this->_trackValuesRemoved(count($this->subType));
            $this->subType = [];
        }
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(FHIRCodeableConcept $action = null)
    {
        $this->_trackValueAdded();
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $action
     * @return static
     */
    public function setAction(array $action = [])
    {
        if ([] !== $this->action) {
            $this->_trackValuesRemoved(count($this->action));
            $this->action = [];
        }
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for action stipulated by this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason()
    {
        return $this->actionReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for action stipulated by this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $actionReason
     * @return static
     */
    public function addActionReason(FHIRCodeableConcept $actionReason = null)
    {
        $this->_trackValueAdded();
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for action stipulated by this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $actionReason
     * @return static
     */
    public function setActionReason(array $actionReason = [])
    {
        if ([] !== $this->actionReason) {
            $this->_trackValuesRemoved(count($this->actionReason));
            $this->actionReason = [];
        }
        if ([] === $actionReason) {
            return $this;
        }
        foreach($actionReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addActionReason($v);
            } else {
                $this->addActionReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of decision made by a grantor with respect to an offer made by a
     * grantee.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDecisionType()
    {
        return $this->decisionType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of decision made by a grantor with respect to an offer made by a
     * grantee.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $decisionType
     * @return static
     */
    public function setDecisionType(FHIRCodeableConcept $decisionType = null)
    {
        $this->_trackValueSet($this->decisionType, $decisionType);
        $this->decisionType = $decisionType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $contentDerivative
     * @return static
     */
    public function setContentDerivative(FHIRCodeableConcept $contentDerivative = null)
    {
        $this->_trackValueSet($this->contentDerivative, $contentDerivative);
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $securityLabel
     * @return static
     */
    public function addSecurityLabel(FHIRCoding $securityLabel = null)
    {
        $this->_trackValueAdded();
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $securityLabel
     * @return static
     */
    public function setSecurityLabel(array $securityLabel = [])
    {
        if ([] !== $this->securityLabel) {
            $this->_trackValuesRemoved(count($this->securityLabel));
            $this->securityLabel = [];
        }
        if ([] === $securityLabel) {
            return $this;
        }
        foreach($securityLabel as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addSecurityLabel($v);
            } else {
                $this->addSecurityLabel(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent $agent
     * @return static
     */
    public function addAgent(FHIRContractAgent $agent = null)
    {
        $this->_trackValueAdded();
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent[] $agent
     * @return static
     */
    public function setAgent(array $agent = [])
    {
        if ([] !== $this->agent) {
            $this->_trackValuesRemoved(count($this->agent));
            $this->agent = [];
        }
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            if ($v instanceof FHIRContractAgent) {
                $this->addAgent($v);
            } else {
                $this->addAgent(new FHIRContractAgent($v));
            }
        }
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner $signer
     * @return static
     */
    public function addSigner(FHIRContractSigner $signer = null)
    {
        $this->_trackValueAdded();
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[] $signer
     * @return static
     */
    public function setSigner(array $signer = [])
    {
        if ([] !== $this->signer) {
            $this->_trackValuesRemoved(count($this->signer));
            $this->signer = [];
        }
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
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Valued Item List.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Valued Item List.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem $valuedItem
     * @return static
     */
    public function addValuedItem(FHIRContractValuedItem $valuedItem = null)
    {
        $this->_trackValueAdded();
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Valued Item List.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[] $valuedItem
     * @return static
     */
    public function setValuedItem(array $valuedItem = [])
    {
        if ([] !== $this->valuedItem) {
            $this->_trackValuesRemoved(count($this->valuedItem));
            $this->valuedItem = [];
        }
        if ([] === $valuedItem) {
            return $this;
        }
        foreach($valuedItem as $v) {
            if ($v instanceof FHIRContractValuedItem) {
                $this->addValuedItem($v);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem($v));
            }
        }
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $term
     * @return static
     */
    public function addTerm(FHIRContractTerm $term = null)
    {
        $this->_trackValueAdded();
        $this->term[] = $term;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[] $term
     * @return static
     */
    public function setTerm(array $term = [])
    {
        if ([] !== $this->term) {
            $this->_trackValuesRemoved(count($this->term));
            $this->term = [];
        }
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getBindingAttachment()
    {
        return $this->bindingAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $bindingAttachment
     * @return static
     */
    public function setBindingAttachment(FHIRAttachment $bindingAttachment = null)
    {
        $this->_trackValueSet($this->bindingAttachment, $bindingAttachment);
        $this->bindingAttachment = $bindingAttachment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getBindingReference()
    {
        return $this->bindingReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $bindingReference
     * @return static
     */
    public function setBindingReference(FHIRReference $bindingReference = null)
    {
        $this->_trackValueSet($this->bindingReference, $bindingReference);
        $this->bindingReference = $bindingReference;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly $friendly
     * @return static
     */
    public function addFriendly(FHIRContractFriendly $friendly = null)
    {
        $this->_trackValueAdded();
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[] $friendly
     * @return static
     */
    public function setFriendly(array $friendly = [])
    {
        if ([] !== $this->friendly) {
            $this->_trackValuesRemoved(count($this->friendly));
            $this->friendly = [];
        }
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
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal $legal
     * @return static
     */
    public function addLegal(FHIRContractLegal $legal = null)
    {
        $this->_trackValueAdded();
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[] $legal
     * @return static
     */
    public function setLegal(array $legal = [])
    {
        if ([] !== $this->legal) {
            $this->_trackValuesRemoved(count($this->legal));
            $this->legal = [];
        }
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
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule $rule
     * @return static
     */
    public function addRule(FHIRContractRule $rule = null)
    {
        $this->_trackValueAdded();
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[] $rule
     * @return static
     */
    public function setRule(array $rule = [])
    {
        if ([] !== $this->rule) {
            $this->_trackValuesRemoved(count($this->rule));
            $this->rule = [];
        }
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getApplies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLIES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TOPIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAuthority())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHORITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDomain())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOMAIN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUB_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDecisionType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECISION_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentDerivative())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_DERIVATIVE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSigner())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SIGNER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTerm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TERM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBindingAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBindingReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFriendly())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FRIENDLY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLegal())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LEGAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RULE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES])) {
            $v = $this->getApplies();
            foreach($validationRules[self::FIELD_APPLIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_APPLIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES])) {
                        $errs[self::FIELD_APPLIES] = [];
                    }
                    $errs[self::FIELD_APPLIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORITY])) {
            $v = $this->getAuthority();
            foreach($validationRules[self::FIELD_AUTHORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORITY])) {
                        $errs[self::FIELD_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_TYPE])) {
            $v = $this->getSubType();
            foreach($validationRules[self::FIELD_SUB_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_SUB_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_TYPE])) {
                        $errs[self::FIELD_SUB_TYPE] = [];
                    }
                    $errs[self::FIELD_SUB_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION_REASON])) {
            $v = $this->getActionReason();
            foreach($validationRules[self::FIELD_ACTION_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_ACTION_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION_REASON])) {
                        $errs[self::FIELD_ACTION_REASON] = [];
                    }
                    $errs[self::FIELD_ACTION_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECISION_TYPE])) {
            $v = $this->getDecisionType();
            foreach($validationRules[self::FIELD_DECISION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_DECISION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECISION_TYPE])) {
                        $errs[self::FIELD_DECISION_TYPE] = [];
                    }
                    $errs[self::FIELD_DECISION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_DERIVATIVE])) {
            $v = $this->getContentDerivative();
            foreach($validationRules[self::FIELD_CONTENT_DERIVATIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_CONTENT_DERIVATIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_DERIVATIVE])) {
                        $errs[self::FIELD_CONTENT_DERIVATIVE] = [];
                    }
                    $errs[self::FIELD_CONTENT_DERIVATIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL])) {
                        $errs[self::FIELD_SECURITY_LABEL] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIGNER])) {
            $v = $this->getSigner();
            foreach($validationRules[self::FIELD_SIGNER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_SIGNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIGNER])) {
                        $errs[self::FIELD_SIGNER] = [];
                    }
                    $errs[self::FIELD_SIGNER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUED_ITEM])) {
            $v = $this->getValuedItem();
            foreach($validationRules[self::FIELD_VALUED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_VALUED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUED_ITEM])) {
                        $errs[self::FIELD_VALUED_ITEM] = [];
                    }
                    $errs[self::FIELD_VALUED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TERM])) {
            $v = $this->getTerm();
            foreach($validationRules[self::FIELD_TERM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_TERM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TERM])) {
                        $errs[self::FIELD_TERM] = [];
                    }
                    $errs[self::FIELD_TERM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING_ATTACHMENT])) {
            $v = $this->getBindingAttachment();
            foreach($validationRules[self::FIELD_BINDING_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_BINDING_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING_ATTACHMENT])) {
                        $errs[self::FIELD_BINDING_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_BINDING_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING_REFERENCE])) {
            $v = $this->getBindingReference();
            foreach($validationRules[self::FIELD_BINDING_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_BINDING_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING_REFERENCE])) {
                        $errs[self::FIELD_BINDING_REFERENCE] = [];
                    }
                    $errs[self::FIELD_BINDING_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRIENDLY])) {
            $v = $this->getFriendly();
            foreach($validationRules[self::FIELD_FRIENDLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_FRIENDLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRIENDLY])) {
                        $errs[self::FIELD_FRIENDLY] = [];
                    }
                    $errs[self::FIELD_FRIENDLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL])) {
            $v = $this->getLegal();
            foreach($validationRules[self::FIELD_LEGAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_LEGAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL])) {
                        $errs[self::FIELD_LEGAL] = [];
                    }
                    $errs[self::FIELD_LEGAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULE])) {
            $v = $this->getRule();
            foreach($validationRules[self::FIELD_RULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT, self::FIELD_RULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULE])) {
                        $errs[self::FIELD_RULE] = [];
                    }
                    $errs[self::FIELD_RULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRContract::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContract::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRContract(null);
        } elseif (!is_object($type) || !($type instanceof FHIRContract)) {
            throw new \RuntimeException(sprintf(
                'FHIRContract::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRContractResourceStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUED === $n->nodeName) {
                $type->setIssued(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_APPLIES === $n->nodeName) {
                $type->setApplies(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->addSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TOPIC === $n->nodeName) {
                $type->addTopic(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHORITY === $n->nodeName) {
                $type->addAuthority(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DOMAIN === $n->nodeName) {
                $type->addDomain(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_TYPE === $n->nodeName) {
                $type->addSubType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ACTION === $n->nodeName) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ACTION_REASON === $n->nodeName) {
                $type->addActionReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DECISION_TYPE === $n->nodeName) {
                $type->setDecisionType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT_DERIVATIVE === $n->nodeName) {
                $type->setContentDerivative(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SECURITY_LABEL === $n->nodeName) {
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_AGENT === $n->nodeName) {
                $type->addAgent(FHIRContractAgent::xmlUnserialize($n));
            } elseif (self::FIELD_SIGNER === $n->nodeName) {
                $type->addSigner(FHIRContractSigner::xmlUnserialize($n));
            } elseif (self::FIELD_VALUED_ITEM === $n->nodeName) {
                $type->addValuedItem(FHIRContractValuedItem::xmlUnserialize($n));
            } elseif (self::FIELD_TERM === $n->nodeName) {
                $type->addTerm(FHIRContractTerm::xmlUnserialize($n));
            } elseif (self::FIELD_BINDING_ATTACHMENT === $n->nodeName) {
                $type->setBindingAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_BINDING_REFERENCE === $n->nodeName) {
                $type->setBindingReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_FRIENDLY === $n->nodeName) {
                $type->addFriendly(FHIRContractFriendly::xmlUnserialize($n));
            } elseif (self::FIELD_LEGAL === $n->nodeName) {
                $type->addLegal(FHIRContractLegal::xmlUnserialize($n));
            } elseif (self::FIELD_RULE === $n->nodeName) {
                $type->addRule(FHIRContractRule::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ISSUED);
        if (null !== $n) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIssued($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssued())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ISSUED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getApplies())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_APPLIES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TOPIC);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAuthority())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AUTHORITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDomain())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DOMAIN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUB_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACTION_REASON);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDecisionType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECISION_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContentDerivative())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_DERIVATIVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SECURITY_LABEL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AGENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSigner())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SIGNER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALUED_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTerm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TERM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getBindingAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BINDING_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBindingReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BINDING_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getFriendly())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FRIENDLY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getLegal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LEGAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RULE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRContractResourceStatusCodes::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STATUS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ISSUED] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ISSUED_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getApplies())) {
            $a[self::FIELD_APPLIES] = $v;
        }
        if ([] !== ($vs = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBJECT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTopic())) {
            $a[self::FIELD_TOPIC] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TOPIC][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAuthority())) {
            $a[self::FIELD_AUTHORITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AUTHORITY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOMAIN][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUB_TYPE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            $a[self::FIELD_ACTION_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getDecisionType())) {
            $a[self::FIELD_DECISION_TYPE] = $v;
        }
        if (null !== ($v = $this->getContentDerivative())) {
            $a[self::FIELD_CONTENT_DERIVATIVE] = $v;
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            $a[self::FIELD_SECURITY_LABEL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SECURITY_LABEL][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            $a[self::FIELD_AGENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AGENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSigner())) {
            $a[self::FIELD_SIGNER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SIGNER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            $a[self::FIELD_VALUED_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUED_ITEM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTerm())) {
            $a[self::FIELD_TERM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TERM][] = $v;
            }
        }
        if (null !== ($v = $this->getBindingAttachment())) {
            $a[self::FIELD_BINDING_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getBindingReference())) {
            $a[self::FIELD_BINDING_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getFriendly())) {
            $a[self::FIELD_FRIENDLY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FRIENDLY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getLegal())) {
            $a[self::FIELD_LEGAL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LEGAL][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            $a[self::FIELD_RULE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RULE][] = $v;
            }
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}