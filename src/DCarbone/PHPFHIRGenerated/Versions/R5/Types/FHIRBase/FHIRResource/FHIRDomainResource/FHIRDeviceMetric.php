<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRColorCodesOrRGB;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricCategory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricOperationalStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricCategoryEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive\FHIRColorCodesOrRGBEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * Describes a measurement, calculation or setting capability of a device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDeviceMetric extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_METRIC;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_UNIT = 'unit';
    public const FIELD_DEVICE = 'device';
    public const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    public const FIELD_OPERATIONAL_STATUS_EXT = '_operationalStatus';
    public const FIELD_COLOR = 'color';
    public const FIELD_COLOR_EXT = '_color';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CATEGORY_EXT = '_category';
    public const FIELD_MEASUREMENT_FREQUENCY = 'measurementFrequency';
    public const FIELD_CALIBRATION = 'calibration';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DEVICE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_CATEGORY => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_OPERATIONAL_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COLOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Instance identifiers assigned to a device, by the device or gateway software,
     * manufacturers, other organizations or owners. For example, handle ID.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $unit;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $device;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricOperationalStatus 
     */
    #[FHIRDeviceMetricOperationalStatus]
    protected FHIRDeviceMetricOperationalStatus $operationalStatus;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred color associated with the metric (e.g., display color). This is
     * often used to aid clinicians to track and identify parameter types by color. In
     * practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are
     * displayed in different characteristic colors, such as HR in blue, BP in green,
     * and PR and SpO2 in magenta.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRColorCodesOrRGB 
     */
    #[FHIRColorCodesOrRGB]
    protected FHIRColorCodesOrRGB $color;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricCategory 
     */
    #[FHIRDeviceMetricCategory]
    protected FHIRDeviceMetricCategory $category;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency at which the metric is taken or recorded. Devices measure metrics
     * at a wide range of frequencies; for example, an ECG might sample measurements in
     * the millisecond range, while an NIBP might trigger only once an hour. Less
     * often, the measurementFrequency may be based on a unit other than time, such as
     * distance (e.g. for a measuring wheel). The update period may be different than
     * the measurement frequency, if the device does not update the published observed
     * value with the same frequency as it was measured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $measurementFrequency;
    /**
     * Describes a measurement, calculation or setting capability of a device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration> 
     */
    #[FHIRDeviceMetricCalibration]
    protected array $calibration;

    /* constructor.php:61 */
    /**
     * FHIRDeviceMetric Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $unit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $device
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricOperationalStatus $operationalStatus
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive\FHIRColorCodesOrRGBEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRColorCodesOrRGB $color
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricCategory $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measurementFrequency
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration> $calibration
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
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $unit = null,
                                null|FHIRReference $device = null,
                                null|string|FHIRDeviceMetricOperationalStatusEnum|FHIRDeviceMetricOperationalStatus $operationalStatus = null,
                                null|string|FHIRColorCodesOrRGBEnum|FHIRColorCodesOrRGB $color = null,
                                null|string|FHIRDeviceMetricCategoryEnum|FHIRDeviceMetricCategory $category = null,
                                null|FHIRQuantity $measurementFrequency = null,
                                null|iterable $calibration = null,
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
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $unit) {
            $this->setUnit($unit);
        }
        if (null !== $device) {
            $this->setDevice($device);
        }
        if (null !== $operationalStatus) {
            $this->setOperationalStatus($operationalStatus);
        }
        if (null !== $color) {
            $this->setColor($color);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $measurementFrequency) {
            $this->setMeasurementFrequency($measurementFrequency);
        }
        if (null !== $calibration) {
            $this->setCalibration(...$calibration);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Instance identifiers assigned to a device, by the device or gateway software,
     * manufacturers, other organizations or owners. For example, handle ID.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
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
     * Instance identifiers assigned to a device, by the device or gateway software,
     * manufacturers, other organizations or owners. For example, handle ID.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * Instance identifiers assigned to a device, by the device or gateway software,
     * manufacturers, other organizations or owners. For example, handle ID.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getUnit(): null|FHIRCodeableConcept
    {
        return $this->unit ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $unit
     * @return static
     */
    public function setUnit(null|FHIRCodeableConcept $unit): self
    {
        if (null === $unit) {
            unset($this->unit);
            return $this;
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device): self
    {
        if (null === $device) {
            unset($this->device);
            return $this;
        }
        $this->device = $device;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public function getOperationalStatus(): null|FHIRDeviceMetricOperationalStatus
    {
        return $this->operationalStatus ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricOperationalStatus $operationalStatus
     * @return static
     */
    public function setOperationalStatus(null|string|FHIRDeviceMetricOperationalStatusEnum|FHIRDeviceMetricOperationalStatus $operationalStatus): self
    {
        if (null === $operationalStatus) {
            unset($this->operationalStatus);
            return $this;
        }
        if (!($operationalStatus instanceof FHIRDeviceMetricOperationalStatus)) {
            $operationalStatus = new FHIRDeviceMetricOperationalStatus(value: $operationalStatus);
        }
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred color associated with the metric (e.g., display color). This is
     * often used to aid clinicians to track and identify parameter types by color. In
     * practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are
     * displayed in different characteristic colors, such as HR in blue, BP in green,
     * and PR and SpO2 in magenta.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRColorCodesOrRGB
     */
    public function getColor(): null|FHIRColorCodesOrRGB
    {
        return $this->color ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred color associated with the metric (e.g., display color). This is
     * often used to aid clinicians to track and identify parameter types by color. In
     * practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are
     * displayed in different characteristic colors, such as HR in blue, BP in green,
     * and PR and SpO2 in magenta.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive\FHIRColorCodesOrRGBEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRColorCodesOrRGB $color
     * @return static
     */
    public function setColor(null|string|FHIRColorCodesOrRGBEnum|FHIRColorCodesOrRGB $color): self
    {
        if (null === $color) {
            unset($this->color);
            return $this;
        }
        if (!($color instanceof FHIRColorCodesOrRGB)) {
            $color = new FHIRColorCodesOrRGB(value: $color);
        }
        $this->color = $color;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricCategory
     */
    public function getCategory(): null|FHIRDeviceMetricCategory
    {
        return $this->category ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDeviceMetricCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDeviceMetricCategory $category
     * @return static
     */
    public function setCategory(null|string|FHIRDeviceMetricCategoryEnum|FHIRDeviceMetricCategory $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        if (!($category instanceof FHIRDeviceMetricCategory)) {
            $category = new FHIRDeviceMetricCategory(value: $category);
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency at which the metric is taken or recorded. Devices measure metrics
     * at a wide range of frequencies; for example, an ECG might sample measurements in
     * the millisecond range, while an NIBP might trigger only once an hour. Less
     * often, the measurementFrequency may be based on a unit other than time, such as
     * distance (e.g. for a measuring wheel). The update period may be different than
     * the measurement frequency, if the device does not update the published observed
     * value with the same frequency as it was measured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMeasurementFrequency(): null|FHIRQuantity
    {
        return $this->measurementFrequency ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency at which the metric is taken or recorded. Devices measure metrics
     * at a wide range of frequencies; for example, an ECG might sample measurements in
     * the millisecond range, while an NIBP might trigger only once an hour. Less
     * often, the measurementFrequency may be based on a unit other than time, such as
     * distance (e.g. for a measuring wheel). The update period may be different than
     * the measurement frequency, if the device does not update the published observed
     * value with the same frequency as it was measured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measurementFrequency
     * @return static
     */
    public function setMeasurementFrequency(null|FHIRQuantity $measurementFrequency): self
    {
        if (null === $measurementFrequency) {
            unset($this->measurementFrequency);
            return $this;
        }
        $this->measurementFrequency = $measurementFrequency;
        return $this;
    }

    /**
     * Describes a measurement, calculation or setting capability of a device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration>
     */
    public function getCalibration(): array
    {
        return $this->calibration ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration>
     */
    public function getCalibrationIterator(): iterable
    {
        if (!isset($this->calibration)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->calibration);
    }

    /**
     * Describes a measurement, calculation or setting capability of a device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration $calibration
     * @return static
     */
    public function addCalibration(FHIRDeviceMetricCalibration $calibration): self
    {
        if (!isset($this->calibration)) {
            $this->calibration = [];
        }
        $this->calibration[] = $calibration;
        return $this;
    }

    /**
     * Describes a measurement, calculation or setting capability of a device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration ...$calibration
     * @return static
     */
    public function setCalibration(FHIRDeviceMetricCalibration ...$calibration): self
    {
        if ([] === $calibration) {
            unset($this->calibration);
            return $this;
        }
        $this->calibration = $calibration;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceMetric)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT === $cen) {
                $type->setUnit(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->setDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATIONAL_STATUS === $cen) {
                $type->setOperationalStatus(FHIRDeviceMetricOperationalStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COLOR === $cen) {
                $type->setColor(FHIRColorCodesOrRGB::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRDeviceMetricCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASUREMENT_FREQUENCY === $cen) {
                $type->setMeasurementFrequency(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CALIBRATION === $cen) {
                $type->addCalibration(FHIRDeviceMetricCalibration::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_OPERATIONAL_STATUS])) {
            if (isset($type->operationalStatus)) {
                $type->operationalStatus->setValue((string)$attributes[self::FIELD_OPERATIONAL_STATUS]);
            } else {
                $type->setOperationalStatus((string)$attributes[self::FIELD_OPERATIONAL_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OPERATIONAL_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COLOR])) {
            if (isset($type->color)) {
                $type->color->setValue((string)$attributes[self::FIELD_COLOR]);
            } else {
                $type->setColor((string)$attributes[self::FIELD_COLOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COLOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CATEGORY])) {
            if (isset($type->category)) {
                $type->category->setValue((string)$attributes[self::FIELD_CATEGORY]);
            } else {
                $type->setCategory((string)$attributes[self::FIELD_CATEGORY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CATEGORY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('DeviceMetric', $this->_getSourceXMLNS());
        }
        if (isset($this->operationalStatus) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OPERATIONAL_STATUS]) {
            $xw->writeAttribute(self::FIELD_OPERATIONAL_STATUS, $this->operationalStatus->_getValueAsString());
        }
        if (isset($this->color) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COLOR]) {
            $xw->writeAttribute(self::FIELD_COLOR, $this->color->_getValueAsString());
        }
        if (isset($this->category) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_CATEGORY, $this->category->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unit)) {
            $xw->startElement(self::FIELD_UNIT);
            $this->unit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->device)) {
            $xw->startElement(self::FIELD_DEVICE);
            $this->device->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operationalStatus)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OPERATIONAL_STATUS]
                || $this->operationalStatus->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OPERATIONAL_STATUS);
            $this->operationalStatus->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OPERATIONAL_STATUS]);
            $xw->endElement();
        }
        if (isset($this->color)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COLOR]
                || $this->color->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COLOR);
            $this->color->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COLOR]);
            $xw->endElement();
        }
        if (isset($this->category)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CATEGORY]
                || $this->category->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->measurementFrequency)) {
            $xw->startElement(self::FIELD_MEASUREMENT_FREQUENCY);
            $this->measurementFrequency->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->calibration)) {
            foreach ($this->calibration as $v) {
                $xw->startElement(self::FIELD_CALIBRATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceMetric)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->unit) || property_exists($decoded, self::FIELD_UNIT)) {
            if (is_array($decoded->unit)) {
                $type->setUnit(FHIRCodeableConcept::jsonUnserialize(reset($decoded->unit), $config));
            } else {
                $type->setUnit(FHIRCodeableConcept::jsonUnserialize($decoded->unit, $config));
            }
        }
        if (isset($decoded->device) || property_exists($decoded, self::FIELD_DEVICE)) {
            if (is_array($decoded->device)) {
                $type->setDevice(FHIRReference::jsonUnserialize(reset($decoded->device), $config));
            } else {
                $type->setDevice(FHIRReference::jsonUnserialize($decoded->device, $config));
            }
        }
        if (isset($decoded->operationalStatus)
            || isset($decoded->_operationalStatus)
            || property_exists($decoded, self::FIELD_OPERATIONAL_STATUS)
            || property_exists($decoded, self::FIELD_OPERATIONAL_STATUS_EXT)) {
            $v = $decoded->_operationalStatus ?? new \stdClass();
            $v->value = $decoded->operationalStatus ?? null;
            $type->setOperationalStatus(FHIRDeviceMetricOperationalStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->color)
            || isset($decoded->_color)
            || property_exists($decoded, self::FIELD_COLOR)
            || property_exists($decoded, self::FIELD_COLOR_EXT)) {
            $v = $decoded->_color ?? new \stdClass();
            $v->value = $decoded->color ?? null;
            $type->setColor(FHIRColorCodesOrRGB::jsonUnserialize($v, $config));
        }
        if (isset($decoded->category)
            || isset($decoded->_category)
            || property_exists($decoded, self::FIELD_CATEGORY)
            || property_exists($decoded, self::FIELD_CATEGORY_EXT)) {
            $v = $decoded->_category ?? new \stdClass();
            $v->value = $decoded->category ?? null;
            $type->setCategory(FHIRDeviceMetricCategory::jsonUnserialize($v, $config));
        }
        if (isset($decoded->measurementFrequency) || property_exists($decoded, self::FIELD_MEASUREMENT_FREQUENCY)) {
            if (is_array($decoded->measurementFrequency)) {
                $type->setMeasurementFrequency(FHIRQuantity::jsonUnserialize(reset($decoded->measurementFrequency), $config));
            } else {
                $type->setMeasurementFrequency(FHIRQuantity::jsonUnserialize($decoded->measurementFrequency, $config));
            }
        }
        if (isset($decoded->calibration) || property_exists($decoded, self::FIELD_CALIBRATION)) {
            if (is_object($decoded->calibration)) {
                $vals = [$decoded->calibration];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CALIBRATION, true);
            } else {
                $vals = $decoded->calibration;
            }
            foreach($vals as $v) {
                $type->addCalibration(FHIRDeviceMetricCalibration::jsonUnserialize($v, $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->unit)) {
            $out->unit = $this->unit;
        }
        if (isset($this->device)) {
            $out->device = $this->device;
        }
        if (isset($this->operationalStatus)) {
            if (null !== ($val = $this->operationalStatus->getValue())) {
                $out->operationalStatus = $val;
            }
            if ($this->operationalStatus->_nonValueFieldDefined()) {
                $ext = $this->operationalStatus->jsonSerialize();
                unset($ext->value);
                $out->_operationalStatus = $ext;
            }
        }
        if (isset($this->color)) {
            if (null !== ($val = $this->color->getValue())) {
                $out->color = $val;
            }
            if ($this->color->_nonValueFieldDefined()) {
                $ext = $this->color->jsonSerialize();
                unset($ext->value);
                $out->_color = $ext;
            }
        }
        if (isset($this->category)) {
            if (null !== ($val = $this->category->getValue())) {
                $out->category = $val;
            }
            if ($this->category->_nonValueFieldDefined()) {
                $ext = $this->category->jsonSerialize();
                unset($ext->value);
                $out->_category = $ext;
            }
        }
        if (isset($this->measurementFrequency)) {
            $out->measurementFrequency = $this->measurementFrequency;
        }
        if (isset($this->calibration) && [] !== $this->calibration) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CALIBRATION) && 1 === count($this->calibration)) {
                $out->calibration = $this->calibration[0];
            } else {
                $out->calibration = $this->calibration;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}