<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionChannelType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * The subscription resource is used to define a push based subscription from a
 * server to another system. Once a subscription is registered with the server, the
 * server checks every resource that is created or updated, and if the resource
 * matches the given criteria, it sends a message on the defined "channel" so that
 * another system is able to take an appropriate action.
 *
 * Class FHIRSubscriptionChannel
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription
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
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $endpoint = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected $header = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $payload = null;

    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionChannelType
     */
    protected $type = null;

    /**
     * Validation map for fields in type Subscription.Channel
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ENDPOINT]) || isset($data[self::FIELD_ENDPOINT_EXT])) {
            if (isset($data[self::FIELD_ENDPOINT])) {
                $value = $data[self::FIELD_ENDPOINT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ENDPOINT_EXT]) && is_array($data[self::FIELD_ENDPOINT_EXT])) {
                $ext = $data[self::FIELD_ENDPOINT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setEndpoint($value);
                } else if (is_array($value)) {
                    $this->setEndpoint(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setEndpoint(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEndpoint(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_HEADER]) || isset($data[self::FIELD_HEADER_EXT])) {
            if (isset($data[self::FIELD_HEADER])) {
                $value = $data[self::FIELD_HEADER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HEADER_EXT]) && is_array($data[self::FIELD_HEADER_EXT])) {
                $ext = $data[self::FIELD_HEADER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addHeader($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addHeader($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addHeader(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addHeader(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addHeader(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PAYLOAD]) || isset($data[self::FIELD_PAYLOAD_EXT])) {
            if (isset($data[self::FIELD_PAYLOAD])) {
                $value = $data[self::FIELD_PAYLOAD];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PAYLOAD_EXT]) && is_array($data[self::FIELD_PAYLOAD_EXT])) {
                $ext = $data[self::FIELD_PAYLOAD_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPayload($value);
                } else if (is_array($value)) {
                    $this->setPayload(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPayload(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPayload(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSubscriptionChannelType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRSubscriptionChannelType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRSubscriptionChannelType([FHIRSubscriptionChannelType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRSubscriptionChannelType($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SubscriptionChannel{$xmlns}></SubscriptionChannel>";
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $endpoint
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $header
     * @return static
     */
    public function addHeader($header = null)
    {
        if (null === $header) {
            $this->header = [];
            return $this;
        }
        if ($header instanceof FHIRString) {
            $this->header[] = $header;
            return $this;
        }
        $this->header[] = new FHIRString($header);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $header
     * @return static
     */
    public function setHeader(array $header = [])
    {
        $this->header = [];
        if ([] === $header) {
            return $this;
        }
        foreach($header as $v) {
            if ($v instanceof FHIRString) {
                $this->addHeader($v);
            } else {
                $this->addHeader(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $payload
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionChannelType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionChannelType $type
     * @return static
     */
    public function setType(FHIRSubscriptionChannelType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getEndpoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENDPOINT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getHeader())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_HEADER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPayload())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYLOAD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEADER])) {
            $v = $this->getHeader();
            foreach($validationRules[self::FIELD_HEADER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL, self::FIELD_HEADER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEADER])) {
                        $errs[self::FIELD_HEADER] = [];
                    }
                    $errs[self::FIELD_HEADER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYLOAD])) {
            $v = $this->getPayload();
            foreach($validationRules[self::FIELD_PAYLOAD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL, self::FIELD_PAYLOAD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYLOAD])) {
                        $errs[self::FIELD_PAYLOAD] = [];
                    }
                    $errs[self::FIELD_PAYLOAD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubscriptionChannel::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubscriptionChannel::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubscriptionChannel;
        } elseif (!is_object($type) || !($type instanceof FHIRSubscriptionChannel)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubscriptionChannel::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->endpoint)) {
            $type->setEndpoint(FHIRUri::xmlUnserialize($children->endpoint));
        }
        if (isset($attributes->endpoint)) {
            $pt = $type->getEndpoint();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->endpoint);
            } else {
                $type->setEndpoint((string)$attributes->endpoint);
            }
        }
        if (isset($children->header)) {
            foreach($children->header as $child) {
                $type->addHeader(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->payload)) {
            $type->setPayload(FHIRString::xmlUnserialize($children->payload));
        }
        if (isset($attributes->payload)) {
            $pt = $type->getPayload();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->payload);
            } else {
                $type->setPayload((string)$attributes->payload);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRSubscriptionChannelType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getEndpoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getHeader())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_HEADER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPayload())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ENDPOINT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_ENDPOINT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getHeader())) {
            $a[self::FIELD_HEADER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_HEADER][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_HEADER_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getPayload())) {
            $a[self::FIELD_PAYLOAD] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PAYLOAD_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSubscriptionChannelType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSubscriptionChannelType::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}