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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A financial tool for tracking value accrued for a particular purpose.  In the healthcare field, used to track charges for a patient, cost centers, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAccount extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Indicates whether the account is presently used/usable or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public $status = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $active = null;

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountCoverage[]
     */
    public $coverage = [];

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Parties financially responsible for the account.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountGuarantor[]
     */
    public $guarantor = [];

    /**
     * Reference to a parent Account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Account';

    /**
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier used to reference the account.  Might or might not be intended for human use (e.g. credit card number).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $active
     * @return $this
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountCoverage[]
     */
    public function getCoverage() {
        return $this->coverage;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage) {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner() {
        return $this->owner;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Parties financially responsible for the account.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountGuarantor[]
     */
    public function getGuarantor() {
        return $this->guarantor;
    }

    /**
     * Parties financially responsible for the account.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAccount\FHIRAccountGuarantor $guarantor
     * @return $this
     */
    public function addGuarantor($guarantor) {
        $this->guarantor[] = $guarantor;
        return $this;
    }

    /**
     * Reference to a parent Account.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * Reference to a parent Account.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function setPartOf($partOf) {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['coverage'])) {
                if (is_array($data['coverage'])) {
                    foreach($data['coverage'] as $d) {
                        $this->addCoverage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"coverage" must be array of objects or null, '.gettype($data['coverage']).' seen.');
                }
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['guarantor'])) {
                if (is_array($data['guarantor'])) {
                    foreach($data['guarantor'] as $d) {
                        $this->addGuarantor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"guarantor" must be array of objects or null, '.gettype($data['guarantor']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->active)) $json['active'] = $this->active;
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                if (null !== $coverage) $json['coverage'][] = $coverage;
            }
        }
        if (isset($this->owner)) $json['owner'] = $this->owner;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->guarantor)) {
            $json['guarantor'] = [];
            foreach($this->guarantor as $guarantor) {
                if (null !== $guarantor) $json['guarantor'][] = $guarantor;
            }
        }
        if (isset($this->partOf)) $json['partOf'] = $this->partOf;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Account xmlns="http://hl7.org/fhir"></Account>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->active)) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (isset($this->owner)) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->guarantor)) {
            foreach($this->guarantor as $guarantor) {
                $guarantor->xmlSerialize(true, $sxe->addChild('guarantor'));
            }
        }
        if (isset($this->partOf)) $this->partOf->xmlSerialize(true, $sxe->addChild('partOf'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}