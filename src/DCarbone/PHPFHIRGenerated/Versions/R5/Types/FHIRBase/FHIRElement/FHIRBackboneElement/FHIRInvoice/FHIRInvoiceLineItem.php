<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInvoice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Invoice containing collected ChargeItems from an Account with calculated
 * individual and total price for Billing purpose.
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM;


    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_SERVICED_DATE = 'servicedDate';
    public const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    public const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    public const FIELD_CHARGE_ITEM_REFERENCE = 'chargeItemReference';
    public const FIELD_CHARGE_ITEM_CODEABLE_CONCEPT = 'chargeItemCodeableConcept';
    public const FIELD_PRICE_COMPONENT = 'priceComponent';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $sequence;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/time(s) range when this service was delivered or completed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $servicedDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date/time(s) range when this service was delivered or completed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $servicedPeriod;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $chargeItemReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $chargeItemCodeableConcept;
    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent[] 
     */
    protected array $priceComponent;

    /** Default validation map for fields in type Invoice.LineItem */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CHARGE_ITEM_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRInvoiceLineItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $sequence
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $servicedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $servicedPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $chargeItemReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $chargeItemCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent[] $priceComponent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $servicedDate = null,
                                null|FHIRPeriod $servicedPeriod = null,
                                null|FHIRReference $chargeItemReference = null,
                                null|FHIRCodeableConcept $chargeItemCodeableConcept = null,
                                null|iterable $priceComponent = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $servicedDate) {
            $this->setServicedDate($servicedDate);
        }
        if (null !== $servicedPeriod) {
            $this->setServicedPeriod($servicedPeriod);
        }
        if (null !== $chargeItemReference) {
            $this->setChargeItemReference($chargeItemReference);
        }
        if (null !== $chargeItemCodeableConcept) {
            $this->setChargeItemCodeableConcept($chargeItemCodeableConcept);
        }
        if (null !== $priceComponent) {
            $this->setPriceComponent(...$priceComponent);
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt(value: $sequence);
        }
        if (null !== $valueXMLLocation) {
            $sequence->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sequence->_getValueXMLLocation()) {
            $sequence->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/time(s) range when this service was delivered or completed.
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
     * Date/time(s) range when this service was delivered or completed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $servicedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setServicedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $servicedDate,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $servicedDate) {
            unset($this->servicedDate);
            return $this;
        }
        if (!($servicedDate instanceof FHIRDate)) {
            $servicedDate = new FHIRDate(value: $servicedDate);
        }
        if (null !== $valueXMLLocation) {
            $servicedDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $servicedDate->_getValueXMLLocation()) {
            $servicedDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date/time(s) range when this service was delivered or completed.
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
     * Date/time(s) range when this service was delivered or completed.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getChargeItemReference(): null|FHIRReference
    {
        return $this->chargeItemReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $chargeItemReference
     * @return static
     */
    public function setChargeItemReference(null|FHIRReference $chargeItemReference): self
    {
        if (null === $chargeItemReference) {
            unset($this->chargeItemReference);
            return $this;
        }
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getChargeItemCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->chargeItemCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $chargeItemCodeableConcept
     * @return static
     */
    public function setChargeItemCodeableConcept(null|FHIRCodeableConcept $chargeItemCodeableConcept): self
    {
        if (null === $chargeItemCodeableConcept) {
            unset($this->chargeItemCodeableConcept);
            return $this;
        }
        $this->chargeItemCodeableConcept = $chargeItemCodeableConcept;
        return $this;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent[]
     */
    public function getPriceComponent(): array
    {
        return $this->priceComponent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent>
     */
    public function getPriceComponentIterator(): iterable
    {
        if (!isset($this->priceComponent) || [] === $this->priceComponent) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->priceComponent);
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent $priceComponent
     * @return static
     */
    public function addPriceComponent(FHIRMonetaryComponent $priceComponent): self
    {
        if (!isset($this->priceComponent)) {
            $this->priceComponent = [];
        }
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMonetaryComponent ...$priceComponent
     * @return static
     */
    public function setPriceComponent(FHIRMonetaryComponent ...$priceComponent): self
    {
        $this->priceComponent = $priceComponent;
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
        if (null !== ($v = $this->getChargeItemReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChargeItemCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICED_DATE])) {
            $v = $this->getServicedDate();
            foreach($validationRules[self::FIELD_SERVICED_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICED_DATE])) {
                        $errs[self::FIELD_SERVICED_DATE] = [];
                    }
                    $errs[self::FIELD_SERVICED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICED_PERIOD])) {
            $v = $this->getServicedPeriod();
            foreach($validationRules[self::FIELD_SERVICED_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICED_PERIOD])) {
                        $errs[self::FIELD_SERVICED_PERIOD] = [];
                    }
                    $errs[self::FIELD_SERVICED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARGE_ITEM_REFERENCE])) {
            $v = $this->getChargeItemReference();
            foreach($validationRules[self::FIELD_CHARGE_ITEM_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHARGE_ITEM_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARGE_ITEM_REFERENCE])) {
                        $errs[self::FIELD_CHARGE_ITEM_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CHARGE_ITEM_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT])) {
            $v = $this->getChargeItemCodeableConcept();
            foreach($validationRules[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRICE_COMPONENT])) {
            $v = $this->getPriceComponent();
            foreach($validationRules[self::FIELD_PRICE_COMPONENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRICE_COMPONENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRICE_COMPONENT])) {
                        $errs[self::FIELD_PRICE_COMPONENT] = [];
                    }
                    $errs[self::FIELD_PRICE_COMPONENT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRInvoiceLineItem)) {
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
            } else if (self::FIELD_SEQUENCE === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERVICED_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setServicedDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERVICED_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHARGE_ITEM_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setChargeItemReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setChargeItemCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRICE_COMPONENT === $childName) {
                $v = new FHIRMonetaryComponent();
                $type->addPriceComponent(FHIRMonetaryComponent::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SEQUENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SEQUENCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERVICED_DATE])) {
            $pt = $type->getServicedDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERVICED_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setServicedDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_SERVICED_DATE],
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
            $xw->openRootNode('InvoiceLineItem', $this->_getSourceXMLNS());
        }
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->getValue()?->_getFormattedValue());
        }
        if (isset($this->servicedDate) && $this->servicedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERVICED_DATE, $this->servicedDate->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->servicedDate) && $this->servicedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERVICED_DATE);
            $this->servicedDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->servicedPeriod)) {
            $xw->startElement(self::FIELD_SERVICED_PERIOD);
            $this->servicedPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->chargeItemReference)) {
            $xw->startElement(self::FIELD_CHARGE_ITEM_REFERENCE);
            $this->chargeItemReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->chargeItemCodeableConcept)) {
            $xw->startElement(self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT);
            $this->chargeItemCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priceComponent)) {
            foreach ($this->priceComponent as $v) {
                $xw->startElement(self::FIELD_PRICE_COMPONENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRInvoiceLineItem)) {
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
        if (isset($json[self::FIELD_SEQUENCE]) || isset($json[self::FIELD_SEQUENCE_EXT]) || array_key_exists(self::FIELD_SEQUENCE, $json) || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $ext = (array)($json[self::FIELD_SEQUENCE_EXT] ?? []);
            $type->setSequence(FHIRPositiveInt::jsonUnserialize(
                json: [FHIRPositiveInt::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SERVICED_DATE]) || isset($json[self::FIELD_SERVICED_DATE_EXT]) || array_key_exists(self::FIELD_SERVICED_DATE, $json) || array_key_exists(self::FIELD_SERVICED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_SERVICED_DATE] ?? null;
            $ext = (array)($json[self::FIELD_SERVICED_DATE_EXT] ?? []);
            $type->setServicedDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SERVICED_PERIOD]) || array_key_exists(self::FIELD_SERVICED_PERIOD, $json)) {
            $type->setServicedPeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_SERVICED_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CHARGE_ITEM_REFERENCE]) || array_key_exists(self::FIELD_CHARGE_ITEM_REFERENCE, $json)) {
            $type->setChargeItemReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_CHARGE_ITEM_REFERENCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT, $json)) {
            $type->setChargeItemCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PRICE_COMPONENT]) || array_key_exists(self::FIELD_PRICE_COMPONENT, $json)) {
            $vs = $json[self::FIELD_PRICE_COMPONENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPriceComponent(FHIRMonetaryComponent::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            $ext = $this->sequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequence = $ext;
            }
        }
        if (isset($this->servicedDate)) {
            if (null !== ($val = $this->servicedDate->getValue())) {
                $out->servicedDate = $val;
            }
            $ext = $this->servicedDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_servicedDate = $ext;
            }
        }
        if (isset($this->servicedPeriod)) {
            $out->servicedPeriod = $this->servicedPeriod;
        }
        if (isset($this->chargeItemReference)) {
            $out->chargeItemReference = $this->chargeItemReference;
        }
        if (isset($this->chargeItemCodeableConcept)) {
            $out->chargeItemCodeableConcept = $this->chargeItemCodeableConcept;
        }
        if (isset($this->priceComponent) && [] !== $this->priceComponent) {
            $out->priceComponent = $this->priceComponent;
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