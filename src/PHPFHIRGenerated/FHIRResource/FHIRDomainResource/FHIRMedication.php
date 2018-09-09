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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource is primarily used for the identification and definition of a medication for the purposes of prescribing, dispensing, and administering a medication as well as for making statements about medication use.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedication
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedication extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Medication';

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $amount = null;

    /**
     * Information that only applies to packages (not products).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch
     */
    public $batch = null;

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     */
    public $ingredient = null;

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * A code to indicate if the medication is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus
     */
    public $status = null;

    /**
     * FHIRMedication Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['batch'])) {
                $this->setBatch($data['batch']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['ingredient'])) {
                $this->setIngredient($data['ingredient']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setAmount(FHIRQuantity $amount = null)
    {
        if (null === $amount) {
            return $this; 
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * Information that only applies to packages (not products).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch
     * @return $this
     */
    public function setBatch(FHIRMedicationBatch $batch = null)
    {
        if (null === $batch) {
            return $this; 
        }
        $this->batch = $batch;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch
     */
    public function getBatch()
    {
        return $this->batch;
    }


    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setForm(FHIRCodeableConcept $form = null)
    {
        if (null === $form) {
            return $this; 
        }
        $this->form = $form;
        return $this;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }


    /**
     * Identifies a particular constituent of interest in the product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     * @return $this
     */
    public function setIngredient(FHIRMedicationIngredient $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }


    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * A code to indicate if the medication is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMedicationStatus($status);
        }
        if (!($status instanceof FHIRMedicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedication::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code to indicate if the medication is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getBatch())) {
            $a['batch'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getForm())) {
            $a['form'] = $v;
        }
        if (null !== ($v = $this->getIngredient())) {
            $a['ingredient'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<Medication xmlns="http://hl7.org/fhir"></Medication>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}