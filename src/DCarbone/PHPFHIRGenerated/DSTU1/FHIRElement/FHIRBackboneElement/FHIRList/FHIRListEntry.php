<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList;

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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A set of information summarized from a list of other resources.
 *
 * Class FHIRListEntry
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList
 */
class FHIRListEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY;
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DELETED = 'deleted';
    const FIELD_DELETED_EXT = '_deleted';
    const FIELD_FLAG = 'flag';
    const FIELD_ITEM = 'item';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this item was added to the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this item is marked as deleted in the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $deleted = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The flag allows the system constructing the list to make one or more statements
     * about the role and significance of the item in the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected $flag = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which data was derived.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $item = null;

    /**
     * Validation map for fields in type List.Entry
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRListEntry Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRListEntry::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DELETED]) || isset($data[self::FIELD_DELETED_EXT])) {
            if (isset($data[self::FIELD_DELETED])) {
                $value = $data[self::FIELD_DELETED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DELETED_EXT]) && is_array($data[self::FIELD_DELETED_EXT])) {
                $ext = $data[self::FIELD_DELETED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDeleted($value);
                } else if (is_array($value)) {
                    $this->setDeleted(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDeleted(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeleted(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_FLAG])) {
            if (is_array($data[self::FIELD_FLAG])) {
                foreach($data[self::FIELD_FLAG] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFlag($v);
                    } else {
                        $this->addFlag(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_FLAG] instanceof FHIRCodeableConcept) {
                $this->addFlag($data[self::FIELD_FLAG]);
            } else {
                $this->addFlag(new FHIRCodeableConcept($data[self::FIELD_FLAG]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if ($data[self::FIELD_ITEM] instanceof FHIRResourceReference) {
                $this->setItem($data[self::FIELD_ITEM]);
            } else {
                $this->setItem(new FHIRResourceReference($data[self::FIELD_ITEM]));
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
        return "<ListEntry{$xmlns}></ListEntry>";
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this item was added to the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this item was added to the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this item is marked as deleted in the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this item is marked as deleted in the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $deleted
     * @return static
     */
    public function setDeleted($deleted = null)
    {
        if (null === $deleted) {
            $this->deleted = null;
            return $this;
        }
        if ($deleted instanceof FHIRBoolean) {
            $this->deleted = $deleted;
            return $this;
        }
        $this->deleted = new FHIRBoolean($deleted);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The flag allows the system constructing the list to make one or more statements
     * about the role and significance of the item in the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The flag allows the system constructing the list to make one or more statements
     * about the role and significance of the item in the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $flag
     * @return static
     */
    public function addFlag(FHIRCodeableConcept $flag = null)
    {
        $this->flag[] = $flag;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The flag allows the system constructing the list to make one or more statements
     * about the role and significance of the item in the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $flag
     * @return static
     */
    public function setFlag(array $flag = [])
    {
        $this->flag = [];
        if ([] === $flag) {
            return $this;
        }
        foreach($flag as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFlag($v);
            } else {
                $this->addFlag(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which data was derived.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * A reference to the actual resource from which data was derived.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $item
     * @return static
     */
    public function setItem(FHIRResourceReference $item = null)
    {
        $this->item = $item;
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
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeleted())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DELETED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFlag())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FLAG, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DELETED])) {
            $v = $this->getDeleted();
            foreach($validationRules[self::FIELD_DELETED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY, self::FIELD_DELETED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DELETED])) {
                        $errs[self::FIELD_DELETED] = [];
                    }
                    $errs[self::FIELD_DELETED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FLAG])) {
            $v = $this->getFlag();
            foreach($validationRules[self::FIELD_FLAG] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY, self::FIELD_FLAG, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FLAG])) {
                        $errs[self::FIELD_FLAG] = [];
                    }
                    $errs[self::FIELD_FLAG][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry
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
                throw new \DomainException(sprintf('FHIRListEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRListEntry::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRListEntry;
        } elseif (!is_object($type) || !($type instanceof FHIRListEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRListEntry::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry or null, %s seen.',
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
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->deleted)) {
            $type->setDeleted(FHIRBoolean::xmlUnserialize($children->deleted));
        }
        if (isset($attributes->deleted)) {
            $pt = $type->getDeleted();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deleted);
            } else {
                $type->setDeleted((string)$attributes->deleted);
            }
        }
        if (isset($children->flag)) {
            foreach($children->flag as $child) {
                $type->addFlag(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->item)) {
            $type->setItem(FHIRResourceReference::xmlUnserialize($children->item));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeleted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DELETED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFlag())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FLAG, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getItem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDeleted())) {
            $a[self::FIELD_DELETED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DELETED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getFlag())) {
            $a[self::FIELD_FLAG] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FLAG][] = $v;
            }
        }
        if (null !== ($v = $this->getItem())) {
            $a[self::FIELD_ITEM] = $v;
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