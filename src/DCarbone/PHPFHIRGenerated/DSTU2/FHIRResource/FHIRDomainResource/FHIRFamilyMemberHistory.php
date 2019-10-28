<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Significant health events and conditions for a person related to the patient
 * relevant in the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRFamilyMemberHistory
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AGE_QUANTITY = 'ageQuantity';
    const FIELD_AGE_RANGE = 'ageRange';
    const FIELD_AGE_STRING = 'ageString';
    const FIELD_AGE_STRING_EXT = '_ageString';
    const FIELD_BORN_DATE = 'bornDate';
    const FIELD_BORN_DATE_EXT = '_bornDate';
    const FIELD_BORN_PERIOD = 'bornPeriod';
    const FIELD_BORN_STRING = 'bornString';
    const FIELD_BORN_STRING_EXT = '_bornString';
    const FIELD_CONDITION = 'condition';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    const FIELD_DECEASED_DATE = 'deceasedDate';
    const FIELD_DECEASED_DATE_EXT = '_deceasedDate';
    const FIELD_DECEASED_QUANTITY = 'deceasedQuantity';
    const FIELD_DECEASED_RANGE = 'deceasedRange';
    const FIELD_DECEASED_STRING = 'deceasedString';
    const FIELD_DECEASED_STRING_EXT = '_deceasedString';
    const FIELD_GENDER = 'gender';
    const FIELD_GENDER_EXT = '_gender';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NOTE = 'note';
    const FIELD_PATIENT = 'patient';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

    /**
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $ageQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $ageRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $ageString = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $bornDate = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $bornPeriod = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $bornString = null;

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    protected $condition = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $deceasedBoolean = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $deceasedQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $deceasedRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $deceasedString = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $gender = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    protected $note = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $relationship = null;

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying a state of a Family Member History record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus
     */
    protected $status = null;

    /**
     * FHIRFamilyMemberHistory Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGE_QUANTITY])) {
            if ($data[self::FIELD_AGE_QUANTITY] instanceof FHIRAge) {
                $this->setAgeQuantity($data[self::FIELD_AGE_QUANTITY]);
            } else {
                $this->setAgeQuantity(new FHIRAge($data[self::FIELD_AGE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_AGE_RANGE])) {
            if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $this->setAgeRange($data[self::FIELD_AGE_RANGE]);
            } else {
                $this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_AGE_STRING])) {
            $ext = (isset($data[self::FIELD_AGE_STRING_EXT]) && is_array($data[self::FIELD_AGE_STRING_EXT]))
                ? $data[self::FIELD_AGE_STRING_EXT]
                : null;
            if ($data[self::FIELD_AGE_STRING] instanceof FHIRString) {
                $this->setAgeString($data[self::FIELD_AGE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_AGE_STRING])) {
                $this->setAgeString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AGE_STRING]] + $ext));
            } else {
                $this->setAgeString(new FHIRString($data[self::FIELD_AGE_STRING]));
            }
        }
        if (isset($data[self::FIELD_BORN_DATE])) {
            $ext = (isset($data[self::FIELD_BORN_DATE_EXT]) && is_array($data[self::FIELD_BORN_DATE_EXT]))
                ? $data[self::FIELD_BORN_DATE_EXT]
                : null;
            if ($data[self::FIELD_BORN_DATE] instanceof FHIRDate) {
                $this->setBornDate($data[self::FIELD_BORN_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_BORN_DATE])) {
                $this->setBornDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_BORN_DATE]] + $ext));
            } else {
                $this->setBornDate(new FHIRDate($data[self::FIELD_BORN_DATE]));
            }
        }
        if (isset($data[self::FIELD_BORN_PERIOD])) {
            if ($data[self::FIELD_BORN_PERIOD] instanceof FHIRPeriod) {
                $this->setBornPeriod($data[self::FIELD_BORN_PERIOD]);
            } else {
                $this->setBornPeriod(new FHIRPeriod($data[self::FIELD_BORN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_BORN_STRING])) {
            $ext = (isset($data[self::FIELD_BORN_STRING_EXT]) && is_array($data[self::FIELD_BORN_STRING_EXT]))
                ? $data[self::FIELD_BORN_STRING_EXT]
                : null;
            if ($data[self::FIELD_BORN_STRING] instanceof FHIRString) {
                $this->setBornString($data[self::FIELD_BORN_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_BORN_STRING])) {
                $this->setBornString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_BORN_STRING]] + $ext));
            } else {
                $this->setBornString(new FHIRString($data[self::FIELD_BORN_STRING]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRFamilyMemberHistoryCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRFamilyMemberHistoryCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRFamilyMemberHistoryCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_DECEASED_BOOLEAN_EXT]) && is_array($data[self::FIELD_DECEASED_BOOLEAN_EXT]))
                ? $data[self::FIELD_DECEASED_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_DECEASED_BOOLEAN] instanceof FHIRBoolean) {
                $this->setDeceasedBoolean($data[self::FIELD_DECEASED_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_DECEASED_BOOLEAN])) {
                $this->setDeceasedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_DECEASED_BOOLEAN]] + $ext));
            } else {
                $this->setDeceasedBoolean(new FHIRBoolean($data[self::FIELD_DECEASED_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_DATE])) {
            $ext = (isset($data[self::FIELD_DECEASED_DATE_EXT]) && is_array($data[self::FIELD_DECEASED_DATE_EXT]))
                ? $data[self::FIELD_DECEASED_DATE_EXT]
                : null;
            if ($data[self::FIELD_DECEASED_DATE] instanceof FHIRDate) {
                $this->setDeceasedDate($data[self::FIELD_DECEASED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DECEASED_DATE])) {
                $this->setDeceasedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_DECEASED_DATE]] + $ext));
            } else {
                $this->setDeceasedDate(new FHIRDate($data[self::FIELD_DECEASED_DATE]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_QUANTITY])) {
            if ($data[self::FIELD_DECEASED_QUANTITY] instanceof FHIRAge) {
                $this->setDeceasedQuantity($data[self::FIELD_DECEASED_QUANTITY]);
            } else {
                $this->setDeceasedQuantity(new FHIRAge($data[self::FIELD_DECEASED_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_RANGE])) {
            if ($data[self::FIELD_DECEASED_RANGE] instanceof FHIRRange) {
                $this->setDeceasedRange($data[self::FIELD_DECEASED_RANGE]);
            } else {
                $this->setDeceasedRange(new FHIRRange($data[self::FIELD_DECEASED_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_STRING])) {
            $ext = (isset($data[self::FIELD_DECEASED_STRING_EXT]) && is_array($data[self::FIELD_DECEASED_STRING_EXT]))
                ? $data[self::FIELD_DECEASED_STRING_EXT]
                : null;
            if ($data[self::FIELD_DECEASED_STRING] instanceof FHIRString) {
                $this->setDeceasedString($data[self::FIELD_DECEASED_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_DECEASED_STRING])) {
                $this->setDeceasedString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DECEASED_STRING]] + $ext));
            } else {
                $this->setDeceasedString(new FHIRString($data[self::FIELD_DECEASED_STRING]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            $ext = (isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT]))
                ? $data[self::FIELD_GENDER_EXT]
                : null;
            if ($data[self::FIELD_GENDER] instanceof FHIRCode) {
                $this->setGender($data[self::FIELD_GENDER]);
            } elseif ($ext && is_scalar($data[self::FIELD_GENDER])) {
                $this->setGender(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_GENDER]] + $ext));
            } else {
                $this->setGender(new FHIRCode($data[self::FIELD_GENDER]));
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
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->setNote($data[self::FIELD_NOTE]);
            } else {
                $this->setNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRFamilyHistoryStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRFamilyHistoryStatus([FHIRFamilyHistoryStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRFamilyHistoryStatus($data[self::FIELD_STATUS]));
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
     * @return static
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
        return "<FamilyMemberHistory{$xmlns}></FamilyMemberHistory>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeQuantity()
    {
        return $this->ageQuantity;
    }

    /**
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $ageQuantity
     * @return static
     */
    public function setAgeQuantity(FHIRAge $ageQuantity = null)
    {
        $this->ageQuantity = $ageQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $ageRange
     * @return static
     */
    public function setAgeRange(FHIRRange $ageRange = null)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate age of the relative at the time the family member
     * history is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $ageString
     * @return static
     */
    public function setAgeString($ageString = null)
    {
        if (null === $ageString) {
            $this->ageString = null;
            return $this;
        }
        if ($ageString instanceof FHIRString) {
            $this->ageString = $ageString;
            return $this;
        }
        $this->ageString = new FHIRString($ageString);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $bornDate
     * @return static
     */
    public function setBornDate($bornDate = null)
    {
        if (null === $bornDate) {
            $this->bornDate = null;
            return $this;
        }
        if ($bornDate instanceof FHIRDate) {
            $this->bornDate = $bornDate;
            return $this;
        }
        $this->bornDate = new FHIRDate($bornDate);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $bornPeriod
     * @return static
     */
    public function setBornPeriod(FHIRPeriod $bornPeriod = null)
    {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $bornString
     * @return static
     */
    public function setBornString($bornString = null)
    {
        if (null === $bornString) {
            $this->bornString = null;
            return $this;
        }
        if ($bornString instanceof FHIRString) {
            $this->bornString = $bornString;
            return $this;
        }
        $this->bornString = new FHIRString($bornString);
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
     * @return static
     */
    public function addCondition(FHIRFamilyMemberHistoryCondition $condition = null)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
     * @return static
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRFamilyMemberHistoryCondition) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
            }
        }
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
     * The date (and possibly time) when the family member history was taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return static
     */
    public function setDeceasedBoolean($deceasedBoolean = null)
    {
        if (null === $deceasedBoolean) {
            $this->deceasedBoolean = null;
            return $this;
        }
        if ($deceasedBoolean instanceof FHIRBoolean) {
            $this->deceasedBoolean = $deceasedBoolean;
            return $this;
        }
        $this->deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $deceasedDate
     * @return static
     */
    public function setDeceasedDate($deceasedDate = null)
    {
        if (null === $deceasedDate) {
            $this->deceasedDate = null;
            return $this;
        }
        if ($deceasedDate instanceof FHIRDate) {
            $this->deceasedDate = $deceasedDate;
            return $this;
        }
        $this->deceasedDate = new FHIRDate($deceasedDate);
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedQuantity()
    {
        return $this->deceasedQuantity;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $deceasedQuantity
     * @return static
     */
    public function setDeceasedQuantity(FHIRAge $deceasedQuantity = null)
    {
        $this->deceasedQuantity = $deceasedQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $deceasedRange
     * @return static
     */
    public function setDeceasedRange(FHIRRange $deceasedRange = null)
    {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $deceasedString
     * @return static
     */
    public function setDeceasedString($deceasedString = null)
    {
        if (null === $deceasedString) {
            $this->deceasedString = null;
            return $this;
        }
        if ($deceasedString instanceof FHIRString) {
            $this->deceasedString = $deceasedString;
            return $this;
        }
        $this->deceasedString = new FHIRString($deceasedString);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $gender
     * @return static
     */
    public function setGender($gender = null)
    {
        if (null === $gender) {
            $this->gender = null;
            return $this;
        }
        if ($gender instanceof FHIRCode) {
            $this->gender = $gender;
            return $this;
        }
        $this->gender = new FHIRCode($gender);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying a state of a Family Member History record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying a state of a Family Member History record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus $status
     * @return static
     */
    public function setStatus(FHIRFamilyHistoryStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
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
                throw new \DomainException(sprintf('FHIRFamilyMemberHistory::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRFamilyMemberHistory::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRFamilyMemberHistory;
        } elseif (!is_object($type) || !($type instanceof FHIRFamilyMemberHistory)) {
            throw new \RuntimeException(sprintf(
                'FHIRFamilyMemberHistory::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory or null, %s seen.',
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
        if (isset($children->ageQuantity)) {
            $type->setAgeQuantity(FHIRAge::xmlUnserialize($children->ageQuantity));
        }
        if (isset($children->ageRange)) {
            $type->setAgeRange(FHIRRange::xmlUnserialize($children->ageRange));
        }
        if (isset($attributes->ageString)) {
            $type->setAgeString((string)$attributes->ageString);
        }
        if (isset($children->ageString)) {
            $type->setAgeString(FHIRString::xmlUnserialize($children->ageString));
        }
        if (isset($attributes->bornDate)) {
            $type->setBornDate((string)$attributes->bornDate);
        }
        if (isset($children->bornDate)) {
            $type->setBornDate(FHIRDate::xmlUnserialize($children->bornDate));
        }
        if (isset($children->bornPeriod)) {
            $type->setBornPeriod(FHIRPeriod::xmlUnserialize($children->bornPeriod));
        }
        if (isset($attributes->bornString)) {
            $type->setBornString((string)$attributes->bornString);
        }
        if (isset($children->bornString)) {
            $type->setBornString(FHIRString::xmlUnserialize($children->bornString));
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRFamilyMemberHistoryCondition::xmlUnserialize($child));
            }
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->deceasedBoolean)) {
            $type->setDeceasedBoolean((string)$attributes->deceasedBoolean);
        }
        if (isset($children->deceasedBoolean)) {
            $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($children->deceasedBoolean));
        }
        if (isset($attributes->deceasedDate)) {
            $type->setDeceasedDate((string)$attributes->deceasedDate);
        }
        if (isset($children->deceasedDate)) {
            $type->setDeceasedDate(FHIRDate::xmlUnserialize($children->deceasedDate));
        }
        if (isset($children->deceasedQuantity)) {
            $type->setDeceasedQuantity(FHIRAge::xmlUnserialize($children->deceasedQuantity));
        }
        if (isset($children->deceasedRange)) {
            $type->setDeceasedRange(FHIRRange::xmlUnserialize($children->deceasedRange));
        }
        if (isset($attributes->deceasedString)) {
            $type->setDeceasedString((string)$attributes->deceasedString);
        }
        if (isset($children->deceasedString)) {
            $type->setDeceasedString(FHIRString::xmlUnserialize($children->deceasedString));
        }
        if (isset($attributes->gender)) {
            $type->setGender((string)$attributes->gender);
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRCode::xmlUnserialize($children->gender));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->note)) {
            $type->setNote(FHIRAnnotation::xmlUnserialize($children->note));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($children->relationship));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFamilyHistoryStatus::xmlUnserialize($children->status));
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

        if (null !== ($v = $this->getAgeQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getAgeRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAgeString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBornDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BORN_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBornPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BORN_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBornString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BORN_STRING, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDeceasedQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDeceasedRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeceasedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getNote())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAgeQuantity())) {
            $a[self::FIELD_AGE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getAgeRange())) {
            $a[self::FIELD_AGE_RANGE] = $v;
        }
        if (null !== ($v = $this->getAgeString())) {
            $a[self::FIELD_AGE_STRING] = $v->getValue();
            $a[self::FIELD_AGE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getBornDate())) {
            $a[self::FIELD_BORN_DATE] = $v->getValue();
            $a[self::FIELD_BORN_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getBornPeriod())) {
            $a[self::FIELD_BORN_PERIOD] = $v;
        }
        if (null !== ($v = $this->getBornString())) {
            $a[self::FIELD_BORN_STRING] = $v->getValue();
            $a[self::FIELD_BORN_STRING_EXT] = $v;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $a[self::FIELD_DECEASED_BOOLEAN] = $v->getValue();
            $a[self::FIELD_DECEASED_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            $a[self::FIELD_DECEASED_DATE] = $v->getValue();
            $a[self::FIELD_DECEASED_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDeceasedQuantity())) {
            $a[self::FIELD_DECEASED_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            $a[self::FIELD_DECEASED_RANGE] = $v;
        }
        if (null !== ($v = $this->getDeceasedString())) {
            $a[self::FIELD_DECEASED_STRING] = $v->getValue();
            $a[self::FIELD_DECEASED_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v->getValue();
            $a[self::FIELD_GENDER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a[self::FIELD_NOTE] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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