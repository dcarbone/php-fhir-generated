<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitDetail extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL;

    /* class_default.php:47 */
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_REVENUE = 'revenue';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_PROGRAM_CODE = 'programCode';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_UNIT_PRICE = 'unitPrice';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_NET = 'net';
    public const FIELD_UDI = 'udi';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_SUB_DETAIL = 'subDetail';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_SEQUENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PRODUCT_OR_SERVICE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $sequence;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $revenue;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $productOrService;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $modifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $programCode;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $factor;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
     */
    protected FHIRMoney $net;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $udi;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $noteNumber;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] 
     */
    protected array $adjudication;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Third-tier of goods and services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail[] 
     */
    protected array $subDetail;

    /* constructor.php:62 */
    /**
     * FHIRExplanationOfBenefitDetail Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $revenue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $productOrService
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $modifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $programCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $unitPrice
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $factor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $net
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $udi
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] $adjudication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail[] $subDetail
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null,
                                null|FHIRCodeableConcept $revenue = null,
                                null|FHIRCodeableConcept $category = null,
                                null|FHIRCodeableConcept $productOrService = null,
                                null|iterable $modifier = null,
                                null|iterable $programCode = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRMoney $unitPrice = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|FHIRMoney $net = null,
                                null|iterable $udi = null,
                                null|iterable $noteNumber = null,
                                null|iterable $adjudication = null,
                                null|iterable $subDetail = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $revenue) {
            $this->setRevenue($revenue);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $productOrService) {
            $this->setProductOrService($productOrService);
        }
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
        }
        if (null !== $programCode) {
            $this->setProgramCode(...$programCode);
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
        if (null !== $net) {
            $this->setNet($net);
        }
        if (null !== $udi) {
            $this->setUdi(...$udi);
        }
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $subDetail) {
            $this->setSubDetail(...$subDetail);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
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
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt(value: $sequence);
        }
        $this->sequence = $sequence;
        if ($this->_valueXMLLocations[self::FIELD_SEQUENCE] !== $valueXMLLocation) {
            $this->_setSequenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sequence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSequenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SEQUENCE];
    }

    /**
     * Set the location the "value" field of the sequence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSequenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SEQUENCE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $revenue
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
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $productOrService
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
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier(): array
    {
        return $this->modifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $modifier
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$modifier
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramCode(): array
    {
        return $this->programCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $programCode
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$programCode
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $quantity
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $unitPrice
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $factor
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $factor) {
            unset($this->factor);
            return $this;
        }
        if (!($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal(value: $factor);
        }
        $this->factor = $factor;
        if ($this->_valueXMLLocations[self::FIELD_FACTOR] !== $valueXMLLocation) {
            $this->_setFactorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the factor element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFactorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FACTOR];
    }

    /**
     * Set the location the "value" field of the factor element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFactorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FACTOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
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
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $net
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getUdi(): array
    {
        return $this->udi ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getUdiIterator(): iterable
    {
        if (!isset($this->udi)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->udi);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $udi
     * @return static
     */
    public function addUdi(FHIRReference $udi): self
    {
        if (!isset($this->udi)) {
            $this->udi = [];
        }
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$udi
     * @return static
     */
    public function setUdi(FHIRReference ...$udi): self
    {
        if ([] === $udi) {
            unset($this->udi);
            return $this;
        }
        $this->udi = $udi;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber(): array
    {
        return $this->noteNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt>
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
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber): self
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
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt ...$noteNumber
     * @return static
     */
    public function setNoteNumber(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$noteNumber): self
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
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication>
     */
    public function getAdjudicationIterator(): iterable
    {
        if (!isset($this->adjudication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->adjudication);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRExplanationOfBenefitAdjudication $adjudication): self
    {
        if (!isset($this->adjudication)) {
            $this->adjudication = [];
        }
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRExplanationOfBenefitAdjudication ...$adjudication): self
    {
        if ([] === $adjudication) {
            unset($this->adjudication);
            return $this;
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Third-tier of goods and services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail[]
     */
    public function getSubDetail(): array
    {
        return $this->subDetail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail>
     */
    public function getSubDetailIterator(): iterable
    {
        if (!isset($this->subDetail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subDetail);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Third-tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail $subDetail
     * @return static
     */
    public function addSubDetail(FHIRExplanationOfBenefitSubDetail $subDetail): self
    {
        if (!isset($this->subDetail)) {
            $this->subDetail = [];
        }
        $this->subDetail[] = $subDetail;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Third-tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail ...$subDetail
     * @return static
     */
    public function setSubDetail(FHIRExplanationOfBenefitSubDetail ...$subDetail): self
    {
        if ([] === $subDetail) {
            unset($this->subDetail);
            return $this;
        }
        $this->subDetail = $subDetail;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitDetail)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE === $cen) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVENUE === $cen) {
                $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_OR_SERVICE === $cen) {
                $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER === $cen) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROGRAM_CODE === $cen) {
                $type->addProgramCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT_PRICE === $cen) {
                $type->setUnitPrice(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACTOR === $cen) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NET === $cen) {
                $type->setNet(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UDI === $cen) {
                $type->addUdi(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRExplanationOfBenefitAdjudication::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_DETAIL === $cen) {
                $type->addSubDetail(FHIRExplanationOfBenefitSubDetail::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
                $type->_setSequenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FACTOR])) {
            if (isset($type->factor)) {
                $type->factor->setValue((string)$attributes[self::FIELD_FACTOR]);
                $type->_setFactorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->sequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getFormattedValue());
        }
        if (isset($this->factor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FACTOR]) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->revenue)) {
            $xw->startElement(self::FIELD_REVENUE);
            $this->revenue->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->productOrService)) {
            $xw->startElement(self::FIELD_PRODUCT_OR_SERVICE);
            $this->productOrService->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (isset($this->net)) {
            $xw->startElement(self::FIELD_NET);
            $this->net->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->udi)) {
            foreach ($this->udi as $v) {
                $xw->startElement(self::FIELD_UDI);
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
        if (isset($this->adjudication)) {
            foreach ($this->adjudication as $v) {
                $xw->startElement(self::FIELD_ADJUDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subDetail)) {
            foreach ($this->subDetail as $v) {
                $xw->startElement(self::FIELD_SUB_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitDetail)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SEQUENCE])
            || isset($json[self::FIELD_SEQUENCE_EXT])
            || array_key_exists(self::FIELD_SEQUENCE, $json)
            || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $type->setSequence(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_SEQUENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REVENUE]) || array_key_exists(self::FIELD_REVENUE, $json)) {
            $type->setRevenue(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_REVENUE], $config));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $type->setCategory(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CATEGORY], $config));
        }
        if (isset($json[self::FIELD_PRODUCT_OR_SERVICE]) || array_key_exists(self::FIELD_PRODUCT_OR_SERVICE, $json)) {
            $type->setProductOrService(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PRODUCT_OR_SERVICE], $config));
        }
        if (isset($json[self::FIELD_MODIFIER]) || array_key_exists(self::FIELD_MODIFIER, $json)) {
            $vs = $json[self::FIELD_MODIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROGRAM_CODE]) || array_key_exists(self::FIELD_PROGRAM_CODE, $json)) {
            $vs = $json[self::FIELD_PROGRAM_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProgramCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_QUANTITY]) || array_key_exists(self::FIELD_QUANTITY, $json)) {
            $type->setQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_UNIT_PRICE]) || array_key_exists(self::FIELD_UNIT_PRICE, $json)) {
            $type->setUnitPrice(FHIRMoney::jsonUnserialize($json[self::FIELD_UNIT_PRICE], $config));
        }
        if (isset($json[self::FIELD_FACTOR])
            || isset($json[self::FIELD_FACTOR_EXT])
            || array_key_exists(self::FIELD_FACTOR, $json)
            || array_key_exists(self::FIELD_FACTOR_EXT, $json)) {
            $value = $json[self::FIELD_FACTOR] ?? null;
            $type->setFactor(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_FACTOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NET]) || array_key_exists(self::FIELD_NET, $json)) {
            $type->setNet(FHIRMoney::jsonUnserialize($json[self::FIELD_NET], $config));
        }
        if (isset($json[self::FIELD_UDI]) || array_key_exists(self::FIELD_UDI, $json)) {
            $vs = $json[self::FIELD_UDI];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addUdi(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_NOTE_NUMBER])
            || isset($json[self::FIELD_NOTE_NUMBER_EXT])
            || array_key_exists(self::FIELD_NOTE_NUMBER, $json)
            || array_key_exists(self::FIELD_NOTE_NUMBER_EXT, $json)) {
            $value = (array)($json[self::FIELD_NOTE_NUMBER] ?? []);
            $ext = (array)($json[self::FIELD_NOTE_NUMBER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addNoteNumber(FHIRPositiveInt::jsonUnserialize(
                    [FHIRPositiveInt::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ADJUDICATION]) || array_key_exists(self::FIELD_ADJUDICATION, $json)) {
            $vs = $json[self::FIELD_ADJUDICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAdjudication(FHIRExplanationOfBenefitAdjudication::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUB_DETAIL]) || array_key_exists(self::FIELD_SUB_DETAIL, $json)) {
            $vs = $json[self::FIELD_SUB_DETAIL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSubDetail(FHIRExplanationOfBenefitSubDetail::jsonUnserialize($v, $config));
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
            if ($this->sequence->_nonValueFieldDefined()) {
                $ext = $this->sequence->jsonSerialize();
                unset($ext->value);
                $out->_sequence = $ext;
            }
        }
        if (isset($this->revenue)) {
            $out->revenue = $this->revenue;
        }
        if (isset($this->category)) {
            $out->category = $this->category;
        }
        if (isset($this->productOrService)) {
            $out->productOrService = $this->productOrService;
        }
        if (isset($this->modifier) && [] !== $this->modifier) {
            $out->modifier = $this->modifier;
        }
        if (isset($this->programCode) && [] !== $this->programCode) {
            $out->programCode = $this->programCode;
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
        if (isset($this->net)) {
            $out->net = $this->net;
        }
        if (isset($this->udi) && [] !== $this->udi) {
            $out->udi = $this->udi;
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
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            $out->adjudication = $this->adjudication;
        }
        if (isset($this->subDetail) && [] !== $this->subDetail) {
            $out->subDetail = $this->subDetail;
        }
        return $out;
    }
}