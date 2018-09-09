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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The resource ChargeItem describes the provision of healthcare provider products for a certain patient, therefore referring not only to the product, but containing in addition details of the provision, like date, time, amounts and participating organizations and persons. Main Usage of the ChargeItem is to enable the billing process and internal cost allocation.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRChargeItem
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRChargeItem extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ChargeItem';

    /**
     * Account into which this ChargeItems belongs.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $account = null;

    /**
     * The anatomical location where the related service has been applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodysite = null;

    /**
     * A code that identifies the charge, like a billing code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The financial cost center permits the tracking of charge attribution.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $costCenter = null;

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $definition = null;

    /**
     * Date the charge item was entered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $enteredDate = null;

    /**
     * The device, practitioner, etc. who entered the charge item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factorOverride = null;

    /**
     * Identifiers assigned to this event performer or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * If the list price or the rule based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $overrideReason = null;

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Indicates who or what performed or participated in the charged service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer
     */
    public $performer = null;

    /**
     * The organization requesting the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performingOrganization = null;

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $priceOverride = null;

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * Quantity of which the charge item has been serviced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The organization performing the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestingOrganization = null;

    /**
     * Indicated the rendered service that caused this charge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $service = null;

    /**
     * The current state of the ChargeItem.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus
     */
    public $status = null;

    /**
     * The individual or set of individuals the action is being or was performed on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Further information supporting this charge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInformation = null;

    /**
     * FHIRChargeItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['account'])) {
                $this->setAccount($data['account']);
            }
            if (isset($data['bodysite'])) {
                $this->setBodysite($data['bodysite']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['costCenter'])) {
                $this->setCostCenter($data['costCenter']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['enteredDate'])) {
                $this->setEnteredDate($data['enteredDate']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['factorOverride'])) {
                $this->setFactorOverride($data['factorOverride']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['occurrenceTiming'])) {
                $this->setOccurrenceTiming($data['occurrenceTiming']);
            }
            if (isset($data['overrideReason'])) {
                $this->setOverrideReason($data['overrideReason']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['performingOrganization'])) {
                $this->setPerformingOrganization($data['performingOrganization']);
            }
            if (isset($data['priceOverride'])) {
                $this->setPriceOverride($data['priceOverride']);
            }
            if (isset($data['productCodeableConcept'])) {
                $this->setProductCodeableConcept($data['productCodeableConcept']);
            }
            if (isset($data['productReference'])) {
                $this->setProductReference($data['productReference']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['requestingOrganization'])) {
                $this->setRequestingOrganization($data['requestingOrganization']);
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Account into which this ChargeItems belongs.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAccount(FHIRReference $account = null)
    {
        if (null === $account) {
            return $this; 
        }
        $this->account = $account;
        return $this;
    }

    /**
     * Account into which this ChargeItems belongs.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * The anatomical location where the related service has been applied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodysite(FHIRCodeableConcept $bodysite = null)
    {
        if (null === $bodysite) {
            return $this; 
        }
        $this->bodysite = $bodysite;
        return $this;
    }

    /**
     * The anatomical location where the related service has been applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodysite()
    {
        return $this->bodysite;
    }


    /**
     * A code that identifies the charge, like a billing code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that identifies the charge, like a billing code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The encounter or episode of care that establishes the context for this event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The financial cost center permits the tracking of charge attribution.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCostCenter(FHIRReference $costCenter = null)
    {
        if (null === $costCenter) {
            return $this; 
        }
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * The financial cost center permits the tracking of charge attribution.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }


    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRUri($definition);
        }
        if (!($definition instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * Date the charge item was entered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEnteredDate($enteredDate)
    {
        if (null === $enteredDate) {
            return $this; 
        }
        if (is_scalar($enteredDate)) {
            $enteredDate = new FHIRDateTime($enteredDate);
        }
        if (!($enteredDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setEnteredDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($enteredDate)
            ));
        }
        $this->enteredDate = $enteredDate;
        return $this;
    }

    /**
     * Date the charge item was entered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEnteredDate()
    {
        return $this->enteredDate;
    }


    /**
     * The device, practitioner, etc. who entered the charge item.
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
     * The device, practitioner, etc. who entered the charge item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }


    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFactorOverride($factorOverride)
    {
        if (null === $factorOverride) {
            return $this; 
        }
        if (is_scalar($factorOverride)) {
            $factorOverride = new FHIRDecimal($factorOverride);
        }
        if (!($factorOverride instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setFactorOverride - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($factorOverride)
            ));
        }
        $this->factorOverride = $factorOverride;
        return $this;
    }

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactorOverride()
    {
        return $this->factorOverride;
    }


    /**
     * Identifiers assigned to this event performer or other systems.
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
     * Identifiers assigned to this event performer or other systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Comments made about the event by the performer, subject or other participants.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Date/time(s) or duration when the charged service was applied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        if (null === $occurrenceDateTime) {
            return $this; 
        }
        if (is_scalar($occurrenceDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * Date/time(s) or duration when the charged service was applied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        if (null === $occurrencePeriod) {
            return $this; 
        }
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }


    /**
     * Date/time(s) or duration when the charged service was applied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        if (null === $occurrenceTiming) {
            return $this; 
        }
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Date/time(s) or duration when the charged service was applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }


    /**
     * If the list price or the rule based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOverrideReason($overrideReason)
    {
        if (null === $overrideReason) {
            return $this; 
        }
        if (is_scalar($overrideReason)) {
            $overrideReason = new FHIRString($overrideReason);
        }
        if (!($overrideReason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setOverrideReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($overrideReason)
            ));
        }
        $this->overrideReason = $overrideReason;
        return $this;
    }

    /**
     * If the list price or the rule based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOverrideReason()
    {
        return $this->overrideReason;
    }


    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Indicates who or what performed or participated in the charged service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer
     * @return $this
     */
    public function setPerformer(FHIRChargeItemPerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who or what performed or participated in the charged service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * The organization requesting the service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPerformingOrganization(FHIRReference $performingOrganization = null)
    {
        if (null === $performingOrganization) {
            return $this; 
        }
        $this->performingOrganization = $performingOrganization;
        return $this;
    }

    /**
     * The organization requesting the service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformingOrganization()
    {
        return $this->performingOrganization;
    }


    /**
     * Total price of the charge overriding the list price associated with the code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setPriceOverride(FHIRMoney $priceOverride = null)
    {
        if (null === $priceOverride) {
            return $this; 
        }
        $this->priceOverride = $priceOverride;
        return $this;
    }

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
    }


    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept(FHIRCodeableConcept $productCodeableConcept = null)
    {
        if (null === $productCodeableConcept) {
            return $this; 
        }
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }


    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        if (null === $productReference) {
            return $this; 
        }
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }


    /**
     * Quantity of which the charge item has been serviced.
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
     * Quantity of which the charge item has been serviced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Describes why the event occurred in coded or textual form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * The organization performing the service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequestingOrganization(FHIRReference $requestingOrganization = null)
    {
        if (null === $requestingOrganization) {
            return $this; 
        }
        $this->requestingOrganization = $requestingOrganization;
        return $this;
    }

    /**
     * The organization performing the service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestingOrganization()
    {
        return $this->requestingOrganization;
    }


    /**
     * Indicated the rendered service that caused this charge.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setService(FHIRReference $service = null)
    {
        if (null === $service) {
            return $this; 
        }
        $this->service = $service;
        return $this;
    }

    /**
     * Indicated the rendered service that caused this charge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getService()
    {
        return $this->service;
    }


    /**
     * The current state of the ChargeItem.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRChargeItemStatus($status);
        }
        if (!($status instanceof FHIRChargeItemStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the ChargeItem.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The individual or set of individuals the action is being or was performed on.
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
     * The individual or set of individuals the action is being or was performed on.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Further information supporting this charge.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInformation(FHIRReference $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Further information supporting this charge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
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
        if (null !== ($v = $this->getAccount())) {
            $a['account'] = $v;
        }
        if (null !== ($v = $this->getBodysite())) {
            $a['bodysite'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getCostCenter())) {
            $a['costCenter'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getEnteredDate())) {
            $a['enteredDate'] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a['enterer'] = $v;
        }
        if (null !== ($v = $this->getFactorOverride())) {
            $a['factorOverride'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a['occurrencePeriod'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a['occurrenceTiming'] = $v;
        }
        if (null !== ($v = $this->getOverrideReason())) {
            $a['overrideReason'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPerformingOrganization())) {
            $a['performingOrganization'] = $v;
        }
        if (null !== ($v = $this->getPriceOverride())) {
            $a['priceOverride'] = $v;
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a['productCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a['productReference'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getRequestingOrganization())) {
            $a['requestingOrganization'] = $v;
        }
        if (null !== ($v = $this->getService())) {
            $a['service'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSupportingInformation())) {
            $a['supportingInformation'] = $v;
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
            $sxe = new \SimpleXMLElement('<ChargeItem xmlns="http://hl7.org/fhir"></ChargeItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}