<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRHumanName
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRHumanName extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HUMAN_NAME;

    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_FAMILY = 'family';
    const FIELD_FAMILY_EXT = '_family';
    const FIELD_GIVEN = 'given';
    const FIELD_GIVEN_EXT = '_given';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_SUFFIX = 'suffix';
    const FIELD_SUFFIX_EXT = '_suffix';
    const FIELD_PERIOD = 'period';

    /**
     * The use of a human name.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNameUse
     */
    protected null|FHIRNameUse $use = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $family = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected null|array $given = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected null|array $prefix = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected null|array $suffix = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;

    /**
     * Validation map for fields in type HumanName
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRHumanName Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_USE, $data) || array_key_exists(self::FIELD_USE_EXT, $data)) {
            $value = $data[self::FIELD_USE] ?? null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $data[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRNameUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRNameUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRNameUse([FHIRNameUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIRNameUse($ext));
            } else {
                $this->setUse(new FHIRNameUse(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT, $data) || array_key_exists(self::FIELD_TEXT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            } else {
                $this->setText(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_FAMILY, $data) || array_key_exists(self::FIELD_FAMILY_EXT, $data)) {
            $value = $data[self::FIELD_FAMILY] ?? null;
            $ext = (isset($data[self::FIELD_FAMILY_EXT]) && is_array($data[self::FIELD_FAMILY_EXT])) ? $data[self::FIELD_FAMILY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFamily($value);
                } else if (is_array($value)) {
                    $this->setFamily(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFamily(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFamily(new FHIRString($ext));
            } else {
                $this->setFamily(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_GIVEN, $data) || array_key_exists(self::FIELD_GIVEN_EXT, $data)) {
            $value = $data[self::FIELD_GIVEN] ?? null;
            $ext = (isset($data[self::FIELD_GIVEN_EXT]) && is_array($data[self::FIELD_GIVEN_EXT])) ? $data[self::FIELD_GIVEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addGiven($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addGiven($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addGiven(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addGiven(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGiven(new FHIRString($iext));
                }
            } else {
                $this->addGiven(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PREFIX, $data) || array_key_exists(self::FIELD_PREFIX_EXT, $data)) {
            $value = $data[self::FIELD_PREFIX] ?? null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $data[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPrefix($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPrefix($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPrefix(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPrefix(new FHIRString($iext));
                }
            } else {
                $this->addPrefix(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SUFFIX, $data) || array_key_exists(self::FIELD_SUFFIX_EXT, $data)) {
            $value = $data[self::FIELD_SUFFIX] ?? null;
            $ext = (isset($data[self::FIELD_SUFFIX_EXT]) && is_array($data[self::FIELD_SUFFIX_EXT])) ? $data[self::FIELD_SUFFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSuffix($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSuffix($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSuffix(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSuffix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSuffix(new FHIRString($iext));
                }
            } else {
                $this->addSuffix(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PERIOD, $data)) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
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
     * The use of a human name.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNameUse
     */
    public function getUse(): null|FHIRNameUse
    {
        return $this->use;
    }

    /**
     * The use of a human name.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNameUse $use
     * @return static
     */
    public function setUse(null|FHIRNameUse $use = null): self
    {
        if (null === $use) {
            $use = new FHIRNameUse();
        }
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $text
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        if (!isset($this->_xmlLocations[self::FIELD_TEXT])) {
            $this->_xmlLocations[self::FIELD_TEXT] = [];
        }
        $this->_xmlLocations[self::FIELD_TEXT][0] = $xmlLocation;
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getFamily(): null|FHIRString
    {
        return $this->family;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $family
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFamily(null|string|FHIRStringPrimitive|FHIRString $family = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $family && !($family instanceof FHIRString)) {
            $family = new FHIRString($family);
        }
        $this->_trackValueSet($this->family, $family);
        if (!isset($this->_xmlLocations[self::FIELD_FAMILY])) {
            $this->_xmlLocations[self::FIELD_FAMILY] = [];
        }
        $this->_xmlLocations[self::FIELD_FAMILY][0] = $xmlLocation;
        $this->family = $family;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getGiven(): null|array
    {
        return $this->given;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $given
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addGiven(null|string|FHIRStringPrimitive|FHIRString $given = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $given && !($given instanceof FHIRString)) {
            $given = new FHIRString($given);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_GIVEN])) {
            $this->_xmlLocations[self::FIELD_GIVEN] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_GIVEN]) {
            $this->_xmlLocations[self::FIELD_GIVEN][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_GIVEN][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->given[] = $given;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $given
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGiven(array $given = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_GIVEN]);
        if ([] !== $this->given) {
            $this->_trackValuesRemoved(count($this->given));
            $this->given = [];
        }
        if ([] === $given) {
            return $this;
        }
        foreach($given as $v) {
            if ($v instanceof FHIRString) {
                $this->addGiven($v, $xmlLocation);
            } else {
                $this->addGiven(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getPrefix(): null|array
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $prefix
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_PREFIX])) {
            $this->_xmlLocations[self::FIELD_PREFIX] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_PREFIX]) {
            $this->_xmlLocations[self::FIELD_PREFIX][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_PREFIX][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $prefix
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPrefix(array $prefix = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_PREFIX]);
        if ([] !== $this->prefix) {
            $this->_trackValuesRemoved(count($this->prefix));
            $this->prefix = [];
        }
        if ([] === $prefix) {
            return $this;
        }
        foreach($prefix as $v) {
            if ($v instanceof FHIRString) {
                $this->addPrefix($v, $xmlLocation);
            } else {
                $this->addPrefix(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getSuffix(): null|array
    {
        return $this->suffix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $suffix
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSuffix(null|string|FHIRStringPrimitive|FHIRString $suffix = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $suffix && !($suffix instanceof FHIRString)) {
            $suffix = new FHIRString($suffix);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_SUFFIX])) {
            $this->_xmlLocations[self::FIELD_SUFFIX] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_SUFFIX]) {
            $this->_xmlLocations[self::FIELD_SUFFIX][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_SUFFIX][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->suffix[] = $suffix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $suffix
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSuffix(array $suffix = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_SUFFIX]);
        if ([] !== $this->suffix) {
            $this->_trackValuesRemoved(count($this->suffix));
            $this->suffix = [];
        }
        if ([] === $suffix) {
            return $this;
        }
        foreach($suffix as $v) {
            if ($v instanceof FHIRString) {
                $this->addSuffix($v, $xmlLocation);
            } else {
                $this->addSuffix(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
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
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFamily())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrefix())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PREFIX, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUFFIX, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAMILY])) {
            $v = $this->getFamily();
            foreach($validationRules[self::FIELD_FAMILY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_FAMILY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAMILY])) {
                        $errs[self::FIELD_FAMILY] = [];
                    }
                    $errs[self::FIELD_FAMILY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GIVEN])) {
            $v = $this->getGiven();
            foreach($validationRules[self::FIELD_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GIVEN])) {
                        $errs[self::FIELD_GIVEN] = [];
                    }
                    $errs[self::FIELD_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUFFIX])) {
            $v = $this->getSuffix();
            foreach($validationRules[self::FIELD_SUFFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_SUFFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUFFIX])) {
                        $errs[self::FIELD_SUFFIX] = [];
                    }
                    $errs[self::FIELD_SUFFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HUMAN_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
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
        } else if (!($type instanceof FHIRHumanName)) {
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
            if (self::FIELD_USE === $childName) {
                $type->setUse(FHIRNameUse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FAMILY === $childName) {
                $type->setFamily(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_GIVEN === $childName) {
                $type->addGiven(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PREFIX === $childName) {
                $type->addPrefix(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUFFIX === $childName) {
                $type->addSuffix(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERIOD === $childName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FAMILY])) {
            $pt = $type->getFamily();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FAMILY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFamily((string)$attributes[self::FIELD_FAMILY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GIVEN])) {
            $type->addGiven((string)$attributes[self::FIELD_GIVEN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PREFIX])) {
            $type->addPrefix((string)$attributes[self::FIELD_PREFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUFFIX])) {
            $type->addSuffix((string)$attributes[self::FIELD_SUFFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'HumanName', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->writeAttribute(self::FIELD_TEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_FAMILY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFamily())) {
            $xw->writeAttribute(self::FIELD_FAMILY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_GIVEN] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getGiven())) {
            $xw->writeAttribute(self::FIELD_GIVEN, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getGiven()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_GIVEN, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PREFIX] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getPrefix())) {
            $xw->writeAttribute(self::FIELD_PREFIX, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getPrefix()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PREFIX, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SUFFIX] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSuffix())) {
            $xw->writeAttribute(self::FIELD_SUFFIX, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSuffix()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SUFFIX, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getUse())) {
            $xw->startElement(self::FIELD_USE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->startElement(self::FIELD_TEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FAMILY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFamily())) {
            $xw->startElement(self::FIELD_FAMILY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_GIVEN] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getGiven())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_GIVEN);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_PREFIX] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getPrefix())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PREFIX);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_SUFFIX] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSuffix())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SUFFIX);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $xw->startElement(self::FIELD_PERIOD);
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
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRNameUse::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFamily())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FAMILY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FAMILY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
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
                $out->{self::FIELD_GIVEN} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GIVEN_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getPrefix())) {
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
                $out->{self::FIELD_PREFIX} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFIX_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
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
                $out->{self::FIELD_SUFFIX} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUFFIX_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
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