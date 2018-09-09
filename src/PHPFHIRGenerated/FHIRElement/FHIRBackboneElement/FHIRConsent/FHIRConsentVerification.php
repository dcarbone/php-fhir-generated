<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent;

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
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A record of a healthcare consumer’s  choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 *
 * Class FHIRConsentVerification
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentVerification extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Consent.Verification';

    /**
     * Date verification was collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $verificationDate = null;

    /**
     * Has the instruction been verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $verified = null;

    /**
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $verifiedWith = null;

    /**
     * FHIRConsentVerification Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['verificationDate'])) {
                $this->setVerificationDate($data['verificationDate']);
            }
            if (isset($data['verified'])) {
                $this->setVerified($data['verified']);
            }
            if (isset($data['verifiedWith'])) {
                $this->setVerifiedWith($data['verifiedWith']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Date verification was collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setVerificationDate($verificationDate)
    {
        if (null === $verificationDate) {
            return $this; 
        }
        if (is_scalar($verificationDate)) {
            $verificationDate = new FHIRDateTime($verificationDate);
        }
        if (!($verificationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentVerification::setVerificationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($verificationDate)
            ));
        }
        $this->verificationDate = $verificationDate;
        return $this;
    }

    /**
     * Date verification was collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getVerificationDate()
    {
        return $this->verificationDate;
    }


    /**
     * Has the instruction been verified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setVerified($verified)
    {
        if (null === $verified) {
            return $this; 
        }
        if (is_scalar($verified)) {
            $verified = new FHIRBoolean($verified);
        }
        if (!($verified instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentVerification::setVerified - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($verified)
            ));
        }
        $this->verified = $verified;
        return $this;
    }

    /**
     * Has the instruction been verified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getVerified()
    {
        return $this->verified;
    }


    /**
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setVerifiedWith(FHIRReference $verifiedWith = null)
    {
        if (null === $verifiedWith) {
            return $this; 
        }
        $this->verifiedWith = $verifiedWith;
        return $this;
    }

    /**
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getVerifiedWith()
    {
        return $this->verifiedWith;
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
        if (null !== ($v = $this->getVerificationDate())) {
            $a['verificationDate'] = $v;
        }
        if (null !== ($v = $this->getVerified())) {
            $a['verified'] = $v;
        }
        if (null !== ($v = $this->getVerifiedWith())) {
            $a['verifiedWith'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConsentVerification xmlns="http://hl7.org/fhir"></ConsentVerification>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}