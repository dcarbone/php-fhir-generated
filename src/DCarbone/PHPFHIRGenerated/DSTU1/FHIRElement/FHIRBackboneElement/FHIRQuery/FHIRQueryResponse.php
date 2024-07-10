<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * A description of a query with a set of parameters.
 *
 * Class FHIRQueryResponse
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery
 */
class FHIRQueryResponse extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_FIRST = 'first';
    const FIELD_PREVIOUS = 'previous';
    const FIELD_NEXT = 'next';
    const FIELD_LAST = 'last';
    const FIELD_REFERENCE = 'reference';

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $identifier = null;
    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome
     */
    protected null|FHIRQueryOutcome $outcome = null;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $total = null;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected null|array $parameter = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected null|array $first = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected null|array $previous = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected null|array $next = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected null|array $last = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $reference = [];

    /**
     * Validation map for fields in type Query.Response
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRQueryResponse Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $data)) {
            $value = $data[self::FIELD_IDENTIFIER] ?? null;
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT])) ? $data[self::FIELD_IDENTIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setIdentifier($value);
                } else if (is_array($value)) {
                    $this->setIdentifier(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setIdentifier(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIdentifier(new FHIRUri($ext));
            } else {
                $this->setIdentifier(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME, $data) || array_key_exists(self::FIELD_OUTCOME_EXT, $data)) {
            $value = $data[self::FIELD_OUTCOME] ?? null;
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])) ? $data[self::FIELD_OUTCOME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRQueryOutcome) {
                    $this->setOutcome($value);
                } else if (is_array($value)) {
                    $this->setOutcome(new FHIRQueryOutcome(array_merge($ext, $value)));
                } else {
                    $this->setOutcome(new FHIRQueryOutcome([FHIRQueryOutcome::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOutcome(new FHIRQueryOutcome($ext));
            } else {
                $this->setOutcome(new FHIRQueryOutcome(null));
            }
        }
        if (array_key_exists(self::FIELD_TOTAL, $data) || array_key_exists(self::FIELD_TOTAL_EXT, $data)) {
            $value = $data[self::FIELD_TOTAL] ?? null;
            $ext = (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT])) ? $data[self::FIELD_TOTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setTotal($value);
                } else if (is_array($value)) {
                    $this->setTotal(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setTotal(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTotal(new FHIRInteger($ext));
            } else {
                $this->setTotal(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_PARAMETER, $data)) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRExtension($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER] instanceof FHIRExtension) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRExtension($data[self::FIELD_PARAMETER]));
            }
        }
        if (array_key_exists(self::FIELD_FIRST, $data)) {
            if (is_array($data[self::FIELD_FIRST])) {
                foreach($data[self::FIELD_FIRST] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addFirst($v);
                    } else {
                        $this->addFirst(new FHIRExtension($v));
                    }
                }
            } elseif ($data[self::FIELD_FIRST] instanceof FHIRExtension) {
                $this->addFirst($data[self::FIELD_FIRST]);
            } else {
                $this->addFirst(new FHIRExtension($data[self::FIELD_FIRST]));
            }
        }
        if (array_key_exists(self::FIELD_PREVIOUS, $data)) {
            if (is_array($data[self::FIELD_PREVIOUS])) {
                foreach($data[self::FIELD_PREVIOUS] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addPrevious($v);
                    } else {
                        $this->addPrevious(new FHIRExtension($v));
                    }
                }
            } elseif ($data[self::FIELD_PREVIOUS] instanceof FHIRExtension) {
                $this->addPrevious($data[self::FIELD_PREVIOUS]);
            } else {
                $this->addPrevious(new FHIRExtension($data[self::FIELD_PREVIOUS]));
            }
        }
        if (array_key_exists(self::FIELD_NEXT, $data)) {
            if (is_array($data[self::FIELD_NEXT])) {
                foreach($data[self::FIELD_NEXT] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addNext($v);
                    } else {
                        $this->addNext(new FHIRExtension($v));
                    }
                }
            } elseif ($data[self::FIELD_NEXT] instanceof FHIRExtension) {
                $this->addNext($data[self::FIELD_NEXT]);
            } else {
                $this->addNext(new FHIRExtension($data[self::FIELD_NEXT]));
            }
        }
        if (array_key_exists(self::FIELD_LAST, $data)) {
            if (is_array($data[self::FIELD_LAST])) {
                foreach($data[self::FIELD_LAST] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addLast($v);
                    } else {
                        $this->addLast(new FHIRExtension($v));
                    }
                }
            } elseif ($data[self::FIELD_LAST] instanceof FHIRExtension) {
                $this->addLast($data[self::FIELD_LAST]);
            } else {
                $this->addLast(new FHIRExtension($data[self::FIELD_LAST]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE, $data)) {
            if (is_array($data[self::FIELD_REFERENCE])) {
                foreach($data[self::FIELD_REFERENCE] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReference($v);
                    } else {
                        $this->addReference(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCE] instanceof FHIRResourceReference) {
                $this->addReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->addReference(new FHIRResourceReference($data[self::FIELD_REFERENCE]));
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
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getIdentifier(): null|FHIRUri
    {
        return $this->identifier;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $identifier
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIdentifier(null|string|FHIRUriPrimitive|FHIRUri $identifier = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $identifier && !($identifier instanceof FHIRUri)) {
            $identifier = new FHIRUri($identifier);
        }
        $this->_trackValueSet($this->identifier, $identifier);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IDENTIFIER])) {
            $this->_primitiveXmlLocations[self::FIELD_IDENTIFIER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IDENTIFIER][0] = $xmlLocation;
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome
     */
    public function getOutcome(): null|FHIRQueryOutcome
    {
        return $this->outcome;
    }

    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome $outcome
     * @return static
     */
    public function setOutcome(null|FHIRQueryOutcome $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRQueryOutcome();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getTotal(): null|FHIRInteger
    {
        return $this->total;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $total
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTotal(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $total = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $total && !($total instanceof FHIRInteger)) {
            $total = new FHIRInteger($total);
        }
        $this->_trackValueSet($this->total, $total);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TOTAL])) {
            $this->_primitiveXmlLocations[self::FIELD_TOTAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TOTAL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getParameter(): null|array
    {
        return $this->parameter;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $parameter
     * @return static
     */
    public function addParameter(null|FHIRExtension $parameter = null): self
    {
        if (null === $parameter) {
            $parameter = new FHIRExtension();
        }
        $this->_trackValueAdded();
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getFirst(): null|array
    {
        return $this->first;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $first
     * @return static
     */
    public function addFirst(null|FHIRExtension $first = null): self
    {
        if (null === $first) {
            $first = new FHIRExtension();
        }
        $this->_trackValueAdded();
        $this->first[] = $first;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getPrevious(): null|array
    {
        return $this->previous;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $previous
     * @return static
     */
    public function addPrevious(null|FHIRExtension $previous = null): self
    {
        if (null === $previous) {
            $previous = new FHIRExtension();
        }
        $this->_trackValueAdded();
        $this->previous[] = $previous;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getNext(): null|array
    {
        return $this->next;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $next
     * @return static
     */
    public function addNext(null|FHIRExtension $next = null): self
    {
        if (null === $next) {
            $next = new FHIRExtension();
        }
        $this->_trackValueAdded();
        $this->next[] = $next;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    public function getLast(): null|array
    {
        return $this->last;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $last
     * @return static
     */
    public function addLast(null|FHIRExtension $last = null): self
    {
        if (null === $last) {
            $last = new FHIRExtension();
        }
        $this->_trackValueAdded();
        $this->last[] = $last;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getReference(): null|array
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $reference
     * @return static
     */
    public function addReference(null|FHIRResourceReference $reference = null): self
    {
        if (null === $reference) {
            $reference = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->reference[] = $reference;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFirst())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FIRST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrevious())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PREVIOUS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLast())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LAST, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL])) {
            $v = $this->getTotal();
            foreach($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_TOTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL])) {
                        $errs[self::FIELD_TOTAL] = [];
                    }
                    $errs[self::FIELD_TOTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST])) {
            $v = $this->getFirst();
            foreach($validationRules[self::FIELD_FIRST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_FIRST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST])) {
                        $errs[self::FIELD_FIRST] = [];
                    }
                    $errs[self::FIELD_FIRST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_PREVIOUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREVIOUS])) {
                        $errs[self::FIELD_PREVIOUS] = [];
                    }
                    $errs[self::FIELD_PREVIOUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEXT])) {
            $v = $this->getNext();
            foreach($validationRules[self::FIELD_NEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_NEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEXT])) {
                        $errs[self::FIELD_NEXT] = [];
                    }
                    $errs[self::FIELD_NEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST])) {
            $v = $this->getLast();
            foreach($validationRules[self::FIELD_LAST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_LAST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST])) {
                        $errs[self::FIELD_LAST] = [];
                    }
                    $errs[self::FIELD_LAST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
        } else if (!($type instanceof FHIRQueryResponse)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->setIdentifier(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OUTCOME === $childName) {
                $type->setOutcome(FHIRQueryOutcome::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TOTAL === $childName) {
                $type->setTotal(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARAMETER === $childName) {
                $type->addParameter(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIRST === $childName) {
                $type->addFirst(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PREVIOUS === $childName) {
                $type->addPrevious(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NEXT === $childName) {
                $type->addNext(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LAST === $childName) {
                $type->addLast(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE === $childName) {
                $type->addReference(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            $pt = $type->getIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IDENTIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIdentifier((string)$attributes[self::FIELD_IDENTIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TOTAL])) {
            $pt = $type->getTotal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TOTAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTotal((string)$attributes[self::FIELD_TOTAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'QueryResponse', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IDENTIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIdentifier())) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TOTAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTotal())) {
            $xw->writeAttribute(self::FIELD_TOTAL, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_IDENTIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIdentifier())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOutcome())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TOTAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTotal())) {
            $xw->startElement(self::FIELD_TOTAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParameter() as $v) {
            $xw->startElement(self::FIELD_PARAMETER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFirst() as $v) {
            $xw->startElement(self::FIELD_FIRST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPrevious() as $v) {
            $xw->startElement(self::FIELD_PREVIOUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNext() as $v) {
            $xw->startElement(self::FIELD_NEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLast() as $v) {
            $xw->startElement(self::FIELD_LAST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReference() as $v) {
            $xw->startElement(self::FIELD_REFERENCE);
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
        if (null !== ($v = $this->getIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IDENTIFIER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IDENTIFIER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OUTCOME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRQueryOutcome::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OUTCOME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TOTAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TOTAL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $out->{self::FIELD_PARAMETER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARAMETER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFirst())) {
            $out->{self::FIELD_FIRST} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_FIRST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrevious())) {
            $out->{self::FIELD_PREVIOUS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PREVIOUS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNext())) {
            $out->{self::FIELD_NEXT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getLast())) {
            $out->{self::FIELD_LAST} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LAST}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            $out->{self::FIELD_REFERENCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REFERENCE}[] = $v;
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