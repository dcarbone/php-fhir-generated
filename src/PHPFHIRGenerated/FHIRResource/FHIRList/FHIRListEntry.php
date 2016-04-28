<?php namespace PHPFHIRGenerated\FHIRResource\FHIRList;

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
 * A set of information summarized from a list of other resources.
 */
class FHIRListEntry extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $flag = null;

    /**
     * True if this item is marked as deleted in the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deleted = null;

    /**
     * When this item was added to the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A reference to the actual resource from which data was derived.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $item = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'List.Entry';

    /**
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $flag
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * True if this item is marked as deleted in the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * True if this item is marked as deleted in the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * When this item was added to the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * When this item was added to the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A reference to the actual resource from which data was derived.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A reference to the actual resource from which data was derived.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->item = $item;
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
        if (null !== $this->flag) $json['flag'] = $this->flag->jsonSerialize();
        if (null !== $this->deleted) $json['deleted'] = $this->deleted->jsonSerialize();
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->item) $json['item'] = $this->item->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ListEntry xmlns="http://hl7.org/fhir"></ListEntry>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->flag) $this->flag->xmlSerialize(true, $sxe->addChild('flag'));
        if (null !== $this->deleted) $this->deleted->xmlSerialize(true, $sxe->addChild('deleted'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->item) $this->item->xmlSerialize(true, $sxe->addChild('item'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}