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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimCoverage
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimCoverage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE;
    const FIELD_BUSINESS_ARRANGEMENT = 'businessArrangement';
    const FIELD_BUSINESS_ARRANGEMENT_EXT = '_businessArrangement';
    const FIELD_CLAIM_RESPONSE = 'claimResponse';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_FOCAL = 'focal';
    const FIELD_FOCAL_EXT = '_focal';
    const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    const FIELD_PRE_AUTH_REF = 'preAuthRef';
    const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $businessArrangement = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $claimResponse = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $coverage = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $focal = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $originalRuleset = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    protected $preAuthRef = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of the patient to the subscriber.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $relationship = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $sequence = null;

    /**
     * Validation map for fields in type Claim.Coverage
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimCoverage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimCoverage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT]) || isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) {
            if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT])) {
                $value = $data[self::FIELD_BUSINESS_ARRANGEMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) && is_array($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) {
                $ext = $data[self::FIELD_BUSINESS_ARRANGEMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBusinessArrangement($value);
                } else if (is_array($value)) {
                    $this->setBusinessArrangement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBusinessArrangement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBusinessArrangement(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CLAIM_RESPONSE])) {
            if ($data[self::FIELD_CLAIM_RESPONSE] instanceof FHIRReference) {
                $this->setClaimResponse($data[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $this->setClaimResponse(new FHIRReference($data[self::FIELD_CLAIM_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_FOCAL]) || isset($data[self::FIELD_FOCAL_EXT])) {
            if (isset($data[self::FIELD_FOCAL])) {
                $value = $data[self::FIELD_FOCAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FOCAL_EXT]) && is_array($data[self::FIELD_FOCAL_EXT])) {
                $ext = $data[self::FIELD_FOCAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFocal($value);
                } else if (is_array($value)) {
                    $this->setFocal(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFocal(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFocal(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ORIGINAL_RULESET])) {
            if ($data[self::FIELD_ORIGINAL_RULESET] instanceof FHIRCoding) {
                $this->setOriginalRuleset($data[self::FIELD_ORIGINAL_RULESET]);
            } else {
                $this->setOriginalRuleset(new FHIRCoding($data[self::FIELD_ORIGINAL_RULESET]));
            }
        }
        if (isset($data[self::FIELD_PRE_AUTH_REF]) || isset($data[self::FIELD_PRE_AUTH_REF_EXT])) {
            if (isset($data[self::FIELD_PRE_AUTH_REF])) {
                $value = $data[self::FIELD_PRE_AUTH_REF];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($data[self::FIELD_PRE_AUTH_REF_EXT])) {
                $ext = $data[self::FIELD_PRE_AUTH_REF_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPreAuthRef($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPreAuthRef($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPreAuthRef(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPreAuthRef(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPreAuthRef(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCoding) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCoding($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE])) {
                $value = $data[self::FIELD_SEQUENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
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
        return "<ClaimCoverage{$xmlns}></ClaimCoverage>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $businessArrangement
     * @return static
     */
    public function setBusinessArrangement($businessArrangement = null)
    {
        if (null === $businessArrangement) {
            $this->businessArrangement = null;
            return $this;
        }
        if ($businessArrangement instanceof FHIRString) {
            $this->businessArrangement = $businessArrangement;
            return $this;
        }
        $this->businessArrangement = new FHIRString($businessArrangement);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $claimResponse
     * @return static
     */
    public function setClaimResponse(FHIRReference $claimResponse = null)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $coverage
     * @return static
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instance number of the Coverage which is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $focal
     * @return static
     */
    public function setFocal($focal = null)
    {
        if (null === $focal) {
            $this->focal = null;
            return $this;
        }
        if ($focal instanceof FHIRBoolean) {
            $this->focal = $focal;
            return $this;
        }
        $this->focal = new FHIRBoolean($focal);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $originalRuleset
     * @return static
     */
    public function setOriginalRuleset(FHIRCoding $originalRuleset = null)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $preAuthRef
     * @return static
     */
    public function addPreAuthRef($preAuthRef = null)
    {
        if (null === $preAuthRef) {
            $this->preAuthRef = [];
            return $this;
        }
        if ($preAuthRef instanceof FHIRString) {
            $this->preAuthRef[] = $preAuthRef;
            return $this;
        }
        $this->preAuthRef[] = new FHIRString($preAuthRef);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $preAuthRef
     * @return static
     */
    public function setPreAuthRef(array $preAuthRef = [])
    {
        $this->preAuthRef = [];
        if ([] === $preAuthRef) {
            return $this;
        }
        foreach($preAuthRef as $v) {
            if ($v instanceof FHIRString) {
                $this->addPreAuthRef($v);
            } else {
                $this->addPreAuthRef(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of the patient to the subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of the patient to the subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $relationship
     * @return static
     */
    public function setRelationship(FHIRCoding $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequence
     * @return static
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRPositiveInt) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRPositiveInt($sequence);
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
        if (null !== ($v = $this->getBusinessArrangement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BUSINESS_ARRANGEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLAIM_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGINAL_RULESET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRE_AUTH_REF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $v = $this->getBusinessArrangement();
            foreach($validationRules[self::FIELD_BUSINESS_ARRANGEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_BUSINESS_ARRANGEMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_CLAIM_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLAIM_RESPONSE])) {
                        $errs[self::FIELD_CLAIM_RESPONSE] = [];
                    }
                    $errs[self::FIELD_CLAIM_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL])) {
            $v = $this->getFocal();
            foreach($validationRules[self::FIELD_FOCAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_FOCAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL])) {
                        $errs[self::FIELD_FOCAL] = [];
                    }
                    $errs[self::FIELD_FOCAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGINAL_RULESET])) {
            $v = $this->getOriginalRuleset();
            foreach($validationRules[self::FIELD_ORIGINAL_RULESET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_ORIGINAL_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGINAL_RULESET])) {
                        $errs[self::FIELD_ORIGINAL_RULESET] = [];
                    }
                    $errs[self::FIELD_ORIGINAL_RULESET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRE_AUTH_REF])) {
            $v = $this->getPreAuthRef();
            foreach($validationRules[self::FIELD_PRE_AUTH_REF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_PRE_AUTH_REF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_AUTH_REF])) {
                        $errs[self::FIELD_PRE_AUTH_REF] = [];
                    }
                    $errs[self::FIELD_PRE_AUTH_REF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage
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
                throw new \DomainException(sprintf('FHIRClaimCoverage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimCoverage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimCoverage;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimCoverage)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimCoverage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage or null, %s seen.',
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
        if (isset($children->businessArrangement)) {
            $type->setBusinessArrangement(FHIRString::xmlUnserialize($children->businessArrangement));
        }
        if (isset($attributes->businessArrangement)) {
            $pt = $type->getBusinessArrangement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->businessArrangement);
            } else {
                $type->setBusinessArrangement((string)$attributes->businessArrangement);
            }
        }
        if (isset($children->claimResponse)) {
            $type->setClaimResponse(FHIRReference::xmlUnserialize($children->claimResponse));
        }
        if (isset($children->coverage)) {
            $type->setCoverage(FHIRReference::xmlUnserialize($children->coverage));
        }
        if (isset($children->focal)) {
            $type->setFocal(FHIRBoolean::xmlUnserialize($children->focal));
        }
        if (isset($attributes->focal)) {
            $pt = $type->getFocal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->focal);
            } else {
                $type->setFocal((string)$attributes->focal);
            }
        }
        if (isset($children->originalRuleset)) {
            $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($children->originalRuleset));
        }
        if (isset($children->preAuthRef)) {
            foreach($children->preAuthRef as $child) {
                $type->addPreAuthRef(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRCoding::xmlUnserialize($children->relationship));
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRPositiveInt::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->sequence)) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequence);
            } else {
                $type->setSequence((string)$attributes->sequence);
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
        if (null !== ($v = $this->getBusinessArrangement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BUSINESS_ARRANGEMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLAIM_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFocal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_RULESET, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_AUTH_REF, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBusinessArrangement())) {
            $a[self::FIELD_BUSINESS_ARRANGEMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_BUSINESS_ARRANGEMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $a[self::FIELD_CLAIM_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $v;
        }
        if (null !== ($v = $this->getFocal())) {
            $a[self::FIELD_FOCAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_FOCAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $a[self::FIELD_ORIGINAL_RULESET] = $v;
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            $a[self::FIELD_PRE_AUTH_REF] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRE_AUTH_REF][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PRE_AUTH_REF_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_EXT] = $enc;
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