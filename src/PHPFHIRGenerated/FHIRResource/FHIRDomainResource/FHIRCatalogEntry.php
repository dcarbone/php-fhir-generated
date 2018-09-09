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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Catalog entries are wrappers that contextualize items included in a catalog.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCatalogEntry
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCatalogEntry extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CatalogEntry';

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalCharacteristic = null;

    /**
     * User for example for ATC classification, or.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalClassification = null;

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $additionalIdentifier = null;

    /**
     * Classes of devices, or ATC for medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $classification = null;

    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastUpdated = null;

    /**
     * Whether the entry represents an orderable item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $orderable = null;

    /**
     * The item in a catalog or definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referencedItem = null;

    /**
     * Used for example, to point to a substance, or to a device used to administer a medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry
     */
    public $relatedEntry = null;

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The type of item - medication, device, service, protocol or other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The date until which this catalog entry is expected to be active.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validTo = null;

    /**
     * The time period in which this catalog entry is expected to be active.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $validityPeriod = null;

    /**
     * FHIRCatalogEntry Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additionalCharacteristic'])) {
                $this->setAdditionalCharacteristic($data['additionalCharacteristic']);
            }
            if (isset($data['additionalClassification'])) {
                $this->setAdditionalClassification($data['additionalClassification']);
            }
            if (isset($data['additionalIdentifier'])) {
                $this->setAdditionalIdentifier($data['additionalIdentifier']);
            }
            if (isset($data['classification'])) {
                $this->setClassification($data['classification']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['lastUpdated'])) {
                $this->setLastUpdated($data['lastUpdated']);
            }
            if (isset($data['orderable'])) {
                $this->setOrderable($data['orderable']);
            }
            if (isset($data['referencedItem'])) {
                $this->setReferencedItem($data['referencedItem']);
            }
            if (isset($data['relatedEntry'])) {
                $this->setRelatedEntry($data['relatedEntry']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['validTo'])) {
                $this->setValidTo($data['validTo']);
            }
            if (isset($data['validityPeriod'])) {
                $this->setValidityPeriod($data['validityPeriod']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCatalogEntry::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdditionalCharacteristic(FHIRCodeableConcept $additionalCharacteristic = null)
    {
        if (null === $additionalCharacteristic) {
            return $this; 
        }
        $this->additionalCharacteristic = $additionalCharacteristic;
        return $this;
    }

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalCharacteristic()
    {
        return $this->additionalCharacteristic;
    }


    /**
     * User for example for ATC classification, or.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdditionalClassification(FHIRCodeableConcept $additionalClassification = null)
    {
        if (null === $additionalClassification) {
            return $this; 
        }
        $this->additionalClassification = $additionalClassification;
        return $this;
    }

    /**
     * User for example for ATC classification, or.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalClassification()
    {
        return $this->additionalClassification;
    }


    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setAdditionalIdentifier(FHIRIdentifier $additionalIdentifier = null)
    {
        if (null === $additionalIdentifier) {
            return $this; 
        }
        $this->additionalIdentifier = $additionalIdentifier;
        return $this;
    }

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAdditionalIdentifier()
    {
        return $this->additionalIdentifier;
    }


    /**
     * Classes of devices, or ATC for medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setClassification(FHIRCodeableConcept $classification = null)
    {
        if (null === $classification) {
            return $this; 
        }
        $this->classification = $classification;
        return $this;
    }

    /**
     * Classes of devices, or ATC for medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClassification()
    {
        return $this->classification;
    }


    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        if (null === $lastUpdated) {
            return $this; 
        }
        if (is_scalar($lastUpdated)) {
            $lastUpdated = new FHIRDateTime($lastUpdated);
        }
        if (!($lastUpdated instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntry::setLastUpdated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($lastUpdated)
            ));
        }
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }


    /**
     * Whether the entry represents an orderable item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setOrderable($orderable)
    {
        if (null === $orderable) {
            return $this; 
        }
        if (is_scalar($orderable)) {
            $orderable = new FHIRBoolean($orderable);
        }
        if (!($orderable instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntry::setOrderable - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($orderable)
            ));
        }
        $this->orderable = $orderable;
        return $this;
    }

    /**
     * Whether the entry represents an orderable item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getOrderable()
    {
        return $this->orderable;
    }


    /**
     * The item in a catalog or definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferencedItem(FHIRReference $referencedItem = null)
    {
        if (null === $referencedItem) {
            return $this; 
        }
        $this->referencedItem = $referencedItem;
        return $this;
    }

    /**
     * The item in a catalog or definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferencedItem()
    {
        return $this->referencedItem;
    }


    /**
     * Used for example, to point to a substance, or to a device used to administer a medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry
     * @return $this
     */
    public function setRelatedEntry(FHIRCatalogEntryRelatedEntry $relatedEntry = null)
    {
        if (null === $relatedEntry) {
            return $this; 
        }
        $this->relatedEntry = $relatedEntry;
        return $this;
    }

    /**
     * Used for example, to point to a substance, or to a device used to administer a medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry
     */
    public function getRelatedEntry()
    {
        return $this->relatedEntry;
    }


    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntry::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The type of item - medication, device, service, protocol or other.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of item - medication, device, service, protocol or other.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The date until which this catalog entry is expected to be active.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValidTo($validTo)
    {
        if (null === $validTo) {
            return $this; 
        }
        if (is_scalar($validTo)) {
            $validTo = new FHIRDateTime($validTo);
        }
        if (!($validTo instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntry::setValidTo - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($validTo)
            ));
        }
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * The date until which this catalog entry is expected to be active.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }


    /**
     * The time period in which this catalog entry is expected to be active.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        if (null === $validityPeriod) {
            return $this; 
        }
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * The time period in which this catalog entry is expected to be active.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
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
        if (null !== ($v = $this->getAdditionalCharacteristic())) {
            $a['additionalCharacteristic'] = $v;
        }
        if (null !== ($v = $this->getAdditionalClassification())) {
            $a['additionalClassification'] = $v;
        }
        if (null !== ($v = $this->getAdditionalIdentifier())) {
            $a['additionalIdentifier'] = $v;
        }
        if (null !== ($v = $this->getClassification())) {
            $a['classification'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLastUpdated())) {
            $a['lastUpdated'] = $v;
        }
        if (null !== ($v = $this->getOrderable())) {
            $a['orderable'] = $v;
        }
        if (null !== ($v = $this->getReferencedItem())) {
            $a['referencedItem'] = $v;
        }
        if (null !== ($v = $this->getRelatedEntry())) {
            $a['relatedEntry'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getValidTo())) {
            $a['validTo'] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a['validityPeriod'] = $v;
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
            $sxe = new \SimpleXMLElement('<CatalogEntry xmlns="http://hl7.org/fhir"></CatalogEntry>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}