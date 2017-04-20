<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A definition of behaviors to be taken in particular circumstances, often including conditions, options and other decision points.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProtocol extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier for the protocol instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Name of protocol.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of the protocol.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProtocolStatus
     */
    public $status = null;

    /**
     * A code that classifies the general type of context to which these behavior definitions apply.  This is used for searching, sorting and display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProtocolType
     */
    public $type = null;

    /**
     * What does protocol deal with?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * To whom does Protocol apply?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $group = null;

    /**
     * When is protocol to be used?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $purpose = null;

    /**
     * Who wrote protocol?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * What's done as part of protocol.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolStep[]
     */
    public $step = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Protocol';

    /**
     * A unique identifier for the protocol instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier for the protocol instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Name of protocol.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Name of protocol.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of the protocol.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProtocolStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the protocol.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProtocolStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the general type of context to which these behavior definitions apply.  This is used for searching, sorting and display purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProtocolType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A code that classifies the general type of context to which these behavior definitions apply.  This is used for searching, sorting and display purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProtocolType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * What does protocol deal with?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * What does protocol deal with?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * To whom does Protocol apply?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * To whom does Protocol apply?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * When is protocol to be used?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * When is protocol to be used?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Who wrote protocol?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Who wrote protocol?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * What's done as part of protocol.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolStep[]
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * What's done as part of protocol.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolStep $step
     * @return $this
     */
    public function addStep($step)
    {
        $this->step[] = $step;
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
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->group) $json['group'] = json_encode($this->group);
        if (null !== $this->purpose) $json['purpose'] = json_encode($this->purpose);
        if (null !== $this->author) $json['author'] = json_encode($this->author);
        if (0 < count($this->step)) {
            $json['step'] = [];
            foreach($this->step as $step) {
                $json['step'][] = json_encode($step);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Protocol xmlns="http://hl7.org/fhir"></Protocol>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->group) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (0 < count($this->step)) {
            foreach($this->step as $step) {
                $step->xmlSerialize(true, $sxe->addChild('step'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}