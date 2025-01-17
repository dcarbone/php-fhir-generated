<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation;

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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides the details including amount of a payment and allocates
 * the payment items being paid.
 */
class FHIRPaymentReconciliationAllocation extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_ALLOCATION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_PREDECESSOR = 'predecessor';
    public const FIELD_TARGET = 'target';
    public const FIELD_TARGET_ITEM_STRING = 'targetItemString';
    public const FIELD_TARGET_ITEM_STRING_EXT = '_targetItemString';
    public const FIELD_TARGET_ITEM_IDENTIFIER = 'targetItemIdentifier';
    public const FIELD_TARGET_ITEM_POSITIVE_INT = 'targetItemPositiveInt';
    public const FIELD_TARGET_ITEM_POSITIVE_INT_EXT = '_targetItemPositiveInt';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_ACCOUNT = 'account';
    public const FIELD_TYPE = 'type';
    public const FIELD_SUBMITTER = 'submitter';
    public const FIELD_RESPONSE = 'response';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_RESPONSIBLE = 'responsible';
    public const FIELD_PAYEE = 'payee';
    public const FIELD_AMOUNT = 'amount';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $predecessor;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $target;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $targetItemString;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $targetItemIdentifier;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $targetItemPositiveInt;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Account to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $account;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate the nature of the payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which submitted the claim or financial transaction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $submitter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $response;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $date;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the individual who is responsible for inquiries regarding the
     * response and its payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $responsible;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which is receiving the payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $payee;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The monetary amount allocated from the total payment to the payable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $amount;

    /** Default validation map for fields in type PaymentReconciliation.Allocation */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRPaymentReconciliationAllocation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $predecessor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $target
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $targetItemString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $targetItemIdentifier
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $targetItemPositiveInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $account
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $submitter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $response
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $responsible
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $payee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $amount
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $identifier = null,
                                null|FHIRIdentifier $predecessor = null,
                                null|FHIRReference $target = null,
                                null|string|FHIRStringPrimitive|FHIRString $targetItemString = null,
                                null|FHIRIdentifier $targetItemIdentifier = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $targetItemPositiveInt = null,
                                null|FHIRReference $encounter = null,
                                null|FHIRReference $account = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRReference $submitter = null,
                                null|FHIRReference $response = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null,
                                null|FHIRReference $responsible = null,
                                null|FHIRReference $payee = null,
                                null|FHIRMoney $amount = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $predecessor) {
            $this->setPredecessor($predecessor);
        }
        if (null !== $target) {
            $this->setTarget($target);
        }
        if (null !== $targetItemString) {
            $this->setTargetItemString($targetItemString);
        }
        if (null !== $targetItemIdentifier) {
            $this->setTargetItemIdentifier($targetItemIdentifier);
        }
        if (null !== $targetItemPositiveInt) {
            $this->setTargetItemPositiveInt($targetItemPositiveInt);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $account) {
            $this->setAccount($account);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $submitter) {
            $this->setSubmitter($submitter);
        }
        if (null !== $response) {
            $this->setResponse($response);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $responsible) {
            $this->setResponsible($responsible);
        }
        if (null !== $payee) {
            $this->setPayee($payee);
        }
        if (null !== $amount) {
            $this->setAmount($amount);
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
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getPredecessor(): null|FHIRIdentifier
    {
        return $this->predecessor ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $predecessor
     * @return static
     */
    public function setPredecessor(null|FHIRIdentifier $predecessor): self
    {
        if (null === $predecessor) {
            unset($this->predecessor);
            return $this;
        }
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getTarget(): null|FHIRReference
    {
        return $this->target ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $target
     * @return static
     */
    public function setTarget(null|FHIRReference $target): self
    {
        if (null === $target) {
            unset($this->target);
            return $this;
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTargetItemString(): null|FHIRString
    {
        return $this->targetItemString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $targetItemString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetItemString(null|string|FHIRStringPrimitive|FHIRString $targetItemString,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $targetItemString) {
            unset($this->targetItemString);
            return $this;
        }
        if (!($targetItemString instanceof FHIRString)) {
            $targetItemString = new FHIRString(value: $targetItemString);
        }
        if (null !== $valueXMLLocation) {
            $targetItemString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $targetItemString->_getValueXMLLocation()) {
            $targetItemString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->targetItemString = $targetItemString;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getTargetItemIdentifier(): null|FHIRIdentifier
    {
        return $this->targetItemIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $targetItemIdentifier
     * @return static
     */
    public function setTargetItemIdentifier(null|FHIRIdentifier $targetItemIdentifier): self
    {
        if (null === $targetItemIdentifier) {
            unset($this->targetItemIdentifier);
            return $this;
        }
        $this->targetItemIdentifier = $targetItemIdentifier;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getTargetItemPositiveInt(): null|FHIRPositiveInt
    {
        return $this->targetItemPositiveInt ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the claim line item, encounter or other sub-element being paid. Note
     * payment may be partial, that is not match the then outstanding balance or amount
     * incurred.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $targetItemPositiveInt
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetItemPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $targetItemPositiveInt,
                                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $targetItemPositiveInt) {
            unset($this->targetItemPositiveInt);
            return $this;
        }
        if (!($targetItemPositiveInt instanceof FHIRPositiveInt)) {
            $targetItemPositiveInt = new FHIRPositiveInt(value: $targetItemPositiveInt);
        }
        if (null !== $valueXMLLocation) {
            $targetItemPositiveInt->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $targetItemPositiveInt->_getValueXMLLocation()) {
            $targetItemPositiveInt->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->targetItemPositiveInt = $targetItemPositiveInt;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Account to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAccount(): null|FHIRReference
    {
        return $this->account ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Account to which this payment applies, may be completed by the receiver,
     * used for search.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $account
     * @return static
     */
    public function setAccount(null|FHIRReference $account): self
    {
        if (null === $account) {
            unset($this->account);
            return $this;
        }
        $this->account = $account;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate the nature of the payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Code to indicate the nature of the payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which submitted the claim or financial transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubmitter(): null|FHIRReference
    {
        return $this->submitter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which submitted the claim or financial transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $submitter
     * @return static
     */
    public function setSubmitter(null|FHIRReference $submitter): self
    {
        if (null === $submitter) {
            unset($this->submitter);
            return $this;
        }
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getResponse(): null|FHIRReference
    {
        return $this->response ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $response
     * @return static
     */
    public function setResponse(null|FHIRReference $response): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        $this->response = $response;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getDate(): null|FHIRDate
    {
        return $this->date ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDate)) {
            $date = new FHIRDate(value: $date);
        }
        if (null !== $valueXMLLocation) {
            $date->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $date->_getValueXMLLocation()) {
            $date->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the individual who is responsible for inquiries regarding the
     * response and its payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getResponsible(): null|FHIRReference
    {
        return $this->responsible ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the individual who is responsible for inquiries regarding the
     * response and its payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $responsible
     * @return static
     */
    public function setResponsible(null|FHIRReference $responsible): self
    {
        if (null === $responsible) {
            unset($this->responsible);
            return $this;
        }
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which is receiving the payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPayee(): null|FHIRReference
    {
        return $this->payee ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party which is receiving the payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $payee
     * @return static
     */
    public function setPayee(null|FHIRReference $payee): self
    {
        if (null === $payee) {
            unset($this->payee);
            return $this;
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The monetary amount allocated from the total payment to the payable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getAmount(): null|FHIRMoney
    {
        return $this->amount ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The monetary amount allocated from the total payment to the payable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $amount
     * @return static
     */
    public function setAmount(null|FHIRMoney $amount): self
    {
        if (null === $amount) {
            unset($this->amount);
            return $this;
        }
        $this->amount = $amount;
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
        if (isset($validationRules[self::FIELD_PREDECESSOR])) {
            $v = $this->getPredecessor();
            foreach($validationRules[self::FIELD_PREDECESSOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREDECESSOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREDECESSOR])) {
                        $errs[self::FIELD_PREDECESSOR] = [];
                    }
                    $errs[self::FIELD_PREDECESSOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ITEM_STRING])) {
            $v = $this->getTargetItemString();
            foreach($validationRules[self::FIELD_TARGET_ITEM_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_ITEM_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ITEM_STRING])) {
                        $errs[self::FIELD_TARGET_ITEM_STRING] = [];
                    }
                    $errs[self::FIELD_TARGET_ITEM_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ITEM_IDENTIFIER])) {
            $v = $this->getTargetItemIdentifier();
            foreach($validationRules[self::FIELD_TARGET_ITEM_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_ITEM_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ITEM_IDENTIFIER])) {
                        $errs[self::FIELD_TARGET_ITEM_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_TARGET_ITEM_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ITEM_POSITIVE_INT])) {
            $v = $this->getTargetItemPositiveInt();
            foreach($validationRules[self::FIELD_TARGET_ITEM_POSITIVE_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_ITEM_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ITEM_POSITIVE_INT])) {
                        $errs[self::FIELD_TARGET_ITEM_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_TARGET_ITEM_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCOUNT])) {
            $v = $this->getAccount();
            foreach($validationRules[self::FIELD_ACCOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACCOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCOUNT])) {
                        $errs[self::FIELD_ACCOUNT] = [];
                    }
                    $errs[self::FIELD_ACCOUNT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SUBMITTER])) {
            $v = $this->getSubmitter();
            foreach($validationRules[self::FIELD_SUBMITTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBMITTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBMITTER])) {
                        $errs[self::FIELD_SUBMITTER] = [];
                    }
                    $errs[self::FIELD_SUBMITTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSIBLE])) {
            $v = $this->getResponsible();
            foreach($validationRules[self::FIELD_RESPONSIBLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESPONSIBLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSIBLE])) {
                        $errs[self::FIELD_RESPONSIBLE] = [];
                    }
                    $errs[self::FIELD_RESPONSIBLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYEE])) {
            $v = $this->getPayee();
            foreach($validationRules[self::FIELD_PAYEE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYEE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYEE])) {
                        $errs[self::FIELD_PAYEE] = [];
                    }
                    $errs[self::FIELD_PAYEE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPaymentReconciliationAllocation)) {
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
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PREDECESSOR === $childName) {
                $v = new FHIRIdentifier();
                $type->setPredecessor(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET === $childName) {
                $v = new FHIRReference();
                $type->setTarget(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_ITEM_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTargetItemString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_ITEM_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setTargetItemIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_ITEM_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTargetItemPositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACCOUNT === $childName) {
                $v = new FHIRReference();
                $type->setAccount(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBMITTER === $childName) {
                $v = new FHIRReference();
                $type->setSubmitter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESPONSE === $childName) {
                $v = new FHIRReference();
                $type->setResponse(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESPONSIBLE === $childName) {
                $v = new FHIRReference();
                $type->setResponsible(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYEE === $childName) {
                $v = new FHIRReference();
                $type->setPayee(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT === $childName) {
                $v = new FHIRMoney();
                $type->setAmount(FHIRMoney::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_TARGET_ITEM_STRING])) {
            $pt = $type->getTargetItemString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET_ITEM_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetItemString(new FHIRString(
                    value: (string)$attributes[self::FIELD_TARGET_ITEM_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET_ITEM_POSITIVE_INT])) {
            $pt = $type->getTargetItemPositiveInt();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET_ITEM_POSITIVE_INT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetItemPositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_TARGET_ITEM_POSITIVE_INT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('PaymentReconciliationAllocation', $this->_getSourceXMLNS());
        }
        if (isset($this->targetItemString) && $this->targetItemString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET_ITEM_STRING, $this->targetItemString->getValue()?->_getFormattedValue());
        }
        if (isset($this->targetItemPositiveInt) && $this->targetItemPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET_ITEM_POSITIVE_INT, $this->targetItemPositiveInt->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->predecessor)) {
            $xw->startElement(self::FIELD_PREDECESSOR);
            $this->predecessor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->target)) {
            $xw->startElement(self::FIELD_TARGET);
            $this->target->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetItemString) && $this->targetItemString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET_ITEM_STRING);
            $this->targetItemString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetItemIdentifier)) {
            $xw->startElement(self::FIELD_TARGET_ITEM_IDENTIFIER);
            $this->targetItemIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetItemPositiveInt) && $this->targetItemPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET_ITEM_POSITIVE_INT);
            $this->targetItemPositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->account)) {
            $xw->startElement(self::FIELD_ACCOUNT);
            $this->account->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->submitter)) {
            $xw->startElement(self::FIELD_SUBMITTER);
            $this->submitter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->response)) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->responsible)) {
            $xw->startElement(self::FIELD_RESPONSIBLE);
            $this->responsible->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->payee)) {
            $xw->startElement(self::FIELD_PAYEE);
            $this->payee->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amount)) {
            $xw->startElement(self::FIELD_AMOUNT);
            $this->amount->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPaymentReconciliationAllocation)) {
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
        if (isset($json[self::FIELD_PREDECESSOR]) || array_key_exists(self::FIELD_PREDECESSOR, $json)) {
            if ($json[self::FIELD_PREDECESSOR] instanceof FHIRIdentifier) {
                $type->setPredecessor($json[self::FIELD_PREDECESSOR]);
            } else {
                $type->setPredecessor(new FHIRIdentifier($json[self::FIELD_PREDECESSOR]));
            }
        }
        if (isset($json[self::FIELD_TARGET]) || array_key_exists(self::FIELD_TARGET, $json)) {
            if ($json[self::FIELD_TARGET] instanceof FHIRReference) {
                $type->setTarget($json[self::FIELD_TARGET]);
            } else {
                $type->setTarget(new FHIRReference($json[self::FIELD_TARGET]));
            }
        }
        if (isset($json[self::FIELD_TARGET_ITEM_STRING]) || isset($json[self::FIELD_TARGET_ITEM_STRING_EXT]) || array_key_exists(self::FIELD_TARGET_ITEM_STRING, $json) || array_key_exists(self::FIELD_TARGET_ITEM_STRING_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_ITEM_STRING] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_ITEM_STRING_EXT]) && is_array($json[self::FIELD_TARGET_ITEM_STRING_EXT])) ? $json[self::FIELD_TARGET_ITEM_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTargetItemString($value);
                } else if (is_array($value)) {
                    $type->setTargetItemString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTargetItemString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTargetItemString(new FHIRString($ext));
            } else {
                $type->setTargetItemString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TARGET_ITEM_IDENTIFIER]) || array_key_exists(self::FIELD_TARGET_ITEM_IDENTIFIER, $json)) {
            if ($json[self::FIELD_TARGET_ITEM_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setTargetItemIdentifier($json[self::FIELD_TARGET_ITEM_IDENTIFIER]);
            } else {
                $type->setTargetItemIdentifier(new FHIRIdentifier($json[self::FIELD_TARGET_ITEM_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_TARGET_ITEM_POSITIVE_INT]) || isset($json[self::FIELD_TARGET_ITEM_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_TARGET_ITEM_POSITIVE_INT, $json) || array_key_exists(self::FIELD_TARGET_ITEM_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_ITEM_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_ITEM_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_TARGET_ITEM_POSITIVE_INT_EXT])) ? $json[self::FIELD_TARGET_ITEM_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setTargetItemPositiveInt($value);
                } else if (is_array($value)) {
                    $type->setTargetItemPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setTargetItemPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTargetItemPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setTargetItemPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->setEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->setEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_ACCOUNT]) || array_key_exists(self::FIELD_ACCOUNT, $json)) {
            if ($json[self::FIELD_ACCOUNT] instanceof FHIRReference) {
                $type->setAccount($json[self::FIELD_ACCOUNT]);
            } else {
                $type->setAccount(new FHIRReference($json[self::FIELD_ACCOUNT]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SUBMITTER]) || array_key_exists(self::FIELD_SUBMITTER, $json)) {
            if ($json[self::FIELD_SUBMITTER] instanceof FHIRReference) {
                $type->setSubmitter($json[self::FIELD_SUBMITTER]);
            } else {
                $type->setSubmitter(new FHIRReference($json[self::FIELD_SUBMITTER]));
            }
        }
        if (isset($json[self::FIELD_RESPONSE]) || array_key_exists(self::FIELD_RESPONSE, $json)) {
            if ($json[self::FIELD_RESPONSE] instanceof FHIRReference) {
                $type->setResponse($json[self::FIELD_RESPONSE]);
            } else {
                $type->setResponse(new FHIRReference($json[self::FIELD_RESPONSE]));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDate($ext));
            } else {
                $type->setDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_RESPONSIBLE]) || array_key_exists(self::FIELD_RESPONSIBLE, $json)) {
            if ($json[self::FIELD_RESPONSIBLE] instanceof FHIRReference) {
                $type->setResponsible($json[self::FIELD_RESPONSIBLE]);
            } else {
                $type->setResponsible(new FHIRReference($json[self::FIELD_RESPONSIBLE]));
            }
        }
        if (isset($json[self::FIELD_PAYEE]) || array_key_exists(self::FIELD_PAYEE, $json)) {
            if ($json[self::FIELD_PAYEE] instanceof FHIRReference) {
                $type->setPayee($json[self::FIELD_PAYEE]);
            } else {
                $type->setPayee(new FHIRReference($json[self::FIELD_PAYEE]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT]) || array_key_exists(self::FIELD_AMOUNT, $json)) {
            if ($json[self::FIELD_AMOUNT] instanceof FHIRMoney) {
                $type->setAmount($json[self::FIELD_AMOUNT]);
            } else {
                $type->setAmount(new FHIRMoney($json[self::FIELD_AMOUNT]));
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
        if (isset($this->predecessor)) {
            $out->predecessor = $this->predecessor;
        }
        if (isset($this->target)) {
            $out->target = $this->target;
        }
        if (isset($this->targetItemString)) {
            if (null !== ($val = $this->targetItemString->getValue())) {
                $out->targetItemString = $val;
            }
            $ext = $this->targetItemString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_targetItemString = $ext;
            }
        }
        if (isset($this->targetItemIdentifier)) {
            $out->targetItemIdentifier = $this->targetItemIdentifier;
        }
        if (isset($this->targetItemPositiveInt)) {
            if (null !== ($val = $this->targetItemPositiveInt->getValue())) {
                $out->targetItemPositiveInt = $val;
            }
            $ext = $this->targetItemPositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_targetItemPositiveInt = $ext;
            }
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->account)) {
            $out->account = $this->account;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->submitter)) {
            $out->submitter = $this->submitter;
        }
        if (isset($this->response)) {
            $out->response = $this->response;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->responsible)) {
            $out->responsible = $this->responsible;
        }
        if (isset($this->payee)) {
            $out->payee = $this->payee;
        }
        if (isset($this->amount)) {
            $out->amount = $this->amount;
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