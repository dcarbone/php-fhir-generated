<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConformance;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRConformanceSecurity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Server adds CORS headers when responding to requests - this enables javascript applications to use the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $cors = null;

    /**
     * Types of security services are supported/required by the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $service = array();

    /**
     * General description of how security works.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Certificates associated with security profiles.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceCertificate[]
     */
    public $certificate = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance.Security';

    /**
     * Server adds CORS headers when responding to requests - this enables javascript applications to use the server.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getCors()
    {
        return $this->cors;
    }

    /**
     * Server adds CORS headers when responding to requests - this enables javascript applications to use the server.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $cors
     * @return $this
     */
    public function setCors($cors)
    {
        $this->cors = $cors;
        return $this;
    }

    /**
     * Types of security services are supported/required by the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Types of security services are supported/required by the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $service
     * @return $this
     */
    public function addService($service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * General description of how security works.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * General description of how security works.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Certificates associated with security profiles.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceCertificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Certificates associated with security profiles.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceCertificate $certificate
     * @return $this
     */
    public function addCertificate($certificate)
    {
        $this->certificate[] = $certificate;
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
        if (null !== $this->cors) $json['cors'] = $this->cors;
        if (0 < count($this->service)) {
            $json['service'] = [];
            foreach($this->service as $service) {
                $json['service'][] = $service;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->certificate)) {
            $json['certificate'] = [];
            foreach($this->certificate as $certificate) {
                $json['certificate'][] = $certificate;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConformanceSecurity xmlns="http://hl7.org/fhir"></ConformanceSecurity>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->cors) $this->cors->xmlSerialize(true, $sxe->addChild('cors'));
        if (0 < count($this->service)) {
            foreach($this->service as $service) {
                $service->xmlSerialize(true, $sxe->addChild('service'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->certificate)) {
            foreach($this->certificate as $certificate) {
                $certificate->xmlSerialize(true, $sxe->addChild('certificate'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}