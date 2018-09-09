<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization;

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
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationProtocolApplied
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationProtocolApplied extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Immunization.ProtocolApplied';

    /**
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * Nominal position in a series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $doseNumberPositiveInt = null;

    /**
     * Nominal position in a series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $doseNumberString = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * The vaccine preventable disease the dose is being administered against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $targetDisease = null;

    /**
     * FHIRImmunizationProtocolApplied Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authority'])) {
                $this->setAuthority($data['authority']);
            }
            if (isset($data['doseNumberPositiveInt'])) {
                $this->setDoseNumberPositiveInt($data['doseNumberPositiveInt']);
            }
            if (isset($data['doseNumberString'])) {
                $this->setDoseNumberString($data['doseNumberString']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['targetDisease'])) {
                $this->setTargetDisease($data['targetDisease']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthority(FHIRReference $authority = null)
    {
        if (null === $authority) {
            return $this; 
        }
        $this->authority = $authority;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }


    /**
     * Nominal position in a series.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDoseNumberPositiveInt($doseNumberPositiveInt)
    {
        if (null === $doseNumberPositiveInt) {
            return $this; 
        }
        if (is_scalar($doseNumberPositiveInt)) {
            $doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        }
        if (!($doseNumberPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationProtocolApplied::setDoseNumberPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($doseNumberPositiveInt)
            ));
        }
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * Nominal position in a series.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }


    /**
     * Nominal position in a series.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDoseNumberString($doseNumberString)
    {
        if (null === $doseNumberString) {
            return $this; 
        }
        if (is_scalar($doseNumberString)) {
            $doseNumberString = new FHIRString($doseNumberString);
        }
        if (!($doseNumberString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationProtocolApplied::setDoseNumberString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($doseNumberString)
            ));
        }
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * Nominal position in a series.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }


    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSeries($series)
    {
        if (null === $series) {
            return $this; 
        }
        if (is_scalar($series)) {
            $series = new FHIRString($series);
        }
        if (!($series instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationProtocolApplied::setSeries - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($series)
            ));
        }
        $this->series = $series;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }


    /**
     * The vaccine preventable disease the dose is being administered against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTargetDisease(FHIRCodeableConcept $targetDisease = null)
    {
        if (null === $targetDisease) {
            return $this; 
        }
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * The vaccine preventable disease the dose is being administered against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
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
        if (null !== ($v = $this->getAuthority())) {
            $a['authority'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a['doseNumberPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a['doseNumberString'] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a['series'] = $v;
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $a['targetDisease'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImmunizationProtocolApplied xmlns="http://hl7.org/fhir"></ImmunizationProtocolApplied>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}