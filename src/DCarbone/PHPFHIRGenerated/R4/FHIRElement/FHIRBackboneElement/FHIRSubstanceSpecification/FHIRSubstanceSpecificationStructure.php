<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Applicable for single substances that contain a radionuclide or a non-natural
     * isotopic ratio.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope[]
     */
    private $isotope = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Molecular formula.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $molecularFormula = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $molecularFormulaByMoiety = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    private $molecularWeight = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $opticalActivity = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Molecular structural representation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation[]
     */
    private $representation = [];
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $stereochemistry = null;

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
        if (isset($data[self::FIELD_MOLECULAR_FORMULA])) {
            $ext = (isset($data[self::FIELD_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_EXT]))
                ? $data[self::FIELD_MOLECULAR_FORMULA_EXT]
                : null;
            if ($data[self::FIELD_MOLECULAR_FORMULA] instanceof FHIRString) {
                $this->setMolecularFormula($data[self::FIELD_MOLECULAR_FORMULA]);
            } elseif ($ext && is_scalar($data[self::FIELD_MOLECULAR_FORMULA])) {
                $this->setMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MOLECULAR_FORMULA]] + $ext));
            } else {
                $this->setMolecularFormula(new FHIRString($data[self::FIELD_MOLECULAR_FORMULA]));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
            $ext = (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT]))
                ? $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT]
                : null;
            if ($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] instanceof FHIRString) {
                $this->setMolecularFormulaByMoiety($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]);
            } elseif ($ext && is_scalar($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
                $this->setMolecularFormulaByMoiety(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]] + $ext));
            } else {
                $this->setMolecularFormulaByMoiety(new FHIRString($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Molecular formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $molecularFormula
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $molecularFormulaByMoiety
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public function setStereochemistry(FHIRCodeableConcept $stereochemistry = null)
    {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
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
                throw new \DomainException(sprintf('FHIRSubstanceSpecificationStructure::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecificationStructure::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSubstanceSpecificationStructure);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecificationStructure)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecificationStructure::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->isotope)) {
            foreach($children->isotope as $child) {
                $type->addIsotope(FHIRSubstanceSpecificationIsotope::xmlUnserialize($child));
            }
        }
        if (isset($attributes->molecularFormula)) {
            $type->setMolecularFormula((string)$attributes->molecularFormula);
        }
        if (isset($children->molecularFormula)) {
            $type->setMolecularFormula(FHIRString::xmlUnserialize($children->molecularFormula));
        }
        if (isset($attributes->molecularFormulaByMoiety)) {
            $type->setMolecularFormulaByMoiety((string)$attributes->molecularFormulaByMoiety);
        }
        if (isset($children->molecularFormulaByMoiety)) {
            $type->setMolecularFormulaByMoiety(FHIRString::xmlUnserialize($children->molecularFormulaByMoiety));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstanceSpecificationStructure xmlns="http://hl7.org/fhir"></SubstanceSpecificationStructure>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getIsotope())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ISOTOPE));
            }
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $sxe->addAttribute(self::FIELD_MOLECULAR_FORMULA, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_FORMULA));
            }
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            $sxe->addAttribute(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY));
            }
        }

        if (null !== ($v = $this->getMolecularWeight())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MOLECULAR_WEIGHT));
        }

        if (null !== ($v = $this->getOpticalActivity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPTICAL_ACTIVITY));
        }

        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPRESENTATION));
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

        if (null !== ($v = $this->getStereochemistry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STEREOCHEMISTRY));
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
            $a[self::FIELD_ISOTOPE] = $vs;
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $a[self::FIELD_MOLECULAR_FORMULA] = (string)$v;
            $a[self::FIELD_MOLECULAR_FORMULA_EXT] = $v;
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            $a[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = (string)$v;
            $a[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT] = $v;
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $a[self::FIELD_MOLECULAR_WEIGHT] = $v;
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $a[self::FIELD_OPTICAL_ACTIVITY] = $v;
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $a[self::FIELD_REPRESENTATION] = $vs;
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $vs;
        }
        if (null !== ($v = $this->getStereochemistry())) {
            $a[self::FIELD_STEREOCHEMISTRY] = $v;
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