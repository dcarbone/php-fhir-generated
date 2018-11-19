<?php

namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use PHPFHIRGenerated\FHIRElement\FHIRBundleType;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
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
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    private $entry = [];

    /**
     * A persistent identifier for the batch that won't change as a batch is copied from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * A series of links that provide context to this bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    private $link = [];

    /**
     * Digital Signature - base64 encoded. XML-DSIg or a JWT.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    private $signature = null;

    /**
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $total = null;

    /**
     * Indicates the purpose of this bundle - how it was intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBundleType
     */
    private $type = null;

    /**
     * FHIRBundle Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['entry'])) {
                $value = $data['entry'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRBundleEntry($v);
                        } 
                        if (!($v instanceof FHIRBundleEntry)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Collection field \"entry\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry or data to construct type, saw ".gettype($v));
                        }
                        $this->addEntry($v);
                    }
                }
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setIdentifier($value);
            }
            if (isset($data['link'])) {
                $value = $data['link'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRBundleLink($v);
                        } 
                        if (!($v instanceof FHIRBundleLink)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Collection field \"link\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink or data to construct type, saw ".gettype($v));
                        }
                        $this->addLink($v);
                    }
                }
            }
            if (isset($data['signature'])) {
                $value = $data['signature'];
                if (is_array($value)) {
                    $value = new FHIRSignature($value);
                } 
                if (!($value instanceof FHIRSignature)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Property \"signature\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSignature or data to construct type, saw ".gettype($value));
                }
                $this->setSignature($value);
            }
            if (isset($data['total'])) {
                $value = $data['total'];
                if (is_array($value)) {
                    $value = new FHIRUnsignedInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUnsignedInt($value);
                }
                if (!($value instanceof FHIRUnsignedInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Property \"total\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or data to construct type, saw ".gettype($value));
                }
                $this->setTotal($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRBundleType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBundleType($value);
                }
                if (!($value instanceof FHIRBundleType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBundleType or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRBundle::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     * @return $this
     */
    public function addEntry(FHIRBundleEntry $entry = null)
    {
        if (null === $entry) {
            return $this; 
        }
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * A persistent identifier for the batch that won't change as a batch is copied from server to server.
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
     * A persistent identifier for the batch that won't change as a batch is copied from server to server.
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
    public function addLink(FHIRBundleLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * A series of links that provide context to this bundle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Digital Signature - base64 encoded. XML-DSIg or a JWT.
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
     * Digital Signature - base64 encoded. XML-DSIg or a JWT.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
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
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Indicates the purpose of this bundle - how it was intended to be used.
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
     * Indicates the purpose of this bundle - how it was intended to be used.
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
        if (0 < count($values = $this->getEntry())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['entry'] = $vs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (0 < count($values = $this->getLink())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['link'] = $vs;
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $a['signature'] = $v;
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
        if (0 < count($values = $this->getEntry())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('entry'));
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (0 < count($values = $this->getLink())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('link'));
                }
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $v->xmlSerialize(true, $sxe->addChild('signature'));
        }
        if (null !== ($v = $this->getTotal())) {
            $v->xmlSerialize(true, $sxe->addChild('total'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}