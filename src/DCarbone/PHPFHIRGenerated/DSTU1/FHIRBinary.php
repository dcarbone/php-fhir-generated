<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

/**
 * Class FHIRBinary
 * @package \DCarbone\PHPFHIRGenerated\DSTU1
 */
class FHIRBinary implements PHPFHIRCommentContainerInterface, PHPFHIRContainedTypeInterface
{
    use PHPFHIRCommentContainerTrait;
    use PHPFHIRValidationAssertionsTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BINARY;

    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_ID = 'id';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive
     */
    protected $contentType = null;

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive
     */
    protected $id = null;

    /**
     * Validation map for fields in type Binary
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRBinary Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBinary::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_CONTENT_TYPE])) {
            $this->setContentType($data[self::FIELD_CONTENT_TYPE]);
        }
        if (isset($data[self::FIELD_ID])) {
            $this->setId($data[self::FIELD_ID]);
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
        return "<Binary{$xmlns}></Binary>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive $contentType
     * @return static
     */
    public function setContentType($contentType = null)
    {
        if (null === $contentType) {
            $this->contentType = null;
            return $this;
        }
        if ($contentType instanceof FHIRStringPrimitive) {
            $this->contentType = $contentType;
            return $this;
        }
        $this->contentType = new FHIRStringPrimitive($contentType);
        return $this;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive $id
     * @return static
     */
    public function setId($id = null)
    {
        if (null === $id) {
            $this->id = null;
            return $this;
        }
        if ($id instanceof FHIRIdPrimitive) {
            $this->id = $id;
            return $this;
        }
        $this->id = new FHIRIdPrimitive($id);
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
        if (null !== ($v = $this->getContentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ID] = $fieldErrs;
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary
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
                throw new \DomainException(sprintf('FHIRBinary::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBinary::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBinary;
        } elseif (!is_object($type) || !($type instanceof FHIRBinary)) {
            throw new \RuntimeException(sprintf(
                'FHIRBinary::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary or null, %s seen.',
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
        if (isset($children->contentType)) {
            $type->setContentType(FHIRStringPrimitive::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->contentType)) {
            $pt = $type->getContentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->contentType);
            } else {
                $type->setContentType((string)$attributes->contentType);
            }
        }
        if (isset($children->id)) {
            $type->setId(FHIRIdPrimitive::xmlUnserialize($children->id));
        }
        if (isset($attributes->id)) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->id);
            } else {
                $type->setId((string)$attributes->id);
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
        if (null !== ($v = $this->getContentType())) {
            $sxe->addAttribute(self::FIELD_CONTENT_TYPE, (string)$v);
        }
        if (null !== ($v = $this->getId())) {
            $sxe->addAttribute(self::FIELD_ID, (string)$v);
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
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v;
        }
        if (null !== ($v = $this->getId())) {
            $a[self::FIELD_ID] = $v;
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