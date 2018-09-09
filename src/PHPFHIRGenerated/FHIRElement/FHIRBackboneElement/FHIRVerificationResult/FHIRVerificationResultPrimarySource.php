<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

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
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Describes validation requirements, source(s), status and dates for one or more elements.
 *
 * Class FHIRVerificationResultPrimarySource
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultPrimarySource extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VerificationResult.PrimarySource';

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $canPushUpdates = null;

    /**
     * Reference to the primary source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $pushTypeAvailable = null;

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * When the target was validated against the primary source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validationDate = null;

    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $validationProcess = null;

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $validationStatus = null;

    /**
     * FHIRVerificationResultPrimarySource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['canPushUpdates'])) {
                $this->setCanPushUpdates($data['canPushUpdates']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['pushTypeAvailable'])) {
                $this->setPushTypeAvailable($data['pushTypeAvailable']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['validationDate'])) {
                $this->setValidationDate($data['validationDate']);
            }
            if (isset($data['validationProcess'])) {
                $this->setValidationProcess($data['validationProcess']);
            }
            if (isset($data['validationStatus'])) {
                $this->setValidationStatus($data['validationStatus']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCanPushUpdates(FHIRCodeableConcept $canPushUpdates = null)
    {
        if (null === $canPushUpdates) {
            return $this; 
        }
        $this->canPushUpdates = $canPushUpdates;
        return $this;
    }

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCanPushUpdates()
    {
        return $this->canPushUpdates;
    }


    /**
     * Reference to the primary source.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * Reference to the primary source.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPushTypeAvailable(FHIRCodeableConcept $pushTypeAvailable = null)
    {
        if (null === $pushTypeAvailable) {
            return $this; 
        }
        $this->pushTypeAvailable = $pushTypeAvailable;
        return $this;
    }

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPushTypeAvailable()
    {
        return $this->pushTypeAvailable;
    }


    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * When the target was validated against the primary source.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValidationDate($validationDate)
    {
        if (null === $validationDate) {
            return $this; 
        }
        if (is_scalar($validationDate)) {
            $validationDate = new FHIRDateTime($validationDate);
        }
        if (!($validationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultPrimarySource::setValidationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($validationDate)
            ));
        }
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * When the target was validated against the primary source.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }


    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValidationProcess(FHIRCodeableConcept $validationProcess = null)
    {
        if (null === $validationProcess) {
            return $this; 
        }
        $this->validationProcess = $validationProcess;
        return $this;
    }

    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationProcess()
    {
        return $this->validationProcess;
    }


    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValidationStatus(FHIRCodeableConcept $validationStatus = null)
    {
        if (null === $validationStatus) {
            return $this; 
        }
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
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
        if (null !== ($v = $this->getCanPushUpdates())) {
            $a['canPushUpdates'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getPushTypeAvailable())) {
            $a['pushTypeAvailable'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getValidationDate())) {
            $a['validationDate'] = $v;
        }
        if (null !== ($v = $this->getValidationProcess())) {
            $a['validationProcess'] = $v;
        }
        if (null !== ($v = $this->getValidationStatus())) {
            $a['validationStatus'] = $v;
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
            $sxe = new \SimpleXMLElement('<VerificationResultPrimarySource xmlns="http://hl7.org/fhir"></VerificationResultPrimarySource>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}