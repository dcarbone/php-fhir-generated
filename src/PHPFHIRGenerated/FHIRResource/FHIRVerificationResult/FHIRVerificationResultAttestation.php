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
class FHIRVerificationResultAttestation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The individual attesting to information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The organization attesting to information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Who is providing the attested information (owner; authorized representative; authorized intermediary; non-authorized source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The date the information was attested to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * A digital identity certificate associated with the attestation source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sourceIdentityCertificate = null;

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $proxyIdentityCertificate = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'VerificationResult.Attestation';

    /**
     * The individual attesting to information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * The individual attesting to information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * The organization attesting to information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization attesting to information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Who is providing the attested information (owner; authorized representative; authorized intermediary; non-authorized source).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Who is providing the attested information (owner; authorized representative; authorized intermediary; non-authorized source).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    /**
     * The date the information was attested to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date the information was attested to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * A digital identity certificate associated with the attestation source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSourceIdentityCertificate() {
        return $this->sourceIdentityCertificate;
    }

    /**
     * A digital identity certificate associated with the attestation source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $sourceIdentityCertificate
     * @return $this
     */
    public function setSourceIdentityCertificate($sourceIdentityCertificate) {
        $this->sourceIdentityCertificate = $sourceIdentityCertificate;
        return $this;
    }

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getProxyIdentityCertificate() {
        return $this->proxyIdentityCertificate;
    }

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $proxyIdentityCertificate
     * @return $this
     */
    public function setProxyIdentityCertificate($proxyIdentityCertificate) {
        $this->proxyIdentityCertificate = $proxyIdentityCertificate;
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
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['sourceIdentityCertificate'])) {
                $this->setSourceIdentityCertificate($data['sourceIdentityCertificate']);
            }
            if (isset($data['proxyIdentityCertificate'])) {
                $this->setProxyIdentityCertificate($data['proxyIdentityCertificate']);
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
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->method)) $json['method'] = $this->method;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->sourceIdentityCertificate)) $json['sourceIdentityCertificate'] = $this->sourceIdentityCertificate;
        if (isset($this->proxyIdentityCertificate)) $json['proxyIdentityCertificate'] = $this->proxyIdentityCertificate;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<VerificationResultAttestation xmlns="http://hl7.org/fhir"></VerificationResultAttestation>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->method)) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->sourceIdentityCertificate)) $this->sourceIdentityCertificate->xmlSerialize(true, $sxe->addChild('sourceIdentityCertificate'));
        if (isset($this->proxyIdentityCertificate)) $this->proxyIdentityCertificate->xmlSerialize(true, $sxe->addChild('proxyIdentityCertificate'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}