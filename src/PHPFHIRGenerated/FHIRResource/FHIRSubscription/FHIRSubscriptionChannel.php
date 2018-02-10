<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSubscription;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * The subscription resource is used to define a push based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system is able to take an appropriate action.
 */
class FHIRSubscriptionChannel extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of channel to send notifications on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType
     */
    public $type = null;

    /**
     * The uri that describes the actual end-point to send messages to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $endpoint = null;

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $payload = null;

    /**
     * Additional headers / information to send as part of the notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $header = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Subscription.Channel';

    /**
     * The type of channel to send notifications on.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of channel to send notifications on.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSubscriptionChannelType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The uri that describes the actual end-point to send messages to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * The uri that describes the actual end-point to send messages to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $header
     * @return $this
     */
    public function addHeader($header)
    {
        $this->header[] = $header;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->endpoint) $json['endpoint'] = $this->endpoint;
        if (null !== $this->payload) $json['payload'] = $this->payload;
        if (0 < count($this->header)) {
            $json['header'] = [];
            foreach($this->header as $header) {
                $json['header'][] = $header;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubscriptionChannel xmlns="http://hl7.org/fhir"></SubscriptionChannel>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->endpoint) $this->endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
        if (null !== $this->payload) $this->payload->xmlSerialize(true, $sxe->addChild('payload'));
        if (0 < count($this->header)) {
            foreach($this->header as $header) {
                $header->xmlSerialize(true, $sxe->addChild('header'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}