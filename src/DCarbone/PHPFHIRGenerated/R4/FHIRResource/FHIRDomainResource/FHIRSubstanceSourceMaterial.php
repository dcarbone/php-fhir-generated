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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceSourceMaterial extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL;
    const FIELD_COUNTRY_OF_ORIGIN = 'countryOfOrigin';
    const FIELD_DEVELOPMENT_STAGE = 'developmentStage';
    const FIELD_FRACTION_DESCRIPTION = 'fractionDescription';
    const FIELD_GEOGRAPHICAL_LOCATION = 'geographicalLocation';
    const FIELD_GEOGRAPHICAL_LOCATION_EXT = '_geographicalLocation';
    const FIELD_ORGANISM = 'organism';
    const FIELD_ORGANISM_ID = 'organismId';
    const FIELD_ORGANISM_NAME = 'organismName';
    const FIELD_ORGANISM_NAME_EXT = '_organismName';
    const FIELD_PARENT_SUBSTANCE_ID = 'parentSubstanceId';
    const FIELD_PARENT_SUBSTANCE_NAME = 'parentSubstanceName';
    const FIELD_PARENT_SUBSTANCE_NAME_EXT = '_parentSubstanceName';
    const FIELD_PART_DESCRIPTION = 'partDescription';
    const FIELD_SOURCE_MATERIAL_CLASS = 'sourceMaterialClass';
    const FIELD_SOURCE_MATERIAL_STATE = 'sourceMaterialState';
    const FIELD_SOURCE_MATERIAL_TYPE = 'sourceMaterialType';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $countryOfOrigin = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $developmentStage = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[]
     */
    protected $fractionDescription = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $geographicalLocation = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
     */
    protected $organism = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The unique identifier associated with the source material parent organism shall
     * be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $organismId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $organismName = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the
     * substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $parentSubstanceId = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $parentSubstanceName = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[]
     */
    protected $partDescription = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $sourceMaterialClass = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The state of the source material when extracted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $sourceMaterialState = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $sourceMaterialType = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSourceMaterial Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterial::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COUNTRY_OF_ORIGIN])) {
            if (is_array($data[self::FIELD_COUNTRY_OF_ORIGIN])) {
                foreach($data[self::FIELD_COUNTRY_OF_ORIGIN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountryOfOrigin($v);
                    } else {
                        $this->addCountryOfOrigin(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COUNTRY_OF_ORIGIN] instanceof FHIRCodeableConcept) {
                $this->addCountryOfOrigin($data[self::FIELD_COUNTRY_OF_ORIGIN]);
            } else {
                $this->addCountryOfOrigin(new FHIRCodeableConcept($data[self::FIELD_COUNTRY_OF_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_DEVELOPMENT_STAGE])) {
            if ($data[self::FIELD_DEVELOPMENT_STAGE] instanceof FHIRCodeableConcept) {
                $this->setDevelopmentStage($data[self::FIELD_DEVELOPMENT_STAGE]);
            } else {
                $this->setDevelopmentStage(new FHIRCodeableConcept($data[self::FIELD_DEVELOPMENT_STAGE]));
            }
        }
        if (isset($data[self::FIELD_FRACTION_DESCRIPTION])) {
            if (is_array($data[self::FIELD_FRACTION_DESCRIPTION])) {
                foreach($data[self::FIELD_FRACTION_DESCRIPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                        $this->addFractionDescription($v);
                    } else {
                        $this->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($v));
                    }
                }
            } else if ($data[self::FIELD_FRACTION_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                $this->addFractionDescription($data[self::FIELD_FRACTION_DESCRIPTION]);
            } else {
                $this->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($data[self::FIELD_FRACTION_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_GEOGRAPHICAL_LOCATION]) || isset($data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT])) {
            if (isset($data[self::FIELD_GEOGRAPHICAL_LOCATION])) {
                $value = $data[self::FIELD_GEOGRAPHICAL_LOCATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT]) && is_array($data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT])) {
                $ext = $data[self::FIELD_GEOGRAPHICAL_LOCATION_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGeographicalLocation(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_ORGANISM])) {
            if ($data[self::FIELD_ORGANISM] instanceof FHIRSubstanceSourceMaterialOrganism) {
                $this->setOrganism($data[self::FIELD_ORGANISM]);
            } else {
                $this->setOrganism(new FHIRSubstanceSourceMaterialOrganism($data[self::FIELD_ORGANISM]));
            }
        }
        if (isset($data[self::FIELD_ORGANISM_ID])) {
            if ($data[self::FIELD_ORGANISM_ID] instanceof FHIRIdentifier) {
                $this->setOrganismId($data[self::FIELD_ORGANISM_ID]);
            } else {
                $this->setOrganismId(new FHIRIdentifier($data[self::FIELD_ORGANISM_ID]));
            }
        }
        if (isset($data[self::FIELD_ORGANISM_NAME]) || isset($data[self::FIELD_ORGANISM_NAME_EXT])) {
            if (isset($data[self::FIELD_ORGANISM_NAME])) {
                $value = $data[self::FIELD_ORGANISM_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_ORGANISM_NAME_EXT])) {
                $ext = $data[self::FIELD_ORGANISM_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOrganismName($value);
                } else if (is_array($value)) {
                    $this->setOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrganismName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARENT_SUBSTANCE_ID])) {
            if (is_array($data[self::FIELD_PARENT_SUBSTANCE_ID])) {
                foreach($data[self::FIELD_PARENT_SUBSTANCE_ID] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addParentSubstanceId($v);
                    } else {
                        $this->addParentSubstanceId(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_PARENT_SUBSTANCE_ID] instanceof FHIRIdentifier) {
                $this->addParentSubstanceId($data[self::FIELD_PARENT_SUBSTANCE_ID]);
            } else {
                $this->addParentSubstanceId(new FHIRIdentifier($data[self::FIELD_PARENT_SUBSTANCE_ID]));
            }
        }
        if (isset($data[self::FIELD_PARENT_SUBSTANCE_NAME]) || isset($data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT])) {
            if (isset($data[self::FIELD_PARENT_SUBSTANCE_NAME])) {
                $value = $data[self::FIELD_PARENT_SUBSTANCE_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT]) && is_array($data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT])) {
                $ext = $data[self::FIELD_PARENT_SUBSTANCE_NAME_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addParentSubstanceName(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PART_DESCRIPTION])) {
            if (is_array($data[self::FIELD_PART_DESCRIPTION])) {
                foreach($data[self::FIELD_PART_DESCRIPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSourceMaterialPartDescription) {
                        $this->addPartDescription($v);
                    } else {
                        $this->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($v));
                    }
                }
            } else if ($data[self::FIELD_PART_DESCRIPTION] instanceof FHIRSubstanceSourceMaterialPartDescription) {
                $this->addPartDescription($data[self::FIELD_PART_DESCRIPTION]);
            } else {
                $this->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($data[self::FIELD_PART_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_MATERIAL_CLASS])) {
            if ($data[self::FIELD_SOURCE_MATERIAL_CLASS] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialClass($data[self::FIELD_SOURCE_MATERIAL_CLASS]);
            } else {
                $this->setSourceMaterialClass(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_CLASS]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_MATERIAL_STATE])) {
            if ($data[self::FIELD_SOURCE_MATERIAL_STATE] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialState($data[self::FIELD_SOURCE_MATERIAL_STATE]);
            } else {
                $this->setSourceMaterialState(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_STATE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_MATERIAL_TYPE])) {
            if ($data[self::FIELD_SOURCE_MATERIAL_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSourceMaterialType($data[self::FIELD_SOURCE_MATERIAL_TYPE]);
            } else {
                $this->setSourceMaterialType(new FHIRCodeableConcept($data[self::FIELD_SOURCE_MATERIAL_TYPE]));
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
        return "<SubstanceSourceMaterial{$xmlns}></SubstanceSourceMaterial>";
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
     * The country where the plant material is harvested or the countries where the
     * plasma is sourced from as laid down in accordance with the Plasma Master File.
     * For “Plasma-derived substances” the attribute country of origin provides
     * information about the countries used for the manufacturing of the Cryopoor plama
     * or Crioprecipitate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountryOfOrigin()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $countryOfOrigin
     * @return static
     */
    public function addCountryOfOrigin(FHIRCodeableConcept $countryOfOrigin = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $countryOfOrigin
     * @return static
     */
    public function setCountryOfOrigin(array $countryOfOrigin = [])
    {
        $this->countryOfOrigin = [];
        if ([] === $countryOfOrigin) {
            return $this;
        }
        foreach($countryOfOrigin as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCountryOfOrigin($v);
            } else {
                $this->addCountryOfOrigin(new FHIRCodeableConcept($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDevelopmentStage()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $developmentStage
     * @return static
     */
    public function setDevelopmentStage(FHIRCodeableConcept $developmentStage = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[]
     */
    public function getFractionDescription()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription $fractionDescription
     * @return static
     */
    public function addFractionDescription(FHIRSubstanceSourceMaterialFractionDescription $fractionDescription = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription[] $fractionDescription
     * @return static
     */
    public function setFractionDescription(array $fractionDescription = [])
    {
        $this->fractionDescription = [];
        if ([] === $fractionDescription) {
            return $this;
        }
        foreach($fractionDescription as $v) {
            if ($v instanceof FHIRSubstanceSourceMaterialFractionDescription) {
                $this->addFractionDescription($v);
            } else {
                $this->addFractionDescription(new FHIRSubstanceSourceMaterialFractionDescription($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getGeographicalLocation()
    {
        return $this->geographicalLocation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The place/region where the plant is harvested or the places/regions where the
     * animal source material has its habitat.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $geographicalLocation
     * @return static
     */
    public function addGeographicalLocation($geographicalLocation = null)
    {
        if (null === $geographicalLocation) {
            $this->geographicalLocation = [];
            return $this;
        }
        if ($geographicalLocation instanceof FHIRString) {
            $this->geographicalLocation[] = $geographicalLocation;
            return $this;
        }
        $this->geographicalLocation[] = new FHIRString($geographicalLocation);
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $geographicalLocation
     * @return static
     */
    public function setGeographicalLocation(array $geographicalLocation = [])
    {
        $this->geographicalLocation = [];
        if ([] === $geographicalLocation) {
            return $this;
        }
        foreach($geographicalLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->addGeographicalLocation($v);
            } else {
                $this->addGeographicalLocation(new FHIRString($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
     */
    public function getOrganism()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $organism
     * @return static
     */
    public function setOrganism(FHIRSubstanceSourceMaterialOrganism $organism = null)
    {
        $this->organism = $organism;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getOrganismId()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $organismId
     * @return static
     */
    public function setOrganismId(FHIRIdentifier $organismId = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getOrganismName()
    {
        return $this->organismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organism accepted Scientific name shall be provided based on the organism
     * taxonomy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $organismName
     * @return static
     */
    public function setOrganismName($organismName = null)
    {
        if (null === $organismName) {
            $this->organismName = null;
            return $this;
        }
        if ($organismName instanceof FHIRString) {
            $this->organismName = $organismName;
            return $this;
        }
        $this->organismName = new FHIRString($organismName);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getParentSubstanceId()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $parentSubstanceId
     * @return static
     */
    public function addParentSubstanceId(FHIRIdentifier $parentSubstanceId = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $parentSubstanceId
     * @return static
     */
    public function setParentSubstanceId(array $parentSubstanceId = [])
    {
        $this->parentSubstanceId = [];
        if ([] === $parentSubstanceId) {
            return $this;
        }
        foreach($parentSubstanceId as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addParentSubstanceId($v);
            } else {
                $this->addParentSubstanceId(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getParentSubstanceName()
    {
        return $this->parentSubstanceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $parentSubstanceName
     * @return static
     */
    public function addParentSubstanceName($parentSubstanceName = null)
    {
        if (null === $parentSubstanceName) {
            $this->parentSubstanceName = [];
            return $this;
        }
        if ($parentSubstanceName instanceof FHIRString) {
            $this->parentSubstanceName[] = $parentSubstanceName;
            return $this;
        }
        $this->parentSubstanceName[] = new FHIRString($parentSubstanceName);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $parentSubstanceName
     * @return static
     */
    public function setParentSubstanceName(array $parentSubstanceName = [])
    {
        $this->parentSubstanceName = [];
        if ([] === $parentSubstanceName) {
            return $this;
        }
        foreach($parentSubstanceName as $v) {
            if ($v instanceof FHIRString) {
                $this->addParentSubstanceName($v);
            } else {
                $this->addParentSubstanceName(new FHIRString($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[]
     */
    public function getPartDescription()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription $partDescription
     * @return static
     */
    public function addPartDescription(FHIRSubstanceSourceMaterialPartDescription $partDescription = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription[] $partDescription
     * @return static
     */
    public function setPartDescription(array $partDescription = [])
    {
        $this->partDescription = [];
        if ([] === $partDescription) {
            return $this;
        }
        foreach($partDescription as $v) {
            if ($v instanceof FHIRSubstanceSourceMaterialPartDescription) {
                $this->addPartDescription($v);
            } else {
                $this->addPartDescription(new FHIRSubstanceSourceMaterialPartDescription($v));
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
     * General high level classification of the source material specific to the origin
     * of the material.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialClass()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sourceMaterialClass
     * @return static
     */
    public function setSourceMaterialClass(FHIRCodeableConcept $sourceMaterialClass = null)
    {
        $this->sourceMaterialClass = $sourceMaterialClass;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialState()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sourceMaterialState
     * @return static
     */
    public function setSourceMaterialState(FHIRCodeableConcept $sourceMaterialState = null)
    {
        $this->sourceMaterialState = $sourceMaterialState;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceMaterialType()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sourceMaterialType
     * @return static
     */
    public function setSourceMaterialType(FHIRCodeableConcept $sourceMaterialType = null)
    {
        $this->sourceMaterialType = $sourceMaterialType;
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
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY_OF_ORIGIN, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getGeographicalLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GEOGRAPHICAL_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOrganism())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM] = $fieldErrs;
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
        if ([] !== ($vs = $this->getPartDescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_DESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSourceMaterialClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL_TYPE] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterial::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterial::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSourceMaterial;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterial)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterial::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial or null, %s seen.',
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
        if (isset($children->countryOfOrigin)) {
            foreach($children->countryOfOrigin as $child) {
                $type->addCountryOfOrigin(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->developmentStage)) {
            $type->setDevelopmentStage(FHIRCodeableConcept::xmlUnserialize($children->developmentStage));
        }
        if (isset($children->fractionDescription)) {
            foreach($children->fractionDescription as $child) {
                $type->addFractionDescription(FHIRSubstanceSourceMaterialFractionDescription::xmlUnserialize($child));
            }
        }
        if (isset($children->geographicalLocation)) {
            foreach($children->geographicalLocation as $child) {
                $type->addGeographicalLocation(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->organism)) {
            $type->setOrganism(FHIRSubstanceSourceMaterialOrganism::xmlUnserialize($children->organism));
        }
        if (isset($children->organismId)) {
            $type->setOrganismId(FHIRIdentifier::xmlUnserialize($children->organismId));
        }
        if (isset($children->organismName)) {
            $type->setOrganismName(FHIRString::xmlUnserialize($children->organismName));
        }
        if (isset($attributes->organismName)) {
            $pt = $type->getOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->organismName);
            } else {
                $type->setOrganismName((string)$attributes->organismName);
            }
        }
        if (isset($children->parentSubstanceId)) {
            foreach($children->parentSubstanceId as $child) {
                $type->addParentSubstanceId(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->parentSubstanceName)) {
            foreach($children->parentSubstanceName as $child) {
                $type->addParentSubstanceName(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->partDescription)) {
            foreach($children->partDescription as $child) {
                $type->addPartDescription(FHIRSubstanceSourceMaterialPartDescription::xmlUnserialize($child));
            }
        }
        if (isset($children->sourceMaterialClass)) {
            $type->setSourceMaterialClass(FHIRCodeableConcept::xmlUnserialize($children->sourceMaterialClass));
        }
        if (isset($children->sourceMaterialState)) {
            $type->setSourceMaterialState(FHIRCodeableConcept::xmlUnserialize($children->sourceMaterialState));
        }
        if (isset($children->sourceMaterialType)) {
            $type->setSourceMaterialType(FHIRCodeableConcept::xmlUnserialize($children->sourceMaterialType));
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
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY_OF_ORIGIN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDevelopmentStage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVELOPMENT_STAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFractionDescription())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FRACTION_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getGeographicalLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GEOGRAPHICAL_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOrganism())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANISM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrganismId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANISM_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrganismName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANISM_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParentSubstanceId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT_SUBSTANCE_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT_SUBSTANCE_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPartDescription())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSourceMaterialClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_MATERIAL_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_MATERIAL_STATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_MATERIAL_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            $a[self::FIELD_COUNTRY_OF_ORIGIN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COUNTRY_OF_ORIGIN][] = $v;
            }
        }
        if (null !== ($v = $this->getDevelopmentStage())) {
            $a[self::FIELD_DEVELOPMENT_STAGE] = $v;
        }
        if ([] !== ($vs = $this->getFractionDescription())) {
            $a[self::FIELD_FRACTION_DESCRIPTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FRACTION_DESCRIPTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getGeographicalLocation())) {
            $a[self::FIELD_GEOGRAPHICAL_LOCATION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GEOGRAPHICAL_LOCATION][] = $v->getValue();
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
                $a[self::FIELD_GEOGRAPHICAL_LOCATION_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getOrganism())) {
            $a[self::FIELD_ORGANISM] = $v;
        }
        if (null !== ($v = $this->getOrganismId())) {
            $a[self::FIELD_ORGANISM_ID] = $v;
        }
        if (null !== ($v = $this->getOrganismName())) {
            $a[self::FIELD_ORGANISM_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ORGANISM_NAME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceId())) {
            $a[self::FIELD_PARENT_SUBSTANCE_ID] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARENT_SUBSTANCE_ID][] = $v;
            }
        }
        if ([] !== ($vs = $this->getParentSubstanceName())) {
            $a[self::FIELD_PARENT_SUBSTANCE_NAME] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARENT_SUBSTANCE_NAME][] = $v->getValue();
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
                $a[self::FIELD_PARENT_SUBSTANCE_NAME_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getPartDescription())) {
            $a[self::FIELD_PART_DESCRIPTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PART_DESCRIPTION][] = $v;
            }
        }
        if (null !== ($v = $this->getSourceMaterialClass())) {
            $a[self::FIELD_SOURCE_MATERIAL_CLASS] = $v;
        }
        if (null !== ($v = $this->getSourceMaterialState())) {
            $a[self::FIELD_SOURCE_MATERIAL_STATE] = $v;
        }
        if (null !== ($v = $this->getSourceMaterialType())) {
            $a[self::FIELD_SOURCE_MATERIAL_TYPE] = $v;
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