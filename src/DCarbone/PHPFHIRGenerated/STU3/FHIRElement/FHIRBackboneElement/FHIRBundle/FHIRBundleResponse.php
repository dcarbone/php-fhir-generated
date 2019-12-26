<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleResponse
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The etag for the resource, it the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $etag = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $lastModified = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $location = null;

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface
     */
    protected $outcome = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $status = null;

    /**
     * Validation map for fields in type Bundle.Response
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ETAG]) || isset($data[self::FIELD_ETAG_EXT])) {
            if (isset($data[self::FIELD_ETAG])) {
                $value = $data[self::FIELD_ETAG];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ETAG_EXT]) && is_array($data[self::FIELD_ETAG_EXT])) {
                $ext = $data[self::FIELD_ETAG_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setEtag($value);
                } else if (is_array($value)) {
                    $this->setEtag(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setEtag(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEtag(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_MODIFIED]) || isset($data[self::FIELD_LAST_MODIFIED_EXT])) {
            if (isset($data[self::FIELD_LAST_MODIFIED])) {
                $value = $data[self::FIELD_LAST_MODIFIED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_MODIFIED_EXT]) && is_array($data[self::FIELD_LAST_MODIFIED_EXT])) {
                $ext = $data[self::FIELD_LAST_MODIFIED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setLastModified($value);
                } else if (is_array($value)) {
                    $this->setLastModified(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setLastModified(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastModified(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION]) || isset($data[self::FIELD_LOCATION_EXT])) {
            if (isset($data[self::FIELD_LOCATION])) {
                $value = $data[self::FIELD_LOCATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT])) {
                $ext = $data[self::FIELD_LOCATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setLocation($value);
                } else if (is_array($value)) {
                    $this->setLocation(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLocation(new FHIRUri($ext));
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRString($ext));
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
        return "<BundleResponse{$xmlns}></BundleResponse>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The etag for the resource, it the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The etag for the resource, it the operation for the entry produced a versioned
     * resource (see [Resource Metadata and Versioning](http.html#versioning) and
     * [Managing Resource Contention](http.html#concurrency)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $etag
     * @return static
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
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the resource was modified on the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $lastModified
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The location header created by processing this operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $location
     * @return static
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
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing
     * this entry in a batch or transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface $outcome
     * @return static
     */
    public function setOutcome(PHPFHIRContainedTypeInterface $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status code returned by processing this entry. The status SHALL start with a
     * 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description
     * associated with the status code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $status
     * @return static
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
        if (null !== ($v = $this->getEtag())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ETAG] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_MODIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ETAG])) {
            $v = $this->getEtag();
            foreach($validationRules[self::FIELD_ETAG] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_ETAG, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ETAG])) {
                        $errs[self::FIELD_ETAG] = [];
                    }
                    $errs[self::FIELD_ETAG][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_MODIFIED])) {
            $v = $this->getLastModified();
            foreach($validationRules[self::FIELD_LAST_MODIFIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_LAST_MODIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_MODIFIED])) {
                        $errs[self::FIELD_LAST_MODIFIED] = [];
                    }
                    $errs[self::FIELD_LAST_MODIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
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
                throw new \DomainException(sprintf('FHIRBundleResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBundleResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBundleResponse;
        } elseif (!is_object($type) || !($type instanceof FHIRBundleResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRBundleResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->etag)) {
            $type->setEtag(FHIRString::xmlUnserialize($children->etag));
        }
        if (isset($attributes->etag)) {
            $pt = $type->getEtag();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->etag);
            } else {
                $type->setEtag((string)$attributes->etag);
            }
        }
        if (isset($children->lastModified)) {
            $type->setLastModified(FHIRInstant::xmlUnserialize($children->lastModified));
        }
        if (isset($attributes->lastModified)) {
            $pt = $type->getLastModified();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastModified);
            } else {
                $type->setLastModified((string)$attributes->lastModified);
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRUri::xmlUnserialize($children->location));
        }
        if (isset($attributes->location)) {
            $pt = $type->getLocation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->location);
            } else {
                $type->setLocation((string)$attributes->location);
            }
        }
        if (isset($children->outcome)) {
            foreach($children->outcome as $child) {
                foreach($child->children() as $babe) {
                    $type->setOutcome(PHPFHIRTypeMap::getContainedTypeFromXML($babe));
                    break 2;
                }
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRString::xmlUnserialize($children->status));
        }
        if (isset($attributes->status)) {
            $pt = $type->getStatus();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->status);
            } else {
                $type->setStatus((string)$attributes->status);
            }
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
        if (null !== ($v = $this->getEtag())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ETAG, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLastModified())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_MODIFIED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOutcome())) {
            $tsxe = $sxe->addChild(self::FIELD_OUTCOME);
            $v->xmlSerialize($tsxe->addChild($v->_getFHIRTypeName(), null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ETAG] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ETAG_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            $a[self::FIELD_LAST_MODIFIED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_LAST_MODIFIED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_LOCATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}