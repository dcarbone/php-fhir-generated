<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 *
 * Class FHIRVerificationResultAttestation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultAttestation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION;
    const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    const FIELD_PROXY_IDENTITY_CERTIFICATE = 'proxyIdentityCertificate';
    const FIELD_PROXY_IDENTITY_CERTIFICATE_EXT = '_proxyIdentityCertificate';
    const FIELD_PROXY_SIGNATURE = 'proxySignature';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE = 'sourceIdentityCertificate';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT = '_sourceIdentityCertificate';
    const FIELD_SOURCE_SIGNATURE = 'sourceSignature';
    const FIELD_WHO = 'who';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $communicationMethod = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $date = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $onBehalfOf = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $proxyIdentityCertificate = null;

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    protected $proxySignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $sourceIdentityCertificate = null;

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    protected $sourceSignature = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $who = null;

    /**
     * Validation map for fields in type VerificationResult.Attestation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRVerificationResultAttestation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultAttestation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMMUNICATION_METHOD])) {
            if ($data[self::FIELD_COMMUNICATION_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCommunicationMethod($data[self::FIELD_COMMUNICATION_METHOD]);
            } else {
                $this->setCommunicationMethod(new FHIRCodeableConcept($data[self::FIELD_COMMUNICATION_METHOD]));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF])) {
            if ($data[self::FIELD_ON_BEHALF_OF] instanceof FHIRReference) {
                $this->setOnBehalfOf($data[self::FIELD_ON_BEHALF_OF]);
            } else {
                $this->setOnBehalfOf(new FHIRReference($data[self::FIELD_ON_BEHALF_OF]));
            }
        }
        if (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE]) || isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) {
            if (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
                $value = $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) {
                $ext = $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProxyIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setProxyIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProxyIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProxyIdentityCertificate(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PROXY_SIGNATURE])) {
            if ($data[self::FIELD_PROXY_SIGNATURE] instanceof FHIRSignature) {
                $this->setProxySignature($data[self::FIELD_PROXY_SIGNATURE]);
            } else {
                $this->setProxySignature(new FHIRSignature($data[self::FIELD_PROXY_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE]) || isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) {
            if (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
                $value = $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) {
                $ext = $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSourceIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setSourceIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSourceIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSourceIdentityCertificate(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_SIGNATURE])) {
            if ($data[self::FIELD_SOURCE_SIGNATURE] instanceof FHIRSignature) {
                $this->setSourceSignature($data[self::FIELD_SOURCE_SIGNATURE]);
            } else {
                $this->setSourceSignature(new FHIRSignature($data[self::FIELD_SOURCE_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_WHO])) {
            if ($data[self::FIELD_WHO] instanceof FHIRReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRReference($data[self::FIELD_WHO]));
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
        return "<VerificationResultAttestation{$xmlns}></VerificationResultAttestation>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCommunicationMethod()
    {
        return $this->communicationMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $communicationMethod
     * @return static
     */
    public function setCommunicationMethod(FHIRCodeableConcept $communicationMethod = null)
    {
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDate) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDate($date);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $onBehalfOf
     * @return static
     */
    public function setOnBehalfOf(FHIRReference $onBehalfOf = null)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getProxyIdentityCertificate()
    {
        return $this->proxyIdentityCertificate;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $proxyIdentityCertificate
     * @return static
     */
    public function setProxyIdentityCertificate($proxyIdentityCertificate = null)
    {
        if (null === $proxyIdentityCertificate) {
            $this->proxyIdentityCertificate = null;
            return $this;
        }
        if ($proxyIdentityCertificate instanceof FHIRString) {
            $this->proxyIdentityCertificate = $proxyIdentityCertificate;
            return $this;
        }
        $this->proxyIdentityCertificate = new FHIRString($proxyIdentityCertificate);
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    public function getProxySignature()
    {
        return $this->proxySignature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the proxy entity indicating that they have the right to
     * submit attested information on behalf of the attestation source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $proxySignature
     * @return static
     */
    public function setProxySignature(FHIRSignature $proxySignature = null)
    {
        $this->proxySignature = $proxySignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSourceIdentityCertificate()
    {
        return $this->sourceIdentityCertificate;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $sourceIdentityCertificate
     * @return static
     */
    public function setSourceIdentityCertificate($sourceIdentityCertificate = null)
    {
        if (null === $sourceIdentityCertificate) {
            $this->sourceIdentityCertificate = null;
            return $this;
        }
        if ($sourceIdentityCertificate instanceof FHIRString) {
            $this->sourceIdentityCertificate = $sourceIdentityCertificate;
            return $this;
        }
        $this->sourceIdentityCertificate = new FHIRString($sourceIdentityCertificate);
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    public function getSourceSignature()
    {
        return $this->sourceSignature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Signed assertion by the attestation source that they have attested to the
     * information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $sourceSignature
     * @return static
     */
    public function setSourceSignature(FHIRSignature $sourceSignature = null)
    {
        $this->sourceSignature = $sourceSignature;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $who
     * @return static
     */
    public function setWho(FHIRReference $who = null)
    {
        $this->who = $who;
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
        if (null !== ($v = $this->getCommunicationMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMUNICATION_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ON_BEHALF_OF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProxySignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROXY_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWho())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION_METHOD])) {
            $v = $this->getCommunicationMethod();
            foreach($validationRules[self::FIELD_COMMUNICATION_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_COMMUNICATION_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION_METHOD])) {
                        $errs[self::FIELD_COMMUNICATION_METHOD] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_BEHALF_OF])) {
            $v = $this->getOnBehalfOf();
            foreach($validationRules[self::FIELD_ON_BEHALF_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_ON_BEHALF_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_BEHALF_OF])) {
                        $errs[self::FIELD_ON_BEHALF_OF] = [];
                    }
                    $errs[self::FIELD_ON_BEHALF_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
            $v = $this->getProxyIdentityCertificate();
            foreach($validationRules[self::FIELD_PROXY_IDENTITY_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_PROXY_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
                        $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_PROXY_IDENTITY_CERTIFICATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROXY_SIGNATURE])) {
            $v = $this->getProxySignature();
            foreach($validationRules[self::FIELD_PROXY_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_PROXY_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROXY_SIGNATURE])) {
                        $errs[self::FIELD_PROXY_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_PROXY_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
            $v = $this->getSourceIdentityCertificate();
            foreach($validationRules[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
                        $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_SIGNATURE])) {
            $v = $this->getSourceSignature();
            foreach($validationRules[self::FIELD_SOURCE_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_SOURCE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_SIGNATURE])) {
                        $errs[self::FIELD_SOURCE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SOURCE_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION, self::FIELD_WHO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO])) {
                        $errs[self::FIELD_WHO] = [];
                    }
                    $errs[self::FIELD_WHO][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
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
                throw new \DomainException(sprintf('FHIRVerificationResultAttestation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVerificationResultAttestation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRVerificationResultAttestation;
        } elseif (!is_object($type) || !($type instanceof FHIRVerificationResultAttestation)) {
            throw new \RuntimeException(sprintf(
                'FHIRVerificationResultAttestation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation or null, %s seen.',
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
        if (isset($children->communicationMethod)) {
            $type->setCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($children->communicationMethod));
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDate::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->onBehalfOf)) {
            $type->setOnBehalfOf(FHIRReference::xmlUnserialize($children->onBehalfOf));
        }
        if (isset($children->proxyIdentityCertificate)) {
            $type->setProxyIdentityCertificate(FHIRString::xmlUnserialize($children->proxyIdentityCertificate));
        }
        if (isset($attributes->proxyIdentityCertificate)) {
            $pt = $type->getProxyIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->proxyIdentityCertificate);
            } else {
                $type->setProxyIdentityCertificate((string)$attributes->proxyIdentityCertificate);
            }
        }
        if (isset($children->proxySignature)) {
            $type->setProxySignature(FHIRSignature::xmlUnserialize($children->proxySignature));
        }
        if (isset($children->sourceIdentityCertificate)) {
            $type->setSourceIdentityCertificate(FHIRString::xmlUnserialize($children->sourceIdentityCertificate));
        }
        if (isset($attributes->sourceIdentityCertificate)) {
            $pt = $type->getSourceIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sourceIdentityCertificate);
            } else {
                $type->setSourceIdentityCertificate((string)$attributes->sourceIdentityCertificate);
            }
        }
        if (isset($children->sourceSignature)) {
            $type->setSourceSignature(FHIRSignature::xmlUnserialize($children->sourceSignature));
        }
        if (isset($children->who)) {
            $type->setWho(FHIRReference::xmlUnserialize($children->who));
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
        if (null !== ($v = $this->getCommunicationMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROXY_IDENTITY_CERTIFICATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProxySignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROXY_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_IDENTITY_CERTIFICATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWho())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCommunicationMethod())) {
            $a[self::FIELD_COMMUNICATION_METHOD] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $a[self::FIELD_ON_BEHALF_OF] = $v;
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            $a[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProxySignature())) {
            $a[self::FIELD_PROXY_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            $a[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $a[self::FIELD_SOURCE_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getWho())) {
            $a[self::FIELD_WHO] = $v;
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