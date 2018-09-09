<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionContainer
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionContainer extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SpecimenDefinition.Container';

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive
     */
    public $additive = null;

    /**
     * Color of container cap.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $cap = null;

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $capacity = null;

    /**
     * The textual description of the kind of container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The type of material of the container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $material = null;

    /**
     * The minimum volume to be conditioned in the container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $minimumVolume = null;

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $preparation = null;

    /**
     * The type of container used to contain this kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSpecimenDefinitionContainer Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additive'])) {
                $this->setAdditive($data['additive']);
            }
            if (isset($data['cap'])) {
                $this->setCap($data['cap']);
            }
            if (isset($data['capacity'])) {
                $this->setCapacity($data['capacity']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['material'])) {
                $this->setMaterial($data['material']);
            }
            if (isset($data['minimumVolume'])) {
                $this->setMinimumVolume($data['minimumVolume']);
            }
            if (isset($data['preparation'])) {
                $this->setPreparation($data['preparation']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive
     * @return $this
     */
    public function setAdditive(FHIRSpecimenDefinitionAdditive $additive = null)
    {
        if (null === $additive) {
            return $this; 
        }
        $this->additive = $additive;
        return $this;
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive
     */
    public function getAdditive()
    {
        return $this->additive;
    }


    /**
     * Color of container cap.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCap(FHIRCodeableConcept $cap = null)
    {
        if (null === $cap) {
            return $this; 
        }
        $this->cap = $cap;
        return $this;
    }

    /**
     * Color of container cap.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCap()
    {
        return $this->cap;
    }


    /**
     * The capacity (volume or other measure) of this kind of container.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setCapacity(FHIRQuantity $capacity = null)
    {
        if (null === $capacity) {
            return $this; 
        }
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }


    /**
     * The textual description of the kind of container.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionContainer::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The textual description of the kind of container.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The type of material of the container.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMaterial(FHIRCodeableConcept $material = null)
    {
        if (null === $material) {
            return $this; 
        }
        $this->material = $material;
        return $this;
    }

    /**
     * The type of material of the container.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaterial()
    {
        return $this->material;
    }


    /**
     * The minimum volume to be conditioned in the container.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMinimumVolume(FHIRQuantity $minimumVolume = null)
    {
        if (null === $minimumVolume) {
            return $this; 
        }
        $this->minimumVolume = $minimumVolume;
        return $this;
    }

    /**
     * The minimum volume to be conditioned in the container.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinimumVolume()
    {
        return $this->minimumVolume;
    }


    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPreparation($preparation)
    {
        if (null === $preparation) {
            return $this; 
        }
        if (is_scalar($preparation)) {
            $preparation = new FHIRString($preparation);
        }
        if (!($preparation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionContainer::setPreparation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($preparation)
            ));
        }
        $this->preparation = $preparation;
        return $this;
    }

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreparation()
    {
        return $this->preparation;
    }


    /**
     * The type of container used to contain this kind of specimen.
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
     * The type of container used to contain this kind of specimen.
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
        if (null !== ($v = $this->getAdditive())) {
            $a['additive'] = $v;
        }
        if (null !== ($v = $this->getCap())) {
            $a['cap'] = $v;
        }
        if (null !== ($v = $this->getCapacity())) {
            $a['capacity'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getMaterial())) {
            $a['material'] = $v;
        }
        if (null !== ($v = $this->getMinimumVolume())) {
            $a['minimumVolume'] = $v;
        }
        if (null !== ($v = $this->getPreparation())) {
            $a['preparation'] = $v;
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
            $sxe = new \SimpleXMLElement('<SpecimenDefinitionContainer xmlns="http://hl7.org/fhir"></SpecimenDefinitionContainer>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}