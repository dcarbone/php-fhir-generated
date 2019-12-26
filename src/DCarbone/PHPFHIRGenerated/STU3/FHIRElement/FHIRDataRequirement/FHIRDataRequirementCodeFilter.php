<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirementCodeFilter
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementCodeFilter extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER;
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';
    const FIELD_VALUE_SET_STRING = 'valueSetString';
    const FIELD_VALUE_SET_STRING_EXT = '_valueSetString';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $path = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The codes for the code filter. Only one of valueSet, valueCode, valueCoding, or
     * valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[]
     */
    protected $valueCode = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode,
     * valueConding, or valueCodeableConcept may be specified. If values are given, the
     * filter will return only those data items for which the code-valued attribute
     * specified by the path has a value that is one of the specified CodeableConcepts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $valueCodeableConcept = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding,
     * or valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified Codings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $valueCoding = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $valueSetReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $valueSetString = null;

    /**
     * Validation map for fields in type DataRequirement.CodeFilter
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDataRequirementCodeFilter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementCodeFilter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            if (isset($data[self::FIELD_PATH])) {
                $value = $data[self::FIELD_PATH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) {
                $ext = $data[self::FIELD_PATH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE]) || isset($data[self::FIELD_VALUE_CODE_EXT])) {
            if (isset($data[self::FIELD_VALUE_CODE])) {
                $value = $data[self::FIELD_VALUE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) {
                $ext = $data[self::FIELD_VALUE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addValueCode($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addValueCode($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addValueCode(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addValueCode(new FHIRCode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            if (is_array($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                foreach($data[self::FIELD_VALUE_CODEABLE_CONCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addValueCodeableConcept($v);
                    } else {
                        $this->addValueCodeableConcept(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->addValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->addValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODING])) {
            if (is_array($data[self::FIELD_VALUE_CODING])) {
                foreach($data[self::FIELD_VALUE_CODING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addValueCoding($v);
                    } else {
                        $this->addValueCoding(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
                $this->addValueCoding($data[self::FIELD_VALUE_CODING]);
            } else {
                $this->addValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_REFERENCE])) {
            if ($data[self::FIELD_VALUE_SET_REFERENCE] instanceof FHIRReference) {
                $this->setValueSetReference($data[self::FIELD_VALUE_SET_REFERENCE]);
            } else {
                $this->setValueSetReference(new FHIRReference($data[self::FIELD_VALUE_SET_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_STRING]) || isset($data[self::FIELD_VALUE_SET_STRING_EXT])) {
            if (isset($data[self::FIELD_VALUE_SET_STRING])) {
                $value = $data[self::FIELD_VALUE_SET_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_SET_STRING_EXT]) && is_array($data[self::FIELD_VALUE_SET_STRING_EXT])) {
                $ext = $data[self::FIELD_VALUE_SET_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueSetString($value);
                } else if (is_array($value)) {
                    $this->setValueSetString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueSetString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueSetString(new FHIRString($ext));
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
        return "<DataRequirementCodeFilter{$xmlns}></DataRequirementCodeFilter>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The codes for the code filter. Only one of valueSet, valueCode, valueCoding, or
     * valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[]
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The codes for the code filter. Only one of valueSet, valueCode, valueCoding, or
     * valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $valueCode
     * @return static
     */
    public function addValueCode($valueCode = null)
    {
        if (null === $valueCode) {
            $this->valueCode = [];
            return $this;
        }
        if ($valueCode instanceof FHIRCode) {
            $this->valueCode[] = $valueCode;
            return $this;
        }
        $this->valueCode[] = new FHIRCode($valueCode);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The codes for the code filter. Only one of valueSet, valueCode, valueCoding, or
     * valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified codes.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[] $valueCode
     * @return static
     */
    public function setValueCode(array $valueCode = [])
    {
        $this->valueCode = [];
        if ([] === $valueCode) {
            return $this;
        }
        foreach($valueCode as $v) {
            if ($v instanceof FHIRCode) {
                $this->addValueCode($v);
            } else {
                $this->addValueCode(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode,
     * valueConding, or valueCodeableConcept may be specified. If values are given, the
     * filter will return only those data items for which the code-valued attribute
     * specified by the path has a value that is one of the specified CodeableConcepts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode,
     * valueConding, or valueCodeableConcept may be specified. If values are given, the
     * filter will return only those data items for which the code-valued attribute
     * specified by the path has a value that is one of the specified CodeableConcepts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function addValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept[] = $valueCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode,
     * valueConding, or valueCodeableConcept may be specified. If values are given, the
     * filter will return only those data items for which the code-valued attribute
     * specified by the path has a value that is one of the specified CodeableConcepts.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(array $valueCodeableConcept = [])
    {
        $this->valueCodeableConcept = [];
        if ([] === $valueCodeableConcept) {
            return $this;
        }
        foreach($valueCodeableConcept as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addValueCodeableConcept($v);
            } else {
                $this->addValueCodeableConcept(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding,
     * or valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified Codings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding,
     * or valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified Codings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $valueCoding
     * @return static
     */
    public function addValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding[] = $valueCoding;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding,
     * or valueCodeableConcept may be specified. If values are given, the filter will
     * return only those data items for which the code-valued attribute specified by
     * the path has a value that is one of the specified Codings.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $valueCoding
     * @return static
     */
    public function setValueCoding(array $valueCoding = [])
    {
        $this->valueCoding = [];
        if ([] === $valueCoding) {
            return $this;
        }
        foreach($valueCoding as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addValueCoding($v);
            } else {
                $this->addValueCoding(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getValueSetReference()
    {
        return $this->valueSetReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $valueSetReference
     * @return static
     */
    public function setValueSetReference(FHIRReference $valueSetReference = null)
    {
        $this->valueSetReference = $valueSetReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getValueSetString()
    {
        return $this->valueSetString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The valueset for the code filter. The valueSet and value elements are exclusive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $valueSetString
     * @return static
     */
    public function setValueSetString($valueSetString = null)
    {
        if (null === $valueSetString) {
            $this->valueSetString = null;
            return $this;
        }
        if ($valueSetString instanceof FHIRString) {
            $this->valueSetString = $valueSetString;
            return $this;
        }
        $this->valueSetString = new FHIRString($valueSetString);
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
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValueCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueCodeableConcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_CODEABLE_CONCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueCoding())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_CODING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSetString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODE])) {
            $v = $this->getValueCode();
            foreach($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODE])) {
                        $errs[self::FIELD_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODING])) {
            $v = $this->getValueCoding();
            foreach($validationRules[self::FIELD_VALUE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODING])) {
                        $errs[self::FIELD_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_REFERENCE])) {
            $v = $this->getValueSetReference();
            foreach($validationRules[self::FIELD_VALUE_SET_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_VALUE_SET_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_REFERENCE])) {
                        $errs[self::FIELD_VALUE_SET_REFERENCE] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_STRING])) {
            $v = $this->getValueSetString();
            foreach($validationRules[self::FIELD_VALUE_SET_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER, self::FIELD_VALUE_SET_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_STRING])) {
                        $errs[self::FIELD_VALUE_SET_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_STRING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
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
                throw new \DomainException(sprintf('FHIRDataRequirementCodeFilter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirementCodeFilter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDataRequirementCodeFilter;
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirementCodeFilter)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirementCodeFilter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter or null, %s seen.',
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
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($attributes->path)) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->path);
            } else {
                $type->setPath((string)$attributes->path);
            }
        }
        if (isset($children->valueCode)) {
            foreach($children->valueCode as $child) {
                $type->addValueCode(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($children->valueCodeableConcept)) {
            foreach($children->valueCodeableConcept as $child) {
                $type->addValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->valueCoding)) {
            foreach($children->valueCoding as $child) {
                $type->addValueCoding(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->valueSetReference)) {
            $type->setValueSetReference(FHIRReference::xmlUnserialize($children->valueSetReference));
        }
        if (isset($children->valueSetString)) {
            $type->setValueSetString(FHIRString::xmlUnserialize($children->valueSetString));
        }
        if (isset($attributes->valueSetString)) {
            $pt = $type->getValueSetString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueSetString);
            } else {
                $type->setValueSetString((string)$attributes->valueSetString);
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
        if (null !== ($v = $this->getPath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATH, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getValueCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getValueCodeableConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getValueCoding())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSetString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATH_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getValueCode())) {
            $a[self::FIELD_VALUE_CODE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUE_CODE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCode::FIELD_VALUE]) || array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_VALUE_CODE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUE_CODEABLE_CONCEPT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUE_CODING][] = $v;
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            $a[self::FIELD_VALUE_SET_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getValueSetString())) {
            $a[self::FIELD_VALUE_SET_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_SET_STRING_EXT] = $enc;
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