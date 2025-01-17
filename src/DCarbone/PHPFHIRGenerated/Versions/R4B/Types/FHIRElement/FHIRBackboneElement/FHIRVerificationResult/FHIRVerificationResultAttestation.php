<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 */
class FHIRVerificationResultAttestation extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION;


    public const FIELD_WHO = 'who';
    public const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    public const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_SOURCE_IDENTITY_CERTIFICATE = 'sourceIdentityCertificate';
    public const FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT = '_sourceIdentityCertificate';
    public const FIELD_PROXY_IDENTITY_CERTIFICATE = 'proxyIdentityCertificate';
    public const FIELD_PROXY_IDENTITY_CERTIFICATE_EXT = '_proxyIdentityCertificate';
    public const FIELD_PROXY_SIGNATURE = 'proxySignature';
    public const FIELD_SOURCE_SIGNATURE = 'sourceSignature';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $who;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $onBehalfOf;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method by which attested information was submitted/retrieved (manual; API;
     * Push).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $communicationMethod;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $sourceIdentityCertificate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $proxyIdentityCertificate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $proxySignature;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $sourceSignature;

    /** Default validation map for fields in type VerificationResult.Attestation */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRVerificationResultAttestation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $who
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $onBehalfOf
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $communicationMethod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $sourceIdentityCertificate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $proxyIdentityCertificate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature $proxySignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature $sourceSignature
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $who = null,
                                null|FHIRReference $onBehalfOf = null,
                                null|FHIRCodeableConcept $communicationMethod = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $sourceIdentityCertificate = null,
                                null|string|FHIRStringPrimitive|FHIRString $proxyIdentityCertificate = null,
                                null|FHIRSignature $proxySignature = null,
                                null|FHIRSignature $sourceSignature = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $who) {
            $this->setWho($who);
        }
        if (null !== $onBehalfOf) {
            $this->setOnBehalfOf($onBehalfOf);
        }
        if (null !== $communicationMethod) {
            $this->setCommunicationMethod($communicationMethod);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $sourceIdentityCertificate) {
            $this->setSourceIdentityCertificate($sourceIdentityCertificate);
        }
        if (null !== $proxyIdentityCertificate) {
            $this->setProxyIdentityCertificate($proxyIdentityCertificate);
        }
        if (null !== $proxySignature) {
            $this->setProxySignature($proxySignature);
        }
        if (null !== $sourceSignature) {
            $this->setSourceSignature($sourceSignature);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getWho(): null|FHIRReference
    {
        return $this->who ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization attesting to information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $who
     * @return static
     */
    public function setWho(null|FHIRReference $who): self
    {
        if (null === $who) {
            unset($this->who);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getOnBehalfOf(): null|FHIRReference
    {
        return $this->onBehalfOf ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $onBehalfOf
     * @return static
     */
    public function setOnBehalfOf(null|FHIRReference $onBehalfOf): self
    {
        if (null === $onBehalfOf) {
            unset($this->onBehalfOf);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCommunicationMethod(): null|FHIRCodeableConcept
    {
        return $this->communicationMethod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $communicationMethod
     * @return static
     */
    public function setCommunicationMethod(null|FHIRCodeableConcept $communicationMethod): self
    {
        if (null === $communicationMethod) {
            unset($this->communicationMethod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
     */
    public function getDate(): null|FHIRDate
    {
        return $this->date ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the information was attested to.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDate)) {
            $date = new FHIRDate(value: $date);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getSourceIdentityCertificate(): null|FHIRString
    {
        return $this->sourceIdentityCertificate ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $sourceIdentityCertificate
     * @return static
     */
    public function setSourceIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $sourceIdentityCertificate): self
    {
        if (null === $sourceIdentityCertificate) {
            unset($this->sourceIdentityCertificate);
            return $this;
        }
        if (!($sourceIdentityCertificate instanceof FHIRString)) {
            $sourceIdentityCertificate = new FHIRString(value: $sourceIdentityCertificate);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getProxyIdentityCertificate(): null|FHIRString
    {
        return $this->proxyIdentityCertificate ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital identity certificate associated with the proxy entity submitting
     * attested information on behalf of the attestation source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $proxyIdentityCertificate
     * @return static
     */
    public function setProxyIdentityCertificate(null|string|FHIRStringPrimitive|FHIRString $proxyIdentityCertificate): self
    {
        if (null === $proxyIdentityCertificate) {
            unset($this->proxyIdentityCertificate);
            return $this;
        }
        if (!($proxyIdentityCertificate instanceof FHIRString)) {
            $proxyIdentityCertificate = new FHIRString(value: $proxyIdentityCertificate);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature
     */
    public function getProxySignature(): null|FHIRSignature
    {
        return $this->proxySignature ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature $proxySignature
     * @return static
     */
    public function setProxySignature(null|FHIRSignature $proxySignature): self
    {
        if (null === $proxySignature) {
            unset($this->proxySignature);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature
     */
    public function getSourceSignature(): null|FHIRSignature
    {
        return $this->sourceSignature ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature $sourceSignature
     * @return static
     */
    public function setSourceSignature(null|FHIRSignature $sourceSignature): self
    {
        if (null === $sourceSignature) {
            unset($this->sourceSignature);
            return $this;
        }
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
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ON_BEHALF_OF, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMUNICATION_METHOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROXY_IDENTITY_CERTIFICATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROXY_SIGNATURE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_SIGNATURE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResultAttestation)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHO === $childName) {
                $v = new FHIRReference();
                $type->setWho(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ON_BEHALF_OF === $childName) {
                $v = new FHIRReference();
                $type->setOnBehalfOf(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMMUNICATION_METHOD === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_IDENTITY_CERTIFICATE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSourceIdentityCertificate(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROXY_IDENTITY_CERTIFICATE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setProxyIdentityCertificate(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROXY_SIGNATURE === $childName) {
                $v = new FHIRSignature();
                $type->setProxySignature(FHIRSignature::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_SIGNATURE === $childName) {
                $v = new FHIRSignature();
                $type->setSourceSignature(FHIRSignature::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE])) {
            $pt = $type->getSourceIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceIdentityCertificate(new FHIRString(
                    value: (string)$attributes[self::FIELD_SOURCE_IDENTITY_CERTIFICATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE])) {
            $pt = $type->getProxyIdentityCertificate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setProxyIdentityCertificate(new FHIRString(
                    value: (string)$attributes[self::FIELD_PROXY_IDENTITY_CERTIFICATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('VerificationResultAttestation', $this->_getSourceXMLNS());
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->getFormattedValue());
        }
        if (isset($this->sourceIdentityCertificate) && $this->sourceIdentityCertificate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $this->sourceIdentityCertificate->getValue()?->getFormattedValue());
        }
        if (isset($this->proxyIdentityCertificate) && $this->proxyIdentityCertificate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PROXY_IDENTITY_CERTIFICATE, $this->proxyIdentityCertificate->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->who)) {
            $xw->startElement(self::FIELD_WHO);
            $this->who->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onBehalfOf)) {
            $xw->startElement(self::FIELD_ON_BEHALF_OF);
            $this->onBehalfOf->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->communicationMethod)) {
            $xw->startElement(self::FIELD_COMMUNICATION_METHOD);
            $this->communicationMethod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceIdentityCertificate) && $this->sourceIdentityCertificate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE_IDENTITY_CERTIFICATE);
            $this->sourceIdentityCertificate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->proxyIdentityCertificate) && $this->proxyIdentityCertificate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PROXY_IDENTITY_CERTIFICATE);
            $this->proxyIdentityCertificate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->proxySignature)) {
            $xw->startElement(self::FIELD_PROXY_SIGNATURE);
            $this->proxySignature->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceSignature)) {
            $xw->startElement(self::FIELD_SOURCE_SIGNATURE);
            $this->sourceSignature->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResultAttestation)) {
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
        if (isset($json[self::FIELD_WHO]) || array_key_exists(self::FIELD_WHO, $json)) {
            if ($json[self::FIELD_WHO] instanceof FHIRReference) {
                $type->setWho($json[self::FIELD_WHO]);
            } else {
                $type->setWho(new FHIRReference($json[self::FIELD_WHO]));
            }
        }
        if (isset($json[self::FIELD_ON_BEHALF_OF]) || array_key_exists(self::FIELD_ON_BEHALF_OF, $json)) {
            if ($json[self::FIELD_ON_BEHALF_OF] instanceof FHIRReference) {
                $type->setOnBehalfOf($json[self::FIELD_ON_BEHALF_OF]);
            } else {
                $type->setOnBehalfOf(new FHIRReference($json[self::FIELD_ON_BEHALF_OF]));
            }
        }
        if (isset($json[self::FIELD_COMMUNICATION_METHOD]) || array_key_exists(self::FIELD_COMMUNICATION_METHOD, $json)) {
            if ($json[self::FIELD_COMMUNICATION_METHOD] instanceof FHIRCodeableConcept) {
                $type->setCommunicationMethod($json[self::FIELD_COMMUNICATION_METHOD]);
            } else {
                $type->setCommunicationMethod(new FHIRCodeableConcept($json[self::FIELD_COMMUNICATION_METHOD]));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDate($ext));
            } else {
                $type->setDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE]) || isset($json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT]) || array_key_exists(self::FIELD_SOURCE_IDENTITY_CERTIFICATE, $json) || array_key_exists(self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT]) && is_array($json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT])) ? $json[self::FIELD_SOURCE_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSourceIdentityCertificate($value);
                } else if (is_array($value)) {
                    $type->setSourceIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSourceIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSourceIdentityCertificate(new FHIRString($ext));
            } else {
                $type->setSourceIdentityCertificate(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PROXY_IDENTITY_CERTIFICATE]) || isset($json[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT]) || array_key_exists(self::FIELD_PROXY_IDENTITY_CERTIFICATE, $json) || array_key_exists(self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT, $json)) {
            $value = $json[self::FIELD_PROXY_IDENTITY_CERTIFICATE] ?? null;
            $ext = (isset($json[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT]) && is_array($json[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT])) ? $json[self::FIELD_PROXY_IDENTITY_CERTIFICATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setProxyIdentityCertificate($value);
                } else if (is_array($value)) {
                    $type->setProxyIdentityCertificate(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setProxyIdentityCertificate(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setProxyIdentityCertificate(new FHIRString($ext));
            } else {
                $type->setProxyIdentityCertificate(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PROXY_SIGNATURE]) || array_key_exists(self::FIELD_PROXY_SIGNATURE, $json)) {
            if ($json[self::FIELD_PROXY_SIGNATURE] instanceof FHIRSignature) {
                $type->setProxySignature($json[self::FIELD_PROXY_SIGNATURE]);
            } else {
                $type->setProxySignature(new FHIRSignature($json[self::FIELD_PROXY_SIGNATURE]));
            }
        }
        if (isset($json[self::FIELD_SOURCE_SIGNATURE]) || array_key_exists(self::FIELD_SOURCE_SIGNATURE, $json)) {
            if ($json[self::FIELD_SOURCE_SIGNATURE] instanceof FHIRSignature) {
                $type->setSourceSignature($json[self::FIELD_SOURCE_SIGNATURE]);
            } else {
                $type->setSourceSignature(new FHIRSignature($json[self::FIELD_SOURCE_SIGNATURE]));
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
        if (isset($this->who)) {
            $out->who = $this->who;
        }
        if (isset($this->onBehalfOf)) {
            $out->onBehalfOf = $this->onBehalfOf;
        }
        if (isset($this->communicationMethod)) {
            $out->communicationMethod = $this->communicationMethod;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->sourceIdentityCertificate)) {
            if (null !== ($val = $this->sourceIdentityCertificate->getValue())) {
                $out->sourceIdentityCertificate = $val;
            }
            $ext = $this->sourceIdentityCertificate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sourceIdentityCertificate = $ext;
            }
        }
        if (isset($this->proxyIdentityCertificate)) {
            if (null !== ($val = $this->proxyIdentityCertificate->getValue())) {
                $out->proxyIdentityCertificate = $val;
            }
            $ext = $this->proxyIdentityCertificate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_proxyIdentityCertificate = $ext;
            }
        }
        if (isset($this->proxySignature)) {
            $out->proxySignature = $this->proxySignature;
        }
        if (isset($this->sourceSignature)) {
            $out->sourceSignature = $this->sourceSignature;
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