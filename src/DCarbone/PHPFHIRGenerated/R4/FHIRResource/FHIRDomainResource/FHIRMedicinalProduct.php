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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct
 * patient care (e.g. regulatory use).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProduct
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $additionalMonitoringIndicator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $attachedDocument = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $clinicalTrial = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $combinedPharmaceuticalDoseForm = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $contact = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $crossReference = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected $domain = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $legalStatusOfSupply = null;

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    protected $manufacturingBusinessOperation = [];

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    protected $marketingStatus = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $masterFile = [];

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    protected $name = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $packagedMedicinalProduct = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $paediatricUseIndicator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $pharmaceuticalProduct = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $productClassification = [];

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    protected $specialDesignation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $specialMeasures = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type MedicinalProduct
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SPECIAL_MEASURES]) || isset($data[self::FIELD_SPECIAL_MEASURES_EXT])) {
            if (isset($data[self::FIELD_SPECIAL_MEASURES])) {
                $value = $data[self::FIELD_SPECIAL_MEASURES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SPECIAL_MEASURES_EXT]) && is_array($data[self::FIELD_SPECIAL_MEASURES_EXT])) {
                $ext = $data[self::FIELD_SPECIAL_MEASURES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSpecialMeasures($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSpecialMeasures($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSpecialMeasures(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSpecialMeasures(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSpecialMeasures(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSpecialMeasures(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSpecialMeasures(new FHIRString($iext));
                }
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
        return "<MedicinalProduct{$xmlns}></MedicinalProduct>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return static
     */
    public function setAdditionalMonitoringIndicator(FHIRCodeableConcept $additionalMonitoringIndicator = null)
    {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $attachedDocument
     * @return static
     */
    public function addAttachedDocument(FHIRReference $attachedDocument = null)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $attachedDocument
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getClinicalTrial()
    {
        return $this->clinicalTrial;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $clinicalTrial
     * @return static
     */
    public function addClinicalTrial(FHIRReference $clinicalTrial = null)
    {
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $clinicalTrial
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return static
     */
    public function setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null)
    {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $contact
     * @return static
     */
    public function addContact(FHIRReference $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $contact
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $crossReference
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $crossReference
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $domain
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $legalStatusOfSupply
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[] $manufacturingBusinessOperation
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $marketingStatus
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorizaton.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[] $marketingStatus
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $masterFile
     * @return static
     */
    public function addMasterFile(FHIRReference $masterFile = null)
    {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master
     * File).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $masterFile
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName $name
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[] $name
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $packagedMedicinalProduct
     * @return static
     */
    public function addPackagedMedicinalProduct(FHIRReference $packagedMedicinalProduct = null)
    {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $packagedMedicinalProduct
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPaediatricUseIndicator()
    {
        return $this->paediatricUseIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $paediatricUseIndicator
     * @return static
     */
    public function setPaediatricUseIndicator(FHIRCodeableConcept $paediatricUseIndicator = null)
    {
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPharmaceuticalProduct()
    {
        return $this->pharmaceuticalProduct;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $pharmaceuticalProduct
     * @return static
     */
    public function addPharmaceuticalProduct(FHIRReference $pharmaceuticalProduct = null)
    {
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $pharmaceuticalProduct
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductClassification()
    {
        return $this->productClassification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productClassification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $productClassification
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation $specialDesignation
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[] $specialDesignation
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $specialMeasures
     * @return static
     */
    public function addSpecialMeasures($specialMeasures = null)
    {
        if (null === $specialMeasures) {
            $this->specialMeasures = [];
            return $this;
        }
        if ($specialMeasures instanceof FHIRString) {
            $this->specialMeasures[] = $specialMeasures;
            return $this;
        }
        $this->specialMeasures[] = new FHIRString($specialMeasures);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $specialMeasures
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ATTACHED_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLINICAL_TRIAL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CROSS_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURING_BUSINESS_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MARKETING_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MASTER_FILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAEDIATRIC_USE_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PHARMACEUTICAL_PRODUCT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCT_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_DESIGNATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_MEASURES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            $v = $this->getAdditionalMonitoringIndicator();
            foreach($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
                        $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTACHED_DOCUMENT])) {
            $v = $this->getAttachedDocument();
            foreach($validationRules[self::FIELD_ATTACHED_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_ATTACHED_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTACHED_DOCUMENT])) {
                        $errs[self::FIELD_ATTACHED_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_ATTACHED_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_TRIAL])) {
            $v = $this->getClinicalTrial();
            foreach($validationRules[self::FIELD_CLINICAL_TRIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_CLINICAL_TRIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_TRIAL])) {
                        $errs[self::FIELD_CLINICAL_TRIAL] = [];
                    }
                    $errs[self::FIELD_CLINICAL_TRIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            $v = $this->getCombinedPharmaceuticalDoseForm();
            foreach($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
                        $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CROSS_REFERENCE])) {
            $v = $this->getCrossReference();
            foreach($validationRules[self::FIELD_CROSS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_CROSS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CROSS_REFERENCE])) {
                        $errs[self::FIELD_CROSS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CROSS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            $v = $this->getLegalStatusOfSupply();
            foreach($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_LEGAL_STATUS_OF_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
                        $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = [];
                    }
                    $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURING_BUSINESS_OPERATION])) {
            $v = $this->getManufacturingBusinessOperation();
            foreach($validationRules[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_MANUFACTURING_BUSINESS_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURING_BUSINESS_OPERATION])) {
                        $errs[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] = [];
                    }
                    $errs[self::FIELD_MANUFACTURING_BUSINESS_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MARKETING_STATUS])) {
            $v = $this->getMarketingStatus();
            foreach($validationRules[self::FIELD_MARKETING_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_MARKETING_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MARKETING_STATUS])) {
                        $errs[self::FIELD_MARKETING_STATUS] = [];
                    }
                    $errs[self::FIELD_MARKETING_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MASTER_FILE])) {
            $v = $this->getMasterFile();
            foreach($validationRules[self::FIELD_MASTER_FILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_MASTER_FILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MASTER_FILE])) {
                        $errs[self::FIELD_MASTER_FILE] = [];
                    }
                    $errs[self::FIELD_MASTER_FILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            $v = $this->getPackagedMedicinalProduct();
            foreach($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                        $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAEDIATRIC_USE_INDICATOR])) {
            $v = $this->getPaediatricUseIndicator();
            foreach($validationRules[self::FIELD_PAEDIATRIC_USE_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_PAEDIATRIC_USE_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAEDIATRIC_USE_INDICATOR])) {
                        $errs[self::FIELD_PAEDIATRIC_USE_INDICATOR] = [];
                    }
                    $errs[self::FIELD_PAEDIATRIC_USE_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHARMACEUTICAL_PRODUCT])) {
            $v = $this->getPharmaceuticalProduct();
            foreach($validationRules[self::FIELD_PHARMACEUTICAL_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_PHARMACEUTICAL_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHARMACEUTICAL_PRODUCT])) {
                        $errs[self::FIELD_PHARMACEUTICAL_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PHARMACEUTICAL_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_CLASSIFICATION])) {
            $v = $this->getProductClassification();
            foreach($validationRules[self::FIELD_PRODUCT_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_PRODUCT_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_CLASSIFICATION])) {
                        $errs[self::FIELD_PRODUCT_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_PRODUCT_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_DESIGNATION])) {
            $v = $this->getSpecialDesignation();
            foreach($validationRules[self::FIELD_SPECIAL_DESIGNATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_SPECIAL_DESIGNATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_DESIGNATION])) {
                        $errs[self::FIELD_SPECIAL_DESIGNATION] = [];
                    }
                    $errs[self::FIELD_SPECIAL_DESIGNATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_MEASURES])) {
            $v = $this->getSpecialMeasures();
            foreach($validationRules[self::FIELD_SPECIAL_MEASURES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_SPECIAL_MEASURES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_MEASURES])) {
                        $errs[self::FIELD_SPECIAL_MEASURES] = [];
                    }
                    $errs[self::FIELD_SPECIAL_MEASURES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
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
                throw new \DomainException(sprintf('FHIRMedicinalProduct::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProduct::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProduct;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProduct)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProduct::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct or null, %s seen.',
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
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_MONITORING_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ATTACHED_DOCUMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_TRIAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CROSS_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL_STATUS_OF_SUPPLY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURING_BUSINESS_OPERATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MARKETING_STATUS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MASTER_FILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGED_MEDICINAL_PRODUCT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAEDIATRIC_USE_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PHARMACEUTICAL_PRODUCT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_DESIGNATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_MEASURES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ATTACHED_DOCUMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ATTACHED_DOCUMENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            $a[self::FIELD_CLINICAL_TRIAL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CLINICAL_TRIAL][] = $v;
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $a[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            $a[self::FIELD_CROSS_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CROSS_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $v;
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
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $a[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $v;
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            $a[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MANUFACTURING_BUSINESS_OPERATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            $a[self::FIELD_MARKETING_STATUS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MARKETING_STATUS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            $a[self::FIELD_MASTER_FILE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MASTER_FILE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NAME][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            $a[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PACKAGED_MEDICINAL_PRODUCT][] = $v;
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $a[self::FIELD_PAEDIATRIC_USE_INDICATOR] = $v;
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            $a[self::FIELD_PHARMACEUTICAL_PRODUCT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PHARMACEUTICAL_PRODUCT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            $a[self::FIELD_PRODUCT_CLASSIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRODUCT_CLASSIFICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            $a[self::FIELD_SPECIAL_DESIGNATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SPECIAL_DESIGNATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $a[self::FIELD_SPECIAL_MEASURES] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SPECIAL_MEASURES][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SPECIAL_MEASURES_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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