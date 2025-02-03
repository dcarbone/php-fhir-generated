<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition;

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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A medically related item or items, in a container or package.
 */
class FHIRPackagedProductDefinitionPackage extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_QUANTITY_EXT = '_quantity';
    public const FIELD_MATERIAL = 'material';
    public const FIELD_ALTERNATE_MATERIAL = 'alternateMaterial';
    public const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_CONTAINED_ITEM = 'containedItem';
    public const FIELD_PACKAGE = 'package';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $alternateMaterial;
    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[] 
     */
    protected array $shelfLifeStorage;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $manufacturer;
    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[] 
     */
    protected array $property;
    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[] 
     */
    protected array $containedItem;
    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[] 
     */
    protected array $package;

    /* constructor.php:62 */
    /**
     * FHIRPackagedProductDefinitionPackage Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $material
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $alternateMaterial
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[] $shelfLifeStorage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[] $containedItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[] $package
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $quantity = null,
                                null|iterable $material = null,
                                null|iterable $alternateMaterial = null,
                                null|iterable $shelfLifeStorage = null,
                                null|iterable $manufacturer = null,
                                null|iterable $property = null,
                                null|iterable $containedItem = null,
                                null|iterable $package = null,
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
        if (null !== $package) {
            $this->setPackage(...$package);
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * The physical type of the container of the items.
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
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
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $quantity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQuantity(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $quantity,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        if (!($quantity instanceof FHIRInteger)) {
            $quantity = new FHIRInteger(value: $quantity);
        }
        $this->quantity = $quantity;
        if ($this->_valueXMLLocations[self::FIELD_QUANTITY] !== $valueXMLLocation) {
            $this->_setQuantityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the quantity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQuantityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUANTITY];
    }

    /**
     * Set the location the "value" field of the quantity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQuantityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUANTITY] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMaterial(): array
    {
        return $this->material ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $material
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$material
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAlternateMaterial(): array
    {
        return $this->alternateMaterial ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $alternateMaterial
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$alternateMaterial
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
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[]
     */
    public function getShelfLifeStorage(): array
    {
        return $this->shelfLifeStorage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage>
     */
    public function getShelfLifeStorageIterator(): iterable
    {
        if (!isset($this->shelfLifeStorage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->shelfLifeStorage);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage $shelfLifeStorage
     * @return static
     */
    public function addShelfLifeStorage(FHIRPackagedProductDefinitionShelfLifeStorage $shelfLifeStorage): self
    {
        if (!isset($this->shelfLifeStorage)) {
            $this->shelfLifeStorage = [];
        }
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage ...$shelfLifeStorage
     * @return static
     */
    public function setShelfLifeStorage(FHIRPackagedProductDefinitionShelfLifeStorage ...$shelfLifeStorage): self
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
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
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
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $manufacturer
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
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$manufacturer
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty $property
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty ...$property
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[]
     */
    public function getContainedItem(): array
    {
        return $this->containedItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem $containedItem
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem ...$containedItem
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
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[]
     */
    public function getPackage(): array
    {
        return $this->package ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage>
     */
    public function getPackageIterator(): iterable
    {
        if (!isset($this->package)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->package);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $package
     * @return static
     */
    public function addPackage(FHIRPackagedProductDefinitionPackage $package): self
    {
        if (!isset($this->package)) {
            $this->package = [];
        }
        $this->package[] = $package;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage ...$package
     * @return static
     */
    public function setPackage(FHIRPackagedProductDefinitionPackage ...$package): self
    {
        if ([] === $package) {
            unset($this->package);
            return $this;
        }
        $this->package = $package;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinitionPackage)) {
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
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MATERIAL === $cen) {
                $type->addMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALTERNATE_MATERIAL === $cen) {
                $type->addAlternateMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SHELF_LIFE_STORAGE === $cen) {
                $type->addShelfLifeStorage(FHIRPackagedProductDefinitionShelfLifeStorage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRPackagedProductDefinitionProperty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED_ITEM === $cen) {
                $type->addContainedItem(FHIRPackagedProductDefinitionContainedItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGE === $cen) {
                $type->addPackage(FHIRPackagedProductDefinitionPackage::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_QUANTITY])) {
            if (isset($type->quantity)) {
                $type->quantity->setValue((string)$attributes[self::FIELD_QUANTITY]);
                $type->_setQuantityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQuantity((string)$attributes[self::FIELD_QUANTITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->quantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_QUANTITY, $this->quantity->_getFormattedValue());
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
        if (isset($this->package)) {
            foreach ($this->package as $v) {
                $xw->startElement(self::FIELD_PACKAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinitionPackage)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_QUANTITY])
            || isset($json[self::FIELD_QUANTITY_EXT])
            || array_key_exists(self::FIELD_QUANTITY, $json)
            || array_key_exists(self::FIELD_QUANTITY_EXT, $json)) {
            $value = $json[self::FIELD_QUANTITY] ?? null;
            $type->setQuantity(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_QUANTITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MATERIAL]) || array_key_exists(self::FIELD_MATERIAL, $json)) {
            $vs = $json[self::FIELD_MATERIAL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMaterial(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ALTERNATE_MATERIAL]) || array_key_exists(self::FIELD_ALTERNATE_MATERIAL, $json)) {
            $vs = $json[self::FIELD_ALTERNATE_MATERIAL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAlternateMaterial(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SHELF_LIFE_STORAGE]) || array_key_exists(self::FIELD_SHELF_LIFE_STORAGE, $json)) {
            $vs = $json[self::FIELD_SHELF_LIFE_STORAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addShelfLifeStorage(FHIRPackagedProductDefinitionShelfLifeStorage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            $vs = $json[self::FIELD_MANUFACTURER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addManufacturer(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROPERTY]) || array_key_exists(self::FIELD_PROPERTY, $json)) {
            $vs = $json[self::FIELD_PROPERTY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProperty(FHIRPackagedProductDefinitionProperty::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CONTAINED_ITEM]) || array_key_exists(self::FIELD_CONTAINED_ITEM, $json)) {
            $vs = $json[self::FIELD_CONTAINED_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContainedItem(FHIRPackagedProductDefinitionContainedItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PACKAGE]) || array_key_exists(self::FIELD_PACKAGE, $json)) {
            $vs = $json[self::FIELD_PACKAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPackage(FHIRPackagedProductDefinitionPackage::jsonUnserialize($v, $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
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
            $out->material = $this->material;
        }
        if (isset($this->alternateMaterial) && [] !== $this->alternateMaterial) {
            $out->alternateMaterial = $this->alternateMaterial;
        }
        if (isset($this->shelfLifeStorage) && [] !== $this->shelfLifeStorage) {
            $out->shelfLifeStorage = $this->shelfLifeStorage;
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->property) && [] !== $this->property) {
            $out->property = $this->property;
        }
        if (isset($this->containedItem) && [] !== $this->containedItem) {
            $out->containedItem = $this->containedItem;
        }
        if (isset($this->package) && [] !== $this->package) {
            $out->package = $this->package;
        }
        return $out;
    }
}