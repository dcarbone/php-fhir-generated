<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Primarily used for identification and definition of Medication, but also covers ingredients and packaging.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedication extends FHIRResource implements \JsonSerializable
{
    /**
     * The common/commercial name of the medication absent information such as strength, form, etc.  E.g. Acetaminophen, Tylenol 3, etc.  The fully coordinated name is communicated as the display of Medication.code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A code (or set of codes) that identify this medication.   Usage note: This could be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT code, etc. It could also be a local formulary code, optionally with translations to the standard drug codes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Set to true if the item is attributable to a specific manufacturer (even if we don't know who that is).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isBrand = null;

    /**
     * Describes the details of the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $manufacturer = null;

    /**
     * Medications are either a single administrable product or a package that contains one or more products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationKind
     */
    public $kind = null;

    /**
     * Information that only applies to products (not packages).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationProduct
     */
    public $product = null;

    /**
     * Information that only applies to packages (not products).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationPackage
     */
    public $package = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Medication';

    /**
     * The common/commercial name of the medication absent information such as strength, form, etc.  E.g. Acetaminophen, Tylenol 3, etc.  The fully coordinated name is communicated as the display of Medication.code.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The common/commercial name of the medication absent information such as strength, form, etc.  E.g. Acetaminophen, Tylenol 3, etc.  The fully coordinated name is communicated as the display of Medication.code.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A code (or set of codes) that identify this medication.   Usage note: This could be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT code, etc. It could also be a local formulary code, optionally with translations to the standard drug codes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code (or set of codes) that identify this medication.   Usage note: This could be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT code, etc. It could also be a local formulary code, optionally with translations to the standard drug codes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer (even if we don't know who that is).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsBrand()
    {
        return $this->isBrand;
    }

    /**
     * Set to true if the item is attributable to a specific manufacturer (even if we don't know who that is).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isBrand
     * @return $this
     */
    public function setIsBrand($isBrand)
    {
        $this->isBrand = $isBrand;
        return $this;
    }

    /**
     * Describes the details of the manufacturer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Describes the details of the manufacturer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Medications are either a single administrable product or a package that contains one or more products.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Medications are either a single administrable product or a package that contains one or more products.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Information that only applies to products (not packages).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Information that only applies to products (not packages).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationProduct $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationPackage
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Information that only applies to packages (not products).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationPackage $package
     * @return $this
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->isBrand) $json['isBrand'] = $this->isBrand;
        if (null !== $this->manufacturer) $json['manufacturer'] = $this->manufacturer;
        if (null !== $this->kind) $json['kind'] = $this->kind;
        if (null !== $this->product) $json['product'] = $this->product;
        if (null !== $this->package) $json['package'] = $this->package;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Medication xmlns="http://hl7.org/fhir"></Medication>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->isBrand) $this->isBrand->xmlSerialize(true, $sxe->addChild('isBrand'));
        if (null !== $this->manufacturer) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->product) $this->product->xmlSerialize(true, $sxe->addChild('product'));
        if (null !== $this->package) $this->package->xmlSerialize(true, $sxe->addChild('package'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}