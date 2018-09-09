<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideManifest
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideManifest extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImplementationGuide.Manifest';

    /**
     * Indicates a relative path to an image that exists within the IG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $image = null;

    /**
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $other = null;

    /**
     * Information about a page within the IG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1
     */
    public $page = null;

    /**
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $rendering = null;

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     */
    public $resource = null;

    /**
     * FHIRImplementationGuideManifest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['image'])) {
                $this->setImage($data['image']);
            }
            if (isset($data['other'])) {
                $this->setOther($data['other']);
            }
            if (isset($data['page'])) {
                $this->setPage($data['page']);
            }
            if (isset($data['rendering'])) {
                $this->setRendering($data['rendering']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates a relative path to an image that exists within the IG.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setImage($image)
    {
        if (null === $image) {
            return $this; 
        }
        if (is_scalar($image)) {
            $image = new FHIRString($image);
        }
        if (!($image instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideManifest::setImage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($image)
            ));
        }
        $this->image = $image;
        return $this;
    }

    /**
     * Indicates a relative path to an image that exists within the IG.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOther($other)
    {
        if (null === $other) {
            return $this; 
        }
        if (is_scalar($other)) {
            $other = new FHIRString($other);
        }
        if (!($other instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideManifest::setOther - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($other)
            ));
        }
        $this->other = $other;
        return $this;
    }

    /**
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOther()
    {
        return $this->other;
    }


    /**
     * Information about a page within the IG.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1
     * @return $this
     */
    public function setPage(FHIRImplementationGuidePage1 $page = null)
    {
        if (null === $page) {
            return $this; 
        }
        $this->page = $page;
        return $this;
    }

    /**
     * Information about a page within the IG.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1
     */
    public function getPage()
    {
        return $this->page;
    }


    /**
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setRendering($rendering)
    {
        if (null === $rendering) {
            return $this; 
        }
        if (is_scalar($rendering)) {
            $rendering = new FHIRUrl($rendering);
        }
        if (!($rendering instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideManifest::setRendering - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($rendering)
            ));
        }
        $this->rendering = $rendering;
        return $this;
    }

    /**
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getRendering()
    {
        return $this->rendering;
    }


    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     * @return $this
     */
    public function setResource(FHIRImplementationGuideResource1 $resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     */
    public function getResource()
    {
        return $this->resource;
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
        if (null !== ($v = $this->getImage())) {
            $a['image'] = $v;
        }
        if (null !== ($v = $this->getOther())) {
            $a['other'] = $v;
        }
        if (null !== ($v = $this->getPage())) {
            $a['page'] = $v;
        }
        if (null !== ($v = $this->getRendering())) {
            $a['rendering'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImplementationGuideManifest xmlns="http://hl7.org/fhir"></ImplementationGuideManifest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}