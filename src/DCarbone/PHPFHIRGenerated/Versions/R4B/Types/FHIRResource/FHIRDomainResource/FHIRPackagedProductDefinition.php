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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * A medically related item or items, in a container or package.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRPackagedProductDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_TYPE = 'type';
    public const FIELD_PACKAGE_FOR = 'packageFor';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_DATE = 'statusDate';
    public const FIELD_STATUS_DATE_EXT = '_statusDate';
    public const FIELD_CONTAINED_ITEM_QUANTITY = 'containedItemQuantity';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    public const FIELD_MARKETING_STATUS = 'marketingStatus';
    public const FIELD_CHARACTERISTIC = 'characteristic';
    public const FIELD_COPACKAGED_INDICATOR = 'copackagedIndicator';
    public const FIELD_COPACKAGED_INDICATOR_EXT = '_copackagedIndicator';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_PACKAGE = 'package';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPACKAGED_INDICATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this package as whole. Unique instance identifiers
     * assigned to a package by manufacturers, regulators, drug catalogue custodians or
     * other organizations.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name for this package. Typically what it would be listed as in a drug
     * formulary or catalogue, inventory etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $name;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level category e.g. medicinal product, raw material, shipping/transport
     * container, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product that this is a pack for.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> 
     */
    #[FHIRReference]
    protected array $packageFor;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this item. A high level status, this is not
     * intended to duplicate details carried elsewhere such as legal status, or
     * authorization or marketing status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $statusDate;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A total of the complete count of contained items of a particular type/form,
     * independent of sub-packaging or organization. This can be considered as the pack
     * size. This attribute differs from containedItem.amount in that it can give a
     * single aggregated count of all tablet types in a pack, even when these are
     * different manufactured items. For example a pill pack of 21 tablets plus 7 sugar
     * tablets, can be denoted here as '28 tablets'. This attribute is repeatable so
     * that the different item types in one pack type can be counted (e.g. a count of
     * vials and count of syringes). Each repeat must have different units, so that it
     * is clear what the different sets of counted items are, and it is not intended to
     * allow different counts of similar items (e.g. not '2 tubes and 3 tubes').
     * Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs.
     * 50 pack) - which would be different instances of this resource.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity> 
     */
    #[FHIRQuantity]
    protected array $containedItemQuantity;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Textual description. Note that this is not the name of the package or product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A medically related item or items, in a container or package.
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply> 
     */
    #[FHIRPackagedProductDefinitionLegalStatusOfSupply]
    protected array $legalStatusOfSupply;
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows specifying that an item is on the market for sale, or that it is not
     * available, and the dates and locations associated.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus> 
     */
    #[FHIRMarketingStatus]
    protected array $marketingStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse
     * prescribable", "calendar pack".
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $characteristic;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * States whether a drug product is supplied with another item such as a diluent or
     * adjuvant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $copackagedIndicator;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package type. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> 
     */
    #[FHIRReference]
    protected array $manufacturer;
    /**
     * A medically related item or items, in a container or package.
     *
     * A packaging item, as a container for medically related items, possibly with
     * other packaging items within, or a packaging component, such as bottle cap
     * (which is not a device or a medication manufactured item).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage 
     */
    #[FHIRPackagedProductDefinitionPackage]
    protected FHIRPackagedProductDefinitionPackage $package;

    /* constructor.php:61 */
    /**
     * FHIRPackagedProductDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> $packageFor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $statusDate
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity> $containedItemQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply> $legalStatusOfSupply
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus> $marketingStatus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> $characteristic
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $copackagedIndicator
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference> $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $package
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
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $packageFor = null,
                                null|FHIRCodeableConcept $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null,
                                null|iterable $containedItemQuantity = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $legalStatusOfSupply = null,
                                null|iterable $marketingStatus = null,
                                null|iterable $characteristic = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $copackagedIndicator = null,
                                null|iterable $manufacturer = null,
                                null|FHIRPackagedProductDefinitionPackage $package = null,
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
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $packageFor) {
            $this->setPackageFor(...$packageFor);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusDate) {
            $this->setStatusDate($statusDate);
        }
        if (null !== $containedItemQuantity) {
            $this->setContainedItemQuantity(...$containedItemQuantity);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $legalStatusOfSupply) {
            $this->setLegalStatusOfSupply(...$legalStatusOfSupply);
        }
        if (null !== $marketingStatus) {
            $this->setMarketingStatus(...$marketingStatus);
        }
        if (null !== $characteristic) {
            $this->setCharacteristic(...$characteristic);
        }
        if (null !== $copackagedIndicator) {
            $this->setCopackagedIndicator($copackagedIndicator);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer(...$manufacturer);
        }
        if (null !== $package) {
            $this->setPackage($package);
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
     * A unique identifier for this package as whole. Unique instance identifiers
     * assigned to a package by manufacturers, regulators, drug catalogue custodians or
     * other organizations.
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
     * A unique identifier for this package as whole. Unique instance identifiers
     * assigned to a package by manufacturers, regulators, drug catalogue custodians or
     * other organizations.
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
     * A unique identifier for this package as whole. Unique instance identifiers
     * assigned to a package by manufacturers, regulators, drug catalogue custodians or
     * other organizations.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name for this package. Typically what it would be listed as in a drug
     * formulary or catalogue, inventory etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A name for this package. Typically what it would be listed as in a drug
     * formulary or catalogue, inventory etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A high level category e.g. medicinal product, raw material, shipping/transport
     * container, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * A high level category e.g. medicinal product, raw material, shipping/transport
     * container, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $type
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product that this is a pack for.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getPackageFor(): array
    {
        return $this->packageFor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getPackageForIterator(): iterable
    {
        if (!isset($this->packageFor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->packageFor);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product that this is a pack for.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $packageFor
     * @return static
     */
    public function addPackageFor(FHIRReference $packageFor): self
    {
        if (!isset($this->packageFor)) {
            $this->packageFor = [];
        }
        $this->packageFor[] = $packageFor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product that this is a pack for.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$packageFor
     * @return static
     */
    public function setPackageFor(FHIRReference ...$packageFor): self
    {
        if ([] === $packageFor) {
            unset($this->packageFor);
            return $this;
        }
        $this->packageFor = $packageFor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this item. A high level status, this is not
     * intended to duplicate details carried elsewhere such as legal status, or
     * authorization or marketing status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this item. A high level status, this is not
     * intended to duplicate details carried elsewhere such as legal status, or
     * authorization or marketing status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): null|FHIRDateTime
    {
        return $this->statusDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $statusDate
     * @return static
     */
    public function setStatusDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate): self
    {
        if (null === $statusDate) {
            unset($this->statusDate);
            return $this;
        }
        if (!($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime(value: $statusDate);
        }
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A total of the complete count of contained items of a particular type/form,
     * independent of sub-packaging or organization. This can be considered as the pack
     * size. This attribute differs from containedItem.amount in that it can give a
     * single aggregated count of all tablet types in a pack, even when these are
     * different manufactured items. For example a pill pack of 21 tablets plus 7 sugar
     * tablets, can be denoted here as '28 tablets'. This attribute is repeatable so
     * that the different item types in one pack type can be counted (e.g. a count of
     * vials and count of syringes). Each repeat must have different units, so that it
     * is clear what the different sets of counted items are, and it is not intended to
     * allow different counts of similar items (e.g. not '2 tubes and 3 tubes').
     * Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs.
     * 50 pack) - which would be different instances of this resource.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity>
     */
    public function getContainedItemQuantity(): array
    {
        return $this->containedItemQuantity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity>
     */
    public function getContainedItemQuantityIterator(): iterable
    {
        if (!isset($this->containedItemQuantity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->containedItemQuantity);
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A total of the complete count of contained items of a particular type/form,
     * independent of sub-packaging or organization. This can be considered as the pack
     * size. This attribute differs from containedItem.amount in that it can give a
     * single aggregated count of all tablet types in a pack, even when these are
     * different manufactured items. For example a pill pack of 21 tablets plus 7 sugar
     * tablets, can be denoted here as '28 tablets'. This attribute is repeatable so
     * that the different item types in one pack type can be counted (e.g. a count of
     * vials and count of syringes). Each repeat must have different units, so that it
     * is clear what the different sets of counted items are, and it is not intended to
     * allow different counts of similar items (e.g. not '2 tubes and 3 tubes').
     * Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs.
     * 50 pack) - which would be different instances of this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $containedItemQuantity
     * @return static
     */
    public function addContainedItemQuantity(FHIRQuantity $containedItemQuantity): self
    {
        if (!isset($this->containedItemQuantity)) {
            $this->containedItemQuantity = [];
        }
        $this->containedItemQuantity[] = $containedItemQuantity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A total of the complete count of contained items of a particular type/form,
     * independent of sub-packaging or organization. This can be considered as the pack
     * size. This attribute differs from containedItem.amount in that it can give a
     * single aggregated count of all tablet types in a pack, even when these are
     * different manufactured items. For example a pill pack of 21 tablets plus 7 sugar
     * tablets, can be denoted here as '28 tablets'. This attribute is repeatable so
     * that the different item types in one pack type can be counted (e.g. a count of
     * vials and count of syringes). Each repeat must have different units, so that it
     * is clear what the different sets of counted items are, and it is not intended to
     * allow different counts of similar items (e.g. not '2 tubes and 3 tubes').
     * Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs.
     * 50 pack) - which would be different instances of this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity ...$containedItemQuantity
     * @return static
     */
    public function setContainedItemQuantity(FHIRQuantity ...$containedItemQuantity): self
    {
        if ([] === $containedItemQuantity) {
            unset($this->containedItemQuantity);
            return $this;
        }
        $this->containedItemQuantity = $containedItemQuantity;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Textual description. Note that this is not the name of the package or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Textual description. Note that this is not the name of the package or product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply>
     */
    public function getLegalStatusOfSupply(): array
    {
        return $this->legalStatusOfSupply ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply>
     */
    public function getLegalStatusOfSupplyIterator(): iterable
    {
        if (!isset($this->legalStatusOfSupply)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->legalStatusOfSupply);
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply $legalStatusOfSupply
     * @return static
     */
    public function addLegalStatusOfSupply(FHIRPackagedProductDefinitionLegalStatusOfSupply $legalStatusOfSupply): self
    {
        if (!isset($this->legalStatusOfSupply)) {
            $this->legalStatusOfSupply = [];
        }
        $this->legalStatusOfSupply[] = $legalStatusOfSupply;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply ...$legalStatusOfSupply
     * @return static
     */
    public function setLegalStatusOfSupply(FHIRPackagedProductDefinitionLegalStatusOfSupply ...$legalStatusOfSupply): self
    {
        if ([] === $legalStatusOfSupply) {
            unset($this->legalStatusOfSupply);
            return $this;
        }
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows specifying that an item is on the market for sale, or that it is not
     * available, and the dates and locations associated.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus>
     */
    public function getMarketingStatus(): array
    {
        return $this->marketingStatus ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus>
     */
    public function getMarketingStatusIterator(): iterable
    {
        if (!isset($this->marketingStatus)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->marketingStatus);
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows specifying that an item is on the market for sale, or that it is not
     * available, and the dates and locations associated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $marketingStatus
     * @return static
     */
    public function addMarketingStatus(FHIRMarketingStatus $marketingStatus): self
    {
        if (!isset($this->marketingStatus)) {
            $this->marketingStatus = [];
        }
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows specifying that an item is on the market for sale, or that it is not
     * available, and the dates and locations associated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus ...$marketingStatus
     * @return static
     */
    public function setMarketingStatus(FHIRMarketingStatus ...$marketingStatus): self
    {
        if ([] === $marketingStatus) {
            unset($this->marketingStatus);
            return $this;
        }
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse
     * prescribable", "calendar pack".
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCharacteristic(): array
    {
        return $this->characteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCharacteristicIterator(): iterable
    {
        if (!isset($this->characteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->characteristic);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse
     * prescribable", "calendar pack".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $characteristic
     * @return static
     */
    public function addCharacteristic(FHIRCodeableConcept $characteristic): self
    {
        if (!isset($this->characteristic)) {
            $this->characteristic = [];
        }
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse
     * prescribable", "calendar pack".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$characteristic
     * @return static
     */
    public function setCharacteristic(FHIRCodeableConcept ...$characteristic): self
    {
        if ([] === $characteristic) {
            unset($this->characteristic);
            return $this;
        }
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * States whether a drug product is supplied with another item such as a diluent or
     * adjuvant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getCopackagedIndicator(): null|FHIRBoolean
    {
        return $this->copackagedIndicator ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * States whether a drug product is supplied with another item such as a diluent or
     * adjuvant.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $copackagedIndicator
     * @return static
     */
    public function setCopackagedIndicator(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $copackagedIndicator): self
    {
        if (null === $copackagedIndicator) {
            unset($this->copackagedIndicator);
            return $this;
        }
        if (!($copackagedIndicator instanceof FHIRBoolean)) {
            $copackagedIndicator = new FHIRBoolean(value: $copackagedIndicator);
        }
        $this->copackagedIndicator = $copackagedIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package type. When there are multiple it means these are
     * all possible manufacturers.
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
     * Manufacturer of this package type. When there are multiple it means these are
     * all possible manufacturers.
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
     * Manufacturer of this package type. When there are multiple it means these are
     * all possible manufacturers.
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
     * A medically related item or items, in a container or package.
     *
     * A packaging item, as a container for medically related items, possibly with
     * other packaging items within, or a packaging component, such as bottle cap
     * (which is not a device or a medication manufactured item).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage
     */
    public function getPackage(): null|FHIRPackagedProductDefinitionPackage
    {
        return $this->package ?? null;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * A packaging item, as a container for medically related items, possibly with
     * other packaging items within, or a packaging component, such as bottle cap
     * (which is not a device or a medication manufactured item).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $package
     * @return static
     */
    public function setPackage(null|FHIRPackagedProductDefinitionPackage $package): self
    {
        if (null === $package) {
            unset($this->package);
            return $this;
        }
        $this->package = $package;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinition)) {
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
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGE_FOR === $cen) {
                $type->addPackageFor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_DATE === $cen) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED_ITEM_QUANTITY === $cen) {
                $type->addContainedItemQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LEGAL_STATUS_OF_SUPPLY === $cen) {
                $type->addLegalStatusOfSupply(FHIRPackagedProductDefinitionLegalStatusOfSupply::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MARKETING_STATUS === $cen) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARACTERISTIC === $cen) {
                $type->addCharacteristic(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPACKAGED_INDICATOR === $cen) {
                $type->setCopackagedIndicator(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANUFACTURER === $cen) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGE === $cen) {
                $type->setPackage(FHIRPackagedProductDefinitionPackage::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS_DATE])) {
            if (isset($type->statusDate)) {
                $type->statusDate->setValue((string)$attributes[self::FIELD_STATUS_DATE]);
            } else {
                $type->setStatusDate((string)$attributes[self::FIELD_STATUS_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COPACKAGED_INDICATOR])) {
            if (isset($type->copackagedIndicator)) {
                $type->copackagedIndicator->setValue((string)$attributes[self::FIELD_COPACKAGED_INDICATOR]);
            } else {
                $type->setCopackagedIndicator((string)$attributes[self::FIELD_COPACKAGED_INDICATOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COPACKAGED_INDICATOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('PackagedProductDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->statusDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS_DATE]) {
            $xw->writeAttribute(self::FIELD_STATUS_DATE, $this->statusDate->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->copackagedIndicator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPACKAGED_INDICATOR]) {
            $xw->writeAttribute(self::FIELD_COPACKAGED_INDICATOR, $this->copackagedIndicator->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->packageFor)) {
            foreach ($this->packageFor as $v) {
                $xw->startElement(self::FIELD_PACKAGE_FOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->statusDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS_DATE]
                || $this->statusDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS_DATE);
            $this->statusDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS_DATE]);
            $xw->endElement();
        }
        if (isset($this->containedItemQuantity)) {
            foreach ($this->containedItemQuantity as $v) {
                $xw->startElement(self::FIELD_CONTAINED_ITEM_QUANTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->legalStatusOfSupply)) {
            foreach ($this->legalStatusOfSupply as $v) {
                $xw->startElement(self::FIELD_LEGAL_STATUS_OF_SUPPLY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->marketingStatus)) {
            foreach ($this->marketingStatus as $v) {
                $xw->startElement(self::FIELD_MARKETING_STATUS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->characteristic)) {
            foreach ($this->characteristic as $v) {
                $xw->startElement(self::FIELD_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->copackagedIndicator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COPACKAGED_INDICATOR]
                || $this->copackagedIndicator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COPACKAGED_INDICATOR);
            $this->copackagedIndicator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COPACKAGED_INDICATOR]);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            foreach ($this->manufacturer as $v) {
                $xw->startElement(self::FIELD_MANUFACTURER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->package)) {
            $xw->startElement(self::FIELD_PACKAGE);
            $this->package->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPackagedProductDefinition)) {
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
        if (isset($decoded->name)
            || isset($decoded->_name)
            || property_exists($decoded, self::FIELD_NAME)
            || property_exists($decoded, self::FIELD_NAME_EXT)) {
            $v = $decoded->_name ?? new \stdClass();
            $v->value = $decoded->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->packageFor) || property_exists($decoded, self::FIELD_PACKAGE_FOR)) {
            if (is_object($decoded->packageFor)) {
                $vals = [$decoded->packageFor];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PACKAGE_FOR, true);
            } else {
                $vals = $decoded->packageFor;
            }
            foreach($vals as $v) {
                $type->addPackageFor(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->status) || property_exists($decoded, self::FIELD_STATUS)) {
            if (is_array($decoded->status)) {
                $type->setStatus(FHIRCodeableConcept::jsonUnserialize(reset($decoded->status), $config));
            } else {
                $type->setStatus(FHIRCodeableConcept::jsonUnserialize($decoded->status, $config));
            }
        }
        if (isset($decoded->statusDate)
            || isset($decoded->_statusDate)
            || property_exists($decoded, self::FIELD_STATUS_DATE)
            || property_exists($decoded, self::FIELD_STATUS_DATE_EXT)) {
            $v = $decoded->_statusDate ?? new \stdClass();
            $v->value = $decoded->statusDate ?? null;
            $type->setStatusDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->containedItemQuantity) || property_exists($decoded, self::FIELD_CONTAINED_ITEM_QUANTITY)) {
            if (is_object($decoded->containedItemQuantity)) {
                $vals = [$decoded->containedItemQuantity];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTAINED_ITEM_QUANTITY, true);
            } else {
                $vals = $decoded->containedItemQuantity;
            }
            foreach($vals as $v) {
                $type->addContainedItemQuantity(FHIRQuantity::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->legalStatusOfSupply) || property_exists($decoded, self::FIELD_LEGAL_STATUS_OF_SUPPLY)) {
            if (is_object($decoded->legalStatusOfSupply)) {
                $vals = [$decoded->legalStatusOfSupply];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LEGAL_STATUS_OF_SUPPLY, true);
            } else {
                $vals = $decoded->legalStatusOfSupply;
            }
            foreach($vals as $v) {
                $type->addLegalStatusOfSupply(FHIRPackagedProductDefinitionLegalStatusOfSupply::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->marketingStatus) || property_exists($decoded, self::FIELD_MARKETING_STATUS)) {
            if (is_object($decoded->marketingStatus)) {
                $vals = [$decoded->marketingStatus];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MARKETING_STATUS, true);
            } else {
                $vals = $decoded->marketingStatus;
            }
            foreach($vals as $v) {
                $type->addMarketingStatus(FHIRMarketingStatus::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->characteristic) || property_exists($decoded, self::FIELD_CHARACTERISTIC)) {
            if (is_object($decoded->characteristic)) {
                $vals = [$decoded->characteristic];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CHARACTERISTIC, true);
            } else {
                $vals = $decoded->characteristic;
            }
            foreach($vals as $v) {
                $type->addCharacteristic(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->copackagedIndicator)
            || isset($decoded->_copackagedIndicator)
            || property_exists($decoded, self::FIELD_COPACKAGED_INDICATOR)
            || property_exists($decoded, self::FIELD_COPACKAGED_INDICATOR_EXT)) {
            $v = $decoded->_copackagedIndicator ?? new \stdClass();
            $v->value = $decoded->copackagedIndicator ?? null;
            $type->setCopackagedIndicator(FHIRBoolean::jsonUnserialize($v, $config));
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
        if (isset($decoded->package) || property_exists($decoded, self::FIELD_PACKAGE)) {
            if (is_array($decoded->package)) {
                $type->setPackage(FHIRPackagedProductDefinitionPackage::jsonUnserialize(reset($decoded->package), $config));
            } else {
                $type->setPackage(FHIRPackagedProductDefinitionPackage::jsonUnserialize($decoded->package, $config));
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
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->packageFor) && [] !== $this->packageFor) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PACKAGE_FOR) && 1 === count($this->packageFor)) {
                $out->packageFor = $this->packageFor[0];
            } else {
                $out->packageFor = $this->packageFor;
            }
        }
        if (isset($this->status)) {
            $out->status = $this->status;
        }
        if (isset($this->statusDate)) {
            if (null !== ($val = $this->statusDate->getValue())) {
                $out->statusDate = $val;
            }
            if ($this->statusDate->_nonValueFieldDefined()) {
                $ext = $this->statusDate->jsonSerialize();
                unset($ext->value);
                $out->_statusDate = $ext;
            }
        }
        if (isset($this->containedItemQuantity) && [] !== $this->containedItemQuantity) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTAINED_ITEM_QUANTITY) && 1 === count($this->containedItemQuantity)) {
                $out->containedItemQuantity = $this->containedItemQuantity[0];
            } else {
                $out->containedItemQuantity = $this->containedItemQuantity;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->legalStatusOfSupply) && [] !== $this->legalStatusOfSupply) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LEGAL_STATUS_OF_SUPPLY) && 1 === count($this->legalStatusOfSupply)) {
                $out->legalStatusOfSupply = $this->legalStatusOfSupply[0];
            } else {
                $out->legalStatusOfSupply = $this->legalStatusOfSupply;
            }
        }
        if (isset($this->marketingStatus) && [] !== $this->marketingStatus) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MARKETING_STATUS) && 1 === count($this->marketingStatus)) {
                $out->marketingStatus = $this->marketingStatus[0];
            } else {
                $out->marketingStatus = $this->marketingStatus;
            }
        }
        if (isset($this->characteristic) && [] !== $this->characteristic) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CHARACTERISTIC) && 1 === count($this->characteristic)) {
                $out->characteristic = $this->characteristic[0];
            } else {
                $out->characteristic = $this->characteristic;
            }
        }
        if (isset($this->copackagedIndicator)) {
            if (null !== ($val = $this->copackagedIndicator->getValue())) {
                $out->copackagedIndicator = $val;
            }
            if ($this->copackagedIndicator->_nonValueFieldDefined()) {
                $ext = $this->copackagedIndicator->jsonSerialize();
                unset($ext->value);
                $out->_copackagedIndicator = $ext;
            }
        }
        if (isset($this->manufacturer) && [] !== $this->manufacturer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANUFACTURER) && 1 === count($this->manufacturer)) {
                $out->manufacturer = $this->manufacturer[0];
            } else {
                $out->manufacturer = $this->manufacturer;
            }
        }
        if (isset($this->package)) {
            $out->package = $this->package;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}