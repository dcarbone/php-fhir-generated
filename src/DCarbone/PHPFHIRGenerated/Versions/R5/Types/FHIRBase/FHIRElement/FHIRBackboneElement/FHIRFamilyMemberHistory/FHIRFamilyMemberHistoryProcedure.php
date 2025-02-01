<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Significant health conditions for a person related to the patient relevant in
 * the context of care for the patient.
 */
class FHIRFamilyMemberHistoryProcedure extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY_DOT_PROCEDURE;

    /* class_default.php:47 */
    public const FIELD_CODE = 'code';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_CONTRIBUTED_TO_DEATH = 'contributedToDeath';
    public const FIELD_CONTRIBUTED_TO_DEATH_EXT = '_contributedToDeath';
    public const FIELD_PERFORMED_AGE = 'performedAge';
    public const FIELD_PERFORMED_RANGE = 'performedRange';
    public const FIELD_PERFORMED_PERIOD = 'performedPeriod';
    public const FIELD_PERFORMED_STRING = 'performedString';
    public const FIELD_PERFORMED_STRING_EXT = '_performedString';
    public const FIELD_PERFORMED_DATE_TIME = 'performedDateTime';
    public const FIELD_PERFORMED_DATE_TIME_EXT = '_performedDateTime';
    public const FIELD_NOTE = 'note';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CONTRIBUTED_TO_DEATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERFORMED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERFORMED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual procedure specified. Could be a coded procedure or a less specific
     * string depending on how much is known about the procedure and the capabilities
     * of the creating system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what happened following the procedure. If the procedure resulted in
     * death, deceased date is captured on the relation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $outcome;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This procedure contributed to the cause of death of the related person. If
     * contributedToDeath is not populated, then it is unknown.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $contributedToDeath;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $performedAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $performedRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $performedPeriod;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $performedString;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $performedDateTime;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An area where general notes can be placed about this specific procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;

    /* constructor.php:63 */
    /**
     * FHIRFamilyMemberHistoryProcedure Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $contributedToDeath
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $performedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $performedRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $performedPeriod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $performedString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $performedDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRCodeableConcept $outcome = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $contributedToDeath = null,
                                null|FHIRAge $performedAge = null,
                                null|FHIRRange $performedRange = null,
                                null|FHIRPeriod $performedPeriod = null,
                                null|string|FHIRStringPrimitive|FHIRString $performedString = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $performedDateTime = null,
                                null|iterable $note = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $contributedToDeath) {
            $this->setContributedToDeath($contributedToDeath);
        }
        if (null !== $performedAge) {
            $this->setPerformedAge($performedAge);
        }
        if (null !== $performedRange) {
            $this->setPerformedRange($performedRange);
        }
        if (null !== $performedPeriod) {
            $this->setPerformedPeriod($performedPeriod);
        }
        if (null !== $performedString) {
            $this->setPerformedString($performedString);
        }
        if (null !== $performedDateTime) {
            $this->setPerformedDateTime($performedDateTime);
        }
        if (null !== $note) {
            $this->setNote(...$note);
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

    /* class_default.php:162 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual procedure specified. Could be a coded procedure or a less specific
     * string depending on how much is known about the procedure and the capabilities
     * of the creating system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual procedure specified. Could be a coded procedure or a less specific
     * string depending on how much is known about the procedure and the capabilities
     * of the creating system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what happened following the procedure. If the procedure resulted in
     * death, deceased date is captured on the relation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what happened following the procedure. If the procedure resulted in
     * death, deceased date is captured on the relation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This procedure contributed to the cause of death of the related person. If
     * contributedToDeath is not populated, then it is unknown.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getContributedToDeath(): null|FHIRBoolean
    {
        return $this->contributedToDeath ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This procedure contributed to the cause of death of the related person. If
     * contributedToDeath is not populated, then it is unknown.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $contributedToDeath
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContributedToDeath(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $contributedToDeath,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $contributedToDeath) {
            unset($this->contributedToDeath);
            return $this;
        }
        if (!($contributedToDeath instanceof FHIRBoolean)) {
            $contributedToDeath = new FHIRBoolean(value: $contributedToDeath);
        }
        $this->contributedToDeath = $contributedToDeath;
        if ($this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH] !== $valueXMLLocation) {
            $this->_setContributedToDeathValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the contributedToDeath element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContributedToDeathValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH];
    }

    /**
     * Set the location the "value" field of the contributedToDeath element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContributedToDeathValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH] = $valueXMLLocation;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getPerformedAge(): null|FHIRAge
    {
        return $this->performedAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $performedAge
     * @return static
     */
    public function setPerformedAge(null|FHIRAge $performedAge): self
    {
        if (null === $performedAge) {
            unset($this->performedAge);
            return $this;
        }
        $this->performedAge = $performedAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getPerformedRange(): null|FHIRRange
    {
        return $this->performedRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $performedRange
     * @return static
     */
    public function setPerformedRange(null|FHIRRange $performedRange): self
    {
        if (null === $performedRange) {
            unset($this->performedRange);
            return $this;
        }
        $this->performedRange = $performedRange;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPerformedPeriod(): null|FHIRPeriod
    {
        return $this->performedPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $performedPeriod
     * @return static
     */
    public function setPerformedPeriod(null|FHIRPeriod $performedPeriod): self
    {
        if (null === $performedPeriod) {
            unset($this->performedPeriod);
            return $this;
        }
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPerformedString(): null|FHIRString
    {
        return $this->performedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $performedString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPerformedString(null|string|FHIRStringPrimitive|FHIRString $performedString,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $performedString) {
            unset($this->performedString);
            return $this;
        }
        if (!($performedString instanceof FHIRString)) {
            $performedString = new FHIRString(value: $performedString);
        }
        $this->performedString = $performedString;
        if ($this->_valueXMLLocations[self::FIELD_PERFORMED_STRING] !== $valueXMLLocation) {
            $this->_setPerformedStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the performedString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPerformedStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERFORMED_STRING];
    }

    /**
     * Set the location the "value" field of the performedString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPerformedStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERFORMED_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime(): null|FHIRDateTime
    {
        return $this->performedDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure was
     * performed. Allows a period to support complex procedures that span more than one
     * date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $performedDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPerformedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $performedDateTime,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $performedDateTime) {
            unset($this->performedDateTime);
            return $this;
        }
        if (!($performedDateTime instanceof FHIRDateTime)) {
            $performedDateTime = new FHIRDateTime(value: $performedDateTime);
        }
        $this->performedDateTime = $performedDateTime;
        if ($this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME] !== $valueXMLLocation) {
            $this->_setPerformedDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the performedDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPerformedDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the performedDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPerformedDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An area where general notes can be placed about this specific procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An area where general notes can be placed about this specific procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An area where general notes can be placed about this specific procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTED_TO_DEATH])) {
            $v = $this->getContributedToDeath();
            foreach($validationRules[self::FIELD_CONTRIBUTED_TO_DEATH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTED_TO_DEATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTED_TO_DEATH])) {
                        $errs[self::FIELD_CONTRIBUTED_TO_DEATH] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTED_TO_DEATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_AGE])) {
            $v = $this->getPerformedAge();
            foreach($validationRules[self::FIELD_PERFORMED_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_AGE])) {
                        $errs[self::FIELD_PERFORMED_AGE] = [];
                    }
                    $errs[self::FIELD_PERFORMED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_RANGE])) {
            $v = $this->getPerformedRange();
            foreach($validationRules[self::FIELD_PERFORMED_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMED_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_RANGE])) {
                        $errs[self::FIELD_PERFORMED_RANGE] = [];
                    }
                    $errs[self::FIELD_PERFORMED_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_PERIOD])) {
            $v = $this->getPerformedPeriod();
            foreach($validationRules[self::FIELD_PERFORMED_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_PERIOD])) {
                        $errs[self::FIELD_PERFORMED_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERFORMED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_STRING])) {
            $v = $this->getPerformedString();
            foreach($validationRules[self::FIELD_PERFORMED_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_STRING])) {
                        $errs[self::FIELD_PERFORMED_STRING] = [];
                    }
                    $errs[self::FIELD_PERFORMED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_DATE_TIME])) {
            $v = $this->getPerformedDateTime();
            foreach($validationRules[self::FIELD_PERFORMED_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_DATE_TIME])) {
                        $errs[self::FIELD_PERFORMED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_PERFORMED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
        return $errs;
    }

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryProcedure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryProcedure
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyMemberHistoryProcedure)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRIBUTED_TO_DEATH === $cen) {
                $type->setContributedToDeath(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMED_AGE === $cen) {
                $type->setPerformedAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMED_RANGE === $cen) {
                $type->setPerformedRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMED_PERIOD === $cen) {
                $type->setPerformedPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMED_STRING === $cen) {
                $type->setPerformedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMED_DATE_TIME === $cen) {
                $type->setPerformedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONTRIBUTED_TO_DEATH])) {
            if (isset($type->contributedToDeath)) {
                $type->contributedToDeath->setValue((string)$attributes[self::FIELD_CONTRIBUTED_TO_DEATH]);
                $type->_setContributedToDeathValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContributedToDeath((string)$attributes[self::FIELD_CONTRIBUTED_TO_DEATH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERFORMED_STRING])) {
            if (isset($type->performedString)) {
                $type->performedString->setValue((string)$attributes[self::FIELD_PERFORMED_STRING]);
                $type->_setPerformedStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPerformedString((string)$attributes[self::FIELD_PERFORMED_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERFORMED_DATE_TIME])) {
            if (isset($type->performedDateTime)) {
                $type->performedDateTime->setValue((string)$attributes[self::FIELD_PERFORMED_DATE_TIME]);
                $type->_setPerformedDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPerformedDateTime((string)$attributes[self::FIELD_PERFORMED_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->contributedToDeath) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH]) {
            $xw->writeAttribute(self::FIELD_CONTRIBUTED_TO_DEATH, $this->contributedToDeath->_getFormattedValue());
        }
        if (isset($this->performedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERFORMED_STRING]) {
            $xw->writeAttribute(self::FIELD_PERFORMED_STRING, $this->performedString->_getFormattedValue());
        }
        if (isset($this->performedDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_PERFORMED_DATE_TIME, $this->performedDateTime->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outcome)) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contributedToDeath)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH]
                || $this->contributedToDeath->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTRIBUTED_TO_DEATH);
            $this->contributedToDeath->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTRIBUTED_TO_DEATH]);
            $xw->endElement();
        }
        if (isset($this->performedAge)) {
            $xw->startElement(self::FIELD_PERFORMED_AGE);
            $this->performedAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performedRange)) {
            $xw->startElement(self::FIELD_PERFORMED_RANGE);
            $this->performedRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performedPeriod)) {
            $xw->startElement(self::FIELD_PERFORMED_PERIOD);
            $this->performedPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERFORMED_STRING]
                || $this->performedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERFORMED_STRING);
            $this->performedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERFORMED_STRING]);
            $xw->endElement();
        }
        if (isset($this->performedDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME]
                || $this->performedDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERFORMED_DATE_TIME);
            $this->performedDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERFORMED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryProcedure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryProcedure
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyMemberHistoryProcedure)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_OUTCOME]) || array_key_exists(self::FIELD_OUTCOME, $json)) {
            $type->setOutcome(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_OUTCOME], $config));
        }
        if (isset($json[self::FIELD_CONTRIBUTED_TO_DEATH])
            || isset($json[self::FIELD_CONTRIBUTED_TO_DEATH_EXT])
            || array_key_exists(self::FIELD_CONTRIBUTED_TO_DEATH, $json)
            || array_key_exists(self::FIELD_CONTRIBUTED_TO_DEATH_EXT, $json)) {
            $value = $json[self::FIELD_CONTRIBUTED_TO_DEATH] ?? null;
            $type->setContributedToDeath(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTRIBUTED_TO_DEATH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERFORMED_AGE]) || array_key_exists(self::FIELD_PERFORMED_AGE, $json)) {
            $type->setPerformedAge(FHIRAge::jsonUnserialize($json[self::FIELD_PERFORMED_AGE], $config));
        }
        if (isset($json[self::FIELD_PERFORMED_RANGE]) || array_key_exists(self::FIELD_PERFORMED_RANGE, $json)) {
            $type->setPerformedRange(FHIRRange::jsonUnserialize($json[self::FIELD_PERFORMED_RANGE], $config));
        }
        if (isset($json[self::FIELD_PERFORMED_PERIOD]) || array_key_exists(self::FIELD_PERFORMED_PERIOD, $json)) {
            $type->setPerformedPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_PERFORMED_PERIOD], $config));
        }
        if (isset($json[self::FIELD_PERFORMED_STRING])
            || isset($json[self::FIELD_PERFORMED_STRING_EXT])
            || array_key_exists(self::FIELD_PERFORMED_STRING, $json)
            || array_key_exists(self::FIELD_PERFORMED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_PERFORMED_STRING] ?? null;
            $type->setPerformedString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PERFORMED_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERFORMED_DATE_TIME])
            || isset($json[self::FIELD_PERFORMED_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_PERFORMED_DATE_TIME, $json)
            || array_key_exists(self::FIELD_PERFORMED_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_PERFORMED_DATE_TIME] ?? null;
            $type->setPerformedDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_PERFORMED_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
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
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->outcome)) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->contributedToDeath)) {
            if (null !== ($val = $this->contributedToDeath->getValue())) {
                $out->contributedToDeath = $val;
            }
            if ($this->contributedToDeath->_nonValueFieldDefined()) {
                $ext = $this->contributedToDeath->jsonSerialize();
                unset($ext->value);
                $out->_contributedToDeath = $ext;
            }
        }
        if (isset($this->performedAge)) {
            $out->performedAge = $this->performedAge;
        }
        if (isset($this->performedRange)) {
            $out->performedRange = $this->performedRange;
        }
        if (isset($this->performedPeriod)) {
            $out->performedPeriod = $this->performedPeriod;
        }
        if (isset($this->performedString)) {
            if (null !== ($val = $this->performedString->getValue())) {
                $out->performedString = $val;
            }
            if ($this->performedString->_nonValueFieldDefined()) {
                $ext = $this->performedString->jsonSerialize();
                unset($ext->value);
                $out->_performedString = $ext;
            }
        }
        if (isset($this->performedDateTime)) {
            if (null !== ($val = $this->performedDateTime->getValue())) {
                $out->performedDateTime = $val;
            }
            if ($this->performedDateTime->_nonValueFieldDefined()) {
                $ext = $this->performedDateTime->jsonSerialize();
                unset($ext->value);
                $out->_performedDateTime = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        return $out;
    }
}