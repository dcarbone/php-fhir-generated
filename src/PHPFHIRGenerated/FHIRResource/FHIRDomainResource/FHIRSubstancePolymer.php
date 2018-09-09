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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Todo.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstancePolymer
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSubstancePolymer extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstancePolymer';

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $copolymerConnectivity = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $geometry = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $modification = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet
     */
    public $monomerSet = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     */
    public $repeat = null;

    /**
     * FHIRSubstancePolymer Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['copolymerConnectivity'])) {
                $this->setCopolymerConnectivity($data['copolymerConnectivity']);
            }
            if (isset($data['geometry'])) {
                $this->setGeometry($data['geometry']);
            }
            if (isset($data['modification'])) {
                $this->setModification($data['modification']);
            }
            if (isset($data['monomerSet'])) {
                $this->setMonomerSet($data['monomerSet']);
            }
            if (isset($data['repeat'])) {
                $this->setRepeat($data['repeat']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setClass(FHIRCodeableConcept $class = null)
    {
        if (null === $class) {
            return $this; 
        }
        $this->class = $class;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCopolymerConnectivity(FHIRCodeableConcept $copolymerConnectivity = null)
    {
        if (null === $copolymerConnectivity) {
            return $this; 
        }
        $this->copolymerConnectivity = $copolymerConnectivity;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCopolymerConnectivity()
    {
        return $this->copolymerConnectivity;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setGeometry(FHIRCodeableConcept $geometry = null)
    {
        if (null === $geometry) {
            return $this; 
        }
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getGeometry()
    {
        return $this->geometry;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setModification($modification)
    {
        if (null === $modification) {
            return $this; 
        }
        if (is_scalar($modification)) {
            $modification = new FHIRString($modification);
        }
        if (!($modification instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymer::setModification - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($modification)
            ));
        }
        $this->modification = $modification;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModification()
    {
        return $this->modification;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet
     * @return $this
     */
    public function setMonomerSet(FHIRSubstancePolymerMonomerSet $monomerSet = null)
    {
        if (null === $monomerSet) {
            return $this; 
        }
        $this->monomerSet = $monomerSet;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet
     */
    public function getMonomerSet()
    {
        return $this->monomerSet;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     * @return $this
     */
    public function setRepeat(FHIRSubstancePolymerRepeat $repeat = null)
    {
        if (null === $repeat) {
            return $this; 
        }
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     */
    public function getRepeat()
    {
        return $this->repeat;
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
        if (null !== ($v = $this->getClass())) {
            $a['class'] = $v;
        }
        if (null !== ($v = $this->getCopolymerConnectivity())) {
            $a['copolymerConnectivity'] = $v;
        }
        if (null !== ($v = $this->getGeometry())) {
            $a['geometry'] = $v;
        }
        if (null !== ($v = $this->getModification())) {
            $a['modification'] = $v;
        }
        if (null !== ($v = $this->getMonomerSet())) {
            $a['monomerSet'] = $v;
        }
        if (null !== ($v = $this->getRepeat())) {
            $a['repeat'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubstancePolymer xmlns="http://hl7.org/fhir"></SubstancePolymer>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}