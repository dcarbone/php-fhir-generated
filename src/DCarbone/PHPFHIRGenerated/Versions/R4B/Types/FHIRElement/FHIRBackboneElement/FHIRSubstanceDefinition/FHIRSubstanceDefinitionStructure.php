<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 */
class FHIRSubstanceDefinitionStructure extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE;

    /* class_default.php:48 */
    public const FIELD_STEREOCHEMISTRY = 'stereochemistry';
    public const FIELD_OPTICAL_ACTIVITY = 'opticalActivity';
    public const FIELD_MOLECULAR_FORMULA = 'molecularFormula';
    public const FIELD_MOLECULAR_FORMULA_EXT = '_molecularFormula';
    public const FIELD_MOLECULAR_FORMULA_BY_MOIETY = 'molecularFormulaByMoiety';
    public const FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT = '_molecularFormulaByMoiety';
    public const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    public const FIELD_TECHNIQUE = 'technique';
    public const FIELD_SOURCE_DOCUMENT = 'sourceDocument';
    public const FIELD_REPRESENTATION = 'representation';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_MOLECULAR_FORMULA => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MOLECULAR_FORMULA_BY_MOIETY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $stereochemistry;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $opticalActivity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $molecularFormula;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $molecularFormulaByMoiety;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight 
     */
    protected FHIRSubstanceDefinitionMolecularWeight $molecularWeight;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $technique;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $sourceDocument;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[] 
     */
    protected array $representation;

    /* constructor.php:63 */
    /**
     * FHIRSubstanceDefinitionStructure Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $molecularFormula
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $molecularFormulaByMoiety
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight $molecularWeight
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $technique
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $sourceDocument
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[] $representation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $stereochemistry = null,
                                null|FHIRCodeableConcept $opticalActivity = null,
                                null|string|FHIRStringPrimitive|FHIRString $molecularFormula = null,
                                null|string|FHIRStringPrimitive|FHIRString $molecularFormulaByMoiety = null,
                                null|FHIRSubstanceDefinitionMolecularWeight $molecularWeight = null,
                                null|iterable $technique = null,
                                null|iterable $sourceDocument = null,
                                null|iterable $representation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $stereochemistry) {
            $this->setStereochemistry($stereochemistry);
        }
        if (null !== $opticalActivity) {
            $this->setOpticalActivity($opticalActivity);
        }
        if (null !== $molecularFormula) {
            $this->setMolecularFormula($molecularFormula);
        }
        if (null !== $molecularFormulaByMoiety) {
            $this->setMolecularFormulaByMoiety($molecularFormulaByMoiety);
        }
        if (null !== $molecularWeight) {
            $this->setMolecularWeight($molecularWeight);
        }
        if (null !== $technique) {
            $this->setTechnique(...$technique);
        }
        if (null !== $sourceDocument) {
            $this->setSourceDocument(...$sourceDocument);
        }
        if (null !== $representation) {
            $this->setRepresentation(...$representation);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStereochemistry(): null|FHIRCodeableConcept
    {
        return $this->stereochemistry ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @return static
     */
    public function setStereochemistry(null|FHIRCodeableConcept $stereochemistry): self
    {
        if (null === $stereochemistry) {
            unset($this->stereochemistry);
            return $this;
        }
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getOpticalActivity(): null|FHIRCodeableConcept
    {
        return $this->opticalActivity ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @return static
     */
    public function setOpticalActivity(null|FHIRCodeableConcept $opticalActivity): self
    {
        if (null === $opticalActivity) {
            unset($this->opticalActivity);
            return $this;
        }
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getMolecularFormula(): null|FHIRString
    {
        return $this->molecularFormula ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $molecularFormula
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMolecularFormula(null|string|FHIRStringPrimitive|FHIRString $molecularFormula,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $molecularFormula) {
            unset($this->molecularFormula);
            return $this;
        }
        if (!($molecularFormula instanceof FHIRString)) {
            $molecularFormula = new FHIRString(value: $molecularFormula);
        }
        $this->molecularFormula = $molecularFormula;
        if ($this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA] !== $valueXMLLocation) {
            $this->_setMolecularFormulaValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the molecularFormula element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMolecularFormulaValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA];
    }

    /**
     * Set the location the "value" field of the molecularFormula element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMolecularFormulaValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getMolecularFormulaByMoiety(): null|FHIRString
    {
        return $this->molecularFormulaByMoiety ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $molecularFormulaByMoiety
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMolecularFormulaByMoiety(null|string|FHIRStringPrimitive|FHIRString $molecularFormulaByMoiety,
                                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $molecularFormulaByMoiety) {
            unset($this->molecularFormulaByMoiety);
            return $this;
        }
        if (!($molecularFormulaByMoiety instanceof FHIRString)) {
            $molecularFormulaByMoiety = new FHIRString(value: $molecularFormulaByMoiety);
        }
        $this->molecularFormulaByMoiety = $molecularFormulaByMoiety;
        if ($this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] !== $valueXMLLocation) {
            $this->_setMolecularFormulaByMoietyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the molecularFormulaByMoiety element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMolecularFormulaByMoietyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY];
    }

    /**
     * Set the location the "value" field of the molecularFormulaByMoiety element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMolecularFormulaByMoietyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = $valueXMLLocation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight
     */
    public function getMolecularWeight(): null|FHIRSubstanceDefinitionMolecularWeight
    {
        return $this->molecularWeight ?? null;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight $molecularWeight
     * @return static
     */
    public function setMolecularWeight(null|FHIRSubstanceDefinitionMolecularWeight $molecularWeight): self
    {
        if (null === $molecularWeight) {
            unset($this->molecularWeight);
            return $this;
        }
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTechnique(): array
    {
        return $this->technique ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTechniqueIterator(): iterable
    {
        if (!isset($this->technique)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->technique);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $technique
     * @return static
     */
    public function addTechnique(FHIRCodeableConcept $technique): self
    {
        if (!isset($this->technique)) {
            $this->technique = [];
        }
        $this->technique[] = $technique;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$technique
     * @return static
     */
    public function setTechnique(FHIRCodeableConcept ...$technique): self
    {
        if ([] === $technique) {
            unset($this->technique);
            return $this;
        }
        $this->technique = $technique;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getSourceDocument(): array
    {
        return $this->sourceDocument ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getSourceDocumentIterator(): iterable
    {
        if (!isset($this->sourceDocument)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sourceDocument);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $sourceDocument
     * @return static
     */
    public function addSourceDocument(FHIRReference $sourceDocument): self
    {
        if (!isset($this->sourceDocument)) {
            $this->sourceDocument = [];
        }
        $this->sourceDocument[] = $sourceDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$sourceDocument
     * @return static
     */
    public function setSourceDocument(FHIRReference ...$sourceDocument): self
    {
        if ([] === $sourceDocument) {
            unset($this->sourceDocument);
            return $this;
        }
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[]
     */
    public function getRepresentation(): array
    {
        return $this->representation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation>
     */
    public function getRepresentationIterator(): iterable
    {
        if (!isset($this->representation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->representation);
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation $representation
     * @return static
     */
    public function addRepresentation(FHIRSubstanceDefinitionRepresentation $representation): self
    {
        if (!isset($this->representation)) {
            $this->representation = [];
        }
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation ...$representation
     * @return static
     */
    public function setRepresentation(FHIRSubstanceDefinitionRepresentation ...$representation): self
    {
        if ([] === $representation) {
            unset($this->representation);
            return $this;
        }
        $this->representation = $representation;
        return $this;
    }

    /* class_default.php:189 */
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
        if (isset($validationRules[self::FIELD_STEREOCHEMISTRY])) {
            $v = $this->getStereochemistry();
            foreach($validationRules[self::FIELD_STEREOCHEMISTRY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STEREOCHEMISTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STEREOCHEMISTRY])) {
                        $errs[self::FIELD_STEREOCHEMISTRY] = [];
                    }
                    $errs[self::FIELD_STEREOCHEMISTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTICAL_ACTIVITY])) {
            $v = $this->getOpticalActivity();
            foreach($validationRules[self::FIELD_OPTICAL_ACTIVITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPTICAL_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTICAL_ACTIVITY])) {
                        $errs[self::FIELD_OPTICAL_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_OPTICAL_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_FORMULA])) {
            $v = $this->getMolecularFormula();
            foreach($validationRules[self::FIELD_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MOLECULAR_FORMULA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_FORMULA])) {
                        $errs[self::FIELD_MOLECULAR_FORMULA] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_FORMULA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
            $v = $this->getMolecularFormulaByMoiety();
            foreach($validationRules[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
                        $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TECHNIQUE])) {
            $v = $this->getTechnique();
            foreach($validationRules[self::FIELD_TECHNIQUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TECHNIQUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TECHNIQUE])) {
                        $errs[self::FIELD_TECHNIQUE] = [];
                    }
                    $errs[self::FIELD_TECHNIQUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_DOCUMENT])) {
            $v = $this->getSourceDocument();
            foreach($validationRules[self::FIELD_SOURCE_DOCUMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_DOCUMENT])) {
                        $errs[self::FIELD_SOURCE_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_SOURCE_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
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
        return $errs;
    }

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceDefinitionStructure)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STEREOCHEMISTRY === $cen) {
                $type->setStereochemistry(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPTICAL_ACTIVITY === $cen) {
                $type->setOpticalActivity(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MOLECULAR_FORMULA === $cen) {
                $type->setMolecularFormula(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MOLECULAR_FORMULA_BY_MOIETY === $cen) {
                $type->setMolecularFormulaByMoiety(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MOLECULAR_WEIGHT === $cen) {
                $type->setMolecularWeight(FHIRSubstanceDefinitionMolecularWeight::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TECHNIQUE === $cen) {
                $type->addTechnique(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_DOCUMENT === $cen) {
                $type->addSourceDocument(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPRESENTATION === $cen) {
                $type->addRepresentation(FHIRSubstanceDefinitionRepresentation::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MOLECULAR_FORMULA])) {
            if (isset($type->molecularFormula)) {
                $type->molecularFormula->setValue((string)$attributes[self::FIELD_MOLECULAR_FORMULA]);
                $type->_setMolecularFormulaValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMolecularFormula((string)$attributes[self::FIELD_MOLECULAR_FORMULA], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
            if (isset($type->molecularFormulaByMoiety)) {
                $type->molecularFormulaByMoiety->setValue((string)$attributes[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]);
                $type->_setMolecularFormulaByMoietyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMolecularFormulaByMoiety((string)$attributes[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->molecularFormula) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA]) {
            $xw->writeAttribute(self::FIELD_MOLECULAR_FORMULA, $this->molecularFormula->_getFormattedValue());
        }
        if (isset($this->molecularFormulaByMoiety) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]) {
            $xw->writeAttribute(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, $this->molecularFormulaByMoiety->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->stereochemistry)) {
            $xw->startElement(self::FIELD_STEREOCHEMISTRY);
            $this->stereochemistry->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->opticalActivity)) {
            $xw->startElement(self::FIELD_OPTICAL_ACTIVITY);
            $this->opticalActivity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->molecularFormula)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA]
                || $this->molecularFormula->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MOLECULAR_FORMULA);
            $this->molecularFormula->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA]);
            $xw->endElement();
        }
        if (isset($this->molecularFormulaByMoiety)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]
                || $this->molecularFormulaByMoiety->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY);
            $this->molecularFormulaByMoiety->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]);
            $xw->endElement();
        }
        if (isset($this->molecularWeight)) {
            $xw->startElement(self::FIELD_MOLECULAR_WEIGHT);
            $this->molecularWeight->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->technique)) {
            foreach ($this->technique as $v) {
                $xw->startElement(self::FIELD_TECHNIQUE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sourceDocument)) {
            foreach ($this->sourceDocument as $v) {
                $xw->startElement(self::FIELD_SOURCE_DOCUMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->representation)) {
            foreach ($this->representation as $v) {
                $xw->startElement(self::FIELD_REPRESENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceDefinitionStructure)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_STEREOCHEMISTRY]) || array_key_exists(self::FIELD_STEREOCHEMISTRY, $json)) {
            $type->setStereochemistry(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_STEREOCHEMISTRY], $config));
        }
        if (isset($json[self::FIELD_OPTICAL_ACTIVITY]) || array_key_exists(self::FIELD_OPTICAL_ACTIVITY, $json)) {
            $type->setOpticalActivity(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_OPTICAL_ACTIVITY], $config));
        }
        if (isset($json[self::FIELD_MOLECULAR_FORMULA])
            || isset($json[self::FIELD_MOLECULAR_FORMULA_EXT])
            || array_key_exists(self::FIELD_MOLECULAR_FORMULA, $json)
            || array_key_exists(self::FIELD_MOLECULAR_FORMULA_EXT, $json)) {
            $value = $json[self::FIELD_MOLECULAR_FORMULA] ?? null;
            $type->setMolecularFormula(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MOLECULAR_FORMULA_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])
            || isset($json[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT])
            || array_key_exists(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, $json)
            || array_key_exists(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT, $json)) {
            $value = $json[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] ?? null;
            $type->setMolecularFormulaByMoiety(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MOLECULAR_WEIGHT]) || array_key_exists(self::FIELD_MOLECULAR_WEIGHT, $json)) {
            $type->setMolecularWeight(FHIRSubstanceDefinitionMolecularWeight::jsonUnserialize($json[self::FIELD_MOLECULAR_WEIGHT], $config));
        }
        if (isset($json[self::FIELD_TECHNIQUE]) || array_key_exists(self::FIELD_TECHNIQUE, $json)) {
            $vs = $json[self::FIELD_TECHNIQUE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTechnique(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SOURCE_DOCUMENT]) || array_key_exists(self::FIELD_SOURCE_DOCUMENT, $json)) {
            $vs = $json[self::FIELD_SOURCE_DOCUMENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSourceDocument(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REPRESENTATION]) || array_key_exists(self::FIELD_REPRESENTATION, $json)) {
            $vs = $json[self::FIELD_REPRESENTATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRepresentation(FHIRSubstanceDefinitionRepresentation::jsonUnserialize($v, $config));
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
        if (isset($this->stereochemistry)) {
            $out->stereochemistry = $this->stereochemistry;
        }
        if (isset($this->opticalActivity)) {
            $out->opticalActivity = $this->opticalActivity;
        }
        if (isset($this->molecularFormula)) {
            if (null !== ($val = $this->molecularFormula->getValue())) {
                $out->molecularFormula = $val;
            }
            $ext = $this->molecularFormula->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_molecularFormula = $ext;
            }
        }
        if (isset($this->molecularFormulaByMoiety)) {
            if (null !== ($val = $this->molecularFormulaByMoiety->getValue())) {
                $out->molecularFormulaByMoiety = $val;
            }
            $ext = $this->molecularFormulaByMoiety->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_molecularFormulaByMoiety = $ext;
            }
        }
        if (isset($this->molecularWeight)) {
            $out->molecularWeight = $this->molecularWeight;
        }
        if (isset($this->technique) && [] !== $this->technique) {
            $out->technique = $this->technique;
        }
        if (isset($this->sourceDocument) && [] !== $this->sourceDocument) {
            $out->sourceDocument = $this->sourceDocument;
        }
        if (isset($this->representation) && [] !== $this->representation) {
            $out->representation = $this->representation;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}