<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The marketing status describes the date when a medicinal product is actually put
 * on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRMarketingStatus
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRMarketingStatus extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MARKETING_STATUS;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_COUNTRY = 'country';
    const FIELD_DATE_RANGE = 'dateRange';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_RESTORE_DATE = 'restoreDate';
    const FIELD_RESTORE_DATE_EXT = '_restoreDate';
    const FIELD_STATUS = 'status';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $country = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $dateRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $jurisdiction = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $restoreDate = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $status = null;

    /**
     * FHIRMarketingStatus Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMarketingStatus::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COUNTRY])) {
            if ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->setCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->setCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
        if (isset($data[self::FIELD_DATE_RANGE])) {
            if ($data[self::FIELD_DATE_RANGE] instanceof FHIRPeriod) {
                $this->setDateRange($data[self::FIELD_DATE_RANGE]);
            } else {
                $this->setDateRange(new FHIRPeriod($data[self::FIELD_DATE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->setJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->setJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_RESTORE_DATE])) {
            $ext = (isset($data[self::FIELD_RESTORE_DATE_EXT]) && is_array($data[self::FIELD_RESTORE_DATE_EXT]))
                ? $data[self::FIELD_RESTORE_DATE_EXT]
                : null;
            if ($data[self::FIELD_RESTORE_DATE] instanceof FHIRDateTime) {
                $this->setRestoreDate($data[self::FIELD_RESTORE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESTORE_DATE])) {
                $this->setRestoreDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RESTORE_DATE]] + $ext));
            } else {
                $this->setRestoreDate(new FHIRDateTime($data[self::FIELD_RESTORE_DATE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
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
        return "<MarketingStatus{$xmlns}></MarketingStatus>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorisation has been granted shall be
     * specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $country
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function setCountry(FHIRCodeableConcept $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $dateRange
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function setDateRange(FHIRPeriod $dateRange = null)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for
     * which specific provisions within a jurisdiction apply, the jurisdiction can be
     * specified using an appropriate controlled terminology The controlled term and
     * the controlled term identifier shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
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
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getRestoreDate()
    {
        return $this->restoreDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the Medicinal Product is placed on the market by the Marketing
     * Authorisation Holder (or where applicable, the manufacturer/distributor) in a
     * country and/or jurisdiction shall be provided A complete date consisting of day,
     * month and year shall be specified using the ISO 8601 date format NOTE “Placed
     * on the market” refers to the release of the Medicinal Product into the
     * distribution chain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $restoreDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function setRestoreDate($restoreDate = null)
    {
        if (null === $restoreDate) {
            $this->restoreDate = null;
            return $this;
        }
        if ($restoreDate instanceof FHIRDateTime) {
            $this->restoreDate = $restoreDate;
            return $this;
        }
        $this->restoreDate = new FHIRDateTime($restoreDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This attribute provides information on the status of the marketing of the
     * medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus
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
                throw new \DomainException(sprintf('FHIRMarketingStatus::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMarketingStatus::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMarketingStatus;
        } elseif (!is_object($type) || !($type instanceof FHIRMarketingStatus)) {
            throw new \RuntimeException(sprintf(
                'FHIRMarketingStatus::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->country)) {
            $type->setCountry(FHIRCodeableConcept::xmlUnserialize($children->country));
        }
        if (isset($children->dateRange)) {
            $type->setDateRange(FHIRPeriod::xmlUnserialize($children->dateRange));
        }
        if (isset($children->jurisdiction)) {
            $type->setJurisdiction(FHIRCodeableConcept::xmlUnserialize($children->jurisdiction));
        }
        if (isset($attributes->restoreDate)) {
            $type->setRestoreDate((string)$attributes->restoreDate);
        }
        if (isset($children->restoreDate)) {
            $type->setRestoreDate(FHIRDateTime::xmlUnserialize($children->restoreDate));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
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

        if (null !== ($v = $this->getCountry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDateRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getJurisdiction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESTORE_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $v;
        }
        if (null !== ($v = $this->getDateRange())) {
            $a[self::FIELD_DATE_RANGE] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $v;
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $a[self::FIELD_RESTORE_DATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_RESTORE_DATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}