<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

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
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitDiagnosis
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitDiagnosis extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.Diagnosis';

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $diagnosisCodeableConcept = null;

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $diagnosisReference = null;

    /**
     * The package billing code, for example DRG, based on the assigned grouping code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $packageCode = null;

    /**
     * Sequence of diagnosis which serves to provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $sequence = null;

    /**
     * The type of the Diagnosis, for example: admitting, primary, secondary, discharge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $type = [];

    /**
     * FHIRExplanationOfBenefitDiagnosis Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['diagnosisCodeableConcept'])) {
                $value = $data['diagnosisCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Property \"diagnosisCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setDiagnosisCodeableConcept($value);
            }
            if (isset($data['diagnosisReference'])) {
                $value = $data['diagnosisReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Property \"diagnosisReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setDiagnosisReference($value);
            }
            if (isset($data['packageCode'])) {
                $value = $data['packageCode'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Property \"packageCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setPackageCode($value);
            }
            if (isset($data['sequence'])) {
                $value = $data['sequence'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Property \"sequence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value)); 
                }
                $this->setSequence($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Collection field \"type\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addType($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDiagnosisCodeableConcept(FHIRCodeableConcept $diagnosisCodeableConcept = null)
    {
        if (null === $diagnosisCodeableConcept) {
            return $this; 
        }
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDiagnosisCodeableConcept()
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDiagnosisReference(FHIRReference $diagnosisReference = null)
    {
        if (null === $diagnosisReference) {
            return $this; 
        }
        $this->diagnosisReference = $diagnosisReference;
        return $this;
    }

    /**
     * The diagnosis. (choose any one of diagnosis*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDiagnosisReference()
    {
        return $this->diagnosisReference;
    }

    /**
     * The package billing code, for example DRG, based on the assigned grouping code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPackageCode(FHIRCodeableConcept $packageCode = null)
    {
        if (null === $packageCode) {
            return $this; 
        }
        $this->packageCode = $packageCode;
        return $this;
    }

    /**
     * The package billing code, for example DRG, based on the assigned grouping code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPackageCode()
    {
        return $this->packageCode;
    }

    /**
     * Sequence of diagnosis which serves to provide a link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitDiagnosis::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Sequence of diagnosis which serves to provide a link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * The type of the Diagnosis, for example: admitting, primary, secondary, discharge.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * The type of the Diagnosis, for example: admitting, primary, secondary, discharge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
        if (null !== ($v = $this->getDiagnosisCodeableConcept())) {
            $a['diagnosisCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDiagnosisReference())) {
            $a['diagnosisReference'] = $v;
        }
        if (null !== ($v = $this->getPackageCode())) {
            $a['packageCode'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        if (0 < count($values = $this->getType())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['type'] = $vs;
            }
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitDiagnosis xmlns="http://hl7.org/fhir"></ExplanationOfBenefitDiagnosis>');
        }
        if (null !== ($v = $this->getDiagnosisCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('diagnosisCodeableConcept'));
        }
        if (null !== ($v = $this->getDiagnosisReference())) {
            $v->xmlSerialize(true, $sxe->addChild('diagnosisReference'));
        }
        if (null !== ($v = $this->getPackageCode())) {
            $v->xmlSerialize(true, $sxe->addChild('packageCode'));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize(true, $sxe->addChild('sequence'));
        }
        if (0 < count($values = $this->getType())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('type'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}