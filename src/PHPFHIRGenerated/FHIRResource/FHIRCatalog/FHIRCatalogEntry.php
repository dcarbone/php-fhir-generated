<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCatalog;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A document that bundles a set of catalog entries. A catalog entry contains metadata about an item and a pointer to the item’s representative resource. The item is an entity that can be ordered or consulted from a catalog: Medications, devices, lab services, organizations...
The catalog resource provides the data necessary for a synchronization of the item data – e.g. the version or last update date which allows systems to obtain differential updates. 
The catalog does not replicate the content of the item, since that is expected to be in the resource that is referenced. There is however some metadata that is important for the catalog synchronization and not in the “clinical” resource. Examples are different classifications and related identifiers, or packaging information, or device components, or different characteristics.
 */
class FHIRCatalogEntry extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of item - medication, device, service, protocol or other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Content of the catalog.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referencedItem = null;

    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $additionalIdentifier = array();

    /**
     * Classes of devices, or ATC for medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $classification = array();

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * The date from which this catalog entry is expected to be active.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validFrom = null;

    /**
     * The date until which this catalog entry is expected to be active.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validTo = null;

    /**
     * Perhaps not needed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastUpdated = null;

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $additionalCharacteristic = array();

    /**
     * User for example for ATC classification, or.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $additionalClassification = array();

    /**
     * Used for example,  to point to a substance, or to a device used to administer a medication.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCatalog\FHIRCatalogRelatedItem[]
     */
    public $relatedItem = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Catalog.Entry';

    /**
     * The type of item - medication, device, service, protocol or other.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of item - medication, device, service, protocol or other.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Content of the catalog.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferencedItem()
    {
        return $this->referencedItem;
    }

    /**
     * Content of the catalog.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referencedItem
     * @return $this
     */
    public function setReferencedItem($referencedItem)
    {
        $this->referencedItem = $referencedItem;
        return $this;
    }

    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getAdditionalIdentifier()
    {
        return $this->additionalIdentifier;
    }

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $additionalIdentifier
     * @return $this
     */
    public function addAdditionalIdentifier($additionalIdentifier)
    {
        $this->additionalIdentifier[] = $additionalIdentifier;
        return $this;
    }

    /**
     * Classes of devices, or ATC for medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Classes of devices, or ATC for medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $classification
     * @return $this
     */
    public function addClassification($classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The date from which this catalog entry is expected to be active.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * The date from which this catalog entry is expected to be active.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * The date until which this catalog entry is expected to be active.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * The date until which this catalog entry is expected to be active.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $validTo
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Perhaps not needed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Perhaps not needed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $lastUpdated
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalCharacteristic()
    {
        return $this->additionalCharacteristic;
    }

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalCharacteristic
     * @return $this
     */
    public function addAdditionalCharacteristic($additionalCharacteristic)
    {
        $this->additionalCharacteristic[] = $additionalCharacteristic;
        return $this;
    }

    /**
     * User for example for ATC classification, or.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalClassification()
    {
        return $this->additionalClassification;
    }

    /**
     * User for example for ATC classification, or.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalClassification
     * @return $this
     */
    public function addAdditionalClassification($additionalClassification)
    {
        $this->additionalClassification[] = $additionalClassification;
        return $this;
    }

    /**
     * Used for example,  to point to a substance, or to a device used to administer a medication.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCatalog\FHIRCatalogRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Used for example,  to point to a substance, or to a device used to administer a medication.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCatalog\FHIRCatalogRelatedItem $relatedItem
     * @return $this
     */
    public function addRelatedItem($relatedItem)
    {
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->referencedItem) $json['referencedItem'] = json_encode($this->referencedItem);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (0 < count($this->additionalIdentifier)) {
            $json['additionalIdentifier'] = [];
            foreach($this->additionalIdentifier as $additionalIdentifier) {
                $json['additionalIdentifier'][] = json_encode($additionalIdentifier);
            }
        }
        if (0 < count($this->classification)) {
            $json['classification'] = [];
            foreach($this->classification as $classification) {
                $json['classification'][] = json_encode($classification);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->validFrom) $json['validFrom'] = json_encode($this->validFrom);
        if (null !== $this->validTo) $json['validTo'] = json_encode($this->validTo);
        if (null !== $this->lastUpdated) $json['lastUpdated'] = json_encode($this->lastUpdated);
        if (0 < count($this->additionalCharacteristic)) {
            $json['additionalCharacteristic'] = [];
            foreach($this->additionalCharacteristic as $additionalCharacteristic) {
                $json['additionalCharacteristic'][] = json_encode($additionalCharacteristic);
            }
        }
        if (0 < count($this->additionalClassification)) {
            $json['additionalClassification'] = [];
            foreach($this->additionalClassification as $additionalClassification) {
                $json['additionalClassification'][] = json_encode($additionalClassification);
            }
        }
        if (0 < count($this->relatedItem)) {
            $json['relatedItem'] = [];
            foreach($this->relatedItem as $relatedItem) {
                $json['relatedItem'][] = json_encode($relatedItem);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CatalogEntry xmlns="http://hl7.org/fhir"></CatalogEntry>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->referencedItem) $this->referencedItem->xmlSerialize(true, $sxe->addChild('referencedItem'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->additionalIdentifier)) {
            foreach($this->additionalIdentifier as $additionalIdentifier) {
                $additionalIdentifier->xmlSerialize(true, $sxe->addChild('additionalIdentifier'));
            }
        }
        if (0 < count($this->classification)) {
            foreach($this->classification as $classification) {
                $classification->xmlSerialize(true, $sxe->addChild('classification'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->validFrom) $this->validFrom->xmlSerialize(true, $sxe->addChild('validFrom'));
        if (null !== $this->validTo) $this->validTo->xmlSerialize(true, $sxe->addChild('validTo'));
        if (null !== $this->lastUpdated) $this->lastUpdated->xmlSerialize(true, $sxe->addChild('lastUpdated'));
        if (0 < count($this->additionalCharacteristic)) {
            foreach($this->additionalCharacteristic as $additionalCharacteristic) {
                $additionalCharacteristic->xmlSerialize(true, $sxe->addChild('additionalCharacteristic'));
            }
        }
        if (0 < count($this->additionalClassification)) {
            foreach($this->additionalClassification as $additionalClassification) {
                $additionalClassification->xmlSerialize(true, $sxe->addChild('additionalClassification'));
            }
        }
        if (0 < count($this->relatedItem)) {
            foreach($this->relatedItem as $relatedItem) {
                $relatedItem->xmlSerialize(true, $sxe->addChild('relatedItem'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}