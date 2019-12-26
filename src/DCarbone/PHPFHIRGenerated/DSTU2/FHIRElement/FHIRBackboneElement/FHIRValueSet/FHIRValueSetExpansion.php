<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetExpansion
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetExpansion extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION;
    const FIELD_CONTAINS = 'contains';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_OFFSET = 'offset';
    const FIELD_OFFSET_EXT = '_offset';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TIMESTAMP_EXT = '_timestamp';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[]
     */
    protected $contains = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that uniquely identifies this expansion of the valueset. Systems
     * may re-use the same identifier as long as the expansion and the definition
     * remain the same, but are not required to do so.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $identifier = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL not be present.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $offset = null;

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[]
     */
    protected $parameter = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $timestamp = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The total number of concepts in the expansion. If the number of concept nodes in
     * this resource is less than the stated number, then the server can return more
     * using the offset parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $total = null;

    /**
     * Validation map for fields in type ValueSet.Expansion
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRValueSetExpansion Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetExpansion::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTAINS])) {
            if (is_array($data[self::FIELD_CONTAINS])) {
                foreach($data[self::FIELD_CONTAINS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetContains) {
                        $this->addContains($v);
                    } else {
                        $this->addContains(new FHIRValueSetContains($v));
                    }
                }
            } else if ($data[self::FIELD_CONTAINS] instanceof FHIRValueSetContains) {
                $this->addContains($data[self::FIELD_CONTAINS]);
            } else {
                $this->addContains(new FHIRValueSetContains($data[self::FIELD_CONTAINS]));
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
        if (isset($data[self::FIELD_OFFSET]) || isset($data[self::FIELD_OFFSET_EXT])) {
            if (isset($data[self::FIELD_OFFSET])) {
                $value = $data[self::FIELD_OFFSET];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OFFSET_EXT]) && is_array($data[self::FIELD_OFFSET_EXT])) {
                $ext = $data[self::FIELD_OFFSET_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setOffset($value);
                } else if (is_array($value)) {
                    $this->setOffset(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setOffset(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOffset(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRValueSetParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRValueSetParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRValueSetParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_TIMESTAMP]) || isset($data[self::FIELD_TIMESTAMP_EXT])) {
            if (isset($data[self::FIELD_TIMESTAMP])) {
                $value = $data[self::FIELD_TIMESTAMP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIMESTAMP_EXT]) && is_array($data[self::FIELD_TIMESTAMP_EXT])) {
                $ext = $data[self::FIELD_TIMESTAMP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimestamp($value);
                } else if (is_array($value)) {
                    $this->setTimestamp(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimestamp(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimestamp(new FHIRDateTime($ext));
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
        return "<ValueSetExpansion{$xmlns}></ValueSetExpansion>";
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains $contains
     * @return static
     */
    public function addContains(FHIRValueSetContains $contains = null)
    {
        $this->contains[] = $contains;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains[] $contains
     * @return static
     */
    public function setContains(array $contains = [])
    {
        $this->contains = [];
        if ([] === $contains) {
            return $this;
        }
        foreach($contains as $v) {
            if ($v instanceof FHIRValueSetContains) {
                $this->addContains($v);
            } else {
                $this->addContains(new FHIRValueSetContains($v));
            }
        }
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $identifier
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If paging is being used, the offset at which this resource starts. I.e. this
     * resource is a partial view into the expansion. If paging is not being used, this
     * element SHALL not be present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getOffset()
    {
        return $this->offset;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $offset
     * @return static
     */
    public function setOffset($offset = null)
    {
        if (null === $offset) {
            $this->offset = null;
            return $this;
        }
        if ($offset instanceof FHIRInteger) {
            $this->offset = $offset;
            return $this;
        }
        $this->offset = new FHIRInteger($offset);
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * A parameter that controlled the expansion process. These parameters may be used
     * by users of expanded value sets to check whether the expansion is suitable for a
     * particular purpose, or to pick the correct expansion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter $parameter
     * @return static
     */
    public function addParameter(FHIRValueSetParameter $parameter = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRValueSetParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRValueSetParameter($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $timestamp
     * @return static
     */
    public function setTimestamp($timestamp = null)
    {
        if (null === $timestamp) {
            $this->timestamp = null;
            return $this;
        }
        if ($timestamp instanceof FHIRDateTime) {
            $this->timestamp = $timestamp;
            return $this;
        }
        $this->timestamp = new FHIRDateTime($timestamp);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getTotal()
    {
        return $this->total;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $total
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
        if ([] !== ($vs = $this->getContains())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTAINS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMESTAMP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINS])) {
            $v = $this->getContains();
            foreach($validationRules[self::FIELD_CONTAINS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_CONTAINS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINS])) {
                        $errs[self::FIELD_CONTAINS] = [];
                    }
                    $errs[self::FIELD_CONTAINS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET])) {
            $v = $this->getOffset();
            foreach($validationRules[self::FIELD_OFFSET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_OFFSET, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMESTAMP])) {
            $v = $this->getTimestamp();
            foreach($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_TIMESTAMP, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION, self::FIELD_TOTAL, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion
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
                throw new \DomainException(sprintf('FHIRValueSetExpansion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetExpansion::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetExpansion;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetExpansion)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetExpansion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion or null, %s seen.',
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
        if (isset($children->contains)) {
            foreach($children->contains as $child) {
                $type->addContains(FHIRValueSetContains::xmlUnserialize($child));
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
        if (isset($children->offset)) {
            $type->setOffset(FHIRInteger::xmlUnserialize($children->offset));
        }
        if (isset($attributes->offset)) {
            $pt = $type->getOffset();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->offset);
            } else {
                $type->setOffset((string)$attributes->offset);
            }
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRValueSetParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->timestamp)) {
            $type->setTimestamp(FHIRDateTime::xmlUnserialize($children->timestamp));
        }
        if (isset($attributes->timestamp)) {
            $pt = $type->getTimestamp();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timestamp);
            } else {
                $type->setTimestamp((string)$attributes->timestamp);
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
        if ([] !== ($vs = $this->getContains())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOffset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OFFSET, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMESTAMP, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getContains())) {
            $a[self::FIELD_CONTAINS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTAINS][] = $v;
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
        if (null !== ($v = $this->getOffset())) {
            $a[self::FIELD_OFFSET] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_OFFSET_EXT] = $enc;
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
        if (null !== ($v = $this->getTimestamp())) {
            $a[self::FIELD_TIMESTAMP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_TIMESTAMP_EXT] = $enc;
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