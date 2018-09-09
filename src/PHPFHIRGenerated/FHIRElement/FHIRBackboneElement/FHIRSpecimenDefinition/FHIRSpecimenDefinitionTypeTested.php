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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionTypeTested
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SpecimenDefinition.TypeTested';

    /**
     * The specimen's container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public $container = null;

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public $handling = null;

    /**
     * Primary of secondary specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isDerived = null;

    /**
     * The preference for this type of conditioned specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference
     */
    public $preference = null;

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $rejectionCriterion = null;

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirement = null;

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $retentionTime = null;

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['container'])) {
                $this->setContainer($data['container']);
            }
            if (isset($data['handling'])) {
                $this->setHandling($data['handling']);
            }
            if (isset($data['isDerived'])) {
                $this->setIsDerived($data['isDerived']);
            }
            if (isset($data['preference'])) {
                $this->setPreference($data['preference']);
            }
            if (isset($data['rejectionCriterion'])) {
                $this->setRejectionCriterion($data['rejectionCriterion']);
            }
            if (isset($data['requirement'])) {
                $this->setRequirement($data['requirement']);
            }
            if (isset($data['retentionTime'])) {
                $this->setRetentionTime($data['retentionTime']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The specimen's container.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     * @return $this
     */
    public function setContainer(FHIRSpecimenDefinitionContainer $container = null)
    {
        if (null === $container) {
            return $this; 
        }
        $this->container = $container;
        return $this;
    }

    /**
     * The specimen's container.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer()
    {
        return $this->container;
    }


    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     * @return $this
     */
    public function setHandling(FHIRSpecimenDefinitionHandling $handling = null)
    {
        if (null === $handling) {
            return $this; 
        }
        $this->handling = $handling;
        return $this;
    }

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public function getHandling()
    {
        return $this->handling;
    }


    /**
     * Primary of secondary specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsDerived($isDerived)
    {
        if (null === $isDerived) {
            return $this; 
        }
        if (is_scalar($isDerived)) {
            $isDerived = new FHIRBoolean($isDerived);
        }
        if (!($isDerived instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionTypeTested::setIsDerived - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isDerived)
            ));
        }
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * Primary of secondary specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsDerived()
    {
        return $this->isDerived;
    }


    /**
     * The preference for this type of conditioned specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference
     * @return $this
     */
    public function setPreference($preference)
    {
        if (null === $preference) {
            return $this; 
        }
        if (is_scalar($preference)) {
            $preference = new FHIRSpecimenContainedPreference($preference);
        }
        if (!($preference instanceof FHIRSpecimenContainedPreference)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionTypeTested::setPreference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference or appropriate scalar value, %s seen.',
                gettype($preference)
            ));
        }
        $this->preference = $preference;
        return $this;
    }

    /**
     * The preference for this type of conditioned specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference()
    {
        return $this->preference;
    }


    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRejectionCriterion(FHIRCodeableConcept $rejectionCriterion = null)
    {
        if (null === $rejectionCriterion) {
            return $this; 
        }
        $this->rejectionCriterion = $rejectionCriterion;
        return $this;
    }

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRejectionCriterion()
    {
        return $this->rejectionCriterion;
    }


    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRequirement($requirement)
    {
        if (null === $requirement) {
            return $this; 
        }
        if (is_scalar($requirement)) {
            $requirement = new FHIRString($requirement);
        }
        if (!($requirement instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionTypeTested::setRequirement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($requirement)
            ));
        }
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirement()
    {
        return $this->requirement;
    }


    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setRetentionTime(FHIRDuration $retentionTime = null)
    {
        if (null === $retentionTime) {
            return $this; 
        }
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime()
    {
        return $this->retentionTime;
    }


    /**
     * The kind of specimen conditioned for testing expected by lab.
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
     * The kind of specimen conditioned for testing expected by lab.
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
        if (null !== ($v = $this->getContainer())) {
            $a['container'] = $v;
        }
        if (null !== ($v = $this->getHandling())) {
            $a['handling'] = $v;
        }
        if (null !== ($v = $this->getIsDerived())) {
            $a['isDerived'] = $v;
        }
        if (null !== ($v = $this->getPreference())) {
            $a['preference'] = $v;
        }
        if (null !== ($v = $this->getRejectionCriterion())) {
            $a['rejectionCriterion'] = $v;
        }
        if (null !== ($v = $this->getRequirement())) {
            $a['requirement'] = $v;
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $a['retentionTime'] = $v;
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
            $sxe = new \SimpleXMLElement('<SpecimenDefinitionTypeTested xmlns="http://hl7.org/fhir"></SpecimenDefinitionTypeTested>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}