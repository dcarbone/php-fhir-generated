<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationDataTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionComponent extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_COMPONENT;

    /* class_default.php:50 */
    public const FIELD_CODE = 'code';
    public const FIELD_PERMITTED_DATA_TYPE = 'permittedDataType';
    public const FIELD_PERMITTED_DATA_TYPE_EXT = '_permittedDataType';
    public const FIELD_PERMITTED_UNIT = 'permittedUnit';
    public const FIELD_QUALIFIED_VALUE = 'qualifiedValue';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:114 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance of this component
     * observations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[] 
     */
    protected array $permittedDataType;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $permittedUnit;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[] 
     */
    protected array $qualifiedValue;

    /* constructor.php:61 */
    /**
     * FHIRObservationDefinitionComponent Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationDataTypeEnum[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[] $permittedDataType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $permittedUnit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[] $qualifiedValue
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $permittedDataType = null,
                                null|iterable $permittedUnit = null,
                                null|iterable $qualifiedValue = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $permittedDataType) {
            $this->setPermittedDataType(...$permittedDataType);
        }
        if (null !== $permittedUnit) {
            $this->setPermittedUnit(...$permittedUnit);
        }
        if (null !== $qualifiedValue) {
            $this->setQualifiedValue(...$qualifiedValue);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance of this component
     * observations.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[]
     */
    public function getPermittedDataType(): array
    {
        return $this->permittedDataType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType>
     */
    public function getPermittedDataTypeIterator(): iterable
    {
        if (!isset($this->permittedDataType)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->permittedDataType);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance of this component
     * observations.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationDataTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType $permittedDataType
     * @return static
     */
    public function addPermittedDataType(string|FHIRObservationDataTypeEnum|FHIRObservationDataType $permittedDataType): self
    {
        if (!($permittedDataType instanceof FHIRObservationDataType)) {
            $permittedDataType = new FHIRObservationDataType(value: $permittedDataType);
        }
        if (!isset($this->permittedDataType)) {
            $this->permittedDataType = [];
        }
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance of this component
     * observations.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRObservationDataTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType ...$permittedDataType
     * @return static
     */
    public function setPermittedDataType(string|FHIRObservationDataTypeEnum|FHIRObservationDataType ...$permittedDataType): self
    {
        if ([] === $permittedDataType) {
            unset($this->permittedDataType);
            return $this;
        }
        $this->permittedDataType = [];
        foreach($permittedDataType as $v) {
            if ($v instanceof FHIRObservationDataType) {
                $this->permittedDataType[] = $v;
            } else {
                $this->permittedDataType[] = new FHIRObservationDataType(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getPermittedUnit(): array
    {
        return $this->permittedUnit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getPermittedUnitIterator(): iterable
    {
        if (!isset($this->permittedUnit)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->permittedUnit);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $permittedUnit
     * @return static
     */
    public function addPermittedUnit(FHIRCoding $permittedUnit): self
    {
        if (!isset($this->permittedUnit)) {
            $this->permittedUnit = [];
        }
        $this->permittedUnit[] = $permittedUnit;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$permittedUnit
     * @return static
     */
    public function setPermittedUnit(FHIRCoding ...$permittedUnit): self
    {
        if ([] === $permittedUnit) {
            unset($this->permittedUnit);
            return $this;
        }
        $this->permittedUnit = $permittedUnit;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[]
     */
    public function getQualifiedValue(): array
    {
        return $this->qualifiedValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue>
     */
    public function getQualifiedValueIterator(): iterable
    {
        if (!isset($this->qualifiedValue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->qualifiedValue);
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $qualifiedValue
     * @return static
     */
    public function addQualifiedValue(FHIRObservationDefinitionQualifiedValue $qualifiedValue): self
    {
        if (!isset($this->qualifiedValue)) {
            $this->qualifiedValue = [];
        }
        $this->qualifiedValue[] = $qualifiedValue;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue ...$qualifiedValue
     * @return static
     */
    public function setQualifiedValue(FHIRObservationDefinitionQualifiedValue ...$qualifiedValue): self
    {
        if ([] === $qualifiedValue) {
            unset($this->qualifiedValue);
            return $this;
        }
        $this->qualifiedValue = $qualifiedValue;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionComponent)) {
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
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERMITTED_DATA_TYPE === $cen) {
                $type->addPermittedDataType(FHIRObservationDataType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERMITTED_UNIT === $cen) {
                $type->addPermittedUnit(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUALIFIED_VALUE === $cen) {
                $type->addQualifiedValue(FHIRObservationDefinitionQualifiedValue::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->permittedDataType) && [] !== $this->permittedDataType) {
            foreach($this->permittedDataType as $v) {
                $xw->startElement(self::FIELD_PERMITTED_DATA_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->permittedUnit)) {
            foreach ($this->permittedUnit as $v) {
                $xw->startElement(self::FIELD_PERMITTED_UNIT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->qualifiedValue)) {
            foreach ($this->qualifiedValue as $v) {
                $xw->startElement(self::FIELD_QUALIFIED_VALUE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionComponent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
            }
        }
        if (isset($json->permittedDataType)
            || isset($json->_permittedDataType)
            || property_exists($json, self::FIELD_PERMITTED_DATA_TYPE)
            || property_exists($json, self::FIELD_PERMITTED_DATA_TYPE_EXT)) {
            $vals = (array)($json->permittedDataType ?? []);
            $exts = (array)($json->FIELD_PERMITTED_DATA_TYPE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addPermittedDataType(FHIRObservationDataType::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->permittedUnit) || property_exists($json, self::FIELD_PERMITTED_UNIT)) {
            if (is_object($json->permittedUnit)) {
                $vals = [$json->permittedUnit];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PERMITTED_UNIT, true);
            } else {
                $vals = $json->permittedUnit;
            }
            foreach($vals as $v) {
                $type->addPermittedUnit(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->qualifiedValue) || property_exists($json, self::FIELD_QUALIFIED_VALUE)) {
            if (is_object($json->qualifiedValue)) {
                $vals = [$json->qualifiedValue];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_QUALIFIED_VALUE, true);
            } else {
                $vals = $json->qualifiedValue;
            }
            foreach($vals as $v) {
                $type->addQualifiedValue(FHIRObservationDefinitionQualifiedValue::jsonUnserialize($v, $config));
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
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->permittedDataType) && [] !== $this->permittedDataType) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->permittedDataType as $v) {
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
                $out->permittedDataType = $vals;
            }
            if ($hasExts) {
                $out->_permittedDataType = $exts;
            }
        }
        if (isset($this->permittedUnit) && [] !== $this->permittedUnit) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PERMITTED_UNIT) && 1 === count($this->permittedUnit)) {
                $out->permittedUnit = $this->permittedUnit[0];
            } else {
                $out->permittedUnit = $this->permittedUnit;
            }
        }
        if (isset($this->qualifiedValue) && [] !== $this->qualifiedValue) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_QUALIFIED_VALUE) && 1 === count($this->qualifiedValue)) {
                $out->qualifiedValue = $this->qualifiedValue[0];
            } else {
                $out->qualifiedValue = $this->qualifiedValue;
            }
        }
        return $out;
    }
}