<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery;

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
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

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
    const FIELD_FIRST = 'first';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LAST = 'last';
    const FIELD_NEXT = 'next';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_PREVIOUS = 'previous';
    const FIELD_REFERENCE = 'reference';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected $first = [];

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $identifier = null;

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected $last = [];

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected $next = [];

    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Outcome of processing the query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome
     */
    protected $outcome = null;

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected $parameter = [];

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    protected $previous = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $reference = [];

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $total = null;

    /**
     * Validation map for fields in type Query.Response
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRQueryResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQueryResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FIRST])) {
            if (is_array($data[self::FIELD_FIRST])) {
                foreach($data[self::FIELD_FIRST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addFirst($v);
                    } else {
                        $this->addFirst(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_FIRST] instanceof FHIRExtension) {
                $this->addFirst($data[self::FIELD_FIRST]);
            } else {
                $this->addFirst(new FHIRExtension($data[self::FIELD_FIRST]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER]) || isset($data[self::FIELD_IDENTIFIER_EXT])) {
            if (isset($data[self::FIELD_IDENTIFIER])) {
                $value = $data[self::FIELD_IDENTIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT])) {
                $ext = $data[self::FIELD_IDENTIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setIdentifier($value);
                } else if (is_array($value)) {
                    $this->setIdentifier(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setIdentifier(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIdentifier(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_LAST])) {
            if (is_array($data[self::FIELD_LAST])) {
                foreach($data[self::FIELD_LAST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addLast($v);
                    } else {
                        $this->addLast(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_LAST] instanceof FHIRExtension) {
                $this->addLast($data[self::FIELD_LAST]);
            } else {
                $this->addLast(new FHIRExtension($data[self::FIELD_LAST]));
            }
        }
        if (isset($data[self::FIELD_NEXT])) {
            if (is_array($data[self::FIELD_NEXT])) {
                foreach($data[self::FIELD_NEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addNext($v);
                    } else {
                        $this->addNext(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_NEXT] instanceof FHIRExtension) {
                $this->addNext($data[self::FIELD_NEXT]);
            } else {
                $this->addNext(new FHIRExtension($data[self::FIELD_NEXT]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME]) || isset($data[self::FIELD_OUTCOME_EXT])) {
            if (isset($data[self::FIELD_OUTCOME])) {
                $value = $data[self::FIELD_OUTCOME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])) {
                $ext = $data[self::FIELD_OUTCOME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRQueryOutcome) {
                    $this->setOutcome($value);
                } else if (is_array($value)) {
                    $this->setOutcome(new FHIRQueryOutcome(array_merge($ext, $value)));
                } else {
                    $this->setOutcome(new FHIRQueryOutcome([FHIRQueryOutcome::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOutcome(new FHIRQueryOutcome($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRExtension) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRExtension($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_PREVIOUS])) {
            if (is_array($data[self::FIELD_PREVIOUS])) {
                foreach($data[self::FIELD_PREVIOUS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addPrevious($v);
                    } else {
                        $this->addPrevious(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_PREVIOUS] instanceof FHIRExtension) {
                $this->addPrevious($data[self::FIELD_PREVIOUS]);
            } else {
                $this->addPrevious(new FHIRExtension($data[self::FIELD_PREVIOUS]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if (is_array($data[self::FIELD_REFERENCE])) {
                foreach($data[self::FIELD_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReference($v);
                    } else {
                        $this->addReference(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCE] instanceof FHIRResourceReference) {
                $this->addReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->addReference(new FHIRResourceReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TOTAL]) || isset($data[self::FIELD_TOTAL_EXT])) {
            if (isset($data[self::FIELD_TOTAL])) {
                $value = $data[self::FIELD_TOTAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT])) {
                $ext = $data[self::FIELD_TOTAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setTotal($value);
                } else if (is_array($value)) {
                    $this->setTotal(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setTotal(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTotal(new FHIRInteger($ext));
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
        return "<QueryResponse{$xmlns}></QueryResponse>";
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
    public function getFirst()
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
    public function addFirst(FHIRExtension $first = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $first
     * @return static
     */
    public function setFirst(array $first = [])
    {
        $this->first = [];
        if ([] === $first) {
            return $this;
        }
        foreach($first as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addFirst($v);
            } else {
                $this->addFirst(new FHIRExtension($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links response to source query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $identifier
     * @return static
     */
    public function setIdentifier($identifier = null)
    {
        if (null === $identifier) {
            $this->identifier = null;
            return $this;
        }
        if ($identifier instanceof FHIRUri) {
            $this->identifier = $identifier;
            return $this;
        }
        $this->identifier = new FHIRUri($identifier);
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
    public function getLast()
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
    public function addLast(FHIRExtension $last = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $last
     * @return static
     */
    public function setLast(array $last = [])
    {
        $this->last = [];
        if ([] === $last) {
            return $this;
        }
        foreach($last as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addLast($v);
            } else {
                $this->addLast(new FHIRExtension($v));
            }
        }
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
    public function getNext()
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
    public function addNext(FHIRExtension $next = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $next
     * @return static
     */
    public function setNext(array $next = [])
    {
        $this->next = [];
        if ([] === $next) {
            return $this;
        }
        foreach($next as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addNext($v);
            } else {
                $this->addNext(new FHIRExtension($v));
            }
        }
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
    public function getOutcome()
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
    public function setOutcome(FHIRQueryOutcome $outcome = null)
    {
        $this->outcome = $outcome;
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
    public function getParameter()
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
    public function addParameter(FHIRExtension $parameter = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRExtension($v));
            }
        }
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
    public function getPrevious()
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
    public function addPrevious(FHIRExtension $previous = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $previous
     * @return static
     */
    public function setPrevious(array $previous = [])
    {
        $this->previous = [];
        if ([] === $previous) {
            return $this;
        }
        foreach($previous as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addPrevious($v);
            } else {
                $this->addPrevious(new FHIRExtension($v));
            }
        }
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
    public function getReference()
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
    public function addReference(FHIRResourceReference $reference = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $reference
     * @return static
     */
    public function setReference(array $reference = [])
    {
        $this->reference = [];
        if ([] === $reference) {
            return $this;
        }
        foreach($reference as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addReference($v);
            } else {
                $this->addReference(new FHIRResourceReference($v));
            }
        }
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
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Total number of matching records.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $total
     * @return static
     */
    public function setTotal($total = null)
    {
        if (null === $total) {
            $this->total = null;
            return $this;
        }
        if ($total instanceof FHIRInteger) {
            $this->total = $total;
            return $this;
        }
        $this->total = new FHIRInteger($total);
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
        if ([] !== ($vs = $this->getFirst())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FIRST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLast())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LAST, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
                throw new \DomainException(sprintf('FHIRQueryResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQueryResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQueryResponse;
        } elseif (!is_object($type) || !($type instanceof FHIRQueryResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRQueryResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->first)) {
            foreach($children->first as $child) {
                $type->addFirst(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRUri::xmlUnserialize($children->identifier));
        }
        if (isset($attributes->identifier)) {
            $pt = $type->getIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->identifier);
            } else {
                $type->setIdentifier((string)$attributes->identifier);
            }
        }
        if (isset($children->last)) {
            foreach($children->last as $child) {
                $type->addLast(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->next)) {
            foreach($children->next as $child) {
                $type->addNext(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRQueryOutcome::xmlUnserialize($children->outcome));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->previous)) {
            foreach($children->previous as $child) {
                $type->addPrevious(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->reference)) {
            foreach($children->reference as $child) {
                $type->addReference(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->total)) {
            $type->setTotal(FHIRInteger::xmlUnserialize($children->total));
        }
        if (isset($attributes->total)) {
            $pt = $type->getTotal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->total);
            } else {
                $type->setTotal((string)$attributes->total);
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
        if ([] !== ($vs = $this->getFirst())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FIRST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLast())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NEXT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPrevious())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREVIOUS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getFirst())) {
            $a[self::FIELD_FIRST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FIRST][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_IDENTIFIER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLast())) {
            $a[self::FIELD_LAST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LAST][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNext())) {
            $a[self::FIELD_NEXT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NEXT][] = $v;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRQueryOutcome::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRQueryOutcome::FIELD_VALUE]);
                $a[self::FIELD_OUTCOME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARAMETER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrevious())) {
            $a[self::FIELD_PREVIOUS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PREVIOUS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_TOTAL_EXT] = $enc;
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