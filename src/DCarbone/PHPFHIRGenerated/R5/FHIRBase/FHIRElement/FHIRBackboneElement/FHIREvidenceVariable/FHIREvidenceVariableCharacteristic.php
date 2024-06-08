<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is
 * about.
 *
 * Class FHIREvidenceVariableCharacteristic
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;

    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_NOTE = 'note';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_DEFINITION_ID = 'definitionId';
    const FIELD_DEFINITION_ID_EXT = '_definitionId';
    const FIELD_DEFINITION_BY_TYPE_AND_VALUE = 'definitionByTypeAndValue';
    const FIELD_DEFINITION_BY_COMBINATION = 'definitionByCombination';
    const FIELD_INSTANCES_QUANTITY = 'instancesQuantity';
    const FIELD_INSTANCES_RANGE = 'instancesRange';
    const FIELD_DURATION_QUANTITY = 'durationQuantity';
    const FIELD_DURATION_RANGE = 'durationRange';
    const FIELD_TIME_FROM_EVENT = 'timeFromEvent';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $linkId = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exclude = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $definitionReference = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $definitionCanonical = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $definitionCodeableConcept = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $definitionExpression = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $definitionId = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue
     */
    protected null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination
     */
    protected null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $instancesQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $instancesRange = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $durationQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $durationRange = null;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[]
     */
    protected null|array $timeFromEvent = [];

    /**
     * Validation map for fields in type EvidenceVariable.Characteristic
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LINK_ID, $data) || array_key_exists(self::FIELD_LINK_ID_EXT, $data)) {
            $value = $data[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $data[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLinkId(new FHIRId($ext));
            } else {
                $this->setLinkId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_EXCLUDE, $data) || array_key_exists(self::FIELD_EXCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_EXCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) ? $data[self::FIELD_EXCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExclude($value);
                } else if (is_array($value)) {
                    $this->setExclude(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExclude(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExclude(new FHIRBoolean($ext));
            } else {
                $this->setExclude(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_REFERENCE, $data)) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_CANONICAL, $data) || array_key_exists(self::FIELD_DEFINITION_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT])) ? $data[self::FIELD_DEFINITION_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setDefinitionCanonical($value);
                } else if (is_array($value)) {
                    $this->setDefinitionCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionCanonical(new FHIRCanonical($ext));
            } else {
                $this->setDefinitionCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefinitionCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_EXPRESSION, $data)) {
            if ($data[self::FIELD_DEFINITION_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefinitionExpression($data[self::FIELD_DEFINITION_EXPRESSION]);
            } else {
                $this->setDefinitionExpression(new FHIRExpression($data[self::FIELD_DEFINITION_EXPRESSION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_ID, $data) || array_key_exists(self::FIELD_DEFINITION_ID_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION_ID] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_ID_EXT]) && is_array($data[self::FIELD_DEFINITION_ID_EXT])) ? $data[self::FIELD_DEFINITION_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDefinitionId($value);
                } else if (is_array($value)) {
                    $this->setDefinitionId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionId(new FHIRId($ext));
            } else {
                $this->setDefinitionId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_BY_TYPE_AND_VALUE, $data)) {
            if ($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] instanceof FHIREvidenceVariableDefinitionByTypeAndValue) {
                $this->setDefinitionByTypeAndValue($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE]);
            } else {
                $this->setDefinitionByTypeAndValue(new FHIREvidenceVariableDefinitionByTypeAndValue($data[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_BY_COMBINATION, $data)) {
            if ($data[self::FIELD_DEFINITION_BY_COMBINATION] instanceof FHIREvidenceVariableDefinitionByCombination) {
                $this->setDefinitionByCombination($data[self::FIELD_DEFINITION_BY_COMBINATION]);
            } else {
                $this->setDefinitionByCombination(new FHIREvidenceVariableDefinitionByCombination($data[self::FIELD_DEFINITION_BY_COMBINATION]));
            }
        }
        if (array_key_exists(self::FIELD_INSTANCES_QUANTITY, $data)) {
            if ($data[self::FIELD_INSTANCES_QUANTITY] instanceof FHIRQuantity) {
                $this->setInstancesQuantity($data[self::FIELD_INSTANCES_QUANTITY]);
            } else {
                $this->setInstancesQuantity(new FHIRQuantity($data[self::FIELD_INSTANCES_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_INSTANCES_RANGE, $data)) {
            if ($data[self::FIELD_INSTANCES_RANGE] instanceof FHIRRange) {
                $this->setInstancesRange($data[self::FIELD_INSTANCES_RANGE]);
            } else {
                $this->setInstancesRange(new FHIRRange($data[self::FIELD_INSTANCES_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DURATION_QUANTITY, $data)) {
            if ($data[self::FIELD_DURATION_QUANTITY] instanceof FHIRQuantity) {
                $this->setDurationQuantity($data[self::FIELD_DURATION_QUANTITY]);
            } else {
                $this->setDurationQuantity(new FHIRQuantity($data[self::FIELD_DURATION_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_DURATION_RANGE, $data)) {
            if ($data[self::FIELD_DURATION_RANGE] instanceof FHIRRange) {
                $this->setDurationRange($data[self::FIELD_DURATION_RANGE]);
            } else {
                $this->setDurationRange(new FHIRRange($data[self::FIELD_DURATION_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_TIME_FROM_EVENT, $data)) {
            if (is_array($data[self::FIELD_TIME_FROM_EVENT])) {
                foreach($data[self::FIELD_TIME_FROM_EVENT] as $v) {
                    if ($v instanceof FHIREvidenceVariableTimeFromEvent) {
                        $this->addTimeFromEvent($v);
                    } else {
                        $this->addTimeFromEvent(new FHIREvidenceVariableTimeFromEvent($v));
                    }
                }
            } elseif ($data[self::FIELD_TIME_FROM_EVENT] instanceof FHIREvidenceVariableTimeFromEvent) {
                $this->addTimeFromEvent($data[self::FIELD_TIME_FROM_EVENT]);
            } else {
                $this->addTimeFromEvent(new FHIREvidenceVariableTimeFromEvent($data[self::FIELD_TIME_FROM_EVENT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getLinkId(): null|FHIRId
    {
        return $this->linkId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId $linkId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLinkId(null|string|FHIRIdPrimitive|FHIRId $linkId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $linkId && !($linkId instanceof FHIRId)) {
            $linkId = new FHIRId($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LINK_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_LINK_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LINK_ID][0] = $xmlLocation;
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $exclude
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $exclude && !($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean($exclude);
        }
        $this->_trackValueSet($this->exclude, $exclude);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXCLUDE])) {
            $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXCLUDE][0] = $xmlLocation;
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getDefinitionReference(): null|FHIRReference
    {
        return $this->definitionReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(null|FHIRReference $definitionReference = null): self
    {
        if (null === $definitionReference) {
            $definitionReference = new FHIRReference();
        }
        $this->_trackValueSet($this->definitionReference, $definitionReference);
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $definitionCanonical && !($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical($definitionCanonical);
        }
        $this->_trackValueSet($this->definitionCanonical, $definitionCanonical);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL][0] = $xmlLocation;
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
     */
    public function setDefinitionCodeableConcept(null|FHIRCodeableConcept $definitionCodeableConcept = null): self
    {
        if (null === $definitionCodeableConcept) {
            $definitionCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->definitionCodeableConcept, $definitionCodeableConcept);
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
     * Defines the characteristic using Expression.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getDefinitionExpression(): null|FHIRExpression
    {
        return $this->definitionExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(null|FHIRExpression $definitionExpression = null): self
    {
        if (null === $definitionExpression) {
            $definitionExpression = new FHIRExpression();
        }
        $this->_trackValueSet($this->definitionExpression, $definitionExpression);
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getDefinitionId(): null|FHIRId
    {
        return $this->definitionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId $definitionId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinitionId(null|string|FHIRIdPrimitive|FHIRId $definitionId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $definitionId && !($definitionId instanceof FHIRId)) {
            $definitionId = new FHIRId($definitionId);
        }
        $this->_trackValueSet($this->definitionId, $definitionId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFINITION_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFINITION_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFINITION_ID][0] = $xmlLocation;
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue
     */
    public function getDefinitionByTypeAndValue(): null|FHIREvidenceVariableDefinitionByTypeAndValue
    {
        return $this->definitionByTypeAndValue;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue
     * @return static
     */
    public function setDefinitionByTypeAndValue(null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue = null): self
    {
        if (null === $definitionByTypeAndValue) {
            $definitionByTypeAndValue = new FHIREvidenceVariableDefinitionByTypeAndValue();
        }
        $this->_trackValueSet($this->definitionByTypeAndValue, $definitionByTypeAndValue);
        $this->definitionByTypeAndValue = $definitionByTypeAndValue;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination
     */
    public function getDefinitionByCombination(): null|FHIREvidenceVariableDefinitionByCombination
    {
        return $this->definitionByCombination;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination $definitionByCombination
     * @return static
     */
    public function setDefinitionByCombination(null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination = null): self
    {
        if (null === $definitionByCombination) {
            $definitionByCombination = new FHIREvidenceVariableDefinitionByCombination();
        }
        $this->_trackValueSet($this->definitionByCombination, $definitionByCombination);
        $this->definitionByCombination = $definitionByCombination;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getInstancesQuantity(): null|FHIRQuantity
    {
        return $this->instancesQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $instancesQuantity
     * @return static
     */
    public function setInstancesQuantity(null|FHIRQuantity $instancesQuantity = null): self
    {
        if (null === $instancesQuantity) {
            $instancesQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->instancesQuantity, $instancesQuantity);
        $this->instancesQuantity = $instancesQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getInstancesRange(): null|FHIRRange
    {
        return $this->instancesRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $instancesRange
     * @return static
     */
    public function setInstancesRange(null|FHIRRange $instancesRange = null): self
    {
        if (null === $instancesRange) {
            $instancesRange = new FHIRRange();
        }
        $this->_trackValueSet($this->instancesRange, $instancesRange);
        $this->instancesRange = $instancesRange;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDurationQuantity(): null|FHIRQuantity
    {
        return $this->durationQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $durationQuantity
     * @return static
     */
    public function setDurationQuantity(null|FHIRQuantity $durationQuantity = null): self
    {
        if (null === $durationQuantity) {
            $durationQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->durationQuantity, $durationQuantity);
        $this->durationQuantity = $durationQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDurationRange(): null|FHIRRange
    {
        return $this->durationRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(null|FHIRRange $durationRange = null): self
    {
        if (null === $durationRange) {
            $durationRange = new FHIRRange();
        }
        $this->_trackValueSet($this->durationRange, $durationRange);
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[]
     */
    public function getTimeFromEvent(): null|array
    {
        return $this->timeFromEvent;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent $timeFromEvent
     * @return static
     */
    public function addTimeFromEvent(null|FHIREvidenceVariableTimeFromEvent $timeFromEvent = null): self
    {
        if (null === $timeFromEvent) {
            $timeFromEvent = new FHIREvidenceVariableTimeFromEvent();
        }
        $this->_trackValueAdded();
        $this->timeFromEvent[] = $timeFromEvent;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_BY_COMBINATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCES_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstancesRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCES_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_RANGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTimeFromEvent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TIME_FROM_EVENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_REFERENCE])) {
            $v = $this->getDefinitionReference();
            foreach($validationRules[self::FIELD_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_REFERENCE])) {
                        $errs[self::FIELD_DEFINITION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CANONICAL])) {
            $v = $this->getDefinitionCanonical();
            foreach($validationRules[self::FIELD_DEFINITION_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CANONICAL])) {
                        $errs[self::FIELD_DEFINITION_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            $v = $this->getDefinitionCodeableConcept();
            foreach($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_EXPRESSION])) {
            $v = $this->getDefinitionExpression();
            foreach($validationRules[self::FIELD_DEFINITION_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_EXPRESSION])) {
                        $errs[self::FIELD_DEFINITION_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_ID])) {
            $v = $this->getDefinitionId();
            foreach($validationRules[self::FIELD_DEFINITION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_ID])) {
                        $errs[self::FIELD_DEFINITION_ID] = [];
                    }
                    $errs[self::FIELD_DEFINITION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE])) {
            $v = $this->getDefinitionByTypeAndValue();
            foreach($validationRules[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_BY_TYPE_AND_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE])) {
                        $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_BY_COMBINATION])) {
            $v = $this->getDefinitionByCombination();
            foreach($validationRules[self::FIELD_DEFINITION_BY_COMBINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_BY_COMBINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_BY_COMBINATION])) {
                        $errs[self::FIELD_DEFINITION_BY_COMBINATION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_BY_COMBINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCES_QUANTITY])) {
            $v = $this->getInstancesQuantity();
            foreach($validationRules[self::FIELD_INSTANCES_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_INSTANCES_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCES_QUANTITY])) {
                        $errs[self::FIELD_INSTANCES_QUANTITY] = [];
                    }
                    $errs[self::FIELD_INSTANCES_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCES_RANGE])) {
            $v = $this->getInstancesRange();
            foreach($validationRules[self::FIELD_INSTANCES_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_INSTANCES_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCES_RANGE])) {
                        $errs[self::FIELD_INSTANCES_RANGE] = [];
                    }
                    $errs[self::FIELD_INSTANCES_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_QUANTITY])) {
            $v = $this->getDurationQuantity();
            foreach($validationRules[self::FIELD_DURATION_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DURATION_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_QUANTITY])) {
                        $errs[self::FIELD_DURATION_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DURATION_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_RANGE])) {
            $v = $this->getDurationRange();
            foreach($validationRules[self::FIELD_DURATION_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_RANGE])) {
                        $errs[self::FIELD_DURATION_RANGE] = [];
                    }
                    $errs[self::FIELD_DURATION_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_FROM_EVENT])) {
            $v = $this->getTimeFromEvent();
            foreach($validationRules[self::FIELD_TIME_FROM_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_TIME_FROM_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME_FROM_EVENT])) {
                        $errs[self::FIELD_TIME_FROM_EVENT] = [];
                    }
                    $errs[self::FIELD_TIME_FROM_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_LINK_ID === $childName) {
                $type->setLinkId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXCLUDE === $childName) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_REFERENCE === $childName) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_CANONICAL === $childName) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $childName) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_EXPRESSION === $childName) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_ID === $childName) {
                $type->setDefinitionId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_BY_TYPE_AND_VALUE === $childName) {
                $type->setDefinitionByTypeAndValue(FHIREvidenceVariableDefinitionByTypeAndValue::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_BY_COMBINATION === $childName) {
                $type->setDefinitionByCombination(FHIREvidenceVariableDefinitionByCombination::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INSTANCES_QUANTITY === $childName) {
                $type->setInstancesQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INSTANCES_RANGE === $childName) {
                $type->setInstancesRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DURATION_QUANTITY === $childName) {
                $type->setDurationQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DURATION_RANGE === $childName) {
                $type->setDurationRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIME_FROM_EVENT === $childName) {
                $type->addTimeFromEvent(FHIREvidenceVariableTimeFromEvent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LINK_ID])) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            $pt = $type->getExclude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExclude((string)$attributes[self::FIELD_EXCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionCanonical((string)$attributes[self::FIELD_DEFINITION_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_ID])) {
            $pt = $type->getDefinitionId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionId((string)$attributes[self::FIELD_DEFINITION_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'EvidenceVariableCharacteristic', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinitionId())) {
            $xw->writeAttribute(self::FIELD_DEFINITION_ID, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $xw->startElement(self::FIELD_DEFINITION_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinitionId())) {
            $xw->startElement(self::FIELD_DEFINITION_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            $xw->startElement(self::FIELD_DEFINITION_BY_TYPE_AND_VALUE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            $xw->startElement(self::FIELD_DEFINITION_BY_COMBINATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            $xw->startElement(self::FIELD_INSTANCES_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getInstancesRange())) {
            $xw->startElement(self::FIELD_INSTANCES_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            $xw->startElement(self::FIELD_DURATION_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDurationRange())) {
            $xw->startElement(self::FIELD_DURATION_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTimeFromEvent() as $v) {
            $xw->startElement(self::FIELD_TIME_FROM_EVENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LINK_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXCLUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $out->{self::FIELD_DEFINITION_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $out->{self::FIELD_DEFINITION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $out->{self::FIELD_DEFINITION_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getDefinitionId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionByTypeAndValue())) {
            $out->{self::FIELD_DEFINITION_BY_TYPE_AND_VALUE} = $v;
        }
        if (null !== ($v = $this->getDefinitionByCombination())) {
            $out->{self::FIELD_DEFINITION_BY_COMBINATION} = $v;
        }
        if (null !== ($v = $this->getInstancesQuantity())) {
            $out->{self::FIELD_INSTANCES_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getInstancesRange())) {
            $out->{self::FIELD_INSTANCES_RANGE} = $v;
        }
        if (null !== ($v = $this->getDurationQuantity())) {
            $out->{self::FIELD_DURATION_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDurationRange())) {
            $out->{self::FIELD_DURATION_RANGE} = $v;
        }
        if ([] !== ($vs = $this->getTimeFromEvent())) {
            $out->{self::FIELD_TIME_FROM_EVENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TIME_FROM_EVENT}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}