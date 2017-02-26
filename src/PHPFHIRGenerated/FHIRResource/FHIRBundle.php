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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRBundle extends FHIRResource implements \JsonSerializable
{
    /**
     * Indicates the purpose of this bundle- how it was intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBundleType
     */
    public $type = null;

    /**
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $total = null;

    /**
     * A series of links that provide context to this bundle.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleLink[]
     */
    public $link = array();

    /**
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry[]
     */
    public $entry = array();

    /**
     * Digital Signature - base64 encoded. XML DigSIg or a JWT.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $signature = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Bundle';

    /**
     * Indicates the purpose of this bundle- how it was intended to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBundleType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the purpose of this bundle- how it was intended to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBundleType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * If a set of search matches, this is the total number of matches for the search (as opposed to the number of results in this bundle).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * A series of links that provide context to this bundle.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * A series of links that provide context to this bundle.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleLink $link
     * @return $this
     */
    public function addLink($link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * An entry in a bundle resource - will either contain a resource, or information about a resource (transactions and history only).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * Digital Signature - base64 encoded. XML DigSIg or a JWT.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Digital Signature - base64 encoded. XML DigSIg or a JWT.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $signature
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
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
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->total) $json['total'] = json_encode($this->total);
        if (0 < count($this->link)) {
            $json['link'] = [];
            foreach($this->link as $link) {
                $json['link'][] = json_encode($link);
            }
        }
        if (0 < count($this->entry)) {
            $json['entry'] = [];
            foreach($this->entry as $entry) {
                $json['entry'][] = json_encode($entry);
            }
        }
        if (null !== $this->signature) $json['signature'] = json_encode($this->signature);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Bundle xmlns="http://hl7.org/fhir"></Bundle>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->total) $this->total->xmlSerialize(true, $sxe->addChild('total'));
        if (0 < count($this->link)) {
            foreach($this->link as $link) {
                $link->xmlSerialize(true, $sxe->addChild('link'));
            }
        }
        if (0 < count($this->entry)) {
            foreach($this->entry as $entry) {
                $entry->xmlSerialize(true, $sxe->addChild('entry'));
            }
        }
        if (null !== $this->signature) $this->signature->xmlSerialize(true, $sxe->addChild('signature'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}