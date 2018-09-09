<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRVisionPrescription
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRVisionPrescription extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VisionPrescription';

    /**
     * The date (and perhaps time) when the prescription was written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateWritten = null;

    /**
     * Deals with details of the dispense part of the supply specification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public $dispense = null;

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Business identifier which may be used by other parties to reference or identify the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prescriber = null;

    /**
     * Can be the reason or the indication for writing the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * Can be the reason or the indication for writing the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * FHIRVisionPrescription Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['dateWritten'])) {
                $this->setDateWritten($data['dateWritten']);
            }
            if (isset($data['dispense'])) {
                $this->setDispense($data['dispense']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['prescriber'])) {
                $this->setPrescriber($data['prescriber']);
            }
            if (isset($data['reasonCodeableConcept'])) {
                $this->setReasonCodeableConcept($data['reasonCodeableConcept']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVisionPrescription::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDateWritten($dateWritten)
    {
        if (null === $dateWritten) {
            return $this; 
        }
        if (is_scalar($dateWritten)) {
            $dateWritten = new FHIRDateTime($dateWritten);
        }
        if (!($dateWritten instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescription::setDateWritten - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($dateWritten)
            ));
        }
        $this->dateWritten = $dateWritten;
        return $this;
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }


    /**
     * Deals with details of the dispense part of the supply specification.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     * @return $this
     */
    public function setDispense(FHIRVisionPrescriptionDispense $dispense = null)
    {
        if (null === $dispense) {
            return $this; 
        }
        $this->dispense = $dispense;
        return $this;
    }

    /**
     * Deals with details of the dispense part of the supply specification.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function getDispense()
    {
        return $this->dispense;
    }


    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * Business identifier which may be used by other parties to reference or identify the prescription.
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
     * Business identifier which may be used by other parties to reference or identify the prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPrescriber(FHIRReference $prescriber = null)
    {
        if (null === $prescriber) {
            return $this; 
        }
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }


    /**
     * Can be the reason or the indication for writing the prescription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept(FHIRCodeableConcept $reasonCodeableConcept = null)
    {
        if (null === $reasonCodeableConcept) {
            return $this; 
        }
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * Can be the reason or the indication for writing the prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }


    /**
     * Can be the reason or the indication for writing the prescription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Can be the reason or the indication for writing the prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFinancialResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescription::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getDateWritten())) {
            $a['dateWritten'] = $v;
        }
        if (null !== ($v = $this->getDispense())) {
            $a['dispense'] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPrescriber())) {
            $a['prescriber'] = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a['reasonCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<VisionPrescription xmlns="http://hl7.org/fhir"></VisionPrescription>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}