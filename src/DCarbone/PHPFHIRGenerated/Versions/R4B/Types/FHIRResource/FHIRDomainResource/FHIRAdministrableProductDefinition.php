<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * A medicinal product in the final form which is suitable for administering to a
 * patient (after any mixing of multiple components, dissolution etc. has been
 * performed).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRAdministrableProductDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_FORM_OF = 'formOf';
    public const FIELD_ADMINISTRABLE_DOSE_FORM = 'administrableDoseForm';
    public const FIELD_UNIT_OF_PRESENTATION = 'unitOfPresentation';
    public const FIELD_PRODUCED_FROM = 'producedFrom';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_DEVICE = 'device';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_ROUTE_OF_ADMINISTRATION = 'routeOfAdministration';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $formOf;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $administrableDoseForm;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $unitOfPresentation;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $producedFrom;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $ingredient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $device;
    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[] 
     */
    protected array $property;
    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[] 
     */
    protected array $routeOfAdministration;

    /** Default validation map for fields in type AdministrableProductDefinition */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ROUTE_OF_ADMINISTRATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRAdministrableProductDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $formOf
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $administrableDoseForm
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $producedFrom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $ingredient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $device
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[] $property
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[] $routeOfAdministration
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRStringPrimitive|FHIRString $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRPublicationStatus $status = null,
                                null|iterable $formOf = null,
                                null|FHIRCodeableConcept $administrableDoseForm = null,
                                null|FHIRCodeableConcept $unitOfPresentation = null,
                                null|iterable $producedFrom = null,
                                null|iterable $ingredient = null,
                                null|FHIRReference $device = null,
                                null|iterable $property = null,
                                null|iterable $routeOfAdministration = null,
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
        if (null !== $formOf) {
            $this->setFormOf(...$formOf);
        }
        if (null !== $administrableDoseForm) {
            $this->setAdministrableDoseForm($administrableDoseForm);
        }
        if (null !== $unitOfPresentation) {
            $this->setUnitOfPresentation($unitOfPresentation);
        }
        if (null !== $producedFrom) {
            $this->setProducedFrom(...$producedFrom);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $device) {
            $this->setDevice($device);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $routeOfAdministration) {
            $this->setRouteOfAdministration(...$routeOfAdministration);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
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
        if (!isset($this->identifier) || [] === $this->identifier) {
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
     * An identifier for the administrable product.
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
     * An identifier for the administrable product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
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
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getFormOf(): array
    {
        return $this->formOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getFormOfIterator(): iterable
    {
        if (!isset($this->formOf) || [] === $this->formOf) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->formOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $formOf
     * @return static
     */
    public function addFormOf(FHIRReference $formOf): self
    {
        if (!isset($this->formOf)) {
            $this->formOf = [];
        }
        $this->formOf[] = $formOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$formOf
     * @return static
     */
    public function setFormOf(FHIRReference ...$formOf): self
    {
        $this->formOf = $formOf;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAdministrableDoseForm(): null|FHIRCodeableConcept
    {
        return $this->administrableDoseForm ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $administrableDoseForm
     * @return static
     */
    public function setAdministrableDoseForm(null|FHIRCodeableConcept $administrableDoseForm): self
    {
        if (null === $administrableDoseForm) {
            unset($this->administrableDoseForm);
            return $this;
        }
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
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
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
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
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getProducedFrom(): array
    {
        return $this->producedFrom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getProducedFromIterator(): iterable
    {
        if (!isset($this->producedFrom) || [] === $this->producedFrom) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->producedFrom);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $producedFrom
     * @return static
     */
    public function addProducedFrom(FHIRReference $producedFrom): self
    {
        if (!isset($this->producedFrom)) {
            $this->producedFrom = [];
        }
        $this->producedFrom[] = $producedFrom;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$producedFrom
     * @return static
     */
    public function setProducedFrom(FHIRReference ...$producedFrom): self
    {
        $this->producedFrom = $producedFrom;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
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
        if (!isset($this->ingredient) || [] === $this->ingredient) {
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
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
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
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$ingredient
     * @return static
     */
    public function setIngredient(FHIRCodeableConcept ...$ingredient): self
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device): self
    {
        if (null === $device) {
            unset($this->device);
            return $this;
        }
        $this->device = $device;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[]
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property) || [] === $this->property) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty $property
     * @return static
     */
    public function addProperty(FHIRAdministrableProductDefinitionProperty $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty ...$property
     * @return static
     */
    public function setProperty(FHIRAdministrableProductDefinitionProperty ...$property): self
    {
        $this->property = $property;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[]
     */
    public function getRouteOfAdministration(): array
    {
        return $this->routeOfAdministration ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration>
     */
    public function getRouteOfAdministrationIterator(): iterable
    {
        if (!isset($this->routeOfAdministration) || [] === $this->routeOfAdministration) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->routeOfAdministration);
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration $routeOfAdministration
     * @return static
     */
    public function addRouteOfAdministration(FHIRAdministrableProductDefinitionRouteOfAdministration $routeOfAdministration): self
    {
        if (!isset($this->routeOfAdministration)) {
            $this->routeOfAdministration = [];
        }
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration ...$routeOfAdministration
     * @return static
     */
    public function setRouteOfAdministration(FHIRAdministrableProductDefinitionRouteOfAdministration ...$routeOfAdministration): self
    {
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE_OF_ADMINISTRATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM_OF])) {
            $v = $this->getFormOf();
            foreach($validationRules[self::FIELD_FORM_OF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORM_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM_OF])) {
                        $errs[self::FIELD_FORM_OF] = [];
                    }
                    $errs[self::FIELD_FORM_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            $v = $this->getAdministrableDoseForm();
            foreach($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMINISTRABLE_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
                        $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_OF_PRESENTATION])) {
            $v = $this->getUnitOfPresentation();
            foreach($validationRules[self::FIELD_UNIT_OF_PRESENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNIT_OF_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_OF_PRESENTATION])) {
                        $errs[self::FIELD_UNIT_OF_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_UNIT_OF_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCED_FROM])) {
            $v = $this->getProducedFrom();
            foreach($validationRules[self::FIELD_PRODUCED_FROM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCED_FROM])) {
                        $errs[self::FIELD_PRODUCED_FROM] = [];
                    }
                    $errs[self::FIELD_PRODUCED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            $v = $this->getRouteOfAdministration();
            foreach($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROUTE_OF_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                        $errs[self::FIELD_ROUTE_OF_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ROUTE_OF_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdministrableProductDefinition)) {
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRPublicationStatus(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORM_OF === $childName) {
                $v = new FHIRReference();
                $type->addFormOf(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADMINISTRABLE_DOSE_FORM === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAdministrableDoseForm(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNIT_OF_PRESENTATION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setUnitOfPresentation(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRODUCED_FROM === $childName) {
                $v = new FHIRReference();
                $type->addProducedFrom(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INGREDIENT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEVICE === $childName) {
                $v = new FHIRReference();
                $type->setDevice(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROPERTY === $childName) {
                $v = new FHIRAdministrableProductDefinitionProperty();
                $type->addProperty(FHIRAdministrableProductDefinitionProperty::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROUTE_OF_ADMINISTRATION === $childName) {
                $v = new FHIRAdministrableProductDefinitionRouteOfAdministration();
                $type->addRouteOfAdministration(FHIRAdministrableProductDefinitionRouteOfAdministration::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRString(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('AdministrableProductDefinition', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->formOf)) {
            foreach ($this->formOf as $v) {
                $xw->startElement(self::FIELD_FORM_OF);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->administrableDoseForm)) {
            $xw->startElement(self::FIELD_ADMINISTRABLE_DOSE_FORM);
            $this->administrableDoseForm->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unitOfPresentation)) {
            $xw->startElement(self::FIELD_UNIT_OF_PRESENTATION);
            $this->unitOfPresentation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->producedFrom)) {
            foreach ($this->producedFrom as $v) {
                $xw->startElement(self::FIELD_PRODUCED_FROM);
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
        if (isset($this->device)) {
            $xw->startElement(self::FIELD_DEVICE);
            $this->device->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->routeOfAdministration)) {
            foreach ($this->routeOfAdministration as $v) {
                $xw->startElement(self::FIELD_ROUTE_OF_ADMINISTRATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdministrableProductDefinition)) {
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
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRPublicationStatus($ext));
            } else {
                $type->setStatus(new FHIRPublicationStatus(null));
            }
        }
        if (isset($json[self::FIELD_FORM_OF]) || array_key_exists(self::FIELD_FORM_OF, $json)) {
            if (is_array($json[self::FIELD_FORM_OF])) {
                foreach($json[self::FIELD_FORM_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addFormOf($v);
                    } else {
                        $type->addFormOf(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_FORM_OF] instanceof FHIRReference) {
                $type->addFormOf($json[self::FIELD_FORM_OF]);
            } else {
                $type->addFormOf(new FHIRReference($json[self::FIELD_FORM_OF]));
            }
        }
        if (isset($json[self::FIELD_ADMINISTRABLE_DOSE_FORM]) || array_key_exists(self::FIELD_ADMINISTRABLE_DOSE_FORM, $json)) {
            if ($json[self::FIELD_ADMINISTRABLE_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $type->setAdministrableDoseForm($json[self::FIELD_ADMINISTRABLE_DOSE_FORM]);
            } else {
                $type->setAdministrableDoseForm(new FHIRCodeableConcept($json[self::FIELD_ADMINISTRABLE_DOSE_FORM]));
            }
        }
        if (isset($json[self::FIELD_UNIT_OF_PRESENTATION]) || array_key_exists(self::FIELD_UNIT_OF_PRESENTATION, $json)) {
            if ($json[self::FIELD_UNIT_OF_PRESENTATION] instanceof FHIRCodeableConcept) {
                $type->setUnitOfPresentation($json[self::FIELD_UNIT_OF_PRESENTATION]);
            } else {
                $type->setUnitOfPresentation(new FHIRCodeableConcept($json[self::FIELD_UNIT_OF_PRESENTATION]));
            }
        }
        if (isset($json[self::FIELD_PRODUCED_FROM]) || array_key_exists(self::FIELD_PRODUCED_FROM, $json)) {
            if (is_array($json[self::FIELD_PRODUCED_FROM])) {
                foreach($json[self::FIELD_PRODUCED_FROM] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addProducedFrom($v);
                    } else {
                        $type->addProducedFrom(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_PRODUCED_FROM] instanceof FHIRReference) {
                $type->addProducedFrom($json[self::FIELD_PRODUCED_FROM]);
            } else {
                $type->addProducedFrom(new FHIRReference($json[self::FIELD_PRODUCED_FROM]));
            }
        }
        if (isset($json[self::FIELD_INGREDIENT]) || array_key_exists(self::FIELD_INGREDIENT, $json)) {
            if (is_array($json[self::FIELD_INGREDIENT])) {
                foreach($json[self::FIELD_INGREDIENT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addIngredient($v);
                    } else {
                        $type->addIngredient(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_INGREDIENT] instanceof FHIRCodeableConcept) {
                $type->addIngredient($json[self::FIELD_INGREDIENT]);
            } else {
                $type->addIngredient(new FHIRCodeableConcept($json[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($json[self::FIELD_DEVICE]) || array_key_exists(self::FIELD_DEVICE, $json)) {
            if ($json[self::FIELD_DEVICE] instanceof FHIRReference) {
                $type->setDevice($json[self::FIELD_DEVICE]);
            } else {
                $type->setDevice(new FHIRReference($json[self::FIELD_DEVICE]));
            }
        }
        if (isset($json[self::FIELD_PROPERTY]) || array_key_exists(self::FIELD_PROPERTY, $json)) {
            if (is_array($json[self::FIELD_PROPERTY])) {
                foreach($json[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRAdministrableProductDefinitionProperty) {
                        $type->addProperty($v);
                    } else {
                        $type->addProperty(new FHIRAdministrableProductDefinitionProperty($v));
                    }
                }
            } elseif ($json[self::FIELD_PROPERTY] instanceof FHIRAdministrableProductDefinitionProperty) {
                $type->addProperty($json[self::FIELD_PROPERTY]);
            } else {
                $type->addProperty(new FHIRAdministrableProductDefinitionProperty($json[self::FIELD_PROPERTY]));
            }
        }
        if (isset($json[self::FIELD_ROUTE_OF_ADMINISTRATION]) || array_key_exists(self::FIELD_ROUTE_OF_ADMINISTRATION, $json)) {
            if (is_array($json[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                foreach($json[self::FIELD_ROUTE_OF_ADMINISTRATION] as $v) {
                    if ($v instanceof FHIRAdministrableProductDefinitionRouteOfAdministration) {
                        $type->addRouteOfAdministration($v);
                    } else {
                        $type->addRouteOfAdministration(new FHIRAdministrableProductDefinitionRouteOfAdministration($v));
                    }
                }
            } elseif ($json[self::FIELD_ROUTE_OF_ADMINISTRATION] instanceof FHIRAdministrableProductDefinitionRouteOfAdministration) {
                $type->addRouteOfAdministration($json[self::FIELD_ROUTE_OF_ADMINISTRATION]);
            } else {
                $type->addRouteOfAdministration(new FHIRAdministrableProductDefinitionRouteOfAdministration($json[self::FIELD_ROUTE_OF_ADMINISTRATION]));
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
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->formOf) && [] !== $this->formOf) {
            $out->formOf = $this->formOf;
        }
        if (isset($this->administrableDoseForm)) {
            $out->administrableDoseForm = $this->administrableDoseForm;
        }
        if (isset($this->unitOfPresentation)) {
            $out->unitOfPresentation = $this->unitOfPresentation;
        }
        if (isset($this->producedFrom) && [] !== $this->producedFrom) {
            $out->producedFrom = $this->producedFrom;
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            $out->ingredient = $this->ingredient;
        }
        if (isset($this->device)) {
            $out->device = $this->device;
        }
        if (isset($this->property) && [] !== $this->property) {
            $out->property = $this->property;
        }
        if (isset($this->routeOfAdministration) && [] !== $this->routeOfAdministration) {
            $out->routeOfAdministration = $this->routeOfAdministration;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}