<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A medicinal product in a container or package.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProductPackaged extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Textual description.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Marketing information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarketingStatus[]
     */
    public $marketingStatus = [];

    /**
     * Batch numbering.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier[]
     */
    public $batchIdentifier = [];

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[]
     */
    public $packageItem = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductPackaged';

    /**
     * Unique identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Textual description.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Textual description.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Marketing information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarketingStatus[]
     */
    public function getMarketingStatus() {
        return $this->marketingStatus;
    }

    /**
     * Marketing information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarketingStatus $marketingStatus
     * @return $this
     */
    public function addMarketingStatus($marketingStatus) {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * Batch numbering.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier[]
     */
    public function getBatchIdentifier() {
        return $this->batchIdentifier;
    }

    /**
     * Batch numbering.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier $batchIdentifier
     * @return $this
     */
    public function addBatchIdentifier($batchIdentifier) {
        $this->batchIdentifier[] = $batchIdentifier;
        return $this;
    }

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[]
     */
    public function getPackageItem() {
        return $this->packageItem;
    }

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem $packageItem
     * @return $this
     */
    public function addPackageItem($packageItem) {
        $this->packageItem[] = $packageItem;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['marketingStatus'])) {
                if (is_array($data['marketingStatus'])) {
                    foreach($data['marketingStatus'] as $d) {
                        $this->addMarketingStatus($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"marketingStatus" must be array of objects or null, '.gettype($data['marketingStatus']).' seen.');
                }
            }
            if (isset($data['batchIdentifier'])) {
                if (is_array($data['batchIdentifier'])) {
                    foreach($data['batchIdentifier'] as $d) {
                        $this->addBatchIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"batchIdentifier" must be array of objects or null, '.gettype($data['batchIdentifier']).' seen.');
                }
            }
            if (isset($data['packageItem'])) {
                if (is_array($data['packageItem'])) {
                    foreach($data['packageItem'] as $d) {
                        $this->addPackageItem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"packageItem" must be array of objects or null, '.gettype($data['packageItem']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->marketingStatus)) {
            $json['marketingStatus'] = [];
            foreach($this->marketingStatus as $marketingStatus) {
                if (null !== $marketingStatus) $json['marketingStatus'][] = $marketingStatus;
            }
        }
        if (0 < count($this->batchIdentifier)) {
            $json['batchIdentifier'] = [];
            foreach($this->batchIdentifier as $batchIdentifier) {
                if (null !== $batchIdentifier) $json['batchIdentifier'][] = $batchIdentifier;
            }
        }
        if (0 < count($this->packageItem)) {
            $json['packageItem'] = [];
            foreach($this->packageItem as $packageItem) {
                if (null !== $packageItem) $json['packageItem'][] = $packageItem;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductPackaged xmlns="http://hl7.org/fhir"></MedicinalProductPackaged>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->marketingStatus)) {
            foreach($this->marketingStatus as $marketingStatus) {
                $marketingStatus->xmlSerialize(true, $sxe->addChild('marketingStatus'));
            }
        }
        if (0 < count($this->batchIdentifier)) {
            foreach($this->batchIdentifier as $batchIdentifier) {
                $batchIdentifier->xmlSerialize(true, $sxe->addChild('batchIdentifier'));
            }
        }
        if (0 < count($this->packageItem)) {
            foreach($this->packageItem as $packageItem) {
                $packageItem->xmlSerialize(true, $sxe->addChild('packageItem'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}