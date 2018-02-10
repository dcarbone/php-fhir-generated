<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductAuthorization;

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
 * The regulatory authorization of a medicinal product.
 */
class FHIRMedicinalProductAuthorizationProcedure extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifier for this procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $number = null;

    /**
     * Type of procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Date of procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $date = null;

    /**
     * Applcations submitted to obtain a marketing authorization.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationApplication[]
     */
    public $application = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductAuthorization.Procedure';

    /**
     * Identifier for this procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Identifier for this procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $number
     * @return $this
     */
    public function setNumber($number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Type of procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Date of procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Date of procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Applcations submitted to obtain a marketing authorization.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationApplication[]
     */
    public function getApplication() {
        return $this->application;
    }

    /**
     * Applcations submitted to obtain a marketing authorization.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationApplication $application
     * @return $this
     */
    public function addApplication($application) {
        $this->application[] = $application;
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
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['application'])) {
                if (is_array($data['application'])) {
                    foreach($data['application'] as $d) {
                        $this->addApplication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"application" must be array of objects or null, '.gettype($data['application']).' seen.');
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
        if (isset($this->number)) $json['number'] = $this->number;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->date)) $json['date'] = $this->date;
        if (0 < count($this->application)) {
            $json['application'] = [];
            foreach($this->application as $application) {
                if (null !== $application) $json['application'][] = $application;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductAuthorizationProcedure xmlns="http://hl7.org/fhir"></MedicinalProductAuthorizationProcedure>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->number)) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (0 < count($this->application)) {
            foreach($this->application as $application) {
                $application->xmlSerialize(true, $sxe->addChild('application'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}