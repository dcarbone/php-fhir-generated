<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the characteristics, operational status and capabilities of a
 * medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceComponent
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceComponent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LANGUAGE_CODE = 'languageCode';
    const FIELD_LAST_SYSTEM_CHANGE = 'lastSystemChange';
    const FIELD_LAST_SYSTEM_CHANGE_EXT = '_lastSystemChange';
    const FIELD_MEASUREMENT_PRINCIPLE = 'measurementPrinciple';
    const FIELD_MEASUREMENT_PRINCIPLE_EXT = '_measurementPrinciple';
    const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    const FIELD_PARAMETER_GROUP = 'parameterGroup';
    const FIELD_PARENT = 'parent';
    const FIELD_PRODUCTION_SPECIFICATION = 'productionSpecification';
    const FIELD_SOURCE = 'source';
    const FIELD_TYPE = 'type';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $languageCode = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    private $lastSystemChange = null;
    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    private $measurementPrinciple = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $operationalStatus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $parameterGroup = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $parent = null;
    /**
     * Describes the characteristics, operational status and capabilities of a
     * medical-related component of a medical device.
     *
     * Describes the production specification such as component revision, serial
     * number, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    private $productionSpecification = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $source = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRDeviceComponent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceComponent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE_CODE])) {
            if ($data[self::FIELD_LANGUAGE_CODE] instanceof FHIRCodeableConcept) {
                $this->setLanguageCode($data[self::FIELD_LANGUAGE_CODE]);
            } else {
                $this->setLanguageCode(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE_CODE]));
            }
        }
        if (isset($data[self::FIELD_LAST_SYSTEM_CHANGE])) {
            $ext = (isset($data[self::FIELD_LAST_SYSTEM_CHANGE_EXT]) && is_array($data[self::FIELD_LAST_SYSTEM_CHANGE_EXT]))
                ? $data[self::FIELD_LAST_SYSTEM_CHANGE_EXT]
                : null;
            if ($data[self::FIELD_LAST_SYSTEM_CHANGE] instanceof FHIRInstant) {
                $this->setLastSystemChange($data[self::FIELD_LAST_SYSTEM_CHANGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_SYSTEM_CHANGE])) {
                $this->setLastSystemChange(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_LAST_SYSTEM_CHANGE]] + $ext));
            } else {
                $this->setLastSystemChange(new FHIRInstant($data[self::FIELD_LAST_SYSTEM_CHANGE]));
            }
        }
        if (isset($data[self::FIELD_MEASUREMENT_PRINCIPLE])) {
            $ext = (isset($data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT]) && is_array($data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT]))
                ? $data[self::FIELD_MEASUREMENT_PRINCIPLE_EXT]
                : null;
            if ($data[self::FIELD_MEASUREMENT_PRINCIPLE] instanceof FHIRMeasmnt_Principle) {
                $this->setMeasurementPrinciple($data[self::FIELD_MEASUREMENT_PRINCIPLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_MEASUREMENT_PRINCIPLE])) {
                $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle([FHIRMeasmnt_Principle::FIELD_VALUE => $data[self::FIELD_MEASUREMENT_PRINCIPLE]] + $ext));
            } else {
                $this->setMeasurementPrinciple(new FHIRMeasmnt_Principle($data[self::FIELD_MEASUREMENT_PRINCIPLE]));
            }
        }
        if (isset($data[self::FIELD_OPERATIONAL_STATUS])) {
            if (is_array($data[self::FIELD_OPERATIONAL_STATUS])) {
                foreach($data[self::FIELD_OPERATIONAL_STATUS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOperationalStatus($v);
                    } else {
                        $this->addOperationalStatus(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_OPERATIONAL_STATUS] instanceof FHIRCodeableConcept) {
                $this->addOperationalStatus($data[self::FIELD_OPERATIONAL_STATUS]);
            } else {
                $this->addOperationalStatus(new FHIRCodeableConcept($data[self::FIELD_OPERATIONAL_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER_GROUP])) {
            if ($data[self::FIELD_PARAMETER_GROUP] instanceof FHIRCodeableConcept) {
                $this->setParameterGroup($data[self::FIELD_PARAMETER_GROUP]);
            } else {
                $this->setParameterGroup(new FHIRCodeableConcept($data[self::FIELD_PARAMETER_GROUP]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_PRODUCTION_SPECIFICATION])) {
            if (is_array($data[self::FIELD_PRODUCTION_SPECIFICATION])) {
                foreach($data[self::FIELD_PRODUCTION_SPECIFICATION] as $v) {
                    if ($v instanceof FHIRDeviceComponentProductionSpecification) {
                        $this->addProductionSpecification($v);
                    } else {
                        $this->addProductionSpecification(new FHIRDeviceComponentProductionSpecification($v));
                    }
                }
            } else if ($data[self::FIELD_PRODUCTION_SPECIFICATION] instanceof FHIRDeviceComponentProductionSpecification) {
                $this->addProductionSpecification($data[self::FIELD_PRODUCTION_SPECIFICATION]);
            } else {
                $this->addProductionSpecification(new FHIRDeviceComponentProductionSpecification($data[self::FIELD_PRODUCTION_SPECIFICATION]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
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
        return "<DeviceComponent{$xmlns}></DeviceComponent>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
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
     * Describes the local assigned unique identification by the software. For example:
     * handle ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the language code for the human-readable text string produced by the
     * device. This language code will follow the IETF language tag. Example: en-US.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $languageCode
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setLanguageCode(FHIRCodeableConcept $languageCode = null)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange()
    {
        return $this->lastSystemChange;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $lastSystemChange
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setLastSystemChange($lastSystemChange = null)
    {
        if (null === $lastSystemChange) {
            $this->lastSystemChange = null;
            return $this;
        }
        if ($lastSystemChange instanceof FHIRInstant) {
            $this->lastSystemChange = $lastSystemChange;
            return $this;
        }
        $this->lastSystemChange = new FHIRInstant($lastSystemChange);
        return $this;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    public function getMeasurementPrinciple()
    {
        return $this->measurementPrinciple;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the physical principle of the measurement. For example: thermal,
     * chemical, acoustical, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle $measurementPrinciple
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setMeasurementPrinciple(FHIRMeasmnt_Principle $measurementPrinciple = null)
    {
        $this->measurementPrinciple = $measurementPrinciple;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function addOperationalStatus(FHIRCodeableConcept $operationalStatus = null)
    {
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates current operational status of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $operationalStatus
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setOperationalStatus(array $operationalStatus = [])
    {
        $this->operationalStatus = [];
        if ([] === $operationalStatus) {
            return $this;
        }
        foreach($operationalStatus as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addOperationalStatus($v);
            } else {
                $this->addOperationalStatus(new FHIRCodeableConcept($v));
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
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup()
    {
        return $this->parameterGroup;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the parameter group supported by the current device component that is
     * based on some nomenclature, e.g. cardiovascular.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setParameterGroup(FHIRCodeableConcept $parameterGroup = null)
    {
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Describes the link to the parent resource. For example: Channel is linked to its
     * VMD parent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $parent
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setParent(FHIRReference $parent = null)
    {
        $this->parent = $parent;
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
    public function getProductionSpecification()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function addProductionSpecification(FHIRDeviceComponentProductionSpecification $productionSpecification = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[] $productionSpecification
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setProductionSpecification(array $productionSpecification = [])
    {
        $this->productionSpecification = [];
        if ([] === $productionSpecification) {
            return $this;
        }
        foreach($productionSpecification as $v) {
            if ($v instanceof FHIRDeviceComponentProductionSpecification) {
                $this->addProductionSpecification($v);
            } else {
                $this->addProductionSpecification(new FHIRDeviceComponentProductionSpecification($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the source Device that contains administrative device
     * information such as manufacture, serial number, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $source
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setSource(FHIRReference $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * Describes the specific component type as defined in the object-oriented or
     * metric nomenclature partition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
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
                throw new \DomainException(sprintf('FHIRDeviceComponent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceComponent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceComponent;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceComponent)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceComponent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent or null, %s seen.',
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
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->languageCode)) {
            $type->setLanguageCode(FHIRCodeableConcept::xmlUnserialize($children->languageCode));
        }
        if (isset($attributes->lastSystemChange)) {
            $type->setLastSystemChange((string)$attributes->lastSystemChange);
        }
        if (isset($children->lastSystemChange)) {
            $type->setLastSystemChange(FHIRInstant::xmlUnserialize($children->lastSystemChange));
        }
        if (isset($children->measurementPrinciple)) {
            $type->setMeasurementPrinciple(FHIRMeasmnt_Principle::xmlUnserialize($children->measurementPrinciple));
        }
        if (isset($children->operationalStatus)) {
            foreach($children->operationalStatus as $child) {
                $type->addOperationalStatus(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->parameterGroup)) {
            $type->setParameterGroup(FHIRCodeableConcept::xmlUnserialize($children->parameterGroup));
        }
        if (isset($children->parent)) {
            $type->setParent(FHIRReference::xmlUnserialize($children->parent));
        }
        if (isset($children->productionSpecification)) {
            foreach($children->productionSpecification as $child) {
                $type->addProductionSpecification(FHIRDeviceComponentProductionSpecification::xmlUnserialize($child));
            }
        }
        if (isset($children->source)) {
            $type->setSource(FHIRReference::xmlUnserialize($children->source));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getLanguageCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLastSystemChange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_SYSTEM_CHANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMeasurementPrinciple())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASUREMENT_PRINCIPLE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getOperationalStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATIONAL_STATUS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getParameterGroup())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER_GROUP, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProductionSpecification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCTION_SPECIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IDENTIFIER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getLanguageCode())) {
            $a[self::FIELD_LANGUAGE_CODE] = $v;
        }
        if (null !== ($v = $this->getLastSystemChange())) {
            $a[self::FIELD_LAST_SYSTEM_CHANGE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_LAST_SYSTEM_CHANGE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getMeasurementPrinciple())) {
            $a[self::FIELD_MEASUREMENT_PRINCIPLE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MEASUREMENT_PRINCIPLE_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperationalStatus())) {
            $a[self::FIELD_OPERATIONAL_STATUS] = $vs;
        }
        if (null !== ($v = $this->getParameterGroup())) {
            $a[self::FIELD_PARAMETER_GROUP] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a[self::FIELD_PARENT] = $v;
        }
        if ([] !== ($vs = $this->getProductionSpecification())) {
            $a[self::FIELD_PRODUCTION_SPECIFICATION] = $vs;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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