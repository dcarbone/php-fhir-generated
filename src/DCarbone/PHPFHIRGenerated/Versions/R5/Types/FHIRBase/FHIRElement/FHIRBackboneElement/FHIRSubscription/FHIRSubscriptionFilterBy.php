<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchComparatorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchModifierCodeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The subscription resource describes a particular client's request to be notified
 * about a SubscriptionTopic.
 */
class FHIRSubscriptionFilterBy extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_DOT_FILTER_BY;

    /* class_default.php:50 */
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_RESOURCE_TYPE_EXT = '_resourceType';
    public const FIELD_FILTER_PARAMETER = 'filterParameter';
    public const FIELD_FILTER_PARAMETER_EXT = '_filterParameter';
    public const FIELD_COMPARATOR = 'comparator';
    public const FIELD_COMPARATOR_EXT = '_comparator';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_MODIFIER_EXT = '_modifier';
    public const FIELD_VALUE = 'value';
    public const FIELD_VALUE_EXT = '_value';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_FILTER_PARAMETER => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_VALUE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_RESOURCE_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FILTER_PARAMETER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMPARATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MODIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $resourceType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $filterParameter;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator 
     */
    protected FHIRSearchComparator $comparator;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode 
     */
    protected FHIRSearchModifierCode $modifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $value;

    /* constructor.php:61 */
    /**
     * FHIRSubscriptionFilterBy Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $filterParameter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchComparatorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator $comparator
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchModifierCodeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode $modifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $value
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $resourceType = null,
                                null|string|FHIRStringPrimitive|FHIRString $filterParameter = null,
                                null|string|FHIRSearchComparatorEnum|FHIRSearchComparator $comparator = null,
                                null|string|FHIRSearchModifierCodeEnum|FHIRSearchModifierCode $modifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $value = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $resourceType) {
            $this->setResourceType($resourceType);
        }
        if (null !== $filterParameter) {
            $this->setFilterParameter($filterParameter);
        }
        if (null !== $comparator) {
            $this->setComparator($comparator);
        }
        if (null !== $modifier) {
            $this->setModifier($modifier);
        }
        if (null !== $value) {
            $this->setValue($value);
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResourceType(): null|FHIRUri
    {
        return $this->resourceType ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references
     * (`SubscriptionTopic.canFilterBy.resource`). This element can be used to
     * differentiate filters for topics that include more than one resource type.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resourceType
     * @return static
     */
    public function setResourceType(null|string|FHIRUriPrimitive|FHIRUri $resourceType): self
    {
        if (null === $resourceType) {
            unset($this->resourceType);
            return $this;
        }
        if (!($resourceType instanceof FHIRUri)) {
            $resourceType = new FHIRUri(value: $resourceType);
        }
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getFilterParameter(): null|FHIRString
    {
        return $this->filterParameter ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter`
     * element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $filterParameter
     * @return static
     */
    public function setFilterParameter(null|string|FHIRStringPrimitive|FHIRString $filterParameter): self
    {
        if (null === $filterParameter) {
            unset($this->filterParameter);
            return $this;
        }
        if (!($filterParameter instanceof FHIRString)) {
            $filterParameter = new FHIRString(value: $filterParameter);
        }
        $this->filterParameter = $filterParameter;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator
     */
    public function getComparator(): null|FHIRSearchComparator
    {
        return $this->comparator ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparator applied to this filter parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchComparatorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator $comparator
     * @return static
     */
    public function setComparator(null|string|FHIRSearchComparatorEnum|FHIRSearchComparator $comparator): self
    {
        if (null === $comparator) {
            unset($this->comparator);
            return $this;
        }
        if (!($comparator instanceof FHIRSearchComparator)) {
            $comparator = new FHIRSearchComparator(value: $comparator);
        }
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode
     */
    public function getModifier(): null|FHIRSearchModifierCode
    {
        return $this->modifier ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifier applied to this filter parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSearchModifierCodeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode $modifier
     * @return static
     */
    public function setModifier(null|string|FHIRSearchModifierCodeEnum|FHIRSearchModifierCode $modifier): self
    {
        if (null === $modifier) {
            unset($this->modifier);
            return $this;
        }
        if (!($modifier instanceof FHIRSearchModifierCode)) {
            $modifier = new FHIRSearchModifierCode(value: $modifier);
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literal value or resource path as is legal in search - for example,
     * `Patient/123` or `le1950`.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue(null|string|FHIRStringPrimitive|FHIRString $value): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (!($value instanceof FHIRString)) {
            $value = new FHIRString(value: $value);
        }
        $this->value = $value;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionFilterBy)) {
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
            } else if (self::FIELD_RESOURCE_TYPE === $cen) {
                $type->setResourceType(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FILTER_PARAMETER === $cen) {
                $type->setFilterParameter(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARATOR === $cen) {
                $type->setComparator(FHIRSearchComparator::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER === $cen) {
                $type->setModifier(FHIRSearchModifierCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE === $cen) {
                $type->setValue(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RESOURCE_TYPE])) {
            if (isset($type->resourceType)) {
                $type->resourceType->setValue((string)$attributes[self::FIELD_RESOURCE_TYPE]);
            } else {
                $type->setResourceType((string)$attributes[self::FIELD_RESOURCE_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RESOURCE_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FILTER_PARAMETER])) {
            if (isset($type->filterParameter)) {
                $type->filterParameter->setValue((string)$attributes[self::FIELD_FILTER_PARAMETER]);
            } else {
                $type->setFilterParameter((string)$attributes[self::FIELD_FILTER_PARAMETER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FILTER_PARAMETER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COMPARATOR])) {
            if (isset($type->comparator)) {
                $type->comparator->setValue((string)$attributes[self::FIELD_COMPARATOR]);
            } else {
                $type->setComparator((string)$attributes[self::FIELD_COMPARATOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COMPARATOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MODIFIER])) {
            if (isset($type->modifier)) {
                $type->modifier->setValue((string)$attributes[self::FIELD_MODIFIER]);
            } else {
                $type->setModifier((string)$attributes[self::FIELD_MODIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MODIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            if (isset($type->value)) {
                $type->value->setValue((string)$attributes[self::FIELD_VALUE]);
            } else {
                $type->setValue((string)$attributes[self::FIELD_VALUE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->resourceType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESOURCE_TYPE]) {
            $xw->writeAttribute(self::FIELD_RESOURCE_TYPE, $this->resourceType->_getValueAsString());
        }
        if (isset($this->filterParameter) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FILTER_PARAMETER]) {
            $xw->writeAttribute(self::FIELD_FILTER_PARAMETER, $this->filterParameter->_getValueAsString());
        }
        if (isset($this->comparator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMPARATOR]) {
            $xw->writeAttribute(self::FIELD_COMPARATOR, $this->comparator->_getValueAsString());
        }
        if (isset($this->modifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MODIFIER]) {
            $xw->writeAttribute(self::FIELD_MODIFIER, $this->modifier->_getValueAsString());
        }
        if (isset($this->value) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE]) {
            $xw->writeAttribute(self::FIELD_VALUE, $this->value->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->resourceType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESOURCE_TYPE]
                || $this->resourceType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESOURCE_TYPE);
            $this->resourceType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESOURCE_TYPE]);
            $xw->endElement();
        }
        if (isset($this->filterParameter)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FILTER_PARAMETER]
                || $this->filterParameter->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FILTER_PARAMETER);
            $this->filterParameter->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FILTER_PARAMETER]);
            $xw->endElement();
        }
        if (isset($this->comparator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMPARATOR]
                || $this->comparator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMPARATOR);
            $this->comparator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMPARATOR]);
            $xw->endElement();
        }
        if (isset($this->modifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MODIFIER]
                || $this->modifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MODIFIER);
            $this->modifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MODIFIER]);
            $xw->endElement();
        }
        if (isset($this->value)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE]
                || $this->value->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE);
            $this->value->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionFilterBy)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->resourceType)
            || isset($json->_resourceType)
            || property_exists($json, self::FIELD_RESOURCE_TYPE)
            || property_exists($json, self::FIELD_RESOURCE_TYPE_EXT)) {
            $v = $json->_resourceType ?? new \stdClass();
            $v->value = $json->resourceType ?? null;
            $type->setResourceType(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->filterParameter)
            || isset($json->_filterParameter)
            || property_exists($json, self::FIELD_FILTER_PARAMETER)
            || property_exists($json, self::FIELD_FILTER_PARAMETER_EXT)) {
            $v = $json->_filterParameter ?? new \stdClass();
            $v->value = $json->filterParameter ?? null;
            $type->setFilterParameter(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->comparator)
            || isset($json->_comparator)
            || property_exists($json, self::FIELD_COMPARATOR)
            || property_exists($json, self::FIELD_COMPARATOR_EXT)) {
            $v = $json->_comparator ?? new \stdClass();
            $v->value = $json->comparator ?? null;
            $type->setComparator(FHIRSearchComparator::jsonUnserialize($v, $config));
        }
        if (isset($json->modifier)
            || isset($json->_modifier)
            || property_exists($json, self::FIELD_MODIFIER)
            || property_exists($json, self::FIELD_MODIFIER_EXT)) {
            $v = $json->_modifier ?? new \stdClass();
            $v->value = $json->modifier ?? null;
            $type->setModifier(FHIRSearchModifierCode::jsonUnserialize($v, $config));
        }
        if (isset($json->value)
            || isset($json->_value)
            || property_exists($json, self::FIELD_VALUE)
            || property_exists($json, self::FIELD_VALUE_EXT)) {
            $v = $json->_value ?? new \stdClass();
            $v->value = $json->value ?? null;
            $type->setValue(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->resourceType)) {
            if (null !== ($val = $this->resourceType->getValue())) {
                $out->resourceType = $val;
            }
            if ($this->resourceType->_nonValueFieldDefined()) {
                $ext = $this->resourceType->jsonSerialize();
                unset($ext->value);
                $out->_resourceType = $ext;
            }
        }
        if (isset($this->filterParameter)) {
            if (null !== ($val = $this->filterParameter->getValue())) {
                $out->filterParameter = $val;
            }
            if ($this->filterParameter->_nonValueFieldDefined()) {
                $ext = $this->filterParameter->jsonSerialize();
                unset($ext->value);
                $out->_filterParameter = $ext;
            }
        }
        if (isset($this->comparator)) {
            if (null !== ($val = $this->comparator->getValue())) {
                $out->comparator = $val;
            }
            if ($this->comparator->_nonValueFieldDefined()) {
                $ext = $this->comparator->jsonSerialize();
                unset($ext->value);
                $out->_comparator = $ext;
            }
        }
        if (isset($this->modifier)) {
            if (null !== ($val = $this->modifier->getValue())) {
                $out->modifier = $val;
            }
            if ($this->modifier->_nonValueFieldDefined()) {
                $ext = $this->modifier->jsonSerialize();
                unset($ext->value);
                $out->_modifier = $ext;
            }
        }
        if (isset($this->value)) {
            if (null !== ($val = $this->value->getValue())) {
                $out->value = $val;
            }
            if ($this->value->_nonValueFieldDefined()) {
                $ext = $this->value->jsonSerialize();
                unset($ext->value);
                $out->_value = $ext;
            }
        }
        return $out;
    }
}