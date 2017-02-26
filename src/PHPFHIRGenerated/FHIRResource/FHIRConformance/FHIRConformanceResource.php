<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * A conformance statement is a set of requirements for a desired implementation or a description of how a target application fulfills those requirements in a particular implementation.
 */
class FHIRConformanceResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A type of resource exposed via the restful interface.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A specification of the profile that describes the solution's support for the resource, including any constraints on cardinality, bindings, lengths or other limitations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $profile = null;

    /**
     * Identifies a restful operation supported by the solution.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation[]
     */
    public $operation = array();

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $readHistory = null;

    /**
     * A flag to indicate that the server allows the client to create new identities on the server. If the update operation is used (client) or allowed (server) to a new location where a resource doesn't already exist. This means that the server allows the client to create new identities on the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $updateCreate = null;

    /**
     * A list of _include values supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $searchInclude = array();

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public $searchParam = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance.Resource';

    /**
     * A type of resource exposed via the restful interface.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A type of resource exposed via the restful interface.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A specification of the profile that describes the solution's support for the resource, including any constraints on cardinality, bindings, lengths or other limitations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A specification of the profile that describes the solution's support for the resource, including any constraints on cardinality, bindings, lengths or other limitations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceOperation $operation
     * @return $this
     */
    public function addOperation($operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $readHistory
     * @return $this
     */
    public function setReadHistory($readHistory)
    {
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * A flag to indicate that the server allows the client to create new identities on the server. If the update operation is used (client) or allowed (server) to a new location where a resource doesn't already exist. This means that the server allows the client to create new identities on the server.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * A flag to indicate that the server allows the client to create new identities on the server. If the update operation is used (client) or allowed (server) to a new location where a resource doesn't already exist. This means that the server allows the client to create new identities on the server.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $updateCreate
     * @return $this
     */
    public function setUpdateCreate($updateCreate)
    {
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A list of _include values supported by the server.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * A list of _include values supported by the server.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $searchInclude
     * @return $this
     */
    public function addSearchInclude($searchInclude)
    {
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSearchParam $searchParam
     * @return $this
     */
    public function addSearchParam($searchParam)
    {
        $this->searchParam[] = $searchParam;
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
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->profile) $json['profile'] = json_encode($this->profile);
        if (0 < count($this->operation)) {
            $json['operation'] = [];
            foreach($this->operation as $operation) {
                $json['operation'][] = json_encode($operation);
            }
        }
        if (null !== $this->readHistory) $json['readHistory'] = json_encode($this->readHistory);
        if (null !== $this->updateCreate) $json['updateCreate'] = json_encode($this->updateCreate);
        if (0 < count($this->searchInclude)) {
            $json['searchInclude'] = [];
            foreach($this->searchInclude as $searchInclude) {
                $json['searchInclude'][] = json_encode($searchInclude);
            }
        }
        if (0 < count($this->searchParam)) {
            $json['searchParam'] = [];
            foreach($this->searchParam as $searchParam) {
                $json['searchParam'][] = json_encode($searchParam);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConformanceResource xmlns="http://hl7.org/fhir"></ConformanceResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->profile) $this->profile->xmlSerialize(true, $sxe->addChild('profile'));
        if (0 < count($this->operation)) {
            foreach($this->operation as $operation) {
                $operation->xmlSerialize(true, $sxe->addChild('operation'));
            }
        }
        if (null !== $this->readHistory) $this->readHistory->xmlSerialize(true, $sxe->addChild('readHistory'));
        if (null !== $this->updateCreate) $this->updateCreate->xmlSerialize(true, $sxe->addChild('updateCreate'));
        if (0 < count($this->searchInclude)) {
            foreach($this->searchInclude as $searchInclude) {
                $searchInclude->xmlSerialize(true, $sxe->addChild('searchInclude'));
            }
        }
        if (0 < count($this->searchParam)) {
            foreach($this->searchParam as $searchParam) {
                $searchParam->xmlSerialize(true, $sxe->addChild('searchParam'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}