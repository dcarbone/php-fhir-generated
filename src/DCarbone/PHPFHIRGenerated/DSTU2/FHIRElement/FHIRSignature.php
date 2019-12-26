<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A digital signature along with supporting context. The signature may be
 * electronic/cryptographic in nature, or a graphical image representing a
 * hand-written signature, or a signature process. Different Signature approaches
 * have different utilities.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSignature
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRSignature extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SIGNATURE;
    const FIELD_BLOB = 'blob';
    const FIELD_BLOB_EXT = '_blob';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_TYPE = 'type';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';
    const FIELD_WHO_REFERENCE = 'whoReference';
    const FIELD_WHO_URI = 'whoUri';
    const FIELD_WHO_URI_EXT = '_whoUri';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    protected $blob = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $contentType = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $type = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected $when = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $whoReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $whoUri = null;

    /**
     * Validation map for fields in type Signature
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSignature Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BLOB]) || isset($data[self::FIELD_BLOB_EXT])) {
            if (isset($data[self::FIELD_BLOB])) {
                $value = $data[self::FIELD_BLOB];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BLOB_EXT]) && is_array($data[self::FIELD_BLOB_EXT])) {
                $ext = $data[self::FIELD_BLOB_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setBlob($value);
                } else if (is_array($value)) {
                    $this->setBlob(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setBlob(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBlob(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
            if (isset($data[self::FIELD_CONTENT_TYPE])) {
                $value = $data[self::FIELD_CONTENT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT])) {
                $ext = $data[self::FIELD_CONTENT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setContentType($value);
                } else if (is_array($value)) {
                    $this->setContentType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContentType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_WHEN]) || isset($data[self::FIELD_WHEN_EXT])) {
            if (isset($data[self::FIELD_WHEN])) {
                $value = $data[self::FIELD_WHEN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT])) {
                $ext = $data[self::FIELD_WHEN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setWhen($value);
                } else if (is_array($value)) {
                    $this->setWhen(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setWhen(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWhen(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_WHO_REFERENCE])) {
            if ($data[self::FIELD_WHO_REFERENCE] instanceof FHIRReference) {
                $this->setWhoReference($data[self::FIELD_WHO_REFERENCE]);
            } else {
                $this->setWhoReference(new FHIRReference($data[self::FIELD_WHO_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHO_URI]) || isset($data[self::FIELD_WHO_URI_EXT])) {
            if (isset($data[self::FIELD_WHO_URI])) {
                $value = $data[self::FIELD_WHO_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WHO_URI_EXT]) && is_array($data[self::FIELD_WHO_URI_EXT])) {
                $ext = $data[self::FIELD_WHO_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setWhoUri($value);
                } else if (is_array($value)) {
                    $this->setWhoUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setWhoUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWhoUri(new FHIRUri($ext));
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
        return "<Signature{$xmlns}></Signature>";
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary $blob
     * @return static
     */
    public function setBlob($blob = null)
    {
        if (null === $blob) {
            $this->blob = null;
            return $this;
        }
        if ($blob instanceof FHIRBase64Binary) {
            $this->blob = $blob;
            return $this;
        }
        $this->blob = new FHIRBase64Binary($blob);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $contentType
     * @return static
     */
    public function setContentType($contentType = null)
    {
        if (null === $contentType) {
            $this->contentType = null;
            return $this;
        }
        if ($contentType instanceof FHIRCode) {
            $this->contentType = $contentType;
            return $this;
        }
        $this->contentType = new FHIRCode($contentType);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function addType(FHIRCoding $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $when
     * @return static
     */
    public function setWhen($when = null)
    {
        if (null === $when) {
            $this->when = null;
            return $this;
        }
        if ($when instanceof FHIRInstant) {
            $this->when = $when;
            return $this;
        }
        $this->when = new FHIRInstant($when);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $whoReference
     * @return static
     */
    public function setWhoReference(FHIRReference $whoReference = null)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the person that signed the
     * certificate (e.g. the signature used their private key).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $whoUri
     * @return static
     */
    public function setWhoUri($whoUri = null)
    {
        if (null === $whoUri) {
            $this->whoUri = null;
            return $this;
        }
        if ($whoUri instanceof FHIRUri) {
            $this->whoUri = $whoUri;
            return $this;
        }
        $this->whoUri = new FHIRUri($whoUri);
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
        if (null !== ($v = $this->getBlob())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BLOB] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getWhen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhoReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhoUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO_URI] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BLOB])) {
            $v = $this->getBlob();
            foreach($validationRules[self::FIELD_BLOB] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_BLOB, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BLOB])) {
                        $errs[self::FIELD_BLOB] = [];
                    }
                    $errs[self::FIELD_BLOB][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
            $v = $this->getContentType();
            foreach($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_CONTENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
                        $errs[self::FIELD_CONTENT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN])) {
            $v = $this->getWhen();
            foreach($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO_REFERENCE])) {
            $v = $this->getWhoReference();
            foreach($validationRules[self::FIELD_WHO_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_WHO_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO_REFERENCE])) {
                        $errs[self::FIELD_WHO_REFERENCE] = [];
                    }
                    $errs[self::FIELD_WHO_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO_URI])) {
            $v = $this->getWhoUri();
            foreach($validationRules[self::FIELD_WHO_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_WHO_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO_URI])) {
                        $errs[self::FIELD_WHO_URI] = [];
                    }
                    $errs[self::FIELD_WHO_URI][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature
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
                throw new \DomainException(sprintf('FHIRSignature::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSignature::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSignature;
        } elseif (!is_object($type) || !($type instanceof FHIRSignature)) {
            throw new \RuntimeException(sprintf(
                'FHIRSignature::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->blob)) {
            $type->setBlob(FHIRBase64Binary::xmlUnserialize($children->blob));
        }
        if (isset($attributes->blob)) {
            $pt = $type->getBlob();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->blob);
            } else {
                $type->setBlob((string)$attributes->blob);
            }
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRCode::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->contentType)) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->contentType);
            } else {
                $type->setContentType((string)$attributes->contentType);
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->when)) {
            $type->setWhen(FHIRInstant::xmlUnserialize($children->when));
        }
        if (isset($attributes->when)) {
            $pt = $type->getWhen();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->when);
            } else {
                $type->setWhen((string)$attributes->when);
            }
        }
        if (isset($children->whoReference)) {
            $type->setWhoReference(FHIRReference::xmlUnserialize($children->whoReference));
        }
        if (isset($children->whoUri)) {
            $type->setWhoUri(FHIRUri::xmlUnserialize($children->whoUri));
        }
        if (isset($attributes->whoUri)) {
            $pt = $type->getWhoUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->whoUri);
            } else {
                $type->setWhoUri((string)$attributes->whoUri);
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
        if (null !== ($v = $this->getBlob())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BLOB, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhoReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhoUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_URI, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBlob())) {
            $a[self::FIELD_BLOB] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_BLOB_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_CONTENT_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_WHEN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhoReference())) {
            $a[self::FIELD_WHO_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getWhoUri())) {
            $a[self::FIELD_WHO_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_WHO_URI_EXT] = $enc;
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