<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource;

/**
 * A binary resource can contain any content, whether text, image, pdf, zip archive, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRBinary extends FHIRResource implements \JsonSerializable
{
    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * Treat this binary as if it was this other resource for access control purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $securityContext = null;

    /**
     * The actual content, base64 encoded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $content = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Binary';

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Treat this binary as if it was this other resource for access control purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSecurityContext()
    {
        return $this->securityContext;
    }

    /**
     * Treat this binary as if it was this other resource for access control purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $securityContext
     * @return $this
     */
    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
        return $this;
    }

    /**
     * The actual content, base64 encoded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The actual content, base64 encoded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
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
        if (null !== $this->contentType) $json['contentType'] = json_encode($this->contentType);
        if (null !== $this->securityContext) $json['securityContext'] = json_encode($this->securityContext);
        if (null !== $this->content) $json['content'] = json_encode($this->content);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Binary xmlns="http://hl7.org/fhir"></Binary>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->contentType) $this->contentType->xmlSerialize(true, $sxe->addChild('contentType'));
        if (null !== $this->securityContext) $this->securityContext->xmlSerialize(true, $sxe->addChild('securityContext'));
        if (null !== $this->content) $this->content->xmlSerialize(true, $sxe->addChild('content'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}