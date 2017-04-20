<?php namespace PHPFHIRGenerated\FHIRResource\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionType extends FHIRElement implements \JsonSerializable
{
    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $code = null;

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the datatype this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $profile = null;

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the target of the reference this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $targetProfile = null;

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAggregationMode[]
     */
    public $aggregation = array();

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules
     */
    public $versioning = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition.Type';

    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the datatype this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the datatype this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the target of the reference this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }

    /**
     * Identifies a profile structure or implementation Guide that SHALL hold for the target of the reference this element refers to. Can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the resource SHALL conform to at least one profile defined in the implementation guide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $targetProfile
     * @return $this
     */
    public function setTargetProfile($targetProfile)
    {
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAggregationMode[]
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAggregationMode $aggregation
     * @return $this
     */
    public function addAggregation($aggregation)
    {
        $this->aggregation[] = $aggregation;
        return $this;
    }

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules $versioning
     * @return $this
     */
    public function setVersioning($versioning)
    {
        $this->versioning = $versioning;
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
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->profile) $json['profile'] = json_encode($this->profile);
        if (null !== $this->targetProfile) $json['targetProfile'] = json_encode($this->targetProfile);
        if (0 < count($this->aggregation)) {
            $json['aggregation'] = [];
            foreach($this->aggregation as $aggregation) {
                $json['aggregation'][] = json_encode($aggregation);
            }
        }
        if (null !== $this->versioning) $json['versioning'] = json_encode($this->versioning);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinitionType xmlns="http://hl7.org/fhir"></ElementDefinitionType>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->profile) $this->profile->xmlSerialize(true, $sxe->addChild('profile'));
        if (null !== $this->targetProfile) $this->targetProfile->xmlSerialize(true, $sxe->addChild('targetProfile'));
        if (0 < count($this->aggregation)) {
            foreach($this->aggregation as $aggregation) {
                $aggregation->xmlSerialize(true, $sxe->addChild('aggregation'));
            }
        }
        if (null !== $this->versioning) $this->versioning->xmlSerialize(true, $sxe->addChild('versioning'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}