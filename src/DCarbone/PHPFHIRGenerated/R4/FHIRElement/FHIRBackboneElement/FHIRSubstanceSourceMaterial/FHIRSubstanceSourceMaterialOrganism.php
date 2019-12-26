<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
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
 *
 * Class FHIRSubstanceSourceMaterialOrganism
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialOrganism extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM;
    const FIELD_AUTHOR = 'author';
    const FIELD_FAMILY = 'family';
    const FIELD_GENUS = 'genus';
    const FIELD_HYBRID = 'hybrid';
    const FIELD_INTRASPECIFIC_DESCRIPTION = 'intraspecificDescription';
    const FIELD_INTRASPECIFIC_DESCRIPTION_EXT = '_intraspecificDescription';
    const FIELD_INTRASPECIFIC_TYPE = 'intraspecificType';
    const FIELD_ORGANISM_GENERAL = 'organismGeneral';
    const FIELD_SPECIES = 'species';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[]
     */
    protected $author = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The family of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $family = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $genus = null;

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
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    protected $hybrid = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $intraspecificDescription = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $intraspecificType = null;

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
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral
     */
    protected $organismGeneral = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $species = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial.Organism
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSourceMaterialOrganism Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterialOrganism::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSourceMaterialAuthor) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHOR] instanceof FHIRSubstanceSourceMaterialAuthor) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_FAMILY])) {
            if ($data[self::FIELD_FAMILY] instanceof FHIRCodeableConcept) {
                $this->setFamily($data[self::FIELD_FAMILY]);
            } else {
                $this->setFamily(new FHIRCodeableConcept($data[self::FIELD_FAMILY]));
            }
        }
        if (isset($data[self::FIELD_GENUS])) {
            if ($data[self::FIELD_GENUS] instanceof FHIRCodeableConcept) {
                $this->setGenus($data[self::FIELD_GENUS]);
            } else {
                $this->setGenus(new FHIRCodeableConcept($data[self::FIELD_GENUS]));
            }
        }
        if (isset($data[self::FIELD_HYBRID])) {
            if ($data[self::FIELD_HYBRID] instanceof FHIRSubstanceSourceMaterialHybrid) {
                $this->setHybrid($data[self::FIELD_HYBRID]);
            } else {
                $this->setHybrid(new FHIRSubstanceSourceMaterialHybrid($data[self::FIELD_HYBRID]));
            }
        }
        if (isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION]) || isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION])) {
                $value = $data[self::FIELD_INTRASPECIFIC_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT]) && is_array($data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIntraspecificDescription($value);
                } else if (is_array($value)) {
                    $this->setIntraspecificDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIntraspecificDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIntraspecificDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_INTRASPECIFIC_TYPE])) {
            if ($data[self::FIELD_INTRASPECIFIC_TYPE] instanceof FHIRCodeableConcept) {
                $this->setIntraspecificType($data[self::FIELD_INTRASPECIFIC_TYPE]);
            } else {
                $this->setIntraspecificType(new FHIRCodeableConcept($data[self::FIELD_INTRASPECIFIC_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ORGANISM_GENERAL])) {
            if ($data[self::FIELD_ORGANISM_GENERAL] instanceof FHIRSubstanceSourceMaterialOrganismGeneral) {
                $this->setOrganismGeneral($data[self::FIELD_ORGANISM_GENERAL]);
            } else {
                $this->setOrganismGeneral(new FHIRSubstanceSourceMaterialOrganismGeneral($data[self::FIELD_ORGANISM_GENERAL]));
            }
        }
        if (isset($data[self::FIELD_SPECIES])) {
            if ($data[self::FIELD_SPECIES] instanceof FHIRCodeableConcept) {
                $this->setSpecies($data[self::FIELD_SPECIES]);
            } else {
                $this->setSpecies(new FHIRCodeableConcept($data[self::FIELD_SPECIES]));
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
        return "<SubstanceSourceMaterialOrganism{$xmlns}></SubstanceSourceMaterialOrganism>";
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
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[]
     */
    public function getAuthor()
    {
        return $this->author;
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
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor $author
     * @return static
     */
    public function addAuthor(FHIRSubstanceSourceMaterialAuthor $author = null)
    {
        $this->author[] = $author;
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
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor[] $author
     * @return static
     */
    public function setAuthor(array $author = [])
    {
        $this->author = [];
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRSubstanceSourceMaterialAuthor) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRSubstanceSourceMaterialAuthor($v));
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
     * The family of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The family of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $family
     * @return static
     */
    public function setFamily(FHIRCodeableConcept $family = null)
    {
        $this->family = $family;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the
     * genus element of the plant/animal scientific name; it is present in names for
     * genera, species and infraspecies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $genus
     * @return static
     */
    public function setGenus(FHIRCodeableConcept $genus = null)
    {
        $this->genus = $genus;
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
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function getHybrid()
    {
        return $this->hybrid;
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
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $hybrid
     * @return static
     */
    public function setHybrid(FHIRSubstanceSourceMaterialHybrid $hybrid = null)
    {
        $this->hybrid = $hybrid;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getIntraspecificDescription()
    {
        return $this->intraspecificDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The intraspecific description of an organism shall be specified based on a
     * controlled vocabulary. For Influenza Vaccine, the intraspecific description
     * shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $intraspecificDescription
     * @return static
     */
    public function setIntraspecificDescription($intraspecificDescription = null)
    {
        if (null === $intraspecificDescription) {
            $this->intraspecificDescription = null;
            return $this;
        }
        if ($intraspecificDescription instanceof FHIRString) {
            $this->intraspecificDescription = $intraspecificDescription;
            return $this;
        }
        $this->intraspecificDescription = new FHIRString($intraspecificDescription);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntraspecificType()
    {
        return $this->intraspecificType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $intraspecificType
     * @return static
     */
    public function setIntraspecificType(FHIRCodeableConcept $intraspecificType = null)
    {
        $this->intraspecificType = $intraspecificType;
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
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral
     */
    public function getOrganismGeneral()
    {
        return $this->organismGeneral;
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
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral $organismGeneral
     * @return static
     */
    public function setOrganismGeneral(FHIRSubstanceSourceMaterialOrganismGeneral $organismGeneral = null)
    {
        $this->organismGeneral = $organismGeneral;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism shall be specified; refers to the Latin epithet of
     * the species of the plant/animal; it is present in names for species and
     * infraspecies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $species
     * @return static
     */
    public function setSpecies(FHIRCodeableConcept $species = null)
    {
        $this->species = $species;
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
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFamily())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGenus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHybrid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HYBRID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTRASPECIFIC_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANISM_GENERAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAMILY])) {
            $v = $this->getFamily();
            foreach($validationRules[self::FIELD_FAMILY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_FAMILY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAMILY])) {
                        $errs[self::FIELD_FAMILY] = [];
                    }
                    $errs[self::FIELD_FAMILY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENUS])) {
            $v = $this->getGenus();
            foreach($validationRules[self::FIELD_GENUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_GENUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENUS])) {
                        $errs[self::FIELD_GENUS] = [];
                    }
                    $errs[self::FIELD_GENUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HYBRID])) {
            $v = $this->getHybrid();
            foreach($validationRules[self::FIELD_HYBRID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_HYBRID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HYBRID])) {
                        $errs[self::FIELD_HYBRID] = [];
                    }
                    $errs[self::FIELD_HYBRID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTRASPECIFIC_DESCRIPTION])) {
            $v = $this->getIntraspecificDescription();
            foreach($validationRules[self::FIELD_INTRASPECIFIC_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_INTRASPECIFIC_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTRASPECIFIC_DESCRIPTION])) {
                        $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_INTRASPECIFIC_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTRASPECIFIC_TYPE])) {
            $v = $this->getIntraspecificType();
            foreach($validationRules[self::FIELD_INTRASPECIFIC_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_INTRASPECIFIC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTRASPECIFIC_TYPE])) {
                        $errs[self::FIELD_INTRASPECIFIC_TYPE] = [];
                    }
                    $errs[self::FIELD_INTRASPECIFIC_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANISM_GENERAL])) {
            $v = $this->getOrganismGeneral();
            foreach($validationRules[self::FIELD_ORGANISM_GENERAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_ORGANISM_GENERAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANISM_GENERAL])) {
                        $errs[self::FIELD_ORGANISM_GENERAL] = [];
                    }
                    $errs[self::FIELD_ORGANISM_GENERAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIES])) {
            $v = $this->getSpecies();
            foreach($validationRules[self::FIELD_SPECIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM, self::FIELD_SPECIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIES])) {
                        $errs[self::FIELD_SPECIES] = [];
                    }
                    $errs[self::FIELD_SPECIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterialOrganism::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterialOrganism::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSourceMaterialOrganism;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterialOrganism)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterialOrganism::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRSubstanceSourceMaterialAuthor::xmlUnserialize($child));
            }
        }
        if (isset($children->family)) {
            $type->setFamily(FHIRCodeableConcept::xmlUnserialize($children->family));
        }
        if (isset($children->genus)) {
            $type->setGenus(FHIRCodeableConcept::xmlUnserialize($children->genus));
        }
        if (isset($children->hybrid)) {
            $type->setHybrid(FHIRSubstanceSourceMaterialHybrid::xmlUnserialize($children->hybrid));
        }
        if (isset($children->intraspecificDescription)) {
            $type->setIntraspecificDescription(FHIRString::xmlUnserialize($children->intraspecificDescription));
        }
        if (isset($attributes->intraspecificDescription)) {
            $pt = $type->getIntraspecificDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->intraspecificDescription);
            } else {
                $type->setIntraspecificDescription((string)$attributes->intraspecificDescription);
            }
        }
        if (isset($children->intraspecificType)) {
            $type->setIntraspecificType(FHIRCodeableConcept::xmlUnserialize($children->intraspecificType));
        }
        if (isset($children->organismGeneral)) {
            $type->setOrganismGeneral(FHIRSubstanceSourceMaterialOrganismGeneral::xmlUnserialize($children->organismGeneral));
        }
        if (isset($children->species)) {
            $type->setSpecies(FHIRCodeableConcept::xmlUnserialize($children->species));
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
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getFamily())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FAMILY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGenus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHybrid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HYBRID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTRASPECIFIC_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTRASPECIFIC_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANISM_GENERAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSpecies())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIES, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AUTHOR][] = $v;
            }
        }
        if (null !== ($v = $this->getFamily())) {
            $a[self::FIELD_FAMILY] = $v;
        }
        if (null !== ($v = $this->getGenus())) {
            $a[self::FIELD_GENUS] = $v;
        }
        if (null !== ($v = $this->getHybrid())) {
            $a[self::FIELD_HYBRID] = $v;
        }
        if (null !== ($v = $this->getIntraspecificDescription())) {
            $a[self::FIELD_INTRASPECIFIC_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_INTRASPECIFIC_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIntraspecificType())) {
            $a[self::FIELD_INTRASPECIFIC_TYPE] = $v;
        }
        if (null !== ($v = $this->getOrganismGeneral())) {
            $a[self::FIELD_ORGANISM_GENERAL] = $v;
        }
        if (null !== ($v = $this->getSpecies())) {
            $a[self::FIELD_SPECIES] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}