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
 * Details and position information for a physical place where services are provided  and resources and participants may be stored, found, contained or accommodated.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRLocation extends FHIRResource implements \JsonSerializable
{
    /**
     * Unique code or number identifying the location to its users.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates the type of function performed at the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public $telecom = array();

    /**
     * Physical location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $physicalType = null;

    /**
     * The absolute geographic location of the Location, expressed in a KML compatible manner (see notes below for KML).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public $position = null;

    /**
     * The organization that is responsible for the provisioning and upkeep of the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $managingOrganization = null;

    /**
     * active | suspended | inactive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public $status = null;

    /**
     * Another Location which this Location is physically part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $partOf = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public $mode = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Location';

    /**
     * Unique code or number identifying the location to its users.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique code or number identifying the location to its users.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates the type of function performed at the location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of function performed at the location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Physical location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Physical location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $physicalType
     * @return $this
     */
    public function setPhysicalType($physicalType)
    {
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * The absolute geographic location of the Location, expressed in a KML compatible manner (see notes below for KML).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * The absolute geographic location of the Location, expressed in a KML compatible manner (see notes below for KML).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * The organization that is responsible for the provisioning and upkeep of the location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that is responsible for the provisioning and upkeep of the location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * active | suspended | inactive.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * active | suspended | inactive.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Another Location which this Location is physically part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Location which this Location is physically part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $partOf
     * @return $this
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRLocationMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
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
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = json_encode($telecom);
            }
        }
        if (null !== $this->address) $json['address'] = json_encode($this->address);
        if (null !== $this->physicalType) $json['physicalType'] = json_encode($this->physicalType);
        if (null !== $this->position) $json['position'] = json_encode($this->position);
        if (null !== $this->managingOrganization) $json['managingOrganization'] = json_encode($this->managingOrganization);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->partOf) $json['partOf'] = json_encode($this->partOf);
        if (null !== $this->mode) $json['mode'] = json_encode($this->mode);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Location xmlns="http://hl7.org/fhir"></Location>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->address) $this->address->xmlSerialize(true, $sxe->addChild('address'));
        if (null !== $this->physicalType) $this->physicalType->xmlSerialize(true, $sxe->addChild('physicalType'));
        if (null !== $this->position) $this->position->xmlSerialize(true, $sxe->addChild('position'));
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->partOf) $this->partOf->xmlSerialize(true, $sxe->addChild('partOf'));
        if (null !== $this->mode) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}