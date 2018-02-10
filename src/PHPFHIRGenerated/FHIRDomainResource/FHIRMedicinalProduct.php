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
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProduct extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business idenfifier for this product. Could be an MPID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Regulatory type, e.g Investigational or Authorized.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $combinedPharmaceuticalDoseForm = null;

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalMonitoringIndicator = null;

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $specialMeasures = [];

    /**
     * If authorised for use in children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $paediatricUseIndicator = null;

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $orphanDesignationStatus = null;

    /**
     * Allows the product to be classified by various systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $productClassification = [];

    /**
     * Product regulatory authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $marketingAuthorization = null;

    /**
     * Package representation for the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $packagedMedicinalProduct = [];

    /**
     * Pharmaceutical aspects of product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $pharmaceuticalProduct = [];

    /**
     * Clinical particulars, indications etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $clinicalParticulars = [];

    /**
     * Supporting documentation, typically for regulatory submission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $attachedDocument = [];

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $masterFile = [];

    /**
     * The product's name, including full name and possibly coded parts.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    public $name = [];

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $crossReference = [];

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    public $manufacturingBusinessOperation = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProduct';

    /**
     * Business idenfifier for this product. Could be an MPID.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business idenfifier for this product. Could be an MPID.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Regulatory type, e.g Investigational or Authorized.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Regulatory type, e.g Investigational or Authorized.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm() {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return $this
     */
    public function setCombinedPharmaceuticalDoseForm($combinedPharmaceuticalDoseForm) {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator() {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return $this
     */
    public function setAdditionalMonitoringIndicator($additionalMonitoringIndicator) {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSpecialMeasures() {
        return $this->specialMeasures;
    }

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $specialMeasures
     * @return $this
     */
    public function addSpecialMeasures($specialMeasures) {
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * If authorised for use in children.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPaediatricUseIndicator() {
        return $this->paediatricUseIndicator;
    }

    /**
     * If authorised for use in children.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $paediatricUseIndicator
     * @return $this
     */
    public function setPaediatricUseIndicator($paediatricUseIndicator) {
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrphanDesignationStatus() {
        return $this->orphanDesignationStatus;
    }

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orphanDesignationStatus
     * @return $this
     */
    public function setOrphanDesignationStatus($orphanDesignationStatus) {
        $this->orphanDesignationStatus = $orphanDesignationStatus;
        return $this;
    }

    /**
     * Allows the product to be classified by various systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductClassification() {
        return $this->productClassification;
    }

    /**
     * Allows the product to be classified by various systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productClassification
     * @return $this
     */
    public function addProductClassification($productClassification) {
        $this->productClassification[] = $productClassification;
        return $this;
    }

    /**
     * Product regulatory authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMarketingAuthorization() {
        return $this->marketingAuthorization;
    }

    /**
     * Product regulatory authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $marketingAuthorization
     * @return $this
     */
    public function setMarketingAuthorization($marketingAuthorization) {
        $this->marketingAuthorization = $marketingAuthorization;
        return $this;
    }

    /**
     * Package representation for the product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPackagedMedicinalProduct() {
        return $this->packagedMedicinalProduct;
    }

    /**
     * Package representation for the product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $packagedMedicinalProduct
     * @return $this
     */
    public function addPackagedMedicinalProduct($packagedMedicinalProduct) {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * Pharmaceutical aspects of product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPharmaceuticalProduct() {
        return $this->pharmaceuticalProduct;
    }

    /**
     * Pharmaceutical aspects of product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $pharmaceuticalProduct
     * @return $this
     */
    public function addPharmaceuticalProduct($pharmaceuticalProduct) {
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * Clinical particulars, indications etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getClinicalParticulars() {
        return $this->clinicalParticulars;
    }

    /**
     * Clinical particulars, indications etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $clinicalParticulars
     * @return $this
     */
    public function addClinicalParticulars($clinicalParticulars) {
        $this->clinicalParticulars[] = $clinicalParticulars;
        return $this;
    }

    /**
     * Supporting documentation, typically for regulatory submission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAttachedDocument() {
        return $this->attachedDocument;
    }

    /**
     * Supporting documentation, typically for regulatory submission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $attachedDocument
     * @return $this
     */
    public function addAttachedDocument($attachedDocument) {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getMasterFile() {
        return $this->masterFile;
    }

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $masterFile
     * @return $this
     */
    public function addMasterFile($masterFile) {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * The product's name, including full name and possibly coded parts.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The product's name, including full name and possibly coded parts.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName $name
     * @return $this
     */
    public function addName($name) {
        $this->name[] = $name;
        return $this;
    }

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getCrossReference() {
        return $this->crossReference;
    }

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $crossReference
     * @return $this
     */
    public function addCrossReference($crossReference) {
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    public function getManufacturingBusinessOperation() {
        return $this->manufacturingBusinessOperation;
    }

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation
     * @return $this
     */
    public function addManufacturingBusinessOperation($manufacturingBusinessOperation) {
        $this->manufacturingBusinessOperation[] = $manufacturingBusinessOperation;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['combinedPharmaceuticalDoseForm'])) {
                $this->setCombinedPharmaceuticalDoseForm($data['combinedPharmaceuticalDoseForm']);
            }
            if (isset($data['additionalMonitoringIndicator'])) {
                $this->setAdditionalMonitoringIndicator($data['additionalMonitoringIndicator']);
            }
            if (isset($data['specialMeasures'])) {
                if (is_array($data['specialMeasures'])) {
                    foreach($data['specialMeasures'] as $d) {
                        $this->addSpecialMeasures($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialMeasures" must be array of objects or null, '.gettype($data['specialMeasures']).' seen.');
                }
            }
            if (isset($data['paediatricUseIndicator'])) {
                $this->setPaediatricUseIndicator($data['paediatricUseIndicator']);
            }
            if (isset($data['orphanDesignationStatus'])) {
                $this->setOrphanDesignationStatus($data['orphanDesignationStatus']);
            }
            if (isset($data['productClassification'])) {
                if (is_array($data['productClassification'])) {
                    foreach($data['productClassification'] as $d) {
                        $this->addProductClassification($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"productClassification" must be array of objects or null, '.gettype($data['productClassification']).' seen.');
                }
            }
            if (isset($data['marketingAuthorization'])) {
                $this->setMarketingAuthorization($data['marketingAuthorization']);
            }
            if (isset($data['packagedMedicinalProduct'])) {
                if (is_array($data['packagedMedicinalProduct'])) {
                    foreach($data['packagedMedicinalProduct'] as $d) {
                        $this->addPackagedMedicinalProduct($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"packagedMedicinalProduct" must be array of objects or null, '.gettype($data['packagedMedicinalProduct']).' seen.');
                }
            }
            if (isset($data['pharmaceuticalProduct'])) {
                if (is_array($data['pharmaceuticalProduct'])) {
                    foreach($data['pharmaceuticalProduct'] as $d) {
                        $this->addPharmaceuticalProduct($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"pharmaceuticalProduct" must be array of objects or null, '.gettype($data['pharmaceuticalProduct']).' seen.');
                }
            }
            if (isset($data['clinicalParticulars'])) {
                if (is_array($data['clinicalParticulars'])) {
                    foreach($data['clinicalParticulars'] as $d) {
                        $this->addClinicalParticulars($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"clinicalParticulars" must be array of objects or null, '.gettype($data['clinicalParticulars']).' seen.');
                }
            }
            if (isset($data['attachedDocument'])) {
                if (is_array($data['attachedDocument'])) {
                    foreach($data['attachedDocument'] as $d) {
                        $this->addAttachedDocument($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"attachedDocument" must be array of objects or null, '.gettype($data['attachedDocument']).' seen.');
                }
            }
            if (isset($data['masterFile'])) {
                if (is_array($data['masterFile'])) {
                    foreach($data['masterFile'] as $d) {
                        $this->addMasterFile($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"masterFile" must be array of objects or null, '.gettype($data['masterFile']).' seen.');
                }
            }
            if (isset($data['name'])) {
                if (is_array($data['name'])) {
                    foreach($data['name'] as $d) {
                        $this->addName($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"name" must be array of objects or null, '.gettype($data['name']).' seen.');
                }
            }
            if (isset($data['crossReference'])) {
                if (is_array($data['crossReference'])) {
                    foreach($data['crossReference'] as $d) {
                        $this->addCrossReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"crossReference" must be array of objects or null, '.gettype($data['crossReference']).' seen.');
                }
            }
            if (isset($data['manufacturingBusinessOperation'])) {
                if (is_array($data['manufacturingBusinessOperation'])) {
                    foreach($data['manufacturingBusinessOperation'] as $d) {
                        $this->addManufacturingBusinessOperation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"manufacturingBusinessOperation" must be array of objects or null, '.gettype($data['manufacturingBusinessOperation']).' seen.');
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->combinedPharmaceuticalDoseForm)) $json['combinedPharmaceuticalDoseForm'] = $this->combinedPharmaceuticalDoseForm;
        if (isset($this->additionalMonitoringIndicator)) $json['additionalMonitoringIndicator'] = $this->additionalMonitoringIndicator;
        if (0 < count($this->specialMeasures)) {
            $json['specialMeasures'] = [];
            foreach($this->specialMeasures as $specialMeasures) {
                if (null !== $specialMeasures) $json['specialMeasures'][] = $specialMeasures;
            }
        }
        if (isset($this->paediatricUseIndicator)) $json['paediatricUseIndicator'] = $this->paediatricUseIndicator;
        if (isset($this->orphanDesignationStatus)) $json['orphanDesignationStatus'] = $this->orphanDesignationStatus;
        if (0 < count($this->productClassification)) {
            $json['productClassification'] = [];
            foreach($this->productClassification as $productClassification) {
                if (null !== $productClassification) $json['productClassification'][] = $productClassification;
            }
        }
        if (isset($this->marketingAuthorization)) $json['marketingAuthorization'] = $this->marketingAuthorization;
        if (0 < count($this->packagedMedicinalProduct)) {
            $json['packagedMedicinalProduct'] = [];
            foreach($this->packagedMedicinalProduct as $packagedMedicinalProduct) {
                if (null !== $packagedMedicinalProduct) $json['packagedMedicinalProduct'][] = $packagedMedicinalProduct;
            }
        }
        if (0 < count($this->pharmaceuticalProduct)) {
            $json['pharmaceuticalProduct'] = [];
            foreach($this->pharmaceuticalProduct as $pharmaceuticalProduct) {
                if (null !== $pharmaceuticalProduct) $json['pharmaceuticalProduct'][] = $pharmaceuticalProduct;
            }
        }
        if (0 < count($this->clinicalParticulars)) {
            $json['clinicalParticulars'] = [];
            foreach($this->clinicalParticulars as $clinicalParticulars) {
                if (null !== $clinicalParticulars) $json['clinicalParticulars'][] = $clinicalParticulars;
            }
        }
        if (0 < count($this->attachedDocument)) {
            $json['attachedDocument'] = [];
            foreach($this->attachedDocument as $attachedDocument) {
                if (null !== $attachedDocument) $json['attachedDocument'][] = $attachedDocument;
            }
        }
        if (0 < count($this->masterFile)) {
            $json['masterFile'] = [];
            foreach($this->masterFile as $masterFile) {
                if (null !== $masterFile) $json['masterFile'][] = $masterFile;
            }
        }
        if (0 < count($this->name)) {
            $json['name'] = [];
            foreach($this->name as $name) {
                if (null !== $name) $json['name'][] = $name;
            }
        }
        if (0 < count($this->crossReference)) {
            $json['crossReference'] = [];
            foreach($this->crossReference as $crossReference) {
                if (null !== $crossReference) $json['crossReference'][] = $crossReference;
            }
        }
        if (0 < count($this->manufacturingBusinessOperation)) {
            $json['manufacturingBusinessOperation'] = [];
            foreach($this->manufacturingBusinessOperation as $manufacturingBusinessOperation) {
                if (null !== $manufacturingBusinessOperation) $json['manufacturingBusinessOperation'][] = $manufacturingBusinessOperation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProduct xmlns="http://hl7.org/fhir"></MedicinalProduct>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->combinedPharmaceuticalDoseForm)) $this->combinedPharmaceuticalDoseForm->xmlSerialize(true, $sxe->addChild('combinedPharmaceuticalDoseForm'));
        if (isset($this->additionalMonitoringIndicator)) $this->additionalMonitoringIndicator->xmlSerialize(true, $sxe->addChild('additionalMonitoringIndicator'));
        if (0 < count($this->specialMeasures)) {
            foreach($this->specialMeasures as $specialMeasures) {
                $specialMeasures->xmlSerialize(true, $sxe->addChild('specialMeasures'));
            }
        }
        if (isset($this->paediatricUseIndicator)) $this->paediatricUseIndicator->xmlSerialize(true, $sxe->addChild('paediatricUseIndicator'));
        if (isset($this->orphanDesignationStatus)) $this->orphanDesignationStatus->xmlSerialize(true, $sxe->addChild('orphanDesignationStatus'));
        if (0 < count($this->productClassification)) {
            foreach($this->productClassification as $productClassification) {
                $productClassification->xmlSerialize(true, $sxe->addChild('productClassification'));
            }
        }
        if (isset($this->marketingAuthorization)) $this->marketingAuthorization->xmlSerialize(true, $sxe->addChild('marketingAuthorization'));
        if (0 < count($this->packagedMedicinalProduct)) {
            foreach($this->packagedMedicinalProduct as $packagedMedicinalProduct) {
                $packagedMedicinalProduct->xmlSerialize(true, $sxe->addChild('packagedMedicinalProduct'));
            }
        }
        if (0 < count($this->pharmaceuticalProduct)) {
            foreach($this->pharmaceuticalProduct as $pharmaceuticalProduct) {
                $pharmaceuticalProduct->xmlSerialize(true, $sxe->addChild('pharmaceuticalProduct'));
            }
        }
        if (0 < count($this->clinicalParticulars)) {
            foreach($this->clinicalParticulars as $clinicalParticulars) {
                $clinicalParticulars->xmlSerialize(true, $sxe->addChild('clinicalParticulars'));
            }
        }
        if (0 < count($this->attachedDocument)) {
            foreach($this->attachedDocument as $attachedDocument) {
                $attachedDocument->xmlSerialize(true, $sxe->addChild('attachedDocument'));
            }
        }
        if (0 < count($this->masterFile)) {
            foreach($this->masterFile as $masterFile) {
                $masterFile->xmlSerialize(true, $sxe->addChild('masterFile'));
            }
        }
        if (0 < count($this->name)) {
            foreach($this->name as $name) {
                $name->xmlSerialize(true, $sxe->addChild('name'));
            }
        }
        if (0 < count($this->crossReference)) {
            foreach($this->crossReference as $crossReference) {
                $crossReference->xmlSerialize(true, $sxe->addChild('crossReference'));
            }
        }
        if (0 < count($this->manufacturingBusinessOperation)) {
            foreach($this->manufacturingBusinessOperation as $manufacturingBusinessOperation) {
                $manufacturingBusinessOperation->xmlSerialize(true, $sxe->addChild('manufacturingBusinessOperation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}