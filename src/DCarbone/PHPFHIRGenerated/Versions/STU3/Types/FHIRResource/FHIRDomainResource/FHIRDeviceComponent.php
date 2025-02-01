<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasmntPrincipleList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRDeviceComponent extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_COMPONENT;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_LAST_SYSTEM_CHANGE = 'lastSystemChange';
    public const FIELD_LAST_SYSTEM_CHANGE_EXT = '_lastSystemChange';
    public const FIELD_SOURCE = 'source';
    public const FIELD_PARENT = 'parent';
    public const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    public const FIELD_PARAMETER_GROUP = 'parameterGroup';
    public const FIELD_MEASUREMENT_PRINCIPLE = 'measurementPrinciple';
    public const FIELD_MEASUREMENT_PRINCIPLE_EXT = '_measurementPrinciple';
    public const FIELD_PRODUCTION_SPECIFICATION = 'productionSpecification';
    public const FIELD_LANGUAGE_CODE = 'languageCode';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LAST_SYSTEM_CHANGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MEASUREMENT_PRINCIPLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The locally assigned unique identification by the software. For example: handle
     * ID.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The component type as defined in the object-oriented or metric nomenclature
     * partition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $lastSystemChange;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the source Device that contains administrative device information
     * such as manufacture, serial number, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $source;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the parent resource. For example: Channel is linked to its VMD
     * parent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $parent;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The current operational status of the device. For example: On, Off, Standby,
     * etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $operationalStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter group supported by the current device component that is based on
     * some nomenclature, e.g. cardiovascular.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $parameterGroup;
    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The physical principle of the measurement. For example: thermal, chemical,
     * acoustical, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple 
     */
    protected FHIRMeasmntPrinciple $measurementPrinciple;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The production specification such as component revision, serial number, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[] 
     */
    protected array $productionSpecification;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language code for the human-readable text string produced by the device.
     * This language code will follow the IETF language tag. Example: en-US.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $languageCode;

    /* constructor.php:63 */
    /**
     * FHIRDeviceComponent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $lastSystemChange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $source
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $parent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $operationalStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasmntPrincipleList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple $measurementPrinciple
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[] $productionSpecification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $languageCode
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
                                null|FHIRIdentifier $identifier = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastSystemChange = null,
                                null|FHIRReference $source = null,
                                null|FHIRReference $parent = null,
                                null|iterable $operationalStatus = null,
                                null|FHIRCodeableConcept $parameterGroup = null,
                                null|string|FHIRMeasmntPrincipleList|FHIRMeasmntPrinciple $measurementPrinciple = null,
                                null|iterable $productionSpecification = null,
                                null|FHIRCodeableConcept $languageCode = null,
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
            $this->setIdentifier($identifier);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $lastSystemChange) {
            $this->setLastSystemChange($lastSystemChange);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $parent) {
            $this->setParent($parent);
        }
        if (null !== $operationalStatus) {
            $this->setOperationalStatus(...$operationalStatus);
        }
        if (null !== $parameterGroup) {
            $this->setParameterGroup($parameterGroup);
        }
        if (null !== $measurementPrinciple) {
            $this->setMeasurementPrinciple($measurementPrinciple);
        }
        if (null !== $productionSpecification) {
            $this->setProductionSpecification(...$productionSpecification);
        }
        if (null !== $languageCode) {
            $this->setLanguageCode($languageCode);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The locally assigned unique identification by the software. For example: handle
     * ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
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
     * The locally assigned unique identification by the software. For example: handle
     * ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The component type as defined in the object-oriented or metric nomenclature
     * partition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
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
     * The component type as defined in the object-oriented or metric nomenclature
     * partition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
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
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange(): null|FHIRInstant
    {
        return $this->lastSystemChange ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timestamp for the most recent system change which includes device
     * configuration or setting change.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $lastSystemChange
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastSystemChange(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastSystemChange,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastSystemChange) {
            unset($this->lastSystemChange);
            return $this;
        }
        if (!($lastSystemChange instanceof FHIRInstant)) {
            $lastSystemChange = new FHIRInstant(value: $lastSystemChange);
        }
        $this->lastSystemChange = $lastSystemChange;
        if ($this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE] !== $valueXMLLocation) {
            $this->_setLastSystemChangeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastSystemChange element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastSystemChangeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE];
    }

    /**
     * Set the location the "value" field of the lastSystemChange element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastSystemChangeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the source Device that contains administrative device information
     * such as manufacture, serial number, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getSource(): null|FHIRReference
    {
        return $this->source ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the source Device that contains administrative device information
     * such as manufacture, serial number, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $source
     * @return static
     */
    public function setSource(null|FHIRReference $source): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the parent resource. For example: Channel is linked to its VMD
     * parent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The link to the parent resource. For example: Channel is linked to its VMD
     * parent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $parent
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

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The current operational status of the device. For example: On, Off, Standby,
     * etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus(): array
    {
        return $this->operationalStatus ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getOperationalStatusIterator(): iterable
    {
        if (!isset($this->operationalStatus)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->operationalStatus);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The current operational status of the device. For example: On, Off, Standby,
     * etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return static
     */
    public function addOperationalStatus(FHIRCodeableConcept $operationalStatus): self
    {
        if (!isset($this->operationalStatus)) {
            $this->operationalStatus = [];
        }
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The current operational status of the device. For example: On, Off, Standby,
     * etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$operationalStatus
     * @return static
     */
    public function setOperationalStatus(FHIRCodeableConcept ...$operationalStatus): self
    {
        if ([] === $operationalStatus) {
            unset($this->operationalStatus);
            return $this;
        }
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter group supported by the current device component that is based on
     * some nomenclature, e.g. cardiovascular.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup(): null|FHIRCodeableConcept
    {
        return $this->parameterGroup ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter group supported by the current device component that is based on
     * some nomenclature, e.g. cardiovascular.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return static
     */
    public function setParameterGroup(null|FHIRCodeableConcept $parameterGroup): self
    {
        if (null === $parameterGroup) {
            unset($this->parameterGroup);
            return $this;
        }
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The physical principle of the measurement. For example: thermal, chemical,
     * acoustical, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple
     */
    public function getMeasurementPrinciple(): null|FHIRMeasmntPrinciple
    {
        return $this->measurementPrinciple ?? null;
    }

    /**
     * Different measurement principle supported by the device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The physical principle of the measurement. For example: thermal, chemical,
     * acoustical, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasmntPrincipleList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple $measurementPrinciple
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMeasurementPrinciple(null|string|FHIRMeasmntPrincipleList|FHIRMeasmntPrinciple $measurementPrinciple,
                                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $measurementPrinciple) {
            unset($this->measurementPrinciple);
            return $this;
        }
        if (!($measurementPrinciple instanceof FHIRMeasmntPrinciple)) {
            $measurementPrinciple = new FHIRMeasmntPrinciple(value: $measurementPrinciple);
        }
        $this->measurementPrinciple = $measurementPrinciple;
        if ($this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE] !== $valueXMLLocation) {
            $this->_setMeasurementPrincipleValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the measurementPrinciple element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMeasurementPrincipleValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE];
    }

    /**
     * Set the location the "value" field of the measurementPrinciple element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMeasurementPrincipleValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE] = $valueXMLLocation;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The production specification such as component revision, serial number, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification(): array
    {
        return $this->productionSpecification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification>
     */
    public function getProductionSpecificationIterator(): iterable
    {
        if (!isset($this->productionSpecification)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->productionSpecification);
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The production specification such as component revision, serial number, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $productionSpecification
     * @return static
     */
    public function addProductionSpecification(FHIRDeviceComponentProductionSpecification $productionSpecification): self
    {
        if (!isset($this->productionSpecification)) {
            $this->productionSpecification = [];
        }
        $this->productionSpecification[] = $productionSpecification;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The production specification such as component revision, serial number, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification ...$productionSpecification
     * @return static
     */
    public function setProductionSpecification(FHIRDeviceComponentProductionSpecification ...$productionSpecification): self
    {
        if ([] === $productionSpecification) {
            unset($this->productionSpecification);
            return $this;
        }
        $this->productionSpecification = $productionSpecification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language code for the human-readable text string produced by the device.
     * This language code will follow the IETF language tag. Example: en-US.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode(): null|FHIRCodeableConcept
    {
        return $this->languageCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language code for the human-readable text string produced by the device.
     * This language code will follow the IETF language tag. Example: en-US.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $languageCode
     * @return static
     */
    public function setLanguageCode(null|FHIRCodeableConcept $languageCode): self
    {
        if (null === $languageCode) {
            unset($this->languageCode);
            return $this;
        }
        $this->languageCode = $languageCode;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_SYSTEM_CHANGE])) {
            $v = $this->getLastSystemChange();
            foreach($validationRules[self::FIELD_LAST_SYSTEM_CHANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_SYSTEM_CHANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATIONAL_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARAMETER_GROUP, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEASUREMENT_PRINCIPLE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCTION_SPECIFICATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceComponent)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_SYSTEM_CHANGE === $cen) {
                $type->setLastSystemChange(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->setSource(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARENT === $cen) {
                $type->setParent(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATIONAL_STATUS === $cen) {
                $type->addOperationalStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER_GROUP === $cen) {
                $type->setParameterGroup(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASUREMENT_PRINCIPLE === $cen) {
                $type->setMeasurementPrinciple(FHIRMeasmntPrinciple::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCTION_SPECIFICATION === $cen) {
                $type->addProductionSpecification(FHIRDeviceComponentProductionSpecification::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE_CODE === $cen) {
                $type->setLanguageCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_SYSTEM_CHANGE])) {
            if (isset($type->lastSystemChange)) {
                $type->lastSystemChange->setValue((string)$attributes[self::FIELD_LAST_SYSTEM_CHANGE]);
                $type->_setLastSystemChangeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastSystemChange((string)$attributes[self::FIELD_LAST_SYSTEM_CHANGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MEASUREMENT_PRINCIPLE])) {
            if (isset($type->measurementPrinciple)) {
                $type->measurementPrinciple->setValue((string)$attributes[self::FIELD_MEASUREMENT_PRINCIPLE]);
                $type->_setMeasurementPrincipleValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMeasurementPrinciple((string)$attributes[self::FIELD_MEASUREMENT_PRINCIPLE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->openRootNode('DeviceComponent', $this->_getSourceXMLNS());
        }
        if (isset($this->lastSystemChange) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE]) {
            $xw->writeAttribute(self::FIELD_LAST_SYSTEM_CHANGE, $this->lastSystemChange->_getFormattedValue());
        }
        if (isset($this->measurementPrinciple) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE]) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_PRINCIPLE, $this->measurementPrinciple->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastSystemChange)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE]
                || $this->lastSystemChange->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_SYSTEM_CHANGE);
            $this->lastSystemChange->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_SYSTEM_CHANGE]);
            $xw->endElement();
        }
        if (isset($this->source)) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parent)) {
            $xw->startElement(self::FIELD_PARENT);
            $this->parent->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operationalStatus)) {
            foreach ($this->operationalStatus as $v) {
                $xw->startElement(self::FIELD_OPERATIONAL_STATUS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->parameterGroup)) {
            $xw->startElement(self::FIELD_PARAMETER_GROUP);
            $this->parameterGroup->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measurementPrinciple)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE]
                || $this->measurementPrinciple->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MEASUREMENT_PRINCIPLE);
            $this->measurementPrinciple->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MEASUREMENT_PRINCIPLE]);
            $xw->endElement();
        }
        if (isset($this->productionSpecification)) {
            foreach ($this->productionSpecification as $v) {
                $xw->startElement(self::FIELD_PRODUCTION_SPECIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->languageCode)) {
            $xw->startElement(self::FIELD_LANGUAGE_CODE);
            $this->languageCode->xmlSerialize($xw, $config);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceComponent)) {
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
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $type->setIdentifier(FHIRIdentifier::jsonUnserialize($json[self::FIELD_IDENTIFIER], $config));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_LAST_SYSTEM_CHANGE])
            || isset($json[self::FIELD_LAST_SYSTEM_CHANGE_EXT])
            || array_key_exists(self::FIELD_LAST_SYSTEM_CHANGE, $json)
            || array_key_exists(self::FIELD_LAST_SYSTEM_CHANGE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_SYSTEM_CHANGE] ?? null;
            $type->setLastSystemChange(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_SYSTEM_CHANGE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SOURCE]) || array_key_exists(self::FIELD_SOURCE, $json)) {
            $type->setSource(FHIRReference::jsonUnserialize($json[self::FIELD_SOURCE], $config));
        }
        if (isset($json[self::FIELD_PARENT]) || array_key_exists(self::FIELD_PARENT, $json)) {
            $type->setParent(FHIRReference::jsonUnserialize($json[self::FIELD_PARENT], $config));
        }
        if (isset($json[self::FIELD_OPERATIONAL_STATUS]) || array_key_exists(self::FIELD_OPERATIONAL_STATUS, $json)) {
            $vs = $json[self::FIELD_OPERATIONAL_STATUS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOperationalStatus(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PARAMETER_GROUP]) || array_key_exists(self::FIELD_PARAMETER_GROUP, $json)) {
            $type->setParameterGroup(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PARAMETER_GROUP], $config));
        }
        if (isset($json[self::FIELD_MEASUREMENT_PRINCIPLE])
            || isset($json[self::FIELD_MEASUREMENT_PRINCIPLE_EXT])
            || array_key_exists(self::FIELD_MEASUREMENT_PRINCIPLE, $json)
            || array_key_exists(self::FIELD_MEASUREMENT_PRINCIPLE_EXT, $json)) {
            $value = $json[self::FIELD_MEASUREMENT_PRINCIPLE] ?? null;
            $type->setMeasurementPrinciple(FHIRMeasmntPrinciple::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMeasmntPrinciple::FIELD_VALUE => $value]) + ($json[self::FIELD_MEASUREMENT_PRINCIPLE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PRODUCTION_SPECIFICATION]) || array_key_exists(self::FIELD_PRODUCTION_SPECIFICATION, $json)) {
            $vs = $json[self::FIELD_PRODUCTION_SPECIFICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProductionSpecification(FHIRDeviceComponentProductionSpecification::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_LANGUAGE_CODE]) || array_key_exists(self::FIELD_LANGUAGE_CODE, $json)) {
            $type->setLanguageCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_LANGUAGE_CODE], $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->lastSystemChange)) {
            if (null !== ($val = $this->lastSystemChange->getValue())) {
                $out->lastSystemChange = $val;
            }
            if ($this->lastSystemChange->_nonValueFieldDefined()) {
                $ext = $this->lastSystemChange->jsonSerialize();
                unset($ext->value);
                $out->_lastSystemChange = $ext;
            }
        }
        if (isset($this->source)) {
            $out->source = $this->source;
        }
        if (isset($this->parent)) {
            $out->parent = $this->parent;
        }
        if (isset($this->operationalStatus) && [] !== $this->operationalStatus) {
            $out->operationalStatus = $this->operationalStatus;
        }
        if (isset($this->parameterGroup)) {
            $out->parameterGroup = $this->parameterGroup;
        }
        if (isset($this->measurementPrinciple)) {
            if (null !== ($val = $this->measurementPrinciple->getValue())) {
                $out->measurementPrinciple = $val;
            }
            if ($this->measurementPrinciple->_nonValueFieldDefined()) {
                $ext = $this->measurementPrinciple->jsonSerialize();
                unset($ext->value);
                $out->_measurementPrinciple = $ext;
            }
        }
        if (isset($this->productionSpecification) && [] !== $this->productionSpecification) {
            $out->productionSpecification = $this->productionSpecification;
        }
        if (isset($this->languageCode)) {
            $out->languageCode = $this->languageCode;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}