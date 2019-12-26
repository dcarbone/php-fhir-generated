<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_CONTACT = 'contact';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_DISTINCT_IDENTIFIER = 'distinctIdentifier';
    const FIELD_DISTINCT_IDENTIFIER_EXT = '_distinctIdentifier';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_MANUFACTURE_DATE = 'manufactureDate';
    const FIELD_MANUFACTURE_DATE_EXT = '_manufactureDate';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_MANUFACTURER_EXT = '_manufacturer';
    const FIELD_MODEL_NUMBER = 'modelNumber';
    const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    const FIELD_NOTE = 'note';
    const FIELD_OWNER = 'owner';
    const FIELD_PARENT = 'parent';
    const FIELD_PART_NUMBER = 'partNumber';
    const FIELD_PART_NUMBER_EXT = '_partNumber';
    const FIELD_PATIENT = 'patient';
    const FIELD_PROPERTY = 'property';
    const FIELD_SAFETY = 'safety';
    const FIELD_SERIAL_NUMBER = 'serialNumber';
    const FIELD_SERIAL_NUMBER_EXT = '_serialNumber';
    const FIELD_SPECIALIZATION = 'specialization';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_TYPE = 'type';
    const FIELD_UDI_CARRIER = 'udiCarrier';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
    protected $contact = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $definition = null;

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
    protected $deviceName = [];

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
    protected $distinctIdentifier = null;

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
    protected $expirationDate = null;

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
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $lotNumber = null;

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
    protected $manufactureDate = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $manufacturer = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $modelNumber = null;

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
    protected $note = [];

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
    protected $owner = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $parent = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $partNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

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
    protected $property = [];

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
    protected $safety = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $serialNumber = null;

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
    protected $specialization = [];

    /**
     * The availability status of the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the Device availability.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRDeviceStatus
     */
    protected $status = null;

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
    protected $statusReason = [];

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
    protected $type = null;

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
    protected $udiCarrier = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
     */
    protected $version = [];

    /**
     * Validation map for fields in type Device
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDevice Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactPoint) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactPoint($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRContactPoint) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactPoint($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            if ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->setDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_DEVICE_NAME])) {
            if (is_array($data[self::FIELD_DEVICE_NAME])) {
                foreach($data[self::FIELD_DEVICE_NAME] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDeviceDeviceName) {
                        $this->addDeviceName($v);
                    } else {
                        $this->addDeviceName(new FHIRDeviceDeviceName($v));
                    }
                }
            } else if ($data[self::FIELD_DEVICE_NAME] instanceof FHIRDeviceDeviceName) {
                $this->addDeviceName($data[self::FIELD_DEVICE_NAME]);
            } else {
                $this->addDeviceName(new FHIRDeviceDeviceName($data[self::FIELD_DEVICE_NAME]));
            }
        }
        if (isset($data[self::FIELD_DISTINCT_IDENTIFIER]) || isset($data[self::FIELD_DISTINCT_IDENTIFIER_EXT])) {
            if (isset($data[self::FIELD_DISTINCT_IDENTIFIER])) {
                $value = $data[self::FIELD_DISTINCT_IDENTIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DISTINCT_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DISTINCT_IDENTIFIER_EXT])) {
                $ext = $data[self::FIELD_DISTINCT_IDENTIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDistinctIdentifier($value);
                } else if (is_array($value)) {
                    $this->setDistinctIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDistinctIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDistinctIdentifier(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE]) || isset($data[self::FIELD_EXPIRATION_DATE_EXT])) {
            if (isset($data[self::FIELD_EXPIRATION_DATE])) {
                $value = $data[self::FIELD_EXPIRATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT])) {
                $ext = $data[self::FIELD_EXPIRATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setExpirationDate($value);
                } else if (is_array($value)) {
                    $this->setExpirationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setExpirationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExpirationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_LOT_NUMBER]) || isset($data[self::FIELD_LOT_NUMBER_EXT])) {
            if (isset($data[self::FIELD_LOT_NUMBER])) {
                $value = $data[self::FIELD_LOT_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT])) {
                $ext = $data[self::FIELD_LOT_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLotNumber($value);
                } else if (is_array($value)) {
                    $this->setLotNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLotNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURE_DATE]) || isset($data[self::FIELD_MANUFACTURE_DATE_EXT])) {
            if (isset($data[self::FIELD_MANUFACTURE_DATE])) {
                $value = $data[self::FIELD_MANUFACTURE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MANUFACTURE_DATE_EXT]) && is_array($data[self::FIELD_MANUFACTURE_DATE_EXT])) {
                $ext = $data[self::FIELD_MANUFACTURE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setManufactureDate($value);
                } else if (is_array($value)) {
                    $this->setManufactureDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setManufactureDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setManufactureDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER]) || isset($data[self::FIELD_MANUFACTURER_EXT])) {
            if (isset($data[self::FIELD_MANUFACTURER])) {
                $value = $data[self::FIELD_MANUFACTURER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MANUFACTURER_EXT]) && is_array($data[self::FIELD_MANUFACTURER_EXT])) {
                $ext = $data[self::FIELD_MANUFACTURER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setManufacturer($value);
                } else if (is_array($value)) {
                    $this->setManufacturer(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setManufacturer(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setManufacturer(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MODEL_NUMBER]) || isset($data[self::FIELD_MODEL_NUMBER_EXT])) {
            if (isset($data[self::FIELD_MODEL_NUMBER])) {
                $value = $data[self::FIELD_MODEL_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MODEL_NUMBER_EXT]) && is_array($data[self::FIELD_MODEL_NUMBER_EXT])) {
                $ext = $data[self::FIELD_MODEL_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setModelNumber($value);
                } else if (is_array($value)) {
                    $this->setModelNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setModelNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setModelNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_OWNER])) {
            if ($data[self::FIELD_OWNER] instanceof FHIRReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRReference($data[self::FIELD_OWNER]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_PART_NUMBER]) || isset($data[self::FIELD_PART_NUMBER_EXT])) {
            if (isset($data[self::FIELD_PART_NUMBER])) {
                $value = $data[self::FIELD_PART_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PART_NUMBER_EXT]) && is_array($data[self::FIELD_PART_NUMBER_EXT])) {
                $ext = $data[self::FIELD_PART_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPartNumber($value);
                } else if (is_array($value)) {
                    $this->setPartNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPartNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPartNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDeviceProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRDeviceProperty($v));
                    }
                }
            } else if ($data[self::FIELD_PROPERTY] instanceof FHIRDeviceProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRDeviceProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_SAFETY])) {
            if (is_array($data[self::FIELD_SAFETY])) {
                foreach($data[self::FIELD_SAFETY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSafety($v);
                    } else {
                        $this->addSafety(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SAFETY] instanceof FHIRCodeableConcept) {
                $this->addSafety($data[self::FIELD_SAFETY]);
            } else {
                $this->addSafety(new FHIRCodeableConcept($data[self::FIELD_SAFETY]));
            }
        }
        if (isset($data[self::FIELD_SERIAL_NUMBER]) || isset($data[self::FIELD_SERIAL_NUMBER_EXT])) {
            if (isset($data[self::FIELD_SERIAL_NUMBER])) {
                $value = $data[self::FIELD_SERIAL_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SERIAL_NUMBER_EXT]) && is_array($data[self::FIELD_SERIAL_NUMBER_EXT])) {
                $ext = $data[self::FIELD_SERIAL_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSerialNumber($value);
                } else if (is_array($value)) {
                    $this->setSerialNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSerialNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSerialNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SPECIALIZATION])) {
            if (is_array($data[self::FIELD_SPECIALIZATION])) {
                foreach($data[self::FIELD_SPECIALIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDeviceSpecialization) {
                        $this->addSpecialization($v);
                    } else {
                        $this->addSpecialization(new FHIRDeviceSpecialization($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIALIZATION] instanceof FHIRDeviceSpecialization) {
                $this->addSpecialization($data[self::FIELD_SPECIALIZATION]);
            } else {
                $this->addSpecialization(new FHIRDeviceSpecialization($data[self::FIELD_SPECIALIZATION]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRFHIRDeviceStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFHIRDeviceStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFHIRDeviceStatus([FHIRFHIRDeviceStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRFHIRDeviceStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if (is_array($data[self::FIELD_STATUS_REASON])) {
                foreach($data[self::FIELD_STATUS_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addStatusReason($v);
                    } else {
                        $this->addStatusReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->addStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->addStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UDI_CARRIER])) {
            if (is_array($data[self::FIELD_UDI_CARRIER])) {
                foreach($data[self::FIELD_UDI_CARRIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDeviceUdiCarrier) {
                        $this->addUdiCarrier($v);
                    } else {
                        $this->addUdiCarrier(new FHIRDeviceUdiCarrier($v));
                    }
                }
            } else if ($data[self::FIELD_UDI_CARRIER] instanceof FHIRDeviceUdiCarrier) {
                $this->addUdiCarrier($data[self::FIELD_UDI_CARRIER]);
            } else {
                $this->addUdiCarrier(new FHIRDeviceUdiCarrier($data[self::FIELD_UDI_CARRIER]));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDeviceVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRDeviceVersion($v));
                    }
                }
            } else if ($data[self::FIELD_VERSION] instanceof FHIRDeviceVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRDeviceVersion($data[self::FIELD_VERSION]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Device{$xmlns}></Device>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
    public function getContact()
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
    public function addContact(FHIRContactPoint $contact = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactPoint($v));
            }
        }
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
    public function getDefinition()
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
    public function setDefinition(FHIRReference $definition = null)
    {
        $this->definition = $definition;
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
    public function getDeviceName()
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
    public function addDeviceName(FHIRDeviceDeviceName $deviceName = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[] $deviceName
     * @return static
     */
    public function setDeviceName(array $deviceName = [])
    {
        $this->deviceName = [];
        if ([] === $deviceName) {
            return $this;
        }
        foreach($deviceName as $v) {
            if ($v instanceof FHIRDeviceDeviceName) {
                $this->addDeviceName($v);
            } else {
                $this->addDeviceName(new FHIRDeviceDeviceName($v));
            }
        }
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
    public function getDistinctIdentifier()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $distinctIdentifier
     * @return static
     */
    public function setDistinctIdentifier($distinctIdentifier = null)
    {
        if (null === $distinctIdentifier) {
            $this->distinctIdentifier = null;
            return $this;
        }
        if ($distinctIdentifier instanceof FHIRString) {
            $this->distinctIdentifier = $distinctIdentifier;
            return $this;
        }
        $this->distinctIdentifier = new FHIRString($distinctIdentifier);
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
    public function getExpirationDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $expirationDate
     * @return static
     */
    public function setExpirationDate($expirationDate = null)
    {
        if (null === $expirationDate) {
            $this->expirationDate = null;
            return $this;
        }
        if ($expirationDate instanceof FHIRDateTime) {
            $this->expirationDate = $expirationDate;
            return $this;
        }
        $this->expirationDate = new FHIRDateTime($expirationDate);
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation()
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
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
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
    public function getLotNumber()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $lotNumber
     * @return static
     */
    public function setLotNumber($lotNumber = null)
    {
        if (null === $lotNumber) {
            $this->lotNumber = null;
            return $this;
        }
        if ($lotNumber instanceof FHIRString) {
            $this->lotNumber = $lotNumber;
            return $this;
        }
        $this->lotNumber = new FHIRString($lotNumber);
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
    public function getManufactureDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $manufactureDate
     * @return static
     */
    public function setManufactureDate($manufactureDate = null)
    {
        if (null === $manufactureDate) {
            $this->manufactureDate = null;
            return $this;
        }
        if ($manufactureDate instanceof FHIRDateTime) {
            $this->manufactureDate = $manufactureDate;
            return $this;
        }
        $this->manufactureDate = new FHIRDateTime($manufactureDate);
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
    public function getManufacturer()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $manufacturer
     * @return static
     */
    public function setManufacturer($manufacturer = null)
    {
        if (null === $manufacturer) {
            $this->manufacturer = null;
            return $this;
        }
        if ($manufacturer instanceof FHIRString) {
            $this->manufacturer = $manufacturer;
            return $this;
        }
        $this->manufacturer = new FHIRString($manufacturer);
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
    public function getModelNumber()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $modelNumber
     * @return static
     */
    public function setModelNumber($modelNumber = null)
    {
        if (null === $modelNumber) {
            $this->modelNumber = null;
            return $this;
        }
        if ($modelNumber instanceof FHIRString) {
            $this->modelNumber = $modelNumber;
            return $this;
        }
        $this->modelNumber = new FHIRString($modelNumber);
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
    public function getNote()
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
    public function addNote(FHIRAnnotation $note = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
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
    public function getOwner()
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
    public function setOwner(FHIRReference $owner = null)
    {
        $this->owner = $owner;
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
    public function getParent()
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
    public function setParent(FHIRReference $parent = null)
    {
        $this->parent = $parent;
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
    public function getPartNumber()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $partNumber
     * @return static
     */
    public function setPartNumber($partNumber = null)
    {
        if (null === $partNumber) {
            $this->partNumber = null;
            return $this;
        }
        if ($partNumber instanceof FHIRString) {
            $this->partNumber = $partNumber;
            return $this;
        }
        $this->partNumber = new FHIRString($partNumber);
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
    public function getPatient()
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
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
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
    public function getProperty()
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
    public function addProperty(FHIRDeviceProperty $property = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[] $property
     * @return static
     */
    public function setProperty(array $property = [])
    {
        $this->property = [];
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRDeviceProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRDeviceProperty($v));
            }
        }
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
    public function getSafety()
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
    public function addSafety(FHIRCodeableConcept $safety = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $safety
     * @return static
     */
    public function setSafety(array $safety = [])
    {
        $this->safety = [];
        if ([] === $safety) {
            return $this;
        }
        foreach($safety as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSafety($v);
            } else {
                $this->addSafety(new FHIRCodeableConcept($v));
            }
        }
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
    public function getSerialNumber()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $serialNumber
     * @return static
     */
    public function setSerialNumber($serialNumber = null)
    {
        if (null === $serialNumber) {
            $this->serialNumber = null;
            return $this;
        }
        if ($serialNumber instanceof FHIRString) {
            $this->serialNumber = $serialNumber;
            return $this;
        }
        $this->serialNumber = new FHIRString($serialNumber);
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
    public function getSpecialization()
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
    public function addSpecialization(FHIRDeviceSpecialization $specialization = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[] $specialization
     * @return static
     */
    public function setSpecialization(array $specialization = [])
    {
        $this->specialization = [];
        if ([] === $specialization) {
            return $this;
        }
        foreach($specialization as $v) {
            if ($v instanceof FHIRDeviceSpecialization) {
                $this->addSpecialization($v);
            } else {
                $this->addSpecialization(new FHIRDeviceSpecialization($v));
            }
        }
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
    public function getStatus()
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
    public function setStatus(FHIRFHIRDeviceStatus $status = null)
    {
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
    public function getStatusReason()
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
    public function addStatusReason(FHIRCodeableConcept $statusReason = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $statusReason
     * @return static
     */
    public function setStatusReason(array $statusReason = [])
    {
        $this->statusReason = [];
        if ([] === $statusReason) {
            return $this;
        }
        foreach($statusReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addStatusReason($v);
            } else {
                $this->addStatusReason(new FHIRCodeableConcept($v));
            }
        }
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
    public function getType()
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
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
    public function getUdiCarrier()
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
    public function addUdiCarrier(FHIRDeviceUdiCarrier $udiCarrier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[] $udiCarrier
     * @return static
     */
    public function setUdiCarrier(array $udiCarrier = [])
    {
        $this->udiCarrier = [];
        if ([] === $udiCarrier) {
            return $this;
        }
        foreach($udiCarrier as $v) {
            if ($v instanceof FHIRDeviceUdiCarrier) {
                $this->addUdiCarrier($v);
            } else {
                $this->addUdiCarrier(new FHIRDeviceUdiCarrier($v));
            }
        }
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
    public function getUrl()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
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
    public function getVersion()
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
    public function addVersion(FHIRDeviceVersion $version = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[] $version
     * @return static
     */
    public function setVersion(array $version = [])
    {
        $this->version = [];
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRDeviceVersion) {
                $this->addVersion($v);
            } else {
                $this->addVersion(new FHIRDeviceVersion($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISTINCT_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPIRATION_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLotNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOT_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufactureDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODEL_NUMBER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOwner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OWNER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPartNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getSerialNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIAL_NUMBER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIALIZATION, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UDI_CARRIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice
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
                throw new \DomainException(sprintf('FHIRDevice::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDevice::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDevice;
        } elseif (!is_object($type) || !($type instanceof FHIRDevice)) {
            throw new \RuntimeException(sprintf(
                'FHIRDevice::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice or null, %s seen.',
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
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRReference::xmlUnserialize($children->definition));
        }
        if (isset($children->deviceName)) {
            foreach($children->deviceName as $child) {
                $type->addDeviceName(FHIRDeviceDeviceName::xmlUnserialize($child));
            }
        }
        if (isset($children->distinctIdentifier)) {
            $type->setDistinctIdentifier(FHIRString::xmlUnserialize($children->distinctIdentifier));
        }
        if (isset($attributes->distinctIdentifier)) {
            $pt = $type->getDistinctIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->distinctIdentifier);
            } else {
                $type->setDistinctIdentifier((string)$attributes->distinctIdentifier);
            }
        }
        if (isset($children->expirationDate)) {
            $type->setExpirationDate(FHIRDateTime::xmlUnserialize($children->expirationDate));
        }
        if (isset($attributes->expirationDate)) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->expirationDate);
            } else {
                $type->setExpirationDate((string)$attributes->expirationDate);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($attributes->lotNumber)) {
            $pt = $type->getLotNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lotNumber);
            } else {
                $type->setLotNumber((string)$attributes->lotNumber);
            }
        }
        if (isset($children->manufactureDate)) {
            $type->setManufactureDate(FHIRDateTime::xmlUnserialize($children->manufactureDate));
        }
        if (isset($attributes->manufactureDate)) {
            $pt = $type->getManufactureDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->manufactureDate);
            } else {
                $type->setManufactureDate((string)$attributes->manufactureDate);
            }
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRString::xmlUnserialize($children->manufacturer));
        }
        if (isset($attributes->manufacturer)) {
            $pt = $type->getManufacturer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->manufacturer);
            } else {
                $type->setManufacturer((string)$attributes->manufacturer);
            }
        }
        if (isset($children->modelNumber)) {
            $type->setModelNumber(FHIRString::xmlUnserialize($children->modelNumber));
        }
        if (isset($attributes->modelNumber)) {
            $pt = $type->getModelNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->modelNumber);
            } else {
                $type->setModelNumber((string)$attributes->modelNumber);
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->owner)) {
            $type->setOwner(FHIRReference::xmlUnserialize($children->owner));
        }
        if (isset($children->parent)) {
            $type->setParent(FHIRReference::xmlUnserialize($children->parent));
        }
        if (isset($children->partNumber)) {
            $type->setPartNumber(FHIRString::xmlUnserialize($children->partNumber));
        }
        if (isset($attributes->partNumber)) {
            $pt = $type->getPartNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->partNumber);
            } else {
                $type->setPartNumber((string)$attributes->partNumber);
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->property)) {
            foreach($children->property as $child) {
                $type->addProperty(FHIRDeviceProperty::xmlUnserialize($child));
            }
        }
        if (isset($children->safety)) {
            foreach($children->safety as $child) {
                $type->addSafety(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serialNumber)) {
            $type->setSerialNumber(FHIRString::xmlUnserialize($children->serialNumber));
        }
        if (isset($attributes->serialNumber)) {
            $pt = $type->getSerialNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->serialNumber);
            } else {
                $type->setSerialNumber((string)$attributes->serialNumber);
            }
        }
        if (isset($children->specialization)) {
            foreach($children->specialization as $child) {
                $type->addSpecialization(FHIRDeviceSpecialization::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFHIRDeviceStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            foreach($children->statusReason as $child) {
                $type->addStatusReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->udiCarrier)) {
            foreach($children->udiCarrier as $child) {
                $type->addUdiCarrier(FHIRDeviceUdiCarrier::xmlUnserialize($child));
            }
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
            }
        }
        if (isset($children->version)) {
            foreach($children->version as $child) {
                $type->addVersion(FHIRDeviceVersion::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISTINCT_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOT_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getManufactureDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getModelNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODEL_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OWNER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPartNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PART_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SAFETY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSerialNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIAL_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALIZATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UDI_CARRIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v;
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            $a[self::FIELD_DEVICE_NAME] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEVICE_NAME][] = $v;
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            $a[self::FIELD_DISTINCT_IDENTIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DISTINCT_IDENTIFIER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a[self::FIELD_EXPIRATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EXPIRATION_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LOT_NUMBER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getManufactureDate())) {
            $a[self::FIELD_MANUFACTURE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_MANUFACTURE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MANUFACTURER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a[self::FIELD_MODEL_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MODEL_NUMBER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $a[self::FIELD_OWNER] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a[self::FIELD_PARENT] = $v;
        }
        if (null !== ($v = $this->getPartNumber())) {
            $a[self::FIELD_PART_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PART_NUMBER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROPERTY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            $a[self::FIELD_SAFETY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SAFETY][] = $v;
            }
        }
        if (null !== ($v = $this->getSerialNumber())) {
            $a[self::FIELD_SERIAL_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SERIAL_NUMBER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            $a[self::FIELD_SPECIALIZATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SPECIALIZATION][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRFHIRDeviceStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRFHIRDeviceStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STATUS_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            $a[self::FIELD_UDI_CARRIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_UDI_CARRIER][] = $v;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            $a[self::FIELD_VERSION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VERSION][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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