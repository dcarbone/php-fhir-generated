<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A formal agreement between parties regarding the conduct of business, exchange
 * of information or other matters.
 */
class FHIRContractTerm extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONTRACT_DOT_TERM;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ISSUED = 'issued';
    public const FIELD_ISSUED_EXT = '_issued';
    public const FIELD_APPLIES = 'applies';
    public const FIELD_TYPE = 'type';
    public const FIELD_SUB_TYPE = 'subType';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_ACTION = 'action';
    public const FIELD_ACTION_REASON = 'actionReason';
    public const FIELD_SECURITY_LABEL = 'securityLabel';
    public const FIELD_AGENT = 'agent';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_VALUED_ITEM = 'valuedItem';
    public const FIELD_GROUP = 'group';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract Provision was issued.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $issued;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $applies;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $topic;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $action;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $actionReason;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $securityLabel;
    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1[] 
     */
    protected array $agent;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[] 
     */
    protected array $valuedItem;
    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[] 
     */
    protected array $group;

    /** Default validation map for fields in type Contract.Term */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRContractTerm Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $issued
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $applies
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $subType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $topic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $action
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $actionReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $securityLabel
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1[] $agent
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[] $valuedItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[] $group
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $identifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $issued = null,
                                null|FHIRPeriod $applies = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $subType = null,
                                null|iterable $topic = null,
                                null|iterable $action = null,
                                null|iterable $actionReason = null,
                                null|iterable $securityLabel = null,
                                null|iterable $agent = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $valuedItem = null,
                                null|iterable $group = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $issued) {
            $this->setIssued($issued);
        }
        if (null !== $applies) {
            $this->setApplies($applies);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $subType) {
            $this->setSubType($subType);
        }
        if (null !== $topic) {
            $this->setTopic(...$topic);
        }
        if (null !== $action) {
            $this->setAction(...$action);
        }
        if (null !== $actionReason) {
            $this->setActionReason(...$actionReason);
        }
        if (null !== $securityLabel) {
            $this->setSecurityLabel(...$securityLabel);
        }
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $valuedItem) {
            $this->setValuedItem(...$valuedItem);
        }
        if (null !== $group) {
            $this->setGroup(...$group);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
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
     * When this Contract Provision was issued.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getIssued(): null|FHIRDateTime
    {
        return $this->issued ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract Provision was issued.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $issued): self
    {
        if (null === $issued) {
            unset($this->issued);
            return $this;
        }
        if (!($issued instanceof FHIRDateTime)) {
            $issued = new FHIRDateTime(value: $issued);
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getApplies(): null|FHIRPeriod
    {
        return $this->applies ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $applies
     * @return static
     */
    public function setApplies(null|FHIRPeriod $applies): self
    {
        if (null === $applies) {
            unset($this->applies);
            return $this;
        }
        $this->applies = $applies;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType(): null|FHIRCodeableConcept
    {
        return $this->subType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function setSubType(null|FHIRCodeableConcept $subType): self
    {
        if (null === $subType) {
            unset($this->subType);
            return $this;
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getTopic(): array
    {
        return $this->topic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getTopicIterator(): iterable
    {
        if (!isset($this->topic) || [] === $this->topic) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->topic);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $topic
     * @return static
     */
    public function addTopic(FHIRReference $topic): self
    {
        if (!isset($this->topic)) {
            $this->topic = [];
        }
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$topic
     * @return static
     */
    public function setTopic(FHIRReference ...$topic): self
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action) || [] === $this->action) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(FHIRCodeableConcept $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$action
     * @return static
     */
    public function setAction(FHIRCodeableConcept ...$action): self
    {
        $this->action = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason(): array
    {
        return $this->actionReason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getActionReasonIterator(): iterable
    {
        if (!isset($this->actionReason) || [] === $this->actionReason) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->actionReason);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $actionReason
     * @return static
     */
    public function addActionReason(FHIRCodeableConcept $actionReason): self
    {
        if (!isset($this->actionReason)) {
            $this->actionReason = [];
        }
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$actionReason
     * @return static
     */
    public function setActionReason(FHIRCodeableConcept ...$actionReason): self
    {
        $this->actionReason = $actionReason;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel(): array
    {
        return $this->securityLabel ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getSecurityLabelIterator(): iterable
    {
        if (!isset($this->securityLabel) || [] === $this->securityLabel) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->securityLabel);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $securityLabel
     * @return static
     */
    public function addSecurityLabel(FHIRCoding $securityLabel): self
    {
        if (!isset($this->securityLabel)) {
            $this->securityLabel = [];
        }
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$securityLabel
     * @return static
     */
    public function setSecurityLabel(FHIRCoding ...$securityLabel): self
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1[]
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent) || [] === $this->agent) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1 $agent
     * @return static
     */
    public function addAgent(FHIRContractAgent1 $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1 ...$agent
     * @return static
     */
    public function setAgent(FHIRContractAgent1 ...$agent): self
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[]
     */
    public function getValuedItem(): array
    {
        return $this->valuedItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1>
     */
    public function getValuedItemIterator(): iterable
    {
        if (!isset($this->valuedItem) || [] === $this->valuedItem) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valuedItem);
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1 $valuedItem
     * @return static
     */
    public function addValuedItem(FHIRContractValuedItem1 $valuedItem): self
    {
        if (!isset($this->valuedItem)) {
            $this->valuedItem = [];
        }
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1 ...$valuedItem
     * @return static
     */
    public function setValuedItem(FHIRContractValuedItem1 ...$valuedItem): self
    {
        $this->valuedItem = $valuedItem;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    public function getGroup(): array
    {
        return $this->group ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm>
     */
    public function getGroupIterator(): iterable
    {
        if (!isset($this->group) || [] === $this->group) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->group);
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $group
     * @return static
     */
    public function addGroup(FHIRContractTerm $group): self
    {
        if (!isset($this->group)) {
            $this->group = [];
        }
        $this->group[] = $group;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm ...$group
     * @return static
     */
    public function setGroup(FHIRContractTerm ...$group): self
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ISSUED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPLIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES])) {
                        $errs[self::FIELD_APPLIES] = [];
                    }
                    $errs[self::FIELD_APPLIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_TYPE])) {
                        $errs[self::FIELD_SUB_TYPE] = [];
                    }
                    $errs[self::FIELD_SUB_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTION_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION_REASON])) {
                        $errs[self::FIELD_ACTION_REASON] = [];
                    }
                    $errs[self::FIELD_ACTION_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUED_ITEM])) {
            $v = $this->getValuedItem();
            foreach($validationRules[self::FIELD_VALUED_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUED_ITEM])) {
                        $errs[self::FIELD_VALUED_ITEM] = [];
                    }
                    $errs[self::FIELD_VALUED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContractTerm)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ISSUED === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIssued(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_APPLIES === $childName) {
                $v = new FHIRPeriod();
                $type->setApplies(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSubType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOPIC === $childName) {
                $v = new FHIRReference();
                $type->addTopic(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTION_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addActionReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SECURITY_LABEL === $childName) {
                $v = new FHIRCoding();
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGENT === $childName) {
                $v = new FHIRContractAgent1();
                $type->addAgent(FHIRContractAgent1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUED_ITEM === $childName) {
                $v = new FHIRContractValuedItem1();
                $type->addValuedItem(FHIRContractValuedItem1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP === $childName) {
                $v = new FHIRContractTerm();
                $type->addGroup(FHIRContractTerm::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ISSUED])) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ISSUED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIssued(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_ISSUED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setText(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ContractTerm', $this->_getSourceXMLNS());
        }
        if (isset($this->issued) && $this->issued->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ISSUED, $this->issued->getValue()?->getFormattedValue());
        }
        if (isset($this->text) && $this->text->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issued) && $this->issued->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ISSUED);
            $this->issued->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->applies)) {
            $xw->startElement(self::FIELD_APPLIES);
            $this->applies->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subType)) {
            $xw->startElement(self::FIELD_SUB_TYPE);
            $this->subType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->topic)) {
            foreach ($this->topic as $v) {
                $xw->startElement(self::FIELD_TOPIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->actionReason)) {
            foreach ($this->actionReason as $v) {
                $xw->startElement(self::FIELD_ACTION_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->securityLabel)) {
            foreach ($this->securityLabel as $v) {
                $xw->startElement(self::FIELD_SECURITY_LABEL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->agent)) {
            foreach ($this->agent as $v) {
                $xw->startElement(self::FIELD_AGENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->text) && $this->text->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valuedItem)) {
            foreach ($this->valuedItem as $v) {
                $xw->startElement(self::FIELD_VALUED_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContractTerm)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->setIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_ISSUED]) || isset($json[self::FIELD_ISSUED_EXT]) || array_key_exists(self::FIELD_ISSUED, $json) || array_key_exists(self::FIELD_ISSUED_EXT, $json)) {
            $value = $json[self::FIELD_ISSUED] ?? null;
            $ext = (isset($json[self::FIELD_ISSUED_EXT]) && is_array($json[self::FIELD_ISSUED_EXT])) ? $json[self::FIELD_ISSUED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setIssued($value);
                } else if (is_array($value)) {
                    $type->setIssued(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIssued(new FHIRDateTime($ext));
            } else {
                $type->setIssued(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_APPLIES]) || array_key_exists(self::FIELD_APPLIES, $json)) {
            if ($json[self::FIELD_APPLIES] instanceof FHIRPeriod) {
                $type->setApplies($json[self::FIELD_APPLIES]);
            } else {
                $type->setApplies(new FHIRPeriod($json[self::FIELD_APPLIES]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SUB_TYPE]) || array_key_exists(self::FIELD_SUB_TYPE, $json)) {
            if ($json[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $type->setSubType($json[self::FIELD_SUB_TYPE]);
            } else {
                $type->setSubType(new FHIRCodeableConcept($json[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($json[self::FIELD_TOPIC]) || array_key_exists(self::FIELD_TOPIC, $json)) {
            if (is_array($json[self::FIELD_TOPIC])) {
                foreach($json[self::FIELD_TOPIC] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addTopic($v);
                    } else {
                        $type->addTopic(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_TOPIC] instanceof FHIRReference) {
                $type->addTopic($json[self::FIELD_TOPIC]);
            } else {
                $type->addTopic(new FHIRReference($json[self::FIELD_TOPIC]));
            }
        }
        if (isset($json[self::FIELD_ACTION]) || array_key_exists(self::FIELD_ACTION, $json)) {
            if (is_array($json[self::FIELD_ACTION])) {
                foreach($json[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addAction($v);
                    } else {
                        $type->addAction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $type->addAction($json[self::FIELD_ACTION]);
            } else {
                $type->addAction(new FHIRCodeableConcept($json[self::FIELD_ACTION]));
            }
        }
        if (isset($json[self::FIELD_ACTION_REASON]) || array_key_exists(self::FIELD_ACTION_REASON, $json)) {
            if (is_array($json[self::FIELD_ACTION_REASON])) {
                foreach($json[self::FIELD_ACTION_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addActionReason($v);
                    } else {
                        $type->addActionReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_ACTION_REASON] instanceof FHIRCodeableConcept) {
                $type->addActionReason($json[self::FIELD_ACTION_REASON]);
            } else {
                $type->addActionReason(new FHIRCodeableConcept($json[self::FIELD_ACTION_REASON]));
            }
        }
        if (isset($json[self::FIELD_SECURITY_LABEL]) || array_key_exists(self::FIELD_SECURITY_LABEL, $json)) {
            if (is_array($json[self::FIELD_SECURITY_LABEL])) {
                foreach($json[self::FIELD_SECURITY_LABEL] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $type->addSecurityLabel($v);
                    } else {
                        $type->addSecurityLabel(new FHIRCoding($v));
                    }
                }
            } elseif ($json[self::FIELD_SECURITY_LABEL] instanceof FHIRCoding) {
                $type->addSecurityLabel($json[self::FIELD_SECURITY_LABEL]);
            } else {
                $type->addSecurityLabel(new FHIRCoding($json[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($json[self::FIELD_AGENT]) || array_key_exists(self::FIELD_AGENT, $json)) {
            if (is_array($json[self::FIELD_AGENT])) {
                foreach($json[self::FIELD_AGENT] as $v) {
                    if ($v instanceof FHIRContractAgent1) {
                        $type->addAgent($v);
                    } else {
                        $type->addAgent(new FHIRContractAgent1($v));
                    }
                }
            } elseif ($json[self::FIELD_AGENT] instanceof FHIRContractAgent1) {
                $type->addAgent($json[self::FIELD_AGENT]);
            } else {
                $type->addAgent(new FHIRContractAgent1($json[self::FIELD_AGENT]));
            }
        }
        if (isset($json[self::FIELD_TEXT]) || isset($json[self::FIELD_TEXT_EXT]) || array_key_exists(self::FIELD_TEXT, $json) || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $ext = (isset($json[self::FIELD_TEXT_EXT]) && is_array($json[self::FIELD_TEXT_EXT])) ? $json[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setText($value);
                } else if (is_array($value)) {
                    $type->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setText(new FHIRString($ext));
            } else {
                $type->setText(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VALUED_ITEM]) || array_key_exists(self::FIELD_VALUED_ITEM, $json)) {
            if (is_array($json[self::FIELD_VALUED_ITEM])) {
                foreach($json[self::FIELD_VALUED_ITEM] as $v) {
                    if ($v instanceof FHIRContractValuedItem1) {
                        $type->addValuedItem($v);
                    } else {
                        $type->addValuedItem(new FHIRContractValuedItem1($v));
                    }
                }
            } elseif ($json[self::FIELD_VALUED_ITEM] instanceof FHIRContractValuedItem1) {
                $type->addValuedItem($json[self::FIELD_VALUED_ITEM]);
            } else {
                $type->addValuedItem(new FHIRContractValuedItem1($json[self::FIELD_VALUED_ITEM]));
            }
        }
        if (isset($json[self::FIELD_GROUP]) || array_key_exists(self::FIELD_GROUP, $json)) {
            if (is_array($json[self::FIELD_GROUP])) {
                foreach($json[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRContractTerm) {
                        $type->addGroup($v);
                    } else {
                        $type->addGroup(new FHIRContractTerm($v));
                    }
                }
            } elseif ($json[self::FIELD_GROUP] instanceof FHIRContractTerm) {
                $type->addGroup($json[self::FIELD_GROUP]);
            } else {
                $type->addGroup(new FHIRContractTerm($json[self::FIELD_GROUP]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->issued)) {
            if (null !== ($val = $this->issued->getValue())) {
                $out->issued = $val;
            }
            $ext = $this->issued->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_issued = $ext;
            }
        }
        if (isset($this->applies)) {
            $out->applies = $this->applies;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->subType)) {
            $out->subType = $this->subType;
        }
        if (isset($this->topic) && [] !== $this->topic) {
            $out->topic = $this->topic;
        }
        if (isset($this->action) && [] !== $this->action) {
            $out->action = $this->action;
        }
        if (isset($this->actionReason) && [] !== $this->actionReason) {
            $out->actionReason = $this->actionReason;
        }
        if (isset($this->securityLabel) && [] !== $this->securityLabel) {
            $out->securityLabel = $this->securityLabel;
        }
        if (isset($this->agent) && [] !== $this->agent) {
            $out->agent = $this->agent;
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            $ext = $this->text->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_text = $ext;
            }
        }
        if (isset($this->valuedItem) && [] !== $this->valuedItem) {
            $out->valuedItem = $this->valuedItem;
        }
        if (isset($this->group) && [] !== $this->group) {
            $out->group = $this->group;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}