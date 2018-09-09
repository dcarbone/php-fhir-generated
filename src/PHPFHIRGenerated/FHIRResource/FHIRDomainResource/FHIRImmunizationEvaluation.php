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

use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes a comparison of an immunization event against published recommendations to determine if the administration is "valid" in relation to those  recommendations.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImmunizationEvaluation
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRImmunizationEvaluation extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImmunizationEvaluation';

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Additional information about the evaluation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

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
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatus = null;

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatusReason = null;

    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The vaccine administration event being evaluated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $immunizationEvent = null;

    /**
     * The individual for whom the evaluation is being done.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $seriesDosesPositiveInt = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $seriesDosesString = null;

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public $status = null;

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $targetDisease = null;

    /**
     * FHIRImmunizationEvaluation Constructor
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
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['doseNumberPositiveInt'])) {
                $this->setDoseNumberPositiveInt($data['doseNumberPositiveInt']);
            }
            if (isset($data['doseNumberString'])) {
                $this->setDoseNumberString($data['doseNumberString']);
            }
            if (isset($data['doseStatus'])) {
                $this->setDoseStatus($data['doseStatus']);
            }
            if (isset($data['doseStatusReason'])) {
                $this->setDoseStatusReason($data['doseStatusReason']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['immunizationEvent'])) {
                $this->setImmunizationEvent($data['immunizationEvent']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['seriesDosesPositiveInt'])) {
                $this->setSeriesDosesPositiveInt($data['seriesDosesPositiveInt']);
            }
            if (isset($data['seriesDosesString'])) {
                $this->setSeriesDosesString($data['seriesDosesString']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['targetDisease'])) {
                $this->setTargetDisease($data['targetDisease']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
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
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }


    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEvaluation::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Additional information about the evaluation.
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
                'FHIRImmunizationEvaluation::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Additional information about the evaluation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
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
                'FHIRImmunizationEvaluation::setDoseNumberPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
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
                'FHIRImmunizationEvaluation::setDoseNumberString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDoseStatus(FHIRCodeableConcept $doseStatus = null)
    {
        if (null === $doseStatus) {
            return $this; 
        }
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }


    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDoseStatusReason(FHIRCodeableConcept $doseStatusReason = null)
    {
        if (null === $doseStatusReason) {
            return $this; 
        }
        $this->doseStatusReason = $doseStatusReason;
        return $this;
    }

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }


    /**
     * A unique identifier assigned to this immunization evaluation record.
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
     * A unique identifier assigned to this immunization evaluation record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The vaccine administration event being evaluated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setImmunizationEvent(FHIRReference $immunizationEvent = null)
    {
        if (null === $immunizationEvent) {
            return $this; 
        }
        $this->immunizationEvent = $immunizationEvent;
        return $this;
    }

    /**
     * The vaccine administration event being evaluated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getImmunizationEvent()
    {
        return $this->immunizationEvent;
    }


    /**
     * The individual for whom the evaluation is being done.
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
     * The individual for whom the evaluation is being done.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
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
                'FHIRImmunizationEvaluation::setSeries - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The recommended number of doses to achieve immunity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSeriesDosesPositiveInt($seriesDosesPositiveInt)
    {
        if (null === $seriesDosesPositiveInt) {
            return $this; 
        }
        if (is_scalar($seriesDosesPositiveInt)) {
            $seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        }
        if (!($seriesDosesPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEvaluation::setSeriesDosesPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($seriesDosesPositiveInt)
            ));
        }
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }


    /**
     * The recommended number of doses to achieve immunity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSeriesDosesString($seriesDosesString)
    {
        if (null === $seriesDosesString) {
            return $this; 
        }
        if (is_scalar($seriesDosesString)) {
            $seriesDosesString = new FHIRString($seriesDosesString);
        }
        if (!($seriesDosesString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEvaluation::setSeriesDosesString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($seriesDosesString)
            ));
        }
        $this->seriesDosesString = $seriesDosesString;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }


    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRImmunizationEvaluationStatusCodes($status);
        }
        if (!($status instanceof FHIRImmunizationEvaluationStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEvaluation::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The vaccine preventable disease the dose is being evaluated against.
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
     * The vaccine preventable disease the dose is being evaluated against.
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAuthority())) {
            $a['authority'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a['doseNumberPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a['doseNumberString'] = $v;
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $a['doseStatus'] = $v;
        }
        if (null !== ($v = $this->getDoseStatusReason())) {
            $a['doseStatusReason'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getImmunizationEvent())) {
            $a['immunizationEvent'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a['series'] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $a['seriesDosesPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $a['seriesDosesString'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImmunizationEvaluation xmlns="http://hl7.org/fhir"></ImmunizationEvaluation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}