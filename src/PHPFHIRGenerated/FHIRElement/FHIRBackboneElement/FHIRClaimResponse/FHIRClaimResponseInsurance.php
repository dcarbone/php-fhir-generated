<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 *
 * Class FHIRClaimResponseInsurance
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseInsurance extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClaimResponse.Insurance';

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $businessArrangement = null;

    /**
     * The Coverages adjudication details.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $claimResponse = null;

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $coverage = null;

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $focal = null;

    /**
     * A list of references from the Insurer to which these services pertain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $preAuthRef = [];

    /**
     * A service line item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $sequence = null;

    /**
     * FHIRClaimResponseInsurance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['businessArrangement'])) {
                $value = $data['businessArrangement'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Property \"businessArrangement\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setBusinessArrangement($value);
            }
            if (isset($data['claimResponse'])) {
                $value = $data['claimResponse'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Property \"claimResponse\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setClaimResponse($value);
            }
            if (isset($data['coverage'])) {
                $value = $data['coverage'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Property \"coverage\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setCoverage($value);
            }
            if (isset($data['focal'])) {
                $value = $data['focal'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Property \"focal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setFocal($value);
            }
            if (isset($data['preAuthRef'])) {
                $value = $data['preAuthRef'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Collection field \"preAuthRef\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPreAuthRef($v);
                    }
                }
            }
            if (isset($data['sequence'])) {
                $value = $data['sequence'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Property \"sequence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value)); 
                }
                $this->setSequence($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setBusinessArrangement($businessArrangement)
    {
        if (null === $businessArrangement) {
            return $this; 
        }
        if (is_scalar($businessArrangement)) {
            $businessArrangement = new FHIRString($businessArrangement);
        }
        if (!($businessArrangement instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseInsurance::setBusinessArrangement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($businessArrangement)
            ));
        }
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * The Coverages adjudication details.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setClaimResponse(FHIRReference $claimResponse = null)
    {
        if (null === $claimResponse) {
            return $this; 
        }
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * The Coverages adjudication details.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        if (null === $coverage) {
            return $this; 
        }
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setFocal($focal)
    {
        if (null === $focal) {
            return $this; 
        }
        if (is_scalar($focal)) {
            $focal = new FHIRBoolean($focal);
        }
        if (!($focal instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseInsurance::setFocal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($focal)
            ));
        }
        $this->focal = $focal;
        return $this;
    }

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addPreAuthRef($preAuthRef)
    {
        if (null === $preAuthRef) {
            return $this; 
        }
        if (is_scalar($preAuthRef)) {
            $preAuthRef = new FHIRString($preAuthRef);
        }
        if (!($preAuthRef instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseInsurance::addPreAuthRef - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($preAuthRef)
            ));
        }
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A service line item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseInsurance::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A service line item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBusinessArrangement())) {
            $a['businessArrangement'] = $v;
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $a['claimResponse'] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a['coverage'] = $v;
        }
        if (null !== ($v = $this->getFocal())) {
            $a['focal'] = $v;
        }
        if (0 < count($values = $this->getPreAuthRef())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['preAuthRef'] = $vs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ClaimResponseInsurance xmlns="http://hl7.org/fhir"></ClaimResponseInsurance>');
        }
        if (null !== ($v = $this->getBusinessArrangement())) {
            $v->xmlSerialize(true, $sxe->addChild('businessArrangement'));
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $v->xmlSerialize(true, $sxe->addChild('claimResponse'));
        }
        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize(true, $sxe->addChild('coverage'));
        }
        if (null !== ($v = $this->getFocal())) {
            $v->xmlSerialize(true, $sxe->addChild('focal'));
        }
        if (0 < count($values = $this->getPreAuthRef())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('preAuthRef'));
                }
            }
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize(true, $sxe->addChild('sequence'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}