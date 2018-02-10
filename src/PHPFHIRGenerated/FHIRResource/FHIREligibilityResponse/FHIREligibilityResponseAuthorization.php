<?php namespace PHPFHIRGenerated\FHIRResource\FHIREligibilityResponse;

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
 * This resource provides eligibility and plan details from the processing of an Eligibility resource.
 */
class FHIREligibilityResponseAuthorization extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Sequence of procedures which serves to order and provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $authorizationSequence = null;

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * Any comments regarding information or actions assciated with the pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'EligibilityResponse.Authorization';

    /**
     * Sequence of procedures which serves to order and provide a link.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getAuthorizationSequence() {
        return $this->authorizationSequence;
    }

    /**
     * Sequence of procedures which serves to order and provide a link.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $authorizationSequence
     * @return $this
     */
    public function setAuthorizationSequence($authorizationSequence) {
        $this->authorizationSequence = $authorizationSequence;
        return $this;
    }

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequired() {
        return $this->required;
    }

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $required
     * @return $this
     */
    public function setRequired($required) {
        $this->required = $required;
        return $this;
    }

    /**
     * Any comments regarding information or actions assciated with the pre-authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Any comments regarding information or actions assciated with the pre-authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
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
            if (isset($data['authorizationSequence'])) {
                $this->setAuthorizationSequence($data['authorizationSequence']);
            }
            if (isset($data['required'])) {
                $this->setRequired($data['required']);
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
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
        if (isset($this->authorizationSequence)) $json['authorizationSequence'] = $this->authorizationSequence;
        if (isset($this->required)) $json['required'] = $this->required;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EligibilityResponseAuthorization xmlns="http://hl7.org/fhir"></EligibilityResponseAuthorization>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->authorizationSequence)) $this->authorizationSequence->xmlSerialize(true, $sxe->addChild('authorizationSequence'));
        if (isset($this->required)) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}