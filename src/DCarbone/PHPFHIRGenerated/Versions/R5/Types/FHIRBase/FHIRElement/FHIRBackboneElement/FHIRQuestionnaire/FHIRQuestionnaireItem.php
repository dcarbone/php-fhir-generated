<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREnableWhenBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM;

    /* class_default.php:48 */
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
    public const FIELD_ENABLE_BEHAVIOR = 'enableBehavior';
    public const FIELD_ENABLE_BEHAVIOR_EXT = '_enableBehavior';
    public const FIELD_DISABLED_DISPLAY = 'disabledDisplay';
    public const FIELD_DISABLED_DISPLAY_EXT = '_disabledDisplay';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_REQUIRED_EXT = '_required';
    public const FIELD_REPEATS = 'repeats';
    public const FIELD_REPEATS_EXT = '_repeats';
    public const FIELD_READ_ONLY = 'readOnly';
    public const FIELD_READ_ONLY_EXT = '_readOnly';
    public const FIELD_MAX_LENGTH = 'maxLength';
    public const FIELD_MAX_LENGTH_EXT = '_maxLength';
    public const FIELD_ANSWER_CONSTRAINT = 'answerConstraint';
    public const FIELD_ANSWER_CONSTRAINT_EXT = '_answerConstraint';
    public const FIELD_ANSWER_VALUE_SET = 'answerValueSet';
    public const FIELD_ANSWER_VALUE_SET_EXT = '_answerValueSet';
    public const FIELD_ANSWER_OPTION = 'answerOption';
    public const FIELD_INITIAL = 'initial';
    public const FIELD_ITEM = 'item';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_LINK_ID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREFIX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ENABLE_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISABLED_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIRED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REPEATS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_READ_ONLY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_CONSTRAINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $linkId;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $prefix;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemType 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] 
     */
    protected array $enableWhen;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREnableWhenBehavior 
     */
    protected FHIREnableWhenBehavior $enableBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay 
     */
    protected FHIRQuestionnaireItemDisabledDisplay $disabledDisplay;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $required;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $repeats;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $maxLength;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint 
     */
    protected FHIRQuestionnaireAnswerConstraint $answerConstraint;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $answerValueSet;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[] 
     */
    protected array $answerOption;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[] 
     */
    protected array $initial;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] 
     */
    protected array $item;

    /* constructor.php:63 */
    /**
     * FHIRQuestionnaireItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $prefix
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] $enableWhen
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREnableWhenBehavior $enableBehavior
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay $disabledDisplay
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $required
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $repeats
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $readOnly
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $maxLength
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint $answerConstraint
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $answerValueSet
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[] $answerOption
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[] $initial
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] $item
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
                                null|FHIRQuestionnaireItemType $type = null,
                                null|iterable $enableWhen = null,
                                null|FHIREnableWhenBehavior $enableBehavior = null,
                                null|FHIRQuestionnaireItemDisabledDisplay $disabledDisplay = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $repeats = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readOnly = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
                                null|FHIRQuestionnaireAnswerConstraint $answerConstraint = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $answerValueSet = null,
                                null|iterable $answerOption = null,
                                null|iterable $initial = null,
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
        if (null !== $enableBehavior) {
            $this->setEnableBehavior($enableBehavior);
        }
        if (null !== $disabledDisplay) {
            $this->setDisabledDisplay($disabledDisplay);
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
        if (null !== $answerConstraint) {
            $this->setAnswerConstraint($answerConstraint);
        }
        if (null !== $answerValueSet) {
            $this->setAnswerValueSet($answerValueSet);
        }
        if (null !== $answerOption) {
            $this->setAnswerOption(...$answerOption);
        }
        if (null !== $initial) {
            $this->setInitial(...$initial);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
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
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
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
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $definition
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $code
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$code
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
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $prefix
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
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $text
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType(): null|FHIRQuestionnaireItemType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|FHIRQuestionnaireItemType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen(): array
    {
        return $this->enableWhen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen ...$enableWhen
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREnableWhenBehavior
     */
    public function getEnableBehavior(): null|FHIREnableWhenBehavior
    {
        return $this->enableBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREnableWhenBehavior $enableBehavior
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEnableBehavior(null|FHIREnableWhenBehavior $enableBehavior,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $enableBehavior) {
            unset($this->enableBehavior);
            return $this;
        }
        $this->enableBehavior = $enableBehavior;
        if ($this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR] !== $valueXMLLocation) {
            $this->_setEnableBehaviorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the enableBehavior element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEnableBehaviorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR];
    }

    /**
     * Set the location the "value" field of the enableBehavior element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEnableBehaviorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay
     */
    public function getDisabledDisplay(): null|FHIRQuestionnaireItemDisabledDisplay
    {
        return $this->disabledDisplay ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay $disabledDisplay
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDisabledDisplay(null|FHIRQuestionnaireItemDisabledDisplay $disabledDisplay,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $disabledDisplay) {
            unset($this->disabledDisplay);
            return $this;
        }
        $this->disabledDisplay = $disabledDisplay;
        if ($this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY] !== $valueXMLLocation) {
            $this->_setDisabledDisplayValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the disabledDisplay element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDisabledDisplayValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY];
    }

    /**
     * Set the location the "value" field of the disabledDisplay element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDisabledDisplayValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $required
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
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getRepeats(): null|FHIRBoolean
    {
        return $this->repeats ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $repeats
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $readOnly
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $maxLength
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint
     */
    public function getAnswerConstraint(): null|FHIRQuestionnaireAnswerConstraint
    {
        return $this->answerConstraint ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint $answerConstraint
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerConstraint(null|FHIRQuestionnaireAnswerConstraint $answerConstraint,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerConstraint) {
            unset($this->answerConstraint);
            return $this;
        }
        $this->answerConstraint = $answerConstraint;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT] !== $valueXMLLocation) {
            $this->_setAnswerConstraintValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerConstraint element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerConstraintValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT];
    }

    /**
     * Set the location the "value" field of the answerConstraint element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerConstraintValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getAnswerValueSet(): null|FHIRCanonical
    {
        return $this->answerValueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $answerValueSet
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $answerValueSet,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerValueSet) {
            unset($this->answerValueSet);
            return $this;
        }
        if (!($answerValueSet instanceof FHIRCanonical)) {
            $answerValueSet = new FHIRCanonical(value: $answerValueSet);
        }
        $this->answerValueSet = $answerValueSet;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET] !== $valueXMLLocation) {
            $this->_setAnswerValueSetValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerValueSet element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerValueSetValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET];
    }

    /**
     * Set the location the "value" field of the answerValueSet element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerValueSetValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET] = $valueXMLLocation;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    public function getAnswerOption(): array
    {
        return $this->answerOption ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption>
     */
    public function getAnswerOptionIterator(): iterable
    {
        if (!isset($this->answerOption)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->answerOption);
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption $answerOption
     * @return static
     */
    public function addAnswerOption(FHIRQuestionnaireAnswerOption $answerOption): self
    {
        if (!isset($this->answerOption)) {
            $this->answerOption = [];
        }
        $this->answerOption[] = $answerOption;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption ...$answerOption
     * @return static
     */
    public function setAnswerOption(FHIRQuestionnaireAnswerOption ...$answerOption): self
    {
        if ([] === $answerOption) {
            unset($this->answerOption);
            return $this;
        }
        $this->answerOption = $answerOption;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    public function getInitial(): array
    {
        return $this->initial ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial>
     */
    public function getInitialIterator(): iterable
    {
        if (!isset($this->initial)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->initial);
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial $initial
     * @return static
     */
    public function addInitial(FHIRQuestionnaireInitial $initial): self
    {
        if (!isset($this->initial)) {
            $this->initial = [];
        }
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial ...$initial
     * @return static
     */
    public function setInitial(FHIRQuestionnaireInitial ...$initial): self
    {
        if ([] === $initial) {
            unset($this->initial);
            return $this;
        }
        $this->initial = $initial;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem ...$item
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

    /* class_default.php:189 */
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
        if (isset($validationRules[self::FIELD_ENABLE_BEHAVIOR])) {
            $v = $this->getEnableBehavior();
            foreach($validationRules[self::FIELD_ENABLE_BEHAVIOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENABLE_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_BEHAVIOR])) {
                        $errs[self::FIELD_ENABLE_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_ENABLE_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISABLED_DISPLAY])) {
            $v = $this->getDisabledDisplay();
            foreach($validationRules[self::FIELD_DISABLED_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISABLED_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISABLED_DISPLAY])) {
                        $errs[self::FIELD_DISABLED_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISABLED_DISPLAY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ANSWER_CONSTRAINT])) {
            $v = $this->getAnswerConstraint();
            foreach($validationRules[self::FIELD_ANSWER_CONSTRAINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_CONSTRAINT])) {
                        $errs[self::FIELD_ANSWER_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_ANSWER_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_VALUE_SET])) {
            $v = $this->getAnswerValueSet();
            foreach($validationRules[self::FIELD_ANSWER_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_VALUE_SET])) {
                        $errs[self::FIELD_ANSWER_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_ANSWER_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_OPTION])) {
            $v = $this->getAnswerOption();
            foreach($validationRules[self::FIELD_ANSWER_OPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_OPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_OPTION])) {
                        $errs[self::FIELD_ANSWER_OPTION] = [];
                    }
                    $errs[self::FIELD_ANSWER_OPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL])) {
            $v = $this->getInitial();
            foreach($validationRules[self::FIELD_INITIAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL])) {
                        $errs[self::FIELD_INITIAL] = [];
                    }
                    $errs[self::FIELD_INITIAL][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
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
            } else if (self::FIELD_ENABLE_BEHAVIOR === $cen) {
                $type->setEnableBehavior(FHIREnableWhenBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISABLED_DISPLAY === $cen) {
                $type->setDisabledDisplay(FHIRQuestionnaireItemDisabledDisplay::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIRED === $cen) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPEATS === $cen) {
                $type->setRepeats(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_READ_ONLY === $cen) {
                $type->setReadOnly(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_LENGTH === $cen) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_CONSTRAINT === $cen) {
                $type->setAnswerConstraint(FHIRQuestionnaireAnswerConstraint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_VALUE_SET === $cen) {
                $type->setAnswerValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_OPTION === $cen) {
                $type->addAnswerOption(FHIRQuestionnaireAnswerOption::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INITIAL === $cen) {
                $type->addInitial(FHIRQuestionnaireInitial::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($ce, $config));
            }        }
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
        if (isset($attributes[self::FIELD_ENABLE_BEHAVIOR])) {
            if (isset($type->enableBehavior)) {
                $type->enableBehavior->setValue((string)$attributes[self::FIELD_ENABLE_BEHAVIOR]);
                $type->_setEnableBehaviorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEnableBehavior((string)$attributes[self::FIELD_ENABLE_BEHAVIOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DISABLED_DISPLAY])) {
            if (isset($type->disabledDisplay)) {
                $type->disabledDisplay->setValue((string)$attributes[self::FIELD_DISABLED_DISPLAY]);
                $type->_setDisabledDisplayValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDisabledDisplay((string)$attributes[self::FIELD_DISABLED_DISPLAY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ANSWER_CONSTRAINT])) {
            if (isset($type->answerConstraint)) {
                $type->answerConstraint->setValue((string)$attributes[self::FIELD_ANSWER_CONSTRAINT]);
                $type->_setAnswerConstraintValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerConstraint((string)$attributes[self::FIELD_ANSWER_CONSTRAINT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_VALUE_SET])) {
            if (isset($type->answerValueSet)) {
                $type->answerValueSet->setValue((string)$attributes[self::FIELD_ANSWER_VALUE_SET]);
                $type->_setAnswerValueSetValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerValueSet((string)$attributes[self::FIELD_ANSWER_VALUE_SET], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->enableBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_ENABLE_BEHAVIOR, $this->enableBehavior->_getFormattedValue());
        }
        if (isset($this->disabledDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_DISABLED_DISPLAY, $this->disabledDisplay->_getFormattedValue());
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
        if (isset($this->answerConstraint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT]) {
            $xw->writeAttribute(self::FIELD_ANSWER_CONSTRAINT, $this->answerConstraint->_getFormattedValue());
        }
        if (isset($this->answerValueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_ANSWER_VALUE_SET, $this->answerValueSet->_getFormattedValue());
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
        if (isset($this->enableBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR]
                || $this->enableBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ENABLE_BEHAVIOR);
            $this->enableBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ENABLE_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->disabledDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY]
                || $this->disabledDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISABLED_DISPLAY);
            $this->disabledDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISABLED_DISPLAY]);
            $xw->endElement();
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
        if (isset($this->answerConstraint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT]
                || $this->answerConstraint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_CONSTRAINT);
            $this->answerConstraint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_CONSTRAINT]);
            $xw->endElement();
        }
        if (isset($this->answerValueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET]
                || $this->answerValueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_VALUE_SET);
            $this->answerValueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_VALUE_SET]);
            $xw->endElement();
        }
        if (isset($this->answerOption)) {
            foreach ($this->answerOption as $v) {
                $xw->startElement(self::FIELD_ANSWER_OPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->initial)) {
            foreach ($this->initial as $v) {
                $xw->startElement(self::FIELD_INITIAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_LINK_ID]) || isset($json[self::FIELD_LINK_ID_EXT]) || array_key_exists(self::FIELD_LINK_ID, $json) || array_key_exists(self::FIELD_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_LINK_ID] ?? null;
            $ext = (array)($json[self::FIELD_LINK_ID_EXT] ?? []);
            $type->setLinkId(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION]) || isset($json[self::FIELD_DEFINITION_EXT]) || array_key_exists(self::FIELD_DEFINITION, $json) || array_key_exists(self::FIELD_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION] ?? null;
            $ext = (array)($json[self::FIELD_DEFINITION_EXT] ?? []);
            $type->setDefinition(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $vs = $json[self::FIELD_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCode(FHIRCoding::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PREFIX]) || isset($json[self::FIELD_PREFIX_EXT]) || array_key_exists(self::FIELD_PREFIX, $json) || array_key_exists(self::FIELD_PREFIX_EXT, $json)) {
            $value = $json[self::FIELD_PREFIX] ?? null;
            $ext = (array)($json[self::FIELD_PREFIX_EXT] ?? []);
            $type->setPrefix(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TEXT]) || isset($json[self::FIELD_TEXT_EXT]) || array_key_exists(self::FIELD_TEXT, $json) || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $ext = (array)($json[self::FIELD_TEXT_EXT] ?? []);
            $type->setText(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (array)($json[self::FIELD_TYPE_EXT] ?? []);
            $type->setType(FHIRQuestionnaireItemType::jsonUnserialize(
                json: [FHIRQuestionnaireItemType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ENABLE_WHEN]) || array_key_exists(self::FIELD_ENABLE_WHEN, $json)) {
            $vs = $json[self::FIELD_ENABLE_WHEN];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ENABLE_BEHAVIOR]) || isset($json[self::FIELD_ENABLE_BEHAVIOR_EXT]) || array_key_exists(self::FIELD_ENABLE_BEHAVIOR, $json) || array_key_exists(self::FIELD_ENABLE_BEHAVIOR_EXT, $json)) {
            $value = $json[self::FIELD_ENABLE_BEHAVIOR] ?? null;
            $ext = (array)($json[self::FIELD_ENABLE_BEHAVIOR_EXT] ?? []);
            $type->setEnableBehavior(FHIREnableWhenBehavior::jsonUnserialize(
                json: [FHIREnableWhenBehavior::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DISABLED_DISPLAY]) || isset($json[self::FIELD_DISABLED_DISPLAY_EXT]) || array_key_exists(self::FIELD_DISABLED_DISPLAY, $json) || array_key_exists(self::FIELD_DISABLED_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_DISABLED_DISPLAY] ?? null;
            $ext = (array)($json[self::FIELD_DISABLED_DISPLAY_EXT] ?? []);
            $type->setDisabledDisplay(FHIRQuestionnaireItemDisabledDisplay::jsonUnserialize(
                json: [FHIRQuestionnaireItemDisabledDisplay::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REQUIRED]) || isset($json[self::FIELD_REQUIRED_EXT]) || array_key_exists(self::FIELD_REQUIRED, $json) || array_key_exists(self::FIELD_REQUIRED_EXT, $json)) {
            $value = $json[self::FIELD_REQUIRED] ?? null;
            $ext = (array)($json[self::FIELD_REQUIRED_EXT] ?? []);
            $type->setRequired(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REPEATS]) || isset($json[self::FIELD_REPEATS_EXT]) || array_key_exists(self::FIELD_REPEATS, $json) || array_key_exists(self::FIELD_REPEATS_EXT, $json)) {
            $value = $json[self::FIELD_REPEATS] ?? null;
            $ext = (array)($json[self::FIELD_REPEATS_EXT] ?? []);
            $type->setRepeats(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_READ_ONLY]) || isset($json[self::FIELD_READ_ONLY_EXT]) || array_key_exists(self::FIELD_READ_ONLY, $json) || array_key_exists(self::FIELD_READ_ONLY_EXT, $json)) {
            $value = $json[self::FIELD_READ_ONLY] ?? null;
            $ext = (array)($json[self::FIELD_READ_ONLY_EXT] ?? []);
            $type->setReadOnly(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MAX_LENGTH]) || isset($json[self::FIELD_MAX_LENGTH_EXT]) || array_key_exists(self::FIELD_MAX_LENGTH, $json) || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (array)($json[self::FIELD_MAX_LENGTH_EXT] ?? []);
            $type->setMaxLength(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_CONSTRAINT]) || isset($json[self::FIELD_ANSWER_CONSTRAINT_EXT]) || array_key_exists(self::FIELD_ANSWER_CONSTRAINT, $json) || array_key_exists(self::FIELD_ANSWER_CONSTRAINT_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_CONSTRAINT] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_CONSTRAINT_EXT] ?? []);
            $type->setAnswerConstraint(FHIRQuestionnaireAnswerConstraint::jsonUnserialize(
                json: [FHIRQuestionnaireAnswerConstraint::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_VALUE_SET]) || isset($json[self::FIELD_ANSWER_VALUE_SET_EXT]) || array_key_exists(self::FIELD_ANSWER_VALUE_SET, $json) || array_key_exists(self::FIELD_ANSWER_VALUE_SET_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_VALUE_SET] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_VALUE_SET_EXT] ?? []);
            $type->setAnswerValueSet(FHIRCanonical::jsonUnserialize(
                json: [FHIRCanonical::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_OPTION]) || array_key_exists(self::FIELD_ANSWER_OPTION, $json)) {
            $vs = $json[self::FIELD_ANSWER_OPTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAnswerOption(FHIRQuestionnaireAnswerOption::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INITIAL]) || array_key_exists(self::FIELD_INITIAL, $json)) {
            $vs = $json[self::FIELD_INITIAL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInitial(FHIRQuestionnaireInitial::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            $vs = $json[self::FIELD_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addItem(FHIRQuestionnaireItem::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
            $ext = $this->linkId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_linkId = $ext;
            }
        }
        if (isset($this->definition)) {
            if (null !== ($val = $this->definition->getValue())) {
                $out->definition = $val;
            }
            $ext = $this->definition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->prefix->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_prefix = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            $ext = $this->text->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_text = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->enableWhen) && [] !== $this->enableWhen) {
            $out->enableWhen = $this->enableWhen;
        }
        if (isset($this->enableBehavior)) {
            if (null !== ($val = $this->enableBehavior->getValue())) {
                $out->enableBehavior = $val;
            }
            $ext = $this->enableBehavior->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_enableBehavior = $ext;
            }
        }
        if (isset($this->disabledDisplay)) {
            if (null !== ($val = $this->disabledDisplay->getValue())) {
                $out->disabledDisplay = $val;
            }
            $ext = $this->disabledDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_disabledDisplay = $ext;
            }
        }
        if (isset($this->required)) {
            if (null !== ($val = $this->required->getValue())) {
                $out->required = $val;
            }
            $ext = $this->required->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_required = $ext;
            }
        }
        if (isset($this->repeats)) {
            if (null !== ($val = $this->repeats->getValue())) {
                $out->repeats = $val;
            }
            $ext = $this->repeats->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_repeats = $ext;
            }
        }
        if (isset($this->readOnly)) {
            if (null !== ($val = $this->readOnly->getValue())) {
                $out->readOnly = $val;
            }
            $ext = $this->readOnly->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_readOnly = $ext;
            }
        }
        if (isset($this->maxLength)) {
            if (null !== ($val = $this->maxLength->getValue())) {
                $out->maxLength = $val;
            }
            $ext = $this->maxLength->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->answerConstraint)) {
            if (null !== ($val = $this->answerConstraint->getValue())) {
                $out->answerConstraint = $val;
            }
            $ext = $this->answerConstraint->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerConstraint = $ext;
            }
        }
        if (isset($this->answerValueSet)) {
            if (null !== ($val = $this->answerValueSet->getValue())) {
                $out->answerValueSet = $val;
            }
            $ext = $this->answerValueSet->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerValueSet = $ext;
            }
        }
        if (isset($this->answerOption) && [] !== $this->answerOption) {
            $out->answerOption = $this->answerOption;
        }
        if (isset($this->initial) && [] !== $this->initial) {
            $out->initial = $this->initial;
        }
        if (isset($this->item) && [] !== $this->item) {
            $out->item = $this->item;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}