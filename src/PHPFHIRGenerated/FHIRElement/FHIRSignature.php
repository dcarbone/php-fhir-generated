<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A signature along with supporting context. The signature may be a digital signature that is cryptographic in nature, or some other signature acceptable to the domain. This other signature may be as simple as a graphical image representing a hand-written signature, or a signature ceremony Different signature approaches have different utilities.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRSignature
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRSignature extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Signature';

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $data = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $onBehalfOf = null;

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $sigFormat = null;

    /**
     * A mime type that indicates the technical format of the target resources signed by the signature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $targetFormat = null;

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * When the digital signature was signed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $when = null;

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $who = null;

    /**
     * FHIRSignature Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['data'])) {
                $this->setData($data['data']);
            }
            if (isset($data['onBehalfOf'])) {
                $this->setOnBehalfOf($data['onBehalfOf']);
            }
            if (isset($data['sigFormat'])) {
                $this->setSigFormat($data['sigFormat']);
            }
            if (isset($data['targetFormat'])) {
                $this->setTargetFormat($data['targetFormat']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['when'])) {
                $this->setWhen($data['when']);
            }
            if (isset($data['who'])) {
                $this->setWho($data['who']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
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
                'FHIRSignature::setData - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($data)
            ));
        }
        $this->data = $data;
        return $this;
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * A reference to an application-usable description of the identity that is represented by the signature.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOnBehalfOf(FHIRReference $onBehalfOf = null)
    {
        if (null === $onBehalfOf) {
            return $this; 
        }
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }


    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setSigFormat($sigFormat)
    {
        if (null === $sigFormat) {
            return $this; 
        }
        if (is_scalar($sigFormat)) {
            $sigFormat = new FHIRCode($sigFormat);
        }
        if (!($sigFormat instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setSigFormat - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($sigFormat)
            ));
        }
        $this->sigFormat = $sigFormat;
        return $this;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getSigFormat()
    {
        return $this->sigFormat;
    }


    /**
     * A mime type that indicates the technical format of the target resources signed by the signature.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setTargetFormat($targetFormat)
    {
        if (null === $targetFormat) {
            return $this; 
        }
        if (is_scalar($targetFormat)) {
            $targetFormat = new FHIRCode($targetFormat);
        }
        if (!($targetFormat instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setTargetFormat - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($targetFormat)
            ));
        }
        $this->targetFormat = $targetFormat;
        return $this;
    }

    /**
     * A mime type that indicates the technical format of the target resources signed by the signature.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getTargetFormat()
    {
        return $this->targetFormat;
    }


    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * When the digital signature was signed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setWhen($when)
    {
        if (null === $when) {
            return $this; 
        }
        if (is_scalar($when)) {
            $when = new FHIRInstant($when);
        }
        if (!($when instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setWhen - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($when)
            ));
        }
        $this->when = $when;
        return $this;
    }

    /**
     * When the digital signature was signed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }


    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setWho(FHIRReference $who = null)
    {
        if (null === $who) {
            return $this; 
        }
        $this->who = $who;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
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
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $a['onBehalfOf'] = $v;
        }
        if (null !== ($v = $this->getSigFormat())) {
            $a['sigFormat'] = $v;
        }
        if (null !== ($v = $this->getTargetFormat())) {
            $a['targetFormat'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getWhen())) {
            $a['when'] = $v;
        }
        if (null !== ($v = $this->getWho())) {
            $a['who'] = $v;
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
            $sxe = new \SimpleXMLElement('<Signature xmlns="http://hl7.org/fhir"></Signature>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}