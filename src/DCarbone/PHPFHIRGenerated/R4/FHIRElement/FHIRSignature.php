<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A signature along with supporting context. The signature may be a digital
 * signature that is cryptographic in nature, or some other signature acceptable to
 * the domain. This other signature may be as simple as a graphical image
 * representing a hand-written signature, or a signature ceremony Different
 * signature approaches have different utilities.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSignature
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRSignature extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SIGNATURE;
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';
    const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    const FIELD_SIG_FORMAT = 'sigFormat';
    const FIELD_SIG_FORMAT_EXT = '_sigFormat';
    const FIELD_TARGET_FORMAT = 'targetFormat';
    const FIELD_TARGET_FORMAT_EXT = '_targetFormat';
    const FIELD_TYPE = 'type';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';
    const FIELD_WHO = 'who';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    protected $data = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $onBehalfOf = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jose for JWS,
     * and image/* for a graphical image of a signature, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $sigFormat = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the target resources signed
     * by the signature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $targetFormat = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    protected $type = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $when = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $who = null;

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
        if (isset($data[self::FIELD_DATA]) || isset($data[self::FIELD_DATA_EXT])) {
            if (isset($data[self::FIELD_DATA])) {
                $value = $data[self::FIELD_DATA];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) {
                $ext = $data[self::FIELD_DATA_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setData(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF])) {
            if ($data[self::FIELD_ON_BEHALF_OF] instanceof FHIRReference) {
                $this->setOnBehalfOf($data[self::FIELD_ON_BEHALF_OF]);
            } else {
                $this->setOnBehalfOf(new FHIRReference($data[self::FIELD_ON_BEHALF_OF]));
            }
        }
        if (isset($data[self::FIELD_SIG_FORMAT]) || isset($data[self::FIELD_SIG_FORMAT_EXT])) {
            if (isset($data[self::FIELD_SIG_FORMAT])) {
                $value = $data[self::FIELD_SIG_FORMAT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SIG_FORMAT_EXT]) && is_array($data[self::FIELD_SIG_FORMAT_EXT])) {
                $ext = $data[self::FIELD_SIG_FORMAT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setSigFormat($value);
                } else if (is_array($value)) {
                    $this->setSigFormat(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setSigFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSigFormat(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET_FORMAT]) || isset($data[self::FIELD_TARGET_FORMAT_EXT])) {
            if (isset($data[self::FIELD_TARGET_FORMAT])) {
                $value = $data[self::FIELD_TARGET_FORMAT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TARGET_FORMAT_EXT]) && is_array($data[self::FIELD_TARGET_FORMAT_EXT])) {
                $ext = $data[self::FIELD_TARGET_FORMAT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setTargetFormat($value);
                } else if (is_array($value)) {
                    $this->setTargetFormat(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setTargetFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTargetFormat(new FHIRCode($ext));
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
        if (isset($data[self::FIELD_WHO])) {
            if ($data[self::FIELD_WHO] instanceof FHIRReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRReference($data[self::FIELD_WHO]));
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
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $data
     * @return static
     */
    public function setData($data = null)
    {
        if (null === $data) {
            $this->data = null;
            return $this;
        }
        if ($data instanceof FHIRBase64Binary) {
            $this->data = $data;
            return $this;
        }
        $this->data = new FHIRBase64Binary($data);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $onBehalfOf
     * @return static
     */
    public function setOnBehalfOf(FHIRReference $onBehalfOf = null)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jose for JWS,
     * and image/* for a graphical image of a signature, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getSigFormat()
    {
        return $this->sigFormat;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jose for JWS,
     * and image/* for a graphical image of a signature, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $sigFormat
     * @return static
     */
    public function setSigFormat($sigFormat = null)
    {
        if (null === $sigFormat) {
            $this->sigFormat = null;
            return $this;
        }
        if ($sigFormat instanceof FHIRCode) {
            $this->sigFormat = $sigFormat;
            return $this;
        }
        $this->sigFormat = new FHIRCode($sigFormat);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the target resources signed
     * by the signature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getTargetFormat()
    {
        return $this->targetFormat;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the target resources signed
     * by the signature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $targetFormat
     * @return static
     */
    public function setTargetFormat($targetFormat = null)
    {
        if (null === $targetFormat) {
            $this->targetFormat = null;
            return $this;
        }
        if ($targetFormat instanceof FHIRCode) {
            $this->targetFormat = $targetFormat;
            return $this;
        }
        $this->targetFormat = new FHIRCode($targetFormat);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $type
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[] $type
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
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $when
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
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $who
     * @return static
     */
    public function setWho(FHIRReference $who = null)
    {
        $this->who = $who;
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
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ON_BEHALF_OF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSigFormat())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIG_FORMAT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetFormat())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_FORMAT] = $fieldErrs;
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
        if (null !== ($v = $this->getWho())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_BEHALF_OF])) {
            $v = $this->getOnBehalfOf();
            foreach($validationRules[self::FIELD_ON_BEHALF_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_ON_BEHALF_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_BEHALF_OF])) {
                        $errs[self::FIELD_ON_BEHALF_OF] = [];
                    }
                    $errs[self::FIELD_ON_BEHALF_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIG_FORMAT])) {
            $v = $this->getSigFormat();
            foreach($validationRules[self::FIELD_SIG_FORMAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_SIG_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIG_FORMAT])) {
                        $errs[self::FIELD_SIG_FORMAT] = [];
                    }
                    $errs[self::FIELD_SIG_FORMAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_FORMAT])) {
            $v = $this->getTargetFormat();
            foreach($validationRules[self::FIELD_TARGET_FORMAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_TARGET_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_FORMAT])) {
                        $errs[self::FIELD_TARGET_FORMAT] = [];
                    }
                    $errs[self::FIELD_TARGET_FORMAT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SIGNATURE, self::FIELD_WHO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO])) {
                        $errs[self::FIELD_WHO] = [];
                    }
                    $errs[self::FIELD_WHO][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
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
                'FHIRSignature::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature or null, %s seen.',
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
        if (isset($children->data)) {
            $type->setData(FHIRBase64Binary::xmlUnserialize($children->data));
        }
        if (isset($attributes->data)) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->data);
            } else {
                $type->setData((string)$attributes->data);
            }
        }
        if (isset($children->onBehalfOf)) {
            $type->setOnBehalfOf(FHIRReference::xmlUnserialize($children->onBehalfOf));
        }
        if (isset($children->sigFormat)) {
            $type->setSigFormat(FHIRCode::xmlUnserialize($children->sigFormat));
        }
        if (isset($attributes->sigFormat)) {
            $pt = $type->getSigFormat();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sigFormat);
            } else {
                $type->setSigFormat((string)$attributes->sigFormat);
            }
        }
        if (isset($children->targetFormat)) {
            $type->setTargetFormat(FHIRCode::xmlUnserialize($children->targetFormat));
        }
        if (isset($attributes->targetFormat)) {
            $pt = $type->getTargetFormat();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->targetFormat);
            } else {
                $type->setTargetFormat((string)$attributes->targetFormat);
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
        if (isset($children->who)) {
            $type->setWho(FHIRReference::xmlUnserialize($children->who));
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
        if (null !== ($v = $this->getData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSigFormat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIG_FORMAT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTargetFormat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_FORMAT, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getWho())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getData())) {
            $a[self::FIELD_DATA] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_DATA_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $a[self::FIELD_ON_BEHALF_OF] = $v;
        }
        if (null !== ($v = $this->getSigFormat())) {
            $a[self::FIELD_SIG_FORMAT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_SIG_FORMAT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTargetFormat())) {
            $a[self::FIELD_TARGET_FORMAT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_TARGET_FORMAT_EXT] = $enc;
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
        if (null !== ($v = $this->getWho())) {
            $a[self::FIELD_WHO] = $v;
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