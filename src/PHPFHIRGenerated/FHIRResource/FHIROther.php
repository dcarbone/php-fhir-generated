<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Other is a conformant for handling resource concepts not yet defined for FHIR or outside HL7's scope of interest.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROther extends FHIRResource implements \JsonSerializable
{
    /**
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resoruce.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Indicates who was responsible for creating the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $author = null;

    /**
     * Identifies when the resource was first created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $created = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Other';

    /**
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resoruce.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resoruce.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates who was responsible for creating the resource instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Indicates who was responsible for creating the resource instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Identifies when the resource was first created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Identifies when the resource was first created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->author) $json['author'] = $this->author;
        if (null !== $this->created) $json['created'] = $this->created;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Other xmlns="http://hl7.org/fhir"></Other>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}