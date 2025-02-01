<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM;

    /* class_default.php:47 */
    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_DEFINITION_EXT = '_definition';
    public const FIELD_CODE = 'code';
    public const FIELD_PREFIX = 'prefix';
    public const FIELD_PREFIX_EXT = '_prefix';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_ENABLE_WHEN = 'enableWhen';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_REQUIRED_EXT = '_required';
    public const FIELD_REPEATS = 'repeats';
    public const FIELD_REPEATS_EXT = '_repeats';
    public const FIELD_READ_ONLY = 'readOnly';
    public const FIELD_READ_ONLY_EXT = '_readOnly';
    public const FIELD_MAX_LENGTH = 'maxLength';
    public const FIELD_MAX_LENGTH_EXT = '_maxLength';
    public const FIELD_OPTIONS = 'options';
    public const FIELD_OPTION = 'option';
    public const FIELD_INITIAL_BOOLEAN = 'initialBoolean';
    public const FIELD_INITIAL_BOOLEAN_EXT = '_initialBoolean';
    public const FIELD_INITIAL_DECIMAL = 'initialDecimal';
    public const FIELD_INITIAL_DECIMAL_EXT = '_initialDecimal';
    public const FIELD_INITIAL_INTEGER = 'initialInteger';
    public const FIELD_INITIAL_INTEGER_EXT = '_initialInteger';
    public const FIELD_INITIAL_DATE = 'initialDate';
    public const FIELD_INITIAL_DATE_EXT = '_initialDate';
    public const FIELD_INITIAL_DATE_TIME = 'initialDateTime';
    public const FIELD_INITIAL_DATE_TIME_EXT = '_initialDateTime';
    public const FIELD_INITIAL_TIME = 'initialTime';
    public const FIELD_INITIAL_TIME_EXT = '_initialTime';
    public const FIELD_INITIAL_STRING = 'initialString';
    public const FIELD_INITIAL_STRING_EXT = '_initialString';
    public const FIELD_INITIAL_URI = 'initialUri';
    public const FIELD_INITIAL_URI_EXT = '_initialUri';
    public const FIELD_INITIAL_ATTACHMENT = 'initialAttachment';
    public const FIELD_INITIAL_CODING = 'initialCoding';
    public const FIELD_INITIAL_QUANTITY = 'initialQuantity';
    public const FIELD_INITIAL_REFERENCE = 'initialReference';
    public const FIELD_ITEM = 'item';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_LINK_ID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREFIX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIRED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REPEATS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_READ_ONLY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INITIAL_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $linkId;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $definition;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $prefix;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType 
     */
    protected FHIRQuestionnaireItemType $type;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] 
     */
    protected array $enableWhen;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $required;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $repeats;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $readOnly;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $maxLength;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $options;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[] 
     */
    protected array $option;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $initialBoolean;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $initialDecimal;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $initialInteger;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $initialDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $initialDateTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $initialTime;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $initialString;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $initialUri;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $initialAttachment;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $initialCoding;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $initialQuantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $initialReference;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] 
     */
    protected array $item;

    /* constructor.php:63 */
    /**
     * FHIRQuestionnaireItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $linkId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $prefix
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $text
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] $enableWhen
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $required
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $repeats
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $readOnly
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $options
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[] $option
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $initialBoolean
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $initialDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $initialInteger
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $initialDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $initialDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $initialTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $initialString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $initialUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $initialAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $initialCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $initialQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $initialReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] $item
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $linkId = null,
                                null|string|FHIRUriPrimitive|FHIRUri $definition = null,
                                null|iterable $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $prefix = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|string|FHIRQuestionnaireItemTypeList|FHIRQuestionnaireItemType $type = null,
                                null|iterable $enableWhen = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $repeats = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readOnly = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
                                null|FHIRReference $options = null,
                                null|iterable $option = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $initialBoolean = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $initialDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $initialInteger = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $initialDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $initialDateTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $initialTime = null,
                                null|string|FHIRStringPrimitive|FHIRString $initialString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $initialUri = null,
                                null|FHIRAttachment $initialAttachment = null,
                                null|FHIRCoding $initialCoding = null,
                                null|FHIRQuantity $initialQuantity = null,
                                null|FHIRReference $initialReference = null,
                                null|iterable $item = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $linkId) {
            $this->setLinkId($linkId);
        }
        if (null !== $definition) {
            $this->setDefinition($definition);
        }
        if (null !== $code) {
            $this->setCode(...$code);
        }
        if (null !== $prefix) {
            $this->setPrefix($prefix);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $enableWhen) {
            $this->setEnableWhen(...$enableWhen);
        }
        if (null !== $required) {
            $this->setRequired($required);
        }
        if (null !== $repeats) {
            $this->setRepeats($repeats);
        }
        if (null !== $readOnly) {
            $this->setReadOnly($readOnly);
        }
        if (null !== $maxLength) {
            $this->setMaxLength($maxLength);
        }
        if (null !== $options) {
            $this->setOptions($options);
        }
        if (null !== $option) {
            $this->setOption(...$option);
        }
        if (null !== $initialBoolean) {
            $this->setInitialBoolean($initialBoolean);
        }
        if (null !== $initialDecimal) {
            $this->setInitialDecimal($initialDecimal);
        }
        if (null !== $initialInteger) {
            $this->setInitialInteger($initialInteger);
        }
        if (null !== $initialDate) {
            $this->setInitialDate($initialDate);
        }
        if (null !== $initialDateTime) {
            $this->setInitialDateTime($initialDateTime);
        }
        if (null !== $initialTime) {
            $this->setInitialTime($initialTime);
        }
        if (null !== $initialString) {
            $this->setInitialString($initialString);
        }
        if (null !== $initialUri) {
            $this->setInitialUri($initialUri);
        }
        if (null !== $initialAttachment) {
            $this->setInitialAttachment($initialAttachment);
        }
        if (null !== $initialCoding) {
            $this->setInitialCoding($initialCoding);
        }
        if (null !== $initialQuantity) {
            $this->setInitialQuantity($initialQuantity);
        }
        if (null !== $initialReference) {
            $this->setInitialReference($initialReference);
        }
        if (null !== $item) {
            $this->setItem(...$item);
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $linkId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $linkId) {
            unset($this->linkId);
            return $this;
        }
        if (!($linkId instanceof FHIRString)) {
            $linkId = new FHIRString(value: $linkId);
        }
        $this->linkId = $linkId;
        if ($this->_valueXMLLocations[self::FIELD_LINK_ID] !== $valueXMLLocation) {
            $this->_setLinkIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the linkId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLinkIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LINK_ID];
    }

    /**
     * Set the location the "value" field of the linkId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLinkIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LINK_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getDefinition(): null|FHIRUri
    {
        return $this->definition ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $definition
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinition(null|string|FHIRUriPrimitive|FHIRUri $definition,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $definition) {
            unset($this->definition);
            return $this;
        }
        if (!($definition instanceof FHIRUri)) {
            $definition = new FHIRUri(value: $definition);
        }
        $this->definition = $definition;
        if ($this->_valueXMLLocations[self::FIELD_DEFINITION] !== $valueXMLLocation) {
            $this->_setDefinitionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the definition element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefinitionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFINITION];
    }

    /**
     * Set the location the "value" field of the definition element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefinitionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFINITION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->code);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code): self
    {
        if (!isset($this->code)) {
            $this->code = [];
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$code
     * @return static
     */
    public function setCode(FHIRCoding ...$code): self
    {
        if ([] === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $prefix
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $prefix) {
            unset($this->prefix);
            return $this;
        }
        if (!($prefix instanceof FHIRString)) {
            $prefix = new FHIRString(value: $prefix);
        }
        $this->prefix = $prefix;
        if ($this->_valueXMLLocations[self::FIELD_PREFIX] !== $valueXMLLocation) {
            $this->_setPrefixValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the prefix element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPrefixValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PREFIX];
    }

    /**
     * Set the location the "value" field of the prefix element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPrefixValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PREFIX] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $text
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        if ($this->_valueXMLLocations[self::FIELD_TEXT] !== $valueXMLLocation) {
            $this->_setTextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the text element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TEXT];
    }

    /**
     * Set the location the "value" field of the text element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TEXT] = $valueXMLLocation;
        return $this;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType(): null|FHIRQuestionnaireItemType
    {
        return $this->type ?? null;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRQuestionnaireItemTypeList|FHIRQuestionnaireItemType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRQuestionnaireItemType)) {
            $type = new FHIRQuestionnaireItemType(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen(): array
    {
        return $this->enableWhen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen>
     */
    public function getEnableWhenIterator(): iterable
    {
        if (!isset($this->enableWhen)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->enableWhen);
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return static
     */
    public function addEnableWhen(FHIRQuestionnaireEnableWhen $enableWhen): self
    {
        if (!isset($this->enableWhen)) {
            $this->enableWhen = [];
        }
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen ...$enableWhen
     * @return static
     */
    public function setEnableWhen(FHIRQuestionnaireEnableWhen ...$enableWhen): self
    {
        if ([] === $enableWhen) {
            unset($this->enableWhen);
            return $this;
        }
        $this->enableWhen = $enableWhen;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getRequired(): null|FHIRBoolean
    {
        return $this->required ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $required
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $required) {
            unset($this->required);
            return $this;
        }
        if (!($required instanceof FHIRBoolean)) {
            $required = new FHIRBoolean(value: $required);
        }
        $this->required = $required;
        if ($this->_valueXMLLocations[self::FIELD_REQUIRED] !== $valueXMLLocation) {
            $this->_setRequiredValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the required element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRequiredValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REQUIRED];
    }

    /**
     * Set the location the "value" field of the required element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRequiredValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REQUIRED] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getRepeats(): null|FHIRBoolean
    {
        return $this->repeats ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $repeats
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRepeats(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $repeats,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $repeats) {
            unset($this->repeats);
            return $this;
        }
        if (!($repeats instanceof FHIRBoolean)) {
            $repeats = new FHIRBoolean(value: $repeats);
        }
        $this->repeats = $repeats;
        if ($this->_valueXMLLocations[self::FIELD_REPEATS] !== $valueXMLLocation) {
            $this->_setRepeatsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the repeats element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRepeatsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REPEATS];
    }

    /**
     * Set the location the "value" field of the repeats element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRepeatsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REPEATS] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getReadOnly(): null|FHIRBoolean
    {
        return $this->readOnly ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $readOnly
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReadOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readOnly,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $readOnly) {
            unset($this->readOnly);
            return $this;
        }
        if (!($readOnly instanceof FHIRBoolean)) {
            $readOnly = new FHIRBoolean(value: $readOnly);
        }
        $this->readOnly = $readOnly;
        if ($this->_valueXMLLocations[self::FIELD_READ_ONLY] !== $valueXMLLocation) {
            $this->_setReadOnlyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the readOnly element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReadOnlyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_READ_ONLY];
    }

    /**
     * Set the location the "value" field of the readOnly element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReadOnlyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_READ_ONLY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
    {
        return $this->maxLength ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $maxLength
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $maxLength) {
            unset($this->maxLength);
            return $this;
        }
        if (!($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger(value: $maxLength);
        }
        $this->maxLength = $maxLength;
        if ($this->_valueXMLLocations[self::FIELD_MAX_LENGTH] !== $valueXMLLocation) {
            $this->_setMaxLengthValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the maxLength element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMaxLengthValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAX_LENGTH];
    }

    /**
     * Set the location the "value" field of the maxLength element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMaxLengthValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAX_LENGTH] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getOptions(): null|FHIRReference
    {
        return $this->options ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $options
     * @return static
     */
    public function setOptions(null|FHIRReference $options): self
    {
        if (null === $options) {
            unset($this->options);
            return $this;
        }
        $this->options = $options;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    public function getOption(): array
    {
        return $this->option ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption>
     */
    public function getOptionIterator(): iterable
    {
        if (!isset($this->option)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->option);
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption $option
     * @return static
     */
    public function addOption(FHIRQuestionnaireOption $option): self
    {
        if (!isset($this->option)) {
            $this->option = [];
        }
        $this->option[] = $option;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption ...$option
     * @return static
     */
    public function setOption(FHIRQuestionnaireOption ...$option): self
    {
        if ([] === $option) {
            unset($this->option);
            return $this;
        }
        $this->option = $option;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getInitialBoolean(): null|FHIRBoolean
    {
        return $this->initialBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $initialBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $initialBoolean,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialBoolean) {
            unset($this->initialBoolean);
            return $this;
        }
        if (!($initialBoolean instanceof FHIRBoolean)) {
            $initialBoolean = new FHIRBoolean(value: $initialBoolean);
        }
        $this->initialBoolean = $initialBoolean;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN] !== $valueXMLLocation) {
            $this->_setInitialBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the initialBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getInitialDecimal(): null|FHIRDecimal
    {
        return $this->initialDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $initialDecimal
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $initialDecimal,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialDecimal) {
            unset($this->initialDecimal);
            return $this;
        }
        if (!($initialDecimal instanceof FHIRDecimal)) {
            $initialDecimal = new FHIRDecimal(value: $initialDecimal);
        }
        $this->initialDecimal = $initialDecimal;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL] !== $valueXMLLocation) {
            $this->_setInitialDecimalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialDecimal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialDecimalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL];
    }

    /**
     * Set the location the "value" field of the initialDecimal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialDecimalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getInitialInteger(): null|FHIRInteger
    {
        return $this->initialInteger ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $initialInteger
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $initialInteger,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialInteger) {
            unset($this->initialInteger);
            return $this;
        }
        if (!($initialInteger instanceof FHIRInteger)) {
            $initialInteger = new FHIRInteger(value: $initialInteger);
        }
        $this->initialInteger = $initialInteger;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER] !== $valueXMLLocation) {
            $this->_setInitialIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER];
    }

    /**
     * Set the location the "value" field of the initialInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getInitialDate(): null|FHIRDate
    {
        return $this->initialDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $initialDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $initialDate,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialDate) {
            unset($this->initialDate);
            return $this;
        }
        if (!($initialDate instanceof FHIRDate)) {
            $initialDate = new FHIRDate(value: $initialDate);
        }
        $this->initialDate = $initialDate;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_DATE] !== $valueXMLLocation) {
            $this->_setInitialDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_DATE];
    }

    /**
     * Set the location the "value" field of the initialDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_DATE] = $valueXMLLocation;
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
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getInitialDateTime(): null|FHIRDateTime
    {
        return $this->initialDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $initialDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $initialDateTime,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialDateTime) {
            unset($this->initialDateTime);
            return $this;
        }
        if (!($initialDateTime instanceof FHIRDateTime)) {
            $initialDateTime = new FHIRDateTime(value: $initialDateTime);
        }
        $this->initialDateTime = $initialDateTime;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME] !== $valueXMLLocation) {
            $this->_setInitialDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the initialDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getInitialTime(): null|FHIRTime
    {
        return $this->initialTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $initialTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $initialTime,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialTime) {
            unset($this->initialTime);
            return $this;
        }
        if (!($initialTime instanceof FHIRTime)) {
            $initialTime = new FHIRTime(value: $initialTime);
        }
        $this->initialTime = $initialTime;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_TIME] !== $valueXMLLocation) {
            $this->_setInitialTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_TIME];
    }

    /**
     * Set the location the "value" field of the initialTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getInitialString(): null|FHIRString
    {
        return $this->initialString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $initialString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialString(null|string|FHIRStringPrimitive|FHIRString $initialString,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialString) {
            unset($this->initialString);
            return $this;
        }
        if (!($initialString instanceof FHIRString)) {
            $initialString = new FHIRString(value: $initialString);
        }
        $this->initialString = $initialString;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_STRING] !== $valueXMLLocation) {
            $this->_setInitialStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_STRING];
    }

    /**
     * Set the location the "value" field of the initialString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getInitialUri(): null|FHIRUri
    {
        return $this->initialUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $initialUri
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInitialUri(null|string|FHIRUriPrimitive|FHIRUri $initialUri,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $initialUri) {
            unset($this->initialUri);
            return $this;
        }
        if (!($initialUri instanceof FHIRUri)) {
            $initialUri = new FHIRUri(value: $initialUri);
        }
        $this->initialUri = $initialUri;
        if ($this->_valueXMLLocations[self::FIELD_INITIAL_URI] !== $valueXMLLocation) {
            $this->_setInitialUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the initialUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInitialUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INITIAL_URI];
    }

    /**
     * Set the location the "value" field of the initialUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInitialUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INITIAL_URI] = $valueXMLLocation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
     */
    public function getInitialAttachment(): null|FHIRAttachment
    {
        return $this->initialAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $initialAttachment
     * @return static
     */
    public function setInitialAttachment(null|FHIRAttachment $initialAttachment): self
    {
        if (null === $initialAttachment) {
            unset($this->initialAttachment);
            return $this;
        }
        $this->initialAttachment = $initialAttachment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
     */
    public function getInitialCoding(): null|FHIRCoding
    {
        return $this->initialCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $initialCoding
     * @return static
     */
    public function setInitialCoding(null|FHIRCoding $initialCoding): self
    {
        if (null === $initialCoding) {
            unset($this->initialCoding);
            return $this;
        }
        $this->initialCoding = $initialCoding;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getInitialQuantity(): null|FHIRQuantity
    {
        return $this->initialQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $initialQuantity
     * @return static
     */
    public function setInitialQuantity(null|FHIRQuantity $initialQuantity): self
    {
        if (null === $initialQuantity) {
            unset($this->initialQuantity);
            return $this;
        }
        $this->initialQuantity = $initialQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getInitialReference(): null|FHIRReference
    {
        return $this->initialReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $initialReference
     * @return static
     */
    public function setInitialReference(null|FHIRReference $initialReference): self
    {
        if (null === $initialReference) {
            unset($this->initialReference);
            return $this;
        }
        $this->initialReference = $initialReference;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return static
     */
    public function addItem(FHIRQuestionnaireItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem ...$item
     * @return static
     */
    public function setItem(FHIRQuestionnaireItem ...$item): self
    {
        if ([] === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
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
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
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
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ENABLE_WHEN])) {
            $v = $this->getEnableWhen();
            foreach($validationRules[self::FIELD_ENABLE_WHEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENABLE_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_WHEN])) {
                        $errs[self::FIELD_ENABLE_WHEN] = [];
                    }
                    $errs[self::FIELD_ENABLE_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED])) {
            $v = $this->getRequired();
            foreach($validationRules[self::FIELD_REQUIRED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED])) {
                        $errs[self::FIELD_REQUIRED] = [];
                    }
                    $errs[self::FIELD_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEATS])) {
            $v = $this->getRepeats();
            foreach($validationRules[self::FIELD_REPEATS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPEATS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEATS])) {
                        $errs[self::FIELD_REPEATS] = [];
                    }
                    $errs[self::FIELD_REPEATS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_ONLY])) {
            $v = $this->getReadOnly();
            foreach($validationRules[self::FIELD_READ_ONLY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_READ_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_ONLY])) {
                        $errs[self::FIELD_READ_ONLY] = [];
                    }
                    $errs[self::FIELD_READ_ONLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTIONS])) {
            $v = $this->getOptions();
            foreach($validationRules[self::FIELD_OPTIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTIONS])) {
                        $errs[self::FIELD_OPTIONS] = [];
                    }
                    $errs[self::FIELD_OPTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTION])) {
            $v = $this->getOption();
            foreach($validationRules[self::FIELD_OPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTION])) {
                        $errs[self::FIELD_OPTION] = [];
                    }
                    $errs[self::FIELD_OPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_BOOLEAN])) {
            $v = $this->getInitialBoolean();
            foreach($validationRules[self::FIELD_INITIAL_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_BOOLEAN])) {
                        $errs[self::FIELD_INITIAL_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_INITIAL_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DECIMAL])) {
            $v = $this->getInitialDecimal();
            foreach($validationRules[self::FIELD_INITIAL_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DECIMAL])) {
                        $errs[self::FIELD_INITIAL_DECIMAL] = [];
                    }
                    $errs[self::FIELD_INITIAL_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_INTEGER])) {
            $v = $this->getInitialInteger();
            foreach($validationRules[self::FIELD_INITIAL_INTEGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_INTEGER])) {
                        $errs[self::FIELD_INITIAL_INTEGER] = [];
                    }
                    $errs[self::FIELD_INITIAL_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DATE])) {
            $v = $this->getInitialDate();
            foreach($validationRules[self::FIELD_INITIAL_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DATE])) {
                        $errs[self::FIELD_INITIAL_DATE] = [];
                    }
                    $errs[self::FIELD_INITIAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DATE_TIME])) {
            $v = $this->getInitialDateTime();
            foreach($validationRules[self::FIELD_INITIAL_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DATE_TIME])) {
                        $errs[self::FIELD_INITIAL_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_INITIAL_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_TIME])) {
            $v = $this->getInitialTime();
            foreach($validationRules[self::FIELD_INITIAL_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_TIME])) {
                        $errs[self::FIELD_INITIAL_TIME] = [];
                    }
                    $errs[self::FIELD_INITIAL_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_STRING])) {
            $v = $this->getInitialString();
            foreach($validationRules[self::FIELD_INITIAL_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_STRING])) {
                        $errs[self::FIELD_INITIAL_STRING] = [];
                    }
                    $errs[self::FIELD_INITIAL_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_URI])) {
            $v = $this->getInitialUri();
            foreach($validationRules[self::FIELD_INITIAL_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_URI])) {
                        $errs[self::FIELD_INITIAL_URI] = [];
                    }
                    $errs[self::FIELD_INITIAL_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_ATTACHMENT])) {
            $v = $this->getInitialAttachment();
            foreach($validationRules[self::FIELD_INITIAL_ATTACHMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_ATTACHMENT])) {
                        $errs[self::FIELD_INITIAL_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_INITIAL_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_CODING])) {
            $v = $this->getInitialCoding();
            foreach($validationRules[self::FIELD_INITIAL_CODING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_CODING])) {
                        $errs[self::FIELD_INITIAL_CODING] = [];
                    }
                    $errs[self::FIELD_INITIAL_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_QUANTITY])) {
            $v = $this->getInitialQuantity();
            foreach($validationRules[self::FIELD_INITIAL_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_QUANTITY])) {
                        $errs[self::FIELD_INITIAL_QUANTITY] = [];
                    }
                    $errs[self::FIELD_INITIAL_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_REFERENCE])) {
            $v = $this->getInitialReference();
            foreach($validationRules[self::FIELD_INITIAL_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_REFERENCE])) {
                        $errs[self::FIELD_INITIAL_REFERENCE] = [];
                    }
                    $errs[self::FIELD_INITIAL_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireItem)) {
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
            } else if (self::FIELD_LINK_ID === $cen) {
                $type->setLinkId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->setDefinition(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->addCode(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREFIX === $cen) {
                $type->setPrefix(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRQuestionnaireItemType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENABLE_WHEN === $cen) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIRED === $cen) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPEATS === $cen) {
                $type->setRepeats(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_READ_ONLY === $cen) {
                $type->setReadOnly(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_LENGTH === $cen) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPTIONS === $cen) {
                $type->setOptions(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPTION === $cen) {
                $type->addOption(FHIRQuestionnaireOption::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_BOOLEAN === $cen) {
                $type->setInitialBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_DECIMAL === $cen) {
                $type->setInitialDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_INTEGER === $cen) {
                $type->setInitialInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_DATE === $cen) {
                $type->setInitialDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_DATE_TIME === $cen) {
                $type->setInitialDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_TIME === $cen) {
                $type->setInitialTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_STRING === $cen) {
                $type->setInitialString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_URI === $cen) {
                $type->setInitialUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_ATTACHMENT === $cen) {
                $type->setInitialAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_CODING === $cen) {
                $type->setInitialCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_QUANTITY === $cen) {
                $type->setInitialQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL_REFERENCE === $cen) {
                $type->setInitialReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            if (isset($type->linkId)) {
                $type->linkId->setValue((string)$attributes[self::FIELD_LINK_ID]);
                $type->_setLinkIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            if (isset($type->definition)) {
                $type->definition->setValue((string)$attributes[self::FIELD_DEFINITION]);
                $type->_setDefinitionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefinition((string)$attributes[self::FIELD_DEFINITION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PREFIX])) {
            if (isset($type->prefix)) {
                $type->prefix->setValue((string)$attributes[self::FIELD_PREFIX]);
                $type->_setPrefixValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPrefix((string)$attributes[self::FIELD_PREFIX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
                $type->_setTextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIRED])) {
            if (isset($type->required)) {
                $type->required->setValue((string)$attributes[self::FIELD_REQUIRED]);
                $type->_setRequiredValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRequired((string)$attributes[self::FIELD_REQUIRED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REPEATS])) {
            if (isset($type->repeats)) {
                $type->repeats->setValue((string)$attributes[self::FIELD_REPEATS]);
                $type->_setRepeatsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRepeats((string)$attributes[self::FIELD_REPEATS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_READ_ONLY])) {
            if (isset($type->readOnly)) {
                $type->readOnly->setValue((string)$attributes[self::FIELD_READ_ONLY]);
                $type->_setReadOnlyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReadOnly((string)$attributes[self::FIELD_READ_ONLY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            if (isset($type->maxLength)) {
                $type->maxLength->setValue((string)$attributes[self::FIELD_MAX_LENGTH]);
                $type->_setMaxLengthValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_BOOLEAN])) {
            if (isset($type->initialBoolean)) {
                $type->initialBoolean->setValue((string)$attributes[self::FIELD_INITIAL_BOOLEAN]);
                $type->_setInitialBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialBoolean((string)$attributes[self::FIELD_INITIAL_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_DECIMAL])) {
            if (isset($type->initialDecimal)) {
                $type->initialDecimal->setValue((string)$attributes[self::FIELD_INITIAL_DECIMAL]);
                $type->_setInitialDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialDecimal((string)$attributes[self::FIELD_INITIAL_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_INTEGER])) {
            if (isset($type->initialInteger)) {
                $type->initialInteger->setValue((string)$attributes[self::FIELD_INITIAL_INTEGER]);
                $type->_setInitialIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialInteger((string)$attributes[self::FIELD_INITIAL_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_DATE])) {
            if (isset($type->initialDate)) {
                $type->initialDate->setValue((string)$attributes[self::FIELD_INITIAL_DATE]);
                $type->_setInitialDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialDate((string)$attributes[self::FIELD_INITIAL_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_DATE_TIME])) {
            if (isset($type->initialDateTime)) {
                $type->initialDateTime->setValue((string)$attributes[self::FIELD_INITIAL_DATE_TIME]);
                $type->_setInitialDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialDateTime((string)$attributes[self::FIELD_INITIAL_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_TIME])) {
            if (isset($type->initialTime)) {
                $type->initialTime->setValue((string)$attributes[self::FIELD_INITIAL_TIME]);
                $type->_setInitialTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialTime((string)$attributes[self::FIELD_INITIAL_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_STRING])) {
            if (isset($type->initialString)) {
                $type->initialString->setValue((string)$attributes[self::FIELD_INITIAL_STRING]);
                $type->_setInitialStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialString((string)$attributes[self::FIELD_INITIAL_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIAL_URI])) {
            if (isset($type->initialUri)) {
                $type->initialUri->setValue((string)$attributes[self::FIELD_INITIAL_URI]);
                $type->_setInitialUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInitialUri((string)$attributes[self::FIELD_INITIAL_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->linkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $this->linkId->_getFormattedValue());
        }
        if (isset($this->definition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION]) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $this->definition->_getFormattedValue());
        }
        if (isset($this->prefix) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREFIX]) {
            $xw->writeAttribute(self::FIELD_PREFIX, $this->prefix->_getFormattedValue());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getFormattedValue());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->required) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIRED]) {
            $xw->writeAttribute(self::FIELD_REQUIRED, $this->required->_getFormattedValue());
        }
        if (isset($this->repeats) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REPEATS]) {
            $xw->writeAttribute(self::FIELD_REPEATS, $this->repeats->_getFormattedValue());
        }
        if (isset($this->readOnly) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_READ_ONLY]) {
            $xw->writeAttribute(self::FIELD_READ_ONLY, $this->readOnly->_getFormattedValue());
        }
        if (isset($this->maxLength) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->_getFormattedValue());
        }
        if (isset($this->initialBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_INITIAL_BOOLEAN, $this->initialBoolean->_getFormattedValue());
        }
        if (isset($this->initialDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_INITIAL_DECIMAL, $this->initialDecimal->_getFormattedValue());
        }
        if (isset($this->initialInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER]) {
            $xw->writeAttribute(self::FIELD_INITIAL_INTEGER, $this->initialInteger->_getFormattedValue());
        }
        if (isset($this->initialDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_DATE]) {
            $xw->writeAttribute(self::FIELD_INITIAL_DATE, $this->initialDate->_getFormattedValue());
        }
        if (isset($this->initialDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_INITIAL_DATE_TIME, $this->initialDateTime->_getFormattedValue());
        }
        if (isset($this->initialTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_TIME]) {
            $xw->writeAttribute(self::FIELD_INITIAL_TIME, $this->initialTime->_getFormattedValue());
        }
        if (isset($this->initialString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_STRING]) {
            $xw->writeAttribute(self::FIELD_INITIAL_STRING, $this->initialString->_getFormattedValue());
        }
        if (isset($this->initialUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INITIAL_URI]) {
            $xw->writeAttribute(self::FIELD_INITIAL_URI, $this->initialUri->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->linkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LINK_ID]
                || $this->linkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $this->linkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->definition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION]
                || $this->definition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            foreach ($this->code as $v) {
                $xw->startElement(self::FIELD_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->prefix)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREFIX]
                || $this->prefix->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREFIX);
            $this->prefix->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREFIX]);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->enableWhen)) {
            foreach ($this->enableWhen as $v) {
                $xw->startElement(self::FIELD_ENABLE_WHEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->required)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIRED]
                || $this->required->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIRED);
            $this->required->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIRED]);
            $xw->endElement();
        }
        if (isset($this->repeats)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REPEATS]
                || $this->repeats->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REPEATS);
            $this->repeats->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REPEATS]);
            $xw->endElement();
        }
        if (isset($this->readOnly)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_READ_ONLY]
                || $this->readOnly->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_READ_ONLY);
            $this->readOnly->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_READ_ONLY]);
            $xw->endElement();
        }
        if (isset($this->maxLength)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]
                || $this->maxLength->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $this->maxLength->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]);
            $xw->endElement();
        }
        if (isset($this->options)) {
            $xw->startElement(self::FIELD_OPTIONS);
            $this->options->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->option)) {
            foreach ($this->option as $v) {
                $xw->startElement(self::FIELD_OPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->initialBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN]
                || $this->initialBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_BOOLEAN);
            $this->initialBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->initialDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL]
                || $this->initialDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_DECIMAL);
            $this->initialDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->initialInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER]
                || $this->initialInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_INTEGER);
            $this->initialInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->initialDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_DATE]
                || $this->initialDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_DATE);
            $this->initialDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_DATE]);
            $xw->endElement();
        }
        if (isset($this->initialDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME]
                || $this->initialDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_DATE_TIME);
            $this->initialDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->initialTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_TIME]
                || $this->initialTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_TIME);
            $this->initialTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_TIME]);
            $xw->endElement();
        }
        if (isset($this->initialString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_STRING]
                || $this->initialString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_STRING);
            $this->initialString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_STRING]);
            $xw->endElement();
        }
        if (isset($this->initialUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INITIAL_URI]
                || $this->initialUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INITIAL_URI);
            $this->initialUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INITIAL_URI]);
            $xw->endElement();
        }
        if (isset($this->initialAttachment)) {
            $xw->startElement(self::FIELD_INITIAL_ATTACHMENT);
            $this->initialAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->initialCoding)) {
            $xw->startElement(self::FIELD_INITIAL_CODING);
            $this->initialCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->initialQuantity)) {
            $xw->startElement(self::FIELD_INITIAL_QUANTITY);
            $this->initialQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->initialReference)) {
            $xw->startElement(self::FIELD_INITIAL_REFERENCE);
            $this->initialReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->item)) {
            foreach ($this->item as $v) {
                $xw->startElement(self::FIELD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireItem)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_LINK_ID])
            || isset($json[self::FIELD_LINK_ID_EXT])
            || array_key_exists(self::FIELD_LINK_ID, $json)
            || array_key_exists(self::FIELD_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_LINK_ID] ?? null;
            $type->setLinkId(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_LINK_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION])
            || isset($json[self::FIELD_DEFINITION_EXT])
            || array_key_exists(self::FIELD_DEFINITION, $json)
            || array_key_exists(self::FIELD_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION] ?? null;
            $type->setDefinition(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFINITION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $vs = $json[self::FIELD_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCode(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PREFIX])
            || isset($json[self::FIELD_PREFIX_EXT])
            || array_key_exists(self::FIELD_PREFIX, $json)
            || array_key_exists(self::FIELD_PREFIX_EXT, $json)) {
            $value = $json[self::FIELD_PREFIX] ?? null;
            $type->setPrefix(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PREFIX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TEXT])
            || isset($json[self::FIELD_TEXT_EXT])
            || array_key_exists(self::FIELD_TEXT, $json)
            || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $type->setText(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TEXT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRQuestionnaireItemType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRQuestionnaireItemType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ENABLE_WHEN]) || array_key_exists(self::FIELD_ENABLE_WHEN, $json)) {
            $vs = $json[self::FIELD_ENABLE_WHEN];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REQUIRED])
            || isset($json[self::FIELD_REQUIRED_EXT])
            || array_key_exists(self::FIELD_REQUIRED, $json)
            || array_key_exists(self::FIELD_REQUIRED_EXT, $json)) {
            $value = $json[self::FIELD_REQUIRED] ?? null;
            $type->setRequired(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_REQUIRED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REPEATS])
            || isset($json[self::FIELD_REPEATS_EXT])
            || array_key_exists(self::FIELD_REPEATS, $json)
            || array_key_exists(self::FIELD_REPEATS_EXT, $json)) {
            $value = $json[self::FIELD_REPEATS] ?? null;
            $type->setRepeats(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_REPEATS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_READ_ONLY])
            || isset($json[self::FIELD_READ_ONLY_EXT])
            || array_key_exists(self::FIELD_READ_ONLY, $json)
            || array_key_exists(self::FIELD_READ_ONLY_EXT, $json)) {
            $value = $json[self::FIELD_READ_ONLY] ?? null;
            $type->setReadOnly(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_READ_ONLY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MAX_LENGTH])
            || isset($json[self::FIELD_MAX_LENGTH_EXT])
            || array_key_exists(self::FIELD_MAX_LENGTH, $json)
            || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_MAX_LENGTH] ?? null;
            $type->setMaxLength(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_MAX_LENGTH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPTIONS]) || array_key_exists(self::FIELD_OPTIONS, $json)) {
            $type->setOptions(FHIRReference::jsonUnserialize($json[self::FIELD_OPTIONS], $config));
        }
        if (isset($json[self::FIELD_OPTION]) || array_key_exists(self::FIELD_OPTION, $json)) {
            $vs = $json[self::FIELD_OPTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOption(FHIRQuestionnaireOption::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_INITIAL_BOOLEAN])
            || isset($json[self::FIELD_INITIAL_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_INITIAL_BOOLEAN, $json)
            || array_key_exists(self::FIELD_INITIAL_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_BOOLEAN] ?? null;
            $type->setInitialBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_DECIMAL])
            || isset($json[self::FIELD_INITIAL_DECIMAL_EXT])
            || array_key_exists(self::FIELD_INITIAL_DECIMAL, $json)
            || array_key_exists(self::FIELD_INITIAL_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_DECIMAL] ?? null;
            $type->setInitialDecimal(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_DECIMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_INTEGER])
            || isset($json[self::FIELD_INITIAL_INTEGER_EXT])
            || array_key_exists(self::FIELD_INITIAL_INTEGER, $json)
            || array_key_exists(self::FIELD_INITIAL_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_INTEGER] ?? null;
            $type->setInitialInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_DATE])
            || isset($json[self::FIELD_INITIAL_DATE_EXT])
            || array_key_exists(self::FIELD_INITIAL_DATE, $json)
            || array_key_exists(self::FIELD_INITIAL_DATE_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_DATE] ?? null;
            $type->setInitialDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_DATE_TIME])
            || isset($json[self::FIELD_INITIAL_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_INITIAL_DATE_TIME, $json)
            || array_key_exists(self::FIELD_INITIAL_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_DATE_TIME] ?? null;
            $type->setInitialDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_TIME])
            || isset($json[self::FIELD_INITIAL_TIME_EXT])
            || array_key_exists(self::FIELD_INITIAL_TIME, $json)
            || array_key_exists(self::FIELD_INITIAL_TIME_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_TIME] ?? null;
            $type->setInitialTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_STRING])
            || isset($json[self::FIELD_INITIAL_STRING_EXT])
            || array_key_exists(self::FIELD_INITIAL_STRING, $json)
            || array_key_exists(self::FIELD_INITIAL_STRING_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_STRING] ?? null;
            $type->setInitialString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_URI])
            || isset($json[self::FIELD_INITIAL_URI_EXT])
            || array_key_exists(self::FIELD_INITIAL_URI, $json)
            || array_key_exists(self::FIELD_INITIAL_URI_EXT, $json)) {
            $value = $json[self::FIELD_INITIAL_URI] ?? null;
            $type->setInitialUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_INITIAL_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INITIAL_ATTACHMENT]) || array_key_exists(self::FIELD_INITIAL_ATTACHMENT, $json)) {
            $type->setInitialAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_INITIAL_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_INITIAL_CODING]) || array_key_exists(self::FIELD_INITIAL_CODING, $json)) {
            $type->setInitialCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_INITIAL_CODING], $config));
        }
        if (isset($json[self::FIELD_INITIAL_QUANTITY]) || array_key_exists(self::FIELD_INITIAL_QUANTITY, $json)) {
            $type->setInitialQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_INITIAL_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_INITIAL_REFERENCE]) || array_key_exists(self::FIELD_INITIAL_REFERENCE, $json)) {
            $type->setInitialReference(FHIRReference::jsonUnserialize($json[self::FIELD_INITIAL_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            $vs = $json[self::FIELD_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addItem(FHIRQuestionnaireItem::jsonUnserialize($v, $config));
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
        if (isset($this->linkId)) {
            if (null !== ($val = $this->linkId->getValue())) {
                $out->linkId = $val;
            }
            if ($this->linkId->_nonValueFieldDefined()) {
                $ext = $this->linkId->jsonSerialize();
                unset($ext->value);
                $out->_linkId = $ext;
            }
        }
        if (isset($this->definition)) {
            if (null !== ($val = $this->definition->getValue())) {
                $out->definition = $val;
            }
            if ($this->definition->_nonValueFieldDefined()) {
                $ext = $this->definition->jsonSerialize();
                unset($ext->value);
                $out->_definition = $ext;
            }
        }
        if (isset($this->code) && [] !== $this->code) {
            $out->code = $this->code;
        }
        if (isset($this->prefix)) {
            if (null !== ($val = $this->prefix->getValue())) {
                $out->prefix = $val;
            }
            if ($this->prefix->_nonValueFieldDefined()) {
                $ext = $this->prefix->jsonSerialize();
                unset($ext->value);
                $out->_prefix = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            if ($this->text->_nonValueFieldDefined()) {
                $ext = $this->text->jsonSerialize();
                unset($ext->value);
                $out->_text = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->enableWhen) && [] !== $this->enableWhen) {
            $out->enableWhen = $this->enableWhen;
        }
        if (isset($this->required)) {
            if (null !== ($val = $this->required->getValue())) {
                $out->required = $val;
            }
            if ($this->required->_nonValueFieldDefined()) {
                $ext = $this->required->jsonSerialize();
                unset($ext->value);
                $out->_required = $ext;
            }
        }
        if (isset($this->repeats)) {
            if (null !== ($val = $this->repeats->getValue())) {
                $out->repeats = $val;
            }
            if ($this->repeats->_nonValueFieldDefined()) {
                $ext = $this->repeats->jsonSerialize();
                unset($ext->value);
                $out->_repeats = $ext;
            }
        }
        if (isset($this->readOnly)) {
            if (null !== ($val = $this->readOnly->getValue())) {
                $out->readOnly = $val;
            }
            if ($this->readOnly->_nonValueFieldDefined()) {
                $ext = $this->readOnly->jsonSerialize();
                unset($ext->value);
                $out->_readOnly = $ext;
            }
        }
        if (isset($this->maxLength)) {
            if (null !== ($val = $this->maxLength->getValue())) {
                $out->maxLength = $val;
            }
            if ($this->maxLength->_nonValueFieldDefined()) {
                $ext = $this->maxLength->jsonSerialize();
                unset($ext->value);
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->options)) {
            $out->options = $this->options;
        }
        if (isset($this->option) && [] !== $this->option) {
            $out->option = $this->option;
        }
        if (isset($this->initialBoolean)) {
            if (null !== ($val = $this->initialBoolean->getValue())) {
                $out->initialBoolean = $val;
            }
            if ($this->initialBoolean->_nonValueFieldDefined()) {
                $ext = $this->initialBoolean->jsonSerialize();
                unset($ext->value);
                $out->_initialBoolean = $ext;
            }
        }
        if (isset($this->initialDecimal)) {
            if (null !== ($val = $this->initialDecimal->getValue())) {
                $out->initialDecimal = $val;
            }
            if ($this->initialDecimal->_nonValueFieldDefined()) {
                $ext = $this->initialDecimal->jsonSerialize();
                unset($ext->value);
                $out->_initialDecimal = $ext;
            }
        }
        if (isset($this->initialInteger)) {
            if (null !== ($val = $this->initialInteger->getValue())) {
                $out->initialInteger = $val;
            }
            if ($this->initialInteger->_nonValueFieldDefined()) {
                $ext = $this->initialInteger->jsonSerialize();
                unset($ext->value);
                $out->_initialInteger = $ext;
            }
        }
        if (isset($this->initialDate)) {
            if (null !== ($val = $this->initialDate->getValue())) {
                $out->initialDate = $val;
            }
            if ($this->initialDate->_nonValueFieldDefined()) {
                $ext = $this->initialDate->jsonSerialize();
                unset($ext->value);
                $out->_initialDate = $ext;
            }
        }
        if (isset($this->initialDateTime)) {
            if (null !== ($val = $this->initialDateTime->getValue())) {
                $out->initialDateTime = $val;
            }
            if ($this->initialDateTime->_nonValueFieldDefined()) {
                $ext = $this->initialDateTime->jsonSerialize();
                unset($ext->value);
                $out->_initialDateTime = $ext;
            }
        }
        if (isset($this->initialTime)) {
            if (null !== ($val = $this->initialTime->getValue())) {
                $out->initialTime = $val;
            }
            if ($this->initialTime->_nonValueFieldDefined()) {
                $ext = $this->initialTime->jsonSerialize();
                unset($ext->value);
                $out->_initialTime = $ext;
            }
        }
        if (isset($this->initialString)) {
            if (null !== ($val = $this->initialString->getValue())) {
                $out->initialString = $val;
            }
            if ($this->initialString->_nonValueFieldDefined()) {
                $ext = $this->initialString->jsonSerialize();
                unset($ext->value);
                $out->_initialString = $ext;
            }
        }
        if (isset($this->initialUri)) {
            if (null !== ($val = $this->initialUri->getValue())) {
                $out->initialUri = $val;
            }
            if ($this->initialUri->_nonValueFieldDefined()) {
                $ext = $this->initialUri->jsonSerialize();
                unset($ext->value);
                $out->_initialUri = $ext;
            }
        }
        if (isset($this->initialAttachment)) {
            $out->initialAttachment = $this->initialAttachment;
        }
        if (isset($this->initialCoding)) {
            $out->initialCoding = $this->initialCoding;
        }
        if (isset($this->initialQuantity)) {
            $out->initialQuantity = $this->initialQuantity;
        }
        if (isset($this->initialReference)) {
            $out->initialReference = $this->initialReference;
        }
        if (isset($this->item) && [] !== $this->item) {
            $out->item = $this->item;
        }
        return $out;
    }
}