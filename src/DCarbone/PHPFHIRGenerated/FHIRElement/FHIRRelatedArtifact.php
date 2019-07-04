<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Related artifacts such as additional documentation, justification, or
 * bibliographic references.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRRelatedArtifact
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
 */
class FHIRRelatedArtifact extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT;

    const FIELD_CITATION = 'citation';
    const FIELD_CITATION_EXT = '_citation';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_DOCUMENT = 'document';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $citation = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $display = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $document = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $label = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The related resource, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $resource = null;

    /**
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType
     */
    private $type = null;

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A url for the artifact that can be followed to access the actual content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    private $url = null;

    /**
     * FHIRRelatedArtifact Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CITATION])) {
            $ext = (isset($data[self::FIELD_CITATION_EXT]) && is_array($data[self::FIELD_CITATION_EXT]))
                ? $data[self::FIELD_CITATION_EXT]
                : null;
            if ($data[self::FIELD_CITATION] instanceof FHIRMarkdown) {
                $this->setCitation($data[self::FIELD_CITATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_CITATION])) {
                $this->setCitation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_CITATION]] + $ext));
            } else {
                $this->setCitation(new FHIRMarkdown($data[self::FIELD_CITATION]));
            }
        }
        if (isset($data[self::FIELD_DISPLAY])) {
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT]))
                ? $data[self::FIELD_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_DISPLAY] instanceof FHIRString) {
                $this->setDisplay($data[self::FIELD_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISPLAY])) {
                $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPLAY]] + $ext));
            } else {
                $this->setDisplay(new FHIRString($data[self::FIELD_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT])) {
            if ($data[self::FIELD_DOCUMENT] instanceof FHIRAttachment) {
                $this->setDocument($data[self::FIELD_DOCUMENT]);
            } else {
                $this->setDocument(new FHIRAttachment($data[self::FIELD_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_LABEL])) {
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT]))
                ? $data[self::FIELD_LABEL_EXT]
                : null;
            if ($data[self::FIELD_LABEL] instanceof FHIRString) {
                $this->setLabel($data[self::FIELD_LABEL]);
            } elseif ($ext && is_scalar($data[self::FIELD_LABEL])) {
                $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LABEL]] + $ext));
            } else {
                $this->setLabel(new FHIRString($data[self::FIELD_LABEL]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT]))
                ? $data[self::FIELD_RESOURCE_EXT]
                : null;
            if ($data[self::FIELD_RESOURCE] instanceof FHIRCanonical) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESOURCE])) {
                $this->setResource(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_RESOURCE]] + $ext));
            } else {
                $this->setResource(new FHIRCanonical($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRRelatedArtifactType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRRelatedArtifactType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUrl) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUrl($data[self::FIELD_URL]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted
     * according to an accepted citation format.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $citation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setCitation($citation = null)
    {
        if (null === $citation) {
            $this->citation = null;
            return $this;
        }
        if ($citation instanceof FHIRMarkdown) {
            $this->citation = $citation;
            return $this;
        }
        $this->citation = new FHIRMarkdown($citation);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief description of the document or knowledge resource being referenced,
     * suitable for display to a consumer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setDisplay($display = null)
    {
        if (null === $display) {
            $this->display = null;
            return $this;
        }
        if ($display instanceof FHIRString) {
            $this->display = $display;
            return $this;
        }
        $this->display = new FHIRString($display);
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document being referenced, represented as an attachment. This is exclusive
     * with the resource element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment $document
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setDocument(FHIRAttachment $document = null)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short label that can be used to reference the citation from elsewhere in the
     * containing artifact, such as a footnote index.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setLabel($label = null)
    {
        if (null === $label) {
            $this->label = null;
            return $this;
        }
        if ($label instanceof FHIRString) {
            $this->label = $label;
            return $this;
        }
        $this->label = new FHIRString($label);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The related resource, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The related resource, such as a library, value set, profile, or other knowledge
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $resource
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setResource($resource = null)
    {
        if (null === $resource) {
            $this->resource = null;
            return $this;
        }
        if ($resource instanceof FHIRCanonical) {
            $this->resource = $resource;
            return $this;
        }
        $this->resource = new FHIRCanonical($resource);
        return $this;
    }

    /**
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of relationship to the related artifact.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of relationship to the related artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setType(FHIRRelatedArtifactType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A url for the artifact that can be followed to access the actual content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A url for the artifact that can be followed to access the actual content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUrl) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUrl($url);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRRelatedArtifact::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRelatedArtifact::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize(\$sxe, new FHIRRelatedArtifact);
        } elseif (!is_object($type) || !($type instanceof FHIRRelatedArtifact)) {
            throw new \RuntimeException(sprintf(
                'FHIRRelatedArtifact::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->citation)) {
            $type->setCitation((string)$attributes->citation);
        }
        if (isset($children->citation)) {
            $type->setCitation(FHIRMarkdown::xmlUnserialize($children->citation));
        }
        if (isset($attributes->display)) {
            $type->setDisplay((string)$attributes->display);
        }
        if (isset($children->display)) {
            $type->setDisplay(FHIRString::xmlUnserialize($children->display));
        }
        if (isset($children->document)) {
            $type->setDocument(FHIRAttachment::xmlUnserialize($children->document));
        }
        if (isset($attributes->label)) {
            $type->setLabel((string)$attributes->label);
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($attributes->resource)) {
            $type->setResource((string)$attributes->resource);
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRCanonical::xmlUnserialize($children->resource));
        }
        if (isset($children->type)) {
            $type->setType(FHIRRelatedArtifactType::xmlUnserialize($children->type));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUrl::xmlUnserialize($children->url));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<RelatedArtifact xmlns="http://hl7.org/fhir"></RelatedArtifact>');
        }
        if (null !== ($v = $this->getCitation())) {
            $sxe->addAttribute(self::FIELD_CITATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CITATION));
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            $sxe->addAttribute(self::FIELD_DISPLAY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY));
            }
        }
        if (null !== ($v = $this->getDocument())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT));
        }
        if (null !== ($v = $this->getLabel())) {
            $sxe->addAttribute(self::FIELD_LABEL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL));
            }
        }
        if (null !== ($v = $this->getResource())) {
            $sxe->addAttribute(self::FIELD_RESOURCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCitation())) {
            $a[self::FIELD_CITATION] = (string)$v;
            $a[self::FIELD_CITATION_EXT] = $v;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a[self::FIELD_DISPLAY] = (string)$v;
            $a[self::FIELD_DISPLAY_EXT] = $v;
        }
        if (null !== ($v = $this->getDocument())) {
            $a[self::FIELD_DOCUMENT] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = (string)$v;
            $a[self::FIELD_LABEL_EXT] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = (string)$v;
            $a[self::FIELD_RESOURCE_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}