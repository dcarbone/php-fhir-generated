<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRLocationMode;
use PHPFHIRGenerated\FHIRElement\FHIRLocationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRLocation
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRLocation extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Location';

    /**
     * Physical location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * A list of alternate names that the location is known as or was known as in the past.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $alias = null;

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Technical endpoints providing access to services operated for the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * What days/times during a week is this location usually open.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public $hoursOfOperation = null;

    /**
     * Unique code or number identifying the location to its users.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public $mode = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The Operational status covers operation values most relevant to beds (but can also apply to rooms/units/chair/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping and other activities like maintenance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $operationalStatus = null;

    /**
     * Another Location which this Location is physically part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $physicalType = null;

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public $position = null;

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public $status = null;

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * Indicates the type of function performed at the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRLocation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['address'])) {
                $this->setAddress($data['address']);
            }
            if (isset($data['alias'])) {
                $this->setAlias($data['alias']);
            }
            if (isset($data['availabilityExceptions'])) {
                $this->setAvailabilityExceptions($data['availabilityExceptions']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['hoursOfOperation'])) {
                $this->setHoursOfOperation($data['hoursOfOperation']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['managingOrganization'])) {
                $this->setManagingOrganization($data['managingOrganization']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['operationalStatus'])) {
                $this->setOperationalStatus($data['operationalStatus']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['physicalType'])) {
                $this->setPhysicalType($data['physicalType']);
            }
            if (isset($data['position'])) {
                $this->setPosition($data['position']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLocation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Physical location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setAddress(FHIRAddress $address = null)
    {
        if (null === $address) {
            return $this; 
        }
        $this->address = $address;
        return $this;
    }

    /**
     * Physical location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * A list of alternate names that the location is known as or was known as in the past.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAlias($alias)
    {
        if (null === $alias) {
            return $this; 
        }
        if (is_scalar($alias)) {
            $alias = new FHIRString($alias);
        }
        if (!($alias instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setAlias - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($alias)
            ));
        }
        $this->alias = $alias;
        return $this;
    }

    /**
     * A list of alternate names that the location is known as or was known as in the past.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAlias()
    {
        return $this->alias;
    }


    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAvailabilityExceptions($availabilityExceptions)
    {
        if (null === $availabilityExceptions) {
            return $this; 
        }
        if (is_scalar($availabilityExceptions)) {
            $availabilityExceptions = new FHIRString($availabilityExceptions);
        }
        if (!($availabilityExceptions instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setAvailabilityExceptions - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($availabilityExceptions)
            ));
        }
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }


    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Technical endpoints providing access to services operated for the location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEndpoint(FHIRReference $endpoint = null)
    {
        if (null === $endpoint) {
            return $this; 
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * What days/times during a week is this location usually open.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     * @return $this
     */
    public function setHoursOfOperation(FHIRLocationHoursOfOperation $hoursOfOperation = null)
    {
        if (null === $hoursOfOperation) {
            return $this; 
        }
        $this->hoursOfOperation = $hoursOfOperation;
        return $this;
    }

    /**
     * What days/times during a week is this location usually open.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }


    /**
     * Unique code or number identifying the location to its users.
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
     * Unique code or number identifying the location to its users.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }


    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRLocationMode($mode);
        }
        if (!($mode instanceof FHIRLocationMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRLocationMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public function getMode()
    {
        return $this->mode;
    }


    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The Operational status covers operation values most relevant to beds (but can also apply to rooms/units/chair/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping and other activities like maintenance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setOperationalStatus(FHIRCoding $operationalStatus = null)
    {
        if (null === $operationalStatus) {
            return $this; 
        }
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * The Operational status covers operation values most relevant to beds (but can also apply to rooms/units/chair/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping and other activities like maintenance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }


    /**
     * Another Location which this Location is physically part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Another Location which this Location is physically part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPhysicalType(FHIRCodeableConcept $physicalType = null)
    {
        if (null === $physicalType) {
            return $this; 
        }
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }


    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     * @return $this
     */
    public function setPosition(FHIRLocationPosition $position = null)
    {
        if (null === $position) {
            return $this; 
        }
        $this->position = $position;
        return $this;
    }

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }


    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRLocationStatus($status);
        }
        if (!($status instanceof FHIRLocationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setTelecom(FHIRContactPoint $telecom = null)
    {
        if (null === $telecom) {
            return $this; 
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getTelecom()
    {
        return $this->telecom;
    }


    /**
     * Indicates the type of function performed at the location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates the type of function performed at the location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
        if (null !== ($v = $this->getAddress())) {
            $a['address'] = $v;
        }
        if (null !== ($v = $this->getAlias())) {
            $a['alias'] = $v;
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a['availabilityExceptions'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getHoursOfOperation())) {
            $a['hoursOfOperation'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $a['operationalStatus'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPhysicalType())) {
            $a['physicalType'] = $v;
        }
        if (null !== ($v = $this->getPosition())) {
            $a['position'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTelecom())) {
            $a['telecom'] = $v;
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
            $sxe = new \SimpleXMLElement('<Location xmlns="http://hl7.org/fhir"></Location>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}