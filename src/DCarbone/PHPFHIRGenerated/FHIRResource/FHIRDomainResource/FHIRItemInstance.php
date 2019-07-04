<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A physical, countable instance of an item, for example one box or one unit.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRItemInstance
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRItemInstance extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ITEM_INSTANCE;

    const FIELD_CARRIER_AIDC = 'carrierAIDC';
    const FIELD_CARRIER_AIDC_EXT = '_carrierAIDC';
    const FIELD_CARRIER_HRF = 'carrierHRF';
    const FIELD_CARRIER_HRF_EXT = '_carrierHRF';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_CURRENT_SWVERSION = 'currentSWVersion';
    const FIELD_CURRENT_SWVERSION_EXT = '_currentSWVersion';
    const FIELD_EXPIRY_DATE = 'expiryDate';
    const FIELD_EXPIRY_DATE_EXT = '_expiryDate';
    const FIELD_LOCATION = 'location';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_MANUFACTURE_DATE = 'manufactureDate';
    const FIELD_MANUFACTURE_DATE_EXT = '_manufactureDate';
    const FIELD_SERIAL_NUMBER = 'serialNumber';
    const FIELD_SERIAL_NUMBER_EXT = '_serialNumber';
    const FIELD_SUBJECT = 'subject';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI
     * pattern in devices.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $carrierAIDC = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $carrierHRF = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The quantity or amount of instances. For example if several units are being
     * counted for inventory, this quantity can be more than one, provided they are not
     * unique. Seriallized items are considered unique and as such would have a
     * quantity max 1. This element is required and its presence asserts that the
     * reource refers to a physical item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $count = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Software version associated with the device, typically only used for devices
     * with embedded software or firmware.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $currentSWVersion = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The expiry or preparation date and time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $expiryDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location where the item is phisically located.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The lot or batch number.
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
     * The manufacture or preparation date and time. Times are necessary for several
     * examples - for example biologically derived products, prepared or coumpounded
     * medication, rapidly decaying isotopes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $manufactureDate = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The serial number if available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $serialNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that the item is associated with (implanted in, given to).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * FHIRItemInstance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CARRIER_AIDC])) {
            $ext = (isset($data[self::FIELD_CARRIER_AIDC_EXT]) && is_array($data[self::FIELD_CARRIER_AIDC_EXT]))
                ? $data[self::FIELD_CARRIER_AIDC_EXT]
                : null;
            if ($data[self::FIELD_CARRIER_AIDC] instanceof FHIRString) {
                $this->setCarrierAIDC($data[self::FIELD_CARRIER_AIDC]);
            } elseif ($ext && is_scalar($data[self::FIELD_CARRIER_AIDC])) {
                $this->setCarrierAIDC(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CARRIER_AIDC]] + $ext));
            } else {
                $this->setCarrierAIDC(new FHIRString($data[self::FIELD_CARRIER_AIDC]));
            }
        }
        if (isset($data[self::FIELD_CARRIER_HRF])) {
            $ext = (isset($data[self::FIELD_CARRIER_HRF_EXT]) && is_array($data[self::FIELD_CARRIER_HRF_EXT]))
                ? $data[self::FIELD_CARRIER_HRF_EXT]
                : null;
            if ($data[self::FIELD_CARRIER_HRF] instanceof FHIRString) {
                $this->setCarrierHRF($data[self::FIELD_CARRIER_HRF]);
            } elseif ($ext && is_scalar($data[self::FIELD_CARRIER_HRF])) {
                $this->setCarrierHRF(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CARRIER_HRF]] + $ext));
            } else {
                $this->setCarrierHRF(new FHIRString($data[self::FIELD_CARRIER_HRF]));
            }
        }
        if (isset($data[self::FIELD_COUNT])) {
            $ext = (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT]))
                ? $data[self::FIELD_COUNT_EXT]
                : null;
            if ($data[self::FIELD_COUNT] instanceof FHIRInteger) {
                $this->setCount($data[self::FIELD_COUNT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT])) {
                $this->setCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_COUNT]] + $ext));
            } else {
                $this->setCount(new FHIRInteger($data[self::FIELD_COUNT]));
            }
        }
        if (isset($data[self::FIELD_CURRENT_SWVERSION])) {
            $ext = (isset($data[self::FIELD_CURRENT_SWVERSION_EXT]) && is_array($data[self::FIELD_CURRENT_SWVERSION_EXT]))
                ? $data[self::FIELD_CURRENT_SWVERSION_EXT]
                : null;
            if ($data[self::FIELD_CURRENT_SWVERSION] instanceof FHIRString) {
                $this->setCurrentSWVersion($data[self::FIELD_CURRENT_SWVERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_CURRENT_SWVERSION])) {
                $this->setCurrentSWVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CURRENT_SWVERSION]] + $ext));
            } else {
                $this->setCurrentSWVersion(new FHIRString($data[self::FIELD_CURRENT_SWVERSION]));
            }
        }
        if (isset($data[self::FIELD_EXPIRY_DATE])) {
            $ext = (isset($data[self::FIELD_EXPIRY_DATE_EXT]) && is_array($data[self::FIELD_EXPIRY_DATE_EXT]))
                ? $data[self::FIELD_EXPIRY_DATE_EXT]
                : null;
            if ($data[self::FIELD_EXPIRY_DATE] instanceof FHIRDateTime) {
                $this->setExpiryDate($data[self::FIELD_EXPIRY_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPIRY_DATE])) {
                $this->setExpiryDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EXPIRY_DATE]] + $ext));
            } else {
                $this->setExpiryDate(new FHIRDateTime($data[self::FIELD_EXPIRY_DATE]));
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
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI
     * pattern in devices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI
     * pattern in devices.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $carrierAIDC
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setCarrierAIDC($carrierAIDC = null)
    {
        if (null === $carrierAIDC) {
            $this->carrierAIDC = null;
            return $this;
        }
        if ($carrierAIDC instanceof FHIRString) {
            $this->carrierAIDC = $carrierAIDC;
            return $this;
        }
        $this->carrierAIDC = new FHIRString($carrierAIDC);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $carrierHRF
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setCarrierHRF($carrierHRF = null)
    {
        if (null === $carrierHRF) {
            $this->carrierHRF = null;
            return $this;
        }
        if ($carrierHRF instanceof FHIRString) {
            $this->carrierHRF = $carrierHRF;
            return $this;
        }
        $this->carrierHRF = new FHIRString($carrierHRF);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The quantity or amount of instances. For example if several units are being
     * counted for inventory, this quantity can be more than one, provided they are not
     * unique. Seriallized items are considered unique and as such would have a
     * quantity max 1. This element is required and its presence asserts that the
     * reource refers to a physical item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The quantity or amount of instances. For example if several units are being
     * counted for inventory, this quantity can be more than one, provided they are not
     * unique. Seriallized items are considered unique and as such would have a
     * quantity max 1. This element is required and its presence asserts that the
     * reource refers to a physical item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $count
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setCount($count = null)
    {
        if (null === $count) {
            $this->count = null;
            return $this;
        }
        if ($count instanceof FHIRInteger) {
            $this->count = $count;
            return $this;
        }
        $this->count = new FHIRInteger($count);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Software version associated with the device, typically only used for devices
     * with embedded software or firmware.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCurrentSWVersion()
    {
        return $this->currentSWVersion;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Software version associated with the device, typically only used for devices
     * with embedded software or firmware.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $currentSWVersion
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setCurrentSWVersion($currentSWVersion = null)
    {
        if (null === $currentSWVersion) {
            $this->currentSWVersion = null;
            return $this;
        }
        if ($currentSWVersion instanceof FHIRString) {
            $this->currentSWVersion = $currentSWVersion;
            return $this;
        }
        $this->currentSWVersion = new FHIRString($currentSWVersion);
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
     * The expiry or preparation date and time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The expiry or preparation date and time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $expiryDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setExpiryDate($expiryDate = null)
    {
        if (null === $expiryDate) {
            $this->expiryDate = null;
            return $this;
        }
        if ($expiryDate instanceof FHIRDateTime) {
            $this->expiryDate = $expiryDate;
            return $this;
        }
        $this->expiryDate = new FHIRDateTime($expiryDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location where the item is phisically located.
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
     * The location where the item is phisically located.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
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
     * The lot or batch number.
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
     * The lot or batch number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
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
     * The manufacture or preparation date and time. Times are necessary for several
     * examples - for example biologically derived products, prepared or coumpounded
     * medication, rapidly decaying isotopes.
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
     * The manufacture or preparation date and time. Times are necessary for several
     * examples - for example biologically derived products, prepared or coumpounded
     * medication, rapidly decaying isotopes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $manufactureDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
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
     * The serial number if available.
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
     * The serial number if available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $serialNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that the item is associated with (implanted in, given to).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that the item is associated with (implanted in, given to).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance
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
                throw new \DomainException(sprintf('FHIRItemInstance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRItemInstance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRItemInstance);
        } elseif (!is_object($type) || !($type instanceof FHIRItemInstance)) {
            throw new \RuntimeException(sprintf(
                'FHIRItemInstance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->carrierAIDC)) {
            $type->setCarrierAIDC((string)$attributes->carrierAIDC);
        }
        if (isset($children->carrierAIDC)) {
            $type->setCarrierAIDC(FHIRString::xmlUnserialize($children->carrierAIDC));
        }
        if (isset($attributes->carrierHRF)) {
            $type->setCarrierHRF((string)$attributes->carrierHRF);
        }
        if (isset($children->carrierHRF)) {
            $type->setCarrierHRF(FHIRString::xmlUnserialize($children->carrierHRF));
        }
        if (isset($attributes->count)) {
            $type->setCount((string)$attributes->count);
        }
        if (isset($children->count)) {
            $type->setCount(FHIRInteger::xmlUnserialize($children->count));
        }
        if (isset($attributes->currentSWVersion)) {
            $type->setCurrentSWVersion((string)$attributes->currentSWVersion);
        }
        if (isset($children->currentSWVersion)) {
            $type->setCurrentSWVersion(FHIRString::xmlUnserialize($children->currentSWVersion));
        }
        if (isset($attributes->expiryDate)) {
            $type->setExpiryDate((string)$attributes->expiryDate);
        }
        if (isset($children->expiryDate)) {
            $type->setExpiryDate(FHIRDateTime::xmlUnserialize($children->expiryDate));
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
        if (isset($attributes->serialNumber)) {
            $type->setSerialNumber((string)$attributes->serialNumber);
        }
        if (isset($children->serialNumber)) {
            $type->setSerialNumber(FHIRString::xmlUnserialize($children->serialNumber));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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
            $sxe = new \SimpleXMLElement('<ItemInstance xmlns="http://hl7.org/fhir"></ItemInstance>');
        }
        if (null !== ($v = $this->getCarrierAIDC())) {
            $sxe->addAttribute(self::FIELD_CARRIER_AIDC, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CARRIER_AIDC));
            }
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $sxe->addAttribute(self::FIELD_CARRIER_HRF, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CARRIER_HRF));
            }
        }
        if (null !== ($v = $this->getCount())) {
            $sxe->addAttribute(self::FIELD_COUNT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT));
            }
        }
        if (null !== ($v = $this->getCurrentSWVersion())) {
            $sxe->addAttribute(self::FIELD_CURRENT_SWVERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CURRENT_SWVERSION));
            }
        }
        if (null !== ($v = $this->getExpiryDate())) {
            $sxe->addAttribute(self::FIELD_EXPIRY_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRY_DATE));
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
        if (null !== ($v = $this->getSerialNumber())) {
            $sxe->addAttribute(self::FIELD_SERIAL_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIAL_NUMBER));
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCarrierAIDC())) {
            $a[self::FIELD_CARRIER_AIDC] = (string)$v;
            $a[self::FIELD_CARRIER_AIDC_EXT] = $v;
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $a[self::FIELD_CARRIER_HRF] = (string)$v;
            $a[self::FIELD_CARRIER_HRF_EXT] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a[self::FIELD_COUNT] = (string)$v;
            $a[self::FIELD_COUNT_EXT] = $v;
        }
        if (null !== ($v = $this->getCurrentSWVersion())) {
            $a[self::FIELD_CURRENT_SWVERSION] = (string)$v;
            $a[self::FIELD_CURRENT_SWVERSION_EXT] = $v;
        }
        if (null !== ($v = $this->getExpiryDate())) {
            $a[self::FIELD_EXPIRY_DATE] = (string)$v;
            $a[self::FIELD_EXPIRY_DATE_EXT] = $v;
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
        if (null !== ($v = $this->getSerialNumber())) {
            $a[self::FIELD_SERIAL_NUMBER] = (string)$v;
            $a[self::FIELD_SERIAL_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
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