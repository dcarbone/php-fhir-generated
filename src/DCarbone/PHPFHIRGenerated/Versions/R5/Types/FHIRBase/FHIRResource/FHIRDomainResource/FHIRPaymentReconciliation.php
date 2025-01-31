<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPaymentOutcome;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPaymentOutcomeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * This resource provides the details including amount of a payment and allocates
 * the payment items being paid.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRPaymentReconciliation extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_KIND = 'kind';
    public const FIELD_PERIOD = 'period';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_ENTERER = 'enterer';
    public const FIELD_ISSUER_TYPE = 'issuerType';
    public const FIELD_PAYMENT_ISSUER = 'paymentIssuer';
    public const FIELD_REQUEST = 'request';
    public const FIELD_REQUESTOR = 'requestor';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_DISPOSITION = 'disposition';
    public const FIELD_DISPOSITION_EXT = '_disposition';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_LOCATION = 'location';
    public const FIELD_METHOD = 'method';
    public const FIELD_CARD_BRAND = 'cardBrand';
    public const FIELD_CARD_BRAND_EXT = '_cardBrand';
    public const FIELD_ACCOUNT_NUMBER = 'accountNumber';
    public const FIELD_ACCOUNT_NUMBER_EXT = '_accountNumber';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    public const FIELD_PROCESSOR = 'processor';
    public const FIELD_PROCESSOR_EXT = '_processor';
    public const FIELD_REFERENCE_NUMBER = 'referenceNumber';
    public const FIELD_REFERENCE_NUMBER_EXT = '_referenceNumber';
    public const FIELD_AUTHORIZATION = 'authorization';
    public const FIELD_AUTHORIZATION_EXT = '_authorization';
    public const FIELD_TENDERED_AMOUNT = 'tenderedAmount';
    public const FIELD_TENDERED_AMOUNT_EXT = '_tenderedAmount';
    public const FIELD_RETURNED_AMOUNT = 'returnedAmount';
    public const FIELD_RETURNED_AMOUNT_EXT = '_returnedAmount';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_AMOUNT_EXT = '_amount';
    public const FIELD_PAYMENT_IDENTIFIER = 'paymentIdentifier';
    public const FIELD_PAYMENT_IDENTIFIER_EXT = '_paymentIdentifier';
    public const FIELD_ALLOCATION = 'allocation';
    public const FIELD_FORM_CODE = 'formCode';
    public const FIELD_PROCESS_NOTE = 'processNote';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CREATED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_AMOUNT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISPOSITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CARD_BRAND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACCOUNT_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPIRATION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROCESSOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REFERENCE_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AUTHORIZATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TENDERED_AMOUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RETURNED_AMOUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AMOUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAYMENT_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this payment reconciliation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate the nature of the payment such as payment, adjustment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes 
     */
    protected FHIRFinancialResourceStatusCodes $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The workflow or activity which gave rise to or during which the payment ocurred
     * such as a kiosk, deposit on account, periodic payment etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $kind;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time for which payments have been gathered into this bulk payment
     * for settlement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the resource was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment enterer if not the actual payment issuer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $enterer;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source such as patient or insurance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $issuerType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who generated the payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $paymentIssuer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $request;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $requestor;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of a request for a reconciliation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPaymentOutcome 
     */
    protected FHIRPaymentOutcome $outcome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the request for the
     * reconciliation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $disposition;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of payment as indicated on the financial instrument.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $date;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location of the site or device for electronic transfers or physical location
     * for cash payments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of
     * payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $cardBrand;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A portion of the account number, often the last 4 digits, used for verification
     * not charging purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $accountNumber;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $expirationDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the card processor, etf processor, bank for checks.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $processor;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The check number, eft reference, car processor reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $referenceNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alphanumeric issued by the processor to confirm the successful issuance of
     * payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $authorization;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount offered by the issuer, typically applies to cash when the issuer
     * provides an amount in bank note denominations equal to or excess of the amount
     * actually being paid.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $tenderedAmount;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount returned by the receiver which is excess to the amount payable, often
     * referred to as 'change'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $returnedAmount;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total payment amount as indicated on the financial instrument.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $amount;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $paymentIdentifier;
    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation[] 
     */
    protected array $allocation;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $formCode;
    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote[] 
     */
    protected array $processNote;

    /* constructor.php:63 */
    /**
     * FHIRPaymentReconciliation Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $kind
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $issuerType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $paymentIssuer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $request
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $requestor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPaymentOutcomeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPaymentOutcome $outcome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $disposition
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $cardBrand
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $accountNumber
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $expirationDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $processor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $referenceNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $authorization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tenderedAmount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $returnedAmount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $amount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $paymentIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation[] $allocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $formCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote[] $processNote
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRFinancialResourceStatusCodesEnum|FHIRFinancialResourceStatusCodes $status = null,
                                null|FHIRCodeableConcept $kind = null,
                                null|FHIRPeriod $period = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $enterer = null,
                                null|FHIRCodeableConcept $issuerType = null,
                                null|FHIRReference $paymentIssuer = null,
                                null|FHIRReference $request = null,
                                null|FHIRReference $requestor = null,
                                null|string|FHIRPaymentOutcomeEnum|FHIRPaymentOutcome $outcome = null,
                                null|string|FHIRStringPrimitive|FHIRString $disposition = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null,
                                null|FHIRReference $location = null,
                                null|FHIRCodeableConcept $method = null,
                                null|string|FHIRStringPrimitive|FHIRString $cardBrand = null,
                                null|string|FHIRStringPrimitive|FHIRString $accountNumber = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $processor = null,
                                null|string|FHIRStringPrimitive|FHIRString $referenceNumber = null,
                                null|string|FHIRStringPrimitive|FHIRString $authorization = null,
                                null|FHIRDecimal|FHIRMoney $tenderedAmount = null,
                                null|FHIRDecimal|FHIRMoney $returnedAmount = null,
                                null|FHIRDecimal|FHIRMoney $amount = null,
                                null|FHIRString|FHIRIdentifier $paymentIdentifier = null,
                                null|iterable $allocation = null,
                                null|FHIRCodeableConcept $formCode = null,
                                null|iterable $processNote = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $kind) {
            $this->setKind($kind);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $enterer) {
            $this->setEnterer($enterer);
        }
        if (null !== $issuerType) {
            $this->setIssuerType($issuerType);
        }
        if (null !== $paymentIssuer) {
            $this->setPaymentIssuer($paymentIssuer);
        }
        if (null !== $request) {
            $this->setRequest($request);
        }
        if (null !== $requestor) {
            $this->setRequestor($requestor);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $disposition) {
            $this->setDisposition($disposition);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $cardBrand) {
            $this->setCardBrand($cardBrand);
        }
        if (null !== $accountNumber) {
            $this->setAccountNumber($accountNumber);
        }
        if (null !== $expirationDate) {
            $this->setExpirationDate($expirationDate);
        }
        if (null !== $processor) {
            $this->setProcessor($processor);
        }
        if (null !== $referenceNumber) {
            $this->setReferenceNumber($referenceNumber);
        }
        if (null !== $authorization) {
            $this->setAuthorization($authorization);
        }
        if (null !== $tenderedAmount) {
            $this->setTenderedAmount($tenderedAmount);
        }
        if (null !== $returnedAmount) {
            $this->setReturnedAmount($returnedAmount);
        }
        if (null !== $amount) {
            $this->setAmount($amount);
        }
        if (null !== $paymentIdentifier) {
            $this->setPaymentIdentifier($paymentIdentifier);
        }
        if (null !== $allocation) {
            $this->setAllocation(...$allocation);
        }
        if (null !== $formCode) {
            $this->setFormCode($formCode);
        }
        if (null !== $processNote) {
            $this->setProcessNote(...$processNote);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:149 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this payment reconciliation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
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
     * A unique identifier assigned to this payment reconciliation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
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
     * A unique identifier assigned to this payment reconciliation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = [];
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->identifier[] = $v;
            } else {
                $this->identifier[] = new FHIRIdentifier(value: $v);
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
     * Code to indicate the nature of the payment such as payment, adjustment.
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
     * Code to indicate the nature of the payment such as payment, adjustment.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRFinancialResourceStatusCodesEnum|FHIRFinancialResourceStatusCodes $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            $status = new FHIRFinancialResourceStatusCodes(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The workflow or activity which gave rise to or during which the payment ocurred
     * such as a kiosk, deposit on account, periodic payment etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getKind(): null|FHIRCodeableConcept
    {
        return $this->kind ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The workflow or activity which gave rise to or during which the payment ocurred
     * such as a kiosk, deposit on account, periodic payment etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $kind
     * @return static
     */
    public function setKind(null|FHIRCodeableConcept $kind): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time for which payments have been gathered into this bulk payment
     * for settlement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time for which payments have been gathered into this bulk payment
     * for settlement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the resource was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $created
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        $this->created = $created;
        if ($this->_valueXMLLocations[self::FIELD_CREATED] !== $valueXMLLocation) {
            $this->_setCreatedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the created element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCreatedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CREATED];
    }

    /**
     * Set the location the "value" field of the created element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCreatedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CREATED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment enterer if not the actual payment issuer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEnterer(): null|FHIRReference
    {
        return $this->enterer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment enterer if not the actual payment issuer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $enterer
     * @return static
     */
    public function setEnterer(null|FHIRReference $enterer): self
    {
        if (null === $enterer) {
            unset($this->enterer);
            return $this;
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source such as patient or insurance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getIssuerType(): null|FHIRCodeableConcept
    {
        return $this->issuerType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source such as patient or insurance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $issuerType
     * @return static
     */
    public function setIssuerType(null|FHIRCodeableConcept $issuerType): self
    {
        if (null === $issuerType) {
            unset($this->issuerType);
            return $this;
        }
        $this->issuerType = $issuerType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who generated the payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPaymentIssuer(): null|FHIRReference
    {
        return $this->paymentIssuer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who generated the payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $paymentIssuer
     * @return static
     */
    public function setPaymentIssuer(null|FHIRReference $paymentIssuer): self
    {
        if (null === $paymentIssuer) {
            unset($this->paymentIssuer);
            return $this;
        }
        $this->paymentIssuer = $paymentIssuer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getRequest(): null|FHIRReference
    {
        return $this->request ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $request
     * @return static
     */
    public function setRequest(null|FHIRReference $request): self
    {
        if (null === $request) {
            unset($this->request);
            return $this;
        }
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getRequestor(): null|FHIRReference
    {
        return $this->requestor ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $requestor
     * @return static
     */
    public function setRequestor(null|FHIRReference $requestor): self
    {
        if (null === $requestor) {
            unset($this->requestor);
            return $this;
        }
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of a request for a reconciliation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPaymentOutcome
     */
    public function getOutcome(): null|FHIRPaymentOutcome
    {
        return $this->outcome ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of a request for a reconciliation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPaymentOutcomeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPaymentOutcome $outcome
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOutcome(null|string|FHIRPaymentOutcomeEnum|FHIRPaymentOutcome $outcome,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        if (!($outcome instanceof FHIRPaymentOutcome)) {
            $outcome = new FHIRPaymentOutcome(value: $outcome);
        }
        $this->outcome = $outcome;
        if ($this->_valueXMLLocations[self::FIELD_OUTCOME] !== $valueXMLLocation) {
            $this->_setOutcomeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the outcome element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOutcomeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OUTCOME];
    }

    /**
     * Set the location the "value" field of the outcome element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOutcomeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OUTCOME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the request for the
     * reconciliation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDisposition(): null|FHIRString
    {
        return $this->disposition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the request for the
     * reconciliation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $disposition
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDisposition(null|string|FHIRStringPrimitive|FHIRString $disposition,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $disposition) {
            unset($this->disposition);
            return $this;
        }
        if (!($disposition instanceof FHIRString)) {
            $disposition = new FHIRString(value: $disposition);
        }
        $this->disposition = $disposition;
        if ($this->_valueXMLLocations[self::FIELD_DISPOSITION] !== $valueXMLLocation) {
            $this->_setDispositionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the disposition element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDispositionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DISPOSITION];
    }

    /**
     * Set the location the "value" field of the disposition element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDispositionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DISPOSITION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of payment as indicated on the financial instrument.
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
     * The date of payment as indicated on the financial instrument.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDate)) {
            $date = new FHIRDate(value: $date);
        }
        $this->date = $date;
        if ($this->_valueXMLLocations[self::FIELD_DATE] !== $valueXMLLocation) {
            $this->_setDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the date element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE];
    }

    /**
     * Set the location the "value" field of the date element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location of the site or device for electronic transfers or physical location
     * for cash payments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location of the site or device for electronic transfers or physical location
     * for cash payments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of
     * payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCardBrand(): null|FHIRString
    {
        return $this->cardBrand ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of
     * payment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $cardBrand
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCardBrand(null|string|FHIRStringPrimitive|FHIRString $cardBrand,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $cardBrand) {
            unset($this->cardBrand);
            return $this;
        }
        if (!($cardBrand instanceof FHIRString)) {
            $cardBrand = new FHIRString(value: $cardBrand);
        }
        $this->cardBrand = $cardBrand;
        if ($this->_valueXMLLocations[self::FIELD_CARD_BRAND] !== $valueXMLLocation) {
            $this->_setCardBrandValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the cardBrand element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCardBrandValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CARD_BRAND];
    }

    /**
     * Set the location the "value" field of the cardBrand element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCardBrandValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CARD_BRAND] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A portion of the account number, often the last 4 digits, used for verification
     * not charging purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAccountNumber(): null|FHIRString
    {
        return $this->accountNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A portion of the account number, often the last 4 digits, used for verification
     * not charging purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $accountNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAccountNumber(null|string|FHIRStringPrimitive|FHIRString $accountNumber,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $accountNumber) {
            unset($this->accountNumber);
            return $this;
        }
        if (!($accountNumber instanceof FHIRString)) {
            $accountNumber = new FHIRString(value: $accountNumber);
        }
        $this->accountNumber = $accountNumber;
        if ($this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER] !== $valueXMLLocation) {
            $this->_setAccountNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the accountNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAccountNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER];
    }

    /**
     * Set the location the "value" field of the accountNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAccountNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getExpirationDate(): null|FHIRDate
    {
        return $this->expirationDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $expirationDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $expirationDate) {
            unset($this->expirationDate);
            return $this;
        }
        if (!($expirationDate instanceof FHIRDate)) {
            $expirationDate = new FHIRDate(value: $expirationDate);
        }
        $this->expirationDate = $expirationDate;
        if ($this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE] !== $valueXMLLocation) {
            $this->_setExpirationDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the expirationDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExpirationDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE];
    }

    /**
     * Set the location the "value" field of the expirationDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExpirationDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the card processor, etf processor, bank for checks.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getProcessor(): null|FHIRString
    {
        return $this->processor ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the card processor, etf processor, bank for checks.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $processor
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setProcessor(null|string|FHIRStringPrimitive|FHIRString $processor,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $processor) {
            unset($this->processor);
            return $this;
        }
        if (!($processor instanceof FHIRString)) {
            $processor = new FHIRString(value: $processor);
        }
        $this->processor = $processor;
        if ($this->_valueXMLLocations[self::FIELD_PROCESSOR] !== $valueXMLLocation) {
            $this->_setProcessorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the processor element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getProcessorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PROCESSOR];
    }

    /**
     * Set the location the "value" field of the processor element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setProcessorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PROCESSOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The check number, eft reference, car processor reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getReferenceNumber(): null|FHIRString
    {
        return $this->referenceNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The check number, eft reference, car processor reference.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $referenceNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReferenceNumber(null|string|FHIRStringPrimitive|FHIRString $referenceNumber,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $referenceNumber) {
            unset($this->referenceNumber);
            return $this;
        }
        if (!($referenceNumber instanceof FHIRString)) {
            $referenceNumber = new FHIRString(value: $referenceNumber);
        }
        $this->referenceNumber = $referenceNumber;
        if ($this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER] !== $valueXMLLocation) {
            $this->_setReferenceNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the referenceNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReferenceNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER];
    }

    /**
     * Set the location the "value" field of the referenceNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReferenceNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alphanumeric issued by the processor to confirm the successful issuance of
     * payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAuthorization(): null|FHIRString
    {
        return $this->authorization ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An alphanumeric issued by the processor to confirm the successful issuance of
     * payment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $authorization
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAuthorization(null|string|FHIRStringPrimitive|FHIRString $authorization,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $authorization) {
            unset($this->authorization);
            return $this;
        }
        if (!($authorization instanceof FHIRString)) {
            $authorization = new FHIRString(value: $authorization);
        }
        $this->authorization = $authorization;
        if ($this->_valueXMLLocations[self::FIELD_AUTHORIZATION] !== $valueXMLLocation) {
            $this->_setAuthorizationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the authorization element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAuthorizationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AUTHORIZATION];
    }

    /**
     * Set the location the "value" field of the authorization element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAuthorizationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AUTHORIZATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount offered by the issuer, typically applies to cash when the issuer
     * provides an amount in bank note denominations equal to or excess of the amount
     * actually being paid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getTenderedAmount(): null|FHIRMoney
    {
        return $this->tenderedAmount ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount offered by the issuer, typically applies to cash when the issuer
     * provides an amount in bank note denominations equal to or excess of the amount
     * actually being paid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tenderedAmount
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTenderedAmount(null|FHIRDecimal|FHIRMoney $tenderedAmount,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $tenderedAmount) {
            unset($this->tenderedAmount);
            return $this;
        }
        if (!($tenderedAmount instanceof FHIRMoney)) {
            $tenderedAmount = new FHIRMoney(value: $tenderedAmount);
        }
        $this->tenderedAmount = $tenderedAmount;
        if ($this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT] !== $valueXMLLocation) {
            $this->_setTenderedAmountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the tenderedAmount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTenderedAmountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT];
    }

    /**
     * Set the location the "value" field of the tenderedAmount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTenderedAmountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT] = $valueXMLLocation;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount returned by the receiver which is excess to the amount payable, often
     * referred to as 'change'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getReturnedAmount(): null|FHIRMoney
    {
        return $this->returnedAmount ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount returned by the receiver which is excess to the amount payable, often
     * referred to as 'change'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $returnedAmount
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReturnedAmount(null|FHIRDecimal|FHIRMoney $returnedAmount,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $returnedAmount) {
            unset($this->returnedAmount);
            return $this;
        }
        if (!($returnedAmount instanceof FHIRMoney)) {
            $returnedAmount = new FHIRMoney(value: $returnedAmount);
        }
        $this->returnedAmount = $returnedAmount;
        if ($this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT] !== $valueXMLLocation) {
            $this->_setReturnedAmountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the returnedAmount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReturnedAmountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT];
    }

    /**
     * Set the location the "value" field of the returnedAmount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReturnedAmountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT] = $valueXMLLocation;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total payment amount as indicated on the financial instrument.
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
     * Total payment amount as indicated on the financial instrument.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $amount
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAmount(null|FHIRDecimal|FHIRMoney $amount,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $amount) {
            unset($this->amount);
            return $this;
        }
        if (!($amount instanceof FHIRMoney)) {
            $amount = new FHIRMoney(value: $amount);
        }
        $this->amount = $amount;
        if ($this->_valueXMLLocations[self::FIELD_AMOUNT] !== $valueXMLLocation) {
            $this->_setAmountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the amount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAmountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AMOUNT];
    }

    /**
     * Set the location the "value" field of the amount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAmountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AMOUNT] = $valueXMLLocation;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getPaymentIdentifier(): null|FHIRIdentifier
    {
        return $this->paymentIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $paymentIdentifier
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPaymentIdentifier(null|FHIRString|FHIRIdentifier $paymentIdentifier,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $paymentIdentifier) {
            unset($this->paymentIdentifier);
            return $this;
        }
        if (!($paymentIdentifier instanceof FHIRIdentifier)) {
            $paymentIdentifier = new FHIRIdentifier(value: $paymentIdentifier);
        }
        $this->paymentIdentifier = $paymentIdentifier;
        if ($this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER] !== $valueXMLLocation) {
            $this->_setPaymentIdentifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the paymentIdentifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPaymentIdentifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER];
    }

    /**
     * Set the location the "value" field of the paymentIdentifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPaymentIdentifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER] = $valueXMLLocation;
        return $this;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation[]
     */
    public function getAllocation(): array
    {
        return $this->allocation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation>
     */
    public function getAllocationIterator(): iterable
    {
        if (!isset($this->allocation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->allocation);
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation $allocation
     * @return static
     */
    public function addAllocation(FHIRPaymentReconciliationAllocation $allocation): self
    {
        if (!isset($this->allocation)) {
            $this->allocation = [];
        }
        $this->allocation[] = $allocation;
        return $this;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationAllocation ...$allocation
     * @return static
     */
    public function setAllocation(FHIRPaymentReconciliationAllocation ...$allocation): self
    {
        if ([] === $allocation) {
            unset($this->allocation);
            return $this;
        }
        $this->allocation = $allocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFormCode(): null|FHIRCodeableConcept
    {
        return $this->formCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $formCode
     * @return static
     */
    public function setFormCode(null|FHIRCodeableConcept $formCode): self
    {
        if (null === $formCode) {
            unset($this->formCode);
            return $this;
        }
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote[]
     */
    public function getProcessNote(): array
    {
        return $this->processNote ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote>
     */
    public function getProcessNoteIterator(): iterable
    {
        if (!isset($this->processNote)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->processNote);
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote $processNote
     * @return static
     */
    public function addProcessNote(FHIRPaymentReconciliationProcessNote $processNote): self
    {
        if (!isset($this->processNote)) {
            $this->processNote = [];
        }
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote ...$processNote
     * @return static
     */
    public function setProcessNote(FHIRPaymentReconciliationProcessNote ...$processNote): self
    {
        if ([] === $processNote) {
            unset($this->processNote);
            return $this;
        }
        $this->processNote = $processNote;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
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
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTERER])) {
            $v = $this->getEnterer();
            foreach($validationRules[self::FIELD_ENTERER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTERER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTERER])) {
                        $errs[self::FIELD_ENTERER] = [];
                    }
                    $errs[self::FIELD_ENTERER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUER_TYPE])) {
            $v = $this->getIssuerType();
            foreach($validationRules[self::FIELD_ISSUER_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ISSUER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUER_TYPE])) {
                        $errs[self::FIELD_ISSUER_TYPE] = [];
                    }
                    $errs[self::FIELD_ISSUER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_ISSUER])) {
            $v = $this->getPaymentIssuer();
            foreach($validationRules[self::FIELD_PAYMENT_ISSUER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_ISSUER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_ISSUER])) {
                        $errs[self::FIELD_PAYMENT_ISSUER] = [];
                    }
                    $errs[self::FIELD_PAYMENT_ISSUER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTOR])) {
            $v = $this->getRequestor();
            foreach($validationRules[self::FIELD_REQUESTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUESTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTOR])) {
                        $errs[self::FIELD_REQUESTOR] = [];
                    }
                    $errs[self::FIELD_REQUESTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPOSITION])) {
            $v = $this->getDisposition();
            foreach($validationRules[self::FIELD_DISPOSITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPOSITION])) {
                        $errs[self::FIELD_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISPOSITION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARD_BRAND])) {
            $v = $this->getCardBrand();
            foreach($validationRules[self::FIELD_CARD_BRAND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CARD_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARD_BRAND])) {
                        $errs[self::FIELD_CARD_BRAND] = [];
                    }
                    $errs[self::FIELD_CARD_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCOUNT_NUMBER])) {
            $v = $this->getAccountNumber();
            foreach($validationRules[self::FIELD_ACCOUNT_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACCOUNT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCOUNT_NUMBER])) {
                        $errs[self::FIELD_ACCOUNT_NUMBER] = [];
                    }
                    $errs[self::FIELD_ACCOUNT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESSOR])) {
            $v = $this->getProcessor();
            foreach($validationRules[self::FIELD_PROCESSOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESSOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESSOR])) {
                        $errs[self::FIELD_PROCESSOR] = [];
                    }
                    $errs[self::FIELD_PROCESSOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_NUMBER])) {
            $v = $this->getReferenceNumber();
            foreach($validationRules[self::FIELD_REFERENCE_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_NUMBER])) {
                        $errs[self::FIELD_REFERENCE_NUMBER] = [];
                    }
                    $errs[self::FIELD_REFERENCE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZATION])) {
            $v = $this->getAuthorization();
            foreach($validationRules[self::FIELD_AUTHORIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZATION])) {
                        $errs[self::FIELD_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TENDERED_AMOUNT])) {
            $v = $this->getTenderedAmount();
            foreach($validationRules[self::FIELD_TENDERED_AMOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TENDERED_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TENDERED_AMOUNT])) {
                        $errs[self::FIELD_TENDERED_AMOUNT] = [];
                    }
                    $errs[self::FIELD_TENDERED_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RETURNED_AMOUNT])) {
            $v = $this->getReturnedAmount();
            foreach($validationRules[self::FIELD_RETURNED_AMOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RETURNED_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RETURNED_AMOUNT])) {
                        $errs[self::FIELD_RETURNED_AMOUNT] = [];
                    }
                    $errs[self::FIELD_RETURNED_AMOUNT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PAYMENT_IDENTIFIER])) {
            $v = $this->getPaymentIdentifier();
            foreach($validationRules[self::FIELD_PAYMENT_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_IDENTIFIER])) {
                        $errs[self::FIELD_PAYMENT_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PAYMENT_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOCATION])) {
            $v = $this->getAllocation();
            foreach($validationRules[self::FIELD_ALLOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOCATION])) {
                        $errs[self::FIELD_ALLOCATION] = [];
                    }
                    $errs[self::FIELD_ALLOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM_CODE])) {
            $v = $this->getFormCode();
            foreach($validationRules[self::FIELD_FORM_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORM_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM_CODE])) {
                        $errs[self::FIELD_FORM_CODE] = [];
                    }
                    $errs[self::FIELD_FORM_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESS_NOTE])) {
            $v = $this->getProcessNote();
            foreach($validationRules[self::FIELD_PROCESS_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESS_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS_NOTE])) {
                        $errs[self::FIELD_PROCESS_NOTE] = [];
                    }
                    $errs[self::FIELD_PROCESS_NOTE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPaymentReconciliation)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KIND === $cen) {
                $type->setKind(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED === $cen) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTERER === $cen) {
                $type->setEnterer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUER_TYPE === $cen) {
                $type->setIssuerType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYMENT_ISSUER === $cen) {
                $type->setPaymentIssuer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST === $cen) {
                $type->setRequest(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUESTOR === $cen) {
                $type->setRequestor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRPaymentOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISPOSITION === $cen) {
                $type->setDisposition(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARD_BRAND === $cen) {
                $type->setCardBrand(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCOUNT_NUMBER === $cen) {
                $type->setAccountNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPIRATION_DATE === $cen) {
                $type->setExpirationDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCESSOR === $cen) {
                $type->setProcessor(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_NUMBER === $cen) {
                $type->setReferenceNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHORIZATION === $cen) {
                $type->setAuthorization(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TENDERED_AMOUNT === $cen) {
                $type->setTenderedAmount(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RETURNED_AMOUNT === $cen) {
                $type->setReturnedAmount(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT === $cen) {
                $type->setAmount(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYMENT_IDENTIFIER === $cen) {
                $type->setPaymentIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOCATION === $cen) {
                $type->addAllocation(FHIRPaymentReconciliationAllocation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORM_CODE === $cen) {
                $type->setFormCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCESS_NOTE === $cen) {
                $type->addProcessNote(FHIRPaymentReconciliationProcessNote::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            if (isset($type->created)) {
                $type->created->setValue((string)$attributes[self::FIELD_CREATED]);
                $type->_setCreatedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OUTCOME])) {
            if (isset($type->outcome)) {
                $type->outcome->setValue((string)$attributes[self::FIELD_OUTCOME]);
                $type->_setOutcomeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOutcome((string)$attributes[self::FIELD_OUTCOME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DISPOSITION])) {
            if (isset($type->disposition)) {
                $type->disposition->setValue((string)$attributes[self::FIELD_DISPOSITION]);
                $type->_setDispositionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDisposition((string)$attributes[self::FIELD_DISPOSITION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
                $type->_setDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CARD_BRAND])) {
            if (isset($type->cardBrand)) {
                $type->cardBrand->setValue((string)$attributes[self::FIELD_CARD_BRAND]);
                $type->_setCardBrandValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCardBrand((string)$attributes[self::FIELD_CARD_BRAND], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACCOUNT_NUMBER])) {
            if (isset($type->accountNumber)) {
                $type->accountNumber->setValue((string)$attributes[self::FIELD_ACCOUNT_NUMBER]);
                $type->_setAccountNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAccountNumber((string)$attributes[self::FIELD_ACCOUNT_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPIRATION_DATE])) {
            if (isset($type->expirationDate)) {
                $type->expirationDate->setValue((string)$attributes[self::FIELD_EXPIRATION_DATE]);
                $type->_setExpirationDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExpirationDate((string)$attributes[self::FIELD_EXPIRATION_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROCESSOR])) {
            if (isset($type->processor)) {
                $type->processor->setValue((string)$attributes[self::FIELD_PROCESSOR]);
                $type->_setProcessorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setProcessor((string)$attributes[self::FIELD_PROCESSOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_NUMBER])) {
            if (isset($type->referenceNumber)) {
                $type->referenceNumber->setValue((string)$attributes[self::FIELD_REFERENCE_NUMBER]);
                $type->_setReferenceNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReferenceNumber((string)$attributes[self::FIELD_REFERENCE_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AUTHORIZATION])) {
            if (isset($type->authorization)) {
                $type->authorization->setValue((string)$attributes[self::FIELD_AUTHORIZATION]);
                $type->_setAuthorizationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAuthorization((string)$attributes[self::FIELD_AUTHORIZATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TENDERED_AMOUNT])) {
            if (isset($type->tenderedAmount)) {
                $type->tenderedAmount->setValue((string)$attributes[self::FIELD_TENDERED_AMOUNT]);
                $type->_setTenderedAmountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTenderedAmount((string)$attributes[self::FIELD_TENDERED_AMOUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RETURNED_AMOUNT])) {
            if (isset($type->returnedAmount)) {
                $type->returnedAmount->setValue((string)$attributes[self::FIELD_RETURNED_AMOUNT]);
                $type->_setReturnedAmountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReturnedAmount((string)$attributes[self::FIELD_RETURNED_AMOUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT])) {
            if (isset($type->amount)) {
                $type->amount->setValue((string)$attributes[self::FIELD_AMOUNT]);
                $type->_setAmountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAmount((string)$attributes[self::FIELD_AMOUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PAYMENT_IDENTIFIER])) {
            if (isset($type->paymentIdentifier)) {
                $type->paymentIdentifier->setValue((string)$attributes[self::FIELD_PAYMENT_IDENTIFIER]);
                $type->_setPaymentIdentifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPaymentIdentifier((string)$attributes[self::FIELD_PAYMENT_IDENTIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('PaymentReconciliation', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->created) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED]) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->_getFormattedValue());
        }
        if (isset($this->outcome) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OUTCOME]) {
            $xw->writeAttribute(self::FIELD_OUTCOME, $this->outcome->_getFormattedValue());
        }
        if (isset($this->disposition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISPOSITION]) {
            $xw->writeAttribute(self::FIELD_DISPOSITION, $this->disposition->_getFormattedValue());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getFormattedValue());
        }
        if (isset($this->cardBrand) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CARD_BRAND]) {
            $xw->writeAttribute(self::FIELD_CARD_BRAND, $this->cardBrand->_getFormattedValue());
        }
        if (isset($this->accountNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER]) {
            $xw->writeAttribute(self::FIELD_ACCOUNT_NUMBER, $this->accountNumber->_getFormattedValue());
        }
        if (isset($this->expirationDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]) {
            $xw->writeAttribute(self::FIELD_EXPIRATION_DATE, $this->expirationDate->_getFormattedValue());
        }
        if (isset($this->processor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROCESSOR]) {
            $xw->writeAttribute(self::FIELD_PROCESSOR, $this->processor->_getFormattedValue());
        }
        if (isset($this->referenceNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER]) {
            $xw->writeAttribute(self::FIELD_REFERENCE_NUMBER, $this->referenceNumber->_getFormattedValue());
        }
        if (isset($this->authorization) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AUTHORIZATION]) {
            $xw->writeAttribute(self::FIELD_AUTHORIZATION, $this->authorization->_getFormattedValue());
        }
        if (isset($this->tenderedAmount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT]) {
            $xw->writeAttribute(self::FIELD_TENDERED_AMOUNT, $this->tenderedAmount->_getFormattedValue());
        }
        if (isset($this->returnedAmount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT]) {
            $xw->writeAttribute(self::FIELD_RETURNED_AMOUNT, $this->returnedAmount->_getFormattedValue());
        }
        if (isset($this->amount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AMOUNT]) {
            $xw->writeAttribute(self::FIELD_AMOUNT, $this->amount->_getFormattedValue());
        }
        if (isset($this->paymentIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_PAYMENT_IDENTIFIER, $this->paymentIdentifier->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->kind)) {
            $xw->startElement(self::FIELD_KIND);
            $this->kind->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->created)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CREATED]
                || $this->created->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CREATED]);
            $xw->endElement();
        }
        if (isset($this->enterer)) {
            $xw->startElement(self::FIELD_ENTERER);
            $this->enterer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issuerType)) {
            $xw->startElement(self::FIELD_ISSUER_TYPE);
            $this->issuerType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentIssuer)) {
            $xw->startElement(self::FIELD_PAYMENT_ISSUER);
            $this->paymentIssuer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->request)) {
            $xw->startElement(self::FIELD_REQUEST);
            $this->request->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestor)) {
            $xw->startElement(self::FIELD_REQUESTOR);
            $this->requestor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outcome)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OUTCOME]
                || $this->outcome->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OUTCOME]);
            $xw->endElement();
        }
        if (isset($this->disposition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISPOSITION]
                || $this->disposition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISPOSITION);
            $this->disposition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISPOSITION]);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cardBrand)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CARD_BRAND]
                || $this->cardBrand->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CARD_BRAND);
            $this->cardBrand->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CARD_BRAND]);
            $xw->endElement();
        }
        if (isset($this->accountNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER]
                || $this->accountNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACCOUNT_NUMBER);
            $this->accountNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACCOUNT_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->expirationDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]
                || $this->expirationDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXPIRATION_DATE);
            $this->expirationDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]);
            $xw->endElement();
        }
        if (isset($this->processor)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROCESSOR]
                || $this->processor->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROCESSOR);
            $this->processor->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROCESSOR]);
            $xw->endElement();
        }
        if (isset($this->referenceNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER]
                || $this->referenceNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REFERENCE_NUMBER);
            $this->referenceNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REFERENCE_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->authorization)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AUTHORIZATION]
                || $this->authorization->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AUTHORIZATION);
            $this->authorization->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AUTHORIZATION]);
            $xw->endElement();
        }
        if (isset($this->tenderedAmount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT]
                || $this->tenderedAmount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TENDERED_AMOUNT);
            $this->tenderedAmount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TENDERED_AMOUNT]);
            $xw->endElement();
        }
        if (isset($this->returnedAmount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT]
                || $this->returnedAmount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RETURNED_AMOUNT);
            $this->returnedAmount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RETURNED_AMOUNT]);
            $xw->endElement();
        }
        if (isset($this->amount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AMOUNT]
                || $this->amount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AMOUNT);
            $this->amount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AMOUNT]);
            $xw->endElement();
        }
        if (isset($this->paymentIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER]
                || $this->paymentIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAYMENT_IDENTIFIER);
            $this->paymentIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAYMENT_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->allocation)) {
            foreach ($this->allocation as $v) {
                $xw->startElement(self::FIELD_ALLOCATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->formCode)) {
            $xw->startElement(self::FIELD_FORM_CODE);
            $this->formCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->processNote)) {
            foreach ($this->processNote as $v) {
                $xw->startElement(self::FIELD_PROCESS_NOTE);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPaymentReconciliation)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER])
            || isset($json[self::FIELD_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = (array)($json[self::FIELD_IDENTIFIER] ?? []);
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRFinancialResourceStatusCodes::jsonUnserialize(
                (is_array($value) ? $value : [FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_KIND]) || array_key_exists(self::FIELD_KIND, $json)) {
            $type->setKind(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_KIND], $config));
        }
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            $type->setPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_PERIOD], $config));
        }
        if (isset($json[self::FIELD_CREATED])
            || isset($json[self::FIELD_CREATED_EXT])
            || array_key_exists(self::FIELD_CREATED, $json)
            || array_key_exists(self::FIELD_CREATED_EXT, $json)) {
            $value = $json[self::FIELD_CREATED] ?? null;
            $type->setCreated(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_CREATED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ENTERER]) || array_key_exists(self::FIELD_ENTERER, $json)) {
            $type->setEnterer(FHIRReference::jsonUnserialize($json[self::FIELD_ENTERER], $config));
        }
        if (isset($json[self::FIELD_ISSUER_TYPE]) || array_key_exists(self::FIELD_ISSUER_TYPE, $json)) {
            $type->setIssuerType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ISSUER_TYPE], $config));
        }
        if (isset($json[self::FIELD_PAYMENT_ISSUER]) || array_key_exists(self::FIELD_PAYMENT_ISSUER, $json)) {
            $type->setPaymentIssuer(FHIRReference::jsonUnserialize($json[self::FIELD_PAYMENT_ISSUER], $config));
        }
        if (isset($json[self::FIELD_REQUEST]) || array_key_exists(self::FIELD_REQUEST, $json)) {
            $type->setRequest(FHIRReference::jsonUnserialize($json[self::FIELD_REQUEST], $config));
        }
        if (isset($json[self::FIELD_REQUESTOR]) || array_key_exists(self::FIELD_REQUESTOR, $json)) {
            $type->setRequestor(FHIRReference::jsonUnserialize($json[self::FIELD_REQUESTOR], $config));
        }
        if (isset($json[self::FIELD_OUTCOME])
            || isset($json[self::FIELD_OUTCOME_EXT])
            || array_key_exists(self::FIELD_OUTCOME, $json)
            || array_key_exists(self::FIELD_OUTCOME_EXT, $json)) {
            $value = $json[self::FIELD_OUTCOME] ?? null;
            $type->setOutcome(FHIRPaymentOutcome::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPaymentOutcome::FIELD_VALUE => $value]) + ($json[self::FIELD_OUTCOME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DISPOSITION])
            || isset($json[self::FIELD_DISPOSITION_EXT])
            || array_key_exists(self::FIELD_DISPOSITION, $json)
            || array_key_exists(self::FIELD_DISPOSITION_EXT, $json)) {
            $value = $json[self::FIELD_DISPOSITION] ?? null;
            $type->setDisposition(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DISPOSITION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DATE])
            || isset($json[self::FIELD_DATE_EXT])
            || array_key_exists(self::FIELD_DATE, $json)
            || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $type->setDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $type->setLocation(FHIRReference::jsonUnserialize($json[self::FIELD_LOCATION], $config));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_METHOD], $config));
        }
        if (isset($json[self::FIELD_CARD_BRAND])
            || isset($json[self::FIELD_CARD_BRAND_EXT])
            || array_key_exists(self::FIELD_CARD_BRAND, $json)
            || array_key_exists(self::FIELD_CARD_BRAND_EXT, $json)) {
            $value = $json[self::FIELD_CARD_BRAND] ?? null;
            $type->setCardBrand(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CARD_BRAND_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ACCOUNT_NUMBER])
            || isset($json[self::FIELD_ACCOUNT_NUMBER_EXT])
            || array_key_exists(self::FIELD_ACCOUNT_NUMBER, $json)
            || array_key_exists(self::FIELD_ACCOUNT_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_ACCOUNT_NUMBER] ?? null;
            $type->setAccountNumber(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ACCOUNT_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXPIRATION_DATE])
            || isset($json[self::FIELD_EXPIRATION_DATE_EXT])
            || array_key_exists(self::FIELD_EXPIRATION_DATE, $json)
            || array_key_exists(self::FIELD_EXPIRATION_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EXPIRATION_DATE] ?? null;
            $type->setExpirationDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_EXPIRATION_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROCESSOR])
            || isset($json[self::FIELD_PROCESSOR_EXT])
            || array_key_exists(self::FIELD_PROCESSOR, $json)
            || array_key_exists(self::FIELD_PROCESSOR_EXT, $json)) {
            $value = $json[self::FIELD_PROCESSOR] ?? null;
            $type->setProcessor(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PROCESSOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REFERENCE_NUMBER])
            || isset($json[self::FIELD_REFERENCE_NUMBER_EXT])
            || array_key_exists(self::FIELD_REFERENCE_NUMBER, $json)
            || array_key_exists(self::FIELD_REFERENCE_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_REFERENCE_NUMBER] ?? null;
            $type->setReferenceNumber(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_REFERENCE_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AUTHORIZATION])
            || isset($json[self::FIELD_AUTHORIZATION_EXT])
            || array_key_exists(self::FIELD_AUTHORIZATION, $json)
            || array_key_exists(self::FIELD_AUTHORIZATION_EXT, $json)) {
            $value = $json[self::FIELD_AUTHORIZATION] ?? null;
            $type->setAuthorization(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_AUTHORIZATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TENDERED_AMOUNT])
            || isset($json[self::FIELD_TENDERED_AMOUNT_EXT])
            || array_key_exists(self::FIELD_TENDERED_AMOUNT, $json)
            || array_key_exists(self::FIELD_TENDERED_AMOUNT_EXT, $json)) {
            $value = $json[self::FIELD_TENDERED_AMOUNT] ?? null;
            $type->setTenderedAmount(FHIRMoney::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMoney::FIELD_VALUE => $value]) + ($json[self::FIELD_TENDERED_AMOUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RETURNED_AMOUNT])
            || isset($json[self::FIELD_RETURNED_AMOUNT_EXT])
            || array_key_exists(self::FIELD_RETURNED_AMOUNT, $json)
            || array_key_exists(self::FIELD_RETURNED_AMOUNT_EXT, $json)) {
            $value = $json[self::FIELD_RETURNED_AMOUNT] ?? null;
            $type->setReturnedAmount(FHIRMoney::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMoney::FIELD_VALUE => $value]) + ($json[self::FIELD_RETURNED_AMOUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AMOUNT])
            || isset($json[self::FIELD_AMOUNT_EXT])
            || array_key_exists(self::FIELD_AMOUNT, $json)
            || array_key_exists(self::FIELD_AMOUNT_EXT, $json)) {
            $value = $json[self::FIELD_AMOUNT] ?? null;
            $type->setAmount(FHIRMoney::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMoney::FIELD_VALUE => $value]) + ($json[self::FIELD_AMOUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_IDENTIFIER])
            || isset($json[self::FIELD_PAYMENT_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_PAYMENT_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_PAYMENT_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_PAYMENT_IDENTIFIER] ?? null;
            $type->setPaymentIdentifier(FHIRIdentifier::jsonUnserialize(
                (is_array($value) ? $value : [FHIRIdentifier::FIELD_VALUE => $value]) + ($json[self::FIELD_PAYMENT_IDENTIFIER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ALLOCATION]) || array_key_exists(self::FIELD_ALLOCATION, $json)) {
            $vs = $json[self::FIELD_ALLOCATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAllocation(FHIRPaymentReconciliationAllocation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_FORM_CODE]) || array_key_exists(self::FIELD_FORM_CODE, $json)) {
            $type->setFormCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_FORM_CODE], $config));
        }
        if (isset($json[self::FIELD_PROCESS_NOTE]) || array_key_exists(self::FIELD_PROCESS_NOTE, $json)) {
            $vs = $json[self::FIELD_PROCESS_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProcessNote(FHIRPaymentReconciliationProcessNote::jsonUnserialize($v, $config));
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
            $vals = [];
            $exts = [];
            foreach ($this->identifier as $v) {
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
                $out->identifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_identifier = $exts;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->kind)) {
            $out->kind = $this->kind;
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            $ext = $this->created->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_created = $ext;
            }
        }
        if (isset($this->enterer)) {
            $out->enterer = $this->enterer;
        }
        if (isset($this->issuerType)) {
            $out->issuerType = $this->issuerType;
        }
        if (isset($this->paymentIssuer)) {
            $out->paymentIssuer = $this->paymentIssuer;
        }
        if (isset($this->request)) {
            $out->request = $this->request;
        }
        if (isset($this->requestor)) {
            $out->requestor = $this->requestor;
        }
        if (isset($this->outcome)) {
            if (null !== ($val = $this->outcome->getValue())) {
                $out->outcome = $val;
            }
            $ext = $this->outcome->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_outcome = $ext;
            }
        }
        if (isset($this->disposition)) {
            if (null !== ($val = $this->disposition->getValue())) {
                $out->disposition = $val;
            }
            $ext = $this->disposition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_disposition = $ext;
            }
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
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->cardBrand)) {
            if (null !== ($val = $this->cardBrand->getValue())) {
                $out->cardBrand = $val;
            }
            $ext = $this->cardBrand->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_cardBrand = $ext;
            }
        }
        if (isset($this->accountNumber)) {
            if (null !== ($val = $this->accountNumber->getValue())) {
                $out->accountNumber = $val;
            }
            $ext = $this->accountNumber->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_accountNumber = $ext;
            }
        }
        if (isset($this->expirationDate)) {
            if (null !== ($val = $this->expirationDate->getValue())) {
                $out->expirationDate = $val;
            }
            $ext = $this->expirationDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_expirationDate = $ext;
            }
        }
        if (isset($this->processor)) {
            if (null !== ($val = $this->processor->getValue())) {
                $out->processor = $val;
            }
            $ext = $this->processor->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_processor = $ext;
            }
        }
        if (isset($this->referenceNumber)) {
            if (null !== ($val = $this->referenceNumber->getValue())) {
                $out->referenceNumber = $val;
            }
            $ext = $this->referenceNumber->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_referenceNumber = $ext;
            }
        }
        if (isset($this->authorization)) {
            if (null !== ($val = $this->authorization->getValue())) {
                $out->authorization = $val;
            }
            $ext = $this->authorization->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_authorization = $ext;
            }
        }
        if (isset($this->tenderedAmount)) {
            if (null !== ($val = $this->tenderedAmount->getValue())) {
                $out->tenderedAmount = $val;
            }
            $ext = $this->tenderedAmount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_tenderedAmount = $ext;
            }
        }
        if (isset($this->returnedAmount)) {
            if (null !== ($val = $this->returnedAmount->getValue())) {
                $out->returnedAmount = $val;
            }
            $ext = $this->returnedAmount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_returnedAmount = $ext;
            }
        }
        if (isset($this->amount)) {
            if (null !== ($val = $this->amount->getValue())) {
                $out->amount = $val;
            }
            $ext = $this->amount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_amount = $ext;
            }
        }
        if (isset($this->paymentIdentifier)) {
            if (null !== ($val = $this->paymentIdentifier->getValue())) {
                $out->paymentIdentifier = $val;
            }
            $ext = $this->paymentIdentifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_paymentIdentifier = $ext;
            }
        }
        if (isset($this->allocation) && [] !== $this->allocation) {
            $out->allocation = $this->allocation;
        }
        if (isset($this->formCode)) {
            $out->formCode = $this->formCode;
        }
        if (isset($this->processNote) && [] !== $this->processNote) {
            $out->processNote = $this->processNote;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}