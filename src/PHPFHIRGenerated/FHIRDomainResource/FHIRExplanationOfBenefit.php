<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRExplanationOfBenefit extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The EOB Business Identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public $status = null;

    /**
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $subType = array();

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The billable period for which charges are being submitted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $billablePeriod = null;

    /**
     * The date when the EOB was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The person who created the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * The provider which is responsible for the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The provider which is responsible for the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referral = null;

    /**
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $facility = null;

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
     * Processing outcome errror, partial or complete processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    public $related = array();

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $originalPrescription = null;

    /**
     * The party to be reimbursed for the services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public $payee = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[]
     */
    public $information = array();

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public $careTeam = array();

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public $procedure = array();

    /**
     * Precedence (primary, secondary, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $precedence = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    public $insurance = null;

    /**
     * An accident which resulted in the need for healthcare services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public $accident = null;

    /**
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $employmentImpacted = null;

    /**
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $hospitalization = null;

    /**
     * First tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public $item = array();

    /**
     * The first tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public $addItem = array();

    /**
     * The total cost of the services reported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $totalCost = null;

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $unallocDeductable = null;

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $totalBenefit = null;

    /**
     * Payment details for the claim if the claim has been paid.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public $payment = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Note text.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public $processNote = array();

    /**
     * Balance by Benefit Category.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public $benefitBalance = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit';

    /**
     * The EOB Business Identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The EOB Business Identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function addSubType($subType)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * Patient Resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Patient Resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The billable period for which charges are being submitted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBillablePeriod()
    {
        return $this->billablePeriod;
    }

    /**
     * The billable period for which charges are being submitted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $billablePeriod
     * @return $this
     */
    public function setBillablePeriod($billablePeriod)
    {
        $this->billablePeriod = $billablePeriod;
        return $this;
    }

    /**
     * The date when the EOB was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when the EOB was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The person who created the explanation of benefit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * The person who created the explanation of benefit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $insurer
     * @return $this
     */
    public function setInsurer($insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The provider which is responsible for the claim.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The provider which is responsible for the claim.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The provider which is responsible for the claim.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The provider which is responsible for the claim.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referral
     * @return $this
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Facility where the services were provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $facility
     * @return $this
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $claim
     * @return $this
     */
    public function setClaim($claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $claimResponse
     * @return $this
     */
    public function setClaimResponse($claimResponse)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * Processing outcome errror, partial or complete processing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Processing outcome errror, partial or complete processing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A description of the status of the adjudication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $prescription
     * @return $this
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
    }

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $originalPrescription
     * @return $this
     */
    public function setOriginalPrescription($originalPrescription)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * The party to be reimbursed for the services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The party to be reimbursed for the services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation $information
     * @return $this
     */
    public function addInformation($information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam $careTeam
     * @return $this
     */
    public function addCareTeam($careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure $procedure
     * @return $this
     */
    public function addProcedure($procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * Precedence (primary, secondary, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPrecedence()
    {
        return $this->precedence;
    }

    /**
     * Precedence (primary, secondary, etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $precedence
     * @return $this
     */
    public function setPrecedence($precedence)
    {
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance $insurance
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * An accident which resulted in the need for healthcare services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * An accident which resulted in the need for healthcare services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
     * @return $this
     */
    public function setAccident($accident)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEmploymentImpacted()
    {
        return $this->employmentImpacted;
    }

    /**
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $employmentImpacted
     * @return $this
     */
    public function setEmploymentImpacted($employmentImpacted)
    {
        $this->employmentImpacted = $employmentImpacted;
        return $this;
    }

    /**
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $hospitalization
     * @return $this
     */
    public function setHospitalization($hospitalization)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * First tier of goods and services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * First tier of goods and services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $addItem
     * @return $this
     */
    public function addAddItem($addItem)
    {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * The total cost of the services reported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * The total cost of the services reported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @return $this
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable()
    {
        return $this->unallocDeductable;
    }

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @return $this
     */
    public function setUnallocDeductable($unallocDeductable)
    {
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit()
    {
        return $this->totalBenefit;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @return $this
     */
    public function setTotalBenefit($totalBenefit)
    {
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * Payment details for the claim if the claim has been paid.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Payment details for the claim if the claim has been paid.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $form
     * @return $this
     */
    public function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Note text.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * Note text.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote $processNote
     * @return $this
     */
    public function addProcessNote($processNote)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * Balance by Benefit Category.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public function getBenefitBalance()
    {
        return $this->benefitBalance;
    }

    /**
     * Balance by Benefit Category.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance $benefitBalance
     * @return $this
     */
    public function addBenefitBalance($benefitBalance)
    {
        $this->benefitBalance[] = $benefitBalance;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->subType)) {
            $json['subType'] = [];
            foreach($this->subType as $subType) {
                $json['subType'][] = $subType;
            }
        }
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->billablePeriod) $json['billablePeriod'] = $this->billablePeriod;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->enterer) $json['enterer'] = $this->enterer;
        if (null !== $this->insurer) $json['insurer'] = $this->insurer;
        if (null !== $this->provider) $json['provider'] = $this->provider;
        if (null !== $this->organization) $json['organization'] = $this->organization;
        if (null !== $this->referral) $json['referral'] = $this->referral;
        if (null !== $this->facility) $json['facility'] = $this->facility;
        if (null !== $this->claim) $json['claim'] = $this->claim;
        if (null !== $this->claimResponse) $json['claimResponse'] = $this->claimResponse;
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (null !== $this->disposition) $json['disposition'] = $this->disposition;
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = $related;
            }
        }
        if (null !== $this->prescription) $json['prescription'] = $this->prescription;
        if (null !== $this->originalPrescription) $json['originalPrescription'] = $this->originalPrescription;
        if (null !== $this->payee) $json['payee'] = $this->payee;
        if (0 < count($this->information)) {
            $json['information'] = [];
            foreach($this->information as $information) {
                $json['information'][] = $information;
            }
        }
        if (0 < count($this->careTeam)) {
            $json['careTeam'] = [];
            foreach($this->careTeam as $careTeam) {
                $json['careTeam'][] = $careTeam;
            }
        }
        if (0 < count($this->diagnosis)) {
            $json['diagnosis'] = [];
            foreach($this->diagnosis as $diagnosis) {
                $json['diagnosis'][] = $diagnosis;
            }
        }
        if (0 < count($this->procedure)) {
            $json['procedure'] = [];
            foreach($this->procedure as $procedure) {
                $json['procedure'][] = $procedure;
            }
        }
        if (null !== $this->precedence) $json['precedence'] = $this->precedence;
        if (null !== $this->insurance) $json['insurance'] = $this->insurance;
        if (null !== $this->accident) $json['accident'] = $this->accident;
        if (null !== $this->employmentImpacted) $json['employmentImpacted'] = $this->employmentImpacted;
        if (null !== $this->hospitalization) $json['hospitalization'] = $this->hospitalization;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = $item;
            }
        }
        if (0 < count($this->addItem)) {
            $json['addItem'] = [];
            foreach($this->addItem as $addItem) {
                $json['addItem'][] = $addItem;
            }
        }
        if (null !== $this->totalCost) $json['totalCost'] = $this->totalCost;
        if (null !== $this->unallocDeductable) $json['unallocDeductable'] = $this->unallocDeductable;
        if (null !== $this->totalBenefit) $json['totalBenefit'] = $this->totalBenefit;
        if (null !== $this->payment) $json['payment'] = $this->payment;
        if (null !== $this->form) $json['form'] = $this->form;
        if (0 < count($this->processNote)) {
            $json['processNote'] = [];
            foreach($this->processNote as $processNote) {
                $json['processNote'][] = $processNote;
            }
        }
        if (0 < count($this->benefitBalance)) {
            $json['benefitBalance'] = [];
            foreach($this->benefitBalance as $benefitBalance) {
                $json['benefitBalance'][] = $benefitBalance;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefit xmlns="http://hl7.org/fhir"></ExplanationOfBenefit>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subType)) {
            foreach($this->subType as $subType) {
                $subType->xmlSerialize(true, $sxe->addChild('subType'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->billablePeriod) $this->billablePeriod->xmlSerialize(true, $sxe->addChild('billablePeriod'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->enterer) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (null !== $this->insurer) $this->insurer->xmlSerialize(true, $sxe->addChild('insurer'));
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->organization) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (null !== $this->referral) $this->referral->xmlSerialize(true, $sxe->addChild('referral'));
        if (null !== $this->facility) $this->facility->xmlSerialize(true, $sxe->addChild('facility'));
        if (null !== $this->claim) $this->claim->xmlSerialize(true, $sxe->addChild('claim'));
        if (null !== $this->claimResponse) $this->claimResponse->xmlSerialize(true, $sxe->addChild('claimResponse'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->disposition) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if (null !== $this->prescription) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (null !== $this->originalPrescription) $this->originalPrescription->xmlSerialize(true, $sxe->addChild('originalPrescription'));
        if (null !== $this->payee) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (0 < count($this->information)) {
            foreach($this->information as $information) {
                $information->xmlSerialize(true, $sxe->addChild('information'));
            }
        }
        if (0 < count($this->careTeam)) {
            foreach($this->careTeam as $careTeam) {
                $careTeam->xmlSerialize(true, $sxe->addChild('careTeam'));
            }
        }
        if (0 < count($this->diagnosis)) {
            foreach($this->diagnosis as $diagnosis) {
                $diagnosis->xmlSerialize(true, $sxe->addChild('diagnosis'));
            }
        }
        if (0 < count($this->procedure)) {
            foreach($this->procedure as $procedure) {
                $procedure->xmlSerialize(true, $sxe->addChild('procedure'));
            }
        }
        if (null !== $this->precedence) $this->precedence->xmlSerialize(true, $sxe->addChild('precedence'));
        if (null !== $this->insurance) $this->insurance->xmlSerialize(true, $sxe->addChild('insurance'));
        if (null !== $this->accident) $this->accident->xmlSerialize(true, $sxe->addChild('accident'));
        if (null !== $this->employmentImpacted) $this->employmentImpacted->xmlSerialize(true, $sxe->addChild('employmentImpacted'));
        if (null !== $this->hospitalization) $this->hospitalization->xmlSerialize(true, $sxe->addChild('hospitalization'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (0 < count($this->addItem)) {
            foreach($this->addItem as $addItem) {
                $addItem->xmlSerialize(true, $sxe->addChild('addItem'));
            }
        }
        if (null !== $this->totalCost) $this->totalCost->xmlSerialize(true, $sxe->addChild('totalCost'));
        if (null !== $this->unallocDeductable) $this->unallocDeductable->xmlSerialize(true, $sxe->addChild('unallocDeductable'));
        if (null !== $this->totalBenefit) $this->totalBenefit->xmlSerialize(true, $sxe->addChild('totalBenefit'));
        if (null !== $this->payment) $this->payment->xmlSerialize(true, $sxe->addChild('payment'));
        if (null !== $this->form) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->processNote)) {
            foreach($this->processNote as $processNote) {
                $processNote->xmlSerialize(true, $sxe->addChild('processNote'));
            }
        }
        if (0 < count($this->benefitBalance)) {
            foreach($this->benefitBalance as $benefitBalance) {
                $benefitBalance->xmlSerialize(true, $sxe->addChild('benefitBalance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}