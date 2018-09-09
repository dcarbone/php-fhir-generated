<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A ValueSet resource instances specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 *
 * Class FHIRValueSetExpansion
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetExpansion extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ValueSet.Expansion';

    /**
     * The codes that are contained in the value set expansion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains
     */
    public $contains = null;

    /**
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $identifier = null;

    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $offset = null;

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter
     */
    public $parameter = null;

    /**
     * The time at which the expansion was produced by the expanding system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timestamp = null;

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $total = null;

    /**
     * FHIRValueSetExpansion Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contains'])) {
                $this->setContains($data['contains']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['offset'])) {
                $this->setOffset($data['offset']);
            }
            if (isset($data['parameter'])) {
                $this->setParameter($data['parameter']);
            }
            if (isset($data['timestamp'])) {
                $this->setTimestamp($data['timestamp']);
            }
            if (isset($data['total'])) {
                $this->setTotal($data['total']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The codes that are contained in the value set expansion.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains
     * @return $this
     */
    public function setContains(FHIRValueSetContains $contains = null)
    {
        if (null === $contains) {
            return $this; 
        }
        $this->contains = $contains;
        return $this;
    }

    /**
     * The codes that are contained in the value set expansion.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains
     */
    public function getContains()
    {
        return $this->contains;
    }


    /**
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if (null === $identifier) {
            return $this; 
        }
        if (is_scalar($identifier)) {
            $identifier = new FHIRUri($identifier);
        }
        if (!($identifier instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetExpansion::setIdentifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($identifier)
            ));
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setOffset($offset)
    {
        if (null === $offset) {
            return $this; 
        }
        if (is_scalar($offset)) {
            $offset = new FHIRInteger($offset);
        }
        if (!($offset instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetExpansion::setOffset - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($offset)
            ));
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * If paging is being used, the offset at which this resource starts.  I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getOffset()
    {
        return $this->offset;
    }


    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter
     * @return $this
     */
    public function setParameter(FHIRValueSetParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }


    /**
     * The time at which the expansion was produced by the expanding system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        if (null === $timestamp) {
            return $this; 
        }
        if (is_scalar($timestamp)) {
            $timestamp = new FHIRDateTime($timestamp);
        }
        if (!($timestamp instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetExpansion::setTimestamp - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timestamp)
            ));
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * The time at which the expansion was produced by the expanding system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }


    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setTotal($total)
    {
        if (null === $total) {
            return $this; 
        }
        if (is_scalar($total)) {
            $total = new FHIRInteger($total);
        }
        if (!($total instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetExpansion::setTotal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($total)
            ));
        }
        $this->total = $total;
        return $this;
    }

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContains())) {
            $a['contains'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getOffset())) {
            $a['offset'] = $v;
        }
        if (null !== ($v = $this->getParameter())) {
            $a['parameter'] = $v;
        }
        if (null !== ($v = $this->getTimestamp())) {
            $a['timestamp'] = $v;
        }
        if (null !== ($v = $this->getTotal())) {
            $a['total'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ValueSetExpansion xmlns="http://hl7.org/fhir"></ValueSetExpansion>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}