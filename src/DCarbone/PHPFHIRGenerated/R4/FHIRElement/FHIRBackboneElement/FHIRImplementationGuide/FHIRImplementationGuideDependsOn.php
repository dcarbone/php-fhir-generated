<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideDependsOn
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideDependsOn extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEPENDS_ON;

    const FIELD_PACKAGE_ID = 'packageId';
    const FIELD_PACKAGE_ID_EXT = '_packageId';
    const FIELD_URI = 'uri';
    const FIELD_URI_EXT = '_uri';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $packageId = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $uri = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the IG that is depended on, when the correct version is required
     * to understand the IG correctly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRImplementationGuideDependsOn Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideDependsOn::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PACKAGE_ID])) {
            $ext = (isset($data[self::FIELD_PACKAGE_ID_EXT]) && is_array($data[self::FIELD_PACKAGE_ID_EXT]))
                ? $data[self::FIELD_PACKAGE_ID_EXT]
                : null;
            if ($data[self::FIELD_PACKAGE_ID] instanceof FHIRId) {
                $this->setPackageId($data[self::FIELD_PACKAGE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_PACKAGE_ID])) {
                $this->setPackageId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_PACKAGE_ID]] + $ext));
            } else {
                $this->setPackageId(new FHIRId($data[self::FIELD_PACKAGE_ID]));
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
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION])) {
                $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $packageId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn
     */
    public function setPackageId($packageId = null)
    {
        if (null === $packageId) {
            $this->packageId = null;
            return $this;
        }
        if ($packageId instanceof FHIRId) {
            $this->packageId = $packageId;
            return $this;
        }
        $this->packageId = new FHIRId($packageId);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
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
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $uri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the IG that is depended on, when the correct version is required
     * to understand the IG correctly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The version of the IG that is depended on, when the correct version is required
     * to understand the IG correctly.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn
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
                throw new \DomainException(sprintf('FHIRImplementationGuideDependsOn::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideDependsOn::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRImplementationGuideDependsOn);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideDependsOn)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideDependsOn::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->packageId)) {
            $type->setPackageId((string)$attributes->packageId);
        }
        if (isset($children->packageId)) {
            $type->setPackageId(FHIRId::xmlUnserialize($children->packageId));
        }
        if (isset($attributes->uri)) {
            $type->setUri((string)$attributes->uri);
        }
        if (isset($children->uri)) {
            $type->setUri(FHIRCanonical::xmlUnserialize($children->uri));
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
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
            $sxe = new \SimpleXMLElement('<ImplementationGuideDependsOn xmlns="http://hl7.org/fhir"></ImplementationGuideDependsOn>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getPackageId())) {
            $sxe->addAttribute(self::FIELD_PACKAGE_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE_ID));
            }
        }
        if (null !== ($v = $this->getUri())) {
            $sxe->addAttribute(self::FIELD_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URI));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $sxe->addAttribute(self::FIELD_VERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
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
        if (null !== ($v = $this->getPackageId())) {
            $a[self::FIELD_PACKAGE_ID] = (string)$v;
            $a[self::FIELD_PACKAGE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getUri())) {
            $a[self::FIELD_URI] = (string)$v;
            $a[self::FIELD_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = (string)$v;
            $a[self::FIELD_VERSION_EXT] = $v;
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