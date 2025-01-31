<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A ValueSet resource instance specifies a set of codes drawn from one or more
 * code systems, intended for use in a particular context. Value sets link between
 * [CodeSystem](codesystem.html) definitions and their use in [coded
 * elements](terminologies.html).
 */
class FHIRValueSetExpansion extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_NEXT = 'next';
    public const FIELD_NEXT_EXT = '_next';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TIMESTAMP_EXT = '_timestamp';
    public const FIELD_TOTAL = 'total';
    public const FIELD_TOTAL_EXT = '_total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_OFFSET_EXT = '_offset';
    public const FIELD_PARAMETER = 'parameter';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_CONTAINS = 'contains';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_TIMESTAMP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMESTAMP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TOTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OFFSET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset, based on
     * a unique combination of the provided parameters, the system default parameters,
     * and the underlying system code system versions etc. Systems may re-use the same
     * identifier as long as those factors remain the same, and the expansion is the
     * same, but are not required to do so. This is a business identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $identifier;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * As per paging Search results, the next URLs are opaque to the client, have no
     * dictated structure, and only the server understands them.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $next;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $total;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL NOT be present.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $offset;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[] 
     */
    protected array $parameter;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty[] 
     */
    protected array $property;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * The codes that are contained in the value set expansion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[] 
     */
    protected array $contains;

    /* constructor.php:63 */
    /**
     * FHIRValueSetExpansion Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $next
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $timestamp
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $total
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $offset
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[] $parameter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[] $contains
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $identifier = null,
                                null|string|FHIRUriPrimitive|FHIRUri $next = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timestamp = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $total = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $offset = null,
                                null|iterable $parameter = null,
                                null|iterable $property = null,
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
        if (null !== $next) {
            $this->setNext($next);
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
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $contains) {
            $this->setContains(...$contains);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset, based on
     * a unique combination of the provided parameters, the system default parameters,
     * and the underlying system code system versions etc. Systems may re-use the same
     * identifier as long as those factors remain the same, and the expansion is the
     * same, but are not required to do so. This is a business identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
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
     * An identifier that uniquely identifies this expansion of the valueset, based on
     * a unique combination of the provided parameters, the system default parameters,
     * and the underlying system code system versions etc. Systems may re-use the same
     * identifier as long as those factors remain the same, and the expansion is the
     * same, but are not required to do so. This is a business identifier.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $identifier
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIdentifier(null|string|FHIRUriPrimitive|FHIRUri $identifier,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        if (!($identifier instanceof FHIRUri)) {
            $identifier = new FHIRUri(value: $identifier);
        }
        $this->identifier = $identifier;
        if ($this->_valueXMLLocations[self::FIELD_IDENTIFIER] !== $valueXMLLocation) {
            $this->_setIdentifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the identifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIdentifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_IDENTIFIER];
    }

    /**
     * Set the location the "value" field of the identifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIdentifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_IDENTIFIER] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * As per paging Search results, the next URLs are opaque to the client, have no
     * dictated structure, and only the server understands them.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getNext(): null|FHIRUri
    {
        return $this->next ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * As per paging Search results, the next URLs are opaque to the client, have no
     * dictated structure, and only the server understands them.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $next
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNext(null|string|FHIRUriPrimitive|FHIRUri $next,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $next) {
            unset($this->next);
            return $this;
        }
        if (!($next instanceof FHIRUri)) {
            $next = new FHIRUri(value: $next);
        }
        $this->next = $next;
        if ($this->_valueXMLLocations[self::FIELD_NEXT] !== $valueXMLLocation) {
            $this->_setNextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the next element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NEXT];
    }

    /**
     * Set the location the "value" field of the next element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NEXT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getTimestamp(): null|FHIRDateTime
    {
        return $this->timestamp ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $timestamp
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timestamp,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $timestamp) {
            unset($this->timestamp);
            return $this;
        }
        if (!($timestamp instanceof FHIRDateTime)) {
            $timestamp = new FHIRDateTime(value: $timestamp);
        }
        $this->timestamp = $timestamp;
        if ($this->_valueXMLLocations[self::FIELD_TIMESTAMP] !== $valueXMLLocation) {
            $this->_setTimestampValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the timestamp element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTimestampValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TIMESTAMP];
    }

    /**
     * Set the location the "value" field of the timestamp element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTimestampValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TIMESTAMP] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $total
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTotal(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $total,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $total) {
            unset($this->total);
            return $this;
        }
        if (!($total instanceof FHIRInteger)) {
            $total = new FHIRInteger(value: $total);
        }
        $this->total = $total;
        if ($this->_valueXMLLocations[self::FIELD_TOTAL] !== $valueXMLLocation) {
            $this->_setTotalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the total element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTotalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TOTAL];
    }

    /**
     * Set the location the "value" field of the total element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTotalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TOTAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL NOT be present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
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
     * element SHALL NOT be present.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $offset
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOffset(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $offset,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $offset) {
            unset($this->offset);
            return $this;
        }
        if (!($offset instanceof FHIRInteger)) {
            $offset = new FHIRInteger(value: $offset);
        }
        $this->offset = $offset;
        if ($this->_valueXMLLocations[self::FIELD_OFFSET] !== $valueXMLLocation) {
            $this->_setOffsetValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the offset element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOffsetValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OFFSET];
    }

    /**
     * Set the location the "value" field of the offset element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOffsetValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OFFSET] = $valueXMLLocation;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter $parameter
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
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRValueSetParameter ...$parameter): self
    {
        if ([] === $parameter) {
            unset($this->parameter);
            return $this;
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty $property
     * @return static
     */
    public function addProperty(FHIRValueSetProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetProperty ...$property
     * @return static
     */
    public function setProperty(FHIRValueSetProperty ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * The codes that are contained in the value set expansion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains(): array
    {
        return $this->contains ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains>
     */
    public function getContainsIterator(): iterable
    {
        if (!isset($this->contains)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contains);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains $contains
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
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains ...$contains
     * @return static
     */
    public function setContains(FHIRValueSetContains ...$contains): self
    {
        if ([] === $contains) {
            unset($this->contains);
            return $this;
        }
        $this->contains = $contains;
        return $this;
    }

    /* class_default.php:189 */
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
        if (isset($validationRules[self::FIELD_NEXT])) {
            $v = $this->getNext();
            foreach($validationRules[self::FIELD_NEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEXT])) {
                        $errs[self::FIELD_NEXT] = [];
                    }
                    $errs[self::FIELD_NEXT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NEXT === $cen) {
                $type->setNext(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMESTAMP === $cen) {
                $type->setTimestamp(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL === $cen) {
                $type->setTotal(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OFFSET === $cen) {
                $type->setOffset(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER === $cen) {
                $type->addParameter(FHIRValueSetParameter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRValueSetProperty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINS === $cen) {
                $type->addContains(FHIRValueSetContains::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            if (isset($type->identifier)) {
                $type->identifier->setValue((string)$attributes[self::FIELD_IDENTIFIER]);
                $type->_setIdentifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIdentifier((string)$attributes[self::FIELD_IDENTIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NEXT])) {
            if (isset($type->next)) {
                $type->next->setValue((string)$attributes[self::FIELD_NEXT]);
                $type->_setNextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNext((string)$attributes[self::FIELD_NEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TIMESTAMP])) {
            if (isset($type->timestamp)) {
                $type->timestamp->setValue((string)$attributes[self::FIELD_TIMESTAMP]);
                $type->_setTimestampValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTimestamp((string)$attributes[self::FIELD_TIMESTAMP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TOTAL])) {
            if (isset($type->total)) {
                $type->total->setValue((string)$attributes[self::FIELD_TOTAL]);
                $type->_setTotalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTotal((string)$attributes[self::FIELD_TOTAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OFFSET])) {
            if (isset($type->offset)) {
                $type->offset->setValue((string)$attributes[self::FIELD_OFFSET]);
                $type->_setOffsetValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOffset((string)$attributes[self::FIELD_OFFSET], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->identifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $this->identifier->_getFormattedValue());
        }
        if (isset($this->next) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NEXT]) {
            $xw->writeAttribute(self::FIELD_NEXT, $this->next->_getFormattedValue());
        }
        if (isset($this->timestamp) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMESTAMP]) {
            $xw->writeAttribute(self::FIELD_TIMESTAMP, $this->timestamp->_getFormattedValue());
        }
        if (isset($this->total) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TOTAL]) {
            $xw->writeAttribute(self::FIELD_TOTAL, $this->total->_getFormattedValue());
        }
        if (isset($this->offset) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OFFSET]) {
            $xw->writeAttribute(self::FIELD_OFFSET, $this->offset->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IDENTIFIER]
                || $this->identifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->next)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NEXT]
                || $this->next->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NEXT);
            $this->next->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NEXT]);
            $xw->endElement();
        }
        if (isset($this->timestamp)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMESTAMP]
                || $this->timestamp->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMESTAMP);
            $this->timestamp->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMESTAMP]);
            $xw->endElement();
        }
        if (isset($this->total)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TOTAL]
                || $this->total->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TOTAL);
            $this->total->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TOTAL]);
            $xw->endElement();
        }
        if (isset($this->offset)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OFFSET]
                || $this->offset->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OFFSET);
            $this->offset->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OFFSET]);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_IDENTIFIER]) || isset($json[self::FIELD_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_IDENTIFIER, $json) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIER] ?? null;
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            $type->setIdentifier(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_NEXT]) || isset($json[self::FIELD_NEXT_EXT]) || array_key_exists(self::FIELD_NEXT, $json) || array_key_exists(self::FIELD_NEXT_EXT, $json)) {
            $value = $json[self::FIELD_NEXT] ?? null;
            $ext = (array)($json[self::FIELD_NEXT_EXT] ?? []);
            $type->setNext(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TIMESTAMP]) || isset($json[self::FIELD_TIMESTAMP_EXT]) || array_key_exists(self::FIELD_TIMESTAMP, $json) || array_key_exists(self::FIELD_TIMESTAMP_EXT, $json)) {
            $value = $json[self::FIELD_TIMESTAMP] ?? null;
            $ext = (array)($json[self::FIELD_TIMESTAMP_EXT] ?? []);
            $type->setTimestamp(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TOTAL]) || isset($json[self::FIELD_TOTAL_EXT]) || array_key_exists(self::FIELD_TOTAL, $json) || array_key_exists(self::FIELD_TOTAL_EXT, $json)) {
            $value = $json[self::FIELD_TOTAL] ?? null;
            $ext = (array)($json[self::FIELD_TOTAL_EXT] ?? []);
            $type->setTotal(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OFFSET]) || isset($json[self::FIELD_OFFSET_EXT]) || array_key_exists(self::FIELD_OFFSET, $json) || array_key_exists(self::FIELD_OFFSET_EXT, $json)) {
            $value = $json[self::FIELD_OFFSET] ?? null;
            $ext = (array)($json[self::FIELD_OFFSET_EXT] ?? []);
            $type->setOffset(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARAMETER]) || array_key_exists(self::FIELD_PARAMETER, $json)) {
            $vs = $json[self::FIELD_PARAMETER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParameter(FHIRValueSetParameter::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PROPERTY]) || array_key_exists(self::FIELD_PROPERTY, $json)) {
            $vs = $json[self::FIELD_PROPERTY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProperty(FHIRValueSetProperty::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CONTAINS]) || array_key_exists(self::FIELD_CONTAINS, $json)) {
            $vs = $json[self::FIELD_CONTAINS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContains(FHIRValueSetContains::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
        if (isset($this->next)) {
            if (null !== ($val = $this->next->getValue())) {
                $out->next = $val;
            }
            $ext = $this->next->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_next = $ext;
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
        if (isset($this->property) && [] !== $this->property) {
            $out->property = $this->property;
        }
        if (isset($this->contains) && [] !== $this->contains) {
            $out->contains = $this->contains;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}