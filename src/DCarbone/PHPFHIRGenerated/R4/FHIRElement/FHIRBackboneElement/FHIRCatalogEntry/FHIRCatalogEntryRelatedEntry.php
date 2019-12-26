<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCatalogEntryRelationType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Catalog entries are wrappers that contextualize items included in a catalog.
 *
 * Class FHIRCatalogEntryRelatedEntry
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry
 */
class FHIRCatalogEntryRelatedEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY;
    const FIELD_ITEM = 'item';
    const FIELD_RELATIONTYPE = 'relationtype';
    const FIELD_RELATIONTYPE_EXT = '_relationtype';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $item = null;

    /**
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCatalogEntryRelationType
     */
    protected $relationtype = null;

    /**
     * Validation map for fields in type CatalogEntry.RelatedEntry
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCatalogEntryRelatedEntry Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntryRelatedEntry::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ITEM])) {
            if ($data[self::FIELD_ITEM] instanceof FHIRReference) {
                $this->setItem($data[self::FIELD_ITEM]);
            } else {
                $this->setItem(new FHIRReference($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_RELATIONTYPE]) || isset($data[self::FIELD_RELATIONTYPE_EXT])) {
            if (isset($data[self::FIELD_RELATIONTYPE])) {
                $value = $data[self::FIELD_RELATIONTYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RELATIONTYPE_EXT]) && is_array($data[self::FIELD_RELATIONTYPE_EXT])) {
                $ext = $data[self::FIELD_RELATIONTYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCatalogEntryRelationType) {
                    $this->setRelationtype($value);
                } else if (is_array($value)) {
                    $this->setRelationtype(new FHIRCatalogEntryRelationType(array_merge($ext, $value)));
                } else {
                    $this->setRelationtype(new FHIRCatalogEntryRelationType([FHIRCatalogEntryRelationType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRelationtype(new FHIRCatalogEntryRelationType($ext));
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
        return "<CatalogEntryRelatedEntry{$xmlns}></CatalogEntryRelatedEntry>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $item
     * @return static
     */
    public function setItem(FHIRReference $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCatalogEntryRelationType
     */
    public function getRelationtype()
    {
        return $this->relationtype;
    }

    /**
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCatalogEntryRelationType $relationtype
     * @return static
     */
    public function setRelationtype(FHIRCatalogEntryRelationType $relationtype = null)
    {
        $this->relationtype = $relationtype;
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
        if (null !== ($v = $this->getItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationtype())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONTYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONTYPE])) {
            $v = $this->getRelationtype();
            foreach($validationRules[self::FIELD_RELATIONTYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY, self::FIELD_RELATIONTYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONTYPE])) {
                        $errs[self::FIELD_RELATIONTYPE] = [];
                    }
                    $errs[self::FIELD_RELATIONTYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry
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
                throw new \DomainException(sprintf('FHIRCatalogEntryRelatedEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCatalogEntryRelatedEntry::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCatalogEntryRelatedEntry;
        } elseif (!is_object($type) || !($type instanceof FHIRCatalogEntryRelatedEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRCatalogEntryRelatedEntry::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry or null, %s seen.',
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
        if (isset($children->item)) {
            $type->setItem(FHIRReference::xmlUnserialize($children->item));
        }
        if (isset($children->relationtype)) {
            $type->setRelationtype(FHIRCatalogEntryRelationType::xmlUnserialize($children->relationtype));
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
        if (null !== ($v = $this->getItem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRelationtype())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONTYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getItem())) {
            $a[self::FIELD_ITEM] = $v;
        }
        if (null !== ($v = $this->getRelationtype())) {
            $a[self::FIELD_RELATIONTYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCatalogEntryRelationType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCatalogEntryRelationType::FIELD_VALUE]);
                $a[self::FIELD_RELATIONTYPE_EXT] = $enc;
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