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
class FHIRConformanceResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A type of resource exposed via the restful interface.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $profile = null;

    /**
     * Identifies a restful operation supported by the solution.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceInteraction[]
     */
    public $interaction = array();

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy
     */
    public $versioning = null;

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $readHistory = null;

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $updateCreate = null;

    /**
     * A flag that indicates that the server supports conditional create.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $conditionalCreate = null;

    /**
     * A flag that indicates that the server supports conditional update.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $conditionalUpdate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus
     */
    public $conditionalDelete = null;

    /**
     * A list of _include values supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $searchInclude = array();

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $searchRevInclude = array();

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
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
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceInteraction[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceInteraction $interaction
     * @return $this
     */
    public function addInteraction($interaction)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return $this
     */
    public function setVersioning($versioning)
    {
        $this->versioning = $versioning;
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
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $updateCreate
     * @return $this
     */
    public function setUpdateCreate($updateCreate)
    {
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $conditionalCreate
     * @return $this
     */
    public function setConditionalCreate($conditionalCreate)
    {
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return $this
     */
    public function setConditionalUpdate($conditionalUpdate)
    {
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return $this
     */
    public function setConditionalDelete($conditionalDelete)
    {
        $this->conditionalDelete = $conditionalDelete;
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
     * A list of _revinclude (reverse include) values supported by the server.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $searchRevInclude
     * @return $this
     */
    public function addSearchRevInclude($searchRevInclude)
    {
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->profile) $json['profile'] = $this->profile;
        if (0 < count($this->interaction)) {
            $json['interaction'] = [];
            foreach($this->interaction as $interaction) {
                $json['interaction'][] = $interaction;
            }
        }
        if (null !== $this->versioning) $json['versioning'] = $this->versioning;
        if (null !== $this->readHistory) $json['readHistory'] = $this->readHistory;
        if (null !== $this->updateCreate) $json['updateCreate'] = $this->updateCreate;
        if (null !== $this->conditionalCreate) $json['conditionalCreate'] = $this->conditionalCreate;
        if (null !== $this->conditionalUpdate) $json['conditionalUpdate'] = $this->conditionalUpdate;
        if (null !== $this->conditionalDelete) $json['conditionalDelete'] = $this->conditionalDelete;
        if (0 < count($this->searchInclude)) {
            $json['searchInclude'] = [];
            foreach($this->searchInclude as $searchInclude) {
                $json['searchInclude'][] = $searchInclude;
            }
        }
        if (0 < count($this->searchRevInclude)) {
            $json['searchRevInclude'] = [];
            foreach($this->searchRevInclude as $searchRevInclude) {
                $json['searchRevInclude'][] = $searchRevInclude;
            }
        }
        if (0 < count($this->searchParam)) {
            $json['searchParam'] = [];
            foreach($this->searchParam as $searchParam) {
                $json['searchParam'][] = $searchParam;
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
        if (0 < count($this->interaction)) {
            foreach($this->interaction as $interaction) {
                $interaction->xmlSerialize(true, $sxe->addChild('interaction'));
            }
        }
        if (null !== $this->versioning) $this->versioning->xmlSerialize(true, $sxe->addChild('versioning'));
        if (null !== $this->readHistory) $this->readHistory->xmlSerialize(true, $sxe->addChild('readHistory'));
        if (null !== $this->updateCreate) $this->updateCreate->xmlSerialize(true, $sxe->addChild('updateCreate'));
        if (null !== $this->conditionalCreate) $this->conditionalCreate->xmlSerialize(true, $sxe->addChild('conditionalCreate'));
        if (null !== $this->conditionalUpdate) $this->conditionalUpdate->xmlSerialize(true, $sxe->addChild('conditionalUpdate'));
        if (null !== $this->conditionalDelete) $this->conditionalDelete->xmlSerialize(true, $sxe->addChild('conditionalDelete'));
        if (0 < count($this->searchInclude)) {
            foreach($this->searchInclude as $searchInclude) {
                $searchInclude->xmlSerialize(true, $sxe->addChild('searchInclude'));
            }
        }
        if (0 < count($this->searchRevInclude)) {
            foreach($this->searchRevInclude as $searchRevInclude) {
                $searchRevInclude->xmlSerialize(true, $sxe->addChild('searchRevInclude'));
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