<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 19th, 2025 16:36+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRProfileSlicing extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROFILE_DOT_SLICING;

    /* class_default.php:56 */
    public const FIELD_DISCRIMINATOR = 'discriminator';
    public const FIELD_DISCRIMINATOR_EXT = '_discriminator';
    public const FIELD_ORDERED = 'ordered';
    public const FIELD_ORDERED_EXT = '_ordered';
    public const FIELD_RULES = 'rules';
    public const FIELD_RULES_EXT = '_rules';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_DISCRIMINATOR => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ORDERED => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_RULES => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DISCRIMINATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ORDERED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RULES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    #[FHIRId]
    protected FHIRId $discriminator;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $ordered;
    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules 
     */
    #[FHIRSlicingRules]
    protected FHIRSlicingRules $rules;

    /* constructor.php:61 */
    /**
     * FHIRProfileSlicing Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $discriminator
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $ordered
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules $rules
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $discriminator = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $ordered = null,
                                null|string|FHIRSlicingRulesList|FHIRSlicingRules $rules = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $discriminator) {
            $this->setDiscriminator($discriminator);
        }
        if (null !== $ordered) {
            $this->setOrdered($ordered);
        }
        if (null !== $rules) {
            $this->setRules($rules);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getDiscriminator(): null|FHIRId
    {
        return $this->discriminator ?? null;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $discriminator
     * @return static
     */
    public function setDiscriminator(null|string|FHIRIdPrimitive|FHIRId $discriminator): self
    {
        if (null === $discriminator) {
            unset($this->discriminator);
            return $this;
        }
        if (!($discriminator instanceof FHIRId)) {
            $discriminator = new FHIRId(value: $discriminator);
        }
        $this->discriminator = $discriminator;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getOrdered(): null|FHIRBoolean
    {
        return $this->ordered ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $ordered
     * @return static
     */
    public function setOrdered(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $ordered): self
    {
        if (null === $ordered) {
            unset($this->ordered);
            return $this;
        }
        if (!($ordered instanceof FHIRBoolean)) {
            $ordered = new FHIRBoolean(value: $ordered);
        }
        $this->ordered = $ordered;
        return $this;
    }

    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules
     */
    public function getRules(): null|FHIRSlicingRules
    {
        return $this->rules ?? null;
    }

    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules $rules
     * @return static
     */
    public function setRules(null|string|FHIRSlicingRulesList|FHIRSlicingRules $rules): self
    {
        if (null === $rules) {
            unset($this->rules);
            return $this;
        }
        if (!($rules instanceof FHIRSlicingRules)) {
            $rules = new FHIRSlicingRules(value: $rules);
        }
        $this->rules = $rules;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileSlicing)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISCRIMINATOR === $cen) {
                $type->setDiscriminator(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDERED === $cen) {
                $type->setOrdered(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RULES === $cen) {
                $type->setRules(FHIRSlicingRules::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISCRIMINATOR])) {
            if (isset($type->discriminator)) {
                $type->discriminator->setValue((string)$attributes[self::FIELD_DISCRIMINATOR]);
            } else {
                $type->setDiscriminator((string)$attributes[self::FIELD_DISCRIMINATOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISCRIMINATOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ORDERED])) {
            if (isset($type->ordered)) {
                $type->ordered->setValue((string)$attributes[self::FIELD_ORDERED]);
            } else {
                $type->setOrdered((string)$attributes[self::FIELD_ORDERED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ORDERED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RULES])) {
            if (isset($type->rules)) {
                $type->rules->setValue((string)$attributes[self::FIELD_RULES]);
            } else {
                $type->setRules((string)$attributes[self::FIELD_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->discriminator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]) {
            $xw->writeAttribute(self::FIELD_DISCRIMINATOR, $this->discriminator->_getValueAsString());
        }
        if (isset($this->ordered) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORDERED]) {
            $xw->writeAttribute(self::FIELD_ORDERED, $this->ordered->_getValueAsString());
        }
        if (isset($this->rules) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RULES]) {
            $xw->writeAttribute(self::FIELD_RULES, $this->rules->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->discriminator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]
                || $this->discriminator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISCRIMINATOR);
            $this->discriminator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]);
            $xw->endElement();
        }
        if (isset($this->ordered)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORDERED]
                || $this->ordered->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORDERED);
            $this->ordered->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORDERED]);
            $xw->endElement();
        }
        if (isset($this->rules)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RULES]
                || $this->rules->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RULES);
            $this->rules->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RULES]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileSlicing)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->discriminator)
            || isset($decoded->_discriminator)
            || property_exists($decoded, self::FIELD_DISCRIMINATOR)
            || property_exists($decoded, self::FIELD_DISCRIMINATOR_EXT)) {
            $v = $decoded->_discriminator ?? new \stdClass();
            $v->value = $decoded->discriminator ?? null;
            $type->setDiscriminator(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->ordered)
            || isset($decoded->_ordered)
            || property_exists($decoded, self::FIELD_ORDERED)
            || property_exists($decoded, self::FIELD_ORDERED_EXT)) {
            $v = $decoded->_ordered ?? new \stdClass();
            $v->value = $decoded->ordered ?? null;
            $type->setOrdered(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->rules)
            || isset($decoded->_rules)
            || property_exists($decoded, self::FIELD_RULES)
            || property_exists($decoded, self::FIELD_RULES_EXT)) {
            $v = $decoded->_rules ?? new \stdClass();
            $v->value = $decoded->rules ?? null;
            $type->setRules(FHIRSlicingRules::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->discriminator)) {
            if (null !== ($val = $this->discriminator->getValue())) {
                $out->discriminator = $val;
            }
            if ($this->discriminator->_nonValueFieldDefined()) {
                $ext = $this->discriminator->jsonSerialize();
                unset($ext->value);
                $out->_discriminator = $ext;
            }
        }
        if (isset($this->ordered)) {
            if (null !== ($val = $this->ordered->getValue())) {
                $out->ordered = $val;
            }
            if ($this->ordered->_nonValueFieldDefined()) {
                $ext = $this->ordered->jsonSerialize();
                unset($ext->value);
                $out->_ordered = $ext;
            }
        }
        if (isset($this->rules)) {
            if (null !== ($val = $this->rules->getValue())) {
                $out->rules = $val;
            }
            if ($this->rules->_nonValueFieldDefined()) {
                $ext = $this->rules->jsonSerialize();
                unset($ext->value);
                $out->_rules = $ext;
            }
        }
        return $out;
    }
}