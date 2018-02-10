<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A curated namespace that issues unique symbols within that namespace for the identification of concepts, people, devices, etc.  Represents a "System" used within the Identifier and Coding data types.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRNamingSystem extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The descriptive name of this particular identifier type or code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Indicates whether the naming system is "ready for use" or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType
     */
    public $kind = null;

    /**
     * The name of the individual or organization that published the naming system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemContact[]
     */
    public $contact = array();

    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $responsible = null;

    /**
     * The date  (and optionally time) when the system was registered or published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the registration changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of naming systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = array();

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemUniqueId[]
     */
    public $uniqueId = array();

    /**
     * For naming systems that are retired, indicates the naming system that should be used in their place (if any).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $replacedBy = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'NamingSystem';

    /**
     * The descriptive name of this particular identifier type or code system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The descriptive name of this particular identifier type or code system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Indicates whether the naming system is "ready for use" or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the naming system is "ready for use" or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * The name of the individual or organization that published the naming system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the naming system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemContact $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $responsible
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * The date  (and optionally time) when the system was registered or published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the registration changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the system was registered or published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the registration changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of naming systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of naming systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemUniqueId[]
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNamingSystem\FHIRNamingSystemUniqueId $uniqueId
     * @return $this
     */
    public function addUniqueId($uniqueId)
    {
        $this->uniqueId[] = $uniqueId;
        return $this;
    }

    /**
     * For naming systems that are retired, indicates the naming system that should be used in their place (if any).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReplacedBy()
    {
        return $this->replacedBy;
    }

    /**
     * For naming systems that are retired, indicates the naming system that should be used in their place (if any).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $replacedBy
     * @return $this
     */
    public function setReplacedBy($replacedBy)
    {
        $this->replacedBy = $replacedBy;
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->kind) $json['kind'] = $this->kind;
        if (null !== $this->publisher) $json['publisher'] = $this->publisher;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (null !== $this->responsible) $json['responsible'] = $this->responsible;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                $json['useContext'][] = $useContext;
            }
        }
        if (null !== $this->usage) $json['usage'] = $this->usage;
        if (0 < count($this->uniqueId)) {
            $json['uniqueId'] = [];
            foreach($this->uniqueId as $uniqueId) {
                $json['uniqueId'][] = $uniqueId;
            }
        }
        if (null !== $this->replacedBy) $json['replacedBy'] = $this->replacedBy;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NamingSystem xmlns="http://hl7.org/fhir"></NamingSystem>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->responsible) $this->responsible->xmlSerialize(true, $sxe->addChild('responsible'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (null !== $this->usage) $this->usage->xmlSerialize(true, $sxe->addChild('usage'));
        if (0 < count($this->uniqueId)) {
            foreach($this->uniqueId as $uniqueId) {
                $uniqueId->xmlSerialize(true, $sxe->addChild('uniqueId'));
            }
        }
        if (null !== $this->replacedBy) $this->replacedBy->xmlSerialize(true, $sxe->addChild('replacedBy'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}