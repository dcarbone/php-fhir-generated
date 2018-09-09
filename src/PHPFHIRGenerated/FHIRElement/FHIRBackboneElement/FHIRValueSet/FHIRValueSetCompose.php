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
use PHPFHIRGenerated\FHIRElement\FHIRDate;

/**
 * A ValueSet resource instances specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 *
 * Class FHIRValueSetCompose
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetCompose extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ValueSet.Compose';

    /**
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     */
    public $exclude = null;

    /**
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $inactive = null;

    /**
     * Include one or more codes from a code system or other value set(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     */
    public $include = null;

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version as of the locked date for referenced code system(s) and value set instances where ValueSet.compose.include.version is not defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $lockedDate = null;

    /**
     * FHIRValueSetCompose Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['exclude'])) {
                $this->setExclude($data['exclude']);
            }
            if (isset($data['inactive'])) {
                $this->setInactive($data['inactive']);
            }
            if (isset($data['include'])) {
                $this->setInclude($data['include']);
            }
            if (isset($data['lockedDate'])) {
                $this->setLockedDate($data['lockedDate']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     * @return $this
     */
    public function setExclude(FHIRValueSetInclude $exclude = null)
    {
        if (null === $exclude) {
            return $this; 
        }
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     */
    public function getExclude()
    {
        return $this->exclude;
    }


    /**
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
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
                'FHIRValueSetCompose::setInactive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($inactive)
            ));
        }
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInactive()
    {
        return $this->inactive;
    }


    /**
     * Include one or more codes from a code system or other value set(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     * @return $this
     */
    public function setInclude(FHIRValueSetInclude $include = null)
    {
        if (null === $include) {
            return $this; 
        }
        $this->include = $include;
        return $this;
    }

    /**
     * Include one or more codes from a code system or other value set(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
     */
    public function getInclude()
    {
        return $this->include;
    }


    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version as of the locked date for referenced code system(s) and value set instances where ValueSet.compose.include.version is not defined.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setLockedDate($lockedDate)
    {
        if (null === $lockedDate) {
            return $this; 
        }
        if (is_scalar($lockedDate)) {
            $lockedDate = new FHIRDate($lockedDate);
        }
        if (!($lockedDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetCompose::setLockedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($lockedDate)
            ));
        }
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version as of the locked date for referenced code system(s) and value set instances where ValueSet.compose.include.version is not defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
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
        if (null !== ($v = $this->getExclude())) {
            $a['exclude'] = $v;
        }
        if (null !== ($v = $this->getInactive())) {
            $a['inactive'] = $v;
        }
        if (null !== ($v = $this->getInclude())) {
            $a['include'] = $v;
        }
        if (null !== ($v = $this->getLockedDate())) {
            $a['lockedDate'] = $v;
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
            $sxe = new \SimpleXMLElement('<ValueSetCompose xmlns="http://hl7.org/fhir"></ValueSetCompose>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}