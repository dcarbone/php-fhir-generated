<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRDataRequirementCodeFilter extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER;

    /* class_default.php:50 */
    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_VALUE_SET_STRING = 'valueSetString';
    public const FIELD_VALUE_SET_STRING_EXT = '_valueSetString';
    public const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';
    public const FIELD_VALUE_CODE = 'valueCode';
    public const FIELD_VALUE_CODE_EXT = '_valueCode';
    public const FIELD_VALUE_CODING = 'valueCoding';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_PATH => [
            MinOccursRule::NAME => 1,
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

    /* constructor.php:61 */
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

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
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
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        $this->path = $path;
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
     * @return static
     */
    public function setValueSetString(null|string|FHIRStringPrimitive|FHIRString $valueSetString): self
    {
        if (null === $valueSetString) {
            unset($this->valueSetString);
            return $this;
        }
        if (!($valueSetString instanceof FHIRString)) {
            $valueSetString = new FHIRString(value: $valueSetString);
        }
        $this->valueSetString = $valueSetString;
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

    /* class_default.php:192 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATH])) {
            if (isset($type->path)) {
                $type->path->setValue((string)$attributes[self::FIELD_PATH]);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_SET_STRING])) {
            if (isset($type->valueSetString)) {
                $type->valueSetString->setValue((string)$attributes[self::FIELD_VALUE_SET_STRING]);
            } else {
                $type->setValueSetString((string)$attributes[self::FIELD_VALUE_SET_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_SET_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_PATH, $this->path->_getValueAsString());
        }
        if (isset($this->valueSetString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_SET_STRING]) {
            $xw->writeAttribute(self::FIELD_VALUE_SET_STRING, $this->valueSetString->_getValueAsString());
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
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
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
        if (isset($json->path)
            || isset($json->_path)
            || property_exists($json, self::FIELD_PATH)
            || property_exists($json, self::FIELD_PATH_EXT)) {
            $v = $json->_path ?? new \stdClass();
            $v->value = $json->path ?? null;
            $type->setPath(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->valueSetString)
            || isset($json->_valueSetString)
            || property_exists($json, self::FIELD_VALUE_SET_STRING)
            || property_exists($json, self::FIELD_VALUE_SET_STRING_EXT)) {
            $v = $json->_valueSetString ?? new \stdClass();
            $v->value = $json->valueSetString ?? null;
            $type->setValueSetString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->valueSetReference) || property_exists($json, self::FIELD_VALUE_SET_REFERENCE)) {
            if (is_array($json->valueSetReference)) {
                $type->setValueSetReference(FHIRReference::jsonUnserialize(reset($json->valueSetReference), $config));
            } else {
                $type->setValueSetReference(FHIRReference::jsonUnserialize($json->valueSetReference, $config));
            }
        }
        if (isset($json->valueCode)
            || isset($json->_valueCode)
            || property_exists($json, self::FIELD_VALUE_CODE)
            || property_exists($json, self::FIELD_VALUE_CODE_EXT)) {
            $vals = (array)($json->valueCode ?? []);
            $exts = (array)($json->FIELD_VALUE_CODE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addValueCode(FHIRCode::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->valueCoding) || property_exists($json, self::FIELD_VALUE_CODING)) {
            if (is_object($json->valueCoding)) {
                $vals = [$json->valueCoding];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VALUE_CODING, true);
            } else {
                $vals = $json->valueCoding;
            }
            foreach($vals as $v) {
                $type->addValueCoding(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->valueCodeableConcept) || property_exists($json, self::FIELD_VALUE_CODEABLE_CONCEPT)) {
            if (is_object($json->valueCodeableConcept)) {
                $vals = [$json->valueCodeableConcept];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VALUE_CODEABLE_CONCEPT, true);
            } else {
                $vals = $json->valueCodeableConcept;
            }
            foreach($vals as $v) {
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VALUE_CODING) && 1 === count($this->valueCoding)) {
                $out->valueCoding = $this->valueCoding[0];
            } else {
                $out->valueCoding = $this->valueCoding;
            }
        }
        if (isset($this->valueCodeableConcept) && [] !== $this->valueCodeableConcept) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VALUE_CODEABLE_CONCEPT) && 1 === count($this->valueCodeableConcept)) {
                $out->valueCodeableConcept = $this->valueCodeableConcept[0];
            } else {
                $out->valueCodeableConcept = $this->valueCodeableConcept;
            }
        }
        return $out;
    }
}