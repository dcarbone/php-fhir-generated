<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
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
    private $accident = null;

    /**
     * The first tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    private $addItem = [];

    /**
     * Balance by Benefit Category.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    private $benefitBalance = [];

    /**
     * The billable period for which charges are being submitted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $billablePeriod = null;

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    private $careTeam = [];

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $claim = null;

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $claimResponse = null;

    /**
     * The date when the EOB was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    private $diagnosis = [];

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $disposition = null;

    /**
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $employmentImpacted = null;

    /**
     * The person who created the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $enterer = null;

    /**
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $facility = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $form = null;

    /**
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $hospitalization = null;

    /**
     * The EOB Business Identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[]
     */
    private $information = [];

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    private $insurance = null;

    /**
     * The insurer which is responsible for the explanation of benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $insurer = null;

    /**
     * First tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    private $item = [];

    /**
     * The provider which is responsible for the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $organization = null;

    /**
     * Original prescription which has been superceded by this prescription to support the dispensing of pharmacy services, medications or products. For example, a physician may prescribe a medication which the pharmacy determines is contraindicated, or for which the patient has an intolerance, and therefor issues a new precription for an alternate medication which has the same theraputic intent. The prescription from the pharmacy becomes the 'prescription' and that from the physician becomes the 'original prescription'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $originalPrescription = null;

    /**
     * Processing outcome errror, partial or complete processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $outcome = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * The party to be reimbursed for the services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    private $payee = null;

    /**
     * Payment details for the claim if the claim has been paid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    private $payment = null;

    /**
     * Precedence (primary, secondary, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $precedence = null;

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $prescription = null;

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    private $procedure = [];

    /**
     * Note text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    private $processNote = [];

    /**
     * The provider which is responsible for the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $provider = null;

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $referral = null;

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    private $related = [];

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    private $status = null;

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $subType = [];

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $totalBenefit = null;

    /**
     * The total cost of the services reported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $totalCost = null;

    /**
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $unallocDeductable = null;

    /**
     * FHIRExplanationOfBenefit Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['accident'])) {
                $value = $data['accident'];
                if (is_array($value)) {
                    $value = new FHIRExplanationOfBenefitAccident($value);
                } 
                if (!($value instanceof FHIRExplanationOfBenefitAccident)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"accident\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident or data to construct type, saw ".gettype($value));
                }
                $this->setAccident($value);
            }
            if (isset($data['addItem'])) {
                $value = $data['addItem'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitAddItem($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitAddItem)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"addItem\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem or data to construct type, saw ".gettype($v));
                        }
                        $this->addAddItem($v);
                    }
                }
            }
            if (isset($data['benefitBalance'])) {
                $value = $data['benefitBalance'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitBenefitBalance($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitBenefitBalance)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"benefitBalance\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance or data to construct type, saw ".gettype($v));
                        }
                        $this->addBenefitBalance($v);
                    }
                }
            }
            if (isset($data['billablePeriod'])) {
                $value = $data['billablePeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"billablePeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setBillablePeriod($value);
            }
            if (isset($data['careTeam'])) {
                $value = $data['careTeam'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitCareTeam($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitCareTeam)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"careTeam\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam or data to construct type, saw ".gettype($v));
                        }
                        $this->addCareTeam($v);
                    }
                }
            }
            if (isset($data['claim'])) {
                $value = $data['claim'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"claim\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setClaim($value);
            }
            if (isset($data['claimResponse'])) {
                $value = $data['claimResponse'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"claimResponse\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setClaimResponse($value);
            }
            if (isset($data['created'])) {
                $value = $data['created'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"created\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setCreated($value);
            }
            if (isset($data['diagnosis'])) {
                $value = $data['diagnosis'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitDiagnosis($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitDiagnosis)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"diagnosis\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis or data to construct type, saw ".gettype($v));
                        }
                        $this->addDiagnosis($v);
                    }
                }
            }
            if (isset($data['disposition'])) {
                $value = $data['disposition'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"disposition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDisposition($value);
            }
            if (isset($data['employmentImpacted'])) {
                $value = $data['employmentImpacted'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"employmentImpacted\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setEmploymentImpacted($value);
            }
            if (isset($data['enterer'])) {
                $value = $data['enterer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"enterer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setEnterer($value);
            }
            if (isset($data['facility'])) {
                $value = $data['facility'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"facility\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setFacility($value);
            }
            if (isset($data['form'])) {
                $value = $data['form'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"form\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setForm($value);
            }
            if (isset($data['hospitalization'])) {
                $value = $data['hospitalization'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"hospitalization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setHospitalization($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['information'])) {
                $value = $data['information'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitInformation($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitInformation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"information\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation or data to construct type, saw ".gettype($v));
                        }
                        $this->addInformation($v);
                    }
                }
            }
            if (isset($data['insurance'])) {
                $value = $data['insurance'];
                if (is_array($value)) {
                    $value = new FHIRExplanationOfBenefitInsurance($value);
                } 
                if (!($value instanceof FHIRExplanationOfBenefitInsurance)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"insurance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance or data to construct type, saw ".gettype($value));
                }
                $this->setInsurance($value);
            }
            if (isset($data['insurer'])) {
                $value = $data['insurer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"insurer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setInsurer($value);
            }
            if (isset($data['item'])) {
                $value = $data['item'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitItem($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitItem)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"item\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem or data to construct type, saw ".gettype($v));
                        }
                        $this->addItem($v);
                    }
                }
            }
            if (isset($data['organization'])) {
                $value = $data['organization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"organization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setOrganization($value);
            }
            if (isset($data['originalPrescription'])) {
                $value = $data['originalPrescription'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"originalPrescription\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setOriginalPrescription($value);
            }
            if (isset($data['outcome'])) {
                $value = $data['outcome'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"outcome\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setOutcome($value);
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPatient($value);
            }
            if (isset($data['payee'])) {
                $value = $data['payee'];
                if (is_array($value)) {
                    $value = new FHIRExplanationOfBenefitPayee($value);
                } 
                if (!($value instanceof FHIRExplanationOfBenefitPayee)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"payee\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee or data to construct type, saw ".gettype($value));
                }
                $this->setPayee($value);
            }
            if (isset($data['payment'])) {
                $value = $data['payment'];
                if (is_array($value)) {
                    $value = new FHIRExplanationOfBenefitPayment($value);
                } 
                if (!($value instanceof FHIRExplanationOfBenefitPayment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"payment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment or data to construct type, saw ".gettype($value));
                }
                $this->setPayment($value);
            }
            if (isset($data['precedence'])) {
                $value = $data['precedence'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"precedence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setPrecedence($value);
            }
            if (isset($data['prescription'])) {
                $value = $data['prescription'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"prescription\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPrescription($value);
            }
            if (isset($data['procedure'])) {
                $value = $data['procedure'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitProcedure($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitProcedure)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"procedure\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure or data to construct type, saw ".gettype($v));
                        }
                        $this->addProcedure($v);
                    }
                }
            }
            if (isset($data['processNote'])) {
                $value = $data['processNote'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitProcessNote($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitProcessNote)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"processNote\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote or data to construct type, saw ".gettype($v));
                        }
                        $this->addProcessNote($v);
                    }
                }
            }
            if (isset($data['provider'])) {
                $value = $data['provider'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"provider\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setProvider($value);
            }
            if (isset($data['referral'])) {
                $value = $data['referral'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"referral\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setReferral($value);
            }
            if (isset($data['related'])) {
                $value = $data['related'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRExplanationOfBenefitRelated($v);
                        } 
                        if (!($v instanceof FHIRExplanationOfBenefitRelated)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"related\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated or data to construct type, saw ".gettype($v));
                        }
                        $this->addRelated($v);
                    }
                }
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRExplanationOfBenefitStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRExplanationOfBenefitStatus($value);
                }
                if (!($value instanceof FHIRExplanationOfBenefitStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRExplanationOfBenefitStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['subType'])) {
                $value = $data['subType'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Collection field \"subType\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addSubType($v);
                    }
                }
            }
            if (isset($data['totalBenefit'])) {
                $value = $data['totalBenefit'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"totalBenefit\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setTotalBenefit($value);
            }
            if (isset($data['totalCost'])) {
                $value = $data['totalCost'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"totalCost\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setTotalCost($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['unallocDeductable'])) {
                $value = $data['unallocDeductable'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Property \"unallocDeductable\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setUnallocDeductable($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
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
     * The first tier service adjudications for payor added services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     * @return $this
     */
    public function addAddItem(FHIRExplanationOfBenefitAddItem $addItem = null)
    {
        if (null === $addItem) {
            return $this; 
        }
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
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
    public function addBenefitBalance(FHIRExplanationOfBenefitBenefitBalance $benefitBalance = null)
    {
        if (null === $benefitBalance) {
            return $this; 
        }
        $this->benefitBalance[] = $benefitBalance;
        return $this;
    }

    /**
     * Balance by Benefit Category.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
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
    public function addCareTeam(FHIRExplanationOfBenefitCareTeam $careTeam = null)
    {
        if (null === $careTeam) {
            return $this; 
        }
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * The members of the team who provided the overall service as well as their role and whether responsible and qualifications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
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
     * The date when the EOB was created.
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
     * The date when the EOB was created.
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
    public function addDiagnosis(FHIRExplanationOfBenefitDiagnosis $diagnosis = null)
    {
        if (null === $diagnosis) {
            return $this; 
        }
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
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
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setEmploymentImpacted(FHIRPeriod $employmentImpacted = null)
    {
        if (null === $employmentImpacted) {
            return $this; 
        }
        $this->employmentImpacted = $employmentImpacted;
        return $this;
    }

    /**
     * The start and optional end dates of when the patient was precluded from working due to the treatable condition(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEmploymentImpacted()
    {
        return $this->employmentImpacted;
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
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setHospitalization(FHIRPeriod $hospitalization = null)
    {
        if (null === $hospitalization) {
            return $this; 
        }
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * The start and optional end dates of when the patient was confined to a treatment center.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * The EOB Business Identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The EOB Business Identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
    public function addInformation(FHIRExplanationOfBenefitInformation $information = null)
    {
        if (null === $information) {
            return $this; 
        }
        $this->information[] = $information;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[]
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
     * First tier of goods and services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem
     * @return $this
     */
    public function addItem(FHIRExplanationOfBenefitItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * First tier of goods and services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The provider which is responsible for the claim.
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
     * The provider which is responsible for the claim.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        if (null === $outcome) {
            return $this; 
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Processing outcome errror, partial or complete processing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
    public function addProcedure(FHIRExplanationOfBenefitProcedure $procedure = null)
    {
        if (null === $procedure) {
            return $this; 
        }
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * Ordered list of patient procedures performed to support the adjudication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
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
    public function addProcessNote(FHIRExplanationOfBenefitProcessNote $processNote = null)
    {
        if (null === $processNote) {
            return $this; 
        }
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * Note text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
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
    public function addRelated(FHIRExplanationOfBenefitRelated $related = null)
    {
        if (null === $related) {
            return $this; 
        }
        $this->related[] = $related;
        return $this;
    }

    /**
     * Other claims which are related to this claim such as prior claim versions or for related services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
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
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addSubType(FHIRCodeableConcept $subType = null)
    {
        if (null === $subType) {
            return $this; 
        }
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * A finer grained suite of claim subtype codes which may convey Inpatient vs Outpatient and/or a specialty service. In the US the BillType.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setTotalBenefit(FHIRMoney $totalBenefit = null)
    {
        if (null === $totalBenefit) {
            return $this; 
        }
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductable).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit()
    {
        return $this->totalBenefit;
    }

    /**
     * The total cost of the services reported.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setTotalCost(FHIRMoney $totalCost = null)
    {
        if (null === $totalCost) {
            return $this; 
        }
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * The total cost of the services reported.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
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
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setUnallocDeductable(FHIRMoney $unallocDeductable = null)
    {
        if (null === $unallocDeductable) {
            return $this; 
        }
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * The amount of deductable applied which was not allocated to any particular service line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable()
    {
        return $this->unallocDeductable;
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
        if (0 < count($values = $this->getAddItem())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['addItem'] = $vs;
            }
        }
        if (0 < count($values = $this->getBenefitBalance())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['benefitBalance'] = $vs;
            }
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $a['billablePeriod'] = $v;
        }
        if (0 < count($values = $this->getCareTeam())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['careTeam'] = $vs;
            }
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
        if (0 < count($values = $this->getDiagnosis())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['diagnosis'] = $vs;
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            $a['disposition'] = $v;
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            $a['employmentImpacted'] = $v;
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
        if (null !== ($v = $this->getHospitalization())) {
            $a['hospitalization'] = $v;
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (0 < count($values = $this->getInformation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['information'] = $vs;
            }
        }
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a['insurer'] = $v;
        }
        if (0 < count($values = $this->getItem())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['item'] = $vs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
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
        if (0 < count($values = $this->getProcedure())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['procedure'] = $vs;
            }
        }
        if (0 < count($values = $this->getProcessNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['processNote'] = $vs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getReferral())) {
            $a['referral'] = $v;
        }
        if (0 < count($values = $this->getRelated())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['related'] = $vs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (0 < count($values = $this->getSubType())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['subType'] = $vs;
            }
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            $a['totalBenefit'] = $v;
        }
        if (null !== ($v = $this->getTotalCost())) {
            $a['totalCost'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            $a['unallocDeductable'] = $v;
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
        if (null !== ($v = $this->getAccident())) {
            $v->xmlSerialize(true, $sxe->addChild('accident'));
        }
        if (0 < count($values = $this->getAddItem())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('addItem'));
                }
            }
        }
        if (0 < count($values = $this->getBenefitBalance())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('benefitBalance'));
                }
            }
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('billablePeriod'));
        }
        if (0 < count($values = $this->getCareTeam())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('careTeam'));
                }
            }
        }
        if (null !== ($v = $this->getClaim())) {
            $v->xmlSerialize(true, $sxe->addChild('claim'));
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $v->xmlSerialize(true, $sxe->addChild('claimResponse'));
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize(true, $sxe->addChild('created'));
        }
        if (0 < count($values = $this->getDiagnosis())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('diagnosis'));
                }
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            $v->xmlSerialize(true, $sxe->addChild('disposition'));
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            $v->xmlSerialize(true, $sxe->addChild('employmentImpacted'));
        }
        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize(true, $sxe->addChild('enterer'));
        }
        if (null !== ($v = $this->getFacility())) {
            $v->xmlSerialize(true, $sxe->addChild('facility'));
        }
        if (null !== ($v = $this->getForm())) {
            $v->xmlSerialize(true, $sxe->addChild('form'));
        }
        if (null !== ($v = $this->getHospitalization())) {
            $v->xmlSerialize(true, $sxe->addChild('hospitalization'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getInformation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('information'));
                }
            }
        }
        if (null !== ($v = $this->getInsurance())) {
            $v->xmlSerialize(true, $sxe->addChild('insurance'));
        }
        if (null !== ($v = $this->getInsurer())) {
            $v->xmlSerialize(true, $sxe->addChild('insurer'));
        }
        if (0 < count($values = $this->getItem())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('item'));
                }
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('organization'));
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $v->xmlSerialize(true, $sxe->addChild('originalPrescription'));
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize(true, $sxe->addChild('outcome'));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (null !== ($v = $this->getPayee())) {
            $v->xmlSerialize(true, $sxe->addChild('payee'));
        }
        if (null !== ($v = $this->getPayment())) {
            $v->xmlSerialize(true, $sxe->addChild('payment'));
        }
        if (null !== ($v = $this->getPrecedence())) {
            $v->xmlSerialize(true, $sxe->addChild('precedence'));
        }
        if (null !== ($v = $this->getPrescription())) {
            $v->xmlSerialize(true, $sxe->addChild('prescription'));
        }
        if (0 < count($values = $this->getProcedure())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('procedure'));
                }
            }
        }
        if (0 < count($values = $this->getProcessNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('processNote'));
                }
            }
        }
        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize(true, $sxe->addChild('provider'));
        }
        if (null !== ($v = $this->getReferral())) {
            $v->xmlSerialize(true, $sxe->addChild('referral'));
        }
        if (0 < count($values = $this->getRelated())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('related'));
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (0 < count($values = $this->getSubType())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('subType'));
                }
            }
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            $v->xmlSerialize(true, $sxe->addChild('totalBenefit'));
        }
        if (null !== ($v = $this->getTotalCost())) {
            $v->xmlSerialize(true, $sxe->addChild('totalCost'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            $v->xmlSerialize(true, $sxe->addChild('unallocDeductable'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}