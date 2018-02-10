<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSubstanceSpecification extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Textual comment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $stoichiometric = null;

    /**
     * Identifier by which this substance is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * High level categorisation, e.g. polymer or nucleic acid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Supporting literature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $referenceSource = [];

    /**
     * Moiety, for structural modifications.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[]
     */
    public $moiety = [];

    /**
     * General specifications for this substance, including how it is related to other substances.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[]
     */
    public $property = [];

    /**
     * General information detailing this substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referenceInformation = null;

    /**
     * Structural information.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public $structure = null;

    /**
     * Codes associated with the substance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode[]
     */
    public $substanceCode = [];

    /**
     * Names applicable to this substence.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName[]
     */
    public $substanceName = [];

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[]
     */
    public $molecularWeight = [];

    /**
     * Data items specific to polymers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $polymer = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification';

    /**
     * Textual comment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Textual comment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getStoichiometric() {
        return $this->stoichiometric;
    }

    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $stoichiometric
     * @return $this
     */
    public function setStoichiometric($stoichiometric) {
        $this->stoichiometric = $stoichiometric;
        return $this;
    }

    /**
     * Identifier by which this substance is known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifier by which this substance is known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * High level categorisation, e.g. polymer or nucleic acid.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * High level categorisation, e.g. polymer or nucleic acid.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Supporting literature.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getReferenceSource() {
        return $this->referenceSource;
    }

    /**
     * Supporting literature.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $referenceSource
     * @return $this
     */
    public function addReferenceSource($referenceSource) {
        $this->referenceSource[] = $referenceSource;
        return $this;
    }

    /**
     * Moiety, for structural modifications.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety[]
     */
    public function getMoiety() {
        return $this->moiety;
    }

    /**
     * Moiety, for structural modifications.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety $moiety
     * @return $this
     */
    public function addMoiety($moiety) {
        $this->moiety[] = $moiety;
        return $this;
    }

    /**
     * General specifications for this substance, including how it is related to other substances.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty[]
     */
    public function getProperty() {
        return $this->property;
    }

    /**
     * General specifications for this substance, including how it is related to other substances.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty $property
     * @return $this
     */
    public function addProperty($property) {
        $this->property[] = $property;
        return $this;
    }

    /**
     * General information detailing this substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferenceInformation() {
        return $this->referenceInformation;
    }

    /**
     * General information detailing this substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referenceInformation
     * @return $this
     */
    public function setReferenceInformation($referenceInformation) {
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * Structural information.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public function getStructure() {
        return $this->structure;
    }

    /**
     * Structural information.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure $structure
     * @return $this
     */
    public function setStructure($structure) {
        $this->structure = $structure;
        return $this;
    }

    /**
     * Codes associated with the substance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode[]
     */
    public function getSubstanceCode() {
        return $this->substanceCode;
    }

    /**
     * Codes associated with the substance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode $substanceCode
     * @return $this
     */
    public function addSubstanceCode($substanceCode) {
        $this->substanceCode[] = $substanceCode;
        return $this;
    }

    /**
     * Names applicable to this substence.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName[]
     */
    public function getSubstanceName() {
        return $this->substanceName;
    }

    /**
     * Names applicable to this substence.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName $substanceName
     * @return $this
     */
    public function addSubstanceName($substanceName) {
        $this->substanceName[] = $substanceName;
        return $this;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight[]
     */
    public function getMolecularWeight() {
        return $this->molecularWeight;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight $molecularWeight
     * @return $this
     */
    public function addMolecularWeight($molecularWeight) {
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * Data items specific to polymers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPolymer() {
        return $this->polymer;
    }

    /**
     * Data items specific to polymers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $polymer
     * @return $this
     */
    public function setPolymer($polymer) {
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['stoichiometric'])) {
                $this->setStoichiometric($data['stoichiometric']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['referenceSource'])) {
                if (is_array($data['referenceSource'])) {
                    foreach($data['referenceSource'] as $d) {
                        $this->addReferenceSource($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceSource" must be array of objects or null, '.gettype($data['referenceSource']).' seen.');
                }
            }
            if (isset($data['moiety'])) {
                if (is_array($data['moiety'])) {
                    foreach($data['moiety'] as $d) {
                        $this->addMoiety($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"moiety" must be array of objects or null, '.gettype($data['moiety']).' seen.');
                }
            }
            if (isset($data['property'])) {
                if (is_array($data['property'])) {
                    foreach($data['property'] as $d) {
                        $this->addProperty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"property" must be array of objects or null, '.gettype($data['property']).' seen.');
                }
            }
            if (isset($data['referenceInformation'])) {
                $this->setReferenceInformation($data['referenceInformation']);
            }
            if (isset($data['structure'])) {
                $this->setStructure($data['structure']);
            }
            if (isset($data['substanceCode'])) {
                if (is_array($data['substanceCode'])) {
                    foreach($data['substanceCode'] as $d) {
                        $this->addSubstanceCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"substanceCode" must be array of objects or null, '.gettype($data['substanceCode']).' seen.');
                }
            }
            if (isset($data['substanceName'])) {
                if (is_array($data['substanceName'])) {
                    foreach($data['substanceName'] as $d) {
                        $this->addSubstanceName($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"substanceName" must be array of objects or null, '.gettype($data['substanceName']).' seen.');
                }
            }
            if (isset($data['molecularWeight'])) {
                if (is_array($data['molecularWeight'])) {
                    foreach($data['molecularWeight'] as $d) {
                        $this->addMolecularWeight($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"molecularWeight" must be array of objects or null, '.gettype($data['molecularWeight']).' seen.');
                }
            }
            if (isset($data['polymer'])) {
                $this->setPolymer($data['polymer']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        if (isset($this->stoichiometric)) $json['stoichiometric'] = $this->stoichiometric;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->referenceSource)) {
            $json['referenceSource'] = [];
            foreach($this->referenceSource as $referenceSource) {
                if (null !== $referenceSource) $json['referenceSource'][] = $referenceSource;
            }
        }
        if (0 < count($this->moiety)) {
            $json['moiety'] = [];
            foreach($this->moiety as $moiety) {
                if (null !== $moiety) $json['moiety'][] = $moiety;
            }
        }
        if (0 < count($this->property)) {
            $json['property'] = [];
            foreach($this->property as $property) {
                if (null !== $property) $json['property'][] = $property;
            }
        }
        if (isset($this->referenceInformation)) $json['referenceInformation'] = $this->referenceInformation;
        if (isset($this->structure)) $json['structure'] = $this->structure;
        if (0 < count($this->substanceCode)) {
            $json['substanceCode'] = [];
            foreach($this->substanceCode as $substanceCode) {
                if (null !== $substanceCode) $json['substanceCode'][] = $substanceCode;
            }
        }
        if (0 < count($this->substanceName)) {
            $json['substanceName'] = [];
            foreach($this->substanceName as $substanceName) {
                if (null !== $substanceName) $json['substanceName'][] = $substanceName;
            }
        }
        if (0 < count($this->molecularWeight)) {
            $json['molecularWeight'] = [];
            foreach($this->molecularWeight as $molecularWeight) {
                if (null !== $molecularWeight) $json['molecularWeight'][] = $molecularWeight;
            }
        }
        if (isset($this->polymer)) $json['polymer'] = $this->polymer;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecification xmlns="http://hl7.org/fhir"></SubstanceSpecification>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (isset($this->stoichiometric)) $this->stoichiometric->xmlSerialize(true, $sxe->addChild('stoichiometric'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->referenceSource)) {
            foreach($this->referenceSource as $referenceSource) {
                $referenceSource->xmlSerialize(true, $sxe->addChild('referenceSource'));
            }
        }
        if (0 < count($this->moiety)) {
            foreach($this->moiety as $moiety) {
                $moiety->xmlSerialize(true, $sxe->addChild('moiety'));
            }
        }
        if (0 < count($this->property)) {
            foreach($this->property as $property) {
                $property->xmlSerialize(true, $sxe->addChild('property'));
            }
        }
        if (isset($this->referenceInformation)) $this->referenceInformation->xmlSerialize(true, $sxe->addChild('referenceInformation'));
        if (isset($this->structure)) $this->structure->xmlSerialize(true, $sxe->addChild('structure'));
        if (0 < count($this->substanceCode)) {
            foreach($this->substanceCode as $substanceCode) {
                $substanceCode->xmlSerialize(true, $sxe->addChild('substanceCode'));
            }
        }
        if (0 < count($this->substanceName)) {
            foreach($this->substanceName as $substanceName) {
                $substanceName->xmlSerialize(true, $sxe->addChild('substanceName'));
            }
        }
        if (0 < count($this->molecularWeight)) {
            foreach($this->molecularWeight as $molecularWeight) {
                $molecularWeight->xmlSerialize(true, $sxe->addChild('molecularWeight'));
            }
        }
        if (isset($this->polymer)) $this->polymer->xmlSerialize(true, $sxe->addChild('polymer'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}