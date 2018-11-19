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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $account = [];

    /**
     * The anatomical location where the related service has been applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $bodysite = [];

    /**
     * A code that identifies the charge, like a billing code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $context = null;

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $definition = [];

    /**
     * Date the charge item was entered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $enteredDate = null;

    /**
     * The device, practitioner, etc. who entered the charge item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $enterer = null;

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $factorOverride = null;

    /**
     * Identifiers assigned to this event performer or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $occurrencePeriod = null;

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $occurrenceTiming = null;

    /**
     * If the list price or the rule based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $overrideReason = null;

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $partOf = [];

    /**
     * Indicates who or what performed or participated in the charged service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant[]
     */
    private $participant = [];

    /**
     * The organization requesting the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $performingOrganization = null;

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $priceOverride = null;

    /**
     * Quantity of which the charge item has been serviced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $quantity = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];

    /**
     * The organization performing the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $requestingOrganization = null;

    /**
     * Indicated the rendered service that caused this charge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $service = [];

    /**
     * The current state of the ChargeItem.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus
     */
    private $status = null;

    /**
     * The individual or set of individuals the action is being or was performed on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * Further information supporting the this charge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $supportingInformation = [];

    /**
     * FHIRChargeItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['account'])) {
                $value = $data['account'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"account\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addAccount($v);
                    }
                }
            }
            if (isset($data['bodysite'])) {
                $value = $data['bodysite'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"bodysite\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addBodysite($v);
                    }
                }
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['context'])) {
                $value = $data['context'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"context\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setContext($value);
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRUri($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRUri($v);
                        }
                        if (!($v instanceof FHIRUri)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"definition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($v));
                        }
                        $this->addDefinition($v);
                    }
                }
            }
            if (isset($data['enteredDate'])) {
                $value = $data['enteredDate'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"enteredDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setEnteredDate($value);
            }
            if (isset($data['enterer'])) {
                $value = $data['enterer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"enterer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setEnterer($value);
            }
            if (isset($data['factorOverride'])) {
                $value = $data['factorOverride'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"factorOverride\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value));
                }
                $this->setFactorOverride($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setIdentifier($value);
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['occurrenceDateTime'])) {
                $value = $data['occurrenceDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"occurrenceDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setOccurrenceDateTime($value);
            }
            if (isset($data['occurrencePeriod'])) {
                $value = $data['occurrencePeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"occurrencePeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setOccurrencePeriod($value);
            }
            if (isset($data['occurrenceTiming'])) {
                $value = $data['occurrenceTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"occurrenceTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value));
                }
                $this->setOccurrenceTiming($value);
            }
            if (isset($data['overrideReason'])) {
                $value = $data['overrideReason'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"overrideReason\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setOverrideReason($value);
            }
            if (isset($data['partOf'])) {
                $value = $data['partOf'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"partOf\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addPartOf($v);
                    }
                }
            }
            if (isset($data['participant'])) {
                $value = $data['participant'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRChargeItemParticipant($v);
                        } 
                        if (!($v instanceof FHIRChargeItemParticipant)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"participant\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant or data to construct type, saw ".gettype($v));
                        }
                        $this->addParticipant($v);
                    }
                }
            }
            if (isset($data['performingOrganization'])) {
                $value = $data['performingOrganization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"performingOrganization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPerformingOrganization($value);
            }
            if (isset($data['priceOverride'])) {
                $value = $data['priceOverride'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"priceOverride\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setPriceOverride($value);
            }
            if (isset($data['quantity'])) {
                $value = $data['quantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"quantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setQuantity($value);
            }
            if (isset($data['reason'])) {
                $value = $data['reason'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"reason\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addReason($v);
                    }
                }
            }
            if (isset($data['requestingOrganization'])) {
                $value = $data['requestingOrganization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"requestingOrganization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setRequestingOrganization($value);
            }
            if (isset($data['service'])) {
                $value = $data['service'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"service\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addService($v);
                    }
                }
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRChargeItemStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRChargeItemStatus($value);
                }
                if (!($value instanceof FHIRChargeItemStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRChargeItemStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['subject'])) {
                $value = $data['subject'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Property \"subject\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setSubject($value);
            }
            if (isset($data['supportingInformation'])) {
                $value = $data['supportingInformation'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Collection field \"supportingInformation\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addSupportingInformation($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Account into which this ChargeItems belongs.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addAccount(FHIRReference $account = null)
    {
        if (null === $account) {
            return $this; 
        }
        $this->account[] = $account;
        return $this;
    }

    /**
     * Account into which this ChargeItems belongs.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
    public function addBodysite(FHIRCodeableConcept $bodysite = null)
    {
        if (null === $bodysite) {
            return $this; 
        }
        $this->bodysite[] = $bodysite;
        return $this;
    }

    /**
     * The anatomical location where the related service has been applied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function addDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRUri($definition);
        }
        if (!($definition instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::addDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri[]
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
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
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
    public function addPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Indicates who or what performed or participated in the charged service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant
     * @return $this
     */
    public function addParticipant(FHIRChargeItemParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Indicates who or what performed or participated in the charged service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
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
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
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
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
    public function addService(FHIRReference $service = null)
    {
        if (null === $service) {
            return $this; 
        }
        $this->service[] = $service;
        return $this;
    }

    /**
     * Indicated the rendered service that caused this charge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * Further information supporting the this charge.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addSupportingInformation(FHIRReference $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * Further information supporting the this charge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
        if (0 < count($values = $this->getAccount())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['account'] = $vs;
            }
        }
        if (0 < count($values = $this->getBodysite())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['bodysite'] = $vs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (0 < count($values = $this->getDefinition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['definition'] = $vs;
            }
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
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
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
        if (0 < count($values = $this->getPartOf())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['partOf'] = $vs;
            }
        }
        if (0 < count($values = $this->getParticipant())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['participant'] = $vs;
            }
        }
        if (null !== ($v = $this->getPerformingOrganization())) {
            $a['performingOrganization'] = $v;
        }
        if (null !== ($v = $this->getPriceOverride())) {
            $a['priceOverride'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (0 < count($values = $this->getReason())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reason'] = $vs;
            }
        }
        if (null !== ($v = $this->getRequestingOrganization())) {
            $a['requestingOrganization'] = $v;
        }
        if (0 < count($values = $this->getService())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['service'] = $vs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (0 < count($values = $this->getSupportingInformation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['supportingInformation'] = $vs;
            }
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
        if (0 < count($values = $this->getAccount())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('account'));
                }
            }
        }
        if (0 < count($values = $this->getBodysite())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('bodysite'));
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize(true, $sxe->addChild('context'));
        }
        if (0 < count($values = $this->getDefinition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('definition'));
                }
            }
        }
        if (null !== ($v = $this->getEnteredDate())) {
            $v->xmlSerialize(true, $sxe->addChild('enteredDate'));
        }
        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize(true, $sxe->addChild('enterer'));
        }
        if (null !== ($v = $this->getFactorOverride())) {
            $v->xmlSerialize(true, $sxe->addChild('factorOverride'));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
        }
        if (null !== ($v = $this->getOverrideReason())) {
            $v->xmlSerialize(true, $sxe->addChild('overrideReason'));
        }
        if (0 < count($values = $this->getPartOf())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('partOf'));
                }
            }
        }
        if (0 < count($values = $this->getParticipant())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('participant'));
                }
            }
        }
        if (null !== ($v = $this->getPerformingOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('performingOrganization'));
        }
        if (null !== ($v = $this->getPriceOverride())) {
            $v->xmlSerialize(true, $sxe->addChild('priceOverride'));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('quantity'));
        }
        if (0 < count($values = $this->getReason())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reason'));
                }
            }
        }
        if (null !== ($v = $this->getRequestingOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('requestingOrganization'));
        }
        if (0 < count($values = $this->getService())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('service'));
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize(true, $sxe->addChild('subject'));
        }
        if (0 < count($values = $this->getSupportingInformation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('supportingInformation'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}