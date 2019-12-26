<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A set of healthcare-related information that is assembled together into a single
 * logical document that provides a single coherent statement of meaning,
 * establishes its own context and that has clinical attestation with regard to who
 * is making the statement. While a Composition defines the structure, it does not
 * actually contain the content: rather the full content of a document is contained
 * in a Bundle, of which the Composition is the first resource contained.
 *
 * Class FHIRCompositionAttester
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionAttester extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER;
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_PARTY = 'party';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode[]
     */
    protected $mode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $party = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $time = null;

    /**
     * Validation map for fields in type Composition.Attester
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_MODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCompositionAttester Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionAttester::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
            if (isset($data[self::FIELD_MODE])) {
                $value = $data[self::FIELD_MODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])) {
                $ext = $data[self::FIELD_MODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCompositionAttestationMode) {
                    $this->addMode($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCompositionAttestationMode) {
                            $this->addMode($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addMode(new FHIRCompositionAttestationMode(array_merge($v, $iext)));
                            } else {
                                $this->addMode(new FHIRCompositionAttestationMode([FHIRCompositionAttestationMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addMode(new FHIRCompositionAttestationMode(array_merge($ext, $value)));
                } else {
                    $this->addMode(new FHIRCompositionAttestationMode([FHIRCompositionAttestationMode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addMode(new FHIRCompositionAttestationMode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PARTY])) {
            if ($data[self::FIELD_PARTY] instanceof FHIRReference) {
                $this->setParty($data[self::FIELD_PARTY]);
            } else {
                $this->setParty(new FHIRReference($data[self::FIELD_PARTY]));
            }
        }
        if (isset($data[self::FIELD_TIME]) || isset($data[self::FIELD_TIME_EXT])) {
            if (isset($data[self::FIELD_TIME])) {
                $value = $data[self::FIELD_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT])) {
                $ext = $data[self::FIELD_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTime($value);
                } else if (is_array($value)) {
                    $this->setTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTime(new FHIRDateTime($ext));
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
        return "<CompositionAttester{$xmlns}></CompositionAttester>";
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode $mode
     * @return static
     */
    public function addMode(FHIRCompositionAttestationMode $mode = null)
    {
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode[] $mode
     * @return static
     */
    public function setMode(array $mode = [])
    {
        $this->mode = [];
        if ([] === $mode) {
            return $this;
        }
        foreach($mode as $v) {
            if ($v instanceof FHIRCompositionAttestationMode) {
                $this->addMode($v);
            } else {
                $this->addMode(new FHIRCompositionAttestationMode($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $party
     * @return static
     */
    public function setParty(FHIRReference $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $time
     * @return static
     */
    public function setTime($time = null)
    {
        if (null === $time) {
            $this->time = null;
            return $this;
        }
        if ($time instanceof FHIRDateTime) {
            $this->time = $time;
            return $this;
        }
        $this->time = new FHIRDateTime($time);
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
        if ([] !== ($vs = $this->getMode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getParty())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTY])) {
            $v = $this->getParty();
            foreach($validationRules[self::FIELD_PARTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTY])) {
                        $errs[self::FIELD_PARTY] = [];
                    }
                    $errs[self::FIELD_PARTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME])) {
            $v = $this->getTime();
            foreach($validationRules[self::FIELD_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME])) {
                        $errs[self::FIELD_TIME] = [];
                    }
                    $errs[self::FIELD_TIME][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester
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
                throw new \DomainException(sprintf('FHIRCompositionAttester::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCompositionAttester::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCompositionAttester;
        } elseif (!is_object($type) || !($type instanceof FHIRCompositionAttester)) {
            throw new \RuntimeException(sprintf(
                'FHIRCompositionAttester::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester or null, %s seen.',
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
        if (isset($children->mode)) {
            foreach($children->mode as $child) {
                $type->addMode(FHIRCompositionAttestationMode::xmlUnserialize($child));
            }
        }
        if (isset($children->party)) {
            $type->setParty(FHIRReference::xmlUnserialize($children->party));
        }
        if (isset($children->time)) {
            $type->setTime(FHIRDateTime::xmlUnserialize($children->time));
        }
        if (isset($attributes->time)) {
            $pt = $type->getTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->time);
            } else {
                $type->setTime((string)$attributes->time);
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
        if ([] !== ($vs = $this->getMode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getParty())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getMode())) {
            $a[self::FIELD_MODE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCompositionAttestationMode::FIELD_VALUE]) || array_key_exists(FHIRCompositionAttestationMode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCompositionAttestationMode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_MODE_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getParty())) {
            $a[self::FIELD_PARTY] = $v;
        }
        if (null !== ($v = $this->getTime())) {
            $a[self::FIELD_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_TIME_EXT] = $enc;
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