<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

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
 *
 * Class FHIRSubstanceSourceMaterial
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceSourceMaterial extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL;

    const FIELD_SOURCE_MATERIAL_CLASS = 'sourceMaterialClass';
    const FIELD_SOURCE_MATERIAL_TYPE = 'sourceMaterialType';
    const FIELD_SOURCE_MATERIAL_STATE = 'sourceMaterialState';
    const FIELD_ORGANISM_ID = 'organismId';
    const FIELD_ORGANISM_NAME = 'organismName';
    const FIELD_ORGANISM_NAME_EXT = '_organismName';
    const FIELD_PARENT_SUBSTANCE_ID = 'parentSubstanceId';
    const FIELD_PARENT_SUBSTANCE_NAME = 'parentSubstanceName';
    const FIELD_PARENT_SUBSTANCE_NAME_EXT = '_parentSubstanceName';
    const FIELD_COUNTRY_OF_ORIGIN = 'countryOfOrigin';
    const FIELD_GEOGRAPHICAL_LOCATION = 'geographicalLocation';
    const FIELD_GEOGRAPHICAL_LOCATION_EXT = '_geographicalLocation';
    const FIELD_DEVELOPMENT_STAGE = 'developmentStage';
    const FIELD_FRACTION_DESCRIPTION = 'fractionDescription';
    const FIELD_ORGANISM = 'organism';
    const FIELD_PART_DESCRIPTION = 'partDescription';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $sourceMaterialClass = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $sourceMaterialType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $sourceMaterialState = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The unique identifier associated with the source material parent organism shall
     * be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    protected null|FHIRIdentifier $organismId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $organismName = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $parentSubstanceId = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $parentSubstanceName = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $countryOfOrigin = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $geographicalLocation = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $developmentStage = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[]
     */
    protected null|array $fractionDescription = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
     */
    protected null|FHIRSubstanceSourceMaterialOrganism $organism = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[]
     */
    protected null|array $partDescription = [];

    /**
     * Validation map for fields in type SubstanceSourceMaterial
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSubstanceSourceMaterial Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SOURCE_MATERIAL_CLASS, $data)) {
            if ($data[self::FIELD_SOURCE_MATERIAL_CLASS] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialClass($data[self::FIELD_SOURCE_MATERIAL_CLASS]);
            } else {
                $this->setSourceMaterialClass(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_CLASS]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE_MATERIAL_TYPE, $data)) {
            if ($data[self::FIELD_SOURCE_MATERIAL_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialType($data[self::FIELD_SOURCE_MATERIAL_TYPE]);
            } else {
                $this->setSourceMaterialType(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE_MATERIAL_STATE, $data)) {
            if ($data[self::FIELD_SOURCE_MATERIAL_STATE] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialState($data[self::FIELD_SOURCE_MATERIAL_STATE]);
            } else {
                $this->setSourceMaterialState(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_STATE]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANISM_ID, $data)) {
            if ($data[self::FIELD_ORGANISM_ID] instanceof FHIRIdentifier) {
                $this->setOrganismId($data[self::FIELD_ORGANISM_ID]);
            } else {
                $this->setOrganismId(new FHIRIdentifier($data[self::FIELD_ORGANISM_ID]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANISM_NAME, $data) || array_key_exists(self::FIELD_ORGANISM_NAME_EXT, $data)) {
            $value = $data[self::FIELD_ORGANISM_NAME] ?? null;
            $ext = (isset($data[self::FIELD_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_ORGANISM_NAME_EXT])) ? $data[self::FIELD_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOrganismName($value);
                } else if (is_array($value)) {
                    $this->setOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrganismName(new FHIRString($ext));
            } else {
                $this->setOrganismName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PARENT_SUBSTANCE_ID, $data)) {
            if (is_array($data[self::FIELD_PARENT_SUBSTANCE_ID])) {
                foreach($data[self::FIELD_PARENT_SUBSTANCE_ID] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addParentSubstanceId($v);
                    } else {
                        $this->addParentSubstanceId(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_PARENT_SUBSTANCE_ID] instanceof FHIRIdentifier) {
                $this->addParentSubstanceId($data[self::FIELD_PARENT_SUBSTANCE_ID]);
            } else {
                $this->addParentSubstanceId(new FHIRIdentifier($data[self::FIELD_PARENT_SUBSTANCE_ID]));
            }
        }
        if (array_key_exists(self::FIELD_PARENT_SUBSTANCE_NAME, $data) || array_key_exists(self::FIELD_PARENT_SUBSTANCE_NAME_EXT, $data)) {
            $value = $data[self::FIELD_PARENT_SUBSTANCE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT]) && is_array($data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT])) ? $data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addParentSubstanceName($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addParentSubstanceName($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addParentSubstanceName(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addParentSubstanceName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addParentSubstanceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addParentSubstanceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addParentSubstanceName(new FHIRString($iext));
                }
            } else {
                $this->addParentSubstanceName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COUNTRY_OF_ORIGIN, $data)) {
            if (is_array($data[self::FIELD_COUNTRY_OF_ORIGIN])) {
                foreach($data[self::FIELD_COUNTRY_OF_ORIGIN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountryOfOrigin($v);
                    } else {
                        $this->addCountryOfOrigin(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COUNTRY_OF_ORIGIN] instanceof FHIRCodeableConcept) {
                $this->addCountryOfOrigin($data[self::FIELD_COUNTRY_OF_ORIGIN]);
            } else {
                $this->addCountryOfOrigin(new FHIRCodeableConcept($data[self::FIELD_COUNTRY_OF_ORIGIN]));
            }
        }
        if (array_key_exists(self::FIELD_GEOGRAPHICAL_LOCATION, $data) || array_key_exists(self::FIELD_GEOGRAPHICAL_LOCATION_EXT, $data)) {
            $value = $data[self::FIELD_GEOGRAPHICAL_LOCATION] ?? null;
            $ext = (isset($data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT]) && is_array($data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT])) ? $data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addGeographicalLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addGeographicalLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addGeographicalLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addGeographicalLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addGeographicalLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addGeographicalLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGeographicalLocation(new FHIRString($iext));
                }
            } else {
                $this->addGeographicalLocation(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEVELOPMENT_STAGE, $data)) {
            if ($data[self::FIELD_DEVELOPMENT_STAGE] instanceof FHIRCodeableConcept) {
                $this->setDevelopmentStage($data[self::FIELD_DEVELOPMENT_STAGE]);
            } else {
                $this->setDevelopmentStage(new FHIRCodeableConcept($data[self::FIELD_DEVELOPMENT_STAGE]));
            }
        }
        if (array_key_exists(self::FIELD_FRACTION_DESCRIPTION, $data)) {
            if (is_array($data[self::FIELD_FRACTION_DESCRIPTION])) {
                foreach($data[self::FIELD_FRACTION_DESCRIPTION] as $v) {
                    if ($v instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                        $this->addFractionDescription($v);
                    } else {
                        $this->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($v));
                    }
                }
            } elseif ($data[self::FIELD_FRACTION_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                $this->addFractionDescription($data[self::FIELD_FRACTION_DESCRIPTION]);
            } else {
                $this->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($data[self::FIELD_FRACTION_DESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANISM, $data)) {
            if ($data[self::FIELD_ORGANISM] instanceof FHIRSubstanceSourceMaterialOrganism) {
                $this->setOrganism($data[self::FIELD_ORGANISM]);
            } else {
                $this->setOrganism(new FHIRSubstanceSourceMaterialOrganism($data[self::FIELD_ORGANISM]));
            }
        }
        if (array_key_exists(self::FIELD_PART_DESCRIPTION, $data)) {
            if (is_array($data[self::FIELD_PART_DESCRIPTION])) {
                foreach($data[self::FIELD_PART_DESCRIPTION] as $v) {
                    if ($v instanceof FHIRSubstanceSourceMaterialPartDescription) {
                        $this->addPartDescription($v);
                    } else {
                        $this->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialPartDescription) {
                $this->addPartDescription($data[self::FIELD_PART_DESCRIPTION]);
            } else {
                $this->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($data[self::FIELD_PART_DESCRIPTION]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSourceMaterialClass(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialClass;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sourceMaterialClass
     * @return static
     */
    public function setSourceMaterialClass(null|FHIRCodeableConcept $sourceMaterialClass = null): self
    {
        if (null === $sourceMaterialClass) {
            $sourceMaterialClass = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->sourceMaterialClass, $sourceMaterialClass);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSourceMaterialType(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialType;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sourceMaterialType
     * @return static
     */
    public function setSourceMaterialType(null|FHIRCodeableConcept $sourceMaterialType = null): self
    {
        if (null === $sourceMaterialType) {
            $sourceMaterialType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->sourceMaterialType, $sourceMaterialType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSourceMaterialState(): null|FHIRCodeableConcept
    {
        return $this->sourceMaterialState;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sourceMaterialState
     * @return static
     */
    public function setSourceMaterialState(null|FHIRCodeableConcept $sourceMaterialState = null): self
    {
        if (null === $sourceMaterialState) {
            $sourceMaterialState = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->sourceMaterialState, $sourceMaterialState);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getOrganismId(): null|FHIRIdentifier
    {
        return $this->organismId;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $organismId
     * @return static
     */
    public function setOrganismId(null|FHIRIdentifier $organismId = null): self
    {
        if (null === $organismId) {
            $organismId = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->organismId, $organismId);
        $this->organismId = $organismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getOrganismName(): null|FHIRString
    {
        return $this->organismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $organismName
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOrganismName(null|string|FHIRStringPrimitive|FHIRString $organismName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $organismName && !($organismName instanceof FHIRString)) {
            $organismName = new FHIRString($organismName);
        }
        $this->_trackValueSet($this->organismName, $organismName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ORGANISM_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_ORGANISM_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ORGANISM_NAME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getParentSubstanceId(): null|array
    {
        return $this->parentSubstanceId;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $parentSubstanceId
     * @return static
     */
    public function addParentSubstanceId(null|FHIRIdentifier $parentSubstanceId = null): self
    {
        if (null === $parentSubstanceId) {
            $parentSubstanceId = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->parentSubstanceId[] = $parentSubstanceId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getParentSubstanceName(): null|array
    {
        return $this->parentSubstanceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $parentSubstanceName
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addParentSubstanceName(null|string|FHIRStringPrimitive|FHIRString $parentSubstanceName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $parentSubstanceName && !($parentSubstanceName instanceof FHIRString)) {
            $parentSubstanceName = new FHIRString($parentSubstanceName);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME][] = $xmlLocation;
        $this->parentSubstanceName[] = $parentSubstanceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $parentSubstanceName
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setParentSubstanceName(array $parentSubstanceName = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME]);
        if ([] !== $this->parentSubstanceName) {
            $this->_trackValuesRemoved(count($this->parentSubstanceName));
            $this->parentSubstanceName = [];
        }
        if ([] === $parentSubstanceName) {
            return $this;
        }
        foreach($parentSubstanceName as $v) {
            if ($v instanceof FHIRString) {
                $this->addParentSubstanceName($v, $xmlLocation);
            } else {
                $this->addParentSubstanceName(new FHIRString($v), $xmlLocation);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCountryOfOrigin(): null|array
    {
        return $this->countryOfOrigin;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $countryOfOrigin
     * @return static
     */
    public function addCountryOfOrigin(null|FHIRCodeableConcept $countryOfOrigin = null): self
    {
        if (null === $countryOfOrigin) {
            $countryOfOrigin = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->countryOfOrigin[] = $countryOfOrigin;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getGeographicalLocation(): null|array
    {
        return $this->geographicalLocation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $geographicalLocation
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addGeographicalLocation(null|string|FHIRStringPrimitive|FHIRString $geographicalLocation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $geographicalLocation && !($geographicalLocation instanceof FHIRString)) {
            $geographicalLocation = new FHIRString($geographicalLocation);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION])) {
            $this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION][] = $xmlLocation;
        $this->geographicalLocation[] = $geographicalLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $geographicalLocation
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGeographicalLocation(array $geographicalLocation = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION]);
        if ([] !== $this->geographicalLocation) {
            $this->_trackValuesRemoved(count($this->geographicalLocation));
            $this->geographicalLocation = [];
        }
        if ([] === $geographicalLocation) {
            return $this;
        }
        foreach($geographicalLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->addGeographicalLocation($v, $xmlLocation);
            } else {
                $this->addGeographicalLocation(new FHIRString($v), $xmlLocation);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDevelopmentStage(): null|FHIRCodeableConcept
    {
        return $this->developmentStage;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $developmentStage
     * @return static
     */
    public function setDevelopmentStage(null|FHIRCodeableConcept $developmentStage = null): self
    {
        if (null === $developmentStage) {
            $developmentStage = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->developmentStage, $developmentStage);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[]
     */
    public function getFractionDescription(): null|array
    {
        return $this->fractionDescription;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription $fractionDescription
     * @return static
     */
    public function addFractionDescription(null|FHIRSubstanceSourceMaterialFractionDescription $fractionDescription = null): self
    {
        if (null === $fractionDescription) {
            $fractionDescription = new FHIRSubstanceSourceMaterialFractionDescription();
        }
        $this->_trackValueAdded();
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
     * This subclause describes the organism which the substance is derived from. For
     * vaccines, the parent organism shall be specified based on these subclause
     * elements. As an example, full taxonomy will be described for the Substance Name:
     * ., Leaf.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
     */
    public function getOrganism(): null|FHIRSubstanceSourceMaterialOrganism
    {
        return $this->organism;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $organism
     * @return static
     */
    public function setOrganism(null|FHIRSubstanceSourceMaterialOrganism $organism = null): self
    {
        if (null === $organism) {
            $organism = new FHIRSubstanceSourceMaterialOrganism();
        }
        $this->_trackValueSet($this->organism, $organism);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[]
     */
    public function getPartDescription(): null|array
    {
        return $this->partDescription;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription $partDescription
     * @return static
     */
    public function addPartDescription(null|FHIRSubstanceSourceMaterialPartDescription $partDescription = null): self
    {
        if (null === $partDescription) {
            $partDescription = new FHIRSubstanceSourceMaterialPartDescription();
        }
        $this->_trackValueAdded();
        $this->partDescription[] = $partDescription;
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
        if (null !== ($v = $this->getSourceMaterialClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganismId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganismName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARENT_SUBSTANCE_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARENT_SUBSTANCE_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY_OF_ORIGIN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGeographicalLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GEOGRAPHICAL_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDevelopmentStage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVELOPMENT_STAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFractionDescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FRACTION_DESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOrganism())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPartDescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_DESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL_CLASS])) {
            $v = $this->getSourceMaterialClass();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_SOURCE_MATERIAL_CLASS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_SOURCE_MATERIAL_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_SOURCE_MATERIAL_STATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_ORGANISM_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_ORGANISM_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_PARENT_SUBSTANCE_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_PARENT_SUBSTANCE_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_COUNTRY_OF_ORIGIN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_GEOGRAPHICAL_LOCATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_DEVELOPMENT_STAGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_FRACTION_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_ORGANISM, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL, self::FIELD_PART_DESCRIPTION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
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
        } else if (!($type instanceof FHIRSubstanceSourceMaterial)) {
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
            if (self::FIELD_SOURCE_MATERIAL_CLASS === $childName) {
                $type->setSourceMaterialClass(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE_MATERIAL_TYPE === $childName) {
                $type->setSourceMaterialType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE_MATERIAL_STATE === $childName) {
                $type->setSourceMaterialState(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANISM_ID === $childName) {
                $type->setOrganismId(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANISM_NAME === $childName) {
                $type->setOrganismName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARENT_SUBSTANCE_ID === $childName) {
                $type->addParentSubstanceId(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARENT_SUBSTANCE_NAME === $childName) {
                $type->addParentSubstanceName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COUNTRY_OF_ORIGIN === $childName) {
                $type->addCountryOfOrigin(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GEOGRAPHICAL_LOCATION === $childName) {
                $type->addGeographicalLocation(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEVELOPMENT_STAGE === $childName) {
                $type->setDevelopmentStage(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FRACTION_DESCRIPTION === $childName) {
                $type->addFractionDescription(FHIRSubstanceSourceMaterialFractionDescription::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANISM === $childName) {
                $type->setOrganism(FHIRSubstanceSourceMaterialOrganism::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PART_DESCRIPTION === $childName) {
                $type->addPartDescription(FHIRSubstanceSourceMaterialPartDescription::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_ORGANISM_NAME])) {
            $pt = $type->getOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrganismName((string)$attributes[self::FIELD_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARENT_SUBSTANCE_NAME])) {
            $type->addParentSubstanceName((string)$attributes[self::FIELD_PARENT_SUBSTANCE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GEOGRAPHICAL_LOCATION])) {
            $type->addGeographicalLocation((string)$attributes[self::FIELD_GEOGRAPHICAL_LOCATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'SubstanceSourceMaterial', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOrganismName())) {
            $xw->writeAttribute(self::FIELD_ORGANISM_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getParentSubstanceName())) {
            $xw->writeAttribute(self::FIELD_PARENT_SUBSTANCE_NAME, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getParentSubstanceName()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PARENT_SUBSTANCE_NAME, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getGeographicalLocation())) {
            $xw->writeAttribute(self::FIELD_GEOGRAPHICAL_LOCATION, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getGeographicalLocation()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_GEOGRAPHICAL_LOCATION, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getSourceMaterialClass())) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_CLASS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            $xw->startElement(self::FIELD_SOURCE_MATERIAL_STATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOrganismId())) {
            $xw->startElement(self::FIELD_ORGANISM_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOrganismName())) {
            $xw->startElement(self::FIELD_ORGANISM_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParentSubstanceId() as $v) {
            $xw->startElement(self::FIELD_PARENT_SUBSTANCE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PARENT_SUBSTANCE_NAME] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getParentSubstanceName())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PARENT_SUBSTANCE_NAME);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getCountryOfOrigin() as $v) {
            $xw->startElement(self::FIELD_COUNTRY_OF_ORIGIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GEOGRAPHICAL_LOCATION] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getGeographicalLocation())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_GEOGRAPHICAL_LOCATION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getDevelopmentStage())) {
            $xw->startElement(self::FIELD_DEVELOPMENT_STAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFractionDescription() as $v) {
            $xw->startElement(self::FIELD_FRACTION_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOrganism())) {
            $xw->startElement(self::FIELD_ORGANISM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPartDescription() as $v) {
            $xw->startElement(self::FIELD_PART_DESCRIPTION);
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
        if (null !== ($v = $this->getSourceMaterialClass())) {
            $out->{self::FIELD_SOURCE_MATERIAL_CLASS} = $v;
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            $out->{self::FIELD_SOURCE_MATERIAL_TYPE} = $v;
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            $out->{self::FIELD_SOURCE_MATERIAL_STATE} = $v;
        }
        if (null !== ($v = $this->getOrganismId())) {
            $out->{self::FIELD_ORGANISM_ID} = $v;
        }
        if (null !== ($v = $this->getOrganismName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORGANISM_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORGANISM_NAME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceId())) {
            $out->{self::FIELD_PARENT_SUBSTANCE_ID} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARENT_SUBSTANCE_ID}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceName())) {
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
                $out->{self::FIELD_PARENT_SUBSTANCE_NAME} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARENT_SUBSTANCE_NAME_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            $out->{self::FIELD_COUNTRY_OF_ORIGIN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COUNTRY_OF_ORIGIN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getGeographicalLocation())) {
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
                $out->{self::FIELD_GEOGRAPHICAL_LOCATION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GEOGRAPHICAL_LOCATION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getDevelopmentStage())) {
            $out->{self::FIELD_DEVELOPMENT_STAGE} = $v;
        }
        if ([] !== ($vs = $this->getFractionDescription())) {
            $out->{self::FIELD_FRACTION_DESCRIPTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_FRACTION_DESCRIPTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getOrganism())) {
            $out->{self::FIELD_ORGANISM} = $v;
        }
        if ([] !== ($vs = $this->getPartDescription())) {
            $out->{self::FIELD_PART_DESCRIPTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PART_DESCRIPTION}[] = $v;
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