<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResourceTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Defines the characteristics of a message that can be shared between systems,
 * including the type of event that initiates the message, the content to be
 * transmitted and what response(s), if any, are permitted.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRMessageDefinitionFocus extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_FOCUS;

    /* class_default.php:56 */
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MIN => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROFILE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of resource that must be the focus for this message.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType 
     */
    #[FHIRResourceType]
    protected FHIRResourceType $code;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile that reflects constraints for the focal resource (and potentially for
     * related resources).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $profile;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the minimum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt 
     */
    #[FHIRUnsignedInt]
    protected FHIRUnsignedInt $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the maximum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $max;

    /* constructor.php:61 */
    /**
     * FHIRMessageDefinitionFocus Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResourceTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $profile
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $max
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRResourceTypeEnum|FHIRResourceType $code = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of resource that must be the focus for this message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType
     */
    public function getCode(): null|FHIRResourceType
    {
        return $this->code ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of resource that must be the focus for this message.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResourceTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType $code
     * @return static
     */
    public function setCode(null|string|FHIRResourceTypeEnum|FHIRResourceType $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRResourceType)) {
            $code = new FHIRResourceType(value: $code);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile that reflects constraints for the focal resource (and potentially for
     * related resources).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getProfile(): null|FHIRCanonical
    {
        return $this->profile ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile that reflects constraints for the focal resource (and potentially for
     * related resources).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function setProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        if (!($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical(value: $profile);
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the minimum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getMin(): null|FHIRUnsignedInt
    {
        return $this->min ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the minimum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $min
     * @return static
     */
    public function setMin(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $min): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRUnsignedInt)) {
            $min = new FHIRUnsignedInt(value: $min);
        }
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the maximum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the maximum number of resources of this type that must be pointed to
     * by a message in order for it to be valid against this MessageDefinition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $max
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max): self
    {
        if (null === $max) {
            unset($this->max);
            return $this;
        }
        if (!($max instanceof FHIRString)) {
            $max = new FHIRString(value: $max);
        }
        $this->max = $max;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMessageDefinitionFocus)) {
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
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRResourceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->setProfile(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CODE])) {
            if (isset($type->code)) {
                $type->code->setValue((string)$attributes[self::FIELD_CODE]);
            } else {
                $type->setCode((string)$attributes[self::FIELD_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            if (isset($type->profile)) {
                $type->profile->setValue((string)$attributes[self::FIELD_PROFILE]);
            } else {
                $type->setProfile((string)$attributes[self::FIELD_PROFILE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PROFILE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            if (isset($type->min)) {
                $type->min->setValue((string)$attributes[self::FIELD_MIN]);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX])) {
            if (isset($type->max)) {
                $type->max->setValue((string)$attributes[self::FIELD_MAX]);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->code) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE]) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->_getValueAsString());
        }
        if (isset($this->profile) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROFILE]) {
            $xw->writeAttribute(self::FIELD_PROFILE, $this->profile->_getValueAsString());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getValueAsString());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CODE]
                || $this->code->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CODE]);
            $xw->endElement();
        }
        if (isset($this->profile)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROFILE]
                || $this->profile->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROFILE]);
            $xw->endElement();
        }
        if (isset($this->min)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN]
                || $this->min->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN]);
            $xw->endElement();
        }
        if (isset($this->max)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX]
                || $this->max->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMessageDefinitionFocus)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->code)
            || isset($decoded->_code)
            || property_exists($decoded, self::FIELD_CODE)
            || property_exists($decoded, self::FIELD_CODE_EXT)) {
            $v = $decoded->_code ?? new \stdClass();
            $v->value = $decoded->code ?? null;
            $type->setCode(FHIRResourceType::jsonUnserialize($v, $config));
        }
        if (isset($decoded->profile)
            || isset($decoded->_profile)
            || property_exists($decoded, self::FIELD_PROFILE)
            || property_exists($decoded, self::FIELD_PROFILE_EXT)) {
            $v = $decoded->_profile ?? new \stdClass();
            $v->value = $decoded->profile ?? null;
            $type->setProfile(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->min)
            || isset($decoded->_min)
            || property_exists($decoded, self::FIELD_MIN)
            || property_exists($decoded, self::FIELD_MIN_EXT)) {
            $v = $decoded->_min ?? new \stdClass();
            $v->value = $decoded->min ?? null;
            $type->setMin(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->max)
            || isset($decoded->_max)
            || property_exists($decoded, self::FIELD_MAX)
            || property_exists($decoded, self::FIELD_MAX_EXT)) {
            $v = $decoded->_max ?? new \stdClass();
            $v->value = $decoded->max ?? null;
            $type->setMax(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            if ($this->code->_nonValueFieldDefined()) {
                $ext = $this->code->jsonSerialize();
                unset($ext->value);
                $out->_code = $ext;
            }
        }
        if (isset($this->profile)) {
            if (null !== ($val = $this->profile->getValue())) {
                $out->profile = $val;
            }
            if ($this->profile->_nonValueFieldDefined()) {
                $ext = $this->profile->jsonSerialize();
                unset($ext->value);
                $out->_profile = $ext;
            }
        }
        if (isset($this->min)) {
            if (null !== ($val = $this->min->getValue())) {
                $out->min = $val;
            }
            if ($this->min->_nonValueFieldDefined()) {
                $ext = $this->min->jsonSerialize();
                unset($ext->value);
                $out->_min = $ext;
            }
        }
        if (isset($this->max)) {
            if (null !== ($val = $this->max->getValue())) {
                $out->max = $val;
            }
            if ($this->max->_nonValueFieldDefined()) {
                $ext = $this->max->jsonSerialize();
                unset($ext->value);
                $out->_max = $ext;
            }
        }
        return $out;
    }
}