<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 04:06+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFHIRDeviceStatusList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRDeviceStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A type of a manufactured item that is used in the provision of healthcare
 * without being substantially changed through that activity. The device may be a
 * medical or non-medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRDevice extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_UDI_CARRIER = 'udiCarrier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_STATUS_REASON = 'statusReason';
    public const FIELD_DISTINCT_IDENTIFIER = 'distinctIdentifier';
    public const FIELD_DISTINCT_IDENTIFIER_EXT = '_distinctIdentifier';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MANUFACTURER_EXT = '_manufacturer';
    public const FIELD_MANUFACTURE_DATE = 'manufactureDate';
    public const FIELD_MANUFACTURE_DATE_EXT = '_manufactureDate';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    public const FIELD_LOT_NUMBER = 'lotNumber';
    public const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SERIAL_NUMBER_EXT = '_serialNumber';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_MODEL_NUMBER = 'modelNumber';
    public const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    public const FIELD_PART_NUMBER = 'partNumber';
    public const FIELD_PART_NUMBER_EXT = '_partNumber';
    public const FIELD_TYPE = 'type';
    public const FIELD_SPECIALIZATION = 'specialization';
    public const FIELD_VERSION = 'version';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_OWNER = 'owner';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_LOCATION = 'location';
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_NOTE = 'note';
    public const FIELD_SAFETY = 'safety';
    public const FIELD_PARENT = 'parent';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISTINCT_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MANUFACTURER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MANUFACTURE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPIRATION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LOT_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SERIAL_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MODEL_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PART_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $definition;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[] 
     */
    protected array $udiCarrier;
    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRDeviceStatus 
     */
    protected FHIRFHIRDeviceStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $statusReason;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $distinctIdentifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $manufacturer;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $manufactureDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $expirationDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $lotNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $serialNumber;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * This represents the manufacturer's name of the device as provided by the device,
     * from a UDI label, or by a person describing the Device. This typically would be
     * used when a person provides the name(s) or when the device represents one of the
     * names available from DeviceDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[] 
     */
    protected array $deviceName;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $modelNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $partNumber;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[] 
     */
    protected array $specialization;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[] 
     */
    protected array $version;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[] 
     */
    protected array $property;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $owner;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint[] 
     */
    protected array $contact;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $safety;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $parent;

    /* constructor.php:61 */
    /**
     * FHIRDevice Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[] $udiCarrier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFHIRDeviceStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRDeviceStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $statusReason
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $distinctIdentifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $manufacturer
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $manufactureDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $expirationDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $lotNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $serialNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[] $deviceName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $modelNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $partNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[] $specialization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[] $version
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $owner
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint[] $contact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $location
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $safety
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $parent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRReference $definition = null,
                                null|iterable $udiCarrier = null,
                                null|string|FHIRFHIRDeviceStatusList|FHIRFHIRDeviceStatus $status = null,
                                null|iterable $statusReason = null,
                                null|string|FHIRStringPrimitive|FHIRString $distinctIdentifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $manufacturer = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $manufactureDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $expirationDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $lotNumber = null,
                                null|string|FHIRStringPrimitive|FHIRString $serialNumber = null,
                                null|iterable $deviceName = null,
                                null|string|FHIRStringPrimitive|FHIRString $modelNumber = null,
                                null|string|FHIRStringPrimitive|FHIRString $partNumber = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $specialization = null,
                                null|iterable $version = null,
                                null|iterable $property = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $owner = null,
                                null|iterable $contact = null,
                                null|FHIRReference $location = null,
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|iterable $note = null,
                                null|iterable $safety = null,
                                null|FHIRReference $parent = null,
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
        if (null !== $definition) {
            $this->setDefinition($definition);
        }
        if (null !== $udiCarrier) {
            $this->setUdiCarrier(...$udiCarrier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusReason) {
            $this->setStatusReason(...$statusReason);
        }
        if (null !== $distinctIdentifier) {
            $this->setDistinctIdentifier($distinctIdentifier);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer($manufacturer);
        }
        if (null !== $manufactureDate) {
            $this->setManufactureDate($manufactureDate);
        }
        if (null !== $expirationDate) {
            $this->setExpirationDate($expirationDate);
        }
        if (null !== $lotNumber) {
            $this->setLotNumber($lotNumber);
        }
        if (null !== $serialNumber) {
            $this->setSerialNumber($serialNumber);
        }
        if (null !== $deviceName) {
            $this->setDeviceName(...$deviceName);
        }
        if (null !== $modelNumber) {
            $this->setModelNumber($modelNumber);
        }
        if (null !== $partNumber) {
            $this->setPartNumber($partNumber);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $specialization) {
            $this->setSpecialization(...$specialization);
        }
        if (null !== $version) {
            $this->setVersion(...$version);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $owner) {
            $this->setOwner($owner);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $safety) {
            $this->setSafety(...$safety);
        }
        if (null !== $parent) {
            $this->setParent($parent);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:158 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
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
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
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
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDefinition(): null|FHIRReference
    {
        return $this->definition ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function setDefinition(null|FHIRReference $definition): self
    {
        if (null === $definition) {
            unset($this->definition);
            return $this;
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[]
     */
    public function getUdiCarrier(): array
    {
        return $this->udiCarrier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier>
     */
    public function getUdiCarrierIterator(): iterable
    {
        if (!isset($this->udiCarrier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->udiCarrier);
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $udiCarrier
     * @return static
     */
    public function addUdiCarrier(FHIRDeviceUdiCarrier $udiCarrier): self
    {
        if (!isset($this->udiCarrier)) {
            $this->udiCarrier = [];
        }
        $this->udiCarrier[] = $udiCarrier;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier ...$udiCarrier
     * @return static
     */
    public function setUdiCarrier(FHIRDeviceUdiCarrier ...$udiCarrier): self
    {
        if ([] === $udiCarrier) {
            unset($this->udiCarrier);
            return $this;
        }
        $this->udiCarrier = $udiCarrier;
        return $this;
    }

    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus(): null|FHIRFHIRDeviceStatus
    {
        return $this->status ?? null;
    }

    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFHIRDeviceStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRDeviceStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRFHIRDeviceStatusList|FHIRFHIRDeviceStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRFHIRDeviceStatus)) {
            $status = new FHIRFHIRDeviceStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason(): array
    {
        return $this->statusReason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getStatusReasonIterator(): iterable
    {
        if (!isset($this->statusReason)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->statusReason);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function addStatusReason(FHIRCodeableConcept $statusReason): self
    {
        if (!isset($this->statusReason)) {
            $this->statusReason = [];
        }
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$statusReason
     * @return static
     */
    public function setStatusReason(FHIRCodeableConcept ...$statusReason): self
    {
        if ([] === $statusReason) {
            unset($this->statusReason);
            return $this;
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDistinctIdentifier(): null|FHIRString
    {
        return $this->distinctIdentifier ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $distinctIdentifier
     * @return static
     */
    public function setDistinctIdentifier(null|string|FHIRStringPrimitive|FHIRString $distinctIdentifier): self
    {
        if (null === $distinctIdentifier) {
            unset($this->distinctIdentifier);
            return $this;
        }
        if (!($distinctIdentifier instanceof FHIRString)) {
            $distinctIdentifier = new FHIRString(value: $distinctIdentifier);
        }
        $this->distinctIdentifier = $distinctIdentifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getManufacturer(): null|FHIRString
    {
        return $this->manufacturer ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $manufacturer
     * @return static
     */
    public function setManufacturer(null|string|FHIRStringPrimitive|FHIRString $manufacturer): self
    {
        if (null === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        if (!($manufacturer instanceof FHIRString)) {
            $manufacturer = new FHIRString(value: $manufacturer);
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate(): null|FHIRDateTime
    {
        return $this->manufactureDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $manufactureDate
     * @return static
     */
    public function setManufactureDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $manufactureDate): self
    {
        if (null === $manufactureDate) {
            unset($this->manufactureDate);
            return $this;
        }
        if (!($manufactureDate instanceof FHIRDateTime)) {
            $manufactureDate = new FHIRDateTime(value: $manufactureDate);
        }
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate(): null|FHIRDateTime
    {
        return $this->expirationDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $expirationDate
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $expirationDate): self
    {
        if (null === $expirationDate) {
            unset($this->expirationDate);
            return $this;
        }
        if (!($expirationDate instanceof FHIRDateTime)) {
            $expirationDate = new FHIRDateTime(value: $expirationDate);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getLotNumber(): null|FHIRString
    {
        return $this->lotNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $lotNumber
     * @return static
     */
    public function setLotNumber(null|string|FHIRStringPrimitive|FHIRString $lotNumber): self
    {
        if (null === $lotNumber) {
            unset($this->lotNumber);
            return $this;
        }
        if (!($lotNumber instanceof FHIRString)) {
            $lotNumber = new FHIRString(value: $lotNumber);
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getSerialNumber(): null|FHIRString
    {
        return $this->serialNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $serialNumber
     * @return static
     */
    public function setSerialNumber(null|string|FHIRStringPrimitive|FHIRString $serialNumber): self
    {
        if (null === $serialNumber) {
            unset($this->serialNumber);
            return $this;
        }
        if (!($serialNumber instanceof FHIRString)) {
            $serialNumber = new FHIRString(value: $serialNumber);
        }
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * This represents the manufacturer's name of the device as provided by the device,
     * from a UDI label, or by a person describing the Device. This typically would be
     * used when a person provides the name(s) or when the device represents one of the
     * names available from DeviceDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[]
     */
    public function getDeviceName(): array
    {
        return $this->deviceName ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName>
     */
    public function getDeviceNameIterator(): iterable
    {
        if (!isset($this->deviceName)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->deviceName);
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * This represents the manufacturer's name of the device as provided by the device,
     * from a UDI label, or by a person describing the Device. This typically would be
     * used when a person provides the name(s) or when the device represents one of the
     * names available from DeviceDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName $deviceName
     * @return static
     */
    public function addDeviceName(FHIRDeviceDeviceName $deviceName): self
    {
        if (!isset($this->deviceName)) {
            $this->deviceName = [];
        }
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * This represents the manufacturer's name of the device as provided by the device,
     * from a UDI label, or by a person describing the Device. This typically would be
     * used when a person provides the name(s) or when the device represents one of the
     * names available from DeviceDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName ...$deviceName
     * @return static
     */
    public function setDeviceName(FHIRDeviceDeviceName ...$deviceName): self
    {
        if ([] === $deviceName) {
            unset($this->deviceName);
            return $this;
        }
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getModelNumber(): null|FHIRString
    {
        return $this->modelNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $modelNumber
     * @return static
     */
    public function setModelNumber(null|string|FHIRStringPrimitive|FHIRString $modelNumber): self
    {
        if (null === $modelNumber) {
            unset($this->modelNumber);
            return $this;
        }
        if (!($modelNumber instanceof FHIRString)) {
            $modelNumber = new FHIRString(value: $modelNumber);
        }
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPartNumber(): null|FHIRString
    {
        return $this->partNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $partNumber
     * @return static
     */
    public function setPartNumber(null|string|FHIRStringPrimitive|FHIRString $partNumber): self
    {
        if (null === $partNumber) {
            unset($this->partNumber);
            return $this;
        }
        if (!($partNumber instanceof FHIRString)) {
            $partNumber = new FHIRString(value: $partNumber);
        }
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * The kind or type of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
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
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[]
     */
    public function getSpecialization(): array
    {
        return $this->specialization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization>
     */
    public function getSpecializationIterator(): iterable
    {
        if (!isset($this->specialization)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specialization);
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization $specialization
     * @return static
     */
    public function addSpecialization(FHIRDeviceSpecialization $specialization): self
    {
        if (!isset($this->specialization)) {
            $this->specialization = [];
        }
        $this->specialization[] = $specialization;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization ...$specialization
     * @return static
     */
    public function setSpecialization(FHIRDeviceSpecialization ...$specialization): self
    {
        if ([] === $specialization) {
            unset($this->specialization);
            return $this;
        }
        $this->specialization = $specialization;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
     */
    public function getVersion(): array
    {
        return $this->version ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion>
     */
    public function getVersionIterator(): iterable
    {
        if (!isset($this->version)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->version);
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion $version
     * @return static
     */
    public function addVersion(FHIRDeviceVersion $version): self
    {
        if (!isset($this->version)) {
            $this->version = [];
        }
        $this->version[] = $version;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion ...$version
     * @return static
     */
    public function setVersion(FHIRDeviceVersion ...$version): self
    {
        if ([] === $version) {
            unset($this->version);
            return $this;
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty $property
     * @return static
     */
    public function addProperty(FHIRDeviceProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty ...$property
     * @return static
     */
    public function setProperty(FHIRDeviceProperty ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getOwner(): null|FHIRReference
    {
        return $this->owner ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $owner
     * @return static
     */
    public function setOwner(null|FHIRReference $owner): self
    {
        if (null === $owner) {
            unset($this->owner);
            return $this;
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint[]
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint $contact
     * @return static
     */
    public function addContact(FHIRContactPoint $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint ...$contact
     * @return static
     */
    public function setContact(FHIRContactPoint ...$contact): self
    {
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSafety(): array
    {
        return $this->safety ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSafetyIterator(): iterable
    {
        if (!isset($this->safety)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->safety);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $safety
     * @return static
     */
    public function addSafety(FHIRCodeableConcept $safety): self
    {
        if (!isset($this->safety)) {
            $this->safety = [];
        }
        $this->safety[] = $safety;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$safety
     * @return static
     */
    public function setSafety(FHIRCodeableConcept ...$safety): self
    {
        if ([] === $safety) {
            unset($this->safety);
            return $this;
        }
        $this->safety = $safety;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getParent(): null|FHIRReference
    {
        return $this->parent ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $parent
     * @return static
     */
    public function setParent(null|FHIRReference $parent): self
    {
        if (null === $parent) {
            unset($this->parent);
            return $this;
        }
        $this->parent = $parent;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDevice)) {
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
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->setDefinition(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UDI_CARRIER === $cen) {
                $type->addUdiCarrier(FHIRDeviceUdiCarrier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRFHIRDeviceStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_REASON === $cen) {
                $type->addStatusReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISTINCT_IDENTIFIER === $cen) {
                $type->setDistinctIdentifier(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->setManufacturer(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURE_DATE === $cen) {
                $type->setManufactureDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPIRATION_DATE === $cen) {
                $type->setExpirationDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOT_NUMBER === $cen) {
                $type->setLotNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERIAL_NUMBER === $cen) {
                $type->setSerialNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE_NAME === $cen) {
                $type->addDeviceName(FHIRDeviceDeviceName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODEL_NUMBER === $cen) {
                $type->setModelNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_NUMBER === $cen) {
                $type->setPartNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIALIZATION === $cen) {
                $type->addSpecialization(FHIRDeviceSpecialization::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->addVersion(FHIRDeviceVersion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRDeviceProperty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OWNER === $cen) {
                $type->setOwner(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_URL === $cen) {
                $type->setUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SAFETY === $cen) {
                $type->addSafety(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARENT === $cen) {
                $type->setParent(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISTINCT_IDENTIFIER])) {
            if (isset($type->distinctIdentifier)) {
                $type->distinctIdentifier->setValue((string)$attributes[self::FIELD_DISTINCT_IDENTIFIER]);
            } else {
                $type->setDistinctIdentifier((string)$attributes[self::FIELD_DISTINCT_IDENTIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISTINCT_IDENTIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MANUFACTURER])) {
            if (isset($type->manufacturer)) {
                $type->manufacturer->setValue((string)$attributes[self::FIELD_MANUFACTURER]);
            } else {
                $type->setManufacturer((string)$attributes[self::FIELD_MANUFACTURER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MANUFACTURER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MANUFACTURE_DATE])) {
            if (isset($type->manufactureDate)) {
                $type->manufactureDate->setValue((string)$attributes[self::FIELD_MANUFACTURE_DATE]);
            } else {
                $type->setManufactureDate((string)$attributes[self::FIELD_MANUFACTURE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MANUFACTURE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXPIRATION_DATE])) {
            if (isset($type->expirationDate)) {
                $type->expirationDate->setValue((string)$attributes[self::FIELD_EXPIRATION_DATE]);
            } else {
                $type->setExpirationDate((string)$attributes[self::FIELD_EXPIRATION_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXPIRATION_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOT_NUMBER])) {
            if (isset($type->lotNumber)) {
                $type->lotNumber->setValue((string)$attributes[self::FIELD_LOT_NUMBER]);
            } else {
                $type->setLotNumber((string)$attributes[self::FIELD_LOT_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LOT_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SERIAL_NUMBER])) {
            if (isset($type->serialNumber)) {
                $type->serialNumber->setValue((string)$attributes[self::FIELD_SERIAL_NUMBER]);
            } else {
                $type->setSerialNumber((string)$attributes[self::FIELD_SERIAL_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SERIAL_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MODEL_NUMBER])) {
            if (isset($type->modelNumber)) {
                $type->modelNumber->setValue((string)$attributes[self::FIELD_MODEL_NUMBER]);
            } else {
                $type->setModelNumber((string)$attributes[self::FIELD_MODEL_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MODEL_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PART_NUMBER])) {
            if (isset($type->partNumber)) {
                $type->partNumber->setValue((string)$attributes[self::FIELD_PART_NUMBER]);
            } else {
                $type->setPartNumber((string)$attributes[self::FIELD_PART_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PART_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Device', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->distinctIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISTINCT_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_DISTINCT_IDENTIFIER, $this->distinctIdentifier->_getValueAsString());
        }
        if (isset($this->manufacturer) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MANUFACTURER]) {
            $xw->writeAttribute(self::FIELD_MANUFACTURER, $this->manufacturer->_getValueAsString());
        }
        if (isset($this->manufactureDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MANUFACTURE_DATE]) {
            $xw->writeAttribute(self::FIELD_MANUFACTURE_DATE, $this->manufactureDate->_getValueAsString());
        }
        if (isset($this->expirationDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]) {
            $xw->writeAttribute(self::FIELD_EXPIRATION_DATE, $this->expirationDate->_getValueAsString());
        }
        if (isset($this->lotNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOT_NUMBER]) {
            $xw->writeAttribute(self::FIELD_LOT_NUMBER, $this->lotNumber->_getValueAsString());
        }
        if (isset($this->serialNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERIAL_NUMBER]) {
            $xw->writeAttribute(self::FIELD_SERIAL_NUMBER, $this->serialNumber->_getValueAsString());
        }
        if (isset($this->modelNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MODEL_NUMBER]) {
            $xw->writeAttribute(self::FIELD_MODEL_NUMBER, $this->modelNumber->_getValueAsString());
        }
        if (isset($this->partNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PART_NUMBER]) {
            $xw->writeAttribute(self::FIELD_PART_NUMBER, $this->partNumber->_getValueAsString());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->definition)) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->udiCarrier)) {
            foreach ($this->udiCarrier as $v) {
                $xw->startElement(self::FIELD_UDI_CARRIER);
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
        if (isset($this->statusReason)) {
            foreach ($this->statusReason as $v) {
                $xw->startElement(self::FIELD_STATUS_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->distinctIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISTINCT_IDENTIFIER]
                || $this->distinctIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISTINCT_IDENTIFIER);
            $this->distinctIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISTINCT_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->manufacturer)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MANUFACTURER]
                || $this->manufacturer->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $this->manufacturer->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MANUFACTURER]);
            $xw->endElement();
        }
        if (isset($this->manufactureDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MANUFACTURE_DATE]
                || $this->manufactureDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MANUFACTURE_DATE);
            $this->manufactureDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MANUFACTURE_DATE]);
            $xw->endElement();
        }
        if (isset($this->expirationDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]
                || $this->expirationDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXPIRATION_DATE);
            $this->expirationDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXPIRATION_DATE]);
            $xw->endElement();
        }
        if (isset($this->lotNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOT_NUMBER]
                || $this->lotNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOT_NUMBER);
            $this->lotNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOT_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->serialNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERIAL_NUMBER]
                || $this->serialNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERIAL_NUMBER);
            $this->serialNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERIAL_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->deviceName)) {
            foreach ($this->deviceName as $v) {
                $xw->startElement(self::FIELD_DEVICE_NAME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modelNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MODEL_NUMBER]
                || $this->modelNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MODEL_NUMBER);
            $this->modelNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MODEL_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->partNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PART_NUMBER]
                || $this->partNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PART_NUMBER);
            $this->partNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PART_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specialization)) {
            foreach ($this->specialization as $v) {
                $xw->startElement(self::FIELD_SPECIALIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->version)) {
            foreach ($this->version as $v) {
                $xw->startElement(self::FIELD_VERSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->owner)) {
            $xw->startElement(self::FIELD_OWNER);
            $this->owner->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->url)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_URL]
                || $this->url->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_URL]);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->safety)) {
            foreach ($this->safety as $v) {
                $xw->startElement(self::FIELD_SAFETY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->parent)) {
            $xw->startElement(self::FIELD_PARENT);
            $this->parent->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDevice)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->definition) || property_exists($json, self::FIELD_DEFINITION)) {
            if (is_array($json->definition)) {
                $type->setDefinition(FHIRReference::jsonUnserialize(reset($json->definition), $config));
            } else {
                $type->setDefinition(FHIRReference::jsonUnserialize($json->definition, $config));
            }
        }
        if (isset($json->udiCarrier) || property_exists($json, self::FIELD_UDI_CARRIER)) {
            if (is_object($json->udiCarrier)) {
                $vals = [$json->udiCarrier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_UDI_CARRIER, true);
            } else {
                $vals = $json->udiCarrier;
            }
            foreach($vals as $v) {
                $type->addUdiCarrier(FHIRDeviceUdiCarrier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRFHIRDeviceStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->statusReason) || property_exists($json, self::FIELD_STATUS_REASON)) {
            if (is_object($json->statusReason)) {
                $vals = [$json->statusReason];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STATUS_REASON, true);
            } else {
                $vals = $json->statusReason;
            }
            foreach($vals as $v) {
                $type->addStatusReason(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->distinctIdentifier)
            || isset($json->_distinctIdentifier)
            || property_exists($json, self::FIELD_DISTINCT_IDENTIFIER)
            || property_exists($json, self::FIELD_DISTINCT_IDENTIFIER_EXT)) {
            $v = $json->_distinctIdentifier ?? new \stdClass();
            $v->value = $json->distinctIdentifier ?? null;
            $type->setDistinctIdentifier(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->manufacturer)
            || isset($json->_manufacturer)
            || property_exists($json, self::FIELD_MANUFACTURER)
            || property_exists($json, self::FIELD_MANUFACTURER_EXT)) {
            $v = $json->_manufacturer ?? new \stdClass();
            $v->value = $json->manufacturer ?? null;
            $type->setManufacturer(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->manufactureDate)
            || isset($json->_manufactureDate)
            || property_exists($json, self::FIELD_MANUFACTURE_DATE)
            || property_exists($json, self::FIELD_MANUFACTURE_DATE_EXT)) {
            $v = $json->_manufactureDate ?? new \stdClass();
            $v->value = $json->manufactureDate ?? null;
            $type->setManufactureDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->expirationDate)
            || isset($json->_expirationDate)
            || property_exists($json, self::FIELD_EXPIRATION_DATE)
            || property_exists($json, self::FIELD_EXPIRATION_DATE_EXT)) {
            $v = $json->_expirationDate ?? new \stdClass();
            $v->value = $json->expirationDate ?? null;
            $type->setExpirationDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->lotNumber)
            || isset($json->_lotNumber)
            || property_exists($json, self::FIELD_LOT_NUMBER)
            || property_exists($json, self::FIELD_LOT_NUMBER_EXT)) {
            $v = $json->_lotNumber ?? new \stdClass();
            $v->value = $json->lotNumber ?? null;
            $type->setLotNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->serialNumber)
            || isset($json->_serialNumber)
            || property_exists($json, self::FIELD_SERIAL_NUMBER)
            || property_exists($json, self::FIELD_SERIAL_NUMBER_EXT)) {
            $v = $json->_serialNumber ?? new \stdClass();
            $v->value = $json->serialNumber ?? null;
            $type->setSerialNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->deviceName) || property_exists($json, self::FIELD_DEVICE_NAME)) {
            if (is_object($json->deviceName)) {
                $vals = [$json->deviceName];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEVICE_NAME, true);
            } else {
                $vals = $json->deviceName;
            }
            foreach($vals as $v) {
                $type->addDeviceName(FHIRDeviceDeviceName::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->modelNumber)
            || isset($json->_modelNumber)
            || property_exists($json, self::FIELD_MODEL_NUMBER)
            || property_exists($json, self::FIELD_MODEL_NUMBER_EXT)) {
            $v = $json->_modelNumber ?? new \stdClass();
            $v->value = $json->modelNumber ?? null;
            $type->setModelNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->partNumber)
            || isset($json->_partNumber)
            || property_exists($json, self::FIELD_PART_NUMBER)
            || property_exists($json, self::FIELD_PART_NUMBER_EXT)) {
            $v = $json->_partNumber ?? new \stdClass();
            $v->value = $json->partNumber ?? null;
            $type->setPartNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->specialization) || property_exists($json, self::FIELD_SPECIALIZATION)) {
            if (is_object($json->specialization)) {
                $vals = [$json->specialization];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPECIALIZATION, true);
            } else {
                $vals = $json->specialization;
            }
            foreach($vals as $v) {
                $type->addSpecialization(FHIRDeviceSpecialization::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->version) || property_exists($json, self::FIELD_VERSION)) {
            if (is_object($json->version)) {
                $vals = [$json->version];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VERSION, true);
            } else {
                $vals = $json->version;
            }
            foreach($vals as $v) {
                $type->addVersion(FHIRDeviceVersion::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->property) || property_exists($json, self::FIELD_PROPERTY)) {
            if (is_object($json->property)) {
                $vals = [$json->property];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROPERTY, true);
            } else {
                $vals = $json->property;
            }
            foreach($vals as $v) {
                $type->addProperty(FHIRDeviceProperty::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->owner) || property_exists($json, self::FIELD_OWNER)) {
            if (is_array($json->owner)) {
                $type->setOwner(FHIRReference::jsonUnserialize(reset($json->owner), $config));
            } else {
                $type->setOwner(FHIRReference::jsonUnserialize($json->owner, $config));
            }
        }
        if (isset($json->contact) || property_exists($json, self::FIELD_CONTACT)) {
            if (is_object($json->contact)) {
                $vals = [$json->contact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTACT, true);
            } else {
                $vals = $json->contact;
            }
            foreach($vals as $v) {
                $type->addContact(FHIRContactPoint::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->location) || property_exists($json, self::FIELD_LOCATION)) {
            if (is_array($json->location)) {
                $type->setLocation(FHIRReference::jsonUnserialize(reset($json->location), $config));
            } else {
                $type->setLocation(FHIRReference::jsonUnserialize($json->location, $config));
            }
        }
        if (isset($json->url)
            || isset($json->_url)
            || property_exists($json, self::FIELD_URL)
            || property_exists($json, self::FIELD_URL_EXT)) {
            $v = $json->_url ?? new \stdClass();
            $v->value = $json->url ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->note) || property_exists($json, self::FIELD_NOTE)) {
            if (is_object($json->note)) {
                $vals = [$json->note];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_NOTE, true);
            } else {
                $vals = $json->note;
            }
            foreach($vals as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->safety) || property_exists($json, self::FIELD_SAFETY)) {
            if (is_object($json->safety)) {
                $vals = [$json->safety];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SAFETY, true);
            } else {
                $vals = $json->safety;
            }
            foreach($vals as $v) {
                $type->addSafety(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->parent) || property_exists($json, self::FIELD_PARENT)) {
            if (is_array($json->parent)) {
                $type->setParent(FHIRReference::jsonUnserialize(reset($json->parent), $config));
            } else {
                $type->setParent(FHIRReference::jsonUnserialize($json->parent, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->definition)) {
            $out->definition = $this->definition;
        }
        if (isset($this->udiCarrier) && [] !== $this->udiCarrier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_UDI_CARRIER) && 1 === count($this->udiCarrier)) {
                $out->udiCarrier = $this->udiCarrier[0];
            } else {
                $out->udiCarrier = $this->udiCarrier;
            }
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
        if (isset($this->statusReason) && [] !== $this->statusReason) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STATUS_REASON) && 1 === count($this->statusReason)) {
                $out->statusReason = $this->statusReason[0];
            } else {
                $out->statusReason = $this->statusReason;
            }
        }
        if (isset($this->distinctIdentifier)) {
            if (null !== ($val = $this->distinctIdentifier->getValue())) {
                $out->distinctIdentifier = $val;
            }
            if ($this->distinctIdentifier->_nonValueFieldDefined()) {
                $ext = $this->distinctIdentifier->jsonSerialize();
                unset($ext->value);
                $out->_distinctIdentifier = $ext;
            }
        }
        if (isset($this->manufacturer)) {
            if (null !== ($val = $this->manufacturer->getValue())) {
                $out->manufacturer = $val;
            }
            if ($this->manufacturer->_nonValueFieldDefined()) {
                $ext = $this->manufacturer->jsonSerialize();
                unset($ext->value);
                $out->_manufacturer = $ext;
            }
        }
        if (isset($this->manufactureDate)) {
            if (null !== ($val = $this->manufactureDate->getValue())) {
                $out->manufactureDate = $val;
            }
            if ($this->manufactureDate->_nonValueFieldDefined()) {
                $ext = $this->manufactureDate->jsonSerialize();
                unset($ext->value);
                $out->_manufactureDate = $ext;
            }
        }
        if (isset($this->expirationDate)) {
            if (null !== ($val = $this->expirationDate->getValue())) {
                $out->expirationDate = $val;
            }
            if ($this->expirationDate->_nonValueFieldDefined()) {
                $ext = $this->expirationDate->jsonSerialize();
                unset($ext->value);
                $out->_expirationDate = $ext;
            }
        }
        if (isset($this->lotNumber)) {
            if (null !== ($val = $this->lotNumber->getValue())) {
                $out->lotNumber = $val;
            }
            if ($this->lotNumber->_nonValueFieldDefined()) {
                $ext = $this->lotNumber->jsonSerialize();
                unset($ext->value);
                $out->_lotNumber = $ext;
            }
        }
        if (isset($this->serialNumber)) {
            if (null !== ($val = $this->serialNumber->getValue())) {
                $out->serialNumber = $val;
            }
            if ($this->serialNumber->_nonValueFieldDefined()) {
                $ext = $this->serialNumber->jsonSerialize();
                unset($ext->value);
                $out->_serialNumber = $ext;
            }
        }
        if (isset($this->deviceName) && [] !== $this->deviceName) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEVICE_NAME) && 1 === count($this->deviceName)) {
                $out->deviceName = $this->deviceName[0];
            } else {
                $out->deviceName = $this->deviceName;
            }
        }
        if (isset($this->modelNumber)) {
            if (null !== ($val = $this->modelNumber->getValue())) {
                $out->modelNumber = $val;
            }
            if ($this->modelNumber->_nonValueFieldDefined()) {
                $ext = $this->modelNumber->jsonSerialize();
                unset($ext->value);
                $out->_modelNumber = $ext;
            }
        }
        if (isset($this->partNumber)) {
            if (null !== ($val = $this->partNumber->getValue())) {
                $out->partNumber = $val;
            }
            if ($this->partNumber->_nonValueFieldDefined()) {
                $ext = $this->partNumber->jsonSerialize();
                unset($ext->value);
                $out->_partNumber = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->specialization) && [] !== $this->specialization) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPECIALIZATION) && 1 === count($this->specialization)) {
                $out->specialization = $this->specialization[0];
            } else {
                $out->specialization = $this->specialization;
            }
        }
        if (isset($this->version) && [] !== $this->version) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VERSION) && 1 === count($this->version)) {
                $out->version = $this->version[0];
            } else {
                $out->version = $this->version;
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROPERTY) && 1 === count($this->property)) {
                $out->property = $this->property[0];
            } else {
                $out->property = $this->property;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->owner)) {
            $out->owner = $this->owner;
        }
        if (isset($this->contact) && [] !== $this->contact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTACT) && 1 === count($this->contact)) {
                $out->contact = $this->contact[0];
            } else {
                $out->contact = $this->contact;
            }
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            if ($this->url->_nonValueFieldDefined()) {
                $ext = $this->url->jsonSerialize();
                unset($ext->value);
                $out->_url = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_NOTE) && 1 === count($this->note)) {
                $out->note = $this->note[0];
            } else {
                $out->note = $this->note;
            }
        }
        if (isset($this->safety) && [] !== $this->safety) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SAFETY) && 1 === count($this->safety)) {
                $out->safety = $this->safety[0];
            } else {
                $out->safety = $this->safety;
            }
        }
        if (isset($this->parent)) {
            $out->parent = $this->parent;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}