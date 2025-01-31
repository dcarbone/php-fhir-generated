<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationModeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained, or
 * accommodated.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRLocation extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_LOCATION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_ALIAS = 'alias';
    public const FIELD_ALIAS_EXT = '_alias';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_MODE = 'mode';
    public const FIELD_MODE_EXT = '_mode';
    public const FIELD_TYPE = 'type';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_TELECOM_EXT = '_telecom';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PHYSICAL_TYPE = 'physicalType';
    public const FIELD_POSITION = 'position';
    public const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_HOURS_OF_OPERATION = 'hoursOfOperation';
    public const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    public const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';
    public const FIELD_ENDPOINT = 'endpoint';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AVAILABILITY_EXCEPTIONS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus 
     */
    protected FHIRLocationStatus $status;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $operationalStatus;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] 
     */
    protected array $alias;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode 
     */
    protected FHIRLocationMode $mode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $type;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[] 
     */
    protected array $telecom;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $address;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $physicalType;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed using the WGS84
     * datum (This is the same co-ordinate system used in KML).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition 
     */
    protected FHIRLocationPosition $position;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $managingOrganization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $partOf;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[] 
     */
    protected array $hoursOfOperation;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $availabilityExceptions;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $endpoint;

    /* constructor.php:63 */
    /**
     * FHIRLocation Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding $operationalStatus
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] $alias
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationModeEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode $mode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[] $telecom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress $address
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $physicalType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $managingOrganization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $partOf
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[] $hoursOfOperation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $availabilityExceptions
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $endpoint
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRStringPrimitive|FHIRString $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|string|FHIRLocationStatusEnum|FHIRLocationStatus $status = null,
                                null|FHIRCoding $operationalStatus = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|iterable $alias = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|FHIRLocationModeEnum|FHIRLocationMode $mode = null,
                                null|iterable $type = null,
                                null|iterable $telecom = null,
                                null|FHIRAddress $address = null,
                                null|FHIRCodeableConcept $physicalType = null,
                                null|FHIRLocationPosition $position = null,
                                null|FHIRReference $managingOrganization = null,
                                null|FHIRReference $partOf = null,
                                null|iterable $hoursOfOperation = null,
                                null|string|FHIRStringPrimitive|FHIRString $availabilityExceptions = null,
                                null|iterable $endpoint = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $operationalStatus) {
            $this->setOperationalStatus($operationalStatus);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $alias) {
            $this->setAlias(...$alias);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $mode) {
            $this->setMode($mode);
        }
        if (null !== $type) {
            $this->setType(...$type);
        }
        if (null !== $telecom) {
            $this->setTelecom(...$telecom);
        }
        if (null !== $address) {
            $this->setAddress($address);
        }
        if (null !== $physicalType) {
            $this->setPhysicalType($physicalType);
        }
        if (null !== $position) {
            $this->setPosition($position);
        }
        if (null !== $managingOrganization) {
            $this->setManagingOrganization($managingOrganization);
        }
        if (null !== $partOf) {
            $this->setPartOf($partOf);
        }
        if (null !== $hoursOfOperation) {
            $this->setHoursOfOperation(...$hoursOfOperation);
        }
        if (null !== $availabilityExceptions) {
            $this->setAvailabilityExceptions($availabilityExceptions);
        }
        if (null !== $endpoint) {
            $this->setEndpoint(...$endpoint);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:149 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = [];
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->identifier[] = $v;
            } else {
                $this->identifier[] = new FHIRIdentifier(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus
     */
    public function getStatus(): null|FHIRLocationStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status property covers the general availability of the resource, not the
     * current value which may be covered by the operationStatus, or by a
     * schedule/slots if they are configured for the location.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRLocationStatusEnum|FHIRLocationStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRLocationStatus)) {
            $status = new FHIRLocationStatus(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding
     */
    public function getOperationalStatus(): null|FHIRCoding
    {
        return $this->operationalStatus ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The operational status covers operation values most relevant to beds (but can
     * also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair).
     * This typically covers concepts such as contamination, housekeeping, and other
     * activities like maintenance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding $operationalStatus
     * @return static
     */
    public function setOperationalStatus(null|FHIRCoding $operationalStatus): self
    {
        if (null === $operationalStatus) {
            unset($this->operationalStatus);
            return $this;
        }
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        if ($this->_valueXMLLocations[self::FIELD_NAME] !== $valueXMLLocation) {
            $this->_setNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the name element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME];
    }

    /**
     * Set the location the "value" field of the name element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]
     */
    public function getAlias(): array
    {
        return $this->alias ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString>
     */
    public function getAliasIterator(): iterable
    {
        if (!isset($this->alias)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->alias);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $alias
     * @return static
     */
    public function addAlias(string|FHIRStringPrimitive|FHIRString $alias): self
    {
        if (!($alias instanceof FHIRString)) {
            $alias = new FHIRString(value: $alias);
        }
        if (!isset($this->alias)) {
            $this->alias = [];
        }
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the location is known as, or was known as, in the
     * past.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString ...$alias
     * @return static
     */
    public function setAlias(string|FHIRStringPrimitive|FHIRString ...$alias): self
    {
        if ([] === $alias) {
            unset($this->alias);
            return $this;
        }
        $this->alias = [];
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->alias[] = $v;
            } else {
                $this->alias[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode
     */
    public function getMode(): null|FHIRLocationMode
    {
        return $this->mode ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationModeEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode $mode
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMode(null|string|FHIRLocationModeEnum|FHIRLocationMode $mode,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $mode) {
            unset($this->mode);
            return $this;
        }
        if (!($mode instanceof FHIRLocationMode)) {
            $mode = new FHIRLocationMode(value: $mode);
        }
        $this->mode = $mode;
        if ($this->_valueXMLLocations[self::FIELD_MODE] !== $valueXMLLocation) {
            $this->_setModeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the mode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getModeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MODE];
    }

    /**
     * Set the location the "value" field of the mode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setModeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MODE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType(): array
    {
        return $this->type ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTypeIterator(): iterable
    {
        if (!isset($this->type)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->type);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type): self
    {
        if (!isset($this->type)) {
            $this->type = [];
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$type
     * @return static
     */
    public function setType(FHIRCodeableConcept ...$type): self
    {
        if ([] === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRString|FHIRContactPoint $telecom): self
    {
        if (!($telecom instanceof FHIRContactPoint)) {
            $telecom = new FHIRContactPoint(value: $telecom);
        }
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRString|FHIRContactPoint ...$telecom): self
    {
        if ([] === $telecom) {
            unset($this->telecom);
            return $this;
        }
        $this->telecom = [];
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->telecom[] = $v;
            } else {
                $this->telecom[] = new FHIRContactPoint(value: $v);
            }
        }
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress
     */
    public function getAddress(): null|FHIRAddress
    {
        return $this->address ?? null;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function setAddress(null|FHIRAddress $address): self
    {
        if (null === $address) {
            unset($this->address);
            return $this;
        }
        $this->address = $address;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType(): null|FHIRCodeableConcept
    {
        return $this->physicalType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $physicalType
     * @return static
     */
    public function setPhysicalType(null|FHIRCodeableConcept $physicalType): self
    {
        if (null === $physicalType) {
            unset($this->physicalType);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition(): null|FHIRLocationPosition
    {
        return $this->position ?? null;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed using the WGS84
     * datum (This is the same co-ordinate system used in KML).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
     * @return static
     */
    public function setPosition(null|FHIRLocationPosition $position): self
    {
        if (null === $position) {
            unset($this->position);
            return $this;
        }
        $this->position = $position;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getManagingOrganization(): null|FHIRReference
    {
        return $this->managingOrganization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $managingOrganization
     * @return static
     */
    public function setManagingOrganization(null|FHIRReference $managingOrganization): self
    {
        if (null === $managingOrganization) {
            unset($this->managingOrganization);
            return $this;
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getPartOf(): null|FHIRReference
    {
        return $this->partOf ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location of which this Location is physically a part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function setPartOf(null|FHIRReference $partOf): self
    {
        if (null === $partOf) {
            unset($this->partOf);
            return $this;
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation[]
     */
    public function getHoursOfOperation(): array
    {
        return $this->hoursOfOperation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation>
     */
    public function getHoursOfOperationIterator(): iterable
    {
        if (!isset($this->hoursOfOperation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->hoursOfOperation);
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     *
     * What days/times during a week is this location usually open.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation $hoursOfOperation
     * @return static
     */
    public function addHoursOfOperation(FHIRLocationHoursOfOperation $hoursOfOperation): self
    {
        if (!isset($this->hoursOfOperation)) {
            $this->hoursOfOperation = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation ...$hoursOfOperation
     * @return static
     */
    public function setHoursOfOperation(FHIRLocationHoursOfOperation ...$hoursOfOperation): self
    {
        if ([] === $hoursOfOperation) {
            unset($this->hoursOfOperation);
            return $this;
        }
        $this->hoursOfOperation = $hoursOfOperation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions(): null|FHIRString
    {
        return $this->availabilityExceptions ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of when the locations opening ours are different to normal, e.g.
     * public holiday availability. Succinctly describing all possible exceptions to
     * normal site availability as detailed in the opening hours Times.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $availabilityExceptions
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailabilityExceptions(null|string|FHIRStringPrimitive|FHIRString $availabilityExceptions,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $availabilityExceptions) {
            unset($this->availabilityExceptions);
            return $this;
        }
        if (!($availabilityExceptions instanceof FHIRString)) {
            $availabilityExceptions = new FHIRString(value: $availabilityExceptions);
        }
        $this->availabilityExceptions = $availabilityExceptions;
        if ($this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] !== $valueXMLLocation) {
            $this->_setAvailabilityExceptionsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the availabilityExceptions element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAvailabilityExceptionsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS];
    }

    /**
     * Set the location the "value" field of the availabilityExceptions element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAvailabilityExceptionsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getEndpoint(): array
    {
        return $this->endpoint ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getEndpointIterator(): iterable
    {
        if (!isset($this->endpoint)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->endpoint);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint): self
    {
        if (!isset($this->endpoint)) {
            $this->endpoint = [];
        }
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$endpoint
     * @return static
     */
    public function setEndpoint(FHIRReference ...$endpoint): self
    {
        if ([] === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATIONAL_STATUS])) {
            $v = $this->getOperationalStatus();
            foreach($validationRules[self::FIELD_OPERATIONAL_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATIONAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATIONAL_STATUS])) {
                        $errs[self::FIELD_OPERATIONAL_STATUS] = [];
                    }
                    $errs[self::FIELD_OPERATIONAL_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALIAS])) {
            $v = $this->getAlias();
            foreach($validationRules[self::FIELD_ALIAS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALIAS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALIAS])) {
                        $errs[self::FIELD_ALIAS] = [];
                    }
                    $errs[self::FIELD_ALIAS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS])) {
            $v = $this->getAddress();
            foreach($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS])) {
                        $errs[self::FIELD_ADDRESS] = [];
                    }
                    $errs[self::FIELD_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYSICAL_TYPE])) {
            $v = $this->getPhysicalType();
            foreach($validationRules[self::FIELD_PHYSICAL_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PHYSICAL_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYSICAL_TYPE])) {
                        $errs[self::FIELD_PHYSICAL_TYPE] = [];
                    }
                    $errs[self::FIELD_PHYSICAL_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POSITION])) {
            $v = $this->getPosition();
            foreach($validationRules[self::FIELD_POSITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POSITION])) {
                        $errs[self::FIELD_POSITION] = [];
                    }
                    $errs[self::FIELD_POSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANAGING_ORGANIZATION])) {
            $v = $this->getManagingOrganization();
            foreach($validationRules[self::FIELD_MANAGING_ORGANIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANAGING_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANAGING_ORGANIZATION])) {
                        $errs[self::FIELD_MANAGING_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_MANAGING_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOURS_OF_OPERATION])) {
            $v = $this->getHoursOfOperation();
            foreach($validationRules[self::FIELD_HOURS_OF_OPERATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HOURS_OF_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOURS_OF_OPERATION])) {
                        $errs[self::FIELD_HOURS_OF_OPERATION] = [];
                    }
                    $errs[self::FIELD_HOURS_OF_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $v = $this->getAvailabilityExceptions();
            foreach($validationRules[self::FIELD_AVAILABILITY_EXCEPTIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABILITY_EXCEPTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                        $errs[self::FIELD_AVAILABILITY_EXCEPTIONS] = [];
                    }
                    $errs[self::FIELD_AVAILABILITY_EXCEPTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLocation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLocation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocation)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRLocationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATIONAL_STATUS === $cen) {
                $type->setOperationalStatus(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALIAS === $cen) {
                $type->addAlias(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODE === $cen) {
                $type->setMode(FHIRLocationMode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TELECOM === $cen) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS === $cen) {
                $type->setAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHYSICAL_TYPE === $cen) {
                $type->setPhysicalType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POSITION === $cen) {
                $type->setPosition(FHIRLocationPosition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGING_ORGANIZATION === $cen) {
                $type->setManagingOrganization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_OF === $cen) {
                $type->setPartOf(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HOURS_OF_OPERATION === $cen) {
                $type->addHoursOfOperation(FHIRLocationHoursOfOperation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AVAILABILITY_EXCEPTIONS === $cen) {
                $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDPOINT === $cen) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
                $type->_setNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MODE])) {
            if (isset($type->mode)) {
                $type->mode->setValue((string)$attributes[self::FIELD_MODE]);
                $type->_setModeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMode((string)$attributes[self::FIELD_MODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            if (isset($type->availabilityExceptions)) {
                $type->availabilityExceptions->setValue((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS]);
                $type->_setAvailabilityExceptionsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAvailabilityExceptions((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('Location', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->mode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MODE]) {
            $xw->writeAttribute(self::FIELD_MODE, $this->mode->_getFormattedValue());
        }
        if (isset($this->availabilityExceptions) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]) {
            $xw->writeAttribute(self::FIELD_AVAILABILITY_EXCEPTIONS, $this->availabilityExceptions->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->operationalStatus)) {
            $xw->startElement(self::FIELD_OPERATIONAL_STATUS);
            $this->operationalStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->alias) && [] !== $this->alias) {
            foreach($this->alias as $v) {
                $xw->startElement(self::FIELD_ALIAS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->mode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MODE]
                || $this->mode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MODE);
            $this->mode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MODE]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            foreach($this->telecom as $v) {
                $xw->startElement(self::FIELD_TELECOM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->address)) {
            $xw->startElement(self::FIELD_ADDRESS);
            $this->address->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->physicalType)) {
            $xw->startElement(self::FIELD_PHYSICAL_TYPE);
            $this->physicalType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->position)) {
            $xw->startElement(self::FIELD_POSITION);
            $this->position->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->managingOrganization)) {
            $xw->startElement(self::FIELD_MANAGING_ORGANIZATION);
            $this->managingOrganization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->partOf)) {
            $xw->startElement(self::FIELD_PART_OF);
            $this->partOf->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->hoursOfOperation)) {
            foreach ($this->hoursOfOperation as $v) {
                $xw->startElement(self::FIELD_HOURS_OF_OPERATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->availabilityExceptions)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]
                || $this->availabilityExceptions->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVAILABILITY_EXCEPTIONS);
            $this->availabilityExceptions->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]);
            $xw->endElement();
        }
        if (isset($this->endpoint)) {
            foreach ($this->endpoint as $v) {
                $xw->startElement(self::FIELD_ENDPOINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLocation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLocation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocation)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER])
            || isset($json[self::FIELD_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = (array)($json[self::FIELD_IDENTIFIER] ?? []);
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRLocationStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRLocationStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPERATIONAL_STATUS]) || array_key_exists(self::FIELD_OPERATIONAL_STATUS, $json)) {
            $type->setOperationalStatus(FHIRCoding::jsonUnserialize($json[self::FIELD_OPERATIONAL_STATUS], $config));
        }
        if (isset($json[self::FIELD_NAME])
            || isset($json[self::FIELD_NAME_EXT])
            || array_key_exists(self::FIELD_NAME, $json)
            || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $type->setName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ALIAS])
            || isset($json[self::FIELD_ALIAS_EXT])
            || array_key_exists(self::FIELD_ALIAS, $json)
            || array_key_exists(self::FIELD_ALIAS_EXT, $json)) {
            $value = (array)($json[self::FIELD_ALIAS] ?? []);
            $ext = (array)($json[self::FIELD_ALIAS_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addAlias(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MODE])
            || isset($json[self::FIELD_MODE_EXT])
            || array_key_exists(self::FIELD_MODE, $json)
            || array_key_exists(self::FIELD_MODE_EXT, $json)) {
            $value = $json[self::FIELD_MODE] ?? null;
            $type->setMode(FHIRLocationMode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRLocationMode::FIELD_VALUE => $value]) + ($json[self::FIELD_MODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $vs = $json[self::FIELD_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TELECOM])
            || isset($json[self::FIELD_TELECOM_EXT])
            || array_key_exists(self::FIELD_TELECOM, $json)
            || array_key_exists(self::FIELD_TELECOM_EXT, $json)) {
            $value = (array)($json[self::FIELD_TELECOM] ?? []);
            $ext = (array)($json[self::FIELD_TELECOM_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addTelecom(FHIRContactPoint::jsonUnserialize(
                    [FHIRContactPoint::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ADDRESS]) || array_key_exists(self::FIELD_ADDRESS, $json)) {
            $type->setAddress(FHIRAddress::jsonUnserialize($json[self::FIELD_ADDRESS], $config));
        }
        if (isset($json[self::FIELD_PHYSICAL_TYPE]) || array_key_exists(self::FIELD_PHYSICAL_TYPE, $json)) {
            $type->setPhysicalType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PHYSICAL_TYPE], $config));
        }
        if (isset($json[self::FIELD_POSITION]) || array_key_exists(self::FIELD_POSITION, $json)) {
            $type->setPosition(FHIRLocationPosition::jsonUnserialize($json[self::FIELD_POSITION], $config));
        }
        if (isset($json[self::FIELD_MANAGING_ORGANIZATION]) || array_key_exists(self::FIELD_MANAGING_ORGANIZATION, $json)) {
            $type->setManagingOrganization(FHIRReference::jsonUnserialize($json[self::FIELD_MANAGING_ORGANIZATION], $config));
        }
        if (isset($json[self::FIELD_PART_OF]) || array_key_exists(self::FIELD_PART_OF, $json)) {
            $type->setPartOf(FHIRReference::jsonUnserialize($json[self::FIELD_PART_OF], $config));
        }
        if (isset($json[self::FIELD_HOURS_OF_OPERATION]) || array_key_exists(self::FIELD_HOURS_OF_OPERATION, $json)) {
            $vs = $json[self::FIELD_HOURS_OF_OPERATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addHoursOfOperation(FHIRLocationHoursOfOperation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_AVAILABILITY_EXCEPTIONS])
            || isset($json[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT])
            || array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS, $json)
            || array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABILITY_EXCEPTIONS] ?? null;
            $type->setAvailabilityExceptions(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ENDPOINT]) || array_key_exists(self::FIELD_ENDPOINT, $json)) {
            $vs = $json[self::FIELD_ENDPOINT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEndpoint(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $vals = [];
            $exts = [];
            foreach ($this->identifier as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->identifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_identifier = $exts;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->operationalStatus)) {
            $out->operationalStatus = $this->operationalStatus;
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->alias) && [] !== $this->alias) {
            $vals = [];
            $exts = [];
            foreach ($this->alias as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->alias = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_alias = $exts;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->mode)) {
            if (null !== ($val = $this->mode->getValue())) {
                $out->mode = $val;
            }
            $ext = $this->mode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_mode = $ext;
            }
        }
        if (isset($this->type) && [] !== $this->type) {
            $out->type = $this->type;
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            $vals = [];
            $exts = [];
            foreach ($this->telecom as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->telecom = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_telecom = $exts;
            }
        }
        if (isset($this->address)) {
            $out->address = $this->address;
        }
        if (isset($this->physicalType)) {
            $out->physicalType = $this->physicalType;
        }
        if (isset($this->position)) {
            $out->position = $this->position;
        }
        if (isset($this->managingOrganization)) {
            $out->managingOrganization = $this->managingOrganization;
        }
        if (isset($this->partOf)) {
            $out->partOf = $this->partOf;
        }
        if (isset($this->hoursOfOperation) && [] !== $this->hoursOfOperation) {
            $out->hoursOfOperation = $this->hoursOfOperation;
        }
        if (isset($this->availabilityExceptions)) {
            if (null !== ($val = $this->availabilityExceptions->getValue())) {
                $out->availabilityExceptions = $val;
            }
            $ext = $this->availabilityExceptions->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_availabilityExceptions = $ext;
            }
        }
        if (isset($this->endpoint) && [] !== $this->endpoint) {
            $out->endpoint = $this->endpoint;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}