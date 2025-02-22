<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2025 18:56+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationRelatesTo extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_RELATES_TO;

    /* class_default.php:56 */
    public const FIELD_RELATIONSHIP_TYPE = 'relationshipType';
    public const FIELD_TARGET_CLASSIFIER = 'targetClassifier';
    public const FIELD_TARGET_URI = 'targetUri';
    public const FIELD_TARGET_URI_EXT = '_targetUri';
    public const FIELD_TARGET_IDENTIFIER = 'targetIdentifier';
    public const FIELD_TARGET_REFERENCE = 'targetReference';
    public const FIELD_TARGET_ATTACHMENT = 'targetAttachment';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_RELATIONSHIP_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TARGET_URI => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TARGET_IDENTIFIER => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TARGET_REFERENCE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TARGET_ATTACHMENT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TARGET_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationshipType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $targetClassifier;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $targetUri;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $targetIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $targetReference;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $targetAttachment;

    /* constructor.php:61 */
    /**
     * FHIRCitationRelatesTo Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationshipType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $targetClassifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $targetUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $targetIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $targetReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment $targetAttachment
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $relationshipType = null,
                                null|iterable $targetClassifier = null,
                                null|string|FHIRUriPrimitive|FHIRUri $targetUri = null,
                                null|FHIRIdentifier $targetIdentifier = null,
                                null|FHIRReference $targetReference = null,
                                null|FHIRAttachment $targetAttachment = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $relationshipType) {
            $this->setRelationshipType($relationshipType);
        }
        if (null !== $targetClassifier) {
            $this->setTargetClassifier(...$targetClassifier);
        }
        if (null !== $targetUri) {
            $this->setTargetUri($targetUri);
        }
        if (null !== $targetIdentifier) {
            $this->setTargetIdentifier($targetIdentifier);
        }
        if (null !== $targetReference) {
            $this->setTargetReference($targetReference);
        }
        if (null !== $targetAttachment) {
            $this->setTargetAttachment($targetAttachment);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationshipType(): null|FHIRCodeableConcept
    {
        return $this->relationshipType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationshipType
     * @return static
     */
    public function setRelationshipType(null|FHIRCodeableConcept $relationshipType): self
    {
        if (null === $relationshipType) {
            unset($this->relationshipType);
            return $this;
        }
        $this->relationshipType = $relationshipType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetClassifier(): array
    {
        return $this->targetClassifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTargetClassifierIterator(): iterable
    {
        if (!isset($this->targetClassifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetClassifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $targetClassifier
     * @return static
     */
    public function addTargetClassifier(FHIRCodeableConcept $targetClassifier): self
    {
        if (!isset($this->targetClassifier)) {
            $this->targetClassifier = [];
        }
        $this->targetClassifier[] = $targetClassifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$targetClassifier
     * @return static
     */
    public function setTargetClassifier(FHIRCodeableConcept ...$targetClassifier): self
    {
        if ([] === $targetClassifier) {
            unset($this->targetClassifier);
            return $this;
        }
        $this->targetClassifier = $targetClassifier;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getTargetUri(): null|FHIRUri
    {
        return $this->targetUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $targetUri
     * @return static
     */
    public function setTargetUri(null|string|FHIRUriPrimitive|FHIRUri $targetUri): self
    {
        if (null === $targetUri) {
            unset($this->targetUri);
            return $this;
        }
        if (!($targetUri instanceof FHIRUri)) {
            $targetUri = new FHIRUri(value: $targetUri);
        }
        $this->targetUri = $targetUri;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier(): null|FHIRIdentifier
    {
        return $this->targetIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $targetIdentifier
     * @return static
     */
    public function setTargetIdentifier(null|FHIRIdentifier $targetIdentifier): self
    {
        if (null === $targetIdentifier) {
            unset($this->targetIdentifier);
            return $this;
        }
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getTargetReference(): null|FHIRReference
    {
        return $this->targetReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $targetReference
     * @return static
     */
    public function setTargetReference(null|FHIRReference $targetReference): self
    {
        if (null === $targetReference) {
            unset($this->targetReference);
            return $this;
        }
        $this->targetReference = $targetReference;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment
     */
    public function getTargetAttachment(): null|FHIRAttachment
    {
        return $this->targetAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment $targetAttachment
     * @return static
     */
    public function setTargetAttachment(null|FHIRAttachment $targetAttachment): self
    {
        if (null === $targetAttachment) {
            unset($this->targetAttachment);
            return $this;
        }
        $this->targetAttachment = $targetAttachment;
        return $this;
    }

    /* class_default.php:200 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationRelatesTo)) {
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
            } else if (self::FIELD_RELATIONSHIP_TYPE === $cen) {
                $type->setRelationshipType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_CLASSIFIER === $cen) {
                $type->addTargetClassifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_URI === $cen) {
                $type->setTargetUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_IDENTIFIER === $cen) {
                $type->setTargetIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_REFERENCE === $cen) {
                $type->setTargetReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_ATTACHMENT === $cen) {
                $type->setTargetAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TARGET_URI])) {
            if (isset($type->targetUri)) {
                $type->targetUri->setValue((string)$attributes[self::FIELD_TARGET_URI]);
            } else {
                $type->setTargetUri((string)$attributes[self::FIELD_TARGET_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TARGET_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->targetUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TARGET_URI]) {
            $xw->writeAttribute(self::FIELD_TARGET_URI, $this->targetUri->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->relationshipType)) {
            $xw->startElement(self::FIELD_RELATIONSHIP_TYPE);
            $this->relationshipType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetClassifier)) {
            foreach ($this->targetClassifier as $v) {
                $xw->startElement(self::FIELD_TARGET_CLASSIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->targetUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TARGET_URI]
                || $this->targetUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TARGET_URI);
            $this->targetUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TARGET_URI]);
            $xw->endElement();
        }
        if (isset($this->targetIdentifier)) {
            $xw->startElement(self::FIELD_TARGET_IDENTIFIER);
            $this->targetIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetReference)) {
            $xw->startElement(self::FIELD_TARGET_REFERENCE);
            $this->targetReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetAttachment)) {
            $xw->startElement(self::FIELD_TARGET_ATTACHMENT);
            $this->targetAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationRelatesTo)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->relationshipType) || property_exists($json, self::FIELD_RELATIONSHIP_TYPE)) {
            if (is_array($json->relationshipType)) {
                $type->setRelationshipType(FHIRCodeableConcept::jsonUnserialize(reset($json->relationshipType), $config));
            } else {
                $type->setRelationshipType(FHIRCodeableConcept::jsonUnserialize($json->relationshipType, $config));
            }
        }
        if (isset($json->targetClassifier) || property_exists($json, self::FIELD_TARGET_CLASSIFIER)) {
            if (is_object($json->targetClassifier)) {
                $vals = [$json->targetClassifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TARGET_CLASSIFIER, true);
            } else {
                $vals = $json->targetClassifier;
            }
            foreach($vals as $v) {
                $type->addTargetClassifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->targetUri)
            || isset($json->_targetUri)
            || property_exists($json, self::FIELD_TARGET_URI)
            || property_exists($json, self::FIELD_TARGET_URI_EXT)) {
            $v = $json->_targetUri ?? new \stdClass();
            $v->value = $json->targetUri ?? null;
            $type->setTargetUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->targetIdentifier) || property_exists($json, self::FIELD_TARGET_IDENTIFIER)) {
            if (is_array($json->targetIdentifier)) {
                $type->setTargetIdentifier(FHIRIdentifier::jsonUnserialize(reset($json->targetIdentifier), $config));
            } else {
                $type->setTargetIdentifier(FHIRIdentifier::jsonUnserialize($json->targetIdentifier, $config));
            }
        }
        if (isset($json->targetReference) || property_exists($json, self::FIELD_TARGET_REFERENCE)) {
            if (is_array($json->targetReference)) {
                $type->setTargetReference(FHIRReference::jsonUnserialize(reset($json->targetReference), $config));
            } else {
                $type->setTargetReference(FHIRReference::jsonUnserialize($json->targetReference, $config));
            }
        }
        if (isset($json->targetAttachment) || property_exists($json, self::FIELD_TARGET_ATTACHMENT)) {
            if (is_array($json->targetAttachment)) {
                $type->setTargetAttachment(FHIRAttachment::jsonUnserialize(reset($json->targetAttachment), $config));
            } else {
                $type->setTargetAttachment(FHIRAttachment::jsonUnserialize($json->targetAttachment, $config));
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
        if (isset($this->relationshipType)) {
            $out->relationshipType = $this->relationshipType;
        }
        if (isset($this->targetClassifier) && [] !== $this->targetClassifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TARGET_CLASSIFIER) && 1 === count($this->targetClassifier)) {
                $out->targetClassifier = $this->targetClassifier[0];
            } else {
                $out->targetClassifier = $this->targetClassifier;
            }
        }
        if (isset($this->targetUri)) {
            if (null !== ($val = $this->targetUri->getValue())) {
                $out->targetUri = $val;
            }
            if ($this->targetUri->_nonValueFieldDefined()) {
                $ext = $this->targetUri->jsonSerialize();
                unset($ext->value);
                $out->_targetUri = $ext;
            }
        }
        if (isset($this->targetIdentifier)) {
            $out->targetIdentifier = $this->targetIdentifier;
        }
        if (isset($this->targetReference)) {
            $out->targetReference = $this->targetReference;
        }
        if (isset($this->targetAttachment)) {
            $out->targetAttachment = $this->targetAttachment;
        }
        return $out;
    }
}