<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationMode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained, or
 * accommodated.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRLocation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRLocation extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LOCATION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADDRESS = 'address';
    const FIELD_ALIAS = 'alias';
    const FIELD_ALIAS_EXT = '_alias';
    const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_HOURS_OF_OPERATION = 'hoursOfOperation';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PHYSICAL_TYPE = 'physicalType';
    const FIELD_POSITION = 'position';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TELECOM = 'telecom';
    const FIELD_TELECOM_EXT = '_telecom';
    const FIELD_TYPE = 'type';

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    private $address = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    private $alias = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $availabilityExceptions = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $endpoint = [];
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[]
     */
    private $hoursOfOperation = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;
    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationMode
     */
    private $mode = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    private $operationalStatus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $partOf = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $physicalType = null;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed using the WGS84
     * datum (This is the same co-ordinate system used in KML).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    private $position = null;
    /**
     * Indicates whether the location is still in use.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationStatus
     */
    private $status = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    private $telecom = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $type = [];

    /**
     * FHIRLocation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDRESS])) {
            if ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
                $this->setAddress($data[self::FIELD_ADDRESS]);
            } else {
                $this->setAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_ALIAS])) {
            $ext = (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT]))
                ? $data[self::FIELD_ALIAS_EXT]
                : null;
            if (is_array($data[self::FIELD_ALIAS])) {
                foreach($data[self::FIELD_ALIAS] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addAlias($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addAlias(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_ALIAS] instanceof FHIRString) {
                $this->addAlias($data[self::FIELD_ALIAS]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALIAS])) {
                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALIAS]] + $ext));
            } else {
                $this->addAlias(new FHIRString($data[self::FIELD_ALIAS]));
            }
        }
        if (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $ext = (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]))
                ? $data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]
                : null;
            if ($data[self::FIELD_AVAILABILITY_EXCEPTIONS] instanceof FHIRString) {
                $this->setAvailabilityExceptions($data[self::FIELD_AVAILABILITY_EXCEPTIONS]);
            } elseif ($ext && is_scalar($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                $this->setAvailabilityExceptions(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AVAILABILITY_EXCEPTIONS]] + $ext));
            } else {
                $this->setAvailabilityExceptions(new FHIRString($data[self::FIELD_AVAILABILITY_EXCEPTIONS]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_HOURS_OF_OPERATION])) {
            if (is_array($data[self::FIELD_HOURS_OF_OPERATION])) {
                foreach($data[self::FIELD_HOURS_OF_OPERATION] as $v) {
                    if ($v instanceof FHIRLocationHoursOfOperation) {
                        $this->addHoursOfOperation($v);
                    } else {
                        $this->addHoursOfOperation(new FHIRLocationHoursOfOperation($v));
                    }
                }
            } else if ($data[self::FIELD_HOURS_OF_OPERATION] instanceof FHIRLocationHoursOfOperation) {
                $this->addHoursOfOperation($data[self::FIELD_HOURS_OF_OPERATION]);
            } else {
                $this->addHoursOfOperation(new FHIRLocationHoursOfOperation($data[self::FIELD_HOURS_OF_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
            if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
                $this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
            } else {
                $this->setManagingOrganization(new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_MODE])) {
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT]))
                ? $data[self::FIELD_MODE_EXT]
                : null;
            if ($data[self::FIELD_MODE] instanceof FHIRLocationMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODE])) {
                $this->setMode(new FHIRLocationMode([FHIRLocationMode::FIELD_VALUE => $data[self::FIELD_MODE]] + $ext));
            } else {
                $this->setMode(new FHIRLocationMode($data[self::FIELD_MODE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_OPERATIONAL_STATUS])) {
            if ($data[self::FIELD_OPERATIONAL_STATUS] instanceof FHIRCoding) {
                $this->setOperationalStatus($data[self::FIELD_OPERATIONAL_STATUS]);
            } else {
                $this->setOperationalStatus(new FHIRCoding($data[self::FIELD_OPERATIONAL_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->setPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->setPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PHYSICAL_TYPE])) {
            if ($data[self::FIELD_PHYSICAL_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPhysicalType($data[self::FIELD_PHYSICAL_TYPE]);
            } else {
                $this->setPhysicalType(new FHIRCodeableConcept($data[self::FIELD_PHYSICAL_TYPE]));
            }
        }
        if (isset($data[self::FIELD_POSITION])) {
            if ($data[self::FIELD_POSITION] instanceof FHIRLocationPosition) {
                $this->setPosition($data[self::FIELD_POSITION]);
            } else {
                $this->setPosition(new FHIRLocationPosition($data[self::FIELD_POSITION]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRLocationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRLocationStatus([FHIRLocationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRLocationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            $ext = (isset($data[self::FIELD_TELECOM_EXT]) && is_array($data[self::FIELD_TELECOM_EXT]))
                ? $data[self::FIELD_TELECOM_EXT]
                : null;
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $i => $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } elseif ($ext && is_scalar($data[self::FIELD_TELECOM])) {
                $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_TELECOM]] + $ext));
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Location{$xmlns}></Location>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $address
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setAddress(FHIRAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $alias
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addAlias($alias = null)
    {
        if (null === $alias) {
            $this->alias = [];
            return $this;
        }
        if ($alias instanceof FHIRString) {
            $this->alias[] = $alias;
            return $this;
        }
        $this->alias[] = new FHIRString($alias);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $alias
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setAlias(array $alias = [])
    {
        $this->alias = [];
        if ([] === $alias) {
            return $this;
        }
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->addAlias($v);
            } else {
                $this->addAlias(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $availabilityExceptions
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setAvailabilityExceptions($availabilityExceptions = null)
    {
        if (null === $availabilityExceptions) {
            $this->availabilityExceptions = null;
            return $this;
        }
        if ($availabilityExceptions instanceof FHIRString) {
            $this->availabilityExceptions = $availabilityExceptions;
            return $this;
        }
        $this->availabilityExceptions = new FHIRString($availabilityExceptions);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $endpoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $endpoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[]
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation $hoursOfOperation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addHoursOfOperation(FHIRLocationHoursOfOperation $hoursOfOperation = null)
    {
        $this->hoursOfOperation[] = $hoursOfOperation;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[] $hoursOfOperation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setHoursOfOperation(array $hoursOfOperation = [])
    {
        $this->hoursOfOperation = [];
        if ([] === $hoursOfOperation) {
            return $this;
        }
        foreach($hoursOfOperation as $v) {
            if ($v instanceof FHIRLocationHoursOfOperation) {
                $this->addHoursOfOperation($v);
            } else {
                $this->addHoursOfOperation(new FHIRLocationHoursOfOperation($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $managingOrganization
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationMode $mode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setMode(FHIRLocationMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $operationalStatus
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setOperationalStatus(FHIRCoding $operationalStatus = null)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $partOf
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $physicalType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setPhysicalType(FHIRCodeableConcept $physicalType = null)
    {
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed using the WGS84
     * datum (This is the same co-ordinate system used in KML).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed using the WGS84
     * datum (This is the same co-ordinate system used in KML).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setPosition(FHIRLocationPosition $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Indicates whether the location is still in use.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the location is still in use.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRLocationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setStatus(FHIRLocationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $telecom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[] $telecom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setTelecom(array $telecom = [])
    {
        $this->telecom = [];
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addTelecom($v);
            } else {
                $this->addTelecom(new FHIRContactPoint($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRLocation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRLocation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRLocation;
        } elseif (!is_object($type) || !($type instanceof FHIRLocation)) {
            throw new \RuntimeException(sprintf(
                'FHIRLocation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->address)) {
            $type->setAddress(FHIRAddress::xmlUnserialize($children->address));
        }
        if (isset($attributes->alias)) {
            $type->addAlias((string)$attributes->alias);
        }
        if (isset($children->alias)) {
            foreach($children->alias as $child) {
                $type->addAlias(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->availabilityExceptions)) {
            $type->setAvailabilityExceptions((string)$attributes->availabilityExceptions);
        }
        if (isset($children->availabilityExceptions)) {
            $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($children->availabilityExceptions));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->hoursOfOperation)) {
            foreach($children->hoursOfOperation as $child) {
                $type->addHoursOfOperation(FHIRLocationHoursOfOperation::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->managingOrganization)) {
            $type->setManagingOrganization(FHIRReference::xmlUnserialize($children->managingOrganization));
        }
        if (isset($children->mode)) {
            $type->setMode(FHIRLocationMode::xmlUnserialize($children->mode));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->operationalStatus)) {
            $type->setOperationalStatus(FHIRCoding::xmlUnserialize($children->operationalStatus));
        }
        if (isset($children->partOf)) {
            $type->setPartOf(FHIRReference::xmlUnserialize($children->partOf));
        }
        if (isset($children->physicalType)) {
            $type->setPhysicalType(FHIRCodeableConcept::xmlUnserialize($children->physicalType));
        }
        if (isset($children->position)) {
            $type->setPosition(FHIRLocationPosition::xmlUnserialize($children->position));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRLocationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->telecom)) {
            foreach($children->telecom as $child) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAlias())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALIAS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY_EXCEPTIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getHoursOfOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_HOURS_OF_OPERATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANAGING_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOperationalStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATIONAL_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPartOf())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPhysicalType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHYSICAL_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPosition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POSITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TELECOM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAddress())) {
            $a[self::FIELD_ADDRESS] = $v;
        }
        if ([] !== ($vs = $this->getAlias())) {
            $a[self::FIELD_ALIAS] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ALIAS][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_ALIAS_EXT])) {
                        $a[self::FIELD_ALIAS_EXT] = [];
                    }
                    $a[self::FIELD_ALIAS_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a[self::FIELD_AVAILABILITY_EXCEPTIONS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = $vs;
        }
        if ([] !== ($vs = $this->getHoursOfOperation())) {
            $a[self::FIELD_HOURS_OF_OPERATION] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IDENTIFIER_EXT])) {
                        $a[self::FIELD_IDENTIFIER_EXT] = [];
                    }
                    $a[self::FIELD_IDENTIFIER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a[self::FIELD_MANAGING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a[self::FIELD_MODE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MODE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $a[self::FIELD_OPERATIONAL_STATUS] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $v;
        }
        if (null !== ($v = $this->getPhysicalType())) {
            $a[self::FIELD_PHYSICAL_TYPE] = $v;
        }
        if (null !== ($v = $this->getPosition())) {
            $a[self::FIELD_POSITION] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TELECOM][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_TELECOM_EXT])) {
                        $a[self::FIELD_TELECOM_EXT] = [];
                    }
                    $a[self::FIELD_TELECOM_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}