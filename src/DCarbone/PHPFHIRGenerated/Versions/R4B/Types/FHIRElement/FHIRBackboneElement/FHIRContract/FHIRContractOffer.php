<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 */
class FHIRContractOffer extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONTRACT_DOT_OFFER;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_PARTY = 'party';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_TYPE = 'type';
    public const FIELD_DECISION = 'decision';
    public const FIELD_DECISION_MODE = 'decisionMode';
    public const FIELD_ANSWER = 'answer';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_SECURITY_LABEL_NUMBER = 'securityLabelNumber';
    public const FIELD_SECURITY_LABEL_NUMBER_EXT = '_securityLabelNumber';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Offer Recipient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty[] 
     */
    protected array $party;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The owner of an asset has the residual control rights over the asset: the right
     * to decide all usages of the asset in any way not inconsistent with a prior
     * contract, custom, or law (Hart, 1995, p. 30).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $topic;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of choice made by accepting party with respect to an offer made by an
     * offeror/ grantee.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $decision;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the decision about a Contract was conveyed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $decisionMode;
    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to offer text.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[] 
     */
    protected array $answer;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Offer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the clause or question text of the offer in the referenced
     * questionnaire/response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] 
     */
    protected array $linkId;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the offer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt[] 
     */
    protected array $securityLabelNumber;

    /** Default validation map for fields in type Contract.Offer */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRContractOffer Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty[] $party
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $topic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $decision
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $decisionMode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[] $answer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $text
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] $linkId
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt[] $securityLabelNumber
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|iterable $party = null,
                                null|FHIRReference $topic = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $decision = null,
                                null|iterable $decisionMode = null,
                                null|iterable $answer = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $linkId = null,
                                null|iterable $securityLabelNumber = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $party) {
            $this->setParty(...$party);
        }
        if (null !== $topic) {
            $this->setTopic($topic);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $decision) {
            $this->setDecision($decision);
        }
        if (null !== $decisionMode) {
            $this->setDecisionMode(...$decisionMode);
        }
        if (null !== $answer) {
            $this->setAnswer(...$answer);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $linkId) {
            $this->setLinkId(...$linkId);
        }
        if (null !== $securityLabelNumber) {
            $this->setSecurityLabelNumber(...$securityLabelNumber);
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Offer Recipient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty[]
     */
    public function getParty(): array
    {
        return $this->party ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty>
     */
    public function getPartyIterator(): iterable
    {
        if (!isset($this->party) || [] === $this->party) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->party);
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Offer Recipient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty $party
     * @return static
     */
    public function addParty(FHIRContractParty $party): self
    {
        if (!isset($this->party)) {
            $this->party = [];
        }
        $this->party[] = $party;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Offer Recipient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty ...$party
     * @return static
     */
    public function setParty(FHIRContractParty ...$party): self
    {
        $this->party = $party;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The owner of an asset has the residual control rights over the asset: the right
     * to decide all usages of the asset in any way not inconsistent with a prior
     * contract, custom, or law (Hart, 1995, p. 30).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getTopic(): null|FHIRReference
    {
        return $this->topic ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The owner of an asset has the residual control rights over the asset: the right
     * to decide all usages of the asset in any way not inconsistent with a prior
     * contract, custom, or law (Hart, 1995, p. 30).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $topic
     * @return static
     */
    public function setTopic(null|FHIRReference $topic): self
    {
        if (null === $topic) {
            unset($this->topic);
            return $this;
        }
        $this->topic = $topic;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
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
     * Type of choice made by accepting party with respect to an offer made by an
     * offeror/ grantee.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDecision(): null|FHIRCodeableConcept
    {
        return $this->decision ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of choice made by accepting party with respect to an offer made by an
     * offeror/ grantee.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $decision
     * @return static
     */
    public function setDecision(null|FHIRCodeableConcept $decision): self
    {
        if (null === $decision) {
            unset($this->decision);
            return $this;
        }
        $this->decision = $decision;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the decision about a Contract was conveyed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDecisionMode(): array
    {
        return $this->decisionMode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getDecisionModeIterator(): iterable
    {
        if (!isset($this->decisionMode) || [] === $this->decisionMode) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->decisionMode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the decision about a Contract was conveyed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $decisionMode
     * @return static
     */
    public function addDecisionMode(FHIRCodeableConcept $decisionMode): self
    {
        if (!isset($this->decisionMode)) {
            $this->decisionMode = [];
        }
        $this->decisionMode[] = $decisionMode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the decision about a Contract was conveyed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$decisionMode
     * @return static
     */
    public function setDecisionMode(FHIRCodeableConcept ...$decisionMode): self
    {
        $this->decisionMode = $decisionMode;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to offer text.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[]
     */
    public function getAnswer(): array
    {
        return $this->answer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer>
     */
    public function getAnswerIterator(): iterable
    {
        if (!isset($this->answer) || [] === $this->answer) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->answer);
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to offer text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer $answer
     * @return static
     */
    public function addAnswer(FHIRContractAnswer $answer): self
    {
        if (!isset($this->answer)) {
            $this->answer = [];
        }
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to offer text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer ...$answer
     * @return static
     */
    public function setAnswer(FHIRContractAnswer ...$answer): self
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Offer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Offer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        if (null !== $valueXMLLocation) {
            $text->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $text->_getValueXMLLocation()) {
            $text->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the clause or question text of the offer in the referenced
     * questionnaire/response.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]
     */
    public function getLinkId(): array
    {
        return $this->linkId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString>
     */
    public function getLinkIdIterator(): iterable
    {
        if (!isset($this->linkId) || [] === $this->linkId) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->linkId);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the clause or question text of the offer in the referenced
     * questionnaire/response.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function addLinkId(string|FHIRStringPrimitive|FHIRString $linkId): self
    {
        if (!($linkId instanceof FHIRString)) {
            $linkId = new FHIRString(value: $linkId);
        }
        if (!isset($this->linkId)) {
            $this->linkId = [];
        }
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the clause or question text of the offer in the referenced
     * questionnaire/response.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString ...$linkId
     * @return static
     */
    public function setLinkId(string|FHIRStringPrimitive|FHIRString ...$linkId): self
    {
        $this->linkId = [];
        foreach($linkId as $v) {
            if ($v instanceof FHIRString) {
                $this->linkId[] = $v;
            } else {
                $this->linkId[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the offer.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber(): array
    {
        return $this->securityLabelNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt>
     */
    public function getSecurityLabelNumberIterator(): iterable
    {
        if (!isset($this->securityLabelNumber) || [] === $this->securityLabelNumber) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->securityLabelNumber);
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the offer.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $securityLabelNumber
     * @return static
     */
    public function addSecurityLabelNumber(string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $securityLabelNumber): self
    {
        if (!($securityLabelNumber instanceof FHIRUnsignedInt)) {
            $securityLabelNumber = new FHIRUnsignedInt(value: $securityLabelNumber);
        }
        if (!isset($this->securityLabelNumber)) {
            $this->securityLabelNumber = [];
        }
        $this->securityLabelNumber[] = $securityLabelNumber;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the offer.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt ...$securityLabelNumber
     * @return static
     */
    public function setSecurityLabelNumber(string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt ...$securityLabelNumber): self
    {
        $this->securityLabelNumber = [];
        foreach($securityLabelNumber as $v) {
            if ($v instanceof FHIRUnsignedInt) {
                $this->securityLabelNumber[] = $v;
            } else {
                $this->securityLabelNumber[] = new FHIRUnsignedInt(value: $v);
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
        if (isset($validationRules[self::FIELD_PARTY])) {
            $v = $this->getParty();
            foreach($validationRules[self::FIELD_PARTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTY])) {
                        $errs[self::FIELD_PARTY] = [];
                    }
                    $errs[self::FIELD_PARTY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DECISION])) {
            $v = $this->getDecision();
            foreach($validationRules[self::FIELD_DECISION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECISION])) {
                        $errs[self::FIELD_DECISION] = [];
                    }
                    $errs[self::FIELD_DECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECISION_MODE])) {
            $v = $this->getDecisionMode();
            foreach($validationRules[self::FIELD_DECISION_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECISION_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECISION_MODE])) {
                        $errs[self::FIELD_DECISION_MODE] = [];
                    }
                    $errs[self::FIELD_DECISION_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER])) {
            $v = $this->getAnswer();
            foreach($validationRules[self::FIELD_ANSWER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER])) {
                        $errs[self::FIELD_ANSWER] = [];
                    }
                    $errs[self::FIELD_ANSWER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL_NUMBER])) {
            $v = $this->getSecurityLabelNumber();
            foreach($validationRules[self::FIELD_SECURITY_LABEL_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SECURITY_LABEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL_NUMBER])) {
                        $errs[self::FIELD_SECURITY_LABEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL_NUMBER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContractOffer)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARTY === $childName) {
                $v = new FHIRContractParty();
                $type->addParty(FHIRContractParty::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOPIC === $childName) {
                $v = new FHIRReference();
                $type->setTopic(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECISION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDecision(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECISION_MODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addDecisionMode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER === $childName) {
                $v = new FHIRContractAnswer();
                $type->addAnswer(FHIRContractAnswer::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LINK_ID === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addLinkId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SECURITY_LABEL_NUMBER === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addSecurityLabelNumber(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TEXT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setText(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_LINK_ID],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addLinkId($v);
        }
        if (isset($attributes[self::FIELD_SECURITY_LABEL_NUMBER])) {
            $v = new FHIRUnsignedInt(value: (string)$attributes[self::FIELD_SECURITY_LABEL_NUMBER],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addSecurityLabelNumber($v);
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
            $xw->openRootNode('ContractOffer', $this->_getSourceXMLNS());
        }
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->getValue()?->_getFormattedValue());
        }
        if (isset($this->linkId)) {
           foreach($this->linkId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_LINK_ID, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->securityLabelNumber)) {
           foreach($this->securityLabelNumber as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SECURITY_LABEL_NUMBER, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->party)) {
            foreach ($this->party as $v) {
                $xw->startElement(self::FIELD_PARTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->topic)) {
            $xw->startElement(self::FIELD_TOPIC);
            $this->topic->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->decision)) {
            $xw->startElement(self::FIELD_DECISION);
            $this->decision->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->decisionMode)) {
            foreach ($this->decisionMode as $v) {
                $xw->startElement(self::FIELD_DECISION_MODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->answer)) {
            foreach ($this->answer as $v) {
                $xw->startElement(self::FIELD_ANSWER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->linkId)) {
            foreach($this->linkId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_LINK_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->securityLabelNumber)) {
            foreach($this->securityLabelNumber as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SECURITY_LABEL_NUMBER);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContractOffer)) {
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
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_PARTY]) || array_key_exists(self::FIELD_PARTY, $json)) {
            if (is_array($json[self::FIELD_PARTY])) {
                foreach($json[self::FIELD_PARTY] as $v) {
                    if ($v instanceof FHIRContractParty) {
                        $type->addParty($v);
                    } else {
                        $type->addParty(new FHIRContractParty($v));
                    }
                }
            } elseif ($json[self::FIELD_PARTY] instanceof FHIRContractParty) {
                $type->addParty($json[self::FIELD_PARTY]);
            } else {
                $type->addParty(new FHIRContractParty($json[self::FIELD_PARTY]));
            }
        }
        if (isset($json[self::FIELD_TOPIC]) || array_key_exists(self::FIELD_TOPIC, $json)) {
            if ($json[self::FIELD_TOPIC] instanceof FHIRReference) {
                $type->setTopic($json[self::FIELD_TOPIC]);
            } else {
                $type->setTopic(new FHIRReference($json[self::FIELD_TOPIC]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_DECISION]) || array_key_exists(self::FIELD_DECISION, $json)) {
            if ($json[self::FIELD_DECISION] instanceof FHIRCodeableConcept) {
                $type->setDecision($json[self::FIELD_DECISION]);
            } else {
                $type->setDecision(new FHIRCodeableConcept($json[self::FIELD_DECISION]));
            }
        }
        if (isset($json[self::FIELD_DECISION_MODE]) || array_key_exists(self::FIELD_DECISION_MODE, $json)) {
            if (is_array($json[self::FIELD_DECISION_MODE])) {
                foreach($json[self::FIELD_DECISION_MODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addDecisionMode($v);
                    } else {
                        $type->addDecisionMode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_DECISION_MODE] instanceof FHIRCodeableConcept) {
                $type->addDecisionMode($json[self::FIELD_DECISION_MODE]);
            } else {
                $type->addDecisionMode(new FHIRCodeableConcept($json[self::FIELD_DECISION_MODE]));
            }
        }
        if (isset($json[self::FIELD_ANSWER]) || array_key_exists(self::FIELD_ANSWER, $json)) {
            if (is_array($json[self::FIELD_ANSWER])) {
                foreach($json[self::FIELD_ANSWER] as $v) {
                    if ($v instanceof FHIRContractAnswer) {
                        $type->addAnswer($v);
                    } else {
                        $type->addAnswer(new FHIRContractAnswer($v));
                    }
                }
            } elseif ($json[self::FIELD_ANSWER] instanceof FHIRContractAnswer) {
                $type->addAnswer($json[self::FIELD_ANSWER]);
            } else {
                $type->addAnswer(new FHIRContractAnswer($json[self::FIELD_ANSWER]));
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
        if (isset($json[self::FIELD_LINK_ID]) || isset($json[self::FIELD_LINK_ID_EXT]) || array_key_exists(self::FIELD_LINK_ID, $json) || array_key_exists(self::FIELD_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($json[self::FIELD_LINK_ID_EXT]) && is_array($json[self::FIELD_LINK_ID_EXT])) ? $json[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addLinkId(new FHIRString($iext));
                }
            } else {
                $type->addLinkId(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SECURITY_LABEL_NUMBER]) || isset($json[self::FIELD_SECURITY_LABEL_NUMBER_EXT]) || array_key_exists(self::FIELD_SECURITY_LABEL_NUMBER, $json) || array_key_exists(self::FIELD_SECURITY_LABEL_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_SECURITY_LABEL_NUMBER] ?? null;
            $ext = (isset($json[self::FIELD_SECURITY_LABEL_NUMBER_EXT]) && is_array($json[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) ? $json[self::FIELD_SECURITY_LABEL_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->addSecurityLabelNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUnsignedInt) {
                            $type->addSecurityLabelNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($v, $iext)));
                            } else {
                                $type->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addSecurityLabelNumber(new FHIRUnsignedInt($iext));
                }
            } else {
                $type->addSecurityLabelNumber(new FHIRUnsignedInt(null));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->party) && [] !== $this->party) {
            $out->party = $this->party;
        }
        if (isset($this->topic)) {
            $out->topic = $this->topic;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->decision)) {
            $out->decision = $this->decision;
        }
        if (isset($this->decisionMode) && [] !== $this->decisionMode) {
            $out->decisionMode = $this->decisionMode;
        }
        if (isset($this->answer) && [] !== $this->answer) {
            $out->answer = $this->answer;
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
        if (isset($this->linkId) && [] !== $this->linkId) {
            $vals = [];
            $exts = [];
            foreach ($this->linkId as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->linkId = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_linkId = $exts;
            }
        }
        if (isset($this->securityLabelNumber) && [] !== $this->securityLabelNumber) {
            $vals = [];
            $exts = [];
            foreach ($this->securityLabelNumber as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->securityLabelNumber = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_securityLabelNumber = $exts;
            }
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