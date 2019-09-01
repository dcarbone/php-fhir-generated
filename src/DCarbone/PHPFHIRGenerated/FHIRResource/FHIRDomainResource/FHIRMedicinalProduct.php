<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 1st, 2019 15:50+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct
 * patient care (e.g. regulatory use).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProduct
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProduct extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT;

    const FIELD_ADDITIONAL_MONITORING_INDICATOR = 'additionalMonitoringIndicator';
    const FIELD_ATTACHED_DOCUMENT = 'attachedDocument';
    const FIELD_CLINICAL_TRIAL = 'clinicalTrial';
    const FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM = 'combinedPharmaceuticalDoseForm';
    const FIELD_CONTACT = 'contact';
    const FIELD_CROSS_REFERENCE = 'crossReference';
    const FIELD_DOMAIN = 'domain';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    const FIELD_MANUFACTURING_BUSINESS_OPERATION = 'manufacturingBusinessOperation';
    const FIELD_MARKETING_STATUS = 'marketingStatus';
    const FIELD_MASTER_FILE = 'masterFile';
    const FIELD_NAME = 'name';
    const FIELD_PACKAGED_MEDICINAL_PRODUCT = 'packagedMedicinalProduct';
    const FIELD_PAEDIATRIC_USE_INDICATOR = 'paediatricUseIndicator';
    const FIELD_PHARMACEUTICAL_PRODUCT = 'pharmaceuticalProduct';
    const FIELD_PRODUCT_CLASSIFICATION = 'productClassification';
    const FIELD_SPECIAL_DESIGNATION = 'specialDesignation';
    const FIELD_SPECIAL_MEASURES = 'specialMeasures';
    const FIELD_SPECIAL_MEASURES_EXT = '_specialMeasures';
    const FIELD_TYPE = 'type';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $additionalMonitoringIndicator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $attachedDocument = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $clinicalTrial = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $combinedPharmaceuticalDoseForm = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $contact = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $crossReference = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $domain = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $legalStatusOfSupply = null;

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    private $manufacturingBusinessOperation = [];

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    private $marketingStatus = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $masterFile = [];

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    private $name = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $packagedMedicinalProduct = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $paediatricUseIndicator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $pharmaceuticalProduct = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $productClassification = [];

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    private $specialDesignation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $specialMeasures = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRMedicinalProduct Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProduct::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            if ($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setAdditionalMonitoringIndicator($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]);
            } else {
                $this->setAdditionalMonitoringIndicator(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_ATTACHED_DOCUMENT])) {
            if (is_array($data[self::FIELD_ATTACHED_DOCUMENT])) {
                foreach($data[self::FIELD_ATTACHED_DOCUMENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAttachedDocument($v);
                    } else {
                        $this->addAttachedDocument(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ATTACHED_DOCUMENT] instanceof FHIRReference) {
                $this->addAttachedDocument($data[self::FIELD_ATTACHED_DOCUMENT]);
            } else {
                $this->addAttachedDocument(new FHIRReference($data[self::FIELD_ATTACHED_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_TRIAL])) {
            if (is_array($data[self::FIELD_CLINICAL_TRIAL])) {
                foreach($data[self::FIELD_CLINICAL_TRIAL] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addClinicalTrial($v);
                    } else {
                        $this->addClinicalTrial(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CLINICAL_TRIAL] instanceof FHIRReference) {
                $this->addClinicalTrial($data[self::FIELD_CLINICAL_TRIAL]);
            } else {
                $this->addClinicalTrial(new FHIRReference($data[self::FIELD_CLINICAL_TRIAL]));
            }
        }
        if (isset($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            if ($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setCombinedPharmaceuticalDoseForm($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]);
            } else {
                $this->setCombinedPharmaceuticalDoseForm(new FHIRCodeableConcept($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRReference) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRReference($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_CROSS_REFERENCE])) {
            if (is_array($data[self::FIELD_CROSS_REFERENCE])) {
                foreach($data[self::FIELD_CROSS_REFERENCE] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addCrossReference($v);
                    } else {
                        $this->addCrossReference(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_CROSS_REFERENCE] instanceof FHIRIdentifier) {
                $this->addCrossReference($data[self::FIELD_CROSS_REFERENCE]);
            } else {
                $this->addCrossReference(new FHIRIdentifier($data[self::FIELD_CROSS_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCoding) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCoding($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            if ($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY] instanceof FHIRCodeableConcept) {
                $this->setLegalStatusOfSupply($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]);
            } else {
                $this->setLegalStatusOfSupply(new FHIRCodeableConcept($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION])) {
            if (is_array($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION])) {
                foreach($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductManufacturingBusinessOperation) {
                        $this->addManufacturingBusinessOperation($v);
                    } else {
                        $this->addManufacturingBusinessOperation(new FHIRMedicinalProductManufacturingBusinessOperation($v));
                    }
                }
            } else if ($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] instanceof FHIRMedicinalProductManufacturingBusinessOperation) {
                $this->addManufacturingBusinessOperation($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION]);
            } else {
                $this->addManufacturingBusinessOperation(new FHIRMedicinalProductManufacturingBusinessOperation($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_MARKETING_STATUS])) {
            if (is_array($data[self::FIELD_MARKETING_STATUS])) {
                foreach($data[self::FIELD_MARKETING_STATUS] as $v) {
                    if ($v instanceof FHIRMarketingStatus) {
                        $this->addMarketingStatus($v);
                    } else {
                        $this->addMarketingStatus(new FHIRMarketingStatus($v));
                    }
                }
            } else if ($data[self::FIELD_MARKETING_STATUS] instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($data[self::FIELD_MARKETING_STATUS]);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($data[self::FIELD_MARKETING_STATUS]));
            }
        }
        if (isset($data[self::FIELD_MASTER_FILE])) {
            if (is_array($data[self::FIELD_MASTER_FILE])) {
                foreach($data[self::FIELD_MASTER_FILE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addMasterFile($v);
                    } else {
                        $this->addMasterFile(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_MASTER_FILE] instanceof FHIRReference) {
                $this->addMasterFile($data[self::FIELD_MASTER_FILE]);
            } else {
                $this->addMasterFile(new FHIRReference($data[self::FIELD_MASTER_FILE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if ($v instanceof FHIRMedicinalProductName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRMedicinalProductName($v));
                    }
                }
            } else if ($data[self::FIELD_NAME] instanceof FHIRMedicinalProductName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRMedicinalProductName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            if (is_array($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                foreach($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPackagedMedicinalProduct($v);
                    } else {
                        $this->addPackagedMedicinalProduct(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] instanceof FHIRReference) {
                $this->addPackagedMedicinalProduct($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRReference($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_PAEDIATRIC_USE_INDICATOR])) {
            if ($data[self::FIELD_PAEDIATRIC_USE_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setPaediatricUseIndicator($data[self::FIELD_PAEDIATRIC_USE_INDICATOR]);
            } else {
                $this->setPaediatricUseIndicator(new FHIRCodeableConcept($data[self::FIELD_PAEDIATRIC_USE_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_PHARMACEUTICAL_PRODUCT])) {
            if (is_array($data[self::FIELD_PHARMACEUTICAL_PRODUCT])) {
                foreach($data[self::FIELD_PHARMACEUTICAL_PRODUCT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPharmaceuticalProduct($v);
                    } else {
                        $this->addPharmaceuticalProduct(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PHARMACEUTICAL_PRODUCT] instanceof FHIRReference) {
                $this->addPharmaceuticalProduct($data[self::FIELD_PHARMACEUTICAL_PRODUCT]);
            } else {
                $this->addPharmaceuticalProduct(new FHIRReference($data[self::FIELD_PHARMACEUTICAL_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_PRODUCT_CLASSIFICATION])) {
                foreach($data[self::FIELD_PRODUCT_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProductClassification($v);
                    } else {
                        $this->addProductClassification(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PRODUCT_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addProductClassification($data[self::FIELD_PRODUCT_CLASSIFICATION]);
            } else {
                $this->addProductClassification(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_DESIGNATION])) {
            if (is_array($data[self::FIELD_SPECIAL_DESIGNATION])) {
                foreach($data[self::FIELD_SPECIAL_DESIGNATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductSpecialDesignation) {
                        $this->addSpecialDesignation($v);
                    } else {
                        $this->addSpecialDesignation(new FHIRMedicinalProductSpecialDesignation($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIAL_DESIGNATION] instanceof FHIRMedicinalProductSpecialDesignation) {
                $this->addSpecialDesignation($data[self::FIELD_SPECIAL_DESIGNATION]);
            } else {
                $this->addSpecialDesignation(new FHIRMedicinalProductSpecialDesignation($data[self::FIELD_SPECIAL_DESIGNATION]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_MEASURES])) {
            $ext = (isset($data[self::FIELD_SPECIAL_MEASURES_EXT]) && is_array($data[self::FIELD_SPECIAL_MEASURES_EXT]))
                ? $data[self::FIELD_SPECIAL_MEASURES_EXT]
                : null;
            if (is_array($data[self::FIELD_SPECIAL_MEASURES])) {
                foreach($data[self::FIELD_SPECIAL_MEASURES] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addSpecialMeasures($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSpecialMeasures(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSpecialMeasures(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_MEASURES] instanceof FHIRString) {
                $this->addSpecialMeasures($data[self::FIELD_SPECIAL_MEASURES]);
            } elseif ($ext && is_scalar($data[self::FIELD_SPECIAL_MEASURES])) {
                $this->addSpecialMeasures(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SPECIAL_MEASURES]] + $ext));
            } else {
                $this->addSpecialMeasures(new FHIRString($data[self::FIELD_SPECIAL_MEASURES]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setAdditionalMonitoringIndicator(FHIRCodeableConcept $additionalMonitoringIndicator = null)
    {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $attachedDocument
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addAttachedDocument(FHIRReference $attachedDocument = null)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $attachedDocument
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setAttachedDocument(array $attachedDocument = [])
    {
        $this->attachedDocument = [];
        if ([] === $attachedDocument) {
            return $this;
        }
        foreach($attachedDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAttachedDocument($v);
            } else {
                $this->addAttachedDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getClinicalTrial()
    {
        return $this->clinicalTrial;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $clinicalTrial
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addClinicalTrial(FHIRReference $clinicalTrial = null)
    {
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $clinicalTrial
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setClinicalTrial(array $clinicalTrial = [])
    {
        $this->clinicalTrial = [];
        if ([] === $clinicalTrial) {
            return $this;
        }
        foreach($clinicalTrial as $v) {
            if ($v instanceof FHIRReference) {
                $this->addClinicalTrial($v);
            } else {
                $this->addClinicalTrial(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null)
    {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addContact(FHIRReference $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $crossReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addCrossReference(FHIRIdentifier $crossReference = null)
    {
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $crossReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setCrossReference(array $crossReference = [])
    {
        $this->crossReference = [];
        if ([] === $crossReference) {
            return $this;
        }
        foreach($crossReference as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addCrossReference($v);
            } else {
                $this->addCrossReference(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $domain
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setDomain(FHIRCoding $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
     * Business identifier for this product. Could be an MPID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
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
     * Business identifier for this product. Could be an MPID.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $legalStatusOfSupply
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setLegalStatusOfSupply(FHIRCodeableConcept $legalStatusOfSupply = null)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    public function getManufacturingBusinessOperation()
    {
        return $this->manufacturingBusinessOperation;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addManufacturingBusinessOperation(FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation = null)
    {
        $this->manufacturingBusinessOperation[] = $manufacturingBusinessOperation;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[] $manufacturingBusinessOperation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setManufacturingBusinessOperation(array $manufacturingBusinessOperation = [])
    {
        $this->manufacturingBusinessOperation = [];
        if ([] === $manufacturingBusinessOperation) {
            return $this;
        }
        foreach($manufacturingBusinessOperation as $v) {
            if ($v instanceof FHIRMedicinalProductManufacturingBusinessOperation) {
                $this->addManufacturingBusinessOperation($v);
            } else {
                $this->addManufacturingBusinessOperation(new FHIRMedicinalProductManufacturingBusinessOperation($v));
            }
        }
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $marketingStatus
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addMarketingStatus(FHIRMarketingStatus $marketingStatus = null)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[] $marketingStatus
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setMarketingStatus(array $marketingStatus = [])
    {
        $this->marketingStatus = [];
        if ([] === $marketingStatus) {
            return $this;
        }
        foreach($marketingStatus as $v) {
            if ($v instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($v);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $masterFile
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addMasterFile(FHIRReference $masterFile = null)
    {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $masterFile
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setMasterFile(array $masterFile = [])
    {
        $this->masterFile = [];
        if ([] === $masterFile) {
            return $this;
        }
        foreach($masterFile as $v) {
            if ($v instanceof FHIRReference) {
                $this->addMasterFile($v);
            } else {
                $this->addMasterFile(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addName(FHIRMedicinalProductName $name = null)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[] $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setName(array $name = [])
    {
        $this->name = [];
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRMedicinalProductName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRMedicinalProductName($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $packagedMedicinalProduct
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addPackagedMedicinalProduct(FHIRReference $packagedMedicinalProduct = null)
    {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $packagedMedicinalProduct
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setPackagedMedicinalProduct(array $packagedMedicinalProduct = [])
    {
        $this->packagedMedicinalProduct = [];
        if ([] === $packagedMedicinalProduct) {
            return $this;
        }
        foreach($packagedMedicinalProduct as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPackagedMedicinalProduct($v);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPaediatricUseIndicator()
    {
        return $this->paediatricUseIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $paediatricUseIndicator
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setPaediatricUseIndicator(FHIRCodeableConcept $paediatricUseIndicator = null)
    {
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPharmaceuticalProduct()
    {
        return $this->pharmaceuticalProduct;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $pharmaceuticalProduct
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addPharmaceuticalProduct(FHIRReference $pharmaceuticalProduct = null)
    {
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $pharmaceuticalProduct
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setPharmaceuticalProduct(array $pharmaceuticalProduct = [])
    {
        $this->pharmaceuticalProduct = [];
        if ([] === $pharmaceuticalProduct) {
            return $this;
        }
        foreach($pharmaceuticalProduct as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPharmaceuticalProduct($v);
            } else {
                $this->addPharmaceuticalProduct(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductClassification()
    {
        return $this->productClassification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productClassification
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addProductClassification(FHIRCodeableConcept $productClassification = null)
    {
        $this->productClassification[] = $productClassification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $productClassification
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setProductClassification(array $productClassification = [])
    {
        $this->productClassification = [];
        if ([] === $productClassification) {
            return $this;
        }
        foreach($productClassification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProductClassification($v);
            } else {
                $this->addProductClassification(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    public function getSpecialDesignation()
    {
        return $this->specialDesignation;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation $specialDesignation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addSpecialDesignation(FHIRMedicinalProductSpecialDesignation $specialDesignation = null)
    {
        $this->specialDesignation[] = $specialDesignation;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[] $specialDesignation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setSpecialDesignation(array $specialDesignation = [])
    {
        $this->specialDesignation = [];
        if ([] === $specialDesignation) {
            return $this;
        }
        foreach($specialDesignation as $v) {
            if ($v instanceof FHIRMedicinalProductSpecialDesignation) {
                $this->addSpecialDesignation($v);
            } else {
                $this->addSpecialDesignation(new FHIRMedicinalProductSpecialDesignation($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $specialMeasures
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function addSpecialMeasures($specialMeasures = null)
    {
        if (null === $specialMeasures) {
            $this->specialMeasures = null;
            return $this;
        }
        if ($specialMeasures instanceof FHIRString) {
            $this->specialMeasures = $specialMeasures;
            return $this;
        }
        $this->specialMeasures = new FHIRString($specialMeasures);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $specialMeasures
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setSpecialMeasures(array $specialMeasures = [])
    {
        $this->specialMeasures = [];
        if ([] === $specialMeasures) {
            return $this;
        }
        foreach($specialMeasures as $v) {
            if ($v instanceof FHIRString) {
                $this->addSpecialMeasures($v);
            } else {
                $this->addSpecialMeasures(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicinalProduct::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProduct::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRMedicinalProduct);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProduct)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProduct::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->additionalMonitoringIndicator)) {
            $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::xmlUnserialize($children->additionalMonitoringIndicator));
        }
        if (isset($children->attachedDocument)) {
            foreach($children->attachedDocument as $child) {
                $type->addAttachedDocument(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->clinicalTrial)) {
            foreach($children->clinicalTrial as $child) {
                $type->addClinicalTrial(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->combinedPharmaceuticalDoseForm)) {
            $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::xmlUnserialize($children->combinedPharmaceuticalDoseForm));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->crossReference)) {
            foreach($children->crossReference as $child) {
                $type->addCrossReference(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->domain)) {
            $type->setDomain(FHIRCoding::xmlUnserialize($children->domain));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->legalStatusOfSupply)) {
            $type->setLegalStatusOfSupply(FHIRCodeableConcept::xmlUnserialize($children->legalStatusOfSupply));
        }
        if (isset($children->manufacturingBusinessOperation)) {
            foreach($children->manufacturingBusinessOperation as $child) {
                $type->addManufacturingBusinessOperation(FHIRMedicinalProductManufacturingBusinessOperation::xmlUnserialize($child));
            }
        }
        if (isset($children->marketingStatus)) {
            foreach($children->marketingStatus as $child) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($child));
            }
        }
        if (isset($children->masterFile)) {
            foreach($children->masterFile as $child) {
                $type->addMasterFile(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->name)) {
            foreach($children->name as $child) {
                $type->addName(FHIRMedicinalProductName::xmlUnserialize($child));
            }
        }
        if (isset($children->packagedMedicinalProduct)) {
            foreach($children->packagedMedicinalProduct as $child) {
                $type->addPackagedMedicinalProduct(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->paediatricUseIndicator)) {
            $type->setPaediatricUseIndicator(FHIRCodeableConcept::xmlUnserialize($children->paediatricUseIndicator));
        }
        if (isset($children->pharmaceuticalProduct)) {
            foreach($children->pharmaceuticalProduct as $child) {
                $type->addPharmaceuticalProduct(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->productClassification)) {
            foreach($children->productClassification as $child) {
                $type->addProductClassification(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->specialDesignation)) {
            foreach($children->specialDesignation as $child) {
                $type->addSpecialDesignation(FHIRMedicinalProductSpecialDesignation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->specialMeasures)) {
            $type->addSpecialMeasures((string)$attributes->specialMeasures);
        }
        if (isset($children->specialMeasures)) {
            foreach($children->specialMeasures as $child) {
                $type->addSpecialMeasures(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicinalProduct xmlns="http://hl7.org/fhir"></MedicinalProduct>');
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_MONITORING_INDICATOR));
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ATTACHED_DOCUMENT));
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_TRIAL));
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CROSS_REFERENCE));
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL_STATUS_OF_SUPPLY));
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURING_BUSINESS_OPERATION));
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MARKETING_STATUS));
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MASTER_FILE));
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGED_MEDICINAL_PRODUCT));
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAEDIATRIC_USE_INDICATOR));
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PHARMACEUTICAL_PRODUCT));
            }
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CLASSIFICATION));
            }
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_DESIGNATION));
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_SPECIAL_MEASURES, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_MEASURES));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_MEASURES));
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $a[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = $v;
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            $a[self::FIELD_ATTACHED_DOCUMENT] = $vs;
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            $a[self::FIELD_CLINICAL_TRIAL] = $vs;
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $a[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            $a[self::FIELD_CROSS_REFERENCE] = $vs;
        }
        if (null !== ($v = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $a[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $v;
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            $a[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] = $vs;
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            $a[self::FIELD_MARKETING_STATUS] = $vs;
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            $a[self::FIELD_MASTER_FILE] = $vs;
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = $vs;
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            $a[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = $vs;
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $a[self::FIELD_PAEDIATRIC_USE_INDICATOR] = $v;
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            $a[self::FIELD_PHARMACEUTICAL_PRODUCT] = $vs;
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            $a[self::FIELD_PRODUCT_CLASSIFICATION] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            $a[self::FIELD_SPECIAL_DESIGNATION] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $a[self::FIELD_SPECIAL_MEASURES] = [];
            $a[self::FIELD_SPECIAL_MEASURES_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_SPECIAL_MEASURES][] = (string)$v;
                $a[self::FIELD_SPECIAL_MEASURES_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}