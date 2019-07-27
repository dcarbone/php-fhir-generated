<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuidePage
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE;

    const FIELD_GENERATION = 'generation';
    const FIELD_NAME_REFERENCE = 'nameReference';
    const FIELD_NAME_URL = 'nameUrl';
    const FIELD_NAME_URL_EXT = '_nameUrl';
    const FIELD_PAGE = 'page';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';

    /**
     * A code that indicates how the page is generated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the page is generated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration
     */
    private $generation = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $nameReference = null;

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    private $nameUrl = null;

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    private $page = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * FHIRImplementationGuidePage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuidePage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_GENERATION])) {
            if ($data[self::FIELD_GENERATION] instanceof FHIRGuidePageGeneration) {
                $this->setGeneration($data[self::FIELD_GENERATION]);
            } else {
                $this->setGeneration(new FHIRGuidePageGeneration($data[self::FIELD_GENERATION]));
            }
        }
        if (isset($data[self::FIELD_NAME_REFERENCE])) {
            if ($data[self::FIELD_NAME_REFERENCE] instanceof FHIRReference) {
                $this->setNameReference($data[self::FIELD_NAME_REFERENCE]);
            } else {
                $this->setNameReference(new FHIRReference($data[self::FIELD_NAME_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NAME_URL])) {
            $ext = (isset($data[self::FIELD_NAME_URL_EXT]) && is_array($data[self::FIELD_NAME_URL_EXT]))
                ? $data[self::FIELD_NAME_URL_EXT]
                : null;
            if ($data[self::FIELD_NAME_URL] instanceof FHIRUrl) {
                $this->setNameUrl($data[self::FIELD_NAME_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME_URL])) {
                $this->setNameUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_NAME_URL]] + $ext));
            } else {
                $this->setNameUrl(new FHIRUrl($data[self::FIELD_NAME_URL]));
            }
        }
        if (isset($data[self::FIELD_PAGE])) {
            if (is_array($data[self::FIELD_PAGE])) {
                foreach($data[self::FIELD_PAGE] as $v) {
                    if ($v instanceof FHIRImplementationGuidePage) {
                        $this->addPage($v);
                    } else {
                        $this->addPage(new FHIRImplementationGuidePage($v));
                    }
                }
            } else if ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage) {
                $this->addPage($data[self::FIELD_PAGE]);
            } else {
                $this->addPage(new FHIRImplementationGuidePage($data[self::FIELD_PAGE]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT]))
                ? $data[self::FIELD_TITLE_EXT]
                : null;
            if ($data[self::FIELD_TITLE] instanceof FHIRString) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TITLE])) {
                $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TITLE]] + $ext));
            } else {
                $this->setTitle(new FHIRString($data[self::FIELD_TITLE]));
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
     * A code that indicates how the page is generated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the page is generated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * A code that indicates how the page is generated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the page is generated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRGuidePageGeneration $generation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setGeneration(FHIRGuidePageGeneration $generation = null)
    {
        $this->generation = $generation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $nameReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setNameReference(FHIRReference $nameReference = null)
    {
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl $nameUrl
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setNameUrl($nameUrl = null)
    {
        if (null === $nameUrl) {
            $this->nameUrl = null;
            return $this;
        }
        if ($nameUrl instanceof FHIRUrl) {
            $this->nameUrl = $nameUrl;
            return $this;
        }
        $this->nameUrl = new FHIRUrl($nameUrl);
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function addPage(FHIRImplementationGuidePage $page = null)
    {
        $this->page[] = $page;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[] $page
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setPage(array $page = [])
    {
        $this->page = [];
        if ([] === $page) {
            return $this;
        }
        foreach($page as $v) {
            if ($v instanceof FHIRImplementationGuidePage) {
                $this->addPage($v);
            } else {
                $this->addPage(new FHIRImplementationGuidePage($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
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
                throw new \DomainException(sprintf('FHIRImplementationGuidePage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuidePage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRImplementationGuidePage);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuidePage)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuidePage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->generation)) {
            $type->setGeneration(FHIRGuidePageGeneration::xmlUnserialize($children->generation));
        }
        if (isset($children->nameReference)) {
            $type->setNameReference(FHIRReference::xmlUnserialize($children->nameReference));
        }
        if (isset($attributes->nameUrl)) {
            $type->setNameUrl((string)$attributes->nameUrl);
        }
        if (isset($children->nameUrl)) {
            $type->setNameUrl(FHIRUrl::xmlUnserialize($children->nameUrl));
        }
        if (isset($children->page)) {
            foreach($children->page as $child) {
                $type->addPage(FHIRImplementationGuidePage::xmlUnserialize($child));
            }
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
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
            $sxe = new \SimpleXMLElement('<ImplementationGuidePage xmlns="http://hl7.org/fhir"></ImplementationGuidePage>');
        }
        if (null !== ($v = $this->getGeneration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENERATION));
        }
        if (null !== ($v = $this->getNameReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME_REFERENCE));
        }
        if (null !== ($v = $this->getNameUrl())) {
            $sxe->addAttribute(self::FIELD_NAME_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME_URL));
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAGE));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
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
        if (null !== ($v = $this->getGeneration())) {
            $a[self::FIELD_GENERATION] = $v;
        }
        if (null !== ($v = $this->getNameReference())) {
            $a[self::FIELD_NAME_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getNameUrl())) {
            $a[self::FIELD_NAME_URL] = (string)$v;
            $a[self::FIELD_NAME_URL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPage())) {
            $a[self::FIELD_PAGE] = $vs;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
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