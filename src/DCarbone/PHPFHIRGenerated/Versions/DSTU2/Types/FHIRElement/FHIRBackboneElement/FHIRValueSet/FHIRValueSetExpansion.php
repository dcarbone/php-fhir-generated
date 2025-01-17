<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetExpansion extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TIMESTAMP_EXT = '_timestamp';
    public const FIELD_TOTAL = 'total';
    public const FIELD_TOTAL_EXT = '_total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_OFFSET_EXT = '_offset';
    public const FIELD_PARAMETER = 'parameter';
    public const FIELD_CONTAINS = 'contains';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset. Systems
     * may re-use the same identifier as long as the expansion and the definition
     * remain the same, but are not required to do so.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $timestamp;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of concepts in the expansion. If the number of concept nodes in
     * this resource is less than the stated number, then the server can return more
     * using the offset parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $total;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL not be present.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $offset;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[] 
     */
    protected array $parameter;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[] 
     */
    protected array $contains;

    /** Default validation map for fields in type ValueSet.Expansion */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TIMESTAMP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRValueSetExpansion Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $timestamp
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $total
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $offset
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[] $parameter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[] $contains
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $identifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timestamp = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $total = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $offset = null,
                                null|iterable $parameter = null,
                                null|iterable $contains = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $timestamp) {
            $this->setTimestamp($timestamp);
        }
        if (null !== $total) {
            $this->setTotal($total);
        }
        if (null !== $offset) {
            $this->setOffset($offset);
        }
        if (null !== $parameter) {
            $this->setParameter(...$parameter);
        }
        if (null !== $contains) {
            $this->setContains(...$contains);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset. Systems
     * may re-use the same identifier as long as the expansion and the definition
     * remain the same, but are not required to do so.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getIdentifier(): null|FHIRUri
    {
        return $this->identifier ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset. Systems
     * may re-use the same identifier as long as the expansion and the definition
     * remain the same, but are not required to do so.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $identifier
     * @return static
     */
    public function setIdentifier(null|string|FHIRUriPrimitive|FHIRUri $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        if (!($identifier instanceof FHIRUri)) {
            $identifier = new FHIRUri(value: $identifier);
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getTimestamp(): null|FHIRDateTime
    {
        return $this->timestamp ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $timestamp
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timestamp): self
    {
        if (null === $timestamp) {
            unset($this->timestamp);
            return $this;
        }
        if (!($timestamp instanceof FHIRDateTime)) {
            $timestamp = new FHIRDateTime(value: $timestamp);
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of concepts in the expansion. If the number of concept nodes in
     * this resource is less than the stated number, then the server can return more
     * using the offset parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
     */
    public function getTotal(): null|FHIRInteger
    {
        return $this->total ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of concepts in the expansion. If the number of concept nodes in
     * this resource is less than the stated number, then the server can return more
     * using the offset parameter.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $total
     * @return static
     */
    public function setTotal(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $total): self
    {
        if (null === $total) {
            unset($this->total);
            return $this;
        }
        if (!($total instanceof FHIRInteger)) {
            $total = new FHIRInteger(value: $total);
        }
        $this->total = $total;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL not be present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
     */
    public function getOffset(): null|FHIRInteger
    {
        return $this->offset ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL not be present.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $offset
     * @return static
     */
    public function setOffset(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $offset): self
    {
        if (null === $offset) {
            unset($this->offset);
            return $this;
        }
        if (!($offset instanceof FHIRInteger)) {
            $offset = new FHIRInteger(value: $offset);
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter) || [] === $this->parameter) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter $parameter
     * @return static
     */
    public function addParameter(FHIRValueSetParameter $parameter): self
    {
        if (!isset($this->parameter)) {
            $this->parameter = [];
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRValueSetParameter ...$parameter): self
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains(): array
    {
        return $this->contains ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains>
     */
    public function getContainsIterator(): iterable
    {
        if (!isset($this->contains) || [] === $this->contains) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contains);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains $contains
     * @return static
     */
    public function addContains(FHIRValueSetContains $contains): self
    {
        if (!isset($this->contains)) {
            $this->contains = [];
        }
        $this->contains[] = $contains;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains ...$contains
     * @return static
     */
    public function setContains(FHIRValueSetContains ...$contains): self
    {
        $this->contains = $contains;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMESTAMP] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMESTAMP])) {
            $v = $this->getTimestamp();
            foreach($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMESTAMP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMESTAMP])) {
                        $errs[self::FIELD_TIMESTAMP] = [];
                    }
                    $errs[self::FIELD_TIMESTAMP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL])) {
            $v = $this->getTotal();
            foreach($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL])) {
                        $errs[self::FIELD_TOTAL] = [];
                    }
                    $errs[self::FIELD_TOTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET])) {
            $v = $this->getOffset();
            foreach($validationRules[self::FIELD_OFFSET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OFFSET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSET])) {
                        $errs[self::FIELD_OFFSET] = [];
                    }
                    $errs[self::FIELD_OFFSET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINS])) {
            $v = $this->getContains();
            foreach($validationRules[self::FIELD_CONTAINS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINS])) {
                        $errs[self::FIELD_CONTAINS] = [];
                    }
                    $errs[self::FIELD_CONTAINS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetExpansion)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIdentifier(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMESTAMP === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTimestamp(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOTAL === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTotal(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OFFSET === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOffset(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARAMETER === $childName) {
                $v = new FHIRValueSetParameter();
                $type->addParameter(FHIRValueSetParameter::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINS === $childName) {
                $v = new FHIRValueSetContains();
                $type->addContains(FHIRValueSetContains::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            $pt = $type->getIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IDENTIFIER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIdentifier(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IDENTIFIER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TIMESTAMP])) {
            $pt = $type->getTimestamp();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TIMESTAMP]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTimestamp(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_TIMESTAMP],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TOTAL])) {
            $pt = $type->getTotal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TOTAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTotal(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_TOTAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OFFSET])) {
            $pt = $type->getOffset();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OFFSET]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOffset(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_OFFSET],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ValueSetExpansion', $this->_getSourceXMLNS());
        }
        if (isset($this->identifier) && $this->identifier->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $this->identifier->getValue()?->getFormattedValue());
        }
        if (isset($this->timestamp) && $this->timestamp->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TIMESTAMP, $this->timestamp->getValue()?->getFormattedValue());
        }
        if (isset($this->total) && $this->total->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TOTAL, $this->total->getValue()?->getFormattedValue());
        }
        if (isset($this->offset) && $this->offset->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OFFSET, $this->offset->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && $this->identifier->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timestamp) && $this->timestamp->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TIMESTAMP);
            $this->timestamp->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->total) && $this->total->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TOTAL);
            $this->total->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->offset) && $this->offset->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OFFSET);
            $this->offset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contains)) {
            foreach ($this->contains as $v) {
                $xw->startElement(self::FIELD_CONTAINS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetExpansion)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || isset($json[self::FIELD_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_IDENTIFIER, $json) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIER] ?? null;
            $ext = (isset($json[self::FIELD_IDENTIFIER_EXT]) && is_array($json[self::FIELD_IDENTIFIER_EXT])) ? $json[self::FIELD_IDENTIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setIdentifier($value);
                } else if (is_array($value)) {
                    $type->setIdentifier(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setIdentifier(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIdentifier(new FHIRUri($ext));
            } else {
                $type->setIdentifier(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TIMESTAMP]) || isset($json[self::FIELD_TIMESTAMP_EXT]) || array_key_exists(self::FIELD_TIMESTAMP, $json) || array_key_exists(self::FIELD_TIMESTAMP_EXT, $json)) {
            $value = $json[self::FIELD_TIMESTAMP] ?? null;
            $ext = (isset($json[self::FIELD_TIMESTAMP_EXT]) && is_array($json[self::FIELD_TIMESTAMP_EXT])) ? $json[self::FIELD_TIMESTAMP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setTimestamp($value);
                } else if (is_array($value)) {
                    $type->setTimestamp(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setTimestamp(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTimestamp(new FHIRDateTime($ext));
            } else {
                $type->setTimestamp(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_TOTAL]) || isset($json[self::FIELD_TOTAL_EXT]) || array_key_exists(self::FIELD_TOTAL, $json) || array_key_exists(self::FIELD_TOTAL_EXT, $json)) {
            $value = $json[self::FIELD_TOTAL] ?? null;
            $ext = (isset($json[self::FIELD_TOTAL_EXT]) && is_array($json[self::FIELD_TOTAL_EXT])) ? $json[self::FIELD_TOTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setTotal($value);
                } else if (is_array($value)) {
                    $type->setTotal(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setTotal(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTotal(new FHIRInteger($ext));
            } else {
                $type->setTotal(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_OFFSET]) || isset($json[self::FIELD_OFFSET_EXT]) || array_key_exists(self::FIELD_OFFSET, $json) || array_key_exists(self::FIELD_OFFSET_EXT, $json)) {
            $value = $json[self::FIELD_OFFSET] ?? null;
            $ext = (isset($json[self::FIELD_OFFSET_EXT]) && is_array($json[self::FIELD_OFFSET_EXT])) ? $json[self::FIELD_OFFSET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setOffset($value);
                } else if (is_array($value)) {
                    $type->setOffset(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setOffset(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOffset(new FHIRInteger($ext));
            } else {
                $type->setOffset(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_PARAMETER]) || array_key_exists(self::FIELD_PARAMETER, $json)) {
            if (is_array($json[self::FIELD_PARAMETER])) {
                foreach($json[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRValueSetParameter) {
                        $type->addParameter($v);
                    } else {
                        $type->addParameter(new FHIRValueSetParameter($v));
                    }
                }
            } elseif ($json[self::FIELD_PARAMETER] instanceof FHIRValueSetParameter) {
                $type->addParameter($json[self::FIELD_PARAMETER]);
            } else {
                $type->addParameter(new FHIRValueSetParameter($json[self::FIELD_PARAMETER]));
            }
        }
        if (isset($json[self::FIELD_CONTAINS]) || array_key_exists(self::FIELD_CONTAINS, $json)) {
            if (is_array($json[self::FIELD_CONTAINS])) {
                foreach($json[self::FIELD_CONTAINS] as $v) {
                    if ($v instanceof FHIRValueSetContains) {
                        $type->addContains($v);
                    } else {
                        $type->addContains(new FHIRValueSetContains($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTAINS] instanceof FHIRValueSetContains) {
                $type->addContains($json[self::FIELD_CONTAINS]);
            } else {
                $type->addContains(new FHIRValueSetContains($json[self::FIELD_CONTAINS]));
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
        if (isset($this->identifier)) {
            if (null !== ($val = $this->identifier->getValue())) {
                $out->identifier = $val;
            }
            $ext = $this->identifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_identifier = $ext;
            }
        }
        if (isset($this->timestamp)) {
            if (null !== ($val = $this->timestamp->getValue())) {
                $out->timestamp = $val;
            }
            $ext = $this->timestamp->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_timestamp = $ext;
            }
        }
        if (isset($this->total)) {
            if (null !== ($val = $this->total->getValue())) {
                $out->total = $val;
            }
            $ext = $this->total->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_total = $ext;
            }
        }
        if (isset($this->offset)) {
            if (null !== ($val = $this->offset->getValue())) {
                $out->offset = $val;
            }
            $ext = $this->offset->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_offset = $ext;
            }
        }
        if (isset($this->parameter) && [] !== $this->parameter) {
            $out->parameter = $this->parameter;
        }
        if (isset($this->contains) && [] !== $this->contains) {
            $out->contains = $this->contains;
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