<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRDataRequirementCodeFilter extends FHIRElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER;

    /* class_default.php:47 */
    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_VALUE_SET_STRING = 'valueSetString';
    public const FIELD_VALUE_SET_STRING_EXT = '_valueSetString';
    public const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';
    public const FIELD_VALUE_CODE = 'valueCode';
    public const FIELD_VALUE_CODE_EXT = '_valueCode';
    public const FIELD_VALUE_CODING = 'valueCoding';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_PATH => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_SET_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $path;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $valueSetString;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $valueSetReference;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[] 
     */
    protected array $valueCode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $valueCoding;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $valueCodeableConcept;

    /* constructor.php:63 */
    /**
     * FHIRDataRequirementCodeFilter Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $valueSetString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $valueSetReference
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[] $valueCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $valueCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $valueCodeableConcept
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|string|FHIRStringPrimitive|FHIRString $valueSetString = null,
                                null|FHIRReference $valueSetReference = null,
                                null|iterable $valueCode = null,
                                null|iterable $valueCoding = null,
                                null|iterable $valueCodeableConcept = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $path) {
            $this->setPath($path);
        }
        if (null !== $valueSetString) {
            $this->setValueSetString($valueSetString);
        }
        if (null !== $valueSetReference) {
            $this->setValueSetReference($valueSetReference);
        }
        if (null !== $valueCode) {
            $this->setValueCode(...$valueCode);
        }
        if (null !== $valueCoding) {
            $this->setValueCoding(...$valueCoding);
        }
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept(...$valueCodeableConcept);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        $this->path = $path;
        if ($this->_valueXMLLocations[self::FIELD_PATH] !== $valueXMLLocation) {
            $this->_setPathValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the path element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPathValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PATH];
    }

    /**
     * Set the location the "value" field of the path element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPathValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PATH] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getValueSetString(): null|FHIRString
    {
        return $this->valueSetString ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $valueSetString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueSetString(null|string|FHIRStringPrimitive|FHIRString $valueSetString,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueSetString) {
            unset($this->valueSetString);
            return $this;
        }
        if (!($valueSetString instanceof FHIRString)) {
            $valueSetString = new FHIRString(value: $valueSetString);
        }
        $this->valueSetString = $valueSetString;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING] !== $valueXMLLocation) {
            $this->_setValueSetStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueSetString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueSetStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING];
    }

    /**
     * Set the location the "value" field of the valueSetString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueSetStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getValueSetReference(): null|FHIRReference
    {
        return $this->valueSetReference ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $valueSetReference
     * @return static
     */
    public function setValueSetReference(null|FHIRReference $valueSetReference): self
    {
        if (null === $valueSetReference) {
            unset($this->valueSetReference);
            return $this;
        }
        $this->valueSetReference = $valueSetReference;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[]
     */
    public function getValueCode(): array
    {
        return $this->valueCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode>
     */
    public function getValueCodeIterator(): iterable
    {
        if (!isset($this->valueCode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueCode);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $valueCode
     * @return static
     */
    public function addValueCode(string|FHIRCodePrimitive|FHIRCode $valueCode): self
    {
        if (!($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode(value: $valueCode);
        }
        if (!isset($this->valueCode)) {
            $this->valueCode = [];
        }
        $this->valueCode[] = $valueCode;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode ...$valueCode
     * @return static
     */
    public function setValueCode(string|FHIRCodePrimitive|FHIRCode ...$valueCode): self
    {
        if ([] === $valueCode) {
            unset($this->valueCode);
            return $this;
        }
        $this->valueCode = [];
        foreach($valueCode as $v) {
            if ($v instanceof FHIRCode) {
                $this->valueCode[] = $v;
            } else {
                $this->valueCode[] = new FHIRCode(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getValueCoding(): array
    {
        return $this->valueCoding ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getValueCodingIterator(): iterable
    {
        if (!isset($this->valueCoding)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueCoding);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $valueCoding
     * @return static
     */
    public function addValueCoding(FHIRCoding $valueCoding): self
    {
        if (!isset($this->valueCoding)) {
            $this->valueCoding = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$valueCoding
     * @return static
     */
    public function setValueCoding(FHIRCoding ...$valueCoding): self
    {
        if ([] === $valueCoding) {
            unset($this->valueCoding);
            return $this;
        }
        $this->valueCoding = $valueCoding;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValueCodeableConcept(): array
    {
        return $this->valueCodeableConcept ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getValueCodeableConceptIterator(): iterable
    {
        if (!isset($this->valueCodeableConcept)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueCodeableConcept);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function addValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept): self
    {
        if (!isset($this->valueCodeableConcept)) {
            $this->valueCodeableConcept = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept ...$valueCodeableConcept): self
    {
        if ([] === $valueCodeableConcept) {
            unset($this->valueCodeableConcept);
            return $this;
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_STRING])) {
            $v = $this->getValueSetString();
            foreach($validationRules[self::FIELD_VALUE_SET_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_SET_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_STRING])) {
                        $errs[self::FIELD_VALUE_SET_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_REFERENCE])) {
            $v = $this->getValueSetReference();
            foreach($validationRules[self::FIELD_VALUE_SET_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_SET_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_REFERENCE])) {
                        $errs[self::FIELD_VALUE_SET_REFERENCE] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODE])) {
            $v = $this->getValueCode();
            foreach($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODE])) {
                        $errs[self::FIELD_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODING])) {
            $v = $this->getValueCoding();
            foreach($validationRules[self::FIELD_VALUE_CODING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODING])) {
                        $errs[self::FIELD_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirementCodeFilter)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_PATH === $cen) {
                $type->setPath(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SET_STRING === $cen) {
                $type->setValueSetString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SET_REFERENCE === $cen) {
                $type->setValueSetReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODE === $cen) {
                $type->addValueCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODING === $cen) {
                $type->addValueCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->addValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATH])) {
            if (isset($type->path)) {
                $type->path->setValue((string)$attributes[self::FIELD_PATH]);
                $type->_setPathValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_SET_STRING])) {
            if (isset($type->valueSetString)) {
                $type->valueSetString->setValue((string)$attributes[self::FIELD_VALUE_SET_STRING]);
                $type->_setValueSetStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueSetString((string)$attributes[self::FIELD_VALUE_SET_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->path) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATH]) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->_getFormattedValue());
        }
        if (isset($this->valueSetString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING]) {
            $xw->writeAttribute(self::FIELD_VALUE_SET_STRING, $this->valueSetString->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->path)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATH]
                || $this->path->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATH]);
            $xw->endElement();
        }
        if (isset($this->valueSetString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING]
                || $this->valueSetString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_SET_STRING);
            $this->valueSetString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING]);
            $xw->endElement();
        }
        if (isset($this->valueSetReference)) {
            $xw->startElement(self::FIELD_VALUE_SET_REFERENCE);
            $this->valueSetReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCode) && [] !== $this->valueCode) {
            foreach($this->valueCode as $v) {
                $xw->startElement(self::FIELD_VALUE_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->valueCoding)) {
            foreach ($this->valueCoding as $v) {
                $xw->startElement(self::FIELD_VALUE_CODING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->valueCodeableConcept)) {
            foreach ($this->valueCodeableConcept as $v) {
                $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirementCodeFilter)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_PATH])
            || isset($json[self::FIELD_PATH_EXT])
            || array_key_exists(self::FIELD_PATH, $json)
            || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = $json[self::FIELD_PATH] ?? null;
            $type->setPath(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PATH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_SET_STRING])
            || isset($json[self::FIELD_VALUE_SET_STRING_EXT])
            || array_key_exists(self::FIELD_VALUE_SET_STRING, $json)
            || array_key_exists(self::FIELD_VALUE_SET_STRING_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_SET_STRING] ?? null;
            $type->setValueSetString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_SET_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_SET_REFERENCE]) || array_key_exists(self::FIELD_VALUE_SET_REFERENCE, $json)) {
            $type->setValueSetReference(FHIRReference::jsonUnserialize($json[self::FIELD_VALUE_SET_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODE])
            || isset($json[self::FIELD_VALUE_CODE_EXT])
            || array_key_exists(self::FIELD_VALUE_CODE, $json)
            || array_key_exists(self::FIELD_VALUE_CODE_EXT, $json)) {
            $value = (array)($json[self::FIELD_VALUE_CODE] ?? []);
            $ext = (array)($json[self::FIELD_VALUE_CODE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addValueCode(FHIRCode::jsonUnserialize(
                    [FHIRCode::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_VALUE_CODING]) || array_key_exists(self::FIELD_VALUE_CODING, $json)) {
            $vs = $json[self::FIELD_VALUE_CODING];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValueCoding(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            $vs = $json[self::FIELD_VALUE_CODEABLE_CONCEPT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            if ($this->path->_nonValueFieldDefined()) {
                $ext = $this->path->jsonSerialize();
                unset($ext->value);
                $out->_path = $ext;
            }
        }
        if (isset($this->valueSetString)) {
            if (null !== ($val = $this->valueSetString->getValue())) {
                $out->valueSetString = $val;
            }
            if ($this->valueSetString->_nonValueFieldDefined()) {
                $ext = $this->valueSetString->jsonSerialize();
                unset($ext->value);
                $out->_valueSetString = $ext;
            }
        }
        if (isset($this->valueSetReference)) {
            $out->valueSetReference = $this->valueSetReference;
        }
        if (isset($this->valueCode) && [] !== $this->valueCode) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->valueCode as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->valueCode = $vals;
            }
            if ($hasExts) {
                $out->_valueCode = $exts;
            }
        }
        if (isset($this->valueCoding) && [] !== $this->valueCoding) {
            $out->valueCoding = $this->valueCoding;
        }
        if (isset($this->valueCodeableConcept) && [] !== $this->valueCodeableConcept) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        return $out;
    }
}