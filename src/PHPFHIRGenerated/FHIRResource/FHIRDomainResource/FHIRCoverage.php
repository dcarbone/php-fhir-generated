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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCopay;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Financial instrument which may be used to reimburse or pay for health care products and services.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCoverage
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCoverage extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Coverage';

    /**
     * The party who benefits from the insurance coverage; the patient when services are provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $beneficiary = null;

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass
     */
    public $class = null;

    /**
     * The policy(s) which constitute this insurance coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contract = null;

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCopay
     */
    public $copay = null;

    /**
     * A unique identifier for a dependent under the coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $dependent = null;

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatenation of the Coverage.SubscriberID and the Coverage.dependant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $network = null;

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $order = null;

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $payor = null;

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $policyHolder = null;

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subscriber = null;

    /**
     * The insurer assigned ID for the Subscriber.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subscriberId = null;

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRCoverage Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['beneficiary'])) {
                $this->setBeneficiary($data['beneficiary']);
            }
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['contract'])) {
                $this->setContract($data['contract']);
            }
            if (isset($data['copay'])) {
                $this->setCopay($data['copay']);
            }
            if (isset($data['dependent'])) {
                $this->setDependent($data['dependent']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['order'])) {
                $this->setOrder($data['order']);
            }
            if (isset($data['payor'])) {
                $this->setPayor($data['payor']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['policyHolder'])) {
                $this->setPolicyHolder($data['policyHolder']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subscriber'])) {
                $this->setSubscriber($data['subscriber']);
            }
            if (isset($data['subscriberId'])) {
                $this->setSubscriberId($data['subscriberId']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverage::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The party who benefits from the insurance coverage; the patient when services are provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBeneficiary(FHIRReference $beneficiary = null)
    {
        if (null === $beneficiary) {
            return $this; 
        }
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * The party who benefits from the insurance coverage; the patient when services are provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }


    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass
     * @return $this
     */
    public function setClass(FHIRCoverageClass $class = null)
    {
        if (null === $class) {
            return $this; 
        }
        $this->class = $class;
        return $this;
    }

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass
     */
    public function getClass()
    {
        return $this->class;
    }


    /**
     * The policy(s) which constitute this insurance coverage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContract(FHIRReference $contract = null)
    {
        if (null === $contract) {
            return $this; 
        }
        $this->contract = $contract;
        return $this;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContract()
    {
        return $this->contract;
    }


    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCopay
     * @return $this
     */
    public function setCopay(FHIRCoverageCopay $copay = null)
    {
        if (null === $copay) {
            return $this; 
        }
        $this->copay = $copay;
        return $this;
    }

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCopay
     */
    public function getCopay()
    {
        return $this->copay;
    }


    /**
     * A unique identifier for a dependent under the coverage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDependent($dependent)
    {
        if (null === $dependent) {
            return $this; 
        }
        if (is_scalar($dependent)) {
            $dependent = new FHIRString($dependent);
        }
        if (!($dependent instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::setDependent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($dependent)
            ));
        }
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDependent()
    {
        return $this->dependent;
    }


    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatenation of the Coverage.SubscriberID and the Coverage.dependant.
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
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatenation of the Coverage.SubscriberID and the Coverage.dependant.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setNetwork($network)
    {
        if (null === $network) {
            return $this; 
        }
        if (is_scalar($network)) {
            $network = new FHIRString($network);
        }
        if (!($network instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::setNetwork - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($network)
            ));
        }
        $this->network = $network;
        return $this;
    }

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setOrder($order)
    {
        if (null === $order) {
            return $this; 
        }
        if (is_scalar($order)) {
            $order = new FHIRPositiveInt($order);
        }
        if (!($order instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::setOrder - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($order)
            ));
        }
        $this->order = $order;
        return $this;
    }

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getOrder()
    {
        return $this->order;
    }


    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPayor(FHIRReference $payor = null)
    {
        if (null === $payor) {
            return $this; 
        }
        $this->payor = $payor;
        return $this;
    }

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPayor()
    {
        return $this->payor;
    }


    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
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
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPolicyHolder(FHIRReference $policyHolder = null)
    {
        if (null === $policyHolder) {
            return $this; 
        }
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPolicyHolder()
    {
        return $this->policyHolder;
    }


    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        if (null === $relationship) {
            return $this; 
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFinancialResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubscriber(FHIRReference $subscriber = null)
    {
        if (null === $subscriber) {
            return $this; 
        }
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }


    /**
     * The insurer assigned ID for the Subscriber.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        if (null === $subscriberId) {
            return $this; 
        }
        if (is_scalar($subscriberId)) {
            $subscriberId = new FHIRString($subscriberId);
        }
        if (!($subscriberId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::setSubscriberId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($subscriberId)
            ));
        }
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * The insurer assigned ID for the Subscriber.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }


    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
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
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
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
        if (null !== ($v = $this->getBeneficiary())) {
            $a['beneficiary'] = $v;
        }
        if (null !== ($v = $this->getClass())) {
            $a['class'] = $v;
        }
        if (null !== ($v = $this->getContract())) {
            $a['contract'] = $v;
        }
        if (null !== ($v = $this->getCopay())) {
            $a['copay'] = $v;
        }
        if (null !== ($v = $this->getDependent())) {
            $a['dependent'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getOrder())) {
            $a['order'] = $v;
        }
        if (null !== ($v = $this->getPayor())) {
            $a['payor'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            $a['policyHolder'] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a['relationship'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubscriber())) {
            $a['subscriber'] = $v;
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $a['subscriberId'] = $v;
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
            $sxe = new \SimpleXMLElement('<Coverage xmlns="http://hl7.org/fhir"></Coverage>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}