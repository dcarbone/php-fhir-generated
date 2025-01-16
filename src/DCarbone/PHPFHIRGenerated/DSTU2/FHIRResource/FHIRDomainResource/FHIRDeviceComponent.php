<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * Describes the characteristics, operational status and capabilities of a
 * medical-related component of a medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDeviceComponent
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceComponent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT;

    const FIELD_TYPE = 'type';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LAST_SYSTEM_CHANGE = 'lastSystemChange';
    const FIELD_LAST_SYSTEM_CHANGE_EXT = '_lastSystemChange';
    const FIELD_SOURCE = 'source';
    const FIELD_PARENT = 'parent';
    const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    const FIELD_PARAMETER_GROUP = 'parameterGroup';
    const FIELD_MEASUREMENT_PRINCIPLE = 'measurementPrinciple';
    const FIELD_MEASUREMENT_PRINCIPLE_EXT = '_measurementPrinciple';
    const FIELD_PRODUCTION_SPECIFICATION = 'productionSpecification';
    const FIELD_LANGUAGE_CODE = 'languageCode';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $lastSystemChange = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $source = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $parent = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $operationalStatus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $parameterGroup = null;
    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    protected null|FHIRMeasmnt_Principle $measurementPrinciple = null;
    /**
     * Describes the characteristics, operational status and capabilities of a
     * medical-related component of a medical device.
     *
     * Describes the production specification such as component revision, serial
     * number, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    protected null|array $productionSpecification = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $languageCode = null;

    /**
     * Validation map for fields in type DeviceComponent
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_IDENTIFIER => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_LAST_SYSTEM_CHANGE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRDeviceComponent Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_LAST_SYSTEM_CHANGE, $data) || array_key_exists(self::FIELD_LAST_SYSTEM_CHANGE_EXT, $data)) {
            $value = $data[self::FIELD_LAST_SYSTEM_CHANGE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_SYSTEM_CHANGE_EXT]) && is_array($data[self::FIELD_LAST_SYSTEM_CHANGE_EXT])) ? $data[self::FIELD_LAST_SYSTEM_CHANGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setLastSystemChange($value);
                } else if (is_array($value)) {
                    $this->setLastSystemChange(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setLastSystemChange(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastSystemChange(new FHIRInstant($ext));
            } else {
                $this->setLastSystemChange(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE, $data)) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (array_key_exists(self::FIELD_PARENT, $data)) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (array_key_exists(self::FIELD_OPERATIONAL_STATUS, $data)) {
            if (is_array($data[self::FIELD_OPERATIONAL_STATUS])) {
                foreach($data[self::FIELD_OPERATIONAL_STATUS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOperationalStatus($v);
                    } else {
                        $this->addOperationalStatus(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_OPERATIONAL_STATUS] instanceof FHIRCodeableConcept) {
                $this->addOperationalStatus($data[self::FIELD_OPERATIONAL_STATUS]);
            } else {
                $this->addOperationalStatus(new FHIRCodeableConcept($data[self::FIELD_OPERATIONAL_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_PARAMETER_GROUP, $data)) {
            if ($data[self::FIELD_PARAMETER_GROUP] instanceof FHIRCodeableConcept) {
                $this->setParameterGroup($data[self::FIELD_PARAMETER_GROUP]);
            } else {
                $this->setParameterGroup(new FHIRCodeableConcept($data[self::FIELD_PARAMETER_GROUP]));
            }
        }
        if (array_key_exists(self::FIELD_MEASUREMENT_PRINCIPLE, $data) || array_key_exists(self::FIELD_MEASUREMENT_PRINCIPLE_EXT, $data)) {
            $value = $data[self::FIELD_MEASUREMENT_PRINCIPLE] ?? null;
            $ext = (isset($data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT]) && is_array($data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT])) ? $data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMeasmnt_Principle) {
                    $this->setMeasurementPrinciple($value);
                } else if (is_array($value)) {
                    $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle(array_merge($ext, $value)));
                } else {
                    $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle([FHIRMeasmnt_Principle::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle($ext));
            } else {
                $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle(null));
            }
        }
        if (array_key_exists(self::FIELD_PRODUCTION_SPECIFICATION, $data)) {
            if (is_array($data[self::FIELD_PRODUCTION_SPECIFICATION])) {
                foreach($data[self::FIELD_PRODUCTION_SPECIFICATION] as $v) {
                    if ($v instanceof FHIRDeviceComponentProductionSpecification) {
                        $this->addProductionSpecification($v);
                    } else {
                        $this->addProductionSpecification(new FHIRDeviceComponentProductionSpecification($v));
                    }
                }
            } elseif ($data[self::FIELD_PRODUCTION_SPECIFICATION] instanceof FHIRDeviceComponentProductionSpecification) {
                $this->addProductionSpecification($data[self::FIELD_PRODUCTION_SPECIFICATION]);
            } else {
                $this->addProductionSpecification(new FHIRDeviceComponentProductionSpecification($data[self::FIELD_PRODUCTION_SPECIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_LANGUAGE_CODE, $data)) {
            if ($data[self::FIELD_LANGUAGE_CODE] instanceof FHIRCodeableConcept) {
                $this->setLanguageCode($data[self::FIELD_LANGUAGE_CODE]);
            } else {
                $this->setLanguageCode(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE_CODE]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange(): null|FHIRInstant
    {
        return $this->lastSystemChange;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $lastSystemChange
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastSystemChange(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastSystemChange = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $lastSystemChange && !($lastSystemChange instanceof FHIRInstant)) {
            $lastSystemChange = new FHIRInstant($lastSystemChange);
        }
        $this->_trackValueSet($this->lastSystemChange, $lastSystemChange);
        if (!isset($this->_xmlLocations[self::FIELD_LAST_SYSTEM_CHANGE])) {
            $this->_xmlLocations[self::FIELD_LAST_SYSTEM_CHANGE] = [];
        }
        $this->_xmlLocations[self::FIELD_LAST_SYSTEM_CHANGE][0] = $xmlLocation;
        $this->lastSystemChange = $lastSystemChange;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSource(): null|FHIRReference
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $source
     * @return static
     */
    public function setSource(null|FHIRReference $source = null): self
    {
        if (null === $source) {
            $source = new FHIRReference();
        }
        $this->_trackValueSet($this->source, $source);
        $this->source = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $parent
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus(): null|array
    {
        return $this->operationalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return static
     */
    public function addOperationalStatus(null|FHIRCodeableConcept $operationalStatus = null): self
    {
        if (null === $operationalStatus) {
            $operationalStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$operationalStatus
     * @return static
     */
    public function setOperationalStatus(FHIRCodeableConcept ...$operationalStatus): self
    {
        if ([] !== $this->operationalStatus) {
            $this->_trackValuesRemoved(count($this->operationalStatus));
            $this->operationalStatus = [];
        }
        if ([] === $operationalStatus) {
            return $this;
        }
        foreach($operationalStatus as $v) {
            $this->addOperationalStatus($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup(): null|FHIRCodeableConcept
    {
        return $this->parameterGroup;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return static
     */
    public function setParameterGroup(null|FHIRCodeableConcept $parameterGroup = null): self
    {
        if (null === $parameterGroup) {
            $parameterGroup = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->parameterGroup, $parameterGroup);
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    public function getMeasurementPrinciple(): null|FHIRMeasmnt_Principle
    {
        return $this->measurementPrinciple;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle $measurementPrinciple
     * @return static
     */
    public function setMeasurementPrinciple(null|FHIRMeasmnt_Principle $measurementPrinciple = null): self
    {
        if (null === $measurementPrinciple) {
            $measurementPrinciple = new FHIRMeasmnt_Principle();
        }
        $this->_trackValueSet($this->measurementPrinciple, $measurementPrinciple);
        $this->measurementPrinciple = $measurementPrinciple;
        return $this;
    }

    /**
     * Describes the characteristics, operational status and capabilities of a
     * medical-related component of a medical device.
     *
     * Describes the production specification such as component revision, serial
     * number, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification(): null|array
    {
        return $this->productionSpecification;
    }

    /**
     * Describes the characteristics, operational status and capabilities of a
     * medical-related component of a medical device.
     *
     * Describes the production specification such as component revision, serial
     * number, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $productionSpecification
     * @return static
     */
    public function addProductionSpecification(null|FHIRDeviceComponentProductionSpecification $productionSpecification = null): self
    {
        if (null === $productionSpecification) {
            $productionSpecification = new FHIRDeviceComponentProductionSpecification();
        }
        $this->_trackValueAdded();
        $this->productionSpecification[] = $productionSpecification;
        return $this;
    }

    /**
     * Describes the characteristics, operational status and capabilities of a
     * medical-related component of a medical device.
     *
     * Describes the production specification such as component revision, serial
     * number, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification ...$productionSpecification
     * @return static
     */
    public function setProductionSpecification(FHIRDeviceComponentProductionSpecification ...$productionSpecification): self
    {
        if ([] !== $this->productionSpecification) {
            $this->_trackValuesRemoved(count($this->productionSpecification));
            $this->productionSpecification = [];
        }
        if ([] === $productionSpecification) {
            return $this;
        }
        foreach($productionSpecification as $v) {
            $this->addProductionSpecification($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode(): null|FHIRCodeableConcept
    {
        return $this->languageCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $languageCode
     * @return static
     */
    public function setLanguageCode(null|FHIRCodeableConcept $languageCode = null): self
    {
        if (null === $languageCode) {
            $languageCode = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->languageCode, $languageCode);
        $this->languageCode = $languageCode;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastSystemChange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_SYSTEM_CHANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOperationalStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATIONAL_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getParameterGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARAMETER_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasurementPrinciple())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASUREMENT_PRINCIPLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProductionSpecification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCTION_SPECIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLanguageCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LANGUAGE_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_SYSTEM_CHANGE])) {
            $v = $this->getLastSystemChange();
            foreach($validationRules[self::FIELD_LAST_SYSTEM_CHANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_LAST_SYSTEM_CHANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_SYSTEM_CHANGE])) {
                        $errs[self::FIELD_LAST_SYSTEM_CHANGE] = [];
                    }
                    $errs[self::FIELD_LAST_SYSTEM_CHANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATIONAL_STATUS])) {
            $v = $this->getOperationalStatus();
            foreach($validationRules[self::FIELD_OPERATIONAL_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_OPERATIONAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATIONAL_STATUS])) {
                        $errs[self::FIELD_OPERATIONAL_STATUS] = [];
                    }
                    $errs[self::FIELD_OPERATIONAL_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER_GROUP])) {
            $v = $this->getParameterGroup();
            foreach($validationRules[self::FIELD_PARAMETER_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_PARAMETER_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER_GROUP])) {
                        $errs[self::FIELD_PARAMETER_GROUP] = [];
                    }
                    $errs[self::FIELD_PARAMETER_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASUREMENT_PRINCIPLE])) {
            $v = $this->getMeasurementPrinciple();
            foreach($validationRules[self::FIELD_MEASUREMENT_PRINCIPLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_MEASUREMENT_PRINCIPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASUREMENT_PRINCIPLE])) {
                        $errs[self::FIELD_MEASUREMENT_PRINCIPLE] = [];
                    }
                    $errs[self::FIELD_MEASUREMENT_PRINCIPLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCTION_SPECIFICATION])) {
            $v = $this->getProductionSpecification();
            foreach($validationRules[self::FIELD_PRODUCTION_SPECIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_PRODUCTION_SPECIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCTION_SPECIFICATION])) {
                        $errs[self::FIELD_PRODUCTION_SPECIFICATION] = [];
                    }
                    $errs[self::FIELD_PRODUCTION_SPECIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE_CODE])) {
            $v = $this->getLanguageCode();
            foreach($validationRules[self::FIELD_LANGUAGE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT, self::FIELD_LANGUAGE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE_CODE])) {
                        $errs[self::FIELD_LANGUAGE_CODE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE_CODE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
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
        } else if (!($type instanceof FHIRDeviceComponent)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LAST_SYSTEM_CHANGE === $childName) {
                $type->setLastSystemChange(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SOURCE === $childName) {
                $type->setSource(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARENT === $childName) {
                $type->setParent(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPERATIONAL_STATUS === $childName) {
                $type->addOperationalStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARAMETER_GROUP === $childName) {
                $type->setParameterGroup(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASUREMENT_PRINCIPLE === $childName) {
                $type->setMeasurementPrinciple(FHIRMeasmnt_Principle::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRODUCTION_SPECIFICATION === $childName) {
                $type->addProductionSpecification(FHIRDeviceComponentProductionSpecification::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LANGUAGE_CODE === $childName) {
                $type->setLanguageCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_LAST_SYSTEM_CHANGE])) {
            $pt = $type->getLastSystemChange();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_SYSTEM_CHANGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastSystemChange((string)$attributes[self::FIELD_LAST_SYSTEM_CHANGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'DeviceComponent', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_SYSTEM_CHANGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastSystemChange())) {
            $xw->writeAttribute(self::FIELD_LAST_SYSTEM_CHANGE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIdentifier())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_SYSTEM_CHANGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastSystemChange())) {
            $xw->startElement(self::FIELD_LAST_SYSTEM_CHANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSource())) {
            $xw->startElement(self::FIELD_SOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParent())) {
            $xw->startElement(self::FIELD_PARENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOperationalStatus() as $v) {
            $xw->startElement(self::FIELD_OPERATIONAL_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParameterGroup())) {
            $xw->startElement(self::FIELD_PARAMETER_GROUP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasurementPrinciple())) {
            $xw->startElement(self::FIELD_MEASUREMENT_PRINCIPLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProductionSpecification() as $v) {
            $xw->startElement(self::FIELD_PRODUCTION_SPECIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLanguageCode())) {
            $xw->startElement(self::FIELD_LANGUAGE_CODE);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getLastSystemChange())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_SYSTEM_CHANGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_SYSTEM_CHANGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSource())) {
            $out->{self::FIELD_SOURCE} = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $out->{self::FIELD_PARENT} = $v;
        }
        if ([] !== ($vs = $this->getOperationalStatus())) {
            $out->{self::FIELD_OPERATIONAL_STATUS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OPERATIONAL_STATUS}[] = $v;
            }
        }
        if (null !== ($v = $this->getParameterGroup())) {
            $out->{self::FIELD_PARAMETER_GROUP} = $v;
        }
        if (null !== ($v = $this->getMeasurementPrinciple())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEASUREMENT_PRINCIPLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMeasmnt_Principle::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEASUREMENT_PRINCIPLE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProductionSpecification())) {
            $out->{self::FIELD_PRODUCTION_SPECIFICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PRODUCTION_SPECIFICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getLanguageCode())) {
            $out->{self::FIELD_LANGUAGE_CODE} = $v;
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