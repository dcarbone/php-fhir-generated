<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGroupMeasureEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is
 * about.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;

    /* class_default.php:56 */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    public const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    public const FIELD_METHOD = 'method';
    public const FIELD_DEVICE = 'device';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_EXCLUDE_EXT = '_exclude';
    public const FIELD_TIME_FROM_START = 'timeFromStart';
    public const FIELD_GROUP_MEASURE = 'groupMeasure';
    public const FIELD_GROUP_MEASURE_EXT = '_groupMeasure';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_DEFINITION_REFERENCE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DEFINITION_CANONICAL => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DEFINITION_CODEABLE_CONCEPT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DEFINITION_EXPRESSION => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GROUP_MEASURE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $definitionReference;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $definitionCanonical;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $definitionCodeableConcept;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression 
     */
    #[FHIRExpression]
    protected FHIRExpression $definitionExpression;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method used for describing characteristic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $method;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Device used for determining characteristic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $device;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $exclude;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Indicates duration, period, or point of observation from the participant's study
     * entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromStart 
     */
    #[FHIREvidenceVariableTimeFromStart]
    protected FHIREvidenceVariableTimeFromStart $timeFromStart;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure 
     */
    #[FHIRGroupMeasure]
    protected FHIRGroupMeasure $groupMeasure;

    /* constructor.php:61 */
    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $definitionReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression $definitionExpression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $device
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $exclude
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromStart $timeFromStart
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGroupMeasureEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRReference $definitionReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|FHIRCodeableConcept $definitionCodeableConcept = null,
                                null|FHIRExpression $definitionExpression = null,
                                null|FHIRCodeableConcept $method = null,
                                null|FHIRReference $device = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null,
                                null|FHIREvidenceVariableTimeFromStart $timeFromStart = null,
                                null|string|FHIRGroupMeasureEnum|FHIRGroupMeasure $groupMeasure = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $definitionReference) {
            $this->setDefinitionReference($definitionReference);
        }
        if (null !== $definitionCanonical) {
            $this->setDefinitionCanonical($definitionCanonical);
        }
        if (null !== $definitionCodeableConcept) {
            $this->setDefinitionCodeableConcept($definitionCodeableConcept);
        }
        if (null !== $definitionExpression) {
            $this->setDefinitionExpression($definitionExpression);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $device) {
            $this->setDevice($device);
        }
        if (null !== $exclude) {
            $this->setExclude($exclude);
        }
        if (null !== $timeFromStart) {
            $this->setTimeFromStart($timeFromStart);
        }
        if (null !== $groupMeasure) {
            $this->setGroupMeasure($groupMeasure);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getDefinitionReference(): null|FHIRReference
    {
        return $this->definitionReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(null|FHIRReference $definitionReference): self
    {
        if (null === $definitionReference) {
            unset($this->definitionReference);
            return $this;
        }
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical): self
    {
        if (null === $definitionCanonical) {
            unset($this->definitionCanonical);
            return $this;
        }
        if (!($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical(value: $definitionCanonical);
        }
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definitionCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
     */
    public function setDefinitionCodeableConcept(null|FHIRCodeableConcept $definitionCodeableConcept): self
    {
        if (null === $definitionCodeableConcept) {
            unset($this->definitionCodeableConcept);
            return $this;
        }
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression
     */
    public function getDefinitionExpression(): null|FHIRExpression
    {
        return $this->definitionExpression ?? null;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(null|FHIRExpression $definitionExpression): self
    {
        if (null === $definitionExpression) {
            unset($this->definitionExpression);
            return $this;
        }
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method used for describing characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method used for describing characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Device used for determining characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
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
     * Device used for determining characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $device
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $exclude
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude): self
    {
        if (null === $exclude) {
            unset($this->exclude);
            return $this;
        }
        if (!($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean(value: $exclude);
        }
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Indicates duration, period, or point of observation from the participant's study
     * entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromStart
     */
    public function getTimeFromStart(): null|FHIREvidenceVariableTimeFromStart
    {
        return $this->timeFromStart ?? null;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Indicates duration, period, or point of observation from the participant's study
     * entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromStart $timeFromStart
     * @return static
     */
    public function setTimeFromStart(null|FHIREvidenceVariableTimeFromStart $timeFromStart): self
    {
        if (null === $timeFromStart) {
            unset($this->timeFromStart);
            return $this;
        }
        $this->timeFromStart = $timeFromStart;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure
     */
    public function getGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->groupMeasure ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGroupMeasureEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @return static
     */
    public function setGroupMeasure(null|string|FHIRGroupMeasureEnum|FHIRGroupMeasure $groupMeasure): self
    {
        if (null === $groupMeasure) {
            unset($this->groupMeasure);
            return $this;
        }
        if (!($groupMeasure instanceof FHIRGroupMeasure)) {
            $groupMeasure = new FHIRGroupMeasure(value: $groupMeasure);
        }
        $this->groupMeasure = $groupMeasure;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
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
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_REFERENCE === $cen) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $cen) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $cen) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_EXPRESSION === $cen) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->setDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIME_FROM_START === $cen) {
                $type->setTimeFromStart(FHIREvidenceVariableTimeFromStart::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP_MEASURE === $cen) {
                $type->setGroupMeasure(FHIRGroupMeasure::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            if (isset($type->definitionCanonical)) {
                $type->definitionCanonical->setValue((string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
            } else {
                $type->setDefinitionCanonical((string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFINITION_CANONICAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            if (isset($type->exclude)) {
                $type->exclude->setValue((string)$attributes[self::FIELD_EXCLUDE]);
            } else {
                $type->setExclude((string)$attributes[self::FIELD_EXCLUDE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXCLUDE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GROUP_MEASURE])) {
            if (isset($type->groupMeasure)) {
                $type->groupMeasure->setValue((string)$attributes[self::FIELD_GROUP_MEASURE]);
            } else {
                $type->setGroupMeasure((string)$attributes[self::FIELD_GROUP_MEASURE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GROUP_MEASURE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->definitionCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->_getValueAsString());
        }
        if (isset($this->exclude) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $this->exclude->_getValueAsString());
        }
        if (isset($this->groupMeasure) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]) {
            $xw->writeAttribute(self::FIELD_GROUP_MEASURE, $this->groupMeasure->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->definitionReference)) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $this->definitionReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]
                || $this->definitionCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->definitionCodeableConcept)) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $this->definitionCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionExpression)) {
            $xw->startElement(self::FIELD_DEFINITION_EXPRESSION);
            $this->definitionExpression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->device)) {
            $xw->startElement(self::FIELD_DEVICE);
            $this->device->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exclude)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE]
                || $this->exclude->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $this->exclude->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE]);
            $xw->endElement();
        }
        if (isset($this->timeFromStart)) {
            $xw->startElement(self::FIELD_TIME_FROM_START);
            $this->timeFromStart->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupMeasure)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]
                || $this->groupMeasure->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUP_MEASURE);
            $this->groupMeasure->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->definitionReference) || property_exists($decoded, self::FIELD_DEFINITION_REFERENCE)) {
            if (is_array($decoded->definitionReference)) {
                $type->setDefinitionReference(FHIRReference::jsonUnserialize(reset($decoded->definitionReference), $config));
            } else {
                $type->setDefinitionReference(FHIRReference::jsonUnserialize($decoded->definitionReference, $config));
            }
        }
        if (isset($decoded->definitionCanonical)
            || isset($decoded->_definitionCanonical)
            || property_exists($decoded, self::FIELD_DEFINITION_CANONICAL)
            || property_exists($decoded, self::FIELD_DEFINITION_CANONICAL_EXT)) {
            $v = $decoded->_definitionCanonical ?? new \stdClass();
            $v->value = $decoded->definitionCanonical ?? null;
            $type->setDefinitionCanonical(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->definitionCodeableConcept) || property_exists($decoded, self::FIELD_DEFINITION_CODEABLE_CONCEPT)) {
            if (is_array($decoded->definitionCodeableConcept)) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->definitionCodeableConcept), $config));
            } else {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->definitionCodeableConcept, $config));
            }
        }
        if (isset($decoded->definitionExpression) || property_exists($decoded, self::FIELD_DEFINITION_EXPRESSION)) {
            if (is_array($decoded->definitionExpression)) {
                $type->setDefinitionExpression(FHIRExpression::jsonUnserialize(reset($decoded->definitionExpression), $config));
            } else {
                $type->setDefinitionExpression(FHIRExpression::jsonUnserialize($decoded->definitionExpression, $config));
            }
        }
        if (isset($decoded->method) || property_exists($decoded, self::FIELD_METHOD)) {
            if (is_array($decoded->method)) {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize(reset($decoded->method), $config));
            } else {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize($decoded->method, $config));
            }
        }
        if (isset($decoded->device) || property_exists($decoded, self::FIELD_DEVICE)) {
            if (is_array($decoded->device)) {
                $type->setDevice(FHIRReference::jsonUnserialize(reset($decoded->device), $config));
            } else {
                $type->setDevice(FHIRReference::jsonUnserialize($decoded->device, $config));
            }
        }
        if (isset($decoded->exclude)
            || isset($decoded->_exclude)
            || property_exists($decoded, self::FIELD_EXCLUDE)
            || property_exists($decoded, self::FIELD_EXCLUDE_EXT)) {
            $v = $decoded->_exclude ?? new \stdClass();
            $v->value = $decoded->exclude ?? null;
            $type->setExclude(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->timeFromStart) || property_exists($decoded, self::FIELD_TIME_FROM_START)) {
            if (is_array($decoded->timeFromStart)) {
                $type->setTimeFromStart(FHIREvidenceVariableTimeFromStart::jsonUnserialize(reset($decoded->timeFromStart), $config));
            } else {
                $type->setTimeFromStart(FHIREvidenceVariableTimeFromStart::jsonUnserialize($decoded->timeFromStart, $config));
            }
        }
        if (isset($decoded->groupMeasure)
            || isset($decoded->_groupMeasure)
            || property_exists($decoded, self::FIELD_GROUP_MEASURE)
            || property_exists($decoded, self::FIELD_GROUP_MEASURE_EXT)) {
            $v = $decoded->_groupMeasure ?? new \stdClass();
            $v->value = $decoded->groupMeasure ?? null;
            $type->setGroupMeasure(FHIRGroupMeasure::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->definitionReference)) {
            $out->definitionReference = $this->definitionReference;
        }
        if (isset($this->definitionCanonical)) {
            if (null !== ($val = $this->definitionCanonical->getValue())) {
                $out->definitionCanonical = $val;
            }
            if ($this->definitionCanonical->_nonValueFieldDefined()) {
                $ext = $this->definitionCanonical->jsonSerialize();
                unset($ext->value);
                $out->_definitionCanonical = $ext;
            }
        }
        if (isset($this->definitionCodeableConcept)) {
            $out->definitionCodeableConcept = $this->definitionCodeableConcept;
        }
        if (isset($this->definitionExpression)) {
            $out->definitionExpression = $this->definitionExpression;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->device)) {
            $out->device = $this->device;
        }
        if (isset($this->exclude)) {
            if (null !== ($val = $this->exclude->getValue())) {
                $out->exclude = $val;
            }
            if ($this->exclude->_nonValueFieldDefined()) {
                $ext = $this->exclude->jsonSerialize();
                unset($ext->value);
                $out->_exclude = $ext;
            }
        }
        if (isset($this->timeFromStart)) {
            $out->timeFromStart = $this->timeFromStart;
        }
        if (isset($this->groupMeasure)) {
            if (null !== ($val = $this->groupMeasure->getValue())) {
                $out->groupMeasure = $val;
            }
            if ($this->groupMeasure->_nonValueFieldDefined()) {
                $ext = $this->groupMeasure->jsonSerialize();
                unset($ext->value);
                $out->_groupMeasure = $ext;
            }
        }
        return $out;
    }
}