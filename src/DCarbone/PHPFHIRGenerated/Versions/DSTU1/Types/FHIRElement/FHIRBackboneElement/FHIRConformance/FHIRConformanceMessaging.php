<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 */
class FHIRConformanceMessaging extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING;

    /* class_default.php:47 */
    public const FIELD_ENDPOINT = 'endpoint';
    public const FIELD_ENDPOINT_EXT = '_endpoint';
    public const FIELD_RELIABLE_CACHE = 'reliableCache';
    public const FIELD_RELIABLE_CACHE_EXT = '_reliableCache';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_EVENT = 'event';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_EVENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_ENDPOINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RELIABLE_CACHE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $endpoint;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $reliableCache;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $documentation;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[] 
     */
    protected array $event;

    /* constructor.php:62 */
    /**
     * FHIRConformanceMessaging Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $endpoint
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $reliableCache
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[] $event
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $endpoint = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $reliableCache = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|iterable $event = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $endpoint) {
            $this->setEndpoint($endpoint);
        }
        if (null !== $reliableCache) {
            $this->setReliableCache($reliableCache);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
        if (null !== $event) {
            $this->setEvent(...$event);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getEndpoint(): null|FHIRUri
    {
        return $this->endpoint ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $endpoint
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEndpoint(null|string|FHIRUriPrimitive|FHIRUri $endpoint,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        if (!($endpoint instanceof FHIRUri)) {
            $endpoint = new FHIRUri(value: $endpoint);
        }
        $this->endpoint = $endpoint;
        if ($this->_valueXMLLocations[self::FIELD_ENDPOINT] !== $valueXMLLocation) {
            $this->_setEndpointValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the endpoint element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEndpointValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ENDPOINT];
    }

    /**
     * Set the location the "value" field of the endpoint element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEndpointValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ENDPOINT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getReliableCache(): null|FHIRInteger
    {
        return $this->reliableCache ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $reliableCache
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReliableCache(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $reliableCache,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $reliableCache) {
            unset($this->reliableCache);
            return $this;
        }
        if (!($reliableCache instanceof FHIRInteger)) {
            $reliableCache = new FHIRInteger(value: $reliableCache);
        }
        $this->reliableCache = $reliableCache;
        if ($this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE] !== $valueXMLLocation) {
            $this->_setReliableCacheValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the reliableCache element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReliableCacheValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE];
    }

    /**
     * Set the location the "value" field of the reliableCache element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReliableCacheValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRString)) {
            $documentation = new FHIRString(value: $documentation);
        }
        $this->documentation = $documentation;
        if ($this->_valueXMLLocations[self::FIELD_DOCUMENTATION] !== $valueXMLLocation) {
            $this->_setDocumentationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the documentation element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDocumentationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DOCUMENTATION];
    }

    /**
     * Set the location the "value" field of the documentation element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDocumentationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DOCUMENTATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[]
     */
    public function getEvent(): array
    {
        return $this->event ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent>
     */
    public function getEventIterator(): iterable
    {
        if (!isset($this->event)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->event);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $event
     * @return static
     */
    public function addEvent(FHIRConformanceEvent $event): self
    {
        if (!isset($this->event)) {
            $this->event = [];
        }
        $this->event[] = $event;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent ...$event
     * @return static
     */
    public function setEvent(FHIRConformanceEvent ...$event): self
    {
        if ([] === $event) {
            unset($this->event);
            return $this;
        }
        $this->event = $event;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceMessaging)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDPOINT === $cen) {
                $type->setEndpoint(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELIABLE_CACHE === $cen) {
                $type->setReliableCache(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT === $cen) {
                $type->addEvent(FHIRConformanceEvent::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ENDPOINT])) {
            if (isset($type->endpoint)) {
                $type->endpoint->setValue((string)$attributes[self::FIELD_ENDPOINT]);
                $type->_setEndpointValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEndpoint((string)$attributes[self::FIELD_ENDPOINT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RELIABLE_CACHE])) {
            if (isset($type->reliableCache)) {
                $type->reliableCache->setValue((string)$attributes[self::FIELD_RELIABLE_CACHE]);
                $type->_setReliableCacheValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReliableCache((string)$attributes[self::FIELD_RELIABLE_CACHE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
                $type->_setDocumentationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ConformanceMessaging', $this->_getSourceXMLNS());
        }
        if (isset($this->endpoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ENDPOINT]) {
            $xw->writeAttribute(self::FIELD_ENDPOINT, $this->endpoint->_getFormattedValue());
        }
        if (isset($this->reliableCache) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE]) {
            $xw->writeAttribute(self::FIELD_RELIABLE_CACHE, $this->reliableCache->_getFormattedValue());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->endpoint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ENDPOINT]
                || $this->endpoint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ENDPOINT);
            $this->endpoint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ENDPOINT]);
            $xw->endElement();
        }
        if (isset($this->reliableCache)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE]
                || $this->reliableCache->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RELIABLE_CACHE);
            $this->reliableCache->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RELIABLE_CACHE]);
            $xw->endElement();
        }
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
            $xw->endElement();
        }
        if (isset($this->event)) {
            foreach ($this->event as $v) {
                $xw->startElement(self::FIELD_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceMessaging)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_ENDPOINT])
            || isset($json[self::FIELD_ENDPOINT_EXT])
            || array_key_exists(self::FIELD_ENDPOINT, $json)
            || array_key_exists(self::FIELD_ENDPOINT_EXT, $json)) {
            $value = $json[self::FIELD_ENDPOINT] ?? null;
            $type->setEndpoint(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_ENDPOINT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RELIABLE_CACHE])
            || isset($json[self::FIELD_RELIABLE_CACHE_EXT])
            || array_key_exists(self::FIELD_RELIABLE_CACHE, $json)
            || array_key_exists(self::FIELD_RELIABLE_CACHE_EXT, $json)) {
            $value = $json[self::FIELD_RELIABLE_CACHE] ?? null;
            $type->setReliableCache(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_RELIABLE_CACHE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DOCUMENTATION])
            || isset($json[self::FIELD_DOCUMENTATION_EXT])
            || array_key_exists(self::FIELD_DOCUMENTATION, $json)
            || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $json)) {
            $value = $json[self::FIELD_DOCUMENTATION] ?? null;
            $type->setDocumentation(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DOCUMENTATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EVENT]) || array_key_exists(self::FIELD_EVENT, $json)) {
            $vs = $json[self::FIELD_EVENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEvent(FHIRConformanceEvent::jsonUnserialize($v, $config));
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
        if (isset($this->reliableCache)) {
            if (null !== ($val = $this->reliableCache->getValue())) {
                $out->reliableCache = $val;
            }
            if ($this->reliableCache->_nonValueFieldDefined()) {
                $ext = $this->reliableCache->jsonSerialize();
                unset($ext->value);
                $out->_reliableCache = $ext;
            }
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            if ($this->documentation->_nonValueFieldDefined()) {
                $ext = $this->documentation->jsonSerialize();
                unset($ext->value);
                $out->_documentation = $ext;
            }
        }
        if (isset($this->event) && [] !== $this->event) {
            $out->event = $this->event;
        }
        return $out;
    }
}