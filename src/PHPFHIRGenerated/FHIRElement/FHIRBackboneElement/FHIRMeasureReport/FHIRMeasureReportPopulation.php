<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 *
 * Class FHIRMeasureReportPopulation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport
 */
class FHIRMeasureReportPopulation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MeasureReport.Population';

    /**
     * The type of the population.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * The number of members of the population.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $count = null;

    /**
     * The identifier of the population being reported, as defined by the population element of the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * This element refers to a List of patient level MeasureReport resources, one for each patient in this population.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patients = null;

    /**
     * FHIRMeasureReportPopulation Constructor
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
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['count'])) {
                $value = $data['count'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation::__construct - Property \"count\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setCount($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setIdentifier($value);
            }
            if (isset($data['patients'])) {
                $value = $data['patients'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation::__construct - Property \"patients\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPatients($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The type of the population.
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
     * The type of the population.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The number of members of the population.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setCount($count)
    {
        if (null === $count) {
            return $this; 
        }
        if (is_scalar($count)) {
            $count = new FHIRInteger($count);
        }
        if (!($count instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReportPopulation::setCount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($count)
            ));
        }
        $this->count = $count;
        return $this;
    }

    /**
     * The number of members of the population.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The identifier of the population being reported, as defined by the population element of the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier of the population being reported, as defined by the population element of the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This element refers to a List of patient level MeasureReport resources, one for each patient in this population.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatients(FHIRReference $patients = null)
    {
        if (null === $patients) {
            return $this; 
        }
        $this->patients = $patients;
        return $this;
    }

    /**
     * This element refers to a List of patient level MeasureReport resources, one for each patient in this population.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatients()
    {
        return $this->patients;
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
        if (null !== ($v = $this->getCount())) {
            $a['count'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getPatients())) {
            $a['patients'] = $v;
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
            $sxe = new \SimpleXMLElement('<MeasureReportPopulation xmlns="http://hl7.org/fhir"></MeasureReportPopulation>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getCount())) {
            $v->xmlSerialize(true, $sxe->addChild('count'));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (null !== ($v = $this->getPatients())) {
            $v->xmlSerialize(true, $sxe->addChild('patients'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}