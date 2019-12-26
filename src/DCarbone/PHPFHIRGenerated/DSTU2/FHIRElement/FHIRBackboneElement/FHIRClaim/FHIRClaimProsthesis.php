<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimProsthesis
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimProsthesis extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS;
    const FIELD_INITIAL = 'initial';
    const FIELD_INITIAL_EXT = '_initial';
    const FIELD_PRIOR_DATE = 'priorDate';
    const FIELD_PRIOR_DATE_EXT = '_priorDate';
    const FIELD_PRIOR_MATERIAL = 'priorMaterial';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this is the initial placement of a fixed prosthesis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $initial = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of the initial placement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $priorDate = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material of the prior denture or bridge prosthesis. (Oral).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $priorMaterial = null;

    /**
     * Validation map for fields in type Claim.Prosthesis
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimProsthesis Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimProsthesis::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INITIAL]) || isset($data[self::FIELD_INITIAL_EXT])) {
            if (isset($data[self::FIELD_INITIAL])) {
                $value = $data[self::FIELD_INITIAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INITIAL_EXT]) && is_array($data[self::FIELD_INITIAL_EXT])) {
                $ext = $data[self::FIELD_INITIAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInitial($value);
                } else if (is_array($value)) {
                    $this->setInitial(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInitial(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setInitial(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PRIOR_DATE]) || isset($data[self::FIELD_PRIOR_DATE_EXT])) {
            if (isset($data[self::FIELD_PRIOR_DATE])) {
                $value = $data[self::FIELD_PRIOR_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIOR_DATE_EXT]) && is_array($data[self::FIELD_PRIOR_DATE_EXT])) {
                $ext = $data[self::FIELD_PRIOR_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setPriorDate($value);
                } else if (is_array($value)) {
                    $this->setPriorDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setPriorDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriorDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_PRIOR_MATERIAL])) {
            if ($data[self::FIELD_PRIOR_MATERIAL] instanceof FHIRCoding) {
                $this->setPriorMaterial($data[self::FIELD_PRIOR_MATERIAL]);
            } else {
                $this->setPriorMaterial(new FHIRCoding($data[self::FIELD_PRIOR_MATERIAL]));
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
        return "<ClaimProsthesis{$xmlns}></ClaimProsthesis>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this is the initial placement of a fixed prosthesis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this is the initial placement of a fixed prosthesis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $initial
     * @return static
     */
    public function setInitial($initial = null)
    {
        if (null === $initial) {
            $this->initial = null;
            return $this;
        }
        if ($initial instanceof FHIRBoolean) {
            $this->initial = $initial;
            return $this;
        }
        $this->initial = new FHIRBoolean($initial);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of the initial placement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getPriorDate()
    {
        return $this->priorDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of the initial placement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $priorDate
     * @return static
     */
    public function setPriorDate($priorDate = null)
    {
        if (null === $priorDate) {
            $this->priorDate = null;
            return $this;
        }
        if ($priorDate instanceof FHIRDate) {
            $this->priorDate = $priorDate;
            return $this;
        }
        $this->priorDate = new FHIRDate($priorDate);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material of the prior denture or bridge prosthesis. (Oral).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPriorMaterial()
    {
        return $this->priorMaterial;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material of the prior denture or bridge prosthesis. (Oral).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $priorMaterial
     * @return static
     */
    public function setPriorMaterial(FHIRCoding $priorMaterial = null)
    {
        $this->priorMaterial = $priorMaterial;
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
        if (null !== ($v = $this->getInitial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriorDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIOR_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriorMaterial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIOR_MATERIAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL])) {
            $v = $this->getInitial();
            foreach($validationRules[self::FIELD_INITIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS, self::FIELD_INITIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL])) {
                        $errs[self::FIELD_INITIAL] = [];
                    }
                    $errs[self::FIELD_INITIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_DATE])) {
            $v = $this->getPriorDate();
            foreach($validationRules[self::FIELD_PRIOR_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS, self::FIELD_PRIOR_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_DATE])) {
                        $errs[self::FIELD_PRIOR_DATE] = [];
                    }
                    $errs[self::FIELD_PRIOR_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_MATERIAL])) {
            $v = $this->getPriorMaterial();
            foreach($validationRules[self::FIELD_PRIOR_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS, self::FIELD_PRIOR_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_MATERIAL])) {
                        $errs[self::FIELD_PRIOR_MATERIAL] = [];
                    }
                    $errs[self::FIELD_PRIOR_MATERIAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis
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
                throw new \DomainException(sprintf('FHIRClaimProsthesis::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimProsthesis::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimProsthesis;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimProsthesis)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimProsthesis::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis or null, %s seen.',
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
        if (isset($children->initial)) {
            $type->setInitial(FHIRBoolean::xmlUnserialize($children->initial));
        }
        if (isset($attributes->initial)) {
            $pt = $type->getInitial();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->initial);
            } else {
                $type->setInitial((string)$attributes->initial);
            }
        }
        if (isset($children->priorDate)) {
            $type->setPriorDate(FHIRDate::xmlUnserialize($children->priorDate));
        }
        if (isset($attributes->priorDate)) {
            $pt = $type->getPriorDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->priorDate);
            } else {
                $type->setPriorDate((string)$attributes->priorDate);
            }
        }
        if (isset($children->priorMaterial)) {
            $type->setPriorMaterial(FHIRCoding::xmlUnserialize($children->priorMaterial));
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
        if (null !== ($v = $this->getInitial())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INITIAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriorDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIOR_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriorMaterial())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIOR_MATERIAL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getInitial())) {
            $a[self::FIELD_INITIAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_INITIAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPriorDate())) {
            $a[self::FIELD_PRIOR_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_PRIOR_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPriorMaterial())) {
            $a[self::FIELD_PRIOR_MATERIAL] = $v;
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