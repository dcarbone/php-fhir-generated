<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRArtifactAssessmentInformationTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This Resource provides one or more comments, classifiers or ratings about a
 * Resource and supports attribution and rights management metadata for the added
 * content.
 */
class FHIRArtifactAssessmentContent extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ARTIFACT_ASSESSMENT_DOT_CONTENT;

    /* class_default.php:47 */
    public const FIELD_INFORMATION_TYPE = 'informationType';
    public const FIELD_INFORMATION_TYPE_EXT = '_informationType';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_SUMMARY_EXT = '_summary';
    public const FIELD_TYPE = 'type';
    public const FIELD_CLASSIFIER = 'classifier';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    public const FIELD_FREE_TO_SHARE = 'freeToShare';
    public const FIELD_FREE_TO_SHARE_EXT = '_freeToShare';
    public const FIELD_COMPONENT = 'component';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_INFORMATION_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUMMARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREE_TO_SHARE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of information this component of the content represents.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType 
     */
    protected FHIRArtifactAssessmentInformationType $informationType;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief summary of the content of this component.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $summary;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $classifier;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A quantitative rating of the artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $author;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] 
     */
    protected array $path;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] 
     */
    protected array $relatedArtifact;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $freeToShare;
    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[] 
     */
    protected array $component;

    /* constructor.php:62 */
    /**
     * FHIRArtifactAssessmentContent Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRArtifactAssessmentInformationTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType $informationType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $summary
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] $path
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] $relatedArtifact
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $freeToShare
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[] $component
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRArtifactAssessmentInformationTypeEnum|FHIRArtifactAssessmentInformationType $informationType = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $summary = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $classifier = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRReference $author = null,
                                null|iterable $path = null,
                                null|iterable $relatedArtifact = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare = null,
                                null|iterable $component = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $informationType) {
            $this->setInformationType($informationType);
        }
        if (null !== $summary) {
            $this->setSummary($summary);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $classifier) {
            $this->setClassifier(...$classifier);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $author) {
            $this->setAuthor($author);
        }
        if (null !== $path) {
            $this->setPath(...$path);
        }
        if (null !== $relatedArtifact) {
            $this->setRelatedArtifact(...$relatedArtifact);
        }
        if (null !== $freeToShare) {
            $this->setFreeToShare($freeToShare);
        }
        if (null !== $component) {
            $this->setComponent(...$component);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of information this component of the content represents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType
     */
    public function getInformationType(): null|FHIRArtifactAssessmentInformationType
    {
        return $this->informationType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of information this component of the content represents.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRArtifactAssessmentInformationTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRArtifactAssessmentInformationType $informationType
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInformationType(null|string|FHIRArtifactAssessmentInformationTypeEnum|FHIRArtifactAssessmentInformationType $informationType,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $informationType) {
            unset($this->informationType);
            return $this;
        }
        if (!($informationType instanceof FHIRArtifactAssessmentInformationType)) {
            $informationType = new FHIRArtifactAssessmentInformationType(value: $informationType);
        }
        $this->informationType = $informationType;
        if ($this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE] !== $valueXMLLocation) {
            $this->_setInformationTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the informationType element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInformationTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE];
    }

    /**
     * Set the location the "value" field of the informationType element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInformationTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE] = $valueXMLLocation;
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
     * A brief summary of the content of this component.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getSummary(): null|FHIRMarkdown
    {
        return $this->summary ?? null;
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
     * A brief summary of the content of this component.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $summary
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSummary(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $summary,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $summary) {
            unset($this->summary);
            return $this;
        }
        if (!($summary instanceof FHIRMarkdown)) {
            $summary = new FHIRMarkdown(value: $summary);
        }
        $this->summary = $summary;
        if ($this->_valueXMLLocations[self::FIELD_SUMMARY] !== $valueXMLLocation) {
            $this->_setSummaryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the summary element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSummaryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SUMMARY];
    }

    /**
     * Set the location the "value" field of the summary element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSummaryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SUMMARY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what type of content this component represents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassifier(): array
    {
        return $this->classifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassifierIterator(): iterable
    {
        if (!isset($this->classifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classifier
     * @return static
     */
    public function addClassifier(FHIRCodeableConcept $classifier): self
    {
        if (!isset($this->classifier)) {
            $this->classifier = [];
        }
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classifier
     * @return static
     */
    public function setClassifier(FHIRCodeableConcept ...$classifier): self
    {
        if ([] === $classifier) {
            unset($this->classifier);
            return $this;
        }
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A quantitative rating of the artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A quantitative rating of the artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what authored the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author): self
    {
        if (null === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getPath(): array
    {
        return $this->path ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri>
     */
    public function getPathIterator(): iterable
    {
        if (!isset($this->path)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->path);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $path
     * @return static
     */
    public function addPath(string|FHIRUriPrimitive|FHIRUri $path): self
    {
        if (!($path instanceof FHIRUri)) {
            $path = new FHIRUri(value: $path);
        }
        if (!isset($this->path)) {
            $this->path = [];
        }
        $this->path[] = $path;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A URI that points to what the comment is about, such as a line of text in the
     * CQL, or a specific element in a resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri ...$path
     * @return static
     */
    public function setPath(string|FHIRUriPrimitive|FHIRUri ...$path): self
    {
        if ([] === $path) {
            unset($this->path);
            return $this;
        }
        $this->path = [];
        foreach($path as $v) {
            if ($v instanceof FHIRUri) {
                $this->path[] = $v;
            } else {
                $this->path[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): array
    {
        return $this->relatedArtifact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
     */
    public function getRelatedArtifactIterator(): iterable
    {
        if (!isset($this->relatedArtifact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedArtifact);
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(FHIRRelatedArtifact $relatedArtifact): self
    {
        if (!isset($this->relatedArtifact)) {
            $this->relatedArtifact = [];
        }
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional related artifacts that provide supporting documentation, additional
     * evidence, or further information related to the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact ...$relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(FHIRRelatedArtifact ...$relatedArtifact): self
    {
        if ([] === $relatedArtifact) {
            unset($this->relatedArtifact);
            return $this;
        }
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getFreeToShare(): null|FHIRBoolean
    {
        return $this->freeToShare ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $freeToShare
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFreeToShare(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $freeToShare) {
            unset($this->freeToShare);
            return $this;
        }
        if (!($freeToShare instanceof FHIRBoolean)) {
            $freeToShare = new FHIRBoolean(value: $freeToShare);
        }
        $this->freeToShare = $freeToShare;
        if ($this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE] !== $valueXMLLocation) {
            $this->_setFreeToShareValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the freeToShare element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFreeToShareValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE];
    }

    /**
     * Set the location the "value" field of the freeToShare element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFreeToShareValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE] = $valueXMLLocation;
        return $this;
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent[]
     */
    public function getComponent(): array
    {
        return $this->component ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent>
     */
    public function getComponentIterator(): iterable
    {
        if (!isset($this->component)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->component);
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent $component
     * @return static
     */
    public function addComponent(FHIRArtifactAssessmentContent $component): self
    {
        if (!isset($this->component)) {
            $this->component = [];
        }
        $this->component[] = $component;
        return $this;
    }

    /**
     * This Resource provides one or more comments, classifiers or ratings about a
     * Resource and supports attribution and rights management metadata for the added
     * content.
     *
     * If the informationType is container, the components of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent ...$component
     * @return static
     */
    public function setComponent(FHIRArtifactAssessmentContent ...$component): self
    {
        if ([] === $component) {
            unset($this->component);
            return $this;
        }
        $this->component = $component;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRArtifactAssessmentContent)) {
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
            } else if (self::FIELD_INFORMATION_TYPE === $cen) {
                $type->setInformationType(FHIRArtifactAssessmentInformationType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUMMARY === $cen) {
                $type->setSummary(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASSIFIER === $cen) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->setAuthor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATH === $cen) {
                $type->addPath(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ARTIFACT === $cen) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREE_TO_SHARE === $cen) {
                $type->setFreeToShare(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPONENT === $cen) {
                $type->addComponent(FHIRArtifactAssessmentContent::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INFORMATION_TYPE])) {
            if (isset($type->informationType)) {
                $type->informationType->setValue((string)$attributes[self::FIELD_INFORMATION_TYPE]);
                $type->_setInformationTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInformationType((string)$attributes[self::FIELD_INFORMATION_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUMMARY])) {
            if (isset($type->summary)) {
                $type->summary->setValue((string)$attributes[self::FIELD_SUMMARY]);
                $type->_setSummaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSummary((string)$attributes[self::FIELD_SUMMARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FREE_TO_SHARE])) {
            if (isset($type->freeToShare)) {
                $type->freeToShare->setValue((string)$attributes[self::FIELD_FREE_TO_SHARE]);
                $type->_setFreeToShareValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFreeToShare((string)$attributes[self::FIELD_FREE_TO_SHARE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->informationType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE]) {
            $xw->writeAttribute(self::FIELD_INFORMATION_TYPE, $this->informationType->_getFormattedValue());
        }
        if (isset($this->summary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUMMARY]) {
            $xw->writeAttribute(self::FIELD_SUMMARY, $this->summary->_getFormattedValue());
        }
        if (isset($this->freeToShare) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]) {
            $xw->writeAttribute(self::FIELD_FREE_TO_SHARE, $this->freeToShare->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->informationType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE]
                || $this->informationType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INFORMATION_TYPE);
            $this->informationType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INFORMATION_TYPE]);
            $xw->endElement();
        }
        if (isset($this->summary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUMMARY]
                || $this->summary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUMMARY);
            $this->summary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUMMARY]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classifier)) {
            foreach ($this->classifier as $v) {
                $xw->startElement(self::FIELD_CLASSIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->author)) {
            $xw->startElement(self::FIELD_AUTHOR);
            $this->author->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->path) && [] !== $this->path) {
            foreach($this->path as $v) {
                $xw->startElement(self::FIELD_PATH);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedArtifact)) {
            foreach ($this->relatedArtifact as $v) {
                $xw->startElement(self::FIELD_RELATED_ARTIFACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->freeToShare)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]
                || $this->freeToShare->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FREE_TO_SHARE);
            $this->freeToShare->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]);
            $xw->endElement();
        }
        if (isset($this->component)) {
            foreach ($this->component as $v) {
                $xw->startElement(self::FIELD_COMPONENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRArtifactAssessment\FHIRArtifactAssessmentContent
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRArtifactAssessmentContent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_INFORMATION_TYPE])
            || isset($json[self::FIELD_INFORMATION_TYPE_EXT])
            || array_key_exists(self::FIELD_INFORMATION_TYPE, $json)
            || array_key_exists(self::FIELD_INFORMATION_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_INFORMATION_TYPE] ?? null;
            $type->setInformationType(FHIRArtifactAssessmentInformationType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRArtifactAssessmentInformationType::FIELD_VALUE => $value]) + ($json[self::FIELD_INFORMATION_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUMMARY])
            || isset($json[self::FIELD_SUMMARY_EXT])
            || array_key_exists(self::FIELD_SUMMARY, $json)
            || array_key_exists(self::FIELD_SUMMARY_EXT, $json)) {
            $value = $json[self::FIELD_SUMMARY] ?? null;
            $type->setSummary(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_SUMMARY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_CLASSIFIER]) || array_key_exists(self::FIELD_CLASSIFIER, $json)) {
            $vs = $json[self::FIELD_CLASSIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addClassifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_QUANTITY]) || array_key_exists(self::FIELD_QUANTITY, $json)) {
            $type->setQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_AUTHOR]) || array_key_exists(self::FIELD_AUTHOR, $json)) {
            $type->setAuthor(FHIRReference::jsonUnserialize($json[self::FIELD_AUTHOR], $config));
        }
        if (isset($json[self::FIELD_PATH])
            || isset($json[self::FIELD_PATH_EXT])
            || array_key_exists(self::FIELD_PATH, $json)
            || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = (array)($json[self::FIELD_PATH] ?? []);
            $ext = (array)($json[self::FIELD_PATH_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addPath(FHIRUri::jsonUnserialize(
                    [FHIRUri::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_RELATED_ARTIFACT, $json)) {
            $vs = $json[self::FIELD_RELATED_ARTIFACT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_FREE_TO_SHARE])
            || isset($json[self::FIELD_FREE_TO_SHARE_EXT])
            || array_key_exists(self::FIELD_FREE_TO_SHARE, $json)
            || array_key_exists(self::FIELD_FREE_TO_SHARE_EXT, $json)) {
            $value = $json[self::FIELD_FREE_TO_SHARE] ?? null;
            $type->setFreeToShare(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_FREE_TO_SHARE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMPONENT]) || array_key_exists(self::FIELD_COMPONENT, $json)) {
            $vs = $json[self::FIELD_COMPONENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addComponent(FHIRArtifactAssessmentContent::jsonUnserialize($v, $config));
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
        if (isset($this->informationType)) {
            if (null !== ($val = $this->informationType->getValue())) {
                $out->informationType = $val;
            }
            if ($this->informationType->_nonValueFieldDefined()) {
                $ext = $this->informationType->jsonSerialize();
                unset($ext->value);
                $out->_informationType = $ext;
            }
        }
        if (isset($this->summary)) {
            if (null !== ($val = $this->summary->getValue())) {
                $out->summary = $val;
            }
            if ($this->summary->_nonValueFieldDefined()) {
                $ext = $this->summary->jsonSerialize();
                unset($ext->value);
                $out->_summary = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->classifier) && [] !== $this->classifier) {
            $out->classifier = $this->classifier;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->author)) {
            $out->author = $this->author;
        }
        if (isset($this->path) && [] !== $this->path) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->path as $v) {
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
                $out->path = $vals;
            }
            if ($hasExts) {
                $out->_path = $exts;
            }
        }
        if (isset($this->relatedArtifact) && [] !== $this->relatedArtifact) {
            $out->relatedArtifact = $this->relatedArtifact;
        }
        if (isset($this->freeToShare)) {
            if (null !== ($val = $this->freeToShare->getValue())) {
                $out->freeToShare = $val;
            }
            if ($this->freeToShare->_nonValueFieldDefined()) {
                $ext = $this->freeToShare->jsonSerialize();
                unset($ext->value);
                $out->_freeToShare = $ext;
            }
        }
        if (isset($this->component) && [] !== $this->component) {
            $out->component = $this->component;
        }
        return $out;
    }
}