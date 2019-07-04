<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeMap;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleResponse
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleResponse extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE;

    const FIELD_ETAG = 'etag';
    const FIELD_ETAG_EXT = '_etag';
    const FIELD_LAST_MODIFIED = 'lastModified';
    const FIELD_LAST_MODIFIED_EXT = '_lastModified';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $etag = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $lastModified = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $location = null;

    /**
     * (choose any one of the elements, but only one)
     *
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface
     */
    private $outcome = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $status = null;

    /**
     * FHIRBundleResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ETAG])) {
            $ext = (isset($data[self::FIELD_ETAG_EXT]) && is_array($data[self::FIELD_ETAG_EXT]))
                ? $data[self::FIELD_ETAG_EXT]
                : null;
            if ($data[self::FIELD_ETAG] instanceof FHIRString) {
                $this->setEtag($data[self::FIELD_ETAG]);
            } elseif ($ext && is_scalar($data[self::FIELD_ETAG])) {
                $this->setEtag(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ETAG]] + $ext));
            } else {
                $this->setEtag(new FHIRString($data[self::FIELD_ETAG]));
            }
        }
        if (isset($data[self::FIELD_LAST_MODIFIED])) {
            $ext = (isset($data[self::FIELD_LAST_MODIFIED_EXT]) && is_array($data[self::FIELD_LAST_MODIFIED_EXT]))
                ? $data[self::FIELD_LAST_MODIFIED_EXT]
                : null;
            if ($data[self::FIELD_LAST_MODIFIED] instanceof FHIRInstant) {
                $this->setLastModified($data[self::FIELD_LAST_MODIFIED]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_MODIFIED])) {
                $this->setLastModified(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_LAST_MODIFIED]] + $ext));
            } else {
                $this->setLastModified(new FHIRInstant($data[self::FIELD_LAST_MODIFIED]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            $ext = (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT]))
                ? $data[self::FIELD_LOCATION_EXT]
                : null;
            if ($data[self::FIELD_LOCATION] instanceof FHIRUri) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOCATION])) {
                $this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_LOCATION]] + $ext));
            } else {
                $this->setLocation(new FHIRUri($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if (is_object($data[self::FIELD_OUTCOME])) {
                if ($data[self::FIELD_OUTCOME] instanceof PHPFHIRContainedTypeInterface) {
                    $this->setOutcome($data[self::FIELD_OUTCOME]);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleResponse - Field "outcome" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($data[self::FIELD_OUTCOME])
                    ));
                }
            } else if (is_array($data[self::FIELD_OUTCOME])) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_OUTCOME]);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRBundleResponse - Unable to determine class for field "outcome" from value: %s',
                        json_encode($data[self::FIELD_OUTCOME])
                    ));
                }
                $this->setOutcome(new $typeClass($data[self::FIELD_OUTCOME]));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRBundleResponse - Unable to determine class for field "outcome" from value: %s',
                    json_encode($data[self::FIELD_OUTCOME])
                ));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRString) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRString($data[self::FIELD_STATUS]));
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Etag for the resource, if the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $etag
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function setEtag($etag = null)
    {
        if (null === $etag) {
            $this->etag = null;
            return $this;
        }
        if ($etag instanceof FHIRString) {
            $this->etag = $etag;
            return $this;
        }
        $this->etag = new FHIRString($etag);
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
     * The date/time that the resource was modified on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant $lastModified
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function setLastModified($lastModified = null)
    {
        if (null === $lastModified) {
            $this->lastModified = null;
            return $this;
        }
        if ($lastModified instanceof FHIRInstant) {
            $this->lastModified = $lastModified;
            return $this;
        }
        $this->lastModified = new FHIRInstant($lastModified);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The location header created by processing this operation, populated if the
     * operation returns a location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function setLocation($location = null)
    {
        if (null === $location) {
            $this->location = null;
            return $this;
        }
        if ($location instanceof FHIRUri) {
            $this->location = $location;
            return $this;
        }
        $this->location = new FHIRUri($location);
        return $this;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface $outcome
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function setOutcome(PHPFHIRContainedTypeInterface $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRString) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRString($status);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
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
                throw new \DomainException(sprintf('FHIRBundleResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundleResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRBundleResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRBundleResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundleResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->etag)) {
            $type->setEtag((string)$attributes->etag);
        }
        if (isset($children->etag)) {
            $type->setEtag(FHIRString::xmlUnserialize($children->etag));
        }
        if (isset($attributes->lastModified)) {
            $type->setLastModified((string)$attributes->lastModified);
        }
        if (isset($children->lastModified)) {
            $type->setLastModified(FHIRInstant::xmlUnserialize($children->lastModified));
        }
        if (isset($attributes->location)) {
            $type->setLocation((string)$attributes->location);
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRUri::xmlUnserialize($children->location));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRResourceContainer::xmlUnserialize($children->outcome));
        }
        if (isset($attributes->status)) {
            $type->setStatus((string)$attributes->status);
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRString::xmlUnserialize($children->status));
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
            $sxe = new \SimpleXMLElement('<BundleResponse xmlns="http://hl7.org/fhir"></BundleResponse>');
        }
        if (null !== ($v = $this->getEtag())) {
            $sxe->addAttribute(self::FIELD_ETAG, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ETAG));
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            $sxe->addAttribute(self::FIELD_LAST_MODIFIED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_MODIFIED));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $sxe->addAttribute(self::FIELD_LOCATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION));
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
        }
        if (null !== ($v = $this->getStatus())) {
            $sxe->addAttribute(self::FIELD_STATUS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
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
        if (null !== ($v = $this->getEtag())) {
            $a[self::FIELD_ETAG] = (string)$v;
            $a[self::FIELD_ETAG_EXT] = $v;
        }
        if (null !== ($v = $this->getLastModified())) {
            $a[self::FIELD_LAST_MODIFIED] = (string)$v;
            $a[self::FIELD_LAST_MODIFIED_EXT] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = (string)$v;
            $a[self::FIELD_LOCATION_EXT] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = (string)$v;
            $a[self::FIELD_STATUS_EXT] = $v;
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