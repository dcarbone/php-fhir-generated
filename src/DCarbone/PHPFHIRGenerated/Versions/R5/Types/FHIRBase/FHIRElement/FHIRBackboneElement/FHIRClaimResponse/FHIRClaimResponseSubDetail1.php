<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
class FHIRClaimResponseSubDetail1 extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL_1;

    /* class_default.php:50 */
    public const FIELD_TRACE_NUMBER = 'traceNumber';
    public const FIELD_REVENUE = 'revenue';
    public const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    public const FIELD_PRODUCT_OR_SERVICE_END = 'productOrServiceEnd';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_UNIT_PRICE = 'unitPrice';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_TAX = 'tax';
    public const FIELD_NET = 'net';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_REVIEW_OUTCOME = 'reviewOutcome';
    public const FIELD_ADJUDICATION = 'adjudication';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $traceNumber;
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
    protected FHIRCodeableConcept $productOrServiceEnd;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $modifier;
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
    protected FHIRMoney $tax;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total amount claimed for the addItem.detail.subDetail. Net = unit price *
     * quantity * factor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $net;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $noteNumber;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome 
     */
    protected FHIRClaimResponseReviewOutcome $reviewOutcome;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] 
     */
    protected array $adjudication;

    /* constructor.php:61 */
    /**
     * FHIRClaimResponseSubDetail1 Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $traceNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $revenue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrService
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productOrServiceEnd
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $modifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $unitPrice
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $tax
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $net
     * @param null|string[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $traceNumber = null,
                                null|FHIRCodeableConcept $revenue = null,
                                null|FHIRCodeableConcept $productOrService = null,
                                null|FHIRCodeableConcept $productOrServiceEnd = null,
                                null|iterable $modifier = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRMoney $unitPrice = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|FHIRMoney $tax = null,
                                null|FHIRMoney $net = null,
                                null|iterable $noteNumber = null,
                                null|FHIRClaimResponseReviewOutcome $reviewOutcome = null,
                                null|iterable $adjudication = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $traceNumber) {
            $this->setTraceNumber(...$traceNumber);
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
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
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
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $reviewOutcome) {
            $this->setReviewOutcome($reviewOutcome);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * The total amount claimed for the addItem.detail.subDetail. Net = unit price *
     * quantity * factor.
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
     * The total amount claimed for the addItem.detail.subDetail. Net = unit price *
     * quantity * factor.
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[]
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
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

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseSubDetail1)) {
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
            } else if (self::FIELD_TRACE_NUMBER === $cen) {
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVENUE === $cen) {
                $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_OR_SERVICE === $cen) {
                $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_OR_SERVICE_END === $cen) {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER === $cen) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVIEW_OUTCOME === $cen) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->factor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FACTOR]) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->traceNumber)) {
            foreach ($this->traceNumber as $v) {
                $xw->startElement(self::FIELD_TRACE_NUMBER);
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
        if (isset($this->modifier)) {
            foreach ($this->modifier as $v) {
                $xw->startElement(self::FIELD_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseSubDetail1)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->traceNumber) || property_exists($json, self::FIELD_TRACE_NUMBER)) {
            if (is_object($json->traceNumber)) {
                $vals = [$json->traceNumber];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER, true);
            } else {
                $vals = $json->traceNumber;
            }
            foreach($vals as $v) {
                $type->addTraceNumber(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->revenue) || property_exists($json, self::FIELD_REVENUE)) {
            if (is_array($json->revenue)) {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize(reset($json->revenue), $config));
            } else {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize($json->revenue, $config));
            }
        }
        if (isset($json->productOrService) || property_exists($json, self::FIELD_PRODUCT_OR_SERVICE)) {
            if (is_array($json->productOrService)) {
                $type->setProductOrService(FHIRCodeableConcept::jsonUnserialize(reset($json->productOrService), $config));
            } else {
                $type->setProductOrService(FHIRCodeableConcept::jsonUnserialize($json->productOrService, $config));
            }
        }
        if (isset($json->productOrServiceEnd) || property_exists($json, self::FIELD_PRODUCT_OR_SERVICE_END)) {
            if (is_array($json->productOrServiceEnd)) {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::jsonUnserialize(reset($json->productOrServiceEnd), $config));
            } else {
                $type->setProductOrServiceEnd(FHIRCodeableConcept::jsonUnserialize($json->productOrServiceEnd, $config));
            }
        }
        if (isset($json->modifier) || property_exists($json, self::FIELD_MODIFIER)) {
            if (is_object($json->modifier)) {
                $vals = [$json->modifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODIFIER, true);
            } else {
                $vals = $json->modifier;
            }
            foreach($vals as $v) {
                $type->addModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->unitPrice) || property_exists($json, self::FIELD_UNIT_PRICE)) {
            if (is_array($json->unitPrice)) {
                $type->setUnitPrice(FHIRMoney::jsonUnserialize(reset($json->unitPrice), $config));
            } else {
                $type->setUnitPrice(FHIRMoney::jsonUnserialize($json->unitPrice, $config));
            }
        }
        if (isset($json->factor)
            || isset($json->_factor)
            || property_exists($json, self::FIELD_FACTOR)
            || property_exists($json, self::FIELD_FACTOR_EXT)) {
            $v = $json->_factor ?? new \stdClass();
            $v->value = $json->factor ?? null;
            $type->setFactor(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->tax) || property_exists($json, self::FIELD_TAX)) {
            if (is_array($json->tax)) {
                $type->setTax(FHIRMoney::jsonUnserialize(reset($json->tax), $config));
            } else {
                $type->setTax(FHIRMoney::jsonUnserialize($json->tax, $config));
            }
        }
        if (isset($json->net) || property_exists($json, self::FIELD_NET)) {
            if (is_array($json->net)) {
                $type->setNet(FHIRMoney::jsonUnserialize(reset($json->net), $config));
            } else {
                $type->setNet(FHIRMoney::jsonUnserialize($json->net, $config));
            }
        }
        if (isset($json->noteNumber)
            || isset($json->_noteNumber)
            || property_exists($json, self::FIELD_NOTE_NUMBER)
            || property_exists($json, self::FIELD_NOTE_NUMBER_EXT)) {
            $vals = (array)($json->noteNumber ?? []);
            $exts = (array)($json->FIELD_NOTE_NUMBER_EXT ?? []);
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
        if (isset($json->reviewOutcome) || property_exists($json, self::FIELD_REVIEW_OUTCOME)) {
            if (is_array($json->reviewOutcome)) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize(reset($json->reviewOutcome), $config));
            } else {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize($json->reviewOutcome, $config));
            }
        }
        if (isset($json->adjudication) || property_exists($json, self::FIELD_ADJUDICATION)) {
            if (is_object($json->adjudication)) {
                $vals = [$json->adjudication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION, true);
            } else {
                $vals = $json->adjudication;
            }
            foreach($vals as $v) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::jsonUnserialize($v, $config));
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
        if (isset($this->traceNumber) && [] !== $this->traceNumber) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER) && 1 === count($this->traceNumber)) {
                $out->traceNumber = $this->traceNumber[0];
            } else {
                $out->traceNumber = $this->traceNumber;
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
        if (isset($this->modifier) && [] !== $this->modifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODIFIER) && 1 === count($this->modifier)) {
                $out->modifier = $this->modifier[0];
            } else {
                $out->modifier = $this->modifier;
            }
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
        return $out;
    }
}