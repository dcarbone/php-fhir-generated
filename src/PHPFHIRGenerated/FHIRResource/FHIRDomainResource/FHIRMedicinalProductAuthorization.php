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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The regulatory authorization of a medicinal product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductAuthorization
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductAuthorization extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductAuthorization';

    /**
     * The country in which the marketing authorization has been granted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $country = null;

    /**
     * A period of time after authorization before generic product applicatiosn can be submitted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $dataExclusivityPeriod = null;

    /**
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateOfFirstAuthorization = null;

    /**
     * Marketing Authorization Holder.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $holder = null;

    /**
     * Business identifier for the marketing authorization, as assigned by a regulator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $internationalBirthDate = null;

    /**
     * Jurisdiction within a country.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * Authorization in areas within a country.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization
     */
    public $jurisdictionalAuthorization = null;

    /**
     * The legal framework against which this authorization is granted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $legalBasis = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $legalStatusOfSupply = null;

    /**
     * The regulatory procedure for granting or amending a marketing authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    public $procedure = null;

    /**
     * Medicines Regulatory Agency.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $regulator = null;

    /**
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $restoreDate = null;

    /**
     * The status of the marketing authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * The date at which the given status has become applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $statusDate = null;

    /**
     * The medicinal product that is being authorized.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $validityPeriod = null;

    /**
     * FHIRMedicinalProductAuthorization Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['country'])) {
                $this->setCountry($data['country']);
            }
            if (isset($data['dataExclusivityPeriod'])) {
                $this->setDataExclusivityPeriod($data['dataExclusivityPeriod']);
            }
            if (isset($data['dateOfFirstAuthorization'])) {
                $this->setDateOfFirstAuthorization($data['dateOfFirstAuthorization']);
            }
            if (isset($data['holder'])) {
                $this->setHolder($data['holder']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['internationalBirthDate'])) {
                $this->setInternationalBirthDate($data['internationalBirthDate']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['jurisdictionalAuthorization'])) {
                $this->setJurisdictionalAuthorization($data['jurisdictionalAuthorization']);
            }
            if (isset($data['legalBasis'])) {
                $this->setLegalBasis($data['legalBasis']);
            }
            if (isset($data['legalStatusOfSupply'])) {
                $this->setLegalStatusOfSupply($data['legalStatusOfSupply']);
            }
            if (isset($data['procedure'])) {
                $this->setProcedure($data['procedure']);
            }
            if (isset($data['regulator'])) {
                $this->setRegulator($data['regulator']);
            }
            if (isset($data['restoreDate'])) {
                $this->setRestoreDate($data['restoreDate']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusDate'])) {
                $this->setStatusDate($data['statusDate']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['validityPeriod'])) {
                $this->setValidityPeriod($data['validityPeriod']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The country in which the marketing authorization has been granted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCountry(FHIRCodeableConcept $country = null)
    {
        if (null === $country) {
            return $this; 
        }
        $this->country = $country;
        return $this;
    }

    /**
     * The country in which the marketing authorization has been granted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCountry()
    {
        return $this->country;
    }


    /**
     * A period of time after authorization before generic product applicatiosn can be submitted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDataExclusivityPeriod(FHIRPeriod $dataExclusivityPeriod = null)
    {
        if (null === $dataExclusivityPeriod) {
            return $this; 
        }
        $this->dataExclusivityPeriod = $dataExclusivityPeriod;
        return $this;
    }

    /**
     * A period of time after authorization before generic product applicatiosn can be submitted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataExclusivityPeriod()
    {
        return $this->dataExclusivityPeriod;
    }


    /**
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDateOfFirstAuthorization($dateOfFirstAuthorization)
    {
        if (null === $dateOfFirstAuthorization) {
            return $this; 
        }
        if (is_scalar($dateOfFirstAuthorization)) {
            $dateOfFirstAuthorization = new FHIRDateTime($dateOfFirstAuthorization);
        }
        if (!($dateOfFirstAuthorization instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductAuthorization::setDateOfFirstAuthorization - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($dateOfFirstAuthorization)
            ));
        }
        $this->dateOfFirstAuthorization = $dateOfFirstAuthorization;
        return $this;
    }

    /**
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateOfFirstAuthorization()
    {
        return $this->dateOfFirstAuthorization;
    }


    /**
     * Marketing Authorization Holder.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setHolder(FHIRReference $holder = null)
    {
        if (null === $holder) {
            return $this; 
        }
        $this->holder = $holder;
        return $this;
    }

    /**
     * Marketing Authorization Holder.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getHolder()
    {
        return $this->holder;
    }


    /**
     * Business identifier for the marketing authorization, as assigned by a regulator.
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
     * Business identifier for the marketing authorization, as assigned by a regulator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setInternationalBirthDate($internationalBirthDate)
    {
        if (null === $internationalBirthDate) {
            return $this; 
        }
        if (is_scalar($internationalBirthDate)) {
            $internationalBirthDate = new FHIRDateTime($internationalBirthDate);
        }
        if (!($internationalBirthDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductAuthorization::setInternationalBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($internationalBirthDate)
            ));
        }
        $this->internationalBirthDate = $internationalBirthDate;
        return $this;
    }

    /**
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getInternationalBirthDate()
    {
        return $this->internationalBirthDate;
    }


    /**
     * Jurisdiction within a country.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Jurisdiction within a country.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * Authorization in areas within a country.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization
     * @return $this
     */
    public function setJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization = null)
    {
        if (null === $jurisdictionalAuthorization) {
            return $this; 
        }
        $this->jurisdictionalAuthorization = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * Authorization in areas within a country.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization
     */
    public function getJurisdictionalAuthorization()
    {
        return $this->jurisdictionalAuthorization;
    }


    /**
     * The legal framework against which this authorization is granted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLegalBasis(FHIRCodeableConcept $legalBasis = null)
    {
        if (null === $legalBasis) {
            return $this; 
        }
        $this->legalBasis = $legalBasis;
        return $this;
    }

    /**
     * The legal framework against which this authorization is granted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalBasis()
    {
        return $this->legalBasis;
    }


    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLegalStatusOfSupply(FHIRCodeableConcept $legalStatusOfSupply = null)
    {
        if (null === $legalStatusOfSupply) {
            return $this; 
        }
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }


    /**
     * The regulatory procedure for granting or amending a marketing authorization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     * @return $this
     */
    public function setProcedure(FHIRMedicinalProductAuthorizationProcedure $procedure = null)
    {
        if (null === $procedure) {
            return $this; 
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * The regulatory procedure for granting or amending a marketing authorization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    public function getProcedure()
    {
        return $this->procedure;
    }


    /**
     * Medicines Regulatory Agency.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRegulator(FHIRReference $regulator = null)
    {
        if (null === $regulator) {
            return $this; 
        }
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * Medicines Regulatory Agency.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
    }


    /**
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRestoreDate($restoreDate)
    {
        if (null === $restoreDate) {
            return $this; 
        }
        if (is_scalar($restoreDate)) {
            $restoreDate = new FHIRDateTime($restoreDate);
        }
        if (!($restoreDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductAuthorization::setRestoreDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($restoreDate)
            ));
        }
        $this->restoreDate = $restoreDate;
        return $this;
    }

    /**
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRestoreDate()
    {
        return $this->restoreDate;
    }


    /**
     * The status of the marketing authorization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        if (null === $status) {
            return $this; 
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the marketing authorization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The date at which the given status has become applicable.
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
                'FHIRMedicinalProductAuthorization::setStatusDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($statusDate)
            ));
        }
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * The date at which the given status has become applicable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }


    /**
     * The medicinal product that is being authorized.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The medicinal product that is being authorized.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        if (null === $validityPeriod) {
            return $this; 
        }
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
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
        if (null !== ($v = $this->getCountry())) {
            $a['country'] = $v;
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            $a['dataExclusivityPeriod'] = $v;
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            $a['dateOfFirstAuthorization'] = $v;
        }
        if (null !== ($v = $this->getHolder())) {
            $a['holder'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInternationalBirthDate())) {
            $a['internationalBirthDate'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getJurisdictionalAuthorization())) {
            $a['jurisdictionalAuthorization'] = $v;
        }
        if (null !== ($v = $this->getLegalBasis())) {
            $a['legalBasis'] = $v;
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $a['legalStatusOfSupply'] = $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            $a['procedure'] = $v;
        }
        if (null !== ($v = $this->getRegulator())) {
            $a['regulator'] = $v;
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $a['restoreDate'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a['statusDate'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a['validityPeriod'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductAuthorization xmlns="http://hl7.org/fhir"></MedicinalProductAuthorization>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}