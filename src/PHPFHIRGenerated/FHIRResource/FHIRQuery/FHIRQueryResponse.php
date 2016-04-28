<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuery;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A description of a query with a set of parameters.
 */
class FHIRQueryResponse extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Links response to source query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $identifier = null;

    /**
     * Outcome of processing the query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQueryOutcome
     */
    public $outcome = null;

    /**
     * Total number of matching records.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $total = null;

    /**
     * Parameters server used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $parameter = array();

    /**
     * To get first page (if paged).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $first = array();

    /**
     * To get previous page (if paged).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $previous = array();

    /**
     * To get next page (if paged).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $next = array();

    /**
     * To get last page (if paged).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $last = array();

    /**
     * Resources that are the results of the search.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $reference = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Query.Response';

    /**
     * Links response to source query.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Links response to source query.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Outcome of processing the query.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQueryOutcome
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Outcome of processing the query.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQueryOutcome $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Total number of matching records.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Total number of matching records.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Parameters server used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Parameters server used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * To get first page (if paged).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * To get first page (if paged).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $first
     * @return $this
     */
    public function addFirst($first)
    {
        $this->first[] = $first;
        return $this;
    }

    /**
     * To get previous page (if paged).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * To get previous page (if paged).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $previous
     * @return $this
     */
    public function addPrevious($previous)
    {
        $this->previous[] = $previous;
        return $this;
    }

    /**
     * To get next page (if paged).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * To get next page (if paged).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $next
     * @return $this
     */
    public function addNext($next)
    {
        $this->next[] = $next;
        return $this;
    }

    /**
     * To get last page (if paged).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * To get last page (if paged).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $last
     * @return $this
     */
    public function addLast($last)
    {
        $this->last[] = $last;
        return $this;
    }

    /**
     * Resources that are the results of the search.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Resources that are the results of the search.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $reference
     * @return $this
     */
    public function addReference($reference)
    {
        $this->reference[] = $reference;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->outcome) $json['outcome'] = $this->outcome->jsonSerialize();
        if (null !== $this->total) $json['total'] = $this->total->jsonSerialize();
        if (0 < count($this->parameter)) {
            $json['parameter'] = array();
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter->jsonSerialize();
            }
        }
        if (0 < count($this->first)) {
            $json['first'] = array();
            foreach($this->first as $first) {
                $json['first'][] = $first->jsonSerialize();
            }
        }
        if (0 < count($this->previous)) {
            $json['previous'] = array();
            foreach($this->previous as $previous) {
                $json['previous'][] = $previous->jsonSerialize();
            }
        }
        if (0 < count($this->next)) {
            $json['next'] = array();
            foreach($this->next as $next) {
                $json['next'][] = $next->jsonSerialize();
            }
        }
        if (0 < count($this->last)) {
            $json['last'] = array();
            foreach($this->last as $last) {
                $json['last'][] = $last->jsonSerialize();
            }
        }
        if (0 < count($this->reference)) {
            $json['reference'] = array();
            foreach($this->reference as $reference) {
                $json['reference'][] = $reference->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QueryResponse xmlns="http://hl7.org/fhir"></QueryResponse>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->total) $this->total->xmlSerialize(true, $sxe->addChild('total'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (0 < count($this->first)) {
            foreach($this->first as $first) {
                $first->xmlSerialize(true, $sxe->addChild('first'));
            }
        }
        if (0 < count($this->previous)) {
            foreach($this->previous as $previous) {
                $previous->xmlSerialize(true, $sxe->addChild('previous'));
            }
        }
        if (0 < count($this->next)) {
            foreach($this->next as $next) {
                $next->xmlSerialize(true, $sxe->addChild('next'));
            }
        }
        if (0 < count($this->last)) {
            foreach($this->last as $last) {
                $last->xmlSerialize(true, $sxe->addChild('last'));
            }
        }
        if (0 < count($this->reference)) {
            foreach($this->reference as $reference) {
                $reference->xmlSerialize(true, $sxe->addChild('reference'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}