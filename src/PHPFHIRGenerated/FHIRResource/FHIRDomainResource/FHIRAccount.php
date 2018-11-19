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

use PHPFHIRGenerated\FHIRElement\FHIRAccountStatus;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A financial tool for tracking value accrued for a particular purpose.  In the healthcare field, used to track charges for a patient, cost centers, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAccount
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAccount extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Account';

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $active = null;

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $balance = null;

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage[]
     */
    private $coverage = [];

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Parties financially responsible for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor[]
     */
    private $guarantor = [];

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $owner = null;

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * Indicates whether the account is presently used/usable or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    private $status = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRAccount Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['active'])) {
                $value = $data['active'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"active\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setActive($value);
            }
            if (isset($data['balance'])) {
                $value = $data['balance'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"balance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value)); 
                }
                $this->setBalance($value);
            }
            if (isset($data['coverage'])) {
                $value = $data['coverage'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAccountCoverage($v);
                        } 
                        if (!($v instanceof FHIRAccountCoverage)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Collection field \"coverage\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCoverage($v);
                    }
                }
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['guarantor'])) {
                $value = $data['guarantor'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAccountGuarantor($v);
                        } 
                        if (!($v instanceof FHIRAccountGuarantor)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Collection field \"guarantor\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addGuarantor($v);
                    }
                }
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['owner'])) {
                $value = $data['owner'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"owner\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setOwner($value);
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setPeriod($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRAccountStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAccountStatus($value);
                }
                if (!($value instanceof FHIRAccountStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
            if (isset($data['subject'])) {
                $value = $data['subject'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"subject\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setSubject($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setActive(FHIRPeriod $active = null)
    {
        if (null === $active) {
            return $this; 
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setBalance(FHIRMoney $balance = null)
    {
        if (null === $balance) {
            return $this; 
        }
        $this->balance = $balance;
        return $this;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage
     * @return $this
     */
    public function addCoverage(FHIRAccountCoverage $coverage = null)
    {
        if (null === $coverage) {
            return $this; 
        }
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
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
                'FHIRAccount::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Parties financially responsible for the account.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor
     * @return $this
     */
    public function addGuarantor(FHIRAccountGuarantor $guarantor = null)
    {
        if (null === $guarantor) {
            return $this; 
        }
        $this->guarantor[] = $guarantor;
        return $this;
    }

    /**
     * Parties financially responsible for the account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor[]
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAccount::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOwner(FHIRReference $owner = null)
    {
        if (null === $owner) {
            return $this; 
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRAccountStatus($status);
        }
        if (!($status instanceof FHIRAccountStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAccount::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
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
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
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
     * Categorizes the account for reporting and searching purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (null !== ($v = $this->getBalance())) {
            $a['balance'] = $v;
        }
        if (0 < count($values = $this->getCoverage())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['coverage'] = $vs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (0 < count($values = $this->getGuarantor())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['guarantor'] = $vs;
            }
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
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Account xmlns="http://hl7.org/fhir"></Account>');
        }
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize(true, $sxe->addChild('active'));
        }
        if (null !== ($v = $this->getBalance())) {
            $v->xmlSerialize(true, $sxe->addChild('balance'));
        }
        if (0 < count($values = $this->getCoverage())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('coverage'));
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($values = $this->getGuarantor())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('guarantor'));
                }
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize(true, $sxe->addChild('owner'));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize(true, $sxe->addChild('subject'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}