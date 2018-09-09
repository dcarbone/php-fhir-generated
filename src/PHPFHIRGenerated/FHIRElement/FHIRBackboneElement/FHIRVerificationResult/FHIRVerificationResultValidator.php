<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

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
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Describes validation requirements, source(s), status and dates for one or more elements.
 *
 * Class FHIRVerificationResultValidator
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultValidator extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VerificationResult.Validator';

    /**
     * A digital identity certificate associated with the validator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $identityCertificate = null;

    /**
     * Reference to the organization validating information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Signed assertion by the validator that they have validated the information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $signedValidatorAttestationString = null;

    /**
     * Signed assertion by the validator that they have validated the information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $signedValidatorAttestationUri = null;

    /**
     * FHIRVerificationResultValidator Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['identityCertificate'])) {
                $this->setIdentityCertificate($data['identityCertificate']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['signedValidatorAttestationString'])) {
                $this->setSignedValidatorAttestationString($data['signedValidatorAttestationString']);
            }
            if (isset($data['signedValidatorAttestationUri'])) {
                $this->setSignedValidatorAttestationUri($data['signedValidatorAttestationUri']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A digital identity certificate associated with the validator.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setIdentityCertificate($identityCertificate)
    {
        if (null === $identityCertificate) {
            return $this; 
        }
        if (is_scalar($identityCertificate)) {
            $identityCertificate = new FHIRString($identityCertificate);
        }
        if (!($identityCertificate instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultValidator::setIdentityCertificate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($identityCertificate)
            ));
        }
        $this->identityCertificate = $identityCertificate;
        return $this;
    }

    /**
     * A digital identity certificate associated with the validator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentityCertificate()
    {
        return $this->identityCertificate;
    }


    /**
     * Reference to the organization validating information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * Reference to the organization validating information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * Signed assertion by the validator that they have validated the information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSignedValidatorAttestationString($signedValidatorAttestationString)
    {
        if (null === $signedValidatorAttestationString) {
            return $this; 
        }
        if (is_scalar($signedValidatorAttestationString)) {
            $signedValidatorAttestationString = new FHIRString($signedValidatorAttestationString);
        }
        if (!($signedValidatorAttestationString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultValidator::setSignedValidatorAttestationString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($signedValidatorAttestationString)
            ));
        }
        $this->signedValidatorAttestationString = $signedValidatorAttestationString;
        return $this;
    }

    /**
     * Signed assertion by the validator that they have validated the information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSignedValidatorAttestationString()
    {
        return $this->signedValidatorAttestationString;
    }


    /**
     * Signed assertion by the validator that they have validated the information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSignedValidatorAttestationUri($signedValidatorAttestationUri)
    {
        if (null === $signedValidatorAttestationUri) {
            return $this; 
        }
        if (is_scalar($signedValidatorAttestationUri)) {
            $signedValidatorAttestationUri = new FHIRUri($signedValidatorAttestationUri);
        }
        if (!($signedValidatorAttestationUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultValidator::setSignedValidatorAttestationUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($signedValidatorAttestationUri)
            ));
        }
        $this->signedValidatorAttestationUri = $signedValidatorAttestationUri;
        return $this;
    }

    /**
     * Signed assertion by the validator that they have validated the information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSignedValidatorAttestationUri()
    {
        return $this->signedValidatorAttestationUri;
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
        if (null !== ($v = $this->getIdentityCertificate())) {
            $a['identityCertificate'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getSignedValidatorAttestationString())) {
            $a['signedValidatorAttestationString'] = $v;
        }
        if (null !== ($v = $this->getSignedValidatorAttestationUri())) {
            $a['signedValidatorAttestationUri'] = $v;
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
            $sxe = new \SimpleXMLElement('<VerificationResultValidator xmlns="http://hl7.org/fhir"></VerificationResultValidator>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}