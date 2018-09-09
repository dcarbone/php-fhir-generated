<?php

namespace PHPFHIRGenerated;

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
    public $id = null;

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $implicitRules = null;

    /**
     * The base language in which the resource is written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $meta = null;

    /**
     * FHIRResource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) {
                $this->setId($data['id']);
            }
            if (isset($data['implicitRules'])) {
                $this->setImplicitRules($data['implicitRules']);
            }
            if (isset($data['language'])) {
                $this->setLanguage($data['language']);
            }
            if (isset($data['meta'])) {
                $this->setMeta($data['meta']);
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
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
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
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
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
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
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
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}