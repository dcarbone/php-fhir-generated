<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRClaimResponseAddItem extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM;

    /* class_default.php:56 */
    public const FIELD_ITEM_SEQUENCE = 'itemSequence';
    public const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    public const FIELD_DETAIL_SEQUENCE = 'detailSequence';
    public const FIELD_DETAIL_SEQUENCE_EXT = '_detailSequence';
    public const FIELD_SUBDETAIL_SEQUENCE = 'subdetailSequence';
    public const FIELD_SUBDETAIL_SEQUENCE_EXT = '_subdetailSequence';
    public const FIELD_TRACE_NUMBER = 'traceNumber';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_REVENUE = 'revenue';
    public const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    public const FIELD_PRODUCT_OR_SERVICE_END = 'productOrServiceEnd';
    public const FIELD_REQUEST = 'request';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_PROGRAM_CODE = 'programCode';
    public const FIELD_SERVICED_DATE = 'servicedDate';
    public const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    public const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    public const FIELD_LOCATION_CODEABLE_CONCEPT = 'locationCodeableConcept';
    public const FIELD_LOCATION_ADDRESS = 'locationAddress';
    public const FIELD_LOCATION_REFERENCE = 'locationReference';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_UNIT_PRICE = 'unitPrice';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_TAX = 'tax';
    public const FIELD_NET = 'net';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_REVIEW_OUTCOME = 'reviewOutcome';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_DETAIL = 'detail';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_SERVICED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Claim items which this service line is intended to replace.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $itemSequence;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the details within the claim item which this line is
     * intended to replace.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $detailSequence;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-details within the details within the claim item
     * which this line is intended to replace.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $subdetailSequence;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $traceNumber;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $provider;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $revenue;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $productOrService;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $productOrServiceEnd;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $request;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $modifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $programCode;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    #[FHIRDate]
    protected FHIRDate $servicedDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $servicedPeriod;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $locationCodeableConcept;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress 
     */
    #[FHIRAddress]
    protected FHIRAddress $locationAddress;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $locationReference;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $quantity;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $unitPrice;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $factor;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $tax;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit
     * price * quantity * factor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $net;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Physical location where the service is performed or applies.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite> 
     */
    #[FHIRClaimResponseBodySite]
    protected array $bodySite;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $noteNumber;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome 
     */
    #[FHIRClaimResponseReviewOutcome]
    protected FHIRClaimResponseReviewOutcome $reviewOutcome;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication> 
     */
    #[FHIRClaimResponseAdjudication]
    protected array $adjudication;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second-tier service adjudications for payor added services.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1> 
     */
    #[FHIRClaimResponseDetail1]
    protected array $detail;

    /* constructor.php:61 */
    /**
     * FHIRClaimResponseAddItem Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $itemSequence
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $detailSequence
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $subdetailSequence
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $traceNumber
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $provider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $revenue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrService
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrServiceEnd
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $request
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $modifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $programCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $servicedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $servicedPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $locationCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $locationAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $locationReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $unitPrice
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tax
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $net
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite> $bodySite
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication> $adjudication
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1> $detail
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $itemSequence = null,
                                null|iterable $detailSequence = null,
                                null|iterable $subdetailSequence = null,
                                null|iterable $traceNumber = null,
                                null|iterable $provider = null,
                                null|FHIRCodeableConcept $revenue = null,
                                null|FHIRCodeableConcept $productOrService = null,
                                null|FHIRCodeableConcept $productOrServiceEnd = null,
                                null|iterable $request = null,
                                null|iterable $modifier = null,
                                null|iterable $programCode = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $servicedDate = null,
                                null|FHIRPeriod $servicedPeriod = null,
                                null|FHIRCodeableConcept $locationCodeableConcept = null,
                                null|FHIRAddress $locationAddress = null,
                                null|FHIRReference $locationReference = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRMoney $unitPrice = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|FHIRMoney $tax = null,
                                null|FHIRMoney $net = null,
                                null|iterable $bodySite = null,
                                null|iterable $noteNumber = null,
                                null|FHIRClaimResponseReviewOutcome $reviewOutcome = null,
                                null|iterable $adjudication = null,
                                null|iterable $detail = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $itemSequence) {
            $this->setItemSequence(...$itemSequence);
        }
        if (null !== $detailSequence) {
            $this->setDetailSequence(...$detailSequence);
        }
        if (null !== $subdetailSequence) {
            $this->setSubdetailSequence(...$subdetailSequence);
        }
        if (null !== $traceNumber) {
            $this->setTraceNumber(...$traceNumber);
        }
        if (null !== $provider) {
            $this->setProvider(...$provider);
        }
        if (null !== $revenue) {
            $this->setRevenue($revenue);
        }
        if (null !== $productOrService) {
            $this->setProductOrService($productOrService);
        }
        if (null !== $productOrServiceEnd) {
            $this->setProductOrServiceEnd($productOrServiceEnd);
        }
        if (null !== $request) {
            $this->setRequest(...$request);
        }
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
        }
        if (null !== $programCode) {
            $this->setProgramCode(...$programCode);
        }
        if (null !== $servicedDate) {
            $this->setServicedDate($servicedDate);
        }
        if (null !== $servicedPeriod) {
            $this->setServicedPeriod($servicedPeriod);
        }
        if (null !== $locationCodeableConcept) {
            $this->setLocationCodeableConcept($locationCodeableConcept);
        }
        if (null !== $locationAddress) {
            $this->setLocationAddress($locationAddress);
        }
        if (null !== $locationReference) {
            $this->setLocationReference($locationReference);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $unitPrice) {
            $this->setUnitPrice($unitPrice);
        }
        if (null !== $factor) {
            $this->setFactor($factor);
        }
        if (null !== $tax) {
            $this->setTax($tax);
        }
        if (null !== $net) {
            $this->setNet($net);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $reviewOutcome) {
            $this->setReviewOutcome($reviewOutcome);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $detail) {
            $this->setDetail(...$detail);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Claim items which this service line is intended to replace.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getItemSequence(): array
    {
        return $this->itemSequence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getItemSequenceIterator(): iterable
    {
        if (!isset($this->itemSequence)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->itemSequence);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Claim items which this service line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $itemSequence
     * @return static
     */
    public function addItemSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence): self
    {
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            $itemSequence = new FHIRPositiveInt(value: $itemSequence);
        }
        if (!isset($this->itemSequence)) {
            $this->itemSequence = [];
        }
        $this->itemSequence[] = $itemSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Claim items which this service line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$itemSequence
     * @return static
     */
    public function setItemSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$itemSequence): self
    {
        if ([] === $itemSequence) {
            unset($this->itemSequence);
            return $this;
        }
        $this->itemSequence = [];
        foreach($itemSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->itemSequence[] = $v;
            } else {
                $this->itemSequence[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the details within the claim item which this line is
     * intended to replace.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getDetailSequence(): array
    {
        return $this->detailSequence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getDetailSequenceIterator(): iterable
    {
        if (!isset($this->detailSequence)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->detailSequence);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the details within the claim item which this line is
     * intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $detailSequence
     * @return static
     */
    public function addDetailSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequence): self
    {
        if (!($detailSequence instanceof FHIRPositiveInt)) {
            $detailSequence = new FHIRPositiveInt(value: $detailSequence);
        }
        if (!isset($this->detailSequence)) {
            $this->detailSequence = [];
        }
        $this->detailSequence[] = $detailSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the details within the claim item which this line is
     * intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$detailSequence
     * @return static
     */
    public function setDetailSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$detailSequence): self
    {
        if ([] === $detailSequence) {
            unset($this->detailSequence);
            return $this;
        }
        $this->detailSequence = [];
        foreach($detailSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->detailSequence[] = $v;
            } else {
                $this->detailSequence[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-details within the details within the claim item
     * which this line is intended to replace.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getSubdetailSequence(): array
    {
        return $this->subdetailSequence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getSubdetailSequenceIterator(): iterable
    {
        if (!isset($this->subdetailSequence)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subdetailSequence);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-details within the details within the claim item
     * which this line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $subdetailSequence
     * @return static
     */
    public function addSubdetailSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subdetailSequence): self
    {
        if (!($subdetailSequence instanceof FHIRPositiveInt)) {
            $subdetailSequence = new FHIRPositiveInt(value: $subdetailSequence);
        }
        if (!isset($this->subdetailSequence)) {
            $this->subdetailSequence = [];
        }
        $this->subdetailSequence[] = $subdetailSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-details within the details within the claim item
     * which this line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$subdetailSequence
     * @return static
     */
    public function setSubdetailSequence(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$subdetailSequence): self
    {
        if ([] === $subdetailSequence) {
            unset($this->subdetailSequence);
            return $this;
        }
        $this->subdetailSequence = [];
        foreach($subdetailSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->subdetailSequence[] = $v;
            } else {
                $this->subdetailSequence[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getTraceNumber(): array
    {
        return $this->traceNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getTraceNumberIterator(): iterable
    {
        if (!isset($this->traceNumber)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->traceNumber);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $traceNumber
     * @return static
     */
    public function addTraceNumber(FHIRIdentifier $traceNumber): self
    {
        if (!isset($this->traceNumber)) {
            $this->traceNumber = [];
        }
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$traceNumber
     * @return static
     */
    public function setTraceNumber(FHIRIdentifier ...$traceNumber): self
    {
        if ([] === $traceNumber) {
            unset($this->traceNumber);
            return $this;
        }
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getProvider(): array
    {
        return $this->provider ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getProviderIterator(): iterable
    {
        if (!isset($this->provider)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->provider);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $provider
     * @return static
     */
    public function addProvider(FHIRReference $provider): self
    {
        if (!isset($this->provider)) {
            $this->provider = [];
        }
        $this->provider[] = $provider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$provider
     * @return static
     */
    public function setProvider(FHIRReference ...$provider): self
    {
        if ([] === $provider) {
            unset($this->provider);
            return $this;
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRevenue(): null|FHIRCodeableConcept
    {
        return $this->revenue ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $revenue
     * @return static
     */
    public function setRevenue(null|FHIRCodeableConcept $revenue): self
    {
        if (null === $revenue) {
            unset($this->revenue);
            return $this;
        }
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductOrService(): null|FHIRCodeableConcept
    {
        return $this->productOrService ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related item
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item. This element may be the start of a range of .productOrService
     * codes used in conjunction with .productOrServiceEnd or it may be a solo element
     * where .productOrServiceEnd is not used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrService
     * @return static
     */
    public function setProductOrService(null|FHIRCodeableConcept $productOrService): self
    {
        if (null === $productOrService) {
            unset($this->productOrService);
            return $this;
        }
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductOrServiceEnd(): null|FHIRCodeableConcept
    {
        return $this->productOrServiceEnd ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the end of a range of product, service, drug or other billing
     * codes for the item. This element is not used when the .productOrService is a
     * group code. This value may only be present when a .productOfService code has
     * been provided to convey the start of the range. Typically this value may be used
     * only with preauthorizations and not with claims.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrServiceEnd
     * @return static
     */
    public function setProductOrServiceEnd(null|FHIRCodeableConcept $productOrServiceEnd): self
    {
        if (null === $productOrServiceEnd) {
            unset($this->productOrServiceEnd);
            return $this;
        }
        $this->productOrServiceEnd = $productOrServiceEnd;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getRequest(): array
    {
        return $this->request ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getRequestIterator(): iterable
    {
        if (!isset($this->request)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->request);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $request
     * @return static
     */
    public function addRequest(FHIRReference $request): self
    {
        if (!isset($this->request)) {
            $this->request = [];
        }
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$request
     * @return static
     */
    public function setRequest(FHIRReference ...$request): self
    {
        if ([] === $request) {
            unset($this->request);
            return $this;
        }
        $this->request = $request;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getModifier(): array
    {
        return $this->modifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getModifierIterator(): iterable
    {
        if (!isset($this->modifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $modifier
     * @return static
     */
    public function addModifier(FHIRCodeableConcept $modifier): self
    {
        if (!isset($this->modifier)) {
            $this->modifier = [];
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$modifier
     * @return static
     */
    public function setModifier(FHIRCodeableConcept ...$modifier): self
    {
        if ([] === $modifier) {
            unset($this->modifier);
            return $this;
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getProgramCode(): array
    {
        return $this->programCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getProgramCodeIterator(): iterable
    {
        if (!isset($this->programCode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->programCode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $programCode
     * @return static
     */
    public function addProgramCode(FHIRCodeableConcept $programCode): self
    {
        if (!isset($this->programCode)) {
            $this->programCode = [];
        }
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$programCode
     * @return static
     */
    public function setProgramCode(FHIRCodeableConcept ...$programCode): self
    {
        if ([] === $programCode) {
            unset($this->programCode);
            return $this;
        }
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getServicedDate(): null|FHIRDate
    {
        return $this->servicedDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $servicedDate
     * @return static
     */
    public function setServicedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $servicedDate): self
    {
        if (null === $servicedDate) {
            unset($this->servicedDate);
            return $this;
        }
        if (!($servicedDate instanceof FHIRDate)) {
            $servicedDate = new FHIRDate(value: $servicedDate);
        }
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getServicedPeriod(): null|FHIRPeriod
    {
        return $this->servicedPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $servicedPeriod
     * @return static
     */
    public function setServicedPeriod(null|FHIRPeriod $servicedPeriod): self
    {
        if (null === $servicedPeriod) {
            unset($this->servicedPeriod);
            return $this;
        }
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLocationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->locationCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $locationCodeableConcept
     * @return static
     */
    public function setLocationCodeableConcept(null|FHIRCodeableConcept $locationCodeableConcept): self
    {
        if (null === $locationCodeableConcept) {
            unset($this->locationCodeableConcept);
            return $this;
        }
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    public function getLocationAddress(): null|FHIRAddress
    {
        return $this->locationAddress ?? null;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $locationAddress
     * @return static
     */
    public function setLocationAddress(null|FHIRAddress $locationAddress): self
    {
        if (null === $locationAddress) {
            unset($this->locationAddress);
            return $this;
        }
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocationReference(): null|FHIRReference
    {
        return $this->locationReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided. (choose any one of location*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $locationReference
     * @return static
     */
    public function setLocationReference(null|FHIRReference $locationReference): self
    {
        if (null === $locationReference) {
            unset($this->locationReference);
            return $this;
        }
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getUnitPrice(): null|FHIRMoney
    {
        return $this->unitPrice ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $unitPrice
     * @return static
     */
    public function setUnitPrice(null|FHIRMoney $unitPrice): self
    {
        if (null === $unitPrice) {
            unset($this->unitPrice);
            return $this;
        }
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor): self
    {
        if (null === $factor) {
            unset($this->factor);
            return $this;
        }
        if (!($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal(value: $factor);
        }
        $this->factor = $factor;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getTax(): null|FHIRMoney
    {
        return $this->tax ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total of taxes applicable for this product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tax
     * @return static
     */
    public function setTax(null|FHIRMoney $tax): self
    {
        if (null === $tax) {
            unset($this->tax);
            return $this;
        }
        $this->tax = $tax;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit
     * price * quantity * factor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getNet(): null|FHIRMoney
    {
        return $this->net ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit
     * price * quantity * factor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $net
     * @return static
     */
    public function setNet(null|FHIRMoney $net): self
    {
        if (null === $net) {
            unset($this->net);
            return $this;
        }
        $this->net = $net;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Physical location where the service is performed or applies.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite>
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite>
     */
    public function getBodySiteIterator(): iterable
    {
        if (!isset($this->bodySite)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodySite);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Physical location where the service is performed or applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite $bodySite
     * @return static
     */
    public function addBodySite(FHIRClaimResponseBodySite $bodySite): self
    {
        if (!isset($this->bodySite)) {
            $this->bodySite = [];
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Physical location where the service is performed or applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseBodySite ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRClaimResponseBodySite ...$bodySite): self
    {
        if ([] === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getNoteNumber(): array
    {
        return $this->noteNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getNoteNumberIterator(): iterable
    {
        if (!isset($this->noteNumber)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->noteNumber);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber): self
    {
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            $noteNumber = new FHIRPositiveInt(value: $noteNumber);
        }
        if (!isset($this->noteNumber)) {
            $this->noteNumber = [];
        }
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$noteNumber
     * @return static
     */
    public function setNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$noteNumber): self
    {
        if ([] === $noteNumber) {
            unset($this->noteNumber);
            return $this;
        }
        $this->noteNumber = [];
        foreach($noteNumber as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->noteNumber[] = $v;
            } else {
                $this->noteNumber[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome
     */
    public function getReviewOutcome(): null|FHIRClaimResponseReviewOutcome
    {
        return $this->reviewOutcome ?? null;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @return static
     */
    public function setReviewOutcome(null|FHIRClaimResponseReviewOutcome $reviewOutcome): self
    {
        if (null === $reviewOutcome) {
            unset($this->reviewOutcome);
            return $this;
        }
        $this->reviewOutcome = $reviewOutcome;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication>
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication>
     */
    public function getAdjudicationIterator(): iterable
    {
        if (!isset($this->adjudication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->adjudication);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRClaimResponseAdjudication $adjudication): self
    {
        if (!isset($this->adjudication)) {
            $this->adjudication = [];
        }
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRClaimResponseAdjudication ...$adjudication): self
    {
        if ([] === $adjudication) {
            unset($this->adjudication);
            return $this;
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second-tier service adjudications for payor added services.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1>
     */
    public function getDetail(): array
    {
        return $this->detail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1>
     */
    public function getDetailIterator(): iterable
    {
        if (!isset($this->detail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->detail);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second-tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1 $detail
     * @return static
     */
    public function addDetail(FHIRClaimResponseDetail1 $detail): self
    {
        if (!isset($this->detail)) {
            $this->detail = [];
        }
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second-tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1 ...$detail
     * @return static
     */
    public function setDetail(FHIRClaimResponseDetail1 ...$detail): self
    {
        if ([] === $detail) {
            unset($this->detail);
            return $this;
        }
        $this->detail = $detail;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseAddItem)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM_SEQUENCE === $cen) {
                $type->addItemSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_SEQUENCE === $cen) {
                $type->addDetailSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBDETAIL_SEQUENCE === $cen) {
                $type->addSubdetailSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRACE_NUMBER === $cen) {
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROVIDER === $cen) {
                $type->addProvider(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVENUE === $cen) {
                $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_OR_SERVICE === $cen) {
                $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_OR_SERVICE_END === $cen) {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST === $cen) {
                $type->addRequest(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER === $cen) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROGRAM_CODE === $cen) {
                $type->addProgramCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICED_DATE === $cen) {
                $type->setServicedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICED_PERIOD === $cen) {
                $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION_CODEABLE_CONCEPT === $cen) {
                $type->setLocationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION_ADDRESS === $cen) {
                $type->setLocationAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION_REFERENCE === $cen) {
                $type->setLocationReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT_PRICE === $cen) {
                $type->setUnitPrice(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACTOR === $cen) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TAX === $cen) {
                $type->setTax(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NET === $cen) {
                $type->setNet(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRClaimResponseBodySite::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVIEW_OUTCOME === $cen) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->addDetail(FHIRClaimResponseDetail1::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SERVICED_DATE])) {
            if (isset($type->servicedDate)) {
                $type->servicedDate->setValue((string)$attributes[self::FIELD_SERVICED_DATE]);
            } else {
                $type->setServicedDate((string)$attributes[self::FIELD_SERVICED_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SERVICED_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FACTOR])) {
            if (isset($type->factor)) {
                $type->factor->setValue((string)$attributes[self::FIELD_FACTOR]);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FACTOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->servicedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERVICED_DATE]) {
            $xw->writeAttribute(self::FIELD_SERVICED_DATE, $this->servicedDate->_getValueAsString());
        }
        if (isset($this->factor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FACTOR]) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->itemSequence) && [] !== $this->itemSequence) {
            foreach($this->itemSequence as $v) {
                $xw->startElement(self::FIELD_ITEM_SEQUENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->detailSequence) && [] !== $this->detailSequence) {
            foreach($this->detailSequence as $v) {
                $xw->startElement(self::FIELD_DETAIL_SEQUENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subdetailSequence) && [] !== $this->subdetailSequence) {
            foreach($this->subdetailSequence as $v) {
                $xw->startElement(self::FIELD_SUBDETAIL_SEQUENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->traceNumber)) {
            foreach ($this->traceNumber as $v) {
                $xw->startElement(self::FIELD_TRACE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->provider)) {
            foreach ($this->provider as $v) {
                $xw->startElement(self::FIELD_PROVIDER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->revenue)) {
            $xw->startElement(self::FIELD_REVENUE);
            $this->revenue->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->productOrService)) {
            $xw->startElement(self::FIELD_PRODUCT_OR_SERVICE);
            $this->productOrService->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->productOrServiceEnd)) {
            $xw->startElement(self::FIELD_PRODUCT_OR_SERVICE_END);
            $this->productOrServiceEnd->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->request)) {
            foreach ($this->request as $v) {
                $xw->startElement(self::FIELD_REQUEST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modifier)) {
            foreach ($this->modifier as $v) {
                $xw->startElement(self::FIELD_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->programCode)) {
            foreach ($this->programCode as $v) {
                $xw->startElement(self::FIELD_PROGRAM_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->servicedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERVICED_DATE]
                || $this->servicedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERVICED_DATE);
            $this->servicedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERVICED_DATE]);
            $xw->endElement();
        }
        if (isset($this->servicedPeriod)) {
            $xw->startElement(self::FIELD_SERVICED_PERIOD);
            $this->servicedPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->locationCodeableConcept)) {
            $xw->startElement(self::FIELD_LOCATION_CODEABLE_CONCEPT);
            $this->locationCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->locationAddress)) {
            $xw->startElement(self::FIELD_LOCATION_ADDRESS);
            $this->locationAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->locationReference)) {
            $xw->startElement(self::FIELD_LOCATION_REFERENCE);
            $this->locationReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unitPrice)) {
            $xw->startElement(self::FIELD_UNIT_PRICE);
            $this->unitPrice->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->factor)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FACTOR]
                || $this->factor->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FACTOR);
            $this->factor->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FACTOR]);
            $xw->endElement();
        }
        if (isset($this->tax)) {
            $xw->startElement(self::FIELD_TAX);
            $this->tax->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->net)) {
            $xw->startElement(self::FIELD_NET);
            $this->net->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bodySite)) {
            foreach ($this->bodySite as $v) {
                $xw->startElement(self::FIELD_BODY_SITE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            foreach($this->noteNumber as $v) {
                $xw->startElement(self::FIELD_NOTE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reviewOutcome)) {
            $xw->startElement(self::FIELD_REVIEW_OUTCOME);
            $this->reviewOutcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->adjudication)) {
            foreach ($this->adjudication as $v) {
                $xw->startElement(self::FIELD_ADJUDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->detail)) {
            foreach ($this->detail as $v) {
                $xw->startElement(self::FIELD_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseAddItem)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->itemSequence)
            || isset($decoded->_itemSequence)
            || property_exists($decoded, self::FIELD_ITEM_SEQUENCE)
            || property_exists($decoded, self::FIELD_ITEM_SEQUENCE_EXT)) {
            $vals = (array)($decoded->itemSequence ?? []);
            $exts = (array)($decoded->FIELD_ITEM_SEQUENCE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addItemSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->detailSequence)
            || isset($decoded->_detailSequence)
            || property_exists($decoded, self::FIELD_DETAIL_SEQUENCE)
            || property_exists($decoded, self::FIELD_DETAIL_SEQUENCE_EXT)) {
            $vals = (array)($decoded->detailSequence ?? []);
            $exts = (array)($decoded->FIELD_DETAIL_SEQUENCE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addDetailSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->subdetailSequence)
            || isset($decoded->_subdetailSequence)
            || property_exists($decoded, self::FIELD_SUBDETAIL_SEQUENCE)
            || property_exists($decoded, self::FIELD_SUBDETAIL_SEQUENCE_EXT)) {
            $vals = (array)($decoded->subdetailSequence ?? []);
            $exts = (array)($decoded->FIELD_SUBDETAIL_SEQUENCE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addSubdetailSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->traceNumber) || property_exists($decoded, self::FIELD_TRACE_NUMBER)) {
            if (is_object($decoded->traceNumber)) {
                $vals = [$decoded->traceNumber];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER, true);
            } else {
                $vals = $decoded->traceNumber;
            }
            foreach($vals as $v) {
                $type->addTraceNumber(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->provider) || property_exists($decoded, self::FIELD_PROVIDER)) {
            if (is_object($decoded->provider)) {
                $vals = [$decoded->provider];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROVIDER, true);
            } else {
                $vals = $decoded->provider;
            }
            foreach($vals as $v) {
                $type->addProvider(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->revenue) || property_exists($decoded, self::FIELD_REVENUE)) {
            if (is_array($decoded->revenue)) {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize(reset($decoded->revenue), $config));
            } else {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize($decoded->revenue, $config));
            }
        }
        if (isset($decoded->productOrService) || property_exists($decoded, self::FIELD_PRODUCT_OR_SERVICE)) {
            if (is_array($decoded->productOrService)) {
                $type->setProductOrService(FHIRCodeableConcept::jsonUnserialize(reset($decoded->productOrService), $config));
            } else {
                $type->setProductOrService(FHIRCodeableConcept::jsonUnserialize($decoded->productOrService, $config));
            }
        }
        if (isset($decoded->productOrServiceEnd) || property_exists($decoded, self::FIELD_PRODUCT_OR_SERVICE_END)) {
            if (is_array($decoded->productOrServiceEnd)) {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::jsonUnserialize(reset($decoded->productOrServiceEnd), $config));
            } else {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::jsonUnserialize($decoded->productOrServiceEnd, $config));
            }
        }
        if (isset($decoded->request) || property_exists($decoded, self::FIELD_REQUEST)) {
            if (is_object($decoded->request)) {
                $vals = [$decoded->request];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REQUEST, true);
            } else {
                $vals = $decoded->request;
            }
            foreach($vals as $v) {
                $type->addRequest(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->modifier) || property_exists($decoded, self::FIELD_MODIFIER)) {
            if (is_object($decoded->modifier)) {
                $vals = [$decoded->modifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODIFIER, true);
            } else {
                $vals = $decoded->modifier;
            }
            foreach($vals as $v) {
                $type->addModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->programCode) || property_exists($decoded, self::FIELD_PROGRAM_CODE)) {
            if (is_object($decoded->programCode)) {
                $vals = [$decoded->programCode];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROGRAM_CODE, true);
            } else {
                $vals = $decoded->programCode;
            }
            foreach($vals as $v) {
                $type->addProgramCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->servicedDate)
            || isset($decoded->_servicedDate)
            || property_exists($decoded, self::FIELD_SERVICED_DATE)
            || property_exists($decoded, self::FIELD_SERVICED_DATE_EXT)) {
            $v = $decoded->_servicedDate ?? new \stdClass();
            $v->value = $decoded->servicedDate ?? null;
            $type->setServicedDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->servicedPeriod) || property_exists($decoded, self::FIELD_SERVICED_PERIOD)) {
            if (is_array($decoded->servicedPeriod)) {
                $type->setServicedPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->servicedPeriod), $config));
            } else {
                $type->setServicedPeriod(FHIRPeriod::jsonUnserialize($decoded->servicedPeriod, $config));
            }
        }
        if (isset($decoded->locationCodeableConcept) || property_exists($decoded, self::FIELD_LOCATION_CODEABLE_CONCEPT)) {
            if (is_array($decoded->locationCodeableConcept)) {
                $type->setLocationCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->locationCodeableConcept), $config));
            } else {
                $type->setLocationCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->locationCodeableConcept, $config));
            }
        }
        if (isset($decoded->locationAddress) || property_exists($decoded, self::FIELD_LOCATION_ADDRESS)) {
            if (is_array($decoded->locationAddress)) {
                $type->setLocationAddress(FHIRAddress::jsonUnserialize(reset($decoded->locationAddress), $config));
            } else {
                $type->setLocationAddress(FHIRAddress::jsonUnserialize($decoded->locationAddress, $config));
            }
        }
        if (isset($decoded->locationReference) || property_exists($decoded, self::FIELD_LOCATION_REFERENCE)) {
            if (is_array($decoded->locationReference)) {
                $type->setLocationReference(FHIRReference::jsonUnserialize(reset($decoded->locationReference), $config));
            } else {
                $type->setLocationReference(FHIRReference::jsonUnserialize($decoded->locationReference, $config));
            }
        }
        if (isset($decoded->quantity) || property_exists($decoded, self::FIELD_QUANTITY)) {
            if (is_array($decoded->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($decoded->quantity, $config));
            }
        }
        if (isset($decoded->unitPrice) || property_exists($decoded, self::FIELD_UNIT_PRICE)) {
            if (is_array($decoded->unitPrice)) {
                $type->setUnitPrice(FHIRMoney::jsonUnserialize(reset($decoded->unitPrice), $config));
            } else {
                $type->setUnitPrice(FHIRMoney::jsonUnserialize($decoded->unitPrice, $config));
            }
        }
        if (isset($decoded->factor)
            || isset($decoded->_factor)
            || property_exists($decoded, self::FIELD_FACTOR)
            || property_exists($decoded, self::FIELD_FACTOR_EXT)) {
            $v = $decoded->_factor ?? new \stdClass();
            $v->value = $decoded->factor ?? null;
            $type->setFactor(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->tax) || property_exists($decoded, self::FIELD_TAX)) {
            if (is_array($decoded->tax)) {
                $type->setTax(FHIRMoney::jsonUnserialize(reset($decoded->tax), $config));
            } else {
                $type->setTax(FHIRMoney::jsonUnserialize($decoded->tax, $config));
            }
        }
        if (isset($decoded->net) || property_exists($decoded, self::FIELD_NET)) {
            if (is_array($decoded->net)) {
                $type->setNet(FHIRMoney::jsonUnserialize(reset($decoded->net), $config));
            } else {
                $type->setNet(FHIRMoney::jsonUnserialize($decoded->net, $config));
            }
        }
        if (isset($decoded->bodySite) || property_exists($decoded, self::FIELD_BODY_SITE)) {
            if (is_object($decoded->bodySite)) {
                $vals = [$decoded->bodySite];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BODY_SITE, true);
            } else {
                $vals = $decoded->bodySite;
            }
            foreach($vals as $v) {
                $type->addBodySite(FHIRClaimResponseBodySite::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->noteNumber)
            || isset($decoded->_noteNumber)
            || property_exists($decoded, self::FIELD_NOTE_NUMBER)
            || property_exists($decoded, self::FIELD_NOTE_NUMBER_EXT)) {
            $vals = (array)($decoded->noteNumber ?? []);
            $exts = (array)($decoded->FIELD_NOTE_NUMBER_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addNoteNumber(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->reviewOutcome) || property_exists($decoded, self::FIELD_REVIEW_OUTCOME)) {
            if (is_array($decoded->reviewOutcome)) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize(reset($decoded->reviewOutcome), $config));
            } else {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize($decoded->reviewOutcome, $config));
            }
        }
        if (isset($decoded->adjudication) || property_exists($decoded, self::FIELD_ADJUDICATION)) {
            if (is_object($decoded->adjudication)) {
                $vals = [$decoded->adjudication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION, true);
            } else {
                $vals = $decoded->adjudication;
            }
            foreach($vals as $v) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->detail) || property_exists($decoded, self::FIELD_DETAIL)) {
            if (is_object($decoded->detail)) {
                $vals = [$decoded->detail];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DETAIL, true);
            } else {
                $vals = $decoded->detail;
            }
            foreach($vals as $v) {
                $type->addDetail(FHIRClaimResponseDetail1::jsonUnserialize($v, $config));
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
        if (isset($this->itemSequence) && [] !== $this->itemSequence) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->itemSequence as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->itemSequence = $vals;
            }
            if ($hasExts) {
                $out->_itemSequence = $exts;
            }
        }
        if (isset($this->detailSequence) && [] !== $this->detailSequence) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->detailSequence as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->detailSequence = $vals;
            }
            if ($hasExts) {
                $out->_detailSequence = $exts;
            }
        }
        if (isset($this->subdetailSequence) && [] !== $this->subdetailSequence) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->subdetailSequence as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->subdetailSequence = $vals;
            }
            if ($hasExts) {
                $out->_subdetailSequence = $exts;
            }
        }
        if (isset($this->traceNumber) && [] !== $this->traceNumber) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER) && 1 === count($this->traceNumber)) {
                $out->traceNumber = $this->traceNumber[0];
            } else {
                $out->traceNumber = $this->traceNumber;
            }
        }
        if (isset($this->provider) && [] !== $this->provider) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROVIDER) && 1 === count($this->provider)) {
                $out->provider = $this->provider[0];
            } else {
                $out->provider = $this->provider;
            }
        }
        if (isset($this->revenue)) {
            $out->revenue = $this->revenue;
        }
        if (isset($this->productOrService)) {
            $out->productOrService = $this->productOrService;
        }
        if (isset($this->productOrServiceEnd)) {
            $out->productOrServiceEnd = $this->productOrServiceEnd;
        }
        if (isset($this->request) && [] !== $this->request) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REQUEST) && 1 === count($this->request)) {
                $out->request = $this->request[0];
            } else {
                $out->request = $this->request;
            }
        }
        if (isset($this->modifier) && [] !== $this->modifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODIFIER) && 1 === count($this->modifier)) {
                $out->modifier = $this->modifier[0];
            } else {
                $out->modifier = $this->modifier;
            }
        }
        if (isset($this->programCode) && [] !== $this->programCode) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROGRAM_CODE) && 1 === count($this->programCode)) {
                $out->programCode = $this->programCode[0];
            } else {
                $out->programCode = $this->programCode;
            }
        }
        if (isset($this->servicedDate)) {
            if (null !== ($val = $this->servicedDate->getValue())) {
                $out->servicedDate = $val;
            }
            if ($this->servicedDate->_nonValueFieldDefined()) {
                $ext = $this->servicedDate->jsonSerialize();
                unset($ext->value);
                $out->_servicedDate = $ext;
            }
        }
        if (isset($this->servicedPeriod)) {
            $out->servicedPeriod = $this->servicedPeriod;
        }
        if (isset($this->locationCodeableConcept)) {
            $out->locationCodeableConcept = $this->locationCodeableConcept;
        }
        if (isset($this->locationAddress)) {
            $out->locationAddress = $this->locationAddress;
        }
        if (isset($this->locationReference)) {
            $out->locationReference = $this->locationReference;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->unitPrice)) {
            $out->unitPrice = $this->unitPrice;
        }
        if (isset($this->factor)) {
            if (null !== ($val = $this->factor->getValue())) {
                $out->factor = $val;
            }
            if ($this->factor->_nonValueFieldDefined()) {
                $ext = $this->factor->jsonSerialize();
                unset($ext->value);
                $out->_factor = $ext;
            }
        }
        if (isset($this->tax)) {
            $out->tax = $this->tax;
        }
        if (isset($this->net)) {
            $out->net = $this->net;
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BODY_SITE) && 1 === count($this->bodySite)) {
                $out->bodySite = $this->bodySite[0];
            } else {
                $out->bodySite = $this->bodySite;
            }
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->noteNumber as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->noteNumber = $vals;
            }
            if ($hasExts) {
                $out->_noteNumber = $exts;
            }
        }
        if (isset($this->reviewOutcome)) {
            $out->reviewOutcome = $this->reviewOutcome;
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION) && 1 === count($this->adjudication)) {
                $out->adjudication = $this->adjudication[0];
            } else {
                $out->adjudication = $this->adjudication;
            }
        }
        if (isset($this->detail) && [] !== $this->detail) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DETAIL) && 1 === count($this->detail)) {
                $out->detail = $this->detail[0];
            } else {
                $out->detail = $this->detail;
            }
        }
        return $out;
    }
}