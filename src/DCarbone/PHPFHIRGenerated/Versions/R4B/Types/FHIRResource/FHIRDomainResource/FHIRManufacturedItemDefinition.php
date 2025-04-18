<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * The definition and characteristics of a medicinal manufactured item, such as a
 * tablet or capsule, as contained in a packaged medicinal product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRManufacturedItemDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_MANUFACTURED_DOSE_FORM = 'manufacturedDoseForm';
    public const FIELD_UNIT_OF_PRESENTATION = 'unitOfPresentation';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_PROPERTY = 'property';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MANUFACTURED_DOSE_FORM => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus 
     */
    #[FHIRPublicationStatus]
    protected FHIRPublicationStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical
     * product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $manufacturedDoseForm;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The “real world” units in which the quantity of the manufactured item is
     * described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $unitOfPresentation;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it
     * currently causes technical issues).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> 
     */
    #[FHIRReference]
    protected array $manufacturer;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this manufactured item. This is only needed if the
     * ingredients are not specified by incoming references from the Ingredient
     * resource.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $ingredient;
    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this item.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty> 
     */
    #[FHIRManufacturedItemDefinitionProperty]
    protected array $property;

    /* constructor.php:61 */
    /**
     * FHIRManufacturedItemDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $manufacturedDoseForm
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> $manufacturer
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> $ingredient
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty> $property
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status = null,
                                null|FHIRCodeableConcept $manufacturedDoseForm = null,
                                null|FHIRCodeableConcept $unitOfPresentation = null,
                                null|iterable $manufacturer = null,
                                null|iterable $ingredient = null,
                                null|iterable $property = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $manufacturedDoseForm) {
            $this->setManufacturedDoseForm($manufacturedDoseForm);
        }
        if (null !== $unitOfPresentation) {
            $this->setUnitOfPresentation($unitOfPresentation);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer(...$manufacturer);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            $status = new FHIRPublicationStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical
     * product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getManufacturedDoseForm(): null|FHIRCodeableConcept
    {
        return $this->manufacturedDoseForm ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical
     * product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $manufacturedDoseForm
     * @return static
     */
    public function setManufacturedDoseForm(null|FHIRCodeableConcept $manufacturedDoseForm): self
    {
        if (null === $manufacturedDoseForm) {
            unset($this->manufacturedDoseForm);
            return $this;
        }
        $this->manufacturedDoseForm = $manufacturedDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The “real world” units in which the quantity of the manufactured item is
     * described.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation(): null|FHIRCodeableConcept
    {
        return $this->unitOfPresentation ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The “real world” units in which the quantity of the manufactured item is
     * described.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @return static
     */
    public function setUnitOfPresentation(null|FHIRCodeableConcept $unitOfPresentation): self
    {
        if (null === $unitOfPresentation) {
            unset($this->unitOfPresentation);
            return $this;
        }
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it
     * currently causes technical issues).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getManufacturerIterator(): iterable
    {
        if (!isset($this->manufacturer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manufacturer);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it
     * currently causes technical issues).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(FHIRReference $manufacturer): self
    {
        if (!isset($this->manufacturer)) {
            $this->manufacturer = [];
        }
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it
     * currently causes technical issues).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference ...$manufacturer): self
    {
        if ([] === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this manufactured item. This is only needed if the
     * ingredients are not specified by incoming references from the Ingredient
     * resource.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getIngredient(): array
    {
        return $this->ingredient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getIngredientIterator(): iterable
    {
        if (!isset($this->ingredient)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->ingredient);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this manufactured item. This is only needed if the
     * ingredients are not specified by incoming references from the Ingredient
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $ingredient
     * @return static
     */
    public function addIngredient(FHIRCodeableConcept $ingredient): self
    {
        if (!isset($this->ingredient)) {
            $this->ingredient = [];
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this manufactured item. This is only needed if the
     * ingredients are not specified by incoming references from the Ingredient
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$ingredient
     * @return static
     */
    public function setIngredient(FHIRCodeableConcept ...$ingredient): self
    {
        if ([] === $ingredient) {
            unset($this->ingredient);
            return $this;
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this item.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty>
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty $property
     * @return static
     */
    public function addProperty(FHIRManufacturedItemDefinitionProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * The definition and characteristics of a medicinal manufactured item, such as a
     * tablet or capsule, as contained in a packaged medicinal product.
     *
     * General characteristics of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty ...$property
     * @return static
     */
    public function setProperty(FHIRManufacturedItemDefinitionProperty ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = $property;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRManufacturedItemDefinition)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURED_DOSE_FORM === $cen) {
                $type->setManufacturedDoseForm(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT_OF_PRESENTATION === $cen) {
                $type->setUnitOfPresentation(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INGREDIENT === $cen) {
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRManufacturedItemDefinitionProperty::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ManufacturedItemDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->manufacturedDoseForm)) {
            $xw->startElement(self::FIELD_MANUFACTURED_DOSE_FORM);
            $this->manufacturedDoseForm->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unitOfPresentation)) {
            $xw->startElement(self::FIELD_UNIT_OF_PRESENTATION);
            $this->unitOfPresentation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            foreach ($this->manufacturer as $v) {
                $xw->startElement(self::FIELD_MANUFACTURER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->ingredient)) {
            foreach ($this->ingredient as $v) {
                $xw->startElement(self::FIELD_INGREDIENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRManufacturedItemDefinition)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->manufacturedDoseForm) || property_exists($decoded, self::FIELD_MANUFACTURED_DOSE_FORM)) {
            if (is_array($decoded->manufacturedDoseForm)) {
                $type->setManufacturedDoseForm(FHIRCodeableConcept::jsonUnserialize(reset($decoded->manufacturedDoseForm), $config));
            } else {
                $type->setManufacturedDoseForm(FHIRCodeableConcept::jsonUnserialize($decoded->manufacturedDoseForm, $config));
            }
        }
        if (isset($decoded->unitOfPresentation) || property_exists($decoded, self::FIELD_UNIT_OF_PRESENTATION)) {
            if (is_array($decoded->unitOfPresentation)) {
                $type->setUnitOfPresentation(FHIRCodeableConcept::jsonUnserialize(reset($decoded->unitOfPresentation), $config));
            } else {
                $type->setUnitOfPresentation(FHIRCodeableConcept::jsonUnserialize($decoded->unitOfPresentation, $config));
            }
        }
        if (isset($decoded->manufacturer) || property_exists($decoded, self::FIELD_MANUFACTURER)) {
            if (is_object($decoded->manufacturer)) {
                $vals = [$decoded->manufacturer];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MANUFACTURER, true);
            } else {
                $vals = $decoded->manufacturer;
            }
            foreach($vals as $v) {
                $type->addManufacturer(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->ingredient) || property_exists($decoded, self::FIELD_INGREDIENT)) {
            if (is_object($decoded->ingredient)) {
                $vals = [$decoded->ingredient];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INGREDIENT, true);
            } else {
                $vals = $decoded->ingredient;
            }
            foreach($vals as $v) {
                $type->addIngredient(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->property) || property_exists($decoded, self::FIELD_PROPERTY)) {
            if (is_object($decoded->property)) {
                $vals = [$decoded->property];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROPERTY, true);
            } else {
                $vals = $decoded->property;
            }
            foreach($vals as $v) {
                $type->addProperty(FHIRManufacturedItemDefinitionProperty::jsonUnserialize($v, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->manufacturedDoseForm)) {
            $out->manufacturedDoseForm = $this->manufacturedDoseForm;
        }
        if (isset($this->unitOfPresentation)) {
            $out->unitOfPresentation = $this->unitOfPresentation;
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANUFACTURER) && 1 === count($this->manufacturer)) {
                $out->manufacturer = $this->manufacturer[0];
            } else {
                $out->manufacturer = $this->manufacturer;
            }
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INGREDIENT) && 1 === count($this->ingredient)) {
                $out->ingredient = $this->ingredient[0];
            } else {
                $out->ingredient = $this->ingredient;
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROPERTY) && 1 === count($this->property)) {
                $out->property = $this->property[0];
            } else {
                $out->property = $this->property;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}