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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use PHPFHIRGenerated\FHIRElement\FHIRBundleType;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRSignature;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRResource;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRBundle
 * @package PHPFHIRGenerated\FHIRResource
 */
class FHIRBundle extends FHIRResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Bundle';

    /**
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public $entry = null;

    /**
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A series of links that provide context to this bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     */
    public $link = null;

    /**
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $signature = null;

    /**
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $timestamp = null;

    /**
     * If a set of search matches, this is the total number of entries of type 'match' across all pages in the search.  It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $total = null;

    /**
     * Indicates the purpose of this bundle - how it is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBundleType
     */
    public $type = null;

    /**
     * FHIRBundle Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['entry'])) {
                $this->setEntry($data['entry']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['link'])) {
                $this->setLink($data['link']);
            }
            if (isset($data['signature'])) {
                $this->setSignature($data['signature']);
            }
            if (isset($data['timestamp'])) {
                $this->setTimestamp($data['timestamp']);
            }
            if (isset($data['total'])) {
                $this->setTotal($data['total']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     * @return $this
     */
    public function setEntry(FHIRBundleEntry $entry = null)
    {
        if (null === $entry) {
            return $this; 
        }
        $this->entry = $entry;
        return $this;
    }

    /**
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }


    /**
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A series of links that provide context to this bundle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     * @return $this
     */
    public function setLink(FHIRBundleLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link = $link;
        return $this;
    }

    /**
     * A series of links that provide context to this bundle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink
     */
    public function getLink()
    {
        return $this->link;
    }


    /**
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setSignature(FHIRSignature $signature = null)
    {
        if (null === $signature) {
            return $this; 
        }
        $this->signature = $signature;
        return $this;
    }

    /**
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getSignature()
    {
        return $this->signature;
    }


    /**
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        if (null === $timestamp) {
            return $this; 
        }
        if (is_scalar($timestamp)) {
            $timestamp = new FHIRInstant($timestamp);
        }
        if (!($timestamp instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundle::setTimestamp - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($timestamp)
            ));
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }


    /**
     * If a set of search matches, this is the total number of entries of type 'match' across all pages in the search.  It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setTotal($total)
    {
        if (null === $total) {
            return $this; 
        }
        if (is_scalar($total)) {
            $total = new FHIRUnsignedInt($total);
        }
        if (!($total instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundle::setTotal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($total)
            ));
        }
        $this->total = $total;
        return $this;
    }

    /**
     * If a set of search matches, this is the total number of entries of type 'match' across all pages in the search.  It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * Indicates the purpose of this bundle - how it is intended to be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBundleType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRBundleType($type);
        }
        if (!($type instanceof FHIRBundleType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundle::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBundleType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates the purpose of this bundle - how it is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBundleType
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getEntry())) {
            $a['entry'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLink())) {
            $a['link'] = $v;
        }
        if (null !== ($v = $this->getSignature())) {
            $a['signature'] = $v;
        }
        if (null !== ($v = $this->getTimestamp())) {
            $a['timestamp'] = $v;
        }
        if (null !== ($v = $this->getTotal())) {
            $a['total'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Bundle xmlns="http://hl7.org/fhir"></Bundle>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}