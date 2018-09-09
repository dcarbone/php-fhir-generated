<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage;
use PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductCategory;
use PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A material substance originating from a biological entity intended to be transplanted or infused
into another (possibly the same) biological entity.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRBiologicallyDerivedProduct
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRBiologicallyDerivedProduct extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'BiologicallyDerivedProduct';

    /**
     * How this product was collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public $collection = null;

    /**
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Any manipulation of product post-collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     */
    public $manipulation = null;

    /**
     * Parent product (if any).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Any processing of the product during collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing
     */
    public $processing = null;

    /**
     * Broad category of this product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    public $productCategory = null;

    /**
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCode = null;

    /**
     * Number of discrete units within this product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $quantity = null;

    /**
     * Procedure request to obtain this biologically derived product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Whether the product is currently available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    public $status = null;

    /**
     * Product storage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage
     */
    public $storage = null;

    /**
     * FHIRBiologicallyDerivedProduct Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['collection'])) {
                $this->setCollection($data['collection']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['manipulation'])) {
                $this->setManipulation($data['manipulation']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['processing'])) {
                $this->setProcessing($data['processing']);
            }
            if (isset($data['productCategory'])) {
                $this->setProductCategory($data['productCategory']);
            }
            if (isset($data['productCode'])) {
                $this->setProductCode($data['productCode']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['storage'])) {
                $this->setStorage($data['storage']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * How this product was collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     * @return $this
     */
    public function setCollection(FHIRBiologicallyDerivedProductCollection $collection = null)
    {
        if (null === $collection) {
            return $this; 
        }
        $this->collection = $collection;
        return $this;
    }

    /**
     * How this product was collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }


    /**
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Any manipulation of product post-collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     * @return $this
     */
    public function setManipulation(FHIRBiologicallyDerivedProductManipulation $manipulation = null)
    {
        if (null === $manipulation) {
            return $this; 
        }
        $this->manipulation = $manipulation;
        return $this;
    }

    /**
     * Any manipulation of product post-collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation
     */
    public function getManipulation()
    {
        return $this->manipulation;
    }


    /**
     * Parent product (if any).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParent(FHIRReference $parent = null)
    {
        if (null === $parent) {
            return $this; 
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * Parent product (if any).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }


    /**
     * Any processing of the product during collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing
     * @return $this
     */
    public function setProcessing(FHIRBiologicallyDerivedProductProcessing $processing = null)
    {
        if (null === $processing) {
            return $this; 
        }
        $this->processing = $processing;
        return $this;
    }

    /**
     * Any processing of the product during collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing
     */
    public function getProcessing()
    {
        return $this->processing;
    }


    /**
     * Broad category of this product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        if (null === $productCategory) {
            return $this; 
        }
        if (is_scalar($productCategory)) {
            $productCategory = new FHIRBiologicallyDerivedProductCategory($productCategory);
        }
        if (!($productCategory instanceof FHIRBiologicallyDerivedProductCategory)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProduct::setProductCategory - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductCategory or appropriate scalar value, %s seen.',
                gettype($productCategory)
            ));
        }
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * Broad category of this product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductCategory
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }


    /**
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductCode(FHIRCodeableConcept $productCode = null)
    {
        if (null === $productCode) {
            return $this; 
        }
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCode()
    {
        return $this->productCode;
    }


    /**
     * Number of discrete units within this product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setQuantity($quantity)
    {
        if (null === $quantity) {
            return $this; 
        }
        if (is_scalar($quantity)) {
            $quantity = new FHIRInteger($quantity);
        }
        if (!($quantity instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProduct::setQuantity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($quantity)
            ));
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Number of discrete units within this product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Procedure request to obtain this biologically derived product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequest(FHIRReference $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Procedure request to obtain this biologically derived product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * Whether the product is currently available.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRBiologicallyDerivedProductStatus($status);
        }
        if (!($status instanceof FHIRBiologicallyDerivedProductStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProduct::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Whether the product is currently available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBiologicallyDerivedProductStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Product storage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage
     * @return $this
     */
    public function setStorage(FHIRBiologicallyDerivedProductStorage $storage = null)
    {
        if (null === $storage) {
            return $this; 
        }
        $this->storage = $storage;
        return $this;
    }

    /**
     * Product storage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage
     */
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getCollection())) {
            $a['collection'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManipulation())) {
            $a['manipulation'] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a['parent'] = $v;
        }
        if (null !== ($v = $this->getProcessing())) {
            $a['processing'] = $v;
        }
        if (null !== ($v = $this->getProductCategory())) {
            $a['productCategory'] = $v;
        }
        if (null !== ($v = $this->getProductCode())) {
            $a['productCode'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStorage())) {
            $a['storage'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<BiologicallyDerivedProduct xmlns="http://hl7.org/fhir"></BiologicallyDerivedProduct>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}