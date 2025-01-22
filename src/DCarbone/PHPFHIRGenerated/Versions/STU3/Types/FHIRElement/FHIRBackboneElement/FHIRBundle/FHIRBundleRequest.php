<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A container for a collection of resources.
 */
class FHIRBundleRequest extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BUNDLE_DOT_REQUEST;


    public const FIELD_METHOD = 'method';
    public const FIELD_METHOD_EXT = '_method';
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IF_NONE_MATCH = 'ifNoneMatch';
    public const FIELD_IF_NONE_MATCH_EXT = '_ifNoneMatch';
    public const FIELD_IF_MODIFIED_SINCE = 'ifModifiedSince';
    public const FIELD_IF_MODIFIED_SINCE_EXT = '_ifModifiedSince';
    public const FIELD_IF_MATCH = 'ifMatch';
    public const FIELD_IF_MATCH_EXT = '_ifMatch';
    public const FIELD_IF_NONE_EXIST = 'ifNoneExist';
    public const FIELD_IF_NONE_EXIST_EXT = '_ifNoneExist';

    /**
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP verb for this entry in either a change history, or a transaction/
     * transaction response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb 
     */
    protected FHIRHTTPVerb $method;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $ifNoneMatch;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $ifModifiedSince;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $ifMatch;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $ifNoneExist;

    /** Default validation map for fields in type Bundle.Request */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_METHOD => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_URL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRBundleRequest Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb $method
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifNoneMatch
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $ifModifiedSince
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifMatch
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifNoneExist
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRHTTPVerb $method = null,
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|string|FHIRStringPrimitive|FHIRString $ifNoneMatch = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $ifModifiedSince = null,
                                null|string|FHIRStringPrimitive|FHIRString $ifMatch = null,
                                null|string|FHIRStringPrimitive|FHIRString $ifNoneExist = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $ifNoneMatch) {
            $this->setIfNoneMatch($ifNoneMatch);
        }
        if (null !== $ifModifiedSince) {
            $this->setIfModifiedSince($ifModifiedSince);
        }
        if (null !== $ifMatch) {
            $this->setIfMatch($ifMatch);
        }
        if (null !== $ifNoneExist) {
            $this->setIfNoneExist($ifNoneExist);
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
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP verb for this entry in either a change history, or a transaction/
     * transaction response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb
     */
    public function getMethod(): null|FHIRHTTPVerb
    {
        return $this->method ?? null;
    }

    /**
     * HTTP verbs (in the HTTP command line).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The HTTP verb for this entry in either a change history, or a transaction/
     * transaction response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb $method
     * @return static
     */
    public function setMethod(null|FHIRHTTPVerb $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL for this entry, relative to the root (the address to which the request
     * is posted).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        if (null !== $valueXMLLocation) {
            $url->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $url->_getValueXMLLocation()) {
            $url->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getIfNoneMatch(): null|FHIRString
    {
        return $this->ifNoneMatch ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ETag values match, return a 304 Not Modified status. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifNoneMatch
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIfNoneMatch(null|string|FHIRStringPrimitive|FHIRString $ifNoneMatch,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $ifNoneMatch) {
            unset($this->ifNoneMatch);
            return $this;
        }
        if (!($ifNoneMatch instanceof FHIRString)) {
            $ifNoneMatch = new FHIRString(value: $ifNoneMatch);
        }
        if (null !== $valueXMLLocation) {
            $ifNoneMatch->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $ifNoneMatch->_getValueXMLLocation()) {
            $ifNoneMatch->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->ifNoneMatch = $ifNoneMatch;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant
     */
    public function getIfModifiedSince(): null|FHIRInstant
    {
        return $this->ifModifiedSince ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the last updated date matches. See the API
     * documentation for ["Conditional Read"](http.html#cread).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant $ifModifiedSince
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIfModifiedSince(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $ifModifiedSince,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $ifModifiedSince) {
            unset($this->ifModifiedSince);
            return $this;
        }
        if (!($ifModifiedSince instanceof FHIRInstant)) {
            $ifModifiedSince = new FHIRInstant(value: $ifModifiedSince);
        }
        if (null !== $valueXMLLocation) {
            $ifModifiedSince->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $ifModifiedSince->_getValueXMLLocation()) {
            $ifModifiedSince->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->ifModifiedSince = $ifModifiedSince;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getIfMatch(): null|FHIRString
    {
        return $this->ifMatch ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Only perform the operation if the Etag value matches. For more information, see
     * the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifMatch
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIfMatch(null|string|FHIRStringPrimitive|FHIRString $ifMatch,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $ifMatch) {
            unset($this->ifMatch);
            return $this;
        }
        if (!($ifMatch instanceof FHIRString)) {
            $ifMatch = new FHIRString(value: $ifMatch);
        }
        if (null !== $valueXMLLocation) {
            $ifMatch->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $ifMatch->_getValueXMLLocation()) {
            $ifMatch->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->ifMatch = $ifMatch;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getIfNoneExist(): null|FHIRString
    {
        return $this->ifNoneExist ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instruct the server not to perform the create if a specified resource already
     * exists. For further information, see the API documentation for ["Conditional
     * Create"](http.html#ccreate). This is just the query portion of the URL - what
     * follows the "?" (not including the "?").
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ifNoneExist
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIfNoneExist(null|string|FHIRStringPrimitive|FHIRString $ifNoneExist,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $ifNoneExist) {
            unset($this->ifNoneExist);
            return $this;
        }
        if (!($ifNoneExist instanceof FHIRString)) {
            $ifNoneExist = new FHIRString(value: $ifNoneExist);
        }
        if (null !== $valueXMLLocation) {
            $ifNoneExist->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $ifNoneExist->_getValueXMLLocation()) {
            $ifNoneExist->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->ifNoneExist = $ifNoneExist;
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
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_NONE_MATCH])) {
            $v = $this->getIfNoneMatch();
            foreach($validationRules[self::FIELD_IF_NONE_MATCH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IF_NONE_MATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_NONE_MATCH])) {
                        $errs[self::FIELD_IF_NONE_MATCH] = [];
                    }
                    $errs[self::FIELD_IF_NONE_MATCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_MODIFIED_SINCE])) {
            $v = $this->getIfModifiedSince();
            foreach($validationRules[self::FIELD_IF_MODIFIED_SINCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IF_MODIFIED_SINCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_MODIFIED_SINCE])) {
                        $errs[self::FIELD_IF_MODIFIED_SINCE] = [];
                    }
                    $errs[self::FIELD_IF_MODIFIED_SINCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_MATCH])) {
            $v = $this->getIfMatch();
            foreach($validationRules[self::FIELD_IF_MATCH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IF_MATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_MATCH])) {
                        $errs[self::FIELD_IF_MATCH] = [];
                    }
                    $errs[self::FIELD_IF_MATCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IF_NONE_EXIST])) {
            $v = $this->getIfNoneExist();
            foreach($validationRules[self::FIELD_IF_NONE_EXIST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IF_NONE_EXIST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IF_NONE_EXIST])) {
                        $errs[self::FIELD_IF_NONE_EXIST] = [];
                    }
                    $errs[self::FIELD_IF_NONE_EXIST][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundleRequest)) {
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
            } else if (self::FIELD_METHOD === $childName) {
                $v = new FHIRHTTPVerb(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMethod(FHIRHTTPVerb::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_URL === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IF_NONE_MATCH === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIfNoneMatch(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IF_MODIFIED_SINCE === $childName) {
                $v = new FHIRInstant(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIfModifiedSince(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IF_MATCH === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIfMatch(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IF_NONE_EXIST === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIfNoneExist(FHIRString::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_URL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IF_NONE_MATCH])) {
            $pt = $type->getIfNoneMatch();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IF_NONE_MATCH]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfNoneMatch(new FHIRString(
                    value: (string)$attributes[self::FIELD_IF_NONE_MATCH],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IF_MODIFIED_SINCE])) {
            $pt = $type->getIfModifiedSince();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IF_MODIFIED_SINCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfModifiedSince(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_IF_MODIFIED_SINCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IF_MATCH])) {
            $pt = $type->getIfMatch();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IF_MATCH]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfMatch(new FHIRString(
                    value: (string)$attributes[self::FIELD_IF_MATCH],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IF_NONE_EXIST])) {
            $pt = $type->getIfNoneExist();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IF_NONE_EXIST]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIfNoneExist(new FHIRString(
                    value: (string)$attributes[self::FIELD_IF_NONE_EXIST],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
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
            $xw->openRootNode('BundleRequest', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->_getFormattedValue());
        }
        if (isset($this->ifNoneMatch) && $this->ifNoneMatch->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IF_NONE_MATCH, $this->ifNoneMatch->getValue()?->_getFormattedValue());
        }
        if (isset($this->ifModifiedSince) && $this->ifModifiedSince->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IF_MODIFIED_SINCE, $this->ifModifiedSince->getValue()?->_getFormattedValue());
        }
        if (isset($this->ifMatch) && $this->ifMatch->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IF_MATCH, $this->ifMatch->getValue()?->_getFormattedValue());
        }
        if (isset($this->ifNoneExist) && $this->ifNoneExist->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IF_NONE_EXIST, $this->ifNoneExist->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ifNoneMatch) && $this->ifNoneMatch->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IF_NONE_MATCH);
            $this->ifNoneMatch->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ifModifiedSince) && $this->ifModifiedSince->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IF_MODIFIED_SINCE);
            $this->ifModifiedSince->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ifMatch) && $this->ifMatch->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IF_MATCH);
            $this->ifMatch->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ifNoneExist) && $this->ifNoneExist->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IF_NONE_EXIST);
            $this->ifNoneExist->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundleRequest)) {
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
        if (isset($json[self::FIELD_METHOD]) || isset($json[self::FIELD_METHOD_EXT]) || array_key_exists(self::FIELD_METHOD, $json) || array_key_exists(self::FIELD_METHOD_EXT, $json)) {
            $value = $json[self::FIELD_METHOD] ?? null;
            $ext = (array)($json[self::FIELD_METHOD_EXT] ?? []);
            $type->setMethod(FHIRHTTPVerb::jsonUnserialize(
                json: [FHIRHTTPVerb::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_URL]) || isset($json[self::FIELD_URL_EXT]) || array_key_exists(self::FIELD_URL, $json) || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $ext = (array)($json[self::FIELD_URL_EXT] ?? []);
            $type->setUrl(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_IF_NONE_MATCH]) || isset($json[self::FIELD_IF_NONE_MATCH_EXT]) || array_key_exists(self::FIELD_IF_NONE_MATCH, $json) || array_key_exists(self::FIELD_IF_NONE_MATCH_EXT, $json)) {
            $value = $json[self::FIELD_IF_NONE_MATCH] ?? null;
            $ext = (array)($json[self::FIELD_IF_NONE_MATCH_EXT] ?? []);
            $type->setIfNoneMatch(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_IF_MODIFIED_SINCE]) || isset($json[self::FIELD_IF_MODIFIED_SINCE_EXT]) || array_key_exists(self::FIELD_IF_MODIFIED_SINCE, $json) || array_key_exists(self::FIELD_IF_MODIFIED_SINCE_EXT, $json)) {
            $value = $json[self::FIELD_IF_MODIFIED_SINCE] ?? null;
            $ext = (array)($json[self::FIELD_IF_MODIFIED_SINCE_EXT] ?? []);
            $type->setIfModifiedSince(FHIRInstant::jsonUnserialize(
                json: [FHIRInstant::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_IF_MATCH]) || isset($json[self::FIELD_IF_MATCH_EXT]) || array_key_exists(self::FIELD_IF_MATCH, $json) || array_key_exists(self::FIELD_IF_MATCH_EXT, $json)) {
            $value = $json[self::FIELD_IF_MATCH] ?? null;
            $ext = (array)($json[self::FIELD_IF_MATCH_EXT] ?? []);
            $type->setIfMatch(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_IF_NONE_EXIST]) || isset($json[self::FIELD_IF_NONE_EXIST_EXT]) || array_key_exists(self::FIELD_IF_NONE_EXIST, $json) || array_key_exists(self::FIELD_IF_NONE_EXIST_EXT, $json)) {
            $value = $json[self::FIELD_IF_NONE_EXIST] ?? null;
            $ext = (array)($json[self::FIELD_IF_NONE_EXIST_EXT] ?? []);
            $type->setIfNoneExist(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->method)) {
            if (null !== ($val = $this->method->getValue())) {
                $out->method = $val;
            }
            $ext = $this->method->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_method = $ext;
            }
        }
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            $ext = $this->url->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_url = $ext;
            }
        }
        if (isset($this->ifNoneMatch)) {
            if (null !== ($val = $this->ifNoneMatch->getValue())) {
                $out->ifNoneMatch = $val;
            }
            $ext = $this->ifNoneMatch->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ifNoneMatch = $ext;
            }
        }
        if (isset($this->ifModifiedSince)) {
            if (null !== ($val = $this->ifModifiedSince->getValue())) {
                $out->ifModifiedSince = $val;
            }
            $ext = $this->ifModifiedSince->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ifModifiedSince = $ext;
            }
        }
        if (isset($this->ifMatch)) {
            if (null !== ($val = $this->ifMatch->getValue())) {
                $out->ifMatch = $val;
            }
            $ext = $this->ifMatch->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ifMatch = $ext;
            }
        }
        if (isset($this->ifNoneExist)) {
            if (null !== ($val = $this->ifNoneExist->getValue())) {
                $out->ifNoneExist = $val;
            }
            $ext = $this->ifNoneExist->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ifNoneExist = $ext;
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