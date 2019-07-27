<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A type of a manufactured item that is used in the provision of healthcare
 * without being substantially changed through that activity. The device may be a
 * medical or non-medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDevice
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
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
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_TYPE = 'type';
    const FIELD_UDI_CARRIER = 'udiCarrier';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    private $contact = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $definition = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[]
     */
    private $deviceName = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $distinctIdentifier = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $expirationDate = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $lotNumber = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $manufactureDate = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $manufacturer = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The model number for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $modelNumber = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $owner = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $parent = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part number of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $partNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[]
     */
    private $property = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $safety = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $serialNumber = null;

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[]
     */
    private $specialization = [];

    /**
     * The availability status of the device.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Status of the Device availability.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    private $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $statusReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[]
     */
    private $udiCarrier = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     *
     * The actual design of the device or software version running on the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
     */
    private $version = [];

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
        if (isset($data[self::FIELD_DISTINCT_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_DISTINCT_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DISTINCT_IDENTIFIER_EXT]))
                ? $data[self::FIELD_DISTINCT_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_DISTINCT_IDENTIFIER] instanceof FHIRString) {
                $this->setDistinctIdentifier($data[self::FIELD_DISTINCT_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISTINCT_IDENTIFIER])) {
                $this->setDistinctIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISTINCT_IDENTIFIER]] + $ext));
            } else {
                $this->setDistinctIdentifier(new FHIRString($data[self::FIELD_DISTINCT_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE])) {
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT]))
                ? $data[self::FIELD_EXPIRATION_DATE_EXT]
                : null;
            if ($data[self::FIELD_EXPIRATION_DATE] instanceof FHIRDateTime) {
                $this->setExpirationDate($data[self::FIELD_EXPIRATION_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPIRATION_DATE])) {
                $this->setExpirationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EXPIRATION_DATE]] + $ext));
            } else {
                $this->setExpirationDate(new FHIRDateTime($data[self::FIELD_EXPIRATION_DATE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_LOT_NUMBER])) {
            $ext = (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT]))
                ? $data[self::FIELD_LOT_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_LOT_NUMBER] instanceof FHIRString) {
                $this->setLotNumber($data[self::FIELD_LOT_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOT_NUMBER])) {
                $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LOT_NUMBER]] + $ext));
            } else {
                $this->setLotNumber(new FHIRString($data[self::FIELD_LOT_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURE_DATE])) {
            $ext = (isset($data[self::FIELD_MANUFACTURE_DATE_EXT]) && is_array($data[self::FIELD_MANUFACTURE_DATE_EXT]))
                ? $data[self::FIELD_MANUFACTURE_DATE_EXT]
                : null;
            if ($data[self::FIELD_MANUFACTURE_DATE] instanceof FHIRDateTime) {
                $this->setManufactureDate($data[self::FIELD_MANUFACTURE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_MANUFACTURE_DATE])) {
                $this->setManufactureDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_MANUFACTURE_DATE]] + $ext));
            } else {
                $this->setManufactureDate(new FHIRDateTime($data[self::FIELD_MANUFACTURE_DATE]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            $ext = (isset($data[self::FIELD_MANUFACTURER_EXT]) && is_array($data[self::FIELD_MANUFACTURER_EXT]))
                ? $data[self::FIELD_MANUFACTURER_EXT]
                : null;
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRString) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } elseif ($ext && is_scalar($data[self::FIELD_MANUFACTURER])) {
                $this->setManufacturer(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MANUFACTURER]] + $ext));
            } else {
                $this->setManufacturer(new FHIRString($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_MODEL_NUMBER])) {
            $ext = (isset($data[self::FIELD_MODEL_NUMBER_EXT]) && is_array($data[self::FIELD_MODEL_NUMBER_EXT]))
                ? $data[self::FIELD_MODEL_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_MODEL_NUMBER] instanceof FHIRString) {
                $this->setModelNumber($data[self::FIELD_MODEL_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODEL_NUMBER])) {
                $this->setModelNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MODEL_NUMBER]] + $ext));
            } else {
                $this->setModelNumber(new FHIRString($data[self::FIELD_MODEL_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
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
        if (isset($data[self::FIELD_PART_NUMBER])) {
            $ext = (isset($data[self::FIELD_PART_NUMBER_EXT]) && is_array($data[self::FIELD_PART_NUMBER_EXT]))
                ? $data[self::FIELD_PART_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_PART_NUMBER] instanceof FHIRString) {
                $this->setPartNumber($data[self::FIELD_PART_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_PART_NUMBER])) {
                $this->setPartNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PART_NUMBER]] + $ext));
            } else {
                $this->setPartNumber(new FHIRString($data[self::FIELD_PART_NUMBER]));
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
        if (isset($data[self::FIELD_SERIAL_NUMBER])) {
            $ext = (isset($data[self::FIELD_SERIAL_NUMBER_EXT]) && is_array($data[self::FIELD_SERIAL_NUMBER_EXT]))
                ? $data[self::FIELD_SERIAL_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_SERIAL_NUMBER] instanceof FHIRString) {
                $this->setSerialNumber($data[self::FIELD_SERIAL_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIAL_NUMBER])) {
                $this->setSerialNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIAL_NUMBER]] + $ext));
            } else {
                $this->setSerialNumber(new FHIRString($data[self::FIELD_SERIAL_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_SPECIALIZATION])) {
            if (is_array($data[self::FIELD_SPECIALIZATION])) {
                foreach($data[self::FIELD_SPECIALIZATION] as $v) {
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
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRFHIRDeviceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRFHIRDeviceStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if (is_array($data[self::FIELD_STATUS_REASON])) {
                foreach($data[self::FIELD_STATUS_REASON] as $v) {
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
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reference to the definition for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $definition
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName $deviceName
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName[] $deviceName
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDistinctIdentifier()
    {
        return $this->distinctIdentifier;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The distinct identification string as required by regulation for a human cell,
     * tissue, or cellular and tissue-based product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $distinctIdentifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time beyond which this device is no longer valid or should not be
     * used (if applicable).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $expirationDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * Unique instance identifiers assigned to a device by manufacturers other
     * organizations or owners.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * The place where the device can be found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The place where the device can be found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time when the device was manufactured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $manufactureDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The model number for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The model number for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $modelNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $owner
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function setOwner(FHIRReference $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parent device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function setParent(FHIRReference $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part number of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part number of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $partNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient information, If the device is affixed to a person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty $property
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty[] $property
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSafety()
    {
        return $this->safety;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $safety
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides additional safety characteristics about a medical device. For example
     * devices containing latex.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $safety
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $serialNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization $specialization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization[] $specialization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Status of the Device availability.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The availability status of the device.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Status of the Device availability.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $statusReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind or type of device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * The kind or type of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $udiCarrier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier[] $udiCarrier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion[] $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDevice::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDevice::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRDevice);
        } elseif (!is_object($type) || !($type instanceof FHIRDevice)) {
            throw new \RuntimeException(sprintf(
                'FHIRDevice::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->distinctIdentifier)) {
            $type->setDistinctIdentifier((string)$attributes->distinctIdentifier);
        }
        if (isset($children->distinctIdentifier)) {
            $type->setDistinctIdentifier(FHIRString::xmlUnserialize($children->distinctIdentifier));
        }
        if (isset($attributes->expirationDate)) {
            $type->setExpirationDate((string)$attributes->expirationDate);
        }
        if (isset($children->expirationDate)) {
            $type->setExpirationDate(FHIRDateTime::xmlUnserialize($children->expirationDate));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($attributes->lotNumber)) {
            $type->setLotNumber((string)$attributes->lotNumber);
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($attributes->manufactureDate)) {
            $type->setManufactureDate((string)$attributes->manufactureDate);
        }
        if (isset($children->manufactureDate)) {
            $type->setManufactureDate(FHIRDateTime::xmlUnserialize($children->manufactureDate));
        }
        if (isset($attributes->manufacturer)) {
            $type->setManufacturer((string)$attributes->manufacturer);
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRString::xmlUnserialize($children->manufacturer));
        }
        if (isset($attributes->modelNumber)) {
            $type->setModelNumber((string)$attributes->modelNumber);
        }
        if (isset($children->modelNumber)) {
            $type->setModelNumber(FHIRString::xmlUnserialize($children->modelNumber));
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
        if (isset($attributes->partNumber)) {
            $type->setPartNumber((string)$attributes->partNumber);
        }
        if (isset($children->partNumber)) {
            $type->setPartNumber(FHIRString::xmlUnserialize($children->partNumber));
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
        if (isset($attributes->serialNumber)) {
            $type->setSerialNumber((string)$attributes->serialNumber);
        }
        if (isset($children->serialNumber)) {
            $type->setSerialNumber(FHIRString::xmlUnserialize($children->serialNumber));
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
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($children->version)) {
            foreach($children->version as $child) {
                $type->addVersion(FHIRDeviceVersion::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Device xmlns="http://hl7.org/fhir"></Device>');
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION));
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE_NAME));
            }
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            $sxe->addAttribute(self::FIELD_DISTINCT_IDENTIFIER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISTINCT_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $sxe->addAttribute(self::FIELD_EXPIRATION_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_DATE));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $sxe->addAttribute(self::FIELD_LOT_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOT_NUMBER));
            }
        }
        if (null !== ($v = $this->getManufactureDate())) {
            $sxe->addAttribute(self::FIELD_MANUFACTURE_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURE_DATE));
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $sxe->addAttribute(self::FIELD_MANUFACTURER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER));
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            $sxe->addAttribute(self::FIELD_MODEL_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODEL_NUMBER));
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OWNER));
        }
        if (null !== ($v = $this->getParent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT));
        }
        if (null !== ($v = $this->getPartNumber())) {
            $sxe->addAttribute(self::FIELD_PART_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_NUMBER));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY));
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SAFETY));
            }
        }
        if (null !== ($v = $this->getSerialNumber())) {
            $sxe->addAttribute(self::FIELD_SERIAL_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIAL_NUMBER));
            }
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALIZATION));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UDI_CARRIER));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION));
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
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v;
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            $a[self::FIELD_DEVICE_NAME] = $vs;
        }
        if (null !== ($v = $this->getDistinctIdentifier())) {
            $a[self::FIELD_DISTINCT_IDENTIFIER] = (string)$v;
            $a[self::FIELD_DISTINCT_IDENTIFIER_EXT] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a[self::FIELD_EXPIRATION_DATE] = (string)$v;
            $a[self::FIELD_EXPIRATION_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = (string)$v;
            $a[self::FIELD_LOT_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getManufactureDate())) {
            $a[self::FIELD_MANUFACTURE_DATE] = (string)$v;
            $a[self::FIELD_MANUFACTURE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = (string)$v;
            $a[self::FIELD_MANUFACTURER_EXT] = $v;
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a[self::FIELD_MODEL_NUMBER] = (string)$v;
            $a[self::FIELD_MODEL_NUMBER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOwner())) {
            $a[self::FIELD_OWNER] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a[self::FIELD_PARENT] = $v;
        }
        if (null !== ($v = $this->getPartNumber())) {
            $a[self::FIELD_PART_NUMBER] = (string)$v;
            $a[self::FIELD_PART_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $vs;
        }
        if ([] !== ($vs = $this->getSafety())) {
            $a[self::FIELD_SAFETY] = $vs;
        }
        if (null !== ($v = $this->getSerialNumber())) {
            $a[self::FIELD_SERIAL_NUMBER] = (string)$v;
            $a[self::FIELD_SERIAL_NUMBER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSpecialization())) {
            $a[self::FIELD_SPECIALIZATION] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getUdiCarrier())) {
            $a[self::FIELD_UDI_CARRIER] = $vs;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}