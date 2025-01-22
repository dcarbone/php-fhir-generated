<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is
 * about.
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;


    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_NOTE = 'note';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_EXCLUDE_EXT = '_exclude';
    public const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    public const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    public const FIELD_DEFINITION_ID = 'definitionId';
    public const FIELD_DEFINITION_ID_EXT = '_definitionId';
    public const FIELD_DEFINITION_BY_TYPE_AND_VALUE = 'definitionByTypeAndValue';
    public const FIELD_DEFINITION_BY_COMBINATION = 'definitionByCombination';
    public const FIELD_INSTANCES_QUANTITY = 'instancesQuantity';
    public const FIELD_INSTANCES_RANGE = 'instancesRange';
    public const FIELD_DURATION_QUANTITY = 'durationQuantity';
    public const FIELD_DURATION_RANGE = 'durationRange';
    public const FIELD_TIME_FROM_EVENT = 'timeFromEvent';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $linkId;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exclude;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using a Reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $definitionReference;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using Canonical.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $definitionCanonical;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $definitionCodeableConcept;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Defines the characteristic using Expression.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression 
     */
    protected FHIRExpression $definitionExpression;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $definitionId;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue 
     */
    protected FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination 
     */
    protected FHIREvidenceVariableDefinitionByCombination $definitionByCombination;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $instancesQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $instancesRange;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $durationQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $durationRange;
    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[] 
     */
    protected array $timeFromEvent;

    /** Default validation map for fields in type EvidenceVariable.Characteristic */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $linkId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $exclude
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $definitionReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $definitionCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $definitionExpression
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $definitionId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination $definitionByCombination
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $instancesQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $instancesRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $durationQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $durationRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[] $timeFromEvent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $linkId = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $note = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null,
                                null|FHIRReference $definitionReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|FHIRCodeableConcept $definitionCodeableConcept = null,
                                null|FHIRExpression $definitionExpression = null,
                                null|string|FHIRIdPrimitive|FHIRId $definitionId = null,
                                null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue = null,
                                null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination = null,
                                null|FHIRQuantity $instancesQuantity = null,
                                null|FHIRRange $instancesRange = null,
                                null|FHIRQuantity $durationQuantity = null,
                                null|FHIRRange $durationRange = null,
                                null|iterable $timeFromEvent = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $linkId) {
            $this->setLinkId($linkId);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $exclude) {
            $this->setExclude($exclude);
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
        if (null !== $definitionId) {
            $this->setDefinitionId($definitionId);
        }
        if (null !== $definitionByTypeAndValue) {
            $this->setDefinitionByTypeAndValue($definitionByTypeAndValue);
        }
        if (null !== $definitionByCombination) {
            $this->setDefinitionByCombination($definitionByCombination);
        }
        if (null !== $instancesQuantity) {
            $this->setInstancesQuantity($instancesQuantity);
        }
        if (null !== $instancesRange) {
            $this->setInstancesRange($instancesRange);
        }
        if (null !== $durationQuantity) {
            $this->setDurationQuantity($durationQuantity);
        }
        if (null !== $durationRange) {
            $this->setDurationRange($durationRange);
        }
        if (null !== $timeFromEvent) {
            $this->setTimeFromEvent(...$timeFromEvent);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getLinkId(): null|FHIRId
    {
        return $this->linkId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $linkId
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLinkId(null|string|FHIRIdPrimitive|FHIRId $linkId,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $linkId) {
            unset($this->linkId);
            return $this;
        }
        if (!($linkId instanceof FHIRId)) {
            $linkId = new FHIRId(value: $linkId);
        }
        if (null !== $valueXMLLocation) {
            $linkId->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $linkId->_getValueXMLLocation()) {
            $linkId->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
        if (!isset($this->note) || [] === $this->note) {
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
     * A human-readable string to clarify or explain concepts about the characteristic.
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
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, this characteristic is an exclusion criterion. In other words, not
     * matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $exclude
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exclude) {
            unset($this->exclude);
            return $this;
        }
        if (!($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean(value: $exclude);
        }
        if (null !== $valueXMLLocation) {
            $exclude->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exclude->_getValueXMLLocation()) {
            $exclude->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * Defines the characteristic using a Reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $definitionReference
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
     * Defines the characteristic using Canonical.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
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
     * Defines the characteristic using Canonical.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $definitionCanonical) {
            unset($this->definitionCanonical);
            return $this;
        }
        if (!($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical(value: $definitionCanonical);
        }
        if (null !== $valueXMLLocation) {
            $definitionCanonical->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $definitionCanonical->_getValueXMLLocation()) {
            $definitionCanonical->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * Defines the characteristic using CodeableConcept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Defines the characteristic using CodeableConcept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $definitionCodeableConcept
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
     * Defines the characteristic using Expression.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
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
     * Defines the characteristic using Expression.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $definitionExpression
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the characteristic using id.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getDefinitionId(): null|FHIRId
    {
        return $this->definitionId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $definitionId
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinitionId(null|string|FHIRIdPrimitive|FHIRId $definitionId,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $definitionId) {
            unset($this->definitionId);
            return $this;
        }
        if (!($definitionId instanceof FHIRId)) {
            $definitionId = new FHIRId(value: $definitionId);
        }
        if (null !== $valueXMLLocation) {
            $definitionId->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $definitionId->_getValueXMLLocation()) {
            $definitionId->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue
     */
    public function getDefinitionByTypeAndValue(): null|FHIREvidenceVariableDefinitionByTypeAndValue
    {
        return $this->definitionByTypeAndValue ?? null;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue
     * @return static
     */
    public function setDefinitionByTypeAndValue(null|FHIREvidenceVariableDefinitionByTypeAndValue $definitionByTypeAndValue): self
    {
        if (null === $definitionByTypeAndValue) {
            unset($this->definitionByTypeAndValue);
            return $this;
        }
        $this->definitionByTypeAndValue = $definitionByTypeAndValue;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination
     */
    public function getDefinitionByCombination(): null|FHIREvidenceVariableDefinitionByCombination
    {
        return $this->definitionByCombination ?? null;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableDefinitionByCombination $definitionByCombination
     * @return static
     */
    public function setDefinitionByCombination(null|FHIREvidenceVariableDefinitionByCombination $definitionByCombination): self
    {
        if (null === $definitionByCombination) {
            unset($this->definitionByCombination);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getInstancesQuantity(): null|FHIRQuantity
    {
        return $this->instancesQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $instancesQuantity
     * @return static
     */
    public function setInstancesQuantity(null|FHIRQuantity $instancesQuantity): self
    {
        if (null === $instancesQuantity) {
            unset($this->instancesQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getInstancesRange(): null|FHIRRange
    {
        return $this->instancesRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Number of occurrences meeting the characteristic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $instancesRange
     * @return static
     */
    public function setInstancesRange(null|FHIRRange $instancesRange): self
    {
        if (null === $instancesRange) {
            unset($this->instancesRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDurationQuantity(): null|FHIRQuantity
    {
        return $this->durationQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $durationQuantity
     * @return static
     */
    public function setDurationQuantity(null|FHIRQuantity $durationQuantity): self
    {
        if (null === $durationQuantity) {
            unset($this->durationQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDurationRange(): null|FHIRRange
    {
        return $this->durationRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Length of time in which the characteristic is met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(null|FHIRRange $durationRange): self
    {
        if (null === $durationRange) {
            unset($this->durationRange);
            return $this;
        }
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent[]
     */
    public function getTimeFromEvent(): array
    {
        return $this->timeFromEvent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent>
     */
    public function getTimeFromEventIterator(): iterable
    {
        if (!isset($this->timeFromEvent) || [] === $this->timeFromEvent) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->timeFromEvent);
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent $timeFromEvent
     * @return static
     */
    public function addTimeFromEvent(FHIREvidenceVariableTimeFromEvent $timeFromEvent): self
    {
        if (!isset($this->timeFromEvent)) {
            $this->timeFromEvent = [];
        }
        $this->timeFromEvent[] = $timeFromEvent;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes an element that knowledge (Evidence) is
     * about.
     *
     * Timing in which the characteristic is determined.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromEvent ...$timeFromEvent
     * @return static
     */
    public function setTimeFromEvent(FHIREvidenceVariableTimeFromEvent ...$timeFromEvent): self
    {
        $this->timeFromEvent = $timeFromEvent;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_BY_TYPE_AND_VALUE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_BY_COMBINATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANCES_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANCES_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIME_FROM_EVENT, $rule, $constraint, $v);
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LINK_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLinkId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDE === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExclude(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_EXPRESSION === $childName) {
                $v = new FHIRExpression();
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDefinitionId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_BY_TYPE_AND_VALUE === $childName) {
                $v = new FHIREvidenceVariableDefinitionByTypeAndValue();
                $type->setDefinitionByTypeAndValue(FHIREvidenceVariableDefinitionByTypeAndValue::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION_BY_COMBINATION === $childName) {
                $v = new FHIREvidenceVariableDefinitionByCombination();
                $type->setDefinitionByCombination(FHIREvidenceVariableDefinitionByCombination::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSTANCES_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setInstancesQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSTANCES_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setInstancesRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setDurationQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDurationRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIME_FROM_EVENT === $childName) {
                $v = new FHIREvidenceVariableTimeFromEvent();
                $type->addTimeFromEvent(FHIREvidenceVariableTimeFromEvent::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LINK_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLinkId(new FHIRId(
                    value: (string)$attributes[self::FIELD_LINK_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            $pt = $type->getExclude();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXCLUDE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExclude(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXCLUDE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_DEFINITION_CANONICAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION_ID])) {
            $pt = $type->getDefinitionId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEFINITION_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionId(new FHIRId(
                    value: (string)$attributes[self::FIELD_DEFINITION_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('EvidenceVariableCharacteristic', $this->_getSourceXMLNS());
        }
        if (isset($this->linkId) && $this->linkId->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $this->linkId->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->exclude) && $this->exclude->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $this->exclude->getValue()?->_getFormattedValue());
        }
        if (isset($this->definitionCanonical) && $this->definitionCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->getValue()?->_getFormattedValue());
        }
        if (isset($this->definitionId) && $this->definitionId->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION_ID, $this->definitionId->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->linkId) && $this->linkId->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LINK_ID);
            $this->linkId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exclude) && $this->exclude->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $this->exclude->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionReference)) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $this->definitionReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical) && $this->definitionCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config);
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
        if (isset($this->definitionId) && $this->definitionId->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION_ID);
            $this->definitionId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionByTypeAndValue)) {
            $xw->startElement(self::FIELD_DEFINITION_BY_TYPE_AND_VALUE);
            $this->definitionByTypeAndValue->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionByCombination)) {
            $xw->startElement(self::FIELD_DEFINITION_BY_COMBINATION);
            $this->definitionByCombination->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->instancesQuantity)) {
            $xw->startElement(self::FIELD_INSTANCES_QUANTITY);
            $this->instancesQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->instancesRange)) {
            $xw->startElement(self::FIELD_INSTANCES_RANGE);
            $this->instancesRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationQuantity)) {
            $xw->startElement(self::FIELD_DURATION_QUANTITY);
            $this->durationQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationRange)) {
            $xw->startElement(self::FIELD_DURATION_RANGE);
            $this->durationRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timeFromEvent)) {
            foreach ($this->timeFromEvent as $v) {
                $xw->startElement(self::FIELD_TIME_FROM_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_LINK_ID]) || isset($json[self::FIELD_LINK_ID_EXT]) || array_key_exists(self::FIELD_LINK_ID, $json) || array_key_exists(self::FIELD_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_LINK_ID] ?? null;
            $ext = (array)($json[self::FIELD_LINK_ID_EXT] ?? []);
            $type->setLinkId(FHIRId::jsonUnserialize(
                json: [FHIRId::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (array)($json[self::FIELD_DESCRIPTION_EXT] ?? []);
            $type->setDescription(FHIRMarkdown::jsonUnserialize(
                json: [FHIRMarkdown::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE]) || isset($json[self::FIELD_EXCLUDE_EXT]) || array_key_exists(self::FIELD_EXCLUDE, $json) || array_key_exists(self::FIELD_EXCLUDE_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE] ?? null;
            $ext = (array)($json[self::FIELD_EXCLUDE_EXT] ?? []);
            $type->setExclude(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_REFERENCE]) || array_key_exists(self::FIELD_DEFINITION_REFERENCE, $json)) {
            $type->setDefinitionReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_REFERENCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_CANONICAL]) || isset($json[self::FIELD_DEFINITION_CANONICAL_EXT]) || array_key_exists(self::FIELD_DEFINITION_CANONICAL, $json) || array_key_exists(self::FIELD_DEFINITION_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (array)($json[self::FIELD_DEFINITION_CANONICAL_EXT] ?? []);
            $type->setDefinitionCanonical(FHIRCanonical::jsonUnserialize(
                json: [FHIRCanonical::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $json)) {
            $type->setDefinitionCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_EXPRESSION]) || array_key_exists(self::FIELD_DEFINITION_EXPRESSION, $json)) {
            $type->setDefinitionExpression(FHIRExpression::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_EXPRESSION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_ID]) || isset($json[self::FIELD_DEFINITION_ID_EXT]) || array_key_exists(self::FIELD_DEFINITION_ID, $json) || array_key_exists(self::FIELD_DEFINITION_ID_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION_ID] ?? null;
            $ext = (array)($json[self::FIELD_DEFINITION_ID_EXT] ?? []);
            $type->setDefinitionId(FHIRId::jsonUnserialize(
                json: [FHIRId::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE]) || array_key_exists(self::FIELD_DEFINITION_BY_TYPE_AND_VALUE, $json)) {
            $type->setDefinitionByTypeAndValue(FHIREvidenceVariableDefinitionByTypeAndValue::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_BY_TYPE_AND_VALUE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_BY_COMBINATION]) || array_key_exists(self::FIELD_DEFINITION_BY_COMBINATION, $json)) {
            $type->setDefinitionByCombination(FHIREvidenceVariableDefinitionByCombination::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_BY_COMBINATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_INSTANCES_QUANTITY]) || array_key_exists(self::FIELD_INSTANCES_QUANTITY, $json)) {
            $type->setInstancesQuantity(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_INSTANCES_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_INSTANCES_RANGE]) || array_key_exists(self::FIELD_INSTANCES_RANGE, $json)) {
            $type->setInstancesRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_INSTANCES_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_QUANTITY]) || array_key_exists(self::FIELD_DURATION_QUANTITY, $json)) {
            $type->setDurationQuantity(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_DURATION_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_RANGE]) || array_key_exists(self::FIELD_DURATION_RANGE, $json)) {
            $type->setDurationRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_DURATION_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TIME_FROM_EVENT]) || array_key_exists(self::FIELD_TIME_FROM_EVENT, $json)) {
            $vs = $json[self::FIELD_TIME_FROM_EVENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTimeFromEvent(FHIREvidenceVariableTimeFromEvent::jsonUnserialize(
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
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->exclude)) {
            if (null !== ($val = $this->exclude->getValue())) {
                $out->exclude = $val;
            }
            $ext = $this->exclude->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exclude = $ext;
            }
        }
        if (isset($this->definitionReference)) {
            $out->definitionReference = $this->definitionReference;
        }
        if (isset($this->definitionCanonical)) {
            if (null !== ($val = $this->definitionCanonical->getValue())) {
                $out->definitionCanonical = $val;
            }
            $ext = $this->definitionCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definitionCanonical = $ext;
            }
        }
        if (isset($this->definitionCodeableConcept)) {
            $out->definitionCodeableConcept = $this->definitionCodeableConcept;
        }
        if (isset($this->definitionExpression)) {
            $out->definitionExpression = $this->definitionExpression;
        }
        if (isset($this->definitionId)) {
            if (null !== ($val = $this->definitionId->getValue())) {
                $out->definitionId = $val;
            }
            $ext = $this->definitionId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definitionId = $ext;
            }
        }
        if (isset($this->definitionByTypeAndValue)) {
            $out->definitionByTypeAndValue = $this->definitionByTypeAndValue;
        }
        if (isset($this->definitionByCombination)) {
            $out->definitionByCombination = $this->definitionByCombination;
        }
        if (isset($this->instancesQuantity)) {
            $out->instancesQuantity = $this->instancesQuantity;
        }
        if (isset($this->instancesRange)) {
            $out->instancesRange = $this->instancesRange;
        }
        if (isset($this->durationQuantity)) {
            $out->durationQuantity = $this->durationQuantity;
        }
        if (isset($this->durationRange)) {
            $out->durationRange = $this->durationRange;
        }
        if (isset($this->timeFromEvent) && [] !== $this->timeFromEvent) {
            $out->timeFromEvent = $this->timeFromEvent;
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