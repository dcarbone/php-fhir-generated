<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_CODE_FILTER = 'codeFilter';
    const FIELD_DATE_FILTER = 'dateFilter';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $type = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    protected null|array $profile = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $mustSupport = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    protected null|array $codeFilter = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    protected null|array $dateFilter = [];

    /**
     * Validation map for fields in type DataRequirement
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRDataRequirement Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRCode($ext));
            } else {
                $this->setType(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data) || array_key_exists(self::FIELD_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProfile(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProfile(new FHIRUri($iext));
                }
            } else {
                $this->addProfile(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_MUST_SUPPORT, $data) || array_key_exists(self::FIELD_MUST_SUPPORT_EXT, $data)) {
            $value = $data[self::FIELD_MUST_SUPPORT] ?? null;
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) ? $data[self::FIELD_MUST_SUPPORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addMustSupport($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addMustSupport($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addMustSupport(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addMustSupport(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addMustSupport(new FHIRString($iext));
                }
            } else {
                $this->addMustSupport(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE_FILTER, $data)) {
            if (is_array($data[self::FIELD_CODE_FILTER])) {
                foreach($data[self::FIELD_CODE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementCodeFilter) {
                        $this->addCodeFilter($v);
                    } else {
                        $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE_FILTER] instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($data[self::FIELD_CODE_FILTER]);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($data[self::FIELD_CODE_FILTER]));
            }
        }
        if (array_key_exists(self::FIELD_DATE_FILTER, $data)) {
            if (is_array($data[self::FIELD_DATE_FILTER])) {
                foreach($data[self::FIELD_DATE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementDateFilter) {
                        $this->addDateFilter($v);
                    } else {
                        $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_DATE_FILTER] instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($data[self::FIELD_DATE_FILTER]);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($data[self::FIELD_DATE_FILTER]));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $type
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $type && !($type instanceof FHIRCode)) {
            $type = new FHIRCode($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_xmlLocations[self::FIELD_TYPE])) {
            $this->_xmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_xmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    public function getProfile(): null|array
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $profile
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addProfile(null|string|FHIRUriPrimitive|FHIRUri $profile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $profile && !($profile instanceof FHIRUri)) {
            $profile = new FHIRUri($profile);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_PROFILE])) {
            $this->_xmlLocations[self::FIELD_PROFILE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_PROFILE]) {
            $this->_xmlLocations[self::FIELD_PROFILE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_PROFILE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[] $profile
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProfile(array $profile = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_PROFILE]);
        if ([] !== $this->profile) {
            $this->_trackValuesRemoved(count($this->profile));
            $this->profile = [];
        }
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProfile($v, $xmlLocation);
            } else {
                $this->addProfile(new FHIRUri($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getMustSupport(): null|array
    {
        return $this->mustSupport;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $mustSupport
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addMustSupport(null|string|FHIRStringPrimitive|FHIRString $mustSupport = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $mustSupport && !($mustSupport instanceof FHIRString)) {
            $mustSupport = new FHIRString($mustSupport);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_MUST_SUPPORT])) {
            $this->_xmlLocations[self::FIELD_MUST_SUPPORT] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_MUST_SUPPORT]) {
            $this->_xmlLocations[self::FIELD_MUST_SUPPORT][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_MUST_SUPPORT][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->mustSupport[] = $mustSupport;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $mustSupport
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMustSupport(array $mustSupport = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_MUST_SUPPORT]);
        if ([] !== $this->mustSupport) {
            $this->_trackValuesRemoved(count($this->mustSupport));
            $this->mustSupport = [];
        }
        if ([] === $mustSupport) {
            return $this;
        }
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->addMustSupport($v, $xmlLocation);
            } else {
                $this->addMustSupport(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter(): null|array
    {
        return $this->codeFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return static
     */
    public function addCodeFilter(null|FHIRDataRequirementCodeFilter $codeFilter = null): self
    {
        if (null === $codeFilter) {
            $codeFilter = new FHIRDataRequirementCodeFilter();
        }
        $this->_trackValueAdded();
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter ...$codeFilter
     * @return static
     */
    public function setCodeFilter(FHIRDataRequirementCodeFilter ...$codeFilter): self
    {
        if ([] !== $this->codeFilter) {
            $this->_trackValuesRemoved(count($this->codeFilter));
            $this->codeFilter = [];
        }
        if ([] === $codeFilter) {
            return $this;
        }
        foreach($codeFilter as $v) {
            $this->addCodeFilter($v);
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter(): null|array
    {
        return $this->dateFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return static
     */
    public function addDateFilter(null|FHIRDataRequirementDateFilter $dateFilter = null): self
    {
        if (null === $dateFilter) {
            $dateFilter = new FHIRDataRequirementDateFilter();
        }
        $this->_trackValueAdded();
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter ...$dateFilter
     * @return static
     */
    public function setDateFilter(FHIRDataRequirementDateFilter ...$dateFilter): self
    {
        if ([] !== $this->dateFilter) {
            $this->_trackValuesRemoved(count($this->dateFilter));
            $this->dateFilter = [];
        }
        if ([] === $dateFilter) {
            return $this;
        }
        foreach($dateFilter as $v) {
            $this->addDateFilter($v);
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MUST_SUPPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE_FILTER])) {
            $v = $this->getCodeFilter();
            foreach($validationRules[self::FIELD_CODE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_CODE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_FILTER])) {
                        $errs[self::FIELD_CODE_FILTER] = [];
                    }
                    $errs[self::FIELD_CODE_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_FILTER])) {
            $v = $this->getDateFilter();
            foreach($validationRules[self::FIELD_DATE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_DATE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_FILTER])) {
                        $errs[self::FIELD_DATE_FILTER] = [];
                    }
                    $errs[self::FIELD_DATE_FILTER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
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
        } else if (!($type instanceof FHIRDataRequirement)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->addProfile(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MUST_SUPPORT === $childName) {
                $type->addMustSupport(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE_FILTER === $childName) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_FILTER === $childName) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $type->addProfile((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            $type->addMustSupport((string)$attributes[self::FIELD_MUST_SUPPORT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'DataRequirement', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PROFILE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getProfile())) {
            $xw->writeAttribute(self::FIELD_PROFILE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getProfile()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PROFILE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MUST_SUPPORT] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getMustSupport())) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getMustSupport()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PROFILE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_MUST_SUPPORT] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_MUST_SUPPORT);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getCodeFilter() as $v) {
            $xw->startElement(self::FIELD_CODE_FILTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDateFilter() as $v) {
            $xw->startElement(self::FIELD_DATE_FILTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PROFILE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
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
                $out->{self::FIELD_MUST_SUPPORT} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MUST_SUPPORT_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            $out->{self::FIELD_CODE_FILTER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE_FILTER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            $out->{self::FIELD_DATE_FILTER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DATE_FILTER}[] = $v;
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