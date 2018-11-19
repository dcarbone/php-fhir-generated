<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource is primarily used for the identification and definition of a medication. It covers the ingredients and the packaging for a medication.
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
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $form = null;

    /**
     * Photo(s) or graphic representation(s) of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    private $image = [];

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient[]
     */
    private $ingredient = [];

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $isBrand = null;

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $isOverTheCounter = null;

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $manufacturer = null;

    /**
     * Information that only applies to packages (not products).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     */
    private $package = null;

    /**
     * A code to indicate if the medication is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus
     */
    private $status = null;

    /**
     * FHIRMedication Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setCode($value);
            }
            if (isset($data['form'])) {
                $value = $data['form'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"form\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setForm($value);
            }
            if (isset($data['image'])) {
                $value = $data['image'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAttachment($v);
                        } 
                        if (!($v instanceof FHIRAttachment)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Collection field \"image\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addImage($v);
                    }
                }
            }
            if (isset($data['ingredient'])) {
                $value = $data['ingredient'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRMedicationIngredient($v);
                        } 
                        if (!($v instanceof FHIRMedicationIngredient)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Collection field \"ingredient\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addIngredient($v);
                    }
                }
            }
            if (isset($data['isBrand'])) {
                $value = $data['isBrand'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"isBrand\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setIsBrand($value);
            }
            if (isset($data['isOverTheCounter'])) {
                $value = $data['isOverTheCounter'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"isOverTheCounter\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setIsOverTheCounter($value);
            }
            if (isset($data['manufacturer'])) {
                $value = $data['manufacturer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"manufacturer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setManufacturer($value);
            }
            if (isset($data['package'])) {
                $value = $data['package'];
                if (is_array($value)) {
                    $value = new FHIRMedicationPackage($value);
                } 
                if (!($value instanceof FHIRMedicationPackage)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"package\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage or data to construct type, saw ".gettype($value)); 
                }
                $this->setPackage($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRMedicationStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMedicationStatus($value);
                }
                if (!($value instanceof FHIRMedicationStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
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
     * Photo(s) or graphic representation(s) of the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function addImage(FHIRAttachment $image = null)
    {
        if (null === $image) {
            return $this; 
        }
        $this->image[] = $image;
        return $this;
    }

    /**
     * Photo(s) or graphic representation(s) of the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     * @return $this
     */
    public function addIngredient(FHIRMedicationIngredient $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsBrand($isBrand)
    {
        if (null === $isBrand) {
            return $this; 
        }
        if (is_scalar($isBrand)) {
            $isBrand = new FHIRBoolean($isBrand);
        }
        if (!($isBrand instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedication::setIsBrand - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isBrand)
            ));
        }
        $this->isBrand = $isBrand;
        return $this;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsBrand()
    {
        return $this->isBrand;
    }

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsOverTheCounter($isOverTheCounter)
    {
        if (null === $isOverTheCounter) {
            return $this; 
        }
        if (is_scalar($isOverTheCounter)) {
            $isOverTheCounter = new FHIRBoolean($isOverTheCounter);
        }
        if (!($isOverTheCounter instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedication::setIsOverTheCounter - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isOverTheCounter)
            ));
        }
        $this->isOverTheCounter = $isOverTheCounter;
        return $this;
    }

    /**
     * Set to true if the medication can be obtained without an order from a prescriber.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsOverTheCounter()
    {
        return $this->isOverTheCounter;
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
     * Information that only applies to packages (not products).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     * @return $this
     */
    public function setPackage(FHIRMedicationPackage $package = null)
    {
        if (null === $package) {
            return $this; 
        }
        $this->package = $package;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     */
    public function getPackage()
    {
        return $this->package;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getForm())) {
            $a['form'] = $v;
        }
        if (0 < count($values = $this->getImage())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['image'] = $vs;
            }
        }
        if (0 < count($values = $this->getIngredient())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['ingredient'] = $vs;
            }
        }
        if (null !== ($v = $this->getIsBrand())) {
            $a['isBrand'] = $v;
        }
        if (null !== ($v = $this->getIsOverTheCounter())) {
            $a['isOverTheCounter'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getPackage())) {
            $a['package'] = $v;
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getForm())) {
            $v->xmlSerialize(true, $sxe->addChild('form'));
        }
        if (0 < count($values = $this->getImage())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('image'));
                }
            }
        }
        if (0 < count($values = $this->getIngredient())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('ingredient'));
                }
            }
        }
        if (null !== ($v = $this->getIsBrand())) {
            $v->xmlSerialize(true, $sxe->addChild('isBrand'));
        }
        if (null !== ($v = $this->getIsOverTheCounter())) {
            $v->xmlSerialize(true, $sxe->addChild('isOverTheCounter'));
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize(true, $sxe->addChild('manufacturer'));
        }
        if (null !== ($v = $this->getPackage())) {
            $v->xmlSerialize(true, $sxe->addChild('package'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}