<?php

namespace PHPFHIRGenerated;

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

use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRMeta;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * This is the base resource type for everything.
 *
 * Class FHIRResource
 * @package PHPFHIRGenerated
 */
class FHIRResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Resource';

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $id = null;

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $implicitRules = null;

    /**
     * The base language in which the resource is written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $language = null;

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    private $meta = null;

    /**
     * FHIRResource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) {
                $value = $data['id'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource::__construct - Property \"id\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setId($value);
            }
            if (isset($data['implicitRules'])) {
                $value = $data['implicitRules'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource::__construct - Property \"implicitRules\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setImplicitRules($value);
            }
            if (isset($data['language'])) {
                $value = $data['language'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource::__construct - Property \"language\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value)); 
                }
                $this->setLanguage($value);
            }
            if (isset($data['meta'])) {
                $value = $data['meta'];
                if (is_array($value)) {
                    $value = new FHIRMeta($value);
                } 
                if (!($value instanceof FHIRMeta)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource::__construct - Property \"meta\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeta or data to construct type, saw ".gettype($value)); 
                }
                $this->setMeta($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setId($id)
    {
        if (null === $id) {
            return $this; 
        }
        if (is_scalar($id)) {
            $id = new FHIRId($id);
        }
        if (!($id instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResource::setId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($id)
            ));
        }
        $this->id = $id;
        return $this;
    }

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setImplicitRules($implicitRules)
    {
        if (null === $implicitRules) {
            return $this; 
        }
        if (is_scalar($implicitRules)) {
            $implicitRules = new FHIRUri($implicitRules);
        }
        if (!($implicitRules instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResource::setImplicitRules - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($implicitRules)
            ));
        }
        $this->implicitRules = $implicitRules;
        return $this;
    }

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getImplicitRules()
    {
        return $this->implicitRules;
    }

    /**
     * The base language in which the resource is written.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setLanguage($language)
    {
        if (null === $language) {
            return $this; 
        }
        if (is_scalar($language)) {
            $language = new FHIRCode($language);
        }
        if (!($language instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResource::setLanguage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($language)
            ));
        }
        $this->language = $language;
        return $this;
    }

    /**
     * The base language in which the resource is written.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     * @return $this
     */
    public function setMeta(FHIRMeta $meta = null)
    {
        if (null === $meta) {
            return $this; 
        }
        $this->meta = $meta;
        return $this;
    }

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getMeta()
    {
        return $this->meta;
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
        $a = [];
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getId())) {
            $a['id'] = $v;
        }
        if (null !== ($v = $this->getImplicitRules())) {
            $a['implicitRules'] = $v;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a['language'] = $v;
        }
        if (null !== ($v = $this->getMeta())) {
            $a['meta'] = $v;
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
            $sxe = new \SimpleXMLElement('<Resource xmlns="http://hl7.org/fhir"></Resource>');
        }
        if (null !== ($v = $this->getId())) {
            $v->xmlSerialize(true, $sxe->addChild('id'));
        }
        if (null !== ($v = $this->getImplicitRules())) {
            $v->xmlSerialize(true, $sxe->addChild('implicitRules'));
        }
        if (null !== ($v = $this->getLanguage())) {
            $v->xmlSerialize(true, $sxe->addChild('language'));
        }
        if (null !== ($v = $this->getMeta())) {
            $v->xmlSerialize(true, $sxe->addChild('meta'));
        }
        return $returnSXE ? $sxe : $sxe->saveXML();
    }
}