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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationKnowledgeStatus;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationKnowledge
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationKnowledge extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicationKnowledge';

    /**
     * Guidelines for the administration of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines
     */
    public $administrationGuidelines = null;

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $amount = null;

    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $associatedMedication = null;

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contraindication = null;

    /**
     * The price of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost
     */
    public $cost = null;

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $doseForm = null;

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic
     */
    public $drugCharacteristic = null;

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient
     */
    public $ingredient = null;

    /**
     * The intended or approved route of administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $intendedRoute = null;

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public $kinetics = null;

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Categorization of the medication within a formulary or classification system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification
     */
    public $medicineClassification = null;

    /**
     * The program under which the medication is reviewed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram
     */
    public $monitoringProgram = null;

    /**
     * Associated documentation about the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph
     */
    public $monograph = null;

    /**
     * Information that only applies to packages (not products).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public $packaging = null;

    /**
     * The instructions for preparing the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $preparationInstruction = null;

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productType = null;

    /**
     * Regulatory information about a medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public $regulatory = null;

    /**
     * Associated or related knowledge about a medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge
     */
    public $relatedMedicationKnowledge = null;

    /**
     * A code to indicate if the medication is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationKnowledgeStatus
     */
    public $status = null;

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $synonym = null;

    /**
     * FHIRMedicationKnowledge Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['administrationGuidelines'])) {
                $this->setAdministrationGuidelines($data['administrationGuidelines']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['associatedMedication'])) {
                $this->setAssociatedMedication($data['associatedMedication']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['contraindication'])) {
                $this->setContraindication($data['contraindication']);
            }
            if (isset($data['cost'])) {
                $this->setCost($data['cost']);
            }
            if (isset($data['doseForm'])) {
                $this->setDoseForm($data['doseForm']);
            }
            if (isset($data['drugCharacteristic'])) {
                $this->setDrugCharacteristic($data['drugCharacteristic']);
            }
            if (isset($data['ingredient'])) {
                $this->setIngredient($data['ingredient']);
            }
            if (isset($data['intendedRoute'])) {
                $this->setIntendedRoute($data['intendedRoute']);
            }
            if (isset($data['kinetics'])) {
                $this->setKinetics($data['kinetics']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['medicineClassification'])) {
                $this->setMedicineClassification($data['medicineClassification']);
            }
            if (isset($data['monitoringProgram'])) {
                $this->setMonitoringProgram($data['monitoringProgram']);
            }
            if (isset($data['monograph'])) {
                $this->setMonograph($data['monograph']);
            }
            if (isset($data['packaging'])) {
                $this->setPackaging($data['packaging']);
            }
            if (isset($data['preparationInstruction'])) {
                $this->setPreparationInstruction($data['preparationInstruction']);
            }
            if (isset($data['productType'])) {
                $this->setProductType($data['productType']);
            }
            if (isset($data['regulatory'])) {
                $this->setRegulatory($data['regulatory']);
            }
            if (isset($data['relatedMedicationKnowledge'])) {
                $this->setRelatedMedicationKnowledge($data['relatedMedicationKnowledge']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['synonym'])) {
                $this->setSynonym($data['synonym']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Guidelines for the administration of the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines
     * @return $this
     */
    public function setAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines = null)
    {
        if (null === $administrationGuidelines) {
            return $this; 
        }
        $this->administrationGuidelines = $administrationGuidelines;
        return $this;
    }

    /**
     * Guidelines for the administration of the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines
     */
    public function getAdministrationGuidelines()
    {
        return $this->administrationGuidelines;
    }


    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setAmount(FHIRQuantity $amount = null)
    {
        if (null === $amount) {
            return $this; 
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAssociatedMedication(FHIRReference $associatedMedication = null)
    {
        if (null === $associatedMedication) {
            return $this; 
        }
        $this->associatedMedication = $associatedMedication;
        return $this;
    }

    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssociatedMedication()
    {
        return $this->associatedMedication;
    }


    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc).
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
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }


    /**
     * The price of the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost
     * @return $this
     */
    public function setCost(FHIRMedicationKnowledgeCost $cost = null)
    {
        if (null === $cost) {
            return $this; 
        }
        $this->cost = $cost;
        return $this;
    }

    /**
     * The price of the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost
     */
    public function getCost()
    {
        return $this->cost;
    }


    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDoseForm(FHIRCodeableConcept $doseForm = null)
    {
        if (null === $doseForm) {
            return $this; 
        }
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseForm()
    {
        return $this->doseForm;
    }


    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic
     * @return $this
     */
    public function setDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic = null)
    {
        if (null === $drugCharacteristic) {
            return $this; 
        }
        $this->drugCharacteristic = $drugCharacteristic;
        return $this;
    }

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic
     */
    public function getDrugCharacteristic()
    {
        return $this->drugCharacteristic;
    }


    /**
     * Identifies a particular constituent of interest in the product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient
     * @return $this
     */
    public function setIngredient(FHIRMedicationKnowledgeIngredient $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }


    /**
     * The intended or approved route of administration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setIntendedRoute(FHIRCodeableConcept $intendedRoute = null)
    {
        if (null === $intendedRoute) {
            return $this; 
        }
        $this->intendedRoute = $intendedRoute;
        return $this;
    }

    /**
     * The intended or approved route of administration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedRoute()
    {
        return $this->intendedRoute;
    }


    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     * @return $this
     */
    public function setKinetics(FHIRMedicationKnowledgeKinetics $kinetics = null)
    {
        if (null === $kinetics) {
            return $this; 
        }
        $this->kinetics = $kinetics;
        return $this;
    }

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function getKinetics()
    {
        return $this->kinetics;
    }


    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * Categorization of the medication within a formulary or classification system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification
     * @return $this
     */
    public function setMedicineClassification(FHIRMedicationKnowledgeMedicineClassification $medicineClassification = null)
    {
        if (null === $medicineClassification) {
            return $this; 
        }
        $this->medicineClassification = $medicineClassification;
        return $this;
    }

    /**
     * Categorization of the medication within a formulary or classification system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification
     */
    public function getMedicineClassification()
    {
        return $this->medicineClassification;
    }


    /**
     * The program under which the medication is reviewed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram
     * @return $this
     */
    public function setMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram = null)
    {
        if (null === $monitoringProgram) {
            return $this; 
        }
        $this->monitoringProgram = $monitoringProgram;
        return $this;
    }

    /**
     * The program under which the medication is reviewed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram
     */
    public function getMonitoringProgram()
    {
        return $this->monitoringProgram;
    }


    /**
     * Associated documentation about the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph
     * @return $this
     */
    public function setMonograph(FHIRMedicationKnowledgeMonograph $monograph = null)
    {
        if (null === $monograph) {
            return $this; 
        }
        $this->monograph = $monograph;
        return $this;
    }

    /**
     * Associated documentation about the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph
     */
    public function getMonograph()
    {
        return $this->monograph;
    }


    /**
     * Information that only applies to packages (not products).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     * @return $this
     */
    public function setPackaging(FHIRMedicationKnowledgePackaging $packaging = null)
    {
        if (null === $packaging) {
            return $this; 
        }
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }


    /**
     * The instructions for preparing the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPreparationInstruction($preparationInstruction)
    {
        if (null === $preparationInstruction) {
            return $this; 
        }
        if (is_scalar($preparationInstruction)) {
            $preparationInstruction = new FHIRMarkdown($preparationInstruction);
        }
        if (!($preparationInstruction instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledge::setPreparationInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($preparationInstruction)
            ));
        }
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * The instructions for preparing the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPreparationInstruction()
    {
        return $this->preparationInstruction;
    }


    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductType(FHIRCodeableConcept $productType = null)
    {
        if (null === $productType) {
            return $this; 
        }
        $this->productType = $productType;
        return $this;
    }

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductType()
    {
        return $this->productType;
    }


    /**
     * Regulatory information about a medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     * @return $this
     */
    public function setRegulatory(FHIRMedicationKnowledgeRegulatory $regulatory = null)
    {
        if (null === $regulatory) {
            return $this; 
        }
        $this->regulatory = $regulatory;
        return $this;
    }

    /**
     * Regulatory information about a medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function getRegulatory()
    {
        return $this->regulatory;
    }


    /**
     * Associated or related knowledge about a medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge
     * @return $this
     */
    public function setRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge = null)
    {
        if (null === $relatedMedicationKnowledge) {
            return $this; 
        }
        $this->relatedMedicationKnowledge = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Associated or related knowledge about a medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge
     */
    public function getRelatedMedicationKnowledge()
    {
        return $this->relatedMedicationKnowledge;
    }


    /**
     * A code to indicate if the medication is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationKnowledgeStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMedicationKnowledgeStatus($status);
        }
        if (!($status instanceof FHIRMedicationKnowledgeStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledge::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationKnowledgeStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code to indicate if the medication is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationKnowledgeStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSynonym($synonym)
    {
        if (null === $synonym) {
            return $this; 
        }
        if (is_scalar($synonym)) {
            $synonym = new FHIRString($synonym);
        }
        if (!($synonym instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledge::setSynonym - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($synonym)
            ));
        }
        $this->synonym = $synonym;
        return $this;
    }

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSynonym()
    {
        return $this->synonym;
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
        if (null !== ($v = $this->getAdministrationGuidelines())) {
            $a['administrationGuidelines'] = $v;
        }
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getAssociatedMedication())) {
            $a['associatedMedication'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContraindication())) {
            $a['contraindication'] = $v;
        }
        if (null !== ($v = $this->getCost())) {
            $a['cost'] = $v;
        }
        if (null !== ($v = $this->getDoseForm())) {
            $a['doseForm'] = $v;
        }
        if (null !== ($v = $this->getDrugCharacteristic())) {
            $a['drugCharacteristic'] = $v;
        }
        if (null !== ($v = $this->getIngredient())) {
            $a['ingredient'] = $v;
        }
        if (null !== ($v = $this->getIntendedRoute())) {
            $a['intendedRoute'] = $v;
        }
        if (null !== ($v = $this->getKinetics())) {
            $a['kinetics'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getMedicineClassification())) {
            $a['medicineClassification'] = $v;
        }
        if (null !== ($v = $this->getMonitoringProgram())) {
            $a['monitoringProgram'] = $v;
        }
        if (null !== ($v = $this->getMonograph())) {
            $a['monograph'] = $v;
        }
        if (null !== ($v = $this->getPackaging())) {
            $a['packaging'] = $v;
        }
        if (null !== ($v = $this->getPreparationInstruction())) {
            $a['preparationInstruction'] = $v;
        }
        if (null !== ($v = $this->getProductType())) {
            $a['productType'] = $v;
        }
        if (null !== ($v = $this->getRegulatory())) {
            $a['regulatory'] = $v;
        }
        if (null !== ($v = $this->getRelatedMedicationKnowledge())) {
            $a['relatedMedicationKnowledge'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSynonym())) {
            $a['synonym'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicationKnowledge xmlns="http://hl7.org/fhir"></MedicationKnowledge>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}