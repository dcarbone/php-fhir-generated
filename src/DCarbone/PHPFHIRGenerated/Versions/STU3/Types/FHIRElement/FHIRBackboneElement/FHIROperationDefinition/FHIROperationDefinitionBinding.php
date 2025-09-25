<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRBindingStrengthList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIROperationDefinitionBinding extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING;

    /* class_default.php:56 */
    public const FIELD_STRENGTH = 'strength';
    public const FIELD_STRENGTH_EXT = '_strength';
    public const FIELD_VALUE_SET_URI = 'valueSetUri';
    public const FIELD_VALUE_SET_URI_EXT = '_valueSetUri';
    public const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STRENGTH => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_VALUE_SET_URI => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_VALUE_SET_REFERENCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STRENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_SET_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength 
     */
    #[FHIRBindingStrength]
    protected FHIRBindingStrength $strength;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $valueSetUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $valueSetReference;

    /* constructor.php:61 */
    /**
     * FHIROperationDefinitionBinding Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRBindingStrengthList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength $strength
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $valueSetUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $valueSetReference
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRBindingStrengthList|FHIRBindingStrength $strength = null,
                                null|string|FHIRUriPrimitive|FHIRUri $valueSetUri = null,
                                null|FHIRReference $valueSetReference = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $strength) {
            $this->setStrength($strength);
        }
        if (null !== $valueSetUri) {
            $this->setValueSetUri($valueSetUri);
        }
        if (null !== $valueSetReference) {
            $this->setValueSetReference($valueSetReference);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength
     */
    public function getStrength(): null|FHIRBindingStrength
    {
        return $this->strength ?? null;
    }

    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRBindingStrengthList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength $strength
     * @return static
     */
    public function setStrength(null|string|FHIRBindingStrengthList|FHIRBindingStrength $strength): self
    {
        if (null === $strength) {
            unset($this->strength);
            return $this;
        }
        if (!($strength instanceof FHIRBindingStrength)) {
            $strength = new FHIRBindingStrength(value: $strength);
        }
        $this->strength = $strength;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getValueSetUri(): null|FHIRUri
    {
        return $this->valueSetUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $valueSetUri
     * @return static
     */
    public function setValueSetUri(null|string|FHIRUriPrimitive|FHIRUri $valueSetUri): self
    {
        if (null === $valueSetUri) {
            unset($this->valueSetUri);
            return $this;
        }
        if (!($valueSetUri instanceof FHIRUri)) {
            $valueSetUri = new FHIRUri(value: $valueSetUri);
        }
        $this->valueSetUri = $valueSetUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getValueSetReference(): null|FHIRReference
    {
        return $this->valueSetReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $valueSetReference
     * @return static
     */
    public function setValueSetReference(null|FHIRReference $valueSetReference): self
    {
        if (null === $valueSetReference) {
            unset($this->valueSetReference);
            return $this;
        }
        $this->valueSetReference = $valueSetReference;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIROperationDefinitionBinding)) {
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
            } else if (self::FIELD_STRENGTH === $cen) {
                $type->setStrength(FHIRBindingStrength::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SET_URI === $cen) {
                $type->setValueSetUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SET_REFERENCE === $cen) {
                $type->setValueSetReference(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STRENGTH])) {
            if (isset($type->strength)) {
                $type->strength->setValue((string)$attributes[self::FIELD_STRENGTH]);
            } else {
                $type->setStrength((string)$attributes[self::FIELD_STRENGTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STRENGTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_SET_URI])) {
            if (isset($type->valueSetUri)) {
                $type->valueSetUri->setValue((string)$attributes[self::FIELD_VALUE_SET_URI]);
            } else {
                $type->setValueSetUri((string)$attributes[self::FIELD_VALUE_SET_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_SET_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->strength) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STRENGTH]) {
            $xw->writeAttribute(self::FIELD_STRENGTH, $this->strength->_getValueAsString());
        }
        if (isset($this->valueSetUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_SET_URI]) {
            $xw->writeAttribute(self::FIELD_VALUE_SET_URI, $this->valueSetUri->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->strength)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STRENGTH]
                || $this->strength->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STRENGTH);
            $this->strength->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STRENGTH]);
            $xw->endElement();
        }
        if (isset($this->valueSetUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_SET_URI]
                || $this->valueSetUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_SET_URI);
            $this->valueSetUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_SET_URI]);
            $xw->endElement();
        }
        if (isset($this->valueSetReference)) {
            $xw->startElement(self::FIELD_VALUE_SET_REFERENCE);
            $this->valueSetReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIROperationDefinitionBinding)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->strength)
            || isset($decoded->_strength)
            || property_exists($decoded, self::FIELD_STRENGTH)
            || property_exists($decoded, self::FIELD_STRENGTH_EXT)) {
            $v = $decoded->_strength ?? new \stdClass();
            $v->value = $decoded->strength ?? null;
            $type->setStrength(FHIRBindingStrength::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueSetUri)
            || isset($decoded->_valueSetUri)
            || property_exists($decoded, self::FIELD_VALUE_SET_URI)
            || property_exists($decoded, self::FIELD_VALUE_SET_URI_EXT)) {
            $v = $decoded->_valueSetUri ?? new \stdClass();
            $v->value = $decoded->valueSetUri ?? null;
            $type->setValueSetUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueSetReference) || property_exists($decoded, self::FIELD_VALUE_SET_REFERENCE)) {
            if (is_array($decoded->valueSetReference)) {
                $type->setValueSetReference(FHIRReference::jsonUnserialize(reset($decoded->valueSetReference), $config));
            } else {
                $type->setValueSetReference(FHIRReference::jsonUnserialize($decoded->valueSetReference, $config));
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
        if (isset($this->strength)) {
            if (null !== ($val = $this->strength->getValue())) {
                $out->strength = $val;
            }
            if ($this->strength->_nonValueFieldDefined()) {
                $ext = $this->strength->jsonSerialize();
                unset($ext->value);
                $out->_strength = $ext;
            }
        }
        if (isset($this->valueSetUri)) {
            if (null !== ($val = $this->valueSetUri->getValue())) {
                $out->valueSetUri = $val;
            }
            if ($this->valueSetUri->_nonValueFieldDefined()) {
                $ext = $this->valueSetUri->jsonSerialize();
                unset($ext->value);
                $out->_valueSetUri = $ext;
            }
        }
        if (isset($this->valueSetReference)) {
            $out->valueSetReference = $this->valueSetReference;
        }
        return $out;
    }
}