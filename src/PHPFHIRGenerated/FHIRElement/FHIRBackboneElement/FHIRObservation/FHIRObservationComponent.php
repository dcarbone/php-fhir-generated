<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation;

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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 *
 * Class FHIRObservationComponent
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation
 */
class FHIRObservationComponent extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Observation.Component';

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $dataAbsentReason = null;

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $interpretation = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    private $referenceRange = [];

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $valueAttachment = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $valuePeriod = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    private $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $valueTime = null;

    /**
     * FHIRObservationComponent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['dataAbsentReason'])) {
                $value = $data['dataAbsentReason'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"dataAbsentReason\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setDataAbsentReason($value);
            }
            if (isset($data['interpretation'])) {
                $value = $data['interpretation'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"interpretation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setInterpretation($value);
            }
            if (isset($data['referenceRange'])) {
                $value = $data['referenceRange'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRObservationReferenceRange($v);
                        } 
                        if (!($v instanceof FHIRObservationReferenceRange)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Collection field \"referenceRange\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange or data to construct type, saw ".gettype($v));
                        }
                        $this->addReferenceRange($v);
                    }
                }
            }
            if (isset($data['valueAttachment'])) {
                $value = $data['valueAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value));
                }
                $this->setValueAttachment($value);
            }
            if (isset($data['valueCodeableConcept'])) {
                $value = $data['valueCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setValueCodeableConcept($value);
            }
            if (isset($data['valueDateTime'])) {
                $value = $data['valueDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setValueDateTime($value);
            }
            if (isset($data['valuePeriod'])) {
                $value = $data['valuePeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valuePeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setValuePeriod($value);
            }
            if (isset($data['valueQuantity'])) {
                $value = $data['valueQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setValueQuantity($value);
            }
            if (isset($data['valueRange'])) {
                $value = $data['valueRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setValueRange($value);
            }
            if (isset($data['valueRatio'])) {
                $value = $data['valueRatio'];
                if (is_array($value)) {
                    $value = new FHIRRatio($value);
                } 
                if (!($value instanceof FHIRRatio)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueRatio\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRatio or data to construct type, saw ".gettype($value));
                }
                $this->setValueRatio($value);
            }
            if (isset($data['valueSampledData'])) {
                $value = $data['valueSampledData'];
                if (is_array($value)) {
                    $value = new FHIRSampledData($value);
                } 
                if (!($value instanceof FHIRSampledData)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueSampledData\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSampledData or data to construct type, saw ".gettype($value));
                }
                $this->setValueSampledData($value);
            }
            if (isset($data['valueString'])) {
                $value = $data['valueString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setValueString($value);
            }
            if (isset($data['valueTime'])) {
                $value = $data['valueTime'];
                if (is_array($value)) {
                    $value = new FHIRTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTime($value);
                }
                if (!($value instanceof FHIRTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Property \"valueTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or data to construct type, saw ".gettype($value));
                }
                $this->setValueTime($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDataAbsentReason(FHIRCodeableConcept $dataAbsentReason = null)
    {
        if (null === $dataAbsentReason) {
            return $this; 
        }
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setInterpretation(FHIRCodeableConcept $interpretation = null)
    {
        if (null === $interpretation) {
            return $this; 
        }
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     * @return $this
     */
    public function addReferenceRange(FHIRObservationReferenceRange $referenceRange = null)
    {
        if (null === $referenceRange) {
            return $this; 
        }
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        if (null === $valueAttachment) {
            return $this; 
        }
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        if (null === $valueCodeableConcept) {
            return $this; 
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        if (null === $valuePeriod) {
            return $this; 
        }
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        if (null === $valueQuantity) {
            return $this; 
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        if (null === $valueRange) {
            return $this; 
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        if (null === $valueRatio) {
            return $this; 
        }
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        if (null === $valueSampledData) {
            return $this; 
        }
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValueString($valueString)
    {
        if (null === $valueString) {
            return $this; 
        }
        if (is_scalar($valueString)) {
            $valueString = new FHIRString($valueString);
        }
        if (!($valueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        if (null === $valueTime) {
            return $this; 
        }
        if (is_scalar($valueTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        if (!($valueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($valueTime)
            ));
        }
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $a['dataAbsentReason'] = $v;
        }
        if (null !== ($v = $this->getInterpretation())) {
            $a['interpretation'] = $v;
        }
        if (0 < count($values = $this->getReferenceRange())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['referenceRange'] = $vs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a['valueAttachment'] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a['valueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a['valuePeriod'] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a['valueQuantity'] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a['valueRange'] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a['valueRatio'] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a['valueSampledData'] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a['valueString'] = $v;
        }
        if (null !== ($v = $this->getValueTime())) {
            $a['valueTime'] = $v;
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
            $sxe = new \SimpleXMLElement('<ObservationComponent xmlns="http://hl7.org/fhir"></ObservationComponent>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $v->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        }
        if (null !== ($v = $this->getInterpretation())) {
            $v->xmlSerialize(true, $sxe->addChild('interpretation'));
        }
        if (0 < count($values = $this->getReferenceRange())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('referenceRange'));
                }
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        }
        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize(true, $sxe->addChild('valueRange'));
        }
        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize(true, $sxe->addChild('valueRatio'));
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize(true, $sxe->addChild('valueString'));
        }
        if (null !== ($v = $this->getValueTime())) {
            $v->xmlSerialize(true, $sxe->addChild('valueTime'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}