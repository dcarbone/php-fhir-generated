<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImplementationGuide;

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
 * A set of rules or how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole, and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Why the resource is included in the guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGuideResourcePurpose
     */
    public $purpose = null;

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $acronym = null;

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $sourceUri = null;

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sourceReference = null;

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $exampleFor = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuide.Resource';

    /**
     * Why the resource is included in the guide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGuideResourcePurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Why the resource is included in the guide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGuideResourcePurpose $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $acronym
     * @return $this
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
        return $this;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $sourceUri
     * @return $this
     */
    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
        return $this;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sourceReference
     * @return $this
     */
    public function setSourceReference($sourceReference)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getExampleFor()
    {
        return $this->exampleFor;
    }

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $exampleFor
     * @return $this
     */
    public function setExampleFor($exampleFor)
    {
        $this->exampleFor = $exampleFor;
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
        if (null !== $this->purpose) $json['purpose'] = json_encode($this->purpose);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->acronym) $json['acronym'] = json_encode($this->acronym);
        if (null !== $this->sourceUri) $json['sourceUri'] = json_encode($this->sourceUri);
        if (null !== $this->sourceReference) $json['sourceReference'] = json_encode($this->sourceReference);
        if (null !== $this->exampleFor) $json['exampleFor'] = json_encode($this->exampleFor);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuideResource xmlns="http://hl7.org/fhir"></ImplementationGuideResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->acronym) $this->acronym->xmlSerialize(true, $sxe->addChild('acronym'));
        if (null !== $this->sourceUri) $this->sourceUri->xmlSerialize(true, $sxe->addChild('sourceUri'));
        if (null !== $this->sourceReference) $this->sourceReference->xmlSerialize(true, $sxe->addChild('sourceReference'));
        if (null !== $this->exampleFor) $this->exampleFor->xmlSerialize(true, $sxe->addChild('exampleFor'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}