<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:58+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRBundle
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource
 */
class FHIRBundle extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE;

    const FIELD_ENTRY = 'entry';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LINK = 'link';
    const FIELD_SIGNATURE = 'signature';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TIMESTAMP_EXT = '_timestamp';
    const FIELD_TOTAL = 'total';
    const FIELD_TOTAL_EXT = '_total';
    const FIELD_TYPE = 'type';

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    private $entry = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    private $link = [];

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    private $signature = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    private $timestamp = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    private $total = null;

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType
     */
    private $type = null;

    /**
     * FHIRBundle Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundle::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ENTRY])) {
            if (is_array($data[self::FIELD_ENTRY])) {
                foreach($data[self::FIELD_ENTRY] as $v) {
                    if ($v instanceof FHIRBundleEntry) {
                        $this->addEntry($v);
                    } else {
                        $this->addEntry(new FHIRBundleEntry($v));
                    }
                }
            } else if ($data[self::FIELD_ENTRY] instanceof FHIRBundleEntry) {
                $this->addEntry($data[self::FIELD_ENTRY]);
            } else {
                $this->addEntry(new FHIRBundleEntry($data[self::FIELD_ENTRY]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if ($v instanceof FHIRBundleLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRBundleLink($v));
                    }
                }
            } else if ($data[self::FIELD_LINK] instanceof FHIRBundleLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRBundleLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_SIGNATURE])) {
            if ($data[self::FIELD_SIGNATURE] instanceof FHIRSignature) {
                $this->setSignature($data[self::FIELD_SIGNATURE]);
            } else {
                $this->setSignature(new FHIRSignature($data[self::FIELD_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_TIMESTAMP])) {
            $ext = (isset($data[self::FIELD_TIMESTAMP_EXT]) && is_array($data[self::FIELD_TIMESTAMP_EXT]))
                ? $data[self::FIELD_TIMESTAMP_EXT]
                : null;
            if ($data[self::FIELD_TIMESTAMP] instanceof FHIRInstant) {
                $this->setTimestamp($data[self::FIELD_TIMESTAMP]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMESTAMP])) {
                $this->setTimestamp(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_TIMESTAMP]] + $ext));
            } else {
                $this->setTimestamp(new FHIRInstant($data[self::FIELD_TIMESTAMP]));
            }
        }
        if (isset($data[self::FIELD_TOTAL])) {
            $ext = (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT]))
                ? $data[self::FIELD_TOTAL_EXT]
                : null;
            if ($data[self::FIELD_TOTAL] instanceof FHIRUnsignedInt) {
                $this->setTotal($data[self::FIELD_TOTAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_TOTAL])) {
                $this->setTotal(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_TOTAL]] + $ext));
            } else {
                $this->setTotal(new FHIRUnsignedInt($data[self::FIELD_TOTAL]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRBundleType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRBundleType($data[self::FIELD_TYPE]));
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
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $entry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function addEntry(FHIRBundleEntry $entry = null)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[] $entry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setEntry(array $entry = [])
    {
        $this->entry = [];
        if ([] === $entry) {
            return $this;
        }
        foreach($entry as $v) {
            if ($v instanceof FHIRBundleEntry) {
                $this->addEntry($v);
            } else {
                $this->addEntry(new FHIRBundleEntry($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function addLink(FHIRBundleLink $link = null)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRBundleLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRBundleLink($v));
            }
        }
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $signature
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setSignature(FHIRSignature $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $timestamp
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setTimestamp($timestamp = null)
    {
        if (null === $timestamp) {
            $this->timestamp = null;
            return $this;
        }
        if ($timestamp instanceof FHIRInstant) {
            $this->timestamp = $timestamp;
            return $this;
        }
        $this->timestamp = new FHIRInstant($timestamp);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $total
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setTotal($total = null)
    {
        if (null === $total) {
            $this->total = null;
            return $this;
        }
        if ($total instanceof FHIRUnsignedInt) {
            $this->total = $total;
            return $this;
        }
        $this->total = new FHIRUnsignedInt($total);
        return $this;
    }

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function setType(FHIRBundleType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
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
                throw new \DomainException(sprintf('FHIRBundle::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundle::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRBundle);
        } elseif (!is_object($type) || !($type instanceof FHIRBundle)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundle::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->entry)) {
            foreach($children->entry as $child) {
                $type->addEntry(FHIRBundleEntry::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($child));
            }
        }
        if (isset($children->signature)) {
            $type->setSignature(FHIRSignature::xmlUnserialize($children->signature));
        }
        if (isset($attributes->timestamp)) {
            $type->setTimestamp((string)$attributes->timestamp);
        }
        if (isset($children->timestamp)) {
            $type->setTimestamp(FHIRInstant::xmlUnserialize($children->timestamp));
        }
        if (isset($attributes->total)) {
            $type->setTotal((string)$attributes->total);
        }
        if (isset($children->total)) {
            $type->setTotal(FHIRUnsignedInt::xmlUnserialize($children->total));
        }
        if (isset($children->type)) {
            $type->setType(FHIRBundleType::xmlUnserialize($children->type));
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
            $sxe = new \SimpleXMLElement('<Bundle xmlns="http://hl7.org/fhir"></Bundle>');
        }
    parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENTRY));
            }
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
        }

        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK));
            }
        }

        if (null !== ($v = $this->getSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIGNATURE));
        }
        if (null !== ($v = $this->getTimestamp())) {
            $sxe->addAttribute(self::FIELD_TIMESTAMP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIMESTAMP));
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $sxe->addAttribute(self::FIELD_TOTAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL));
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
        if ([] !== ($vs = $this->getEntry())) {
            $a[self::FIELD_ENTRY] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = $vs;
        }
        if (null !== ($v = $this->getSignature())) {
            $a[self::FIELD_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getTimestamp())) {
            $a[self::FIELD_TIMESTAMP] = (string)$v;
            $a[self::FIELD_TIMESTAMP_EXT] = $v;
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = (string)$v;
            $a[self::FIELD_TOTAL_EXT] = $v;
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