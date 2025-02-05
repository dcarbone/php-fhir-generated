<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitAddItem extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM;

    /* class_default.php:50 */
    public const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    public const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    public const FIELD_REVENUE = 'revenue';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_SERVICE = 'service';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_FEE = 'fee';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_DETAIL = 'detail';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:114 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $sequenceLinkId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of reveneu or cost center providing the product and/or service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $revenue;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Health Care Service Type Codes to identify the classification of service or
     * benefits.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is an actual service or product line, ie. not a Group, then use code to
     * indicate the Professional Service or Product supplied (eg. CTP,
     * HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code
     * to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $service;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, eg for Oral whether the treatment is
     * cosmetic or associated with TMJ, or for medical whether the treatment was
     * outside the clinic or out of office hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $modifier;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee charged for the professional service or product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $fee;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $noteNumber;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudications results.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] 
     */
    protected array $adjudication;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The second tier service adjudications for payor added services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1[] 
     */
    protected array $detail;

    /* constructor.php:61 */
    /**
     * FHIRExplanationOfBenefitAddItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[] $sequenceLinkId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $revenue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $service
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $modifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @param null|string[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] $adjudication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1[] $detail
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $sequenceLinkId = null,
                                null|FHIRCodeableConcept $revenue = null,
                                null|FHIRCodeableConcept $category = null,
                                null|FHIRCodeableConcept $service = null,
                                null|iterable $modifier = null,
                                null|FHIRMoney $fee = null,
                                null|iterable $noteNumber = null,
                                null|iterable $adjudication = null,
                                null|iterable $detail = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequenceLinkId) {
            $this->setSequenceLinkId(...$sequenceLinkId);
        }
        if (null !== $revenue) {
            $this->setRevenue($revenue);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $service) {
            $this->setService($service);
        }
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
        }
        if (null !== $fee) {
            $this->setFee($fee);
        }
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $detail) {
            $this->setDetail(...$detail);
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[]
     */
    public function getSequenceLinkId(): array
    {
        return $this->sequenceLinkId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt>
     */
    public function getSequenceLinkIdIterator(): iterable
    {
        if (!isset($this->sequenceLinkId)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sequenceLinkId);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return static
     */
    public function addSequenceLinkId(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequenceLinkId): self
    {
        if (!($sequenceLinkId instanceof FHIRPositiveInt)) {
            $sequenceLinkId = new FHIRPositiveInt(value: $sequenceLinkId);
        }
        if (!isset($this->sequenceLinkId)) {
            $this->sequenceLinkId = [];
        }
        $this->sequenceLinkId[] = $sequenceLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt ...$sequenceLinkId
     * @return static
     */
    public function setSequenceLinkId(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$sequenceLinkId): self
    {
        if ([] === $sequenceLinkId) {
            unset($this->sequenceLinkId);
            return $this;
        }
        $this->sequenceLinkId = [];
        foreach($sequenceLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->sequenceLinkId[] = $v;
            } else {
                $this->sequenceLinkId[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of reveneu or cost center providing the product and/or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue(): null|FHIRCodeableConcept
    {
        return $this->revenue ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of reveneu or cost center providing the product and/or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $revenue
     * @return static
     */
    public function setRevenue(null|FHIRCodeableConcept $revenue): self
    {
        if (null === $revenue) {
            unset($this->revenue);
            return $this;
        }
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Health Care Service Type Codes to identify the classification of service or
     * benefits.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Health Care Service Type Codes to identify the classification of service or
     * benefits.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is an actual service or product line, ie. not a Group, then use code to
     * indicate the Professional Service or Product supplied (eg. CTP,
     * HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code
     * to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getService(): null|FHIRCodeableConcept
    {
        return $this->service ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this is an actual service or product line, ie. not a Group, then use code to
     * indicate the Professional Service or Product supplied (eg. CTP,
     * HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI). If a grouping item then use a group code
     * to indicate the type of thing being grouped eg. 'glasses' or 'compound'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $service
     * @return static
     */
    public function setService(null|FHIRCodeableConcept $service): self
    {
        if (null === $service) {
            unset($this->service);
            return $this;
        }
        $this->service = $service;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, eg for Oral whether the treatment is
     * cosmetic or associated with TMJ, or for medical whether the treatment was
     * outside the clinic or out of office hours.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier(): array
    {
        return $this->modifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getModifierIterator(): iterable
    {
        if (!isset($this->modifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, eg for Oral whether the treatment is
     * cosmetic or associated with TMJ, or for medical whether the treatment was
     * outside the clinic or out of office hours.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $modifier
     * @return static
     */
    public function addModifier(FHIRCodeableConcept $modifier): self
    {
        if (!isset($this->modifier)) {
            $this->modifier = [];
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, eg for Oral whether the treatment is
     * cosmetic or associated with TMJ, or for medical whether the treatment was
     * outside the clinic or out of office hours.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$modifier
     * @return static
     */
    public function setModifier(FHIRCodeableConcept ...$modifier): self
    {
        if ([] === $modifier) {
            unset($this->modifier);
            return $this;
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee charged for the professional service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFee(): null|FHIRMoney
    {
        return $this->fee ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee charged for the professional service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @return static
     */
    public function setFee(null|FHIRMoney $fee): self
    {
        if (null === $fee) {
            unset($this->fee);
            return $this;
        }
        $this->fee = $fee;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber(): array
    {
        return $this->noteNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt>
     */
    public function getNoteNumberIterator(): iterable
    {
        if (!isset($this->noteNumber)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->noteNumber);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber): self
    {
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            $noteNumber = new FHIRPositiveInt(value: $noteNumber);
        }
        if (!isset($this->noteNumber)) {
            $this->noteNumber = [];
        }
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt ...$noteNumber
     * @return static
     */
    public function setNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$noteNumber): self
    {
        if ([] === $noteNumber) {
            unset($this->noteNumber);
            return $this;
        }
        $this->noteNumber = [];
        foreach($noteNumber as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->noteNumber[] = $v;
            } else {
                $this->noteNumber[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudications results.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication>
     */
    public function getAdjudicationIterator(): iterable
    {
        if (!isset($this->adjudication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->adjudication);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudications results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRExplanationOfBenefitAdjudication $adjudication): self
    {
        if (!isset($this->adjudication)) {
            $this->adjudication = [];
        }
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudications results.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRExplanationOfBenefitAdjudication ...$adjudication): self
    {
        if ([] === $adjudication) {
            unset($this->adjudication);
            return $this;
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The second tier service adjudications for payor added services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1[]
     */
    public function getDetail(): array
    {
        return $this->detail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1>
     */
    public function getDetailIterator(): iterable
    {
        if (!isset($this->detail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->detail);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The second tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1 $detail
     * @return static
     */
    public function addDetail(FHIRExplanationOfBenefitDetail1 $detail): self
    {
        if (!isset($this->detail)) {
            $this->detail = [];
        }
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The second tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1 ...$detail
     * @return static
     */
    public function setDetail(FHIRExplanationOfBenefitDetail1 ...$detail): self
    {
        if ([] === $detail) {
            unset($this->detail);
            return $this;
        }
        $this->detail = $detail;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitAddItem)) {
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
            } else if (self::FIELD_SEQUENCE_LINK_ID === $cen) {
                $type->addSequenceLinkId(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVENUE === $cen) {
                $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE === $cen) {
                $type->setService(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER === $cen) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FEE === $cen) {
                $type->setFee(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRExplanationOfBenefitAdjudication::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->addDetail(FHIRExplanationOfBenefitDetail1::xmlUnserialize($ce, $config));
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
        if (isset($this->sequenceLinkId) && [] !== $this->sequenceLinkId) {
            foreach($this->sequenceLinkId as $v) {
                $xw->startElement(self::FIELD_SEQUENCE_LINK_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->revenue)) {
            $xw->startElement(self::FIELD_REVENUE);
            $this->revenue->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->service)) {
            $xw->startElement(self::FIELD_SERVICE);
            $this->service->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->modifier)) {
            foreach ($this->modifier as $v) {
                $xw->startElement(self::FIELD_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->fee)) {
            $xw->startElement(self::FIELD_FEE);
            $this->fee->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            foreach($this->noteNumber as $v) {
                $xw->startElement(self::FIELD_NOTE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->adjudication)) {
            foreach ($this->adjudication as $v) {
                $xw->startElement(self::FIELD_ADJUDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->detail)) {
            foreach ($this->detail as $v) {
                $xw->startElement(self::FIELD_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitAddItem)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->sequenceLinkId)
            || isset($json->_sequenceLinkId)
            || property_exists($json, self::FIELD_SEQUENCE_LINK_ID)
            || property_exists($json, self::FIELD_SEQUENCE_LINK_ID_EXT)) {
            $vals = (array)($json->sequenceLinkId ?? []);
            $exts = (array)($json->FIELD_SEQUENCE_LINK_ID_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addSequenceLinkId(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->revenue) || property_exists($json, self::FIELD_REVENUE)) {
            if (is_array($json->revenue)) {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize(reset($json->revenue), $config));
            } else {
                $type->setRevenue(FHIRCodeableConcept::jsonUnserialize($json->revenue, $config));
            }
        }
        if (isset($json->category) || property_exists($json, self::FIELD_CATEGORY)) {
            if (is_array($json->category)) {
                $type->setCategory(FHIRCodeableConcept::jsonUnserialize(reset($json->category), $config));
            } else {
                $type->setCategory(FHIRCodeableConcept::jsonUnserialize($json->category, $config));
            }
        }
        if (isset($json->service) || property_exists($json, self::FIELD_SERVICE)) {
            if (is_array($json->service)) {
                $type->setService(FHIRCodeableConcept::jsonUnserialize(reset($json->service), $config));
            } else {
                $type->setService(FHIRCodeableConcept::jsonUnserialize($json->service, $config));
            }
        }
        if (isset($json->modifier) || property_exists($json, self::FIELD_MODIFIER)) {
            if (is_object($json->modifier)) {
                $vals = [$json->modifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODIFIER, true);
            } else {
                $vals = $json->modifier;
            }
            foreach($vals as $v) {
                $type->addModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->fee) || property_exists($json, self::FIELD_FEE)) {
            if (is_array($json->fee)) {
                $type->setFee(FHIRMoney::jsonUnserialize(reset($json->fee), $config));
            } else {
                $type->setFee(FHIRMoney::jsonUnserialize($json->fee, $config));
            }
        }
        if (isset($json->noteNumber)
            || isset($json->_noteNumber)
            || property_exists($json, self::FIELD_NOTE_NUMBER)
            || property_exists($json, self::FIELD_NOTE_NUMBER_EXT)) {
            $vals = (array)($json->noteNumber ?? []);
            $exts = (array)($json->FIELD_NOTE_NUMBER_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addNoteNumber(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->adjudication) || property_exists($json, self::FIELD_ADJUDICATION)) {
            if (is_object($json->adjudication)) {
                $vals = [$json->adjudication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION, true);
            } else {
                $vals = $json->adjudication;
            }
            foreach($vals as $v) {
                $type->addAdjudication(FHIRExplanationOfBenefitAdjudication::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->detail) || property_exists($json, self::FIELD_DETAIL)) {
            if (is_object($json->detail)) {
                $vals = [$json->detail];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DETAIL, true);
            } else {
                $vals = $json->detail;
            }
            foreach($vals as $v) {
                $type->addDetail(FHIRExplanationOfBenefitDetail1::jsonUnserialize($v, $config));
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
        if (isset($this->sequenceLinkId) && [] !== $this->sequenceLinkId) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->sequenceLinkId as $v) {
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
                $out->sequenceLinkId = $vals;
            }
            if ($hasExts) {
                $out->_sequenceLinkId = $exts;
            }
        }
        if (isset($this->revenue)) {
            $out->revenue = $this->revenue;
        }
        if (isset($this->category)) {
            $out->category = $this->category;
        }
        if (isset($this->service)) {
            $out->service = $this->service;
        }
        if (isset($this->modifier) && [] !== $this->modifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODIFIER) && 1 === count($this->modifier)) {
                $out->modifier = $this->modifier[0];
            } else {
                $out->modifier = $this->modifier;
            }
        }
        if (isset($this->fee)) {
            $out->fee = $this->fee;
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->noteNumber as $v) {
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
                $out->noteNumber = $vals;
            }
            if ($hasExts) {
                $out->_noteNumber = $exts;
            }
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION) && 1 === count($this->adjudication)) {
                $out->adjudication = $this->adjudication[0];
            } else {
                $out->adjudication = $this->adjudication;
            }
        }
        if (isset($this->detail) && [] !== $this->detail) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DETAIL) && 1 === count($this->detail)) {
                $out->detail = $this->detail[0];
            } else {
                $out->detail = $this->detail;
            }
        }
        return $out;
    }
}