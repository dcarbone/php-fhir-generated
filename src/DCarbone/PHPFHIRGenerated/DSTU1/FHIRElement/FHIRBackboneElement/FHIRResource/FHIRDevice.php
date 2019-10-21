<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * This resource identifies an instance of a manufactured thing that is used in the
 * provision of healthcare without being substantially changed through that
 * activity. The device may be a machine, an insert, a computer, an application,
 * etc. This includes durable (reusable) medical equipment as well as disposable
 * equipment used for diagnostic, treatment, and research for healthcare and public
 * health.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDevice
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRDevice extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONTACT = 'contact';
    const FIELD_CONTACT_EXT = '_contact';
    const FIELD_EXPIRY = 'expiry';
    const FIELD_EXPIRY_EXT = '_expiry';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_MANUFACTURER_EXT = '_manufacturer';
    const FIELD_MODEL = 'model';
    const FIELD_MODEL_EXT = '_model';
    const FIELD_OWNER = 'owner';
    const FIELD_PATIENT = 'patient';
    const FIELD_TYPE = 'type';
    const FIELD_UDI = 'udi';
    const FIELD_UDI_EXT = '_udi';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact[]
     */
    private $contact = [];
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of expiry of this device (if applicable).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    private $expiry = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this device by various organizations. The most likely
     * organizations to assign identifiers are the manufacturer and the owner, though
     * regulatory agencies may also assign an identifier. The identifiers identify the
     * particular device, not the kind of device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource may be found in a literal location (i.e. GPS coordinates), a
     * logical place (i.e. "in/with the patient"), or a coded location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $location = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $lotNumber = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $manufacturer = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The "model" - an identifier assigned by the manufacturer to identify the product
     * by its type. This number is shared by the all devices sold as the same type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $model = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $owner = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient information, if the resource is affixed to a person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $patient = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A kind of this device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FDA Mandated Unique Device Identifier. Use the human readable information (the
     * content that the user sees, which is sometimes different to the exact syntax
     * represented in the barcode) - see
     * http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $udi = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $url = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the device, if the device has multiple releases under the same
     * model, or if the device is software or carries firmware.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $version = null;

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
            $ext = (isset($data[self::FIELD_CONTACT_EXT]) && is_array($data[self::FIELD_CONTACT_EXT]))
                ? $data[self::FIELD_CONTACT_EXT]
                : null;
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $i => $v) {
                    if ($v instanceof FHIRContact) {
                        $this->addContact($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addContact(new FHIRContact([FHIRContact::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addContact(new FHIRContact($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTACT])) {
                $this->addContact(new FHIRContact([FHIRContact::FIELD_VALUE => $data[self::FIELD_CONTACT]] + $ext));
            } else {
                $this->addContact(new FHIRContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_EXPIRY])) {
            $ext = (isset($data[self::FIELD_EXPIRY_EXT]) && is_array($data[self::FIELD_EXPIRY_EXT]))
                ? $data[self::FIELD_EXPIRY_EXT]
                : null;
            if ($data[self::FIELD_EXPIRY] instanceof FHIRDate) {
                $this->setExpiry($data[self::FIELD_EXPIRY]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPIRY])) {
                $this->setExpiry(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_EXPIRY]] + $ext));
            } else {
                $this->setExpiry(new FHIRDate($data[self::FIELD_EXPIRY]));
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
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRResourceReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRResourceReference($data[self::FIELD_LOCATION]));
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
        if (isset($data[self::FIELD_MODEL])) {
            $ext = (isset($data[self::FIELD_MODEL_EXT]) && is_array($data[self::FIELD_MODEL_EXT]))
                ? $data[self::FIELD_MODEL_EXT]
                : null;
            if ($data[self::FIELD_MODEL] instanceof FHIRString) {
                $this->setModel($data[self::FIELD_MODEL]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODEL])) {
                $this->setModel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MODEL]] + $ext));
            } else {
                $this->setModel(new FHIRString($data[self::FIELD_MODEL]));
            }
        }
        if (isset($data[self::FIELD_OWNER])) {
            if ($data[self::FIELD_OWNER] instanceof FHIRResourceReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRResourceReference($data[self::FIELD_OWNER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRResourceReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRResourceReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UDI])) {
            $ext = (isset($data[self::FIELD_UDI_EXT]) && is_array($data[self::FIELD_UDI_EXT]))
                ? $data[self::FIELD_UDI_EXT]
                : null;
            if ($data[self::FIELD_UDI] instanceof FHIRString) {
                $this->setUdi($data[self::FIELD_UDI]);
            } elseif ($ext && is_scalar($data[self::FIELD_UDI])) {
                $this->setUdi(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_UDI]] + $ext));
            } else {
                $this->setUdi(new FHIRString($data[self::FIELD_UDI]));
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
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION])) {
                $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $contact
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function addContact(FHIRContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact[] $contact
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContact($v));
            }
        }
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of expiry of this device (if applicable).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of expiry of this device (if applicable).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $expiry
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setExpiry($expiry = null)
    {
        if (null === $expiry) {
            $this->expiry = null;
            return $this;
        }
        if ($expiry instanceof FHIRDate) {
            $this->expiry = $expiry;
            return $this;
        }
        $this->expiry = new FHIRDate($expiry);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this device by various organizations. The most likely
     * organizations to assign identifiers are the manufacturer and the owner, though
     * regulatory agencies may also assign an identifier. The identifiers identify the
     * particular device, not the kind of device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this device by various organizations. The most likely
     * organizations to assign identifiers are the manufacturer and the owner, though
     * regulatory agencies may also assign an identifier. The identifiers identify the
     * particular device, not the kind of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this device by various organizations. The most likely
     * organizations to assign identifiers are the manufacturer and the owner, though
     * regulatory agencies may also assign an identifier. The identifiers identify the
     * particular device, not the kind of device.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
     * The resource may be found in a literal location (i.e. GPS coordinates), a
     * logical place (i.e. "in/with the patient"), or a coded location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * The resource may be found in a literal location (i.e. GPS coordinates), a
     * logical place (i.e. "in/with the patient"), or a coded location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $location
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setLocation(FHIRResourceReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number assigned by the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $lotNumber
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The "model" - an identifier assigned by the manufacturer to identify the product
     * by its type. This number is shared by the all devices sold as the same type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The "model" - an identifier assigned by the manufacturer to identify the product
     * by its type. This number is shared by the all devices sold as the same type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $model
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setModel($model = null)
    {
        if (null === $model) {
            $this->model = null;
            return $this;
        }
        if ($model instanceof FHIRString) {
            $this->model = $model;
            return $this;
        }
        $this->model = new FHIRString($model);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $owner
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setOwner(FHIRResourceReference $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient information, if the resource is affixed to a person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * Patient information, if the resource is affixed to a person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setPatient(FHIRResourceReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A kind of this device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * A kind of this device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FDA Mandated Unique Device Identifier. Use the human readable information (the
     * content that the user sees, which is sometimes different to the exact syntax
     * represented in the barcode) - see
     * http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FDA Mandated Unique Device Identifier. Use the human readable information (the
     * content that the user sees, which is sometimes different to the exact syntax
     * represented in the barcode) - see
     * http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $udi
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setUdi($udi = null)
    {
        if (null === $udi) {
            $this->udi = null;
            return $this;
        }
        if ($udi instanceof FHIRString) {
            $this->udi = $udi;
            return $this;
        }
        $this->udi = new FHIRString($udi);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A network address on which the device may be contacted directly.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the device, if the device has multiple releases under the same
     * model, or if the device is software or carries firmware.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the device, if the device has multiple releases under the same
     * model, or if the device is software or carries firmware.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
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
                'FHIRDevice::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
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
                $type->addContact(FHIRContact::xmlUnserialize($child));
            }
        }
        if (isset($attributes->expiry)) {
            $type->setExpiry((string)$attributes->expiry);
        }
        if (isset($children->expiry)) {
            $type->setExpiry(FHIRDate::xmlUnserialize($children->expiry));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRResourceReference::xmlUnserialize($children->location));
        }
        if (isset($attributes->lotNumber)) {
            $type->setLotNumber((string)$attributes->lotNumber);
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($attributes->manufacturer)) {
            $type->setManufacturer((string)$attributes->manufacturer);
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRString::xmlUnserialize($children->manufacturer));
        }
        if (isset($attributes->model)) {
            $type->setModel((string)$attributes->model);
        }
        if (isset($children->model)) {
            $type->setModel(FHIRString::xmlUnserialize($children->model));
        }
        if (isset($children->owner)) {
            $type->setOwner(FHIRResourceReference::xmlUnserialize($children->owner));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRResourceReference::xmlUnserialize($children->patient));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($attributes->udi)) {
            $type->setUdi((string)$attributes->udi);
        }
        if (isset($children->udi)) {
            $type->setUdi(FHIRString::xmlUnserialize($children->udi));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
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
        if (null !== ($v = $this->getExpiry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRY, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getModel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODEL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OWNER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUdi())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UDI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
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
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_CONTACT_EXT])) {
                        $a[self::FIELD_CONTACT_EXT] = [];
                    }
                    $a[self::FIELD_CONTACT_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getExpiry())) {
            $a[self::FIELD_EXPIRY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EXPIRY_EXT] = $v;
            }
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
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_LOT_NUMBER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MANUFACTURER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getModel())) {
            $a[self::FIELD_MODEL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MODEL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $a[self::FIELD_OWNER] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a[self::FIELD_UDI] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_UDI_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_URL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VERSION_EXT] = $v;
            }
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