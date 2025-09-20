<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRCoverageEligibilityResponseBenefit extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_BENEFIT;

    /* class_default.php:56 */
    public const FIELD_TYPE = 'type';
    public const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    public const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    public const FIELD_ALLOWED_STRING = 'allowedString';
    public const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    public const FIELD_ALLOWED_MONEY = 'allowedMoney';
    public const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    public const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';
    public const FIELD_USED_STRING = 'usedString';
    public const FIELD_USED_STRING_EXT = '_usedString';
    public const FIELD_USED_MONEY = 'usedMoney';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_ALLOWED_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ALLOWED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USED_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt 
     */
    #[FHIRUnsignedInt]
    protected FHIRUnsignedInt $allowedUnsignedInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $allowedString;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $allowedMoney;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt 
     */
    #[FHIRUnsignedInt]
    protected FHIRUnsignedInt $usedUnsignedInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $usedString;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
     */
    #[FHIRMoney]
    protected FHIRMoney $usedMoney;

    /* constructor.php:61 */
    /**
     * FHIRCoverageEligibilityResponseBenefit Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $allowedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $allowedMoney
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $usedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $usedMoney
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $allowedString = null,
                                null|FHIRMoney $allowedMoney = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $usedString = null,
                                null|FHIRMoney $usedMoney = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $allowedUnsignedInt) {
            $this->setAllowedUnsignedInt($allowedUnsignedInt);
        }
        if (null !== $allowedString) {
            $this->setAllowedString($allowedString);
        }
        if (null !== $allowedMoney) {
            $this->setAllowedMoney($allowedMoney);
        }
        if (null !== $usedUnsignedInt) {
            $this->setUsedUnsignedInt($usedUnsignedInt);
        }
        if (null !== $usedString) {
            $this->setUsedString($usedString);
        }
        if (null !== $usedMoney) {
            $this->setUsedMoney($usedMoney);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getAllowedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->allowedUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @return static
     */
    public function setAllowedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt): self
    {
        if (null === $allowedUnsignedInt) {
            unset($this->allowedUnsignedInt);
            return $this;
        }
        if (!($allowedUnsignedInt instanceof FHIRUnsignedInt)) {
            $allowedUnsignedInt = new FHIRUnsignedInt(value: $allowedUnsignedInt);
        }
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAllowedString(): null|FHIRString
    {
        return $this->allowedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $allowedString
     * @return static
     */
    public function setAllowedString(null|string|FHIRStringPrimitive|FHIRString $allowedString): self
    {
        if (null === $allowedString) {
            unset($this->allowedString);
            return $this;
        }
        if (!($allowedString instanceof FHIRString)) {
            $allowedString = new FHIRString(value: $allowedString);
        }
        $this->allowedString = $allowedString;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
     */
    public function getAllowedMoney(): null|FHIRMoney
    {
        return $this->allowedMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $allowedMoney
     * @return static
     */
    public function setAllowedMoney(null|FHIRMoney $allowedMoney): self
    {
        if (null === $allowedMoney) {
            unset($this->allowedMoney);
            return $this;
        }
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getUsedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->usedUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @return static
     */
    public function setUsedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt): self
    {
        if (null === $usedUnsignedInt) {
            unset($this->usedUnsignedInt);
            return $this;
        }
        if (!($usedUnsignedInt instanceof FHIRUnsignedInt)) {
            $usedUnsignedInt = new FHIRUnsignedInt(value: $usedUnsignedInt);
        }
        $this->usedUnsignedInt = $usedUnsignedInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getUsedString(): null|FHIRString
    {
        return $this->usedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $usedString
     * @return static
     */
    public function setUsedString(null|string|FHIRStringPrimitive|FHIRString $usedString): self
    {
        if (null === $usedString) {
            unset($this->usedString);
            return $this;
        }
        if (!($usedString instanceof FHIRString)) {
            $usedString = new FHIRString(value: $usedString);
        }
        $this->usedString = $usedString;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
     */
    public function getUsedMoney(): null|FHIRMoney
    {
        return $this->usedMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $usedMoney
     * @return static
     */
    public function setUsedMoney(null|FHIRMoney $usedMoney): self
    {
        if (null === $usedMoney) {
            unset($this->usedMoney);
            return $this;
        }
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageEligibilityResponseBenefit)) {
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
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_UNSIGNED_INT === $cen) {
                $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_STRING === $cen) {
                $type->setAllowedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_MONEY === $cen) {
                $type->setAllowedMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED_UNSIGNED_INT === $cen) {
                $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED_STRING === $cen) {
                $type->setUsedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED_MONEY === $cen) {
                $type->setUsedMoney(FHIRMoney::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            if (isset($type->allowedUnsignedInt)) {
                $type->allowedUnsignedInt->setValue((string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT]);
            } else {
                $type->setAllowedUnsignedInt((string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ALLOWED_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALLOWED_STRING])) {
            if (isset($type->allowedString)) {
                $type->allowedString->setValue((string)$attributes[self::FIELD_ALLOWED_STRING]);
            } else {
                $type->setAllowedString((string)$attributes[self::FIELD_ALLOWED_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ALLOWED_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_USED_UNSIGNED_INT])) {
            if (isset($type->usedUnsignedInt)) {
                $type->usedUnsignedInt->setValue((string)$attributes[self::FIELD_USED_UNSIGNED_INT]);
            } else {
                $type->setUsedUnsignedInt((string)$attributes[self::FIELD_USED_UNSIGNED_INT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USED_UNSIGNED_INT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_USED_STRING])) {
            if (isset($type->usedString)) {
                $type->usedString->setValue((string)$attributes[self::FIELD_USED_STRING]);
            } else {
                $type->setUsedString((string)$attributes[self::FIELD_USED_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USED_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->allowedUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_UNSIGNED_INT, $this->allowedUnsignedInt->_getValueAsString());
        }
        if (isset($this->allowedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_STRING, $this->allowedString->_getValueAsString());
        }
        if (isset($this->usedUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_USED_UNSIGNED_INT, $this->usedUnsignedInt->_getValueAsString());
        }
        if (isset($this->usedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USED_STRING]) {
            $xw->writeAttribute(self::FIELD_USED_STRING, $this->usedString->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]
                || $this->allowedUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_UNSIGNED_INT);
            $this->allowedUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->allowedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]
                || $this->allowedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_STRING);
            $this->allowedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]);
            $xw->endElement();
        }
        if (isset($this->allowedMoney)) {
            $xw->startElement(self::FIELD_ALLOWED_MONEY);
            $this->allowedMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usedUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]
                || $this->usedUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USED_UNSIGNED_INT);
            $this->usedUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->usedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USED_STRING]
                || $this->usedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USED_STRING);
            $this->usedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USED_STRING]);
            $xw->endElement();
        }
        if (isset($this->usedMoney)) {
            $xw->startElement(self::FIELD_USED_MONEY);
            $this->usedMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageEligibilityResponseBenefit)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->allowedUnsignedInt)
            || isset($decoded->_allowedUnsignedInt)
            || property_exists($decoded, self::FIELD_ALLOWED_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_ALLOWED_UNSIGNED_INT_EXT)) {
            $v = $decoded->_allowedUnsignedInt ?? new \stdClass();
            $v->value = $decoded->allowedUnsignedInt ?? null;
            $type->setAllowedUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->allowedString)
            || isset($decoded->_allowedString)
            || property_exists($decoded, self::FIELD_ALLOWED_STRING)
            || property_exists($decoded, self::FIELD_ALLOWED_STRING_EXT)) {
            $v = $decoded->_allowedString ?? new \stdClass();
            $v->value = $decoded->allowedString ?? null;
            $type->setAllowedString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->allowedMoney) || property_exists($decoded, self::FIELD_ALLOWED_MONEY)) {
            if (is_array($decoded->allowedMoney)) {
                $type->setAllowedMoney(FHIRMoney::jsonUnserialize(reset($decoded->allowedMoney), $config));
            } else {
                $type->setAllowedMoney(FHIRMoney::jsonUnserialize($decoded->allowedMoney, $config));
            }
        }
        if (isset($decoded->usedUnsignedInt)
            || isset($decoded->_usedUnsignedInt)
            || property_exists($decoded, self::FIELD_USED_UNSIGNED_INT)
            || property_exists($decoded, self::FIELD_USED_UNSIGNED_INT_EXT)) {
            $v = $decoded->_usedUnsignedInt ?? new \stdClass();
            $v->value = $decoded->usedUnsignedInt ?? null;
            $type->setUsedUnsignedInt(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->usedString)
            || isset($decoded->_usedString)
            || property_exists($decoded, self::FIELD_USED_STRING)
            || property_exists($decoded, self::FIELD_USED_STRING_EXT)) {
            $v = $decoded->_usedString ?? new \stdClass();
            $v->value = $decoded->usedString ?? null;
            $type->setUsedString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->usedMoney) || property_exists($decoded, self::FIELD_USED_MONEY)) {
            if (is_array($decoded->usedMoney)) {
                $type->setUsedMoney(FHIRMoney::jsonUnserialize(reset($decoded->usedMoney), $config));
            } else {
                $type->setUsedMoney(FHIRMoney::jsonUnserialize($decoded->usedMoney, $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->allowedUnsignedInt)) {
            if (null !== ($val = $this->allowedUnsignedInt->getValue())) {
                $out->allowedUnsignedInt = $val;
            }
            if ($this->allowedUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->allowedUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_allowedUnsignedInt = $ext;
            }
        }
        if (isset($this->allowedString)) {
            if (null !== ($val = $this->allowedString->getValue())) {
                $out->allowedString = $val;
            }
            if ($this->allowedString->_nonValueFieldDefined()) {
                $ext = $this->allowedString->jsonSerialize();
                unset($ext->value);
                $out->_allowedString = $ext;
            }
        }
        if (isset($this->allowedMoney)) {
            $out->allowedMoney = $this->allowedMoney;
        }
        if (isset($this->usedUnsignedInt)) {
            if (null !== ($val = $this->usedUnsignedInt->getValue())) {
                $out->usedUnsignedInt = $val;
            }
            if ($this->usedUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->usedUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_usedUnsignedInt = $ext;
            }
        }
        if (isset($this->usedString)) {
            if (null !== ($val = $this->usedString->getValue())) {
                $out->usedString = $val;
            }
            if ($this->usedString->_nonValueFieldDefined()) {
                $ext = $this->usedString->jsonSerialize();
                unset($ext->value);
                $out->_usedString = $ext;
            }
        }
        if (isset($this->usedMoney)) {
            $out->usedMoney = $this->usedMoney;
        }
        return $out;
    }
}