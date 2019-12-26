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
 * If the element is present, it must have either a \@value, an \@id, or extensions
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Codes associated with the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode[]
     */
    protected $code = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Textual comment about this record of a substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $comment = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Textual description of the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to only human or veterinary use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $domain = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Moiety, for structural modifications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[]
     */
    protected $moiety = [];

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[]
     */
    protected $molecularWeight = [];

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Names applicable to this substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    protected $name = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $nucleicAcid = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $polymer = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * General specifications for this substance, including how it is related to other
     * substances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[]
     */
    protected $property = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $protein = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $referenceInformation = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship[]
     */
    protected $relationship = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $source = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $sourceMaterial = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $status = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Structural information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    protected $structure = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type SubstanceSpecification
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
            if (isset($data[self::FIELD_COMMENT])) {
                $value = $data[self::FIELD_COMMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) {
                $ext = $data[self::FIELD_COMMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        return "<SubstanceSpecification{$xmlns}></SubstanceSpecification>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return static
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
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Textual comment about this record of a substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Textual description of the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the substance applies to only human or veterinary use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $domain
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this substance is known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to nucleic acids.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $nucleicAcid
     * @return static
     */
    public function setNucleicAcid(FHIRReference $nucleicAcid = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPolymer()
    {
        return $this->polymer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to polymers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $polymer
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Data items specific to proteins.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $protein
     * @return static
     */
    public function setProtein(FHIRReference $protein = null)
    {
        $this->protein = $protein;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * General information detailing this substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $referenceInformation
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $source
     * @return static
     */
    public function addSource(FHIRReference $source = null)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $source
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $sourceMaterial
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $status
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMoiety())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MOIETY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MOLECULAR_WEIGHT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUCLEIC_ACID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPolymer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLYMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProtein())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROTEIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_INFORMATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelationship())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATIONSHIP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_MATERIAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOIETY])) {
            $v = $this->getMoiety();
            foreach($validationRules[self::FIELD_MOIETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_MOIETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOIETY])) {
                        $errs[self::FIELD_MOIETY] = [];
                    }
                    $errs[self::FIELD_MOIETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_WEIGHT])) {
            $v = $this->getMolecularWeight();
            foreach($validationRules[self::FIELD_MOLECULAR_WEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_MOLECULAR_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_WEIGHT])) {
                        $errs[self::FIELD_MOLECULAR_WEIGHT] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUCLEIC_ACID])) {
            $v = $this->getNucleicAcid();
            foreach($validationRules[self::FIELD_NUCLEIC_ACID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_NUCLEIC_ACID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_POLYMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLYMER])) {
                        $errs[self::FIELD_POLYMER] = [];
                    }
                    $errs[self::FIELD_POLYMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTEIN])) {
            $v = $this->getProtein();
            foreach($validationRules[self::FIELD_PROTEIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_PROTEIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTEIN])) {
                        $errs[self::FIELD_PROTEIN] = [];
                    }
                    $errs[self::FIELD_PROTEIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_INFORMATION])) {
            $v = $this->getReferenceInformation();
            foreach($validationRules[self::FIELD_REFERENCE_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_REFERENCE_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_INFORMATION])) {
                        $errs[self::FIELD_REFERENCE_INFORMATION] = [];
                    }
                    $errs[self::FIELD_REFERENCE_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_MATERIAL])) {
            $v = $this->getSourceMaterial();
            foreach($validationRules[self::FIELD_SOURCE_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_SOURCE_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_MATERIAL])) {
                        $errs[self::FIELD_SOURCE_MATERIAL] = [];
                    }
                    $errs[self::FIELD_SOURCE_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE])) {
            $v = $this->getStructure();
            foreach($validationRules[self::FIELD_STRUCTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_STRUCTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE])) {
                        $errs[self::FIELD_STRUCTURE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
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
                throw new \DomainException(sprintf('FHIRSubstanceSpecification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSpecification;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecification)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification or null, %s seen.',
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
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRSubstanceSpecificationCode::xmlUnserialize($child));
            }
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->comment)) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comment);
            } else {
                $type->setComment((string)$attributes->comment);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDomain())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMoiety())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOIETY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_WEIGHT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUCLEIC_ACID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPolymer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POLYMER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getProtein())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROTEIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_INFORMATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelationship())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSourceMaterial())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_MATERIAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStructure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE][] = $v;
            }
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getMoiety())) {
            $a[self::FIELD_MOIETY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MOIETY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMolecularWeight())) {
            $a[self::FIELD_MOLECULAR_WEIGHT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MOLECULAR_WEIGHT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NAME][] = $v;
            }
        }
        if (null !== ($v = $this->getNucleicAcid())) {
            $a[self::FIELD_NUCLEIC_ACID] = $v;
        }
        if (null !== ($v = $this->getPolymer())) {
            $a[self::FIELD_POLYMER] = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROPERTY][] = $v;
            }
        }
        if (null !== ($v = $this->getProtein())) {
            $a[self::FIELD_PROTEIN] = $v;
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $a[self::FIELD_REFERENCE_INFORMATION] = $v;
        }
        if ([] !== ($vs = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATIONSHIP][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SOURCE][] = $v;
            }
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