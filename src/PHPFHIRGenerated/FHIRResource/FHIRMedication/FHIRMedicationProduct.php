<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedication;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * This resource is primarily used for the identification and definition of a medication. It covers the ingredients and the packaging for a medication.
 */
class FHIRMedicationProduct extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Describes the form of the item.  Powder; tablets; carton.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationIngredient[]
     */
    public $ingredient = array();

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationBatch[]
     */
    public $batch = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Medication.Product';

    /**
     * Describes the form of the item.  Powder; tablets; carton.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Describes the form of the item.  Powder; tablets; carton.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $form
     * @return $this
     */
    public function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationIngredient[] $ingredient
     * @return $this
     */
    public function addIngredient($ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationBatch[]
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedication\FHIRMedicationBatch[] $batch
     * @return $this
     */
    public function addBatch($batch)
    {
        $this->batch[] = $batch;
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
        if (null !== $this->form) $json['form'] = $this->form->jsonSerialize();
        if (0 < count($this->ingredient)) {
            $json['ingredient'] = array();
            foreach($this->ingredient as $ingredient) {
                $json['ingredient'][] = $ingredient->jsonSerialize();
            }
        }
        if (0 < count($this->batch)) {
            $json['batch'] = array();
            foreach($this->batch as $batch) {
                $json['batch'][] = $batch->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationProduct xmlns="http://hl7.org/fhir"></MedicationProduct>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->form) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->ingredient)) {
            foreach($this->ingredient as $ingredient) {
                $ingredient->xmlSerialize(true, $sxe->addChild('ingredient'));
            }
        }
        if (0 < count($this->batch)) {
            foreach($this->batch as $batch) {
                $batch->xmlSerialize(true, $sxe->addChild('batch'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}