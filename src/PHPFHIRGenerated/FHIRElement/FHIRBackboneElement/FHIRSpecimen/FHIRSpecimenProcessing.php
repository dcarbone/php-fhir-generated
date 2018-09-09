<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen;

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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A sample to be used for analysis.
 *
 * Class FHIRSpecimenProcessing
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen
 */
class FHIRSpecimenProcessing extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Specimen.Processing';

    /**
     * Material used in the processing step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $additive = null;

    /**
     * Textual description of procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A coded value specifying the procedure used to process the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $procedure = null;

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timeDateTime = null;

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timePeriod = null;

    /**
     * FHIRSpecimenProcessing Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additive'])) {
                $this->setAdditive($data['additive']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['procedure'])) {
                $this->setProcedure($data['procedure']);
            }
            if (isset($data['timeDateTime'])) {
                $this->setTimeDateTime($data['timeDateTime']);
            }
            if (isset($data['timePeriod'])) {
                $this->setTimePeriod($data['timePeriod']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Material used in the processing step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAdditive(FHIRReference $additive = null)
    {
        if (null === $additive) {
            return $this; 
        }
        $this->additive = $additive;
        return $this;
    }

    /**
     * Material used in the processing step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAdditive()
    {
        return $this->additive;
    }


    /**
     * Textual description of procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenProcessing::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Textual description of procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A coded value specifying the procedure used to process the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProcedure(FHIRCodeableConcept $procedure = null)
    {
        if (null === $procedure) {
            return $this; 
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * A coded value specifying the procedure used to process the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProcedure()
    {
        return $this->procedure;
    }


    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimeDateTime($timeDateTime)
    {
        if (null === $timeDateTime) {
            return $this; 
        }
        if (is_scalar($timeDateTime)) {
            $timeDateTime = new FHIRDateTime($timeDateTime);
        }
        if (!($timeDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenProcessing::setTimeDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timeDateTime)
            ));
        }
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }


    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setTimePeriod(FHIRPeriod $timePeriod = null)
    {
        if (null === $timePeriod) {
            return $this; 
        }
        $this->timePeriod = $timePeriod;
        return $this;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
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
        if (null !== ($v = $this->getAdditive())) {
            $a['additive'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            $a['procedure'] = $v;
        }
        if (null !== ($v = $this->getTimeDateTime())) {
            $a['timeDateTime'] = $v;
        }
        if (null !== ($v = $this->getTimePeriod())) {
            $a['timePeriod'] = $v;
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
            $sxe = new \SimpleXMLElement('<SpecimenProcessing xmlns="http://hl7.org/fhir"></SpecimenProcessing>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}