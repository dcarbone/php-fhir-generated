<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

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

    const FIELD_WHO = 'who';
    const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE = 'sourceIdentityCertificate';
    const FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT = '_sourceIdentityCertificate';
    const FIELD_PROXY_IDENTITY_CERTIFICATE = 'proxyIdentityCertificate';
    const FIELD_PROXY_IDENTITY_CERTIFICATE_EXT = '_proxyIdentityCertificate';
    const FIELD_PROXY_SIGNATURE = 'proxySignature';
    const FIELD_SOURCE_SIGNATURE = 'sourceSignature';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $who = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $onBehalfOf = null;
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
    protected null|FHIRCodeableConcept $communicationMethod = null;
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
    protected null|FHIRDate $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $sourceIdentityCertificate = null;
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
    protected null|FHIRString $proxyIdentityCertificate = null;
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
    protected null|FHIRSignature $proxySignature = null;
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
    protected null|FHIRSignature $sourceSignature = null;

    /**
     * Validation map for fields in type VerificationResult.Attestation
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRVerificationResultAttestation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_WHO, $data)) {
            if ($data[self::FIELD_WHO] instanceof FHIRReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRReference($data[self::FIELD_WHO]));
            }
        }
        if (array_key_exists(self::FIELD_ON_BEHALF_OF, $data)) {
            if ($data[self::FIELD_ON_BEHALF_OF] instanceof FHIRReference) {
                $this->setOnBehalfOf($data[self::FIELD_ON_BEHALF_OF]);
            } else {
                $this->setOnBehalfOf(new FHIRReference($data[self::FIELD_ON_BEHALF_OF]));
            }
        }
        if (array_key_exists(self::FIELD_COMMUNICATION_METHOD, $data)) {
            if ($data[self::FIELD_COMMUNICATION_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCommunicationMethod($data[self::FIELD_COMMUNICATION_METHOD]);
            } else {
                $this->setCommunicationMethod(new FHIRCodeableConcept($data[self::FIELD_COMMUNICATION_METHOD]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDate($ext));
            } else {
                $this->setDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $data) || array_key_exists(self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT, $data)) {
            $value = $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) ? $data[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSourceIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setSourceIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSourceIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSourceIdentityCertificate(new FHIRString($ext));
            } else {
                $this->setSourceIdentityCertificate(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PROXY_IDENTITY_CERTIFICATE, $data) || array_key_exists(self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT, $data)) {
            $value = $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT]) && is_array($data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) ? $data[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProxyIdentityCertificate($value);
                } else if (is_array($value)) {
                    $this->setProxyIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProxyIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProxyIdentityCertificate(new FHIRString($ext));
            } else {
                $this->setProxyIdentityCertificate(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PROXY_SIGNATURE, $data)) {
            if ($data[self::FIELD_PROXY_SIGNATURE] instanceof FHIRSignature) {
                $this->setProxySignature($data[self::FIELD_PROXY_SIGNATURE]);
            } else {
                $this->setProxySignature(new FHIRSignature($data[self::FIELD_PROXY_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE_SIGNATURE, $data)) {
            if ($data[self::FIELD_SOURCE_SIGNATURE] instanceof FHIRSignature) {
                $this->setSourceSignature($data[self::FIELD_SOURCE_SIGNATURE]);
            } else {
                $this->setSourceSignature(new FHIRSignature($data[self::FIELD_SOURCE_SIGNATURE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
    public function getWho(): null|FHIRReference
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
    public function setWho(null|FHIRReference $who = null): self
    {
        if (null === $who) {
            $who = new FHIRReference();
        }
        $this->_trackValueSet($this->who, $who);
        $this->who = $who;
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
    public function getOnBehalfOf(): null|FHIRReference
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
    public function setOnBehalfOf(null|FHIRReference $onBehalfOf = null): self
    {
        if (null === $onBehalfOf) {
            $onBehalfOf = new FHIRReference();
        }
        $this->_trackValueSet($this->onBehalfOf, $onBehalfOf);
        $this->onBehalfOf = $onBehalfOf;
        return $this;
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
    public function getCommunicationMethod(): null|FHIRCodeableConcept
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
    public function setCommunicationMethod(null|FHIRCodeableConcept $communicationMethod = null): self
    {
        if (null === $communicationMethod) {
            $communicationMethod = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->communicationMethod, $communicationMethod);
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
    public function getDate(): null|FHIRDate
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $date
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $date && !($date instanceof FHIRDate)) {
            $date = new FHIRDate($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
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
    public function getSourceIdentityCertificate(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $sourceIdentityCertificate
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSourceIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $sourceIdentityCertificate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sourceIdentityCertificate && !($sourceIdentityCertificate instanceof FHIRString)) {
            $sourceIdentityCertificate = new FHIRString($sourceIdentityCertificate);
        }
        $this->_trackValueSet($this->sourceIdentityCertificate, $sourceIdentityCertificate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
            $this->_primitiveXmlLocations[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SOURCE_IDENTITY_CERTIFICATE][0] = $xmlLocation;
        $this->sourceIdentityCertificate = $sourceIdentityCertificate;
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
    public function getProxyIdentityCertificate(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $proxyIdentityCertificate
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProxyIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $proxyIdentityCertificate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $proxyIdentityCertificate && !($proxyIdentityCertificate instanceof FHIRString)) {
            $proxyIdentityCertificate = new FHIRString($proxyIdentityCertificate);
        }
        $this->_trackValueSet($this->proxyIdentityCertificate, $proxyIdentityCertificate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
            $this->_primitiveXmlLocations[self::FIELD_PROXY_IDENTITY_CERTIFICATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PROXY_IDENTITY_CERTIFICATE][0] = $xmlLocation;
        $this->proxyIdentityCertificate = $proxyIdentityCertificate;
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
    public function getProxySignature(): null|FHIRSignature
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
    public function setProxySignature(null|FHIRSignature $proxySignature = null): self
    {
        if (null === $proxySignature) {
            $proxySignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->proxySignature, $proxySignature);
        $this->proxySignature = $proxySignature;
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
    public function getSourceSignature(): null|FHIRSignature
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
    public function setSourceSignature(null|FHIRSignature $sourceSignature = null): self
    {
        if (null === $sourceSignature) {
            $sourceSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->sourceSignature, $sourceSignature);
        $this->sourceSignature = $sourceSignature;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getWho())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ON_BEHALF_OF] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] = $fieldErrs;
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
        if (null !== ($v = $this->getSourceSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_SIGNATURE] = $fieldErrs;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRVerificationResultAttestation)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_WHO === $childName) {
                $type->setWho(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ON_BEHALF_OF === $childName) {
                $type->setOnBehalfOf(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMMUNICATION_METHOD === $childName) {
                $type->setCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SOURCE_IDENTITY_CERTIFICATE === $childName) {
                $type->setSourceIdentityCertificate(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROXY_IDENTITY_CERTIFICATE === $childName) {
                $type->setProxyIdentityCertificate(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROXY_SIGNATURE === $childName) {
                $type->setProxySignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE_SIGNATURE === $childName) {
                $type->setSourceSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
            $pt = $type->getSourceIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceIdentityCertificate((string)$attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
            $pt = $type->getProxyIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setProxyIdentityCertificate((string)$attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'VerificationResultAttestation', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSourceIdentityCertificate())) {
            $xw->writeAttribute(self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROXY_IDENTITY_CERTIFICATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getProxyIdentityCertificate())) {
            $xw->writeAttribute(self::FIELD_PROXY_IDENTITY_CERTIFICATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getWho())) {
            $xw->startElement(self::FIELD_WHO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $xw->startElement(self::FIELD_ON_BEHALF_OF);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCommunicationMethod())) {
            $xw->startElement(self::FIELD_COMMUNICATION_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSourceIdentityCertificate())) {
            $xw->startElement(self::FIELD_SOURCE_IDENTITY_CERTIFICATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROXY_IDENTITY_CERTIFICATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getProxyIdentityCertificate())) {
            $xw->startElement(self::FIELD_PROXY_IDENTITY_CERTIFICATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProxySignature())) {
            $xw->startElement(self::FIELD_PROXY_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $xw->startElement(self::FIELD_SOURCE_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getWho())) {
            $out->{self::FIELD_WHO} = $v;
        }
        if (null !== ($v = $this->getOnBehalfOf())) {
            $out->{self::FIELD_ON_BEHALF_OF} = $v;
        }
        if (null !== ($v = $this->getCommunicationMethod())) {
            $out->{self::FIELD_COMMUNICATION_METHOD} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSourceIdentityCertificate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE_IDENTITY_CERTIFICATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProxyIdentityCertificate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROXY_IDENTITY_CERTIFICATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProxySignature())) {
            $out->{self::FIELD_PROXY_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getSourceSignature())) {
            $out->{self::FIELD_SOURCE_SIGNATURE} = $v;
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