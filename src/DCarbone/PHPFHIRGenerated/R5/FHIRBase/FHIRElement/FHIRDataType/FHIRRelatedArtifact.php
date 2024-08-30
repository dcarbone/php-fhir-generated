<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRChangeTrackingTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRSourceXmlNamespaceTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRValidationAssertionsTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Related artifacts such as additional documentation, justification, or
 * bibliographic references.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRRelatedArtifact
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType
 */
class FHIRRelatedArtifact extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_CLASSIFIER = 'classifier';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_CITATION = 'citation';
    const FIELD_CITATION_EXT = '_citation';
    const FIELD_DOCUMENT = 'document';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESOURCE_REFERENCE = 'resourceReference';
    const FIELD_PUBLICATION_STATUS = 'publicationStatus';
    const FIELD_PUBLICATION_STATUS_EXT = '_publicationStatus';
    const FIELD_PUBLICATION_DATE = 'publicationDate';
    const FIELD_PUBLICATION_DATE_EXT = '_publicationDate';

    /**
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactType
     */
    protected null|FHIRRelatedArtifactType $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $classifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $display = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $citation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    protected null|FHIRAttachment $document = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $resource = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $resourceReference = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The publication status of the artifact being referred to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $publicationStatus = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of publication of the artifact being referred to.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $publicationDate = null;

    /**
     * Validation map for fields in type RelatedArtifact
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRelatedArtifact Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRelatedArtifactType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRRelatedArtifactType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRRelatedArtifactType([FHIRRelatedArtifactType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRRelatedArtifactType($ext));
            } else {
                $this->setType(new FHIRRelatedArtifactType(null));
            }
        }
        if (array_key_exists(self::FIELD_CLASSIFIER, $data)) {
            if (is_array($data[self::FIELD_CLASSIFIER])) {
                foreach($data[self::FIELD_CLASSIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassifier($v);
                    } else {
                        $this->addClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addClassifier($data[self::FIELD_CLASSIFIER]);
            } else {
                $this->addClassifier(new FHIRCodeableConcept($data[self::FIELD_CLASSIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_LABEL, $data) || array_key_exists(self::FIELD_LABEL_EXT, $data)) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            } else {
                $this->setLabel(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DISPLAY, $data) || array_key_exists(self::FIELD_DISPLAY_EXT, $data)) {
            $value = $data[self::FIELD_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT])) ? $data[self::FIELD_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDisplay($value);
                } else if (is_array($value)) {
                    $this->setDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDisplay(new FHIRString($ext));
            } else {
                $this->setDisplay(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CITATION, $data) || array_key_exists(self::FIELD_CITATION_EXT, $data)) {
            $value = $data[self::FIELD_CITATION] ?? null;
            $ext = (isset($data[self::FIELD_CITATION_EXT]) && is_array($data[self::FIELD_CITATION_EXT])) ? $data[self::FIELD_CITATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCitation($value);
                } else if (is_array($value)) {
                    $this->setCitation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCitation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCitation(new FHIRMarkdown($ext));
            } else {
                $this->setCitation(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENT, $data)) {
            if ($data[self::FIELD_DOCUMENT] instanceof FHIRAttachment) {
                $this->setDocument($data[self::FIELD_DOCUMENT]);
            } else {
                $this->setDocument(new FHIRAttachment($data[self::FIELD_DOCUMENT]));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE, $data) || array_key_exists(self::FIELD_RESOURCE_EXT, $data)) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRCanonical($ext));
            } else {
                $this->setResource(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE_REFERENCE, $data)) {
            if ($data[self::FIELD_RESOURCE_REFERENCE] instanceof FHIRReference) {
                $this->setResourceReference($data[self::FIELD_RESOURCE_REFERENCE]);
            } else {
                $this->setResourceReference(new FHIRReference($data[self::FIELD_RESOURCE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_PUBLICATION_STATUS, $data) || array_key_exists(self::FIELD_PUBLICATION_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_PUBLICATION_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_PUBLICATION_STATUS_EXT]) && is_array($data[self::FIELD_PUBLICATION_STATUS_EXT])) ? $data[self::FIELD_PUBLICATION_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setPublicationStatus($value);
                } else if (is_array($value)) {
                    $this->setPublicationStatus(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setPublicationStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublicationStatus(new FHIRCode($ext));
            } else {
                $this->setPublicationStatus(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_PUBLICATION_DATE, $data) || array_key_exists(self::FIELD_PUBLICATION_DATE_EXT, $data)) {
            $value = $data[self::FIELD_PUBLICATION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_PUBLICATION_DATE_EXT]) && is_array($data[self::FIELD_PUBLICATION_DATE_EXT])) ? $data[self::FIELD_PUBLICATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setPublicationDate($value);
                } else if (is_array($value)) {
                    $this->setPublicationDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setPublicationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublicationDate(new FHIRDate($ext));
            } else {
                $this->setPublicationDate(new FHIRDate(null));
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
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactType
     */
    public function getType(): null|FHIRRelatedArtifactType
    {
        return $this->type;
    }

    /**
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRRelatedArtifactType $type
     * @return static
     */
    public function setType(null|FHIRRelatedArtifactType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRRelatedArtifactType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassifier(): null|array
    {
        return $this->classifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classifier
     * @return static
     */
    public function addClassifier(null|FHIRCodeableConcept $classifier = null): self
    {
        if (null === $classifier) {
            $classifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classifier
     * @return static
     */
    public function setClassifier(FHIRCodeableConcept ...$classifier): self
    {
        if ([] !== $this->classifier) {
            $this->_trackValuesRemoved(count($this->classifier));
            $this->classifier = [];
        }
        if ([] === $classifier) {
            return $this;
        }
        foreach($classifier as $v) {
            $this->addClassifier($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $label
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        if (!isset($this->_xmlLocations[self::FIELD_LABEL])) {
            $this->_xmlLocations[self::FIELD_LABEL] = [];
        }
        $this->_xmlLocations[self::FIELD_LABEL][0] = $xmlLocation;
        $this->label = $label;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDisplay(): null|FHIRString
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $display
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDisplay(null|string|FHIRStringPrimitive|FHIRString $display = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $display && !($display instanceof FHIRString)) {
            $display = new FHIRString($display);
        }
        $this->_trackValueSet($this->display, $display);
        if (!isset($this->_xmlLocations[self::FIELD_DISPLAY])) {
            $this->_xmlLocations[self::FIELD_DISPLAY] = [];
        }
        $this->_xmlLocations[self::FIELD_DISPLAY][0] = $xmlLocation;
        $this->display = $display;
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
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getCitation(): null|FHIRMarkdown
    {
        return $this->citation;
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
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $citation
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCitation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $citation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $citation && !($citation instanceof FHIRMarkdown)) {
            $citation = new FHIRMarkdown($citation);
        }
        $this->_trackValueSet($this->citation, $citation);
        if (!isset($this->_xmlLocations[self::FIELD_CITATION])) {
            $this->_xmlLocations[self::FIELD_CITATION] = [];
        }
        $this->_xmlLocations[self::FIELD_CITATION][0] = $xmlLocation;
        $this->citation = $citation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getDocument(): null|FHIRAttachment
    {
        return $this->document;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $document
     * @return static
     */
    public function setDocument(null|FHIRAttachment $document = null): self
    {
        if (null === $document) {
            $document = new FHIRAttachment();
        }
        $this->_trackValueSet($this->document, $document);
        $this->document = $document;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getResource(): null|FHIRCanonical
    {
        return $this->resource;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The related artifact, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $resource
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setResource(null|string|FHIRCanonicalPrimitive|FHIRCanonical $resource = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $resource && !($resource instanceof FHIRCanonical)) {
            $resource = new FHIRCanonical($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        if (!isset($this->_xmlLocations[self::FIELD_RESOURCE])) {
            $this->_xmlLocations[self::FIELD_RESOURCE] = [];
        }
        $this->_xmlLocations[self::FIELD_RESOURCE][0] = $xmlLocation;
        $this->resource = $resource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getResourceReference(): null|FHIRReference
    {
        return $this->resourceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource
     * reference to a canonical resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $resourceReference
     * @return static
     */
    public function setResourceReference(null|FHIRReference $resourceReference = null): self
    {
        if (null === $resourceReference) {
            $resourceReference = new FHIRReference();
        }
        $this->_trackValueSet($this->resourceReference, $resourceReference);
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The publication status of the artifact being referred to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getPublicationStatus(): null|FHIRCode
    {
        return $this->publicationStatus;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The publication status of the artifact being referred to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode $publicationStatus
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPublicationStatus(null|string|FHIRCodePrimitive|FHIRCode $publicationStatus = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $publicationStatus && !($publicationStatus instanceof FHIRCode)) {
            $publicationStatus = new FHIRCode($publicationStatus);
        }
        $this->_trackValueSet($this->publicationStatus, $publicationStatus);
        if (!isset($this->_xmlLocations[self::FIELD_PUBLICATION_STATUS])) {
            $this->_xmlLocations[self::FIELD_PUBLICATION_STATUS] = [];
        }
        $this->_xmlLocations[self::FIELD_PUBLICATION_STATUS][0] = $xmlLocation;
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of publication of the artifact being referred to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getPublicationDate(): null|FHIRDate
    {
        return $this->publicationDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of publication of the artifact being referred to.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $publicationDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPublicationDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $publicationDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $publicationDate && !($publicationDate instanceof FHIRDate)) {
            $publicationDate = new FHIRDate($publicationDate);
        }
        $this->_trackValueSet($this->publicationDate, $publicationDate);
        if (!isset($this->_xmlLocations[self::FIELD_PUBLICATION_DATE])) {
            $this->_xmlLocations[self::FIELD_PUBLICATION_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_PUBLICATION_DATE][0] = $xmlLocation;
        $this->publicationDate = $publicationDate;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCitation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocument())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResourceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublicationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLICATION_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublicationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLICATION_DATE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFIER])) {
            $v = $this->getClassifier();
            foreach($validationRules[self::FIELD_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER])) {
                        $errs[self::FIELD_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY])) {
            $v = $this->getDisplay();
            foreach($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY])) {
                        $errs[self::FIELD_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITATION])) {
            $v = $this->getCitation();
            foreach($validationRules[self::FIELD_CITATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_CITATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITATION])) {
                        $errs[self::FIELD_CITATION] = [];
                    }
                    $errs[self::FIELD_CITATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT])) {
            $v = $this->getDocument();
            foreach($validationRules[self::FIELD_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT])) {
                        $errs[self::FIELD_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_REFERENCE])) {
            $v = $this->getResourceReference();
            foreach($validationRules[self::FIELD_RESOURCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_RESOURCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_REFERENCE])) {
                        $errs[self::FIELD_RESOURCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_STATUS])) {
            $v = $this->getPublicationStatus();
            foreach($validationRules[self::FIELD_PUBLICATION_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_PUBLICATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_STATUS])) {
                        $errs[self::FIELD_PUBLICATION_STATUS] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE])) {
            $v = $this->getPublicationDate();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT, self::FIELD_PUBLICATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE])) {
                        $errs[self::FIELD_PUBLICATION_DATE] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact
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
        } else if (!($type instanceof FHIRRelatedArtifact)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRRelatedArtifactType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLASSIFIER === $childName) {
                $type->addClassifier(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LABEL === $childName) {
                $type->setLabel(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DISPLAY === $childName) {
                $type->setDisplay(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CITATION === $childName) {
                $type->setCitation(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOCUMENT === $childName) {
                $type->setDocument(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->setResource(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESOURCE_REFERENCE === $childName) {
                $type->setResourceReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PUBLICATION_STATUS === $childName) {
                $type->setPublicationStatus(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PUBLICATION_DATE === $childName) {
                $type->setPublicationDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DISPLAY])) {
            $pt = $type->getDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DISPLAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDisplay((string)$attributes[self::FIELD_DISPLAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CITATION])) {
            $pt = $type->getCitation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CITATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCitation((string)$attributes[self::FIELD_CITATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_PUBLICATION_STATUS])) {
            $pt = $type->getPublicationStatus();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLICATION_STATUS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublicationStatus((string)$attributes[self::FIELD_PUBLICATION_STATUS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PUBLICATION_DATE])) {
            $pt = $type->getPublicationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLICATION_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublicationDate((string)$attributes[self::FIELD_PUBLICATION_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'RelatedArtifact', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->writeAttribute(self::FIELD_LABEL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DISPLAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDisplay())) {
            $xw->writeAttribute(self::FIELD_DISPLAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CITATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCitation())) {
            $xw->writeAttribute(self::FIELD_CITATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLICATION_STATUS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPublicationStatus())) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_STATUS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLICATION_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPublicationDate())) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_DATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClassifier() as $v) {
            $xw->startElement(self::FIELD_CLASSIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->startElement(self::FIELD_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DISPLAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDisplay())) {
            $xw->startElement(self::FIELD_DISPLAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CITATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCitation())) {
            $xw->startElement(self::FIELD_CITATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDocument())) {
            $xw->startElement(self::FIELD_DOCUMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResourceReference())) {
            $xw->startElement(self::FIELD_RESOURCE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLICATION_STATUS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPublicationStatus())) {
            $xw->startElement(self::FIELD_PUBLICATION_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLICATION_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPublicationDate())) {
            $xw->startElement(self::FIELD_PUBLICATION_DATE);
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRelatedArtifactType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getClassifier())) {
            $out->{self::FIELD_CLASSIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLASSIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCitation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CITATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CITATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocument())) {
            $out->{self::FIELD_DOCUMENT} = $v;
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResourceReference())) {
            $out->{self::FIELD_RESOURCE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getPublicationStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLICATION_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLICATION_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPublicationDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLICATION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLICATION_DATE_EXT} = $ext;
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