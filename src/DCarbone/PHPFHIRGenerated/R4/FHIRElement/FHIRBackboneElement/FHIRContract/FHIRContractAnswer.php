<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractAnswer
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAnswer extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ANSWER;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_QUANTITY_EXT = '_valueQuantity';
    const FIELD_VALUE_REFERENCE = 'valueReference';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_TIME = 'valueTime';
    const FIELD_VALUE_TIME_EXT = '_valueTime';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    private $valueAttachment = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $valueBoolean = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    private $valueCoding = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $valueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $valueDecimal = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $valueInteger = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $valueQuantity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $valueReference = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $valueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    private $valueTime = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $valueUri = null;

    /**
     * FHIRContractAnswer Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT]))
                ? $data[self::FIELD_VALUE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setValueBoolean($data[self::FIELD_VALUE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_BOOLEAN])) {
                $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VALUE_BOOLEAN]] + $ext));
            } else {
                $this->setValueBoolean(new FHIRBoolean($data[self::FIELD_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODING])) {
            if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
                $this->setValueCoding($data[self::FIELD_VALUE_CODING]);
            } else {
                $this->setValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT]))
                ? $data[self::FIELD_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE] instanceof FHIRDate) {
                $this->setValueDate($data[self::FIELD_VALUE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE])) {
                $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_VALUE_DATE]] + $ext));
            } else {
                $this->setValueDate(new FHIRDate($data[self::FIELD_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setValueDateTime($data[self::FIELD_VALUE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE_TIME])) {
                $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALUE_DATE_TIME]] + $ext));
            } else {
                $this->setValueDateTime(new FHIRDateTime($data[self::FIELD_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setValueDecimal($data[self::FIELD_VALUE_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DECIMAL])) {
                $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_VALUE_DECIMAL]] + $ext));
            } else {
                $this->setValueDecimal(new FHIRDecimal($data[self::FIELD_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setValueInteger($data[self::FIELD_VALUE_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_INTEGER])) {
                $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_VALUE_INTEGER]] + $ext));
            } else {
                $this->setValueInteger(new FHIRInteger($data[self::FIELD_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_QUANTITY])) {
                $this->setValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_VALUE_QUANTITY]] + $ext));
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_REFERENCE])) {
            if ($data[self::FIELD_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setValueReference($data[self::FIELD_VALUE_REFERENCE]);
            } else {
                $this->setValueReference(new FHIRReference($data[self::FIELD_VALUE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT]))
                ? $data[self::FIELD_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_VALUE_STRING] instanceof FHIRString) {
                $this->setValueString($data[self::FIELD_VALUE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_STRING])) {
                $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE_STRING]] + $ext));
            } else {
                $this->setValueString(new FHIRString($data[self::FIELD_VALUE_STRING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_TIME] instanceof FHIRTime) {
                $this->setValueTime($data[self::FIELD_VALUE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_TIME])) {
                $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_VALUE_TIME]] + $ext));
            } else {
                $this->setValueTime(new FHIRTime($data[self::FIELD_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI])) {
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT]))
                ? $data[self::FIELD_VALUE_URI_EXT]
                : null;
            if ($data[self::FIELD_VALUE_URI] instanceof FHIRUri) {
                $this->setValueUri($data[self::FIELD_VALUE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_URI])) {
                $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_URI]] + $ext));
            } else {
                $this->setValueUri(new FHIRUri($data[self::FIELD_VALUE_URI]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
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
        return "<ContractAnswer{$xmlns}></ContractAnswer>";
    }


    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $valueAttachment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $valueBoolean
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueBoolean($valueBoolean = null)
    {
        if (null === $valueBoolean) {
            $this->valueBoolean = null;
            return $this;
        }
        if ($valueBoolean instanceof FHIRBoolean) {
            $this->valueBoolean = $valueBoolean;
            return $this;
        }
        $this->valueBoolean = new FHIRBoolean($valueBoolean);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $valueCoding
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $valueDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueDate($valueDate = null)
    {
        if (null === $valueDate) {
            $this->valueDate = null;
            return $this;
        }
        if ($valueDate instanceof FHIRDate) {
            $this->valueDate = $valueDate;
            return $this;
        }
        $this->valueDate = new FHIRDate($valueDate);
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
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $valueDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null === $valueDateTime) {
            $this->valueDateTime = null;
            return $this;
        }
        if ($valueDateTime instanceof FHIRDateTime) {
            $this->valueDateTime = $valueDateTime;
            return $this;
        }
        $this->valueDateTime = new FHIRDateTime($valueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $valueDecimal
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueDecimal($valueDecimal = null)
    {
        if (null === $valueDecimal) {
            $this->valueDecimal = null;
            return $this;
        }
        if ($valueDecimal instanceof FHIRDecimal) {
            $this->valueDecimal = $valueDecimal;
            return $this;
        }
        $this->valueDecimal = new FHIRDecimal($valueDecimal);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $valueInteger
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueInteger($valueInteger = null)
    {
        if (null === $valueInteger) {
            $this->valueInteger = null;
            return $this;
        }
        if ($valueInteger instanceof FHIRInteger) {
            $this->valueInteger = $valueInteger;
            return $this;
        }
        $this->valueInteger = new FHIRInteger($valueInteger);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $valueQuantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $valueReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueReference(FHIRReference $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $valueString
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $valueTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueTime($valueTime = null)
    {
        if (null === $valueTime) {
            $this->valueTime = null;
            return $this;
        }
        if ($valueTime instanceof FHIRTime) {
            $this->valueTime = $valueTime;
            return $this;
        }
        $this->valueTime = new FHIRTime($valueTime);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Response to an offer clause or question text, which enables selection of values
     * to be agreed to, e.g., the period of participation, the date of occupancy of a
     * rental, warrently duration, or whether biospecimen may be used for further
     * research.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $valueUri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function setValueUri($valueUri = null)
    {
        if (null === $valueUri) {
            $this->valueUri = null;
            return $this;
        }
        if ($valueUri instanceof FHIRUri) {
            $this->valueUri = $valueUri;
            return $this;
        }
        $this->valueUri = new FHIRUri($valueUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
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
                throw new \DomainException(sprintf('FHIRContractAnswer::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractAnswer::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractAnswer;
        } elseif (!is_object($type) || !($type instanceof FHIRContractAnswer)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractAnswer::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer or null, %s seen.',
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
        if (isset($children->valueAttachment)) {
            $type->setValueAttachment(FHIRAttachment::xmlUnserialize($children->valueAttachment));
        }
        if (isset($attributes->valueBoolean)) {
            $type->setValueBoolean((string)$attributes->valueBoolean);
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($children->valueCoding)) {
            $type->setValueCoding(FHIRCoding::xmlUnserialize($children->valueCoding));
        }
        if (isset($attributes->valueDate)) {
            $type->setValueDate((string)$attributes->valueDate);
        }
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDateTime)) {
            $type->setValueDateTime((string)$attributes->valueDateTime);
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDecimal)) {
            $type->setValueDecimal((string)$attributes->valueDecimal);
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($attributes->valueInteger)) {
            $type->setValueInteger((string)$attributes->valueInteger);
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($children->valueQuantity)) {
            $type->setValueQuantity(FHIRQuantity::xmlUnserialize($children->valueQuantity));
        }
        if (isset($children->valueReference)) {
            $type->setValueReference(FHIRReference::xmlUnserialize($children->valueReference));
        }
        if (isset($attributes->valueString)) {
            $type->setValueString((string)$attributes->valueString);
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueTime)) {
            $type->setValueTime((string)$attributes->valueTime);
        }
        if (isset($children->valueTime)) {
            $type->setValueTime(FHIRTime::xmlUnserialize($children->valueTime));
        }
        if (isset($attributes->valueUri)) {
            $type->setValueUri((string)$attributes->valueUri);
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
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

        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a[self::FIELD_VALUE_BOOLEAN] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_BOOLEAN_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getValueDate())) {
            $a[self::FIELD_VALUE_DATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_DATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_DATE_TIME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a[self::FIELD_VALUE_DECIMAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_DECIMAL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a[self::FIELD_VALUE_INTEGER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_INTEGER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_QUANTITY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueReference())) {
            $a[self::FIELD_VALUE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a[self::FIELD_VALUE_STRING] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_STRING_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            $a[self::FIELD_VALUE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_TIME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            $a[self::FIELD_VALUE_URI] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_URI_EXT] = $v;
            }
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