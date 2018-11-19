<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * This resource is primarily used for the identification and definition of a medication. It covers the ingredients and the packaging for a medication.
 *
 * Class FHIRMedicationIngredient
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication
 */
class FHIRMedicationIngredient extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Medication.Ingredient';

    /**
     * Specifies how many (or how much) of the items there are in this Medication.  For example, 250 mg per tablet.  This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $amount = null;

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $isActive = null;

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $itemReference = null;

    /**
     * FHIRMedicationIngredient Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['amount'])) {
                $value = $data['amount'];
                if (is_array($value)) {
                    $value = new FHIRRatio($value);
                } 
                if (!($value instanceof FHIRRatio)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient::__construct - Property \"amount\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRatio or data to construct type, saw ".gettype($value));
                }
                $this->setAmount($value);
            }
            if (isset($data['isActive'])) {
                $value = $data['isActive'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient::__construct - Property \"isActive\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setIsActive($value);
            }
            if (isset($data['itemCodeableConcept'])) {
                $value = $data['itemCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient::__construct - Property \"itemCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setItemCodeableConcept($value);
            }
            if (isset($data['itemReference'])) {
                $value = $data['itemReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient::__construct - Property \"itemReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setItemReference($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Specifies how many (or how much) of the items there are in this Medication.  For example, 250 mg per tablet.  This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setAmount(FHIRRatio $amount = null)
    {
        if (null === $amount) {
            return $this; 
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Specifies how many (or how much) of the items there are in this Medication.  For example, 250 mg per tablet.  This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsActive($isActive)
    {
        if (null === $isActive) {
            return $this; 
        }
        if (is_scalar($isActive)) {
            $isActive = new FHIRBoolean($isActive);
        }
        if (!($isActive instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationIngredient::setIsActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isActive)
            ));
        }
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setItemCodeableConcept(FHIRCodeableConcept $itemCodeableConcept = null)
    {
        if (null === $itemCodeableConcept) {
            return $this; 
        }
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setItemReference(FHIRReference $itemReference = null)
    {
        if (null === $itemReference) {
            return $this; 
        }
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getItemReference()
    {
        return $this->itemReference;
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
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getIsActive())) {
            $a['isActive'] = $v;
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $a['itemCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getItemReference())) {
            $a['itemReference'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicationIngredient xmlns="http://hl7.org/fhir"></MedicationIngredient>');
        }
        if (null !== ($v = $this->getAmount())) {
            $v->xmlSerialize(true, $sxe->addChild('amount'));
        }
        if (null !== ($v = $this->getIsActive())) {
            $v->xmlSerialize(true, $sxe->addChild('isActive'));
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('itemCodeableConcept'));
        }
        if (null !== ($v = $this->getItemReference())) {
            $v->xmlSerialize(true, $sxe->addChild('itemReference'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}