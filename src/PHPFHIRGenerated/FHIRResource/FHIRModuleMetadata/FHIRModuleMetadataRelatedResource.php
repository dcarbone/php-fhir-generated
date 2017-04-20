<?php namespace PHPFHIRGenerated\FHIRResource\FHIRModuleMetadata;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * The ModuleMetadata resource defines the common metadata elements used by quality improvement artifacts. This information includes descriptive and topical metadata to enable repository searches, as well as governance and evidentiary support information.
 */
class FHIRModuleMetadataRelatedResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of related resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRModuleMetadataResourceType
     */
    public $type = null;

    /**
     * The uri of the related resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $uri = null;

    /**
     * A brief description of the related resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The document being referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $document = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ModuleMetadata.RelatedResource';

    /**
     * The type of related resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRModuleMetadataResourceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of related resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRModuleMetadataResourceType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The uri of the related resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The uri of the related resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $uri
     * @return $this
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * A brief description of the related resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief description of the related resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The document being referenced.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * The document being referenced.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $document
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;
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
        if (null !== $this->uri) $json['uri'] = json_encode($this->uri);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->document) $json['document'] = json_encode($this->document);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ModuleMetadataRelatedResource xmlns="http://hl7.org/fhir"></ModuleMetadataRelatedResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->uri) $this->uri->xmlSerialize(true, $sxe->addChild('uri'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->document) $this->document->xmlSerialize(true, $sxe->addChild('document'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}