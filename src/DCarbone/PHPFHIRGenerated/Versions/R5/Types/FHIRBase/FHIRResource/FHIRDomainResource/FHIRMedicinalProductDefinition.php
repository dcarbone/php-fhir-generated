<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A medicinal product, being a substance or combination of substances that is
 * intended to treat, prevent or diagnose a disease, or to restore, correct or
 * modify physiological functions by exerting a pharmacological, immunological or
 * metabolic action. This resource is intended to define and detail such products
 * and their properties, for uses other than direct patient care (e.g. regulatory
 * use, or drug catalogs).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicinalProductDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_DOMAIN = 'domain';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_DATE = 'statusDate';
    public const FIELD_STATUS_DATE_EXT = '_statusDate';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM = 'combinedPharmaceuticalDoseForm';
    public const FIELD_ROUTE = 'route';
    public const FIELD_INDICATION = 'indication';
    public const FIELD_INDICATION_EXT = '_indication';
    public const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    public const FIELD_ADDITIONAL_MONITORING_INDICATOR = 'additionalMonitoringIndicator';
    public const FIELD_SPECIAL_MEASURES = 'specialMeasures';
    public const FIELD_PEDIATRIC_USE_INDICATOR = 'pediatricUseIndicator';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_MARKETING_STATUS = 'marketingStatus';
    public const FIELD_PACKAGED_MEDICINAL_PRODUCT = 'packagedMedicinalProduct';
    public const FIELD_COMPRISED_OF = 'comprisedOf';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_IMPURITY = 'impurity';
    public const FIELD_ATTACHED_DOCUMENT = 'attachedDocument';
    public const FIELD_MASTER_FILE = 'masterFile';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_CLINICAL_TRIAL = 'clinicalTrial';
    public const FIELD_CODE = 'code';
    public const FIELD_NAME = 'name';
    public const FIELD_CROSS_REFERENCE = 'crossReference';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_CHARACTERISTIC = 'characteristic';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_NAME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INDICATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $domain;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $statusDate;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General description of this product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $combinedPharmaceuticalDoseForm;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $route;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $indication;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $legalStatusOfSupply;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $additionalMonitoringIndicator;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $specialMeasures;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $pediatricUseIndicator;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $classification;
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[] 
     */
    protected array $marketingStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $packagedMedicinalProduct;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $comprisedOf;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $ingredient;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] 
     */
    protected array $impurity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $attachedDocument;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $masterFile;
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[] 
     */
    protected array $contact;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $clinicalTrial;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $code;
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[] 
     */
    protected array $name;
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[] 
     */
    protected array $crossReference;
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[] 
     */
    protected array $operation;
    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[] 
     */
    protected array $characteristic;

    /* constructor.php:63 */
    /**
     * FHIRMedicinalProductDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $statusDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $route
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $indication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $legalStatusOfSupply
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $additionalMonitoringIndicator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $specialMeasures
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $pediatricUseIndicator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[] $marketingStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $packagedMedicinalProduct
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $comprisedOf
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $ingredient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $impurity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $attachedDocument
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $masterFile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[] $contact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $clinicalTrial
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[] $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[] $crossReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[] $operation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[] $characteristic
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
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $domain = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|FHIRCodeableConcept $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null,
                                null|iterable $route = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $indication = null,
                                null|FHIRCodeableConcept $legalStatusOfSupply = null,
                                null|FHIRCodeableConcept $additionalMonitoringIndicator = null,
                                null|iterable $specialMeasures = null,
                                null|FHIRCodeableConcept $pediatricUseIndicator = null,
                                null|iterable $classification = null,
                                null|iterable $marketingStatus = null,
                                null|iterable $packagedMedicinalProduct = null,
                                null|iterable $comprisedOf = null,
                                null|iterable $ingredient = null,
                                null|iterable $impurity = null,
                                null|iterable $attachedDocument = null,
                                null|iterable $masterFile = null,
                                null|iterable $contact = null,
                                null|iterable $clinicalTrial = null,
                                null|iterable $code = null,
                                null|iterable $name = null,
                                null|iterable $crossReference = null,
                                null|iterable $operation = null,
                                null|iterable $characteristic = null,
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
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $domain) {
            $this->setDomain($domain);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusDate) {
            $this->setStatusDate($statusDate);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $combinedPharmaceuticalDoseForm) {
            $this->setCombinedPharmaceuticalDoseForm($combinedPharmaceuticalDoseForm);
        }
        if (null !== $route) {
            $this->setRoute(...$route);
        }
        if (null !== $indication) {
            $this->setIndication($indication);
        }
        if (null !== $legalStatusOfSupply) {
            $this->setLegalStatusOfSupply($legalStatusOfSupply);
        }
        if (null !== $additionalMonitoringIndicator) {
            $this->setAdditionalMonitoringIndicator($additionalMonitoringIndicator);
        }
        if (null !== $specialMeasures) {
            $this->setSpecialMeasures(...$specialMeasures);
        }
        if (null !== $pediatricUseIndicator) {
            $this->setPediatricUseIndicator($pediatricUseIndicator);
        }
        if (null !== $classification) {
            $this->setClassification(...$classification);
        }
        if (null !== $marketingStatus) {
            $this->setMarketingStatus(...$marketingStatus);
        }
        if (null !== $packagedMedicinalProduct) {
            $this->setPackagedMedicinalProduct(...$packagedMedicinalProduct);
        }
        if (null !== $comprisedOf) {
            $this->setComprisedOf(...$comprisedOf);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $impurity) {
            $this->setImpurity(...$impurity);
        }
        if (null !== $attachedDocument) {
            $this->setAttachedDocument(...$attachedDocument);
        }
        if (null !== $masterFile) {
            $this->setMasterFile(...$masterFile);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $clinicalTrial) {
            $this->setClinicalTrial(...$clinicalTrial);
        }
        if (null !== $code) {
            $this->setCode(...$code);
        }
        if (null !== $name) {
            $this->setName(...$name);
        }
        if (null !== $crossReference) {
            $this->setCrossReference(...$crossReference);
        }
        if (null !== $operation) {
            $this->setOperation(...$operation);
        }
        if (null !== $characteristic) {
            $this->setCharacteristic(...$characteristic);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:149 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = [];
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->identifier[] = $v;
            } else {
                $this->identifier[] = new FHIRIdentifier(value: $v);
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDomain(): null|FHIRCodeableConcept
    {
        return $this->domain ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $domain
     * @return static
     */
    public function setDomain(null|FHIRCodeableConcept $domain): self
    {
        if (null === $domain) {
            unset($this->domain);
            return $this;
        }
        $this->domain = $domain;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        $this->version = $version;
        if ($this->_valueXMLLocations[self::FIELD_VERSION] !== $valueXMLLocation) {
            $this->_setVersionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the version element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVersionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VERSION];
    }

    /**
     * Set the location the "value" field of the version element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVersionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VERSION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $status
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): null|FHIRDateTime
    {
        return $this->statusDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $statusDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatusDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $statusDate) {
            unset($this->statusDate);
            return $this;
        }
        if (!($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime(value: $statusDate);
        }
        $this->statusDate = $statusDate;
        if ($this->_valueXMLLocations[self::FIELD_STATUS_DATE] !== $valueXMLLocation) {
            $this->_setStatusDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the statusDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS_DATE];
    }

    /**
     * Set the location the "value" field of the statusDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS_DATE] = $valueXMLLocation;
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
     * General description of this product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
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
     * General description of this product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm(): null|FHIRCodeableConcept
    {
        return $this->combinedPharmaceuticalDoseForm ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return static
     */
    public function setCombinedPharmaceuticalDoseForm(null|FHIRCodeableConcept $combinedPharmaceuticalDoseForm): self
    {
        if (null === $combinedPharmaceuticalDoseForm) {
            unset($this->combinedPharmaceuticalDoseForm);
            return $this;
        }
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRoute(): array
    {
        return $this->route ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getRouteIterator(): iterable
    {
        if (!isset($this->route)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->route);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @return static
     */
    public function addRoute(FHIRCodeableConcept $route): self
    {
        if (!isset($this->route)) {
            $this->route = [];
        }
        $this->route[] = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept ...$route): self
    {
        if ([] === $route) {
            unset($this->route);
            return $this;
        }
        $this->route = $route;
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
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getIndication(): null|FHIRMarkdown
    {
        return $this->indication ?? null;
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
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $indication
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIndication(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $indication,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $indication) {
            unset($this->indication);
            return $this;
        }
        if (!($indication instanceof FHIRMarkdown)) {
            $indication = new FHIRMarkdown(value: $indication);
        }
        $this->indication = $indication;
        if ($this->_valueXMLLocations[self::FIELD_INDICATION] !== $valueXMLLocation) {
            $this->_setIndicationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the indication element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIndicationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INDICATION];
    }

    /**
     * Set the location the "value" field of the indication element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIndicationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INDICATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply(): null|FHIRCodeableConcept
    {
        return $this->legalStatusOfSupply ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $legalStatusOfSupply
     * @return static
     */
    public function setLegalStatusOfSupply(null|FHIRCodeableConcept $legalStatusOfSupply): self
    {
        if (null === $legalStatusOfSupply) {
            unset($this->legalStatusOfSupply);
            return $this;
        }
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator(): null|FHIRCodeableConcept
    {
        return $this->additionalMonitoringIndicator ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return static
     */
    public function setAdditionalMonitoringIndicator(null|FHIRCodeableConcept $additionalMonitoringIndicator): self
    {
        if (null === $additionalMonitoringIndicator) {
            unset($this->additionalMonitoringIndicator);
            return $this;
        }
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSpecialMeasures(): array
    {
        return $this->specialMeasures ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSpecialMeasuresIterator(): iterable
    {
        if (!isset($this->specialMeasures)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specialMeasures);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $specialMeasures
     * @return static
     */
    public function addSpecialMeasures(FHIRCodeableConcept $specialMeasures): self
    {
        if (!isset($this->specialMeasures)) {
            $this->specialMeasures = [];
        }
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorization studies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$specialMeasures
     * @return static
     */
    public function setSpecialMeasures(FHIRCodeableConcept ...$specialMeasures): self
    {
        if ([] === $specialMeasures) {
            unset($this->specialMeasures);
            return $this;
        }
        $this->specialMeasures = $specialMeasures;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPediatricUseIndicator(): null|FHIRCodeableConcept
    {
        return $this->pediatricUseIndicator ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $pediatricUseIndicator
     * @return static
     */
    public function setPediatricUseIndicator(null|FHIRCodeableConcept $pediatricUseIndicator): self
    {
        if (null === $pediatricUseIndicator) {
            unset($this->pediatricUseIndicator);
            return $this;
        }
        $this->pediatricUseIndicator = $pediatricUseIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassification(): array
    {
        return $this->classification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassificationIterator(): iterable
    {
        if (!isset($this->classification)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classification);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(FHIRCodeableConcept $classification): self
    {
        if (!isset($this->classification)) {
            $this->classification = [];
        }
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classification
     * @return static
     */
    public function setClassification(FHIRCodeableConcept ...$classification): self
    {
        if ([] === $classification) {
            unset($this->classification);
            return $this;
        }
        $this->classification = $classification;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus[]
     */
    public function getMarketingStatus(): array
    {
        return $this->marketingStatus ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus>
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
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus $marketingStatus
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
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRMarketingStatus ...$marketingStatus
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
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getPackagedMedicinalProduct(): array
    {
        return $this->packagedMedicinalProduct ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getPackagedMedicinalProductIterator(): iterable
    {
        if (!isset($this->packagedMedicinalProduct)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->packagedMedicinalProduct);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $packagedMedicinalProduct
     * @return static
     */
    public function addPackagedMedicinalProduct(FHIRCodeableConcept $packagedMedicinalProduct): self
    {
        if (!isset($this->packagedMedicinalProduct)) {
            $this->packagedMedicinalProduct = [];
        }
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$packagedMedicinalProduct
     * @return static
     */
    public function setPackagedMedicinalProduct(FHIRCodeableConcept ...$packagedMedicinalProduct): self
    {
        if ([] === $packagedMedicinalProduct) {
            unset($this->packagedMedicinalProduct);
            return $this;
        }
        $this->packagedMedicinalProduct = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getComprisedOf(): array
    {
        return $this->comprisedOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getComprisedOfIterator(): iterable
    {
        if (!isset($this->comprisedOf)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comprisedOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $comprisedOf
     * @return static
     */
    public function addComprisedOf(FHIRReference $comprisedOf): self
    {
        if (!isset($this->comprisedOf)) {
            $this->comprisedOf = [];
        }
        $this->comprisedOf[] = $comprisedOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of medicinal manufactured items and/or devices that this product consists
     * of, such as tablets, capsule, or syringes. Used as a direct link when the item's
     * packaging is not being recorded (see also
     * PackagedProductDefinition.package.containedItem.item).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$comprisedOf
     * @return static
     */
    public function setComprisedOf(FHIRReference ...$comprisedOf): self
    {
        if ([] === $comprisedOf) {
            unset($this->comprisedOf);
            return $this;
        }
        $this->comprisedOf = $comprisedOf;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getIngredient(): array
    {
        return $this->ingredient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $ingredient
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$ingredient
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getImpurity(): array
    {
        return $this->impurity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getImpurityIterator(): iterable
    {
        if (!isset($this->impurity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->impurity);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $impurity
     * @return static
     */
    public function addImpurity(FHIRCodeableReference $impurity): self
    {
        if (!isset($this->impurity)) {
            $this->impurity = [];
        }
        $this->impurity[] = $impurity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$impurity
     * @return static
     */
    public function setImpurity(FHIRCodeableReference ...$impurity): self
    {
        if ([] === $impurity) {
            unset($this->impurity);
            return $this;
        }
        $this->impurity = $impurity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAttachedDocument(): array
    {
        return $this->attachedDocument ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAttachedDocumentIterator(): iterable
    {
        if (!isset($this->attachedDocument)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->attachedDocument);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $attachedDocument
     * @return static
     */
    public function addAttachedDocument(FHIRReference $attachedDocument): self
    {
        if (!isset($this->attachedDocument)) {
            $this->attachedDocument = [];
        }
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$attachedDocument
     * @return static
     */
    public function setAttachedDocument(FHIRReference ...$attachedDocument): self
    {
        if ([] === $attachedDocument) {
            unset($this->attachedDocument);
            return $this;
        }
        $this->attachedDocument = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getMasterFile(): array
    {
        return $this->masterFile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getMasterFileIterator(): iterable
    {
        if (!isset($this->masterFile)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->masterFile);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $masterFile
     * @return static
     */
    public function addMasterFile(FHIRReference $masterFile): self
    {
        if (!isset($this->masterFile)) {
            $this->masterFile = [];
        }
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$masterFile
     * @return static
     */
    public function setMasterFile(FHIRReference ...$masterFile): self
    {
        if ([] === $masterFile) {
            unset($this->masterFile);
            return $this;
        }
        $this->masterFile = $masterFile;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[]
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact $contact
     * @return static
     */
    public function addContact(FHIRMedicinalProductDefinitionContact $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact ...$contact
     * @return static
     */
    public function setContact(FHIRMedicinalProductDefinitionContact ...$contact): self
    {
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getClinicalTrial(): array
    {
        return $this->clinicalTrial ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getClinicalTrialIterator(): iterable
    {
        if (!isset($this->clinicalTrial)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->clinicalTrial);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $clinicalTrial
     * @return static
     */
    public function addClinicalTrial(FHIRReference $clinicalTrial): self
    {
        if (!isset($this->clinicalTrial)) {
            $this->clinicalTrial = [];
        }
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$clinicalTrial
     * @return static
     */
    public function setClinicalTrial(FHIRReference ...$clinicalTrial): self
    {
        if ([] === $clinicalTrial) {
            unset($this->clinicalTrial);
            return $this;
        }
        $this->clinicalTrial = $clinicalTrial;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getCode(): array
    {
        return $this->code ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getCodeIterator(): iterable
    {
        if (!isset($this->code)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->code);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code): self
    {
        if (!isset($this->code)) {
            $this->code = [];
        }
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$code
     * @return static
     */
    public function setCode(FHIRCoding ...$code): self
    {
        if ([] === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[]
     */
    public function getName(): array
    {
        return $this->name ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName>
     */
    public function getNameIterator(): iterable
    {
        if (!isset($this->name)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->name);
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName $name
     * @return static
     */
    public function addName(FHIRMedicinalProductDefinitionName $name): self
    {
        if (!isset($this->name)) {
            $this->name = [];
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName ...$name
     * @return static
     */
    public function setName(FHIRMedicinalProductDefinitionName ...$name): self
    {
        if ([] === $name) {
            unset($this->name);
            return $this;
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[]
     */
    public function getCrossReference(): array
    {
        return $this->crossReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference>
     */
    public function getCrossReferenceIterator(): iterable
    {
        if (!isset($this->crossReference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->crossReference);
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference $crossReference
     * @return static
     */
    public function addCrossReference(FHIRMedicinalProductDefinitionCrossReference $crossReference): self
    {
        if (!isset($this->crossReference)) {
            $this->crossReference = [];
        }
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference ...$crossReference
     * @return static
     */
    public function setCrossReference(FHIRMedicinalProductDefinitionCrossReference ...$crossReference): self
    {
        if ([] === $crossReference) {
            unset($this->crossReference);
            return $this;
        }
        $this->crossReference = $crossReference;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[]
     */
    public function getOperation(): array
    {
        return $this->operation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation>
     */
    public function getOperationIterator(): iterable
    {
        if (!isset($this->operation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->operation);
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation $operation
     * @return static
     */
    public function addOperation(FHIRMedicinalProductDefinitionOperation $operation): self
    {
        if (!isset($this->operation)) {
            $this->operation = [];
        }
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation ...$operation
     * @return static
     */
    public function setOperation(FHIRMedicinalProductDefinitionOperation ...$operation): self
    {
        if ([] === $operation) {
            unset($this->operation);
            return $this;
        }
        $this->operation = $operation;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[]
     */
    public function getCharacteristic(): array
    {
        return $this->characteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic>
     */
    public function getCharacteristicIterator(): iterable
    {
        if (!isset($this->characteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->characteristic);
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic $characteristic
     * @return static
     */
    public function addCharacteristic(FHIRMedicinalProductDefinitionCharacteristic $characteristic): self
    {
        if (!isset($this->characteristic)) {
            $this->characteristic = [];
        }
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic ...$characteristic
     * @return static
     */
    public function setCharacteristic(FHIRMedicinalProductDefinitionCharacteristic ...$characteristic): self
    {
        if ([] === $characteristic) {
            unset($this->characteristic);
            return $this;
        }
        $this->characteristic = $characteristic;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            $v = $this->getCombinedPharmaceuticalDoseForm();
            foreach($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
                        $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            $v = $this->getLegalStatusOfSupply();
            foreach($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LEGAL_STATUS_OF_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
                        $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = [];
                    }
                    $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            $v = $this->getAdditionalMonitoringIndicator();
            foreach($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
                        $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_MEASURES])) {
            $v = $this->getSpecialMeasures();
            foreach($validationRules[self::FIELD_SPECIAL_MEASURES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIAL_MEASURES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_MEASURES])) {
                        $errs[self::FIELD_SPECIAL_MEASURES] = [];
                    }
                    $errs[self::FIELD_SPECIAL_MEASURES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
            $v = $this->getPediatricUseIndicator();
            foreach($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PEDIATRIC_USE_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
                        $errs[self::FIELD_PEDIATRIC_USE_INDICATOR] = [];
                    }
                    $errs[self::FIELD_PEDIATRIC_USE_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MARKETING_STATUS])) {
            $v = $this->getMarketingStatus();
            foreach($validationRules[self::FIELD_MARKETING_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MARKETING_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MARKETING_STATUS])) {
                        $errs[self::FIELD_MARKETING_STATUS] = [];
                    }
                    $errs[self::FIELD_MARKETING_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            $v = $this->getPackagedMedicinalProduct();
            foreach($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                        $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPRISED_OF])) {
            $v = $this->getComprisedOf();
            foreach($validationRules[self::FIELD_COMPRISED_OF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPRISED_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPRISED_OF])) {
                        $errs[self::FIELD_COMPRISED_OF] = [];
                    }
                    $errs[self::FIELD_COMPRISED_OF][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_IMPURITY])) {
            $v = $this->getImpurity();
            foreach($validationRules[self::FIELD_IMPURITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPURITY])) {
                        $errs[self::FIELD_IMPURITY] = [];
                    }
                    $errs[self::FIELD_IMPURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTACHED_DOCUMENT])) {
            $v = $this->getAttachedDocument();
            foreach($validationRules[self::FIELD_ATTACHED_DOCUMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ATTACHED_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTACHED_DOCUMENT])) {
                        $errs[self::FIELD_ATTACHED_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_ATTACHED_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MASTER_FILE])) {
            $v = $this->getMasterFile();
            foreach($validationRules[self::FIELD_MASTER_FILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MASTER_FILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MASTER_FILE])) {
                        $errs[self::FIELD_MASTER_FILE] = [];
                    }
                    $errs[self::FIELD_MASTER_FILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_TRIAL])) {
            $v = $this->getClinicalTrial();
            foreach($validationRules[self::FIELD_CLINICAL_TRIAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLINICAL_TRIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_TRIAL])) {
                        $errs[self::FIELD_CLINICAL_TRIAL] = [];
                    }
                    $errs[self::FIELD_CLINICAL_TRIAL][$rule] = $err;
                }
            }
        }
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
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CROSS_REFERENCE])) {
            $v = $this->getCrossReference();
            foreach($validationRules[self::FIELD_CROSS_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CROSS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CROSS_REFERENCE])) {
                        $errs[self::FIELD_CROSS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CROSS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC])) {
            $v = $this->getCharacteristic();
            foreach($validationRules[self::FIELD_CHARACTERISTIC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC])) {
                        $errs[self::FIELD_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductDefinition)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOMAIN === $cen) {
                $type->setDomain(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_DATE === $cen) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM === $cen) {
                $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROUTE === $cen) {
                $type->addRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INDICATION === $cen) {
                $type->setIndication(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LEGAL_STATUS_OF_SUPPLY === $cen) {
                $type->setLegalStatusOfSupply(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIONAL_MONITORING_INDICATOR === $cen) {
                $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIAL_MEASURES === $cen) {
                $type->addSpecialMeasures(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PEDIATRIC_USE_INDICATOR === $cen) {
                $type->setPediatricUseIndicator(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASSIFICATION === $cen) {
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MARKETING_STATUS === $cen) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PACKAGED_MEDICINAL_PRODUCT === $cen) {
                $type->addPackagedMedicinalProduct(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPRISED_OF === $cen) {
                $type->addComprisedOf(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INGREDIENT === $cen) {
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPURITY === $cen) {
                $type->addImpurity(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ATTACHED_DOCUMENT === $cen) {
                $type->addAttachedDocument(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MASTER_FILE === $cen) {
                $type->addMasterFile(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRMedicinalProductDefinitionContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLINICAL_TRIAL === $cen) {
                $type->addClinicalTrial(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->addCode(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->addName(FHIRMedicinalProductDefinitionName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CROSS_REFERENCE === $cen) {
                $type->addCrossReference(FHIRMedicinalProductDefinitionCrossReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATION === $cen) {
                $type->addOperation(FHIRMedicinalProductDefinitionOperation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARACTERISTIC === $cen) {
                $type->addCharacteristic(FHIRMedicinalProductDefinitionCharacteristic::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            if (isset($type->version)) {
                $type->version->setValue((string)$attributes[self::FIELD_VERSION]);
                $type->_setVersionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS_DATE])) {
            if (isset($type->statusDate)) {
                $type->statusDate->setValue((string)$attributes[self::FIELD_STATUS_DATE]);
                $type->_setStatusDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatusDate((string)$attributes[self::FIELD_STATUS_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INDICATION])) {
            if (isset($type->indication)) {
                $type->indication->setValue((string)$attributes[self::FIELD_INDICATION]);
                $type->_setIndicationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIndication((string)$attributes[self::FIELD_INDICATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->openRootNode('MedicinalProductDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->version) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION]) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->_getFormattedValue());
        }
        if (isset($this->statusDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS_DATE]) {
            $xw->writeAttribute(self::FIELD_STATUS_DATE, $this->statusDate->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->indication) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INDICATION]) {
            $xw->writeAttribute(self::FIELD_INDICATION, $this->indication->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->domain)) {
            $xw->startElement(self::FIELD_DOMAIN);
            $this->domain->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSION]
                || $this->version->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSION]);
            $xw->endElement();
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
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->combinedPharmaceuticalDoseForm)) {
            $xw->startElement(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM);
            $this->combinedPharmaceuticalDoseForm->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->route)) {
            foreach ($this->route as $v) {
                $xw->startElement(self::FIELD_ROUTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->indication)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INDICATION]
                || $this->indication->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INDICATION);
            $this->indication->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INDICATION]);
            $xw->endElement();
        }
        if (isset($this->legalStatusOfSupply)) {
            $xw->startElement(self::FIELD_LEGAL_STATUS_OF_SUPPLY);
            $this->legalStatusOfSupply->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->additionalMonitoringIndicator)) {
            $xw->startElement(self::FIELD_ADDITIONAL_MONITORING_INDICATOR);
            $this->additionalMonitoringIndicator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specialMeasures)) {
            foreach ($this->specialMeasures as $v) {
                $xw->startElement(self::FIELD_SPECIAL_MEASURES);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->pediatricUseIndicator)) {
            $xw->startElement(self::FIELD_PEDIATRIC_USE_INDICATOR);
            $this->pediatricUseIndicator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classification)) {
            foreach ($this->classification as $v) {
                $xw->startElement(self::FIELD_CLASSIFICATION);
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
        if (isset($this->packagedMedicinalProduct)) {
            foreach ($this->packagedMedicinalProduct as $v) {
                $xw->startElement(self::FIELD_PACKAGED_MEDICINAL_PRODUCT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->comprisedOf)) {
            foreach ($this->comprisedOf as $v) {
                $xw->startElement(self::FIELD_COMPRISED_OF);
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
        if (isset($this->impurity)) {
            foreach ($this->impurity as $v) {
                $xw->startElement(self::FIELD_IMPURITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->attachedDocument)) {
            foreach ($this->attachedDocument as $v) {
                $xw->startElement(self::FIELD_ATTACHED_DOCUMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->masterFile)) {
            foreach ($this->masterFile as $v) {
                $xw->startElement(self::FIELD_MASTER_FILE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->clinicalTrial)) {
            foreach ($this->clinicalTrial as $v) {
                $xw->startElement(self::FIELD_CLINICAL_TRIAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            foreach ($this->code as $v) {
                $xw->startElement(self::FIELD_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name)) {
            foreach ($this->name as $v) {
                $xw->startElement(self::FIELD_NAME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->crossReference)) {
            foreach ($this->crossReference as $v) {
                $xw->startElement(self::FIELD_CROSS_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->operation)) {
            foreach ($this->operation as $v) {
                $xw->startElement(self::FIELD_OPERATION);
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
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductDefinition)) {
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
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_IDENTIFIER]) || isset($json[self::FIELD_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_IDENTIFIER, $json) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIER] ?? null;
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    json: [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_TYPE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DOMAIN]) || array_key_exists(self::FIELD_DOMAIN, $json)) {
            $type->setDomain(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_DOMAIN],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VERSION]) || isset($json[self::FIELD_VERSION_EXT]) || array_key_exists(self::FIELD_VERSION, $json) || array_key_exists(self::FIELD_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_VERSION] ?? null;
            $ext = (array)($json[self::FIELD_VERSION_EXT] ?? []);
            $type->setVersion(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS]) || array_key_exists(self::FIELD_STATUS, $json)) {
            $type->setStatus(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_STATUS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS_DATE]) || isset($json[self::FIELD_STATUS_DATE_EXT]) || array_key_exists(self::FIELD_STATUS_DATE, $json) || array_key_exists(self::FIELD_STATUS_DATE_EXT, $json)) {
            $value = $json[self::FIELD_STATUS_DATE] ?? null;
            $ext = (array)($json[self::FIELD_STATUS_DATE_EXT] ?? []);
            $type->setStatusDate(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (array)($json[self::FIELD_DESCRIPTION_EXT] ?? []);
            $type->setDescription(FHIRMarkdown::jsonUnserialize(
                json: [FHIRMarkdown::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]) || array_key_exists(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $json)) {
            $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ROUTE]) || array_key_exists(self::FIELD_ROUTE, $json)) {
            $vs = $json[self::FIELD_ROUTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRoute(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INDICATION]) || isset($json[self::FIELD_INDICATION_EXT]) || array_key_exists(self::FIELD_INDICATION, $json) || array_key_exists(self::FIELD_INDICATION_EXT, $json)) {
            $value = $json[self::FIELD_INDICATION] ?? null;
            $ext = (array)($json[self::FIELD_INDICATION_EXT] ?? []);
            $type->setIndication(FHIRMarkdown::jsonUnserialize(
                json: [FHIRMarkdown::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LEGAL_STATUS_OF_SUPPLY]) || array_key_exists(self::FIELD_LEGAL_STATUS_OF_SUPPLY, $json)) {
            $type->setLegalStatusOfSupply(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_LEGAL_STATUS_OF_SUPPLY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]) || array_key_exists(self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $json)) {
            $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_ADDITIONAL_MONITORING_INDICATOR],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SPECIAL_MEASURES]) || array_key_exists(self::FIELD_SPECIAL_MEASURES, $json)) {
            $vs = $json[self::FIELD_SPECIAL_MEASURES];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSpecialMeasures(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PEDIATRIC_USE_INDICATOR]) || array_key_exists(self::FIELD_PEDIATRIC_USE_INDICATOR, $json)) {
            $type->setPediatricUseIndicator(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_PEDIATRIC_USE_INDICATOR],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CLASSIFICATION]) || array_key_exists(self::FIELD_CLASSIFICATION, $json)) {
            $vs = $json[self::FIELD_CLASSIFICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addClassification(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MARKETING_STATUS]) || array_key_exists(self::FIELD_MARKETING_STATUS, $json)) {
            $vs = $json[self::FIELD_MARKETING_STATUS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMarketingStatus(FHIRMarketingStatus::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]) || array_key_exists(self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $json)) {
            $vs = $json[self::FIELD_PACKAGED_MEDICINAL_PRODUCT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPackagedMedicinalProduct(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_COMPRISED_OF]) || array_key_exists(self::FIELD_COMPRISED_OF, $json)) {
            $vs = $json[self::FIELD_COMPRISED_OF];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addComprisedOf(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INGREDIENT]) || array_key_exists(self::FIELD_INGREDIENT, $json)) {
            $vs = $json[self::FIELD_INGREDIENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIngredient(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_IMPURITY]) || array_key_exists(self::FIELD_IMPURITY, $json)) {
            $vs = $json[self::FIELD_IMPURITY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addImpurity(FHIRCodeableReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ATTACHED_DOCUMENT]) || array_key_exists(self::FIELD_ATTACHED_DOCUMENT, $json)) {
            $vs = $json[self::FIELD_ATTACHED_DOCUMENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAttachedDocument(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MASTER_FILE]) || array_key_exists(self::FIELD_MASTER_FILE, $json)) {
            $vs = $json[self::FIELD_MASTER_FILE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMasterFile(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CONTACT]) || array_key_exists(self::FIELD_CONTACT, $json)) {
            $vs = $json[self::FIELD_CONTACT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContact(FHIRMedicinalProductDefinitionContact::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CLINICAL_TRIAL]) || array_key_exists(self::FIELD_CLINICAL_TRIAL, $json)) {
            $vs = $json[self::FIELD_CLINICAL_TRIAL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addClinicalTrial(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $vs = $json[self::FIELD_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCode(FHIRCoding::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_NAME]) || array_key_exists(self::FIELD_NAME, $json)) {
            $vs = $json[self::FIELD_NAME];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addName(FHIRMedicinalProductDefinitionName::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CROSS_REFERENCE]) || array_key_exists(self::FIELD_CROSS_REFERENCE, $json)) {
            $vs = $json[self::FIELD_CROSS_REFERENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCrossReference(FHIRMedicinalProductDefinitionCrossReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_OPERATION]) || array_key_exists(self::FIELD_OPERATION, $json)) {
            $vs = $json[self::FIELD_OPERATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOperation(FHIRMedicinalProductDefinitionOperation::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CHARACTERISTIC]) || array_key_exists(self::FIELD_CHARACTERISTIC, $json)) {
            $vs = $json[self::FIELD_CHARACTERISTIC];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCharacteristic(FHIRMedicinalProductDefinitionCharacteristic::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
            $vals = [];
            $exts = [];
            foreach ($this->identifier as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->identifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_identifier = $exts;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->domain)) {
            $out->domain = $this->domain;
        }
        if (isset($this->version)) {
            if (null !== ($val = $this->version->getValue())) {
                $out->version = $val;
            }
            $ext = $this->version->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_version = $ext;
            }
        }
        if (isset($this->status)) {
            $out->status = $this->status;
        }
        if (isset($this->statusDate)) {
            if (null !== ($val = $this->statusDate->getValue())) {
                $out->statusDate = $val;
            }
            $ext = $this->statusDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_statusDate = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->combinedPharmaceuticalDoseForm)) {
            $out->combinedPharmaceuticalDoseForm = $this->combinedPharmaceuticalDoseForm;
        }
        if (isset($this->route) && [] !== $this->route) {
            $out->route = $this->route;
        }
        if (isset($this->indication)) {
            if (null !== ($val = $this->indication->getValue())) {
                $out->indication = $val;
            }
            $ext = $this->indication->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_indication = $ext;
            }
        }
        if (isset($this->legalStatusOfSupply)) {
            $out->legalStatusOfSupply = $this->legalStatusOfSupply;
        }
        if (isset($this->additionalMonitoringIndicator)) {
            $out->additionalMonitoringIndicator = $this->additionalMonitoringIndicator;
        }
        if (isset($this->specialMeasures) && [] !== $this->specialMeasures) {
            $out->specialMeasures = $this->specialMeasures;
        }
        if (isset($this->pediatricUseIndicator)) {
            $out->pediatricUseIndicator = $this->pediatricUseIndicator;
        }
        if (isset($this->classification) && [] !== $this->classification) {
            $out->classification = $this->classification;
        }
        if (isset($this->marketingStatus) && [] !== $this->marketingStatus) {
            $out->marketingStatus = $this->marketingStatus;
        }
        if (isset($this->packagedMedicinalProduct) && [] !== $this->packagedMedicinalProduct) {
            $out->packagedMedicinalProduct = $this->packagedMedicinalProduct;
        }
        if (isset($this->comprisedOf) && [] !== $this->comprisedOf) {
            $out->comprisedOf = $this->comprisedOf;
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            $out->ingredient = $this->ingredient;
        }
        if (isset($this->impurity) && [] !== $this->impurity) {
            $out->impurity = $this->impurity;
        }
        if (isset($this->attachedDocument) && [] !== $this->attachedDocument) {
            $out->attachedDocument = $this->attachedDocument;
        }
        if (isset($this->masterFile) && [] !== $this->masterFile) {
            $out->masterFile = $this->masterFile;
        }
        if (isset($this->contact) && [] !== $this->contact) {
            $out->contact = $this->contact;
        }
        if (isset($this->clinicalTrial) && [] !== $this->clinicalTrial) {
            $out->clinicalTrial = $this->clinicalTrial;
        }
        if (isset($this->code) && [] !== $this->code) {
            $out->code = $this->code;
        }
        if (isset($this->name) && [] !== $this->name) {
            $out->name = $this->name;
        }
        if (isset($this->crossReference) && [] !== $this->crossReference) {
            $out->crossReference = $this->crossReference;
        }
        if (isset($this->operation) && [] !== $this->operation) {
            $out->operation = $this->operation;
        }
        if (isset($this->characteristic) && [] !== $this->characteristic) {
            $out->characteristic = $this->characteristic;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}