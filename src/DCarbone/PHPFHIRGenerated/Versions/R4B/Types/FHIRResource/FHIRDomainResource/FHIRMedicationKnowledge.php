<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicationKnowledge extends FHIRDomainResource implements VersionContainedTypeInterface
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE;

    /* class_default.php:47 */
    public const FIELD_CODE = 'code';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_DOSE_FORM = 'doseForm';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_SYNONYM = 'synonym';
    public const FIELD_SYNONYM_EXT = '_synonym';
    public const FIELD_RELATED_MEDICATION_KNOWLEDGE = 'relatedMedicationKnowledge';
    public const FIELD_ASSOCIATED_MEDICATION = 'associatedMedication';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_MONOGRAPH = 'monograph';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_PREPARATION_INSTRUCTION = 'preparationInstruction';
    public const FIELD_PREPARATION_INSTRUCTION_EXT = '_preparationInstruction';
    public const FIELD_INTENDED_ROUTE = 'intendedRoute';
    public const FIELD_COST = 'cost';
    public const FIELD_MONITORING_PROGRAM = 'monitoringProgram';
    public const FIELD_ADMINISTRATION_GUIDELINES = 'administrationGuidelines';
    public const FIELD_MEDICINE_CLASSIFICATION = 'medicineClassification';
    public const FIELD_PACKAGING = 'packaging';
    public const FIELD_DRUG_CHARACTERISTIC = 'drugCharacteristic';
    public const FIELD_CONTRAINDICATION = 'contraindication';
    public const FIELD_REGULATORY = 'regulatory';
    public const FIELD_KINETICS = 'kinetics';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREPARATION_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $manufacturer;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $doseForm;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $amount;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] 
     */
    protected array $synonym;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] 
     */
    protected array $relatedMedicationKnowledge;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $associatedMedication;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity,
     * generic product, innovator product, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $productType;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] 
     */
    protected array $monograph;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[] 
     */
    protected array $ingredient;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $preparationInstruction;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $intendedRoute;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] 
     */
    protected array $cost;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] 
     */
    protected array $monitoringProgram;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[] 
     */
    protected array $administrationGuidelines;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] 
     */
    protected array $medicineClassification;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging 
     */
    protected FHIRMedicationKnowledgePackaging $packaging;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[] 
     */
    protected array $drugCharacteristic;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $contraindication;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] 
     */
    protected array $regulatory;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[] 
     */
    protected array $kinetics;

    /* constructor.php:63 */
    /**
     * FHIRMedicationKnowledge Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $doseForm
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $amount
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] $synonym
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] $relatedMedicationKnowledge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $associatedMedication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $productType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] $monograph
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[] $ingredient
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $preparationInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $intendedRoute
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] $cost
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] $monitoringProgram
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[] $administrationGuidelines
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] $medicineClassification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[] $drugCharacteristic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $contraindication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] $regulatory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[] $kinetics
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRStringPrimitive|FHIRString $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRCodePrimitive|FHIRCode $status = null,
                                null|FHIRReference $manufacturer = null,
                                null|FHIRCodeableConcept $doseForm = null,
                                null|FHIRQuantity $amount = null,
                                null|iterable $synonym = null,
                                null|iterable $relatedMedicationKnowledge = null,
                                null|iterable $associatedMedication = null,
                                null|iterable $productType = null,
                                null|iterable $monograph = null,
                                null|iterable $ingredient = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparationInstruction = null,
                                null|iterable $intendedRoute = null,
                                null|iterable $cost = null,
                                null|iterable $monitoringProgram = null,
                                null|iterable $administrationGuidelines = null,
                                null|iterable $medicineClassification = null,
                                null|FHIRMedicationKnowledgePackaging $packaging = null,
                                null|iterable $drugCharacteristic = null,
                                null|iterable $contraindication = null,
                                null|iterable $regulatory = null,
                                null|iterable $kinetics = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer($manufacturer);
        }
        if (null !== $doseForm) {
            $this->setDoseForm($doseForm);
        }
        if (null !== $amount) {
            $this->setAmount($amount);
        }
        if (null !== $synonym) {
            $this->setSynonym(...$synonym);
        }
        if (null !== $relatedMedicationKnowledge) {
            $this->setRelatedMedicationKnowledge(...$relatedMedicationKnowledge);
        }
        if (null !== $associatedMedication) {
            $this->setAssociatedMedication(...$associatedMedication);
        }
        if (null !== $productType) {
            $this->setProductType(...$productType);
        }
        if (null !== $monograph) {
            $this->setMonograph(...$monograph);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $preparationInstruction) {
            $this->setPreparationInstruction($preparationInstruction);
        }
        if (null !== $intendedRoute) {
            $this->setIntendedRoute(...$intendedRoute);
        }
        if (null !== $cost) {
            $this->setCost(...$cost);
        }
        if (null !== $monitoringProgram) {
            $this->setMonitoringProgram(...$monitoringProgram);
        }
        if (null !== $administrationGuidelines) {
            $this->setAdministrationGuidelines(...$administrationGuidelines);
        }
        if (null !== $medicineClassification) {
            $this->setMedicineClassification(...$medicineClassification);
        }
        if (null !== $packaging) {
            $this->setPackaging($packaging);
        }
        if (null !== $drugCharacteristic) {
            $this->setDrugCharacteristic(...$drugCharacteristic);
        }
        if (null !== $contraindication) {
            $this->setContraindication(...$contraindication);
        }
        if (null !== $regulatory) {
            $this->setRegulatory(...$regulatory);
        }
        if (null !== $kinetics) {
            $this->setKinetics(...$kinetics);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode
     */
    public function getStatus(): null|FHIRCode
    {
        return $this->status ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRCodePrimitive|FHIRCode $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRCode)) {
            $status = new FHIRCode(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getManufacturer(): null|FHIRReference
    {
        return $this->manufacturer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRReference $manufacturer): self
    {
        if (null === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        $this->manufacturer = $manufacturer;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseForm(): null|FHIRCodeableConcept
    {
        return $this->doseForm ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $doseForm
     * @return static
     */
    public function setDoseForm(null|FHIRCodeableConcept $doseForm): self
    {
        if (null === $doseForm) {
            unset($this->doseForm);
            return $this;
        }
        $this->doseForm = $doseForm;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity
     */
    public function getAmount(): null|FHIRQuantity
    {
        return $this->amount ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $amount
     * @return static
     */
    public function setAmount(null|FHIRQuantity $amount): self
    {
        if (null === $amount) {
            unset($this->amount);
            return $this;
        }
        $this->amount = $amount;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]
     */
    public function getSynonym(): array
    {
        return $this->synonym ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString>
     */
    public function getSynonymIterator(): iterable
    {
        if (!isset($this->synonym)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->synonym);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $synonym
     * @return static
     */
    public function addSynonym(string|FHIRStringPrimitive|FHIRString $synonym): self
    {
        if (!($synonym instanceof FHIRString)) {
            $synonym = new FHIRString(value: $synonym);
        }
        if (!isset($this->synonym)) {
            $this->synonym = [];
        }
        $this->synonym[] = $synonym;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString ...$synonym
     * @return static
     */
    public function setSynonym(string|FHIRStringPrimitive|FHIRString ...$synonym): self
    {
        if ([] === $synonym) {
            unset($this->synonym);
            return $this;
        }
        $this->synonym = [];
        foreach($synonym as $v) {
            if ($v instanceof FHIRString) {
                $this->synonym[] = $v;
            } else {
                $this->synonym[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public function getRelatedMedicationKnowledge(): array
    {
        return $this->relatedMedicationKnowledge ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge>
     */
    public function getRelatedMedicationKnowledgeIterator(): iterable
    {
        if (!isset($this->relatedMedicationKnowledge)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedMedicationKnowledge);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge
     * @return static
     */
    public function addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge): self
    {
        if (!isset($this->relatedMedicationKnowledge)) {
            $this->relatedMedicationKnowledge = [];
        }
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related knowledge about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge ...$relatedMedicationKnowledge
     * @return static
     */
    public function setRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge ...$relatedMedicationKnowledge): self
    {
        if ([] === $relatedMedicationKnowledge) {
            unset($this->relatedMedicationKnowledge);
            return $this;
        }
        $this->relatedMedicationKnowledge = $relatedMedicationKnowledge;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getAssociatedMedication(): array
    {
        return $this->associatedMedication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getAssociatedMedicationIterator(): iterable
    {
        if (!isset($this->associatedMedication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->associatedMedication);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $associatedMedication
     * @return static
     */
    public function addAssociatedMedication(FHIRReference $associatedMedication): self
    {
        if (!isset($this->associatedMedication)) {
            $this->associatedMedication = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$associatedMedication
     * @return static
     */
    public function setAssociatedMedication(FHIRReference ...$associatedMedication): self
    {
        if ([] === $associatedMedication) {
            unset($this->associatedMedication);
            return $this;
        }
        $this->associatedMedication = $associatedMedication;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductType(): array
    {
        return $this->productType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getProductTypeIterator(): iterable
    {
        if (!isset($this->productType)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->productType);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $productType
     * @return static
     */
    public function addProductType(FHIRCodeableConcept $productType): self
    {
        if (!isset($this->productType)) {
            $this->productType = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$productType
     * @return static
     */
    public function setProductType(FHIRCodeableConcept ...$productType): self
    {
        if ([] === $productType) {
            unset($this->productType);
            return $this;
        }
        $this->productType = $productType;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public function getMonograph(): array
    {
        return $this->monograph ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph>
     */
    public function getMonographIterator(): iterable
    {
        if (!isset($this->monograph)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->monograph);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph $monograph
     * @return static
     */
    public function addMonograph(FHIRMedicationKnowledgeMonograph $monograph): self
    {
        if (!isset($this->monograph)) {
            $this->monograph = [];
        }
        $this->monograph[] = $monograph;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph ...$monograph
     * @return static
     */
    public function setMonograph(FHIRMedicationKnowledgeMonograph ...$monograph): self
    {
        if ([] === $monograph) {
            unset($this->monograph);
            return $this;
        }
        $this->monograph = $monograph;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[]
     */
    public function getIngredient(): array
    {
        return $this->ingredient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient>
     */
    public function getIngredientIterator(): iterable
    {
        if (!isset($this->ingredient)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->ingredient);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $ingredient
     * @return static
     */
    public function addIngredient(FHIRMedicationKnowledgeIngredient $ingredient): self
    {
        if (!isset($this->ingredient)) {
            $this->ingredient = [];
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient ...$ingredient
     * @return static
     */
    public function setIngredient(FHIRMedicationKnowledgeIngredient ...$ingredient): self
    {
        if ([] === $ingredient) {
            unset($this->ingredient);
            return $this;
        }
        $this->ingredient = $ingredient;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown
     */
    public function getPreparationInstruction(): null|FHIRMarkdown
    {
        return $this->preparationInstruction ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $preparationInstruction
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPreparationInstruction(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparationInstruction,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $preparationInstruction) {
            unset($this->preparationInstruction);
            return $this;
        }
        if (!($preparationInstruction instanceof FHIRMarkdown)) {
            $preparationInstruction = new FHIRMarkdown(value: $preparationInstruction);
        }
        $this->preparationInstruction = $preparationInstruction;
        if ($this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION] !== $valueXMLLocation) {
            $this->_setPreparationInstructionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the preparationInstruction element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPreparationInstructionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION];
    }

    /**
     * Set the location the "value" field of the preparationInstruction element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPreparationInstructionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIntendedRoute(): array
    {
        return $this->intendedRoute ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getIntendedRouteIterator(): iterable
    {
        if (!isset($this->intendedRoute)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->intendedRoute);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $intendedRoute
     * @return static
     */
    public function addIntendedRoute(FHIRCodeableConcept $intendedRoute): self
    {
        if (!isset($this->intendedRoute)) {
            $this->intendedRoute = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$intendedRoute
     * @return static
     */
    public function setIntendedRoute(FHIRCodeableConcept ...$intendedRoute): self
    {
        if ([] === $intendedRoute) {
            unset($this->intendedRoute);
            return $this;
        }
        $this->intendedRoute = $intendedRoute;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public function getCost(): array
    {
        return $this->cost ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost>
     */
    public function getCostIterator(): iterable
    {
        if (!isset($this->cost)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->cost);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $cost
     * @return static
     */
    public function addCost(FHIRMedicationKnowledgeCost $cost): self
    {
        if (!isset($this->cost)) {
            $this->cost = [];
        }
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost ...$cost
     * @return static
     */
    public function setCost(FHIRMedicationKnowledgeCost ...$cost): self
    {
        if ([] === $cost) {
            unset($this->cost);
            return $this;
        }
        $this->cost = $cost;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public function getMonitoringProgram(): array
    {
        return $this->monitoringProgram ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram>
     */
    public function getMonitoringProgramIterator(): iterable
    {
        if (!isset($this->monitoringProgram)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->monitoringProgram);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram
     * @return static
     */
    public function addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram): self
    {
        if (!isset($this->monitoringProgram)) {
            $this->monitoringProgram = [];
        }
        $this->monitoringProgram[] = $monitoringProgram;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram ...$monitoringProgram
     * @return static
     */
    public function setMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram ...$monitoringProgram): self
    {
        if ([] === $monitoringProgram) {
            unset($this->monitoringProgram);
            return $this;
        }
        $this->monitoringProgram = $monitoringProgram;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[]
     */
    public function getAdministrationGuidelines(): array
    {
        return $this->administrationGuidelines ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines>
     */
    public function getAdministrationGuidelinesIterator(): iterable
    {
        if (!isset($this->administrationGuidelines)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->administrationGuidelines);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines
     * @return static
     */
    public function addAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines): self
    {
        if (!isset($this->administrationGuidelines)) {
            $this->administrationGuidelines = [];
        }
        $this->administrationGuidelines[] = $administrationGuidelines;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines for the administration of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines ...$administrationGuidelines
     * @return static
     */
    public function setAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines ...$administrationGuidelines): self
    {
        if ([] === $administrationGuidelines) {
            unset($this->administrationGuidelines);
            return $this;
        }
        $this->administrationGuidelines = $administrationGuidelines;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public function getMedicineClassification(): array
    {
        return $this->medicineClassification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification>
     */
    public function getMedicineClassificationIterator(): iterable
    {
        if (!isset($this->medicineClassification)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->medicineClassification);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $medicineClassification
     * @return static
     */
    public function addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification $medicineClassification): self
    {
        if (!isset($this->medicineClassification)) {
            $this->medicineClassification = [];
        }
        $this->medicineClassification[] = $medicineClassification;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification ...$medicineClassification
     * @return static
     */
    public function setMedicineClassification(FHIRMedicationKnowledgeMedicineClassification ...$medicineClassification): self
    {
        if ([] === $medicineClassification) {
            unset($this->medicineClassification);
            return $this;
        }
        $this->medicineClassification = $medicineClassification;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public function getPackaging(): null|FHIRMedicationKnowledgePackaging
    {
        return $this->packaging ?? null;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @return static
     */
    public function setPackaging(null|FHIRMedicationKnowledgePackaging $packaging): self
    {
        if (null === $packaging) {
            unset($this->packaging);
            return $this;
        }
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[]
     */
    public function getDrugCharacteristic(): array
    {
        return $this->drugCharacteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic>
     */
    public function getDrugCharacteristicIterator(): iterable
    {
        if (!isset($this->drugCharacteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->drugCharacteristic);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic
     * @return static
     */
    public function addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic): self
    {
        if (!isset($this->drugCharacteristic)) {
            $this->drugCharacteristic = [];
        }
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic ...$drugCharacteristic
     * @return static
     */
    public function setDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic ...$drugCharacteristic): self
    {
        if ([] === $drugCharacteristic) {
            unset($this->drugCharacteristic);
            return $this;
        }
        $this->drugCharacteristic = $drugCharacteristic;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getContraindication(): array
    {
        return $this->contraindication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getContraindicationIterator(): iterable
    {
        if (!isset($this->contraindication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contraindication);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $contraindication
     * @return static
     */
    public function addContraindication(FHIRReference $contraindication): self
    {
        if (!isset($this->contraindication)) {
            $this->contraindication = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$contraindication
     * @return static
     */
    public function setContraindication(FHIRReference ...$contraindication): self
    {
        if ([] === $contraindication) {
            unset($this->contraindication);
            return $this;
        }
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public function getRegulatory(): array
    {
        return $this->regulatory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory>
     */
    public function getRegulatoryIterator(): iterable
    {
        if (!isset($this->regulatory)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->regulatory);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $regulatory
     * @return static
     */
    public function addRegulatory(FHIRMedicationKnowledgeRegulatory $regulatory): self
    {
        if (!isset($this->regulatory)) {
            $this->regulatory = [];
        }
        $this->regulatory[] = $regulatory;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory ...$regulatory
     * @return static
     */
    public function setRegulatory(FHIRMedicationKnowledgeRegulatory ...$regulatory): self
    {
        if ([] === $regulatory) {
            unset($this->regulatory);
            return $this;
        }
        $this->regulatory = $regulatory;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[]
     */
    public function getKinetics(): array
    {
        return $this->kinetics ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics>
     */
    public function getKineticsIterator(): iterable
    {
        if (!isset($this->kinetics)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->kinetics);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics $kinetics
     * @return static
     */
    public function addKinetics(FHIRMedicationKnowledgeKinetics $kinetics): self
    {
        if (!isset($this->kinetics)) {
            $this->kinetics = [];
        }
        $this->kinetics[] = $kinetics;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a
     * medication from the body.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics ...$kinetics
     * @return static
     */
    public function setKinetics(FHIRMedicationKnowledgeKinetics ...$kinetics): self
    {
        if ([] === $kinetics) {
            unset($this->kinetics);
            return $this;
        }
        $this->kinetics = $kinetics;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_FORM])) {
            $v = $this->getDoseForm();
            foreach($validationRules[self::FIELD_DOSE_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_FORM])) {
                        $errs[self::FIELD_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYNONYM])) {
            $v = $this->getSynonym();
            foreach($validationRules[self::FIELD_SYNONYM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SYNONYM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYNONYM])) {
                        $errs[self::FIELD_SYNONYM] = [];
                    }
                    $errs[self::FIELD_SYNONYM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
            $v = $this->getRelatedMedicationKnowledge();
            foreach($validationRules[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE])) {
                        $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE] = [];
                    }
                    $errs[self::FIELD_RELATED_MEDICATION_KNOWLEDGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSOCIATED_MEDICATION])) {
            $v = $this->getAssociatedMedication();
            foreach($validationRules[self::FIELD_ASSOCIATED_MEDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ASSOCIATED_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSOCIATED_MEDICATION])) {
                        $errs[self::FIELD_ASSOCIATED_MEDICATION] = [];
                    }
                    $errs[self::FIELD_ASSOCIATED_MEDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_TYPE])) {
            $v = $this->getProductType();
            foreach($validationRules[self::FIELD_PRODUCT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_TYPE])) {
                        $errs[self::FIELD_PRODUCT_TYPE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONOGRAPH])) {
            $v = $this->getMonograph();
            foreach($validationRules[self::FIELD_MONOGRAPH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONOGRAPH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONOGRAPH])) {
                        $errs[self::FIELD_MONOGRAPH] = [];
                    }
                    $errs[self::FIELD_MONOGRAPH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREPARATION_INSTRUCTION])) {
            $v = $this->getPreparationInstruction();
            foreach($validationRules[self::FIELD_PREPARATION_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREPARATION_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREPARATION_INSTRUCTION])) {
                        $errs[self::FIELD_PREPARATION_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PREPARATION_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_ROUTE])) {
            $v = $this->getIntendedRoute();
            foreach($validationRules[self::FIELD_INTENDED_ROUTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTENDED_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_ROUTE])) {
                        $errs[self::FIELD_INTENDED_ROUTE] = [];
                    }
                    $errs[self::FIELD_INTENDED_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST])) {
            $v = $this->getCost();
            foreach($validationRules[self::FIELD_COST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST])) {
                        $errs[self::FIELD_COST] = [];
                    }
                    $errs[self::FIELD_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONITORING_PROGRAM])) {
            $v = $this->getMonitoringProgram();
            foreach($validationRules[self::FIELD_MONITORING_PROGRAM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONITORING_PROGRAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONITORING_PROGRAM])) {
                        $errs[self::FIELD_MONITORING_PROGRAM] = [];
                    }
                    $errs[self::FIELD_MONITORING_PROGRAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION_GUIDELINES])) {
            $v = $this->getAdministrationGuidelines();
            foreach($validationRules[self::FIELD_ADMINISTRATION_GUIDELINES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMINISTRATION_GUIDELINES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION_GUIDELINES])) {
                        $errs[self::FIELD_ADMINISTRATION_GUIDELINES] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION_GUIDELINES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICINE_CLASSIFICATION])) {
            $v = $this->getMedicineClassification();
            foreach($validationRules[self::FIELD_MEDICINE_CLASSIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEDICINE_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICINE_CLASSIFICATION])) {
                        $errs[self::FIELD_MEDICINE_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_MEDICINE_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGING])) {
            $v = $this->getPackaging();
            foreach($validationRules[self::FIELD_PACKAGING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PACKAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGING])) {
                        $errs[self::FIELD_PACKAGING] = [];
                    }
                    $errs[self::FIELD_PACKAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DRUG_CHARACTERISTIC])) {
            $v = $this->getDrugCharacteristic();
            foreach($validationRules[self::FIELD_DRUG_CHARACTERISTIC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DRUG_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DRUG_CHARACTERISTIC])) {
                        $errs[self::FIELD_DRUG_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_DRUG_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRAINDICATION])) {
            $v = $this->getContraindication();
            foreach($validationRules[self::FIELD_CONTRAINDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRAINDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRAINDICATION])) {
                        $errs[self::FIELD_CONTRAINDICATION] = [];
                    }
                    $errs[self::FIELD_CONTRAINDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY])) {
            $v = $this->getRegulatory();
            foreach($validationRules[self::FIELD_REGULATORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REGULATORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY])) {
                        $errs[self::FIELD_REGULATORY] = [];
                    }
                    $errs[self::FIELD_REGULATORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KINETICS])) {
            $v = $this->getKinetics();
            foreach($validationRules[self::FIELD_KINETICS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KINETICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KINETICS])) {
                        $errs[self::FIELD_KINETICS] = [];
                    }
                    $errs[self::FIELD_KINETICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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

    /* class_default.php:211 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledge)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->setManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_FORM === $cen) {
                $type->setDoseForm(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT === $cen) {
                $type->setAmount(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SYNONYM === $cen) {
                $type->addSynonym(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_MEDICATION_KNOWLEDGE === $cen) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSOCIATED_MEDICATION === $cen) {
                $type->addAssociatedMedication(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_TYPE === $cen) {
                $type->addProductType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONOGRAPH === $cen) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INGREDIENT === $cen) {
                $type->addIngredient(FHIRMedicationKnowledgeIngredient::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREPARATION_INSTRUCTION === $cen) {
                $type->setPreparationInstruction(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENDED_ROUTE === $cen) {
                $type->addIntendedRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COST === $cen) {
                $type->addCost(FHIRMedicationKnowledgeCost::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONITORING_PROGRAM === $cen) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION_GUIDELINES === $cen) {
                $type->addAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICINE_CLASSIFICATION === $cen) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGING === $cen) {
                $type->setPackaging(FHIRMedicationKnowledgePackaging::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DRUG_CHARACTERISTIC === $cen) {
                $type->addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRAINDICATION === $cen) {
                $type->addContraindication(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGULATORY === $cen) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KINETICS === $cen) {
                $type->addKinetics(FHIRMedicationKnowledgeKinetics::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PREPARATION_INSTRUCTION])) {
            if (isset($type->preparationInstruction)) {
                $type->preparationInstruction->setValue((string)$attributes[self::FIELD_PREPARATION_INSTRUCTION]);
                $type->_setPreparationInstructionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPreparationInstruction((string)$attributes[self::FIELD_PREPARATION_INSTRUCTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('MedicationKnowledge', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->preparationInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_PREPARATION_INSTRUCTION, $this->preparationInstruction->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $this->manufacturer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseForm)) {
            $xw->startElement(self::FIELD_DOSE_FORM);
            $this->doseForm->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amount)) {
            $xw->startElement(self::FIELD_AMOUNT);
            $this->amount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->synonym) && [] !== $this->synonym) {
            foreach($this->synonym as $v) {
                $xw->startElement(self::FIELD_SYNONYM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedMedicationKnowledge)) {
            foreach ($this->relatedMedicationKnowledge as $v) {
                $xw->startElement(self::FIELD_RELATED_MEDICATION_KNOWLEDGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->associatedMedication)) {
            foreach ($this->associatedMedication as $v) {
                $xw->startElement(self::FIELD_ASSOCIATED_MEDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->productType)) {
            foreach ($this->productType as $v) {
                $xw->startElement(self::FIELD_PRODUCT_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->monograph)) {
            foreach ($this->monograph as $v) {
                $xw->startElement(self::FIELD_MONOGRAPH);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->ingredient)) {
            foreach ($this->ingredient as $v) {
                $xw->startElement(self::FIELD_INGREDIENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->preparationInstruction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]
                || $this->preparationInstruction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREPARATION_INSTRUCTION);
            $this->preparationInstruction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]);
            $xw->endElement();
        }
        if (isset($this->intendedRoute)) {
            foreach ($this->intendedRoute as $v) {
                $xw->startElement(self::FIELD_INTENDED_ROUTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->cost)) {
            foreach ($this->cost as $v) {
                $xw->startElement(self::FIELD_COST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->monitoringProgram)) {
            foreach ($this->monitoringProgram as $v) {
                $xw->startElement(self::FIELD_MONITORING_PROGRAM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->administrationGuidelines)) {
            foreach ($this->administrationGuidelines as $v) {
                $xw->startElement(self::FIELD_ADMINISTRATION_GUIDELINES);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->medicineClassification)) {
            foreach ($this->medicineClassification as $v) {
                $xw->startElement(self::FIELD_MEDICINE_CLASSIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->packaging)) {
            $xw->startElement(self::FIELD_PACKAGING);
            $this->packaging->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->drugCharacteristic)) {
            foreach ($this->drugCharacteristic as $v) {
                $xw->startElement(self::FIELD_DRUG_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contraindication)) {
            foreach ($this->contraindication as $v) {
                $xw->startElement(self::FIELD_CONTRAINDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->regulatory)) {
            foreach ($this->regulatory as $v) {
                $xw->startElement(self::FIELD_REGULATORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->kinetics)) {
            foreach ($this->kinetics as $v) {
                $xw->startElement(self::FIELD_KINETICS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledge)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            $type->setManufacturer(FHIRReference::jsonUnserialize($json[self::FIELD_MANUFACTURER], $config));
        }
        if (isset($json[self::FIELD_DOSE_FORM]) || array_key_exists(self::FIELD_DOSE_FORM, $json)) {
            $type->setDoseForm(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_DOSE_FORM], $config));
        }
        if (isset($json[self::FIELD_AMOUNT]) || array_key_exists(self::FIELD_AMOUNT, $json)) {
            $type->setAmount(FHIRQuantity::jsonUnserialize($json[self::FIELD_AMOUNT], $config));
        }
        if (isset($json[self::FIELD_SYNONYM])
            || isset($json[self::FIELD_SYNONYM_EXT])
            || array_key_exists(self::FIELD_SYNONYM, $json)
            || array_key_exists(self::FIELD_SYNONYM_EXT, $json)) {
            $value = (array)($json[self::FIELD_SYNONYM] ?? []);
            $ext = (array)($json[self::FIELD_SYNONYM_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSynonym(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_RELATED_MEDICATION_KNOWLEDGE]) || array_key_exists(self::FIELD_RELATED_MEDICATION_KNOWLEDGE, $json)) {
            $vs = $json[self::FIELD_RELATED_MEDICATION_KNOWLEDGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ASSOCIATED_MEDICATION]) || array_key_exists(self::FIELD_ASSOCIATED_MEDICATION, $json)) {
            $vs = $json[self::FIELD_ASSOCIATED_MEDICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAssociatedMedication(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PRODUCT_TYPE]) || array_key_exists(self::FIELD_PRODUCT_TYPE, $json)) {
            $vs = $json[self::FIELD_PRODUCT_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProductType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MONOGRAPH]) || array_key_exists(self::FIELD_MONOGRAPH, $json)) {
            $vs = $json[self::FIELD_MONOGRAPH];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_INGREDIENT]) || array_key_exists(self::FIELD_INGREDIENT, $json)) {
            $vs = $json[self::FIELD_INGREDIENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIngredient(FHIRMedicationKnowledgeIngredient::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PREPARATION_INSTRUCTION])
            || isset($json[self::FIELD_PREPARATION_INSTRUCTION_EXT])
            || array_key_exists(self::FIELD_PREPARATION_INSTRUCTION, $json)
            || array_key_exists(self::FIELD_PREPARATION_INSTRUCTION_EXT, $json)) {
            $value = $json[self::FIELD_PREPARATION_INSTRUCTION] ?? null;
            $type->setPreparationInstruction(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_PREPARATION_INSTRUCTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INTENDED_ROUTE]) || array_key_exists(self::FIELD_INTENDED_ROUTE, $json)) {
            $vs = $json[self::FIELD_INTENDED_ROUTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIntendedRoute(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COST]) || array_key_exists(self::FIELD_COST, $json)) {
            $vs = $json[self::FIELD_COST];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCost(FHIRMedicationKnowledgeCost::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MONITORING_PROGRAM]) || array_key_exists(self::FIELD_MONITORING_PROGRAM, $json)) {
            $vs = $json[self::FIELD_MONITORING_PROGRAM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ADMINISTRATION_GUIDELINES]) || array_key_exists(self::FIELD_ADMINISTRATION_GUIDELINES, $json)) {
            $vs = $json[self::FIELD_ADMINISTRATION_GUIDELINES];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAdministrationGuidelines(FHIRMedicationKnowledgeAdministrationGuidelines::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MEDICINE_CLASSIFICATION]) || array_key_exists(self::FIELD_MEDICINE_CLASSIFICATION, $json)) {
            $vs = $json[self::FIELD_MEDICINE_CLASSIFICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PACKAGING]) || array_key_exists(self::FIELD_PACKAGING, $json)) {
            $type->setPackaging(FHIRMedicationKnowledgePackaging::jsonUnserialize($json[self::FIELD_PACKAGING], $config));
        }
        if (isset($json[self::FIELD_DRUG_CHARACTERISTIC]) || array_key_exists(self::FIELD_DRUG_CHARACTERISTIC, $json)) {
            $vs = $json[self::FIELD_DRUG_CHARACTERISTIC];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CONTRAINDICATION]) || array_key_exists(self::FIELD_CONTRAINDICATION, $json)) {
            $vs = $json[self::FIELD_CONTRAINDICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContraindication(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REGULATORY]) || array_key_exists(self::FIELD_REGULATORY, $json)) {
            $vs = $json[self::FIELD_REGULATORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_KINETICS]) || array_key_exists(self::FIELD_KINETICS, $json)) {
            $vs = $json[self::FIELD_KINETICS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addKinetics(FHIRMedicationKnowledgeKinetics::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->manufacturer)) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->doseForm)) {
            $out->doseForm = $this->doseForm;
        }
        if (isset($this->amount)) {
            $out->amount = $this->amount;
        }
        if (isset($this->synonym) && [] !== $this->synonym) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->synonym as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->synonym = $vals;
            }
            if ($hasExts) {
                $out->_synonym = $exts;
            }
        }
        if (isset($this->relatedMedicationKnowledge) && [] !== $this->relatedMedicationKnowledge) {
            $out->relatedMedicationKnowledge = $this->relatedMedicationKnowledge;
        }
        if (isset($this->associatedMedication) && [] !== $this->associatedMedication) {
            $out->associatedMedication = $this->associatedMedication;
        }
        if (isset($this->productType) && [] !== $this->productType) {
            $out->productType = $this->productType;
        }
        if (isset($this->monograph) && [] !== $this->monograph) {
            $out->monograph = $this->monograph;
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            $out->ingredient = $this->ingredient;
        }
        if (isset($this->preparationInstruction)) {
            if (null !== ($val = $this->preparationInstruction->getValue())) {
                $out->preparationInstruction = $val;
            }
            if ($this->preparationInstruction->_nonValueFieldDefined()) {
                $ext = $this->preparationInstruction->jsonSerialize();
                unset($ext->value);
                $out->_preparationInstruction = $ext;
            }
        }
        if (isset($this->intendedRoute) && [] !== $this->intendedRoute) {
            $out->intendedRoute = $this->intendedRoute;
        }
        if (isset($this->cost) && [] !== $this->cost) {
            $out->cost = $this->cost;
        }
        if (isset($this->monitoringProgram) && [] !== $this->monitoringProgram) {
            $out->monitoringProgram = $this->monitoringProgram;
        }
        if (isset($this->administrationGuidelines) && [] !== $this->administrationGuidelines) {
            $out->administrationGuidelines = $this->administrationGuidelines;
        }
        if (isset($this->medicineClassification) && [] !== $this->medicineClassification) {
            $out->medicineClassification = $this->medicineClassification;
        }
        if (isset($this->packaging)) {
            $out->packaging = $this->packaging;
        }
        if (isset($this->drugCharacteristic) && [] !== $this->drugCharacteristic) {
            $out->drugCharacteristic = $this->drugCharacteristic;
        }
        if (isset($this->contraindication) && [] !== $this->contraindication) {
            $out->contraindication = $this->contraindication;
        }
        if (isset($this->regulatory) && [] !== $this->regulatory) {
            $out->regulatory = $this->regulatory;
        }
        if (isset($this->kinetics) && [] !== $this->kinetics) {
            $out->kinetics = $this->kinetics;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}