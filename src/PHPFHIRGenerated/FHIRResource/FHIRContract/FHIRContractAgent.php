<?php namespace PHPFHIRGenerated\FHIRResource\FHIRContract;

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
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 */
class FHIRContractAgent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Who or what parties are assigned roles in this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $actor = null;

    /**
     * Role type of agent assigned roles in this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $role = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.Agent';

    /**
     * Who or what parties are assigned roles in this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getActor() {
        return $this->actor;
    }

    /**
     * Who or what parties are assigned roles in this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $actor
     * @return $this
     */
    public function setActor($actor) {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Role type of agent assigned roles in this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Role type of agent assigned roles in this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function addRole($role) {
        $this->role[] = $role;
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
            if (isset($data['actor'])) {
                $this->setActor($data['actor']);
            }
            if (isset($data['role'])) {
                if (is_array($data['role'])) {
                    foreach($data['role'] as $d) {
                        $this->addRole($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"role" must be array of objects or null, '.gettype($data['role']).' seen.');
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
        if (isset($this->actor)) $json['actor'] = $this->actor;
        if (0 < count($this->role)) {
            $json['role'] = [];
            foreach($this->role as $role) {
                if (null !== $role) $json['role'][] = $role;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractAgent xmlns="http://hl7.org/fhir"></ContractAgent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->actor)) $this->actor->xmlSerialize(true, $sxe->addChild('actor'));
        if (0 < count($this->role)) {
            foreach($this->role as $role) {
                $role->xmlSerialize(true, $sxe->addChild('role'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}