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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A kind of specimen with associated set of requirements.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSpecimenDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSpecimenDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SpecimenDefinition';

    /**
     * The action to be performed for collecting the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $collection = null;

    /**
     * A business identifier associated with the kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Preparation of the patient for specimen collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientPreparation = null;

    /**
     * Time aspect of specimen collection (duration or offset).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $timeAspect = null;

    /**
     * The kind of material to be collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $typeCollected = null;

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public $typeTested = null;

    /**
     * FHIRSpecimenDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['collection'])) {
                $this->setCollection($data['collection']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['patientPreparation'])) {
                $this->setPatientPreparation($data['patientPreparation']);
            }
            if (isset($data['timeAspect'])) {
                $this->setTimeAspect($data['timeAspect']);
            }
            if (isset($data['typeCollected'])) {
                $this->setTypeCollected($data['typeCollected']);
            }
            if (isset($data['typeTested'])) {
                $this->setTypeTested($data['typeTested']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The action to be performed for collecting the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCollection(FHIRCodeableConcept $collection = null)
    {
        if (null === $collection) {
            return $this; 
        }
        $this->collection = $collection;
        return $this;
    }

    /**
     * The action to be performed for collecting the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCollection()
    {
        return $this->collection;
    }


    /**
     * A business identifier associated with the kind of specimen.
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
     * A business identifier associated with the kind of specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Preparation of the patient for specimen collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPatientPreparation($patientPreparation)
    {
        if (null === $patientPreparation) {
            return $this; 
        }
        if (is_scalar($patientPreparation)) {
            $patientPreparation = new FHIRString($patientPreparation);
        }
        if (!($patientPreparation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinition::setPatientPreparation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($patientPreparation)
            ));
        }
        $this->patientPreparation = $patientPreparation;
        return $this;
    }

    /**
     * Preparation of the patient for specimen collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientPreparation()
    {
        return $this->patientPreparation;
    }


    /**
     * Time aspect of specimen collection (duration or offset).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTimeAspect($timeAspect)
    {
        if (null === $timeAspect) {
            return $this; 
        }
        if (is_scalar($timeAspect)) {
            $timeAspect = new FHIRString($timeAspect);
        }
        if (!($timeAspect instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinition::setTimeAspect - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($timeAspect)
            ));
        }
        $this->timeAspect = $timeAspect;
        return $this;
    }

    /**
     * Time aspect of specimen collection (duration or offset).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTimeAspect()
    {
        return $this->timeAspect;
    }


    /**
     * The kind of material to be collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTypeCollected(FHIRCodeableConcept $typeCollected = null)
    {
        if (null === $typeCollected) {
            return $this; 
        }
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * The kind of material to be collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTypeCollected()
    {
        return $this->typeCollected;
    }


    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     * @return $this
     */
    public function setTypeTested(FHIRSpecimenDefinitionTypeTested $typeTested = null)
    {
        if (null === $typeTested) {
            return $this; 
        }
        $this->typeTested = $typeTested;
        return $this;
    }

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function getTypeTested()
    {
        return $this->typeTested;
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
        if (null !== ($v = $this->getCollection())) {
            $a['collection'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getPatientPreparation())) {
            $a['patientPreparation'] = $v;
        }
        if (null !== ($v = $this->getTimeAspect())) {
            $a['timeAspect'] = $v;
        }
        if (null !== ($v = $this->getTypeCollected())) {
            $a['typeCollected'] = $v;
        }
        if (null !== ($v = $this->getTypeTested())) {
            $a['typeTested'] = $v;
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
            $sxe = new \SimpleXMLElement('<SpecimenDefinition xmlns="http://hl7.org/fhir"></SpecimenDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}