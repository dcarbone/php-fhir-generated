<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A record of a healthcare consumer’s choices or choices made on their behalf by
 * a third party, which permits or denies identified recipient(s) or recipient
 * role(s) to perform one or more actions within a given policy context, for
 * specific purposes and periods of time.
 */
class FHIRConsentVerification extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION;

    /* class_default.php:50 */
    public const FIELD_VERIFIED = 'verified';
    public const FIELD_VERIFIED_EXT = '_verified';
    public const FIELD_VERIFICATION_TYPE = 'verificationType';
    public const FIELD_VERIFIED_BY = 'verifiedBy';
    public const FIELD_VERIFIED_WITH = 'verifiedWith';
    public const FIELD_VERIFICATION_DATE = 'verificationDate';
    public const FIELD_VERIFICATION_DATE_EXT = '_verificationDate';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VERIFIED => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_VERIFIED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $verified;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $verificationType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $verifiedBy;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $verifiedWith;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime[] 
     */
    protected array $verificationDate;

    /* constructor.php:61 */
    /**
     * FHIRConsentVerification Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $verified
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $verificationType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedWith
     * @param null|string[]|\DateTimeInterface[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime[] $verificationDate
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $verified = null,
                                null|FHIRCodeableConcept $verificationType = null,
                                null|FHIRReference $verifiedBy = null,
                                null|FHIRReference $verifiedWith = null,
                                null|iterable $verificationDate = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $verified) {
            $this->setVerified($verified);
        }
        if (null !== $verificationType) {
            $this->setVerificationType($verificationType);
        }
        if (null !== $verifiedBy) {
            $this->setVerifiedBy($verifiedBy);
        }
        if (null !== $verifiedWith) {
            $this->setVerifiedWith($verifiedWith);
        }
        if (null !== $verificationDate) {
            $this->setVerificationDate(...$verificationDate);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getVerified(): null|FHIRBoolean
    {
        return $this->verified ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Has the instruction been verified.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $verified
     * @return static
     */
    public function setVerified(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $verified): self
    {
        if (null === $verified) {
            unset($this->verified);
            return $this;
        }
        if (!($verified instanceof FHIRBoolean)) {
            $verified = new FHIRBoolean(value: $verified);
        }
        $this->verified = $verified;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getVerificationType(): null|FHIRCodeableConcept
    {
        return $this->verificationType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extensible list of verification type starting with verification and
     * re-validation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $verificationType
     * @return static
     */
    public function setVerificationType(null|FHIRCodeableConcept $verificationType): self
    {
        if (null === $verificationType) {
            unset($this->verificationType);
            return $this;
        }
        $this->verificationType = $verificationType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVerifiedBy(): null|FHIRReference
    {
        return $this->verifiedBy ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedBy
     * @return static
     */
    public function setVerifiedBy(null|FHIRReference $verifiedBy): self
    {
        if (null === $verifiedBy) {
            unset($this->verifiedBy);
            return $this;
        }
        $this->verifiedBy = $verifiedBy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVerifiedWith(): null|FHIRReference
    {
        return $this->verifiedWith ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $verifiedWith
     * @return static
     */
    public function setVerifiedWith(null|FHIRReference $verifiedWith): self
    {
        if (null === $verifiedWith) {
            unset($this->verifiedWith);
            return $this;
        }
        $this->verifiedWith = $verifiedWith;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime[]
     */
    public function getVerificationDate(): array
    {
        return $this->verificationDate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime>
     */
    public function getVerificationDateIterator(): iterable
    {
        if (!isset($this->verificationDate)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->verificationDate);
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $verificationDate
     * @return static
     */
    public function addVerificationDate(string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $verificationDate): self
    {
        if (!($verificationDate instanceof FHIRDateTime)) {
            $verificationDate = new FHIRDateTime(value: $verificationDate);
        }
        if (!isset($this->verificationDate)) {
            $this->verificationDate = [];
        }
        $this->verificationDate[] = $verificationDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date(s) verification was collected.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime ...$verificationDate
     * @return static
     */
    public function setVerificationDate(string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime ...$verificationDate): self
    {
        if ([] === $verificationDate) {
            unset($this->verificationDate);
            return $this;
        }
        $this->verificationDate = [];
        foreach($verificationDate as $v) {
            if ($v instanceof FHIRDateTime) {
                $this->verificationDate[] = $v;
            } else {
                $this->verificationDate[] = new FHIRDateTime(value: $v);
            }
        }
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConsentVerification)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFIED === $cen) {
                $type->setVerified(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFICATION_TYPE === $cen) {
                $type->setVerificationType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFIED_BY === $cen) {
                $type->setVerifiedBy(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFIED_WITH === $cen) {
                $type->setVerifiedWith(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFICATION_DATE === $cen) {
                $type->addVerificationDate(FHIRDateTime::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VERIFIED])) {
            if (isset($type->verified)) {
                $type->verified->setValue((string)$attributes[self::FIELD_VERIFIED]);
            } else {
                $type->setVerified((string)$attributes[self::FIELD_VERIFIED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERIFIED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->verified) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERIFIED]) {
            $xw->writeAttribute(self::FIELD_VERIFIED, $this->verified->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->verified)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERIFIED]
                || $this->verified->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERIFIED);
            $this->verified->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERIFIED]);
            $xw->endElement();
        }
        if (isset($this->verificationType)) {
            $xw->startElement(self::FIELD_VERIFICATION_TYPE);
            $this->verificationType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->verifiedBy)) {
            $xw->startElement(self::FIELD_VERIFIED_BY);
            $this->verifiedBy->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->verifiedWith)) {
            $xw->startElement(self::FIELD_VERIFIED_WITH);
            $this->verifiedWith->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->verificationDate) && [] !== $this->verificationDate) {
            foreach($this->verificationDate as $v) {
                $xw->startElement(self::FIELD_VERIFICATION_DATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConsentVerification)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->verified)
            || isset($json->_verified)
            || property_exists($json, self::FIELD_VERIFIED)
            || property_exists($json, self::FIELD_VERIFIED_EXT)) {
            $v = $json->_verified ?? new \stdClass();
            $v->value = $json->verified ?? null;
            $type->setVerified(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->verificationType) || property_exists($json, self::FIELD_VERIFICATION_TYPE)) {
            if (is_array($json->verificationType)) {
                $type->setVerificationType(FHIRCodeableConcept::jsonUnserialize(reset($json->verificationType), $config));
            } else {
                $type->setVerificationType(FHIRCodeableConcept::jsonUnserialize($json->verificationType, $config));
            }
        }
        if (isset($json->verifiedBy) || property_exists($json, self::FIELD_VERIFIED_BY)) {
            if (is_array($json->verifiedBy)) {
                $type->setVerifiedBy(FHIRReference::jsonUnserialize(reset($json->verifiedBy), $config));
            } else {
                $type->setVerifiedBy(FHIRReference::jsonUnserialize($json->verifiedBy, $config));
            }
        }
        if (isset($json->verifiedWith) || property_exists($json, self::FIELD_VERIFIED_WITH)) {
            if (is_array($json->verifiedWith)) {
                $type->setVerifiedWith(FHIRReference::jsonUnserialize(reset($json->verifiedWith), $config));
            } else {
                $type->setVerifiedWith(FHIRReference::jsonUnserialize($json->verifiedWith, $config));
            }
        }
        if (isset($json->verificationDate)
            || isset($json->_verificationDate)
            || property_exists($json, self::FIELD_VERIFICATION_DATE)
            || property_exists($json, self::FIELD_VERIFICATION_DATE_EXT)) {
            $vals = (array)($json->verificationDate ?? []);
            $exts = (array)($json->FIELD_VERIFICATION_DATE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addVerificationDate(FHIRDateTime::jsonUnserialize($v, $config));
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
        if (isset($this->verified)) {
            if (null !== ($val = $this->verified->getValue())) {
                $out->verified = $val;
            }
            if ($this->verified->_nonValueFieldDefined()) {
                $ext = $this->verified->jsonSerialize();
                unset($ext->value);
                $out->_verified = $ext;
            }
        }
        if (isset($this->verificationType)) {
            $out->verificationType = $this->verificationType;
        }
        if (isset($this->verifiedBy)) {
            $out->verifiedBy = $this->verifiedBy;
        }
        if (isset($this->verifiedWith)) {
            $out->verifiedWith = $this->verifiedWith;
        }
        if (isset($this->verificationDate) && [] !== $this->verificationDate) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->verificationDate as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->verificationDate = $vals;
            }
            if ($hasExts) {
                $out->_verificationDate = $exts;
            }
        }
        return $out;
    }
}