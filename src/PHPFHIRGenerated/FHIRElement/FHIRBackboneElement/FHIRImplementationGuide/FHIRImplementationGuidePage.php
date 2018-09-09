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
use PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuidePage
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImplementationGuide.Page';

    /**
     * A code that indicates how the page is generated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration
     */
    public $generation = null;

    /**
     * The source address for the page.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $nameReference = null;

    /**
     * The source address for the page.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $nameUrl = null;

    /**
     * Nested Pages/Sections under this page.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public $page = null;

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * FHIRImplementationGuidePage Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['generation'])) {
                $this->setGeneration($data['generation']);
            }
            if (isset($data['nameReference'])) {
                $this->setNameReference($data['nameReference']);
            }
            if (isset($data['nameUrl'])) {
                $this->setNameUrl($data['nameUrl']);
            }
            if (isset($data['page'])) {
                $this->setPage($data['page']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A code that indicates how the page is generated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration
     * @return $this
     */
    public function setGeneration($generation)
    {
        if (null === $generation) {
            return $this; 
        }
        if (is_scalar($generation)) {
            $generation = new FHIRGuidePageGeneration($generation);
        }
        if (!($generation instanceof FHIRGuidePageGeneration)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuidePage::setGeneration - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration or appropriate scalar value, %s seen.',
                gettype($generation)
            ));
        }
        $this->generation = $generation;
        return $this;
    }

    /**
     * A code that indicates how the page is generated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration
     */
    public function getGeneration()
    {
        return $this->generation;
    }


    /**
     * The source address for the page.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setNameReference(FHIRReference $nameReference = null)
    {
        if (null === $nameReference) {
            return $this; 
        }
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * The source address for the page.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }


    /**
     * The source address for the page.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setNameUrl($nameUrl)
    {
        if (null === $nameUrl) {
            return $this; 
        }
        if (is_scalar($nameUrl)) {
            $nameUrl = new FHIRUrl($nameUrl);
        }
        if (!($nameUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuidePage::setNameUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($nameUrl)
            ));
        }
        $this->nameUrl = $nameUrl;
        return $this;
    }

    /**
     * The source address for the page.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }


    /**
     * Nested Pages/Sections under this page.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     * @return $this
     */
    public function setPage(FHIRImplementationGuidePage $page = null)
    {
        if (null === $page) {
            return $this; 
        }
        $this->page = $page;
        return $this;
    }

    /**
     * Nested Pages/Sections under this page.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function getPage()
    {
        return $this->page;
    }


    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuidePage::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
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
        if (null !== ($v = $this->getGeneration())) {
            $a['generation'] = $v;
        }
        if (null !== ($v = $this->getNameReference())) {
            $a['nameReference'] = $v;
        }
        if (null !== ($v = $this->getNameUrl())) {
            $a['nameUrl'] = $v;
        }
        if (null !== ($v = $this->getPage())) {
            $a['page'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImplementationGuidePage xmlns="http://hl7.org/fhir"></ImplementationGuidePage>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}