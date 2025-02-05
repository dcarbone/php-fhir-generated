<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 */
class FHIRClinicalUseDefinitionInteraction extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INTERACTION;

    /* class_default.php:50 */
    public const FIELD_INTERACTANT = 'interactant';
    public const FIELD_TYPE = 'type';
    public const FIELD_EFFECT = 'effect';
    public const FIELD_INCIDENCE = 'incidence';
    public const FIELD_MANAGEMENT = 'management';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:114 */
    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * The specific medication, product, food, substance etc. or laboratory test that
     * interacts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant[] 
     */
    protected array $interactant;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction,
     * drug-lab test interaction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The effect of the interaction, for example "reduced gastric absorption of
     * primary medication".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $effect;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $incidence;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions for managing the interaction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $management;

    /* constructor.php:61 */
    /**
     * FHIRClinicalUseDefinitionInteraction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant[] $interactant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $effect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $incidence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $management
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $interactant = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableReference $effect = null,
                                null|FHIRCodeableConcept $incidence = null,
                                null|iterable $management = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $interactant) {
            $this->setInteractant(...$interactant);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $effect) {
            $this->setEffect($effect);
        }
        if (null !== $incidence) {
            $this->setIncidence($incidence);
        }
        if (null !== $management) {
            $this->setManagement(...$management);
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
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * The specific medication, product, food, substance etc. or laboratory test that
     * interacts.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant[]
     */
    public function getInteractant(): array
    {
        return $this->interactant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant>
     */
    public function getInteractantIterator(): iterable
    {
        if (!isset($this->interactant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->interactant);
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * The specific medication, product, food, substance etc. or laboratory test that
     * interacts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant $interactant
     * @return static
     */
    public function addInteractant(FHIRClinicalUseDefinitionInteractant $interactant): self
    {
        if (!isset($this->interactant)) {
            $this->interactant = [];
        }
        $this->interactant[] = $interactant;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * The specific medication, product, food, substance etc. or laboratory test that
     * interacts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant ...$interactant
     * @return static
     */
    public function setInteractant(FHIRClinicalUseDefinitionInteractant ...$interactant): self
    {
        if ([] === $interactant) {
            unset($this->interactant);
            return $this;
        }
        $this->interactant = $interactant;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction,
     * drug-lab test interaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction,
     * drug-lab test interaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The effect of the interaction, for example "reduced gastric absorption of
     * primary medication".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getEffect(): null|FHIRCodeableReference
    {
        return $this->effect ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The effect of the interaction, for example "reduced gastric absorption of
     * primary medication".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $effect
     * @return static
     */
    public function setEffect(null|FHIRCodeableReference $effect): self
    {
        if (null === $effect) {
            unset($this->effect);
            return $this;
        }
        $this->effect = $effect;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getIncidence(): null|FHIRCodeableConcept
    {
        return $this->incidence ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $incidence
     * @return static
     */
    public function setIncidence(null|FHIRCodeableConcept $incidence): self
    {
        if (null === $incidence) {
            unset($this->incidence);
            return $this;
        }
        $this->incidence = $incidence;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions for managing the interaction.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getManagement(): array
    {
        return $this->management ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getManagementIterator(): iterable
    {
        if (!isset($this->management)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->management);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions for managing the interaction.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $management
     * @return static
     */
    public function addManagement(FHIRCodeableConcept $management): self
    {
        if (!isset($this->management)) {
            $this->management = [];
        }
        $this->management[] = $management;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions for managing the interaction.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$management
     * @return static
     */
    public function setManagement(FHIRCodeableConcept ...$management): self
    {
        if ([] === $management) {
            unset($this->management);
            return $this;
        }
        $this->management = $management;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteraction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteraction
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalUseDefinitionInteraction)) {
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
            } else if (self::FIELD_INTERACTANT === $cen) {
                $type->addInteractant(FHIRClinicalUseDefinitionInteractant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EFFECT === $cen) {
                $type->setEffect(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCIDENCE === $cen) {
                $type->setIncidence(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGEMENT === $cen) {
                $type->addManagement(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
        if (isset($this->interactant)) {
            foreach ($this->interactant as $v) {
                $xw->startElement(self::FIELD_INTERACTANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->effect)) {
            $xw->startElement(self::FIELD_EFFECT);
            $this->effect->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->incidence)) {
            $xw->startElement(self::FIELD_INCIDENCE);
            $this->incidence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->management)) {
            foreach ($this->management as $v) {
                $xw->startElement(self::FIELD_MANAGEMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteraction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteraction
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalUseDefinitionInteraction)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->interactant) || property_exists($json, self::FIELD_INTERACTANT)) {
            if (is_object($json->interactant)) {
                $vals = [$json->interactant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INTERACTANT, true);
            } else {
                $vals = $json->interactant;
            }
            foreach($vals as $v) {
                $type->addInteractant(FHIRClinicalUseDefinitionInteractant::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->effect) || property_exists($json, self::FIELD_EFFECT)) {
            if (is_array($json->effect)) {
                $type->setEffect(FHIRCodeableReference::jsonUnserialize(reset($json->effect), $config));
            } else {
                $type->setEffect(FHIRCodeableReference::jsonUnserialize($json->effect, $config));
            }
        }
        if (isset($json->incidence) || property_exists($json, self::FIELD_INCIDENCE)) {
            if (is_array($json->incidence)) {
                $type->setIncidence(FHIRCodeableConcept::jsonUnserialize(reset($json->incidence), $config));
            } else {
                $type->setIncidence(FHIRCodeableConcept::jsonUnserialize($json->incidence, $config));
            }
        }
        if (isset($json->management) || property_exists($json, self::FIELD_MANAGEMENT)) {
            if (is_object($json->management)) {
                $vals = [$json->management];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MANAGEMENT, true);
            } else {
                $vals = $json->management;
            }
            foreach($vals as $v) {
                $type->addManagement(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($this->interactant) && [] !== $this->interactant) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INTERACTANT) && 1 === count($this->interactant)) {
                $out->interactant = $this->interactant[0];
            } else {
                $out->interactant = $this->interactant;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->effect)) {
            $out->effect = $this->effect;
        }
        if (isset($this->incidence)) {
            $out->incidence = $this->incidence;
        }
        if (isset($this->management) && [] !== $this->management) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANAGEMENT) && 1 === count($this->management)) {
                $out->management = $this->management[0];
            } else {
                $out->management = $this->management;
            }
        }
        return $out;
    }
}