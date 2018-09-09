<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstanceSpecification
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceSpecification extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstanceSpecification';

    /**
     * Textual comment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Identifier by which this substance is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Moiety, for structural modifications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety
     */
    public $moiety = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public $molecularWeight = null;

    /**
     * Data items specific to polymers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $polymer = null;

    /**
     * General specifications for this substance, including how it is related to other substances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty
     */
    public $property = null;

    /**
     * General information detailing this substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referenceInformation = null;

    /**
     * Supporting literature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $referenceSource = null;

    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $stoichiometric = null;

    /**
     * Structural information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public $structure = null;

    /**
     * Codes associated with the substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode
     */
    public $substanceCode = null;

    /**
     * Names applicable to this substence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName
     */
    public $substanceName = null;

    /**
     * High level categorization, e.g. polymer or nucleic acid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSubstanceSpecification Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['moiety'])) {
                $this->setMoiety($data['moiety']);
            }
            if (isset($data['molecularWeight'])) {
                $this->setMolecularWeight($data['molecularWeight']);
            }
            if (isset($data['polymer'])) {
                $this->setPolymer($data['polymer']);
            }
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['referenceInformation'])) {
                $this->setReferenceInformation($data['referenceInformation']);
            }
            if (isset($data['referenceSource'])) {
                $this->setReferenceSource($data['referenceSource']);
            }
            if (isset($data['stoichiometric'])) {
                $this->setStoichiometric($data['stoichiometric']);
            }
            if (isset($data['structure'])) {
                $this->setStructure($data['structure']);
            }
            if (isset($data['substanceCode'])) {
                $this->setSubstanceCode($data['substanceCode']);
            }
            if (isset($data['substanceName'])) {
                $this->setSubstanceName($data['substanceName']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Textual comment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecification::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Textual comment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * Identifier by which this substance is known.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier by which this substance is known.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Moiety, for structural modifications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety
     * @return $this
     */
    public function setMoiety(FHIRSubstanceSpecificationMoiety $moiety = null)
    {
        if (null === $moiety) {
            return $this; 
        }
        $this->moiety = $moiety;
        return $this;
    }

    /**
     * Moiety, for structural modifications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety
     */
    public function getMoiety()
    {
        return $this->moiety;
    }


    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     * @return $this
     */
    public function setMolecularWeight(FHIRSubstanceSpecificationMolecularWeight $molecularWeight = null)
    {
        if (null === $molecularWeight) {
            return $this; 
        }
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }


    /**
     * Data items specific to polymers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPolymer(FHIRReference $polymer = null)
    {
        if (null === $polymer) {
            return $this; 
        }
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * Data items specific to polymers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPolymer()
    {
        return $this->polymer;
    }


    /**
     * General specifications for this substance, including how it is related to other substances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty
     * @return $this
     */
    public function setProperty(FHIRSubstanceSpecificationProperty $property = null)
    {
        if (null === $property) {
            return $this; 
        }
        $this->property = $property;
        return $this;
    }

    /**
     * General specifications for this substance, including how it is related to other substances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty
     */
    public function getProperty()
    {
        return $this->property;
    }


    /**
     * General information detailing this substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferenceInformation(FHIRReference $referenceInformation = null)
    {
        if (null === $referenceInformation) {
            return $this; 
        }
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * General information detailing this substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferenceInformation()
    {
        return $this->referenceInformation;
    }


    /**
     * Supporting literature.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReferenceSource($referenceSource)
    {
        if (null === $referenceSource) {
            return $this; 
        }
        if (is_scalar($referenceSource)) {
            $referenceSource = new FHIRString($referenceSource);
        }
        if (!($referenceSource instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecification::setReferenceSource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($referenceSource)
            ));
        }
        $this->referenceSource = $referenceSource;
        return $this;
    }

    /**
     * Supporting literature.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReferenceSource()
    {
        return $this->referenceSource;
    }


    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setStoichiometric($stoichiometric)
    {
        if (null === $stoichiometric) {
            return $this; 
        }
        if (is_scalar($stoichiometric)) {
            $stoichiometric = new FHIRBoolean($stoichiometric);
        }
        if (!($stoichiometric instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecification::setStoichiometric - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($stoichiometric)
            ));
        }
        $this->stoichiometric = $stoichiometric;
        return $this;
    }

    /**
     * Chemicals may be stoichiometric or non-stoichiometric.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getStoichiometric()
    {
        return $this->stoichiometric;
    }


    /**
     * Structural information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     * @return $this
     */
    public function setStructure(FHIRSubstanceSpecificationStructure $structure = null)
    {
        if (null === $structure) {
            return $this; 
        }
        $this->structure = $structure;
        return $this;
    }

    /**
     * Structural information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure
     */
    public function getStructure()
    {
        return $this->structure;
    }


    /**
     * Codes associated with the substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode
     * @return $this
     */
    public function setSubstanceCode(FHIRSubstanceSpecificationSubstanceCode $substanceCode = null)
    {
        if (null === $substanceCode) {
            return $this; 
        }
        $this->substanceCode = $substanceCode;
        return $this;
    }

    /**
     * Codes associated with the substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceCode
     */
    public function getSubstanceCode()
    {
        return $this->substanceCode;
    }


    /**
     * Names applicable to this substence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName
     * @return $this
     */
    public function setSubstanceName(FHIRSubstanceSpecificationSubstanceName $substanceName = null)
    {
        if (null === $substanceName) {
            return $this; 
        }
        $this->substanceName = $substanceName;
        return $this;
    }

    /**
     * Names applicable to this substence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationSubstanceName
     */
    public function getSubstanceName()
    {
        return $this->substanceName;
    }


    /**
     * High level categorization, e.g. polymer or nucleic acid.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * High level categorization, e.g. polymer or nucleic acid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMoiety())) {
            $a['moiety'] = $v;
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $a['molecularWeight'] = $v;
        }
        if (null !== ($v = $this->getPolymer())) {
            $a['polymer'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
        }
        if (null !== ($v = $this->getReferenceInformation())) {
            $a['referenceInformation'] = $v;
        }
        if (null !== ($v = $this->getReferenceSource())) {
            $a['referenceSource'] = $v;
        }
        if (null !== ($v = $this->getStoichiometric())) {
            $a['stoichiometric'] = $v;
        }
        if (null !== ($v = $this->getStructure())) {
            $a['structure'] = $v;
        }
        if (null !== ($v = $this->getSubstanceCode())) {
            $a['substanceCode'] = $v;
        }
        if (null !== ($v = $this->getSubstanceName())) {
            $a['substanceName'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstanceSpecification xmlns="http://hl7.org/fhir"></SubstanceSpecification>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}