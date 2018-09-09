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
 * The metadata about a resource. This is content in the resource that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRMeta
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRMeta extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Meta';

    /**
     * When the resource last changed - e.g. when the version changed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $lastUpdated = null;

    /**
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $security = null;

    /**
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $tag = null;

    /**
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $versionId = null;

    /**
     * FHIRMeta Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['lastUpdated'])) {
                $this->setLastUpdated($data['lastUpdated']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['security'])) {
                $this->setSecurity($data['security']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['tag'])) {
                $this->setTag($data['tag']);
            }
            if (isset($data['versionId'])) {
                $this->setVersionId($data['versionId']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRMeta::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * When the resource last changed - e.g. when the version changed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        if (null === $lastUpdated) {
            return $this; 
        }
        if (is_scalar($lastUpdated)) {
            $lastUpdated = new FHIRInstant($lastUpdated);
        }
        if (!($lastUpdated instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeta::setLastUpdated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($lastUpdated)
            ));
        }
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * When the resource last changed - e.g. when the version changed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }


    /**
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeta::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setSecurity(FHIRCoding $security = null)
    {
        if (null === $security) {
            return $this; 
        }
        $this->security = $security;
        return $this;
    }

    /**
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getSecurity()
    {
        return $this->security;
    }


    /**
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSource($source)
    {
        if (null === $source) {
            return $this; 
        }
        if (is_scalar($source)) {
            $source = new FHIRUri($source);
        }
        if (!($source instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeta::setSource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($source)
            ));
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setTag(FHIRCoding $tag = null)
    {
        if (null === $tag) {
            return $this; 
        }
        $this->tag = $tag;
        return $this;
    }

    /**
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getTag()
    {
        return $this->tag;
    }


    /**
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setVersionId($versionId)
    {
        if (null === $versionId) {
            return $this; 
        }
        if (is_scalar($versionId)) {
            $versionId = new FHIRId($versionId);
        }
        if (!($versionId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeta::setVersionId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($versionId)
            ));
        }
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getVersionId()
    {
        return $this->versionId;
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
        if (null !== ($v = $this->getLastUpdated())) {
            $a['lastUpdated'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getSecurity())) {
            $a['security'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getTag())) {
            $a['tag'] = $v;
        }
        if (null !== ($v = $this->getVersionId())) {
            $a['versionId'] = $v;
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
            $sxe = new \SimpleXMLElement('<Meta xmlns="http://hl7.org/fhir"></Meta>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}