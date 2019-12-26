<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConsentState;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a healthcare consumer’s choices, which permits or denies
 * identified recipient(s) or recipient role(s) to perform one or more actions
 * within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRConsent
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRConsent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT;
    const FIELD_CATEGORY = 'category';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERFORMER = 'performer';
    const FIELD_POLICY = 'policy';
    const FIELD_POLICY_RULE = 'policyRule';
    const FIELD_PROVISION = 'provision';
    const FIELD_SCOPE = 'scope';
    const FIELD_SOURCE_ATTACHMENT = 'sourceAttachment';
    const FIELD_SOURCE_REFERENCE = 'sourceReference';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_VERIFICATION = 'verification';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $dateTime = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $organization = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $performer = [];

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    protected $policy = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the specific base computable regulation or policy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $policyRule = null;

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    protected $provision = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A selector of the type of consent being presented: ADR, Privacy, Treatment,
     * Research. This list is now extensible.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $scope = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document. (choose any one of source*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    protected $sourceAttachment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document. (choose any one of source*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $sourceReference = null;

    /**
     * Indicates the state of the consent.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConsentState
     */
    protected $status = null;

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[]
     */
    protected $verification = [];

    /**
     * Validation map for fields in type Consent
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_CATEGORY => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

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
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
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
        if (isset($data[self::FIELD_POLICY_RULE])) {
            if ($data[self::FIELD_POLICY_RULE] instanceof FHIRCodeableConcept) {
                $this->setPolicyRule($data[self::FIELD_POLICY_RULE]);
            } else {
                $this->setPolicyRule(new FHIRCodeableConcept($data[self::FIELD_POLICY_RULE]));
            }
        }
        if (isset($data[self::FIELD_PROVISION])) {
            if ($data[self::FIELD_PROVISION] instanceof FHIRConsentProvision) {
                $this->setProvision($data[self::FIELD_PROVISION]);
            } else {
                $this->setProvision(new FHIRConsentProvision($data[self::FIELD_PROVISION]));
            }
        }
        if (isset($data[self::FIELD_SCOPE])) {
            if ($data[self::FIELD_SCOPE] instanceof FHIRCodeableConcept) {
                $this->setScope($data[self::FIELD_SCOPE]);
            } else {
                $this->setScope(new FHIRCodeableConcept($data[self::FIELD_SCOPE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ATTACHMENT])) {
            if ($data[self::FIELD_SOURCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setSourceAttachment($data[self::FIELD_SOURCE_ATTACHMENT]);
            } else {
                $this->setSourceAttachment(new FHIRAttachment($data[self::FIELD_SOURCE_ATTACHMENT]));
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
        if (isset($data[self::FIELD_VERIFICATION])) {
            if (is_array($data[self::FIELD_VERIFICATION])) {
                foreach($data[self::FIELD_VERIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConsentVerification) {
                        $this->addVerification($v);
                    } else {
                        $this->addVerification(new FHIRConsentVerification($v));
                    }
                }
            } else if ($data[self::FIELD_VERIFICATION] instanceof FHIRConsentVerification) {
                $this->addVerification($data[self::FIELD_VERIFICATION]);
            } else {
                $this->addVerification(new FHIRConsentVerification($data[self::FIELD_VERIFICATION]));
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
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $dateTime
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $organization
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $organization
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function addPerformer(FHIRReference $performer = null)
    {
        $this->performer[] = $performer;
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $performer
     * @return static
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy $policy
     * @return static
     */
    public function addPolicy(FHIRConsentPolicy $policy = null)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[] $policy
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the specific base computable regulation or policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the specific base computable regulation or policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $policyRule
     * @return static
     */
    public function setPolicyRule(FHIRCodeableConcept $policyRule = null)
    {
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    public function getProvision()
    {
        return $this->provision;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision $provision
     * @return static
     */
    public function setProvision(FHIRConsentProvision $provision = null)
    {
        $this->provision = $provision;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A selector of the type of consent being presented: ADR, Privacy, Treatment,
     * Research. This list is now extensible.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A selector of the type of consent being presented: ADR, Privacy, Treatment,
     * Research. This list is now extensible.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $scope
     * @return static
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        $this->scope = $scope;
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
     * original consent document. (choose any one of source*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
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
     * original consent document. (choose any one of source*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $sourceAttachment
     * @return static
     */
    public function setSourceAttachment(FHIRAttachment $sourceAttachment = null)
    {
        $this->sourceAttachment = $sourceAttachment;
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
     * original consent document. (choose any one of source*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * original consent document. (choose any one of source*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $sourceReference
     * @return static
     */
    public function setSourceReference(FHIRReference $sourceReference = null)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Indicates the state of the consent.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConsentState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the state of the consent.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConsentState $status
     * @return static
     */
    public function setStatus(FHIRConsentState $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $verification
     * @return static
     */
    public function addVerification(FHIRConsentVerification $verification = null)
    {
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[] $verification
     * @return static
     */
    public function setVerification(array $verification = [])
    {
        $this->verification = [];
        if ([] === $verification) {
            return $this;
        }
        foreach($verification as $v) {
            if ($v instanceof FHIRConsentVerification) {
                $this->addVerification($v);
            } else {
                $this->addVerification(new FHIRConsentVerification($v));
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
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
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
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getProvision())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVISION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScope())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCOPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_ATTACHMENT] = $fieldErrs;
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
        if ([] !== ($vs = $this->getVerification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERIFICATION, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PROVISION])) {
            $v = $this->getProvision();
            foreach($validationRules[self::FIELD_PROVISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_PROVISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVISION])) {
                        $errs[self::FIELD_PROVISION] = [];
                    }
                    $errs[self::FIELD_PROVISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCOPE])) {
            $v = $this->getScope();
            foreach($validationRules[self::FIELD_SCOPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_SCOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCOPE])) {
                        $errs[self::FIELD_SCOPE] = [];
                    }
                    $errs[self::FIELD_SCOPE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_VERIFICATION])) {
            $v = $this->getVerification();
            foreach($validationRules[self::FIELD_VERIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT, self::FIELD_VERIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION])) {
                        $errs[self::FIELD_VERIFICATION] = [];
                    }
                    $errs[self::FIELD_VERIFICATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent
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
                'FHIRConsent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent or null, %s seen.',
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
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
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
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            foreach($children->organization as $child) {
                $type->addOrganization(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->policy)) {
            foreach($children->policy as $child) {
                $type->addPolicy(FHIRConsentPolicy::xmlUnserialize($child));
            }
        }
        if (isset($children->policyRule)) {
            $type->setPolicyRule(FHIRCodeableConcept::xmlUnserialize($children->policyRule));
        }
        if (isset($children->provision)) {
            $type->setProvision(FHIRConsentProvision::xmlUnserialize($children->provision));
        }
        if (isset($children->scope)) {
            $type->setScope(FHIRCodeableConcept::xmlUnserialize($children->scope));
        }
        if (isset($children->sourceAttachment)) {
            $type->setSourceAttachment(FHIRAttachment::xmlUnserialize($children->sourceAttachment));
        }
        if (isset($children->sourceReference)) {
            $type->setSourceReference(FHIRReference::xmlUnserialize($children->sourceReference));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRConsentState::xmlUnserialize($children->status));
        }
        if (isset($children->verification)) {
            foreach($children->verification as $child) {
                $type->addVerification(FHIRConsentVerification::xmlUnserialize($child));
            }
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
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
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
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getProvision())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVISION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScope())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCOPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getVerification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFICATION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
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
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER][] = $v;
            }
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
            $a[self::FIELD_POLICY_RULE] = $v;
        }
        if (null !== ($v = $this->getProvision())) {
            $a[self::FIELD_PROVISION] = $v;
        }
        if (null !== ($v = $this->getScope())) {
            $a[self::FIELD_SCOPE] = $v;
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $a[self::FIELD_SOURCE_ATTACHMENT] = $v;
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
        if ([] !== ($vs = $this->getVerification())) {
            $a[self::FIELD_VERIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VERIFICATION][] = $v;
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