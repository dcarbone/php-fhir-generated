<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRClaimSubDetail extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL;

    /* class_default.php:56 */
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_TYPE = 'type';
    public const FIELD_SERVICE = 'service';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_UNIT_PRICE = 'unitPrice';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_POINTS = 'points';
    public const FIELD_POINTS_EXT = '_points';
    public const FIELD_NET = 'net';
    public const FIELD_UDI = 'udi';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_SEQUENCE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_SERVICE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_POINTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt 
     */
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $sequence;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    #[FHIRCoding]
    protected FHIRCoding $type;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee for an additional service or product or charge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    #[FHIRCoding]
    protected FHIRCoding $service;
    /**
     * The number of repetitions of a service or product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity 
     */
    #[FHIRSimpleQuantity]
    protected FHIRSimpleQuantity $quantity;
    /**
     * The fee for an additional service or product or charge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $unitPrice;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $factor;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $points;
    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $net;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    #[FHIRCoding]
    protected FHIRCoding $udi;

    /* constructor.php:61 */
    /**
     * FHIRClaimSubDetail Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $service
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $factor
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $points
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $net
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $udi
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null,
                                null|FHIRCoding $type = null,
                                null|FHIRCoding $service = null,
                                null|FHIRSimpleQuantity $quantity = null,
                                null|FHIRMoney $unitPrice = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $points = null,
                                null|FHIRMoney $net = null,
                                null|FHIRCoding $udi = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $service) {
            $this->setService($service);
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
        if (null !== $points) {
            $this->setPoints($points);
        }
        if (null !== $net) {
            $this->setNet($net);
        }
        if (null !== $udi) {
            $this->setUdi($udi);
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
     * A service line number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt
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
     * A service line number.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $sequence
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee for an additional service or product or charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getService(): null|FHIRCoding
    {
        return $this->service ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee for an additional service or product or charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $service
     * @return static
     */
    public function setService(null|FHIRCoding $service): self
    {
        if (null === $service) {
            unset($this->service);
            return $this;
        }
        $this->service = $service;
        return $this;
    }

    /**
     * The number of repetitions of a service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity(): null|FHIRSimpleQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * The number of repetitions of a service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRSimpleQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The fee for an additional service or product or charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice(): null|FHIRMoney
    {
        return $this->unitPrice ?? null;
    }

    /**
     * The fee for an additional service or product or charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $factor
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
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getPoints(): null|FHIRDecimal
    {
        return $this->points ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $points
     * @return static
     */
    public function setPoints(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $points): self
    {
        if (null === $points) {
            unset($this->points);
            return $this;
        }
        if (!($points instanceof FHIRDecimal)) {
            $points = new FHIRDecimal(value: $points);
        }
        $this->points = $points;
        return $this;
    }

    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getNet(): null|FHIRMoney
    {
        return $this->net ?? null;
    }

    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $net
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getUdi(): null|FHIRCoding
    {
        return $this->udi ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $udi
     * @return static
     */
    public function setUdi(null|FHIRCoding $udi): self
    {
        if (null === $udi) {
            unset($this->udi);
            return $this;
        }
        $this->udi = $udi;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimSubDetail)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
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
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE === $cen) {
                $type->setService(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT_PRICE === $cen) {
                $type->setUnitPrice(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACTOR === $cen) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POINTS === $cen) {
                $type->setPoints(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NET === $cen) {
                $type->setNet(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UDI === $cen) {
                $type->setUdi(FHIRCoding::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_FACTOR])) {
            if (isset($type->factor)) {
                $type->factor->setValue((string)$attributes[self::FIELD_FACTOR]);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FACTOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_POINTS])) {
            if (isset($type->points)) {
                $type->points->setValue((string)$attributes[self::FIELD_POINTS]);
            } else {
                $type->setPoints((string)$attributes[self::FIELD_POINTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_POINTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->factor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FACTOR]) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->_getValueAsString());
        }
        if (isset($this->points) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_POINTS]) {
            $xw->writeAttribute(self::FIELD_POINTS, $this->points->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->service)) {
            $xw->startElement(self::FIELD_SERVICE);
            $this->service->xmlSerialize($xw, $config);
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
        if (isset($this->points)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_POINTS]
                || $this->points->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_POINTS);
            $this->points->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_POINTS]);
            $xw->endElement();
        }
        if (isset($this->net)) {
            $xw->startElement(self::FIELD_NET);
            $this->net->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->udi)) {
            $xw->startElement(self::FIELD_UDI);
            $this->udi->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimSubDetail)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->sequence)
            || isset($decoded->_sequence)
            || property_exists($decoded, self::FIELD_SEQUENCE)
            || property_exists($decoded, self::FIELD_SEQUENCE_EXT)) {
            $v = $decoded->_sequence ?? new \stdClass();
            $v->value = $decoded->sequence ?? null;
            $type->setSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCoding::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCoding::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->service) || property_exists($decoded, self::FIELD_SERVICE)) {
            if (is_array($decoded->service)) {
                $type->setService(FHIRCoding::jsonUnserialize(reset($decoded->service), $config));
            } else {
                $type->setService(FHIRCoding::jsonUnserialize($decoded->service, $config));
            }
        }
        if (isset($decoded->quantity) || property_exists($decoded, self::FIELD_QUANTITY)) {
            if (is_array($decoded->quantity)) {
                $type->setQuantity(FHIRSimpleQuantity::jsonUnserialize(reset($decoded->quantity), $config));
            } else {
                $type->setQuantity(FHIRSimpleQuantity::jsonUnserialize($decoded->quantity, $config));
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
        if (isset($decoded->points)
            || isset($decoded->_points)
            || property_exists($decoded, self::FIELD_POINTS)
            || property_exists($decoded, self::FIELD_POINTS_EXT)) {
            $v = $decoded->_points ?? new \stdClass();
            $v->value = $decoded->points ?? null;
            $type->setPoints(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->net) || property_exists($decoded, self::FIELD_NET)) {
            if (is_array($decoded->net)) {
                $type->setNet(FHIRMoney::jsonUnserialize(reset($decoded->net), $config));
            } else {
                $type->setNet(FHIRMoney::jsonUnserialize($decoded->net, $config));
            }
        }
        if (isset($decoded->udi) || property_exists($decoded, self::FIELD_UDI)) {
            if (is_array($decoded->udi)) {
                $type->setUdi(FHIRCoding::jsonUnserialize(reset($decoded->udi), $config));
            } else {
                $type->setUdi(FHIRCoding::jsonUnserialize($decoded->udi, $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->service)) {
            $out->service = $this->service;
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
        if (isset($this->points)) {
            if (null !== ($val = $this->points->getValue())) {
                $out->points = $val;
            }
            if ($this->points->_nonValueFieldDefined()) {
                $ext = $this->points->jsonSerialize();
                unset($ext->value);
                $out->_points = $ext;
            }
        }
        if (isset($this->net)) {
            $out->net = $this->net;
        }
        if (isset($this->udi)) {
            $out->udi = $this->udi;
        }
        return $out;
    }
}