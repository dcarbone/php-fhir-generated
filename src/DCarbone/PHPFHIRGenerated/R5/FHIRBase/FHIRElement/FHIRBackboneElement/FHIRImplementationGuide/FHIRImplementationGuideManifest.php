<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideManifest
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideManifest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST;

    const FIELD_RENDERING = 'rendering';
    const FIELD_RENDERING_EXT = '_rendering';
    const FIELD_RESOURCE = 'resource';
    const FIELD_PAGE = 'page';
    const FIELD_IMAGE = 'image';
    const FIELD_IMAGE_EXT = '_image';
    const FIELD_OTHER = 'other';
    const FIELD_OTHER_EXT = '_other';

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A pointer to official web page, PDF or other rendering of the implementation
     * guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $rendering = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1[]
     */
    protected null|array $resource = [];
    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Information about a page within the IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1[]
     */
    protected null|array $page = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $image = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $other = [];

    /**
     * Validation map for fields in type ImplementationGuide.Manifest
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_RESOURCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRImplementationGuideManifest Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_RENDERING, $data) || array_key_exists(self::FIELD_RENDERING_EXT, $data)) {
            $value = $data[self::FIELD_RENDERING] ?? null;
            $ext = (isset($data[self::FIELD_RENDERING_EXT]) && is_array($data[self::FIELD_RENDERING_EXT])) ? $data[self::FIELD_RENDERING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setRendering($value);
                } else if (is_array($value)) {
                    $this->setRendering(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setRendering(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRendering(new FHIRUrl($ext));
            } else {
                $this->setRendering(new FHIRUrl(null));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE, $data)) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if ($v instanceof FHIRImplementationGuideResource1) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRImplementationGuideResource1($v));
                    }
                }
            } elseif ($data[self::FIELD_RESOURCE] instanceof FHIRImplementationGuideResource1) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRImplementationGuideResource1($data[self::FIELD_RESOURCE]));
            }
        }
        if (array_key_exists(self::FIELD_PAGE, $data)) {
            if (is_array($data[self::FIELD_PAGE])) {
                foreach($data[self::FIELD_PAGE] as $v) {
                    if ($v instanceof FHIRImplementationGuidePage1) {
                        $this->addPage($v);
                    } else {
                        $this->addPage(new FHIRImplementationGuidePage1($v));
                    }
                }
            } elseif ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage1) {
                $this->addPage($data[self::FIELD_PAGE]);
            } else {
                $this->addPage(new FHIRImplementationGuidePage1($data[self::FIELD_PAGE]));
            }
        }
        if (array_key_exists(self::FIELD_IMAGE, $data) || array_key_exists(self::FIELD_IMAGE_EXT, $data)) {
            $value = $data[self::FIELD_IMAGE] ?? null;
            $ext = (isset($data[self::FIELD_IMAGE_EXT]) && is_array($data[self::FIELD_IMAGE_EXT])) ? $data[self::FIELD_IMAGE_EXT] : [];
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
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addImage(new FHIRString($iext));
                }
            } else {
                $this->addImage(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_OTHER, $data) || array_key_exists(self::FIELD_OTHER_EXT, $data)) {
            $value = $data[self::FIELD_OTHER] ?? null;
            $ext = (isset($data[self::FIELD_OTHER_EXT]) && is_array($data[self::FIELD_OTHER_EXT])) ? $data[self::FIELD_OTHER_EXT] : [];
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
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addOther(new FHIRString($iext));
                }
            } else {
                $this->addOther(new FHIRString(null));
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
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A pointer to official web page, PDF or other rendering of the implementation
     * guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getRendering(): null|FHIRUrl
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl $rendering
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRendering(null|string|FHIRUrlPrimitive|FHIRUrl $rendering = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $rendering && !($rendering instanceof FHIRUrl)) {
            $rendering = new FHIRUrl($rendering);
        }
        $this->_trackValueSet($this->rendering, $rendering);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_RENDERING])) {
            $this->_primitiveXmlLocations[self::FIELD_RENDERING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_RENDERING][0] = $xmlLocation;
        $this->rendering = $rendering;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1[]
     */
    public function getResource(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 $resource
     * @return static
     */
    public function addResource(null|FHIRImplementationGuideResource1 $resource = null): self
    {
        if (null === $resource) {
            $resource = new FHIRImplementationGuideResource1();
        }
        $this->_trackValueAdded();
        $this->resource[] = $resource;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1[]
     */
    public function getPage(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1 $page
     * @return static
     */
    public function addPage(null|FHIRImplementationGuidePage1 $page = null): self
    {
        if (null === $page) {
            $page = new FHIRImplementationGuidePage1();
        }
        $this->_trackValueAdded();
        $this->page[] = $page;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getImage(): null|array
    {
        return $this->image;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $image
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addImage(null|string|FHIRStringPrimitive|FHIRString $image = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $image && !($image instanceof FHIRString)) {
            $image = new FHIRString($image);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IMAGE])) {
            $this->_primitiveXmlLocations[self::FIELD_IMAGE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IMAGE][] = $xmlLocation;
        $this->image[] = $image;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $image
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setImage(array $image = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_IMAGE]);
        if ([] !== $this->image) {
            $this->_trackValuesRemoved(count($this->image));
            $this->image = [];
        }
        if ([] === $image) {
            return $this;
        }
        foreach($image as $v) {
            if ($v instanceof FHIRString) {
                $this->addImage($v, $xmlLocation);
            } else {
                $this->addImage(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getOther(): null|array
    {
        return $this->other;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $other
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addOther(null|string|FHIRStringPrimitive|FHIRString $other = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $other && !($other instanceof FHIRString)) {
            $other = new FHIRString($other);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_OTHER])) {
            $this->_primitiveXmlLocations[self::FIELD_OTHER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_OTHER][] = $xmlLocation;
        $this->other[] = $other;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the relative path of an additional non-page, non-image file that is
     * part of the IG - e.g. zip, jar and similar files that could be the target of a
     * hyperlink in a derived IG.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $other
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOther(array $other = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_OTHER]);
        if ([] !== $this->other) {
            $this->_trackValuesRemoved(count($this->other));
            $this->other = [];
        }
        if ([] === $other) {
            return $this;
        }
        foreach($other as $v) {
            if ($v instanceof FHIRString) {
                $this->addOther($v, $xmlLocation);
            } else {
                $this->addOther(new FHIRString($v), $xmlLocation);
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
        if ([] !== ($vs = $this->getPage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PAGE, $i)] = $fieldErrs;
                }
            }
        }
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest
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
        } else if (!($type instanceof FHIRImplementationGuideManifest)) {
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
            if (self::FIELD_RENDERING === $childName) {
                $type->setRendering(FHIRUrl::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->addResource(FHIRImplementationGuideResource1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PAGE === $childName) {
                $type->addPage(FHIRImplementationGuidePage1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMAGE === $childName) {
                $type->addImage(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OTHER === $childName) {
                $type->addOther(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_RENDERING])) {
            $pt = $type->getRendering();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RENDERING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRendering((string)$attributes[self::FIELD_RENDERING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMAGE])) {
            $type->addImage((string)$attributes[self::FIELD_IMAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OTHER])) {
            $type->addOther((string)$attributes[self::FIELD_OTHER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ImplementationGuideManifest', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RENDERING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRendering())) {
            $xw->writeAttribute(self::FIELD_RENDERING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IMAGE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getImage())) {
            $xw->writeAttribute(self::FIELD_IMAGE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getImage()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_IMAGE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OTHER] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getOther())) {
            $xw->writeAttribute(self::FIELD_OTHER, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getOther()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_OTHER, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_RENDERING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRendering())) {
            $xw->startElement(self::FIELD_RENDERING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getResource() as $v) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPage() as $v) {
            $xw->startElement(self::FIELD_PAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IMAGE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getImage())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_IMAGE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OTHER] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getOther())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_OTHER);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
        if (null !== ($v = $this->getRendering())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RENDERING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RENDERING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            $out->{self::FIELD_RESOURCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RESOURCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPage())) {
            $out->{self::FIELD_PAGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PAGE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_IMAGE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IMAGE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getOther())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_OTHER} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OTHER_EXT} = $exts;
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