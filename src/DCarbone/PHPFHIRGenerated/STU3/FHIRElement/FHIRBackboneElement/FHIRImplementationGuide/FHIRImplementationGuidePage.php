<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidePageKind;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole
 * and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuidePage
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE;
    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_PACKAGE = 'package';
    const FIELD_PACKAGE_EXT = '_package';
    const FIELD_PAGE = 'page';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $format = null;

    /**
     * The kind of an included page.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidePageKind
     */
    protected $kind = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected $package = [];

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    protected $page = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source address for the page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $source = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType[]
     */
    protected $type = [];

    /**
     * Validation map for fields in type ImplementationGuide.Page
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_FORMAT]) || isset($data[self::FIELD_FORMAT_EXT])) {
            if (isset($data[self::FIELD_FORMAT])) {
                $value = $data[self::FIELD_FORMAT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT])) {
                $ext = $data[self::FIELD_FORMAT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setFormat($value);
                } else if (is_array($value)) {
                    $this->setFormat(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFormat(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
            if (isset($data[self::FIELD_KIND])) {
                $value = $data[self::FIELD_KIND];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])) {
                $ext = $data[self::FIELD_KIND_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRGuidePageKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIRGuidePageKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIRGuidePageKind([FHIRGuidePageKind::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setKind(new FHIRGuidePageKind($ext));
            }
        }
        if (isset($data[self::FIELD_PACKAGE]) || isset($data[self::FIELD_PACKAGE_EXT])) {
            if (isset($data[self::FIELD_PACKAGE])) {
                $value = $data[self::FIELD_PACKAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PACKAGE_EXT]) && is_array($data[self::FIELD_PACKAGE_EXT])) {
                $ext = $data[self::FIELD_PACKAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPackage($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPackage($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPackage(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPackage(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPackage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPackage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPackage(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PAGE])) {
            if (is_array($data[self::FIELD_PAGE])) {
                foreach($data[self::FIELD_PAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SOURCE]) || isset($data[self::FIELD_SOURCE_EXT])) {
            if (isset($data[self::FIELD_SOURCE])) {
                $value = $data[self::FIELD_SOURCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])) {
                $ext = $data[self::FIELD_SOURCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setSource($value);
                } else if (is_array($value)) {
                    $this->setSource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSource(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            if (isset($data[self::FIELD_TITLE])) {
                $value = $data[self::FIELD_TITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) {
                $ext = $data[self::FIELD_TITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRResourceType) {
                    $this->addType($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRResourceType) {
                            $this->addType($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addType(new FHIRResourceType(array_merge($v, $iext)));
                            } else {
                                $this->addType(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addType(new FHIRResourceType(array_merge($ext, $value)));
                } else {
                    $this->addType(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addType(new FHIRResourceType($iext));
                }
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImplementationGuidePage{$xmlns}></ImplementationGuidePage>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The format of the page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $format
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidePageKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of an included page.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of page that this is. Some pages are autogenerated (list, example), and
     * other kinds are of interest so that tools can navigate the user to the page of
     * interest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidePageKind $kind
     * @return static
     */
    public function setKind(FHIRGuidePageKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $package
     * @return static
     */
    public function addPackage($package = null)
    {
        if (null === $package) {
            $this->package = [];
            return $this;
        }
        if ($package instanceof FHIRString) {
            $this->package[] = $package;
            return $this;
        }
        $this->package[] = new FHIRString($package);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, a list of packages to include in the page (or else empty
     * for everything).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $package
     * @return static
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
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return static
     */
    public function addPage(FHIRImplementationGuidePage $page = null)
    {
        $this->page[] = $page;
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Nested Pages/Sections under this page.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[] $page
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source address for the page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source address for the page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $source
     * @return static
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short title used to represent this page in navigational structures such as
     * table of contents, bread crumbs, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $title
     * @return static
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
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType $type
     * @return static
     */
    public function addType(FHIRResourceType $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For constructed pages, what kind of resources to include in the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRResourceType) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRResourceType($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getFormat())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORMAT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORMAT])) {
            $v = $this->getFormat();
            foreach($validationRules[self::FIELD_FORMAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORMAT])) {
                        $errs[self::FIELD_FORMAT] = [];
                    }
                    $errs[self::FIELD_FORMAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGE])) {
            $v = $this->getPackage();
            foreach($validationRules[self::FIELD_PACKAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_PACKAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGE])) {
                        $errs[self::FIELD_PACKAGE] = [];
                    }
                    $errs[self::FIELD_PACKAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE])) {
            $v = $this->getPage();
            foreach($validationRules[self::FIELD_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE])) {
                        $errs[self::FIELD_PAGE] = [];
                    }
                    $errs[self::FIELD_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImplementationGuidePage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuidePage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImplementationGuidePage;
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuidePage)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuidePage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->format)) {
            $type->setFormat(FHIRCode::xmlUnserialize($children->format));
        }
        if (isset($attributes->format)) {
            $pt = $type->getFormat();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->format);
            } else {
                $type->setFormat((string)$attributes->format);
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRGuidePageKind::xmlUnserialize($children->kind));
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
        if (isset($children->source)) {
            $type->setSource(FHIRUri::xmlUnserialize($children->source));
        }
        if (isset($attributes->source)) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->source);
            } else {
                $type->setSource((string)$attributes->source);
            }
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->title)) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->title);
            } else {
                $type->setTitle((string)$attributes->title);
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRResourceType::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getFormat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPackage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_FORMAT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_FORMAT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRGuidePageKind::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRGuidePageKind::FIELD_VALUE]);
                $a[self::FIELD_KIND_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            $a[self::FIELD_PACKAGE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PACKAGE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PACKAGE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            $a[self::FIELD_PAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PAGE][] = $v;
            }
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRResourceType::FIELD_VALUE]) || array_key_exists(FHIRResourceType::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRResourceType::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_TYPE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}