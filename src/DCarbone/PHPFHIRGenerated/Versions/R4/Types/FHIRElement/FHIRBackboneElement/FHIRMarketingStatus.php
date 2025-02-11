<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * The marketing status describes the date when a medicinal product is actually put
 * on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRMarketingStatus extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MARKETING_STATUS;

    /* class_default.php:50 */
    public const FIELD_COUNTRY = 'country';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_STATUS = 'status';
    public const FIELD_DATE_RANGE = 'dateRange';
    public const FIELD_RESTORE_DATE = 'restoreDate';
    public const FIELD_RESTORE_DATE_EXT = '_restoreDate';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_COUNTRY => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DATE_RANGE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_RESTORE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $country;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $jurisdiction;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $status;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $dateRange;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $restoreDate;

    /* constructor.php:61 */
    /**
     * FHIRMarketingStatus Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $dateRange
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $restoreDate
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $country = null,
                                null|FHIRCodeableConcept $jurisdiction = null,
                                null|FHIRCodeableConcept $status = null,
                                null|FHIRPeriod $dateRange = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $restoreDate = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $country) {
            $this->setCountry($country);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction($jurisdiction);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $dateRange) {
            $this->setDateRange($dateRange);
        }
        if (null !== $restoreDate) {
            $this->setRestoreDate($restoreDate);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCountry(): null|FHIRCodeableConcept
    {
        return $this->country ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $country
     * @return static
     */
    public function setCountry(null|FHIRCodeableConcept $country): self
    {
        if (null === $country) {
            unset($this->country);
            return $this;
        }
        $this->country = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction(): null|FHIRCodeableConcept
    {
        return $this->jurisdiction ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function setJurisdiction(null|FHIRCodeableConcept $jurisdiction): self
    {
        if (null === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getDateRange(): null|FHIRPeriod
    {
        return $this->dateRange ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $dateRange
     * @return static
     */
    public function setDateRange(null|FHIRPeriod $dateRange): self
    {
        if (null === $dateRange) {
            unset($this->dateRange);
            return $this;
        }
        $this->dateRange = $dateRange;
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
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getRestoreDate(): null|FHIRDateTime
    {
        return $this->restoreDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $restoreDate
     * @return static
     */
    public function setRestoreDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $restoreDate): self
    {
        if (null === $restoreDate) {
            unset($this->restoreDate);
            return $this;
        }
        if (!($restoreDate instanceof FHIRDateTime)) {
            $restoreDate = new FHIRDateTime(value: $restoreDate);
        }
        $this->restoreDate = $restoreDate;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMarketingStatus)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNTRY === $cen) {
                $type->setCountry(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->setJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_RANGE === $cen) {
                $type->setDateRange(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESTORE_DATE === $cen) {
                $type->setRestoreDate(FHIRDateTime::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RESTORE_DATE])) {
            if (isset($type->restoreDate)) {
                $type->restoreDate->setValue((string)$attributes[self::FIELD_RESTORE_DATE]);
            } else {
                $type->setRestoreDate((string)$attributes[self::FIELD_RESTORE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RESTORE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->restoreDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]) {
            $xw->writeAttribute(self::FIELD_RESTORE_DATE, $this->restoreDate->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->country)) {
            $xw->startElement(self::FIELD_COUNTRY);
            $this->country->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->jurisdiction)) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $this->jurisdiction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateRange)) {
            $xw->startElement(self::FIELD_DATE_RANGE);
            $this->dateRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->restoreDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]
                || $this->restoreDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESTORE_DATE);
            $this->restoreDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMarketingStatus)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->country) || property_exists($json, self::FIELD_COUNTRY)) {
            if (is_array($json->country)) {
                $type->setCountry(FHIRCodeableConcept::jsonUnserialize(reset($json->country), $config));
            } else {
                $type->setCountry(FHIRCodeableConcept::jsonUnserialize($json->country, $config));
            }
        }
        if (isset($json->jurisdiction) || property_exists($json, self::FIELD_JURISDICTION)) {
            if (is_array($json->jurisdiction)) {
                $type->setJurisdiction(FHIRCodeableConcept::jsonUnserialize(reset($json->jurisdiction), $config));
            } else {
                $type->setJurisdiction(FHIRCodeableConcept::jsonUnserialize($json->jurisdiction, $config));
            }
        }
        if (isset($json->status) || property_exists($json, self::FIELD_STATUS)) {
            if (is_array($json->status)) {
                $type->setStatus(FHIRCodeableConcept::jsonUnserialize(reset($json->status), $config));
            } else {
                $type->setStatus(FHIRCodeableConcept::jsonUnserialize($json->status, $config));
            }
        }
        if (isset($json->dateRange) || property_exists($json, self::FIELD_DATE_RANGE)) {
            if (is_array($json->dateRange)) {
                $type->setDateRange(FHIRPeriod::jsonUnserialize(reset($json->dateRange), $config));
            } else {
                $type->setDateRange(FHIRPeriod::jsonUnserialize($json->dateRange, $config));
            }
        }
        if (isset($json->restoreDate)
            || isset($json->_restoreDate)
            || property_exists($json, self::FIELD_RESTORE_DATE)
            || property_exists($json, self::FIELD_RESTORE_DATE_EXT)) {
            $v = $json->_restoreDate ?? new \stdClass();
            $v->value = $json->restoreDate ?? null;
            $type->setRestoreDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->country)) {
            $out->country = $this->country;
        }
        if (isset($this->jurisdiction)) {
            $out->jurisdiction = $this->jurisdiction;
        }
        if (isset($this->status)) {
            $out->status = $this->status;
        }
        if (isset($this->dateRange)) {
            $out->dateRange = $this->dateRange;
        }
        if (isset($this->restoreDate)) {
            if (null !== ($val = $this->restoreDate->getValue())) {
                $out->restoreDate = $val;
            }
            if ($this->restoreDate->_nonValueFieldDefined()) {
                $ext = $this->restoreDate->jsonSerialize();
                unset($ext->value);
                $out->_restoreDate = $ext;
            }
        }
        return $out;
    }
}