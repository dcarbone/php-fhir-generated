<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
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
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRSubstanceDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_STATUS = 'status';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_DOMAIN = 'domain';
    public const FIELD_GRADE = 'grade';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_INFORMATION_SOURCE = 'informationSource';
    public const FIELD_NOTE = 'note';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_SUPPLIER = 'supplier';
    public const FIELD_MOIETY = 'moiety';
    public const FIELD_CHARACTERIZATION = 'characterization';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_REFERENCE_INFORMATION = 'referenceInformation';
    public const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    public const FIELD_STRUCTURE = 'structure';
    public const FIELD_CODE = 'code';
    public const FIELD_NAME = 'name';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_NUCLEIC_ACID = 'nucleicAcid';
    public const FIELD_POLYMER = 'polymer';
    public const FIELD_PROTEIN = 'protein';
    public const FIELD_SOURCE_MATERIAL = 'sourceMaterial';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $classification;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to human or veterinary use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $domain;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $grade;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Textual description of the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $informationSource;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $manufacturer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $supplier;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[] 
     */
    protected array $moiety;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[] 
     */
    protected array $characterization;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[] 
     */
    protected array $property;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $referenceInformation;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[] 
     */
    protected array $molecularWeight;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure 
     */
    protected FHIRSubstanceDefinitionStructure $structure;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[] 
     */
    protected array $code;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[] 
     */
    protected array $name;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[] 
     */
    protected array $relationship;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $nucleicAcid;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $polymer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $protein;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial 
     */
    protected FHIRSubstanceDefinitionSourceMaterial $sourceMaterial;

    /** Default validation map for fields in type SubstanceDefinition */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $grade
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $informationSource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supplier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[] $moiety
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[] $characterization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $referenceInformation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[] $molecularWeight
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $structure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[] $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[] $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $nucleicAcid
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $polymer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $protein
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial $sourceMaterial
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
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|FHIRCodeableConcept $status = null,
                                null|iterable $classification = null,
                                null|FHIRCodeableConcept $domain = null,
                                null|iterable $grade = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $informationSource = null,
                                null|iterable $note = null,
                                null|iterable $manufacturer = null,
                                null|iterable $supplier = null,
                                null|iterable $moiety = null,
                                null|iterable $characterization = null,
                                null|iterable $property = null,
                                null|FHIRReference $referenceInformation = null,
                                null|iterable $molecularWeight = null,
                                null|FHIRSubstanceDefinitionStructure $structure = null,
                                null|iterable $code = null,
                                null|iterable $name = null,
                                null|iterable $relationship = null,
                                null|FHIRReference $nucleicAcid = null,
                                null|FHIRReference $polymer = null,
                                null|FHIRReference $protein = null,
                                null|FHIRSubstanceDefinitionSourceMaterial $sourceMaterial = null,
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
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $classification) {
            $this->setClassification(...$classification);
        }
        if (null !== $domain) {
            $this->setDomain($domain);
        }
        if (null !== $grade) {
            $this->setGrade(...$grade);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $informationSource) {
            $this->setInformationSource(...$informationSource);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer(...$manufacturer);
        }
        if (null !== $supplier) {
            $this->setSupplier(...$supplier);
        }
        if (null !== $moiety) {
            $this->setMoiety(...$moiety);
        }
        if (null !== $characterization) {
            $this->setCharacterization(...$characterization);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $referenceInformation) {
            $this->setReferenceInformation($referenceInformation);
        }
        if (null !== $molecularWeight) {
            $this->setMolecularWeight(...$molecularWeight);
        }
        if (null !== $structure) {
            $this->setStructure($structure);
        }
        if (null !== $code) {
            $this->setCode(...$code);
        }
        if (null !== $name) {
            $this->setName(...$name);
        }
        if (null !== $relationship) {
            $this->setRelationship(...$relationship);
        }
        if (null !== $nucleicAcid) {
            $this->setNucleicAcid($nucleicAcid);
        }
        if (null !== $polymer) {
            $this->setPolymer($polymer);
        }
        if (null !== $protein) {
            $this->setProtein($protein);
        }
        if (null !== $sourceMaterial) {
            $this->setSourceMaterial($sourceMaterial);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * Identifier by which this substance is known.
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
        if (!isset($this->identifier) || [] === $this->identifier) {
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
     * Identifier by which this substance is known.
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
     * Identifier by which this substance is known.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business level version identifier of the substance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassification(): array
    {
        return $this->classification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassificationIterator(): iterable
    {
        if (!isset($this->classification) || [] === $this->classification) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classification);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(FHIRCodeableConcept $classification): self
    {
        if (!isset($this->classification)) {
            $this->classification = [];
        }
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical,
     * biological, or a lower level such as the general types of polymer (linear or
     * branch chain) or type of impurity (process related or contaminant).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classification
     * @return static
     */
    public function setClassification(FHIRCodeableConcept ...$classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to human or veterinary use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDomain(): null|FHIRCodeableConcept
    {
        return $this->domain ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to human or veterinary use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @return static
     */
    public function setDomain(null|FHIRCodeableConcept $domain): self
    {
        if (null === $domain) {
            unset($this->domain);
            return $this;
        }
        $this->domain = $domain;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getGrade(): array
    {
        return $this->grade ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getGradeIterator(): iterable
    {
        if (!isset($this->grade) || [] === $this->grade) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->grade);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $grade
     * @return static
     */
    public function addGrade(FHIRCodeableConcept $grade): self
    {
        if (!isset($this->grade)) {
            $this->grade = [];
        }
        $this->grade[] = $grade;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quality standard, established benchmark, to which substance complies (e.g.
     * USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$grade
     * @return static
     */
    public function setGrade(FHIRCodeableConcept ...$grade): self
    {
        $this->grade = $grade;
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
     * Textual description of the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
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
     * Textual description of the substance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getInformationSource(): array
    {
        return $this->informationSource ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getInformationSourceIterator(): iterable
    {
        if (!isset($this->informationSource) || [] === $this->informationSource) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->informationSource);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $informationSource
     * @return static
     */
    public function addInformationSource(FHIRReference $informationSource): self
    {
        if (!isset($this->informationSource)) {
            $this->informationSource = [];
        }
        $this->informationSource[] = $informationSource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$informationSource
     * @return static
     */
    public function setInformationSource(FHIRReference ...$informationSource): self
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getManufacturerIterator(): iterable
    {
        if (!isset($this->manufacturer) || [] === $this->manufacturer) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manufacturer);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(FHIRReference $manufacturer): self
    {
        if (!isset($this->manufacturer)) {
            $this->manufacturer = [];
        }
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a
     * set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference ...$manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupplier(): array
    {
        return $this->supplier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSupplierIterator(): iterable
    {
        if (!isset($this->supplier) || [] === $this->supplier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supplier);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supplier
     * @return static
     */
    public function addSupplier(FHIRReference $supplier): self
    {
        if (!isset($this->supplier)) {
            $this->supplier = [];
        }
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An entity that is the source for the substance. It may be different from the
     * manufacturer. Supplier is synonymous to a distributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$supplier
     * @return static
     */
    public function setSupplier(FHIRReference ...$supplier): self
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety[]
     */
    public function getMoiety(): array
    {
        return $this->moiety ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety>
     */
    public function getMoietyIterator(): iterable
    {
        if (!isset($this->moiety) || [] === $this->moiety) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->moiety);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety $moiety
     * @return static
     */
    public function addMoiety(FHIRSubstanceDefinitionMoiety $moiety): self
    {
        if (!isset($this->moiety)) {
            $this->moiety = [];
        }
        $this->moiety[] = $moiety;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety ...$moiety
     * @return static
     */
    public function setMoiety(FHIRSubstanceDefinitionMoiety ...$moiety): self
    {
        $this->moiety = $moiety;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization[]
     */
    public function getCharacterization(): array
    {
        return $this->characterization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization>
     */
    public function getCharacterizationIterator(): iterable
    {
        if (!isset($this->characterization) || [] === $this->characterization) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->characterization);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization $characterization
     * @return static
     */
    public function addCharacterization(FHIRSubstanceDefinitionCharacterization $characterization): self
    {
        if (!isset($this->characterization)) {
            $this->characterization = [];
        }
        $this->characterization[] = $characterization;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCharacterization ...$characterization
     * @return static
     */
    public function setCharacterization(FHIRSubstanceDefinitionCharacterization ...$characterization): self
    {
        $this->characterization = $characterization;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property) || [] === $this->property) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty $property
     * @return static
     */
    public function addProperty(FHIRSubstanceDefinitionProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty ...$property
     * @return static
     */
    public function setProperty(FHIRSubstanceDefinitionProperty ...$property): self
    {
        $this->property = $property;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReferenceInformation(): null|FHIRReference
    {
        return $this->referenceInformation ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $referenceInformation
     * @return static
     */
    public function setReferenceInformation(null|FHIRReference $referenceInformation): self
    {
        if (null === $referenceInformation) {
            unset($this->referenceInformation);
            return $this;
        }
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight[]
     */
    public function getMolecularWeight(): array
    {
        return $this->molecularWeight ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight>
     */
    public function getMolecularWeightIterator(): iterable
    {
        if (!isset($this->molecularWeight) || [] === $this->molecularWeight) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->molecularWeight);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight $molecularWeight
     * @return static
     */
    public function addMolecularWeight(FHIRSubstanceDefinitionMolecularWeight $molecularWeight): self
    {
        if (!isset($this->molecularWeight)) {
            $this->molecularWeight = [];
        }
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon
     * 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight ...$molecularWeight
     * @return static
     */
    public function setMolecularWeight(FHIRSubstanceDefinitionMolecularWeight ...$molecularWeight): self
    {
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
     */
    public function getStructure(): null|FHIRSubstanceDefinitionStructure
    {
        return $this->structure ?? null;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $structure
     * @return static
     */
    public function setStructure(null|FHIRSubstanceDefinitionStructure $structure): self
    {
        if (null === $structure) {
            unset($this->structure);
            return $this;
        }
        $this->structure = $structure;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code) || [] === $this->code) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->code);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode $code
     * @return static
     */
    public function addCode(FHIRSubstanceDefinitionCode $code): self
    {
        if (!isset($this->code)) {
            $this->code = [];
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode ...$code
     * @return static
     */
    public function setCode(FHIRSubstanceDefinitionCode ...$code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName[]
     */
    public function getName(): array
    {
        return $this->name ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName>
     */
    public function getNameIterator(): iterable
    {
        if (!isset($this->name) || [] === $this->name) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->name);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName $name
     * @return static
     */
    public function addName(FHIRSubstanceDefinitionName $name): self
    {
        if (!isset($this->name)) {
            $this->name = [];
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName ...$name
     * @return static
     */
    public function setName(FHIRSubstanceDefinitionName ...$name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship[]
     */
    public function getRelationship(): array
    {
        return $this->relationship ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship>
     */
    public function getRelationshipIterator(): iterable
    {
        if (!isset($this->relationship) || [] === $this->relationship) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relationship);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship $relationship
     * @return static
     */
    public function addRelationship(FHIRSubstanceDefinitionRelationship $relationship): self
    {
        if (!isset($this->relationship)) {
            $this->relationship = [];
        }
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship ...$relationship
     * @return static
     */
    public function setRelationship(FHIRSubstanceDefinitionRelationship ...$relationship): self
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getNucleicAcid(): null|FHIRReference
    {
        return $this->nucleicAcid ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $nucleicAcid
     * @return static
     */
    public function setNucleicAcid(null|FHIRReference $nucleicAcid): self
    {
        if (null === $nucleicAcid) {
            unset($this->nucleicAcid);
            return $this;
        }
        $this->nucleicAcid = $nucleicAcid;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPolymer(): null|FHIRReference
    {
        return $this->polymer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $polymer
     * @return static
     */
    public function setPolymer(null|FHIRReference $polymer): self
    {
        if (null === $polymer) {
            unset($this->polymer);
            return $this;
        }
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getProtein(): null|FHIRReference
    {
        return $this->protein ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $protein
     * @return static
     */
    public function setProtein(null|FHIRReference $protein): self
    {
        if (null === $protein) {
            unset($this->protein);
            return $this;
        }
        $this->protein = $protein;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial
     */
    public function getSourceMaterial(): null|FHIRSubstanceDefinitionSourceMaterial
    {
        return $this->sourceMaterial ?? null;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial $sourceMaterial
     * @return static
     */
    public function setSourceMaterial(null|FHIRSubstanceDefinitionSourceMaterial $sourceMaterial): self
    {
        if (null === $sourceMaterial) {
            unset($this->sourceMaterial);
            return $this;
        }
        $this->sourceMaterial = $sourceMaterial;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GRADE])) {
            $v = $this->getGrade();
            foreach($validationRules[self::FIELD_GRADE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GRADE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GRADE])) {
                        $errs[self::FIELD_GRADE] = [];
                    }
                    $errs[self::FIELD_GRADE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_SOURCE])) {
            $v = $this->getInformationSource();
            foreach($validationRules[self::FIELD_INFORMATION_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INFORMATION_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_SOURCE])) {
                        $errs[self::FIELD_INFORMATION_SOURCE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SUPPLIER])) {
            $v = $this->getSupplier();
            foreach($validationRules[self::FIELD_SUPPLIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPLIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLIER])) {
                        $errs[self::FIELD_SUPPLIER] = [];
                    }
                    $errs[self::FIELD_SUPPLIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOIETY])) {
            $v = $this->getMoiety();
            foreach($validationRules[self::FIELD_MOIETY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MOIETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOIETY])) {
                        $errs[self::FIELD_MOIETY] = [];
                    }
                    $errs[self::FIELD_MOIETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERIZATION])) {
            $v = $this->getCharacterization();
            foreach($validationRules[self::FIELD_CHARACTERIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHARACTERIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERIZATION])) {
                        $errs[self::FIELD_CHARACTERIZATION] = [];
                    }
                    $errs[self::FIELD_CHARACTERIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_INFORMATION])) {
            $v = $this->getReferenceInformation();
            foreach($validationRules[self::FIELD_REFERENCE_INFORMATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_INFORMATION])) {
                        $errs[self::FIELD_REFERENCE_INFORMATION] = [];
                    }
                    $errs[self::FIELD_REFERENCE_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_WEIGHT])) {
            $v = $this->getMolecularWeight();
            foreach($validationRules[self::FIELD_MOLECULAR_WEIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MOLECULAR_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_WEIGHT])) {
                        $errs[self::FIELD_MOLECULAR_WEIGHT] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE])) {
            $v = $this->getStructure();
            foreach($validationRules[self::FIELD_STRUCTURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRUCTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE])) {
                        $errs[self::FIELD_STRUCTURE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE][$rule] = $err;
                }
            }
        }
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
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUCLEIC_ACID])) {
            $v = $this->getNucleicAcid();
            foreach($validationRules[self::FIELD_NUCLEIC_ACID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUCLEIC_ACID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUCLEIC_ACID])) {
                        $errs[self::FIELD_NUCLEIC_ACID] = [];
                    }
                    $errs[self::FIELD_NUCLEIC_ACID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLYMER])) {
            $v = $this->getPolymer();
            foreach($validationRules[self::FIELD_POLYMER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POLYMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLYMER])) {
                        $errs[self::FIELD_POLYMER] = [];
                    }
                    $errs[self::FIELD_POLYMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTEIN])) {
            $v = $this->getProtein();
            foreach($validationRules[self::FIELD_PROTEIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROTEIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTEIN])) {
                        $errs[self::FIELD_PROTEIN] = [];
                    }
                    $errs[self::FIELD_PROTEIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL])) {
            $v = $this->getSourceMaterial();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL])) {
                        $errs[self::FIELD_SOURCE_MATERIAL] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceDefinition)) {
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASSIFICATION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOMAIN === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDomain(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GRADE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addGrade(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INFORMATION_SOURCE === $childName) {
                $v = new FHIRReference();
                $type->addInformationSource(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MANUFACTURER === $childName) {
                $v = new FHIRReference();
                $type->addManufacturer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPLIER === $childName) {
                $v = new FHIRReference();
                $type->addSupplier(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MOIETY === $childName) {
                $v = new FHIRSubstanceDefinitionMoiety();
                $type->addMoiety(FHIRSubstanceDefinitionMoiety::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHARACTERIZATION === $childName) {
                $v = new FHIRSubstanceDefinitionCharacterization();
                $type->addCharacterization(FHIRSubstanceDefinitionCharacterization::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROPERTY === $childName) {
                $v = new FHIRSubstanceDefinitionProperty();
                $type->addProperty(FHIRSubstanceDefinitionProperty::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE_INFORMATION === $childName) {
                $v = new FHIRReference();
                $type->setReferenceInformation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MOLECULAR_WEIGHT === $childName) {
                $v = new FHIRSubstanceDefinitionMolecularWeight();
                $type->addMolecularWeight(FHIRSubstanceDefinitionMolecularWeight::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRUCTURE === $childName) {
                $v = new FHIRSubstanceDefinitionStructure();
                $type->setStructure(FHIRSubstanceDefinitionStructure::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRSubstanceDefinitionCode();
                $type->addCode(FHIRSubstanceDefinitionCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRSubstanceDefinitionName();
                $type->addName(FHIRSubstanceDefinitionName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIONSHIP === $childName) {
                $v = new FHIRSubstanceDefinitionRelationship();
                $type->addRelationship(FHIRSubstanceDefinitionRelationship::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUCLEIC_ACID === $childName) {
                $v = new FHIRReference();
                $type->setNucleicAcid(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POLYMER === $childName) {
                $v = new FHIRReference();
                $type->setPolymer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROTEIN === $childName) {
                $v = new FHIRReference();
                $type->setProtein(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_MATERIAL === $childName) {
                $v = new FHIRSubstanceDefinitionSourceMaterial();
                $type->setSourceMaterial(FHIRSubstanceDefinitionSourceMaterial::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('SubstanceDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classification)) {
            foreach ($this->classification as $v) {
                $xw->startElement(self::FIELD_CLASSIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->domain)) {
            $xw->startElement(self::FIELD_DOMAIN);
            $this->domain->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->grade)) {
            foreach ($this->grade as $v) {
                $xw->startElement(self::FIELD_GRADE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->informationSource)) {
            foreach ($this->informationSource as $v) {
                $xw->startElement(self::FIELD_INFORMATION_SOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->manufacturer)) {
            foreach ($this->manufacturer as $v) {
                $xw->startElement(self::FIELD_MANUFACTURER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supplier)) {
            foreach ($this->supplier as $v) {
                $xw->startElement(self::FIELD_SUPPLIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->moiety)) {
            foreach ($this->moiety as $v) {
                $xw->startElement(self::FIELD_MOIETY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->characterization)) {
            foreach ($this->characterization as $v) {
                $xw->startElement(self::FIELD_CHARACTERIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->referenceInformation)) {
            $xw->startElement(self::FIELD_REFERENCE_INFORMATION);
            $this->referenceInformation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->molecularWeight)) {
            foreach ($this->molecularWeight as $v) {
                $xw->startElement(self::FIELD_MOLECULAR_WEIGHT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->structure)) {
            $xw->startElement(self::FIELD_STRUCTURE);
            $this->structure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            foreach ($this->code as $v) {
                $xw->startElement(self::FIELD_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name)) {
            foreach ($this->name as $v) {
                $xw->startElement(self::FIELD_NAME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relationship)) {
            foreach ($this->relationship as $v) {
                $xw->startElement(self::FIELD_RELATIONSHIP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->nucleicAcid)) {
            $xw->startElement(self::FIELD_NUCLEIC_ACID);
            $this->nucleicAcid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->polymer)) {
            $xw->startElement(self::FIELD_POLYMER);
            $this->polymer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->protein)) {
            $xw->startElement(self::FIELD_PROTEIN);
            $this->protein->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceMaterial)) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL);
            $this->sourceMaterial->xmlSerialize($xw, $config);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceDefinition)) {
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
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_VERSION]) || isset($json[self::FIELD_VERSION_EXT]) || array_key_exists(self::FIELD_VERSION, $json) || array_key_exists(self::FIELD_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_VERSION_EXT]) && is_array($json[self::FIELD_VERSION_EXT])) ? $json[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setVersion($value);
                } else if (is_array($value)) {
                    $type->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVersion(new FHIRString($ext));
            } else {
                $type->setVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || array_key_exists(self::FIELD_STATUS, $json)) {
            if ($json[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $type->setStatus($json[self::FIELD_STATUS]);
            } else {
                $type->setStatus(new FHIRCodeableConcept($json[self::FIELD_STATUS]));
            }
        }
        if (isset($json[self::FIELD_CLASSIFICATION]) || array_key_exists(self::FIELD_CLASSIFICATION, $json)) {
            if (is_array($json[self::FIELD_CLASSIFICATION])) {
                foreach($json[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addClassification($v);
                    } else {
                        $type->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $type->addClassification($json[self::FIELD_CLASSIFICATION]);
            } else {
                $type->addClassification(new FHIRCodeableConcept($json[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($json[self::FIELD_DOMAIN]) || array_key_exists(self::FIELD_DOMAIN, $json)) {
            if ($json[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $type->setDomain($json[self::FIELD_DOMAIN]);
            } else {
                $type->setDomain(new FHIRCodeableConcept($json[self::FIELD_DOMAIN]));
            }
        }
        if (isset($json[self::FIELD_GRADE]) || array_key_exists(self::FIELD_GRADE, $json)) {
            if (is_array($json[self::FIELD_GRADE])) {
                foreach($json[self::FIELD_GRADE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addGrade($v);
                    } else {
                        $type->addGrade(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_GRADE] instanceof FHIRCodeableConcept) {
                $type->addGrade($json[self::FIELD_GRADE]);
            } else {
                $type->addGrade(new FHIRCodeableConcept($json[self::FIELD_GRADE]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_INFORMATION_SOURCE]) || array_key_exists(self::FIELD_INFORMATION_SOURCE, $json)) {
            if (is_array($json[self::FIELD_INFORMATION_SOURCE])) {
                foreach($json[self::FIELD_INFORMATION_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addInformationSource($v);
                    } else {
                        $type->addInformationSource(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_INFORMATION_SOURCE] instanceof FHIRReference) {
                $type->addInformationSource($json[self::FIELD_INFORMATION_SOURCE]);
            } else {
                $type->addInformationSource(new FHIRReference($json[self::FIELD_INFORMATION_SOURCE]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            if (is_array($json[self::FIELD_MANUFACTURER])) {
                foreach($json[self::FIELD_MANUFACTURER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addManufacturer($v);
                    } else {
                        $type->addManufacturer(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $type->addManufacturer($json[self::FIELD_MANUFACTURER]);
            } else {
                $type->addManufacturer(new FHIRReference($json[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($json[self::FIELD_SUPPLIER]) || array_key_exists(self::FIELD_SUPPLIER, $json)) {
            if (is_array($json[self::FIELD_SUPPLIER])) {
                foreach($json[self::FIELD_SUPPLIER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSupplier($v);
                    } else {
                        $type->addSupplier(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPLIER] instanceof FHIRReference) {
                $type->addSupplier($json[self::FIELD_SUPPLIER]);
            } else {
                $type->addSupplier(new FHIRReference($json[self::FIELD_SUPPLIER]));
            }
        }
        if (isset($json[self::FIELD_MOIETY]) || array_key_exists(self::FIELD_MOIETY, $json)) {
            if (is_array($json[self::FIELD_MOIETY])) {
                foreach($json[self::FIELD_MOIETY] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionMoiety) {
                        $type->addMoiety($v);
                    } else {
                        $type->addMoiety(new FHIRSubstanceDefinitionMoiety($v));
                    }
                }
            } elseif ($json[self::FIELD_MOIETY] instanceof FHIRSubstanceDefinitionMoiety) {
                $type->addMoiety($json[self::FIELD_MOIETY]);
            } else {
                $type->addMoiety(new FHIRSubstanceDefinitionMoiety($json[self::FIELD_MOIETY]));
            }
        }
        if (isset($json[self::FIELD_CHARACTERIZATION]) || array_key_exists(self::FIELD_CHARACTERIZATION, $json)) {
            if (is_array($json[self::FIELD_CHARACTERIZATION])) {
                foreach($json[self::FIELD_CHARACTERIZATION] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionCharacterization) {
                        $type->addCharacterization($v);
                    } else {
                        $type->addCharacterization(new FHIRSubstanceDefinitionCharacterization($v));
                    }
                }
            } elseif ($json[self::FIELD_CHARACTERIZATION] instanceof FHIRSubstanceDefinitionCharacterization) {
                $type->addCharacterization($json[self::FIELD_CHARACTERIZATION]);
            } else {
                $type->addCharacterization(new FHIRSubstanceDefinitionCharacterization($json[self::FIELD_CHARACTERIZATION]));
            }
        }
        if (isset($json[self::FIELD_PROPERTY]) || array_key_exists(self::FIELD_PROPERTY, $json)) {
            if (is_array($json[self::FIELD_PROPERTY])) {
                foreach($json[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionProperty) {
                        $type->addProperty($v);
                    } else {
                        $type->addProperty(new FHIRSubstanceDefinitionProperty($v));
                    }
                }
            } elseif ($json[self::FIELD_PROPERTY] instanceof FHIRSubstanceDefinitionProperty) {
                $type->addProperty($json[self::FIELD_PROPERTY]);
            } else {
                $type->addProperty(new FHIRSubstanceDefinitionProperty($json[self::FIELD_PROPERTY]));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_INFORMATION]) || array_key_exists(self::FIELD_REFERENCE_INFORMATION, $json)) {
            if ($json[self::FIELD_REFERENCE_INFORMATION] instanceof FHIRReference) {
                $type->setReferenceInformation($json[self::FIELD_REFERENCE_INFORMATION]);
            } else {
                $type->setReferenceInformation(new FHIRReference($json[self::FIELD_REFERENCE_INFORMATION]));
            }
        }
        if (isset($json[self::FIELD_MOLECULAR_WEIGHT]) || array_key_exists(self::FIELD_MOLECULAR_WEIGHT, $json)) {
            if (is_array($json[self::FIELD_MOLECULAR_WEIGHT])) {
                foreach($json[self::FIELD_MOLECULAR_WEIGHT] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionMolecularWeight) {
                        $type->addMolecularWeight($v);
                    } else {
                        $type->addMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($v));
                    }
                }
            } elseif ($json[self::FIELD_MOLECULAR_WEIGHT] instanceof FHIRSubstanceDefinitionMolecularWeight) {
                $type->addMolecularWeight($json[self::FIELD_MOLECULAR_WEIGHT]);
            } else {
                $type->addMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($json[self::FIELD_MOLECULAR_WEIGHT]));
            }
        }
        if (isset($json[self::FIELD_STRUCTURE]) || array_key_exists(self::FIELD_STRUCTURE, $json)) {
            if ($json[self::FIELD_STRUCTURE] instanceof FHIRSubstanceDefinitionStructure) {
                $type->setStructure($json[self::FIELD_STRUCTURE]);
            } else {
                $type->setStructure(new FHIRSubstanceDefinitionStructure($json[self::FIELD_STRUCTURE]));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if (is_array($json[self::FIELD_CODE])) {
                foreach($json[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionCode) {
                        $type->addCode($v);
                    } else {
                        $type->addCode(new FHIRSubstanceDefinitionCode($v));
                    }
                }
            } elseif ($json[self::FIELD_CODE] instanceof FHIRSubstanceDefinitionCode) {
                $type->addCode($json[self::FIELD_CODE]);
            } else {
                $type->addCode(new FHIRSubstanceDefinitionCode($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_NAME]) || array_key_exists(self::FIELD_NAME, $json)) {
            if (is_array($json[self::FIELD_NAME])) {
                foreach($json[self::FIELD_NAME] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionName) {
                        $type->addName($v);
                    } else {
                        $type->addName(new FHIRSubstanceDefinitionName($v));
                    }
                }
            } elseif ($json[self::FIELD_NAME] instanceof FHIRSubstanceDefinitionName) {
                $type->addName($json[self::FIELD_NAME]);
            } else {
                $type->addName(new FHIRSubstanceDefinitionName($json[self::FIELD_NAME]));
            }
        }
        if (isset($json[self::FIELD_RELATIONSHIP]) || array_key_exists(self::FIELD_RELATIONSHIP, $json)) {
            if (is_array($json[self::FIELD_RELATIONSHIP])) {
                foreach($json[self::FIELD_RELATIONSHIP] as $v) {
                    if ($v instanceof FHIRSubstanceDefinitionRelationship) {
                        $type->addRelationship($v);
                    } else {
                        $type->addRelationship(new FHIRSubstanceDefinitionRelationship($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATIONSHIP] instanceof FHIRSubstanceDefinitionRelationship) {
                $type->addRelationship($json[self::FIELD_RELATIONSHIP]);
            } else {
                $type->addRelationship(new FHIRSubstanceDefinitionRelationship($json[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($json[self::FIELD_NUCLEIC_ACID]) || array_key_exists(self::FIELD_NUCLEIC_ACID, $json)) {
            if ($json[self::FIELD_NUCLEIC_ACID] instanceof FHIRReference) {
                $type->setNucleicAcid($json[self::FIELD_NUCLEIC_ACID]);
            } else {
                $type->setNucleicAcid(new FHIRReference($json[self::FIELD_NUCLEIC_ACID]));
            }
        }
        if (isset($json[self::FIELD_POLYMER]) || array_key_exists(self::FIELD_POLYMER, $json)) {
            if ($json[self::FIELD_POLYMER] instanceof FHIRReference) {
                $type->setPolymer($json[self::FIELD_POLYMER]);
            } else {
                $type->setPolymer(new FHIRReference($json[self::FIELD_POLYMER]));
            }
        }
        if (isset($json[self::FIELD_PROTEIN]) || array_key_exists(self::FIELD_PROTEIN, $json)) {
            if ($json[self::FIELD_PROTEIN] instanceof FHIRReference) {
                $type->setProtein($json[self::FIELD_PROTEIN]);
            } else {
                $type->setProtein(new FHIRReference($json[self::FIELD_PROTEIN]));
            }
        }
        if (isset($json[self::FIELD_SOURCE_MATERIAL]) || array_key_exists(self::FIELD_SOURCE_MATERIAL, $json)) {
            if ($json[self::FIELD_SOURCE_MATERIAL] instanceof FHIRSubstanceDefinitionSourceMaterial) {
                $type->setSourceMaterial($json[self::FIELD_SOURCE_MATERIAL]);
            } else {
                $type->setSourceMaterial(new FHIRSubstanceDefinitionSourceMaterial($json[self::FIELD_SOURCE_MATERIAL]));
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
            $out->identifier = $this->identifier;
        }
        if (isset($this->version)) {
            if (null !== ($val = $this->version->getValue())) {
                $out->version = $val;
            }
            $ext = $this->version->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_version = $ext;
            }
        }
        if (isset($this->status)) {
            $out->status = $this->status;
        }
        if (isset($this->classification) && [] !== $this->classification) {
            $out->classification = $this->classification;
        }
        if (isset($this->domain)) {
            $out->domain = $this->domain;
        }
        if (isset($this->grade) && [] !== $this->grade) {
            $out->grade = $this->grade;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->informationSource) && [] !== $this->informationSource) {
            $out->informationSource = $this->informationSource;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->supplier) && [] !== $this->supplier) {
            $out->supplier = $this->supplier;
        }
        if (isset($this->moiety) && [] !== $this->moiety) {
            $out->moiety = $this->moiety;
        }
        if (isset($this->characterization) && [] !== $this->characterization) {
            $out->characterization = $this->characterization;
        }
        if (isset($this->property) && [] !== $this->property) {
            $out->property = $this->property;
        }
        if (isset($this->referenceInformation)) {
            $out->referenceInformation = $this->referenceInformation;
        }
        if (isset($this->molecularWeight) && [] !== $this->molecularWeight) {
            $out->molecularWeight = $this->molecularWeight;
        }
        if (isset($this->structure)) {
            $out->structure = $this->structure;
        }
        if (isset($this->code) && [] !== $this->code) {
            $out->code = $this->code;
        }
        if (isset($this->name) && [] !== $this->name) {
            $out->name = $this->name;
        }
        if (isset($this->relationship) && [] !== $this->relationship) {
            $out->relationship = $this->relationship;
        }
        if (isset($this->nucleicAcid)) {
            $out->nucleicAcid = $this->nucleicAcid;
        }
        if (isset($this->polymer)) {
            $out->polymer = $this->polymer;
        }
        if (isset($this->protein)) {
            $out->protein = $this->protein;
        }
        if (isset($this->sourceMaterial)) {
            $out->sourceMaterial = $this->sourceMaterial;
        }
        $out->resourceType = $this->_getResourceType();
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