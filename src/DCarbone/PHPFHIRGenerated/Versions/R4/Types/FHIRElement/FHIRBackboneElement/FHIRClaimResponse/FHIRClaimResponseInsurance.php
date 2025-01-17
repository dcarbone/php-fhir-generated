<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
class FHIRClaimResponseInsurance extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE;


    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_FOCAL = 'focal';
    public const FIELD_FOCAL_EXT = '_focal';
    public const FIELD_COVERAGE = 'coverage';
    public const FIELD_BUSINESS_ARRANGEMENT = 'businessArrangement';
    public const FIELD_BUSINESS_ARRANGEMENT_EXT = '_businessArrangement';
    public const FIELD_CLAIM_RESPONSE = 'claimResponse';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify insurance entries and provide a sequence of
     * coverages to convey coordination of benefit order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $sequence;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this
     * claim when set to true.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $focal;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $coverage;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $businessArrangement;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the adjudication of the line items for the Coverage specified in
     * this insurance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $claimResponse;

    /** Default validation map for fields in type ClaimResponse.Insurance */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_SEQUENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FOCAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_COVERAGE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRClaimResponseInsurance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $focal
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $coverage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $businessArrangement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $claimResponse
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $focal = null,
                                null|FHIRReference $coverage = null,
                                null|string|FHIRStringPrimitive|FHIRString $businessArrangement = null,
                                null|FHIRReference $claimResponse = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $focal) {
            $this->setFocal($focal);
        }
        if (null !== $coverage) {
            $this->setCoverage($coverage);
        }
        if (null !== $businessArrangement) {
            $this->setBusinessArrangement($businessArrangement);
        }
        if (null !== $claimResponse) {
            $this->setClaimResponse($claimResponse);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify insurance entries and provide a sequence of
     * coverages to convey coordination of benefit order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify insurance entries and provide a sequence of
     * coverages to convey coordination of benefit order.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $sequence
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt(value: $sequence);
        }
        if (null !== $valueXMLLocation) {
            $sequence->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sequence->_getValueXMLLocation()) {
            $sequence->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this
     * claim when set to true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getFocal(): null|FHIRBoolean
    {
        return $this->focal ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this
     * claim when set to true.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $focal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFocal(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $focal,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $focal) {
            unset($this->focal);
            return $this;
        }
        if (!($focal instanceof FHIRBoolean)) {
            $focal = new FHIRBoolean(value: $focal);
        }
        if (null !== $valueXMLLocation) {
            $focal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $focal->_getValueXMLLocation()) {
            $focal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->focal = $focal;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getCoverage(): null|FHIRReference
    {
        return $this->coverage ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $coverage
     * @return static
     */
    public function setCoverage(null|FHIRReference $coverage): self
    {
        if (null === $coverage) {
            unset($this->coverage);
            return $this;
        }
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getBusinessArrangement(): null|FHIRString
    {
        return $this->businessArrangement ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $businessArrangement
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBusinessArrangement(null|string|FHIRStringPrimitive|FHIRString $businessArrangement,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $businessArrangement) {
            unset($this->businessArrangement);
            return $this;
        }
        if (!($businessArrangement instanceof FHIRString)) {
            $businessArrangement = new FHIRString(value: $businessArrangement);
        }
        if (null !== $valueXMLLocation) {
            $businessArrangement->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $businessArrangement->_getValueXMLLocation()) {
            $businessArrangement->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the adjudication of the line items for the Coverage specified in
     * this insurance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getClaimResponse(): null|FHIRReference
    {
        return $this->claimResponse ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the adjudication of the line items for the Coverage specified in
     * this insurance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $claimResponse
     * @return static
     */
    public function setClaimResponse(null|FHIRReference $claimResponse): self
    {
        if (null === $claimResponse) {
            unset($this->claimResponse);
            return $this;
        }
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL])) {
            $v = $this->getFocal();
            foreach($validationRules[self::FIELD_FOCAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FOCAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL])) {
                        $errs[self::FIELD_FOCAL] = [];
                    }
                    $errs[self::FIELD_FOCAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $v = $this->getBusinessArrangement();
            foreach($validationRules[self::FIELD_BUSINESS_ARRANGEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BUSINESS_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BUSINESS_ARRANGEMENT])) {
                        $errs[self::FIELD_BUSINESS_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_BUSINESS_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLAIM_RESPONSE])) {
            $v = $this->getClaimResponse();
            foreach($validationRules[self::FIELD_CLAIM_RESPONSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLAIM_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLAIM_RESPONSE])) {
                        $errs[self::FIELD_CLAIM_RESPONSE] = [];
                    }
                    $errs[self::FIELD_CLAIM_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseInsurance)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FOCAL === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFocal(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COVERAGE === $childName) {
                $v = new FHIRReference();
                $type->setCoverage(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BUSINESS_ARRANGEMENT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBusinessArrangement(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLAIM_RESPONSE === $childName) {
                $v = new FHIRReference();
                $type->setClaimResponse(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SEQUENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SEQUENCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FOCAL])) {
            $pt = $type->getFocal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FOCAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFocal(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_FOCAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $pt = $type->getBusinessArrangement();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_BUSINESS_ARRANGEMENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setBusinessArrangement(new FHIRString(
                    value: (string)$attributes[self::FIELD_BUSINESS_ARRANGEMENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ClaimResponseInsurance', $this->_getSourceXMLNS());
        }
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->getValue()?->_getFormattedValue());
        }
        if (isset($this->focal) && $this->focal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FOCAL, $this->focal->getValue()?->_getFormattedValue());
        }
        if (isset($this->businessArrangement) && $this->businessArrangement->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_BUSINESS_ARRANGEMENT, $this->businessArrangement->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence) && $this->sequence->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->focal) && $this->focal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FOCAL);
            $this->focal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->coverage)) {
            $xw->startElement(self::FIELD_COVERAGE);
            $this->coverage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->businessArrangement) && $this->businessArrangement->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_BUSINESS_ARRANGEMENT);
            $this->businessArrangement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->claimResponse)) {
            $xw->startElement(self::FIELD_CLAIM_RESPONSE);
            $this->claimResponse->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseInsurance)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_SEQUENCE]) || isset($json[self::FIELD_SEQUENCE_EXT]) || array_key_exists(self::FIELD_SEQUENCE, $json) || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($json[self::FIELD_SEQUENCE_EXT]) && is_array($json[self::FIELD_SEQUENCE_EXT])) ? $json[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setSequence($value);
                } else if (is_array($value)) {
                    $type->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSequence(new FHIRPositiveInt($ext));
            } else {
                $type->setSequence(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_FOCAL]) || isset($json[self::FIELD_FOCAL_EXT]) || array_key_exists(self::FIELD_FOCAL, $json) || array_key_exists(self::FIELD_FOCAL_EXT, $json)) {
            $value = $json[self::FIELD_FOCAL] ?? null;
            $ext = (isset($json[self::FIELD_FOCAL_EXT]) && is_array($json[self::FIELD_FOCAL_EXT])) ? $json[self::FIELD_FOCAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setFocal($value);
                } else if (is_array($value)) {
                    $type->setFocal(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setFocal(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFocal(new FHIRBoolean($ext));
            } else {
                $type->setFocal(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_COVERAGE]) || array_key_exists(self::FIELD_COVERAGE, $json)) {
            if ($json[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $type->setCoverage($json[self::FIELD_COVERAGE]);
            } else {
                $type->setCoverage(new FHIRReference($json[self::FIELD_COVERAGE]));
            }
        }
        if (isset($json[self::FIELD_BUSINESS_ARRANGEMENT]) || isset($json[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) || array_key_exists(self::FIELD_BUSINESS_ARRANGEMENT, $json) || array_key_exists(self::FIELD_BUSINESS_ARRANGEMENT_EXT, $json)) {
            $value = $json[self::FIELD_BUSINESS_ARRANGEMENT] ?? null;
            $ext = (isset($json[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) && is_array($json[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) ? $json[self::FIELD_BUSINESS_ARRANGEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setBusinessArrangement($value);
                } else if (is_array($value)) {
                    $type->setBusinessArrangement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setBusinessArrangement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setBusinessArrangement(new FHIRString($ext));
            } else {
                $type->setBusinessArrangement(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CLAIM_RESPONSE]) || array_key_exists(self::FIELD_CLAIM_RESPONSE, $json)) {
            if ($json[self::FIELD_CLAIM_RESPONSE] instanceof FHIRReference) {
                $type->setClaimResponse($json[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $type->setClaimResponse(new FHIRReference($json[self::FIELD_CLAIM_RESPONSE]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            $ext = $this->sequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequence = $ext;
            }
        }
        if (isset($this->focal)) {
            if (null !== ($val = $this->focal->getValue())) {
                $out->focal = $val;
            }
            $ext = $this->focal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_focal = $ext;
            }
        }
        if (isset($this->coverage)) {
            $out->coverage = $this->coverage;
        }
        if (isset($this->businessArrangement)) {
            if (null !== ($val = $this->businessArrangement->getValue())) {
                $out->businessArrangement = $val;
            }
            $ext = $this->businessArrangement->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_businessArrangement = $ext;
            }
        }
        if (isset($this->claimResponse)) {
            $out->claimResponse = $this->claimResponse;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}