<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 1st, 2019 15:45+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 *
 * Class FHIRVerificationResultValidator
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultValidator extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_VALIDATOR;

    const FIELD_ATTESTATION_SIGNATURE = 'attestationSignature';
    const FIELD_IDENTITY_CERTIFICATE = 'identityCertificate';
    const FIELD_IDENTITY_CERTIFICATE_EXT = '_identityCertificate';
    const FIELD_ORGANIZATION = 'organization';

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Signed assertion by the validator that they have validated the information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    private $attestationSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A digital identity certificate associated with the validator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $identityCertificate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the organization validating information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $organization = null;

    /**
     * FHIRVerificationResultValidator Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultValidator::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ATTESTATION_SIGNATURE])) {
            if ($data[self::FIELD_ATTESTATION_SIGNATURE] instanceof FHIRSignature) {
                $this->setAttestationSignature($data[self::FIELD_ATTESTATION_SIGNATURE]);
            } else {
                $this->setAttestationSignature(new FHIRSignature($data[self::FIELD_ATTESTATION_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_IDENTITY_CERTIFICATE])) {
            $ext = (isset($data[self::FIELD_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_IDENTITY_CERTIFICATE_EXT]))
                ? $data[self::FIELD_IDENTITY_CERTIFICATE_EXT]
                : null;
            if ($data[self::FIELD_IDENTITY_CERTIFICATE] instanceof FHIRString) {
                $this->setIdentityCertificate($data[self::FIELD_IDENTITY_CERTIFICATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTITY_CERTIFICATE])) {
                $this->setIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_IDENTITY_CERTIFICATE]] + $ext));
            } else {
                $this->setIdentityCertificate(new FHIRString($data[self::FIELD_IDENTITY_CERTIFICATE]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Signed assertion by the validator that they have validated the information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getAttestationSignature()
    {
        return $this->attestationSignature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Signed assertion by the validator that they have validated the information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature $attestationSignature
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public function setAttestationSignature(FHIRSignature $attestationSignature = null)
    {
        $this->attestationSignature = $attestationSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A digital identity certificate associated with the validator.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentityCertificate()
    {
        return $this->identityCertificate;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A digital identity certificate associated with the validator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $identityCertificate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public function setIdentityCertificate($identityCertificate = null)
    {
        if (null === $identityCertificate) {
            $this->identityCertificate = null;
            return $this;
        }
        if ($identityCertificate instanceof FHIRString) {
            $this->identityCertificate = $identityCertificate;
            return $this;
        }
        $this->identityCertificate = new FHIRString($identityCertificate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the organization validating information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the organization validating information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRVerificationResultValidator::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVerificationResultValidator::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRVerificationResultValidator);
        } elseif (!is_object($type) || !($type instanceof FHIRVerificationResultValidator)) {
            throw new \RuntimeException(sprintf(
                'FHIRVerificationResultValidator::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->attestationSignature)) {
            $type->setAttestationSignature(FHIRSignature::xmlUnserialize($children->attestationSignature));
        }
        if (isset($attributes->identityCertificate)) {
            $type->setIdentityCertificate((string)$attributes->identityCertificate);
        }
        if (isset($children->identityCertificate)) {
            $type->setIdentityCertificate(FHIRString::xmlUnserialize($children->identityCertificate));
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<VerificationResultValidator xmlns="http://hl7.org/fhir"></VerificationResultValidator>');
        }
        if (null !== ($v = $this->getAttestationSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ATTESTATION_SIGNATURE));
        }
        if (null !== ($v = $this->getIdentityCertificate())) {
            $sxe->addAttribute(self::FIELD_IDENTITY_CERTIFICATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTITY_CERTIFICATE));
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAttestationSignature())) {
            $a[self::FIELD_ATTESTATION_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getIdentityCertificate())) {
            $a[self::FIELD_IDENTITY_CERTIFICATE] = (string)$v;
            $a[self::FIELD_IDENTITY_CERTIFICATE_EXT] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}