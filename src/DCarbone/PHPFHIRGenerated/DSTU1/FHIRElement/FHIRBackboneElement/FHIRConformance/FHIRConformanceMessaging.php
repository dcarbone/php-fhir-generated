<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 *
 * Class FHIRConformanceMessaging
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceMessaging extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING;

    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_ENDPOINT_EXT = '_endpoint';
    const FIELD_EVENT = 'event';
    const FIELD_RELIABLE_CACHE = 'reliableCache';
    const FIELD_RELIABLE_CACHE_EXT = '_reliableCache';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $documentation = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $endpoint = null;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[]
     */
    private $event = [];
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $reliableCache = null;

    /**
     * FHIRConformanceMessaging Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConformanceMessaging::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
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
        if (isset($data[self::FIELD_EVENT])) {
            if (is_array($data[self::FIELD_EVENT])) {
                foreach($data[self::FIELD_EVENT] as $v) {
                    if ($v instanceof FHIRConformanceEvent) {
                        $this->addEvent($v);
                    } else {
                        $this->addEvent(new FHIRConformanceEvent($v));
                    }
                }
            } else if ($data[self::FIELD_EVENT] instanceof FHIRConformanceEvent) {
                $this->addEvent($data[self::FIELD_EVENT]);
            } else {
                $this->addEvent(new FHIRConformanceEvent($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_RELIABLE_CACHE])) {
            $ext = (isset($data[self::FIELD_RELIABLE_CACHE_EXT]) && is_array($data[self::FIELD_RELIABLE_CACHE_EXT]))
                ? $data[self::FIELD_RELIABLE_CACHE_EXT]
                : null;
            if ($data[self::FIELD_RELIABLE_CACHE] instanceof FHIRInteger) {
                $this->setReliableCache($data[self::FIELD_RELIABLE_CACHE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RELIABLE_CACHE])) {
                $this->setReliableCache(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_RELIABLE_CACHE]] + $ext));
            } else {
                $this->setReliableCache(new FHIRInteger($data[self::FIELD_RELIABLE_CACHE]));
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Documentation about the system's messaging capabilities for this endpoint not
     * otherwise documented by the conformance statement. For example, process for
     * becoming an authorized messaging exchange partner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $documentation
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An address to which messages and/or replies are to be sent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $endpoint
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
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
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the solution's support for an event at this end point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $event
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     */
    public function addEvent(FHIRConformanceEvent $event = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[] $event
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     */
    public function setEvent(array $event = [])
    {
        $this->event = [];
        if ([] === $event) {
            return $this;
        }
        foreach($event as $v) {
            if ($v instanceof FHIRConformanceEvent) {
                $this->addEvent($v);
            } else {
                $this->addEvent(new FHIRConformanceEvent($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getReliableCache()
    {
        return $this->reliableCache;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length if the receiver's reliable messaging cache (if a receiver) or how long
     * the cache length on the receiver should be (if a sender).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $reliableCache
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
     */
    public function setReliableCache($reliableCache = null)
    {
        if (null === $reliableCache) {
            $this->reliableCache = null;
            return $this;
        }
        if ($reliableCache instanceof FHIRInteger) {
            $this->reliableCache = $reliableCache;
            return $this;
        }
        $this->reliableCache = new FHIRInteger($reliableCache);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
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
                throw new \DomainException(sprintf('FHIRConformanceMessaging::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConformanceMessaging::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRConformanceMessaging);
        } elseif (!is_object($type) || !($type instanceof FHIRConformanceMessaging)) {
            throw new \RuntimeException(sprintf(
                'FHIRConformanceMessaging::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($attributes->endpoint)) {
            $type->setEndpoint((string)$attributes->endpoint);
        }
        if (isset($children->endpoint)) {
            $type->setEndpoint(FHIRUri::xmlUnserialize($children->endpoint));
        }
        if (isset($children->event)) {
            foreach($children->event as $child) {
                $type->addEvent(FHIRConformanceEvent::xmlUnserialize($child));
            }
        }
        if (isset($attributes->reliableCache)) {
            $type->setReliableCache((string)$attributes->reliableCache);
        }
        if (isset($children->reliableCache)) {
            $type->setReliableCache(FHIRInteger::xmlUnserialize($children->reliableCache));
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
            $sxe = new \SimpleXMLElement('<ConformanceMessaging xmlns="http://hl7.org/fhir"></ConformanceMessaging>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getDocumentation())) {
            $sxe->addAttribute(self::FIELD_DOCUMENTATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION));
            }
        }
        if (null !== ($v = $this->getEndpoint())) {
            $sxe->addAttribute(self::FIELD_ENDPOINT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT));
            }
        }

        if ([] !== ($vs = $this->getEvent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT));
            }
        }
        if (null !== ($v = $this->getReliableCache())) {
            $sxe->addAttribute(self::FIELD_RELIABLE_CACHE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELIABLE_CACHE));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = (string)$v;
            $a[self::FIELD_DOCUMENTATION_EXT] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = (string)$v;
            $a[self::FIELD_ENDPOINT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEvent())) {
            $a[self::FIELD_EVENT] = $vs;
        }
        if (null !== ($v = $this->getReliableCache())) {
            $a[self::FIELD_RELIABLE_CACHE] = (string)$v;
            $a[self::FIELD_RELIABLE_CACHE_EXT] = $v;
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