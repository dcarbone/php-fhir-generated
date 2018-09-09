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

use PHPFHIRGenerated\FHIRElement\FHIRAccountStatus;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
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
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage
     */
    public $coverage = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Parties financially responsible for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor
     */
    public $guarantor = null;

    /**
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Reference to a parent Account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * The date range of services associated with this account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $servicePeriod = null;

    /**
     * Indicates whether the account is presently used/usable or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public $status = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRAccount Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['coverage'])) {
                $this->setCoverage($data['coverage']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['guarantor'])) {
                $this->setGuarantor($data['guarantor']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['servicePeriod'])) {
                $this->setServicePeriod($data['servicePeriod']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage
     * @return $this
     */
    public function setCoverage(FHIRAccountCoverage $coverage = null)
    {
        if (null === $coverage) {
            return $this; 
        }
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage
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
    public function setGuarantor(FHIRAccountGuarantor $guarantor = null)
    {
        if (null === $guarantor) {
            return $this; 
        }
        $this->guarantor = $guarantor;
        return $this;
    }

    /**
     * Parties financially responsible for the account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }


    /**
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
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
     * Reference to a parent Account.
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
     * Reference to a parent Account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * The date range of services associated with this account.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setServicePeriod(FHIRPeriod $servicePeriod = null)
    {
        if (null === $servicePeriod) {
            return $this; 
        }
        $this->servicePeriod = $servicePeriod;
        return $this;
    }

    /**
     * The date range of services associated with this account.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getServicePeriod()
    {
        return $this->servicePeriod;
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
        if (null !== ($v = $this->getCoverage())) {
            $a['coverage'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getGuarantor())) {
            $a['guarantor'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getServicePeriod())) {
            $a['servicePeriod'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}