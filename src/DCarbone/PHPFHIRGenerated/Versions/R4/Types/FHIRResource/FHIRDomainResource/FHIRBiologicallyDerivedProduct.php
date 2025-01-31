<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductCategoryList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStatusList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A material substance originating from a biological entity intended to be
 * transplanted or infused into another (possibly the same) biological entity.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRBiologicallyDerivedProduct extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_PRODUCT_CATEGORY = 'productCategory';
    public const FIELD_PRODUCT_CATEGORY_EXT = '_productCategory';
    public const FIELD_PRODUCT_CODE = 'productCode';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_REQUEST = 'request';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_QUANTITY_EXT = '_quantity';
    public const FIELD_PARENT = 'parent';
    public const FIELD_COLLECTION = 'collection';
    public const FIELD_PROCESSING = 'processing';
    public const FIELD_MANIPULATION = 'manipulation';
    public const FIELD_STORAGE = 'storage';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_PRODUCT_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Biologically Derived Product Category.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Broad category of this product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory 
     */
    protected FHIRBiologicallyDerivedProductCategory $productCategory;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $productCode;
    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus 
     */
    protected FHIRBiologicallyDerivedProductStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $request;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $quantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $parent;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection 
     */
    protected FHIRBiologicallyDerivedProductCollection $collection;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[] 
     */
    protected array $processing;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any manipulation of product post-collection that is intended to alter the
     * product. For example a buffy-coat enrichment or CD8 reduction of Peripheral
     * Blood Stem Cells to make it more suitable for infusion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation 
     */
    protected FHIRBiologicallyDerivedProductManipulation $manipulation;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[] 
     */
    protected array $storage;

    /* constructor.php:63 */
    /**
     * FHIRBiologicallyDerivedProduct Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductCategoryList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory $productCategory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $productCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $request
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $parent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection $collection
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[] $processing
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation $manipulation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[] $storage
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
                                null|string|FHIRBiologicallyDerivedProductCategoryList|FHIRBiologicallyDerivedProductCategory $productCategory = null,
                                null|FHIRCodeableConcept $productCode = null,
                                null|string|FHIRBiologicallyDerivedProductStatusList|FHIRBiologicallyDerivedProductStatus $status = null,
                                null|iterable $request = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $quantity = null,
                                null|iterable $parent = null,
                                null|FHIRBiologicallyDerivedProductCollection $collection = null,
                                null|iterable $processing = null,
                                null|FHIRBiologicallyDerivedProductManipulation $manipulation = null,
                                null|iterable $storage = null,
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
        if (null !== $productCategory) {
            $this->setProductCategory($productCategory);
        }
        if (null !== $productCode) {
            $this->setProductCode($productCode);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $request) {
            $this->setRequest(...$request);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $parent) {
            $this->setParent(...$parent);
        }
        if (null !== $collection) {
            $this->setCollection($collection);
        }
        if (null !== $processing) {
            $this->setProcessing(...$processing);
        }
        if (null !== $manipulation) {
            $this->setManipulation($manipulation);
        }
        if (null !== $storage) {
            $this->setStorage(...$storage);
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
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
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
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
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
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * Biologically Derived Product Category.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Broad category of this product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    public function getProductCategory(): null|FHIRBiologicallyDerivedProductCategory
    {
        return $this->productCategory ?? null;
    }

    /**
     * Biologically Derived Product Category.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Broad category of this product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductCategoryList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory $productCategory
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setProductCategory(null|string|FHIRBiologicallyDerivedProductCategoryList|FHIRBiologicallyDerivedProductCategory $productCategory,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $productCategory) {
            unset($this->productCategory);
            return $this;
        }
        if (!($productCategory instanceof FHIRBiologicallyDerivedProductCategory)) {
            $productCategory = new FHIRBiologicallyDerivedProductCategory(value: $productCategory);
        }
        $this->productCategory = $productCategory;
        if ($this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY] !== $valueXMLLocation) {
            $this->_setProductCategoryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the productCategory element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getProductCategoryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY];
    }

    /**
     * Set the location the "value" field of the productCategory element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setProductCategoryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCode(): null|FHIRCodeableConcept
    {
        return $this->productCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $productCode
     * @return static
     */
    public function setProductCode(null|FHIRCodeableConcept $productCode): self
    {
        if (null === $productCode) {
            unset($this->productCode);
            return $this;
        }
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    public function getStatus(): null|FHIRBiologicallyDerivedProductStatus
    {
        return $this->status ?? null;
    }

    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRBiologicallyDerivedProductStatusList|FHIRBiologicallyDerivedProductStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRBiologicallyDerivedProductStatus)) {
            $status = new FHIRBiologicallyDerivedProductStatus(value: $status);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getRequest(): array
    {
        return $this->request ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
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
     * Procedure request to obtain this biologically derived product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $request
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
     * Procedure request to obtain this biologically derived product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$request
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
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
     * Number of discrete units within this product.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $quantity
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getParent(): array
    {
        return $this->parent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getParentIterator(): iterable
    {
        if (!isset($this->parent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parent);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $parent
     * @return static
     */
    public function addParent(FHIRReference $parent): self
    {
        if (!isset($this->parent)) {
            $this->parent = [];
        }
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$parent
     * @return static
     */
    public function setParent(FHIRReference ...$parent): self
    {
        if ([] === $parent) {
            unset($this->parent);
            return $this;
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function getCollection(): null|FHIRBiologicallyDerivedProductCollection
    {
        return $this->collection ?? null;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection $collection
     * @return static
     */
    public function setCollection(null|FHIRBiologicallyDerivedProductCollection $collection): self
    {
        if (null === $collection) {
            unset($this->collection);
            return $this;
        }
        $this->collection = $collection;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[]
     */
    public function getProcessing(): array
    {
        return $this->processing ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing>
     */
    public function getProcessingIterator(): iterable
    {
        if (!isset($this->processing)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->processing);
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing $processing
     * @return static
     */
    public function addProcessing(FHIRBiologicallyDerivedProductProcessing $processing): self
    {
        if (!isset($this->processing)) {
            $this->processing = [];
        }
        $this->processing[] = $processing;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing ...$processing
     * @return static
     */
    public function setProcessing(FHIRBiologicallyDerivedProductProcessing ...$processing): self
    {
        if ([] === $processing) {
            unset($this->processing);
            return $this;
        }
        $this->processing = $processing;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any manipulation of product post-collection that is intended to alter the
     * product. For example a buffy-coat enrichment or CD8 reduction of Peripheral
     * Blood Stem Cells to make it more suitable for infusion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     */
    public function getManipulation(): null|FHIRBiologicallyDerivedProductManipulation
    {
        return $this->manipulation ?? null;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any manipulation of product post-collection that is intended to alter the
     * product. For example a buffy-coat enrichment or CD8 reduction of Peripheral
     * Blood Stem Cells to make it more suitable for infusion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation $manipulation
     * @return static
     */
    public function setManipulation(null|FHIRBiologicallyDerivedProductManipulation $manipulation): self
    {
        if (null === $manipulation) {
            unset($this->manipulation);
            return $this;
        }
        $this->manipulation = $manipulation;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[]
     */
    public function getStorage(): array
    {
        return $this->storage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage>
     */
    public function getStorageIterator(): iterable
    {
        if (!isset($this->storage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->storage);
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage $storage
     * @return static
     */
    public function addStorage(FHIRBiologicallyDerivedProductStorage $storage): self
    {
        if (!isset($this->storage)) {
            $this->storage = [];
        }
        $this->storage[] = $storage;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage ...$storage
     * @return static
     */
    public function setStorage(FHIRBiologicallyDerivedProductStorage ...$storage): self
    {
        if ([] === $storage) {
            unset($this->storage);
            return $this;
        }
        $this->storage = $storage;
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
        if (isset($validationRules[self::FIELD_PRODUCT_CATEGORY])) {
            $v = $this->getProductCategory();
            foreach($validationRules[self::FIELD_PRODUCT_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CATEGORY])) {
                        $errs[self::FIELD_PRODUCT_CATEGORY] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CODE])) {
            $v = $this->getProductCode();
            foreach($validationRules[self::FIELD_PRODUCT_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CODE])) {
                        $errs[self::FIELD_PRODUCT_CODE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CODE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTION])) {
            $v = $this->getCollection();
            foreach($validationRules[self::FIELD_COLLECTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COLLECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTION])) {
                        $errs[self::FIELD_COLLECTION] = [];
                    }
                    $errs[self::FIELD_COLLECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESSING])) {
            $v = $this->getProcessing();
            foreach($validationRules[self::FIELD_PROCESSING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESSING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESSING])) {
                        $errs[self::FIELD_PROCESSING] = [];
                    }
                    $errs[self::FIELD_PROCESSING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANIPULATION])) {
            $v = $this->getManipulation();
            foreach($validationRules[self::FIELD_MANIPULATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANIPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANIPULATION])) {
                        $errs[self::FIELD_MANIPULATION] = [];
                    }
                    $errs[self::FIELD_MANIPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STORAGE])) {
            $v = $this->getStorage();
            foreach($validationRules[self::FIELD_STORAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STORAGE])) {
                        $errs[self::FIELD_STORAGE] = [];
                    }
                    $errs[self::FIELD_STORAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBiologicallyDerivedProduct)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_CATEGORY === $cen) {
                $type->setProductCategory(FHIRBiologicallyDerivedProductCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_CODE === $cen) {
                $type->setProductCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRBiologicallyDerivedProductStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST === $cen) {
                $type->addRequest(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARENT === $cen) {
                $type->addParent(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COLLECTION === $cen) {
                $type->setCollection(FHIRBiologicallyDerivedProductCollection::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCESSING === $cen) {
                $type->addProcessing(FHIRBiologicallyDerivedProductProcessing::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANIPULATION === $cen) {
                $type->setManipulation(FHIRBiologicallyDerivedProductManipulation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STORAGE === $cen) {
                $type->addStorage(FHIRBiologicallyDerivedProductStorage::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_PRODUCT_CATEGORY])) {
            if (isset($type->productCategory)) {
                $type->productCategory->setValue((string)$attributes[self::FIELD_PRODUCT_CATEGORY]);
                $type->_setProductCategoryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setProductCategory((string)$attributes[self::FIELD_PRODUCT_CATEGORY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('BiologicallyDerivedProduct', $this->_getSourceXMLNS());
        }
        if (isset($this->productCategory) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_PRODUCT_CATEGORY, $this->productCategory->_getFormattedValue());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->quantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_QUANTITY, $this->quantity->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->productCategory)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY]
                || $this->productCategory->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRODUCT_CATEGORY);
            $this->productCategory->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRODUCT_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->productCode)) {
            $xw->startElement(self::FIELD_PRODUCT_CODE);
            $this->productCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->request)) {
            foreach ($this->request as $v) {
                $xw->startElement(self::FIELD_REQUEST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->quantity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUANTITY]
                || $this->quantity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUANTITY]);
            $xw->endElement();
        }
        if (isset($this->parent)) {
            foreach ($this->parent as $v) {
                $xw->startElement(self::FIELD_PARENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->collection)) {
            $xw->startElement(self::FIELD_COLLECTION);
            $this->collection->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->processing)) {
            foreach ($this->processing as $v) {
                $xw->startElement(self::FIELD_PROCESSING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->manipulation)) {
            $xw->startElement(self::FIELD_MANIPULATION);
            $this->manipulation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->storage)) {
            foreach ($this->storage as $v) {
                $xw->startElement(self::FIELD_STORAGE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBiologicallyDerivedProduct)) {
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
        if (isset($json[self::FIELD_PRODUCT_CATEGORY])
            || isset($json[self::FIELD_PRODUCT_CATEGORY_EXT])
            || array_key_exists(self::FIELD_PRODUCT_CATEGORY, $json)
            || array_key_exists(self::FIELD_PRODUCT_CATEGORY_EXT, $json)) {
            $value = $json[self::FIELD_PRODUCT_CATEGORY] ?? null;
            $type->setProductCategory(FHIRBiologicallyDerivedProductCategory::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBiologicallyDerivedProductCategory::FIELD_VALUE => $value]) + ($json[self::FIELD_PRODUCT_CATEGORY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PRODUCT_CODE]) || array_key_exists(self::FIELD_PRODUCT_CODE, $json)) {
            $type->setProductCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PRODUCT_CODE], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRBiologicallyDerivedProductStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBiologicallyDerivedProductStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST]) || array_key_exists(self::FIELD_REQUEST, $json)) {
            $vs = $json[self::FIELD_REQUEST];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRequest(FHIRReference::jsonUnserialize($v, $config));
            }
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
        if (isset($json[self::FIELD_PARENT]) || array_key_exists(self::FIELD_PARENT, $json)) {
            $vs = $json[self::FIELD_PARENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParent(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COLLECTION]) || array_key_exists(self::FIELD_COLLECTION, $json)) {
            $type->setCollection(FHIRBiologicallyDerivedProductCollection::jsonUnserialize($json[self::FIELD_COLLECTION], $config));
        }
        if (isset($json[self::FIELD_PROCESSING]) || array_key_exists(self::FIELD_PROCESSING, $json)) {
            $vs = $json[self::FIELD_PROCESSING];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProcessing(FHIRBiologicallyDerivedProductProcessing::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MANIPULATION]) || array_key_exists(self::FIELD_MANIPULATION, $json)) {
            $type->setManipulation(FHIRBiologicallyDerivedProductManipulation::jsonUnserialize($json[self::FIELD_MANIPULATION], $config));
        }
        if (isset($json[self::FIELD_STORAGE]) || array_key_exists(self::FIELD_STORAGE, $json)) {
            $vs = $json[self::FIELD_STORAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addStorage(FHIRBiologicallyDerivedProductStorage::jsonUnserialize($v, $config));
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
        if (isset($this->productCategory)) {
            if (null !== ($val = $this->productCategory->getValue())) {
                $out->productCategory = $val;
            }
            $ext = $this->productCategory->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_productCategory = $ext;
            }
        }
        if (isset($this->productCode)) {
            $out->productCode = $this->productCode;
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
        if (isset($this->request) && [] !== $this->request) {
            $out->request = $this->request;
        }
        if (isset($this->quantity)) {
            if (null !== ($val = $this->quantity->getValue())) {
                $out->quantity = $val;
            }
            $ext = $this->quantity->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_quantity = $ext;
            }
        }
        if (isset($this->parent) && [] !== $this->parent) {
            $out->parent = $this->parent;
        }
        if (isset($this->collection)) {
            $out->collection = $this->collection;
        }
        if (isset($this->processing) && [] !== $this->processing) {
            $out->processing = $this->processing;
        }
        if (isset($this->manipulation)) {
            $out->manipulation = $this->manipulation;
        }
        if (isset($this->storage) && [] !== $this->storage) {
            $out->storage = $this->storage;
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