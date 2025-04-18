<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationModeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained or
 * accommodated.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRLocation extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_LOCATION;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_TYPE = 'type';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PHYSICAL_TYPE = 'physicalType';
    public const FIELD_POSITION = 'position';
    public const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_MODE = 'mode';
    public const FIELD_MODE_EXT = '_mode';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    #[FHIRIdentifier]
    protected FHIRIdentifier $identifier;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $description;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact> 
     */
    #[FHIRContact]
    protected array $telecom;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress 
     */
    #[FHIRAddress]
    protected FHIRAddress $address;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $physicalType;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed in a KML compatible
     * manner (see notes below for KML).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition 
     */
    #[FHIRLocationPosition]
    protected FHIRLocationPosition $position;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is responsible for the provisioning and upkeep of the
     * location.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $managingOrganization;
    /**
     * Indicates whether the location is still in use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * active | suspended | inactive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus 
     */
    #[FHIRLocationStatus]
    protected FHIRLocationStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location which this Location is physically part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $partOf;
    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode 
     */
    #[FHIRLocationMode]
    protected FHIRLocationMode $mode;

    /* constructor.php:61 */
    /**
     * FHIRLocation Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact> $telecom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $address
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $physicalType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $managingOrganization
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $partOf
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationModeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode $mode
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $telecom = null,
                                null|FHIRAddress $address = null,
                                null|FHIRCodeableConcept $physicalType = null,
                                null|FHIRLocationPosition $position = null,
                                null|FHIRResourceReference $managingOrganization = null,
                                null|string|FHIRLocationStatusList|FHIRLocationStatus $status = null,
                                null|FHIRResourceReference $partOf = null,
                                null|string|FHIRLocationModeList|FHIRLocationMode $mode = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $type) {
            $this->setType($type);
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
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $partOf) {
            $this->setPartOf($partOf);
        }
        if (null !== $mode) {
            $this->setMode($mode);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique code or number identifying the location to its users.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of function performed at the location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact>
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $telecom
     * @return static
     */
    public function addTelecom(FHIRContact $telecom): self
    {
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contact details of communication devices available at the location. This can
     * include phone numbers, fax numbers, mobile numbers, email addresses and web
     * sites.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContact ...$telecom): self
    {
        if ([] === $telecom) {
            unset($this->telecom);
            return $this;
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress
     */
    public function getAddress(): null|FHIRAddress
    {
        return $this->address ?? null;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $address
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $physicalType
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
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed in a KML compatible
     * manner (see notes below for KML).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition(): null|FHIRLocationPosition
    {
        return $this->position ?? null;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     *
     * The absolute geographic location of the Location, expressed in a KML compatible
     * manner (see notes below for KML).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
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
     * The organization that is responsible for the provisioning and upkeep of the
     * location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getManagingOrganization(): null|FHIRResourceReference
    {
        return $this->managingOrganization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that is responsible for the provisioning and upkeep of the
     * location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $managingOrganization
     * @return static
     */
    public function setManagingOrganization(null|FHIRResourceReference $managingOrganization): self
    {
        if (null === $managingOrganization) {
            unset($this->managingOrganization);
            return $this;
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Indicates whether the location is still in use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * active | suspended | inactive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus
     */
    public function getStatus(): null|FHIRLocationStatus
    {
        return $this->status ?? null;
    }

    /**
     * Indicates whether the location is still in use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * active | suspended | inactive.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRLocationStatusList|FHIRLocationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRLocationStatus)) {
            $status = new FHIRLocationStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location which this Location is physically part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getPartOf(): null|FHIRResourceReference
    {
        return $this->partOf ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another Location which this Location is physically part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $partOf
     * @return static
     */
    public function setPartOf(null|FHIRResourceReference $partOf): self
    {
        if (null === $partOf) {
            unset($this->partOf);
            return $this;
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode
     */
    public function getMode(): null|FHIRLocationMode
    {
        return $this->mode ?? null;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class
     * of locations
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether a resource instance represents a specific location or a class
     * of locations.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationModeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode $mode
     * @return static
     */
    public function setMode(null|string|FHIRLocationModeList|FHIRLocationMode $mode): self
    {
        if (null === $mode) {
            unset($this->mode);
            return $this;
        }
        if (!($mode instanceof FHIRLocationMode)) {
            $mode = new FHIRLocationMode(value: $mode);
        }
        $this->mode = $mode;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation
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
            if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TELECOM === $cen) {
                $type->addTelecom(FHIRContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS === $cen) {
                $type->setAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHYSICAL_TYPE === $cen) {
                $type->setPhysicalType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POSITION === $cen) {
                $type->setPosition(FHIRLocationPosition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGING_ORGANIZATION === $cen) {
                $type->setManagingOrganization(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRLocationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_OF === $cen) {
                $type->setPartOf(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODE === $cen) {
                $type->setMode(FHIRLocationMode::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MODE])) {
            if (isset($type->mode)) {
                $type->mode->setValue((string)$attributes[self::FIELD_MODE]);
            } else {
                $type->setMode((string)$attributes[self::FIELD_MODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->mode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MODE]) {
            $xw->writeAttribute(self::FIELD_MODE, $this->mode->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->telecom)) {
            foreach ($this->telecom as $v) {
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
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->partOf)) {
            $xw->startElement(self::FIELD_PART_OF);
            $this->partOf->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->mode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MODE]
                || $this->mode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MODE);
            $this->mode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MODE]);
            $xw->endElement();
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_array($decoded->identifier)) {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->identifier), $config));
            } else {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize($decoded->identifier, $config));
            }
        }
        if (isset($decoded->name)
            || isset($decoded->_name)
            || property_exists($decoded, self::FIELD_NAME)
            || property_exists($decoded, self::FIELD_NAME_EXT)) {
            $v = $decoded->_name ?? new \stdClass();
            $v->value = $decoded->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->telecom) || property_exists($decoded, self::FIELD_TELECOM)) {
            if (is_object($decoded->telecom)) {
                $vals = [$decoded->telecom];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TELECOM, true);
            } else {
                $vals = $decoded->telecom;
            }
            foreach($vals as $v) {
                $type->addTelecom(FHIRContact::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->address) || property_exists($decoded, self::FIELD_ADDRESS)) {
            if (is_array($decoded->address)) {
                $type->setAddress(FHIRAddress::jsonUnserialize(reset($decoded->address), $config));
            } else {
                $type->setAddress(FHIRAddress::jsonUnserialize($decoded->address, $config));
            }
        }
        if (isset($decoded->physicalType) || property_exists($decoded, self::FIELD_PHYSICAL_TYPE)) {
            if (is_array($decoded->physicalType)) {
                $type->setPhysicalType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->physicalType), $config));
            } else {
                $type->setPhysicalType(FHIRCodeableConcept::jsonUnserialize($decoded->physicalType, $config));
            }
        }
        if (isset($decoded->position) || property_exists($decoded, self::FIELD_POSITION)) {
            if (is_array($decoded->position)) {
                $type->setPosition(FHIRLocationPosition::jsonUnserialize(reset($decoded->position), $config));
            } else {
                $type->setPosition(FHIRLocationPosition::jsonUnserialize($decoded->position, $config));
            }
        }
        if (isset($decoded->managingOrganization) || property_exists($decoded, self::FIELD_MANAGING_ORGANIZATION)) {
            if (is_array($decoded->managingOrganization)) {
                $type->setManagingOrganization(FHIRResourceReference::jsonUnserialize(reset($decoded->managingOrganization), $config));
            } else {
                $type->setManagingOrganization(FHIRResourceReference::jsonUnserialize($decoded->managingOrganization, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRLocationStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->partOf) || property_exists($decoded, self::FIELD_PART_OF)) {
            if (is_array($decoded->partOf)) {
                $type->setPartOf(FHIRResourceReference::jsonUnserialize(reset($decoded->partOf), $config));
            } else {
                $type->setPartOf(FHIRResourceReference::jsonUnserialize($decoded->partOf, $config));
            }
        }
        if (isset($decoded->mode)
            || isset($decoded->_mode)
            || property_exists($decoded, self::FIELD_MODE)
            || property_exists($decoded, self::FIELD_MODE_EXT)) {
            $v = $decoded->_mode ?? new \stdClass();
            $v->value = $decoded->mode ?? null;
            $type->setMode(FHIRLocationMode::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TELECOM) && 1 === count($this->telecom)) {
                $out->telecom = $this->telecom[0];
            } else {
                $out->telecom = $this->telecom;
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
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->partOf)) {
            $out->partOf = $this->partOf;
        }
        if (isset($this->mode)) {
            if (null !== ($val = $this->mode->getValue())) {
                $out->mode = $val;
            }
            if ($this->mode->_nonValueFieldDefined()) {
                $ext = $this->mode->jsonSerialize();
                unset($ext->value);
                $out->_mode = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}