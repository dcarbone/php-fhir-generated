<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

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

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_DOMAIN = 'domain';
    const FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM = 'combinedPharmaceuticalDoseForm';
    const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    const FIELD_ADDITIONAL_MONITORING_INDICATOR = 'additionalMonitoringIndicator';
    const FIELD_SPECIAL_MEASURES = 'specialMeasures';
    const FIELD_SPECIAL_MEASURES_EXT = '_specialMeasures';
    const FIELD_PAEDIATRIC_USE_INDICATOR = 'paediatricUseIndicator';
    const FIELD_PRODUCT_CLASSIFICATION = 'productClassification';
    const FIELD_MARKETING_STATUS = 'marketingStatus';
    const FIELD_PHARMACEUTICAL_PRODUCT = 'pharmaceuticalProduct';
    const FIELD_PACKAGED_MEDICINAL_PRODUCT = 'packagedMedicinalProduct';
    const FIELD_ATTACHED_DOCUMENT = 'attachedDocument';
    const FIELD_MASTER_FILE = 'masterFile';
    const FIELD_CONTACT = 'contact';
    const FIELD_CLINICAL_TRIAL = 'clinicalTrial';
    const FIELD_NAME = 'name';
    const FIELD_CROSS_REFERENCE = 'crossReference';
    const FIELD_MANUFACTURING_BUSINESS_OPERATION = 'manufacturingBusinessOperation';
    const FIELD_SPECIAL_DESIGNATION = 'specialDesignation';

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
    protected null|array $identifier = [];
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
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $domain = null;
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
    protected null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null;
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
    protected null|FHIRCodeableConcept $legalStatusOfSupply = null;
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
    protected null|FHIRCodeableConcept $additionalMonitoringIndicator = null;
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
    protected null|array $specialMeasures = [];
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
    protected null|FHIRCodeableConcept $paediatricUseIndicator = null;
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
    protected null|array $productClassification = [];
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
    protected null|array $marketingStatus = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pharmaceutical aspects of product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $pharmaceuticalProduct = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package representation for the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $packagedMedicinalProduct = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $attachedDocument = [];
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
    protected null|array $masterFile = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $contact = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $clinicalTrial = [];
    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    protected null|array $name = [];
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
    protected null|array $crossReference = [];
    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * An operation applied to the product, for manufacturing or adminsitrative
     * purpose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    protected null|array $manufacturingBusinessOperation = [];
    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     *
     * Indicates if the medicinal product has an orphan designation for the treatment
     * of a rare disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    protected null|array $specialDesignation = [];

    /**
     * Validation map for fields in type MedicinalProduct
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRMedicinalProduct Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_DOMAIN, $data)) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCoding) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCoding($data[self::FIELD_DOMAIN]));
            }
        }
        if (array_key_exists(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $data)) {
            if ($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setCombinedPharmaceuticalDoseForm($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]);
            } else {
                $this->setCombinedPharmaceuticalDoseForm(new FHIRCodeableConcept($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]));
            }
        }
        if (array_key_exists(self::FIELD_LEGAL_STATUS_OF_SUPPLY, $data)) {
            if ($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY] instanceof FHIRCodeableConcept) {
                $this->setLegalStatusOfSupply($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]);
            } else {
                $this->setLegalStatusOfSupply(new FHIRCodeableConcept($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]));
            }
        }
        if (array_key_exists(self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $data)) {
            if ($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setAdditionalMonitoringIndicator($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]);
            } else {
                $this->setAdditionalMonitoringIndicator(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIAL_MEASURES, $data) || array_key_exists(self::FIELD_SPECIAL_MEASURES_EXT, $data)) {
            $value = $data[self::FIELD_SPECIAL_MEASURES] ?? null;
            $ext = (isset($data[self::FIELD_SPECIAL_MEASURES_EXT]) && is_array($data[self::FIELD_SPECIAL_MEASURES_EXT])) ? $data[self::FIELD_SPECIAL_MEASURES_EXT] : [];
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
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSpecialMeasures(new FHIRString($iext));
                }
            } else {
                $this->addSpecialMeasures(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PAEDIATRIC_USE_INDICATOR, $data)) {
            if ($data[self::FIELD_PAEDIATRIC_USE_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setPaediatricUseIndicator($data[self::FIELD_PAEDIATRIC_USE_INDICATOR]);
            } else {
                $this->setPaediatricUseIndicator(new FHIRCodeableConcept($data[self::FIELD_PAEDIATRIC_USE_INDICATOR]));
            }
        }
        if (array_key_exists(self::FIELD_PRODUCT_CLASSIFICATION, $data)) {
            if (is_array($data[self::FIELD_PRODUCT_CLASSIFICATION])) {
                foreach($data[self::FIELD_PRODUCT_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProductClassification($v);
                    } else {
                        $this->addProductClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PRODUCT_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addProductClassification($data[self::FIELD_PRODUCT_CLASSIFICATION]);
            } else {
                $this->addProductClassification(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CLASSIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_MARKETING_STATUS, $data)) {
            if (is_array($data[self::FIELD_MARKETING_STATUS])) {
                foreach($data[self::FIELD_MARKETING_STATUS] as $v) {
                    if ($v instanceof FHIRMarketingStatus) {
                        $this->addMarketingStatus($v);
                    } else {
                        $this->addMarketingStatus(new FHIRMarketingStatus($v));
                    }
                }
            } elseif ($data[self::FIELD_MARKETING_STATUS] instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($data[self::FIELD_MARKETING_STATUS]);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($data[self::FIELD_MARKETING_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_PHARMACEUTICAL_PRODUCT, $data)) {
            if (is_array($data[self::FIELD_PHARMACEUTICAL_PRODUCT])) {
                foreach($data[self::FIELD_PHARMACEUTICAL_PRODUCT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPharmaceuticalProduct($v);
                    } else {
                        $this->addPharmaceuticalProduct(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PHARMACEUTICAL_PRODUCT] instanceof FHIRReference) {
                $this->addPharmaceuticalProduct($data[self::FIELD_PHARMACEUTICAL_PRODUCT]);
            } else {
                $this->addPharmaceuticalProduct(new FHIRReference($data[self::FIELD_PHARMACEUTICAL_PRODUCT]));
            }
        }
        if (array_key_exists(self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $data)) {
            if (is_array($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                foreach($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPackagedMedicinalProduct($v);
                    } else {
                        $this->addPackagedMedicinalProduct(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] instanceof FHIRReference) {
                $this->addPackagedMedicinalProduct($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRReference($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]));
            }
        }
        if (array_key_exists(self::FIELD_ATTACHED_DOCUMENT, $data)) {
            if (is_array($data[self::FIELD_ATTACHED_DOCUMENT])) {
                foreach($data[self::FIELD_ATTACHED_DOCUMENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAttachedDocument($v);
                    } else {
                        $this->addAttachedDocument(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ATTACHED_DOCUMENT] instanceof FHIRReference) {
                $this->addAttachedDocument($data[self::FIELD_ATTACHED_DOCUMENT]);
            } else {
                $this->addAttachedDocument(new FHIRReference($data[self::FIELD_ATTACHED_DOCUMENT]));
            }
        }
        if (array_key_exists(self::FIELD_MASTER_FILE, $data)) {
            if (is_array($data[self::FIELD_MASTER_FILE])) {
                foreach($data[self::FIELD_MASTER_FILE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addMasterFile($v);
                    } else {
                        $this->addMasterFile(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MASTER_FILE] instanceof FHIRReference) {
                $this->addMasterFile($data[self::FIELD_MASTER_FILE]);
            } else {
                $this->addMasterFile(new FHIRReference($data[self::FIELD_MASTER_FILE]));
            }
        }
        if (array_key_exists(self::FIELD_CONTACT, $data)) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRReference) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRReference($data[self::FIELD_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_CLINICAL_TRIAL, $data)) {
            if (is_array($data[self::FIELD_CLINICAL_TRIAL])) {
                foreach($data[self::FIELD_CLINICAL_TRIAL] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addClinicalTrial($v);
                    } else {
                        $this->addClinicalTrial(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CLINICAL_TRIAL] instanceof FHIRReference) {
                $this->addClinicalTrial($data[self::FIELD_CLINICAL_TRIAL]);
            } else {
                $this->addClinicalTrial(new FHIRReference($data[self::FIELD_CLINICAL_TRIAL]));
            }
        }
        if (array_key_exists(self::FIELD_NAME, $data)) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if ($v instanceof FHIRMedicinalProductName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRMedicinalProductName($v));
                    }
                }
            } elseif ($data[self::FIELD_NAME] instanceof FHIRMedicinalProductName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRMedicinalProductName($data[self::FIELD_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_CROSS_REFERENCE, $data)) {
            if (is_array($data[self::FIELD_CROSS_REFERENCE])) {
                foreach($data[self::FIELD_CROSS_REFERENCE] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addCrossReference($v);
                    } else {
                        $this->addCrossReference(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_CROSS_REFERENCE] instanceof FHIRIdentifier) {
                $this->addCrossReference($data[self::FIELD_CROSS_REFERENCE]);
            } else {
                $this->addCrossReference(new FHIRIdentifier($data[self::FIELD_CROSS_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURING_BUSINESS_OPERATION, $data)) {
            if (is_array($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION])) {
                foreach($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductManufacturingBusinessOperation) {
                        $this->addManufacturingBusinessOperation($v);
                    } else {
                        $this->addManufacturingBusinessOperation(new FHIRMedicinalProductManufacturingBusinessOperation($v));
                    }
                }
            } elseif ($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION] instanceof FHIRMedicinalProductManufacturingBusinessOperation) {
                $this->addManufacturingBusinessOperation($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION]);
            } else {
                $this->addManufacturingBusinessOperation(new FHIRMedicinalProductManufacturingBusinessOperation($data[self::FIELD_MANUFACTURING_BUSINESS_OPERATION]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIAL_DESIGNATION, $data)) {
            if (is_array($data[self::FIELD_SPECIAL_DESIGNATION])) {
                foreach($data[self::FIELD_SPECIAL_DESIGNATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductSpecialDesignation) {
                        $this->addSpecialDesignation($v);
                    } else {
                        $this->addSpecialDesignation(new FHIRMedicinalProductSpecialDesignation($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_DESIGNATION] instanceof FHIRMedicinalProductSpecialDesignation) {
                $this->addSpecialDesignation($data[self::FIELD_SPECIAL_DESIGNATION]);
            } else {
                $this->addSpecialDesignation(new FHIRMedicinalProductSpecialDesignation($data[self::FIELD_SPECIAL_DESIGNATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
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
    public function getIdentifier(): null|array
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
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
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
    public function getType(): null|FHIRCodeableConcept
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
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
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
    public function getDomain(): null|FHIRCoding
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
    public function setDomain(null|FHIRCoding $domain = null): self
    {
        if (null === $domain) {
            $domain = new FHIRCoding();
        }
        $this->_trackValueSet($this->domain, $domain);
        $this->domain = $domain;
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
    public function getCombinedPharmaceuticalDoseForm(): null|FHIRCodeableConcept
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
    public function setCombinedPharmaceuticalDoseForm(null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null): self
    {
        if (null === $combinedPharmaceuticalDoseForm) {
            $combinedPharmaceuticalDoseForm = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->combinedPharmaceuticalDoseForm, $combinedPharmaceuticalDoseForm);
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
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
    public function getLegalStatusOfSupply(): null|FHIRCodeableConcept
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
    public function setLegalStatusOfSupply(null|FHIRCodeableConcept $legalStatusOfSupply = null): self
    {
        if (null === $legalStatusOfSupply) {
            $legalStatusOfSupply = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->legalStatusOfSupply, $legalStatusOfSupply);
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
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
    public function getAdditionalMonitoringIndicator(): null|FHIRCodeableConcept
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
    public function setAdditionalMonitoringIndicator(null|FHIRCodeableConcept $additionalMonitoringIndicator = null): self
    {
        if (null === $additionalMonitoringIndicator) {
            $additionalMonitoringIndicator = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->additionalMonitoringIndicator, $additionalMonitoringIndicator);
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
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
    public function getSpecialMeasures(): null|array
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $specialMeasures
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSpecialMeasures(null|string|FHIRStringPrimitive|FHIRString $specialMeasures = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $specialMeasures && !($specialMeasures instanceof FHIRString)) {
            $specialMeasures = new FHIRString($specialMeasures);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES])) {
            $this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES][] = $xmlLocation;
        $this->specialMeasures[] = $specialMeasures;
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
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSpecialMeasures(array $specialMeasures = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES]);
        if ([] !== $this->specialMeasures) {
            $this->_trackValuesRemoved(count($this->specialMeasures));
            $this->specialMeasures = [];
        }
        if ([] === $specialMeasures) {
            return $this;
        }
        foreach($specialMeasures as $v) {
            if ($v instanceof FHIRString) {
                $this->addSpecialMeasures($v, $xmlLocation);
            } else {
                $this->addSpecialMeasures(new FHIRString($v), $xmlLocation);
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
    public function getPaediatricUseIndicator(): null|FHIRCodeableConcept
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
    public function setPaediatricUseIndicator(null|FHIRCodeableConcept $paediatricUseIndicator = null): self
    {
        if (null === $paediatricUseIndicator) {
            $paediatricUseIndicator = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->paediatricUseIndicator, $paediatricUseIndicator);
        $this->paediatricUseIndicator = $paediatricUseIndicator;
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
    public function getProductClassification(): null|array
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
    public function addProductClassification(null|FHIRCodeableConcept $productClassification = null): self
    {
        if (null === $productClassification) {
            $productClassification = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->productClassification[] = $productClassification;
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
    public function getMarketingStatus(): null|array
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
    public function addMarketingStatus(null|FHIRMarketingStatus $marketingStatus = null): self
    {
        if (null === $marketingStatus) {
            $marketingStatus = new FHIRMarketingStatus();
        }
        $this->_trackValueAdded();
        $this->marketingStatus[] = $marketingStatus;
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
    public function getPharmaceuticalProduct(): null|array
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
    public function addPharmaceuticalProduct(null|FHIRReference $pharmaceuticalProduct = null): self
    {
        if (null === $pharmaceuticalProduct) {
            $pharmaceuticalProduct = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
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
    public function getPackagedMedicinalProduct(): null|array
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
    public function addPackagedMedicinalProduct(null|FHIRReference $packagedMedicinalProduct = null): self
    {
        if (null === $packagedMedicinalProduct) {
            $packagedMedicinalProduct = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
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
    public function getAttachedDocument(): null|array
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
    public function addAttachedDocument(null|FHIRReference $attachedDocument = null): self
    {
        if (null === $attachedDocument) {
            $attachedDocument = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->attachedDocument[] = $attachedDocument;
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
    public function getMasterFile(): null|array
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
    public function addMasterFile(null|FHIRReference $masterFile = null): self
    {
        if (null === $masterFile) {
            $masterFile = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->masterFile[] = $masterFile;
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
    public function getContact(): null|array
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
    public function addContact(null|FHIRReference $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
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
    public function getClinicalTrial(): null|array
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
    public function addClinicalTrial(null|FHIRReference $clinicalTrial = null): self
    {
        if (null === $clinicalTrial) {
            $clinicalTrial = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->clinicalTrial[] = $clinicalTrial;
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
    public function getName(): null|array
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
    public function addName(null|FHIRMedicinalProductName $name = null): self
    {
        if (null === $name) {
            $name = new FHIRMedicinalProductName();
        }
        $this->_trackValueAdded();
        $this->name[] = $name;
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
    public function getCrossReference(): null|array
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
    public function addCrossReference(null|FHIRIdentifier $crossReference = null): self
    {
        if (null === $crossReference) {
            $crossReference = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->crossReference[] = $crossReference;
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
    public function getManufacturingBusinessOperation(): null|array
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
    public function addManufacturingBusinessOperation(null|FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation = null): self
    {
        if (null === $manufacturingBusinessOperation) {
            $manufacturingBusinessOperation = new FHIRMedicinalProductManufacturingBusinessOperation();
        }
        $this->_trackValueAdded();
        $this->manufacturingBusinessOperation[] = $manufacturingBusinessOperation;
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
    public function getSpecialDesignation(): null|array
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
    public function addSpecialDesignation(null|FHIRMedicinalProductSpecialDesignation $specialDesignation = null): self
    {
        if (null === $specialDesignation) {
            $specialDesignation = new FHIRMedicinalProductSpecialDesignation();
        }
        $this->_trackValueAdded();
        $this->specialDesignation[] = $specialDesignation;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_MEASURES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAEDIATRIC_USE_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCT_CLASSIFICATION, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PHARMACEUTICAL_PRODUCT, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ATTACHED_DOCUMENT, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURING_BUSINESS_OPERATION, $i)] = $fieldErrs;
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
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRMedicinalProduct)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOMAIN === $childName) {
                $type->setDomain(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM === $childName) {
                $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LEGAL_STATUS_OF_SUPPLY === $childName) {
                $type->setLegalStatusOfSupply(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDITIONAL_MONITORING_INDICATOR === $childName) {
                $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIAL_MEASURES === $childName) {
                $type->addSpecialMeasures(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PAEDIATRIC_USE_INDICATOR === $childName) {
                $type->setPaediatricUseIndicator(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRODUCT_CLASSIFICATION === $childName) {
                $type->addProductClassification(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MARKETING_STATUS === $childName) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PHARMACEUTICAL_PRODUCT === $childName) {
                $type->addPharmaceuticalProduct(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PACKAGED_MEDICINAL_PRODUCT === $childName) {
                $type->addPackagedMedicinalProduct(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ATTACHED_DOCUMENT === $childName) {
                $type->addAttachedDocument(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MASTER_FILE === $childName) {
                $type->addMasterFile(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLINICAL_TRIAL === $childName) {
                $type->addClinicalTrial(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NAME === $childName) {
                $type->addName(FHIRMedicinalProductName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CROSS_REFERENCE === $childName) {
                $type->addCrossReference(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MANUFACTURING_BUSINESS_OPERATION === $childName) {
                $type->addManufacturingBusinessOperation(FHIRMedicinalProductManufacturingBusinessOperation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIAL_DESIGNATION === $childName) {
                $type->addSpecialDesignation(FHIRMedicinalProductSpecialDesignation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SPECIAL_MEASURES])) {
            $type->addSpecialMeasures((string)$attributes[self::FIELD_SPECIAL_MEASURES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'MedicinalProduct', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSpecialMeasures())) {
            $xw->writeAttribute(self::FIELD_SPECIAL_MEASURES, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSpecialMeasures()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SPECIAL_MEASURES, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDomain())) {
            $xw->startElement(self::FIELD_DOMAIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $xw->startElement(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $xw->startElement(self::FIELD_LEGAL_STATUS_OF_SUPPLY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $xw->startElement(self::FIELD_ADDITIONAL_MONITORING_INDICATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SPECIAL_MEASURES] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SPECIAL_MEASURES);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $xw->startElement(self::FIELD_PAEDIATRIC_USE_INDICATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProductClassification() as $v) {
            $xw->startElement(self::FIELD_PRODUCT_CLASSIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMarketingStatus() as $v) {
            $xw->startElement(self::FIELD_MARKETING_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPharmaceuticalProduct() as $v) {
            $xw->startElement(self::FIELD_PHARMACEUTICAL_PRODUCT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPackagedMedicinalProduct() as $v) {
            $xw->startElement(self::FIELD_PACKAGED_MEDICINAL_PRODUCT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAttachedDocument() as $v) {
            $xw->startElement(self::FIELD_ATTACHED_DOCUMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMasterFile() as $v) {
            $xw->startElement(self::FIELD_MASTER_FILE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContact() as $v) {
            $xw->startElement(self::FIELD_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClinicalTrial() as $v) {
            $xw->startElement(self::FIELD_CLINICAL_TRIAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getName() as $v) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCrossReference() as $v) {
            $xw->startElement(self::FIELD_CROSS_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getManufacturingBusinessOperation() as $v) {
            $xw->startElement(self::FIELD_MANUFACTURING_BUSINESS_OPERATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpecialDesignation() as $v) {
            $xw->startElement(self::FIELD_SPECIAL_DESIGNATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getDomain())) {
            $out->{self::FIELD_DOMAIN} = $v;
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $out->{self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM} = $v;
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $out->{self::FIELD_LEGAL_STATUS_OF_SUPPLY} = $v;
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $out->{self::FIELD_ADDITIONAL_MONITORING_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SPECIAL_MEASURES} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SPECIAL_MEASURES_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getPaediatricUseIndicator())) {
            $out->{self::FIELD_PAEDIATRIC_USE_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getProductClassification())) {
            $out->{self::FIELD_PRODUCT_CLASSIFICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PRODUCT_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            $out->{self::FIELD_MARKETING_STATUS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MARKETING_STATUS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPharmaceuticalProduct())) {
            $out->{self::FIELD_PHARMACEUTICAL_PRODUCT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PHARMACEUTICAL_PRODUCT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            $out->{self::FIELD_ATTACHED_DOCUMENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ATTACHED_DOCUMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            $out->{self::FIELD_MASTER_FILE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MASTER_FILE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            $out->{self::FIELD_CLINICAL_TRIAL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLINICAL_TRIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $out->{self::FIELD_NAME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NAME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            $out->{self::FIELD_CROSS_REFERENCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CROSS_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getManufacturingBusinessOperation())) {
            $out->{self::FIELD_MANUFACTURING_BUSINESS_OPERATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MANUFACTURING_BUSINESS_OPERATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialDesignation())) {
            $out->{self::FIELD_SPECIAL_DESIGNATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPECIAL_DESIGNATION}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}