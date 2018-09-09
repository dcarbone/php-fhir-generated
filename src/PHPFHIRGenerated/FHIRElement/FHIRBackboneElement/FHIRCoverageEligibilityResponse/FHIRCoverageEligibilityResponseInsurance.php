<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 *
 * Class FHIRCoverageEligibilityResponseInsurance
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse
 */
class FHIRCoverageEligibilityResponseInsurance extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CoverageEligibilityResponse.Insurance';

    /**
     * The contract resource which may provide more detailed information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contract = null;

    /**
     * A suite of updated or additional Coverages from the Insurer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverage = null;

    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $inforce = null;

    /**
     * Benefits and optionally current balances by Category or Service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem
     */
    public $item = null;

    /**
     * FHIRCoverageEligibilityResponseInsurance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contract'])) {
                $this->setContract($data['contract']);
            }
            if (isset($data['coverage'])) {
                $this->setCoverage($data['coverage']);
            }
            if (isset($data['inforce'])) {
                $this->setInforce($data['inforce']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The contract resource which may provide more detailed information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContract(FHIRReference $contract = null)
    {
        if (null === $contract) {
            return $this; 
        }
        $this->contract = $contract;
        return $this;
    }

    /**
     * The contract resource which may provide more detailed information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContract()
    {
        return $this->contract;
    }


    /**
     * A suite of updated or additional Coverages from the Insurer.
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
     * A suite of updated or additional Coverages from the Insurer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }


    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setInforce($inforce)
    {
        if (null === $inforce) {
            return $this; 
        }
        if (is_scalar($inforce)) {
            $inforce = new FHIRBoolean($inforce);
        }
        if (!($inforce instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseInsurance::setInforce - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($inforce)
            ));
        }
        $this->inforce = $inforce;
        return $this;
    }

    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInforce()
    {
        return $this->inforce;
    }


    /**
     * Benefits and optionally current balances by Category or Service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem
     * @return $this
     */
    public function setItem(FHIRCoverageEligibilityResponseItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * Benefits and optionally current balances by Category or Service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem
     */
    public function getItem()
    {
        return $this->item;
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
        if (null !== ($v = $this->getContract())) {
            $a['contract'] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a['coverage'] = $v;
        }
        if (null !== ($v = $this->getInforce())) {
            $a['inforce'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
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
            $sxe = new \SimpleXMLElement('<CoverageEligibilityResponseInsurance xmlns="http://hl7.org/fhir"></CoverageEligibilityResponseInsurance>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}