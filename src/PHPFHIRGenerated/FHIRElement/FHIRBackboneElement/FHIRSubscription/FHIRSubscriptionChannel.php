<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;

/**
 * The subscription resource is used to define a push-based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system can take an appropriate action.
 *
 * Class FHIRSubscriptionChannel
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription
 */
class FHIRSubscriptionChannel extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Subscription.Channel';

    /**
     * The url that describes the actual end-point to send messages to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $endpoint = null;

    /**
     * Additional headers / information to send as part of the notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $header = null;

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $payload = null;

    /**
     * The type of channel to send notifications on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType
     */
    public $type = null;

    /**
     * FHIRSubscriptionChannel Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['header'])) {
                $this->setHeader($data['header']);
            }
            if (isset($data['payload'])) {
                $this->setPayload($data['payload']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The url that describes the actual end-point to send messages to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        if (null === $endpoint) {
            return $this; 
        }
        if (is_scalar($endpoint)) {
            $endpoint = new FHIRUrl($endpoint);
        }
        if (!($endpoint instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionChannel::setEndpoint - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($endpoint)
            ));
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * The url that describes the actual end-point to send messages to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Additional headers / information to send as part of the notification.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setHeader($header)
    {
        if (null === $header) {
            return $this; 
        }
        if (is_scalar($header)) {
            $header = new FHIRString($header);
        }
        if (!($header instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionChannel::setHeader - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($header)
            ));
        }
        $this->header = $header;
        return $this;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHeader()
    {
        return $this->header;
    }


    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPayload($payload)
    {
        if (null === $payload) {
            return $this; 
        }
        if (is_scalar($payload)) {
            $payload = new FHIRString($payload);
        }
        if (!($payload instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionChannel::setPayload - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($payload)
            ));
        }
        $this->payload = $payload;
        return $this;
    }

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPayload()
    {
        return $this->payload;
    }


    /**
     * The type of channel to send notifications on.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRSubscriptionChannelType($type);
        }
        if (!($type instanceof FHIRSubscriptionChannelType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionChannel::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of channel to send notifications on.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType
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
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getHeader())) {
            $a['header'] = $v;
        }
        if (null !== ($v = $this->getPayload())) {
            $a['payload'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubscriptionChannel xmlns="http://hl7.org/fhir"></SubscriptionChannel>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}