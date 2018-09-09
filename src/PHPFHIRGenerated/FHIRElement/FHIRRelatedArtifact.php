<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Related artifacts such as additional documentation, justification, or bibliographic references.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRRelatedArtifact
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRRelatedArtifact extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'RelatedArtifact';

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $citation = null;

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $document = null;

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $resource = null;

    /**
     * The type of relationship to the related artifact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType
     */
    public $type = null;

    /**
     * A url for the artifact that can be followed to access the actual content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $url = null;

    /**
     * FHIRRelatedArtifact Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['citation'])) {
                $this->setCitation($data['citation']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['document'])) {
                $this->setDocument($data['document']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCitation($citation)
    {
        if (null === $citation) {
            return $this; 
        }
        if (is_scalar($citation)) {
            $citation = new FHIRString($citation);
        }
        if (!($citation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::setCitation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($citation)
            ));
        }
        $this->citation = $citation;
        return $this;
    }

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCitation()
    {
        return $this->citation;
    }


    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisplay($display)
    {
        if (null === $display) {
            return $this; 
        }
        if (is_scalar($display)) {
            $display = new FHIRString($display);
        }
        if (!($display instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::setDisplay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($display)
            ));
        }
        $this->display = $display;
        return $this;
    }

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }


    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setDocument(FHIRAttachment $document = null)
    {
        if (null === $document) {
            return $this; 
        }
        $this->document = $document;
        return $this;
    }

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDocument()
    {
        return $this->document;
    }


    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setResource($resource)
    {
        if (null === $resource) {
            return $this; 
        }
        if (is_scalar($resource)) {
            $resource = new FHIRCanonical($resource);
        }
        if (!($resource instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::setResource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getResource()
    {
        return $this->resource;
    }


    /**
     * The type of relationship to the related artifact.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRRelatedArtifactType($type);
        }
        if (!($type instanceof FHIRRelatedArtifactType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of relationship to the related artifact.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifactType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * A url for the artifact that can be followed to access the actual content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUrl($url);
        }
        if (!($url instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedArtifact::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A url for the artifact that can be followed to access the actual content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCitation())) {
            $a['citation'] = $v;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a['display'] = $v;
        }
        if (null !== ($v = $this->getDocument())) {
            $a['document'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<RelatedArtifact xmlns="http://hl7.org/fhir"></RelatedArtifact>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}