<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim;

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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Claim.Item';

    /**
     * If this is an actual service or product line, i.e. not a Group, then use code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,RxNorm,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped e.g. 'glasses' or 'compound'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $billcode = null;

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * CareTeam applicable for this service or product line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $careTeamSequence = null;

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Second tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail
     */
    public $detail = null;

    /**
     * Diagnosis applicable for this service or product line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $diagnosisSequence = null;

    /**
     * A billed item may include goods or services provided in multiple encounters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $informationSequence = null;

    /**
     * Where the service was provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $locationAddress = null;

    /**
     * Where the service was provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $locationCodeableConcept = null;

    /**
     * Where the service was provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $locationReference = null;

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modifier = null;

    /**
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $net = null;

    /**
     * Procedures applicable for this service or product line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $procedureSequence = null;

    /**
     * For programs which require reason codes for the inclusion or covering of this billed item under the program or sub-program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $programCode = null;

    /**
     * The number of repetitions of a service or product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $revenue = null;

    /**
     * A service line number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $servicedDate = null;

    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $servicedPeriod = null;

    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subSite = null;

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $udi = null;

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * FHIRClaimItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['billcode'])) {
                $this->setBillcode($data['billcode']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['careTeamSequence'])) {
                $this->setCareTeamSequence($data['careTeamSequence']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['diagnosisSequence'])) {
                $this->setDiagnosisSequence($data['diagnosisSequence']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['informationSequence'])) {
                $this->setInformationSequence($data['informationSequence']);
            }
            if (isset($data['locationAddress'])) {
                $this->setLocationAddress($data['locationAddress']);
            }
            if (isset($data['locationCodeableConcept'])) {
                $this->setLocationCodeableConcept($data['locationCodeableConcept']);
            }
            if (isset($data['locationReference'])) {
                $this->setLocationReference($data['locationReference']);
            }
            if (isset($data['modifier'])) {
                $this->setModifier($data['modifier']);
            }
            if (isset($data['net'])) {
                $this->setNet($data['net']);
            }
            if (isset($data['procedureSequence'])) {
                $this->setProcedureSequence($data['procedureSequence']);
            }
            if (isset($data['programCode'])) {
                $this->setProgramCode($data['programCode']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['revenue'])) {
                $this->setRevenue($data['revenue']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['servicedDate'])) {
                $this->setServicedDate($data['servicedDate']);
            }
            if (isset($data['servicedPeriod'])) {
                $this->setServicedPeriod($data['servicedPeriod']);
            }
            if (isset($data['subSite'])) {
                $this->setSubSite($data['subSite']);
            }
            if (isset($data['udi'])) {
                $this->setUdi($data['udi']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * If this is an actual service or product line, i.e. not a Group, then use code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,RxNorm,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped e.g. 'glasses' or 'compound'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBillcode(FHIRCodeableConcept $billcode = null)
    {
        if (null === $billcode) {
            return $this; 
        }
        $this->billcode = $billcode;
        return $this;
    }

    /**
     * If this is an actual service or product line, i.e. not a Group, then use code to indicate the Professional Service or Product supplied (e.g. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,RxNorm,ACHI,CCI). If a grouping item then use a group code to indicate the type of thing being grouped e.g. 'glasses' or 'compound'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBillcode()
    {
        return $this->billcode;
    }


    /**
     * Physical service site on the patient (limb, tooth, etc.).
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
     * Physical service site on the patient (limb, tooth, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * CareTeam applicable for this service or product line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setCareTeamSequence($careTeamSequence)
    {
        if (null === $careTeamSequence) {
            return $this; 
        }
        if (is_scalar($careTeamSequence)) {
            $careTeamSequence = new FHIRPositiveInt($careTeamSequence);
        }
        if (!($careTeamSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setCareTeamSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($careTeamSequence)
            ));
        }
        $this->careTeamSequence = $careTeamSequence;
        return $this;
    }

    /**
     * CareTeam applicable for this service or product line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getCareTeamSequence()
    {
        return $this->careTeamSequence;
    }


    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Second tier of goods and services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail
     * @return $this
     */
    public function setDetail(FHIRClaimDetail $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * Second tier of goods and services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * Diagnosis applicable for this service or product line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDiagnosisSequence($diagnosisSequence)
    {
        if (null === $diagnosisSequence) {
            return $this; 
        }
        if (is_scalar($diagnosisSequence)) {
            $diagnosisSequence = new FHIRPositiveInt($diagnosisSequence);
        }
        if (!($diagnosisSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setDiagnosisSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($diagnosisSequence)
            ));
        }
        $this->diagnosisSequence = $diagnosisSequence;
        return $this;
    }

    /**
     * Diagnosis applicable for this service or product line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDiagnosisSequence()
    {
        return $this->diagnosisSequence;
    }


    /**
     * A billed item may include goods or services provided in multiple encounters.
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
     * A billed item may include goods or services provided in multiple encounters.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFactor($factor)
    {
        if (null === $factor) {
            return $this; 
        }
        if (is_scalar($factor)) {
            $factor = new FHIRDecimal($factor);
        }
        if (!($factor instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($factor)
            ));
        }
        $this->factor = $factor;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }


    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setInformationSequence($informationSequence)
    {
        if (null === $informationSequence) {
            return $this; 
        }
        if (is_scalar($informationSequence)) {
            $informationSequence = new FHIRPositiveInt($informationSequence);
        }
        if (!($informationSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setInformationSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($informationSequence)
            ));
        }
        $this->informationSequence = $informationSequence;
        return $this;
    }

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getInformationSequence()
    {
        return $this->informationSequence;
    }


    /**
     * Where the service was provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setLocationAddress(FHIRAddress $locationAddress = null)
    {
        if (null === $locationAddress) {
            return $this; 
        }
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Where the service was provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }


    /**
     * Where the service was provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLocationCodeableConcept(FHIRCodeableConcept $locationCodeableConcept = null)
    {
        if (null === $locationCodeableConcept) {
            return $this; 
        }
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * Where the service was provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLocationCodeableConcept()
    {
        return $this->locationCodeableConcept;
    }


    /**
     * Where the service was provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocationReference(FHIRReference $locationReference = null)
    {
        if (null === $locationReference) {
            return $this; 
        }
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * Where the service was provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }


    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setModifier(FHIRCodeableConcept $modifier = null)
    {
        if (null === $modifier) {
            return $this; 
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModifier()
    {
        return $this->modifier;
    }


    /**
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setNet(FHIRMoney $net = null)
    {
        if (null === $net) {
            return $this; 
        }
        $this->net = $net;
        return $this;
    }

    /**
     * The quantity times the unit price for an additional service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }


    /**
     * Procedures applicable for this service or product line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setProcedureSequence($procedureSequence)
    {
        if (null === $procedureSequence) {
            return $this; 
        }
        if (is_scalar($procedureSequence)) {
            $procedureSequence = new FHIRPositiveInt($procedureSequence);
        }
        if (!($procedureSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setProcedureSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($procedureSequence)
            ));
        }
        $this->procedureSequence = $procedureSequence;
        return $this;
    }

    /**
     * Procedures applicable for this service or product line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getProcedureSequence()
    {
        return $this->procedureSequence;
    }


    /**
     * For programs which require reason codes for the inclusion or covering of this billed item under the program or sub-program.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProgramCode(FHIRCodeableConcept $programCode = null)
    {
        if (null === $programCode) {
            return $this; 
        }
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * For programs which require reason codes for the inclusion or covering of this billed item under the program or sub-program.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }


    /**
     * The number of repetitions of a service or product.
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
     * The number of repetitions of a service or product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * The type of revenue or cost center providing the product and/or service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRevenue(FHIRCodeableConcept $revenue = null)
    {
        if (null === $revenue) {
            return $this; 
        }
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue()
    {
        return $this->revenue;
    }


    /**
     * A service line number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A service line number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }


    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setServicedDate($servicedDate)
    {
        if (null === $servicedDate) {
            return $this; 
        }
        if (is_scalar($servicedDate)) {
            $servicedDate = new FHIRDate($servicedDate);
        }
        if (!($servicedDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::setServicedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($servicedDate)
            ));
        }
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }


    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setServicedPeriod(FHIRPeriod $servicedPeriod = null)
    {
        if (null === $servicedPeriod) {
            return $this; 
        }
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * The date or dates when the service or product was supplied, performed or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }


    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubSite(FHIRCodeableConcept $subSite = null)
    {
        if (null === $subSite) {
            return $this; 
        }
        $this->subSite = $subSite;
        return $this;
    }

    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubSite()
    {
        return $this->subSite;
    }


    /**
     * List of Unique Device Identifiers associated with this line item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUdi(FHIRReference $udi = null)
    {
        if (null === $udi) {
            return $this; 
        }
        $this->udi = $udi;
        return $this;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUdi()
    {
        return $this->udi;
    }


    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        if (null === $unitPrice) {
            return $this; 
        }
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
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
        if (null !== ($v = $this->getBillcode())) {
            $a['billcode'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getCareTeamSequence())) {
            $a['careTeamSequence'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getDiagnosisSequence())) {
            $a['diagnosisSequence'] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a['factor'] = $v;
        }
        if (null !== ($v = $this->getInformationSequence())) {
            $a['informationSequence'] = $v;
        }
        if (null !== ($v = $this->getLocationAddress())) {
            $a['locationAddress'] = $v;
        }
        if (null !== ($v = $this->getLocationCodeableConcept())) {
            $a['locationCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getLocationReference())) {
            $a['locationReference'] = $v;
        }
        if (null !== ($v = $this->getModifier())) {
            $a['modifier'] = $v;
        }
        if (null !== ($v = $this->getNet())) {
            $a['net'] = $v;
        }
        if (null !== ($v = $this->getProcedureSequence())) {
            $a['procedureSequence'] = $v;
        }
        if (null !== ($v = $this->getProgramCode())) {
            $a['programCode'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRevenue())) {
            $a['revenue'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        if (null !== ($v = $this->getServicedDate())) {
            $a['servicedDate'] = $v;
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $a['servicedPeriod'] = $v;
        }
        if (null !== ($v = $this->getSubSite())) {
            $a['subSite'] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a['udi'] = $v;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a['unitPrice'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimItem xmlns="http://hl7.org/fhir"></ClaimItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}