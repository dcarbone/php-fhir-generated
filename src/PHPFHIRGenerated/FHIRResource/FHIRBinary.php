<?php

namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource;

/**
 * A resource that represents the data of a single raw artifact as digital content accessible in its native format.  A Binary resource can contain any content, whether text, image, pdf, zip archive, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRBinary
 * @package PHPFHIRGenerated\FHIRResource
 */
class FHIRBinary extends FHIRResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Binary';

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The actual content, base64 encoded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $data = null;

    /**
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $securityContext = null;

    /**
     * FHIRBinary Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contentType'])) {
                $this->setContentType($data['contentType']);
            }
            if (isset($data['data'])) {
                $this->setData($data['data']);
            }
            if (isset($data['securityContext'])) {
                $this->setSecurityContext($data['securityContext']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRBinary::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setContentType($contentType)
    {
        if (null === $contentType) {
            return $this; 
        }
        if (is_scalar($contentType)) {
            $contentType = new FHIRCode($contentType);
        }
        if (!($contentType instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBinary::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }


    /**
     * The actual content, base64 encoded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setData($data)
    {
        if (null === $data) {
            return $this; 
        }
        if (is_scalar($data)) {
            $data = new FHIRBase64Binary($data);
        }
        if (!($data instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBinary::setData - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($data)
            ));
        }
        $this->data = $data;
        return $this;
    }

    /**
     * The actual content, base64 encoded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSecurityContext(FHIRReference $securityContext = null)
    {
        if (null === $securityContext) {
            return $this; 
        }
        $this->securityContext = $securityContext;
        return $this;
    }

    /**
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSecurityContext()
    {
        return $this->securityContext;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getContentType())) {
            $a['contentType'] = $v;
        }
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getSecurityContext())) {
            $a['securityContext'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Binary xmlns="http://hl7.org/fhir"></Binary>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}