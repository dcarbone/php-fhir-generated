<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 */
class FHIRSecurityEventObject extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $reference = null;

    /**
     * Object type being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectType
     */
    public $type = null;

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectRole
     */
    public $role = null;

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectLifecycle
     */
    public $lifecycle = null;

    /**
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP, HIV status, mental health status or similar topics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sensitivity = null;

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Text that describes the object in more detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The actual query for a query-type participant object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $query = null;

    /**
     * Additional Information about the Object.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent\FHIRSecurityEventDetail[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SecurityEvent.Object';

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Object type being audited.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Object type being audited.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectRole $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectLifecycle
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSecurityEventObjectLifecycle $lifecycle
     * @return $this
     */
    public function setLifecycle($lifecycle)
    {
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP, HIV status, mental health status or similar topics.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP, HIV status, mental health status or similar topics.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $sensitivity
     * @return $this
     */
    public function setSensitivity($sensitivity)
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Text that describes the object in more detail.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Text that describes the object in more detail.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The actual query for a query-type participant object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The actual query for a query-type participant object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Additional Information about the Object.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent\FHIRSecurityEventDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Additional Information about the Object.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent\FHIRSecurityEventDetail[] $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->reference) $json['reference'] = $this->reference->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->role) $json['role'] = $this->role->jsonSerialize();
        if (null !== $this->lifecycle) $json['lifecycle'] = $this->lifecycle->jsonSerialize();
        if (null !== $this->sensitivity) $json['sensitivity'] = $this->sensitivity->jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->query) $json['query'] = $this->query->jsonSerialize();
        if (0 < count($this->detail)) {
            $json['detail'] = array();
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SecurityEventObject xmlns="http://hl7.org/fhir"></SecurityEventObject>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->reference) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->lifecycle) $this->lifecycle->xmlSerialize(true, $sxe->addChild('lifecycle'));
        if (null !== $this->sensitivity) $this->sensitivity->xmlSerialize(true, $sxe->addChild('sensitivity'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->query) $this->query->xmlSerialize(true, $sxe->addChild('query'));
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}