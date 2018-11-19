<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 *
 * Class FHIREpisodeOfCareDiagnosis
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare
 */
class FHIREpisodeOfCareDiagnosis extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'EpisodeOfCare.Diagnosis';

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $condition = null;

    /**
     * Ranking of the diagnosis (for each role type).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $rank = null;

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $role = null;

    /**
     * FHIREpisodeOfCareDiagnosis Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['condition'])) {
                $value = $data['condition'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis::__construct - Property \"condition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setCondition($value);
            }
            if (isset($data['rank'])) {
                $value = $data['rank'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis::__construct - Property \"rank\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setRank($value);
            }
            if (isset($data['role'])) {
                $value = $data['role'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis::__construct - Property \"role\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setRole($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCondition(FHIRReference $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Ranking of the diagnosis (for each role type).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setRank($rank)
    {
        if (null === $rank) {
            return $this; 
        }
        if (is_scalar($rank)) {
            $rank = new FHIRPositiveInt($rank);
        }
        if (!($rank instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREpisodeOfCareDiagnosis::setRank - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($rank)
            ));
        }
        $this->rank = $rank;
        return $this;
    }

    /**
     * Ranking of the diagnosis (for each role type).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRole(FHIRCodeableConcept $role = null)
    {
        if (null === $role) {
            return $this; 
        }
        $this->role = $role;
        return $this;
    }

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
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
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getRank())) {
            $a['rank'] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
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
            $sxe = new \SimpleXMLElement('<EpisodeOfCareDiagnosis xmlns="http://hl7.org/fhir"></EpisodeOfCareDiagnosis>');
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize(true, $sxe->addChild('condition'));
        }
        if (null !== ($v = $this->getRank())) {
            $v->xmlSerialize(true, $sxe->addChild('rank'));
        }
        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize(true, $sxe->addChild('role'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}