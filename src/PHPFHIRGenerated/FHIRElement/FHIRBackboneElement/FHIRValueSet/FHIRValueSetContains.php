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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A ValueSet resource instances specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 *
 * Class FHIRValueSetContains
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetContains extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ValueSet.Contains';

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Other codes and entries contained under this entry in the hierarchy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains
     */
    public $contains = null;

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation
     */
    public $designation = null;

    /**
     * The recommended display for this item in the expansion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether an concept is inactive (and it may depend on the context of use).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $inactive = null;

    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRValueSetContains Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['abstract'])) {
                $this->setAbstract($data['abstract']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['contains'])) {
                $this->setContains($data['contains']);
            }
            if (isset($data['designation'])) {
                $this->setDesignation($data['designation']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['inactive'])) {
                $this->setInactive($data['inactive']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAbstract($abstract)
    {
        if (null === $abstract) {
            return $this; 
        }
        if (is_scalar($abstract)) {
            $abstract = new FHIRBoolean($abstract);
        }
        if (!($abstract instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetContains::setAbstract - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($abstract)
            ));
        }
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }


    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetContains::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Other codes and entries contained under this entry in the hierarchy.
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
     * Other codes and entries contained under this entry in the hierarchy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains
     */
    public function getContains()
    {
        return $this->contains;
    }


    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation
     * @return $this
     */
    public function setDesignation(FHIRValueSetDesignation $designation = null)
    {
        if (null === $designation) {
            return $this; 
        }
        $this->designation = $designation;
        return $this;
    }

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation
     */
    public function getDesignation()
    {
        return $this->designation;
    }


    /**
     * The recommended display for this item in the expansion.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisplay($display)
    {
        if (null === $display) {
            return $this; 
        }
        if (is_scalar($display)) {
            $display = new FHIRString($display);
        }
        if (!($display instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetContains::setDisplay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($display)
            ));
        }
        $this->display = $display;
        return $this;
    }

    /**
     * The recommended display for this item in the expansion.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }


    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether an concept is inactive (and it may depend on the context of use).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setInactive($inactive)
    {
        if (null === $inactive) {
            return $this; 
        }
        if (is_scalar($inactive)) {
            $inactive = new FHIRBoolean($inactive);
        }
        if (!($inactive instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetContains::setInactive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($inactive)
            ));
        }
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether an concept is inactive (and it may depend on the context of use).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInactive()
    {
        return $this->inactive;
    }


    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
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
                'FHIRValueSetContains::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
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
                'FHIRValueSetContains::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
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
        if (null !== ($v = $this->getAbstract())) {
            $a['abstract'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContains())) {
            $a['contains'] = $v;
        }
        if (null !== ($v = $this->getDesignation())) {
            $a['designation'] = $v;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a['display'] = $v;
        }
        if (null !== ($v = $this->getInactive())) {
            $a['inactive'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
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
            $sxe = new \SimpleXMLElement('<ValueSetContains xmlns="http://hl7.org/fhir"></ValueSetContains>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}