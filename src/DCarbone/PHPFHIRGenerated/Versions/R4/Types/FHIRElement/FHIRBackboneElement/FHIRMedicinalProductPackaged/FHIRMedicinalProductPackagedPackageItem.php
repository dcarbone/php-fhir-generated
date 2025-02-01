<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A medicinal product in a container or package.
 */
class FHIRMedicinalProductPackagedPackageItem extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_PACKAGED_DOT_PACKAGE_ITEM;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MATERIAL = 'material';
    public const FIELD_ALTERNATE_MATERIAL = 'alternateMaterial';
    public const FIELD_DEVICE = 'device';
    public const FIELD_MANUFACTURED_ITEM = 'manufacturedItem';
    public const FIELD_PACKAGE_ITEM = 'packageItem';
    public const FIELD_PHYSICAL_CHARACTERISTICS = 'physicalCharacteristics';
    public const FIELD_OTHER_CHARACTERISTICS = 'otherCharacteristics';
    public const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    public const FIELD_MANUFACTURER = 'manufacturer';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_QUANTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Including possibly Data Carrier Identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The physical type of the container of the medicine.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of this package in the medicinal product, at the current level of
     * packaging. The outermost is always 1.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $material;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for the packaging.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $alternateMaterial;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device accompanying a medicinal product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $device;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $manufacturedItem;
    /**
     * A medicinal product in a container or package.
     *
     * Allows containers within containers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[] 
     */
    protected array $packageItem;
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic 
     */
    protected FHIRProdCharacteristic $physicalCharacteristics;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $otherCharacteristics;
    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[] 
     */
    protected array $shelfLifeStorage;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Package Item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $manufacturer;

    /* constructor.php:63 */
    /**
     * FHIRMedicinalProductPackagedPackageItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $material
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $alternateMaterial
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $device
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $manufacturedItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[] $packageItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $physicalCharacteristics
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $otherCharacteristics
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[] $shelfLifeStorage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $manufacturer
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRQuantity $quantity = null,
                                null|iterable $material = null,
                                null|iterable $alternateMaterial = null,
                                null|iterable $device = null,
                                null|iterable $manufacturedItem = null,
                                null|iterable $packageItem = null,
                                null|FHIRProdCharacteristic $physicalCharacteristics = null,
                                null|iterable $otherCharacteristics = null,
                                null|iterable $shelfLifeStorage = null,
                                null|iterable $manufacturer = null,
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
        if (null !== $device) {
            $this->setDevice(...$device);
        }
        if (null !== $manufacturedItem) {
            $this->setManufacturedItem(...$manufacturedItem);
        }
        if (null !== $packageItem) {
            $this->setPackageItem(...$packageItem);
        }
        if (null !== $physicalCharacteristics) {
            $this->setPhysicalCharacteristics($physicalCharacteristics);
        }
        if (null !== $otherCharacteristics) {
            $this->setOtherCharacteristics(...$otherCharacteristics);
        }
        if (null !== $shelfLifeStorage) {
            $this->setShelfLifeStorage(...$shelfLifeStorage);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer(...$manufacturer);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Including possibly Data Carrier Identifier.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
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
     * Including possibly Data Carrier Identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
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
     * Including possibly Data Carrier Identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * The physical type of the container of the medicine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * The physical type of the container of the medicine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of this package in the medicinal product, at the current level of
     * packaging. The outermost is always 1.
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
     * The quantity of this package in the medicinal product, at the current level of
     * packaging. The outermost is always 1.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMaterial(): array
    {
        return $this->material ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $material
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$material
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
     * A possible alternate material for the packaging.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAlternateMaterial(): array
    {
        return $this->alternateMaterial ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
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
     * A possible alternate material for the packaging.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $alternateMaterial
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
     * A possible alternate material for the packaging.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$alternateMaterial
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device accompanying a medicinal product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getDevice(): array
    {
        return $this->device ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getDeviceIterator(): iterable
    {
        if (!isset($this->device)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->device);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device accompanying a medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(FHIRReference $device): self
    {
        if (!isset($this->device)) {
            $this->device = [];
        }
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device accompanying a medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$device
     * @return static
     */
    public function setDevice(FHIRReference ...$device): self
    {
        if ([] === $device) {
            unset($this->device);
            return $this;
        }
        $this->device = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getManufacturedItem(): array
    {
        return $this->manufacturedItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getManufacturedItemIterator(): iterable
    {
        if (!isset($this->manufacturedItem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manufacturedItem);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $manufacturedItem
     * @return static
     */
    public function addManufacturedItem(FHIRReference $manufacturedItem): self
    {
        if (!isset($this->manufacturedItem)) {
            $this->manufacturedItem = [];
        }
        $this->manufacturedItem[] = $manufacturedItem;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$manufacturedItem
     * @return static
     */
    public function setManufacturedItem(FHIRReference ...$manufacturedItem): self
    {
        if ([] === $manufacturedItem) {
            unset($this->manufacturedItem);
            return $this;
        }
        $this->manufacturedItem = $manufacturedItem;
        return $this;
    }

    /**
     * A medicinal product in a container or package.
     *
     * Allows containers within containers.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[]
     */
    public function getPackageItem(): array
    {
        return $this->packageItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem>
     */
    public function getPackageItemIterator(): iterable
    {
        if (!isset($this->packageItem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->packageItem);
    }

    /**
     * A medicinal product in a container or package.
     *
     * Allows containers within containers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem $packageItem
     * @return static
     */
    public function addPackageItem(FHIRMedicinalProductPackagedPackageItem $packageItem): self
    {
        if (!isset($this->packageItem)) {
            $this->packageItem = [];
        }
        $this->packageItem[] = $packageItem;
        return $this;
    }

    /**
     * A medicinal product in a container or package.
     *
     * Allows containers within containers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem ...$packageItem
     * @return static
     */
    public function setPackageItem(FHIRMedicinalProductPackagedPackageItem ...$packageItem): self
    {
        if ([] === $packageItem) {
            unset($this->packageItem);
            return $this;
        }
        $this->packageItem = $packageItem;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public function getPhysicalCharacteristics(): null|FHIRProdCharacteristic
    {
        return $this->physicalCharacteristics ?? null;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $physicalCharacteristics
     * @return static
     */
    public function setPhysicalCharacteristics(null|FHIRProdCharacteristic $physicalCharacteristics): self
    {
        if (null === $physicalCharacteristics) {
            unset($this->physicalCharacteristics);
            return $this;
        }
        $this->physicalCharacteristics = $physicalCharacteristics;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOtherCharacteristics(): array
    {
        return $this->otherCharacteristics ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getOtherCharacteristicsIterator(): iterable
    {
        if (!isset($this->otherCharacteristics)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->otherCharacteristics);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $otherCharacteristics
     * @return static
     */
    public function addOtherCharacteristics(FHIRCodeableConcept $otherCharacteristics): self
    {
        if (!isset($this->otherCharacteristics)) {
            $this->otherCharacteristics = [];
        }
        $this->otherCharacteristics[] = $otherCharacteristics;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$otherCharacteristics
     * @return static
     */
    public function setOtherCharacteristics(FHIRCodeableConcept ...$otherCharacteristics): self
    {
        if ([] === $otherCharacteristics) {
            unset($this->otherCharacteristics);
            return $this;
        }
        $this->otherCharacteristics = $otherCharacteristics;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[]
     */
    public function getShelfLifeStorage(): array
    {
        return $this->shelfLifeStorage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife $shelfLifeStorage
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife ...$shelfLifeStorage
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
     * Manufacturer of this Package Item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
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
     * Manufacturer of this Package Item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $manufacturer
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
     * Manufacturer of this Package Item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$manufacturer
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

    /* class_default.php:188 */
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
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERIAL])) {
            $v = $this->getMaterial();
            foreach($validationRules[self::FIELD_MATERIAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERIAL])) {
                        $errs[self::FIELD_MATERIAL] = [];
                    }
                    $errs[self::FIELD_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTERNATE_MATERIAL])) {
            $v = $this->getAlternateMaterial();
            foreach($validationRules[self::FIELD_ALTERNATE_MATERIAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALTERNATE_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATE_MATERIAL])) {
                        $errs[self::FIELD_ALTERNATE_MATERIAL] = [];
                    }
                    $errs[self::FIELD_ALTERNATE_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURED_ITEM])) {
            $v = $this->getManufacturedItem();
            foreach($validationRules[self::FIELD_MANUFACTURED_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANUFACTURED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURED_ITEM])) {
                        $errs[self::FIELD_MANUFACTURED_ITEM] = [];
                    }
                    $errs[self::FIELD_MANUFACTURED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGE_ITEM])) {
            $v = $this->getPackageItem();
            foreach($validationRules[self::FIELD_PACKAGE_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PACKAGE_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGE_ITEM])) {
                        $errs[self::FIELD_PACKAGE_ITEM] = [];
                    }
                    $errs[self::FIELD_PACKAGE_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYSICAL_CHARACTERISTICS])) {
            $v = $this->getPhysicalCharacteristics();
            foreach($validationRules[self::FIELD_PHYSICAL_CHARACTERISTICS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PHYSICAL_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYSICAL_CHARACTERISTICS])) {
                        $errs[self::FIELD_PHYSICAL_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_PHYSICAL_CHARACTERISTICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_CHARACTERISTICS])) {
            $v = $this->getOtherCharacteristics();
            foreach($validationRules[self::FIELD_OTHER_CHARACTERISTICS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OTHER_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_CHARACTERISTICS])) {
                        $errs[self::FIELD_OTHER_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_OTHER_CHARACTERISTICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHELF_LIFE_STORAGE])) {
            $v = $this->getShelfLifeStorage();
            foreach($validationRules[self::FIELD_SHELF_LIFE_STORAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SHELF_LIFE_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHELF_LIFE_STORAGE])) {
                        $errs[self::FIELD_SHELF_LIFE_STORAGE] = [];
                    }
                    $errs[self::FIELD_SHELF_LIFE_STORAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductPackagedPackageItem)) {
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
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MATERIAL === $cen) {
                $type->addMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALTERNATE_MATERIAL === $cen) {
                $type->addAlternateMaterial(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->addDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURED_ITEM === $cen) {
                $type->addManufacturedItem(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGE_ITEM === $cen) {
                $type->addPackageItem(FHIRMedicinalProductPackagedPackageItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHYSICAL_CHARACTERISTICS === $cen) {
                $type->setPhysicalCharacteristics(FHIRProdCharacteristic::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OTHER_CHARACTERISTICS === $cen) {
                $type->addOtherCharacteristics(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SHELF_LIFE_STORAGE === $cen) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
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
        if (isset($this->device)) {
            foreach ($this->device as $v) {
                $xw->startElement(self::FIELD_DEVICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->manufacturedItem)) {
            foreach ($this->manufacturedItem as $v) {
                $xw->startElement(self::FIELD_MANUFACTURED_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->packageItem)) {
            foreach ($this->packageItem as $v) {
                $xw->startElement(self::FIELD_PACKAGE_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->physicalCharacteristics)) {
            $xw->startElement(self::FIELD_PHYSICAL_CHARACTERISTICS);
            $this->physicalCharacteristics->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->otherCharacteristics)) {
            foreach ($this->otherCharacteristics as $v) {
                $xw->startElement(self::FIELD_OTHER_CHARACTERISTICS);
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductPackagedPackageItem)) {
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
        if (isset($json[self::FIELD_QUANTITY]) || array_key_exists(self::FIELD_QUANTITY, $json)) {
            $type->setQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_QUANTITY], $config));
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
        if (isset($json[self::FIELD_DEVICE]) || array_key_exists(self::FIELD_DEVICE, $json)) {
            $vs = $json[self::FIELD_DEVICE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDevice(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURED_ITEM]) || array_key_exists(self::FIELD_MANUFACTURED_ITEM, $json)) {
            $vs = $json[self::FIELD_MANUFACTURED_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addManufacturedItem(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PACKAGE_ITEM]) || array_key_exists(self::FIELD_PACKAGE_ITEM, $json)) {
            $vs = $json[self::FIELD_PACKAGE_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPackageItem(FHIRMedicinalProductPackagedPackageItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PHYSICAL_CHARACTERISTICS]) || array_key_exists(self::FIELD_PHYSICAL_CHARACTERISTICS, $json)) {
            $type->setPhysicalCharacteristics(FHIRProdCharacteristic::jsonUnserialize($json[self::FIELD_PHYSICAL_CHARACTERISTICS], $config));
        }
        if (isset($json[self::FIELD_OTHER_CHARACTERISTICS]) || array_key_exists(self::FIELD_OTHER_CHARACTERISTICS, $json)) {
            $vs = $json[self::FIELD_OTHER_CHARACTERISTICS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOtherCharacteristics(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SHELF_LIFE_STORAGE]) || array_key_exists(self::FIELD_SHELF_LIFE_STORAGE, $json)) {
            $vs = $json[self::FIELD_SHELF_LIFE_STORAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::jsonUnserialize($v, $config));
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
            $out->quantity = $this->quantity;
        }
        if (isset($this->material) && [] !== $this->material) {
            $out->material = $this->material;
        }
        if (isset($this->alternateMaterial) && [] !== $this->alternateMaterial) {
            $out->alternateMaterial = $this->alternateMaterial;
        }
        if (isset($this->device) && [] !== $this->device) {
            $out->device = $this->device;
        }
        if (isset($this->manufacturedItem) && [] !== $this->manufacturedItem) {
            $out->manufacturedItem = $this->manufacturedItem;
        }
        if (isset($this->packageItem) && [] !== $this->packageItem) {
            $out->packageItem = $this->packageItem;
        }
        if (isset($this->physicalCharacteristics)) {
            $out->physicalCharacteristics = $this->physicalCharacteristics;
        }
        if (isset($this->otherCharacteristics) && [] !== $this->otherCharacteristics) {
            $out->otherCharacteristics = $this->otherCharacteristics;
        }
        if (isset($this->shelfLifeStorage) && [] !== $this->shelfLifeStorage) {
            $out->shelfLifeStorage = $this->shelfLifeStorage;
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            $out->manufacturer = $this->manufacturer;
        }
        return $out;
    }
}