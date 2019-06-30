<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 *
 * Class FHIRTerminologyCapabilitiesCodeSystem
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities
 */
class FHIRTerminologyCapabilitiesCodeSystem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM;

    const FIELD_SUBSUMPTION = 'subsumption';
    const FIELD_SUBSUMPTION_EXT = '_subsumption';
    const FIELD_URI = 'uri';
    const FIELD_URI_EXT = '_uri';
    const FIELD_VERSION = 'version';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $subsumption = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $uri = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[]
     */
    private $version = [];

    /**
     * FHIRTerminologyCapabilitiesCodeSystem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SUBSUMPTION])) {
            $ext = (isset($data[self::FIELD_SUBSUMPTION_EXT]) && is_array($data[self::FIELD_SUBSUMPTION_EXT]))
                ? $data[self::FIELD_SUBSUMPTION_EXT]
                : null;
            if ($data[self::FIELD_SUBSUMPTION] instanceof FHIRBoolean) {
                $this->setSubsumption($data[self::FIELD_SUBSUMPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBSUMPTION])) {
                $this->setSubsumption(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_SUBSUMPTION]] + $ext));
            } else {
                $this->setSubsumption(new FHIRBoolean($data[self::FIELD_SUBSUMPTION]));
            }
        }
        if (isset($data[self::FIELD_URI])) {
            $ext = (isset($data[self::FIELD_URI_EXT]) && is_array($data[self::FIELD_URI_EXT]))
                ? $data[self::FIELD_URI_EXT]
                : null;
            if ($data[self::FIELD_URI] instanceof FHIRCanonical) {
                $this->setUri($data[self::FIELD_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_URI])) {
                $this->setUri(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_URI]] + $ext));
            } else {
                $this->setUri(new FHIRCanonical($data[self::FIELD_URI]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if ($v instanceof FHIRTerminologyCapabilitiesVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRTerminologyCapabilitiesVersion($v));
                    }
                }
            } else if ($data[self::FIELD_VERSION] instanceof FHIRTerminologyCapabilitiesVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRTerminologyCapabilitiesVersion($data[self::FIELD_VERSION]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getSubsumption()
    {
        return $this->subsumption;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $subsumption
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
     */
    public function setSubsumption($subsumption = null)
    {
        if (null === $subsumption) {
            $this->subsumption = null;
            return $this;
        }
        if ($subsumption instanceof FHIRBoolean) {
            $this->subsumption = $subsumption;
            return $this;
        }
        $this->subsumption = new FHIRBoolean($subsumption);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $uri
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
     */
    public function setUri($uri = null)
    {
        if (null === $uri) {
            $this->uri = null;
            return $this;
        }
        if ($uri instanceof FHIRCanonical) {
            $this->uri = $uri;
            return $this;
        }
        $this->uri = new FHIRCanonical($uri);
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
     */
    public function addVersion(FHIRTerminologyCapabilitiesVersion $version = null)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[] $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
     */
    public function setVersion(array $version = [])
    {
        $this->version = [];
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRTerminologyCapabilitiesVersion) {
                $this->addVersion($v);
            } else {
                $this->addVersion(new FHIRTerminologyCapabilitiesVersion($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRTerminologyCapabilitiesCodeSystem);
        } elseif (!is_object($type) || !($type instanceof FHIRTerminologyCapabilitiesCodeSystem)) {
            throw new \RuntimeException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->subsumption)) {
            $type->setSubsumption((string)$attributes->subsumption);
        }
        if (isset($children->subsumption)) {
            $type->setSubsumption(FHIRBoolean::xmlUnserialize($children->subsumption));
        }
        if (isset($attributes->uri)) {
            $type->setUri((string)$attributes->uri);
        }
        if (isset($children->uri)) {
            $type->setUri(FHIRCanonical::xmlUnserialize($children->uri));
        }
        if (isset($children->version)) {
            foreach($children->version as $child) {
                $type->addVersion(FHIRTerminologyCapabilitiesVersion::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<TerminologyCapabilitiesCodeSystem xmlns="http://hl7.org/fhir"></TerminologyCapabilitiesCodeSystem>');
        }
        if (null !== ($v = $this->getSubsumption())) {
            $sxe->addAttribute(self::FIELD_SUBSUMPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSUMPTION));
            }
        }
        if (null !== ($v = $this->getUri())) {
            $sxe->addAttribute(self::FIELD_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URI));
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION));
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
        if (null !== ($v = $this->getSubsumption())) {
            $a[self::FIELD_SUBSUMPTION] = (string)$v;
            $a[self::FIELD_SUBSUMPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getUri())) {
            $a[self::FIELD_URI] = (string)$v;
            $a[self::FIELD_URI_EXT] = $v;
        }
        if ([] !== ($vs = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $vs;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}