<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation;

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
use PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek;
use PHPFHIRGenerated\FHIRElement\FHIRTime;

/**
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 *
 * Class FHIRLocationHoursOfOperation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation
 */
class FHIRLocationHoursOfOperation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Location.HoursOfOperation';

    /**
     * The Location is open all day.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $allDay = null;

    /**
     * Time that the Location closes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $closingTime = null;

    /**
     * Indicates which days of the week are available between the start and end Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek
     */
    public $daysOfWeek = null;

    /**
     * Time that the Location opens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $openingTime = null;

    /**
     * FHIRLocationHoursOfOperation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['allDay'])) {
                $this->setAllDay($data['allDay']);
            }
            if (isset($data['closingTime'])) {
                $this->setClosingTime($data['closingTime']);
            }
            if (isset($data['daysOfWeek'])) {
                $this->setDaysOfWeek($data['daysOfWeek']);
            }
            if (isset($data['openingTime'])) {
                $this->setOpeningTime($data['openingTime']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The Location is open all day.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAllDay($allDay)
    {
        if (null === $allDay) {
            return $this; 
        }
        if (is_scalar($allDay)) {
            $allDay = new FHIRBoolean($allDay);
        }
        if (!($allDay instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationHoursOfOperation::setAllDay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($allDay)
            ));
        }
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * The Location is open all day.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAllDay()
    {
        return $this->allDay;
    }


    /**
     * Time that the Location closes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setClosingTime($closingTime)
    {
        if (null === $closingTime) {
            return $this; 
        }
        if (is_scalar($closingTime)) {
            $closingTime = new FHIRTime($closingTime);
        }
        if (!($closingTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationHoursOfOperation::setClosingTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($closingTime)
            ));
        }
        $this->closingTime = $closingTime;
        return $this;
    }

    /**
     * Time that the Location closes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }


    /**
     * Indicates which days of the week are available between the start and end Times.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek
     * @return $this
     */
    public function setDaysOfWeek($daysOfWeek)
    {
        if (null === $daysOfWeek) {
            return $this; 
        }
        if (is_scalar($daysOfWeek)) {
            $daysOfWeek = new FHIRDaysOfWeek($daysOfWeek);
        }
        if (!($daysOfWeek instanceof FHIRDaysOfWeek)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationHoursOfOperation::setDaysOfWeek - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek or appropriate scalar value, %s seen.',
                gettype($daysOfWeek)
            ));
        }
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }

    /**
     * Indicates which days of the week are available between the start and end Times.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }


    /**
     * Time that the Location opens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setOpeningTime($openingTime)
    {
        if (null === $openingTime) {
            return $this; 
        }
        if (is_scalar($openingTime)) {
            $openingTime = new FHIRTime($openingTime);
        }
        if (!($openingTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationHoursOfOperation::setOpeningTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($openingTime)
            ));
        }
        $this->openingTime = $openingTime;
        return $this;
    }

    /**
     * Time that the Location opens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
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
        if (null !== ($v = $this->getAllDay())) {
            $a['allDay'] = $v;
        }
        if (null !== ($v = $this->getClosingTime())) {
            $a['closingTime'] = $v;
        }
        if (null !== ($v = $this->getDaysOfWeek())) {
            $a['daysOfWeek'] = $v;
        }
        if (null !== ($v = $this->getOpeningTime())) {
            $a['openingTime'] = $v;
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
            $sxe = new \SimpleXMLElement('<LocationHoursOfOperation xmlns="http://hl7.org/fhir"></LocationHoursOfOperation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}