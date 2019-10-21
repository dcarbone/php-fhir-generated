<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
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
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRBiologicallyDerivedProduct
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRBiologicallyDerivedProduct extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_COLLECTION = 'collection';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
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

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * How this product was collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    private $collection = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
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
    private $manipulation = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $parent = [];
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
    private $processing = [];
    /**
     * Biologically Derived Product Category.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Broad category of this product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    private $productCategory = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $productCode = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $quantity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $request = [];
    /**
     * Biologically Derived Product Status.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the product is currently available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    private $status = null;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     *
     * Product storage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage[]
     */
    private $storage = [];

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
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
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
        if (isset($data[self::FIELD_PRODUCT_CATEGORY])) {
            $ext = (isset($data[self::FIELD_PRODUCT_CATEGORY_EXT]) && is_array($data[self::FIELD_PRODUCT_CATEGORY_EXT]))
                ? $data[self::FIELD_PRODUCT_CATEGORY_EXT]
                : null;
            if ($data[self::FIELD_PRODUCT_CATEGORY] instanceof FHIRBiologicallyDerivedProductCategory) {
                $this->setProductCategory($data[self::FIELD_PRODUCT_CATEGORY]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRODUCT_CATEGORY])) {
                $this->setProductCategory(new FHIRBiologicallyDerivedProductCategory([FHIRBiologicallyDerivedProductCategory::FIELD_VALUE => $data[self::FIELD_PRODUCT_CATEGORY]] + $ext));
            } else {
                $this->setProductCategory(new FHIRBiologicallyDerivedProductCategory($data[self::FIELD_PRODUCT_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CODE])) {
            if ($data[self::FIELD_PRODUCT_CODE] instanceof FHIRCodeableConcept) {
                $this->setProductCode($data[self::FIELD_PRODUCT_CODE]);
            } else {
                $this->setProductCode(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT]))
                ? $data[self::FIELD_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_QUANTITY] instanceof FHIRInteger) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUANTITY])) {
                $this->setQuantity(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_QUANTITY]] + $ext));
            } else {
                $this->setQuantity(new FHIRInteger($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
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
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRBiologicallyDerivedProductStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRBiologicallyDerivedProductStatus([FHIRBiologicallyDerivedProductStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRBiologicallyDerivedProductStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STORAGE])) {
            if (is_array($data[self::FIELD_STORAGE])) {
                foreach($data[self::FIELD_STORAGE] as $v) {
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this biologically derived product
     * instance that are defined by business processes and/or used to refer to it when
     * a direct URL reference to the resource itself is not appropriate (e.g. in CDA
     * documents, or in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function setManipulation(FHIRBiologicallyDerivedProductManipulation $manipulation = null)
    {
        $this->manipulation = $manipulation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $parent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function addParent(FHIRReference $parent = null)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parent product (if any).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $parent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Broad category of this product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory $productCategory
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of this biologically derived product (SNOMED
     * Ctcode).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function setProductCode(FHIRCodeableConcept $productCode = null)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of discrete units within this product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function addRequest(FHIRReference $request = null)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $request
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the product is currently available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
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
        if (isset($attributes->quantity)) {
            $type->setQuantity((string)$attributes->quantity);
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRInteger::xmlUnserialize($children->quantity));
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
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IDENTIFIER_EXT])) {
                        $a[self::FIELD_IDENTIFIER_EXT] = [];
                    }
                    $a[self::FIELD_IDENTIFIER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getManipulation())) {
            $a[self::FIELD_MANIPULATION] = $v;
        }
        if ([] !== ($vs = $this->getParent())) {
            $a[self::FIELD_PARENT] = $vs;
        }
        if ([] !== ($vs = $this->getProcessing())) {
            $a[self::FIELD_PROCESSING] = $vs;
        }
        if (null !== ($v = $this->getProductCategory())) {
            $a[self::FIELD_PRODUCT_CATEGORY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PRODUCT_CATEGORY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getProductCode())) {
            $a[self::FIELD_PRODUCT_CODE] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_QUANTITY_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getStorage())) {
            $a[self::FIELD_STORAGE] = $vs;
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