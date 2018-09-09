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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A sample to be used for analysis.
 *
 * Class FHIRSpecimenCollection
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen
 */
class FHIRSpecimenCollection extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Specimen.Collection';

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $collectedDateTime = null;

    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $collectedPeriod = null;

    /**
     * Person who collected the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $collector = null;

    /**
     * The span of time over which the collection of a specimen occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $duration = null;

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fastingStatusCodeableConcept = null;

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $fastingStatusDuration = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * FHIRSpecimenCollection Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['collectedDateTime'])) {
                $this->setCollectedDateTime($data['collectedDateTime']);
            }
            if (isset($data['collectedPeriod'])) {
                $this->setCollectedPeriod($data['collectedPeriod']);
            }
            if (isset($data['collector'])) {
                $this->setCollector($data['collector']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['fastingStatusCodeableConcept'])) {
                $this->setFastingStatusCodeableConcept($data['fastingStatusCodeableConcept']);
            }
            if (isset($data['fastingStatusDuration'])) {
                $this->setFastingStatusDuration($data['fastingStatusDuration']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCollectedDateTime($collectedDateTime)
    {
        if (null === $collectedDateTime) {
            return $this; 
        }
        if (is_scalar($collectedDateTime)) {
            $collectedDateTime = new FHIRDateTime($collectedDateTime);
        }
        if (!($collectedDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenCollection::setCollectedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($collectedDateTime)
            ));
        }
        $this->collectedDateTime = $collectedDateTime;
        return $this;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }


    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setCollectedPeriod(FHIRPeriod $collectedPeriod = null)
    {
        if (null === $collectedPeriod) {
            return $this; 
        }
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }


    /**
     * Person who collected the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCollector(FHIRReference $collector = null)
    {
        if (null === $collector) {
            return $this; 
        }
        $this->collector = $collector;
        return $this;
    }

    /**
     * Person who collected the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCollector()
    {
        return $this->collector;
    }


    /**
     * The span of time over which the collection of a specimen occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setDuration(FHIRDuration $duration = null)
    {
        if (null === $duration) {
            return $this; 
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * The span of time over which the collection of a specimen occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDuration()
    {
        return $this->duration;
    }


    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFastingStatusCodeableConcept(FHIRCodeableConcept $fastingStatusCodeableConcept = null)
    {
        if (null === $fastingStatusCodeableConcept) {
            return $this; 
        }
        $this->fastingStatusCodeableConcept = $fastingStatusCodeableConcept;
        return $this;
    }

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFastingStatusCodeableConcept()
    {
        return $this->fastingStatusCodeableConcept;
    }


    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setFastingStatusDuration(FHIRDuration $fastingStatusDuration = null)
    {
        if (null === $fastingStatusDuration) {
            return $this; 
        }
        $this->fastingStatusDuration = $fastingStatusDuration;
        return $this;
    }

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFastingStatusDuration()
    {
        return $this->fastingStatusDuration;
    }


    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        if (null === $method) {
            return $this; 
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }


    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
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
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getCollectedDateTime())) {
            $a['collectedDateTime'] = $v;
        }
        if (null !== ($v = $this->getCollectedPeriod())) {
            $a['collectedPeriod'] = $v;
        }
        if (null !== ($v = $this->getCollector())) {
            $a['collector'] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a['duration'] = $v;
        }
        if (null !== ($v = $this->getFastingStatusCodeableConcept())) {
            $a['fastingStatusCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getFastingStatusDuration())) {
            $a['fastingStatusDuration'] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a['method'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
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
            $sxe = new \SimpleXMLElement('<SpecimenCollection xmlns="http://hl7.org/fhir"></SpecimenCollection>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}