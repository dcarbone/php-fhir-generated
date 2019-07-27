<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:55+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRHumanName
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
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

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $family = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Given name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $given = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $prefix = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $suffix = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $text = null;

    /**
     * The use of a human name.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    private $use = null;

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
        if (isset($data[self::FIELD_FAMILY])) {
            $ext = (isset($data[self::FIELD_FAMILY_EXT]) && is_array($data[self::FIELD_FAMILY_EXT]))
                ? $data[self::FIELD_FAMILY_EXT]
                : null;
            if ($data[self::FIELD_FAMILY] instanceof FHIRString) {
                $this->setFamily($data[self::FIELD_FAMILY]);
            } elseif ($ext && is_scalar($data[self::FIELD_FAMILY])) {
                $this->setFamily(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_FAMILY]] + $ext));
            } else {
                $this->setFamily(new FHIRString($data[self::FIELD_FAMILY]));
            }
        }
        if (isset($data[self::FIELD_GIVEN])) {
            $ext = (isset($data[self::FIELD_GIVEN_EXT]) && is_array($data[self::FIELD_GIVEN_EXT]))
                ? $data[self::FIELD_GIVEN_EXT]
                : null;
            if (is_array($data[self::FIELD_GIVEN])) {
                foreach($data[self::FIELD_GIVEN] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addGiven($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addGiven(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_GIVEN] instanceof FHIRString) {
                $this->addGiven($data[self::FIELD_GIVEN]);
            } elseif ($ext && is_scalar($data[self::FIELD_GIVEN])) {
                $this->addGiven(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_GIVEN]] + $ext));
            } else {
                $this->addGiven(new FHIRString($data[self::FIELD_GIVEN]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PREFIX])) {
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT]))
                ? $data[self::FIELD_PREFIX_EXT]
                : null;
            if (is_array($data[self::FIELD_PREFIX])) {
                foreach($data[self::FIELD_PREFIX] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addPrefix($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPrefix(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_PREFIX] instanceof FHIRString) {
                $this->addPrefix($data[self::FIELD_PREFIX]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFIX])) {
                $this->addPrefix(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PREFIX]] + $ext));
            } else {
                $this->addPrefix(new FHIRString($data[self::FIELD_PREFIX]));
            }
        }
        if (isset($data[self::FIELD_SUFFIX])) {
            $ext = (isset($data[self::FIELD_SUFFIX_EXT]) && is_array($data[self::FIELD_SUFFIX_EXT]))
                ? $data[self::FIELD_SUFFIX_EXT]
                : null;
            if (is_array($data[self::FIELD_SUFFIX])) {
                foreach($data[self::FIELD_SUFFIX] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addSuffix($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSuffix(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_SUFFIX] instanceof FHIRString) {
                $this->addSuffix($data[self::FIELD_SUFFIX]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUFFIX])) {
                $this->addSuffix(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUFFIX]] + $ext));
            } else {
                $this->addSuffix(new FHIRString($data[self::FIELD_SUFFIX]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT]))
                ? $data[self::FIELD_TEXT_EXT]
                : null;
            if ($data[self::FIELD_TEXT] instanceof FHIRString) {
                $this->setText($data[self::FIELD_TEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT])) {
                $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT]] + $ext));
            } else {
                $this->setText(new FHIRString($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            if ($data[self::FIELD_USE] instanceof FHIRNameUse) {
                $this->setUse($data[self::FIELD_USE]);
            } else {
                $this->setUse(new FHIRNameUse($data[self::FIELD_USE]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea)
     * the family name of a son is the first name of his father.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $family
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Given name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Given name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $given
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function addGiven($given = null)
    {
        if (null === $given) {
            $this->given = null;
            return $this;
        }
        if ($given instanceof FHIRString) {
            $this->given = $given;
            return $this;
        }
        $this->given = new FHIRString($given);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Given name.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $given
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time when this name was valid for the named person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $prefix
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function addPrefix($prefix = null)
    {
        if (null === $prefix) {
            $this->prefix = null;
            return $this;
        }
        if ($prefix instanceof FHIRString) {
            $this->prefix = $prefix;
            return $this;
        }
        $this->prefix = new FHIRString($prefix);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the start of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $prefix
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $suffix
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function addSuffix($suffix = null)
    {
        if (null === $suffix) {
            $this->suffix = null;
            return $this;
        }
        if ($suffix instanceof FHIRString) {
            $this->suffix = $suffix;
            return $this;
        }
        $this->suffix = new FHIRString($suffix);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Part of the name that is acquired as a title due to academic, legal, employment
     * or nobility status, etc. and that appears at the end of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $suffix
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI.
     * This may be provided instead of or as well as the specific parts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The use of a human name.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for this name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNameUse $use
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function setUse(FHIRNameUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName
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
                throw new \DomainException(sprintf('FHIRHumanName::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRHumanName::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize(\$sxe, new FHIRHumanName);
        } elseif (!is_object($type) || !($type instanceof FHIRHumanName)) {
            throw new \RuntimeException(sprintf(
                'FHIRHumanName::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRHumanName or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->family)) {
            $type->setFamily((string)$attributes->family);
        }
        if (isset($children->family)) {
            $type->setFamily(FHIRString::xmlUnserialize($children->family));
        }
        if (isset($attributes->given)) {
            $type->addGiven((string)$attributes->given);
        }
        if (isset($children->given)) {
            foreach($children->given as $child) {
                $type->addGiven(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($attributes->prefix)) {
            $type->addPrefix((string)$attributes->prefix);
        }
        if (isset($children->prefix)) {
            foreach($children->prefix as $child) {
                $type->addPrefix(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->suffix)) {
            $type->addSuffix((string)$attributes->suffix);
        }
        if (isset($children->suffix)) {
            foreach($children->suffix as $child) {
                $type->addSuffix(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->text)) {
            $type->setText((string)$attributes->text);
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($children->use)) {
            $type->setUse(FHIRNameUse::xmlUnserialize($children->use));
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
            $sxe = new \SimpleXMLElement('<HumanName xmlns="http://hl7.org/fhir"></HumanName>');
        }
        if (null !== ($v = $this->getFamily())) {
            $sxe->addAttribute(self::FIELD_FAMILY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FAMILY));
            }
        }
        if ([] !== ($vs = $this->getGiven())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_GIVEN, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_GIVEN));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_GIVEN));
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }
        if ([] !== ($vs = $this->getPrefix())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PREFIX, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX));
                }
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_SUFFIX, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_SUFFIX));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_SUFFIX));
                }
            }
        }
        if (null !== ($v = $this->getText())) {
            $sxe->addAttribute(self::FIELD_TEXT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT));
            }
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE));
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
            $a[self::FIELD_FAMILY] = (string)$v;
            $a[self::FIELD_FAMILY_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGiven())) {
            $a[self::FIELD_GIVEN] = [];
            $a[self::FIELD_GIVEN_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_GIVEN][] = (string)$v;
                $a[self::FIELD_GIVEN_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPrefix())) {
            $a[self::FIELD_PREFIX] = [];
            $a[self::FIELD_PREFIX_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PREFIX][] = (string)$v;
                $a[self::FIELD_PREFIX_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSuffix())) {
            $a[self::FIELD_SUFFIX] = [];
            $a[self::FIELD_SUFFIX_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_SUFFIX][] = (string)$v;
                $a[self::FIELD_SUFFIX_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = (string)$v;
            $a[self::FIELD_TEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v;
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