<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaimResponse;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * List of input service items which this service line is intended to replace.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $itemSequence = [];

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $detailSequence = [];

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $subdetailSequence = [];

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $service = null;

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $modifier = [];

    /**
     * The fee charged for the professional service or product..
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $fee = null;

    /**
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumber = [];

    /**
     * The adjudications results.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public $adjudication = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.AddItem';

    /**
     * List of input service items which this service line is intended to replace.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getItemSequence() {
        return $this->itemSequence;
    }

    /**
     * List of input service items which this service line is intended to replace.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $itemSequence
     * @return $this
     */
    public function addItemSequence($itemSequence) {
        $this->itemSequence[] = $itemSequence;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getDetailSequence() {
        return $this->detailSequence;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $detailSequence
     * @return $this
     */
    public function addDetailSequence($detailSequence) {
        $this->detailSequence[] = $detailSequence;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getSubdetailSequence() {
        return $this->subdetailSequence;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $subdetailSequence
     * @return $this
     */
    public function addSubdetailSequence($subdetailSequence) {
        $this->subdetailSequence[] = $subdetailSequence;
        return $this;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getService() {
        return $this->service;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $service
     * @return $this
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier() {
        return $this->modifier;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $modifier
     * @return $this
     */
    public function addModifier($modifier) {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * The fee charged for the professional service or product..
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFee() {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @return $this
     */
    public function setFee($fee) {
        $this->fee = $fee;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber() {
        return $this->noteNumber;
    }

    /**
     * A list of note references to the notes provided below.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $noteNumber
     * @return $this
     */
    public function addNoteNumber($noteNumber) {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * The adjudications results.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication() {
        return $this->adjudication;
    }

    /**
     * The adjudications results.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication) {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['itemSequence'])) {
                if (is_array($data['itemSequence'])) {
                    foreach($data['itemSequence'] as $d) {
                        $this->addItemSequence($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"itemSequence" must be array of objects or null, '.gettype($data['itemSequence']).' seen.');
                }
            }
            if (isset($data['detailSequence'])) {
                if (is_array($data['detailSequence'])) {
                    foreach($data['detailSequence'] as $d) {
                        $this->addDetailSequence($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"detailSequence" must be array of objects or null, '.gettype($data['detailSequence']).' seen.');
                }
            }
            if (isset($data['subdetailSequence'])) {
                if (is_array($data['subdetailSequence'])) {
                    foreach($data['subdetailSequence'] as $d) {
                        $this->addSubdetailSequence($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subdetailSequence" must be array of objects or null, '.gettype($data['subdetailSequence']).' seen.');
                }
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
            if (isset($data['modifier'])) {
                if (is_array($data['modifier'])) {
                    foreach($data['modifier'] as $d) {
                        $this->addModifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"modifier" must be array of objects or null, '.gettype($data['modifier']).' seen.');
                }
            }
            if (isset($data['fee'])) {
                $this->setFee($data['fee']);
            }
            if (isset($data['noteNumber'])) {
                if (is_array($data['noteNumber'])) {
                    foreach($data['noteNumber'] as $d) {
                        $this->addNoteNumber($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"noteNumber" must be array of objects or null, '.gettype($data['noteNumber']).' seen.');
                }
            }
            if (isset($data['adjudication'])) {
                if (is_array($data['adjudication'])) {
                    foreach($data['adjudication'] as $d) {
                        $this->addAdjudication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"adjudication" must be array of objects or null, '.gettype($data['adjudication']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (0 < count($this->itemSequence)) {
            $json['itemSequence'] = [];
            foreach($this->itemSequence as $itemSequence) {
                if (null !== $itemSequence) $json['itemSequence'][] = $itemSequence;
            }
        }
        if (0 < count($this->detailSequence)) {
            $json['detailSequence'] = [];
            foreach($this->detailSequence as $detailSequence) {
                if (null !== $detailSequence) $json['detailSequence'][] = $detailSequence;
            }
        }
        if (0 < count($this->subdetailSequence)) {
            $json['subdetailSequence'] = [];
            foreach($this->subdetailSequence as $subdetailSequence) {
                if (null !== $subdetailSequence) $json['subdetailSequence'][] = $subdetailSequence;
            }
        }
        if (isset($this->service)) $json['service'] = $this->service;
        if (0 < count($this->modifier)) {
            $json['modifier'] = [];
            foreach($this->modifier as $modifier) {
                if (null !== $modifier) $json['modifier'][] = $modifier;
            }
        }
        if (isset($this->fee)) $json['fee'] = $this->fee;
        if (0 < count($this->noteNumber)) {
            $json['noteNumber'] = [];
            foreach($this->noteNumber as $noteNumber) {
                if (null !== $noteNumber) $json['noteNumber'][] = $noteNumber;
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                if (null !== $adjudication) $json['adjudication'][] = $adjudication;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseAddItem xmlns="http://hl7.org/fhir"></ClaimResponseAddItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->itemSequence)) {
            foreach($this->itemSequence as $itemSequence) {
                $itemSequence->xmlSerialize(true, $sxe->addChild('itemSequence'));
            }
        }
        if (0 < count($this->detailSequence)) {
            foreach($this->detailSequence as $detailSequence) {
                $detailSequence->xmlSerialize(true, $sxe->addChild('detailSequence'));
            }
        }
        if (0 < count($this->subdetailSequence)) {
            foreach($this->subdetailSequence as $subdetailSequence) {
                $subdetailSequence->xmlSerialize(true, $sxe->addChild('subdetailSequence'));
            }
        }
        if (isset($this->service)) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (isset($this->fee)) $this->fee->xmlSerialize(true, $sxe->addChild('fee'));
        if (0 < count($this->noteNumber)) {
            foreach($this->noteNumber as $noteNumber) {
                $noteNumber->xmlSerialize(true, $sxe->addChild('noteNumber'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}