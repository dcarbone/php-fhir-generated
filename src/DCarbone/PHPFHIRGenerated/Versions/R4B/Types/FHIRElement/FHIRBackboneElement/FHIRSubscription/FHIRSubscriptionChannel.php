<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The subscription resource is used to define a push-based subscription from a
 * server to another system. Once a subscription is registered with the server, the
 * server checks every resource that is created or updated, and if the resource
 * matches the given criteria, it sends a message on the defined "channel" so that
 * another system can take an appropriate action.
 */
class FHIRSubscriptionChannel extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL;


    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_ENDPOINT = 'endpoint';
    public const FIELD_ENDPOINT_EXT = '_endpoint';
    public const FIELD_PAYLOAD = 'payload';
    public const FIELD_PAYLOAD_EXT = '_payload';
    public const FIELD_HEADER = 'header';
    public const FIELD_HEADER_EXT = '_header';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType 
     */
    protected FHIRSubscriptionChannelType $type;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send messages to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $endpoint;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification. The mime type "text/plain" may also be
     * used for Email and SMS subscriptions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $payload;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] 
     */
    protected array $header;

    /** Default validation map for fields in type Subscription.Channel */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSubscriptionChannel Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl $endpoint
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $payload
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] $header
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRSubscriptionChannelType $type = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $endpoint = null,
                                null|string|FHIRCodePrimitive|FHIRCode $payload = null,
                                null|iterable $header = null,
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
            $this->setHeader(...$header);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType
     */
    public function getType(): null|FHIRSubscriptionChannelType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType $type
     * @return static
     */
    public function setType(null|FHIRSubscriptionChannelType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send messages to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl
     */
    public function getEndpoint(): null|FHIRUrl
    {
        return $this->endpoint ?? null;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send messages to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl $endpoint
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEndpoint(null|string|FHIRUrlPrimitive|FHIRUrl $endpoint,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        if (!($endpoint instanceof FHIRUrl)) {
            $endpoint = new FHIRUrl(value: $endpoint);
        }
        if (null !== $valueXMLLocation) {
            $endpoint->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $endpoint->_getValueXMLLocation()) {
            $endpoint->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification. The mime type "text/plain" may also be
     * used for Email and SMS subscriptions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode
     */
    public function getPayload(): null|FHIRCode
    {
        return $this->payload ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - either application/fhir+xml, or
     * application/fhir+json. If the payload is not present, then there is no payload
     * in the notification, just a notification. The mime type "text/plain" may also be
     * used for Email and SMS subscriptions.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $payload
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPayload(null|string|FHIRCodePrimitive|FHIRCode $payload,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $payload) {
            unset($this->payload);
            return $this;
        }
        if (!($payload instanceof FHIRCode)) {
            $payload = new FHIRCode(value: $payload);
        }
        if (null !== $valueXMLLocation) {
            $payload->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $payload->_getValueXMLLocation()) {
            $payload->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->payload = $payload;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]
     */
    public function getHeader(): array
    {
        return $this->header ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString>
     */
    public function getHeaderIterator(): iterable
    {
        if (!isset($this->header) || [] === $this->header) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->header);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $header
     * @return static
     */
    public function addHeader(string|FHIRStringPrimitive|FHIRString $header): self
    {
        if (!($header instanceof FHIRString)) {
            $header = new FHIRString(value: $header);
        }
        if (!isset($this->header)) {
            $this->header = [];
        }
        $this->header[] = $header;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString ...$header
     * @return static
     */
    public function setHeader(string|FHIRStringPrimitive|FHIRString ...$header): self
    {
        $this->header = [];
        foreach($header as $v) {
            if ($v instanceof FHIRString) {
                $this->header[] = $v;
            } else {
                $this->header[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYLOAD])) {
            $v = $this->getPayload();
            foreach($validationRules[self::FIELD_PAYLOAD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYLOAD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYLOAD])) {
                        $errs[self::FIELD_PAYLOAD] = [];
                    }
                    $errs[self::FIELD_PAYLOAD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEADER])) {
            $v = $this->getHeader();
            foreach($validationRules[self::FIELD_HEADER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HEADER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEADER])) {
                        $errs[self::FIELD_HEADER] = [];
                    }
                    $errs[self::FIELD_HEADER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRSubscriptionChannelType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setType(FHIRSubscriptionChannelType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENDPOINT === $childName) {
                $v = new FHIRUrl(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEndpoint(FHIRUrl::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYLOAD === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPayload(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_HEADER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addHeader(FHIRString::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ENDPOINT])) {
            $pt = $type->getEndpoint();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ENDPOINT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setEndpoint(new FHIRUrl(
                    value: (string)$attributes[self::FIELD_ENDPOINT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PAYLOAD])) {
            $pt = $type->getPayload();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PAYLOAD]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPayload(new FHIRCode(
                    value: (string)$attributes[self::FIELD_PAYLOAD],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_HEADER])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_HEADER],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addHeader($v);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('SubscriptionChannel', $this->_getSourceXMLNS());
        }
        if (isset($this->endpoint) && $this->endpoint->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ENDPOINT, $this->endpoint->getValue()?->_getFormattedValue());
        }
        if (isset($this->payload) && $this->payload->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PAYLOAD, $this->payload->getValue()?->_getFormattedValue());
        }
        if (isset($this->header)) {
           foreach($this->header as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_HEADER, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->endpoint) && $this->endpoint->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ENDPOINT);
            $this->endpoint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->payload) && $this->payload->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PAYLOAD);
            $this->payload->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->header)) {
            foreach($this->header as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_HEADER);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSubscriptionChannelType) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRSubscriptionChannelType(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRSubscriptionChannelType([FHIRSubscriptionChannelType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRSubscriptionChannelType($ext));
            } else {
                $type->setType(new FHIRSubscriptionChannelType(null));
            }
        }
        if (isset($json[self::FIELD_ENDPOINT]) || isset($json[self::FIELD_ENDPOINT_EXT]) || array_key_exists(self::FIELD_ENDPOINT, $json) || array_key_exists(self::FIELD_ENDPOINT_EXT, $json)) {
            $value = $json[self::FIELD_ENDPOINT] ?? null;
            $ext = (isset($json[self::FIELD_ENDPOINT_EXT]) && is_array($json[self::FIELD_ENDPOINT_EXT])) ? $json[self::FIELD_ENDPOINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $type->setEndpoint($value);
                } else if (is_array($value)) {
                    $type->setEndpoint(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $type->setEndpoint(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEndpoint(new FHIRUrl($ext));
            } else {
                $type->setEndpoint(new FHIRUrl(null));
            }
        }
        if (isset($json[self::FIELD_PAYLOAD]) || isset($json[self::FIELD_PAYLOAD_EXT]) || array_key_exists(self::FIELD_PAYLOAD, $json) || array_key_exists(self::FIELD_PAYLOAD_EXT, $json)) {
            $value = $json[self::FIELD_PAYLOAD] ?? null;
            $ext = (isset($json[self::FIELD_PAYLOAD_EXT]) && is_array($json[self::FIELD_PAYLOAD_EXT])) ? $json[self::FIELD_PAYLOAD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setPayload($value);
                } else if (is_array($value)) {
                    $type->setPayload(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setPayload(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPayload(new FHIRCode($ext));
            } else {
                $type->setPayload(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_HEADER]) || isset($json[self::FIELD_HEADER_EXT]) || array_key_exists(self::FIELD_HEADER, $json) || array_key_exists(self::FIELD_HEADER_EXT, $json)) {
            $value = $json[self::FIELD_HEADER] ?? null;
            $ext = (isset($json[self::FIELD_HEADER_EXT]) && is_array($json[self::FIELD_HEADER_EXT])) ? $json[self::FIELD_HEADER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addHeader($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addHeader($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addHeader(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addHeader(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addHeader(new FHIRString($iext));
                }
            } else {
                $type->addHeader(new FHIRString(null));
            }
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
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->endpoint)) {
            if (null !== ($val = $this->endpoint->getValue())) {
                $out->endpoint = $val;
            }
            $ext = $this->endpoint->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_endpoint = $ext;
            }
        }
        if (isset($this->payload)) {
            if (null !== ($val = $this->payload->getValue())) {
                $out->payload = $val;
            }
            $ext = $this->payload->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_payload = $ext;
            }
        }
        if (isset($this->header) && [] !== $this->header) {
            $vals = [];
            $exts = [];
            foreach ($this->header as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->header = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_header = $exts;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}