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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes validation requirements, source(s), status and dates for one or more elements.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRVerificationResult
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRVerificationResult extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VerificationResult';

    /**
     * Information about the entity attesting to information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public $attestation = null;

    /**
     * The result if validation fails (fatal; warning; record only; none).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $failureAction = null;

    /**
     * Frequency of revalidation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $frequency = null;

    /**
     * The date/time validation was last completed (incl. failed validations).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastPerformed = null;

    /**
     * The frequency with which the target must be validated (none; initial; periodic).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $need = null;

    /**
     * The date when target is next validated, if appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $nextScheduled = null;

    /**
     * Information about the primary source(s) involved in validation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     */
    public $primarySource = null;

    /**
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStatus
     */
    public $status = null;

    /**
     * When the validation status was updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $statusDate = null;

    /**
     * A resource that was validated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The fhirpath location(s) within the resource that was validated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $targetLocation = null;

    /**
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $validationProcess = null;

    /**
     * What the target is validated against (nothing; primary source; multiple sources).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $validationType = null;

    /**
     * Information about the entity validating information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public $validator = null;

    /**
     * FHIRVerificationResult Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['attestation'])) {
                $this->setAttestation($data['attestation']);
            }
            if (isset($data['failureAction'])) {
                $this->setFailureAction($data['failureAction']);
            }
            if (isset($data['frequency'])) {
                $this->setFrequency($data['frequency']);
            }
            if (isset($data['lastPerformed'])) {
                $this->setLastPerformed($data['lastPerformed']);
            }
            if (isset($data['need'])) {
                $this->setNeed($data['need']);
            }
            if (isset($data['nextScheduled'])) {
                $this->setNextScheduled($data['nextScheduled']);
            }
            if (isset($data['primarySource'])) {
                $this->setPrimarySource($data['primarySource']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusDate'])) {
                $this->setStatusDate($data['statusDate']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['targetLocation'])) {
                $this->setTargetLocation($data['targetLocation']);
            }
            if (isset($data['validationProcess'])) {
                $this->setValidationProcess($data['validationProcess']);
            }
            if (isset($data['validationType'])) {
                $this->setValidationType($data['validationType']);
            }
            if (isset($data['validator'])) {
                $this->setValidator($data['validator']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVerificationResult::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Information about the entity attesting to information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     * @return $this
     */
    public function setAttestation(FHIRVerificationResultAttestation $attestation = null)
    {
        if (null === $attestation) {
            return $this; 
        }
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * Information about the entity attesting to information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public function getAttestation()
    {
        return $this->attestation;
    }


    /**
     * The result if validation fails (fatal; warning; record only; none).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFailureAction(FHIRCodeableConcept $failureAction = null)
    {
        if (null === $failureAction) {
            return $this; 
        }
        $this->failureAction = $failureAction;
        return $this;
    }

    /**
     * The result if validation fails (fatal; warning; record only; none).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFailureAction()
    {
        return $this->failureAction;
    }


    /**
     * Frequency of revalidation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setFrequency(FHIRTiming $frequency = null)
    {
        if (null === $frequency) {
            return $this; 
        }
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Frequency of revalidation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getFrequency()
    {
        return $this->frequency;
    }


    /**
     * The date/time validation was last completed (incl. failed validations).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setLastPerformed($lastPerformed)
    {
        if (null === $lastPerformed) {
            return $this; 
        }
        if (is_scalar($lastPerformed)) {
            $lastPerformed = new FHIRDateTime($lastPerformed);
        }
        if (!($lastPerformed instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::setLastPerformed - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($lastPerformed)
            ));
        }
        $this->lastPerformed = $lastPerformed;
        return $this;
    }

    /**
     * The date/time validation was last completed (incl. failed validations).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastPerformed()
    {
        return $this->lastPerformed;
    }


    /**
     * The frequency with which the target must be validated (none; initial; periodic).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNeed(FHIRCodeableConcept $need = null)
    {
        if (null === $need) {
            return $this; 
        }
        $this->need = $need;
        return $this;
    }

    /**
     * The frequency with which the target must be validated (none; initial; periodic).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNeed()
    {
        return $this->need;
    }


    /**
     * The date when target is next validated, if appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setNextScheduled($nextScheduled)
    {
        if (null === $nextScheduled) {
            return $this; 
        }
        if (is_scalar($nextScheduled)) {
            $nextScheduled = new FHIRDate($nextScheduled);
        }
        if (!($nextScheduled instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::setNextScheduled - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($nextScheduled)
            ));
        }
        $this->nextScheduled = $nextScheduled;
        return $this;
    }

    /**
     * The date when target is next validated, if appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getNextScheduled()
    {
        return $this->nextScheduled;
    }


    /**
     * Information about the primary source(s) involved in validation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     * @return $this
     */
    public function setPrimarySource(FHIRVerificationResultPrimarySource $primarySource = null)
    {
        if (null === $primarySource) {
            return $this; 
        }
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * Information about the primary source(s) involved in validation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }


    /**
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRStatus($status);
        }
        if (!($status instanceof FHIRStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * When the validation status was updated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        if (null === $statusDate) {
            return $this; 
        }
        if (is_scalar($statusDate)) {
            $statusDate = new FHIRDateTime($statusDate);
        }
        if (!($statusDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::setStatusDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($statusDate)
            ));
        }
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * When the validation status was updated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }


    /**
     * A resource that was validated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTarget(FHIRReference $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A resource that was validated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }


    /**
     * The fhirpath location(s) within the resource that was validated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTargetLocation($targetLocation)
    {
        if (null === $targetLocation) {
            return $this; 
        }
        if (is_scalar($targetLocation)) {
            $targetLocation = new FHIRString($targetLocation);
        }
        if (!($targetLocation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::setTargetLocation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($targetLocation)
            ));
        }
        $this->targetLocation = $targetLocation;
        return $this;
    }

    /**
     * The fhirpath location(s) within the resource that was validated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTargetLocation()
    {
        return $this->targetLocation;
    }


    /**
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
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
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationProcess()
    {
        return $this->validationProcess;
    }


    /**
     * What the target is validated against (nothing; primary source; multiple sources).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValidationType(FHIRCodeableConcept $validationType = null)
    {
        if (null === $validationType) {
            return $this; 
        }
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * What the target is validated against (nothing; primary source; multiple sources).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationType()
    {
        return $this->validationType;
    }


    /**
     * Information about the entity validating information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     * @return $this
     */
    public function setValidator(FHIRVerificationResultValidator $validator = null)
    {
        if (null === $validator) {
            return $this; 
        }
        $this->validator = $validator;
        return $this;
    }

    /**
     * Information about the entity validating information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public function getValidator()
    {
        return $this->validator;
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
        if (null !== ($v = $this->getAttestation())) {
            $a['attestation'] = $v;
        }
        if (null !== ($v = $this->getFailureAction())) {
            $a['failureAction'] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a['frequency'] = $v;
        }
        if (null !== ($v = $this->getLastPerformed())) {
            $a['lastPerformed'] = $v;
        }
        if (null !== ($v = $this->getNeed())) {
            $a['need'] = $v;
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $a['nextScheduled'] = $v;
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $a['primarySource'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a['statusDate'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
        }
        if (null !== ($v = $this->getTargetLocation())) {
            $a['targetLocation'] = $v;
        }
        if (null !== ($v = $this->getValidationProcess())) {
            $a['validationProcess'] = $v;
        }
        if (null !== ($v = $this->getValidationType())) {
            $a['validationType'] = $v;
        }
        if (null !== ($v = $this->getValidator())) {
            $a['validator'] = $v;
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
            $sxe = new \SimpleXMLElement('<VerificationResult xmlns="http://hl7.org/fhir"></VerificationResult>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}