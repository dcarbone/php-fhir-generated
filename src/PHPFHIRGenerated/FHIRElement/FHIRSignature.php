<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
    private $blob = null;

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $contentType = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $onBehalfOfReference = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $onBehalfOfUri = null;

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $type = [];

    /**
     * When the digital signature was signed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $when = null;

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $whoReference = null;

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $whoUri = null;

    /**
     * FHIRSignature Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['blob'])) {
                $value = $data['blob'];
                if (is_array($value)) {
                    $value = new FHIRBase64Binary($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBase64Binary($value);
                }
                if (!($value instanceof FHIRBase64Binary)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"blob\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or data to construct type, saw ".gettype($value)); 
                }
                $this->setBlob($value);
            }
            if (isset($data['contentType'])) {
                $value = $data['contentType'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"contentType\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value)); 
                }
                $this->setContentType($value);
            }
            if (isset($data['onBehalfOfReference'])) {
                $value = $data['onBehalfOfReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"onBehalfOfReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setOnBehalfOfReference($value);
            }
            if (isset($data['onBehalfOfUri'])) {
                $value = $data['onBehalfOfUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"onBehalfOfUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setOnBehalfOfUri($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCoding($v);
                        } 
                        if (!($v instanceof FHIRCoding)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Collection field \"type\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addType($v);
                    }
                }
            }
            if (isset($data['when'])) {
                $value = $data['when'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"when\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhen($value);
            }
            if (isset($data['whoReference'])) {
                $value = $data['whoReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"whoReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhoReference($value);
            }
            if (isset($data['whoUri'])) {
                $value = $data['whoUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Property \"whoUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhoUri($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRSignature::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setBlob($blob)
    {
        if (null === $blob) {
            return $this; 
        }
        if (is_scalar($blob)) {
            $blob = new FHIRBase64Binary($blob);
        }
        if (!($blob instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setBlob - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($blob)
            ));
        }
        $this->blob = $blob;
        return $this;
    }

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
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
                'FHIRSignature::setContentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($contentType)
            ));
        }
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOnBehalfOfReference(FHIRReference $onBehalfOfReference = null)
    {
        if (null === $onBehalfOfReference) {
            return $this; 
        }
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setOnBehalfOfUri($onBehalfOfUri)
    {
        if (null === $onBehalfOfUri) {
            return $this; 
        }
        if (is_scalar($onBehalfOfUri)) {
            $onBehalfOfUri = new FHIRUri($onBehalfOfUri);
        }
        if (!($onBehalfOfUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setOnBehalfOfUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($onBehalfOfUri)
            ));
        }
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that is represented by the signature. (choose any one of onBehalfOf*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function addType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
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
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setWhoReference(FHIRReference $whoReference = null)
    {
        if (null === $whoReference) {
            return $this; 
        }
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setWhoUri($whoUri)
    {
        if (null === $whoUri) {
            return $this; 
        }
        if (is_scalar($whoUri)) {
            $whoUri = new FHIRUri($whoUri);
        }
        if (!($whoUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::setWhoUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($whoUri)
            ));
        }
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * A reference to an application-usable description of the identity that signed  (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
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
        if (null !== ($v = $this->getBlob())) {
            $a['blob'] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a['contentType'] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $a['onBehalfOfReference'] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $a['onBehalfOfUri'] = $v;
        }
        if (0 < count($values = $this->getType())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['type'] = $vs;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $a['when'] = $v;
        }
        if (null !== ($v = $this->getWhoReference())) {
            $a['whoReference'] = $v;
        }
        if (null !== ($v = $this->getWhoUri())) {
            $a['whoUri'] = $v;
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
        if (null !== ($v = $this->getBlob())) {
            $v->xmlSerialize(true, $sxe->addChild('blob'));
        }
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize(true, $sxe->addChild('contentType'));
        }
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $v->xmlSerialize(true, $sxe->addChild('onBehalfOfReference'));
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $v->xmlSerialize(true, $sxe->addChild('onBehalfOfUri'));
        }
        if (0 < count($values = $this->getType())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('type'));
                }
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $v->xmlSerialize(true, $sxe->addChild('when'));
        }
        if (null !== ($v = $this->getWhoReference())) {
            $v->xmlSerialize(true, $sxe->addChild('whoReference'));
        }
        if (null !== ($v = $this->getWhoUri())) {
            $v->xmlSerialize(true, $sxe->addChild('whoUri'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}