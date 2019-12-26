<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_FAMILY = 'family';
    const FIELD_FAMILY_EXT = '_family';
    const FIELD_GIVEN = 'given';
    const FIELD_GIVEN_EXT = '_given';
    const FIELD_PERIOD = 'period';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_SUFFIX = 'suffix';
    const FIELD_SUFFIX_EXT = '_suffix';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $family = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Given name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $given = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $prefix = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $suffix = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * The use of a human name.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNameUse
     */
    protected $use = null;

    /**
     * Validation map for fields in type HumanName
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRHumanName Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FAMILY]) || isset($data[self::FIELD_FAMILY_EXT])) {
            if (isset($data[self::FIELD_FAMILY])) {
                $value = $data[self::FIELD_FAMILY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FAMILY_EXT]) && is_array($data[self::FIELD_FAMILY_EXT])) {
                $ext = $data[self::FIELD_FAMILY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFamily($value);
                } else if (is_array($value)) {
                    $this->setFamily(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFamily(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFamily(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GIVEN]) || isset($data[self::FIELD_GIVEN_EXT])) {
            if (isset($data[self::FIELD_GIVEN])) {
                $value = $data[self::FIELD_GIVEN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GIVEN_EXT]) && is_array($data[self::FIELD_GIVEN_EXT])) {
                $ext = $data[self::FIELD_GIVEN_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addGiven(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PREFIX]) || isset($data[self::FIELD_PREFIX_EXT])) {
            if (isset($data[self::FIELD_PREFIX])) {
                $value = $data[self::FIELD_PREFIX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) {
                $ext = $data[self::FIELD_PREFIX_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPrefix(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SUFFIX]) || isset($data[self::FIELD_SUFFIX_EXT])) {
            if (isset($data[self::FIELD_SUFFIX])) {
                $value = $data[self::FIELD_SUFFIX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUFFIX_EXT]) && is_array($data[self::FIELD_SUFFIX_EXT])) {
                $ext = $data[self::FIELD_SUFFIX_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSuffix(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_USE]) || isset($data[self::FIELD_USE_EXT])) {
            if (isset($data[self::FIELD_USE])) {
                $value = $data[self::FIELD_USE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) {
                $ext = $data[self::FIELD_USE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRNameUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRNameUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRNameUse([FHIRNameUse::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUse(new FHIRNameUse($ext));
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
        return "<HumanName{$xmlns}></HumanName>";
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
    public function getFamily()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $family
     * @return static
     */
    public function setFamily($family = null)
    {
        if (null === $family) {
            $this->family = null;
            return $this;
        }
        if ($family instanceof FHIRString) {
            $this->family = $family;
            return $this;
        }
        $this->family = new FHIRString($family);
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
    public function getGiven()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $given
     * @return static
     */
    public function addGiven($given = null)
    {
        if (null === $given) {
            $this->given = [];
            return $this;
        }
        if ($given instanceof FHIRString) {
            $this->given[] = $given;
            return $this;
        }
        $this->given[] = new FHIRString($given);
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
     * @return static
     */
    public function setGiven(array $given = [])
    {
        $this->given = [];
        if ([] === $given) {
            return $this;
        }
        foreach($given as $v) {
            if ($v instanceof FHIRString) {
                $this->addGiven($v);
            } else {
                $this->addGiven(new FHIRString($v));
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
    public function getPeriod()
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
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
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
    public function getPrefix()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function addPrefix($prefix = null)
    {
        if (null === $prefix) {
            $this->prefix = [];
            return $this;
        }
        if ($prefix instanceof FHIRString) {
            $this->prefix[] = $prefix;
            return $this;
        }
        $this->prefix[] = new FHIRString($prefix);
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
     * @return static
     */
    public function setPrefix(array $prefix = [])
    {
        $this->prefix = [];
        if ([] === $prefix) {
            return $this;
        }
        foreach($prefix as $v) {
            if ($v instanceof FHIRString) {
                $this->addPrefix($v);
            } else {
                $this->addPrefix(new FHIRString($v));
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
    public function getSuffix()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $suffix
     * @return static
     */
    public function addSuffix($suffix = null)
    {
        if (null === $suffix) {
            $this->suffix = [];
            return $this;
        }
        if ($suffix instanceof FHIRString) {
            $this->suffix[] = $suffix;
            return $this;
        }
        $this->suffix[] = new FHIRString($suffix);
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
     * @return static
     */
    public function setSuffix(array $suffix = [])
    {
        $this->suffix = [];
        if ([] === $suffix) {
            return $this;
        }
        foreach($suffix as $v) {
            if ($v instanceof FHIRString) {
                $this->addSuffix($v);
            } else {
                $this->addSuffix(new FHIRString($v));
            }
        }
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
    public function getText()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * The use of a human name.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNameUse
     */
    public function getUse()
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
    public function setUse(FHIRNameUse $use = null)
    {
        $this->use = $use;
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
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
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
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
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
                throw new \DomainException(sprintf('FHIRHumanName::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRHumanName::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRHumanName;
        } elseif (!is_object($type) || !($type instanceof FHIRHumanName)) {
            throw new \RuntimeException(sprintf(
                'FHIRHumanName::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName or null, %s seen.',
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
        if (isset($children->family)) {
            $type->setFamily(FHIRString::xmlUnserialize($children->family));
        }
        if (isset($attributes->family)) {
            $pt = $type->getFamily();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->family);
            } else {
                $type->setFamily((string)$attributes->family);
            }
        }
        if (isset($children->given)) {
            foreach($children->given as $child) {
                $type->addGiven(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->prefix)) {
            foreach($children->prefix as $child) {
                $type->addPrefix(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->suffix)) {
            foreach($children->suffix as $child) {
                $type->addSuffix(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        if (isset($children->use)) {
            $type->setUse(FHIRNameUse::xmlUnserialize($children->use));
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
        if (null !== ($v = $this->getFamily())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FAMILY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GIVEN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPrefix())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUFFIX, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getFamily())) {
            $a[self::FIELD_FAMILY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_FAMILY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
            $a[self::FIELD_GIVEN] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GIVEN][] = $v->getValue();
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
                $a[self::FIELD_GIVEN_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPrefix())) {
            $a[self::FIELD_PREFIX] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PREFIX][] = $v->getValue();
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
                $a[self::FIELD_PREFIX_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            $a[self::FIELD_SUFFIX] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUFFIX][] = $v->getValue();
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
                $a[self::FIELD_SUFFIX_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRNameUse::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRNameUse::FIELD_VALUE]);
                $a[self::FIELD_USE_EXT] = $enc;
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