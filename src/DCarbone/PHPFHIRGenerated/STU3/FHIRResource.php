<?php

namespace DCarbone\PHPFHIRGenerated\STU3;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;

/**
 * This is the base resource type for everything.
 *
 * Class FHIRResource
 * @package \DCarbone\PHPFHIRGenerated\STU3
 */
class FHIRResource implements PHPFHIRCommentContainerInterface, PHPFHIRTypeInterface
{
    use PHPFHIRCommentContainerTrait;
    use PHPFHIRValidationAssertionsTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE;

    const FIELD_ID = 'id';
    const FIELD_ID_EXT = '_id';
    const FIELD_IMPLICIT_RULES = 'implicitRules';
    const FIELD_IMPLICIT_RULES_EXT = '_implicitRules';
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_META = 'meta';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The logical id of the resource, as used in the URL for the resource. Once
     * assigned, this value never changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $id = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a set of rules that were followed when the resource was
     * constructed, and which must be understood when processing the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $implicitRules = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The base language in which the resource is written.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $language = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The metadata about the resource. This is content that is maintained by the
     * infrastructure. Changes to the content may not always be associated with version
     * changes to the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected $meta = null;

    /**
     * Validation map for fields in type Resource
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        if (isset($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
            if (is_array($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_setFHIRComments($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            } else if (is_string($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_addFHIRComment($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            }
        }
        if (isset($data[self::FIELD_ID]) || isset($data[self::FIELD_ID_EXT])) {
            if (isset($data[self::FIELD_ID])) {
                $value = $data[self::FIELD_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ID_EXT]) && is_array($data[self::FIELD_ID_EXT])) {
                $ext = $data[self::FIELD_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setId($value);
                } else if (is_array($value)) {
                    $this->setId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_IMPLICIT_RULES]) || isset($data[self::FIELD_IMPLICIT_RULES_EXT])) {
            if (isset($data[self::FIELD_IMPLICIT_RULES])) {
                $value = $data[self::FIELD_IMPLICIT_RULES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IMPLICIT_RULES_EXT]) && is_array($data[self::FIELD_IMPLICIT_RULES_EXT])) {
                $ext = $data[self::FIELD_IMPLICIT_RULES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setImplicitRules($value);
                } else if (is_array($value)) {
                    $this->setImplicitRules(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setImplicitRules(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setImplicitRules(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE]) || isset($data[self::FIELD_LANGUAGE_EXT])) {
            if (isset($data[self::FIELD_LANGUAGE])) {
                $value = $data[self::FIELD_LANGUAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LANGUAGE_EXT]) && is_array($data[self::FIELD_LANGUAGE_EXT])) {
                $ext = $data[self::FIELD_LANGUAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setLanguage($value);
                } else if (is_array($value)) {
                    $this->setLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLanguage(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_META])) {
            if ($data[self::FIELD_META] instanceof FHIRMeta) {
                $this->setMeta($data[self::FIELD_META]);
            } else {
                $this->setMeta(new FHIRMeta($data[self::FIELD_META]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<Resource{$xmlns}></Resource>";
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The logical id of the resource, as used in the URL for the resource. Once
     * assigned, this value never changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The logical id of the resource, as used in the URL for the resource. Once
     * assigned, this value never changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $id
     * @return static
     */
    public function setId($id = null)
    {
        if (null === $id) {
            $this->id = null;
            return $this;
        }
        if ($id instanceof FHIRId) {
            $this->id = $id;
            return $this;
        }
        $this->id = new FHIRId($id);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a set of rules that were followed when the resource was
     * constructed, and which must be understood when processing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getImplicitRules()
    {
        return $this->implicitRules;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a set of rules that were followed when the resource was
     * constructed, and which must be understood when processing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $implicitRules
     * @return static
     */
    public function setImplicitRules($implicitRules = null)
    {
        if (null === $implicitRules) {
            $this->implicitRules = null;
            return $this;
        }
        if ($implicitRules instanceof FHIRUri) {
            $this->implicitRules = $implicitRules;
            return $this;
        }
        $this->implicitRules = new FHIRUri($implicitRules);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The base language in which the resource is written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The base language in which the resource is written.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $language
     * @return static
     */
    public function setLanguage($language = null)
    {
        if (null === $language) {
            $this->language = null;
            return $this;
        }
        if ($language instanceof FHIRCode) {
            $this->language = $language;
            return $this;
        }
        $this->language = new FHIRCode($language);
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The metadata about the resource. This is content that is maintained by the
     * infrastructure. Changes to the content may not always be associated with version
     * changes to the resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The metadata about the resource. This is content that is maintained by the
     * infrastructure. Changes to the content may not always be associated with version
     * changes to the resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $meta
     * @return static
     */
    public function setMeta(FHIRMeta $meta = null)
    {
        $this->meta = $meta;
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
        $errs = [];
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImplicitRules())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMPLICIT_RULES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LANGUAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_META] = $fieldErrs;
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource
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
                throw new \DomainException(sprintf('FHIRResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRResource;
        } elseif (!is_object($type) || !($type instanceof FHIRResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->id)) {
            $type->setId(FHIRId::xmlUnserialize($children->id));
        }
        if (isset($attributes->id)) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->id);
            } else {
                $type->setId((string)$attributes->id);
            }
        }
        if (isset($children->implicitRules)) {
            $type->setImplicitRules(FHIRUri::xmlUnserialize($children->implicitRules));
        }
        if (isset($attributes->implicitRules)) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->implicitRules);
            } else {
                $type->setImplicitRules((string)$attributes->implicitRules);
            }
        }
        if (isset($children->language)) {
            $type->setLanguage(FHIRCode::xmlUnserialize($children->language));
        }
        if (isset($attributes->language)) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->language);
            } else {
                $type->setLanguage((string)$attributes->language);
            }
        }
        if (isset($children->meta)) {
            $type->setMeta(FHIRMeta::xmlUnserialize($children->meta));
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
        if (null !== ($v = $this->getId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getImplicitRules())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLICIT_RULES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLanguage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_META, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = [];
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        if (null !== ($v = $this->getId())) {
            $a[self::FIELD_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getImplicitRules())) {
            $a[self::FIELD_IMPLICIT_RULES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_IMPLICIT_RULES_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_LANGUAGE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMeta())) {
            $a[self::FIELD_META] = $v;
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