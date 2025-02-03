<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREvidenceVariableHandling;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREvidenceVariableHandlingEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (e.g., population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 */
class FHIREvidenceVariable extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE;

    /* class_default.php:47 */
    public const FIELD_VARIABLE_DEFINITION = 'variableDefinition';
    public const FIELD_HANDLING = 'handling';
    public const FIELD_HANDLING_EXT = '_handling';
    public const FIELD_VALUE_CATEGORY = 'valueCategory';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_RANGE = 'valueRange';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VARIABLE_DEFINITION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_HANDLING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $variableDefinition;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREvidenceVariableHandling 
     */
    protected FHIREvidenceVariableHandling $handling;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $valueCategory;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[] 
     */
    protected array $valueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange[] 
     */
    protected array $valueRange;

    /* constructor.php:62 */
    /**
     * FHIREvidenceVariable Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $variableDefinition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREvidenceVariableHandlingEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREvidenceVariableHandling $handling
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $valueCategory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[] $valueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange[] $valueRange
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $variableDefinition = null,
                                null|string|FHIREvidenceVariableHandlingEnum|FHIREvidenceVariableHandling $handling = null,
                                null|iterable $valueCategory = null,
                                null|iterable $valueQuantity = null,
                                null|iterable $valueRange = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $variableDefinition) {
            $this->setVariableDefinition($variableDefinition);
        }
        if (null !== $handling) {
            $this->setHandling($handling);
        }
        if (null !== $valueCategory) {
            $this->setValueCategory(...$valueCategory);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity(...$valueQuantity);
        }
        if (null !== $valueRange) {
            $this->setValueRange(...$valueRange);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVariableDefinition(): null|FHIRReference
    {
        return $this->variableDefinition ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $variableDefinition
     * @return static
     */
    public function setVariableDefinition(null|FHIRReference $variableDefinition): self
    {
        if (null === $variableDefinition) {
            unset($this->variableDefinition);
            return $this;
        }
        $this->variableDefinition = $variableDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREvidenceVariableHandling
     */
    public function getHandling(): null|FHIREvidenceVariableHandling
    {
        return $this->handling ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREvidenceVariableHandlingEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREvidenceVariableHandling $handling
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHandling(null|string|FHIREvidenceVariableHandlingEnum|FHIREvidenceVariableHandling $handling,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $handling) {
            unset($this->handling);
            return $this;
        }
        if (!($handling instanceof FHIREvidenceVariableHandling)) {
            $handling = new FHIREvidenceVariableHandling(value: $handling);
        }
        $this->handling = $handling;
        if ($this->_valueXMLLocations[self::FIELD_HANDLING] !== $valueXMLLocation) {
            $this->_setHandlingValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the handling element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHandlingValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HANDLING];
    }

    /**
     * Set the location the "value" field of the handling element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHandlingValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HANDLING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getValueCategory(): array
    {
        return $this->valueCategory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getValueCategoryIterator(): iterable
    {
        if (!isset($this->valueCategory)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueCategory);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCategory
     * @return static
     */
    public function addValueCategory(FHIRCodeableConcept $valueCategory): self
    {
        if (!isset($this->valueCategory)) {
            $this->valueCategory = [];
        }
        $this->valueCategory[] = $valueCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$valueCategory
     * @return static
     */
    public function setValueCategory(FHIRCodeableConcept ...$valueCategory): self
    {
        if ([] === $valueCategory) {
            unset($this->valueCategory);
            return $this;
        }
        $this->valueCategory = $valueCategory;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    public function getValueQuantity(): array
    {
        return $this->valueQuantity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity>
     */
    public function getValueQuantityIterator(): iterable
    {
        if (!isset($this->valueQuantity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueQuantity);
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @return static
     */
    public function addValueQuantity(FHIRQuantity $valueQuantity): self
    {
        if (!isset($this->valueQuantity)) {
            $this->valueQuantity = [];
        }
        $this->valueQuantity[] = $valueQuantity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity ...$valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity ...$valueQuantity): self
    {
        if ([] === $valueQuantity) {
            unset($this->valueQuantity);
            return $this;
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange[]
     */
    public function getValueRange(): array
    {
        return $this->valueRange ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange>
     */
    public function getValueRangeIterator(): iterable
    {
        if (!isset($this->valueRange)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->valueRange);
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @return static
     */
    public function addValueRange(FHIRRange $valueRange): self
    {
        if (!isset($this->valueRange)) {
            $this->valueRange = [];
        }
        $this->valueRange[] = $valueRange;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange ...$valueRange
     * @return static
     */
    public function setValueRange(FHIRRange ...$valueRange): self
    {
        if ([] === $valueRange) {
            unset($this->valueRange);
            return $this;
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariable)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VARIABLE_DEFINITION === $cen) {
                $type->setVariableDefinition(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HANDLING === $cen) {
                $type->setHandling(FHIREvidenceVariableHandling::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CATEGORY === $cen) {
                $type->addValueCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $cen) {
                $type->addValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RANGE === $cen) {
                $type->addValueRange(FHIRRange::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HANDLING])) {
            if (isset($type->handling)) {
                $type->handling->setValue((string)$attributes[self::FIELD_HANDLING]);
                $type->_setHandlingValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHandling((string)$attributes[self::FIELD_HANDLING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->handling) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HANDLING]) {
            $xw->writeAttribute(self::FIELD_HANDLING, $this->handling->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->variableDefinition)) {
            $xw->startElement(self::FIELD_VARIABLE_DEFINITION);
            $this->variableDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->handling)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HANDLING]
                || $this->handling->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HANDLING);
            $this->handling->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HANDLING]);
            $xw->endElement();
        }
        if (isset($this->valueCategory)) {
            foreach ($this->valueCategory as $v) {
                $xw->startElement(self::FIELD_VALUE_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->valueQuantity)) {
            foreach ($this->valueQuantity as $v) {
                $xw->startElement(self::FIELD_VALUE_QUANTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->valueRange)) {
            foreach ($this->valueRange as $v) {
                $xw->startElement(self::FIELD_VALUE_RANGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariable)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_VARIABLE_DEFINITION]) || array_key_exists(self::FIELD_VARIABLE_DEFINITION, $json)) {
            $type->setVariableDefinition(FHIRReference::jsonUnserialize($json[self::FIELD_VARIABLE_DEFINITION], $config));
        }
        if (isset($json[self::FIELD_HANDLING])
            || isset($json[self::FIELD_HANDLING_EXT])
            || array_key_exists(self::FIELD_HANDLING, $json)
            || array_key_exists(self::FIELD_HANDLING_EXT, $json)) {
            $value = $json[self::FIELD_HANDLING] ?? null;
            $type->setHandling(FHIREvidenceVariableHandling::jsonUnserialize(
                (is_array($value) ? $value : [FHIREvidenceVariableHandling::FIELD_VALUE => $value]) + ($json[self::FIELD_HANDLING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CATEGORY]) || array_key_exists(self::FIELD_VALUE_CATEGORY, $json)) {
            $vs = $json[self::FIELD_VALUE_CATEGORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValueCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            $vs = $json[self::FIELD_VALUE_QUANTITY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValueQuantity(FHIRQuantity::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VALUE_RANGE]) || array_key_exists(self::FIELD_VALUE_RANGE, $json)) {
            $vs = $json[self::FIELD_VALUE_RANGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValueRange(FHIRRange::jsonUnserialize($v, $config));
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
        if (isset($this->variableDefinition)) {
            $out->variableDefinition = $this->variableDefinition;
        }
        if (isset($this->handling)) {
            if (null !== ($val = $this->handling->getValue())) {
                $out->handling = $val;
            }
            if ($this->handling->_nonValueFieldDefined()) {
                $ext = $this->handling->jsonSerialize();
                unset($ext->value);
                $out->_handling = $ext;
            }
        }
        if (isset($this->valueCategory) && [] !== $this->valueCategory) {
            $out->valueCategory = $this->valueCategory;
        }
        if (isset($this->valueQuantity) && [] !== $this->valueQuantity) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueRange) && [] !== $this->valueRange) {
            $out->valueRange = $this->valueRange;
        }
        return $out;
    }
}