<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Invoice containing collected ChargeItems from an Account with calculated
 * individual and total price for Billing purpose.
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM;

    /* class_default.php:50 */
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_CHARGE_ITEM_REFERENCE = 'chargeItemReference';
    public const FIELD_CHARGE_ITEM_CODEABLE_CONCEPT = 'chargeItemCodeableConcept';
    public const FIELD_PRICE_COMPONENT = 'priceComponent';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CHARGE_ITEM_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $sequence;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ChargeItem contains information such as the billing code, date, amount etc.
     * If no further details are required for the lineItem, inline billing codes can be
     * added using the CodeableConcept data type instead of the Reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $chargeItemCodeableConcept;
    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[] 
     */
    protected array $priceComponent;

    /* constructor.php:61 */
    /**
     * FHIRInvoiceLineItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $chargeItemReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $chargeItemCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[] $priceComponent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null,
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Sequence in which the items appear on the invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $sequence
     * @return static
     */
    public function setSequence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt(value: $sequence);
        }
        $this->sequence = $sequence;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $chargeItemReference
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $chargeItemCodeableConcept
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
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public function getPriceComponent(): array
    {
        return $this->priceComponent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent>
     */
    public function getPriceComponentIterator(): iterable
    {
        if (!isset($this->priceComponent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->priceComponent);
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent $priceComponent
     * @return static
     */
    public function addPriceComponent(FHIRInvoicePriceComponent $priceComponent): self
    {
        if (!isset($this->priceComponent)) {
            $this->priceComponent = [];
        }
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice as to how the prices have
     * been calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent ...$priceComponent
     * @return static
     */
    public function setPriceComponent(FHIRInvoicePriceComponent ...$priceComponent): self
    {
        if ([] === $priceComponent) {
            unset($this->priceComponent);
            return $this;
        }
        $this->priceComponent = $priceComponent;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_SEQUENCE === $cen) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARGE_ITEM_REFERENCE === $cen) {
                $type->setChargeItemReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT === $cen) {
                $type->setChargeItemCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRICE_COMPONENT === $cen) {
                $type->addPriceComponent(FHIRInvoicePriceComponent::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
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
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->sequence)
            || isset($json->_sequence)
            || property_exists($json, self::FIELD_SEQUENCE)
            || property_exists($json, self::FIELD_SEQUENCE_EXT)) {
            $v = $json->_sequence ?? new \stdClass();
            $v->value = $json->sequence ?? null;
            $type->setSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->chargeItemReference) || property_exists($json, self::FIELD_CHARGE_ITEM_REFERENCE)) {
            if (is_array($json->chargeItemReference)) {
                $type->setChargeItemReference(FHIRReference::jsonUnserialize(reset($json->chargeItemReference), $config));
            } else {
                $type->setChargeItemReference(FHIRReference::jsonUnserialize($json->chargeItemReference, $config));
            }
        }
        if (isset($json->chargeItemCodeableConcept) || property_exists($json, self::FIELD_CHARGE_ITEM_CODEABLE_CONCEPT)) {
            if (is_array($json->chargeItemCodeableConcept)) {
                $type->setChargeItemCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->chargeItemCodeableConcept), $config));
            } else {
                $type->setChargeItemCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->chargeItemCodeableConcept, $config));
            }
        }
        if (isset($json->priceComponent) || property_exists($json, self::FIELD_PRICE_COMPONENT)) {
            if (is_object($json->priceComponent)) {
                $vals = [$json->priceComponent];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PRICE_COMPONENT, true);
            } else {
                $vals = $json->priceComponent;
            }
            foreach($vals as $v) {
                $type->addPriceComponent(FHIRInvoicePriceComponent::jsonUnserialize($v, $config));
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
        if (isset($this->chargeItemReference)) {
            $out->chargeItemReference = $this->chargeItemReference;
        }
        if (isset($this->chargeItemCodeableConcept)) {
            $out->chargeItemCodeableConcept = $this->chargeItemCodeableConcept;
        }
        if (isset($this->priceComponent) && [] !== $this->priceComponent) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PRICE_COMPONENT) && 1 === count($this->priceComponent)) {
                $out->priceComponent = $this->priceComponent[0];
            } else {
                $out->priceComponent = $this->priceComponent;
            }
        }
        return $out;
    }
}