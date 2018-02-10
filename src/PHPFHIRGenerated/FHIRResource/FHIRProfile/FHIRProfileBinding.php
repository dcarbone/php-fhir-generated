<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileBinding extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A descriptive name for this - can be useful for generating implementation artifacts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * If true, then conformant systems may use additional codes or (where the data type permits) text alone to convey concepts not covered by the set of codes identified in the binding.  If false, then conformant systems are constrained to the provided codes alone.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isExtensible = null;

    /**
     * Indicates the degree of conformance expectations associated with this binding.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBindingConformance
     */
    public $conformance = null;

    /**
     * Describes the intended use of this particular set of codes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $referenceUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $referenceResource = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.Binding';

    /**
     * A descriptive name for this - can be useful for generating implementation artifacts.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A descriptive name for this - can be useful for generating implementation artifacts.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * If true, then conformant systems may use additional codes or (where the data type permits) text alone to convey concepts not covered by the set of codes identified in the binding.  If false, then conformant systems are constrained to the provided codes alone.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsExtensible()
    {
        return $this->isExtensible;
    }

    /**
     * If true, then conformant systems may use additional codes or (where the data type permits) text alone to convey concepts not covered by the set of codes identified in the binding.  If false, then conformant systems are constrained to the provided codes alone.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isExtensible
     * @return $this
     */
    public function setIsExtensible($isExtensible)
    {
        $this->isExtensible = $isExtensible;
        return $this;
    }

    /**
     * Indicates the degree of conformance expectations associated with this binding.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBindingConformance
     */
    public function getConformance()
    {
        return $this->conformance;
    }

    /**
     * Indicates the degree of conformance expectations associated with this binding.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBindingConformance $conformance
     * @return $this
     */
    public function setConformance($conformance)
    {
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * Describes the intended use of this particular set of codes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Describes the intended use of this particular set of codes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReferenceUri()
    {
        return $this->referenceUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $referenceUri
     * @return $this
     */
    public function setReferenceUri($referenceUri)
    {
        $this->referenceUri = $referenceUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getReferenceResource()
    {
        return $this->referenceResource;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $referenceResource
     * @return $this
     */
    public function setReferenceResource($referenceResource)
    {
        $this->referenceResource = $referenceResource;
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->isExtensible) $json['isExtensible'] = $this->isExtensible;
        if (null !== $this->conformance) $json['conformance'] = $this->conformance;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->referenceUri) $json['referenceUri'] = $this->referenceUri;
        if (null !== $this->referenceResource) $json['referenceResource'] = $this->referenceResource;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileBinding xmlns="http://hl7.org/fhir"></ProfileBinding>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->isExtensible) $this->isExtensible->xmlSerialize(true, $sxe->addChild('isExtensible'));
        if (null !== $this->conformance) $this->conformance->xmlSerialize(true, $sxe->addChild('conformance'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->referenceUri) $this->referenceUri->xmlSerialize(true, $sxe->addChild('referenceUri'));
        if (null !== $this->referenceResource) $this->referenceResource->xmlSerialize(true, $sxe->addChild('referenceResource'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}