<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceSpecificationStructure
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification
 */
class FHIRSubstanceSpecificationStructure extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE;
    const FIELD_ISOTOPE = 'isotope';
    const FIELD_MOLECULAR_FORMULA = 'molecularFormula';
    const FIELD_MOLECULAR_FORMULA_EXT = '_molecularFormula';
    const FIELD_MOLECULAR_FORMULA_BY_MOIETY = 'molecularFormulaByMoiety';
    const FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT = '_molecularFormulaByMoiety';
    const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    const FIELD_OPTICAL_ACTIVITY = 'opticalActivity';
    const FIELD_REPRESENTATION = 'representation';
    const FIELD_SOURCE = 'source';
    const FIELD_STEREOCHEMISTRY = 'stereochemistry';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Applicable for single substances that contain a radionuclide or a non-natural
     * isotopic ratio.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope[]
     */
    protected $isotope = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $molecularFormula = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $molecularFormulaByMoiety = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    protected $molecularWeight = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $opticalActivity = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Molecular structural representation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation[]
     */
    protected $representation = [];

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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $stereochemistry = null;

    /**
     * Validation map for fields in type SubstanceSpecification.Structure
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSpecificationStructure Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecificationStructure::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ISOTOPE])) {
            if (is_array($data[self::FIELD_ISOTOPE])) {
                foreach($data[self::FIELD_ISOTOPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSpecificationIsotope) {
                        $this->addIsotope($v);
                    } else {
                        $this->addIsotope(new FHIRSubstanceSpecificationIsotope($v));
                    }
                }
            } else if ($data[self::FIELD_ISOTOPE] instanceof FHIRSubstanceSpecificationIsotope) {
                $this->addIsotope($data[self::FIELD_ISOTOPE]);
            } else {
                $this->addIsotope(new FHIRSubstanceSpecificationIsotope($data[self::FIELD_ISOTOPE]));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_FORMULA]) || isset($data[self::FIELD_MOLECULAR_FORMULA_EXT])) {
            if (isset($data[self::FIELD_MOLECULAR_FORMULA])) {
                $value = $data[self::FIELD_MOLECULAR_FORMULA];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_EXT])) {
                $ext = $data[self::FIELD_MOLECULAR_FORMULA_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMolecularFormula($value);
                } else if (is_array($value)) {
                    $this->setMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMolecularFormula(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]) || isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT])) {
            if (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
                $value = $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT])) {
                $ext = $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMolecularFormulaByMoiety($value);
                } else if (is_array($value)) {
                    $this->setMolecularFormulaByMoiety(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMolecularFormulaByMoiety(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMolecularFormulaByMoiety(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_WEIGHT])) {
            if ($data[self::FIELD_MOLECULAR_WEIGHT] instanceof FHIRSubstanceSpecificationMolecularWeight) {
                $this->setMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]);
            } else {
                $this->setMolecularWeight(new FHIRSubstanceSpecificationMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]));
            }
        }
        if (isset($data[self::FIELD_OPTICAL_ACTIVITY])) {
            if ($data[self::FIELD_OPTICAL_ACTIVITY] instanceof FHIRCodeableConcept) {
                $this->setOpticalActivity($data[self::FIELD_OPTICAL_ACTIVITY]);
            } else {
                $this->setOpticalActivity(new FHIRCodeableConcept($data[self::FIELD_OPTICAL_ACTIVITY]));
            }
        }
        if (isset($data[self::FIELD_REPRESENTATION])) {
            if (is_array($data[self::FIELD_REPRESENTATION])) {
                foreach($data[self::FIELD_REPRESENTATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceSpecificationRepresentation) {
                        $this->addRepresentation($v);
                    } else {
                        $this->addRepresentation(new FHIRSubstanceSpecificationRepresentation($v));
                    }
                }
            } else if ($data[self::FIELD_REPRESENTATION] instanceof FHIRSubstanceSpecificationRepresentation) {
                $this->addRepresentation($data[self::FIELD_REPRESENTATION]);
            } else {
                $this->addRepresentation(new FHIRSubstanceSpecificationRepresentation($data[self::FIELD_REPRESENTATION]));
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
        if (isset($data[self::FIELD_STEREOCHEMISTRY])) {
            if ($data[self::FIELD_STEREOCHEMISTRY] instanceof FHIRCodeableConcept) {
                $this->setStereochemistry($data[self::FIELD_STEREOCHEMISTRY]);
            } else {
                $this->setStereochemistry(new FHIRCodeableConcept($data[self::FIELD_STEREOCHEMISTRY]));
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
        return "<SubstanceSpecificationStructure{$xmlns}></SubstanceSpecificationStructure>";
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Applicable for single substances that contain a radionuclide or a non-natural
     * isotopic ratio.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope[]
     */
    public function getIsotope()
    {
        return $this->isotope;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Applicable for single substances that contain a radionuclide or a non-natural
     * isotopic ratio.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope $isotope
     * @return static
     */
    public function addIsotope(FHIRSubstanceSpecificationIsotope $isotope = null)
    {
        $this->isotope[] = $isotope;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Applicable for single substances that contain a radionuclide or a non-natural
     * isotopic ratio.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope[] $isotope
     * @return static
     */
    public function setIsotope(array $isotope = [])
    {
        $this->isotope = [];
        if ([] === $isotope) {
            return $this;
        }
        foreach($isotope as $v) {
            if ($v instanceof FHIRSubstanceSpecificationIsotope) {
                $this->addIsotope($v);
            } else {
                $this->addIsotope(new FHIRSubstanceSpecificationIsotope($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $molecularFormula
     * @return static
     */
    public function setMolecularFormula($molecularFormula = null)
    {
        if (null === $molecularFormula) {
            $this->molecularFormula = null;
            return $this;
        }
        if ($molecularFormula instanceof FHIRString) {
            $this->molecularFormula = $molecularFormula;
            return $this;
        }
        $this->molecularFormula = new FHIRString($molecularFormula);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMolecularFormulaByMoiety()
    {
        return $this->molecularFormulaByMoiety;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $molecularFormulaByMoiety
     * @return static
     */
    public function setMolecularFormulaByMoiety($molecularFormulaByMoiety = null)
    {
        if (null === $molecularFormulaByMoiety) {
            $this->molecularFormulaByMoiety = null;
            return $this;
        }
        if ($molecularFormulaByMoiety instanceof FHIRString) {
            $this->molecularFormulaByMoiety = $molecularFormulaByMoiety;
            return $this;
        }
        $this->molecularFormulaByMoiety = new FHIRString($molecularFormulaByMoiety);
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
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
    public function setMolecularWeight(FHIRSubstanceSpecificationMolecularWeight $molecularWeight = null)
    {
        $this->molecularWeight = $molecularWeight;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOpticalActivity()
    {
        return $this->opticalActivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @return static
     */
    public function setOpticalActivity(FHIRCodeableConcept $opticalActivity = null)
    {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Molecular structural representation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Molecular structural representation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation $representation
     * @return static
     */
    public function addRepresentation(FHIRSubstanceSpecificationRepresentation $representation = null)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Molecular structural representation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation[] $representation
     * @return static
     */
    public function setRepresentation(array $representation = [])
    {
        $this->representation = [];
        if ([] === $representation) {
            return $this;
        }
        foreach($representation as $v) {
            if ($v instanceof FHIRSubstanceSpecificationRepresentation) {
                $this->addRepresentation($v);
            } else {
                $this->addRepresentation(new FHIRSubstanceSpecificationRepresentation($v));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStereochemistry()
    {
        return $this->stereochemistry;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @return static
     */
    public function setStereochemistry(FHIRCodeableConcept $stereochemistry = null)
    {
        $this->stereochemistry = $stereochemistry;
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
        if ([] !== ($vs = $this->getIsotope())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ISOTOPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_FORMULA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_WEIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPTICAL_ACTIVITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPRESENTATION, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getStereochemistry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STEREOCHEMISTRY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ISOTOPE])) {
            $v = $this->getIsotope();
            foreach($validationRules[self::FIELD_ISOTOPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_ISOTOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISOTOPE])) {
                        $errs[self::FIELD_ISOTOPE] = [];
                    }
                    $errs[self::FIELD_ISOTOPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_FORMULA])) {
            $v = $this->getMolecularFormula();
            foreach($validationRules[self::FIELD_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_MOLECULAR_FORMULA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_MOLECULAR_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_WEIGHT])) {
                        $errs[self::FIELD_MOLECULAR_WEIGHT] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTICAL_ACTIVITY])) {
            $v = $this->getOpticalActivity();
            foreach($validationRules[self::FIELD_OPTICAL_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_OPTICAL_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTICAL_ACTIVITY])) {
                        $errs[self::FIELD_OPTICAL_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_OPTICAL_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STEREOCHEMISTRY])) {
            $v = $this->getStereochemistry();
            foreach($validationRules[self::FIELD_STEREOCHEMISTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_STRUCTURE, self::FIELD_STEREOCHEMISTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STEREOCHEMISTRY])) {
                        $errs[self::FIELD_STEREOCHEMISTRY] = [];
                    }
                    $errs[self::FIELD_STEREOCHEMISTRY][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
                throw new \DomainException(sprintf('FHIRSubstanceSpecificationStructure::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecificationStructure::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSpecificationStructure;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecificationStructure)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecificationStructure::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure or null, %s seen.',
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
        if (isset($children->isotope)) {
            foreach($children->isotope as $child) {
                $type->addIsotope(FHIRSubstanceSpecificationIsotope::xmlUnserialize($child));
            }
        }
        if (isset($children->molecularFormula)) {
            $type->setMolecularFormula(FHIRString::xmlUnserialize($children->molecularFormula));
        }
        if (isset($attributes->molecularFormula)) {
            $pt = $type->getMolecularFormula();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->molecularFormula);
            } else {
                $type->setMolecularFormula((string)$attributes->molecularFormula);
            }
        }
        if (isset($children->molecularFormulaByMoiety)) {
            $type->setMolecularFormulaByMoiety(FHIRString::xmlUnserialize($children->molecularFormulaByMoiety));
        }
        if (isset($attributes->molecularFormulaByMoiety)) {
            $pt = $type->getMolecularFormulaByMoiety();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->molecularFormulaByMoiety);
            } else {
                $type->setMolecularFormulaByMoiety((string)$attributes->molecularFormulaByMoiety);
            }
        }
        if (isset($children->molecularWeight)) {
            $type->setMolecularWeight(FHIRSubstanceSpecificationMolecularWeight::xmlUnserialize($children->molecularWeight));
        }
        if (isset($children->opticalActivity)) {
            $type->setOpticalActivity(FHIRCodeableConcept::xmlUnserialize($children->opticalActivity));
        }
        if (isset($children->representation)) {
            foreach($children->representation as $child) {
                $type->addRepresentation(FHIRSubstanceSpecificationRepresentation::xmlUnserialize($child));
            }
        }
        if (isset($children->source)) {
            foreach($children->source as $child) {
                $type->addSource(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->stereochemistry)) {
            $type->setStereochemistry(FHIRCodeableConcept::xmlUnserialize($children->stereochemistry));
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
        if ([] !== ($vs = $this->getIsotope())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ISOTOPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_FORMULA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_WEIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPTICAL_ACTIVITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPRESENTATION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getStereochemistry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STEREOCHEMISTRY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIsotope())) {
            $a[self::FIELD_ISOTOPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ISOTOPE][] = $v;
            }
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $a[self::FIELD_MOLECULAR_FORMULA] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MOLECULAR_FORMULA_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            $a[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $a[self::FIELD_MOLECULAR_WEIGHT] = $v;
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $a[self::FIELD_OPTICAL_ACTIVITY] = $v;
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $a[self::FIELD_REPRESENTATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPRESENTATION][] = $v;
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
        if (null !== ($v = $this->getStereochemistry())) {
            $a[self::FIELD_STEREOCHEMISTRY] = $v;
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