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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal;
use PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRExplanationOfBenefit
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRExplanationOfBenefit extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit';

    /**
     * An accident which resulted in the need for healthcare services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public $accident = null;

    /**
     * The first-tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     */
    public $addItem = null;

    /**
     * Balance by Benefit Category.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance
     */
    public $benefitBalance = null;

    /**
     * The billable period for which charges are being submitted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $billablePeriod = null;

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam
     */
    public $careTeam = null;

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $claim = null;

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $claimResponse = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis
     */
    public $diagnosis = null;

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * The person who created the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * The EOB Business Identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation
     */
    public $information = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    public $insurance = null;

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * First-tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem
     */
    public $item = null;

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $originalPrescription = null;

    /**
     * Processing outcome errror, partial or complete processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    public $outcome = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The party to be reimbursed for the services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public $payee = null;

    /**
     * Payment details for the claim if the claim has been paid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public $payment = null;

    /**
     * Precedence (primary, secondary, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $precedence = null;

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure
     */
    public $procedure = null;

    /**
     * Note text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote
     */
    public $processNote = null;

    /**
     * The provider which is responsible for the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referral = null;

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated
     */
    public $related = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public $status = null;

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal
     */
    public $total = null;

    /**
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * FHIRExplanationOfBenefit Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['accident'])) {
                $this->setAccident($data['accident']);
            }
            if (isset($data['addItem'])) {
                $this->setAddItem($data['addItem']);
            }
            if (isset($data['benefitBalance'])) {
                $this->setBenefitBalance($data['benefitBalance']);
            }
            if (isset($data['billablePeriod'])) {
                $this->setBillablePeriod($data['billablePeriod']);
            }
            if (isset($data['careTeam'])) {
                $this->setCareTeam($data['careTeam']);
            }
            if (isset($data['claim'])) {
                $this->setClaim($data['claim']);
            }
            if (isset($data['claimResponse'])) {
                $this->setClaimResponse($data['claimResponse']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['diagnosis'])) {
                $this->setDiagnosis($data['diagnosis']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['facility'])) {
                $this->setFacility($data['facility']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['information'])) {
                $this->setInformation($data['information']);
            }
            if (isset($data['insurance'])) {
                $this->setInsurance($data['insurance']);
            }
            if (isset($data['insurer'])) {
                $this->setInsurer($data['insurer']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['originalPrescription'])) {
                $this->setOriginalPrescription($data['originalPrescription']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['payee'])) {
                $this->setPayee($data['payee']);
            }
            if (isset($data['payment'])) {
                $this->setPayment($data['payment']);
            }
            if (isset($data['precedence'])) {
                $this->setPrecedence($data['precedence']);
            }
            if (isset($data['prescription'])) {
                $this->setPrescription($data['prescription']);
            }
            if (isset($data['procedure'])) {
                $this->setProcedure($data['procedure']);
            }
            if (isset($data['processNote'])) {
                $this->setProcessNote($data['processNote']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['referral'])) {
                $this->setReferral($data['referral']);
            }
            if (isset($data['related'])) {
                $this->setRelated($data['related']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['total'])) {
                $this->setTotal($data['total']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An accident which resulted in the need for healthcare services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     * @return $this
     */
    public function setAccident(FHIRExplanationOfBenefitAccident $accident = null)
    {
        if (null === $accident) {
            return $this; 
        }
        $this->accident = $accident;
        return $this;
    }

    /**
     * An accident which resulted in the need for healthcare services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public function getAccident()
    {
        return $this->accident;
    }


    /**
     * The first-tier service adjudications for payor added services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     * @return $this
     */
    public function setAddItem(FHIRExplanationOfBenefitAddItem $addItem = null)
    {
        if (null === $addItem) {
            return $this; 
        }
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * The first-tier service adjudications for payor added services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     */
    public function getAddItem()
    {
        return $this->addItem;
    }


    /**
     * Balance by Benefit Category.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance
     * @return $this
     */
    public function setBenefitBalance(FHIRExplanationOfBenefitBenefitBalance $benefitBalance = null)
    {
        if (null === $benefitBalance) {
            return $this; 
        }
        $this->benefitBalance = $benefitBalance;
        return $this;
    }

    /**
     * Balance by Benefit Category.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance
     */
    public function getBenefitBalance()
    {
        return $this->benefitBalance;
    }


    /**
     * The billable period for which charges are being submitted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setBillablePeriod(FHIRPeriod $billablePeriod = null)
    {
        if (null === $billablePeriod) {
            return $this; 
        }
        $this->billablePeriod = $billablePeriod;
        return $this;
    }

    /**
     * The billable period for which charges are being submitted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBillablePeriod()
    {
        return $this->billablePeriod;
    }


    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam
     * @return $this
     */
    public function setCareTeam(FHIRExplanationOfBenefitCareTeam $careTeam = null)
    {
        if (null === $careTeam) {
            return $this; 
        }
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }


    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setClaim(FHIRReference $claim = null)
    {
        if (null === $claim) {
            return $this; 
        }
        $this->claim = $claim;
        return $this;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaim()
    {
        return $this->claim;
    }


    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setClaimResponse(FHIRReference $claimResponse = null)
    {
        if (null === $claimResponse) {
            return $this; 
        }
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }


    /**
     * The date when this resource was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis
     * @return $this
     */
    public function setDiagnosis(FHIRExplanationOfBenefitDiagnosis $diagnosis = null)
    {
        if (null === $diagnosis) {
            return $this; 
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }


    /**
     * A description of the status of the adjudication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisposition($disposition)
    {
        if (null === $disposition) {
            return $this; 
        }
        if (is_scalar($disposition)) {
            $disposition = new FHIRString($disposition);
        }
        if (!($disposition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setDisposition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($disposition)
            ));
        }
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * A description of the status of the adjudication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }


    /**
     * The person who created the explanation of benefit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        if (null === $enterer) {
            return $this; 
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The person who created the explanation of benefit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }


    /**
     * Facility where the services were provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFacility(FHIRReference $facility = null)
    {
        if (null === $facility) {
            return $this; 
        }
        $this->facility = $facility;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }


    /**
     * The form to be used for printing the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setForm(FHIRCodeableConcept $form = null)
    {
        if (null === $form) {
            return $this; 
        }
        $this->form = $form;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }


    /**
     * The EOB Business Identifier.
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
     * The EOB Business Identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation
     * @return $this
     */
    public function setInformation(FHIRExplanationOfBenefitInformation $information = null)
    {
        if (null === $information) {
            return $this; 
        }
        $this->information = $information;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation
     */
    public function getInformation()
    {
        return $this->information;
    }


    /**
     * Financial instrument by which payment information for health care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     * @return $this
     */
    public function setInsurance(FHIRExplanationOfBenefitInsurance $insurance = null)
    {
        if (null === $insurance) {
            return $this; 
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }


    /**
     * The insurer which is responsible for the explanation of benefit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        if (null === $insurer) {
            return $this; 
        }
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }


    /**
     * First-tier of goods and services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem
     * @return $this
     */
    public function setItem(FHIRExplanationOfBenefitItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * First-tier of goods and services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOriginalPrescription(FHIRReference $originalPrescription = null)
    {
        if (null === $originalPrescription) {
            return $this; 
        }
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
    }


    /**
     * Processing outcome errror, partial or complete processing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     * @return $this
     */
    public function setOutcome($outcome)
    {
        if (null === $outcome) {
            return $this; 
        }
        if (is_scalar($outcome)) {
            $outcome = new FHIRClaimProcessingCodes($outcome);
        }
        if (!($outcome instanceof FHIRClaimProcessingCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setOutcome - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes or appropriate scalar value, %s seen.',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Processing outcome errror, partial or complete processing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * Patient Resource.
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
     * Patient Resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The party to be reimbursed for the services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     * @return $this
     */
    public function setPayee(FHIRExplanationOfBenefitPayee $payee = null)
    {
        if (null === $payee) {
            return $this; 
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * The party to be reimbursed for the services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }


    /**
     * Payment details for the claim if the claim has been paid.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     * @return $this
     */
    public function setPayment(FHIRExplanationOfBenefitPayment $payment = null)
    {
        if (null === $payment) {
            return $this; 
        }
        $this->payment = $payment;
        return $this;
    }

    /**
     * Payment details for the claim if the claim has been paid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }


    /**
     * Precedence (primary, secondary, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setPrecedence($precedence)
    {
        if (null === $precedence) {
            return $this; 
        }
        if (is_scalar($precedence)) {
            $precedence = new FHIRPositiveInt($precedence);
        }
        if (!($precedence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setPrecedence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($precedence)
            ));
        }
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * Precedence (primary, secondary, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPrecedence()
    {
        return $this->precedence;
    }


    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPrescription(FHIRReference $prescription = null)
    {
        if (null === $prescription) {
            return $this; 
        }
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }


    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure
     * @return $this
     */
    public function setProcedure(FHIRExplanationOfBenefitProcedure $procedure = null)
    {
        if (null === $procedure) {
            return $this; 
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure
     */
    public function getProcedure()
    {
        return $this->procedure;
    }


    /**
     * Note text.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote
     * @return $this
     */
    public function setProcessNote(FHIRExplanationOfBenefitProcessNote $processNote = null)
    {
        if (null === $processNote) {
            return $this; 
        }
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Note text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }


    /**
     * The provider which is responsible for the claim.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProvider(FHIRReference $provider = null)
    {
        if (null === $provider) {
            return $this; 
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * The provider which is responsible for the claim.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }


    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferral(FHIRReference $referral = null)
    {
        if (null === $referral) {
            return $this; 
        }
        $this->referral = $referral;
        return $this;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferral()
    {
        return $this->referral;
    }


    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated
     * @return $this
     */
    public function setRelated(FHIRExplanationOfBenefitRelated $related = null)
    {
        if (null === $related) {
            return $this; 
        }
        $this->related = $related;
        return $this;
    }

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated
     */
    public function getRelated()
    {
        return $this->related;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRExplanationOfBenefitStatus($status);
        }
        if (!($status instanceof FHIRExplanationOfBenefitStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        if (null === $subType) {
            return $this; 
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the CMS Bill Type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }


    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal
     * @return $this
     */
    public function setTotal(FHIRExplanationOfBenefitTotal $total = null)
    {
        if (null === $total) {
            return $this; 
        }
        $this->total = $total;
        return $this;
    }

    /**
     * Totals for amounts submitted, co-pays, benefits payable etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
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
     * The category of claim, e.g, oral, pharmacy, vision, institutional, professional.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRUse($use);
        }
        if (!($use instanceof FHIRUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefit::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * A claim, a list of completed goods and services; a preauthorization, a list or proposed goods and services; or a predetermination, a set of goods and services being considered, for which insurer adjudication is sought.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
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
        if (null !== ($v = $this->getAccident())) {
            $a['accident'] = $v;
        }
        if (null !== ($v = $this->getAddItem())) {
            $a['addItem'] = $v;
        }
        if (null !== ($v = $this->getBenefitBalance())) {
            $a['benefitBalance'] = $v;
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $a['billablePeriod'] = $v;
        }
        if (null !== ($v = $this->getCareTeam())) {
            $a['careTeam'] = $v;
        }
        if (null !== ($v = $this->getClaim())) {
            $a['claim'] = $v;
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $a['claimResponse'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDiagnosis())) {
            $a['diagnosis'] = $v;
        }
        if (null !== ($v = $this->getDisposition())) {
            $a['disposition'] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a['enterer'] = $v;
        }
        if (null !== ($v = $this->getFacility())) {
            $a['facility'] = $v;
        }
        if (null !== ($v = $this->getForm())) {
            $a['form'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInformation())) {
            $a['information'] = $v;
        }
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a['insurer'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $a['originalPrescription'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPayee())) {
            $a['payee'] = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $a['payment'] = $v;
        }
        if (null !== ($v = $this->getPrecedence())) {
            $a['precedence'] = $v;
        }
        if (null !== ($v = $this->getPrescription())) {
            $a['prescription'] = $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            $a['procedure'] = $v;
        }
        if (null !== ($v = $this->getProcessNote())) {
            $a['processNote'] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getReferral())) {
            $a['referral'] = $v;
        }
        if (null !== ($v = $this->getRelated())) {
            $a['related'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubType())) {
            $a['subType'] = $v;
        }
        if (null !== ($v = $this->getTotal())) {
            $a['total'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefit xmlns="http://hl7.org/fhir"></ExplanationOfBenefit>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}