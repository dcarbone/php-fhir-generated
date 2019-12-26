<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A material substance originating from a biological entity intended to be
 * transplanted or infused into another (possibly the same) biological entity.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRBiologicallyDerivedProduct
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRBiologicallyDerivedProduct extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT;
    const FIELD_COLLECTION = 'collection';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MANIPULATION = 'manipulation';
    const FIELD_PARENT = 'parent';
    const FIELD_PROCESSING = 'processing';
    const FIELD_PRODUCT_CATEGORY = 'productCategory';
    const FIELD_PRODUCT_CATEGORY_EXT = '_productCategory';
    const FIELD_PRODUCT_CODE = 'productCode';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_REQUEST = 'request';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STORAGE = 'storage';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    protected $collection = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any manipulation of product post-collection that is intended to alter the
     * product. For example a buffy-coat enrichment or CD8 reduction of Peripheral
     * Blood Stem Cells to make it more suitable for infusion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     */
    protected $manipulation = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $parent = [];

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[]
     */
    protected $processing = [];

    /**
     * Biologically Derived Product Category.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Broad category of this product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    protected $productCategory = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $productCode = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $quantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $request = [];

    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    protected $status = null;

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[]
     */
    protected $storage = [];

    /**
     * Validation map for fields in type BiologicallyDerivedProduct
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRBiologicallyDerivedProduct Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProduct::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COLLECTION])) {
            if ($data[self::FIELD_COLLECTION] instanceof FHIRBiologicallyDerivedProductCollection) {
                $this->setCollection($data[self::FIELD_COLLECTION]);
            } else {
                $this->setCollection(new FHIRBiologicallyDerivedProductCollection($data[self::FIELD_COLLECTION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MANIPULATION])) {
            if ($data[self::FIELD_MANIPULATION] instanceof FHIRBiologicallyDerivedProductManipulation) {
                $this->setManipulation($data[self::FIELD_MANIPULATION]);
            } else {
                $this->setManipulation(new FHIRBiologicallyDerivedProductManipulation($data[self::FIELD_MANIPULATION]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if (is_array($data[self::FIELD_PARENT])) {
                foreach($data[self::FIELD_PARENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addParent($v);
                    } else {
                        $this->addParent(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->addParent($data[self::FIELD_PARENT]);
            } else {
                $this->addParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_PROCESSING])) {
            if (is_array($data[self::FIELD_PROCESSING])) {
                foreach($data[self::FIELD_PROCESSING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBiologicallyDerivedProductProcessing) {
                        $this->addProcessing($v);
                    } else {
                        $this->addProcessing(new FHIRBiologicallyDerivedProductProcessing($v));
                    }
                }
            } else if ($data[self::FIELD_PROCESSING] instanceof FHIRBiologicallyDerivedProductProcessing) {
                $this->addProcessing($data[self::FIELD_PROCESSING]);
            } else {
                $this->addProcessing(new FHIRBiologicallyDerivedProductProcessing($data[self::FIELD_PROCESSING]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CATEGORY]) || isset($data[self::FIELD_PRODUCT_CATEGORY_EXT])) {
            if (isset($data[self::FIELD_PRODUCT_CATEGORY])) {
                $value = $data[self::FIELD_PRODUCT_CATEGORY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRODUCT_CATEGORY_EXT]) && is_array($data[self::FIELD_PRODUCT_CATEGORY_EXT])) {
                $ext = $data[self::FIELD_PRODUCT_CATEGORY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBiologicallyDerivedProductCategory) {
                    $this->setProductCategory($value);
                } else if (is_array($value)) {
                    $this->setProductCategory(new FHIRBiologicallyDerivedProductCategory(array_merge($ext, $value)));
                } else {
                    $this->setProductCategory(new FHIRBiologicallyDerivedProductCategory([FHIRBiologicallyDerivedProductCategory::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProductCategory(new FHIRBiologicallyDerivedProductCategory($ext));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CODE])) {
            if ($data[self::FIELD_PRODUCT_CODE] instanceof FHIRCodeableConcept) {
                $this->setProductCode($data[self::FIELD_PRODUCT_CODE]);
            } else {
                $this->setProductCode(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY]) || isset($data[self::FIELD_QUANTITY_EXT])) {
            if (isset($data[self::FIELD_QUANTITY])) {
                $value = $data[self::FIELD_QUANTITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT])) {
                $ext = $data[self::FIELD_QUANTITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setQuantity($value);
                } else if (is_array($value)) {
                    $this->setQuantity(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setQuantity(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setQuantity(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRequest($v);
                    } else {
                        $this->addRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->addRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBiologicallyDerivedProductStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRBiologicallyDerivedProductStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRBiologicallyDerivedProductStatus([FHIRBiologicallyDerivedProductStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRBiologicallyDerivedProductStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STORAGE])) {
            if (is_array($data[self::FIELD_STORAGE])) {
                foreach($data[self::FIELD_STORAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRBiologicallyDerivedProductStorage) {
                        $this->addStorage($v);
                    } else {
                        $this->addStorage(new FHIRBiologicallyDerivedProductStorage($v));
                    }
                }
            } else if ($data[self::FIELD_STORAGE] instanceof FHIRBiologicallyDerivedProductStorage) {
                $this->addStorage($data[self::FIELD_STORAGE]);
            } else {
                $this->addStorage(new FHIRBiologicallyDerivedProductStorage($data[self::FIELD_STORAGE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<BiologicallyDerivedProduct{$xmlns}></BiologicallyDerivedProduct>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection $collection
     * @return static
     */
    public function setCollection(FHIRBiologicallyDerivedProductCollection $collection = null)
    {
        $this->collection = $collection;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     */
    public function getManipulation()
    {
        return $this->manipulation;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any manipulation of product post-collection that is intended to alter the
     * product. For example a buffy-coat enrichment or CD8 reduction of Peripheral
     * Blood Stem Cells to make it more suitable for infusion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation $manipulation
     * @return static
     */
    public function setManipulation(FHIRBiologicallyDerivedProductManipulation $manipulation = null)
    {
        $this->manipulation = $manipulation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $parent
     * @return static
     */
    public function addParent(FHIRReference $parent = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $parent
     * @return static
     */
    public function setParent(array $parent = [])
    {
        $this->parent = [];
        if ([] === $parent) {
            return $this;
        }
        foreach($parent as $v) {
            if ($v instanceof FHIRReference) {
                $this->addParent($v);
            } else {
                $this->addParent(new FHIRReference($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[]
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Any processing of the product during collection that does not change the
     * fundamental nature of the product. For example adding anti-coagulants during the
     * collection of Peripheral Blood Stem Cells.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing $processing
     * @return static
     */
    public function addProcessing(FHIRBiologicallyDerivedProductProcessing $processing = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing[] $processing
     * @return static
     */
    public function setProcessing(array $processing = [])
    {
        $this->processing = [];
        if ([] === $processing) {
            return $this;
        }
        foreach($processing as $v) {
            if ($v instanceof FHIRBiologicallyDerivedProductProcessing) {
                $this->addProcessing($v);
            } else {
                $this->addProcessing(new FHIRBiologicallyDerivedProductProcessing($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Biologically Derived Product Category.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Broad category of this product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory $productCategory
     * @return static
     */
    public function setProductCategory(FHIRBiologicallyDerivedProductCategory $productCategory = null)
    {
        $this->productCategory = $productCategory;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCode()
    {
        return $this->productCode;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productCode
     * @return static
     */
    public function setProductCode(FHIRCodeableConcept $productCode = null)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $quantity
     * @return static
     */
    public function setQuantity($quantity = null)
    {
        if (null === $quantity) {
            $this->quantity = null;
            return $this;
        }
        if ($quantity instanceof FHIRInteger) {
            $this->quantity = $quantity;
            return $this;
        }
        $this->quantity = new FHIRInteger($quantity);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $request
     * @return static
     */
    public function addRequest(FHIRReference $request = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $request
     * @return static
     */
    public function setRequest(array $request = [])
    {
        $this->request = [];
        if ([] === $request) {
            return $this;
        }
        foreach($request as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequest($v);
            } else {
                $this->addRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the product is currently available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus $status
     * @return static
     */
    public function setStatus(FHIRBiologicallyDerivedProductStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[]
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage $storage
     * @return static
     */
    public function addStorage(FHIRBiologicallyDerivedProductStorage $storage = null)
    {
        $this->storage[] = $storage;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[] $storage
     * @return static
     */
    public function setStorage(array $storage = [])
    {
        $this->storage = [];
        if ([] === $storage) {
            return $this;
        }
        foreach($storage as $v) {
            if ($v instanceof FHIRBiologicallyDerivedProductStorage) {
                $this->addStorage($v);
            } else {
                $this->addStorage(new FHIRBiologicallyDerivedProductStorage($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCollection())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLLECTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getManipulation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANIPULATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProcessing())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCESSING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProductCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStorage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STORAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTION])) {
            $v = $this->getCollection();
            foreach($validationRules[self::FIELD_COLLECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_COLLECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTION])) {
                        $errs[self::FIELD_COLLECTION] = [];
                    }
                    $errs[self::FIELD_COLLECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANIPULATION])) {
            $v = $this->getManipulation();
            foreach($validationRules[self::FIELD_MANIPULATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_MANIPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANIPULATION])) {
                        $errs[self::FIELD_MANIPULATION] = [];
                    }
                    $errs[self::FIELD_MANIPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESSING])) {
            $v = $this->getProcessing();
            foreach($validationRules[self::FIELD_PROCESSING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PROCESSING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESSING])) {
                        $errs[self::FIELD_PROCESSING] = [];
                    }
                    $errs[self::FIELD_PROCESSING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CATEGORY])) {
            $v = $this->getProductCategory();
            foreach($validationRules[self::FIELD_PRODUCT_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PRODUCT_CATEGORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_PRODUCT_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CODE])) {
                        $errs[self::FIELD_PRODUCT_CODE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STORAGE])) {
            $v = $this->getStorage();
            foreach($validationRules[self::FIELD_STORAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT, self::FIELD_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STORAGE])) {
                        $errs[self::FIELD_STORAGE] = [];
                    }
                    $errs[self::FIELD_STORAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRBiologicallyDerivedProduct::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBiologicallyDerivedProduct::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBiologicallyDerivedProduct;
        } elseif (!is_object($type) || !($type instanceof FHIRBiologicallyDerivedProduct)) {
            throw new \RuntimeException(sprintf(
                'FHIRBiologicallyDerivedProduct::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->collection)) {
            $type->setCollection(FHIRBiologicallyDerivedProductCollection::xmlUnserialize($children->collection));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->manipulation)) {
            $type->setManipulation(FHIRBiologicallyDerivedProductManipulation::xmlUnserialize($children->manipulation));
        }
        if (isset($children->parent)) {
            foreach($children->parent as $child) {
                $type->addParent(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->processing)) {
            foreach($children->processing as $child) {
                $type->addProcessing(FHIRBiologicallyDerivedProductProcessing::xmlUnserialize($child));
            }
        }
        if (isset($children->productCategory)) {
            $type->setProductCategory(FHIRBiologicallyDerivedProductCategory::xmlUnserialize($children->productCategory));
        }
        if (isset($children->productCode)) {
            $type->setProductCode(FHIRCodeableConcept::xmlUnserialize($children->productCode));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRInteger::xmlUnserialize($children->quantity));
        }
        if (isset($attributes->quantity)) {
            $pt = $type->getQuantity();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->quantity);
            } else {
                $type->setQuantity((string)$attributes->quantity);
            }
        }
        if (isset($children->request)) {
            foreach($children->request as $child) {
                $type->addRequest(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRBiologicallyDerivedProductStatus::xmlUnserialize($children->status));
        }
        if (isset($children->storage)) {
            foreach($children->storage as $child) {
                $type->addStorage(FHIRBiologicallyDerivedProductStorage::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCollection())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getManipulation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANIPULATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProcessing())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESSING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getProductCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProductCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStorage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STORAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCollection())) {
            $a[self::FIELD_COLLECTION] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getManipulation())) {
            $a[self::FIELD_MANIPULATION] = $v;
        }
        if ([] !== ($vs = $this->getParent())) {
            $a[self::FIELD_PARENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProcessing())) {
            $a[self::FIELD_PROCESSING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROCESSING][] = $v;
            }
        }
        if (null !== ($v = $this->getProductCategory())) {
            $a[self::FIELD_PRODUCT_CATEGORY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBiologicallyDerivedProductCategory::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBiologicallyDerivedProductCategory::FIELD_VALUE]);
                $a[self::FIELD_PRODUCT_CATEGORY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProductCode())) {
            $a[self::FIELD_PRODUCT_CODE] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_QUANTITY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REQUEST][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBiologicallyDerivedProductStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBiologicallyDerivedProductStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getStorage())) {
            $a[self::FIELD_STORAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STORAGE][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}