<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetParameter
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetParameter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER;

    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $valueString = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $valueBoolean = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $valueInteger = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $valueDecimal = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $valueUri = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $valueCode = null;

    /**
     * Validation map for fields in type ValueSet.Parameter
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRValueSetParameter Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            } else {
                $this->setName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_STRING, $data) || array_key_exists(self::FIELD_VALUE_STRING_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) ? $data[self::FIELD_VALUE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
            } else {
                $this->setValueString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_BOOLEAN, $data) || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])) ? $data[self::FIELD_VALUE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueBoolean(new FHIRBoolean($ext));
            } else {
                $this->setValueBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT])) ? $data[self::FIELD_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setValueInteger($value);
                } else if (is_array($value)) {
                    $this->setValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueInteger(new FHIRInteger($ext));
            } else {
                $this->setValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDecimal(new FHIRDecimal($ext));
            } else {
                $this->setValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_URI, $data) || array_key_exists(self::FIELD_VALUE_URI_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_URI] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT])) ? $data[self::FIELD_VALUE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setValueUri($value);
                } else if (is_array($value)) {
                    $this->setValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueUri(new FHIRUri($ext));
            } else {
                $this->setValueUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CODE, $data) || array_key_exists(self::FIELD_VALUE_CODE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) ? $data[self::FIELD_VALUE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setValueCode($value);
                } else if (is_array($value)) {
                    $this->setValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueCode(new FHIRCode($ext));
            } else {
                $this->setValueCode(new FHIRCode(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NAME][0] = $xmlLocation;
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getValueString(): null|FHIRString
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $valueString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueString && !($valueString instanceof FHIRString)) {
            $valueString = new FHIRString($valueString);
        }
        $this->_trackValueSet($this->valueString, $valueString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING][0] = $xmlLocation;
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $valueBoolean
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueBoolean && !($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        $this->_trackValueSet($this->valueBoolean, $valueBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN][0] = $xmlLocation;
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getValueInteger(): null|FHIRInteger
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $valueInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueInteger && !($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        $this->_trackValueSet($this->valueInteger, $valueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER][0] = $xmlLocation;
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal(): null|FHIRDecimal
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $valueDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueDecimal && !($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        $this->_trackValueSet($this->valueDecimal, $valueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL][0] = $xmlLocation;
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getValueUri(): null|FHIRUri
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $valueUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueUri(null|string|FHIRUriPrimitive|FHIRUri $valueUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueUri && !($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri($valueUri);
        }
        $this->_trackValueSet($this->valueUri, $valueUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_URI][0] = $xmlLocation;
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value of the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getValueCode(): null|FHIRCode
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value of the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $valueCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueCode(null|string|FHIRCodePrimitive|FHIRCode $valueCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueCode && !($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode($valueCode);
        }
        $this->_trackValueSet($this->valueCode, $valueCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE][0] = $xmlLocation;
        $this->valueCode = $valueCode;
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BOOLEAN])) {
            $v = $this->getValueBoolean();
            foreach($validationRules[self::FIELD_VALUE_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_INTEGER])) {
            $v = $this->getValueInteger();
            foreach($validationRules[self::FIELD_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_INTEGER])) {
                        $errs[self::FIELD_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DECIMAL])) {
            $v = $this->getValueDecimal();
            foreach($validationRules[self::FIELD_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DECIMAL])) {
                        $errs[self::FIELD_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_URI])) {
            $v = $this->getValueUri();
            foreach($validationRules[self::FIELD_VALUE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_URI])) {
                        $errs[self::FIELD_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODE])) {
            $v = $this->getValueCode();
            foreach($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODE])) {
                        $errs[self::FIELD_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter
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
        } else if (!($type instanceof FHIRValueSetParameter)) {
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
            if (self::FIELD_NAME === $childName) {
                $type->setName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_STRING === $childName) {
                $type->setValueString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_BOOLEAN === $childName) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_INTEGER === $childName) {
                $type->setValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_DECIMAL === $childName) {
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_URI === $childName) {
                $type->setValueUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_CODE === $childName) {
                $type->setValueCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueString((string)$attributes[self::FIELD_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER])) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInteger((string)$attributes[self::FIELD_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDecimal((string)$attributes[self::FIELD_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_URI])) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUri((string)$attributes[self::FIELD_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CODE])) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueCode((string)$attributes[self::FIELD_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
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
            $xw->openRootNode($config, 'ValueSetParameter', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueString())) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueBoolean())) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueInteger())) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueDecimal())) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueUri())) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueCode())) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueString())) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueBoolean())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueInteger())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueDecimal())) {
            $xw->startElement(self::FIELD_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueUri())) {
            $xw->startElement(self::FIELD_VALUE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueCode())) {
            $xw->startElement(self::FIELD_VALUE_CODE);
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
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_CODE_EXT} = $ext;
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