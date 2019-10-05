<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A set of rules or how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole,
 * and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuidePage
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE;

    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_KIND = 'kind';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PACKAGE = 'package';
    const FIELD_PACKAGE_EXT = '_package';
    const FIELD_PAGE = 'page';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    private $format = null;

    /**
     * The kind of an included page.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind
     */
    private $kind = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    private $package = [];

    /**
     * A set of rules or how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole,
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    private $page = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The source address for the page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    private $source = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    private $type = [];

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
        if (isset($data[self::FIELD_FORMAT])) {
            $ext = (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT]))
                ? $data[self::FIELD_FORMAT_EXT]
                : null;
            if ($data[self::FIELD_FORMAT] instanceof FHIRCode) {
                $this->setFormat($data[self::FIELD_FORMAT]);
            } elseif ($ext && is_scalar($data[self::FIELD_FORMAT])) {
                $this->setFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_FORMAT]] + $ext));
            } else {
                $this->setFormat(new FHIRCode($data[self::FIELD_FORMAT]));
            }
        }
        if (isset($data[self::FIELD_KIND])) {
            if ($data[self::FIELD_KIND] instanceof FHIRGuidePageKind) {
                $this->setKind($data[self::FIELD_KIND]);
            } else {
                $this->setKind(new FHIRGuidePageKind($data[self::FIELD_KIND]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PACKAGE])) {
            $ext = (isset($data[self::FIELD_PACKAGE_EXT]) && is_array($data[self::FIELD_PACKAGE_EXT]))
                ? $data[self::FIELD_PACKAGE_EXT]
                : null;
            if (is_array($data[self::FIELD_PACKAGE])) {
                foreach($data[self::FIELD_PACKAGE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addPackage($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPackage(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPackage(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGE] instanceof FHIRString) {
                $this->addPackage($data[self::FIELD_PACKAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PACKAGE])) {
                $this->addPackage(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PACKAGE]] + $ext));
            } else {
                $this->addPackage(new FHIRString($data[self::FIELD_PACKAGE]));
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
        if (isset($data[self::FIELD_SOURCE])) {
            $ext = (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT]))
                ? $data[self::FIELD_SOURCE_EXT]
                : null;
            if ($data[self::FIELD_SOURCE] instanceof FHIRUri) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOURCE])) {
                $this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_SOURCE]] + $ext));
            } else {
                $this->setSource(new FHIRUri($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $i => $v) {
                    if ($v instanceof FHIRCode) {
                        $this->addType($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addType(new FHIRCode($v));
                    }
                }
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRCode) {
                $this->addType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->addType(new FHIRCode($data[self::FIELD_TYPE]));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $format
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setFormat($format = null)
    {
        if (null === $format) {
            $this->format = null;
            return $this;
        }
        if ($format instanceof FHIRCode) {
            $this->format = $format;
            return $this;
        }
        $this->format = new FHIRCode($format);
        return $this;
    }

    /**
     * The kind of an included page.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of an included page.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind $kind
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setKind(FHIRGuidePageKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $package
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function addPackage($package = null)
    {
        if (null === $package) {
            $this->package = null;
            return $this;
        }
        if ($package instanceof FHIRString) {
            $this->package = $package;
            return $this;
        }
        $this->package = new FHIRString($package);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $package
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setPackage(array $package = [])
    {
        $this->package = [];
        if ([] === $package) {
            return $this;
        }
        foreach($package as $v) {
            if ($v instanceof FHIRString) {
                $this->addPackage($v);
            } else {
                $this->addPackage(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules or how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole,
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * A set of rules or how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole,
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function addPage(FHIRImplementationGuidePage $page = null)
    {
        $this->page[] = $page;
        return $this;
    }

    /**
     * A set of rules or how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole,
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[] $page
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The source address for the page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The source address for the page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $source
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setSource($source = null)
    {
        if (null === $source) {
            $this->source = null;
            return $this;
        }
        if ($source instanceof FHIRUri) {
            $this->source = $source;
            return $this;
        }
        $this->source = new FHIRUri($source);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function addType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRCode) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRCode($type);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[] $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCode) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
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
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRImplementationGuidePage);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuidePage)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuidePage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->format)) {
            $type->setFormat((string)$attributes->format);
        }
        if (isset($children->format)) {
            $type->setFormat(FHIRCode::xmlUnserialize($children->format));
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRGuidePageKind::xmlUnserialize($children->kind));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->package)) {
            $type->addPackage((string)$attributes->package);
        }
        if (isset($children->package)) {
            foreach($children->package as $child) {
                $type->addPackage(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->page)) {
            foreach($children->page as $child) {
                $type->addPage(FHIRImplementationGuidePage::xmlUnserialize($child));
            }
        }
        if (isset($attributes->source)) {
            $type->setSource((string)$attributes->source);
        }
        if (isset($children->source)) {
            $type->setSource(FHIRUri::xmlUnserialize($children->source));
        }
        if (isset($attributes->type)) {
            $type->addType((string)$attributes->type);
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCode::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImplementationGuidePage xmlns="http://hl7.org/fhir"></ImplementationGuidePage>');
        }
    parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getFormat())) {
            $sxe->addAttribute(self::FIELD_FORMAT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT));
            }
        }

        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND));
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PACKAGE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE));
                }
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
        if (null !== ($v = $this->getSource())) {
            $sxe->addAttribute(self::FIELD_SOURCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE));
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_TYPE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
                }
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
        if (null !== ($v = $this->getFormat())) {
            $a[self::FIELD_FORMAT] = (string)$v;
            $a[self::FIELD_FORMAT_EXT] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPackage())) {
            $a[self::FIELD_PACKAGE] = [];
            $a[self::FIELD_PACKAGE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PACKAGE][] = (string)$v;
                $a[self::FIELD_PACKAGE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            $a[self::FIELD_PAGE] = $vs;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = (string)$v;
            $a[self::FIELD_SOURCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            $a[self::FIELD_TYPE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_TYPE][] = (string)$v;
                $a[self::FIELD_TYPE_EXT][] = $v;
            }
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