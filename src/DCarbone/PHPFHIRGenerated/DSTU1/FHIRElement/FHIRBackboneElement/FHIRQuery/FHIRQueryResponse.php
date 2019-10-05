<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 19:59+0000
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
    const FIELD_PARAMETER = 'parameter';
    const FIELD_PREVIOUS = 'previous';
    const FIELD_REFERENCE = 'reference';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $first = [];
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links response to source query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $identifier = null;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $last = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $next = [];
    /**
     * The outcome of processing a query request
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Outcome of processing the query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome
     */
    private $outcome = null;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $parameter = [];
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[]
     */
    private $previous = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $reference = [];
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Total number of matching records.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $total = null;

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
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRUri) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRUri($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LAST])) {
            if (is_array($data[self::FIELD_LAST])) {
                foreach($data[self::FIELD_LAST] as $v) {
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
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRQueryOutcome) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRQueryOutcome($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
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
        if (isset($data[self::FIELD_TOTAL])) {
            $ext = (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT]))
                ? $data[self::FIELD_TOTAL_EXT]
                : null;
            if ($data[self::FIELD_TOTAL] instanceof FHIRInteger) {
                $this->setTotal($data[self::FIELD_TOTAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_TOTAL])) {
                $this->setTotal(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_TOTAL]] + $ext));
            } else {
                $this->setTotal(new FHIRInteger($data[self::FIELD_TOTAL]));
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
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $first
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addFirst(FHIRExtension $first = null)
    {
        $this->first[] = $first;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get first page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $first
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links response to source query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $last
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addLast(FHIRExtension $last = null)
    {
        $this->last[] = $last;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get last page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $last
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $next
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addNext(FHIRExtension $next = null)
    {
        $this->next[] = $next;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get next page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $next
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Outcome of processing the query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome $outcome
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function setOutcome(FHIRQueryOutcome $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addParameter(FHIRExtension $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parameters server used.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension $previous
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addPrevious(FHIRExtension $previous = null)
    {
        $this->previous[] = $previous;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To get previous page (if paged).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension[] $previous
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $reference
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
     */
    public function addReference(FHIRResourceReference $reference = null)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Resources that are the results of the search.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $reference
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Total number of matching records.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $total
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse
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
                throw new \DomainException(sprintf('FHIRQueryResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQueryResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRQueryResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRQueryResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRQueryResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->first)) {
            foreach($children->first as $child) {
                $type->addFirst(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($attributes->identifier)) {
            $type->setIdentifier((string)$attributes->identifier);
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRUri::xmlUnserialize($children->identifier));
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
        if (isset($attributes->total)) {
            $type->setTotal((string)$attributes->total);
        }
        if (isset($children->total)) {
            $type->setTotal(FHIRInteger::xmlUnserialize($children->total));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<QueryResponse xmlns="http://hl7.org/fhir"></QueryResponse>');
        }
    parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getFirst())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FIRST));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $sxe->addAttribute(self::FIELD_IDENTIFIER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getLast())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST));
            }
        }

        if ([] !== ($vs = $this->getNext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NEXT));
            }
        }

        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
        }

        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER));
            }
        }

        if ([] !== ($vs = $this->getPrevious())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREVIOUS));
            }
        }

        if ([] !== ($vs = $this->getReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE));
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $sxe->addAttribute(self::FIELD_TOTAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL));
            }
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
            $a[self::FIELD_FIRST] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = (string)$v;
            $a[self::FIELD_IDENTIFIER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLast())) {
            $a[self::FIELD_LAST] = $vs;
        }
        if ([] !== ($vs = $this->getNext())) {
            $a[self::FIELD_NEXT] = $vs;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = $vs;
        }
        if ([] !== ($vs = $this->getPrevious())) {
            $a[self::FIELD_PREVIOUS] = $vs;
        }
        if ([] !== ($vs = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $vs;
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = (string)$v;
            $a[self::FIELD_TOTAL_EXT] = $v;
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