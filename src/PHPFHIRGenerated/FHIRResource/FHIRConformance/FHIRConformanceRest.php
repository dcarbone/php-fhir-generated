<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConformance;

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
 * A conformance statement is a set of requirements for a desired implementation or a description of how a target application fulfills those requirements in a particular implementation.
 */
class FHIRConformanceRest extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Identifies whether this portion of the statement is describing ability to initiate or receive restful operations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRestfulConformanceMode
     */
    public $mode = null;

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * Information about security of implementation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSecurity
     */
    public $security = null;

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceResource[]
     */
    public $resource = array();

    /**
     * A specification of restful operations supported by the system.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation1[]
     */
    public $operation = array();

    /**
     * Definition of a named query and its parameters and their meaning.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceQuery[]
     */
    public $query = array();

    /**
     * A list of profiles that this server implements for accepting documents in the mailbox. If this list is empty, then documents are not accepted. The base specification has the profile identifier "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their own identifier for this purpose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $documentMailbox = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance.Rest';

    /**
     * Identifies whether this portion of the statement is describing ability to initiate or receive restful operations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRestfulConformanceMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Identifies whether this portion of the statement is describing ability to initiate or receive restful operations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRestfulConformanceMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Information about security of implementation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSecurity
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Information about security of implementation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSecurity $security
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceResource[] $resource
     * @return $this
     */
    public function addResource($resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A specification of restful operations supported by the system.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation1[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * A specification of restful operations supported by the system.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation1[] $operation
     * @return $this
     */
    public function addOperation($operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * Definition of a named query and its parameters and their meaning.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceQuery[]
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Definition of a named query and its parameters and their meaning.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceQuery[] $query
     * @return $this
     */
    public function addQuery($query)
    {
        $this->query[] = $query;
        return $this;
    }

    /**
     * A list of profiles that this server implements for accepting documents in the mailbox. If this list is empty, then documents are not accepted. The base specification has the profile identifier "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their own identifier for this purpose.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getDocumentMailbox()
    {
        return $this->documentMailbox;
    }

    /**
     * A list of profiles that this server implements for accepting documents in the mailbox. If this list is empty, then documents are not accepted. The base specification has the profile identifier "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their own identifier for this purpose.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri[] $documentMailbox
     * @return $this
     */
    public function addDocumentMailbox($documentMailbox)
    {
        $this->documentMailbox[] = $documentMailbox;
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
        if (null !== $this->mode) $json['mode'] = $this->mode->jsonSerialize();
        if (null !== $this->documentation) $json['documentation'] = $this->documentation->jsonSerialize();
        if (null !== $this->security) $json['security'] = $this->security->jsonSerialize();
        if (0 < count($this->resource)) {
            $json['resource'] = array();
            foreach($this->resource as $resource) {
                $json['resource'][] = $resource->jsonSerialize();
            }
        }
        if (0 < count($this->operation)) {
            $json['operation'] = array();
            foreach($this->operation as $operation) {
                $json['operation'][] = $operation->jsonSerialize();
            }
        }
        if (0 < count($this->query)) {
            $json['query'] = array();
            foreach($this->query as $query) {
                $json['query'][] = $query->jsonSerialize();
            }
        }
        if (0 < count($this->documentMailbox)) {
            $json['documentMailbox'] = array();
            foreach($this->documentMailbox as $documentMailbox) {
                $json['documentMailbox'][] = $documentMailbox->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConformanceRest xmlns="http://hl7.org/fhir"></ConformanceRest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->mode) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if (null !== $this->documentation) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (null !== $this->security) $this->security->xmlSerialize(true, $sxe->addChild('security'));
        if (0 < count($this->resource)) {
            foreach($this->resource as $resource) {
                $resource->xmlSerialize(true, $sxe->addChild('resource'));
            }
        }
        if (0 < count($this->operation)) {
            foreach($this->operation as $operation) {
                $operation->xmlSerialize(true, $sxe->addChild('operation'));
            }
        }
        if (0 < count($this->query)) {
            foreach($this->query as $query) {
                $query->xmlSerialize(true, $sxe->addChild('query'));
            }
        }
        if (0 < count($this->documentMailbox)) {
            foreach($this->documentMailbox as $documentMailbox) {
                $documentMailbox->xmlSerialize(true, $sxe->addChild('documentMailbox'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}