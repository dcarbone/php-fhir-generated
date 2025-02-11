<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Significant health events and conditions for people related to the subject
 * relevant in the context of care for the subject.
 */
class FHIRFamilyHistoryRelation extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FAMILY_HISTORY_DOT_RELATION;

    /* class_default.php:50 */
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_BORN_PERIOD = 'bornPeriod';
    public const FIELD_BORN_DATE = 'bornDate';
    public const FIELD_BORN_DATE_EXT = '_bornDate';
    public const FIELD_BORN_STRING = 'bornString';
    public const FIELD_BORN_STRING_EXT = '_bornString';
    public const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    public const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    public const FIELD_DECEASED_AGE = 'deceasedAge';
    public const FIELD_DECEASED_RANGE = 'deceasedRange';
    public const FIELD_DECEASED_DATE = 'deceasedDate';
    public const FIELD_DECEASED_DATE_EXT = '_deceasedDate';
    public const FIELD_DECEASED_STRING = 'deceasedString';
    public const FIELD_DECEASED_STRING_EXT = '_deceasedString';
    public const FIELD_NOTE = 'note';
    public const FIELD_NOTE_EXT = '_note';
    public const FIELD_CONDITION = 'condition';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_RELATIONSHIP => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BORN_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BORN_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description. E.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationship;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $bornPeriod;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $bornDate;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $bornString;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $deceasedBoolean;
    /**
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $deceasedAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $deceasedRange;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $deceasedDate;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $deceasedString;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $note;
    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition[] 
     */
    protected array $condition;

    /* constructor.php:61 */
    /**
     * FHIRFamilyHistoryRelation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $bornPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $bornDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $bornString
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $deceasedRange
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $deceasedDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $deceasedString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition[] $condition
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|FHIRCodeableConcept $relationship = null,
                                null|FHIRPeriod $bornPeriod = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $bornString = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean = null,
                                null|FHIRAge $deceasedAge = null,
                                null|FHIRRange $deceasedRange = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $deceasedString = null,
                                null|string|FHIRStringPrimitive|FHIRString $note = null,
                                null|iterable $condition = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $bornPeriod) {
            $this->setBornPeriod($bornPeriod);
        }
        if (null !== $bornDate) {
            $this->setBornDate($bornDate);
        }
        if (null !== $bornString) {
            $this->setBornString($bornString);
        }
        if (null !== $deceasedBoolean) {
            $this->setDeceasedBoolean($deceasedBoolean);
        }
        if (null !== $deceasedAge) {
            $this->setDeceasedAge($deceasedAge);
        }
        if (null !== $deceasedRange) {
            $this->setDeceasedRange($deceasedRange);
        }
        if (null !== $deceasedDate) {
            $this->setDeceasedDate($deceasedDate);
        }
        if (null !== $deceasedString) {
            $this->setDeceasedString($deceasedString);
        }
        if (null !== $note) {
            $this->setNote($note);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description. E.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description. E.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod(): null|FHIRPeriod
    {
        return $this->bornPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $bornPeriod
     * @return static
     */
    public function setBornPeriod(null|FHIRPeriod $bornPeriod): self
    {
        if (null === $bornPeriod) {
            unset($this->bornPeriod);
            return $this;
        }
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getBornDate(): null|FHIRDate
    {
        return $this->bornDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $bornDate
     * @return static
     */
    public function setBornDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate): self
    {
        if (null === $bornDate) {
            unset($this->bornDate);
            return $this;
        }
        if (!($bornDate instanceof FHIRDate)) {
            $bornDate = new FHIRDate(value: $bornDate);
        }
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getBornString(): null|FHIRString
    {
        return $this->bornString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $bornString
     * @return static
     */
    public function setBornString(null|string|FHIRStringPrimitive|FHIRString $bornString): self
    {
        if (null === $bornString) {
            unset($this->bornString);
            return $this;
        }
        if (!($bornString instanceof FHIRString)) {
            $bornString = new FHIRString(value: $bornString);
        }
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean(): null|FHIRBoolean
    {
        return $this->deceasedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return static
     */
    public function setDeceasedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean): self
    {
        if (null === $deceasedBoolean) {
            unset($this->deceasedBoolean);
            return $this;
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            $deceasedBoolean = new FHIRBoolean(value: $deceasedBoolean);
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge(): null|FHIRAge
    {
        return $this->deceasedAge ?? null;
    }

    /**
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @return static
     */
    public function setDeceasedAge(null|FHIRAge $deceasedAge): self
    {
        if (null === $deceasedAge) {
            unset($this->deceasedAge);
            return $this;
        }
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange
     */
    public function getDeceasedRange(): null|FHIRRange
    {
        return $this->deceasedRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $deceasedRange
     * @return static
     */
    public function setDeceasedRange(null|FHIRRange $deceasedRange): self
    {
        if (null === $deceasedRange) {
            unset($this->deceasedRange);
            return $this;
        }
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getDeceasedDate(): null|FHIRDate
    {
        return $this->deceasedDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $deceasedDate
     * @return static
     */
    public function setDeceasedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate): self
    {
        if (null === $deceasedDate) {
            unset($this->deceasedDate);
            return $this;
        }
        if (!($deceasedDate instanceof FHIRDate)) {
            $deceasedDate = new FHIRDate(value: $deceasedDate);
        }
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDeceasedString(): null|FHIRString
    {
        return $this->deceasedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this resource is indicating that the related person is deceased, then an
     * indicator of whether the person is deceased (yes) or not (no) or the age or age
     * range or description of age at death - can be indicated here. If the reason for
     * death is known, then it can be indicated in the outcome code of the condition -
     * in this case the deceased property should still be set.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $deceasedString
     * @return static
     */
    public function setDeceasedString(null|string|FHIRStringPrimitive|FHIRString $deceasedString): self
    {
        if (null === $deceasedString) {
            unset($this->deceasedString);
            return $this;
        }
        if (!($deceasedString instanceof FHIRString)) {
            $deceasedString = new FHIRString(value: $deceasedString);
        }
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getNote(): null|FHIRString
    {
        return $this->note ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $note
     * @return static
     */
    public function setNote(null|string|FHIRStringPrimitive|FHIRString $note): self
    {
        if (null === $note) {
            unset($this->note);
            return $this;
        }
        if (!($note instanceof FHIRString)) {
            $note = new FHIRString(value: $note);
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition $condition
     * @return static
     */
    public function addCondition(FHIRFamilyHistoryCondition $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRFamilyHistoryCondition ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
        $this->condition = $condition;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyHistoryRelation)) {
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
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIONSHIP === $cen) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_PERIOD === $cen) {
                $type->setBornPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_DATE === $cen) {
                $type->setBornDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_STRING === $cen) {
                $type->setBornString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_BOOLEAN === $cen) {
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_AGE === $cen) {
                $type->setDeceasedAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_RANGE === $cen) {
                $type->setDeceasedRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_DATE === $cen) {
                $type->setDeceasedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_STRING === $cen) {
                $type->setDeceasedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->setNote(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRFamilyHistoryCondition::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BORN_DATE])) {
            if (isset($type->bornDate)) {
                $type->bornDate->setValue((string)$attributes[self::FIELD_BORN_DATE]);
            } else {
                $type->setBornDate((string)$attributes[self::FIELD_BORN_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_BORN_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BORN_STRING])) {
            if (isset($type->bornString)) {
                $type->bornString->setValue((string)$attributes[self::FIELD_BORN_STRING]);
            } else {
                $type->setBornString((string)$attributes[self::FIELD_BORN_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_BORN_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECEASED_BOOLEAN])) {
            if (isset($type->deceasedBoolean)) {
                $type->deceasedBoolean->setValue((string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
            } else {
                $type->setDeceasedBoolean((string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECEASED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECEASED_DATE])) {
            if (isset($type->deceasedDate)) {
                $type->deceasedDate->setValue((string)$attributes[self::FIELD_DECEASED_DATE]);
            } else {
                $type->setDeceasedDate((string)$attributes[self::FIELD_DECEASED_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECEASED_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECEASED_STRING])) {
            if (isset($type->deceasedString)) {
                $type->deceasedString->setValue((string)$attributes[self::FIELD_DECEASED_STRING]);
            } else {
                $type->setDeceasedString((string)$attributes[self::FIELD_DECEASED_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECEASED_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NOTE])) {
            if (isset($type->note)) {
                $type->note->setValue((string)$attributes[self::FIELD_NOTE]);
            } else {
                $type->setNote((string)$attributes[self::FIELD_NOTE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NOTE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('FamilyHistoryRelation', $this->_getSourceXMLNS());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->bornDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BORN_DATE]) {
            $xw->writeAttribute(self::FIELD_BORN_DATE, $this->bornDate->_getValueAsString());
        }
        if (isset($this->bornString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BORN_STRING]) {
            $xw->writeAttribute(self::FIELD_BORN_STRING, $this->bornString->_getValueAsString());
        }
        if (isset($this->deceasedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DECEASED_BOOLEAN, $this->deceasedBoolean->_getValueAsString());
        }
        if (isset($this->deceasedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]) {
            $xw->writeAttribute(self::FIELD_DECEASED_DATE, $this->deceasedDate->_getValueAsString());
        }
        if (isset($this->deceasedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]) {
            $xw->writeAttribute(self::FIELD_DECEASED_STRING, $this->deceasedString->_getValueAsString());
        }
        if (isset($this->note) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NOTE]) {
            $xw->writeAttribute(self::FIELD_NOTE, $this->note->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->relationship)) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornPeriod)) {
            $xw->startElement(self::FIELD_BORN_PERIOD);
            $this->bornPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BORN_DATE]
                || $this->bornDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BORN_DATE);
            $this->bornDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BORN_DATE]);
            $xw->endElement();
        }
        if (isset($this->bornString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BORN_STRING]
                || $this->bornString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BORN_STRING);
            $this->bornString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BORN_STRING]);
            $xw->endElement();
        }
        if (isset($this->deceasedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]
                || $this->deceasedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_BOOLEAN);
            $this->deceasedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->deceasedAge)) {
            $xw->startElement(self::FIELD_DECEASED_AGE);
            $this->deceasedAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedRange)) {
            $xw->startElement(self::FIELD_DECEASED_RANGE);
            $this->deceasedRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]
                || $this->deceasedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_DATE);
            $this->deceasedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]);
            $xw->endElement();
        }
        if (isset($this->deceasedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]
                || $this->deceasedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_STRING);
            $this->deceasedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]);
            $xw->endElement();
        }
        if (isset($this->note)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NOTE]
                || $this->note->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NOTE);
            $this->note->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NOTE]);
            $xw->endElement();
        }
        if (isset($this->condition)) {
            foreach ($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyHistoryRelation)) {
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->name)
            || isset($json->_name)
            || property_exists($json, self::FIELD_NAME)
            || property_exists($json, self::FIELD_NAME_EXT)) {
            $v = $json->_name ?? new \stdClass();
            $v->value = $json->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->relationship) || property_exists($json, self::FIELD_RELATIONSHIP)) {
            if (is_array($json->relationship)) {
                $type->setRelationship(FHIRCodeableConcept::jsonUnserialize(reset($json->relationship), $config));
            } else {
                $type->setRelationship(FHIRCodeableConcept::jsonUnserialize($json->relationship, $config));
            }
        }
        if (isset($json->bornPeriod) || property_exists($json, self::FIELD_BORN_PERIOD)) {
            if (is_array($json->bornPeriod)) {
                $type->setBornPeriod(FHIRPeriod::jsonUnserialize(reset($json->bornPeriod), $config));
            } else {
                $type->setBornPeriod(FHIRPeriod::jsonUnserialize($json->bornPeriod, $config));
            }
        }
        if (isset($json->bornDate)
            || isset($json->_bornDate)
            || property_exists($json, self::FIELD_BORN_DATE)
            || property_exists($json, self::FIELD_BORN_DATE_EXT)) {
            $v = $json->_bornDate ?? new \stdClass();
            $v->value = $json->bornDate ?? null;
            $type->setBornDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->bornString)
            || isset($json->_bornString)
            || property_exists($json, self::FIELD_BORN_STRING)
            || property_exists($json, self::FIELD_BORN_STRING_EXT)) {
            $v = $json->_bornString ?? new \stdClass();
            $v->value = $json->bornString ?? null;
            $type->setBornString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->deceasedBoolean)
            || isset($json->_deceasedBoolean)
            || property_exists($json, self::FIELD_DECEASED_BOOLEAN)
            || property_exists($json, self::FIELD_DECEASED_BOOLEAN_EXT)) {
            $v = $json->_deceasedBoolean ?? new \stdClass();
            $v->value = $json->deceasedBoolean ?? null;
            $type->setDeceasedBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->deceasedAge) || property_exists($json, self::FIELD_DECEASED_AGE)) {
            if (is_array($json->deceasedAge)) {
                $type->setDeceasedAge(FHIRAge::jsonUnserialize(reset($json->deceasedAge), $config));
            } else {
                $type->setDeceasedAge(FHIRAge::jsonUnserialize($json->deceasedAge, $config));
            }
        }
        if (isset($json->deceasedRange) || property_exists($json, self::FIELD_DECEASED_RANGE)) {
            if (is_array($json->deceasedRange)) {
                $type->setDeceasedRange(FHIRRange::jsonUnserialize(reset($json->deceasedRange), $config));
            } else {
                $type->setDeceasedRange(FHIRRange::jsonUnserialize($json->deceasedRange, $config));
            }
        }
        if (isset($json->deceasedDate)
            || isset($json->_deceasedDate)
            || property_exists($json, self::FIELD_DECEASED_DATE)
            || property_exists($json, self::FIELD_DECEASED_DATE_EXT)) {
            $v = $json->_deceasedDate ?? new \stdClass();
            $v->value = $json->deceasedDate ?? null;
            $type->setDeceasedDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->deceasedString)
            || isset($json->_deceasedString)
            || property_exists($json, self::FIELD_DECEASED_STRING)
            || property_exists($json, self::FIELD_DECEASED_STRING_EXT)) {
            $v = $json->_deceasedString ?? new \stdClass();
            $v->value = $json->deceasedString ?? null;
            $type->setDeceasedString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->note)
            || isset($json->_note)
            || property_exists($json, self::FIELD_NOTE)
            || property_exists($json, self::FIELD_NOTE_EXT)) {
            $v = $json->_note ?? new \stdClass();
            $v->value = $json->note ?? null;
            $type->setNote(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->condition) || property_exists($json, self::FIELD_CONDITION)) {
            if (is_object($json->condition)) {
                $vals = [$json->condition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONDITION, true);
            } else {
                $vals = $json->condition;
            }
            foreach($vals as $v) {
                $type->addCondition(FHIRFamilyHistoryCondition::jsonUnserialize($v, $config));
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
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->relationship)) {
            $out->relationship = $this->relationship;
        }
        if (isset($this->bornPeriod)) {
            $out->bornPeriod = $this->bornPeriod;
        }
        if (isset($this->bornDate)) {
            if (null !== ($val = $this->bornDate->getValue())) {
                $out->bornDate = $val;
            }
            if ($this->bornDate->_nonValueFieldDefined()) {
                $ext = $this->bornDate->jsonSerialize();
                unset($ext->value);
                $out->_bornDate = $ext;
            }
        }
        if (isset($this->bornString)) {
            if (null !== ($val = $this->bornString->getValue())) {
                $out->bornString = $val;
            }
            if ($this->bornString->_nonValueFieldDefined()) {
                $ext = $this->bornString->jsonSerialize();
                unset($ext->value);
                $out->_bornString = $ext;
            }
        }
        if (isset($this->deceasedBoolean)) {
            if (null !== ($val = $this->deceasedBoolean->getValue())) {
                $out->deceasedBoolean = $val;
            }
            if ($this->deceasedBoolean->_nonValueFieldDefined()) {
                $ext = $this->deceasedBoolean->jsonSerialize();
                unset($ext->value);
                $out->_deceasedBoolean = $ext;
            }
        }
        if (isset($this->deceasedAge)) {
            $out->deceasedAge = $this->deceasedAge;
        }
        if (isset($this->deceasedRange)) {
            $out->deceasedRange = $this->deceasedRange;
        }
        if (isset($this->deceasedDate)) {
            if (null !== ($val = $this->deceasedDate->getValue())) {
                $out->deceasedDate = $val;
            }
            if ($this->deceasedDate->_nonValueFieldDefined()) {
                $ext = $this->deceasedDate->jsonSerialize();
                unset($ext->value);
                $out->_deceasedDate = $ext;
            }
        }
        if (isset($this->deceasedString)) {
            if (null !== ($val = $this->deceasedString->getValue())) {
                $out->deceasedString = $val;
            }
            if ($this->deceasedString->_nonValueFieldDefined()) {
                $ext = $this->deceasedString->jsonSerialize();
                unset($ext->value);
                $out->_deceasedString = $ext;
            }
        }
        if (isset($this->note)) {
            if (null !== ($val = $this->note->getValue())) {
                $out->note = $val;
            }
            if ($this->note->_nonValueFieldDefined()) {
                $ext = $this->note->jsonSerialize();
                unset($ext->value);
                $out->_note = $ext;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONDITION) && 1 === count($this->condition)) {
                $out->condition = $this->condition[0];
            } else {
                $out->condition = $this->condition;
            }
        }
        return $out;
    }
}