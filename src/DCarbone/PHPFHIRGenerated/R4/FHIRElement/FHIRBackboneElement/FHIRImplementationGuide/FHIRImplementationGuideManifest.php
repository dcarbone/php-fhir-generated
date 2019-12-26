<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideManifest
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideManifest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST;
    const FIELD_IMAGE = 'image';
    const FIELD_IMAGE_EXT = '_image';
    const FIELD_OTHER = 'other';
    const FIELD_OTHER_EXT = '_other';
    const FIELD_PAGE = 'page';
    const FIELD_RENDERING = 'rendering';
    const FIELD_RENDERING_EXT = '_rendering';
    const FIELD_RESOURCE = 'resource';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $image = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $other = [];

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Information about a page within the IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1[]
     */
    protected $page = [];

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A pointer to official web page, PDF or other rendering of the implementation
     * guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    protected $rendering = null;

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1[]
     */
    protected $resource = [];

    /**
     * Validation map for fields in type ImplementationGuide.Manifest
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_RESOURCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImplementationGuideManifest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideManifest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IMAGE]) || isset($data[self::FIELD_IMAGE_EXT])) {
            if (isset($data[self::FIELD_IMAGE])) {
                $value = $data[self::FIELD_IMAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IMAGE_EXT]) && is_array($data[self::FIELD_IMAGE_EXT])) {
                $ext = $data[self::FIELD_IMAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addImage($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addImage($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addImage(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addImage(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addImage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addImage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addImage(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_OTHER]) || isset($data[self::FIELD_OTHER_EXT])) {
            if (isset($data[self::FIELD_OTHER])) {
                $value = $data[self::FIELD_OTHER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OTHER_EXT]) && is_array($data[self::FIELD_OTHER_EXT])) {
                $ext = $data[self::FIELD_OTHER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addOther($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addOther($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addOther(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addOther(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addOther(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addOther(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addOther(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PAGE])) {
            if (is_array($data[self::FIELD_PAGE])) {
                foreach($data[self::FIELD_PAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuidePage1) {
                        $this->addPage($v);
                    } else {
                        $this->addPage(new FHIRImplementationGuidePage1($v));
                    }
                }
            } else if ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage1) {
                $this->addPage($data[self::FIELD_PAGE]);
            } else {
                $this->addPage(new FHIRImplementationGuidePage1($data[self::FIELD_PAGE]));
            }
        }
        if (isset($data[self::FIELD_RENDERING]) || isset($data[self::FIELD_RENDERING_EXT])) {
            if (isset($data[self::FIELD_RENDERING])) {
                $value = $data[self::FIELD_RENDERING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RENDERING_EXT]) && is_array($data[self::FIELD_RENDERING_EXT])) {
                $ext = $data[self::FIELD_RENDERING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setRendering($value);
                } else if (is_array($value)) {
                    $this->setRendering(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setRendering(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRendering(new FHIRUrl($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuideResource1) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRImplementationGuideResource1($v));
                    }
                }
            } else if ($data[self::FIELD_RESOURCE] instanceof FHIRImplementationGuideResource1) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRImplementationGuideResource1($data[self::FIELD_RESOURCE]));
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
        return "<ImplementationGuideManifest{$xmlns}></ImplementationGuideManifest>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $image
     * @return static
     */
    public function addImage($image = null)
    {
        if (null === $image) {
            $this->image = [];
            return $this;
        }
        if ($image instanceof FHIRString) {
            $this->image[] = $image;
            return $this;
        }
        $this->image[] = new FHIRString($image);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $image
     * @return static
     */
    public function setImage(array $image = [])
    {
        $this->image = [];
        if ([] === $image) {
            return $this;
        }
        foreach($image as $v) {
            if ($v instanceof FHIRString) {
                $this->addImage($v);
            } else {
                $this->addImage(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $other
     * @return static
     */
    public function addOther($other = null)
    {
        if (null === $other) {
            $this->other = [];
            return $this;
        }
        if ($other instanceof FHIRString) {
            $this->other[] = $other;
            return $this;
        }
        $this->other[] = new FHIRString($other);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $other
     * @return static
     */
    public function setOther(array $other = [])
    {
        $this->other = [];
        if ([] === $other) {
            return $this;
        }
        foreach($other as $v) {
            if ($v instanceof FHIRString) {
                $this->addOther($v);
            } else {
                $this->addOther(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Information about a page within the IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1[]
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
     * Information about a page within the IG.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1 $page
     * @return static
     */
    public function addPage(FHIRImplementationGuidePage1 $page = null)
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
     * Information about a page within the IG.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1[] $page
     * @return static
     */
    public function setPage(array $page = [])
    {
        $this->page = [];
        if ([] === $page) {
            return $this;
        }
        foreach($page as $v) {
            if ($v instanceof FHIRImplementationGuidePage1) {
                $this->addPage($v);
            } else {
                $this->addPage(new FHIRImplementationGuidePage1($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A pointer to official web page, PDF or other rendering of the implementation
     * guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    public function getRendering()
    {
        return $this->rendering;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A pointer to official web page, PDF or other rendering of the implementation
     * guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl $rendering
     * @return static
     */
    public function setRendering($rendering = null)
    {
        if (null === $rendering) {
            $this->rendering = null;
            return $this;
        }
        if ($rendering instanceof FHIRUrl) {
            $this->rendering = $rendering;
            return $this;
        }
        $this->rendering = new FHIRUrl($rendering);
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 $resource
     * @return static
     */
    public function addResource(FHIRImplementationGuideResource1 $resource = null)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1[] $resource
     * @return static
     */
    public function setResource(array $resource = [])
    {
        $this->resource = [];
        if ([] === $resource) {
            return $this;
        }
        foreach($resource as $v) {
            if ($v instanceof FHIRImplementationGuideResource1) {
                $this->addResource($v);
            } else {
                $this->addResource(new FHIRImplementationGuideResource1($v));
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
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOther())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getRendering())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RENDERING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER])) {
            $v = $this->getOther();
            foreach($validationRules[self::FIELD_OTHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST, self::FIELD_OTHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER])) {
                        $errs[self::FIELD_OTHER] = [];
                    }
                    $errs[self::FIELD_OTHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE])) {
            $v = $this->getPage();
            foreach($validationRules[self::FIELD_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST, self::FIELD_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE])) {
                        $errs[self::FIELD_PAGE] = [];
                    }
                    $errs[self::FIELD_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RENDERING])) {
            $v = $this->getRendering();
            foreach($validationRules[self::FIELD_RENDERING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST, self::FIELD_RENDERING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RENDERING])) {
                        $errs[self::FIELD_RENDERING] = [];
                    }
                    $errs[self::FIELD_RENDERING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest
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
                throw new \DomainException(sprintf('FHIRImplementationGuideManifest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideManifest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImplementationGuideManifest;
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideManifest)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideManifest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest or null, %s seen.',
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
        if (isset($children->image)) {
            foreach($children->image as $child) {
                $type->addImage(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->other)) {
            foreach($children->other as $child) {
                $type->addOther(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->page)) {
            foreach($children->page as $child) {
                $type->addPage(FHIRImplementationGuidePage1::xmlUnserialize($child));
            }
        }
        if (isset($children->rendering)) {
            $type->setRendering(FHIRUrl::xmlUnserialize($children->rendering));
        }
        if (isset($attributes->rendering)) {
            $pt = $type->getRendering();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->rendering);
            } else {
                $type->setRendering((string)$attributes->rendering);
            }
        }
        if (isset($children->resource)) {
            foreach($children->resource as $child) {
                $type->addResource(FHIRImplementationGuideResource1::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOther())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OTHER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getRendering())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RENDERING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getImage())) {
            $a[self::FIELD_IMAGE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMAGE][] = $v->getValue();
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
                $a[self::FIELD_IMAGE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getOther())) {
            $a[self::FIELD_OTHER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OTHER][] = $v->getValue();
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
                $a[self::FIELD_OTHER_EXT] = $encs;
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
        if (null !== ($v = $this->getRendering())) {
            $a[self::FIELD_RENDERING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUrl::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUrl::FIELD_VALUE]);
                $a[self::FIELD_RENDERING_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESOURCE][] = $v;
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