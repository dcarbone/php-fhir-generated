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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A ValueSet resource instances specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 *
 * Class FHIRValueSetInclude
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetInclude extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ValueSet.Include';

    /**
     * Specifies a concept to be included or excluded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
     */
    public $concept = null;

    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter
     */
    public $filter = null;

    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url.  If multiple value sets are specified this includes the union of the contents of all of the referenced value sets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $valueSet = null;

    /**
     * The version of the code system that the codes are selected from, or the special version "*" for all versions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRValueSetInclude Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['concept'])) {
                $this->setConcept($data['concept']);
            }
            if (isset($data['filter'])) {
                $this->setFilter($data['filter']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['valueSet'])) {
                $this->setValueSet($data['valueSet']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Specifies a concept to be included or excluded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
     * @return $this
     */
    public function setConcept(FHIRValueSetConcept $concept = null)
    {
        if (null === $concept) {
            return $this; 
        }
        $this->concept = $concept;
        return $this;
    }

    /**
     * Specifies a concept to be included or excluded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
     */
    public function getConcept()
    {
        return $this->concept;
    }


    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter
     * @return $this
     */
    public function setFilter(FHIRValueSetFilter $filter = null)
    {
        if (null === $filter) {
            return $this; 
        }
        $this->filter = $filter;
        return $this;
    }

    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter
     */
    public function getFilter()
    {
        return $this->filter;
    }


    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSystem($system)
    {
        if (null === $system) {
            return $this; 
        }
        if (is_scalar($system)) {
            $system = new FHIRUri($system);
        }
        if (!($system instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetInclude::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url.  If multiple value sets are specified this includes the union of the contents of all of the referenced value sets.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setValueSet($valueSet)
    {
        if (null === $valueSet) {
            return $this; 
        }
        if (is_scalar($valueSet)) {
            $valueSet = new FHIRCanonical($valueSet);
        }
        if (!($valueSet instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetInclude::setValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($valueSet)
            ));
        }
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url.  If multiple value sets are specified this includes the union of the contents of all of the referenced value sets.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }


    /**
     * The version of the code system that the codes are selected from, or the special version "*" for all versions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVersion($version)
    {
        if (null === $version) {
            return $this; 
        }
        if (is_scalar($version)) {
            $version = new FHIRString($version);
        }
        if (!($version instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetInclude::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The version of the code system that the codes are selected from, or the special version "*" for all versions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getConcept())) {
            $a['concept'] = $v;
        }
        if (null !== ($v = $this->getFilter())) {
            $a['filter'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            $a['valueSet'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<ValueSetInclude xmlns="http://hl7.org/fhir"></ValueSetInclude>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}