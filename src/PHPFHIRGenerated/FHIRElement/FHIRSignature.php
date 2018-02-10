<?php namespace PHPFHIRGenerated\FHIRElement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * A digital signature along with supporting context. The signature may be electronic/cryptographic in nature, or a graphical image representing a hand-written signature, or a signature process. Different signature approaches have different utilities.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRSignature extends FHIRElement implements \JsonSerializable
{
    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $type = array();

    /**
     * When the digital signature was signed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $when = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $whoUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $whoReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $onBehalfOfUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $onBehalfOfReference = null;

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $blob = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Signature';

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * When the digital signature was signed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * When the digital signature was signed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $when
     * @return $this
     */
    public function setWhen($when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $whoUri
     * @return $this
     */
    public function setWhoUri($whoUri)
    {
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $whoReference
     * @return $this
     */
    public function setWhoReference($whoReference)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $onBehalfOfUri
     * @return $this
     */
    public function setOnBehalfOfUri($onBehalfOfUri)
    {
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $onBehalfOfReference
     * @return $this
     */
    public function setOnBehalfOfReference($onBehalfOfReference)
    {
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $blob
     * @return $this
     */
    public function setBlob($blob)
    {
        $this->blob = $blob;
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
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = $type;
            }
        }
        if (null !== $this->when) $json['when'] = $this->when;
        if (null !== $this->whoUri) $json['whoUri'] = $this->whoUri;
        if (null !== $this->whoReference) $json['whoReference'] = $this->whoReference;
        if (null !== $this->onBehalfOfUri) $json['onBehalfOfUri'] = $this->onBehalfOfUri;
        if (null !== $this->onBehalfOfReference) $json['onBehalfOfReference'] = $this->onBehalfOfReference;
        if (null !== $this->contentType) $json['contentType'] = $this->contentType;
        if (null !== $this->blob) $json['blob'] = $this->blob;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Signature xmlns="http://hl7.org/fhir"></Signature>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->when) $this->when->xmlSerialize(true, $sxe->addChild('when'));
        if (null !== $this->whoUri) $this->whoUri->xmlSerialize(true, $sxe->addChild('whoUri'));
        if (null !== $this->whoReference) $this->whoReference->xmlSerialize(true, $sxe->addChild('whoReference'));
        if (null !== $this->onBehalfOfUri) $this->onBehalfOfUri->xmlSerialize(true, $sxe->addChild('onBehalfOfUri'));
        if (null !== $this->onBehalfOfReference) $this->onBehalfOfReference->xmlSerialize(true, $sxe->addChild('onBehalfOfReference'));
        if (null !== $this->contentType) $this->contentType->xmlSerialize(true, $sxe->addChild('contentType'));
        if (null !== $this->blob) $this->blob->xmlSerialize(true, $sxe->addChild('blob'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}