<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

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
 * This resource provides the adjudication details from the processing of a Claim resource.
 *
 * Class FHIRClaimResponseAddItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClaimResponse.AddItem';

    /**
     * The adjudication results.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     */
    public $adjudication = null;

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $billcode = null;

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * The second-tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1
     */
    public $detail = null;

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $detailSequence = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * List of input service items which this service line is intended to replace.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $itemSequence = null;

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
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $noteNumber = null;

    /**
     * For programs which require reason codes for the inclusion or covering of this billed item under the program or sub-program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $programCode = null;

    /**
     * The providers who are authorized for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The number of repetitions of a service or product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

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
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $subdetailSequence = null;

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * FHIRClaimResponseAddItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['adjudication'])) {
                $this->setAdjudication($data['adjudication']);
            }
            if (isset($data['billcode'])) {
                $this->setBillcode($data['billcode']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['detailSequence'])) {
                $this->setDetailSequence($data['detailSequence']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['itemSequence'])) {
                $this->setItemSequence($data['itemSequence']);
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
            if (isset($data['noteNumber'])) {
                $this->setNoteNumber($data['noteNumber']);
            }
            if (isset($data['programCode'])) {
                $this->setProgramCode($data['programCode']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
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
            if (isset($data['subdetailSequence'])) {
                $this->setSubdetailSequence($data['subdetailSequence']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The adjudication results.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     * @return $this
     */
    public function setAdjudication(FHIRClaimResponseAdjudication $adjudication = null)
    {
        if (null === $adjudication) {
            return $this; 
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * The adjudication results.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }


    /**
     * A code to indicate the Professional Service or Product supplied.
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
     * A code to indicate the Professional Service or Product supplied.
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
     * The second-tier service adjudications for payor added services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1
     * @return $this
     */
    public function setDetail(FHIRClaimResponseDetail1 $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * The second-tier service adjudications for payor added services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDetailSequence($detailSequence)
    {
        if (null === $detailSequence) {
            return $this; 
        }
        if (is_scalar($detailSequence)) {
            $detailSequence = new FHIRPositiveInt($detailSequence);
        }
        if (!($detailSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseAddItem::setDetailSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($detailSequence)
            ));
        }
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequence()
    {
        return $this->detailSequence;
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
                'FHIRClaimResponseAddItem::setFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
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
     * List of input service items which this service line is intended to replace.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setItemSequence($itemSequence)
    {
        if (null === $itemSequence) {
            return $this; 
        }
        if (is_scalar($itemSequence)) {
            $itemSequence = new FHIRPositiveInt($itemSequence);
        }
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseAddItem::setItemSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($itemSequence)
            ));
        }
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * List of input service items which this service line is intended to replace.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
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
     * A list of note references to the notes provided below.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setNoteNumber($noteNumber)
    {
        if (null === $noteNumber) {
            return $this; 
        }
        if (is_scalar($noteNumber)) {
            $noteNumber = new FHIRPositiveInt($noteNumber);
        }
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseAddItem::setNoteNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($noteNumber)
            ));
        }
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
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
     * The providers who are authorized for the services rendered to the patient.
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
     * The providers who are authorized for the services rendered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
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
                'FHIRClaimResponseAddItem::setServicedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
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
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSubdetailSequence($subdetailSequence)
    {
        if (null === $subdetailSequence) {
            return $this; 
        }
        if (is_scalar($subdetailSequence)) {
            $subdetailSequence = new FHIRPositiveInt($subdetailSequence);
        }
        if (!($subdetailSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseAddItem::setSubdetailSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($subdetailSequence)
            ));
        }
        $this->subdetailSequence = $subdetailSequence;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSubdetailSequence()
    {
        return $this->subdetailSequence;
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
        if (null !== ($v = $this->getAdjudication())) {
            $a['adjudication'] = $v;
        }
        if (null !== ($v = $this->getBillcode())) {
            $a['billcode'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getDetailSequence())) {
            $a['detailSequence'] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a['factor'] = $v;
        }
        if (null !== ($v = $this->getItemSequence())) {
            $a['itemSequence'] = $v;
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
        if (null !== ($v = $this->getNoteNumber())) {
            $a['noteNumber'] = $v;
        }
        if (null !== ($v = $this->getProgramCode())) {
            $a['programCode'] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
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
        if (null !== ($v = $this->getSubdetailSequence())) {
            $a['subdetailSequence'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimResponseAddItem xmlns="http://hl7.org/fhir"></ClaimResponseAddItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}