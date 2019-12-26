<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a healthcare consumer’s choices, which permits or denies
 * identified recipient(s) or recipient role(s) to perform one or more actions
 * within a given policy context, for specific purposes and periods of time.
 *
 * Class FHIRConsentVerification
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentVerification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION;
    const FIELD_VERIFICATION_DATE = 'verificationDate';
    const FIELD_VERIFICATION_DATE_EXT = '_verificationDate';
    const FIELD_VERIFIED = 'verified';
    const FIELD_VERIFIED_EXT = '_verified';
    const FIELD_VERIFIED_WITH = 'verifiedWith';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date verification was collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $verificationDate = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $verified = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $verifiedWith = null;

    /**
     * Validation map for fields in type Consent.Verification
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRConsentVerification Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentVerification::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VERIFICATION_DATE]) || isset($data[self::FIELD_VERIFICATION_DATE_EXT])) {
            if (isset($data[self::FIELD_VERIFICATION_DATE])) {
                $value = $data[self::FIELD_VERIFICATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERIFICATION_DATE_EXT]) && is_array($data[self::FIELD_VERIFICATION_DATE_EXT])) {
                $ext = $data[self::FIELD_VERIFICATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setVerificationDate($value);
                } else if (is_array($value)) {
                    $this->setVerificationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setVerificationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVerificationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VERIFIED]) || isset($data[self::FIELD_VERIFIED_EXT])) {
            if (isset($data[self::FIELD_VERIFIED])) {
                $value = $data[self::FIELD_VERIFIED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERIFIED_EXT]) && is_array($data[self::FIELD_VERIFIED_EXT])) {
                $ext = $data[self::FIELD_VERIFIED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setVerified($value);
                } else if (is_array($value)) {
                    $this->setVerified(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setVerified(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVerified(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VERIFIED_WITH])) {
            if ($data[self::FIELD_VERIFIED_WITH] instanceof FHIRReference) {
                $this->setVerifiedWith($data[self::FIELD_VERIFIED_WITH]);
            } else {
                $this->setVerifiedWith(new FHIRReference($data[self::FIELD_VERIFIED_WITH]));
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
        return "<ConsentVerification{$xmlns}></ConsentVerification>";
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date verification was collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getVerificationDate()
    {
        return $this->verificationDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date verification was collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $verificationDate
     * @return static
     */
    public function setVerificationDate($verificationDate = null)
    {
        if (null === $verificationDate) {
            $this->verificationDate = null;
            return $this;
        }
        if ($verificationDate instanceof FHIRDateTime) {
            $this->verificationDate = $verificationDate;
            return $this;
        }
        $this->verificationDate = new FHIRDateTime($verificationDate);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $verified
     * @return static
     */
    public function setVerified($verified = null)
    {
        if (null === $verified) {
            $this->verified = null;
            return $this;
        }
        if ($verified instanceof FHIRBoolean) {
            $this->verified = $verified;
            return $this;
        }
        $this->verified = new FHIRBoolean($verified);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getVerifiedWith()
    {
        return $this->verifiedWith;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $verifiedWith
     * @return static
     */
    public function setVerifiedWith(FHIRReference $verifiedWith = null)
    {
        $this->verifiedWith = $verifiedWith;
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
        if (null !== ($v = $this->getVerificationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFIED_WITH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION_DATE])) {
            $v = $this->getVerificationDate();
            foreach($validationRules[self::FIELD_VERIFICATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFICATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_DATE])) {
                        $errs[self::FIELD_VERIFICATION_DATE] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFIED])) {
            $v = $this->getVerified();
            foreach($validationRules[self::FIELD_VERIFIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFIED])) {
                        $errs[self::FIELD_VERIFIED] = [];
                    }
                    $errs[self::FIELD_VERIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFIED_WITH])) {
            $v = $this->getVerifiedWith();
            foreach($validationRules[self::FIELD_VERIFIED_WITH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION, self::FIELD_VERIFIED_WITH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFIED_WITH])) {
                        $errs[self::FIELD_VERIFIED_WITH] = [];
                    }
                    $errs[self::FIELD_VERIFIED_WITH][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
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
                throw new \DomainException(sprintf('FHIRConsentVerification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConsentVerification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConsentVerification;
        } elseif (!is_object($type) || !($type instanceof FHIRConsentVerification)) {
            throw new \RuntimeException(sprintf(
                'FHIRConsentVerification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification or null, %s seen.',
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
        if (isset($children->verificationDate)) {
            $type->setVerificationDate(FHIRDateTime::xmlUnserialize($children->verificationDate));
        }
        if (isset($attributes->verificationDate)) {
            $pt = $type->getVerificationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->verificationDate);
            } else {
                $type->setVerificationDate((string)$attributes->verificationDate);
            }
        }
        if (isset($children->verified)) {
            $type->setVerified(FHIRBoolean::xmlUnserialize($children->verified));
        }
        if (isset($attributes->verified)) {
            $pt = $type->getVerified();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->verified);
            } else {
                $type->setVerified((string)$attributes->verified);
            }
        }
        if (isset($children->verifiedWith)) {
            $type->setVerifiedWith(FHIRReference::xmlUnserialize($children->verifiedWith));
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
        if (null !== ($v = $this->getVerificationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFICATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVerified())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFIED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFIED_WITH, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getVerificationDate())) {
            $a[self::FIELD_VERIFICATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_VERIFICATION_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVerified())) {
            $a[self::FIELD_VERIFIED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_VERIFIED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            $a[self::FIELD_VERIFIED_WITH] = $v;
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