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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationKnowledge
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationKnowledge extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE;
    const FIELD_ADMINISTRATION_GUIDELINES = 'administrationGuidelines';
    const FIELD_AMOUNT = 'amount';
    const FIELD_ASSOCIATED_MEDICATION = 'associatedMedication';
    const FIELD_CODE = 'code';
    const FIELD_CONTRAINDICATION = 'contraindication';
    const FIELD_COST = 'cost';
    const FIELD_DOSE_FORM = 'doseForm';
    const FIELD_DRUG_CHARACTERISTIC = 'drugCharacteristic';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_INTENDED_ROUTE = 'intendedRoute';
    const FIELD_KINETICS = 'kinetics';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_MEDICINE_CLASSIFICATION = 'medicineClassification';
    const FIELD_MONITORING_PROGRAM = 'monitoringProgram';
    const FIELD_MONOGRAPH = 'monograph';
    const FIELD_PACKAGING = 'packaging';
    const FIELD_PREPARATION_INSTRUCTION = 'preparationInstruction';
    const FIELD_PREPARATION_INSTRUCTION_EXT = '_preparationInstruction';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_REGULATORY = 'regulatory';
    const FIELD_RELATED_MEDICATION_KNOWLEDGE = 'relatedMedicationKnowledge';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SYNONYM = 'synonym';
    const FIELD_SYNONYM_EXT = '_synonym';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[]
     */
    protected $administrationGuidelines = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific amount of the drug in the packaged product. For example, when
     * specifying a product that has the same strength (For example, Insulin glargine
     * 100 unit per mL solution for injection), this attribute provides additional
     * clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $amount = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $associatedMedication = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $contraindication = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    protected $cost = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $doseForm = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[]
     */
    protected $drugCharacteristic = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[]
     */
    protected $ingredient = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $intendedRoute = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[]
     */
    protected $kinetics = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $manufacturer = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    protected $medicineClassification = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    protected $monitoringProgram = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    protected $monograph = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    protected $packaging = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The instructions for preparing the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $preparationInstruction = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $productType = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    protected $regulatory = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    protected $relatedMedicationKnowledge = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code to indicate if the medication is in active use. The status refers to the
     * validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $synonym = [];

    /**
     * Validation map for fields in type MedicationKnowledge
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationKnowledge Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledge::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADMINISTRATION_GUIDELINES])) {
            if (is_array($data[self::FIELD_ADMINISTRATION_GUIDELINES])) {
                foreach($data[self::FIELD_ADMINISTRATION_GUIDELINES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeAdministrationGuidelines) {
                        $this->addAdministrationGuidelines($v);
                    } else {
                        $this->addAdministrationGuidelines(new FHIRMedicationKnowledgeAdministrationGuidelines($v));
                    }
                }
            } else if ($data[self::FIELD_ADMINISTRATION_GUIDELINES] instanceof FHIRMedicationKnowledgeAdministrationGuidelines) {
                $this->addAdministrationGuidelines($data[self::FIELD_ADMINISTRATION_GUIDELINES]);
            } else {
                $this->addAdministrationGuidelines(new FHIRMedicationKnowledgeAdministrationGuidelines($data[self::FIELD_ADMINISTRATION_GUIDELINES]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT])) {
            if ($data[self::FIELD_AMOUNT] instanceof FHIRQuantity) {
                $this->setAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->setAmount(new FHIRQuantity($data[self::FIELD_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_ASSOCIATED_MEDICATION])) {
            if (is_array($data[self::FIELD_ASSOCIATED_MEDICATION])) {
                foreach($data[self::FIELD_ASSOCIATED_MEDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAssociatedMedication($v);
                    } else {
                        $this->addAssociatedMedication(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ASSOCIATED_MEDICATION] instanceof FHIRReference) {
                $this->addAssociatedMedication($data[self::FIELD_ASSOCIATED_MEDICATION]);
            } else {
                $this->addAssociatedMedication(new FHIRReference($data[self::FIELD_ASSOCIATED_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONTRAINDICATION])) {
            if (is_array($data[self::FIELD_CONTRAINDICATION])) {
                foreach($data[self::FIELD_CONTRAINDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addContraindication($v);
                    } else {
                        $this->addContraindication(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRAINDICATION] instanceof FHIRReference) {
                $this->addContraindication($data[self::FIELD_CONTRAINDICATION]);
            } else {
                $this->addContraindication(new FHIRReference($data[self::FIELD_CONTRAINDICATION]));
            }
        }
        if (isset($data[self::FIELD_COST])) {
            if (is_array($data[self::FIELD_COST])) {
                foreach($data[self::FIELD_COST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeCost) {
                        $this->addCost($v);
                    } else {
                        $this->addCost(new FHIRMedicationKnowledgeCost($v));
                    }
                }
            } else if ($data[self::FIELD_COST] instanceof FHIRMedicationKnowledgeCost) {
                $this->addCost($data[self::FIELD_COST]);
            } else {
                $this->addCost(new FHIRMedicationKnowledgeCost($data[self::FIELD_COST]));
            }
        }
        if (isset($data[self::FIELD_DOSE_FORM])) {
            if ($data[self::FIELD_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setDoseForm($data[self::FIELD_DOSE_FORM]);
            } else {
                $this->setDoseForm(new FHIRCodeableConcept($data[self::FIELD_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_DRUG_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_DRUG_CHARACTERISTIC])) {
                foreach($data[self::FIELD_DRUG_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeDrugCharacteristic) {
                        $this->addDrugCharacteristic($v);
                    } else {
                        $this->addDrugCharacteristic(new FHIRMedicationKnowledgeDrugCharacteristic($v));
                    }
                }
            } else if ($data[self::FIELD_DRUG_CHARACTERISTIC] instanceof FHIRMedicationKnowledgeDrugCharacteristic) {
                $this->addDrugCharacteristic($data[self::FIELD_DRUG_CHARACTERISTIC]);
            } else {
                $this->addDrugCharacteristic(new FHIRMedicationKnowledgeDrugCharacteristic($data[self::FIELD_DRUG_CHARACTERISTIC]));
            }
        }
        if (isset($data[self::FIELD_INGREDIENT])) {
            if (is_array($data[self::FIELD_INGREDIENT])) {
                foreach($data[self::FIELD_INGREDIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeIngredient) {
                        $this->addIngredient($v);
                    } else {
                        $this->addIngredient(new FHIRMedicationKnowledgeIngredient($v));
                    }
                }
            } else if ($data[self::FIELD_INGREDIENT] instanceof FHIRMedicationKnowledgeIngredient) {
                $this->addIngredient($data[self::FIELD_INGREDIENT]);
            } else {
                $this->addIngredient(new FHIRMedicationKnowledgeIngredient($data[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_ROUTE])) {
            if (is_array($data[self::FIELD_INTENDED_ROUTE])) {
                foreach($data[self::FIELD_INTENDED_ROUTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIntendedRoute($v);
                    } else {
                        $this->addIntendedRoute(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_INTENDED_ROUTE] instanceof FHIRCodeableConcept) {
                $this->addIntendedRoute($data[self::FIELD_INTENDED_ROUTE]);
            } else {
                $this->addIntendedRoute(new FHIRCodeableConcept($data[self::FIELD_INTENDED_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_KINETICS])) {
            if (is_array($data[self::FIELD_KINETICS])) {
                foreach($data[self::FIELD_KINETICS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeKinetics) {
                        $this->addKinetics($v);
                    } else {
                        $this->addKinetics(new FHIRMedicationKnowledgeKinetics($v));
                    }
                }
            } else if ($data[self::FIELD_KINETICS] instanceof FHIRMedicationKnowledgeKinetics) {
                $this->addKinetics($data[self::FIELD_KINETICS]);
            } else {
                $this->addKinetics(new FHIRMedicationKnowledgeKinetics($data[self::FIELD_KINETICS]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_MEDICINE_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_MEDICINE_CLASSIFICATION])) {
                foreach($data[self::FIELD_MEDICINE_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMedicineClassification) {
                        $this->addMedicineClassification($v);
                    } else {
                        $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($v));
                    }
                }
            } else if ($data[self::FIELD_MEDICINE_CLASSIFICATION] instanceof FHIRMedicationKnowledgeMedicineClassification) {
                $this->addMedicineClassification($data[self::FIELD_MEDICINE_CLASSIFICATION]);
            } else {
                $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($data[self::FIELD_MEDICINE_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_MONITORING_PROGRAM])) {
            if (is_array($data[self::FIELD_MONITORING_PROGRAM])) {
                foreach($data[self::FIELD_MONITORING_PROGRAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                        $this->addMonitoringProgram($v);
                    } else {
                        $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($v));
                    }
                }
            } else if ($data[self::FIELD_MONITORING_PROGRAM] instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                $this->addMonitoringProgram($data[self::FIELD_MONITORING_PROGRAM]);
            } else {
                $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($data[self::FIELD_MONITORING_PROGRAM]));
            }
        }
        if (isset($data[self::FIELD_MONOGRAPH])) {
            if (is_array($data[self::FIELD_MONOGRAPH])) {
                foreach($data[self::FIELD_MONOGRAPH] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeMonograph) {
                        $this->addMonograph($v);
                    } else {
                        $this->addMonograph(new FHIRMedicationKnowledgeMonograph($v));
                    }
                }
            } else if ($data[self::FIELD_MONOGRAPH] instanceof FHIRMedicationKnowledgeMonograph) {
                $this->addMonograph($data[self::FIELD_MONOGRAPH]);
            } else {
                $this->addMonograph(new FHIRMedicationKnowledgeMonograph($data[self::FIELD_MONOGRAPH]));
            }
        }
        if (isset($data[self::FIELD_PACKAGING])) {
            if ($data[self::FIELD_PACKAGING] instanceof FHIRMedicationKnowledgePackaging) {
                $this->setPackaging($data[self::FIELD_PACKAGING]);
            } else {
                $this->setPackaging(new FHIRMedicationKnowledgePackaging($data[self::FIELD_PACKAGING]));
            }
        }
        if (isset($data[self::FIELD_PREPARATION_INSTRUCTION]) || isset($data[self::FIELD_PREPARATION_INSTRUCTION_EXT])) {
            if (isset($data[self::FIELD_PREPARATION_INSTRUCTION])) {
                $value = $data[self::FIELD_PREPARATION_INSTRUCTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PREPARATION_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PREPARATION_INSTRUCTION_EXT])) {
                $ext = $data[self::FIELD_PREPARATION_INSTRUCTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPreparationInstruction($value);
                } else if (is_array($value)) {
                    $this->setPreparationInstruction(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPreparationInstruction(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPreparationInstruction(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_TYPE])) {
            if (is_array($data[self::FIELD_PRODUCT_TYPE])) {
                foreach($data[self::FIELD_PRODUCT_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProductType($v);
                    } else {
                        $this->addProductType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PRODUCT_TYPE] instanceof FHIRCodeableConcept) {
                $this->addProductType($data[self::FIELD_PRODUCT_TYPE]);
            } else {
                $this->addProductType(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_REGULATORY])) {
            if (is_array($data[self::FIELD_REGULATORY])) {
                foreach($data[self::FIELD_REGULATORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeRegulatory) {
                        $this->addRegulatory($v);
                    } else {
                        $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($v));
                    }
                }
            } else if ($data[self::FIELD_REGULATORY] instanceof FHIRMedicationKnowledgeRegulatory) {
                $this->addRegulatory($data[self::FIELD_REGULATORY]);
            } else {
                $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($data[self::FIELD_REGULATORY]));
            }
        }
        if (isset($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
            if (is_array($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
                foreach($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                        $this->addRelatedMedicationKnowledge($v);
                    } else {
                        $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                $this->addRelatedMedicationKnowledge($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE]);
            } else {
                $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($data[self::FIELD_RELATED_MEDICATION_KNOWLEDGE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_SYNONYM]) || isset($data[self::FIELD_SYNONYM_EXT])) {
            if (isset($data[self::FIELD_SYNONYM])) {
                $value = $data[self::FIELD_SYNONYM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SYNONYM_EXT]) && is_array($data[self::FIELD_SYNONYM_EXT])) {
                $ext = $data[self::FIELD_SYNONYM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSynonym($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSynonym($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSynonym(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSynonym(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSynonym(new FHIRString($iext));
                }
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
        return "<MedicationKnowledge{$xmlns}></MedicationKnowledge>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[]
     */
    public function getAdministrationGuidelines()
    {
        return $this->administrationGuidelines;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines
     * @return static
     */
    public function addAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines = null)
    {
        $this->administrationGuidelines[] = $administrationGuidelines;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[] $administrationGuidelines
     * @return static
     */
    public function setAdministrationGuidelines(array $administrationGuidelines = [])
    {
        $this->administrationGuidelines = [];
        if ([] === $administrationGuidelines) {
            return $this;
        }
        foreach($administrationGuidelines as $v) {
            if ($v instanceof FHIRMedicationKnowledgeAdministrationGuidelines) {
                $this->addAdministrationGuidelines($v);
            } else {
                $this->addAdministrationGuidelines(new FHIRMedicationKnowledgeAdministrationGuidelines($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific amount of the drug in the packaged product. For example, when
     * specifying a product that has the same strength (For example, Insulin glargine
     * 100 unit per mL solution for injection), this attribute provides additional
     * clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific amount of the drug in the packaged product. For example, when
     * specifying a product that has the same strength (For example, Insulin glargine
     * 100 unit per mL solution for injection), this attribute provides additional
     * clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $amount
     * @return static
     */
    public function setAmount(FHIRQuantity $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAssociatedMedication()
    {
        return $this->associatedMedication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $associatedMedication
     * @return static
     */
    public function addAssociatedMedication(FHIRReference $associatedMedication = null)
    {
        $this->associatedMedication[] = $associatedMedication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $associatedMedication
     * @return static
     */
    public function setAssociatedMedication(array $associatedMedication = [])
    {
        $this->associatedMedication = [];
        if ([] === $associatedMedication) {
            return $this;
        }
        foreach($associatedMedication as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAssociatedMedication($v);
            } else {
                $this->addAssociatedMedication(new FHIRReference($v));
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
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that specifies this medication, or a textual description if no code is
     * available. Usage note: This could be a standard medication code such as a code
     * from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary
     * code, optionally with translations to other code systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $contraindication
     * @return static
     */
    public function addContraindication(FHIRReference $contraindication = null)
    {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $contraindication
     * @return static
     */
    public function setContraindication(array $contraindication = [])
    {
        $this->contraindication = [];
        if ([] === $contraindication) {
            return $this;
        }
        foreach($contraindication as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContraindication($v);
            } else {
                $this->addContraindication(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $cost
     * @return static
     */
    public function addCost(FHIRMedicationKnowledgeCost $cost = null)
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] $cost
     * @return static
     */
    public function setCost(array $cost = [])
    {
        $this->cost = [];
        if ([] === $cost) {
            return $this;
        }
        foreach($cost as $v) {
            if ($v instanceof FHIRMedicationKnowledgeCost) {
                $this->addCost($v);
            } else {
                $this->addCost(new FHIRMedicationKnowledgeCost($v));
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
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseForm()
    {
        return $this->doseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $doseForm
     * @return static
     */
    public function setDoseForm(FHIRCodeableConcept $doseForm = null)
    {
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[]
     */
    public function getDrugCharacteristic()
    {
        return $this->drugCharacteristic;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic
     * @return static
     */
    public function addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic = null)
    {
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[] $drugCharacteristic
     * @return static
     */
    public function setDrugCharacteristic(array $drugCharacteristic = [])
    {
        $this->drugCharacteristic = [];
        if ([] === $drugCharacteristic) {
            return $this;
        }
        foreach($drugCharacteristic as $v) {
            if ($v instanceof FHIRMedicationKnowledgeDrugCharacteristic) {
                $this->addDrugCharacteristic($v);
            } else {
                $this->addDrugCharacteristic(new FHIRMedicationKnowledgeDrugCharacteristic($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $ingredient
     * @return static
     */
    public function addIngredient(FHIRMedicationKnowledgeIngredient $ingredient = null)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[] $ingredient
     * @return static
     */
    public function setIngredient(array $ingredient = [])
    {
        $this->ingredient = [];
        if ([] === $ingredient) {
            return $this;
        }
        foreach($ingredient as $v) {
            if ($v instanceof FHIRMedicationKnowledgeIngredient) {
                $this->addIngredient($v);
            } else {
                $this->addIngredient(new FHIRMedicationKnowledgeIngredient($v));
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
     * The intended or approved route of administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIntendedRoute()
    {
        return $this->intendedRoute;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $intendedRoute
     * @return static
     */
    public function addIntendedRoute(FHIRCodeableConcept $intendedRoute = null)
    {
        $this->intendedRoute[] = $intendedRoute;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $intendedRoute
     * @return static
     */
    public function setIntendedRoute(array $intendedRoute = [])
    {
        $this->intendedRoute = [];
        if ([] === $intendedRoute) {
            return $this;
        }
        foreach($intendedRoute as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIntendedRoute($v);
            } else {
                $this->addIntendedRoute(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[]
     */
    public function getKinetics()
    {
        return $this->kinetics;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics $kinetics
     * @return static
     */
    public function addKinetics(FHIRMedicationKnowledgeKinetics $kinetics = null)
    {
        $this->kinetics[] = $kinetics;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[] $kinetics
     * @return static
     */
    public function setKinetics(array $kinetics = [])
    {
        $this->kinetics = [];
        if ([] === $kinetics) {
            return $this;
        }
        foreach($kinetics as $v) {
            if ($v instanceof FHIRMedicationKnowledgeKinetics) {
                $this->addKinetics($v);
            } else {
                $this->addKinetics(new FHIRMedicationKnowledgeKinetics($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public function getMedicineClassification()
    {
        return $this->medicineClassification;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $medicineClassification
     * @return static
     */
    public function addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification $medicineClassification = null)
    {
        $this->medicineClassification[] = $medicineClassification;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] $medicineClassification
     * @return static
     */
    public function setMedicineClassification(array $medicineClassification = [])
    {
        $this->medicineClassification = [];
        if ([] === $medicineClassification) {
            return $this;
        }
        foreach($medicineClassification as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMedicineClassification) {
                $this->addMedicineClassification($v);
            } else {
                $this->addMedicineClassification(new FHIRMedicationKnowledgeMedicineClassification($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public function getMonitoringProgram()
    {
        return $this->monitoringProgram;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram
     * @return static
     */
    public function addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram = null)
    {
        $this->monitoringProgram[] = $monitoringProgram;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] $monitoringProgram
     * @return static
     */
    public function setMonitoringProgram(array $monitoringProgram = [])
    {
        $this->monitoringProgram = [];
        if ([] === $monitoringProgram) {
            return $this;
        }
        foreach($monitoringProgram as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMonitoringProgram) {
                $this->addMonitoringProgram($v);
            } else {
                $this->addMonitoringProgram(new FHIRMedicationKnowledgeMonitoringProgram($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public function getMonograph()
    {
        return $this->monograph;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph $monograph
     * @return static
     */
    public function addMonograph(FHIRMedicationKnowledgeMonograph $monograph = null)
    {
        $this->monograph[] = $monograph;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] $monograph
     * @return static
     */
    public function setMonograph(array $monograph = [])
    {
        $this->monograph = [];
        if ([] === $monograph) {
            return $this;
        }
        foreach($monograph as $v) {
            if ($v instanceof FHIRMedicationKnowledgeMonograph) {
                $this->addMonograph($v);
            } else {
                $this->addMonograph(new FHIRMedicationKnowledgeMonograph($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @return static
     */
    public function setPackaging(FHIRMedicationKnowledgePackaging $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The instructions for preparing the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getPreparationInstruction()
    {
        return $this->preparationInstruction;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The instructions for preparing the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $preparationInstruction
     * @return static
     */
    public function setPreparationInstruction($preparationInstruction = null)
    {
        if (null === $preparationInstruction) {
            $this->preparationInstruction = null;
            return $this;
        }
        if ($preparationInstruction instanceof FHIRMarkdown) {
            $this->preparationInstruction = $preparationInstruction;
            return $this;
        }
        $this->preparationInstruction = new FHIRMarkdown($preparationInstruction);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productType
     * @return static
     */
    public function addProductType(FHIRCodeableConcept $productType = null)
    {
        $this->productType[] = $productType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $productType
     * @return static
     */
    public function setProductType(array $productType = [])
    {
        $this->productType = [];
        if ([] === $productType) {
            return $this;
        }
        foreach($productType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProductType($v);
            } else {
                $this->addProductType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public function getRegulatory()
    {
        return $this->regulatory;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $regulatory
     * @return static
     */
    public function addRegulatory(FHIRMedicationKnowledgeRegulatory $regulatory = null)
    {
        $this->regulatory[] = $regulatory;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] $regulatory
     * @return static
     */
    public function setRegulatory(array $regulatory = [])
    {
        $this->regulatory = [];
        if ([] === $regulatory) {
            return $this;
        }
        foreach($regulatory as $v) {
            if ($v instanceof FHIRMedicationKnowledgeRegulatory) {
                $this->addRegulatory($v);
            } else {
                $this->addRegulatory(new FHIRMedicationKnowledgeRegulatory($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public function getRelatedMedicationKnowledge()
    {
        return $this->relatedMedicationKnowledge;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge
     * @return static
     */
    public function addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge = null)
    {
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] $relatedMedicationKnowledge
     * @return static
     */
    public function setRelatedMedicationKnowledge(array $relatedMedicationKnowledge = [])
    {
        $this->relatedMedicationKnowledge = [];
        if ([] === $relatedMedicationKnowledge) {
            return $this;
        }
        foreach($relatedMedicationKnowledge as $v) {
            if ($v instanceof FHIRMedicationKnowledgeRelatedMedicationKnowledge) {
                $this->addRelatedMedicationKnowledge($v);
            } else {
                $this->addRelatedMedicationKnowledge(new FHIRMedicationKnowledgeRelatedMedicationKnowledge($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code to indicate if the medication is in active use. The status refers to the
     * validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code to indicate if the medication is in active use. The status refers to the
     * validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $status
     * @return static
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $synonym
     * @return static
     */
    public function addSynonym($synonym = null)
    {
        if (null === $synonym) {
            $this->synonym = [];
            return $this;
        }
        if ($synonym instanceof FHIRString) {
            $this->synonym[] = $synonym;
            return $this;
        }
        $this->synonym[] = new FHIRString($synonym);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $synonym
     * @return static
     */
    public function setSynonym(array $synonym = [])
    {
        $this->synonym = [];
        if ([] === $synonym) {
            return $this;
        }
        foreach($synonym as $v) {
            if ($v instanceof FHIRString) {
                $this->addSynonym($v);
            } else {
                $this->addSynonym(new FHIRString($v));
            }
        }
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
        if ([] !== ($vs = $this->getAdministrationGuidelines())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADMINISTRATION_GUIDELINES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSOCIATED_MEDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContraindication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRAINDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCost())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDrugCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DRUG_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INGREDIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIntendedRoute())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INTENDED_ROUTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getKinetics())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_KINETICS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MEDICINE_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONITORING_PROGRAM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONOGRAPH, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPackaging())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PACKAGING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREPARATION_INSTRUCTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProductType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCT_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGULATORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SYNONYM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION_GUIDELINES])) {
            $v = $this->getAdministrationGuidelines();
            foreach($validationRules[self::FIELD_ADMINISTRATION_GUIDELINES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_ADMINISTRATION_GUIDELINES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION_GUIDELINES])) {
                        $errs[self::FIELD_ADMINISTRATION_GUIDELINES] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION_GUIDELINES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSOCIATED_MEDICATION])) {
            $v = $this->getAssociatedMedication();
            foreach($validationRules[self::FIELD_ASSOCIATED_MEDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_ASSOCIATED_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSOCIATED_MEDICATION])) {
                        $errs[self::FIELD_ASSOCIATED_MEDICATION] = [];
                    }
                    $errs[self::FIELD_ASSOCIATED_MEDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRAINDICATION])) {
            $v = $this->getContraindication();
            foreach($validationRules[self::FIELD_CONTRAINDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_CONTRAINDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRAINDICATION])) {
                        $errs[self::FIELD_CONTRAINDICATION] = [];
                    }
                    $errs[self::FIELD_CONTRAINDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST])) {
            $v = $this->getCost();
            foreach($validationRules[self::FIELD_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST])) {
                        $errs[self::FIELD_COST] = [];
                    }
                    $errs[self::FIELD_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_FORM])) {
            $v = $this->getDoseForm();
            foreach($validationRules[self::FIELD_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_FORM])) {
                        $errs[self::FIELD_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DRUG_CHARACTERISTIC])) {
            $v = $this->getDrugCharacteristic();
            foreach($validationRules[self::FIELD_DRUG_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_DRUG_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DRUG_CHARACTERISTIC])) {
                        $errs[self::FIELD_DRUG_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_DRUG_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_ROUTE])) {
            $v = $this->getIntendedRoute();
            foreach($validationRules[self::FIELD_INTENDED_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_INTENDED_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_ROUTE])) {
                        $errs[self::FIELD_INTENDED_ROUTE] = [];
                    }
                    $errs[self::FIELD_INTENDED_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KINETICS])) {
            $v = $this->getKinetics();
            foreach($validationRules[self::FIELD_KINETICS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_KINETICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KINETICS])) {
                        $errs[self::FIELD_KINETICS] = [];
                    }
                    $errs[self::FIELD_KINETICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICINE_CLASSIFICATION])) {
            $v = $this->getMedicineClassification();
            foreach($validationRules[self::FIELD_MEDICINE_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MEDICINE_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICINE_CLASSIFICATION])) {
                        $errs[self::FIELD_MEDICINE_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_MEDICINE_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONITORING_PROGRAM])) {
            $v = $this->getMonitoringProgram();
            foreach($validationRules[self::FIELD_MONITORING_PROGRAM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MONITORING_PROGRAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONITORING_PROGRAM])) {
                        $errs[self::FIELD_MONITORING_PROGRAM] = [];
                    }
                    $errs[self::FIELD_MONITORING_PROGRAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONOGRAPH])) {
            $v = $this->getMonograph();
            foreach($validationRules[self::FIELD_MONOGRAPH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_MONOGRAPH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONOGRAPH])) {
                        $errs[self::FIELD_MONOGRAPH] = [];
                    }
                    $errs[self::FIELD_MONOGRAPH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGING])) {
            $v = $this->getPackaging();
            foreach($validationRules[self::FIELD_PACKAGING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PACKAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGING])) {
                        $errs[self::FIELD_PACKAGING] = [];
                    }
                    $errs[self::FIELD_PACKAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREPARATION_INSTRUCTION])) {
            $v = $this->getPreparationInstruction();
            foreach($validationRules[self::FIELD_PREPARATION_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PREPARATION_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREPARATION_INSTRUCTION])) {
                        $errs[self::FIELD_PREPARATION_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PREPARATION_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_TYPE])) {
            $v = $this->getProductType();
            foreach($validationRules[self::FIELD_PRODUCT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_PRODUCT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_TYPE])) {
                        $errs[self::FIELD_PRODUCT_TYPE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY])) {
            $v = $this->getRegulatory();
            foreach($validationRules[self::FIELD_REGULATORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_REGULATORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY])) {
                        $errs[self::FIELD_REGULATORY] = [];
                    }
                    $errs[self::FIELD_REGULATORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
            $v = $this->getRelatedMedicationKnowledge();
            foreach($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
                        $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] = [];
                    }
                    $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYNONYM])) {
            $v = $this->getSynonym();
            foreach($validationRules[self::FIELD_SYNONYM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE, self::FIELD_SYNONYM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYNONYM])) {
                        $errs[self::FIELD_SYNONYM] = [];
                    }
                    $errs[self::FIELD_SYNONYM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledge::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledge::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationKnowledge;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledge)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledge::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge or null, %s seen.',
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
        if (isset($children->administrationGuidelines)) {
            foreach($children->administrationGuidelines as $child) {
                $type->addAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize($child));
            }
        }
        if (isset($children->amount)) {
            $type->setAmount(FHIRQuantity::xmlUnserialize($children->amount));
        }
        if (isset($children->associatedMedication)) {
            foreach($children->associatedMedication as $child) {
                $type->addAssociatedMedication(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->contraindication)) {
            foreach($children->contraindication as $child) {
                $type->addContraindication(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->cost)) {
            foreach($children->cost as $child) {
                $type->addCost(FHIRMedicationKnowledgeCost::xmlUnserialize($child));
            }
        }
        if (isset($children->doseForm)) {
            $type->setDoseForm(FHIRCodeableConcept::xmlUnserialize($children->doseForm));
        }
        if (isset($children->drugCharacteristic)) {
            foreach($children->drugCharacteristic as $child) {
                $type->addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic::xmlUnserialize($child));
            }
        }
        if (isset($children->ingredient)) {
            foreach($children->ingredient as $child) {
                $type->addIngredient(FHIRMedicationKnowledgeIngredient::xmlUnserialize($child));
            }
        }
        if (isset($children->intendedRoute)) {
            foreach($children->intendedRoute as $child) {
                $type->addIntendedRoute(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->kinetics)) {
            foreach($children->kinetics as $child) {
                $type->addKinetics(FHIRMedicationKnowledgeKinetics::xmlUnserialize($child));
            }
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRReference::xmlUnserialize($children->manufacturer));
        }
        if (isset($children->medicineClassification)) {
            foreach($children->medicineClassification as $child) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::xmlUnserialize($child));
            }
        }
        if (isset($children->monitoringProgram)) {
            foreach($children->monitoringProgram as $child) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::xmlUnserialize($child));
            }
        }
        if (isset($children->monograph)) {
            foreach($children->monograph as $child) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::xmlUnserialize($child));
            }
        }
        if (isset($children->packaging)) {
            $type->setPackaging(FHIRMedicationKnowledgePackaging::xmlUnserialize($children->packaging));
        }
        if (isset($children->preparationInstruction)) {
            $type->setPreparationInstruction(FHIRMarkdown::xmlUnserialize($children->preparationInstruction));
        }
        if (isset($attributes->preparationInstruction)) {
            $pt = $type->getPreparationInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->preparationInstruction);
            } else {
                $type->setPreparationInstruction((string)$attributes->preparationInstruction);
            }
        }
        if (isset($children->productType)) {
            foreach($children->productType as $child) {
                $type->addProductType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->regulatory)) {
            foreach($children->regulatory as $child) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::xmlUnserialize($child));
            }
        }
        if (isset($children->relatedMedicationKnowledge)) {
            foreach($children->relatedMedicationKnowledge as $child) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($attributes->status)) {
            $pt = $type->getStatus();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->status);
            } else {
                $type->setStatus((string)$attributes->status);
            }
        }
        if (isset($children->synonym)) {
            foreach($children->synonym as $child) {
                $type->addSynonym(FHIRString::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getAdministrationGuidelines())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADMINISTRATION_GUIDELINES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAmount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ASSOCIATED_MEDICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContraindication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRAINDICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCost())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDoseForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_FORM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDrugCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DRUG_CHARACTERISTIC, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INGREDIENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIntendedRoute())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTENDED_ROUTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getKinetics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_KINETICS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICINE_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MONITORING_PROGRAM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MONOGRAPH, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPackaging())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREPARATION_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProductType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_MEDICATION_KNOWLEDGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SYNONYM, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAdministrationGuidelines())) {
            $a[self::FIELD_ADMINISTRATION_GUIDELINES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADMINISTRATION_GUIDELINES][] = $v;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            $a[self::FIELD_AMOUNT] = $v;
        }
        if ([] !== ($vs = $this->getAssociatedMedication())) {
            $a[self::FIELD_ASSOCIATED_MEDICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ASSOCIATED_MEDICATION][] = $v;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if ([] !== ($vs = $this->getContraindication())) {
            $a[self::FIELD_CONTRAINDICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTRAINDICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCost())) {
            $a[self::FIELD_COST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COST][] = $v;
            }
        }
        if (null !== ($v = $this->getDoseForm())) {
            $a[self::FIELD_DOSE_FORM] = $v;
        }
        if ([] !== ($vs = $this->getDrugCharacteristic())) {
            $a[self::FIELD_DRUG_CHARACTERISTIC] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DRUG_CHARACTERISTIC][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            $a[self::FIELD_INGREDIENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INGREDIENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIntendedRoute())) {
            $a[self::FIELD_INTENDED_ROUTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INTENDED_ROUTE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getKinetics())) {
            $a[self::FIELD_KINETICS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_KINETICS][] = $v;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v;
        }
        if ([] !== ($vs = $this->getMedicineClassification())) {
            $a[self::FIELD_MEDICINE_CLASSIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MEDICINE_CLASSIFICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMonitoringProgram())) {
            $a[self::FIELD_MONITORING_PROGRAM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MONITORING_PROGRAM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMonograph())) {
            $a[self::FIELD_MONOGRAPH] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MONOGRAPH][] = $v;
            }
        }
        if (null !== ($v = $this->getPackaging())) {
            $a[self::FIELD_PACKAGING] = $v;
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            $a[self::FIELD_PREPARATION_INSTRUCTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_PREPARATION_INSTRUCTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProductType())) {
            $a[self::FIELD_PRODUCT_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRODUCT_TYPE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRegulatory())) {
            $a[self::FIELD_REGULATORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REGULATORY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedMedicationKnowledge())) {
            $a[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_MEDICATION_KNOWLEDGE][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $a[self::FIELD_SYNONYM] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SYNONYM][] = $v->getValue();
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
                $a[self::FIELD_SYNONYM_EXT] = $encs;
            }
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