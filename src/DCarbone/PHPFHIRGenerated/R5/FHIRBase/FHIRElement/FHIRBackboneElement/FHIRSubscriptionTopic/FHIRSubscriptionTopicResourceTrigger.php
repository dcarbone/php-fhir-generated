<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteractionTrigger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 *
 * Class FHIRSubscriptionTopicResourceTrigger
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic
 */
class FHIRSubscriptionTopicResourceTrigger extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_SUPPORTED_INTERACTION = 'supportedInteraction';
    const FIELD_SUPPORTED_INTERACTION_EXT = '_supportedInteraction';
    const FIELD_QUERY_CRITERIA = 'queryCriteria';
    const FIELD_FHIR_PATH_CRITERIA = 'fhirPathCriteria';
    const FIELD_FHIR_PATH_CRITERIA_EXT = '_fhirPathCriteria';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $resource = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteractionTrigger[]
     */
    protected null|array $supportedInteraction = [];
    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     */
    protected null|FHIRSubscriptionTopicQueryCriteria $queryCriteria = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $fhirPathCriteria = null;

    /**
     * Validation map for fields in type SubscriptionTopic.ResourceTrigger
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSubscriptionTopicResourceTrigger Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
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
        if (array_key_exists(self::FIELD_RESOURCE, $data) || array_key_exists(self::FIELD_RESOURCE_EXT, $data)) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRUri($ext));
            } else {
                $this->setResource(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTED_INTERACTION, $data) || array_key_exists(self::FIELD_SUPPORTED_INTERACTION_EXT, $data)) {
            $value = $data[self::FIELD_SUPPORTED_INTERACTION] ?? null;
            $ext = (isset($data[self::FIELD_SUPPORTED_INTERACTION_EXT]) && is_array($data[self::FIELD_SUPPORTED_INTERACTION_EXT])) ? $data[self::FIELD_SUPPORTED_INTERACTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteractionTrigger) {
                    $this->addSupportedInteraction($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteractionTrigger) {
                            $this->addSupportedInteraction($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSupportedInteraction(new FHIRInteractionTrigger(array_merge($v, $iext)));
                            } else {
                                $this->addSupportedInteraction(new FHIRInteractionTrigger([FHIRInteractionTrigger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger(array_merge($ext, $value)));
                } else {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger([FHIRInteractionTrigger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger($iext));
                }
            } else {
                $this->addSupportedInteraction(new FHIRInteractionTrigger(null));
            }
        }
        if (array_key_exists(self::FIELD_QUERY_CRITERIA, $data)) {
            if ($data[self::FIELD_QUERY_CRITERIA] instanceof FHIRSubscriptionTopicQueryCriteria) {
                $this->setQueryCriteria($data[self::FIELD_QUERY_CRITERIA]);
            } else {
                $this->setQueryCriteria(new FHIRSubscriptionTopicQueryCriteria($data[self::FIELD_QUERY_CRITERIA]));
            }
        }
        if (array_key_exists(self::FIELD_FHIR_PATH_CRITERIA, $data) || array_key_exists(self::FIELD_FHIR_PATH_CRITERIA_EXT, $data)) {
            $value = $data[self::FIELD_FHIR_PATH_CRITERIA] ?? null;
            $ext = (isset($data[self::FIELD_FHIR_PATH_CRITERIA_EXT]) && is_array($data[self::FIELD_FHIR_PATH_CRITERIA_EXT])) ? $data[self::FIELD_FHIR_PATH_CRITERIA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFhirPathCriteria($value);
                } else if (is_array($value)) {
                    $this->setFhirPathCriteria(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFhirPathCriteria(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFhirPathCriteria(new FHIRString($ext));
            } else {
                $this->setFhirPathCriteria(new FHIRString(null));
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
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri $resource
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $resource && !($resource instanceof FHIRUri)) {
            $resource = new FHIRUri($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_RESOURCE])) {
            $this->_primitiveXmlLocations[self::FIELD_RESOURCE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_RESOURCE][0] = $xmlLocation;
        $this->resource = $resource;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteractionTrigger[]
     */
    public function getSupportedInteraction(): null|array
    {
        return $this->supportedInteraction;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE). If not present, all supported interactions are assumed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteractionTrigger $supportedInteraction
     * @return static
     */
    public function addSupportedInteraction(null|FHIRInteractionTrigger $supportedInteraction = null): self
    {
        if (null === $supportedInteraction) {
            $supportedInteraction = new FHIRInteractionTrigger();
        }
        $this->_trackValueAdded();
        $this->supportedInteraction[] = $supportedInteraction;
        return $this;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     */
    public function getQueryCriteria(): null|FHIRSubscriptionTopicQueryCriteria
    {
        return $this->queryCriteria;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $queryCriteria
     * @return static
     */
    public function setQueryCriteria(null|FHIRSubscriptionTopicQueryCriteria $queryCriteria = null): self
    {
        if (null === $queryCriteria) {
            $queryCriteria = new FHIRSubscriptionTopicQueryCriteria();
        }
        $this->_trackValueSet($this->queryCriteria, $queryCriteria);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getFhirPathCriteria(): null|FHIRString
    {
        return $this->fhirPathCriteria;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $fhirPathCriteria
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFhirPathCriteria(null|string|FHIRStringPrimitive|FHIRString $fhirPathCriteria = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fhirPathCriteria && !($fhirPathCriteria instanceof FHIRString)) {
            $fhirPathCriteria = new FHIRString($fhirPathCriteria);
        }
        $this->_trackValueSet($this->fhirPathCriteria, $fhirPathCriteria);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FHIR_PATH_CRITERIA])) {
            $this->_primitiveXmlLocations[self::FIELD_FHIR_PATH_CRITERIA] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FHIR_PATH_CRITERIA][0] = $xmlLocation;
        $this->fhirPathCriteria = $fhirPathCriteria;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportedInteraction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTED_INTERACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUERY_CRITERIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFhirPathCriteria())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FHIR_PATH_CRITERIA] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_RESOURCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_SUPPORTED_INTERACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_QUERY_CRITERIA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_FHIR_PATH_CRITERIA, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger
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
        } else if (!($type instanceof FHIRSubscriptionTopicResourceTrigger)) {
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
            if (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->setResource(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUPPORTED_INTERACTION === $childName) {
                $type->addSupportedInteraction(FHIRInteractionTrigger::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUERY_CRITERIA === $childName) {
                $type->setQueryCriteria(FHIRSubscriptionTopicQueryCriteria::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FHIR_PATH_CRITERIA === $childName) {
                $type->setFhirPathCriteria(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setResource((string)$attributes[self::FIELD_RESOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FHIR_PATH_CRITERIA])) {
            $pt = $type->getFhirPathCriteria();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FHIR_PATH_CRITERIA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFhirPathCriteria((string)$attributes[self::FIELD_FHIR_PATH_CRITERIA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubscriptionTopicResourceTrigger', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FHIR_PATH_CRITERIA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFhirPathCriteria())) {
            $xw->writeAttribute(self::FIELD_FHIR_PATH_CRITERIA, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportedInteraction() as $v) {
            $xw->startElement(self::FIELD_SUPPORTED_INTERACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            $xw->startElement(self::FIELD_QUERY_CRITERIA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FHIR_PATH_CRITERIA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFhirPathCriteria())) {
            $xw->startElement(self::FIELD_FHIR_PATH_CRITERIA);
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
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportedInteraction())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteractionTrigger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SUPPORTED_INTERACTION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUPPORTED_INTERACTION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            $out->{self::FIELD_QUERY_CRITERIA} = $v;
        }
        if (null !== ($v = $this->getFhirPathCriteria())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FHIR_PATH_CRITERIA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FHIR_PATH_CRITERIA_EXT} = $ext;
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