<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQueryOutcomeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A description of a query with a set of parameters.
 */
class FHIRQueryResponse extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUERY_DOT_RESPONSE;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_TOTAL = 'total';
    public const FIELD_TOTAL_EXT = '_total';
    public const FIELD_PARAMETER = 'parameter';
    public const FIELD_FIRST = 'first';
    public const FIELD_PREVIOUS = 'previous';
    public const FIELD_NEXT = 'next';
    public const FIELD_LAST = 'last';
    public const FIELD_REFERENCE = 'reference';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_OUTCOME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TOTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $identifier;
    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome 
     */
    protected FHIRQueryOutcome $outcome;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $total;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $parameter;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $first;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $previous;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $next;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $last;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $reference;

    /* constructor.php:61 */
    /**
     * FHIRQueryResponse Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQueryOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome $outcome
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $total
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $parameter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $first
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $previous
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $next
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $last
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $reference
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $identifier = null,
                                null|string|FHIRQueryOutcomeList|FHIRQueryOutcome $outcome = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $total = null,
                                null|iterable $parameter = null,
                                null|iterable $first = null,
                                null|iterable $previous = null,
                                null|iterable $next = null,
                                null|iterable $last = null,
                                null|iterable $reference = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $total) {
            $this->setTotal($total);
        }
        if (null !== $parameter) {
            $this->setParameter(...$parameter);
        }
        if (null !== $first) {
            $this->setFirst(...$first);
        }
        if (null !== $previous) {
            $this->setPrevious(...$previous);
        }
        if (null !== $next) {
            $this->setNext(...$next);
        }
        if (null !== $last) {
            $this->setLast(...$last);
        }
        if (null !== $reference) {
            $this->setReference(...$reference);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getIdentifier(): null|FHIRUri
    {
        return $this->identifier ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $identifier
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
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome
     */
    public function getOutcome(): null|FHIRQueryOutcome
    {
        return $this->outcome ?? null;
    }

    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQueryOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome $outcome
     * @return static
     */
    public function setOutcome(null|string|FHIRQueryOutcomeList|FHIRQueryOutcome $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        if (!($outcome instanceof FHIRQueryOutcome)) {
            $outcome = new FHIRQueryOutcome(value: $outcome);
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getTotal(): null|FHIRInteger
    {
        return $this->total ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $total
     * @return static
     */
    public function setTotal(null|string|float|FHIRIntegerPrimitive|FHIRInteger $total): self
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
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $parameter
     * @return static
     */
    public function addParameter(FHIRExtension $parameter): self
    {
        if (!isset($this->parameter)) {
            $this->parameter = [];
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$parameter
     * @return static
     */
    public function setParameter(FHIRExtension ...$parameter): self
    {
        if ([] === $parameter) {
            unset($this->parameter);
            return $this;
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[]
     */
    public function getFirst(): array
    {
        return $this->first ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getFirstIterator(): iterable
    {
        if (!isset($this->first)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->first);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $first
     * @return static
     */
    public function addFirst(FHIRExtension $first): self
    {
        if (!isset($this->first)) {
            $this->first = [];
        }
        $this->first[] = $first;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$first
     * @return static
     */
    public function setFirst(FHIRExtension ...$first): self
    {
        if ([] === $first) {
            unset($this->first);
            return $this;
        }
        $this->first = $first;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[]
     */
    public function getPrevious(): array
    {
        return $this->previous ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getPreviousIterator(): iterable
    {
        if (!isset($this->previous)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->previous);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $previous
     * @return static
     */
    public function addPrevious(FHIRExtension $previous): self
    {
        if (!isset($this->previous)) {
            $this->previous = [];
        }
        $this->previous[] = $previous;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$previous
     * @return static
     */
    public function setPrevious(FHIRExtension ...$previous): self
    {
        if ([] === $previous) {
            unset($this->previous);
            return $this;
        }
        $this->previous = $previous;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[]
     */
    public function getNext(): array
    {
        return $this->next ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getNextIterator(): iterable
    {
        if (!isset($this->next)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->next);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $next
     * @return static
     */
    public function addNext(FHIRExtension $next): self
    {
        if (!isset($this->next)) {
            $this->next = [];
        }
        $this->next[] = $next;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$next
     * @return static
     */
    public function setNext(FHIRExtension ...$next): self
    {
        if ([] === $next) {
            unset($this->next);
            return $this;
        }
        $this->next = $next;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[]
     */
    public function getLast(): array
    {
        return $this->last ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getLastIterator(): iterable
    {
        if (!isset($this->last)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->last);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $last
     * @return static
     */
    public function addLast(FHIRExtension $last): self
    {
        if (!isset($this->last)) {
            $this->last = [];
        }
        $this->last[] = $last;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$last
     * @return static
     */
    public function setLast(FHIRExtension ...$last): self
    {
        if ([] === $last) {
            unset($this->last);
            return $this;
        }
        $this->last = $last;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getReference(): array
    {
        return $this->reference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getReferenceIterator(): iterable
    {
        if (!isset($this->reference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reference);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $reference
     * @return static
     */
    public function addReference(FHIRResourceReference $reference): self
    {
        if (!isset($this->reference)) {
            $this->reference = [];
        }
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$reference
     * @return static
     */
    public function setReference(FHIRResourceReference ...$reference): self
    {
        if ([] === $reference) {
            unset($this->reference);
            return $this;
        }
        $this->reference = $reference;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQueryResponse)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRQueryOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL === $cen) {
                $type->setTotal(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER === $cen) {
                $type->addParameter(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIRST === $cen) {
                $type->addFirst(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREVIOUS === $cen) {
                $type->addPrevious(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NEXT === $cen) {
                $type->addNext(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST === $cen) {
                $type->addLast(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE === $cen) {
                $type->addReference(FHIRResourceReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            if (isset($type->identifier)) {
                $type->identifier->setValue((string)$attributes[self::FIELD_IDENTIFIER]);
            } else {
                $type->setIdentifier((string)$attributes[self::FIELD_IDENTIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IDENTIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OUTCOME])) {
            if (isset($type->outcome)) {
                $type->outcome->setValue((string)$attributes[self::FIELD_OUTCOME]);
            } else {
                $type->setOutcome((string)$attributes[self::FIELD_OUTCOME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OUTCOME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TOTAL])) {
            if (isset($type->total)) {
                $type->total->setValue((string)$attributes[self::FIELD_TOTAL]);
            } else {
                $type->setTotal((string)$attributes[self::FIELD_TOTAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TOTAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('QueryResponse', $this->_getSourceXMLNS());
        }
        if (isset($this->identifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $this->identifier->_getValueAsString());
        }
        if (isset($this->outcome) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OUTCOME]) {
            $xw->writeAttribute(self::FIELD_OUTCOME, $this->outcome->_getValueAsString());
        }
        if (isset($this->total) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TOTAL]) {
            $xw->writeAttribute(self::FIELD_TOTAL, $this->total->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IDENTIFIER]
                || $this->identifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->outcome)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OUTCOME]
                || $this->outcome->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OUTCOME]);
            $xw->endElement();
        }
        if (isset($this->total)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TOTAL]
                || $this->total->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TOTAL);
            $this->total->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TOTAL]);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->first)) {
            foreach ($this->first as $v) {
                $xw->startElement(self::FIELD_FIRST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->previous)) {
            foreach ($this->previous as $v) {
                $xw->startElement(self::FIELD_PREVIOUS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->next)) {
            foreach ($this->next as $v) {
                $xw->startElement(self::FIELD_NEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->last)) {
            foreach ($this->last as $v) {
                $xw->startElement(self::FIELD_LAST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reference)) {
            foreach ($this->reference as $v) {
                $xw->startElement(self::FIELD_REFERENCE);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQueryResponse)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier)
            || isset($json->_identifier)
            || property_exists($json, self::FIELD_IDENTIFIER)
            || property_exists($json, self::FIELD_IDENTIFIER_EXT)) {
            $v = $json->_identifier ?? new \stdClass();
            $v->value = $json->identifier ?? null;
            $type->setIdentifier(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->outcome)
            || isset($json->_outcome)
            || property_exists($json, self::FIELD_OUTCOME)
            || property_exists($json, self::FIELD_OUTCOME_EXT)) {
            $v = $json->_outcome ?? new \stdClass();
            $v->value = $json->outcome ?? null;
            $type->setOutcome(FHIRQueryOutcome::jsonUnserialize($v, $config));
        }
        if (isset($json->total)
            || isset($json->_total)
            || property_exists($json, self::FIELD_TOTAL)
            || property_exists($json, self::FIELD_TOTAL_EXT)) {
            $v = $json->_total ?? new \stdClass();
            $v->value = $json->total ?? null;
            $type->setTotal(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->parameter) || property_exists($json, self::FIELD_PARAMETER)) {
            if (is_object($json->parameter)) {
                $vals = [$json->parameter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PARAMETER, true);
            } else {
                $vals = $json->parameter;
            }
            foreach($vals as $v) {
                $type->addParameter(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->first) || property_exists($json, self::FIELD_FIRST)) {
            if (is_object($json->first)) {
                $vals = [$json->first];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_FIRST, true);
            } else {
                $vals = $json->first;
            }
            foreach($vals as $v) {
                $type->addFirst(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->previous) || property_exists($json, self::FIELD_PREVIOUS)) {
            if (is_object($json->previous)) {
                $vals = [$json->previous];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PREVIOUS, true);
            } else {
                $vals = $json->previous;
            }
            foreach($vals as $v) {
                $type->addPrevious(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->next) || property_exists($json, self::FIELD_NEXT)) {
            if (is_object($json->next)) {
                $vals = [$json->next];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_NEXT, true);
            } else {
                $vals = $json->next;
            }
            foreach($vals as $v) {
                $type->addNext(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->last) || property_exists($json, self::FIELD_LAST)) {
            if (is_object($json->last)) {
                $vals = [$json->last];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LAST, true);
            } else {
                $vals = $json->last;
            }
            foreach($vals as $v) {
                $type->addLast(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->reference) || property_exists($json, self::FIELD_REFERENCE)) {
            if (is_object($json->reference)) {
                $vals = [$json->reference];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REFERENCE, true);
            } else {
                $vals = $json->reference;
            }
            foreach($vals as $v) {
                $type->addReference(FHIRResourceReference::jsonUnserialize($v, $config));
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
            if ($this->identifier->_nonValueFieldDefined()) {
                $ext = $this->identifier->jsonSerialize();
                unset($ext->value);
                $out->_identifier = $ext;
            }
        }
        if (isset($this->outcome)) {
            if (null !== ($val = $this->outcome->getValue())) {
                $out->outcome = $val;
            }
            if ($this->outcome->_nonValueFieldDefined()) {
                $ext = $this->outcome->jsonSerialize();
                unset($ext->value);
                $out->_outcome = $ext;
            }
        }
        if (isset($this->total)) {
            if (null !== ($val = $this->total->getValue())) {
                $out->total = $val;
            }
            if ($this->total->_nonValueFieldDefined()) {
                $ext = $this->total->jsonSerialize();
                unset($ext->value);
                $out->_total = $ext;
            }
        }
        if (isset($this->parameter) && [] !== $this->parameter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PARAMETER) && 1 === count($this->parameter)) {
                $out->parameter = $this->parameter[0];
            } else {
                $out->parameter = $this->parameter;
            }
        }
        if (isset($this->first) && [] !== $this->first) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_FIRST) && 1 === count($this->first)) {
                $out->first = $this->first[0];
            } else {
                $out->first = $this->first;
            }
        }
        if (isset($this->previous) && [] !== $this->previous) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PREVIOUS) && 1 === count($this->previous)) {
                $out->previous = $this->previous[0];
            } else {
                $out->previous = $this->previous;
            }
        }
        if (isset($this->next) && [] !== $this->next) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_NEXT) && 1 === count($this->next)) {
                $out->next = $this->next[0];
            } else {
                $out->next = $this->next;
            }
        }
        if (isset($this->last) && [] !== $this->last) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LAST) && 1 === count($this->last)) {
                $out->last = $this->last[0];
            } else {
                $out->last = $this->last;
            }
        }
        if (isset($this->reference) && [] !== $this->reference) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REFERENCE) && 1 === count($this->reference)) {
                $out->reference = $this->reference[0];
            } else {
                $out->reference = $this->reference;
            }
        }
        return $out;
    }
}