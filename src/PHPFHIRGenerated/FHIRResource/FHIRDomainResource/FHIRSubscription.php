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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRSubscriptionStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The subscription resource is used to define a push-based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system can take an appropriate action.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubscription
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSubscription extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Subscription';

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public $channel = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $contact = null;

    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $criteria = null;

    /**
     * The time for the server to turn the subscription off.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * A record of the last error that occurred when the server processed a notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $error = null;

    /**
     * A description of why this subscription is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $reason = null;

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionStatus
     */
    public $status = null;

    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $tag = null;

    /**
     * FHIRSubscription Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['channel'])) {
                $this->setChannel($data['channel']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['criteria'])) {
                $this->setCriteria($data['criteria']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['error'])) {
                $this->setError($data['error']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['tag'])) {
                $this->setTag($data['tag']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubscription::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     * @return $this
     */
    public function setChannel(FHIRSubscriptionChannel $channel = null)
    {
        if (null === $channel) {
            return $this; 
        }
        $this->channel = $channel;
        return $this;
    }

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }


    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setContact(FHIRContactPoint $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCriteria($criteria)
    {
        if (null === $criteria) {
            return $this; 
        }
        if (is_scalar($criteria)) {
            $criteria = new FHIRString($criteria);
        }
        if (!($criteria instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscription::setCriteria - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($criteria)
            ));
        }
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCriteria()
    {
        return $this->criteria;
    }


    /**
     * The time for the server to turn the subscription off.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setEnd($end)
    {
        if (null === $end) {
            return $this; 
        }
        if (is_scalar($end)) {
            $end = new FHIRInstant($end);
        }
        if (!($end instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscription::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * The time for the server to turn the subscription off.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * A record of the last error that occurred when the server processed a notification.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setError($error)
    {
        if (null === $error) {
            return $this; 
        }
        if (is_scalar($error)) {
            $error = new FHIRString($error);
        }
        if (!($error instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscription::setError - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($error)
            ));
        }
        $this->error = $error;
        return $this;
    }

    /**
     * A record of the last error that occurred when the server processed a notification.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getError()
    {
        return $this->error;
    }


    /**
     * A description of why this subscription is defined.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReason($reason)
    {
        if (null === $reason) {
            return $this; 
        }
        if (is_scalar($reason)) {
            $reason = new FHIRString($reason);
        }
        if (!($reason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscription::setReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($reason)
            ));
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * A description of why this subscription is defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSubscriptionStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRSubscriptionStatus($status);
        }
        if (!($status instanceof FHIRSubscriptionStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscription::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSubscriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setTag(FHIRCoding $tag = null)
    {
        if (null === $tag) {
            return $this; 
        }
        $this->tag = $tag;
        return $this;
    }

    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getTag()
    {
        return $this->tag;
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
        if (null !== ($v = $this->getChannel())) {
            $a['channel'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getCriteria())) {
            $a['criteria'] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getError())) {
            $a['error'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTag())) {
            $a['tag'] = $v;
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
            $sxe = new \SimpleXMLElement('<Subscription xmlns="http://hl7.org/fhir"></Subscription>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}