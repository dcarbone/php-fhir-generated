<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * The subscription resource is used to define a push based subscription from a
 * server to another system. Once a subscription is registered with the server, the
 * server checks every resource that is created or updated, and if the resource
 * matches the given criteria, it sends a message on the defined "channel" so that
 * another system is able to take an appropriate action.
 *
 * Class FHIRSubscriptionChannel
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription
 */
class FHIRSubscriptionChannel extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL;

    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_ENDPOINT_EXT = '_endpoint';
    const FIELD_HEADER = 'header';
    const FIELD_HEADER_EXT = '_header';
    const FIELD_PAYLOAD = 'payload';
    const FIELD_PAYLOAD_EXT = '_payload';
    const FIELD_TYPE = 'type';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    private $endpoint = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $header = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $payload = null;
    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType
     */
    private $type = null;

    /**
     * FHIRSubscriptionChannel Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionChannel::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ENDPOINT])) {
            $ext = (isset($data[self::FIELD_ENDPOINT_EXT]) && is_array($data[self::FIELD_ENDPOINT_EXT]))
                ? $data[self::FIELD_ENDPOINT_EXT]
                : null;
            if ($data[self::FIELD_ENDPOINT] instanceof FHIRUri) {
                $this->setEndpoint($data[self::FIELD_ENDPOINT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ENDPOINT])) {
                $this->setEndpoint(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_ENDPOINT]] + $ext));
            } else {
                $this->setEndpoint(new FHIRUri($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_HEADER])) {
            $ext = (isset($data[self::FIELD_HEADER_EXT]) && is_array($data[self::FIELD_HEADER_EXT]))
                ? $data[self::FIELD_HEADER_EXT]
                : null;
            if ($data[self::FIELD_HEADER] instanceof FHIRString) {
                $this->setHeader($data[self::FIELD_HEADER]);
            } elseif ($ext && is_scalar($data[self::FIELD_HEADER])) {
                $this->setHeader(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_HEADER]] + $ext));
            } else {
                $this->setHeader(new FHIRString($data[self::FIELD_HEADER]));
            }
        }
        if (isset($data[self::FIELD_PAYLOAD])) {
            $ext = (isset($data[self::FIELD_PAYLOAD_EXT]) && is_array($data[self::FIELD_PAYLOAD_EXT]))
                ? $data[self::FIELD_PAYLOAD_EXT]
                : null;
            if ($data[self::FIELD_PAYLOAD] instanceof FHIRString) {
                $this->setPayload($data[self::FIELD_PAYLOAD]);
            } elseif ($ext && is_scalar($data[self::FIELD_PAYLOAD])) {
                $this->setPayload(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PAYLOAD]] + $ext));
            } else {
                $this->setPayload(new FHIRString($data[self::FIELD_PAYLOAD]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRSubscriptionChannelType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRSubscriptionChannelType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $endpoint
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function setEndpoint($endpoint = null)
    {
        if (null === $endpoint) {
            $this->endpoint = null;
            return $this;
        }
        if ($endpoint instanceof FHIRUri) {
            $this->endpoint = $endpoint;
            return $this;
        }
        $this->endpoint = new FHIRUri($endpoint);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $header
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function setHeader($header = null)
    {
        if (null === $header) {
            $this->header = null;
            return $this;
        }
        if ($header instanceof FHIRString) {
            $this->header = $header;
            return $this;
        }
        $this->header = new FHIRString($header);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $payload
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function setPayload($payload = null)
    {
        if (null === $payload) {
            $this->payload = null;
            return $this;
        }
        if ($payload instanceof FHIRString) {
            $this->payload = $payload;
            return $this;
        }
        $this->payload = new FHIRString($payload);
        return $this;
    }

    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function setType(FHIRSubscriptionChannelType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubscriptionChannel::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubscriptionChannel::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSubscriptionChannel);
        } elseif (!is_object($type) || !($type instanceof FHIRSubscriptionChannel)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubscriptionChannel::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->endpoint)) {
            $type->setEndpoint((string)$attributes->endpoint);
        }
        if (isset($children->endpoint)) {
            $type->setEndpoint(FHIRUri::xmlUnserialize($children->endpoint));
        }
        if (isset($attributes->header)) {
            $type->setHeader((string)$attributes->header);
        }
        if (isset($children->header)) {
            $type->setHeader(FHIRString::xmlUnserialize($children->header));
        }
        if (isset($attributes->payload)) {
            $type->setPayload((string)$attributes->payload);
        }
        if (isset($children->payload)) {
            $type->setPayload(FHIRString::xmlUnserialize($children->payload));
        }
        if (isset($children->type)) {
            $type->setType(FHIRSubscriptionChannelType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubscriptionChannel xmlns="http://hl7.org/fhir"></SubscriptionChannel>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getEndpoint())) {
            $sxe->addAttribute(self::FIELD_ENDPOINT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT));
            }
        }
        if (null !== ($v = $this->getHeader())) {
            $sxe->addAttribute(self::FIELD_HEADER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_HEADER));
            }
        }
        if (null !== ($v = $this->getPayload())) {
            $sxe->addAttribute(self::FIELD_PAYLOAD, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = (string)$v;
            $a[self::FIELD_ENDPOINT_EXT] = $v;
        }
        if (null !== ($v = $this->getHeader())) {
            $a[self::FIELD_HEADER] = (string)$v;
            $a[self::FIELD_HEADER_EXT] = $v;
        }
        if (null !== ($v = $this->getPayload())) {
            $a[self::FIELD_PAYLOAD] = (string)$v;
            $a[self::FIELD_PAYLOAD_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}