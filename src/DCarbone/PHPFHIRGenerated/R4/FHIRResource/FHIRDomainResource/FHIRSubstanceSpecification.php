<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstanceSpecification
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceSpecification extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION;

    const FIELD_CODE = 'code';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOMAIN = 'domain';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MOIETY = 'moiety';
    const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    const FIELD_NAME = 'name';
    const FIELD_NUCLEIC_ACID = 'nucleicAcid';
    const FIELD_POLYMER = 'polymer';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROTEIN = 'protein';
    const FIELD_REFERENCE_INFORMATION = 'referenceInformation';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_MATERIAL = 'sourceMaterial';
    const FIELD_STATUS = 'status';
    const FIELD_STRUCTURE = 'structure';
    const FIELD_TYPE = 'type';

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode[]
     */
    private $code = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual comment about this record of a substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $comment = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual description of the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the substance applies to only human or veterinary use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $domain = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[]
     */
    private $moiety = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[]
     */
    private $molecularWeight = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    private $name = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $nucleicAcid = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $polymer = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance, including how it is related to other
     * substances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[]
     */
    private $property = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $protein = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $referenceInformation = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship[]
     */
    private $relationship = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $source = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $sourceMaterial = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $status = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    private $structure = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSubstanceSpecification Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecification::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationCode) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRSubstanceSpecificationCode($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRSubstanceSpecificationCode) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRSubstanceSpecificationCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRString) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENT])) {
                $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCodeableConcept($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MOIETY])) {
            if (is_array($data[self::FIELD_MOIETY])) {
                foreach($data[self::FIELD_MOIETY] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationMoiety) {
                        $this->addMoiety($v);
                    } else {
                        $this->addMoiety(new FHIRSubstanceSpecificationMoiety($v));
                    }
                }
            } else if ($data[self::FIELD_MOIETY] instanceof FHIRSubstanceSpecificationMoiety) {
                $this->addMoiety($data[self::FIELD_MOIETY]);
            } else {
                $this->addMoiety(new FHIRSubstanceSpecificationMoiety($data[self::FIELD_MOIETY]));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_WEIGHT])) {
            if (is_array($data[self::FIELD_MOLECULAR_WEIGHT])) {
                foreach($data[self::FIELD_MOLECULAR_WEIGHT] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationMolecularWeight) {
                        $this->addMolecularWeight($v);
                    } else {
                        $this->addMolecularWeight(new FHIRSubstanceSpecificationMolecularWeight($v));
                    }
                }
            } else if ($data[self::FIELD_MOLECULAR_WEIGHT] instanceof FHIRSubstanceSpecificationMolecularWeight) {
                $this->addMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]);
            } else {
                $this->addMolecularWeight(new FHIRSubstanceSpecificationMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRSubstanceSpecificationName($v));
                    }
                }
            } else if ($data[self::FIELD_NAME] instanceof FHIRSubstanceSpecificationName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRSubstanceSpecificationName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_NUCLEIC_ACID])) {
            if ($data[self::FIELD_NUCLEIC_ACID] instanceof FHIRReference) {
                $this->setNucleicAcid($data[self::FIELD_NUCLEIC_ACID]);
            } else {
                $this->setNucleicAcid(new FHIRReference($data[self::FIELD_NUCLEIC_ACID]));
            }
        }
        if (isset($data[self::FIELD_POLYMER])) {
            if ($data[self::FIELD_POLYMER] instanceof FHIRReference) {
                $this->setPolymer($data[self::FIELD_POLYMER]);
            } else {
                $this->setPolymer(new FHIRReference($data[self::FIELD_POLYMER]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRSubstanceSpecificationProperty($v));
                    }
                }
            } else if ($data[self::FIELD_PROPERTY] instanceof FHIRSubstanceSpecificationProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRSubstanceSpecificationProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_PROTEIN])) {
            if ($data[self::FIELD_PROTEIN] instanceof FHIRReference) {
                $this->setProtein($data[self::FIELD_PROTEIN]);
            } else {
                $this->setProtein(new FHIRReference($data[self::FIELD_PROTEIN]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_INFORMATION])) {
            if ($data[self::FIELD_REFERENCE_INFORMATION] instanceof FHIRReference) {
                $this->setReferenceInformation($data[self::FIELD_REFERENCE_INFORMATION]);
            } else {
                $this->setReferenceInformation(new FHIRReference($data[self::FIELD_REFERENCE_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if (is_array($data[self::FIELD_RELATIONSHIP])) {
                foreach($data[self::FIELD_RELATIONSHIP] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationRelationship) {
                        $this->addRelationship($v);
                    } else {
                        $this->addRelationship(new FHIRSubstanceSpecificationRelationship($v));
                    }
                }
            } else if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRSubstanceSpecificationRelationship) {
                $this->addRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->addRelationship(new FHIRSubstanceSpecificationRelationship($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_MATERIAL])) {
            if ($data[self::FIELD_SOURCE_MATERIAL] instanceof FHIRReference) {
                $this->setSourceMaterial($data[self::FIELD_SOURCE_MATERIAL]);
            } else {
                $this->setSourceMaterial(new FHIRReference($data[self::FIELD_SOURCE_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE])) {
            if ($data[self::FIELD_STRUCTURE] instanceof FHIRSubstanceSpecificationStructure) {
                $this->setStructure($data[self::FIELD_STRUCTURE]);
            } else {
                $this->setStructure(new FHIRSubstanceSpecificationStructure($data[self::FIELD_STRUCTURE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode $code
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addCode(FHIRSubstanceSpecificationCode $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode[] $code
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRSubstanceSpecificationCode) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRSubstanceSpecificationCode($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual comment about this record of a substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual comment about this record of a substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual description of the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Textual description of the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the substance applies to only human or veterinary use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the substance applies to only human or veterinary use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $domain
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setDomain(FHIRCodeableConcept $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[]
     */
    public function getMoiety()
    {
        return $this->moiety;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety $moiety
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addMoiety(FHIRSubstanceSpecificationMoiety $moiety = null)
    {
        $this->moiety[] = $moiety;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[] $moiety
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setMoiety(array $moiety = [])
    {
        $this->moiety = [];
        if ([] === $moiety) {
            return $this;
        }
        foreach($moiety as $v) {
            if ($v instanceof FHIRSubstanceSpecificationMoiety) {
                $this->addMoiety($v);
            } else {
                $this->addMoiety(new FHIRSubstanceSpecificationMoiety($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[]
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight $molecularWeight
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addMolecularWeight(FHIRSubstanceSpecificationMolecularWeight $molecularWeight = null)
    {
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[] $molecularWeight
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setMolecularWeight(array $molecularWeight = [])
    {
        $this->molecularWeight = [];
        if ([] === $molecularWeight) {
            return $this;
        }
        foreach($molecularWeight as $v) {
            if ($v instanceof FHIRSubstanceSpecificationMolecularWeight) {
                $this->addMolecularWeight($v);
            } else {
                $this->addMolecularWeight(new FHIRSubstanceSpecificationMolecularWeight($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addName(FHIRSubstanceSpecificationName $name = null)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[] $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setName(array $name = [])
    {
        $this->name = [];
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRSubstanceSpecificationName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRSubstanceSpecificationName($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getNucleicAcid()
    {
        return $this->nucleicAcid;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $nucleicAcid
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setNucleicAcid(FHIRReference $nucleicAcid = null)
    {
        $this->nucleicAcid = $nucleicAcid;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPolymer()
    {
        return $this->polymer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $polymer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setPolymer(FHIRReference $polymer = null)
    {
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance, including how it is related to other
     * substances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance, including how it is related to other
     * substances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty $property
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addProperty(FHIRSubstanceSpecificationProperty $property = null)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance, including how it is related to other
     * substances.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[] $property
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setProperty(array $property = [])
    {
        $this->property = [];
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRSubstanceSpecificationProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRSubstanceSpecificationProperty($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $protein
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setProtein(FHIRReference $protein = null)
    {
        $this->protein = $protein;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReferenceInformation()
    {
        return $this->referenceInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $referenceInformation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setReferenceInformation(FHIRReference $referenceInformation = null)
    {
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship $relationship
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addRelationship(FHIRSubstanceSpecificationRelationship $relationship = null)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship[] $relationship
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setRelationship(array $relationship = [])
    {
        $this->relationship = [];
        if ([] === $relationship) {
            return $this;
        }
        foreach($relationship as $v) {
            if ($v instanceof FHIRSubstanceSpecificationRelationship) {
                $this->addRelationship($v);
            } else {
                $this->addRelationship(new FHIRSubstanceSpecificationRelationship($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $source
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function addSource(FHIRReference $source = null)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $source
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setSource(array $source = [])
    {
        $this->source = [];
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSourceMaterial()
    {
        return $this->sourceMaterial;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $sourceMaterial
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setSourceMaterial(FHIRReference $sourceMaterial = null)
    {
        $this->sourceMaterial = $sourceMaterial;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure $structure
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setStructure(FHIRSubstanceSpecificationStructure $structure = null)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstanceSpecification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRSubstanceSpecification);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecification)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRSubstanceSpecificationCode::xmlUnserialize($child));
            }
        }
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->domain)) {
            $type->setDomain(FHIRCodeableConcept::xmlUnserialize($children->domain));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->moiety)) {
            foreach($children->moiety as $child) {
                $type->addMoiety(FHIRSubstanceSpecificationMoiety::xmlUnserialize($child));
            }
        }
        if (isset($children->molecularWeight)) {
            foreach($children->molecularWeight as $child) {
                $type->addMolecularWeight(FHIRSubstanceSpecificationMolecularWeight::xmlUnserialize($child));
            }
        }
        if (isset($children->name)) {
            foreach($children->name as $child) {
                $type->addName(FHIRSubstanceSpecificationName::xmlUnserialize($child));
            }
        }
        if (isset($children->nucleicAcid)) {
            $type->setNucleicAcid(FHIRReference::xmlUnserialize($children->nucleicAcid));
        }
        if (isset($children->polymer)) {
            $type->setPolymer(FHIRReference::xmlUnserialize($children->polymer));
        }
        if (isset($children->property)) {
            foreach($children->property as $child) {
                $type->addProperty(FHIRSubstanceSpecificationProperty::xmlUnserialize($child));
            }
        }
        if (isset($children->protein)) {
            $type->setProtein(FHIRReference::xmlUnserialize($children->protein));
        }
        if (isset($children->referenceInformation)) {
            $type->setReferenceInformation(FHIRReference::xmlUnserialize($children->referenceInformation));
        }
        if (isset($children->relationship)) {
            foreach($children->relationship as $child) {
                $type->addRelationship(FHIRSubstanceSpecificationRelationship::xmlUnserialize($child));
            }
        }
        if (isset($children->source)) {
            foreach($children->source as $child) {
                $type->addSource(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->sourceMaterial)) {
            $type->setSourceMaterial(FHIRReference::xmlUnserialize($children->sourceMaterial));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
        }
        if (isset($children->structure)) {
            $type->setStructure(FHIRSubstanceSpecificationStructure::xmlUnserialize($children->structure));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstanceSpecification xmlns="http://hl7.org/fhir"></SubstanceSpecification>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $sxe->addAttribute(self::FIELD_COMMENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }

        if (null !== ($v = $this->getDomain())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN));
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
        }

        if ([] !== ($vs = $this->getMoiety())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOIETY));
            }
        }

        if ([] !== ($vs = $this->getMolecularWeight())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_WEIGHT));
            }
        }

        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if (null !== ($v = $this->getNucleicAcid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUCLEIC_ACID));
        }

        if (null !== ($v = $this->getPolymer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POLYMER));
        }

        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY));
            }
        }

        if (null !== ($v = $this->getProtein())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROTEIN));
        }

        if (null !== ($v = $this->getReferenceInformation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_INFORMATION));
        }

        if ([] !== ($vs = $this->getRelationship())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP));
            }
        }

        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE));
            }
        }

        if (null !== ($v = $this->getSourceMaterial())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_MATERIAL));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if (null !== ($v = $this->getStructure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURE));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = (string)$v;
            $a[self::FIELD_COMMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getMoiety())) {
            $a[self::FIELD_MOIETY] = $vs;
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            $a[self::FIELD_MOLECULAR_WEIGHT] = $vs;
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = $vs;
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            $a[self::FIELD_NUCLEIC_ACID] = $v;
        }
        if (null !== ($v = $this->getPolymer())) {
            $a[self::FIELD_POLYMER] = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $vs;
        }
        if (null !== ($v = $this->getProtein())) {
            $a[self::FIELD_PROTEIN] = $v;
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $a[self::FIELD_REFERENCE_INFORMATION] = $v;
        }
        if ([] !== ($vs = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $vs;
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $vs;
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            $a[self::FIELD_SOURCE_MATERIAL] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStructure())) {
            $a[self::FIELD_STRUCTURE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}