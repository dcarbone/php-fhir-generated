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
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitProcedure
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitProcedure extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.Procedure';

    /**
     * Date and optionally time the procedure was performed .
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $procedureCodeableConcept = null;

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $procedureReference = null;

    /**
     * Sequence of procedures which serves to order and provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $sequence = null;

    /**
     * FHIRExplanationOfBenefitProcedure Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['date'])) {
                $value = $data['date'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure::__construct - Property \"date\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setDate($value);
            }
            if (isset($data['procedureCodeableConcept'])) {
                $value = $data['procedureCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure::__construct - Property \"procedureCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setProcedureCodeableConcept($value);
            }
            if (isset($data['procedureReference'])) {
                $value = $data['procedureReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure::__construct - Property \"procedureReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setProcedureReference($value);
            }
            if (isset($data['sequence'])) {
                $value = $data['sequence'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure::__construct - Property \"sequence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setSequence($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Date and optionally time the procedure was performed .
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitProcedure::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Date and optionally time the procedure was performed .
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProcedureCodeableConcept(FHIRCodeableConcept $procedureCodeableConcept = null)
    {
        if (null === $procedureCodeableConcept) {
            return $this; 
        }
        $this->procedureCodeableConcept = $procedureCodeableConcept;
        return $this;
    }

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProcedureCodeableConcept()
    {
        return $this->procedureCodeableConcept;
    }

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProcedureReference(FHIRReference $procedureReference = null)
    {
        if (null === $procedureReference) {
            return $this; 
        }
        $this->procedureReference = $procedureReference;
        return $this;
    }

    /**
     * The procedure code. (choose any one of procedure*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProcedureReference()
    {
        return $this->procedureReference;
    }

    /**
     * Sequence of procedures which serves to order and provide a link.
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
                'FHIRExplanationOfBenefitProcedure::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Sequence of procedures which serves to order and provide a link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
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
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getProcedureCodeableConcept())) {
            $a['procedureCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getProcedureReference())) {
            $a['procedureReference'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitProcedure xmlns="http://hl7.org/fhir"></ExplanationOfBenefitProcedure>');
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (null !== ($v = $this->getProcedureCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('procedureCodeableConcept'));
        }
        if (null !== ($v = $this->getProcedureReference())) {
            $v->xmlSerialize(true, $sxe->addChild('procedureReference'));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize(true, $sxe->addChild('sequence'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}