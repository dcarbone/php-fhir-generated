<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * Eligibility resource.
 *
 * Class FHIREligibilityResponseInsurance
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse
 */
class FHIREligibilityResponseInsurance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE;
    const FIELD_BENEFIT_BALANCE = 'benefitBalance';
    const FIELD_CONTRACT = 'contract';
    const FIELD_COVERAGE = 'coverage';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits and optionally current balances by Category.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance[]
     */
    protected $benefitBalance = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contract resource which may provide more detailed information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $contract = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A suite of updated or additional Coverages from the Insurer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $coverage = null;

    /**
     * Validation map for fields in type EligibilityResponse.Insurance
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIREligibilityResponseInsurance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREligibilityResponseInsurance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BENEFIT_BALANCE])) {
            if (is_array($data[self::FIELD_BENEFIT_BALANCE])) {
                foreach($data[self::FIELD_BENEFIT_BALANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIREligibilityResponseBenefitBalance) {
                        $this->addBenefitBalance($v);
                    } else {
                        $this->addBenefitBalance(new FHIREligibilityResponseBenefitBalance($v));
                    }
                }
            } else if ($data[self::FIELD_BENEFIT_BALANCE] instanceof FHIREligibilityResponseBenefitBalance) {
                $this->addBenefitBalance($data[self::FIELD_BENEFIT_BALANCE]);
            } else {
                $this->addBenefitBalance(new FHIREligibilityResponseBenefitBalance($data[self::FIELD_BENEFIT_BALANCE]));
            }
        }
        if (isset($data[self::FIELD_CONTRACT])) {
            if ($data[self::FIELD_CONTRACT] instanceof FHIRReference) {
                $this->setContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->setContract(new FHIRReference($data[self::FIELD_CONTRACT]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
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
        return "<EligibilityResponseInsurance{$xmlns}></EligibilityResponseInsurance>";
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits and optionally current balances by Category.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance[]
     */
    public function getBenefitBalance()
    {
        return $this->benefitBalance;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits and optionally current balances by Category.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance $benefitBalance
     * @return static
     */
    public function addBenefitBalance(FHIREligibilityResponseBenefitBalance $benefitBalance = null)
    {
        $this->benefitBalance[] = $benefitBalance;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits and optionally current balances by Category.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance[] $benefitBalance
     * @return static
     */
    public function setBenefitBalance(array $benefitBalance = [])
    {
        $this->benefitBalance = [];
        if ([] === $benefitBalance) {
            return $this;
        }
        foreach($benefitBalance as $v) {
            if ($v instanceof FHIREligibilityResponseBenefitBalance) {
                $this->addBenefitBalance($v);
            } else {
                $this->addBenefitBalance(new FHIREligibilityResponseBenefitBalance($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contract resource which may provide more detailed information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The contract resource which may provide more detailed information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $contract
     * @return static
     */
    public function setContract(FHIRReference $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A suite of updated or additional Coverages from the Insurer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A suite of updated or additional Coverages from the Insurer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $coverage
     * @return static
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        $this->coverage = $coverage;
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
        if ([] !== ($vs = $this->getBenefitBalance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BENEFIT_BALANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getContract())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BENEFIT_BALANCE])) {
            $v = $this->getBenefitBalance();
            foreach($validationRules[self::FIELD_BENEFIT_BALANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE, self::FIELD_BENEFIT_BALANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFIT_BALANCE])) {
                        $errs[self::FIELD_BENEFIT_BALANCE] = [];
                    }
                    $errs[self::FIELD_BENEFIT_BALANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRACT])) {
            $v = $this->getContract();
            foreach($validationRules[self::FIELD_CONTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE, self::FIELD_CONTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRACT])) {
                        $errs[self::FIELD_CONTRACT] = [];
                    }
                    $errs[self::FIELD_CONTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance
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
                throw new \DomainException(sprintf('FHIREligibilityResponseInsurance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREligibilityResponseInsurance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREligibilityResponseInsurance;
        } elseif (!is_object($type) || !($type instanceof FHIREligibilityResponseInsurance)) {
            throw new \RuntimeException(sprintf(
                'FHIREligibilityResponseInsurance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance or null, %s seen.',
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
        if (isset($children->benefitBalance)) {
            foreach($children->benefitBalance as $child) {
                $type->addBenefitBalance(FHIREligibilityResponseBenefitBalance::xmlUnserialize($child));
            }
        }
        if (isset($children->contract)) {
            $type->setContract(FHIRReference::xmlUnserialize($children->contract));
        }
        if (isset($children->coverage)) {
            $type->setCoverage(FHIRReference::xmlUnserialize($children->coverage));
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
        if ([] !== ($vs = $this->getBenefitBalance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BENEFIT_BALANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContract())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRACT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBenefitBalance())) {
            $a[self::FIELD_BENEFIT_BALANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BENEFIT_BALANCE][] = $v;
            }
        }
        if (null !== ($v = $this->getContract())) {
            $a[self::FIELD_CONTRACT] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $v;
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