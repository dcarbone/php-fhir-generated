<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRMedicationKnowledgeStatusCodesEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicationKnowledge extends FHIRMetadataResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        SourceXMLNamespaceTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_CODE = 'code';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_INTENDED_JURISDICTION = 'intendedJurisdiction';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_RELATED_MEDICATION_KNOWLEDGE = 'relatedMedicationKnowledge';
    public const FIELD_ASSOCIATED_MEDICATION = 'associatedMedication';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_MONOGRAPH = 'monograph';
    public const FIELD_PREPARATION_INSTRUCTION = 'preparationInstruction';
    public const FIELD_PREPARATION_INSTRUCTION_EXT = '_preparationInstruction';
    public const FIELD_COST = 'cost';
    public const FIELD_MONITORING_PROGRAM = 'monitoringProgram';
    public const FIELD_INDICATION_GUIDELINE = 'indicationGuideline';
    public const FIELD_MEDICINE_CLASSIFICATION = 'medicineClassification';
    public const FIELD_PACKAGING = 'packaging';
    public const FIELD_CLINICAL_USE_ISSUE = 'clinicalUseIssue';
    public const FIELD_STORAGE_GUIDELINE = 'storageGuideline';
    public const FIELD_REGULATORY = 'regulatory';
    public const FIELD_DEFINITIONAL = 'definitional';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREPARATION_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes 
     */
    protected FHIRMedicationKnowledgeStatusCodes $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $author;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $intendedJurisdiction;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] 
     */
    protected array $name;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] 
     */
    protected array $relatedMedicationKnowledge;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $productType;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated documentation about the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] 
     */
    protected array $monograph;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $preparationInstruction;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] 
     */
    protected array $cost;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * The program under which the medication is reviewed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] 
     */
    protected array $monitoringProgram;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[] 
     */
    protected array $indicationGuideline;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] 
     */
    protected array $medicineClassification;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[] 
     */
    protected array $packaging;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $clinicalUseIssue;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[] 
     */
    protected array $storageGuideline;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] 
     */
    protected array $regulatory;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional 
     */
    protected FHIRMedicationKnowledgeDefinitional $definitional;

    /* constructor.php:61 */
    /**
     * FHIRMedicationKnowledge Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRMedicationKnowledgeStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $intendedJurisdiction
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[] $relatedMedicationKnowledge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $associatedMedication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $productType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[] $monograph
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $preparationInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[] $cost
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[] $monitoringProgram
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[] $indicationGuideline
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[] $medicineClassification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[] $packaging
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $clinicalUseIssue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[] $storageGuideline
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[] $regulatory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional $definitional
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRMedicationKnowledgeStatusCodesEnum|FHIRMedicationKnowledgeStatusCodes $status = null,
                                null|FHIRReference $author = null,
                                null|iterable $intendedJurisdiction = null,
                                null|iterable $name = null,
                                null|iterable $relatedMedicationKnowledge = null,
                                null|iterable $associatedMedication = null,
                                null|iterable $productType = null,
                                null|iterable $monograph = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparationInstruction = null,
                                null|iterable $cost = null,
                                null|iterable $monitoringProgram = null,
                                null|iterable $indicationGuideline = null,
                                null|iterable $medicineClassification = null,
                                null|iterable $packaging = null,
                                null|iterable $clinicalUseIssue = null,
                                null|iterable $storageGuideline = null,
                                null|iterable $regulatory = null,
                                null|FHIRMedicationKnowledgeDefinitional $definitional = null,
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
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $author) {
            $this->setAuthor($author);
        }
        if (null !== $intendedJurisdiction) {
            $this->setIntendedJurisdiction(...$intendedJurisdiction);
        }
        if (null !== $name) {
            $this->setName(...$name);
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
        if (null !== $preparationInstruction) {
            $this->setPreparationInstruction($preparationInstruction);
        }
        if (null !== $cost) {
            $this->setCost(...$cost);
        }
        if (null !== $monitoringProgram) {
            $this->setMonitoringProgram(...$monitoringProgram);
        }
        if (null !== $indicationGuideline) {
            $this->setIndicationGuideline(...$indicationGuideline);
        }
        if (null !== $medicineClassification) {
            $this->setMedicineClassification(...$medicineClassification);
        }
        if (null !== $packaging) {
            $this->setPackaging(...$packaging);
        }
        if (null !== $clinicalUseIssue) {
            $this->setClinicalUseIssue(...$clinicalUseIssue);
        }
        if (null !== $storageGuideline) {
            $this->setStorageGuideline(...$storageGuideline);
        }
        if (null !== $regulatory) {
            $this->setRegulatory(...$regulatory);
        }
        if (null !== $definitional) {
            $this->setDefinitional($definitional);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:158 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes
     */
    public function getStatus(): null|FHIRMedicationKnowledgeStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is
     * in active use within the drug database or inventory system. The status refers to
     * the validity about the information of the medication and not to its medicinal
     * properties.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRMedicationKnowledgeStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMedicationKnowledgeStatusCodes $status
     * @return static
     */
    public function setStatus(null|string|FHIRMedicationKnowledgeStatusCodesEnum|FHIRMedicationKnowledgeStatusCodes $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRMedicationKnowledgeStatusCodes)) {
            $status = new FHIRMedicationKnowledgeStatusCodes(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author): self
    {
        if (null === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getIntendedJurisdiction(): array
    {
        return $this->intendedJurisdiction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getIntendedJurisdictionIterator(): iterable
    {
        if (!isset($this->intendedJurisdiction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->intendedJurisdiction);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $intendedJurisdiction
     * @return static
     */
    public function addIntendedJurisdiction(FHIRCodeableConcept $intendedJurisdiction): self
    {
        if (!isset($this->intendedJurisdiction)) {
            $this->intendedJurisdiction = [];
        }
        $this->intendedJurisdiction[] = $intendedJurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$intendedJurisdiction
     * @return static
     */
    public function setIntendedJurisdiction(FHIRCodeableConcept ...$intendedJurisdiction): self
    {
        if ([] === $intendedJurisdiction) {
            unset($this->intendedJurisdiction);
            return $this;
        }
        $this->intendedJurisdiction = $intendedJurisdiction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getName(): array
    {
        return $this->name ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getNameIterator(): iterable
    {
        if (!isset($this->name)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->name);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @return static
     */
    public function addName(string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        if (!isset($this->name)) {
            $this->name = [];
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * All of the names for a medication, for example, the name(s) given to a
     * medication in different countries. For example, acetaminophen and paracetamol or
     * salbutamol and albuterol.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$name
     * @return static
     */
    public function setName(string|FHIRStringPrimitive|FHIRString ...$name): self
    {
        if ([] === $name) {
            unset($this->name);
            return $this;
        }
        $this->name = [];
        foreach($name as $v) {
            if ($v instanceof FHIRString) {
                $this->name[] = $v;
            } else {
                $this->name[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public function getRelatedMedicationKnowledge(): array
    {
        return $this->relatedMedicationKnowledge ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge>
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
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge
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
     * Associated or related medications. For example, if the medication is a branded
     * product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if
     * this is a generic medication (e.g. Rosuvastatin), this would link to a branded
     * product (e.g. Crestor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge ...$relatedMedicationKnowledge
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
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAssociatedMedication(): array
    {
        return $this->associatedMedication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $associatedMedication
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
     * Links to associated medications that could be prescribed, dispensed or
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$associatedMedication
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getProductType(): array
    {
        return $this->productType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productType
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$productType
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public function getMonograph(): array
    {
        return $this->monograph ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph $monograph
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph ...$monograph
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $preparationInstruction
     * @return static
     */
    public function setPreparationInstruction(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $preparationInstruction): self
    {
        if (null === $preparationInstruction) {
            unset($this->preparationInstruction);
            return $this;
        }
        if (!($preparationInstruction instanceof FHIRMarkdown)) {
            $preparationInstruction = new FHIRMarkdown(value: $preparationInstruction);
        }
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The price of the medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public function getCost(): array
    {
        return $this->cost ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $cost
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost ...$cost
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public function getMonitoringProgram(): array
    {
        return $this->monitoringProgram ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram ...$monitoringProgram
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
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline[]
     */
    public function getIndicationGuideline(): array
    {
        return $this->indicationGuideline ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline>
     */
    public function getIndicationGuidelineIterator(): iterable
    {
        if (!isset($this->indicationGuideline)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->indicationGuideline);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline $indicationGuideline
     * @return static
     */
    public function addIndicationGuideline(FHIRMedicationKnowledgeIndicationGuideline $indicationGuideline): self
    {
        if (!isset($this->indicationGuideline)) {
            $this->indicationGuideline = [];
        }
        $this->indicationGuideline[] = $indicationGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Guidelines or protocols that are applicable for the administration of the
     * medication based on indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIndicationGuideline ...$indicationGuideline
     * @return static
     */
    public function setIndicationGuideline(FHIRMedicationKnowledgeIndicationGuideline ...$indicationGuideline): self
    {
        if ([] === $indicationGuideline) {
            unset($this->indicationGuideline);
            return $this;
        }
        $this->indicationGuideline = $indicationGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public function getMedicineClassification(): array
    {
        return $this->medicineClassification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $medicineClassification
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification ...$medicineClassification
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging[]
     */
    public function getPackaging(): array
    {
        return $this->packaging ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging>
     */
    public function getPackagingIterator(): iterable
    {
        if (!isset($this->packaging)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->packaging);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @return static
     */
    public function addPackaging(FHIRMedicationKnowledgePackaging $packaging): self
    {
        if (!isset($this->packaging)) {
            $this->packaging = [];
        }
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information that only applies to packages (not products).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging ...$packaging
     * @return static
     */
    public function setPackaging(FHIRMedicationKnowledgePackaging ...$packaging): self
    {
        if ([] === $packaging) {
            unset($this->packaging);
            return $this;
        }
        $this->packaging = $packaging;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getClinicalUseIssue(): array
    {
        return $this->clinicalUseIssue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getClinicalUseIssueIterator(): iterable
    {
        if (!isset($this->clinicalUseIssue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->clinicalUseIssue);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug
     * interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $clinicalUseIssue
     * @return static
     */
    public function addClinicalUseIssue(FHIRReference $clinicalUseIssue): self
    {
        if (!isset($this->clinicalUseIssue)) {
            $this->clinicalUseIssue = [];
        }
        $this->clinicalUseIssue[] = $clinicalUseIssue;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$clinicalUseIssue
     * @return static
     */
    public function setClinicalUseIssue(FHIRReference ...$clinicalUseIssue): self
    {
        if ([] === $clinicalUseIssue) {
            unset($this->clinicalUseIssue);
            return $this;
        }
        $this->clinicalUseIssue = $clinicalUseIssue;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline[]
     */
    public function getStorageGuideline(): array
    {
        return $this->storageGuideline ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline>
     */
    public function getStorageGuidelineIterator(): iterable
    {
        if (!isset($this->storageGuideline)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->storageGuideline);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline $storageGuideline
     * @return static
     */
    public function addStorageGuideline(FHIRMedicationKnowledgeStorageGuideline $storageGuideline): self
    {
        if (!isset($this->storageGuideline)) {
            $this->storageGuideline = [];
        }
        $this->storageGuideline[] = $storageGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Information on how the medication should be stored, for example, refrigeration
     * temperatures and length of stability at a given temperature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeStorageGuideline ...$storageGuideline
     * @return static
     */
    public function setStorageGuideline(FHIRMedicationKnowledgeStorageGuideline ...$storageGuideline): self
    {
        if ([] === $storageGuideline) {
            unset($this->storageGuideline);
            return $this;
        }
        $this->storageGuideline = $storageGuideline;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Regulatory information about a medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public function getRegulatory(): array
    {
        return $this->regulatory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $regulatory
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory ...$regulatory
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
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional
     */
    public function getDefinitional(): null|FHIRMedicationKnowledgeDefinitional
    {
        return $this->definitional ?? null;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Along with the link to a Medicinal Product Definition resource, this information
     * provides common definitional elements that are needed to understand the specific
     * medication that is being described.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional $definitional
     * @return static
     */
    public function setDefinitional(null|FHIRMedicationKnowledgeDefinitional $definitional): self
    {
        if (null === $definitional) {
            unset($this->definitional);
            return $this;
        }
        $this->definitional = $definitional;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge
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
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRMedicationKnowledgeStatusCodes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->setAuthor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENDED_JURISDICTION === $cen) {
                $type->addIntendedJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->addName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_MEDICATION_KNOWLEDGE === $cen) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSOCIATED_MEDICATION === $cen) {
                $type->addAssociatedMedication(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_TYPE === $cen) {
                $type->addProductType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONOGRAPH === $cen) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREPARATION_INSTRUCTION === $cen) {
                $type->setPreparationInstruction(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COST === $cen) {
                $type->addCost(FHIRMedicationKnowledgeCost::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONITORING_PROGRAM === $cen) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INDICATION_GUIDELINE === $cen) {
                $type->addIndicationGuideline(FHIRMedicationKnowledgeIndicationGuideline::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICINE_CLASSIFICATION === $cen) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGING === $cen) {
                $type->addPackaging(FHIRMedicationKnowledgePackaging::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLINICAL_USE_ISSUE === $cen) {
                $type->addClinicalUseIssue(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STORAGE_GUIDELINE === $cen) {
                $type->addStorageGuideline(FHIRMedicationKnowledgeStorageGuideline::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGULATORY === $cen) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITIONAL === $cen) {
                $type->setDefinitional(FHIRMedicationKnowledgeDefinitional::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PREPARATION_INSTRUCTION])) {
            if (isset($type->preparationInstruction)) {
                $type->preparationInstruction->setValue((string)$attributes[self::FIELD_PREPARATION_INSTRUCTION]);
            } else {
                $type->setPreparationInstruction((string)$attributes[self::FIELD_PREPARATION_INSTRUCTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PREPARATION_INSTRUCTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->preparationInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_PREPARATION_INSTRUCTION, $this->preparationInstruction->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
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
        if (isset($this->author)) {
            $xw->startElement(self::FIELD_AUTHOR);
            $this->author->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->intendedJurisdiction)) {
            foreach ($this->intendedJurisdiction as $v) {
                $xw->startElement(self::FIELD_INTENDED_JURISDICTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name) && [] !== $this->name) {
            foreach($this->name as $v) {
                $xw->startElement(self::FIELD_NAME);
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
        if (isset($this->preparationInstruction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]
                || $this->preparationInstruction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREPARATION_INSTRUCTION);
            $this->preparationInstruction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREPARATION_INSTRUCTION]);
            $xw->endElement();
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
        if (isset($this->indicationGuideline)) {
            foreach ($this->indicationGuideline as $v) {
                $xw->startElement(self::FIELD_INDICATION_GUIDELINE);
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
            foreach ($this->packaging as $v) {
                $xw->startElement(self::FIELD_PACKAGING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->clinicalUseIssue)) {
            foreach ($this->clinicalUseIssue as $v) {
                $xw->startElement(self::FIELD_CLINICAL_USE_ISSUE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->storageGuideline)) {
            foreach ($this->storageGuideline as $v) {
                $xw->startElement(self::FIELD_STORAGE_GUIDELINE);
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
        if (isset($this->definitional)) {
            $xw->startElement(self::FIELD_DEFINITIONAL);
            $this->definitional->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
            }
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRMedicationKnowledgeStatusCodes::jsonUnserialize($v, $config));
        }
        if (isset($json->author) || property_exists($json, self::FIELD_AUTHOR)) {
            if (is_array($json->author)) {
                $type->setAuthor(FHIRReference::jsonUnserialize(reset($json->author), $config));
            } else {
                $type->setAuthor(FHIRReference::jsonUnserialize($json->author, $config));
            }
        }
        if (isset($json->intendedJurisdiction) || property_exists($json, self::FIELD_INTENDED_JURISDICTION)) {
            if (is_object($json->intendedJurisdiction)) {
                $vals = [$json->intendedJurisdiction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INTENDED_JURISDICTION, true);
            } else {
                $vals = $json->intendedJurisdiction;
            }
            foreach($vals as $v) {
                $type->addIntendedJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->name)
            || isset($json->_name)
            || property_exists($json, self::FIELD_NAME)
            || property_exists($json, self::FIELD_NAME_EXT)) {
            $vals = (array)($json->name ?? []);
            $exts = (array)($json->FIELD_NAME_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addName(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->relatedMedicationKnowledge) || property_exists($json, self::FIELD_RELATED_MEDICATION_KNOWLEDGE)) {
            if (is_object($json->relatedMedicationKnowledge)) {
                $vals = [$json->relatedMedicationKnowledge];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED_MEDICATION_KNOWLEDGE, true);
            } else {
                $vals = $json->relatedMedicationKnowledge;
            }
            foreach($vals as $v) {
                $type->addRelatedMedicationKnowledge(FHIRMedicationKnowledgeRelatedMedicationKnowledge::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->associatedMedication) || property_exists($json, self::FIELD_ASSOCIATED_MEDICATION)) {
            if (is_object($json->associatedMedication)) {
                $vals = [$json->associatedMedication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ASSOCIATED_MEDICATION, true);
            } else {
                $vals = $json->associatedMedication;
            }
            foreach($vals as $v) {
                $type->addAssociatedMedication(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->productType) || property_exists($json, self::FIELD_PRODUCT_TYPE)) {
            if (is_object($json->productType)) {
                $vals = [$json->productType];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PRODUCT_TYPE, true);
            } else {
                $vals = $json->productType;
            }
            foreach($vals as $v) {
                $type->addProductType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->monograph) || property_exists($json, self::FIELD_MONOGRAPH)) {
            if (is_object($json->monograph)) {
                $vals = [$json->monograph];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MONOGRAPH, true);
            } else {
                $vals = $json->monograph;
            }
            foreach($vals as $v) {
                $type->addMonograph(FHIRMedicationKnowledgeMonograph::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->preparationInstruction)
            || isset($json->_preparationInstruction)
            || property_exists($json, self::FIELD_PREPARATION_INSTRUCTION)
            || property_exists($json, self::FIELD_PREPARATION_INSTRUCTION_EXT)) {
            $v = $json->_preparationInstruction ?? new \stdClass();
            $v->value = $json->preparationInstruction ?? null;
            $type->setPreparationInstruction(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->cost) || property_exists($json, self::FIELD_COST)) {
            if (is_object($json->cost)) {
                $vals = [$json->cost];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COST, true);
            } else {
                $vals = $json->cost;
            }
            foreach($vals as $v) {
                $type->addCost(FHIRMedicationKnowledgeCost::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->monitoringProgram) || property_exists($json, self::FIELD_MONITORING_PROGRAM)) {
            if (is_object($json->monitoringProgram)) {
                $vals = [$json->monitoringProgram];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MONITORING_PROGRAM, true);
            } else {
                $vals = $json->monitoringProgram;
            }
            foreach($vals as $v) {
                $type->addMonitoringProgram(FHIRMedicationKnowledgeMonitoringProgram::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->indicationGuideline) || property_exists($json, self::FIELD_INDICATION_GUIDELINE)) {
            if (is_object($json->indicationGuideline)) {
                $vals = [$json->indicationGuideline];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INDICATION_GUIDELINE, true);
            } else {
                $vals = $json->indicationGuideline;
            }
            foreach($vals as $v) {
                $type->addIndicationGuideline(FHIRMedicationKnowledgeIndicationGuideline::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->medicineClassification) || property_exists($json, self::FIELD_MEDICINE_CLASSIFICATION)) {
            if (is_object($json->medicineClassification)) {
                $vals = [$json->medicineClassification];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MEDICINE_CLASSIFICATION, true);
            } else {
                $vals = $json->medicineClassification;
            }
            foreach($vals as $v) {
                $type->addMedicineClassification(FHIRMedicationKnowledgeMedicineClassification::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->packaging) || property_exists($json, self::FIELD_PACKAGING)) {
            if (is_object($json->packaging)) {
                $vals = [$json->packaging];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PACKAGING, true);
            } else {
                $vals = $json->packaging;
            }
            foreach($vals as $v) {
                $type->addPackaging(FHIRMedicationKnowledgePackaging::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->clinicalUseIssue) || property_exists($json, self::FIELD_CLINICAL_USE_ISSUE)) {
            if (is_object($json->clinicalUseIssue)) {
                $vals = [$json->clinicalUseIssue];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CLINICAL_USE_ISSUE, true);
            } else {
                $vals = $json->clinicalUseIssue;
            }
            foreach($vals as $v) {
                $type->addClinicalUseIssue(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->storageGuideline) || property_exists($json, self::FIELD_STORAGE_GUIDELINE)) {
            if (is_object($json->storageGuideline)) {
                $vals = [$json->storageGuideline];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STORAGE_GUIDELINE, true);
            } else {
                $vals = $json->storageGuideline;
            }
            foreach($vals as $v) {
                $type->addStorageGuideline(FHIRMedicationKnowledgeStorageGuideline::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->regulatory) || property_exists($json, self::FIELD_REGULATORY)) {
            if (is_object($json->regulatory)) {
                $vals = [$json->regulatory];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REGULATORY, true);
            } else {
                $vals = $json->regulatory;
            }
            foreach($vals as $v) {
                $type->addRegulatory(FHIRMedicationKnowledgeRegulatory::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->definitional) || property_exists($json, self::FIELD_DEFINITIONAL)) {
            if (is_array($json->definitional)) {
                $type->setDefinitional(FHIRMedicationKnowledgeDefinitional::jsonUnserialize(reset($json->definitional), $config));
            } else {
                $type->setDefinitional(FHIRMedicationKnowledgeDefinitional::jsonUnserialize($json->definitional, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
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
        if (isset($this->author)) {
            $out->author = $this->author;
        }
        if (isset($this->intendedJurisdiction) && [] !== $this->intendedJurisdiction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INTENDED_JURISDICTION) && 1 === count($this->intendedJurisdiction)) {
                $out->intendedJurisdiction = $this->intendedJurisdiction[0];
            } else {
                $out->intendedJurisdiction = $this->intendedJurisdiction;
            }
        }
        if (isset($this->name) && [] !== $this->name) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->name as $v) {
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
                $out->name = $vals;
            }
            if ($hasExts) {
                $out->_name = $exts;
            }
        }
        if (isset($this->relatedMedicationKnowledge) && [] !== $this->relatedMedicationKnowledge) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED_MEDICATION_KNOWLEDGE) && 1 === count($this->relatedMedicationKnowledge)) {
                $out->relatedMedicationKnowledge = $this->relatedMedicationKnowledge[0];
            } else {
                $out->relatedMedicationKnowledge = $this->relatedMedicationKnowledge;
            }
        }
        if (isset($this->associatedMedication) && [] !== $this->associatedMedication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ASSOCIATED_MEDICATION) && 1 === count($this->associatedMedication)) {
                $out->associatedMedication = $this->associatedMedication[0];
            } else {
                $out->associatedMedication = $this->associatedMedication;
            }
        }
        if (isset($this->productType) && [] !== $this->productType) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PRODUCT_TYPE) && 1 === count($this->productType)) {
                $out->productType = $this->productType[0];
            } else {
                $out->productType = $this->productType;
            }
        }
        if (isset($this->monograph) && [] !== $this->monograph) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MONOGRAPH) && 1 === count($this->monograph)) {
                $out->monograph = $this->monograph[0];
            } else {
                $out->monograph = $this->monograph;
            }
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
        if (isset($this->cost) && [] !== $this->cost) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COST) && 1 === count($this->cost)) {
                $out->cost = $this->cost[0];
            } else {
                $out->cost = $this->cost;
            }
        }
        if (isset($this->monitoringProgram) && [] !== $this->monitoringProgram) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MONITORING_PROGRAM) && 1 === count($this->monitoringProgram)) {
                $out->monitoringProgram = $this->monitoringProgram[0];
            } else {
                $out->monitoringProgram = $this->monitoringProgram;
            }
        }
        if (isset($this->indicationGuideline) && [] !== $this->indicationGuideline) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INDICATION_GUIDELINE) && 1 === count($this->indicationGuideline)) {
                $out->indicationGuideline = $this->indicationGuideline[0];
            } else {
                $out->indicationGuideline = $this->indicationGuideline;
            }
        }
        if (isset($this->medicineClassification) && [] !== $this->medicineClassification) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MEDICINE_CLASSIFICATION) && 1 === count($this->medicineClassification)) {
                $out->medicineClassification = $this->medicineClassification[0];
            } else {
                $out->medicineClassification = $this->medicineClassification;
            }
        }
        if (isset($this->packaging) && [] !== $this->packaging) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PACKAGING) && 1 === count($this->packaging)) {
                $out->packaging = $this->packaging[0];
            } else {
                $out->packaging = $this->packaging;
            }
        }
        if (isset($this->clinicalUseIssue) && [] !== $this->clinicalUseIssue) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CLINICAL_USE_ISSUE) && 1 === count($this->clinicalUseIssue)) {
                $out->clinicalUseIssue = $this->clinicalUseIssue[0];
            } else {
                $out->clinicalUseIssue = $this->clinicalUseIssue;
            }
        }
        if (isset($this->storageGuideline) && [] !== $this->storageGuideline) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STORAGE_GUIDELINE) && 1 === count($this->storageGuideline)) {
                $out->storageGuideline = $this->storageGuideline[0];
            } else {
                $out->storageGuideline = $this->storageGuideline;
            }
        }
        if (isset($this->regulatory) && [] !== $this->regulatory) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REGULATORY) && 1 === count($this->regulatory)) {
                $out->regulatory = $this->regulatory[0];
            } else {
                $out->regulatory = $this->regulatory;
            }
        }
        if (isset($this->definitional)) {
            $out->definitional = $this->definitional;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}