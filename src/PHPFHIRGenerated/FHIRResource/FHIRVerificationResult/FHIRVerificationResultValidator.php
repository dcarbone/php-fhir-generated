<?php namespace PHPFHIRGenerated\FHIRResource\FHIRVerificationResult;

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
 * Describes validation requirements, source(s), status and dates for one or more elements.
 */
class FHIRVerificationResultValidator extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * URI of the validator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Reference to the organization validating information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * A digital identity certificate associated with the validator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $identityCertificate = null;

    /**
     * Date on which the validator last validated the information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $dateValidated = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'VerificationResult.Validator';

    /**
     * URI of the validator.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * URI of the validator.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Reference to the organization validating information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * Reference to the organization validating information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * A digital identity certificate associated with the validator.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentityCertificate() {
        return $this->identityCertificate;
    }

    /**
     * A digital identity certificate associated with the validator.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $identityCertificate
     * @return $this
     */
    public function setIdentityCertificate($identityCertificate) {
        $this->identityCertificate = $identityCertificate;
        return $this;
    }

    /**
     * Date on which the validator last validated the information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDateValidated() {
        return $this->dateValidated;
    }

    /**
     * Date on which the validator last validated the information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $dateValidated
     * @return $this
     */
    public function setDateValidated($dateValidated) {
        $this->dateValidated = $dateValidated;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['identityCertificate'])) {
                $this->setIdentityCertificate($data['identityCertificate']);
            }
            if (isset($data['dateValidated'])) {
                $this->setDateValidated($data['dateValidated']);
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->identityCertificate)) $json['identityCertificate'] = $this->identityCertificate;
        if (isset($this->dateValidated)) $json['dateValidated'] = $this->dateValidated;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<VerificationResultValidator xmlns="http://hl7.org/fhir"></VerificationResultValidator>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->identityCertificate)) $this->identityCertificate->xmlSerialize(true, $sxe->addChild('identityCertificate'));
        if (isset($this->dateValidated)) $this->dateValidated->xmlSerialize(true, $sxe->addChild('dateValidated'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}