<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRSubscriptionChannelType;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * The subscription resource is used to define a push based subscription from a
 * server to another system. Once a subscription is registered with the server, the
 * server checks every resource that is created or updated, and if the resource
 * matches the given criteria, it sends a message on the defined "channel" so that
 * another system is able to take an appropriate action.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRSubscriptionChannel extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL;

    /* class_default.php:56 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_ENDPOINT = 'endpoint';
    public const FIELD_ENDPOINT_EXT = '_endpoint';
    public const FIELD_PAYLOAD = 'payload';
    public const FIELD_PAYLOAD_EXT = '_payload';
    public const FIELD_HEADER = 'header';
    public const FIELD_HEADER_EXT = '_header';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_PAYLOAD => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ENDPOINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAYLOAD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HEADER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRSubscriptionChannelType 
     */
    #[FHIRSubscriptionChannelType]
    protected FHIRSubscriptionChannelType $type;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $endpoint;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $payload;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $header;

    /* constructor.php:61 */
    /**
     * FHIRSubscriptionChannel Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRSubscriptionChannelType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $endpoint
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $payload
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $header
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRSubscriptionChannelTypeList|FHIRSubscriptionChannelType $type = null,
                                null|string|FHIRUriPrimitive|FHIRUri $endpoint = null,
                                null|string|FHIRStringPrimitive|FHIRString $payload = null,
                                null|string|FHIRStringPrimitive|FHIRString $header = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $endpoint) {
            $this->setEndpoint($endpoint);
        }
        if (null !== $payload) {
            $this->setPayload($payload);
        }
        if (null !== $header) {
            $this->setHeader($header);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRSubscriptionChannelType
     */
    public function getType(): null|FHIRSubscriptionChannelType
    {
        return $this->type ?? null;
    }

    /**
     * The type of method used to execute a subscription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRSubscriptionChannelType $type
     * @return static
     */
    public function setType(null|string|FHIRSubscriptionChannelTypeList|FHIRSubscriptionChannelType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRSubscriptionChannelType)) {
            $type = new FHIRSubscriptionChannelType(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getEndpoint(): null|FHIRUri
    {
        return $this->endpoint ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The uri that describes the actual end-point to send messages to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $endpoint
     * @return static
     */
    public function setEndpoint(null|string|FHIRUriPrimitive|FHIRUri $endpoint): self
    {
        if (null === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        if (!($endpoint instanceof FHIRUri)) {
            $endpoint = new FHIRUri(value: $endpoint);
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getPayload(): null|FHIRString
    {
        return $this->payload ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mime type to send the payload in - either application/xml+fhir, or
     * application/json+fhir. If the mime type is blank, then there is no payload in
     * the notification, just a notification.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $payload
     * @return static
     */
    public function setPayload(null|string|FHIRStringPrimitive|FHIRString $payload): self
    {
        if (null === $payload) {
            unset($this->payload);
            return $this;
        }
        if (!($payload instanceof FHIRString)) {
            $payload = new FHIRString(value: $payload);
        }
        $this->payload = $payload;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getHeader(): null|FHIRString
    {
        return $this->header ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $header
     * @return static
     */
    public function setHeader(null|string|FHIRStringPrimitive|FHIRString $header): self
    {
        if (null === $header) {
            unset($this->header);
            return $this;
        }
        if (!($header instanceof FHIRString)) {
            $header = new FHIRString(value: $header);
        }
        $this->header = $header;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionChannel)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRSubscriptionChannelType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDPOINT === $cen) {
                $type->setEndpoint(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYLOAD === $cen) {
                $type->setPayload(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEADER === $cen) {
                $type->setHeader(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ENDPOINT])) {
            if (isset($type->endpoint)) {
                $type->endpoint->setValue((string)$attributes[self::FIELD_ENDPOINT]);
            } else {
                $type->setEndpoint((string)$attributes[self::FIELD_ENDPOINT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ENDPOINT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PAYLOAD])) {
            if (isset($type->payload)) {
                $type->payload->setValue((string)$attributes[self::FIELD_PAYLOAD]);
            } else {
                $type->setPayload((string)$attributes[self::FIELD_PAYLOAD]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PAYLOAD, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HEADER])) {
            if (isset($type->header)) {
                $type->header->setValue((string)$attributes[self::FIELD_HEADER]);
            } else {
                $type->setHeader((string)$attributes[self::FIELD_HEADER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_HEADER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->endpoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ENDPOINT]) {
            $xw->writeAttribute(self::FIELD_ENDPOINT, $this->endpoint->_getValueAsString());
        }
        if (isset($this->payload) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAYLOAD]) {
            $xw->writeAttribute(self::FIELD_PAYLOAD, $this->payload->_getValueAsString());
        }
        if (isset($this->header) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEADER]) {
            $xw->writeAttribute(self::FIELD_HEADER, $this->header->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->endpoint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ENDPOINT]
                || $this->endpoint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ENDPOINT);
            $this->endpoint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ENDPOINT]);
            $xw->endElement();
        }
        if (isset($this->payload)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAYLOAD]
                || $this->payload->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAYLOAD);
            $this->payload->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAYLOAD]);
            $xw->endElement();
        }
        if (isset($this->header)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HEADER]
                || $this->header->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HEADER);
            $this->header->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HEADER]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionChannel)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRSubscriptionChannelType::jsonUnserialize($v, $config));
        }
        if (isset($decoded->endpoint)
            || isset($decoded->_endpoint)
            || property_exists($decoded, self::FIELD_ENDPOINT)
            || property_exists($decoded, self::FIELD_ENDPOINT_EXT)) {
            $v = $decoded->_endpoint ?? new \stdClass();
            $v->value = $decoded->endpoint ?? null;
            $type->setEndpoint(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->payload)
            || isset($decoded->_payload)
            || property_exists($decoded, self::FIELD_PAYLOAD)
            || property_exists($decoded, self::FIELD_PAYLOAD_EXT)) {
            $v = $decoded->_payload ?? new \stdClass();
            $v->value = $decoded->payload ?? null;
            $type->setPayload(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->header)
            || isset($decoded->_header)
            || property_exists($decoded, self::FIELD_HEADER)
            || property_exists($decoded, self::FIELD_HEADER_EXT)) {
            $v = $decoded->_header ?? new \stdClass();
            $v->value = $decoded->header ?? null;
            $type->setHeader(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->endpoint)) {
            if (null !== ($val = $this->endpoint->getValue())) {
                $out->endpoint = $val;
            }
            if ($this->endpoint->_nonValueFieldDefined()) {
                $ext = $this->endpoint->jsonSerialize();
                unset($ext->value);
                $out->_endpoint = $ext;
            }
        }
        if (isset($this->payload)) {
            if (null !== ($val = $this->payload->getValue())) {
                $out->payload = $val;
            }
            if ($this->payload->_nonValueFieldDefined()) {
                $ext = $this->payload->jsonSerialize();
                unset($ext->value);
                $out->_payload = $ext;
            }
        }
        if (isset($this->header)) {
            if (null !== ($val = $this->header->getValue())) {
                $out->header = $val;
            }
            if ($this->header->_nonValueFieldDefined()) {
                $ext = $this->header->jsonSerialize();
                unset($ext->value);
                $out->_header = $ext;
            }
        }
        return $out;
    }
}