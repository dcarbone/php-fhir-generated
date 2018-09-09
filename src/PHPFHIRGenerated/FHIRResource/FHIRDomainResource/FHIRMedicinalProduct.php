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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProduct
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProduct extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProduct';

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalMonitoringIndicator = null;

    /**
     * Supporting documentation, typically for regulatory submission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $attachedDocument = null;

    /**
     * Clinical trials or studies that this product is involved in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $clinicalTrial = null;

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $combinedPharmaceuticalDoseForm = null;

    /**
     * A product specific contact, person (in a role), or an organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contact = null;

    /**
     * Clinical contraindications, reasons for not giving this.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contraindication = null;

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $crossReference = null;

    /**
     * If this medicine applies to human or veterinary uses.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $domain = null;

    /**
     * Business idenfifier for this product. Could be an MPID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Clinical interactions with other medications or substances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $interaction = null;

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation
     */
    public $manufacturingBusinessOperation = null;

    /**
     * Product regulatory authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $marketingAuthorization = null;

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public $marketingStatus = null;

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $masterFile = null;

    /**
     * The product's name, including full name and possibly coded parts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName
     */
    public $name = null;

    /**
     * Package representation for the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $packagedMedicinalProduct = null;

    /**
     * If authorised for use in children.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $paediatricUseIndicator = null;

    /**
     * Pharmaceutical aspects of product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $pharmaceuticalProduct = null;

    /**
     * Allows the product to be classified by various systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productClassification = null;

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation
     */
    public $specialDesignation = null;

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $specialMeasures = null;

    /**
     * Clinical reason for use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $therapeuticIndication = null;

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Potential clinical unwanted effects of use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $undesirableEffect = null;

    /**
     * FHIRMedicinalProduct Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additionalMonitoringIndicator'])) {
                $this->setAdditionalMonitoringIndicator($data['additionalMonitoringIndicator']);
            }
            if (isset($data['attachedDocument'])) {
                $this->setAttachedDocument($data['attachedDocument']);
            }
            if (isset($data['clinicalTrial'])) {
                $this->setClinicalTrial($data['clinicalTrial']);
            }
            if (isset($data['combinedPharmaceuticalDoseForm'])) {
                $this->setCombinedPharmaceuticalDoseForm($data['combinedPharmaceuticalDoseForm']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['contraindication'])) {
                $this->setContraindication($data['contraindication']);
            }
            if (isset($data['crossReference'])) {
                $this->setCrossReference($data['crossReference']);
            }
            if (isset($data['domain'])) {
                $this->setDomain($data['domain']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['interaction'])) {
                $this->setInteraction($data['interaction']);
            }
            if (isset($data['manufacturingBusinessOperation'])) {
                $this->setManufacturingBusinessOperation($data['manufacturingBusinessOperation']);
            }
            if (isset($data['marketingAuthorization'])) {
                $this->setMarketingAuthorization($data['marketingAuthorization']);
            }
            if (isset($data['marketingStatus'])) {
                $this->setMarketingStatus($data['marketingStatus']);
            }
            if (isset($data['masterFile'])) {
                $this->setMasterFile($data['masterFile']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['packagedMedicinalProduct'])) {
                $this->setPackagedMedicinalProduct($data['packagedMedicinalProduct']);
            }
            if (isset($data['paediatricUseIndicator'])) {
                $this->setPaediatricUseIndicator($data['paediatricUseIndicator']);
            }
            if (isset($data['pharmaceuticalProduct'])) {
                $this->setPharmaceuticalProduct($data['pharmaceuticalProduct']);
            }
            if (isset($data['productClassification'])) {
                $this->setProductClassification($data['productClassification']);
            }
            if (isset($data['specialDesignation'])) {
                $this->setSpecialDesignation($data['specialDesignation']);
            }
            if (isset($data['specialMeasures'])) {
                $this->setSpecialMeasures($data['specialMeasures']);
            }
            if (isset($data['therapeuticIndication'])) {
                $this->setTherapeuticIndication($data['therapeuticIndication']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['undesirableEffect'])) {
                $this->setUndesirableEffect($data['undesirableEffect']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdditionalMonitoringIndicator(FHIRCodeableConcept $additionalMonitoringIndicator = null)
    {
        if (null === $additionalMonitoringIndicator) {
            return $this; 
        }
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }


    /**
     * Supporting documentation, typically for regulatory submission.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAttachedDocument(FHIRReference $attachedDocument = null)
    {
        if (null === $attachedDocument) {
            return $this; 
        }
        $this->attachedDocument = $attachedDocument;
        return $this;
    }

    /**
     * Supporting documentation, typically for regulatory submission.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }


    /**
     * Clinical trials or studies that this product is involved in.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setClinicalTrial(FHIRReference $clinicalTrial = null)
    {
        if (null === $clinicalTrial) {
            return $this; 
        }
        $this->clinicalTrial = $clinicalTrial;
        return $this;
    }

    /**
     * Clinical trials or studies that this product is involved in.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClinicalTrial()
    {
        return $this->clinicalTrial;
    }


    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null)
    {
        if (null === $combinedPharmaceuticalDoseForm) {
            return $this; 
        }
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }


    /**
     * A product specific contact, person (in a role), or an organization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContact(FHIRReference $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * A product specific contact, person (in a role), or an organization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * Clinical contraindications, reasons for not giving this.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContraindication(FHIRReference $contraindication = null)
    {
        if (null === $contraindication) {
            return $this; 
        }
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Clinical contraindications, reasons for not giving this.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }


    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setCrossReference(FHIRIdentifier $crossReference = null)
    {
        if (null === $crossReference) {
            return $this; 
        }
        $this->crossReference = $crossReference;
        return $this;
    }

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }


    /**
     * If this medicine applies to human or veterinary uses.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setDomain(FHIRCoding $domain = null)
    {
        if (null === $domain) {
            return $this; 
        }
        $this->domain = $domain;
        return $this;
    }

    /**
     * If this medicine applies to human or veterinary uses.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDomain()
    {
        return $this->domain;
    }


    /**
     * Business idenfifier for this product. Could be an MPID.
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
     * Business idenfifier for this product. Could be an MPID.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Clinical interactions with other medications or substances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInteraction(FHIRReference $interaction = null)
    {
        if (null === $interaction) {
            return $this; 
        }
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Clinical interactions with other medications or substances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInteraction()
    {
        return $this->interaction;
    }


    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation
     * @return $this
     */
    public function setManufacturingBusinessOperation(FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation = null)
    {
        if (null === $manufacturingBusinessOperation) {
            return $this; 
        }
        $this->manufacturingBusinessOperation = $manufacturingBusinessOperation;
        return $this;
    }

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation
     */
    public function getManufacturingBusinessOperation()
    {
        return $this->manufacturingBusinessOperation;
    }


    /**
     * Product regulatory authorization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setMarketingAuthorization(FHIRReference $marketingAuthorization = null)
    {
        if (null === $marketingAuthorization) {
            return $this; 
        }
        $this->marketingAuthorization = $marketingAuthorization;
        return $this;
    }

    /**
     * Product regulatory authorization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMarketingAuthorization()
    {
        return $this->marketingAuthorization;
    }


    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     * @return $this
     */
    public function setMarketingStatus(FHIRMarketingStatus $marketingStatus = null)
    {
        if (null === $marketingStatus) {
            return $this; 
        }
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }


    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setMasterFile(FHIRReference $masterFile = null)
    {
        if (null === $masterFile) {
            return $this; 
        }
        $this->masterFile = $masterFile;
        return $this;
    }

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }


    /**
     * The product's name, including full name and possibly coded parts.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName
     * @return $this
     */
    public function setName(FHIRMedicinalProductName $name = null)
    {
        if (null === $name) {
            return $this; 
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The product's name, including full name and possibly coded parts.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Package representation for the product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPackagedMedicinalProduct(FHIRReference $packagedMedicinalProduct = null)
    {
        if (null === $packagedMedicinalProduct) {
            return $this; 
        }
        $this->packagedMedicinalProduct = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * Package representation for the product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }


    /**
     * If authorised for use in children.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPaediatricUseIndicator(FHIRCodeableConcept $paediatricUseIndicator = null)
    {
        if (null === $paediatricUseIndicator) {
            return $this; 
        }
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * If authorised for use in children.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPaediatricUseIndicator()
    {
        return $this->paediatricUseIndicator;
    }


    /**
     * Pharmaceutical aspects of product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPharmaceuticalProduct(FHIRReference $pharmaceuticalProduct = null)
    {
        if (null === $pharmaceuticalProduct) {
            return $this; 
        }
        $this->pharmaceuticalProduct = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * Pharmaceutical aspects of product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPharmaceuticalProduct()
    {
        return $this->pharmaceuticalProduct;
    }


    /**
     * Allows the product to be classified by various systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductClassification(FHIRCodeableConcept $productClassification = null)
    {
        if (null === $productClassification) {
            return $this; 
        }
        $this->productClassification = $productClassification;
        return $this;
    }

    /**
     * Allows the product to be classified by various systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductClassification()
    {
        return $this->productClassification;
    }


    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation
     * @return $this
     */
    public function setSpecialDesignation(FHIRMedicinalProductSpecialDesignation $specialDesignation = null)
    {
        if (null === $specialDesignation) {
            return $this; 
        }
        $this->specialDesignation = $specialDesignation;
        return $this;
    }

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation
     */
    public function getSpecialDesignation()
    {
        return $this->specialDesignation;
    }


    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSpecialMeasures($specialMeasures)
    {
        if (null === $specialMeasures) {
            return $this; 
        }
        if (is_scalar($specialMeasures)) {
            $specialMeasures = new FHIRString($specialMeasures);
        }
        if (!($specialMeasures instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProduct::setSpecialMeasures - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($specialMeasures)
            ));
        }
        $this->specialMeasures = $specialMeasures;
        return $this;
    }

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }


    /**
     * Clinical reason for use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTherapeuticIndication(FHIRReference $therapeuticIndication = null)
    {
        if (null === $therapeuticIndication) {
            return $this; 
        }
        $this->therapeuticIndication = $therapeuticIndication;
        return $this;
    }

    /**
     * Clinical reason for use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
    }


    /**
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Regulatory type, e.g. Investigational or Authorized.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Potential clinical unwanted effects of use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUndesirableEffect(FHIRReference $undesirableEffect = null)
    {
        if (null === $undesirableEffect) {
            return $this; 
        }
        $this->undesirableEffect = $undesirableEffect;
        return $this;
    }

    /**
     * Potential clinical unwanted effects of use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
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
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $a['additionalMonitoringIndicator'] = $v;
        }
        if (null !== ($v = $this->getAttachedDocument())) {
            $a['attachedDocument'] = $v;
        }
        if (null !== ($v = $this->getClinicalTrial())) {
            $a['clinicalTrial'] = $v;
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $a['combinedPharmaceuticalDoseForm'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getContraindication())) {
            $a['contraindication'] = $v;
        }
        if (null !== ($v = $this->getCrossReference())) {
            $a['crossReference'] = $v;
        }
        if (null !== ($v = $this->getDomain())) {
            $a['domain'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInteraction())) {
            $a['interaction'] = $v;
        }
        if (null !== ($v = $this->getManufacturingBusinessOperation())) {
            $a['manufacturingBusinessOperation'] = $v;
        }
        if (null !== ($v = $this->getMarketingAuthorization())) {
            $a['marketingAuthorization'] = $v;
        }
        if (null !== ($v = $this->getMarketingStatus())) {
            $a['marketingStatus'] = $v;
        }
        if (null !== ($v = $this->getMasterFile())) {
            $a['masterFile'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPackagedMedicinalProduct())) {
            $a['packagedMedicinalProduct'] = $v;
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $a['paediatricUseIndicator'] = $v;
        }
        if (null !== ($v = $this->getPharmaceuticalProduct())) {
            $a['pharmaceuticalProduct'] = $v;
        }
        if (null !== ($v = $this->getProductClassification())) {
            $a['productClassification'] = $v;
        }
        if (null !== ($v = $this->getSpecialDesignation())) {
            $a['specialDesignation'] = $v;
        }
        if (null !== ($v = $this->getSpecialMeasures())) {
            $a['specialMeasures'] = $v;
        }
        if (null !== ($v = $this->getTherapeuticIndication())) {
            $a['therapeuticIndication'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUndesirableEffect())) {
            $a['undesirableEffect'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProduct xmlns="http://hl7.org/fhir"></MedicinalProduct>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}