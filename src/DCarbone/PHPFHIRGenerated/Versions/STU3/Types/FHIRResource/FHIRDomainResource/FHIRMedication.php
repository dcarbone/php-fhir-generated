<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * This resource is primarily used for the identification and definition of a
 * medication. It covers the ingredients and the packaging for a medication.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedication extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION;


    public const FIELD_CODE = 'code';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_IS_BRAND = 'isBrand';
    public const FIELD_IS_BRAND_EXT = '_isBrand';
    public const FIELD_IS_OVER_THE_COUNTER = 'isOverTheCounter';
    public const FIELD_IS_OVER_THE_COUNTER_EXT = '_isOverTheCounter';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_FORM = 'form';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_PACKAGE = 'package';
    public const FIELD_IMAGE = 'image';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code (or set of codes) that specify this medication, or a textual description
     * if no code is available. Usage note: This could be a standard medication code
     * such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or
     * local formulary code, optionally with translations to other code systems.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A coded concept defining if the medication is in active use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication is in active use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus 
     */
    protected FHIRMedicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isBrand;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the medication can be obtained without an order from a
     * prescriber.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isOverTheCounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $manufacturer;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $form;
    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient[] 
     */
    protected array $ingredient;
    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information that only applies to packages (not products).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage 
     */
    protected FHIRMedicationPackage $package;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Photo(s) or graphic representation(s) of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment[] 
     */
    protected array $image;

    /** Default validation map for fields in type Medication */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRMedication Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isBrand
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isOverTheCounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $form
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient[] $ingredient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage $package
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment[] $image
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
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRMedicationStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isBrand = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isOverTheCounter = null,
                                null|FHIRReference $manufacturer = null,
                                null|FHIRCodeableConcept $form = null,
                                null|iterable $ingredient = null,
                                null|FHIRMedicationPackage $package = null,
                                null|iterable $image = null,
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
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $isBrand) {
            $this->setIsBrand($isBrand);
        }
        if (null !== $isOverTheCounter) {
            $this->setIsOverTheCounter($isOverTheCounter);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer($manufacturer);
        }
        if (null !== $form) {
            $this->setForm($form);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $package) {
            $this->setPackage($package);
        }
        if (null !== $image) {
            $this->setImage(...$image);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code (or set of codes) that specify this medication, or a textual description
     * if no code is available. Usage note: This could be a standard medication code
     * such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or
     * local formulary code, optionally with translations to other code systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
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
     * A code (or set of codes) that specify this medication, or a textual description
     * if no code is available. Usage note: This could be a standard medication code
     * such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or
     * local formulary code, optionally with translations to other code systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
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
     * A coded concept defining if the medication is in active use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication is in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus
     */
    public function getStatus(): null|FHIRMedicationStatus
    {
        return $this->status ?? null;
    }

    /**
     * A coded concept defining if the medication is in active use
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate if the medication is in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIsBrand(): null|FHIRBoolean
    {
        return $this->isBrand ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isBrand
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIsBrand(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isBrand,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $isBrand) {
            unset($this->isBrand);
            return $this;
        }
        if (!($isBrand instanceof FHIRBoolean)) {
            $isBrand = new FHIRBoolean(value: $isBrand);
        }
        if (null !== $valueXMLLocation) {
            $isBrand->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $isBrand->_getValueXMLLocation()) {
            $isBrand->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->isBrand = $isBrand;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the medication can be obtained without an order from a
     * prescriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getIsOverTheCounter(): null|FHIRBoolean
    {
        return $this->isOverTheCounter ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set to true if the medication can be obtained without an order from a
     * prescriber.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $isOverTheCounter
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIsOverTheCounter(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isOverTheCounter,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $isOverTheCounter) {
            unset($this->isOverTheCounter);
            return $this;
        }
        if (!($isOverTheCounter instanceof FHIRBoolean)) {
            $isOverTheCounter = new FHIRBoolean(value: $isOverTheCounter);
        }
        if (null !== $valueXMLLocation) {
            $isOverTheCounter->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $isOverTheCounter->_getValueXMLLocation()) {
            $isOverTheCounter->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->isOverTheCounter = $isOverTheCounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getManufacturer(): null|FHIRReference
    {
        return $this->manufacturer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer of the medication product. This is not
     * intended to represent the distributor of a medication product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRReference $manufacturer): self
    {
        if (null === $manufacturer) {
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
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getForm(): null|FHIRCodeableConcept
    {
        return $this->form ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $form
     * @return static
     */
    public function setForm(null|FHIRCodeableConcept $form): self
    {
        if (null === $form) {
            unset($this->form);
            return $this;
        }
        $this->form = $form;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient[]
     */
    public function getIngredient(): array
    {
        return $this->ingredient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient>
     */
    public function getIngredientIterator(): iterable
    {
        if (!isset($this->ingredient) || [] === $this->ingredient) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->ingredient);
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient $ingredient
     * @return static
     */
    public function addIngredient(FHIRMedicationIngredient $ingredient): self
    {
        if (!isset($this->ingredient)) {
            $this->ingredient = [];
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient ...$ingredient
     * @return static
     */
    public function setIngredient(FHIRMedicationIngredient ...$ingredient): self
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information that only applies to packages (not products).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     */
    public function getPackage(): null|FHIRMedicationPackage
    {
        return $this->package ?? null;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information that only applies to packages (not products).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage $package
     * @return static
     */
    public function setPackage(null|FHIRMedicationPackage $package): self
    {
        if (null === $package) {
            unset($this->package);
            return $this;
        }
        $this->package = $package;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Photo(s) or graphic representation(s) of the medication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment[]
     */
    public function getImage(): array
    {
        return $this->image ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment>
     */
    public function getImageIterator(): iterable
    {
        if (!isset($this->image) || [] === $this->image) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->image);
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Photo(s) or graphic representation(s) of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $image
     * @return static
     */
    public function addImage(FHIRAttachment $image): self
    {
        if (!isset($this->image)) {
            $this->image = [];
        }
        $this->image[] = $image;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Photo(s) or graphic representation(s) of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment ...$image
     * @return static
     */
    public function setImage(FHIRAttachment ...$image): self
    {
        $this->image = $image;
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
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_IS_BRAND])) {
            $v = $this->getIsBrand();
            foreach($validationRules[self::FIELD_IS_BRAND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_BRAND])) {
                        $errs[self::FIELD_IS_BRAND] = [];
                    }
                    $errs[self::FIELD_IS_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_OVER_THE_COUNTER])) {
            $v = $this->getIsOverTheCounter();
            foreach($validationRules[self::FIELD_IS_OVER_THE_COUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_OVER_THE_COUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_OVER_THE_COUNTER])) {
                        $errs[self::FIELD_IS_OVER_THE_COUNTER] = [];
                    }
                    $errs[self::FIELD_IS_OVER_THE_COUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM])) {
            $v = $this->getForm();
            foreach($validationRules[self::FIELD_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM])) {
                        $errs[self::FIELD_FORM] = [];
                    }
                    $errs[self::FIELD_FORM][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PACKAGE])) {
            $v = $this->getPackage();
            foreach($validationRules[self::FIELD_PACKAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PACKAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGE])) {
                        $errs[self::FIELD_PACKAGE] = [];
                    }
                    $errs[self::FIELD_PACKAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedication
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedication)) {
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
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRMedicationStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRMedicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_BRAND === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIsBrand(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_OVER_THE_COUNTER === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIsOverTheCounter(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MANUFACTURER === $childName) {
                $v = new FHIRReference();
                $type->setManufacturer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORM === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setForm(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INGREDIENT === $childName) {
                $v = new FHIRMedicationIngredient();
                $type->addIngredient(FHIRMedicationIngredient::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PACKAGE === $childName) {
                $v = new FHIRMedicationPackage();
                $type->setPackage(FHIRMedicationPackage::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMAGE === $childName) {
                $v = new FHIRAttachment();
                $type->addImage(FHIRAttachment::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_BRAND])) {
            $pt = $type->getIsBrand();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IS_BRAND]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsBrand(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_BRAND],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_OVER_THE_COUNTER])) {
            $pt = $type->getIsOverTheCounter();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IS_OVER_THE_COUNTER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsOverTheCounter(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_OVER_THE_COUNTER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('Medication', $this->_getSourceXMLNS());
        }
        if (isset($this->isBrand) && $this->isBrand->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_BRAND, $this->isBrand->getValue()?->_getFormattedValue());
        }
        if (isset($this->isOverTheCounter) && $this->isOverTheCounter->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_OVER_THE_COUNTER, $this->isOverTheCounter->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isBrand) && $this->isBrand->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_BRAND);
            $this->isBrand->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isOverTheCounter) && $this->isOverTheCounter->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_OVER_THE_COUNTER);
            $this->isOverTheCounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $this->manufacturer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->form)) {
            $xw->startElement(self::FIELD_FORM);
            $this->form->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ingredient)) {
            foreach ($this->ingredient as $v) {
                $xw->startElement(self::FIELD_INGREDIENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->package)) {
            $xw->startElement(self::FIELD_PACKAGE);
            $this->package->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->image)) {
            foreach ($this->image as $v) {
                $xw->startElement(self::FIELD_IMAGE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedication
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedication)) {
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
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMedicationStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRMedicationStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRMedicationStatus([FHIRMedicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRMedicationStatus($ext));
            } else {
                $type->setStatus(new FHIRMedicationStatus(null));
            }
        }
        if (isset($json[self::FIELD_IS_BRAND]) || isset($json[self::FIELD_IS_BRAND_EXT]) || array_key_exists(self::FIELD_IS_BRAND, $json) || array_key_exists(self::FIELD_IS_BRAND_EXT, $json)) {
            $value = $json[self::FIELD_IS_BRAND] ?? null;
            $ext = (isset($json[self::FIELD_IS_BRAND_EXT]) && is_array($json[self::FIELD_IS_BRAND_EXT])) ? $json[self::FIELD_IS_BRAND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsBrand($value);
                } else if (is_array($value)) {
                    $type->setIsBrand(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsBrand(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsBrand(new FHIRBoolean($ext));
            } else {
                $type->setIsBrand(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_IS_OVER_THE_COUNTER]) || isset($json[self::FIELD_IS_OVER_THE_COUNTER_EXT]) || array_key_exists(self::FIELD_IS_OVER_THE_COUNTER, $json) || array_key_exists(self::FIELD_IS_OVER_THE_COUNTER_EXT, $json)) {
            $value = $json[self::FIELD_IS_OVER_THE_COUNTER] ?? null;
            $ext = (isset($json[self::FIELD_IS_OVER_THE_COUNTER_EXT]) && is_array($json[self::FIELD_IS_OVER_THE_COUNTER_EXT])) ? $json[self::FIELD_IS_OVER_THE_COUNTER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsOverTheCounter($value);
                } else if (is_array($value)) {
                    $type->setIsOverTheCounter(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsOverTheCounter(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsOverTheCounter(new FHIRBoolean($ext));
            } else {
                $type->setIsOverTheCounter(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            if ($json[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $type->setManufacturer($json[self::FIELD_MANUFACTURER]);
            } else {
                $type->setManufacturer(new FHIRReference($json[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($json[self::FIELD_FORM]) || array_key_exists(self::FIELD_FORM, $json)) {
            if ($json[self::FIELD_FORM] instanceof FHIRCodeableConcept) {
                $type->setForm($json[self::FIELD_FORM]);
            } else {
                $type->setForm(new FHIRCodeableConcept($json[self::FIELD_FORM]));
            }
        }
        if (isset($json[self::FIELD_INGREDIENT]) || array_key_exists(self::FIELD_INGREDIENT, $json)) {
            if (is_array($json[self::FIELD_INGREDIENT])) {
                foreach($json[self::FIELD_INGREDIENT] as $v) {
                    if ($v instanceof FHIRMedicationIngredient) {
                        $type->addIngredient($v);
                    } else {
                        $type->addIngredient(new FHIRMedicationIngredient($v));
                    }
                }
            } elseif ($json[self::FIELD_INGREDIENT] instanceof FHIRMedicationIngredient) {
                $type->addIngredient($json[self::FIELD_INGREDIENT]);
            } else {
                $type->addIngredient(new FHIRMedicationIngredient($json[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($json[self::FIELD_PACKAGE]) || array_key_exists(self::FIELD_PACKAGE, $json)) {
            if ($json[self::FIELD_PACKAGE] instanceof FHIRMedicationPackage) {
                $type->setPackage($json[self::FIELD_PACKAGE]);
            } else {
                $type->setPackage(new FHIRMedicationPackage($json[self::FIELD_PACKAGE]));
            }
        }
        if (isset($json[self::FIELD_IMAGE]) || array_key_exists(self::FIELD_IMAGE, $json)) {
            if (is_array($json[self::FIELD_IMAGE])) {
                foreach($json[self::FIELD_IMAGE] as $v) {
                    if ($v instanceof FHIRAttachment) {
                        $type->addImage($v);
                    } else {
                        $type->addImage(new FHIRAttachment($v));
                    }
                }
            } elseif ($json[self::FIELD_IMAGE] instanceof FHIRAttachment) {
                $type->addImage($json[self::FIELD_IMAGE]);
            } else {
                $type->addImage(new FHIRAttachment($json[self::FIELD_IMAGE]));
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
        if (isset($this->isBrand)) {
            if (null !== ($val = $this->isBrand->getValue())) {
                $out->isBrand = $val;
            }
            $ext = $this->isBrand->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isBrand = $ext;
            }
        }
        if (isset($this->isOverTheCounter)) {
            if (null !== ($val = $this->isOverTheCounter->getValue())) {
                $out->isOverTheCounter = $val;
            }
            $ext = $this->isOverTheCounter->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isOverTheCounter = $ext;
            }
        }
        if (isset($this->manufacturer)) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->form)) {
            $out->form = $this->form;
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            $out->ingredient = $this->ingredient;
        }
        if (isset($this->package)) {
            $out->package = $this->package;
        }
        if (isset($this->image) && [] !== $this->image) {
            $out->image = $this->image;
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