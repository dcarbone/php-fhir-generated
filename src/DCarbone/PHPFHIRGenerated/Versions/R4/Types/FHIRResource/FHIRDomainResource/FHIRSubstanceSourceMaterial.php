<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRSubstanceSourceMaterial extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL;


    public const FIELD_SOURCE_MATERIAL_CLASS = 'sourceMaterialClass';
    public const FIELD_SOURCE_MATERIAL_TYPE = 'sourceMaterialType';
    public const FIELD_SOURCE_MATERIAL_STATE = 'sourceMaterialState';
    public const FIELD_ORGANISM_ID = 'organismId';
    public const FIELD_ORGANISM_NAME = 'organismName';
    public const FIELD_ORGANISM_NAME_EXT = '_organismName';
    public const FIELD_PARENT_SUBSTANCE_ID = 'parentSubstanceId';
    public const FIELD_PARENT_SUBSTANCE_NAME = 'parentSubstanceName';
    public const FIELD_PARENT_SUBSTANCE_NAME_EXT = '_parentSubstanceName';
    public const FIELD_COUNTRY_OF_ORIGIN = 'countryOfOrigin';
    public const FIELD_GEOGRAPHICAL_LOCATION = 'geographicalLocation';
    public const FIELD_GEOGRAPHICAL_LOCATION_EXT = '_geographicalLocation';
    public const FIELD_DEVELOPMENT_STAGE = 'developmentStage';
    public const FIELD_FRACTION_DESCRIPTION = 'fractionDescription';
    public const FIELD_ORGANISM = 'organism';
    public const FIELD_PART_DESCRIPTION = 'partDescription';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sourceMaterialClass;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source material shall be specified based on a controlled
     * vocabulary. For vaccines, this subclause refers to the class of infectious
     * agent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sourceMaterialType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sourceMaterialState;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The unique identifier associated with the source material parent organism shall
     * be specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $organismId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $organismName;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $parentSubstanceId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $parentSubstanceName;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country where the plant material is harvested or the countries where the
     * plasma is sourced from as laid down in accordance with the Plasma Master File.
     * For “Plasma-derived substances” the attribute country of origin provides
     * information about the countries used for the manufacturing of the Cryopoor plama
     * or Crioprecipitate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $countryOfOrigin;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $geographicalLocation;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stage of life for animals, plants, insects and microorganisms. This information
     * shall be provided only when the substance is significantly different in these
     * stages (e.g. foetal bovine serum).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $developmentStage;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals.
     * Fraction elements are often necessary to define both Substances and Specified
     * Group 1 Substances. For substances derived from Plants, fraction information
     * will be captured at the Substance information level ( . Oils, Juices and
     * Exudates). Additional information for Extracts, such as extraction solvent
     * composition, will be captured at the Specified Substance Group 1 information
     * level. For plasma-derived products fraction information will be captured at the
     * Substance and the Specified Substance Group 1 levels.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[] 
     */
    protected array $fractionDescription;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * This subclause describes the organism which the substance is derived from. For
     * vaccines, the parent organism shall be specified based on these subclause
     * elements. As an example, full taxonomy will be described for the Substance Name:
     * ., Leaf.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism 
     */
    protected FHIRSubstanceSourceMaterialOrganism $organism;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * To do.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[] 
     */
    protected array $partDescription;

    /** Default validation map for fields in type SubstanceSourceMaterial */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceSourceMaterial Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialClass
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialState
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $organismId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $organismName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $parentSubstanceId
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $parentSubstanceName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $countryOfOrigin
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $geographicalLocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $developmentStage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[] $fractionDescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $organism
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[] $partDescription
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
                                null|FHIRCodeableConcept $sourceMaterialClass = null,
                                null|FHIRCodeableConcept $sourceMaterialType = null,
                                null|FHIRCodeableConcept $sourceMaterialState = null,
                                null|FHIRIdentifier $organismId = null,
                                null|string|FHIRStringPrimitive|FHIRString $organismName = null,
                                null|iterable $parentSubstanceId = null,
                                null|iterable $parentSubstanceName = null,
                                null|iterable $countryOfOrigin = null,
                                null|iterable $geographicalLocation = null,
                                null|FHIRCodeableConcept $developmentStage = null,
                                null|iterable $fractionDescription = null,
                                null|FHIRSubstanceSourceMaterialOrganism $organism = null,
                                null|iterable $partDescription = null,
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
        if (null !== $sourceMaterialClass) {
            $this->setSourceMaterialClass($sourceMaterialClass);
        }
        if (null !== $sourceMaterialType) {
            $this->setSourceMaterialType($sourceMaterialType);
        }
        if (null !== $sourceMaterialState) {
            $this->setSourceMaterialState($sourceMaterialState);
        }
        if (null !== $organismId) {
            $this->setOrganismId($organismId);
        }
        if (null !== $organismName) {
            $this->setOrganismName($organismName);
        }
        if (null !== $parentSubstanceId) {
            $this->setParentSubstanceId(...$parentSubstanceId);
        }
        if (null !== $parentSubstanceName) {
            $this->setParentSubstanceName(...$parentSubstanceName);
        }
        if (null !== $countryOfOrigin) {
            $this->setCountryOfOrigin(...$countryOfOrigin);
        }
        if (null !== $geographicalLocation) {
            $this->setGeographicalLocation(...$geographicalLocation);
        }
        if (null !== $developmentStage) {
            $this->setDevelopmentStage($developmentStage);
        }
        if (null !== $fractionDescription) {
            $this->setFractionDescription(...$fractionDescription);
        }
        if (null !== $organism) {
            $this->setOrganism($organism);
        }
        if (null !== $partDescription) {
            $this->setPartDescription(...$partDescription);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialClass(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialClass ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialClass
     * @return static
     */
    public function setSourceMaterialClass(null|FHIRCodeableConcept $sourceMaterialClass): self
    {
        if (null === $sourceMaterialClass) {
            unset($this->sourceMaterialClass);
            return $this;
        }
        $this->sourceMaterialClass = $sourceMaterialClass;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source material shall be specified based on a controlled
     * vocabulary. For vaccines, this subclause refers to the class of infectious
     * agent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialType(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the source material shall be specified based on a controlled
     * vocabulary. For vaccines, this subclause refers to the class of infectious
     * agent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialType
     * @return static
     */
    public function setSourceMaterialType(null|FHIRCodeableConcept $sourceMaterialType): self
    {
        if (null === $sourceMaterialType) {
            unset($this->sourceMaterialType);
            return $this;
        }
        $this->sourceMaterialType = $sourceMaterialType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialState(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialState ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $sourceMaterialState
     * @return static
     */
    public function setSourceMaterialState(null|FHIRCodeableConcept $sourceMaterialState): self
    {
        if (null === $sourceMaterialState) {
            unset($this->sourceMaterialState);
            return $this;
        }
        $this->sourceMaterialState = $sourceMaterialState;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The unique identifier associated with the source material parent organism shall
     * be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getOrganismId(): null|FHIRIdentifier
    {
        return $this->organismId ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The unique identifier associated with the source material parent organism shall
     * be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $organismId
     * @return static
     */
    public function setOrganismId(null|FHIRIdentifier $organismId): self
    {
        if (null === $organismId) {
            unset($this->organismId);
            return $this;
        }
        $this->organismId = $organismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getOrganismName(): null|FHIRString
    {
        return $this->organismName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $organismName
     * @return static
     */
    public function setOrganismName(null|string|FHIRStringPrimitive|FHIRString $organismName): self
    {
        if (null === $organismName) {
            unset($this->organismName);
            return $this;
        }
        if (!($organismName instanceof FHIRString)) {
            $organismName = new FHIRString(value: $organismName);
        }
        $this->organismName = $organismName;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getParentSubstanceId(): array
    {
        return $this->parentSubstanceId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getParentSubstanceIdIterator(): iterable
    {
        if (!isset($this->parentSubstanceId) || [] === $this->parentSubstanceId) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parentSubstanceId);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $parentSubstanceId
     * @return static
     */
    public function addParentSubstanceId(FHIRIdentifier $parentSubstanceId): self
    {
        if (!isset($this->parentSubstanceId)) {
            $this->parentSubstanceId = [];
        }
        $this->parentSubstanceId[] = $parentSubstanceId;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$parentSubstanceId
     * @return static
     */
    public function setParentSubstanceId(FHIRIdentifier ...$parentSubstanceId): self
    {
        $this->parentSubstanceId = $parentSubstanceId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getParentSubstanceName(): array
    {
        return $this->parentSubstanceName ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getParentSubstanceNameIterator(): iterable
    {
        if (!isset($this->parentSubstanceName) || [] === $this->parentSubstanceName) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parentSubstanceName);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $parentSubstanceName
     * @return static
     */
    public function addParentSubstanceName(string|FHIRStringPrimitive|FHIRString $parentSubstanceName): self
    {
        if (!($parentSubstanceName instanceof FHIRString)) {
            $parentSubstanceName = new FHIRString(value: $parentSubstanceName);
        }
        if (!isset($this->parentSubstanceName)) {
            $this->parentSubstanceName = [];
        }
        $this->parentSubstanceName[] = $parentSubstanceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$parentSubstanceName
     * @return static
     */
    public function setParentSubstanceName(string|FHIRStringPrimitive|FHIRString ...$parentSubstanceName): self
    {
        $this->parentSubstanceName = [];
        foreach($parentSubstanceName as $v) {
            if ($v instanceof FHIRString) {
                $this->parentSubstanceName[] = $v;
            } else {
                $this->parentSubstanceName[] = new FHIRString(value: $v);
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
     * The country where the plant material is harvested or the countries where the
     * plasma is sourced from as laid down in accordance with the Plasma Master File.
     * For “Plasma-derived substances” the attribute country of origin provides
     * information about the countries used for the manufacturing of the Cryopoor plama
     * or Crioprecipitate.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountryOfOrigin(): array
    {
        return $this->countryOfOrigin ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCountryOfOriginIterator(): iterable
    {
        if (!isset($this->countryOfOrigin) || [] === $this->countryOfOrigin) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->countryOfOrigin);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country where the plant material is harvested or the countries where the
     * plasma is sourced from as laid down in accordance with the Plasma Master File.
     * For “Plasma-derived substances” the attribute country of origin provides
     * information about the countries used for the manufacturing of the Cryopoor plama
     * or Crioprecipitate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $countryOfOrigin
     * @return static
     */
    public function addCountryOfOrigin(FHIRCodeableConcept $countryOfOrigin): self
    {
        if (!isset($this->countryOfOrigin)) {
            $this->countryOfOrigin = [];
        }
        $this->countryOfOrigin[] = $countryOfOrigin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country where the plant material is harvested or the countries where the
     * plasma is sourced from as laid down in accordance with the Plasma Master File.
     * For “Plasma-derived substances” the attribute country of origin provides
     * information about the countries used for the manufacturing of the Cryopoor plama
     * or Crioprecipitate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$countryOfOrigin
     * @return static
     */
    public function setCountryOfOrigin(FHIRCodeableConcept ...$countryOfOrigin): self
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getGeographicalLocation(): array
    {
        return $this->geographicalLocation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getGeographicalLocationIterator(): iterable
    {
        if (!isset($this->geographicalLocation) || [] === $this->geographicalLocation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->geographicalLocation);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $geographicalLocation
     * @return static
     */
    public function addGeographicalLocation(string|FHIRStringPrimitive|FHIRString $geographicalLocation): self
    {
        if (!($geographicalLocation instanceof FHIRString)) {
            $geographicalLocation = new FHIRString(value: $geographicalLocation);
        }
        if (!isset($this->geographicalLocation)) {
            $this->geographicalLocation = [];
        }
        $this->geographicalLocation[] = $geographicalLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$geographicalLocation
     * @return static
     */
    public function setGeographicalLocation(string|FHIRStringPrimitive|FHIRString ...$geographicalLocation): self
    {
        $this->geographicalLocation = [];
        foreach($geographicalLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->geographicalLocation[] = $v;
            } else {
                $this->geographicalLocation[] = new FHIRString(value: $v);
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
     * Stage of life for animals, plants, insects and microorganisms. This information
     * shall be provided only when the substance is significantly different in these
     * stages (e.g. foetal bovine serum).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDevelopmentStage(): null|FHIRCodeableConcept
    {
        return $this->developmentStage ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stage of life for animals, plants, insects and microorganisms. This information
     * shall be provided only when the substance is significantly different in these
     * stages (e.g. foetal bovine serum).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $developmentStage
     * @return static
     */
    public function setDevelopmentStage(null|FHIRCodeableConcept $developmentStage): self
    {
        if (null === $developmentStage) {
            unset($this->developmentStage);
            return $this;
        }
        $this->developmentStage = $developmentStage;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals.
     * Fraction elements are often necessary to define both Substances and Specified
     * Group 1 Substances. For substances derived from Plants, fraction information
     * will be captured at the Substance information level ( . Oils, Juices and
     * Exudates). Additional information for Extracts, such as extraction solvent
     * composition, will be captured at the Specified Substance Group 1 information
     * level. For plasma-derived products fraction information will be captured at the
     * Substance and the Specified Substance Group 1 levels.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[]
     */
    public function getFractionDescription(): array
    {
        return $this->fractionDescription ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription>
     */
    public function getFractionDescriptionIterator(): iterable
    {
        if (!isset($this->fractionDescription) || [] === $this->fractionDescription) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->fractionDescription);
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals.
     * Fraction elements are often necessary to define both Substances and Specified
     * Group 1 Substances. For substances derived from Plants, fraction information
     * will be captured at the Substance information level ( . Oils, Juices and
     * Exudates). Additional information for Extracts, such as extraction solvent
     * composition, will be captured at the Specified Substance Group 1 information
     * level. For plasma-derived products fraction information will be captured at the
     * Substance and the Specified Substance Group 1 levels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription $fractionDescription
     * @return static
     */
    public function addFractionDescription(FHIRSubstanceSourceMaterialFractionDescription $fractionDescription): self
    {
        if (!isset($this->fractionDescription)) {
            $this->fractionDescription = [];
        }
        $this->fractionDescription[] = $fractionDescription;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals.
     * Fraction elements are often necessary to define both Substances and Specified
     * Group 1 Substances. For substances derived from Plants, fraction information
     * will be captured at the Substance information level ( . Oils, Juices and
     * Exudates). Additional information for Extracts, such as extraction solvent
     * composition, will be captured at the Specified Substance Group 1 information
     * level. For plasma-derived products fraction information will be captured at the
     * Substance and the Specified Substance Group 1 levels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription ...$fractionDescription
     * @return static
     */
    public function setFractionDescription(FHIRSubstanceSourceMaterialFractionDescription ...$fractionDescription): self
    {
        $this->fractionDescription = $fractionDescription;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * This subclause describes the organism which the substance is derived from. For
     * vaccines, the parent organism shall be specified based on these subclause
     * elements. As an example, full taxonomy will be described for the Substance Name:
     * ., Leaf.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
     */
    public function getOrganism(): null|FHIRSubstanceSourceMaterialOrganism
    {
        return $this->organism ?? null;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * This subclause describes the organism which the substance is derived from. For
     * vaccines, the parent organism shall be specified based on these subclause
     * elements. As an example, full taxonomy will be described for the Substance Name:
     * ., Leaf.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $organism
     * @return static
     */
    public function setOrganism(null|FHIRSubstanceSourceMaterialOrganism $organism): self
    {
        if (null === $organism) {
            unset($this->organism);
            return $this;
        }
        $this->organism = $organism;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * To do.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[]
     */
    public function getPartDescription(): array
    {
        return $this->partDescription ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription>
     */
    public function getPartDescriptionIterator(): iterable
    {
        if (!isset($this->partDescription) || [] === $this->partDescription) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->partDescription);
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * To do.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription $partDescription
     * @return static
     */
    public function addPartDescription(FHIRSubstanceSourceMaterialPartDescription $partDescription): self
    {
        if (!isset($this->partDescription)) {
            $this->partDescription = [];
        }
        $this->partDescription[] = $partDescription;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     *
     * To do.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription ...$partDescription
     * @return static
     */
    public function setPartDescription(FHIRSubstanceSourceMaterialPartDescription ...$partDescription): self
    {
        $this->partDescription = $partDescription;
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
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL_CLASS])) {
            $v = $this->getSourceMaterialClass();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_MATERIAL_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL_CLASS])) {
                        $errs[self::FIELD_SOURCE_MATERIAL_CLASS] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL_TYPE])) {
            $v = $this->getSourceMaterialType();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_MATERIAL_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL_TYPE])) {
                        $errs[self::FIELD_SOURCE_MATERIAL_TYPE] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL_STATE])) {
            $v = $this->getSourceMaterialState();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL_STATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_MATERIAL_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL_STATE])) {
                        $errs[self::FIELD_SOURCE_MATERIAL_STATE] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANISM_ID])) {
            $v = $this->getOrganismId();
            foreach($validationRules[self::FIELD_ORGANISM_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANISM_ID])) {
                        $errs[self::FIELD_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANISM_NAME])) {
            $v = $this->getOrganismName();
            foreach($validationRules[self::FIELD_ORGANISM_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANISM_NAME])) {
                        $errs[self::FIELD_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT_SUBSTANCE_ID])) {
            $v = $this->getParentSubstanceId();
            foreach($validationRules[self::FIELD_PARENT_SUBSTANCE_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARENT_SUBSTANCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT_SUBSTANCE_ID])) {
                        $errs[self::FIELD_PARENT_SUBSTANCE_ID] = [];
                    }
                    $errs[self::FIELD_PARENT_SUBSTANCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT_SUBSTANCE_NAME])) {
            $v = $this->getParentSubstanceName();
            foreach($validationRules[self::FIELD_PARENT_SUBSTANCE_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARENT_SUBSTANCE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT_SUBSTANCE_NAME])) {
                        $errs[self::FIELD_PARENT_SUBSTANCE_NAME] = [];
                    }
                    $errs[self::FIELD_PARENT_SUBSTANCE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY_OF_ORIGIN])) {
            $v = $this->getCountryOfOrigin();
            foreach($validationRules[self::FIELD_COUNTRY_OF_ORIGIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNTRY_OF_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY_OF_ORIGIN])) {
                        $errs[self::FIELD_COUNTRY_OF_ORIGIN] = [];
                    }
                    $errs[self::FIELD_COUNTRY_OF_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GEOGRAPHICAL_LOCATION])) {
            $v = $this->getGeographicalLocation();
            foreach($validationRules[self::FIELD_GEOGRAPHICAL_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GEOGRAPHICAL_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GEOGRAPHICAL_LOCATION])) {
                        $errs[self::FIELD_GEOGRAPHICAL_LOCATION] = [];
                    }
                    $errs[self::FIELD_GEOGRAPHICAL_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVELOPMENT_STAGE])) {
            $v = $this->getDevelopmentStage();
            foreach($validationRules[self::FIELD_DEVELOPMENT_STAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEVELOPMENT_STAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVELOPMENT_STAGE])) {
                        $errs[self::FIELD_DEVELOPMENT_STAGE] = [];
                    }
                    $errs[self::FIELD_DEVELOPMENT_STAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRACTION_DESCRIPTION])) {
            $v = $this->getFractionDescription();
            foreach($validationRules[self::FIELD_FRACTION_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FRACTION_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRACTION_DESCRIPTION])) {
                        $errs[self::FIELD_FRACTION_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_FRACTION_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANISM])) {
            $v = $this->getOrganism();
            foreach($validationRules[self::FIELD_ORGANISM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORGANISM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANISM])) {
                        $errs[self::FIELD_ORGANISM] = [];
                    }
                    $errs[self::FIELD_ORGANISM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_DESCRIPTION])) {
            $v = $this->getPartDescription();
            foreach($validationRules[self::FIELD_PART_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PART_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_DESCRIPTION])) {
                        $errs[self::FIELD_PART_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PART_DESCRIPTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSourceMaterial)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_MATERIAL_CLASS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSourceMaterialClass(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_MATERIAL_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSourceMaterialType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_MATERIAL_STATE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSourceMaterialState(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORGANISM_ID === $childName) {
                $v = new FHIRIdentifier();
                $type->setOrganismId(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORGANISM_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOrganismName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARENT_SUBSTANCE_ID === $childName) {
                $v = new FHIRIdentifier();
                $type->addParentSubstanceId(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARENT_SUBSTANCE_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addParentSubstanceName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNTRY_OF_ORIGIN === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCountryOfOrigin(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GEOGRAPHICAL_LOCATION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addGeographicalLocation(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEVELOPMENT_STAGE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDevelopmentStage(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FRACTION_DESCRIPTION === $childName) {
                $v = new FHIRSubstanceSourceMaterialFractionDescription();
                $type->addFractionDescription(FHIRSubstanceSourceMaterialFractionDescription::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORGANISM === $childName) {
                $v = new FHIRSubstanceSourceMaterialOrganism();
                $type->setOrganism(FHIRSubstanceSourceMaterialOrganism::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PART_DESCRIPTION === $childName) {
                $v = new FHIRSubstanceSourceMaterialPartDescription();
                $type->addPartDescription(FHIRSubstanceSourceMaterialPartDescription::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_ORGANISM_NAME])) {
            $pt = $type->getOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORGANISM_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrganismName(new FHIRString(
                    value: (string)$attributes[self::FIELD_ORGANISM_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PARENT_SUBSTANCE_NAME])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_PARENT_SUBSTANCE_NAME],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addParentSubstanceName($v);
        }
        if (isset($attributes[self::FIELD_GEOGRAPHICAL_LOCATION])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_GEOGRAPHICAL_LOCATION],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addGeographicalLocation($v);
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
            $xw->openRootNode('SubstanceSourceMaterial', $this->_getSourceXMLNS());
        }
        if (isset($this->organismName) && $this->organismName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ORGANISM_NAME, $this->organismName->getValue()?->getFormattedValue());
        }
        if (isset($this->parentSubstanceName)) {
           foreach($this->parentSubstanceName as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_PARENT_SUBSTANCE_NAME, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->geographicalLocation)) {
           foreach($this->geographicalLocation as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_GEOGRAPHICAL_LOCATION, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sourceMaterialClass)) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_CLASS);
            $this->sourceMaterialClass->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceMaterialType)) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_TYPE);
            $this->sourceMaterialType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceMaterialState)) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_STATE);
            $this->sourceMaterialState->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->organismId)) {
            $xw->startElement(self::FIELD_ORGANISM_ID);
            $this->organismId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->organismName) && $this->organismName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ORGANISM_NAME);
            $this->organismName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parentSubstanceId)) {
            foreach ($this->parentSubstanceId as $v) {
                $xw->startElement(self::FIELD_PARENT_SUBSTANCE_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->parentSubstanceName)) {
            foreach($this->parentSubstanceName as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_PARENT_SUBSTANCE_NAME);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->countryOfOrigin)) {
            foreach ($this->countryOfOrigin as $v) {
                $xw->startElement(self::FIELD_COUNTRY_OF_ORIGIN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->geographicalLocation)) {
            foreach($this->geographicalLocation as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_GEOGRAPHICAL_LOCATION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->developmentStage)) {
            $xw->startElement(self::FIELD_DEVELOPMENT_STAGE);
            $this->developmentStage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fractionDescription)) {
            foreach ($this->fractionDescription as $v) {
                $xw->startElement(self::FIELD_FRACTION_DESCRIPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->organism)) {
            $xw->startElement(self::FIELD_ORGANISM);
            $this->organism->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->partDescription)) {
            foreach ($this->partDescription as $v) {
                $xw->startElement(self::FIELD_PART_DESCRIPTION);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSourceMaterial)) {
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
        if (isset($json[self::FIELD_SOURCE_MATERIAL_CLASS]) || array_key_exists(self::FIELD_SOURCE_MATERIAL_CLASS, $json)) {
            if ($json[self::FIELD_SOURCE_MATERIAL_CLASS] instanceof FHIRCodeableConcept) {
                $type->setSourceMaterialClass($json[self::FIELD_SOURCE_MATERIAL_CLASS]);
            } else {
                $type->setSourceMaterialClass(new FHIRCodeableConcept($json[self::FIELD_SOURCE_MATERIAL_CLASS]));
            }
        }
        if (isset($json[self::FIELD_SOURCE_MATERIAL_TYPE]) || array_key_exists(self::FIELD_SOURCE_MATERIAL_TYPE, $json)) {
            if ($json[self::FIELD_SOURCE_MATERIAL_TYPE] instanceof FHIRCodeableConcept) {
                $type->setSourceMaterialType($json[self::FIELD_SOURCE_MATERIAL_TYPE]);
            } else {
                $type->setSourceMaterialType(new FHIRCodeableConcept($json[self::FIELD_SOURCE_MATERIAL_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SOURCE_MATERIAL_STATE]) || array_key_exists(self::FIELD_SOURCE_MATERIAL_STATE, $json)) {
            if ($json[self::FIELD_SOURCE_MATERIAL_STATE] instanceof FHIRCodeableConcept) {
                $type->setSourceMaterialState($json[self::FIELD_SOURCE_MATERIAL_STATE]);
            } else {
                $type->setSourceMaterialState(new FHIRCodeableConcept($json[self::FIELD_SOURCE_MATERIAL_STATE]));
            }
        }
        if (isset($json[self::FIELD_ORGANISM_ID]) || array_key_exists(self::FIELD_ORGANISM_ID, $json)) {
            if ($json[self::FIELD_ORGANISM_ID] instanceof FHIRIdentifier) {
                $type->setOrganismId($json[self::FIELD_ORGANISM_ID]);
            } else {
                $type->setOrganismId(new FHIRIdentifier($json[self::FIELD_ORGANISM_ID]));
            }
        }
        if (isset($json[self::FIELD_ORGANISM_NAME]) || isset($json[self::FIELD_ORGANISM_NAME_EXT]) || array_key_exists(self::FIELD_ORGANISM_NAME, $json) || array_key_exists(self::FIELD_ORGANISM_NAME_EXT, $json)) {
            $value = $json[self::FIELD_ORGANISM_NAME] ?? null;
            $ext = (isset($json[self::FIELD_ORGANISM_NAME_EXT]) && is_array($json[self::FIELD_ORGANISM_NAME_EXT])) ? $json[self::FIELD_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setOrganismName($value);
                } else if (is_array($value)) {
                    $type->setOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOrganismName(new FHIRString($ext));
            } else {
                $type->setOrganismName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PARENT_SUBSTANCE_ID]) || array_key_exists(self::FIELD_PARENT_SUBSTANCE_ID, $json)) {
            if (is_array($json[self::FIELD_PARENT_SUBSTANCE_ID])) {
                foreach($json[self::FIELD_PARENT_SUBSTANCE_ID] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addParentSubstanceId($v);
                    } else {
                        $type->addParentSubstanceId(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_PARENT_SUBSTANCE_ID] instanceof FHIRIdentifier) {
                $type->addParentSubstanceId($json[self::FIELD_PARENT_SUBSTANCE_ID]);
            } else {
                $type->addParentSubstanceId(new FHIRIdentifier($json[self::FIELD_PARENT_SUBSTANCE_ID]));
            }
        }
        if (isset($json[self::FIELD_PARENT_SUBSTANCE_NAME]) || isset($json[self::FIELD_PARENT_SUBSTANCE_NAME_EXT]) || array_key_exists(self::FIELD_PARENT_SUBSTANCE_NAME, $json) || array_key_exists(self::FIELD_PARENT_SUBSTANCE_NAME_EXT, $json)) {
            $value = $json[self::FIELD_PARENT_SUBSTANCE_NAME] ?? null;
            $ext = (isset($json[self::FIELD_PARENT_SUBSTANCE_NAME_EXT]) && is_array($json[self::FIELD_PARENT_SUBSTANCE_NAME_EXT])) ? $json[self::FIELD_PARENT_SUBSTANCE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addParentSubstanceName($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addParentSubstanceName($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addParentSubstanceName(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addParentSubstanceName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addParentSubstanceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addParentSubstanceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addParentSubstanceName(new FHIRString($iext));
                }
            } else {
                $type->addParentSubstanceName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COUNTRY_OF_ORIGIN]) || array_key_exists(self::FIELD_COUNTRY_OF_ORIGIN, $json)) {
            if (is_array($json[self::FIELD_COUNTRY_OF_ORIGIN])) {
                foreach($json[self::FIELD_COUNTRY_OF_ORIGIN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addCountryOfOrigin($v);
                    } else {
                        $type->addCountryOfOrigin(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_COUNTRY_OF_ORIGIN] instanceof FHIRCodeableConcept) {
                $type->addCountryOfOrigin($json[self::FIELD_COUNTRY_OF_ORIGIN]);
            } else {
                $type->addCountryOfOrigin(new FHIRCodeableConcept($json[self::FIELD_COUNTRY_OF_ORIGIN]));
            }
        }
        if (isset($json[self::FIELD_GEOGRAPHICAL_LOCATION]) || isset($json[self::FIELD_GEOGRAPHICAL_LOCATION_EXT]) || array_key_exists(self::FIELD_GEOGRAPHICAL_LOCATION, $json) || array_key_exists(self::FIELD_GEOGRAPHICAL_LOCATION_EXT, $json)) {
            $value = $json[self::FIELD_GEOGRAPHICAL_LOCATION] ?? null;
            $ext = (isset($json[self::FIELD_GEOGRAPHICAL_LOCATION_EXT]) && is_array($json[self::FIELD_GEOGRAPHICAL_LOCATION_EXT])) ? $json[self::FIELD_GEOGRAPHICAL_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addGeographicalLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addGeographicalLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addGeographicalLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addGeographicalLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addGeographicalLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addGeographicalLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addGeographicalLocation(new FHIRString($iext));
                }
            } else {
                $type->addGeographicalLocation(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEVELOPMENT_STAGE]) || array_key_exists(self::FIELD_DEVELOPMENT_STAGE, $json)) {
            if ($json[self::FIELD_DEVELOPMENT_STAGE] instanceof FHIRCodeableConcept) {
                $type->setDevelopmentStage($json[self::FIELD_DEVELOPMENT_STAGE]);
            } else {
                $type->setDevelopmentStage(new FHIRCodeableConcept($json[self::FIELD_DEVELOPMENT_STAGE]));
            }
        }
        if (isset($json[self::FIELD_FRACTION_DESCRIPTION]) || array_key_exists(self::FIELD_FRACTION_DESCRIPTION, $json)) {
            if (is_array($json[self::FIELD_FRACTION_DESCRIPTION])) {
                foreach($json[self::FIELD_FRACTION_DESCRIPTION] as $v) {
                    if ($v instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                        $type->addFractionDescription($v);
                    } else {
                        $type->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($v));
                    }
                }
            } elseif ($json[self::FIELD_FRACTION_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                $type->addFractionDescription($json[self::FIELD_FRACTION_DESCRIPTION]);
            } else {
                $type->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($json[self::FIELD_FRACTION_DESCRIPTION]));
            }
        }
        if (isset($json[self::FIELD_ORGANISM]) || array_key_exists(self::FIELD_ORGANISM, $json)) {
            if ($json[self::FIELD_ORGANISM] instanceof FHIRSubstanceSourceMaterialOrganism) {
                $type->setOrganism($json[self::FIELD_ORGANISM]);
            } else {
                $type->setOrganism(new FHIRSubstanceSourceMaterialOrganism($json[self::FIELD_ORGANISM]));
            }
        }
        if (isset($json[self::FIELD_PART_DESCRIPTION]) || array_key_exists(self::FIELD_PART_DESCRIPTION, $json)) {
            if (is_array($json[self::FIELD_PART_DESCRIPTION])) {
                foreach($json[self::FIELD_PART_DESCRIPTION] as $v) {
                    if ($v instanceof FHIRSubstanceSourceMaterialPartDescription) {
                        $type->addPartDescription($v);
                    } else {
                        $type->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($v));
                    }
                }
            } elseif ($json[self::FIELD_PART_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialPartDescription) {
                $type->addPartDescription($json[self::FIELD_PART_DESCRIPTION]);
            } else {
                $type->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($json[self::FIELD_PART_DESCRIPTION]));
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
        if (isset($this->sourceMaterialClass)) {
            $out->sourceMaterialClass = $this->sourceMaterialClass;
        }
        if (isset($this->sourceMaterialType)) {
            $out->sourceMaterialType = $this->sourceMaterialType;
        }
        if (isset($this->sourceMaterialState)) {
            $out->sourceMaterialState = $this->sourceMaterialState;
        }
        if (isset($this->organismId)) {
            $out->organismId = $this->organismId;
        }
        if (isset($this->organismName)) {
            if (null !== ($val = $this->organismName->getValue())) {
                $out->organismName = $val;
            }
            $ext = $this->organismName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_organismName = $ext;
            }
        }
        if (isset($this->parentSubstanceId) && [] !== $this->parentSubstanceId) {
            $out->parentSubstanceId = $this->parentSubstanceId;
        }
        if (isset($this->parentSubstanceName) && [] !== $this->parentSubstanceName) {
            $vals = [];
            $exts = [];
            foreach ($this->parentSubstanceName as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->parentSubstanceName = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_parentSubstanceName = $exts;
            }
        }
        if (isset($this->countryOfOrigin) && [] !== $this->countryOfOrigin) {
            $out->countryOfOrigin = $this->countryOfOrigin;
        }
        if (isset($this->geographicalLocation) && [] !== $this->geographicalLocation) {
            $vals = [];
            $exts = [];
            foreach ($this->geographicalLocation as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->geographicalLocation = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_geographicalLocation = $exts;
            }
        }
        if (isset($this->developmentStage)) {
            $out->developmentStage = $this->developmentStage;
        }
        if (isset($this->fractionDescription) && [] !== $this->fractionDescription) {
            $out->fractionDescription = $this->fractionDescription;
        }
        if (isset($this->organism)) {
            $out->organism = $this->organism;
        }
        if (isset($this->partDescription) && [] !== $this->partDescription) {
            $out->partDescription = $this->partDescription;
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