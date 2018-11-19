<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Demographics and administrative information about a person independent of a specific health-related context.
 *
 * Class FHIRPersonLink
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson
 */
class FHIRPersonLink extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Person.Link';

    /**
     * Level of assurance that this link is actually associated with the target resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel
     */
    private $assurance = null;

    /**
     * The resource to which this actual person is associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $target = null;

    /**
     * FHIRPersonLink Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['assurance'])) {
                $value = $data['assurance'];
                if (is_array($value)) {
                    $value = new FHIRIdentityAssuranceLevel($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRIdentityAssuranceLevel($value);
                }
                if (!($value instanceof FHIRIdentityAssuranceLevel)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink::__construct - Property \"assurance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel or data to construct type, saw ".gettype($value)); 
                }
                $this->setAssurance($value);
            }
            if (isset($data['target'])) {
                $value = $data['target'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink::__construct - Property \"target\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setTarget($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Level of assurance that this link is actually associated with the target resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel
     * @return $this
     */
    public function setAssurance($assurance)
    {
        if (null === $assurance) {
            return $this; 
        }
        if (is_scalar($assurance)) {
            $assurance = new FHIRIdentityAssuranceLevel($assurance);
        }
        if (!($assurance instanceof FHIRIdentityAssuranceLevel)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPersonLink::setAssurance - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel or appropriate scalar value, %s seen.',
                gettype($assurance)
            ));
        }
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Level of assurance that this link is actually associated with the target resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * The resource to which this actual person is associated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTarget(FHIRReference $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * The resource to which this actual person is associated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
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
        if (null !== ($v = $this->getAssurance())) {
            $a['assurance'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<PersonLink xmlns="http://hl7.org/fhir"></PersonLink>');
        }
        if (null !== ($v = $this->getAssurance())) {
            $v->xmlSerialize(true, $sxe->addChild('assurance'));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize(true, $sxe->addChild('target'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}