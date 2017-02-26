<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

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
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileStructure extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The Resource or Data type being described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * The name of this resource constraint statement (to refer to it from other resource constraints - from Profile.structure.element.definition.type.profile).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * This definition of a profile on a structure is published as a formal statement. Some structural definitions might be defined purely for internal use within the profile, and not intended to be used outside that context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $publish = null;

    /**
     * Human summary: why describe this resource?.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $purpose = null;

    /**
     * Captures constraints on each element within the resource.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileElement[]
     */
    public $element = array();

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileSearchParam[]
     */
    public $searchParam = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.Structure';

    /**
     * The Resource or Data type being described.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The Resource or Data type being described.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The name of this resource constraint statement (to refer to it from other resource constraints - from Profile.structure.element.definition.type.profile).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this resource constraint statement (to refer to it from other resource constraints - from Profile.structure.element.definition.type.profile).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * This definition of a profile on a structure is published as a formal statement. Some structural definitions might be defined purely for internal use within the profile, and not intended to be used outside that context.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * This definition of a profile on a structure is published as a formal statement. Some structural definitions might be defined purely for internal use within the profile, and not intended to be used outside that context.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $publish
     * @return $this
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;
        return $this;
    }

    /**
     * Human summary: why describe this resource?.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Human summary: why describe this resource?.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Captures constraints on each element within the resource.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileElement $element
     * @return $this
     */
    public function addElement($element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Additional search parameters for implementations to support and/or make use of.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileSearchParam $searchParam
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
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->publish) $json['publish'] = json_encode($this->publish);
        if (null !== $this->purpose) $json['purpose'] = json_encode($this->purpose);
        if (0 < count($this->element)) {
            $json['element'] = [];
            foreach($this->element as $element) {
                $json['element'][] = json_encode($element);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileStructure xmlns="http://hl7.org/fhir"></ProfileStructure>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->publish) $this->publish->xmlSerialize(true, $sxe->addChild('publish'));
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (0 < count($this->element)) {
            foreach($this->element as $element) {
                $element->xmlSerialize(true, $sxe->addChild('element'));
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