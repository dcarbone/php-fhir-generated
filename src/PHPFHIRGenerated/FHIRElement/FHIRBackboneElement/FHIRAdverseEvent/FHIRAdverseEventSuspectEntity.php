<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

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

use PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 *
 * Class FHIRAdverseEventSuspectEntity
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AdverseEvent.SuspectEntity';

    /**
     * causality1 | causality2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality
     */
    private $causality = null;

    /**
     * assess1 | assess2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $causalityAssessment = null;

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $causalityAuthor = null;

    /**
     * method1 | method2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $causalityMethod = null;

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $causalityProductRelatedness = null;

    /**
     * result1 | result2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $causalityResult = null;

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $instance = null;

    /**
     * FHIRAdverseEventSuspectEntity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['causality'])) {
                $value = $data['causality'];
                if (is_array($value)) {
                    $value = new FHIRAdverseEventCausality($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAdverseEventCausality($value);
                }
                if (!($value instanceof FHIRAdverseEventCausality)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causality\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality or data to construct type, saw ".gettype($value));
                }
                $this->setCausality($value);
            }
            if (isset($data['causalityAssessment'])) {
                $value = $data['causalityAssessment'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causalityAssessment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCausalityAssessment($value);
            }
            if (isset($data['causalityAuthor'])) {
                $value = $data['causalityAuthor'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causalityAuthor\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setCausalityAuthor($value);
            }
            if (isset($data['causalityMethod'])) {
                $value = $data['causalityMethod'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causalityMethod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCausalityMethod($value);
            }
            if (isset($data['causalityProductRelatedness'])) {
                $value = $data['causalityProductRelatedness'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causalityProductRelatedness\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setCausalityProductRelatedness($value);
            }
            if (isset($data['causalityResult'])) {
                $value = $data['causalityResult'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"causalityResult\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCausalityResult($value);
            }
            if (isset($data['instance'])) {
                $value = $data['instance'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Property \"instance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setInstance($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * causality1 | causality2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality
     * @return $this
     */
    public function setCausality($causality)
    {
        if (null === $causality) {
            return $this; 
        }
        if (is_scalar($causality)) {
            $causality = new FHIRAdverseEventCausality($causality);
        }
        if (!($causality instanceof FHIRAdverseEventCausality)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEventSuspectEntity::setCausality - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality or appropriate scalar value, %s seen.',
                gettype($causality)
            ));
        }
        $this->causality = $causality;
        return $this;
    }

    /**
     * causality1 | causality2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * assess1 | assess2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCausalityAssessment(FHIRCodeableConcept $causalityAssessment = null)
    {
        if (null === $causalityAssessment) {
            return $this; 
        }
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * assess1 | assess2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment()
    {
        return $this->causalityAssessment;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCausalityAuthor(FHIRReference $causalityAuthor = null)
    {
        if (null === $causalityAuthor) {
            return $this; 
        }
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor()
    {
        return $this->causalityAuthor;
    }

    /**
     * method1 | method2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCausalityMethod(FHIRCodeableConcept $causalityMethod = null)
    {
        if (null === $causalityMethod) {
            return $this; 
        }
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * method1 | method2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod()
    {
        return $this->causalityMethod;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCausalityProductRelatedness($causalityProductRelatedness)
    {
        if (null === $causalityProductRelatedness) {
            return $this; 
        }
        if (is_scalar($causalityProductRelatedness)) {
            $causalityProductRelatedness = new FHIRString($causalityProductRelatedness);
        }
        if (!($causalityProductRelatedness instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEventSuspectEntity::setCausalityProductRelatedness - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($causalityProductRelatedness)
            ));
        }
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness()
    {
        return $this->causalityProductRelatedness;
    }

    /**
     * result1 | result2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCausalityResult(FHIRCodeableConcept $causalityResult = null)
    {
        if (null === $causalityResult) {
            return $this; 
        }
        $this->causalityResult = $causalityResult;
        return $this;
    }

    /**
     * result1 | result2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult()
    {
        return $this->causalityResult;
    }

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInstance(FHIRReference $instance = null)
    {
        if (null === $instance) {
            return $this; 
        }
        $this->instance = $instance;
        return $this;
    }

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInstance()
    {
        return $this->instance;
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
        if (null !== ($v = $this->getCausality())) {
            $a['causality'] = $v;
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $a['causalityAssessment'] = $v;
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $a['causalityAuthor'] = $v;
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $a['causalityMethod'] = $v;
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $a['causalityProductRelatedness'] = $v;
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $a['causalityResult'] = $v;
        }
        if (null !== ($v = $this->getInstance())) {
            $a['instance'] = $v;
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
            $sxe = new \SimpleXMLElement('<AdverseEventSuspectEntity xmlns="http://hl7.org/fhir"></AdverseEventSuspectEntity>');
        }
        if (null !== ($v = $this->getCausality())) {
            $v->xmlSerialize(true, $sxe->addChild('causality'));
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $v->xmlSerialize(true, $sxe->addChild('causalityAssessment'));
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $v->xmlSerialize(true, $sxe->addChild('causalityAuthor'));
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $v->xmlSerialize(true, $sxe->addChild('causalityMethod'));
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $v->xmlSerialize(true, $sxe->addChild('causalityProductRelatedness'));
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $v->xmlSerialize(true, $sxe->addChild('causalityResult'));
        }
        if (null !== ($v = $this->getInstance())) {
            $v->xmlSerialize(true, $sxe->addChild('instance'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}