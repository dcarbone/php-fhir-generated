<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A medically related item or items, in a container or package.
 */
class FHIRPackagedProductDefinitionPackaging extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGING;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_COMPONENT_PART = 'componentPart';
    public const FIELD_COMPONENT_PART_EXT = '_componentPart';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_QUANTITY_EXT = '_quantity';
    public const FIELD_MATERIAL = 'material';
    public const FIELD_ALTERNATE_MATERIAL = 'alternateMaterial';
    public const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_CONTAINED_ITEM = 'containedItem';
    public const FIELD_PACKAGING = 'packaging';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_COMPONENT_PART => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A business identifier that is specific to this particular part of the packaging,
     * often assigned by the manufacturer. Including possibly Data Carrier Identifier
     * (a GS1 barcode).
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
     * The physical type of the container of the items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the
     * packaging itself (e.g. a bottle or vial). The latter type are designed be a
     * container, but the former are not.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $componentPart;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of packaging items contained at this layer of the package. This
     * does not relate to the number of contained items but relates solely to the
     * number of packaging items. When looking at the outermost layer it is always 1.
     * If there are two boxes within, at the next layer it would be 2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $quantity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $material;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $alternateMaterial;
    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife[] 
     */
    protected array $shelfLifeStorage;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this packaging item. When there are multiple values each one is
     * a potential manufacturer of this packaging item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $manufacturer;
    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[] 
     */
    protected array $property;
    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[] 
     */
    protected array $containedItem;
    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) within containers, still as a part
     * of a single packaged product. See also
     * PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging[] 
     */
    protected array $packaging;

    /* constructor.php:61 */
    /**
     * FHIRPackagedProductDefinitionPackaging Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $componentPart
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $material
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $alternateMaterial
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife[] $shelfLifeStorage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[] $containedItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging[] $packaging
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $componentPart = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $quantity = null,
                                null|iterable $material = null,
                                null|iterable $alternateMaterial = null,
                                null|iterable $shelfLifeStorage = null,
                                null|iterable $manufacturer = null,
                                null|iterable $property = null,
                                null|iterable $containedItem = null,
                                null|iterable $packaging = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $componentPart) {
            $this->setComponentPart($componentPart);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $material) {
            $this->setMaterial(...$material);
        }
        if (null !== $alternateMaterial) {
            $this->setAlternateMaterial(...$alternateMaterial);
        }
        if (null !== $shelfLifeStorage) {
            $this->setShelfLifeStorage(...$shelfLifeStorage);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer(...$manufacturer);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $containedItem) {
            $this->setContainedItem(...$containedItem);
        }
        if (null !== $packaging) {
            $this->setPackaging(...$packaging);
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
     * A business identifier that is specific to this particular part of the packaging,
     * often assigned by the manufacturer. Including possibly Data Carrier Identifier
     * (a GS1 barcode).
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
     * A business identifier that is specific to this particular part of the packaging,
     * often assigned by the manufacturer. Including possibly Data Carrier Identifier
     * (a GS1 barcode).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * A business identifier that is specific to this particular part of the packaging,
     * often assigned by the manufacturer. Including possibly Data Carrier Identifier
     * (a GS1 barcode).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The physical type of the container of the items.
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
     * The physical type of the container of the items.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the
     * packaging itself (e.g. a bottle or vial). The latter type are designed be a
     * container, but the former are not.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getComponentPart(): null|FHIRBoolean
    {
        return $this->componentPart ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the
     * packaging itself (e.g. a bottle or vial). The latter type are designed be a
     * container, but the former are not.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $componentPart
     * @return static
     */
    public function setComponentPart(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $componentPart): self
    {
        if (null === $componentPart) {
            unset($this->componentPart);
            return $this;
        }
        if (!($componentPart instanceof FHIRBoolean)) {
            $componentPart = new FHIRBoolean(value: $componentPart);
        }
        $this->componentPart = $componentPart;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of packaging items contained at this layer of the package. This
     * does not relate to the number of contained items but relates solely to the
     * number of packaging items. When looking at the outermost layer it is always 1.
     * If there are two boxes within, at the next layer it would be 2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getQuantity(): null|FHIRInteger
    {
        return $this->quantity ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of packaging items contained at this layer of the package. This
     * does not relate to the number of contained items but relates solely to the
     * number of packaging items. When looking at the outermost layer it is always 1.
     * If there are two boxes within, at the next layer it would be 2.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $quantity
     * @return static
     */
    public function setQuantity(null|string|float|FHIRIntegerPrimitive|FHIRInteger $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        if (!($quantity instanceof FHIRInteger)) {
            $quantity = new FHIRInteger(value: $quantity);
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getMaterial(): array
    {
        return $this->material ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getMaterialIterator(): iterable
    {
        if (!isset($this->material)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->material);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $material
     * @return static
     */
    public function addMaterial(FHIRCodeableConcept $material): self
    {
        if (!isset($this->material)) {
            $this->material = [];
        }
        $this->material[] = $material;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$material
     * @return static
     */
    public function setMaterial(FHIRCodeableConcept ...$material): self
    {
        if ([] === $material) {
            unset($this->material);
            return $this;
        }
        $this->material = $material;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getAlternateMaterial(): array
    {
        return $this->alternateMaterial ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAlternateMaterialIterator(): iterable
    {
        if (!isset($this->alternateMaterial)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->alternateMaterial);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $alternateMaterial
     * @return static
     */
    public function addAlternateMaterial(FHIRCodeableConcept $alternateMaterial): self
    {
        if (!isset($this->alternateMaterial)) {
            $this->alternateMaterial = [];
        }
        $this->alternateMaterial[] = $alternateMaterial;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$alternateMaterial
     * @return static
     */
    public function setAlternateMaterial(FHIRCodeableConcept ...$alternateMaterial): self
    {
        if ([] === $alternateMaterial) {
            unset($this->alternateMaterial);
            return $this;
        }
        $this->alternateMaterial = $alternateMaterial;
        return $this;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife[]
     */
    public function getShelfLifeStorage(): array
    {
        return $this->shelfLifeStorage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife>
     */
    public function getShelfLifeStorageIterator(): iterable
    {
        if (!isset($this->shelfLifeStorage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->shelfLifeStorage);
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife $shelfLifeStorage
     * @return static
     */
    public function addShelfLifeStorage(FHIRProductShelfLife $shelfLifeStorage): self
    {
        if (!isset($this->shelfLifeStorage)) {
            $this->shelfLifeStorage = [];
        }
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife ...$shelfLifeStorage
     * @return static
     */
    public function setShelfLifeStorage(FHIRProductShelfLife ...$shelfLifeStorage): self
    {
        if ([] === $shelfLifeStorage) {
            unset($this->shelfLifeStorage);
            return $this;
        }
        $this->shelfLifeStorage = $shelfLifeStorage;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this packaging item. When there are multiple values each one is
     * a potential manufacturer of this packaging item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getManufacturerIterator(): iterable
    {
        if (!isset($this->manufacturer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manufacturer);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this packaging item. When there are multiple values each one is
     * a potential manufacturer of this packaging item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(FHIRReference $manufacturer): self
    {
        if (!isset($this->manufacturer)) {
            $this->manufacturer = [];
        }
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this packaging item. When there are multiple values each one is
     * a potential manufacturer of this packaging item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference ...$manufacturer): self
    {
        if ([] === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty $property
     * @return static
     */
    public function addProperty(FHIRPackagedProductDefinitionProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty ...$property
     * @return static
     */
    public function setProperty(FHIRPackagedProductDefinitionProperty ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[]
     */
    public function getContainedItem(): array
    {
        return $this->containedItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem>
     */
    public function getContainedItemIterator(): iterable
    {
        if (!isset($this->containedItem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->containedItem);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem $containedItem
     * @return static
     */
    public function addContainedItem(FHIRPackagedProductDefinitionContainedItem $containedItem): self
    {
        if (!isset($this->containedItem)) {
            $this->containedItem = [];
        }
        $this->containedItem[] = $containedItem;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem ...$containedItem
     * @return static
     */
    public function setContainedItem(FHIRPackagedProductDefinitionContainedItem ...$containedItem): self
    {
        if ([] === $containedItem) {
            unset($this->containedItem);
            return $this;
        }
        $this->containedItem = $containedItem;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) within containers, still as a part
     * of a single packaged product. See also
     * PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging[]
     */
    public function getPackaging(): array
    {
        return $this->packaging ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging>
     */
    public function getPackagingIterator(): iterable
    {
        if (!isset($this->packaging)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->packaging);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) within containers, still as a part
     * of a single packaged product. See also
     * PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging $packaging
     * @return static
     */
    public function addPackaging(FHIRPackagedProductDefinitionPackaging $packaging): self
    {
        if (!isset($this->packaging)) {
            $this->packaging = [];
        }
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) within containers, still as a part
     * of a single packaged product. See also
     * PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging ...$packaging
     * @return static
     */
    public function setPackaging(FHIRPackagedProductDefinitionPackaging ...$packaging): self
    {
        if ([] === $packaging) {
            unset($this->packaging);
            return $this;
        }
        $this->packaging = $packaging;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinitionPackaging)) {
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
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPONENT_PART === $cen) {
                $type->setComponentPart(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MATERIAL === $cen) {
                $type->addMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALTERNATE_MATERIAL === $cen) {
                $type->addAlternateMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SHELF_LIFE_STORAGE === $cen) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRPackagedProductDefinitionProperty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED_ITEM === $cen) {
                $type->addContainedItem(FHIRPackagedProductDefinitionContainedItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGING === $cen) {
                $type->addPackaging(FHIRPackagedProductDefinitionPackaging::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COMPONENT_PART])) {
            if (isset($type->componentPart)) {
                $type->componentPart->setValue((string)$attributes[self::FIELD_COMPONENT_PART]);
            } else {
                $type->setComponentPart((string)$attributes[self::FIELD_COMPONENT_PART]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COMPONENT_PART, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_QUANTITY])) {
            if (isset($type->quantity)) {
                $type->quantity->setValue((string)$attributes[self::FIELD_QUANTITY]);
            } else {
                $type->setQuantity((string)$attributes[self::FIELD_QUANTITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_QUANTITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->componentPart) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMPONENT_PART]) {
            $xw->writeAttribute(self::FIELD_COMPONENT_PART, $this->componentPart->_getValueAsString());
        }
        if (isset($this->quantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_QUANTITY, $this->quantity->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
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
        if (isset($this->componentPart)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMPONENT_PART]
                || $this->componentPart->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMPONENT_PART);
            $this->componentPart->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMPONENT_PART]);
            $xw->endElement();
        }
        if (isset($this->quantity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUANTITY]
                || $this->quantity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUANTITY]);
            $xw->endElement();
        }
        if (isset($this->material)) {
            foreach ($this->material as $v) {
                $xw->startElement(self::FIELD_MATERIAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->alternateMaterial)) {
            foreach ($this->alternateMaterial as $v) {
                $xw->startElement(self::FIELD_ALTERNATE_MATERIAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->shelfLifeStorage)) {
            foreach ($this->shelfLifeStorage as $v) {
                $xw->startElement(self::FIELD_SHELF_LIFE_STORAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->manufacturer)) {
            foreach ($this->manufacturer as $v) {
                $xw->startElement(self::FIELD_MANUFACTURER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->containedItem)) {
            foreach ($this->containedItem as $v) {
                $xw->startElement(self::FIELD_CONTAINED_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->packaging)) {
            foreach ($this->packaging as $v) {
                $xw->startElement(self::FIELD_PACKAGING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackaging
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinitionPackaging)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->componentPart)
            || isset($json->_componentPart)
            || property_exists($json, self::FIELD_COMPONENT_PART)
            || property_exists($json, self::FIELD_COMPONENT_PART_EXT)) {
            $v = $json->_componentPart ?? new \stdClass();
            $v->value = $json->componentPart ?? null;
            $type->setComponentPart(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->quantity)
            || isset($json->_quantity)
            || property_exists($json, self::FIELD_QUANTITY)
            || property_exists($json, self::FIELD_QUANTITY_EXT)) {
            $v = $json->_quantity ?? new \stdClass();
            $v->value = $json->quantity ?? null;
            $type->setQuantity(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->material) || property_exists($json, self::FIELD_MATERIAL)) {
            if (is_object($json->material)) {
                $vals = [$json->material];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MATERIAL, true);
            } else {
                $vals = $json->material;
            }
            foreach($vals as $v) {
                $type->addMaterial(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->alternateMaterial) || property_exists($json, self::FIELD_ALTERNATE_MATERIAL)) {
            if (is_object($json->alternateMaterial)) {
                $vals = [$json->alternateMaterial];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ALTERNATE_MATERIAL, true);
            } else {
                $vals = $json->alternateMaterial;
            }
            foreach($vals as $v) {
                $type->addAlternateMaterial(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->shelfLifeStorage) || property_exists($json, self::FIELD_SHELF_LIFE_STORAGE)) {
            if (is_object($json->shelfLifeStorage)) {
                $vals = [$json->shelfLifeStorage];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SHELF_LIFE_STORAGE, true);
            } else {
                $vals = $json->shelfLifeStorage;
            }
            foreach($vals as $v) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->manufacturer) || property_exists($json, self::FIELD_MANUFACTURER)) {
            if (is_object($json->manufacturer)) {
                $vals = [$json->manufacturer];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MANUFACTURER, true);
            } else {
                $vals = $json->manufacturer;
            }
            foreach($vals as $v) {
                $type->addManufacturer(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->property) || property_exists($json, self::FIELD_PROPERTY)) {
            if (is_object($json->property)) {
                $vals = [$json->property];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROPERTY, true);
            } else {
                $vals = $json->property;
            }
            foreach($vals as $v) {
                $type->addProperty(FHIRPackagedProductDefinitionProperty::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->containedItem) || property_exists($json, self::FIELD_CONTAINED_ITEM)) {
            if (is_object($json->containedItem)) {
                $vals = [$json->containedItem];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTAINED_ITEM, true);
            } else {
                $vals = $json->containedItem;
            }
            foreach($vals as $v) {
                $type->addContainedItem(FHIRPackagedProductDefinitionContainedItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->packaging) || property_exists($json, self::FIELD_PACKAGING)) {
            if (is_object($json->packaging)) {
                $vals = [$json->packaging];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PACKAGING, true);
            } else {
                $vals = $json->packaging;
            }
            foreach($vals as $v) {
                $type->addPackaging(FHIRPackagedProductDefinitionPackaging::jsonUnserialize($v, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->componentPart)) {
            if (null !== ($val = $this->componentPart->getValue())) {
                $out->componentPart = $val;
            }
            if ($this->componentPart->_nonValueFieldDefined()) {
                $ext = $this->componentPart->jsonSerialize();
                unset($ext->value);
                $out->_componentPart = $ext;
            }
        }
        if (isset($this->quantity)) {
            if (null !== ($val = $this->quantity->getValue())) {
                $out->quantity = $val;
            }
            if ($this->quantity->_nonValueFieldDefined()) {
                $ext = $this->quantity->jsonSerialize();
                unset($ext->value);
                $out->_quantity = $ext;
            }
        }
        if (isset($this->material) && [] !== $this->material) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MATERIAL) && 1 === count($this->material)) {
                $out->material = $this->material[0];
            } else {
                $out->material = $this->material;
            }
        }
        if (isset($this->alternateMaterial) && [] !== $this->alternateMaterial) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ALTERNATE_MATERIAL) && 1 === count($this->alternateMaterial)) {
                $out->alternateMaterial = $this->alternateMaterial[0];
            } else {
                $out->alternateMaterial = $this->alternateMaterial;
            }
        }
        if (isset($this->shelfLifeStorage) && [] !== $this->shelfLifeStorage) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SHELF_LIFE_STORAGE) && 1 === count($this->shelfLifeStorage)) {
                $out->shelfLifeStorage = $this->shelfLifeStorage[0];
            } else {
                $out->shelfLifeStorage = $this->shelfLifeStorage;
            }
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANUFACTURER) && 1 === count($this->manufacturer)) {
                $out->manufacturer = $this->manufacturer[0];
            } else {
                $out->manufacturer = $this->manufacturer;
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROPERTY) && 1 === count($this->property)) {
                $out->property = $this->property[0];
            } else {
                $out->property = $this->property;
            }
        }
        if (isset($this->containedItem) && [] !== $this->containedItem) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTAINED_ITEM) && 1 === count($this->containedItem)) {
                $out->containedItem = $this->containedItem[0];
            } else {
                $out->containedItem = $this->containedItem;
            }
        }
        if (isset($this->packaging) && [] !== $this->packaging) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PACKAGING) && 1 === count($this->packaging)) {
                $out->packaging = $this->packaging[0];
            } else {
                $out->packaging = $this->packaging;
            }
        }
        return $out;
    }
}