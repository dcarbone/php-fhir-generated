<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A type of a manufactured item that is used in the provision of healthcare
 * without being substantially changed through that activity. The device may be a
 * medical or non-medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDevice
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDevice extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_DEFINITION = 'definition';
    const FIELD_UDI_CARRIER = 'udiCarrier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_DISTINCT_IDENTIFIER = 'distinctIdentifier';
    const FIELD_DISTINCT_IDENTIFIER_EXT = '_distinctIdentifier';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_MANUFACTURER_EXT = '_manufacturer';
    const FIELD_MANUFACTURE_DATE = 'manufactureDate';
    const FIELD_MANUFACTURE_DATE_EXT = '_manufactureDate';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_SERIAL_NUMBER = 'serialNumber';
    const FIELD_SERIAL_NUMBER_EXT = '_serialNumber';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_MODEL_NUMBER = 'modelNumber';
    const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    const FIELD_PART_NUMBER = 'partNumber';
    const FIELD_PART_NUMBER_EXT = '_partNumber';
    const FIELD_TYPE = 'type';
    const FIELD_SPECIALIZATION = 'specialization';
    const FIELD_VERSION = 'version';
    const FIELD_PROPERTY = 'property';
    const FIELD_PATIENT = 'patient';
    const FIELD_OWNER = 'owner';
    const FIELD_CONTACT = 'contact';
    const FIELD_LOCATION = 'location';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_NOTE = 'note';
    const FIELD_SAFETY = 'safety';
    const FIELD_PARENT = 'parent';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $definition = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[]
     */
    protected null|array $udiCarrier = [];
    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus
     */
    protected null|FHIRFHIRDeviceStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $statusReason = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $distinctIdentifier = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $manufacturer = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $manufactureDate = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $expirationDate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $lotNumber = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $serialNumber = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[]
     */
    protected null|array $deviceName = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $modelNumber = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $partNumber = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[]
     */
    protected null|array $specialization = [];
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
     */
    protected null|array $version = [];
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[]
     */
    protected null|array $property = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $owner = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    protected null|array $contact = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $safety = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $parent = null;

    /**
     * Validation map for fields in type Device
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRDevice Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION, $data)) {
            if ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->setDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_UDI_CARRIER, $data)) {
            if (is_array($data[self::FIELD_UDI_CARRIER])) {
                foreach($data[self::FIELD_UDI_CARRIER] as $v) {
                    if ($v instanceof FHIRDeviceUdiCarrier) {
                        $this->addUdiCarrier($v);
                    } else {
                        $this->addUdiCarrier(new FHIRDeviceUdiCarrier($v));
                    }
                }
            } elseif ($data[self::FIELD_UDI_CARRIER] instanceof FHIRDeviceUdiCarrier) {
                $this->addUdiCarrier($data[self::FIELD_UDI_CARRIER]);
            } else {
                $this->addUdiCarrier(new FHIRDeviceUdiCarrier($data[self::FIELD_UDI_CARRIER]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRDeviceStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFHIRDeviceStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFHIRDeviceStatus([FHIRFHIRDeviceStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRFHIRDeviceStatus($ext));
            } else {
                $this->setStatus(new FHIRFHIRDeviceStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS_REASON, $data)) {
            if (is_array($data[self::FIELD_STATUS_REASON])) {
                foreach($data[self::FIELD_STATUS_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addStatusReason($v);
                    } else {
                        $this->addStatusReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->addStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->addStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (array_key_exists(self::FIELD_DISTINCT_IDENTIFIER, $data) || array_key_exists(self::FIELD_DISTINCT_IDENTIFIER_EXT, $data)) {
            $value = $data[self::FIELD_DISTINCT_IDENTIFIER] ?? null;
            $ext = (isset($data[self::FIELD_DISTINCT_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DISTINCT_IDENTIFIER_EXT])) ? $data[self::FIELD_DISTINCT_IDENTIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDistinctIdentifier($value);
                } else if (is_array($value)) {
                    $this->setDistinctIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDistinctIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDistinctIdentifier(new FHIRString($ext));
            } else {
                $this->setDistinctIdentifier(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURER, $data) || array_key_exists(self::FIELD_MANUFACTURER_EXT, $data)) {
            $value = $data[self::FIELD_MANUFACTURER] ?? null;
            $ext = (isset($data[self::FIELD_MANUFACTURER_EXT]) && is_array($data[self::FIELD_MANUFACTURER_EXT])) ? $data[self::FIELD_MANUFACTURER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setManufacturer($value);
                } else if (is_array($value)) {
                    $this->setManufacturer(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setManufacturer(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setManufacturer(new FHIRString($ext));
            } else {
                $this->setManufacturer(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURE_DATE, $data) || array_key_exists(self::FIELD_MANUFACTURE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_MANUFACTURE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_MANUFACTURE_DATE_EXT]) && is_array($data[self::FIELD_MANUFACTURE_DATE_EXT])) ? $data[self::FIELD_MANUFACTURE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setManufactureDate($value);
                } else if (is_array($value)) {
                    $this->setManufactureDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setManufactureDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setManufactureDate(new FHIRDateTime($ext));
            } else {
                $this->setManufactureDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_EXPIRATION_DATE, $data) || array_key_exists(self::FIELD_EXPIRATION_DATE_EXT, $data)) {
            $value = $data[self::FIELD_EXPIRATION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT])) ? $data[self::FIELD_EXPIRATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setExpirationDate($value);
                } else if (is_array($value)) {
                    $this->setExpirationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setExpirationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpirationDate(new FHIRDateTime($ext));
            } else {
                $this->setExpirationDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_LOT_NUMBER, $data) || array_key_exists(self::FIELD_LOT_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_LOT_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT])) ? $data[self::FIELD_LOT_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLotNumber($value);
                } else if (is_array($value)) {
                    $this->setLotNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLotNumber(new FHIRString($ext));
            } else {
                $this->setLotNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SERIAL_NUMBER, $data) || array_key_exists(self::FIELD_SERIAL_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_SERIAL_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_SERIAL_NUMBER_EXT]) && is_array($data[self::FIELD_SERIAL_NUMBER_EXT])) ? $data[self::FIELD_SERIAL_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSerialNumber($value);
                } else if (is_array($value)) {
                    $this->setSerialNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSerialNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSerialNumber(new FHIRString($ext));
            } else {
                $this->setSerialNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_NAME, $data)) {
            if (is_array($data[self::FIELD_DEVICE_NAME])) {
                foreach($data[self::FIELD_DEVICE_NAME] as $v) {
                    if ($v instanceof FHIRDeviceDeviceName) {
                        $this->addDeviceName($v);
                    } else {
                        $this->addDeviceName(new FHIRDeviceDeviceName($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE_NAME] instanceof FHIRDeviceDeviceName) {
                $this->addDeviceName($data[self::FIELD_DEVICE_NAME]);
            } else {
                $this->addDeviceName(new FHIRDeviceDeviceName($data[self::FIELD_DEVICE_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_MODEL_NUMBER, $data) || array_key_exists(self::FIELD_MODEL_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_MODEL_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_MODEL_NUMBER_EXT]) && is_array($data[self::FIELD_MODEL_NUMBER_EXT])) ? $data[self::FIELD_MODEL_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setModelNumber($value);
                } else if (is_array($value)) {
                    $this->setModelNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setModelNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setModelNumber(new FHIRString($ext));
            } else {
                $this->setModelNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PART_NUMBER, $data) || array_key_exists(self::FIELD_PART_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_PART_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_PART_NUMBER_EXT]) && is_array($data[self::FIELD_PART_NUMBER_EXT])) ? $data[self::FIELD_PART_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPartNumber($value);
                } else if (is_array($value)) {
                    $this->setPartNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPartNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPartNumber(new FHIRString($ext));
            } else {
                $this->setPartNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIALIZATION, $data)) {
            if (is_array($data[self::FIELD_SPECIALIZATION])) {
                foreach($data[self::FIELD_SPECIALIZATION] as $v) {
                    if ($v instanceof FHIRDeviceSpecialization) {
                        $this->addSpecialization($v);
                    } else {
                        $this->addSpecialization(new FHIRDeviceSpecialization($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIALIZATION] instanceof FHIRDeviceSpecialization) {
                $this->addSpecialization($data[self::FIELD_SPECIALIZATION]);
            } else {
                $this->addSpecialization(new FHIRDeviceSpecialization($data[self::FIELD_SPECIALIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data)) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if ($v instanceof FHIRDeviceVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRDeviceVersion($v));
                    }
                }
            } elseif ($data[self::FIELD_VERSION] instanceof FHIRDeviceVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRDeviceVersion($data[self::FIELD_VERSION]));
            }
        }
        if (array_key_exists(self::FIELD_PROPERTY, $data)) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRDeviceProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRDeviceProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRDeviceProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRDeviceProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_OWNER, $data)) {
            if ($data[self::FIELD_OWNER] instanceof FHIRReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRReference($data[self::FIELD_OWNER]));
            }
        }
        if (array_key_exists(self::FIELD_CONTACT, $data)) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactPoint) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactPoint($data[self::FIELD_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_URL, $data) || array_key_exists(self::FIELD_URL_EXT, $data)) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            } else {
                $this->setUrl(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_SAFETY, $data)) {
            if (is_array($data[self::FIELD_SAFETY])) {
                foreach($data[self::FIELD_SAFETY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSafety($v);
                    } else {
                        $this->addSafety(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SAFETY] instanceof FHIRCodeableConcept) {
                $this->addSafety($data[self::FIELD_SAFETY]);
            } else {
                $this->addSafety(new FHIRCodeableConcept($data[self::FIELD_SAFETY]));
            }
        }
        if (array_key_exists(self::FIELD_PARENT, $data)) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDefinition(): null|FHIRReference
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function setDefinition(null|FHIRReference $definition = null): self
    {
        if (null === $definition) {
            $definition = new FHIRReference();
        }
        $this->_trackValueSet($this->definition, $definition);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[]
     */
    public function getUdiCarrier(): null|array
    {
        return $this->udiCarrier;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $udiCarrier
     * @return static
     */
    public function addUdiCarrier(null|FHIRDeviceUdiCarrier $udiCarrier = null): self
    {
        if (null === $udiCarrier) {
            $udiCarrier = new FHIRDeviceUdiCarrier();
        }
        $this->_trackValueAdded();
        $this->udiCarrier[] = $udiCarrier;
        return $this;
    }

    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus(): null|FHIRFHIRDeviceStatus
    {
        return $this->status;
    }

    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus $status
     * @return static
     */
    public function setStatus(null|FHIRFHIRDeviceStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRFHIRDeviceStatus();
        }
        $this->_trackValueSet($this->status, $status);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason(): null|array
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function addStatusReason(null|FHIRCodeableConcept $statusReason = null): self
    {
        if (null === $statusReason) {
            $statusReason = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->statusReason[] = $statusReason;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDistinctIdentifier(): null|FHIRString
    {
        return $this->distinctIdentifier;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $distinctIdentifier
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDistinctIdentifier(null|string|FHIRStringPrimitive|FHIRString $distinctIdentifier = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $distinctIdentifier && !($distinctIdentifier instanceof FHIRString)) {
            $distinctIdentifier = new FHIRString($distinctIdentifier);
        }
        $this->_trackValueSet($this->distinctIdentifier, $distinctIdentifier);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DISTINCT_IDENTIFIER])) {
            $this->_primitiveXmlLocations[self::FIELD_DISTINCT_IDENTIFIER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DISTINCT_IDENTIFIER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getManufacturer(): null|FHIRString
    {
        return $this->manufacturer;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $manufacturer
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setManufacturer(null|string|FHIRStringPrimitive|FHIRString $manufacturer = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $manufacturer && !($manufacturer instanceof FHIRString)) {
            $manufacturer = new FHIRString($manufacturer);
        }
        $this->_trackValueSet($this->manufacturer, $manufacturer);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MANUFACTURER])) {
            $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate(): null|FHIRDateTime
    {
        return $this->manufactureDate;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $manufactureDate
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setManufactureDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $manufactureDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $manufactureDate && !($manufactureDate instanceof FHIRDateTime)) {
            $manufactureDate = new FHIRDateTime($manufactureDate);
        }
        $this->_trackValueSet($this->manufactureDate, $manufactureDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MANUFACTURE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_MANUFACTURE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MANUFACTURE_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate(): null|FHIRDateTime
    {
        return $this->expirationDate;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $expirationDate
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $expirationDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $expirationDate && !($expirationDate instanceof FHIRDateTime)) {
            $expirationDate = new FHIRDateTime($expirationDate);
        }
        $this->_trackValueSet($this->expirationDate, $expirationDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXPIRATION_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_EXPIRATION_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXPIRATION_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getLotNumber(): null|FHIRString
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $lotNumber
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLotNumber(null|string|FHIRStringPrimitive|FHIRString $lotNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $lotNumber && !($lotNumber instanceof FHIRString)) {
            $lotNumber = new FHIRString($lotNumber);
        }
        $this->_trackValueSet($this->lotNumber, $lotNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LOT_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_LOT_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LOT_NUMBER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSerialNumber(): null|FHIRString
    {
        return $this->serialNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $serialNumber
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSerialNumber(null|string|FHIRStringPrimitive|FHIRString $serialNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $serialNumber && !($serialNumber instanceof FHIRString)) {
            $serialNumber = new FHIRString($serialNumber);
        }
        $this->_trackValueSet($this->serialNumber, $serialNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SERIAL_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_SERIAL_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SERIAL_NUMBER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[]
     */
    public function getDeviceName(): null|array
    {
        return $this->deviceName;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName $deviceName
     * @return static
     */
    public function addDeviceName(null|FHIRDeviceDeviceName $deviceName = null): self
    {
        if (null === $deviceName) {
            $deviceName = new FHIRDeviceDeviceName();
        }
        $this->_trackValueAdded();
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getModelNumber(): null|FHIRString
    {
        return $this->modelNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $modelNumber
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setModelNumber(null|string|FHIRStringPrimitive|FHIRString $modelNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $modelNumber && !($modelNumber instanceof FHIRString)) {
            $modelNumber = new FHIRString($modelNumber);
        }
        $this->_trackValueSet($this->modelNumber, $modelNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPartNumber(): null|FHIRString
    {
        return $this->partNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $partNumber
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPartNumber(null|string|FHIRStringPrimitive|FHIRString $partNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $partNumber && !($partNumber instanceof FHIRString)) {
            $partNumber = new FHIRString($partNumber);
        }
        $this->_trackValueSet($this->partNumber, $partNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PART_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[]
     */
    public function getSpecialization(): null|array
    {
        return $this->specialization;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization $specialization
     * @return static
     */
    public function addSpecialization(null|FHIRDeviceSpecialization $specialization = null): self
    {
        if (null === $specialization) {
            $specialization = new FHIRDeviceSpecialization();
        }
        $this->_trackValueAdded();
        $this->specialization[] = $specialization;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
     */
    public function getVersion(): null|array
    {
        return $this->version;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion $version
     * @return static
     */
    public function addVersion(null|FHIRDeviceVersion $version = null): self
    {
        if (null === $version) {
            $version = new FHIRDeviceVersion();
        }
        $this->_trackValueAdded();
        $this->version[] = $version;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty $property
     * @return static
     */
    public function addProperty(null|FHIRDeviceProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRDeviceProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getOwner(): null|FHIRReference
    {
        return $this->owner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $owner
     * @return static
     */
    public function setOwner(null|FHIRReference $owner = null): self
    {
        if (null === $owner) {
            $owner = new FHIRReference();
        }
        $this->_trackValueSet($this->owner, $owner);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $contact
     * @return static
     */
    public function addContact(null|FHIRContactPoint $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactPoint();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_URL])) {
            $this->_primitiveXmlLocations[self::FIELD_URL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_URL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSafety(): null|array
    {
        return $this->safety;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $safety
     * @return static
     */
    public function addSafety(null|FHIRCodeableConcept $safety = null): self
    {
        if (null === $safety) {
            $safety = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->safety[] = $safety;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getParent(): null|FHIRReference
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $parent
     * @return static
     */
    public function setParent(null|FHIRReference $parent = null): self
    {
        if (null === $parent) {
            $parent = new FHIRReference();
        }
        $this->_trackValueSet($this->parent, $parent);
        $this->parent = $parent;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UDI_CARRIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATUS_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISTINCT_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufactureDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPIRATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLotNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOT_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSerialNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIAL_NUMBER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODEL_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPartNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIALIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOwner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OWNER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SAFETY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getParent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI_CARRIER])) {
            $v = $this->getUdiCarrier();
            foreach($validationRules[self::FIELD_UDI_CARRIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_UDI_CARRIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI_CARRIER])) {
                        $errs[self::FIELD_UDI_CARRIER] = [];
                    }
                    $errs[self::FIELD_UDI_CARRIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISTINCT_IDENTIFIER])) {
            $v = $this->getDistinctIdentifier();
            foreach($validationRules[self::FIELD_DISTINCT_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_DISTINCT_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISTINCT_IDENTIFIER])) {
                        $errs[self::FIELD_DISTINCT_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DISTINCT_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURE_DATE])) {
            $v = $this->getManufactureDate();
            foreach($validationRules[self::FIELD_MANUFACTURE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_MANUFACTURE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURE_DATE])) {
                        $errs[self::FIELD_MANUFACTURE_DATE] = [];
                    }
                    $errs[self::FIELD_MANUFACTURE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOT_NUMBER])) {
            $v = $this->getLotNumber();
            foreach($validationRules[self::FIELD_LOT_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_LOT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOT_NUMBER])) {
                        $errs[self::FIELD_LOT_NUMBER] = [];
                    }
                    $errs[self::FIELD_LOT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIAL_NUMBER])) {
            $v = $this->getSerialNumber();
            foreach($validationRules[self::FIELD_SERIAL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_SERIAL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIAL_NUMBER])) {
                        $errs[self::FIELD_SERIAL_NUMBER] = [];
                    }
                    $errs[self::FIELD_SERIAL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
            $v = $this->getDeviceName();
            foreach($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_DEVICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_NAME])) {
                        $errs[self::FIELD_DEVICE_NAME] = [];
                    }
                    $errs[self::FIELD_DEVICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODEL_NUMBER])) {
            $v = $this->getModelNumber();
            foreach($validationRules[self::FIELD_MODEL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_MODEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODEL_NUMBER])) {
                        $errs[self::FIELD_MODEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_MODEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_NUMBER])) {
            $v = $this->getPartNumber();
            foreach($validationRules[self::FIELD_PART_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_PART_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_NUMBER])) {
                        $errs[self::FIELD_PART_NUMBER] = [];
                    }
                    $errs[self::FIELD_PART_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIALIZATION])) {
            $v = $this->getSpecialization();
            foreach($validationRules[self::FIELD_SPECIALIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_SPECIALIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIALIZATION])) {
                        $errs[self::FIELD_SPECIALIZATION] = [];
                    }
                    $errs[self::FIELD_SPECIALIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OWNER])) {
            $v = $this->getOwner();
            foreach($validationRules[self::FIELD_OWNER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_OWNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OWNER])) {
                        $errs[self::FIELD_OWNER] = [];
                    }
                    $errs[self::FIELD_OWNER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SAFETY])) {
            $v = $this->getSafety();
            foreach($validationRules[self::FIELD_SAFETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_SAFETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SAFETY])) {
                        $errs[self::FIELD_SAFETY] = [];
                    }
                    $errs[self::FIELD_SAFETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRDevice)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION === $childName) {
                $type->setDefinition(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_UDI_CARRIER === $childName) {
                $type->addUdiCarrier(FHIRDeviceUdiCarrier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRFHIRDeviceStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS_REASON === $childName) {
                $type->addStatusReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DISTINCT_IDENTIFIER === $childName) {
                $type->setDistinctIdentifier(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MANUFACTURER === $childName) {
                $type->setManufacturer(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MANUFACTURE_DATE === $childName) {
                $type->setManufactureDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXPIRATION_DATE === $childName) {
                $type->setExpirationDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LOT_NUMBER === $childName) {
                $type->setLotNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERIAL_NUMBER === $childName) {
                $type->setSerialNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEVICE_NAME === $childName) {
                $type->addDeviceName(FHIRDeviceDeviceName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODEL_NUMBER === $childName) {
                $type->setModelNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PART_NUMBER === $childName) {
                $type->setPartNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIALIZATION === $childName) {
                $type->addSpecialization(FHIRDeviceSpecialization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERSION === $childName) {
                $type->addVersion(FHIRDeviceVersion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROPERTY === $childName) {
                $type->addProperty(FHIRDeviceProperty::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OWNER === $childName) {
                $type->setOwner(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SAFETY === $childName) {
                $type->addSafety(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARENT === $childName) {
                $type->setParent(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DISTINCT_IDENTIFIER])) {
            $pt = $type->getDistinctIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DISTINCT_IDENTIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDistinctIdentifier((string)$attributes[self::FIELD_DISTINCT_IDENTIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MANUFACTURER])) {
            $pt = $type->getManufacturer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MANUFACTURER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setManufacturer((string)$attributes[self::FIELD_MANUFACTURER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MANUFACTURE_DATE])) {
            $pt = $type->getManufactureDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MANUFACTURE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setManufactureDate((string)$attributes[self::FIELD_MANUFACTURE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXPIRATION_DATE])) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPIRATION_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpirationDate((string)$attributes[self::FIELD_EXPIRATION_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LOT_NUMBER])) {
            $pt = $type->getLotNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LOT_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLotNumber((string)$attributes[self::FIELD_LOT_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERIAL_NUMBER])) {
            $pt = $type->getSerialNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIAL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSerialNumber((string)$attributes[self::FIELD_SERIAL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MODEL_NUMBER])) {
            $pt = $type->getModelNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MODEL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setModelNumber((string)$attributes[self::FIELD_MODEL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PART_NUMBER])) {
            $pt = $type->getPartNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PART_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPartNumber((string)$attributes[self::FIELD_PART_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Device', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DISTINCT_IDENTIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDistinctIdentifier())) {
            $xw->writeAttribute(self::FIELD_DISTINCT_IDENTIFIER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getManufacturer())) {
            $xw->writeAttribute(self::FIELD_MANUFACTURER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getManufactureDate())) {
            $xw->writeAttribute(self::FIELD_MANUFACTURE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPIRATION_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExpirationDate())) {
            $xw->writeAttribute(self::FIELD_EXPIRATION_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOT_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLotNumber())) {
            $xw->writeAttribute(self::FIELD_LOT_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIAL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSerialNumber())) {
            $xw->writeAttribute(self::FIELD_SERIAL_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getModelNumber())) {
            $xw->writeAttribute(self::FIELD_MODEL_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPartNumber())) {
            $xw->writeAttribute(self::FIELD_PART_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinition())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUdiCarrier() as $v) {
            $xw->startElement(self::FIELD_UDI_CARRIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStatusReason() as $v) {
            $xw->startElement(self::FIELD_STATUS_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DISTINCT_IDENTIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDistinctIdentifier())) {
            $xw->startElement(self::FIELD_DISTINCT_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getManufacturer())) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getManufactureDate())) {
            $xw->startElement(self::FIELD_MANUFACTURE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPIRATION_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExpirationDate())) {
            $xw->startElement(self::FIELD_EXPIRATION_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOT_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLotNumber())) {
            $xw->startElement(self::FIELD_LOT_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIAL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSerialNumber())) {
            $xw->startElement(self::FIELD_SERIAL_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDeviceName() as $v) {
            $xw->startElement(self::FIELD_DEVICE_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getModelNumber())) {
            $xw->startElement(self::FIELD_MODEL_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPartNumber())) {
            $xw->startElement(self::FIELD_PART_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpecialization() as $v) {
            $xw->startElement(self::FIELD_SPECIALIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getVersion() as $v) {
            $xw->startElement(self::FIELD_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProperty() as $v) {
            $xw->startElement(self::FIELD_PROPERTY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOwner())) {
            $xw->startElement(self::FIELD_OWNER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContact() as $v) {
            $xw->startElement(self::FIELD_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSafety() as $v) {
            $xw->startElement(self::FIELD_SAFETY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParent())) {
            $xw->startElement(self::FIELD_PARENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $out->{self::FIELD_DEFINITION} = $v;
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            $out->{self::FIELD_UDI_CARRIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_UDI_CARRIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRFHIRDeviceStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            $out->{self::FIELD_STATUS_REASON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STATUS_REASON}[] = $v;
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DISTINCT_IDENTIFIER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DISTINCT_IDENTIFIER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MANUFACTURER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MANUFACTURER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getManufactureDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MANUFACTURE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MANUFACTURE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPIRATION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPIRATION_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLotNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOT_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOT_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSerialNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIAL_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIAL_NUMBER_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            $out->{self::FIELD_DEVICE_NAME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DEVICE_NAME}[] = $v;
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODEL_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODEL_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPartNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PART_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PART_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            $out->{self::FIELD_SPECIALIZATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPECIALIZATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            $out->{self::FIELD_VERSION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VERSION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $out->{self::FIELD_OWNER} = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            $out->{self::FIELD_SAFETY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SAFETY}[] = $v;
            }
        }
        if (null !== ($v = $this->getParent())) {
            $out->{self::FIELD_PARENT} = $v;
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}