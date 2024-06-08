<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
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
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDeviceDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_UDI_DEVICE_IDENTIFIER = 'udiDeviceIdentifier';
    const FIELD_MANUFACTURER_STRING = 'manufacturerString';
    const FIELD_MANUFACTURER_STRING_EXT = '_manufacturerString';
    const FIELD_MANUFACTURER_REFERENCE = 'manufacturerReference';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_MODEL_NUMBER = 'modelNumber';
    const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    const FIELD_TYPE = 'type';
    const FIELD_SPECIALIZATION = 'specialization';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_SAFETY = 'safety';
    const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    const FIELD_PHYSICAL_CHARACTERISTICS = 'physicalCharacteristics';
    const FIELD_LANGUAGE_CODE = 'languageCode';
    const FIELD_CAPABILITY = 'capability';
    const FIELD_PROPERTY = 'property';
    const FIELD_OWNER = 'owner';
    const FIELD_CONTACT = 'contact';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_ONLINE_INFORMATION = 'onlineInformation';
    const FIELD_ONLINE_INFORMATION_EXT = '_onlineInformation';
    const FIELD_NOTE = 'note';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_PARENT_DEVICE = 'parentDevice';
    const FIELD_MATERIAL = 'material';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier[]
     */
    protected null|array $udiDeviceIdentifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $manufacturerString = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $manufacturerReference = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A name given to the device to identify it.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName[]
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What kind of device or device system this is.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization[]
     */
    protected null|array $specialization = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The available versions of the device, e.g., software versions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected null|array $version = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Safety characteristics of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $safety = [];
    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[]
     */
    protected null|array $shelfLifeStorage = [];
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    protected null|FHIRProdCharacteristic $physicalCharacteristics = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $languageCode = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Device capabilities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability[]
     */
    protected null|array $capability = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty[]
     */
    protected null|array $property = [];
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Access to on-line information about the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $onlineInformation = null;
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging (e.g. the number of devices
     * present in a pack, or the number of devices in the same package of the medicinal
     * product).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device it can be part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $parentDevice = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial[]
     */
    protected null|array $material = [];

    /**
     * Validation map for fields in type DeviceDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRDeviceDefinition Constructor
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
        if (array_key_exists(self::FIELD_UDI_DEVICE_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
                foreach($data[self::FIELD_UDI_DEVICE_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionUdiDeviceIdentifier) {
                        $this->addUdiDeviceIdentifier($v);
                    } else {
                        $this->addUdiDeviceIdentifier(new FHIRDeviceDefinitionUdiDeviceIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_UDI_DEVICE_IDENTIFIER] instanceof FHIRDeviceDefinitionUdiDeviceIdentifier) {
                $this->addUdiDeviceIdentifier($data[self::FIELD_UDI_DEVICE_IDENTIFIER]);
            } else {
                $this->addUdiDeviceIdentifier(new FHIRDeviceDefinitionUdiDeviceIdentifier($data[self::FIELD_UDI_DEVICE_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURER_STRING, $data) || array_key_exists(self::FIELD_MANUFACTURER_STRING_EXT, $data)) {
            $value = $data[self::FIELD_MANUFACTURER_STRING] ?? null;
            $ext = (isset($data[self::FIELD_MANUFACTURER_STRING_EXT]) && is_array($data[self::FIELD_MANUFACTURER_STRING_EXT])) ? $data[self::FIELD_MANUFACTURER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setManufacturerString($value);
                } else if (is_array($value)) {
                    $this->setManufacturerString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setManufacturerString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setManufacturerString(new FHIRString($ext));
            } else {
                $this->setManufacturerString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURER_REFERENCE, $data)) {
            if ($data[self::FIELD_MANUFACTURER_REFERENCE] instanceof FHIRReference) {
                $this->setManufacturerReference($data[self::FIELD_MANUFACTURER_REFERENCE]);
            } else {
                $this->setManufacturerReference(new FHIRReference($data[self::FIELD_MANUFACTURER_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_NAME, $data)) {
            if (is_array($data[self::FIELD_DEVICE_NAME])) {
                foreach($data[self::FIELD_DEVICE_NAME] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionDeviceName) {
                        $this->addDeviceName($v);
                    } else {
                        $this->addDeviceName(new FHIRDeviceDefinitionDeviceName($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE_NAME] instanceof FHIRDeviceDefinitionDeviceName) {
                $this->addDeviceName($data[self::FIELD_DEVICE_NAME]);
            } else {
                $this->addDeviceName(new FHIRDeviceDefinitionDeviceName($data[self::FIELD_DEVICE_NAME]));
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
                    if ($v instanceof FHIRDeviceDefinitionSpecialization) {
                        $this->addSpecialization($v);
                    } else {
                        $this->addSpecialization(new FHIRDeviceDefinitionSpecialization($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIALIZATION] instanceof FHIRDeviceDefinitionSpecialization) {
                $this->addSpecialization($data[self::FIELD_SPECIALIZATION]);
            } else {
                $this->addSpecialization(new FHIRDeviceDefinitionSpecialization($data[self::FIELD_SPECIALIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data) || array_key_exists(self::FIELD_VERSION_EXT, $data)) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addVersion($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addVersion($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addVersion(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addVersion(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addVersion(new FHIRString($iext));
                }
            } else {
                $this->addVersion(new FHIRString(null));
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
        if (array_key_exists(self::FIELD_SHELF_LIFE_STORAGE, $data)) {
            if (is_array($data[self::FIELD_SHELF_LIFE_STORAGE])) {
                foreach($data[self::FIELD_SHELF_LIFE_STORAGE] as $v) {
                    if ($v instanceof FHIRProductShelfLife) {
                        $this->addShelfLifeStorage($v);
                    } else {
                        $this->addShelfLifeStorage(new FHIRProductShelfLife($v));
                    }
                }
            } elseif ($data[self::FIELD_SHELF_LIFE_STORAGE] instanceof FHIRProductShelfLife) {
                $this->addShelfLifeStorage($data[self::FIELD_SHELF_LIFE_STORAGE]);
            } else {
                $this->addShelfLifeStorage(new FHIRProductShelfLife($data[self::FIELD_SHELF_LIFE_STORAGE]));
            }
        }
        if (array_key_exists(self::FIELD_PHYSICAL_CHARACTERISTICS, $data)) {
            if ($data[self::FIELD_PHYSICAL_CHARACTERISTICS] instanceof FHIRProdCharacteristic) {
                $this->setPhysicalCharacteristics($data[self::FIELD_PHYSICAL_CHARACTERISTICS]);
            } else {
                $this->setPhysicalCharacteristics(new FHIRProdCharacteristic($data[self::FIELD_PHYSICAL_CHARACTERISTICS]));
            }
        }
        if (array_key_exists(self::FIELD_LANGUAGE_CODE, $data)) {
            if (is_array($data[self::FIELD_LANGUAGE_CODE])) {
                foreach($data[self::FIELD_LANGUAGE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLanguageCode($v);
                    } else {
                        $this->addLanguageCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LANGUAGE_CODE] instanceof FHIRCodeableConcept) {
                $this->addLanguageCode($data[self::FIELD_LANGUAGE_CODE]);
            } else {
                $this->addLanguageCode(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_CAPABILITY, $data)) {
            if (is_array($data[self::FIELD_CAPABILITY])) {
                foreach($data[self::FIELD_CAPABILITY] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionCapability) {
                        $this->addCapability($v);
                    } else {
                        $this->addCapability(new FHIRDeviceDefinitionCapability($v));
                    }
                }
            } elseif ($data[self::FIELD_CAPABILITY] instanceof FHIRDeviceDefinitionCapability) {
                $this->addCapability($data[self::FIELD_CAPABILITY]);
            } else {
                $this->addCapability(new FHIRDeviceDefinitionCapability($data[self::FIELD_CAPABILITY]));
            }
        }
        if (array_key_exists(self::FIELD_PROPERTY, $data)) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRDeviceDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRDeviceDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRDeviceDefinitionProperty($data[self::FIELD_PROPERTY]));
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
        if (array_key_exists(self::FIELD_ONLINE_INFORMATION, $data) || array_key_exists(self::FIELD_ONLINE_INFORMATION_EXT, $data)) {
            $value = $data[self::FIELD_ONLINE_INFORMATION] ?? null;
            $ext = (isset($data[self::FIELD_ONLINE_INFORMATION_EXT]) && is_array($data[self::FIELD_ONLINE_INFORMATION_EXT])) ? $data[self::FIELD_ONLINE_INFORMATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setOnlineInformation($value);
                } else if (is_array($value)) {
                    $this->setOnlineInformation(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setOnlineInformation(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnlineInformation(new FHIRUri($ext));
            } else {
                $this->setOnlineInformation(new FHIRUri(null));
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
        if (array_key_exists(self::FIELD_QUANTITY, $data)) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_PARENT_DEVICE, $data)) {
            if ($data[self::FIELD_PARENT_DEVICE] instanceof FHIRReference) {
                $this->setParentDevice($data[self::FIELD_PARENT_DEVICE]);
            } else {
                $this->setParentDevice(new FHIRReference($data[self::FIELD_PARENT_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_MATERIAL, $data)) {
            if (is_array($data[self::FIELD_MATERIAL])) {
                foreach($data[self::FIELD_MATERIAL] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionMaterial) {
                        $this->addMaterial($v);
                    } else {
                        $this->addMaterial(new FHIRDeviceDefinitionMaterial($v));
                    }
                }
            } elseif ($data[self::FIELD_MATERIAL] instanceof FHIRDeviceDefinitionMaterial) {
                $this->addMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->addMaterial(new FHIRDeviceDefinitionMaterial($data[self::FIELD_MATERIAL]));
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
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID.
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
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier[]
     */
    public function getUdiDeviceIdentifier(): null|array
    {
        return $this->udiDeviceIdentifier;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier $udiDeviceIdentifier
     * @return static
     */
    public function addUdiDeviceIdentifier(null|FHIRDeviceDefinitionUdiDeviceIdentifier $udiDeviceIdentifier = null): self
    {
        if (null === $udiDeviceIdentifier) {
            $udiDeviceIdentifier = new FHIRDeviceDefinitionUdiDeviceIdentifier();
        }
        $this->_trackValueAdded();
        $this->udiDeviceIdentifier[] = $udiDeviceIdentifier;
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
    public function getManufacturerString(): null|FHIRString
    {
        return $this->manufacturerString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $manufacturerString
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setManufacturerString(null|string|FHIRStringPrimitive|FHIRString $manufacturerString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $manufacturerString && !($manufacturerString instanceof FHIRString)) {
            $manufacturerString = new FHIRString($manufacturerString);
        }
        $this->_trackValueSet($this->manufacturerString, $manufacturerString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MANUFACTURER_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER_STRING][0] = $xmlLocation;
        $this->manufacturerString = $manufacturerString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getManufacturerReference(): null|FHIRReference
    {
        return $this->manufacturerReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $manufacturerReference
     * @return static
     */
    public function setManufacturerReference(null|FHIRReference $manufacturerReference = null): self
    {
        if (null === $manufacturerReference) {
            $manufacturerReference = new FHIRReference();
        }
        $this->_trackValueSet($this->manufacturerReference, $manufacturerReference);
        $this->manufacturerReference = $manufacturerReference;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A name given to the device to identify it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName[]
     */
    public function getDeviceName(): null|array
    {
        return $this->deviceName;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A name given to the device to identify it.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName $deviceName
     * @return static
     */
    public function addDeviceName(null|FHIRDeviceDefinitionDeviceName $deviceName = null): self
    {
        if (null === $deviceName) {
            $deviceName = new FHIRDeviceDefinitionDeviceName();
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What kind of device or device system this is.
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
     * What kind of device or device system this is.
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
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization[]
     */
    public function getSpecialization(): null|array
    {
        return $this->specialization;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The capabilities supported on a device, the standards to which the device
     * conforms for a particular purpose, and used for the communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization $specialization
     * @return static
     */
    public function addSpecialization(null|FHIRDeviceDefinitionSpecialization $specialization = null): self
    {
        if (null === $specialization) {
            $specialization = new FHIRDeviceDefinitionSpecialization();
        }
        $this->_trackValueAdded();
        $this->specialization[] = $specialization;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The available versions of the device, e.g., software versions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getVersion(): null|array
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The available versions of the device, e.g., software versions.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addVersion(null|string|FHIRStringPrimitive|FHIRString $version = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VERSION])) {
            $this->_primitiveXmlLocations[self::FIELD_VERSION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VERSION][] = $xmlLocation;
        $this->version[] = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The available versions of the device, e.g., software versions.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $version
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVersion(array $version = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_VERSION]);
        if ([] !== $this->version) {
            $this->_trackValuesRemoved(count($this->version));
            $this->version = [];
        }
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRString) {
                $this->addVersion($v, $xmlLocation);
            } else {
                $this->addVersion(new FHIRString($v), $xmlLocation);
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
     * Safety characteristics of the device.
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
     * Safety characteristics of the device.
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
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[]
     */
    public function getShelfLifeStorage(): null|array
    {
        return $this->shelfLifeStorage;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife $shelfLifeStorage
     * @return static
     */
    public function addShelfLifeStorage(null|FHIRProductShelfLife $shelfLifeStorage = null): self
    {
        if (null === $shelfLifeStorage) {
            $shelfLifeStorage = new FHIRProductShelfLife();
        }
        $this->_trackValueAdded();
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public function getPhysicalCharacteristics(): null|FHIRProdCharacteristic
    {
        return $this->physicalCharacteristics;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $physicalCharacteristics
     * @return static
     */
    public function setPhysicalCharacteristics(null|FHIRProdCharacteristic $physicalCharacteristics = null): self
    {
        if (null === $physicalCharacteristics) {
            $physicalCharacteristics = new FHIRProdCharacteristic();
        }
        $this->_trackValueSet($this->physicalCharacteristics, $physicalCharacteristics);
        $this->physicalCharacteristics = $physicalCharacteristics;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguageCode(): null|array
    {
        return $this->languageCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $languageCode
     * @return static
     */
    public function addLanguageCode(null|FHIRCodeableConcept $languageCode = null): self
    {
        if (null === $languageCode) {
            $languageCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->languageCode[] = $languageCode;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Device capabilities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability[]
     */
    public function getCapability(): null|array
    {
        return $this->capability;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Device capabilities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability $capability
     * @return static
     */
    public function addCapability(null|FHIRDeviceDefinitionCapability $capability = null): self
    {
        if (null === $capability) {
            $capability = new FHIRDeviceDefinitionCapability();
        }
        $this->_trackValueAdded();
        $this->capability[] = $capability;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The actual configuration settings of a device as it actually operates, e.g.,
     * regulation status, time properties.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty $property
     * @return static
     */
    public function addProperty(null|FHIRDeviceDefinitionProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRDeviceDefinitionProperty();
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Access to on-line information about the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getOnlineInformation(): null|FHIRUri
    {
        return $this->onlineInformation;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Access to on-line information about the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $onlineInformation
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOnlineInformation(null|string|FHIRUriPrimitive|FHIRUri $onlineInformation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $onlineInformation && !($onlineInformation instanceof FHIRUri)) {
            $onlineInformation = new FHIRUri($onlineInformation);
        }
        $this->_trackValueSet($this->onlineInformation, $onlineInformation);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ONLINE_INFORMATION])) {
            $this->_primitiveXmlLocations[self::FIELD_ONLINE_INFORMATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ONLINE_INFORMATION][0] = $xmlLocation;
        $this->onlineInformation = $onlineInformation;
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging (e.g. the number of devices
     * present in a pack, or the number of devices in the same package of the medicinal
     * product).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging (e.g. the number of devices
     * present in a pack, or the number of devices in the same package of the medicinal
     * product).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device it can be part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getParentDevice(): null|FHIRReference
    {
        return $this->parentDevice;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parent device it can be part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $parentDevice
     * @return static
     */
    public function setParentDevice(null|FHIRReference $parentDevice = null): self
    {
        if (null === $parentDevice) {
            $parentDevice = new FHIRReference();
        }
        $this->_trackValueSet($this->parentDevice, $parentDevice);
        $this->parentDevice = $parentDevice;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial[]
     */
    public function getMaterial(): null|array
    {
        return $this->material;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial $material
     * @return static
     */
    public function addMaterial(null|FHIRDeviceDefinitionMaterial $material = null): self
    {
        if (null === $material) {
            $material = new FHIRDeviceDefinitionMaterial();
        }
        $this->_trackValueAdded();
        $this->material[] = $material;
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
        if ([] !== ($vs = $this->getUdiDeviceIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UDI_DEVICE_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getManufacturerString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturerReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER_REFERENCE] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSafety())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SAFETY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SHELF_LIFE_STORAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHYSICAL_CHARACTERISTICS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLanguageCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANGUAGE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCapability())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CAPABILITY, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnlineInformation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONLINE_INFORMATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParentDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT_DEVICE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMaterial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MATERIAL, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
            $v = $this->getUdiDeviceIdentifier();
            foreach($validationRules[self::FIELD_UDI_DEVICE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_UDI_DEVICE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
                        $errs[self::FIELD_UDI_DEVICE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_UDI_DEVICE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER_STRING])) {
            $v = $this->getManufacturerString();
            foreach($validationRules[self::FIELD_MANUFACTURER_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MANUFACTURER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER_STRING])) {
                        $errs[self::FIELD_MANUFACTURER_STRING] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER_REFERENCE])) {
            $v = $this->getManufacturerReference();
            foreach($validationRules[self::FIELD_MANUFACTURER_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MANUFACTURER_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER_REFERENCE])) {
                        $errs[self::FIELD_MANUFACTURER_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
            $v = $this->getDeviceName();
            foreach($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_DEVICE_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MODEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODEL_NUMBER])) {
                        $errs[self::FIELD_MODEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_MODEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_SPECIALIZATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SAFETY])) {
            $v = $this->getSafety();
            foreach($validationRules[self::FIELD_SAFETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_SAFETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SAFETY])) {
                        $errs[self::FIELD_SAFETY] = [];
                    }
                    $errs[self::FIELD_SAFETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHELF_LIFE_STORAGE])) {
            $v = $this->getShelfLifeStorage();
            foreach($validationRules[self::FIELD_SHELF_LIFE_STORAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_SHELF_LIFE_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHELF_LIFE_STORAGE])) {
                        $errs[self::FIELD_SHELF_LIFE_STORAGE] = [];
                    }
                    $errs[self::FIELD_SHELF_LIFE_STORAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYSICAL_CHARACTERISTICS])) {
            $v = $this->getPhysicalCharacteristics();
            foreach($validationRules[self::FIELD_PHYSICAL_CHARACTERISTICS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PHYSICAL_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYSICAL_CHARACTERISTICS])) {
                        $errs[self::FIELD_PHYSICAL_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_PHYSICAL_CHARACTERISTICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE_CODE])) {
            $v = $this->getLanguageCode();
            foreach($validationRules[self::FIELD_LANGUAGE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_LANGUAGE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE_CODE])) {
                        $errs[self::FIELD_LANGUAGE_CODE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAPABILITY])) {
            $v = $this->getCapability();
            foreach($validationRules[self::FIELD_CAPABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CAPABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAPABILITY])) {
                        $errs[self::FIELD_CAPABILITY] = [];
                    }
                    $errs[self::FIELD_CAPABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OWNER])) {
            $v = $this->getOwner();
            foreach($validationRules[self::FIELD_OWNER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_OWNER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONLINE_INFORMATION])) {
            $v = $this->getOnlineInformation();
            foreach($validationRules[self::FIELD_ONLINE_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_ONLINE_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONLINE_INFORMATION])) {
                        $errs[self::FIELD_ONLINE_INFORMATION] = [];
                    }
                    $errs[self::FIELD_ONLINE_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT_DEVICE])) {
            $v = $this->getParentDevice();
            foreach($validationRules[self::FIELD_PARENT_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PARENT_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT_DEVICE])) {
                        $errs[self::FIELD_PARENT_DEVICE] = [];
                    }
                    $errs[self::FIELD_PARENT_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERIAL])) {
            $v = $this->getMaterial();
            foreach($validationRules[self::FIELD_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERIAL])) {
                        $errs[self::FIELD_MATERIAL] = [];
                    }
                    $errs[self::FIELD_MATERIAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
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
        } else if (!($type instanceof FHIRDeviceDefinition)) {
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
            } elseif (self::FIELD_UDI_DEVICE_IDENTIFIER === $childName) {
                $type->addUdiDeviceIdentifier(FHIRDeviceDefinitionUdiDeviceIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MANUFACTURER_STRING === $childName) {
                $type->setManufacturerString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MANUFACTURER_REFERENCE === $childName) {
                $type->setManufacturerReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_NAME === $childName) {
                $type->addDeviceName(FHIRDeviceDefinitionDeviceName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODEL_NUMBER === $childName) {
                $type->setModelNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIALIZATION === $childName) {
                $type->addSpecialization(FHIRDeviceDefinitionSpecialization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERSION === $childName) {
                $type->addVersion(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SAFETY === $childName) {
                $type->addSafety(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SHELF_LIFE_STORAGE === $childName) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PHYSICAL_CHARACTERISTICS === $childName) {
                $type->setPhysicalCharacteristics(FHIRProdCharacteristic::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LANGUAGE_CODE === $childName) {
                $type->addLanguageCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CAPABILITY === $childName) {
                $type->addCapability(FHIRDeviceDefinitionCapability::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROPERTY === $childName) {
                $type->addProperty(FHIRDeviceDefinitionProperty::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OWNER === $childName) {
                $type->setOwner(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ONLINE_INFORMATION === $childName) {
                $type->setOnlineInformation(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUANTITY === $childName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARENT_DEVICE === $childName) {
                $type->setParentDevice(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MATERIAL === $childName) {
                $type->addMaterial(FHIRDeviceDefinitionMaterial::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_MANUFACTURER_STRING])) {
            $pt = $type->getManufacturerString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MANUFACTURER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setManufacturerString((string)$attributes[self::FIELD_MANUFACTURER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VERSION])) {
            $type->addVersion((string)$attributes[self::FIELD_VERSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONLINE_INFORMATION])) {
            $pt = $type->getOnlineInformation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ONLINE_INFORMATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOnlineInformation((string)$attributes[self::FIELD_ONLINE_INFORMATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'DeviceDefinition', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getManufacturerString())) {
            $xw->writeAttribute(self::FIELD_MANUFACTURER_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getModelNumber())) {
            $xw->writeAttribute(self::FIELD_MODEL_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VERSION] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getVersion())) {
            $xw->writeAttribute(self::FIELD_VERSION, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getVersion()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_VERSION, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ONLINE_INFORMATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOnlineInformation())) {
            $xw->writeAttribute(self::FIELD_ONLINE_INFORMATION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUdiDeviceIdentifier() as $v) {
            $xw->startElement(self::FIELD_UDI_DEVICE_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MANUFACTURER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getManufacturerString())) {
            $xw->startElement(self::FIELD_MANUFACTURER_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getManufacturerReference())) {
            $xw->startElement(self::FIELD_MANUFACTURER_REFERENCE);
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_VERSION] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_VERSION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getSafety() as $v) {
            $xw->startElement(self::FIELD_SAFETY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getShelfLifeStorage() as $v) {
            $xw->startElement(self::FIELD_SHELF_LIFE_STORAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $xw->startElement(self::FIELD_PHYSICAL_CHARACTERISTICS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLanguageCode() as $v) {
            $xw->startElement(self::FIELD_LANGUAGE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCapability() as $v) {
            $xw->startElement(self::FIELD_CAPABILITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProperty() as $v) {
            $xw->startElement(self::FIELD_PROPERTY);
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ONLINE_INFORMATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOnlineInformation())) {
            $xw->startElement(self::FIELD_ONLINE_INFORMATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getQuantity())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParentDevice())) {
            $xw->startElement(self::FIELD_PARENT_DEVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMaterial() as $v) {
            $xw->startElement(self::FIELD_MATERIAL);
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
        if ([] !== ($vs = $this->getUdiDeviceIdentifier())) {
            $out->{self::FIELD_UDI_DEVICE_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_UDI_DEVICE_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getManufacturerString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MANUFACTURER_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MANUFACTURER_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getManufacturerReference())) {
            $out->{self::FIELD_MANUFACTURER_REFERENCE} = $v;
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
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_VERSION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            $out->{self::FIELD_SAFETY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SAFETY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            $out->{self::FIELD_SHELF_LIFE_STORAGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SHELF_LIFE_STORAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $out->{self::FIELD_PHYSICAL_CHARACTERISTICS} = $v;
        }
        if ([] !== ($vs = $this->getLanguageCode())) {
            $out->{self::FIELD_LANGUAGE_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LANGUAGE_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCapability())) {
            $out->{self::FIELD_CAPABILITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CAPABILITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
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
        if (null !== ($v = $this->getOnlineInformation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONLINE_INFORMATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONLINE_INFORMATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getParentDevice())) {
            $out->{self::FIELD_PARENT_DEVICE} = $v;
        }
        if ([] !== ($vs = $this->getMaterial())) {
            $out->{self::FIELD_MATERIAL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MATERIAL}[] = $v;
            }
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