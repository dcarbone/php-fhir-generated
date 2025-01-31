<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRInteractionTriggerEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 */
class FHIRSubscriptionTopicResourceTrigger extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER;

    /* class_default.php:47 */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_EXT = '_resource';
    public const FIELD_SUPPORTED_INTERACTION = 'supportedInteraction';
    public const FIELD_SUPPORTED_INTERACTION_EXT = '_supportedInteraction';
    public const FIELD_QUERY_CRITERIA = 'queryCriteria';
    public const FIELD_FHIR_PATH_CRITERIA = 'fhirPathCriteria';
    public const FIELD_FHIR_PATH_CRITERIA_EXT = '_fhirPathCriteria';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_RESOURCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RESOURCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FHIR_PATH_CRITERIA => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $resource;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger[] 
     */
    protected array $supportedInteraction;
    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria 
     */
    protected FHIRSubscriptionTopicQueryCriteria $queryCriteria;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $fhirPathCriteria;

    /* constructor.php:63 */
    /**
     * FHIRSubscriptionTopicResourceTrigger Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRInteractionTriggerEnum[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger[] $supportedInteraction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $queryCriteria
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $fhirPathCriteria
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|string|FHIRUriPrimitive|FHIRUri $resource = null,
                                null|iterable $supportedInteraction = null,
                                null|FHIRSubscriptionTopicQueryCriteria $queryCriteria = null,
                                null|string|FHIRStringPrimitive|FHIRString $fhirPathCriteria = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $resource) {
            $this->setResource($resource);
        }
        if (null !== $supportedInteraction) {
            $this->setSupportedInteraction(...$supportedInteraction);
        }
        if (null !== $queryCriteria) {
            $this->setQueryCriteria($queryCriteria);
        }
        if (null !== $fhirPathCriteria) {
            $this->setFhirPathCriteria($fhirPathCriteria);
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
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
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        if (!($resource instanceof FHIRUri)) {
            $resource = new FHIRUri(value: $resource);
        }
        $this->resource = $resource;
        if ($this->_valueXMLLocations[self::FIELD_RESOURCE] !== $valueXMLLocation) {
            $this->_setResourceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the resource element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getResourceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RESOURCE];
    }

    /**
     * Set the location the "value" field of the resource element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setResourceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RESOURCE] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger[]
     */
    public function getSupportedInteraction(): array
    {
        return $this->supportedInteraction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger>
     */
    public function getSupportedInteractionIterator(): iterable
    {
        if (!isset($this->supportedInteraction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportedInteraction);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRInteractionTriggerEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger $supportedInteraction
     * @return static
     */
    public function addSupportedInteraction(string|FHIRInteractionTriggerEnum|FHIRInteractionTrigger $supportedInteraction): self
    {
        if (!($supportedInteraction instanceof FHIRInteractionTrigger)) {
            $supportedInteraction = new FHIRInteractionTrigger(value: $supportedInteraction);
        }
        if (!isset($this->supportedInteraction)) {
            $this->supportedInteraction = [];
        }
        $this->supportedInteraction[] = $supportedInteraction;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRInteractionTriggerEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteractionTrigger ...$supportedInteraction
     * @return static
     */
    public function setSupportedInteraction(string|FHIRInteractionTriggerEnum|FHIRInteractionTrigger ...$supportedInteraction): self
    {
        if ([] === $supportedInteraction) {
            unset($this->supportedInteraction);
            return $this;
        }
        $this->supportedInteraction = [];
        foreach($supportedInteraction as $v) {
            if ($v instanceof FHIRInteractionTrigger) {
                $this->supportedInteraction[] = $v;
            } else {
                $this->supportedInteraction[] = new FHIRInteractionTrigger(value: $v);
            }
        }
        return $this;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     */
    public function getQueryCriteria(): null|FHIRSubscriptionTopicQueryCriteria
    {
        return $this->queryCriteria ?? null;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $queryCriteria
     * @return static
     */
    public function setQueryCriteria(null|FHIRSubscriptionTopicQueryCriteria $queryCriteria): self
    {
        if (null === $queryCriteria) {
            unset($this->queryCriteria);
            return $this;
        }
        $this->queryCriteria = $queryCriteria;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getFhirPathCriteria(): null|FHIRString
    {
        return $this->fhirPathCriteria ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $fhirPathCriteria
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFhirPathCriteria(null|string|FHIRStringPrimitive|FHIRString $fhirPathCriteria,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $fhirPathCriteria) {
            unset($this->fhirPathCriteria);
            return $this;
        }
        if (!($fhirPathCriteria instanceof FHIRString)) {
            $fhirPathCriteria = new FHIRString(value: $fhirPathCriteria);
        }
        $this->fhirPathCriteria = $fhirPathCriteria;
        if ($this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA] !== $valueXMLLocation) {
            $this->_setFhirPathCriteriaValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the fhirPathCriteria element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFhirPathCriteriaValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA];
    }

    /**
     * Set the location the "value" field of the fhirPathCriteria element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFhirPathCriteriaValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA] = $valueXMLLocation;
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
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTED_INTERACTION])) {
            $v = $this->getSupportedInteraction();
            foreach($validationRules[self::FIELD_SUPPORTED_INTERACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTED_INTERACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTED_INTERACTION])) {
                        $errs[self::FIELD_SUPPORTED_INTERACTION] = [];
                    }
                    $errs[self::FIELD_SUPPORTED_INTERACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY_CRITERIA])) {
            $v = $this->getQueryCriteria();
            foreach($validationRules[self::FIELD_QUERY_CRITERIA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUERY_CRITERIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY_CRITERIA])) {
                        $errs[self::FIELD_QUERY_CRITERIA] = [];
                    }
                    $errs[self::FIELD_QUERY_CRITERIA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_PATH_CRITERIA])) {
            $v = $this->getFhirPathCriteria();
            foreach($validationRules[self::FIELD_FHIR_PATH_CRITERIA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FHIR_PATH_CRITERIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_PATH_CRITERIA])) {
                        $errs[self::FIELD_FHIR_PATH_CRITERIA] = [];
                    }
                    $errs[self::FIELD_FHIR_PATH_CRITERIA][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicResourceTrigger)) {
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
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESOURCE === $cen) {
                $type->setResource(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTED_INTERACTION === $cen) {
                $type->addSupportedInteraction(FHIRInteractionTrigger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUERY_CRITERIA === $cen) {
                $type->setQueryCriteria(FHIRSubscriptionTopicQueryCriteria::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FHIR_PATH_CRITERIA === $cen) {
                $type->setFhirPathCriteria(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            if (isset($type->resource)) {
                $type->resource->setValue((string)$attributes[self::FIELD_RESOURCE]);
                $type->_setResourceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setResource((string)$attributes[self::FIELD_RESOURCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FHIR_PATH_CRITERIA])) {
            if (isset($type->fhirPathCriteria)) {
                $type->fhirPathCriteria->setValue((string)$attributes[self::FIELD_FHIR_PATH_CRITERIA]);
                $type->_setFhirPathCriteriaValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFhirPathCriteria((string)$attributes[self::FIELD_FHIR_PATH_CRITERIA], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->resource) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESOURCE]) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $this->resource->_getFormattedValue());
        }
        if (isset($this->fhirPathCriteria) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA]) {
            $xw->writeAttribute(self::FIELD_FHIR_PATH_CRITERIA, $this->fhirPathCriteria->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->resource)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESOURCE]
                || $this->resource->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $this->resource->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESOURCE]);
            $xw->endElement();
        }
        if (isset($this->supportedInteraction) && [] !== $this->supportedInteraction) {
            foreach($this->supportedInteraction as $v) {
                $xw->startElement(self::FIELD_SUPPORTED_INTERACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->queryCriteria)) {
            $xw->startElement(self::FIELD_QUERY_CRITERIA);
            $this->queryCriteria->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fhirPathCriteria)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA]
                || $this->fhirPathCriteria->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FHIR_PATH_CRITERIA);
            $this->fhirPathCriteria->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FHIR_PATH_CRITERIA]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicResourceTrigger)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RESOURCE])
            || isset($json[self::FIELD_RESOURCE_EXT])
            || array_key_exists(self::FIELD_RESOURCE, $json)
            || array_key_exists(self::FIELD_RESOURCE_EXT, $json)) {
            $value = $json[self::FIELD_RESOURCE] ?? null;
            $type->setResource(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_RESOURCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUPPORTED_INTERACTION])
            || isset($json[self::FIELD_SUPPORTED_INTERACTION_EXT])
            || array_key_exists(self::FIELD_SUPPORTED_INTERACTION, $json)
            || array_key_exists(self::FIELD_SUPPORTED_INTERACTION_EXT, $json)) {
            $value = (array)($json[self::FIELD_SUPPORTED_INTERACTION] ?? []);
            $ext = (array)($json[self::FIELD_SUPPORTED_INTERACTION_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSupportedInteraction(FHIRInteractionTrigger::jsonUnserialize(
                    [FHIRInteractionTrigger::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_QUERY_CRITERIA]) || array_key_exists(self::FIELD_QUERY_CRITERIA, $json)) {
            $type->setQueryCriteria(FHIRSubscriptionTopicQueryCriteria::jsonUnserialize($json[self::FIELD_QUERY_CRITERIA], $config));
        }
        if (isset($json[self::FIELD_FHIR_PATH_CRITERIA])
            || isset($json[self::FIELD_FHIR_PATH_CRITERIA_EXT])
            || array_key_exists(self::FIELD_FHIR_PATH_CRITERIA, $json)
            || array_key_exists(self::FIELD_FHIR_PATH_CRITERIA_EXT, $json)) {
            $value = $json[self::FIELD_FHIR_PATH_CRITERIA] ?? null;
            $type->setFhirPathCriteria(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_FHIR_PATH_CRITERIA_EXT] ?? []),
                $config,
            ));
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
        if (isset($this->resource)) {
            if (null !== ($val = $this->resource->getValue())) {
                $out->resource = $val;
            }
            if ($this->resource->_nonValueFieldDefined()) {
                $ext = $this->resource->jsonSerialize();
                unset($ext->value);
                $out->_resource = $ext;
            }
        }
        if (isset($this->supportedInteraction) && [] !== $this->supportedInteraction) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->supportedInteraction as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->supportedInteraction = $vals;
            }
            if ($hasExts) {
                $out->_supportedInteraction = $exts;
            }
        }
        if (isset($this->queryCriteria)) {
            $out->queryCriteria = $this->queryCriteria;
        }
        if (isset($this->fhirPathCriteria)) {
            if (null !== ($val = $this->fhirPathCriteria->getValue())) {
                $out->fhirPathCriteria = $val;
            }
            if ($this->fhirPathCriteria->_nonValueFieldDefined()) {
                $ext = $this->fhirPathCriteria->jsonSerialize();
                unset($ext->value);
                $out->_fhirPathCriteria = $ext;
            }
        }
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}