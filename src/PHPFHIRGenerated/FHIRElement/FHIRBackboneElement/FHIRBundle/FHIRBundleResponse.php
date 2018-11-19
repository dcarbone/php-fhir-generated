<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResourceContainer;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleResponse
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleResponse extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Bundle.Response';

    /**
     * The etag for the resource, it the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $etag = null;

    /**
     * The date/time that the resource was modified on the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $lastModified = null;

    /**
     * The location header created by processing this operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $location = null;

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    private $outcome = null;

    /**
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $status = null;

    /**
     * FHIRBundleResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['etag'])) {
                $value = $data['etag'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Property \"etag\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setEtag($value);
            }
            if (isset($data['lastModified'])) {
                $value = $data['lastModified'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Property \"lastModified\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value)); 
                }
                $this->setLastModified($value);
            }
            if (isset($data['location'])) {
                $value = $data['location'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Property \"location\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setLocation($value);
            }
            if (isset($data['outcome'])) {
                $value = $data['outcome'];
                if (is_array($value)) {
                    $value = new FHIRResourceContainer($value);
                } 
                if (!($value instanceof FHIRResourceContainer)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Property \"outcome\" must either be instance of \PHPFHIRGenerated\FHIRResourceContainer or data to construct type, saw ".gettype($value)); 
                }
                $this->setOutcome($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The etag for the resource, it the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setEtag($etag)
    {
        if (null === $etag) {
            return $this; 
        }
        if (is_scalar($etag)) {
            $etag = new FHIRString($etag);
        }
        if (!($etag instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::setEtag - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($etag)
            ));
        }
        $this->etag = $etag;
        return $this;
    }

    /**
     * The etag for the resource, it the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * The date/time that the resource was modified on the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        if (null === $lastModified) {
            return $this; 
        }
        if (is_scalar($lastModified)) {
            $lastModified = new FHIRInstant($lastModified);
        }
        if (!($lastModified instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::setLastModified - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($lastModified)
            ));
        }
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * The date/time that the resource was modified on the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * The location header created by processing this operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setLocation($location)
    {
        if (null === $location) {
            return $this; 
        }
        if (is_scalar($location)) {
            $location = new FHIRUri($location);
        }
        if (!($location instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::setLocation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($location)
            ));
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The location header created by processing this operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
     * @param null|mixed An instance of a FHIRResource or FHIRResourceContainer
     * @return $this
     */
    public function setOutcome($outcome = null)
    {
        if (null === $outcome) {
            return $this; 
        }
        if ($outcome instanceof FHIRResource){
            $outcome = new FHIRResourceContainer($outcome);
        }
        if (!($outcome instanceof FHIRResourceContainer)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::setOutcome - Argument expected to be instanceof FHIRResource, FHIRResourceContainer, or null, %s seen',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
,
     * @return null|mixed
     */
    public function getOutcome()
    {
        return isset($this->outcome) ? $this->outcome->jsonSerialize() : null;
    }

    /**
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRString($status);
        }
        if (!($status instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleResponse::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEtag())) {
            $a['etag'] = $v;
        }
        if (null !== ($v = $this->getLastModified())) {
            $a['lastModified'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<BundleResponse xmlns="http://hl7.org/fhir"></BundleResponse>');
        }
        if (null !== ($v = $this->getEtag())) {
            $v->xmlSerialize(true, $sxe->addChild('etag'));
        }
        if (null !== ($v = $this->getLastModified())) {
            $v->xmlSerialize(true, $sxe->addChild('lastModified'));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize(true, $sxe->addChild('location'));
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize(true, $sxe->addChild('outcome'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}