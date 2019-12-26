<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentState;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies
 * identified recipient(s) or recipient role(s) to perform one or more actions
 * within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRConsent
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRConsent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT;
    const FIELD_ACTION = 'action';
    const FIELD_ACTOR = 'actor';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONSENTING_PARTY = 'consentingParty';
    const FIELD_DATA = 'data';
    const FIELD_DATA_PERIOD = 'dataPeriod';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_EXCEPT = 'except';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERIOD = 'period';
    const FIELD_POLICY = 'policy';
    const FIELD_POLICY_RULE = 'policyRule';
    const FIELD_POLICY_RULE_EXT = '_policyRule';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_SOURCE_ATTACHMENT = 'sourceAttachment';
    const FIELD_SOURCE_IDENTIFIER = 'sourceIdentifier';
    const FIELD_SOURCE_REFERENCE = 'sourceReference';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $action = [];

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    protected $actor = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $consentingParty = [];

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    protected $data = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $dataPeriod = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $dateTime = null;

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[]
     */
    protected $except = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $organization = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    protected $policy = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $policyRule = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $purpose = [];

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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $sourceAttachment = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $sourceIdentifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $sourceReference = null;

    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentState
     */
    protected $status = null;

    /**
     * Validation map for fields in type Consent
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRConsent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
            } else if ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_ACTOR])) {
            if (is_array($data[self::FIELD_ACTOR])) {
                foreach($data[self::FIELD_ACTOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentActor) {
                        $this->addActor($v);
                    } else {
                        $this->addActor(new FHIRConsentActor($v));
                    }
                }
            } else if ($data[self::FIELD_ACTOR] instanceof FHIRConsentActor) {
                $this->addActor($data[self::FIELD_ACTOR]);
            } else {
                $this->addActor(new FHIRConsentActor($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_CONSENTING_PARTY])) {
            if (is_array($data[self::FIELD_CONSENTING_PARTY])) {
                foreach($data[self::FIELD_CONSENTING_PARTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addConsentingParty($v);
                    } else {
                        $this->addConsentingParty(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONSENTING_PARTY] instanceof FHIRReference) {
                $this->addConsentingParty($data[self::FIELD_CONSENTING_PARTY]);
            } else {
                $this->addConsentingParty(new FHIRReference($data[self::FIELD_CONSENTING_PARTY]));
            }
        }
        if (isset($data[self::FIELD_DATA])) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentData) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRConsentData($v));
                    }
                }
            } else if ($data[self::FIELD_DATA] instanceof FHIRConsentData) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRConsentData($data[self::FIELD_DATA]));
            }
        }
        if (isset($data[self::FIELD_DATA_PERIOD])) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DATE_TIME]) || isset($data[self::FIELD_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_DATE_TIME])) {
                $value = $data[self::FIELD_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateTime($value);
                } else if (is_array($value)) {
                    $this->setDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EXCEPT])) {
            if (is_array($data[self::FIELD_EXCEPT])) {
                foreach($data[self::FIELD_EXCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentExcept) {
                        $this->addExcept($v);
                    } else {
                        $this->addExcept(new FHIRConsentExcept($v));
                    }
                }
            } else if ($data[self::FIELD_EXCEPT] instanceof FHIRConsentExcept) {
                $this->addExcept($data[self::FIELD_EXCEPT]);
            } else {
                $this->addExcept(new FHIRConsentExcept($data[self::FIELD_EXCEPT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if (is_array($data[self::FIELD_ORGANIZATION])) {
                foreach($data[self::FIELD_ORGANIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addOrganization($v);
                    } else {
                        $this->addOrganization(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->addOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->addOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_POLICY])) {
            if (is_array($data[self::FIELD_POLICY])) {
                foreach($data[self::FIELD_POLICY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentPolicy) {
                        $this->addPolicy($v);
                    } else {
                        $this->addPolicy(new FHIRConsentPolicy($v));
                    }
                }
            } else if ($data[self::FIELD_POLICY] instanceof FHIRConsentPolicy) {
                $this->addPolicy($data[self::FIELD_POLICY]);
            } else {
                $this->addPolicy(new FHIRConsentPolicy($data[self::FIELD_POLICY]));
            }
        }
        if (isset($data[self::FIELD_POLICY_RULE]) || isset($data[self::FIELD_POLICY_RULE_EXT])) {
            if (isset($data[self::FIELD_POLICY_RULE])) {
                $value = $data[self::FIELD_POLICY_RULE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POLICY_RULE_EXT]) && is_array($data[self::FIELD_POLICY_RULE_EXT])) {
                $ext = $data[self::FIELD_POLICY_RULE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setPolicyRule($value);
                } else if (is_array($value)) {
                    $this->setPolicyRule(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setPolicyRule(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPolicyRule(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            if (is_array($data[self::FIELD_PURPOSE])) {
                foreach($data[self::FIELD_PURPOSE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addPurpose($v);
                    } else {
                        $this->addPurpose(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_PURPOSE] instanceof FHIRCoding) {
                $this->addPurpose($data[self::FIELD_PURPOSE]);
            } else {
                $this->addPurpose(new FHIRCoding($data[self::FIELD_PURPOSE]));
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
            } else if ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCoding) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCoding($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ATTACHMENT])) {
            if ($data[self::FIELD_SOURCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setSourceAttachment($data[self::FIELD_SOURCE_ATTACHMENT]);
            } else {
                $this->setSourceAttachment(new FHIRAttachment($data[self::FIELD_SOURCE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_IDENTIFIER])) {
            if ($data[self::FIELD_SOURCE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setSourceIdentifier($data[self::FIELD_SOURCE_IDENTIFIER]);
            } else {
                $this->setSourceIdentifier(new FHIRIdentifier($data[self::FIELD_SOURCE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_REFERENCE])) {
            if ($data[self::FIELD_SOURCE_REFERENCE] instanceof FHIRReference) {
                $this->setSourceReference($data[self::FIELD_SOURCE_REFERENCE]);
            } else {
                $this->setSourceReference(new FHIRReference($data[self::FIELD_SOURCE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRConsentState) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRConsentState(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRConsentState([FHIRConsentState::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRConsentState($ext));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Consent{$xmlns}></Consent>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
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
     * Actions controlled by this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(FHIRCodeableConcept $action = null)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $action
     * @return static
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
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
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor $actor
     * @return static
     */
    public function addActor(FHIRConsentActor $actor = null)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[] $actor
     * @return static
     */
    public function setActor(array $actor = [])
    {
        $this->actor = [];
        if ([] === $actor) {
            return $this;
        }
        foreach($actor as $v) {
            if ($v instanceof FHIRConsentActor) {
                $this->addActor($v);
            } else {
                $this->addActor(new FHIRConsentActor($v));
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
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getConsentingParty()
    {
        return $this->consentingParty;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $consentingParty
     * @return static
     */
    public function addConsentingParty(FHIRReference $consentingParty = null)
    {
        $this->consentingParty[] = $consentingParty;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $consentingParty
     * @return static
     */
    public function setConsentingParty(array $consentingParty = [])
    {
        $this->consentingParty = [];
        if ([] === $consentingParty) {
            return $this;
        }
        foreach($consentingParty as $v) {
            if ($v instanceof FHIRReference) {
                $this->addConsentingParty($v);
            } else {
                $this->addConsentingParty(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData $data
     * @return static
     */
    public function addData(FHIRConsentData $data = null)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[] $data
     * @return static
     */
    public function setData(array $data = [])
    {
        $this->data = [];
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            if ($v instanceof FHIRConsentData) {
                $this->addData($v);
            } else {
                $this->addData(new FHIRConsentData($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $dataPeriod
     * @return static
     */
    public function setDataPeriod(FHIRPeriod $dataPeriod = null)
    {
        $this->dataPeriod = $dataPeriod;
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
     * When this Consent was issued / created / indexed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $dateTime
     * @return static
     */
    public function setDateTime($dateTime = null)
    {
        if (null === $dateTime) {
            $this->dateTime = null;
            return $this;
        }
        if ($dateTime instanceof FHIRDateTime) {
            $this->dateTime = $dateTime;
            return $this;
        }
        $this->dateTime = new FHIRDateTime($dateTime);
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[]
     */
    public function getExcept()
    {
        return $this->except;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept $except
     * @return static
     */
    public function addExcept(FHIRConsentExcept $except = null)
    {
        $this->except[] = $except;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[] $except
     * @return static
     */
    public function setExcept(array $except = [])
    {
        $this->except = [];
        if ([] === $except) {
            return $this;
        }
        foreach($except as $v) {
            if ($v instanceof FHIRConsentExcept) {
                $this->addExcept($v);
            } else {
                $this->addExcept(new FHIRConsentExcept($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function addOrganization(FHIRReference $organization = null)
    {
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $organization
     * @return static
     */
    public function setOrganization(array $organization = [])
    {
        $this->organization = [];
        if ([] === $organization) {
            return $this;
        }
        foreach($organization as $v) {
            if ($v instanceof FHIRReference) {
                $this->addOrganization($v);
            } else {
                $this->addOrganization(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy $policy
     * @return static
     */
    public function addPolicy(FHIRConsentPolicy $policy = null)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[] $policy
     * @return static
     */
    public function setPolicy(array $policy = [])
    {
        $this->policy = [];
        if ([] === $policy) {
            return $this;
        }
        foreach($policy as $v) {
            if ($v instanceof FHIRConsentPolicy) {
                $this->addPolicy($v);
            } else {
                $this->addPolicy(new FHIRConsentPolicy($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $policyRule
     * @return static
     */
    public function setPolicyRule($policyRule = null)
    {
        if (null === $policyRule) {
            $this->policyRule = null;
            return $this;
        }
        if ($policyRule instanceof FHIRUri) {
            $this->policyRule = $policyRule;
            return $this;
        }
        $this->policyRule = new FHIRUri($policyRule);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $purpose
     * @return static
     */
    public function addPurpose(FHIRCoding $purpose = null)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $purpose
     * @return static
     */
    public function setPurpose(array $purpose = [])
    {
        $this->purpose = [];
        if ([] === $purpose) {
            return $this;
        }
        foreach($purpose as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addPurpose($v);
            } else {
                $this->addPurpose(new FHIRCoding($v));
            }
        }
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
        $this->securityLabel = [];
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $sourceAttachment
     * @return static
     */
    public function setSourceAttachment(FHIRAttachment $sourceAttachment = null)
    {
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $sourceIdentifier
     * @return static
     */
    public function setSourceIdentifier(FHIRIdentifier $sourceIdentifier = null)
    {
        $this->sourceIdentifier = $sourceIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $sourceReference
     * @return static
     */
    public function setSourceReference(FHIRReference $sourceReference = null)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentState $status
     * @return static
     */
    public function setStatus(FHIRConsentState $status = null)
    {
        $this->status = $status;
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConsentingParty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONSENTING_PARTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATA, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOrganization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ORGANIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POLICY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPolicyRule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLICY_RULE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PURPOSE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR])) {
            $v = $this->getActor();
            foreach($validationRules[self::FIELD_ACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_ACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR])) {
                        $errs[self::FIELD_ACTOR] = [];
                    }
                    $errs[self::FIELD_ACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONSENTING_PARTY])) {
            $v = $this->getConsentingParty();
            foreach($validationRules[self::FIELD_CONSENTING_PARTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_CONSENTING_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSENTING_PARTY])) {
                        $errs[self::FIELD_CONSENTING_PARTY] = [];
                    }
                    $errs[self::FIELD_CONSENTING_PARTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_PERIOD])) {
            $v = $this->getDataPeriod();
            foreach($validationRules[self::FIELD_DATA_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_DATA_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_PERIOD])) {
                        $errs[self::FIELD_DATA_PERIOD] = [];
                    }
                    $errs[self::FIELD_DATA_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_TIME])) {
            $v = $this->getDateTime();
            foreach($validationRules[self::FIELD_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_TIME])) {
                        $errs[self::FIELD_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCEPT])) {
            $v = $this->getExcept();
            foreach($validationRules[self::FIELD_EXCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_EXCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCEPT])) {
                        $errs[self::FIELD_EXCEPT] = [];
                    }
                    $errs[self::FIELD_EXCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY])) {
            $v = $this->getPolicy();
            foreach($validationRules[self::FIELD_POLICY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_POLICY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY])) {
                        $errs[self::FIELD_POLICY] = [];
                    }
                    $errs[self::FIELD_POLICY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_RULE])) {
            $v = $this->getPolicyRule();
            foreach($validationRules[self::FIELD_POLICY_RULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_POLICY_RULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_RULE])) {
                        $errs[self::FIELD_POLICY_RULE] = [];
                    }
                    $errs[self::FIELD_POLICY_RULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL])) {
                        $errs[self::FIELD_SECURITY_LABEL] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_ATTACHMENT])) {
            $v = $this->getSourceAttachment();
            foreach($validationRules[self::FIELD_SOURCE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SOURCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_ATTACHMENT])) {
                        $errs[self::FIELD_SOURCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SOURCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_IDENTIFIER])) {
            $v = $this->getSourceIdentifier();
            foreach($validationRules[self::FIELD_SOURCE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SOURCE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_IDENTIFIER])) {
                        $errs[self::FIELD_SOURCE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_SOURCE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_REFERENCE])) {
            $v = $this->getSourceReference();
            foreach($validationRules[self::FIELD_SOURCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SOURCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_REFERENCE])) {
                        $errs[self::FIELD_SOURCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SOURCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRConsent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConsent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConsent;
        } elseif (!is_object($type) || !($type instanceof FHIRConsent)) {
            throw new \RuntimeException(sprintf(
                'FHIRConsent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->actor)) {
            foreach($children->actor as $child) {
                $type->addActor(FHIRConsentActor::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->consentingParty)) {
            foreach($children->consentingParty as $child) {
                $type->addConsentingParty(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->data)) {
            foreach($children->data as $child) {
                $type->addData(FHIRConsentData::xmlUnserialize($child));
            }
        }
        if (isset($children->dataPeriod)) {
            $type->setDataPeriod(FHIRPeriod::xmlUnserialize($children->dataPeriod));
        }
        if (isset($children->dateTime)) {
            $type->setDateTime(FHIRDateTime::xmlUnserialize($children->dateTime));
        }
        if (isset($attributes->dateTime)) {
            $pt = $type->getDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateTime);
            } else {
                $type->setDateTime((string)$attributes->dateTime);
            }
        }
        if (isset($children->except)) {
            foreach($children->except as $child) {
                $type->addExcept(FHIRConsentExcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->organization)) {
            foreach($children->organization as $child) {
                $type->addOrganization(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->policy)) {
            foreach($children->policy as $child) {
                $type->addPolicy(FHIRConsentPolicy::xmlUnserialize($child));
            }
        }
        if (isset($children->policyRule)) {
            $type->setPolicyRule(FHIRUri::xmlUnserialize($children->policyRule));
        }
        if (isset($attributes->policyRule)) {
            $pt = $type->getPolicyRule();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->policyRule);
            } else {
                $type->setPolicyRule((string)$attributes->policyRule);
            }
        }
        if (isset($children->purpose)) {
            foreach($children->purpose as $child) {
                $type->addPurpose(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->securityLabel)) {
            foreach($children->securityLabel as $child) {
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->sourceAttachment)) {
            $type->setSourceAttachment(FHIRAttachment::xmlUnserialize($children->sourceAttachment));
        }
        if (isset($children->sourceIdentifier)) {
            $type->setSourceIdentifier(FHIRIdentifier::xmlUnserialize($children->sourceIdentifier));
        }
        if (isset($children->sourceReference)) {
            $type->setSourceReference(FHIRReference::xmlUnserialize($children->sourceReference));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRConsentState::xmlUnserialize($children->status));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getConsentingParty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONSENTING_PARTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getExcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOrganization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPolicyRule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY_RULE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            $a[self::FIELD_ACTOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTOR][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getConsentingParty())) {
            $a[self::FIELD_CONSENTING_PARTY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONSENTING_PARTY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getData())) {
            $a[self::FIELD_DATA] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DATA][] = $v;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a[self::FIELD_DATA_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDateTime())) {
            $a[self::FIELD_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_TIME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getExcept())) {
            $a[self::FIELD_EXCEPT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXCEPT][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ORGANIZATION][] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $a[self::FIELD_POLICY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_POLICY][] = $v;
            }
        }
        if (null !== ($v = $this->getPolicyRule())) {
            $a[self::FIELD_POLICY_RULE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_POLICY_RULE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PURPOSE][] = $v;
            }
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
        if (null !== ($v = $this->getSourceAttachment())) {
            $a[self::FIELD_SOURCE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            $a[self::FIELD_SOURCE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getSourceReference())) {
            $a[self::FIELD_SOURCE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConsentState::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConsentState::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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