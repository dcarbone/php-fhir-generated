<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
 * If the element is present, it must have either a \@value, an \@id, or extensions
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
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    protected $entry = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    protected $link = [];

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    protected $signature = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $timestamp = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected $total = null;

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType
     */
    protected $type = null;

    /**
     * Validation map for fields in type Bundle
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_TIMESTAMP]) || isset($data[self::FIELD_TIMESTAMP_EXT])) {
            if (isset($data[self::FIELD_TIMESTAMP])) {
                $value = $data[self::FIELD_TIMESTAMP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIMESTAMP_EXT]) && is_array($data[self::FIELD_TIMESTAMP_EXT])) {
                $ext = $data[self::FIELD_TIMESTAMP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setTimestamp($value);
                } else if (is_array($value)) {
                    $this->setTimestamp(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setTimestamp(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimestamp(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_TOTAL]) || isset($data[self::FIELD_TOTAL_EXT])) {
            if (isset($data[self::FIELD_TOTAL])) {
                $value = $data[self::FIELD_TOTAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT])) {
                $ext = $data[self::FIELD_TOTAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setTotal($value);
                } else if (is_array($value)) {
                    $this->setTotal(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setTotal(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTotal(new FHIRUnsignedInt($ext));
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
                if ($value instanceof FHIRBundleType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRBundleType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRBundleType([FHIRBundleType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRBundleType($ext));
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
        return "<Bundle{$xmlns}></Bundle>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $signature
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $timestamp
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $total
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBundleType $type
     * @return static
     */
    public function setType(FHIRBundleType $type = null)
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
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTRY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimestamp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMESTAMP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY])) {
            $v = $this->getEntry();
            foreach($validationRules[self::FIELD_ENTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_ENTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY])) {
                        $errs[self::FIELD_ENTRY] = [];
                    }
                    $errs[self::FIELD_ENTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIGNATURE])) {
            $v = $this->getSignature();
            foreach($validationRules[self::FIELD_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIGNATURE])) {
                        $errs[self::FIELD_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMESTAMP])) {
            $v = $this->getTimestamp();
            foreach($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TIMESTAMP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMESTAMP])) {
                        $errs[self::FIELD_TIMESTAMP] = [];
                    }
                    $errs[self::FIELD_TIMESTAMP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL])) {
            $v = $this->getTotal();
            foreach($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TOTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL])) {
                        $errs[self::FIELD_TOTAL] = [];
                    }
                    $errs[self::FIELD_TOTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
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
                throw new \DomainException(sprintf('FHIRBundle::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundle::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBundle;
        } elseif (!is_object($type) || !($type instanceof FHIRBundle)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundle::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
        if (isset($children->timestamp)) {
            $type->setTimestamp(FHIRInstant::xmlUnserialize($children->timestamp));
        }
        if (isset($attributes->timestamp)) {
            $pt = $type->getTimestamp();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timestamp);
            } else {
                $type->setTimestamp((string)$attributes->timestamp);
            }
        }
        if (isset($children->total)) {
            $type->setTotal(FHIRUnsignedInt::xmlUnserialize($children->total));
        }
        if (isset($attributes->total)) {
            $pt = $type->getTotal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->total);
            } else {
                $type->setTotal((string)$attributes->total);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRBundleType::xmlUnserialize($children->type));
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
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENTRY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimestamp())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMESTAMP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTotal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getEntry())) {
            $a[self::FIELD_ENTRY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ENTRY][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK][] = $v;
            }
        }
        if (null !== ($v = $this->getSignature())) {
            $a[self::FIELD_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getTimestamp())) {
            $a[self::FIELD_TIMESTAMP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_TIMESTAMP_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_TOTAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBundleType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBundleType::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}