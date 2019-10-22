<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:51+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CODE_FILTER = 'codeFilter';
    const FIELD_DATE_FILTER = 'dateFilter';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    private $codeFilter = [];
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    private $dateFilter = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $mustSupport = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    private $profile = [];
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    private $type = null;

    /**
     * FHIRDataRequirement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE_FILTER])) {
            if (is_array($data[self::FIELD_CODE_FILTER])) {
                foreach($data[self::FIELD_CODE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementCodeFilter) {
                        $this->addCodeFilter($v);
                    } else {
                        $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
                    }
                }
            } else if ($data[self::FIELD_CODE_FILTER] instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($data[self::FIELD_CODE_FILTER]);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($data[self::FIELD_CODE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_DATE_FILTER])) {
            if (is_array($data[self::FIELD_DATE_FILTER])) {
                foreach($data[self::FIELD_DATE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementDateFilter) {
                        $this->addDateFilter($v);
                    } else {
                        $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
                    }
                }
            } else if ($data[self::FIELD_DATE_FILTER] instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($data[self::FIELD_DATE_FILTER]);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($data[self::FIELD_DATE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT])) {
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT]))
                ? $data[self::FIELD_MUST_SUPPORT_EXT]
                : null;
            if (is_array($data[self::FIELD_MUST_SUPPORT])) {
                foreach($data[self::FIELD_MUST_SUPPORT] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addMustSupport($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addMustSupport(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_MUST_SUPPORT] instanceof FHIRString) {
                $this->addMustSupport($data[self::FIELD_MUST_SUPPORT]);
            } elseif ($ext && is_scalar($data[self::FIELD_MUST_SUPPORT])) {
                $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MUST_SUPPORT]] + $ext));
            } else {
                $this->addMustSupport(new FHIRString($data[self::FIELD_MUST_SUPPORT]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT]))
                ? $data[self::FIELD_PROFILE_EXT]
                : null;
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addProfile($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addProfile(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_PROFILE] instanceof FHIRUri) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROFILE])) {
                $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_PROFILE]] + $ext));
            } else {
                $this->addProfile(new FHIRUri($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRCode) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRCode($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<DataRequirement{$xmlns}></DataRequirement>";
    }


    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter()
    {
        return $this->codeFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function addCodeFilter(FHIRDataRequirementCodeFilter $codeFilter = null)
    {
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] $codeFilter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function setCodeFilter(array $codeFilter = [])
    {
        $this->codeFilter = [];
        if ([] === $codeFilter) {
            return $this;
        }
        foreach($codeFilter as $v) {
            if ($v instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($v);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function addDateFilter(FHIRDataRequirementDateFilter $dateFilter = null)
    {
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] $dateFilter
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function setDateFilter(array $dateFilter = [])
    {
        $this->dateFilter = [];
        if ([] === $dateFilter) {
            return $this;
        }
        foreach($dateFilter as $v) {
            if ($v instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($v);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $mustSupport
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function addMustSupport($mustSupport = null)
    {
        if (null === $mustSupport) {
            $this->mustSupport = [];
            return $this;
        }
        if ($mustSupport instanceof FHIRString) {
            $this->mustSupport[] = $mustSupport;
            return $this;
        }
        $this->mustSupport[] = new FHIRString($mustSupport);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function setMustSupport(array $mustSupport = [])
    {
        $this->mustSupport = [];
        if ([] === $mustSupport) {
            return $this;
        }
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->addMustSupport($v);
            } else {
                $this->addMustSupport(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $profile
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function addProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = [];
            return $this;
        }
        if ($profile instanceof FHIRUri) {
            $this->profile[] = $profile;
            return $this;
        }
        $this->profile[] = new FHIRUri($profile);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[] $profile
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
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
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function setType($type = null)
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
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
                throw new \DomainException(sprintf('FHIRDataRequirement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDataRequirement;
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirement)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->codeFilter)) {
            foreach($children->codeFilter as $child) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->dateFilter)) {
            foreach($children->dateFilter as $child) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($child));
            }
        }
        if (isset($attributes->mustSupport)) {
            $type->addMustSupport((string)$attributes->mustSupport);
        }
        if (isset($children->mustSupport)) {
            foreach($children->mustSupport as $child) {
                $type->addMustSupport(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->profile)) {
            $type->addProfile((string)$attributes->profile);
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
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

        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCodeFilter())) {
            $a[self::FIELD_CODE_FILTER] = $vs;
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            $a[self::FIELD_DATE_FILTER] = $vs;
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MUST_SUPPORT][] = $v->getValue();
                $a[self::FIELD_MUST_SUPPORT_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROFILE][] = $v->getValue();
                $a[self::FIELD_PROFILE_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $a[self::FIELD_TYPE_EXT] = $v;
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