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
 * A description of a query with a set of parameters.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRQuery extends FHIRResource implements \JsonSerializable
{
    /**
     * Links query and its response(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $identifier = null;

    /**
     * Set of query parameters with values.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $parameter = array();

    /**
     * If this is a response to a query.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuery\FHIRQueryResponse
     */
    public $response = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Query';

    /**
     * Links query and its response(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Links query and its response(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Set of query parameters with values.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set of query parameters with values.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * If this is a response to a query.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuery\FHIRQueryResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * If this is a response to a query.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuery\FHIRQueryResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter;
            }
        }
        if (null !== $this->response) $json['response'] = $this->response;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Query xmlns="http://hl7.org/fhir"></Query>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}